<?php

namespace Database\Seeders;

use App\Models\Pembelian;
use Illuminate\Database\Seeder;

class PembelianSeeder extends Seeder
{
    public function run()
    {
        Pembelian::insert([
            ['id' => 'P001', 'tanggal' => '2024-01-01', 'deskripsi' => 'Minyak Esensial 500ml', 'pemasok' => 'Supplier A', 'harga' => 150000.00, 'status' => 'Belum dibayar'],
            ['id' => 'P002', 'tanggal' => '2024-01-03', 'deskripsi' => 'Ekstrak Bunga 250ml', 'pemasok' => 'Supplier B', 'harga' => 200000.00, 'status' => 'Belum dibayar'],
            ['id' => 'P003', 'tanggal' => '2024-01-05', 'deskripsi' => 'Lidah Buaya 300ml', 'pemasok' => 'Supplier C', 'harga' => 100000.00, 'status' => 'Belum dibayar'],
            ['id' => 'P004', 'tanggal' => '2024-01-08', 'deskripsi' => 'Botol Kaca 50 pcs', 'pemasok' => 'Supplier D', 'harga' => 250000.00, 'status' => 'Belum dibayar'],
            ['id' => 'P005', 'tanggal' => '2024-01-10', 'deskripsi' => 'Kemasan Plastik 100 pcs', 'pemasok' => 'Supplier E', 'harga' => 120000.00, 'status' => 'Sudah dibayar'],
            ['id' => 'P006', 'tanggal' => '2024-01-12', 'deskripsi' => 'Label Produk 200 pcs', 'pemasok' => 'Supplier F', 'harga' => 50000.00, 'status' => 'Sudah dibayar'],
            ['id' => 'P007', 'tanggal' => '2024-01-15', 'deskripsi' => 'Parfum Pewangi 1L', 'pemasok' => 'Supplier G', 'harga' => 300000.00, 'status' => 'Belum dibayar'],
            ['id' => 'P008', 'tanggal' => '2024-01-18', 'deskripsi' => 'Pewarna Cair 500ml', 'pemasok' => 'Supplier H', 'harga' => 80000.00, 'status' => 'Sudah dibayar'],
            ['id' => 'P009', 'tanggal' => '2024-01-20', 'deskripsi' => 'Agen Pengental 250g', 'pemasok' => 'Supplier I', 'harga' => 45000.00, 'status' => 'Belum dibayar'],
            ['id' => 'P010', 'tanggal' => '2024-01-22', 'deskripsi' => 'Botol Plastik 50 pcs', 'pemasok' => 'Supplier J', 'harga' => 150000.00, 'status' => 'Sudah dibayar'],
            ['id' => 'P011', 'tanggal' => '2024-01-25', 'deskripsi' => 'Essens Bunga Mawar 500ml', 'pemasok' => 'Supplier K', 'harga' => 180000.00, 'status' => 'Belum dibayar'],
            ['id' => 'P012', 'tanggal' => '2024-01-28', 'deskripsi' => 'Stiker Logo 100 pcs', 'pemasok' => 'Supplier L', 'harga' => 60000.00, 'status' => 'Sudah dibayar'],
            ['id' => 'P013', 'tanggal' => '2024-02-01', 'deskripsi' => 'Bahan Pengawet 500g', 'pemasok' => 'Supplier M', 'harga' => 70000.00, 'status' => 'Belum dibayar'],
            ['id' => 'P014', 'tanggal' => '2024-02-03', 'deskripsi' => 'Karton Pembungkus 50 pcs', 'pemasok' => 'Supplier N', 'harga' => 100000.00, 'status' => 'Sudah dibayar'],
            ['id' => 'P015', 'tanggal' => '2024-02-05', 'deskripsi' => 'Essens Lemon 500ml', 'pemasok' => 'Supplier O', 'harga' => 160000.00, 'status' => 'Belum dibayar'],
        ]);
    }
}
