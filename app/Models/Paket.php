<?php

namespace App\Models;

use App\Models\GambarPaket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paket extends Model
{
    use HasFactory;

    protected $table = 'paket';

    protected $guarded = ['id'];

    public function kategorinya()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }

    public function banner()
    {
        return $this->hasOne(GambarPaket::class, 'id_paket', 'id');
    }
}
