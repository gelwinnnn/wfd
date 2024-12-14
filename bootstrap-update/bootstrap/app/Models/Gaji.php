<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    use HasFactory;

    protected $table = 'gaji';
    public $timestamps = false; // Jika tidak menggunakan timestamps

    protected $fillable = [
        'id',
        'nama',
        'jabatan',
        'lokasi_kerja',
        'bulan',
        'hadir',
        'sakit',
        'ijin',
        'alpha',
        'cuti',
        'jumlah_hari_kerja',
        'gaji_bulanan',
        'tunjangan',
        'keterangan' // Menambahkan kolom keterangan
    ];

    protected $primaryKey = 'id'; // Menyesuaikan dengan kolom id
    public $incrementing = false;
    protected $keyType = 'string'; // Tipe primary key
}
