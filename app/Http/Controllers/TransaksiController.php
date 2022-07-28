<?php

namespace App\Http\Controllers;

use view;
use Carbon\Carbon;
use App\Models\Paket;
use GuzzleHttp\Client;
use App\Models\Pesanan;
use App\Models\Penyewaan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index($id)
    {
        $sewa = Paket::find($id);

        return view('user.form-sewa', compact('sewa'));
    }

    public function tagihan()
    {
        TransaksiController::statusTransaksi();

        $transaksi = Transaksi::select('transaksi.*', 'pesanan.id_paket', 'pesanan.id_user')
                    ->join('pesanan', 'transaksi.id_pesanan', '=', 'pesanan.id')
                    ->where('id_user', auth()->user()->id)
                    ->where('transaksi.status', '!=', 'settlement')
                    ->where('transaksi.expired', '>', Carbon::now()->format('Y-m-d H:i:s'))
                    ->get();

        $invoice = TransaksiController::jmlTagihan();
        
        return view('user.list-tagihan', compact('transaksi', 'invoice'));
    }

    public static function jmlTagihan()
    {
        $transaksi = Transaksi::select('transaksi.*', 'pesanan.id_paket', 'pesanan.id_user')
                    ->join('pesanan', 'transaksi.id_pesanan', '=', 'pesanan.id')
                    ->where('id_user', auth()->user()->id)
                    ->where('transaksi.status', '!=', 'settlement')
                    ->where('transaksi.expired', '>', Carbon::now()->format('Y-m-d H:i:s'))
                    ->get();
        $jml = count($transaksi);
        return $jml;
    }

    public function simpanSewa(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tgl_acara' => 'required',
            'tgl_kembali' => 'required',
            'lokasi' => 'required',
            'alamat_acara' => 'required',
            'nama_paket' => 'required',
            'catatan' => 'nullable',
        ]);

        $pesanan = new Pesanan();
        $pesanan->id_user = auth()->user()->id;
        $pesanan->id_paket = $request->nama_paket;
        $pesanan->lokasi = $request->lokasi;
        $pesanan->alamat_acara = $request->alamat_acara;
        $pesanan->tgl_acara = date('Y-m-d', strtotime($request->tgl_acara));
        $pesanan->tgl_kembali = date('Y-m-d', strtotime($request->tgl_kembali));
        $pesanan->catatan = $request->catatan;
        $pesanan->nama = $request->nama;
        $pesanan->save();

        return redirect()->route('user.pesanan')->with('success', 'Saat ini pesananmu sedang menunggu jawaban dari admin');
    }

    public function bayar(Request $request)
    {
        $transaksi = Transaksi::latest()->first();

        $tgl_transaksi = Carbon::today()->toDateString();
        $tgl_transaksi = explode('-', $tgl_transaksi);
        $tgl_transaksi = $tgl_transaksi[0].$tgl_transaksi[1].$tgl_transaksi[2];
        if($transaksi){
            $kode = $transaksi->kd_transaksi;
            $tgl = substr($kode, 0, 8);
            if ($tgl == $tgl_transaksi){
                $id = (int) substr($kode, 8, 3);
                $id++;
                $kd_transaksi = $tgl_transaksi . sprintf("%03s", $id);
            } else {
                $kd_transaksi = $tgl_transaksi . '001';
            }
        } else {
            $kd_transaksi = $tgl_transaksi . '001';
        }

        $transaksi = new Transaksi();
        $transaksi->kd_transaksi = $kd_transaksi;
        $transaksi->id_pesanan = $request->id_pesanan;
        $transaksi->pembayaran = $request->bayar;
        if($request->bayar == 'dp'){
            $transaksi->total = $request->nominal;
            $data = self::bankTF($kd_transaksi, $request->bank, $request->nominal);
        } else {
            $pesanan = Pesanan::find($request->id_pesanan);
            $transaksi->total = $pesanan->paketnya->harga;
            $data = self::bankTF($kd_transaksi, $request->bank, $pesanan->paketnya->harga);
        }
        $transaksi->metode = $data->va_numbers[0]->bank;
        $transaksi->rekening = $data->va_numbers[0]->va_number;
        $transaksi->expired = Carbon::now()->addDay()->format('Y-m-d H:i:s');
        $transaksi->status = $data->transaction_status;
        $transaksi->save();

        $pesanan = Pesanan::find($request->id_pesanan);
        $pesanan->status = 'menunggu DP';
        $pesanan->save();

        $data = encrypt($kd_transaksi);
        return redirect()->route('user.tagihan.show', ['id' => $data]);
        // return view('user.tagihan', compact('transaksi'));
    }

    public function showTagihan($id)
    {
        $kode = decrypt($id);
        $transaksi = Transaksi::find($kode);
        
        return view('user.tagihan', compact('transaksi'));
    }

    public static function bankTF($kd_transaksi, $bank, $nominal)
    {
        $client = new Client();
        $response = $client->post('https://api.sandbox.midtrans.com/v2/charge',
            [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Basic '.env('MIDTRANS_SERVER_KEY'),
                    'Content-Type' => 'application/json'
                ],
                'body' => json_encode([
                    'payment_type' => 'bank_transfer',
                    'transaction_details' => [
                        'order_id' => $kd_transaksi,
                        'gross_amount' => $nominal
                    ], 
                    'bank_transfer' => [
                        'bank' => $bank
                    ]
                ])
            ]);
        $data = json_decode($response->getBody());
        return $data;
    }

    public static function cekStatusTransaksi($orderID)
    {
        $client = new Client();
        $response = $client->get('https://api.sandbox.midtrans.com/v2/'.$orderID.'/status',
            [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Basic '.env('MIDTRANS_SERVER_KEY'),
                    'Content-Type' => 'application/json'
                ]
            ]);
        $data = json_decode($response->getBody());
        return $data;
    }

    public static function statusTransaksi()
    {
        $transaksi = Transaksi::all();
        for($i = 0; $i < count($transaksi); $i++){
            $data[] = TransaksiController::cekStatusTransaksi($transaksi[$i]->kd_transaksi);
            if($data[$i]->transaction_status == 'settlement'){
                $transaksi[$i]->status = $data[$i]->transaction_status;
                $pesanan = Pesanan::find($transaksi[$i]->id_pesanan);
                $pesanan->status = 'DP Masuk';
                $transaksi[$i]->save();
                $pesanan->save();
            }
        }
    }
}
