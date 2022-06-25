<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::where('id_user', auth()->user()->id)->get();

        return view('user.pesanan', compact('pesanan'));
    }

    public static function tglID($tanggal)
    {
        $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $date = explode('-', $tanggal);
        $tgl = $date[2];
        $bln = (int) $date[1];
        $thn = $date[0];
        return $tgl." ".$bulan[$bln]." ".$thn;
    }
}
