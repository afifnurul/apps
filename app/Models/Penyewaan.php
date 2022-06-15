<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewaan extends Model
{
    protected $table = 'transaksi';

    protected $guarded = [];

    public $incrementing = false;

    protected $primaryKey = 'kd_transaksi';
}
