<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengembalian;
use App\Models\Pesanan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class AdminPengembalianController extends Controller
{
    public function index()
    {
        $pengembalian = Pesanan::where('tgl_kembali', today())->where('status', 'DP Masuk')->get();

        return view('admin.pengembalian.index', compact('pengembalian'));
    }

    public function pengembalian($id)
    {
        $pesanan = Pesanan::find($id);

        return view('admin.pengembalian.form', compact('pesanan'));
    }

    public function simpanPengembalian(Request $request)
    {
        $id_pesanan = $request->id_pesanan;
        $denda = $request->denda;

        $pengembalian = new Pengembalian();
        $pengembalian->id_pesanan = $id_pesanan;
        if($denda != null){
            $pengembalian->denda = $denda;
        }
        $pengembalian->save();
        return redirect()->route('admin.pengembalian');
    }

    public static function cekStatus($id_pesanan)
    {
        $status = Pengembalian::where('id_pesanan', $id_pesanan)->get();

        if(count($status) > 0){
            return 'Selesai';
        }
    }
}
