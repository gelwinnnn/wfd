<?php

namespace Database\Seeders;

use App\Models\StokBahan;
use Illuminate\Database\Seeder;

class StokBahanSeeder extends Seeder
{
    public function run()
    {
        StokBahan::insert([
            ['id' => 'S001', 'tanggal' => '2024-01-01', 'bahan_baku' => 'Minyak Esensial', 'penanggung_jawab' => 'Andi', 'jumlah_stok' => 150, 'pembelian_id' => 'P001', 'pesanan_masuk_id' => 'PM001'],
            ['id' => 'S002', 'tanggal' => '2024-01-03', 'bahan_baku' => 'Botol Kaca', 'penanggung_jawab' => 'Budi', 'jumlah_stok' => 200, 'pembelian_id' => 'P002', 'pesanan_masuk_id' => 'PM002'],
            ['id' => 'S003', 'tanggal' => '2024-01-05', 'bahan_baku' => 'Label Produk', 'penanggung_jawab' => 'Cici', 'jumlah_stok' => 300, 'pembelian_id' => 'P003', 'pesanan_masuk_id' => 'PM003'],
            ['id' => 'S004', 'tanggal' => '2024-01-10', 'bahan_baku' => 'Kemasan Plastik', 'penanggung_jawab' => 'Dedi', 'jumlah_stok' => 400, 'pembelian_id' => 'P004', 'pesanan_masuk_id' => 'PM004'],
            ['id' => 'S005', 'tanggal' => '2024-01-15', 'bahan_baku' => 'Parfum Pewangi', 'penanggung_jawab' => 'Eka', 'jumlah_stok' => 100, 'pembelian_id' => 'P005', 'pesanan_masuk_id' => 'PM005'],
            ['id' => 'S006', 'tanggal' => '2024-01-20', 'bahan_baku' => 'Pewarna Cair', 'penanggung_jawab' => 'Fikri', 'jumlah_stok' => 180, 'pembelian_id' => 'P006', 'pesanan_masuk_id' => 'PM006'],
            ['id' => 'S007', 'tanggal' => '2024-01-25', 'bahan_baku' => 'Agen Pengental', 'penanggung_jawab' => 'Gina', 'jumlah_stok' => 120, 'pembelian_id' => 'P007', 'pesanan_masuk_id' => 'PM007'],
            ['id' => 'S008', 'tanggal' => '2024-02-01', 'bahan_baku' => 'Botol Plastik', 'penanggung_jawab' => 'Hadi', 'jumlah_stok' => 230, 'pembelian_id' => 'P008', 'pesanan_masuk_id' => 'PM008'],
            ['id' => 'S009', 'tanggal' => '2024-02-05', 'bahan_baku' => 'Stiker Logo', 'penanggung_jawab' => 'Indra', 'jumlah_stok' => 170, 'pembelian_id' => 'P009', 'pesanan_masuk_id' => 'PM009'],
            ['id' => 'S010', 'tanggal' => '2024-02-10', 'bahan_baku' => 'Kemasan Kotak', 'penanggung_jawab' => 'Joko', 'jumlah_stok' => 250, 'pembelian_id' => 'P010', 'pesanan_masuk_id' => 'PM010'],
            ['id' => 'S011', 'tanggal' => '2024-02-15', 'bahan_baku' => 'Essens Bunga Mawar', 'penanggung_jawab' => 'Kiki', 'jumlah_stok' => 150, 'pembelian_id' => 'P011', 'pesanan_masuk_id' => 'PM011'],
            ['id' => 'S012', 'tanggal' => '2024-02-20', 'bahan_baku' => 'Bahan Pengawet', 'penanggung_jawab' => 'Lina', 'jumlah_stok' => 200, 'pembelian_id' => 'P012', 'pesanan_masuk_id' => 'PM012'],
            ['id' => 'S013', 'tanggal' => '2024-02-25', 'bahan_baku' => 'Karton Pembungkus', 'penanggung_jawab' => 'Miko', 'jumlah_stok' => 300, 'pembelian_id' => 'P013', 'pesanan_masuk_id' => 'PM013'],
            ['id' => 'S014', 'tanggal' => '2024-03-01', 'bahan_baku' => 'Essens Lemon', 'penanggung_jawab' => 'Nina', 'jumlah_stok' => 140, 'pembelian_id' => 'P014', 'pesanan_masuk_id' => 'PM014'],
            ['id' => 'S015', 'tanggal' => '2024-03-05', 'bahan_baku' => 'Essens Lavender', 'penanggung_jawab' => 'Omar', 'jumlah_stok' => 160, 'pembelian_id' => 'P015', 'pesanan_masuk_id' => 'PM015'],
            ['id' => 'S016', 'tanggal' => '2024-03-10', 'bahan_baku' => 'Essens Vanilla', 'penanggung_jawab' => 'Pipit', 'jumlah_stok' => 150, 'pembelian_id' => 'P015', 'pesanan_masuk_id' => 'PM016'],
            ['id' => 'S017', 'tanggal' => '2024-03-15', 'bahan_baku' => 'Essens Coklat', 'penanggung_jawab' => 'Qila', 'jumlah_stok' => 160, 'pembelian_id' => 'P007', 'pesanan_masuk_id' => 'PM017'],
            ['id' => 'S018', 'tanggal' => '2024-03-20', 'bahan_baku' => 'Essens Mint', 'penanggung_jawab' => 'Rizky', 'jumlah_stok' => 170, 'pembelian_id' => 'P012', 'pesanan_masuk_id' => 'PM018'],
            ['id' => 'S019', 'tanggal' => '2024-03-25', 'bahan_baku' => 'Essens Melati', 'penanggung_jawab' => 'Santi', 'jumlah_stok' => 180, 'pembelian_id' => 'P013', 'pesanan_masuk_id' => 'PM019'],
            ['id' => 'S020', 'tanggal' => '2024-04-01', 'bahan_baku' => 'Essens Green Tea', 'penanggung_jawab' => 'Tino', 'jumlah_stok' => 190, 'pembelian_id' => 'P002', 'pesanan_masuk_id' => 'PM020'],
            ['id' => 'S021', 'tanggal' => '2024-04-05', 'bahan_baku' => 'Essens Lemon Tea', 'penanggung_jawab' => 'Umi', 'jumlah_stok' => 200, 'pembelian_id' => 'P001', 'pesanan_masuk_id' => 'PM005'],
            ['id' => 'S022', 'tanggal' => '2024-04-10', 'bahan_baku' => 'Essens Kayu Manis', 'penanggung_jawab' => 'Vino', 'jumlah_stok' => 210, 'pembelian_id' => 'P012', 'pesanan_masuk_id' => 'PM013'],
            ['id' => 'S023', 'tanggal' => '2024-04-15', 'bahan_baku' => 'Essens Eucalyptus', 'penanggung_jawab' => 'Wina', 'jumlah_stok' => 220, 'pembelian_id' => 'P003', 'pesanan_masuk_id' => 'PM011'],
            ['id' => 'S024', 'tanggal' => '2024-04-20', 'bahan_baku' => 'Essens Orange', 'penanggung_jawab' => 'Xenia', 'jumlah_stok' => 230, 'pembelian_id' => 'P014', 'pesanan_masuk_id' => 'PM004'],
            ['id' => 'S025', 'tanggal' => '2024-04-25', 'bahan_baku' => 'Essens Anggur', 'penanggung_jawab' => 'Yogi', 'jumlah_stok' => 240, 'pembelian_id' => 'P008', 'pesanan_masuk_id' => 'PM015'],
            ['id' => 'S026', 'tanggal' => '2024-05-01', 'bahan_baku' => 'Essens Strawberry', 'penanggung_jawab' => 'Zara', 'jumlah_stok' => 250, 'pembelian_id' => 'P009', 'pesanan_masuk_id' => 'PM002'],
            ['id' => 'S027', 'tanggal' => '2024-05-05', 'bahan_baku' => 'Essens Ceri', 'penanggung_jawab' => 'Adi', 'jumlah_stok' => 260, 'pembelian_id' => 'P007', 'pesanan_masuk_id' => 'PM012'],
            ['id' => 'S028', 'tanggal' => '2024-05-10', 'bahan_baku' => 'Essens Apel', 'penanggung_jawab' => 'Bobby', 'jumlah_stok' => 270, 'pembelian_id' => 'P005', 'pesanan_masuk_id' => 'PM008'],
            ['id' => 'S029', 'tanggal' => '2024-05-15', 'bahan_baku' => 'Essens Jeruk Nipis', 'penanggung_jawab' => 'Clara', 'jumlah_stok' => 280, 'pembelian_id' => 'P010', 'pesanan_masuk_id' => 'PM019'],
            ['id' => 'S030', 'tanggal' => '2024-05-20', 'bahan_baku' => 'Essens Peppermint', 'penanggung_jawab' => 'Dimas', 'jumlah_stok' => 290, 'pembelian_id' => 'P013', 'pesanan_masuk_id' => 'PM020'],
        ]);
    }
}
