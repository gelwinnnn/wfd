<?php

namespace Database\Seeders;

use App\Models\KasKeluar;
use Illuminate\Database\Seeder;

class KasKeluarSeeder extends Seeder
{
    public function run()
    {
        KasKeluar::insert([
            ['id' => 'K001', 'tanggal' => '2024-01-05', 'deskripsi' => 'Pembayaran Sewa Toko', 'jumlah' => 3000000],
            ['id' => 'K002', 'tanggal' => '2024-01-10', 'deskripsi' => 'Pembelian Bahan Baku', 'jumlah' => 1200000],
            ['id' => 'K003', 'tanggal' => '2024-01-15', 'deskripsi' => 'Pembayaran Gaji Karyawan', 'jumlah' => 5000000],
            ['id' => 'K004', 'tanggal' => '2024-01-20', 'deskripsi' => 'Biaya Iklan', 'jumlah' => 750000],
            ['id' => 'K005', 'tanggal' => '2024-01-25', 'deskripsi' => 'Pembelian Peralatan', 'jumlah' => 900000],
            ['id' => 'K006', 'tanggal' => '2024-02-01', 'deskripsi' => 'Biaya Transportasi', 'jumlah' => 450000],
            ['id' => 'K007', 'tanggal' => '2024-02-05', 'deskripsi' => 'Pembelian Bahan Kemasan', 'jumlah' => 650000],
            ['id' => 'K008', 'tanggal' => '2024-02-10', 'deskripsi' => 'Pembayaran Listrik', 'jumlah' => 500000],
            ['id' => 'K009', 'tanggal' => '2024-02-15', 'deskripsi' => 'Biaya Air', 'jumlah' => 200000],
            ['id' => 'K010', 'tanggal' => '2024-02-20', 'deskripsi' => 'Pembelian Alat Tulis Kantor', 'jumlah' => 150000],
            ['id' => 'K011', 'tanggal' => '2024-02-25', 'deskripsi' => 'Biaya Pelatihan Karyawan', 'jumlah' => 1000000],
            ['id' => 'K012', 'tanggal' => '2024-03-01', 'deskripsi' => 'Pembelian Seragam Karyawan', 'jumlah' => 800000],
            ['id' => 'K013', 'tanggal' => '2024-03-05', 'deskripsi' => 'Biaya Konsultasi Keuangan', 'jumlah' => 1200000],
            ['id' => 'K014', 'tanggal' => '2024-03-10', 'deskripsi' => 'Pembelian Software Akuntansi', 'jumlah' => 2000000],
            ['id' => 'K015', 'tanggal' => '2024-03-15', 'deskripsi' => 'Pembayaran Asuransi', 'jumlah' => 300000],
        ]);
    }
}
