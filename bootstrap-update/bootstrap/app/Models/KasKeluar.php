<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasKeluar extends Model
{
    use HasFactory;
    protected $table = 'kaskeluar';
    protected $primaryKey = "id";
    protected $fillable = [
        'tanggal',
        'deskripsi',
        'jumlah'
    ];
    // Jika menggunakan timestamps
    public $timestamps = false;

    // Mendefinisikan tipe data untuk kolom tertentu jika diperlukan
    protected $casts = [
        'tanggal' => 'date', // memastikan tanggal di-cast sebagai objek Date
        'jumlah' => 'integer' // memastikan jumlah di-cast sebagai integer
    ];

    public function scopeMonthlyExpenses($query, $year, $month)
    {
        return $query->whereYear('tanggal', $year)
                     ->whereMonth('tanggal', $month)
                     ->sum('jumlah');
    }
}
