<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokBahan extends Model
{
    use HasFactory;
    protected $table = 'stok_bahan';

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
        'bahan_baku',
        'penanggung_jawab',
        'jumlah_stok'
    ];
}
