<?php

namespace App\Http\Controllers;

use view;
use App\Models\Paket;
use App\Models\Penyewaan;
use App\Models\Pesanan;
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
        $pesanan->save();

        return redirect()->route('user.pesanan')->with('success', 'Saat ini pesananmu sedang menunggu jawaban dari admin');
    }

}
