<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasMasuk extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'kasmasuk';

    // Primary key yang digunakan oleh tabel
    protected $primaryKey = 'id';

    // Primary key tidak auto-increment (karena tipe VARCHAR)
    public $incrementing = false;

    // Tipe data untuk primary key
    protected $keyType = 'string';

    // Mengatur timestamps menjadi false jika tidak menggunakan created_at dan updated_at
    public $timestamps = false;

    // Definisikan kolom yang dapat diisi (fillable)
    protected $fillable = [
        'id',
        'tanggal',
        'transaksi',
        'jumlah'
    ];

    public function scopeMonthlyIncome($query, $year, $month)
    {
        return $query->whereYear('tanggal', $year)
            ->whereMonth('tanggal', $month)
            ->sum('jumlah');
    }
}
