<?php

namespace App\Http\Controllers\User;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TransaksiController;

class PesanController extends Controller
{
    public function index()
    {
        // TransaksiController::statusTransaksi();

        $invoice = TransaksiController::jmlTagihan();

        $pesanan = Pesanan::where('id_user', auth()->user()->id)->get();

        return view('user.pesanan', compact('pesanan', 'invoice'));
    }

    public static function tglID($tanggal)
    {
        $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $date = explode('-', $tanggal);
        $tgl = $date[2];
        $bln = (int) $date[1];
        $thn = $date[0];
        return $tgl." ".$bulan[$bln]." ".$thn;
    }

    public function metodePembayaran($id)
    {
        $pesanan = Pesanan::find($id);
        if($pesanan->id_user == auth()->user()->id){
            return view('user.pembayaran', compact('pesanan'));
        } else {
            abort(401);
        }
    }
}
