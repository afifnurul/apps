<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pengembalian;

class AdminLaporanController extends Controller
{
    public function penyewaan()
    {
        $penyewaan = Pesanan::where('status', 'DP Masuk')->get();

        return view('admin.laporan.penyewaan', compact('penyewaan'));
    }

    public function cetakPenyewaan()
    {
        $penyewaan = Pesanan::where('status', 'DP Masuk')->get();

        return view('admin.laporan.cetak-penyewaan', compact('penyewaan'));
    }

    public function pengembalian()
    {
        $pengembalian = Pengembalian::all();

        return view('admin.laporan.pengembalian', compact('pengembalian'));
    }

    public function cetakPengembalian()
    {
        $pengembalian = Pengembalian::all();

        return view('admin.laporan.cetak-pengembalian', compact('pengembalian'));
    }
}
