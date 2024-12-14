<?php

namespace Database\Seeders;

use App\Models\KasMasuk;
use Illuminate\Database\Seeder;

class KasMasukSeeder extends Seeder
{
    public function run()
    {
        KasMasuk::insert([
            ['id' => 'KM001', 'tanggal' => '2024-01-01', 'transaksi' => 'Penjualan Produk', 'jumlah' => 5000000.00],
            ['id' => 'KM002', 'tanggal' => '2024-01-02', 'transaksi' => 'Penjualan Online', 'jumlah' => 3500000.00],
            ['id' => 'KM003', 'tanggal' => '2024-01-03', 'transaksi' => 'Pembayaran Pelanggan', 'jumlah' => 2000000.00],
            ['id' => 'KM004', 'tanggal' => '2024-01-04', 'transaksi' => 'Penjualan Retail', 'jumlah' => 4200000.00],
            ['id' => 'KM005', 'tanggal' => '2024-01-05', 'transaksi' => 'Penjualan Grosir', 'jumlah' => 6800000.00],
            ['id' => 'KM006', 'tanggal' => '2024-01-06', 'transaksi' => 'Pembayaran Utang', 'jumlah' => 3000000.00],
            ['id' => 'KM007', 'tanggal' => '2024-01-07', 'transaksi' => 'Penjualan Langsung', 'jumlah' => 5500000.00],
            ['id' => 'KM008', 'tanggal' => '2024-01-08', 'transaksi' => 'Penjualan Marketplace', 'jumlah' => 2700000.00],
            ['id' => 'KM009', 'tanggal' => '2024-01-09', 'transaksi' => 'Penjualan Eceran', 'jumlah' => 4800000.00],
            ['id' => 'KM010', 'tanggal' => '2024-01-10', 'transaksi' => 'Pendapatan Lain-lain', 'jumlah' => 1500000.00],
            ['id' => 'KM011', 'tanggal' => '2024-01-11', 'transaksi' => 'Penjualan Produk Baru', 'jumlah' => 6000000.00],
            ['id' => 'KM012', 'tanggal' => '2024-01-12', 'transaksi' => 'Pembayaran Vendor', 'jumlah' => 3200000.00],
            ['id' => 'KM013', 'tanggal' => '2024-01-13', 'transaksi' => 'Penjualan Toko', 'jumlah' => 7500000.00],
            ['id' => 'KM014', 'tanggal' => '2024-01-14', 'transaksi' => 'Pembayaran Konsumen', 'jumlah' => 4000000.00],
            ['id' => 'KM015', 'tanggal' => '2024-01-15', 'transaksi' => 'Penjualan Akhir Tahun', 'jumlah' => 9000000.00],
        ]);
    }
}
