<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminKategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();

        return view('admin.kategori.index', compact('kategoris'));
    }

    public function tambah()
    {
        return view('admin.kategori.tambah');
    }

    //simpan kategori
    public function store(Request $request) 
    {
        $request->validate([
            'kategori' => 'required'
        ]);

        $kategori = new Kategori();
        $kategori->nama = $request->kategori;
        $kategori->save();
        return redirect()->route('admin.kategori');
    }
}
