<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisTransaksi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_jenis_transaksi');
    }
}
