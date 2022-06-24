<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Paket;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\GambarPaket;
use App\Models\PaketDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GambarProduk;
use Illuminate\Support\Facades\File;

class AdminProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        $pakets = Paket::all();

        return view('admin.produk.index', compact('pakets', 'produk'));
    }

    public function tambahProduk()
    {
        return view('admin.produk.tambah-produk');
    }

    public function editProduk($id)
    {
        $produk = Produk::find($id);

        $gambar = GambarProduk::where('id_produk', $id)->get();
        
        return view('admin.produk.tambah-produk', compact('produk', 'gambar'));
    }

    public function tambahPaket()
    {
        $kategoris = Kategori::all();

        $produks = Produk::all();

        return view('admin.produk.tambah-paket', compact('kategoris', 'produks'));
    }

    public function editPaket($id)
    {
        $paket= Paket::find($id);

        $detail = $paket->isi_paket;
        $detail = explode(',', $detail);
        $ket = $paket->keterangan;
        $ket = explode(',', $ket);

        $produks = Produk::all();

        $kategoris = Kategori::all();

        $gambar = GambarPaket::where('id_paket', $id)->get();

        return view('admin.produk.tambah-paket', compact('paket', 'produks', 'kategoris', 'gambar', 'detail', 'ket'));
    }

    public function storePaket(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jml_tamu' => 'nullable',
            'harga' => 'required|numeric',
            'kategori' => 'required',
            'gambar-1' => 'image',
            'gambar-2' => 'image',
            'gambar-3' => 'image',
            'gambar-4' => 'image',
            'gambar-5' => 'image',
            'gambar-6' => 'image',
        ]);

        $paket  = new Paket();
        $paket->nama = $request->nama;
        $paket->harga = $request->harga;
        $paket->jml_tamu = $request->jml_tamu;
        $paket->id_kategori = $request->kategori;
        $checked    = $request->checkbox;
        $data       = $request->detail;
        $keterangan = $request->keterangan;
        foreach ($data as $key => $value) {
            if (in_array($data[$key], $checked)) {
                $paket->isi_paket .= $data[$key].',';
                $paket->keterangan .= $keterangan[$key].',';
            } else {
                $paket->isi_paket .= ',';
                $paket->keterangan .= ',';
            }
        }
        $paket->deskripsi = $request->deskripsi;
        $paket->save();

        for ($i = 1; $i <= 6; $i++) {
            if ($request->file('gambar-'.$i)) {
                $filename = date('Ymd') . $request->file('gambar-'.$i)->getClientOriginalName();//buat nama filenya
                $request->file('gambar-'.$i)->move(public_path(). '/paket/detail', $filename);//simpan fotonya ke folder public/produk/detail
                $gambar = new GambarPaket();
                $gambar->id_paket = $paket->id;
                $gambar->img = $filename;
                $gambar->save();
            }
        }

        return redirect()->route('admin.produk')->with('success', 'Paket berhasil ditambahkan');

    }

    public function updatePaket(Request $request)
    {
        $paket = Paket::find($request->id);

        for ($i = 1; $i <= 6; $i++) {
            if ($request->has('gambar-'.$i)) {
                if (isset($gambar[$i-1])){
                    $filename = date('Ymd') . $request->file('gambar-'.$i)->getClientOriginalName();
                    $move = $request->file('gambar-'.$i)->move(public_path(). '/paket/detail', $filename);
                    if ($move){
                        File::delete(public_path(). '/paket/detail/'.$request->input('picture_'.$i));
                        GambarPaket::where('id', $gambar[$i-1]->id)->update(['img' => $filename]);
                    }
                } else {
                    $filename = date('Ymd') . $request->file('gambar-'.$i)->getClientOriginalName();
                    $move = $request->file('gambar-'.$i)->move(public_path(). '/paket/detail', $filename);
                    $gambar = new GambarPaket();
                    $gambar->id_paket = $paket->id;
                    $gambar->img = $filename;
                    $gambar->save();
                }
            } else {
                if (isset($gambar[$i-1]) && $request->input('picture_'.$i) == null){
                    File::delete(public_path(). '/paket/detail/'.$gambar[$i-1]->img);
                    $gambar[$i-1]->delete();
                }
            }
        }

        $paket->nama = $request->nama;
        $paket->harga = $request->harga;
        $paket->jml_tamu = $request->jml_tamu;
        $paket->id_kategori = $request->kategori;
        $paket->isi_paket = '';
        $paket->keterangan = '';
        $checked    = $request->checkbox;
        $data       = $request->detail;
        $keterangan = $request->keterangan;
        foreach ($data as $key => $value) {
            if (in_array($data[$key], $checked)) {
                $paket->isi_paket .= $data[$key].',';
                $paket->keterangan .= $keterangan[$key].',';
            } else {
                $paket->isi_paket .= ',';
                $paket->keterangan .= ',';
            }
        }
        $paket->save();
        
        return redirect()->route('admin.produk');
    }

    public function DeletePaket($id)
    {
        $paket = Paket::find($id);
        if($paket){
            $paket->delete();
        }

        $gambar = GambarPaket::where('id_paket', $id)->get();
        if ($gambar){
            foreach($gambar as $img){
                File::delete(public_path(). '/paket/detail/'.$img->img);
                $img->delete();
            }
        }

        return redirect()->route('admin.produk');
    }

    public function storeProduk(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'gambar-1' => 'image',
            'gambar-2' => 'image',
            'gambar-3' => 'image',
            'gambar-4' => 'image',
            'gambar-5' => 'image',
            'gambar-6' => 'image',
        ]);

        $produk = new Produk();
        // simpan ke databasenya
        // sesuai nama kolom table databse =  sesuai nama form input
        $produk->nama_produk = $request->nama;
        $produk->harga = $request->harga;
        $produk->save();

        // jika ada gambarnya baru bisa masuk ke database
        for ($i = 1; $i <= 6; $i++) {
            if ($request->file('gambar-'.$i)) {
                $filename = date('Ymd') . $request->file('gambar-'.$i)->getClientOriginalName();//buat nama filenya
                $request->file('gambar-'.$i)->move(public_path(). '/produk/detail', $filename);//simpan fotonya ke folder public/produk/detail
                $gambar = new GambarProduk();
                $gambar->id_produk = $produk->id;
                $gambar->img = $filename;
                $gambar->save();
            }
        }
        
        return redirect()->route('admin.produk');
    }

    public function updateProduk(Request $request)
    {
        $produk = Produk::find($request->id);
        $gambar = GambarProduk::where('id_produk', $request->id)->get();

        for ($i = 1; $i <= 6; $i++) {
            if ($request->has('gambar-'.$i)) {
                if (isset($gambar[$i-1])){
                    $filename = date('Ymd') . $request->file('gambar-'.$i)->getClientOriginalName();
                    $move = $request->file('gambar-'.$i)->move(public_path(). '/produk/detail', $filename);
                    if ($move){
                        File::delete(public_path(). '/produk/detail/'.$request->input('picture_'.$i));
                        GambarProduk::where('id', $gambar[$i-1]->id)->update(['img' => $filename]);
                    }
                } else {
                    $filename = date('Ymd') . $request->file('gambar-'.$i)->getClientOriginalName();
                    $move = $request->file('gambar-'.$i)->move(public_path(). '/produk/detail', $filename);
                    $gambar = new GambarProduk();
                    $gambar->id_produk = $produk->id;
                    $gambar->img = $filename;
                    $gambar->save();
                }
            } else {
                if (isset($gambar[$i-1]) && $request->input('picture_'.$i) == null){
                    File::delete(public_path(). '/produk/detail/'.$gambar[$i-1]->img);
                    $gambar[$i-1]->delete();
                }
            }
        }

        $produk->nama_produk = $request->nama;
        $produk->harga = $request->harga;
        $produk->save();

        return redirect()->route('admin.produk');
    }

    public function DeleteProduk($id)
    {
        $produks = Produk::find($id);
        $gambar = GambarProduk::where('id_produk', $id)->get();
        if($gambar){
            foreach($gambar as $img){
                File::delete(public_path(). '/produk/detail/'.$img->img);
                $img->delete();
            }
        }
        $produks->delete();

        return redirect()->route('admin.produk');
    }
}
