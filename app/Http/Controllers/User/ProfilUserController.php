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


}
