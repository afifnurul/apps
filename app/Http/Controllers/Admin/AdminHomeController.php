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
        return view('admin-template.home');
    }

    public function editProfil()
    {
        $profil = User::find(auth()->user()->id);

        return view('admin-template.profile', compact('profil'));
    }
    
}
