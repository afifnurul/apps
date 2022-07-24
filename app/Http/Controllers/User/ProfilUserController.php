<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TransaksiController;

class ProfilUserController extends Controller
{
    public function index()
    {
        TransaksiController::statusTransaksi();

        $profil = User::find(auth()->user()->id);

        $invoice = TransaksiController::jmlTagihan();

        return view('user.profil', compact('profil', 'invoice'));
    }

    public function simpan(Request $request)
    {
        $profil = User::find(auth()->user()->id);
        $profil->name = $request->nama;
        $profil->email = $request->email;
        $profil->no_hp1 = $request->no_hp1;
        $profil->no_hp2 = $request->no_hp2;
        $profil->kota = $request->kota;
        $profil->alamat = $request->alamat;
        $profil->save();

        return redirect()->route('user.profil');
    }
}
