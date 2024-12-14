<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananMasuk extends Model
{
    use HasFactory;

    protected $table = 'pesananmasuk';

    public function stok_bahan()
    {
        return $this->hasMany(PesananMasuk::class, 'pesanan_masuk_id');
    }
}
