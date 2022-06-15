<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilUserController extends Controller
{
    public function index($id)
    {
        $profil = User::find($id);

        return view('user.profil', compact('profil'));
    }


}
