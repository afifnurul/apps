<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilUserController extends Controller
{
    public function index()
    {
        $profil = User::find(auth()->user()->id);

        return view('user.profil', compact('profil'));
    }


}
