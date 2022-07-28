<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\User\PesanController;

class AdminPesananController extends Controller
{
    public function index()
    {
        // TransaksiController::statusTransaksi();
        
        $pesanan = Pesanan::latest()->paginate(10);
        
        return view('admin.pesanan.index', compact('pesanan'));
    }

    public function detail($id)
    {
        $pesanan = Pesanan::find($id);

        return view('admin.pesanan.detail', compact('pesanan'));
    }

    public function terima($id)
    {
        $pesanan = Pesanan::find($id);

        $pesanan->status = 'diterima';
        $pesanan->save();
        return redirect()->route('admin.pesanan');
    }

    public function tolak($id)
    {
        $pesanan = Pesanan::find($id);

        $pesanan->status = 'ditolak';
        $pesanan->save();
        return redirect()->route('admin.pesanan');
    }

    public function filterPesanan(Request $request)
    {
        $awal = $request->awal;
        $akhir = $request->akhir;
        $pesanan = Pesanan::whereBetween($request->tgl, [$awal, $akhir])
                    ->get();
        
        $no = 1;
        foreach($pesanan as $data){
        ?>
        <tr>
            <th scope="row"><?=$no?></th>
            <td><?= $data->paketnya->nama?></td>
            <td><?= $data->lokasi ?></td>
            <td><?= $data->alamat_acara ?></td>
            <td><?= PesanController::tglID($data->tgl_acara) ?></td>
            <td><?= PesanController::tglID($data->tgl_kembali) ?></td>
            <td>
                <?php if ($data->status == 'menunggu') {
                ?>
                <span class="badge badge-warning"><?= $data->status ?></span>                      
                <?php
                }
                elseif ($data->status == 'diterima') {
                ?>
                <span class="badge badge-success"><?= $data->status ?></span>                      
                <?php
                }
                elseif ($data->status == 'ditolak') {
                ?>
                <span class="badge badge-danger"><?= $data->status ?></span>    
                <?php
                }
                elseif ($data->status == 'menunggu DP') {
                ?>
                <span class="badge badge-primary"><?= $data->status ?></span>
                <?php
                }               
                elseif ($data->status == 'DP Masuk') {
                ?>
                <span class="badge badge-success"><?= $data->status ?></span>
                <?php
                } ?>  
            </td>
            <td>
            <?php if ($data->status == 'menunggu'){
                ?>
                <a href="{{ route('admin.pesanan.respons' , ['id' => $data->id]) }}" class="btn btn-primary">Respons</a>
                <?php
            } ?>
            </td>
        </tr>  
        <?php
        }
    }
}
