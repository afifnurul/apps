<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Paket;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\User;

class AdminHomeController extends Controller
{
    public function index()
    {
        $kategori = count(Kategori::all());

        $produk = count(Produk::all());

        $paket = count(Paket::all());

        $penyewaan = count(Pesanan::where('status', 'DP Masuk')->get());

        return view('admin.home', compact('kategori', 'produk', 'paket', 'penyewaan'));
    }

    public function editProfil()
    {
        $profil = User::find(auth()->user()->id);

        return view('admin.profile', compact('profil'));
    }
    
}
