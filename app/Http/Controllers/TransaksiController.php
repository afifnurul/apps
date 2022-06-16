<?php

namespace App\Http\Controllers;

use view;
use App\Models\Paket;
use App\Models\Penyewaan;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index($id)
    {
        $sewa = Paket::find($id);

        return view('user.form-sewa', compact('sewa'));
    }

    public function simpanSewa(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tgl' => 'required',
            'lokasi' => 'required',
            'nama_paket' => 'required',
            'catatan' => 'nullable',
        ]);

        $transaksi = new Penyewaan();
        $transaksi->id_produk = $request->nama_paket;
        $transaksi->tgl_transaksi = now();
        $transaksi->lokasi_acara = $request->lokasi;
        $transaksi->tgl_acara = $request->tgl;
    }
}
