<?php

namespace Database\Seeders;

use App\Models\PesananMasuk;
use Illuminate\Database\Seeder;

class PesananMasukSeeder extends Seeder
{
    public function run()
    {
        PesananMasuk::insert([
            ['id' => 'PM001', 'tanggal' => '2024-01-01', 'deskripsi_produk' => 'Lipstik Matte', 'jumlah' => 100, 'harga_per_unit' => 75000.00, 'status' => 'sudah dibayar'],
            ['id' => 'PM002', 'tanggal' => '2024-01-02', 'deskripsi_produk' => 'Bedak Tabur', 'jumlah' => 150, 'harga_per_unit' => 60000.00, 'status' => 'sudah dibayar'],
            ['id' => 'PM003', 'tanggal' => '2024-01-03', 'deskripsi_produk' => 'Serum Anti-Aging', 'jumlah' => 200, 'harga_per_unit' => 120000.00, 'status' => 'sudah dibayar'],
            ['id' => 'PM004', 'tanggal' => '2024-01-04', 'deskripsi_produk' => 'Maskara Waterproof', 'jumlah' => 80, 'harga_per_unit' => 85000.00, 'status' => 'belum dibayar'],
            ['id' => 'PM005', 'tanggal' => '2024-01-05', 'deskripsi_produk' => 'Foundation Liquid', 'jumlah' => 50, 'harga_per_unit' => 110000.00, 'status' => 'belum dibayar'],
            ['id' => 'PM006', 'tanggal' => '2024-01-06', 'deskripsi_produk' => 'Blush On Powder', 'jumlah' => 120, 'harga_per_unit' => 95000.00, 'status' => 'sudah dibayar'],
            ['id' => 'PM007', 'tanggal' => '2024-01-07', 'deskripsi_produk' => 'Toner Wajah', 'jumlah' => 180, 'harga_per_unit' => 70000.00, 'status' => 'belum dibayar'],
            ['id' => 'PM008', 'tanggal' => '2024-01-08', 'deskripsi_produk' => 'Concealer Stick', 'jumlah' => 75, 'harga_per_unit' => 65000.00, 'status' => 'sudah dibayar'],
            ['id' => 'PM009', 'tanggal' => '2024-01-09', 'deskripsi_produk' => 'Eyeshadow Palette', 'jumlah' => 90, 'harga_per_unit' => 125000.00, 'status' => 'sudah dibayar'],
            ['id' => 'PM010', 'tanggal' => '2024-01-10', 'deskripsi_produk' => 'Setting Spray', 'jumlah' => 130, 'harga_per_unit' => 80000.00, 'status' => 'belum dibayar'],
            ['id' => 'PM011', 'tanggal' => '2024-01-11', 'deskripsi_produk' => 'Face Serum Vitamin C', 'jumlah' => 60, 'harga_per_unit' => 140000.00, 'status' => 'sudah dibayar'],
            ['id' => 'PM012', 'tanggal' => '2024-01-12', 'deskripsi_produk' => 'Lip Balm Natural', 'jumlah' => 200, 'harga_per_unit' => 30000.00, 'status' => 'sudah dibayar'],
            ['id' => 'PM013', 'tanggal' => '2024-01-13', 'deskripsi_produk' => 'Moisturizer Gel', 'jumlah' => 100, 'harga_per_unit' => 95000.00, 'status' => 'belum dibayar'],
            ['id' => 'PM014', 'tanggal' => '2024-01-14', 'deskripsi_produk' => 'Sunscreen SPF 50', 'jumlah' => 170, 'harga_per_unit' => 105000.00, 'status' => 'sudah dibayar'],
            ['id' => 'PM015', 'tanggal' => '2024-01-15', 'deskripsi_produk' => 'Eyebrow Pencil', 'jumlah' => 140, 'harga_per_unit' => 45000.00, 'status' => 'belum dibayar'],
            ['id' => 'PM016', 'tanggal' => '2024-01-16', 'deskripsi_produk' => 'Face Mask Hydrating', 'jumlah' => 250, 'harga_per_unit' => 55000.00, 'status' => 'sudah dibayar'],
            ['id' => 'PM017', 'tanggal' => '2024-01-17', 'deskripsi_produk' => 'Highlighter Liquid', 'jumlah' => 110, 'harga_per_unit' => 90000.00, 'status' => 'belum dibayar'],
            ['id' => 'PM018', 'tanggal' => '2024-01-18', 'deskripsi_produk' => 'Micellar Water', 'jumlah' => 160, 'harga_per_unit' => 60000.00, 'status' => 'sudah dibayar'],
            ['id' => 'PM019', 'tanggal' => '2024-01-19', 'deskripsi_produk' => 'Body Lotion Whitening', 'jumlah' => 220, 'harga_per_unit' => 75000.00, 'status' => 'sudah dibayar'],
            ['id' => 'PM020', 'tanggal' => '2024-01-20', 'deskripsi_produk' => 'Hand Cream', 'jumlah' => 190, 'harga_per_unit' => 50000.00, 'status' => 'belum dibayar'],
        ]);
    }
}
