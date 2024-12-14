<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model ini
    protected $table = 'pembelian';

    // Kolom yang dapat diisi (mass-assignable)
    protected $fillable = [
        'id',
        'tanggal',
        'deskripsi',
        'pemasok',
        'harga',
        'status',
    ];

    // Menggunakan format tanggal otomatis
    protected $dates = ['tanggal'];

    // Matikan fitur timestamps jika tabel tidak memiliki kolom created_at dan updated_at
    public $timestamps = false;

    // Jika ID bukan auto-incrementing
    public $incrementing = false;

    // Tipe data ID
    protected $keyType = 'string';

    public function scopeMonthlyPurchases($query, $year, $month)
    {
        return $query->whereYear('tanggal', $year)
                     ->whereMonth('tanggal', $month)
                     ->get();
    }
    
}
