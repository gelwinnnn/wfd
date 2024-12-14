<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Gaji;
use Illuminate\Database\Seeder;

class GajiSeeder extends Seeder
{
    public function run()
    {
        Gaji::insert([
            [
                'id' => 'G001',
                'nama' => 'Dina Anggraeni',
                'jabatan' => 'Beauty Consultant',
                'lokasi_kerja' => 'Malang',
                'bulan' => 'Oktober',
                'hadir' => 24,
                'sakit' => 2,
                'ijin' => 1,
                'alpha' => 3,
                'cuti' => 1,
                'jumlah_hari_kerja' => 31,
                'gaji_bulanan' => 6500000.00,
                'tunjangan' => 300000.00,
                'keterangan' => 1
            ],
            [
                'id' => 'G002',
                'nama' => 'Rina Puspitasari',
                'jabatan' => 'Marketing Executive',
                'lokasi_kerja' => 'Surabaya',
                'bulan' => 'November',
                'hadir' => 27,
                'sakit' => 1,
                'ijin' => 0,
                'alpha' => 1,
                'cuti' => 2,
                'jumlah_hari_kerja' => 30,
                'gaji_bulanan' => 7200000.00,
                'tunjangan' => 500000.00,
                'keterangan' => 1
            ],
            [
                'id' => 'G003',
                'nama' => 'Siti Nurhaliza',
                'jabatan' => 'Sales Manager',
                'lokasi_kerja' => 'Jakarta',
                'bulan' => 'September',
                'hadir' => 26,
                'sakit' => 0,
                'ijin' => 2,
                'alpha' => 0,
                'cuti' => 2,
                'jumlah_hari_kerja' => 30,
                'gaji_bulanan' => 8500000.00,
                'tunjangan' => 700000.00,
                'keterangan' => 1
            ],
            [
                'id' => 'G004',
                'nama' => 'Ahmad Fauzan',
                'jabatan' => 'Accountant',
                'lokasi_kerja' => 'Bandung',
                'bulan' => 'Desember',
                'hadir' => 25,
                'sakit' => 1,
                'ijin' => 1,
                'alpha' => 2,
                'cuti' => 1,
                'jumlah_hari_kerja' => 31,
                'gaji_bulanan' => 7800000.00,
                'tunjangan' => 400000.00,
                'keterangan' => 1
            ],
            [
                'id' => 'G005',
                'nama' => 'Budi Santoso',
                'jabatan' => 'Customer Service',
                'lokasi_kerja' => 'Surabaya',
                'bulan' => 'Oktober',
                'hadir' => 28,
                'sakit' => 0,
                'ijin' => 1,
                'alpha' => 1,
                'cuti' => 0,
                'jumlah_hari_kerja' => 30,
                'gaji_bulanan' => 6000000.00,
                'tunjangan' => 200000.00,
                'keterangan' => 1
            ],
            [
                'id' => 'G006',
                'nama' => 'Cindy Permata',
                'jabatan' => 'HR Specialist',
                'lokasi_kerja' => 'Yogyakarta',
                'bulan' => 'November',
                'hadir' => 29,
                'sakit' => 0,
                'ijin' => 0,
                'alpha' => 0,
                'cuti' => 1,
                'jumlah_hari_kerja' => 31,
                'gaji_bulanan' => 9000000.00,
                'tunjangan' => 600000.00,
                'keterangan' => 1
            ],
            [
                'id' => 'G007',
                'nama' => 'Dewi Sartika',
                'jabatan' => 'Content Creator',
                'lokasi_kerja' => 'Bali',
                'bulan' => 'Desember',
                'hadir' => 22,
                'sakit' => 1,
                'ijin' => 3,
                'alpha' => 2,
                'cuti' => 0,
                'jumlah_hari_kerja' => 31,
                'gaji_bulanan' => 7000000.00,
                'tunjangan' => 500000.00,
                'keterangan' => 1
            ],
            [
                'id' => 'G008',
                'nama' => 'Fahmi Ananda',
                'jabatan' => 'IT Support',
                'lokasi_kerja' => 'Makassar',
                'bulan' => 'September',
                'hadir' => 25,
                'sakit' => 2,
                'ijin' => 1,
                'alpha' => 0,
                'cuti' => 2,
                'jumlah_hari_kerja' => 30,
                'gaji_bulanan' => 6500000.00,
                'tunjangan' => 300000.00,
                'keterangan' => 1
            ],
            [
                'id' => 'G009',
                'nama' => 'Indra Lesmana',
                'jabatan' => 'Logistics Coordinator',
                'lokasi_kerja' => 'Semarang',
                'bulan' => 'Oktober',
                'hadir' => 23,
                'sakit' => 0,
                'ijin' => 2,
                'alpha' => 3,
                'cuti' => 1,
                'jumlah_hari_kerja' => 31,
                'gaji_bulanan' => 7400000.00,
                'tunjangan' => 450000.00,
                'keterangan' => 1
            ],
            [
                'id' => 'G010',
                'nama' => 'Kartika Putri',
                'jabatan' => 'PR Specialist',
                'lokasi_kerja' => 'Jakarta',
                'bulan' => 'November',
                'hadir' => 30,
                'sakit' => 0,
                'ijin' => 0,
                'alpha' => 0,
                'cuti' => 0,
                'jumlah_hari_kerja' => 30,
                'gaji_bulanan' => 8000000.00,
                'tunjangan' => 500000.00,
                'keterangan' => 1
            ],
        ]);
    }
}
