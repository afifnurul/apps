<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function editProfil($id)
    {
        $profil = User::find($id);

        return view('admin.profile', compact('profil'));
    }
    
}
