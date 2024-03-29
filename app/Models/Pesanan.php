<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';
    protected $guarded = ['id'];

    public function paketnya()
    {
        return $this->belongsTo(Paket::class, 'id_paket', 'id');
    }

    public function usernya()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function transaksinya()
    {
        return $this->hasOne(Transaksi::class, 'id_pesanan', 'id');
    }
}
