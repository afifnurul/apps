<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TransaksiController;

class AdminPesananController extends Controller
{
    public function index()
    {
        TransaksiController::statusTransaksi();
        
        $pesanan = Pesanan::all();
        
        return view('admin-template.pesanan.index', compact('pesanan'));
    }

    public function detail($id)
    {
        $pesanan = Pesanan::find($id);

        return view('admin-template.pesanan.detail', compact('pesanan'));
    }

    public function terima($id)
    {
        $pesanan = Pesanan::find($id);

        $pesanan->status = 'diterima';
        $pesanan->save();
        return redirect()->route('admin.pesanan');
    }

    public function tolak($id)
    {
        $pesanan = Pesanan::find($id);

        $pesanan->status = 'ditolak';
        $pesanan->save();
        return redirect()->route('admin.pesanan');
    }
}
