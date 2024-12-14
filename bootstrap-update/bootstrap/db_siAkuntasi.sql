-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2024 at 07:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siakuntansi`
--
CREATE DATABASE IF NOT EXISTS `db_siakuntansi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_siakuntansi`;

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

DROP TABLE IF EXISTS `gaji`;
CREATE TABLE `gaji` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL,
  `lokasi_kerja` varchar(20) DEFAULT NULL,
  `bulan` varchar(15) DEFAULT NULL,
  `hadir` int(11) DEFAULT NULL,
  `sakit` int(11) DEFAULT NULL,
  `ijin` int(11) DEFAULT NULL,
  `alpha` int(11) DEFAULT NULL,
  `cuti` int(11) DEFAULT NULL,
  `jumlah_hari_kerja` int(11) DEFAULT NULL,
  `gaji_bulanan` decimal(10,2) DEFAULT NULL,
  `tunjangan` decimal(10,2) DEFAULT NULL,
  `keterangan` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id`, `nama`, `jabatan`, `lokasi_kerja`, `bulan`, `hadir`, `sakit`, `ijin`, `alpha`, `cuti`, `jumlah_hari_kerja`, `gaji_bulanan`, `tunjangan`, `keterangan`) VALUES
('G001', 'Dina Anggraeni', 'Beauty Consultant', 'Malang', 'Oktober', 24, 2, 1, 3, 1, 31, 6500000.00, 300000.00, 1),
('G002', 'Ratna Dewi', 'SPG', 'Gresik', 'Oktober', 22, 3, 1, 2, 3, 31, 3800000.00, 200000.00, 0),
('G003', 'Maya Sari', 'Supervisor', 'Krian', 'Oktober', 25, 0, 1, 2, 3, 31, 2800000.00, 600000.00, 1),
('G004', 'Lestari Kusuma', 'Beauty Consultant', 'Surabaya', 'Oktober', 23, 3, 1, 2, 2, 31, 7000000.00, 300000.00, 0),
('G005', 'Ayu Wulandari', 'SPG', 'Malang', 'Oktober', 24, 1, 0, 3, 3, 31, 3500000.00, 150000.00, 1),
('G006', 'Indah Permatasari', 'Supervisor', 'Gresik', 'Oktober', 21, 2, 0, 4, 4, 31, 2500000.00, 400000.00, 0),
('G007', 'Putri Aisyah', 'Beauty Consultant', 'Krian', 'Oktober', 24, 1, 2, 1, 3, 31, 6000000.00, 350000.00, 1),
('G008', 'Rina Kartika', 'SPG', 'Surabaya', 'Oktober', 23, 2, 0, 3, 3, 31, 4000000.00, 100000.00, 0),
('G009', 'Dewi Anjani', 'Beauty Consultant', 'Malang', 'Oktober', 22, 3, 1, 3, 2, 31, 1800000.00, 300000.00, 1),
('G010', 'Sri Hartini', 'Supervisor', 'Gresik', 'Oktober', 25, 0, 0, 4, 2, 31, 3900000.00, 500000.00, 0),
('G011', 'Rahayu Widodo', 'SPG', 'Krian', 'Oktober', 24, 2, 1, 3, 1, 31, 6800000.00, 150000.00, 1),
('G012', 'Nurul Hidayati', 'Beauty Consultant', 'Surabaya', 'Oktober', 23, 1, 2, 3, 2, 31, 2200000.00, 300000.00, 0),
('G013', 'Wulan Puspa', 'Supervisor', 'Malang', 'Oktober', 24, 1, 0, 4, 2, 31, 3600000.00, 400000.00, 1),
('G014', 'Fitri Rahmawati', 'SPG', 'Gresik', 'Oktober', 25, 0, 1, 3, 2, 31, 5900000.00, 200000.00, 0),
('G015', 'Anita Yulianti', 'Beauty Consultant', 'Krian', 'Oktober', 21, 2, 0, 5, 3, 31, 2700000.00, 250000.00, 1),
('G016', 'Novi Retno', 'SPG', 'Surabaya', 'Oktober', 22, 2, 1, 3, 3, 31, 3300000.00, 150000.00, 0),
('G017', 'Lia Mulyani', 'Supervisor', 'Malang', 'Oktober', 23, 1, 0, 4, 3, 31, 2600000.00, 500000.00, 1),
('G018', 'Melani Kurnia', 'Beauty Consultant', 'Gresik', 'Oktober', 24, 3, 1, 2, 1, 31, 6400000.00, 350000.00, 0),
('G019', 'Rini Maulida', 'SPG', 'Krian', 'Oktober', 22, 1, 2, 4, 2, 31, 4200000.00, 100000.00, 1),
('G020', 'Tiara Novita', 'Supervisor', 'Surabaya', 'Oktober', 21, 2, 0, 3, 5, 31, 1900000.00, 600000.00, 0),
('G021', 'Fani Rahma', 'Beauty Consultant', 'Malang', 'Oktober', 25, 0, 1, 3, 2, 31, 7500000.00, 300000.00, 1),
('G022', 'Citra Lestari', 'SPG', 'Gresik', 'Oktober', 24, 1, 0, 2, 4, 31, 3800000.00, 200000.00, 0),
('G023', 'Dinda Pratiwi', 'Supervisor', 'Krian', 'Oktober', 23, 2, 0, 3, 3, 31, 2900000.00, 500000.00, 1),
('G024', 'Bunga Sari', 'Beauty Consultant', 'Surabaya', 'Oktober', 24, 2, 1, 2, 2, 31, 6600000.00, 350000.00, 0),
('G025', 'Dela Anjani', 'SPG', 'Malang', 'Oktober', 22, 3, 1, 4, 1, 31, 3700000.00, 150000.00, 1),
('G026', 'Arina Rachma', 'Supervisor', 'Gresik', 'Oktober', 21, 2, 0, 3, 5, 31, 2400000.00, 600000.00, 0),
('G027', 'Rina Amelia', 'Beauty Consultant', 'Krian', 'Oktober', 25, 0, 1, 2, 3, 31, 7200000.00, 350000.00, 1),
('G028', 'Farah Suci', 'SPG', 'Surabaya', 'Oktober', 24, 2, 0, 3, 2, 31, 4300000.00, 200000.00, 0),
('G029', 'Zita Oktavia', 'Supervisor', 'Malang', 'Oktober', 23, 1, 1, 4, 2, 31, 2500000.00, 500000.00, 1),
('G030', 'Riana Mentari', 'Beauty Consultant', 'Gresik', 'Oktober', 24, 1, 0, 3, 3, 31, 6700000.00, 350000.00, 0),
('G031', 'Sari Rahayu', 'SPG', 'Krian', 'Oktober', 25, 0, 1, 2, 3, 31, 4300000.00, 200000.00, 1),
('G032', 'Sari Utami', 'Supervisor', 'Surabaya', 'Oktober', 22, 3, 1, 3, 2, 31, 2800000.00, 500000.00, 0),
('G033', 'Vira Anugerah', 'Beauty Consultant', 'Malang', 'Oktober', 24, 2, 1, 2, 2, 31, 6800000.00, 300000.00, 1),
('G034', 'Fina Puspita', 'SPG', 'Gresik', 'Oktober', 23, 2, 0, 4, 2, 31, 3600000.00, 400000.00, 0),
('G035', 'Amelia Citra', 'Supervisor', 'Krian', 'Oktober', 21, 3, 0, 3, 4, 31, 1700000.00, 150000.00, 1),
('G036', 'Ika Khadijah', 'Beauty Consultant', 'Surabaya', 'Oktober', 24, 1, 1, 3, 2, 31, 4600000.00, 350000.00, 0),
('G037', 'Indah Safitri', 'SPG', 'Malang', 'Oktober', 23, 1, 0, 4, 3, 31, 4500000.00, 350000.00, 1),
('G038', 'Clara Mardiana', 'Supervisor', 'Gresik', 'Oktober', 24, 2, 1, 2, 2, 31, 6300000.00, 300000.00, 1),
('G039', 'Rika Amelia', 'Beauty Consultant', 'Krian', 'Oktober', 22, 3, 1, 3, 2, 31, 2000000.00, 200000.00, 0),
('G040', 'Dhea Puspa', 'SPG', 'Surabaya', 'Oktober', 25, 0, 0, 4, 2, 31, 3700000.00, 500000.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kaskeluar`
--

DROP TABLE IF EXISTS `kaskeluar`;
CREATE TABLE `kaskeluar` (
  `id` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kaskeluar`
--

INSERT INTO `kaskeluar` (`id`, `tanggal`, `deskripsi`, `jumlah`) VALUES
('K001', '2024-01-05', 'Pembayaran Sewa Toko', 3000000),
('K002', '2024-01-10', 'Pembelian Bahan Baku', 1200000),
('K003', '2024-01-15', 'Pembayaran Gaji Karyawan', 5000000),
('K004', '2024-01-20', 'Biaya Iklan', 750000),
('K005', '2024-01-25', 'Pembelian Peralatan', 900000),
('K006', '2024-02-02', 'Pembayaran Listrik', 500000),
('K007', '2024-02-05', 'Biaya Transportasi', 300000),
('K008', '2024-02-10', 'Pembelian Produk Kosmetik', 2000000),
('K009', '2024-02-15', 'Biaya Administrasi', 250000),
('K010', '2024-02-20', 'Pembayaran Air', 150000),
('K011', '2024-02-28', 'Biaya Sewa Ruko', 3500000),
('K012', '2024-03-05', 'Pembayaran Gaji Karyawan', 5000000),
('K013', '2024-03-10', 'Pembelian Alat Makeup', 700000),
('K014', '2024-03-15', 'Biaya Pelatihan Karyawan', 400000),
('K015', '2024-03-20', 'Biaya Pemasaran', 1000000),
('K016', '2024-03-25', 'Pembelian Kemasaan', 600000),
('K017', '2024-04-02', 'Pembayaran Listrik', 550000),
('K018', '2024-04-05', 'Pembelian Sewa Alat', 900000),
('K019', '2024-04-10', 'Biaya Transportasi', 300000),
('K020', '2024-04-15', 'Pembayaran Air', 150000),
('K021', '2024-04-20', 'Biaya Promosi', 1500000),
('K022', '2024-04-25', 'Pembelian Stok Barang', 2000000),
('K023', '2024-05-02', 'Pembayaran Gaji Karyawan', 5000000),
('K024', '2024-05-10', 'Biaya Iklan', 750000),
('K025', '2024-05-15', 'Biaya Administrasi', 250000),
('K026', '2024-05-20', 'Pembayaran Sewa Toko', 3000000),
('K027', '2024-05-25', 'Pembelian Bahan Baku', 1200000),
('K028', '2024-06-01', 'Biaya Pelatihan Karyawan', 400000),
('K029', '2024-06-05', 'Pembelian Alat Makeup', 700000),
('K030', '2024-06-10', 'Pembayaran Listrik', 500000),
('K031', '2024-06-15', 'Biaya Promosi', 1500000),
('K032', '2024-06-20', 'Biaya Transportasi', 300000),
('K033', '2024-06-25', 'Pembelian Peralatan', 900000),
('K034', '2024-07-02', 'Pembayaran Gaji Karyawan', 5000000),
('K035', '2024-07-10', 'Biaya Iklan', 750000),
('K036', '2024-07-15', 'Pembelian Kemasaan', 600000),
('K037', '2024-07-20', 'Biaya Sewa Ruko', 3500000),
('K038', '2024-07-25', 'Pembayaran Air', 150000),
('K039', '2024-08-01', 'Biaya Administrasi', 250000),
('K040', '2024-08-05', 'Pembelian Produk Kosmetik', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `kasmasuk`
--

DROP TABLE IF EXISTS `kasmasuk`;
CREATE TABLE `kasmasuk` (
  `id` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `transaksi` varchar(255) DEFAULT NULL,
  `jumlah` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kasmasuk`
--

INSERT INTO `kasmasuk` (`id`, `tanggal`, `transaksi`, `jumlah`) VALUES
('K001', '2024-01-01', 'Penjualan Produk', 5000000.00),
('K002', '2024-01-02', 'Penjualan Online', 3500000.00),
('K003', '2024-01-03', 'Pembayaran Pelanggan', 2000000.00),
('K004', '2024-01-04', 'Penjualan Retail', 4200000.00),
('K005', '2024-01-05', 'Penjualan Grosir', 6800000.00),
('K006', '2024-01-06', 'Penjualan Offline', 3300000.00),
('K007', '2024-01-07', 'Diskon Penjualan', 1000000.00),
('K008', '2024-01-08', 'Komisi Mitra', 2500000.00),
('K009', '2024-01-09', 'Penjualan Aksesoris', 1800000.00),
('K010', '2024-01-10', 'Penjualan Produk Baru', 5500000.00),
('K011', '2024-01-11', 'Sewa Ruang Toko', 2000000.00),
('K012', '2024-01-12', 'Penjualan Khusus', 4000000.00),
('K013', '2024-01-13', 'Pembayaran Cash', 1200000.00),
('K014', '2024-01-14', 'Penjualan Musiman', 3700000.00),
('K015', '2024-01-15', 'Penjualan Online', 2800000.00),
('K016', '2024-01-16', 'Penjualan Retail', 5600000.00),
('K017', '2024-01-17', 'Penjualan Grosir', 6000000.00),
('K018', '2024-01-18', 'Penjualan Aksesoris', 1500000.00),
('K019', '2024-01-19', 'Pembayaran Pelanggan', 3400000.00),
('K020', '2024-01-20', 'Diskon Penjualan', 1000000.00),
('K021', '2024-01-21', 'Penjualan Online', 2200000.00),
('K022', '2024-01-22', 'Penjualan Produk', 4400000.00),
('K023', '2024-01-23', 'Penjualan Khusus', 5700000.00),
('K024', '2024-01-24', 'Penjualan Grosir', 6300000.00),
('K025', '2024-01-25', 'Penjualan Offline', 3800000.00),
('K026', '2024-01-26', 'Komisi Mitra', 1900000.00),
('K027', '2024-01-27', 'Sewa Ruang Toko', 2500000.00),
('K028', '2024-01-28', 'Penjualan Musiman', 4900000.00),
('K029', '2024-01-29', 'Pembayaran Cash', 1700000.00),
('K030', '2024-01-30', 'Penjualan Produk Baru', 5800000.00),
('K031', '2024-02-01', 'Penjualan Online', 3600000.00),
('K032', '2024-02-02', 'Penjualan Aksesoris', 2400000.00),
('K033', '2024-02-03', 'Pembayaran Pelanggan', 3100000.00),
('K034', '2024-02-04', 'Penjualan Grosir', 6100000.00),
('K035', '2024-02-05', 'Diskon Penjualan', 1500000.00),
('K036', '2024-02-06', 'Penjualan Retail', 4500000.00),
('K037', '2024-02-07', 'Sewa Ruang Toko', 2800000.00),
('K038', '2024-02-08', 'Komisi Mitra', 1200000.00),
('K039', '2024-02-09', 'Penjualan Khusus', 5200000.00),
('K040', '2024-02-10', 'Penjualan Offline', 3700000.00),
('K041', '2024-02-11', 'Penjualan Produk', 4900000.00),
('K042', '2024-02-12', 'Penjualan Grosir', 6500000.00),
('K043', '2024-02-13', 'Penjualan Online', 2900000.00),
('K044', '2024-02-14', 'Pembayaran Cash', 1400000.00),
('K045', '2024-02-15', 'Diskon Penjualan', 1600000.00),
('K046', '2024-02-16', 'Penjualan Musiman', 4600000.00),
('K047', '2024-02-17', 'Penjualan Khusus', 5900000.00),
('K048', '2024-02-18', 'Sewa Ruang Toko', 2300000.00),
('K049', '2024-02-19', 'Penjualan Aksesoris', 3000000.00),
('K050', '2024-02-20', 'Penjualan Retail', 4700000.00),
('K051', '2024-02-21', 'Pembayaran Pelanggan', 3400000.00),
('K052', '2024-02-22', 'Penjualan Online', 5500000.00),
('K053', '2024-02-23', 'Komisi Mitra', 1800000.00),
('K054', '2024-02-24', 'Penjualan Grosir', 6000000.00),
('K055', '2024-02-25', 'Penjualan Produk Baru', 4800000.00),
('K056', '2024-02-26', 'Diskon Penjualan', 1900000.00),
('K057', '2024-02-27', 'Sewa Ruang Toko', 2200000.00),
('K058', '2024-02-28', 'Penjualan Musiman', 5300000.00),
('K059', '2024-03-01', 'Pembayaran Cash', 3600000.00),
('K060', '2024-03-02', 'Penjualan Khusus', 4500000.00),
('K061', '2024-03-03', 'Komisi Mitra', 1500000.00),
('K062', '2024-03-04', 'Penjualan Aksesoris', 2800000.00),
('K063', '2024-03-05', 'Penjualan Grosir', 6300000.00),
('K064', '2024-03-06', 'Penjualan Online', 4200000.00),
('K065', '2024-03-07', 'Pembayaran Pelanggan', 2500000.00),
('K066', '2024-03-08', 'Diskon Penjualan', 1900000.00),
('K067', '2024-03-09', 'Penjualan Produk', 3700000.00),
('K068', '2024-03-10', 'Sewa Ruang Toko', 2300000.00),
('K069', '2024-03-11', 'Penjualan Retail', 5800000.00),
('K070', '2024-03-12', 'Komisi Mitra', 1600000.00),
('K071', '2024-03-13', 'Penjualan Khusus', 4900000.00),
('K072', '2024-03-14', 'Penjualan Musiman', 5400000.00),
('K073', '2024-03-15', 'Penjualan Aksesoris', 2700000.00),
('K074', '2024-03-16', 'Pembayaran Cash', 3100000.00),
('K075', '2024-03-17', 'Diskon Penjualan', 1500000.00),
('K076', '2024-03-18', 'Penjualan Produk Baru', 6200000.00),
('K077', '2024-03-19', 'Penjualan Offline', 3500000.00),
('K078', '2024-03-20', 'Penjualan Grosir', 4600000.00),
('K079', '2024-03-21', 'Penjualan Online', 5000000.00),
('K080', '2024-03-22', 'Komisi Mitra', 1800000.00),
('K081', '2024-03-23', 'Sewa Ruang Toko', 2100000.00),
('K082', '2024-03-24', 'Penjualan Musiman', 5900000.00),
('K083', '2024-03-25', 'Pembayaran Pelanggan', 3300000.00),
('K084', '2024-03-26', 'Diskon Penjualan', 1600000.00),
('K085', '2024-03-27', 'Penjualan Retail', 4900000.00),
('K086', '2024-03-28', 'Penjualan Aksesoris', 2800000.00),
('K087', '2024-03-29', 'Penjualan Grosir', 6700000.00),
('K088', '2024-03-30', 'Penjualan Produk', 3900000.00),
('K089', '2024-03-31', 'Pembayaran Cash', 1200000.00),
('K090', '2024-04-01', 'Penjualan Khusus', 4200000.00),
('K091', '2024-04-02', 'Penjualan Musiman', 5100000.00),
('K092', '2024-04-03', 'Sewa Ruang Toko', 2600000.00),
('K093', '2024-04-04', 'Diskon Penjualan', 1500000.00),
('K094', '2024-04-05', 'Penjualan Online', 3700000.00),
('K095', '2024-04-06', 'Komisi Mitra', 1400000.00),
('K096', '2024-04-07', 'Penjualan Grosir', 6400000.00),
('K097', '2024-04-08', 'Penjualan Produk Baru', 4800000.00),
('K098', '2024-04-09', 'Penjualan Retail', 5500000.00),
('K099', '2024-04-10', 'Pembayaran Pelanggan', 3200000.00),
('K100', '2024-04-11', 'Diskon Penjualan', 1700000.00);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

DROP TABLE IF EXISTS `pembelian`;
CREATE TABLE `pembelian` (
  `id` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `pemasok` varchar(255) NOT NULL,
  `harga` decimal(15,2) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `tanggal`, `deskripsi`, `pemasok`, `harga`, `status`) VALUES
('P001', '2024-01-01', 'Minyak Esensial 500ml', 'Supplier A', 150000.00, 'Selesai'),
('P002', '2024-01-03', 'Ekstrak Bunga 250ml', 'Supplier B', 200000.00, 'Selesai'),
('P003', '2024-01-05', 'Lidah Buaya 300ml', 'Supplier C', 100000.00, 'Dalam Proses'),
('P004', '2024-01-07', 'Aloe Vera 500ml', 'Supplier A', 180000.00, 'Selesai'),
('P005', '2024-01-09', 'Collagen 100g', 'Supplier D', 250000.00, 'Selesai'),
('P006', '2024-01-11', 'Vitamin E 50ml', 'Supplier B', 130000.00, 'Dalam Proses'),
('P007', '2024-01-13', 'Shea Butter 200g', 'Supplier E', 200000.00, 'Selesai'),
('P008', '2024-01-15', 'Ekstrak Teh Hijau 150ml', 'Supplier F', 160000.00, 'Dalam Proses'),
('P009', '2024-01-17', 'Gliserin 100ml', 'Supplier C', 110000.00, 'Selesai'),
('P010', '2024-01-19', 'Bahan Pengawet 500g', 'Supplier D', 90000.00, 'Selesai'),
('P011', '2024-01-21', 'Bahan Pewangi 250ml', 'Supplier A', 120000.00, 'Dalam Proses'),
('P012', '2024-01-23', 'Bahan Pembersih 300ml', 'Supplier B', 140000.00, 'Selesai'),
('P013', '2024-01-25', 'Ekstrak Ginseng 200ml', 'Supplier E', 170000.00, 'Dalam Proses'),
('P014', '2024-01-27', 'Kafein 100g', 'Supplier F', 150000.00, 'Selesai'),
('P015', '2024-01-29', 'Bahan Anti-Aging 100ml', 'Supplier C', 220000.00, 'Selesai'),
('P016', '2024-01-31', 'Moisturizer 250ml', 'Supplier A', 130000.00, 'Dalam Proses'),
('P017', '2024-02-01', 'Sunscreen 200ml', 'Supplier D', 160000.00, 'Selesai'),
('P018', '2024-02-03', 'Serum 30ml', 'Supplier B', 190000.00, 'Dalam Proses'),
('P019', '2024-02-05', 'Toner 150ml', 'Supplier E', 130000.00, 'Selesai'),
('P020', '2024-02-07', 'Shampoo 500ml', 'Supplier F', 150000.00, 'Dalam Proses');

-- --------------------------------------------------------

--
-- Table structure for table `pesananmasuk`
--

DROP TABLE IF EXISTS `pesananmasuk`;
CREATE TABLE `pesananmasuk` (
  `id` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `deskripsi_produk` varchar(255) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga_per_unit` decimal(15,2) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesananmasuk`
--

INSERT INTO `pesananmasuk` (`id`, `tanggal`, `deskripsi_produk`, `jumlah`, `harga_per_unit`, `status`) VALUES
('P001', '2024-01-01', 'Lipstik Matte', 100, 75000.00, 'Dikirim'),
('P002', '2024-01-02', 'Bedak Tabur', 150, 60000.00, 'Dikirim'),
('P003', '2024-01-03', 'Serum Anti-Aging', 200, 120000.00, 'Dikirim'),
('P004', '2024-01-04', 'Maskara Volume', 180, 80000.00, 'Dikirim'),
('P005', '2024-01-05', 'Foundation Cair', 250, 130000.00, 'Diproses'),
('P006', '2024-01-06', 'Eye Shadow Pallete', 300, 90000.00, 'Dikirim'),
('P007', '2024-01-07', 'Pensil Alis', 220, 50000.00, 'Dikirim'),
('P008', '2024-01-08', 'Blush On', 100, 70000.00, 'Dikirim'),
('P009', '2024-01-09', 'Lip Gloss', 150, 85000.00, 'Dikirim'),
('P010', '2024-01-10', 'BB Cream', 180, 100000.00, 'Diproses'),
('P011', '2024-01-11', 'Concealer Stick', 200, 110000.00, 'Dikirim'),
('P012', '2024-01-12', 'Lip Balm', 300, 45000.00, 'Dikirim'),
('P013', '2024-01-13', 'Eyeliner Cair', 250, 75000.00, 'Dikirim'),
('P014', '2024-01-14', 'Highlighter Stick', 120, 95000.00, 'Dikirim'),
('P015', '2024-01-15', 'Krim Pelembab', 150, 70000.00, 'Dikirim'),
('P016', '2024-01-16', 'Face Mist', 180, 80000.00, 'Dikirim'),
('P017', '2024-01-17', 'Compact Powder', 200, 60000.00, 'Dikirim'),
('P018', '2024-01-18', 'Toner Wajah', 300, 85000.00, 'Dikirim'),
('P019', '2024-01-19', 'Serum Brightening', 250, 120000.00, 'Dikirim'),
('P020', '2024-01-20', 'Lipstik Glossy', 180, 65000.00, 'Diproses'),
('P021', '2024-01-21', 'Pensil Eyeliner', 220, 55000.00, 'Dikirim'),
('P022', '2024-01-22', 'Blush On Cair', 100, 90000.00, 'Dikirim'),
('P023', '2024-01-23', 'Krim Anti-Penuaan', 150, 130000.00, 'Diproses'),
('P024', '2024-01-24', 'Serum Hydrating', 180, 140000.00, 'Dikirim'),
('P025', '2024-01-25', 'Face Cleanser', 200, 50000.00, 'Dikirim'),
('P026', '2024-01-26', 'Loose Powder', 300, 75000.00, 'Dikirim'),
('P027', '2024-01-27', 'BB Cushion', 250, 95000.00, 'Dikirim'),
('P028', '2024-01-28', 'Contour Stick', 120, 85000.00, 'Dikirim'),
('P029', '2024-01-29', 'Setting Spray', 150, 60000.00, 'Dikirim'),
('P030', '2024-01-30', 'Primer Wajah', 180, 100000.00, 'Dikirim'),
('P031', '2024-02-01', 'Masker Wajah', 200, 25000.00, 'Diproses'),
('P032', '2024-02-02', 'Parfum', 300, 150000.00, 'Dikirim'),
('P033', '2024-02-03', 'Krim Siang', 250, 70000.00, 'Dikirim'),
('P034', '2024-02-04', 'Krim Malam', 120, 80000.00, 'Dikirim'),
('P035', '2024-02-05', 'Serum Vitamin C', 150, 120000.00, 'Diproses'),
('P036', '2024-02-06', 'BB Cream', 180, 90000.00, 'Dikirim'),
('P037', '2024-02-07', 'Setting Powder', 200, 110000.00, 'Dikirim'),
('P038', '2024-02-08', 'Facial Wash', 300, 55000.00, 'Dikirim'),
('P039', '2024-02-09', 'Blush On Cream', 250, 85000.00, 'Dikirim'),
('P040', '2024-02-10', 'Serum Anti-Acne', 120, 130000.00, 'Diproses'),
('P041', '2024-02-11', 'Eyeliner Gel', 150, 65000.00, 'Dikirim'),
('P042', '2024-02-12', 'Foundation Stick', 180, 110000.00, 'Dikirim'),
('P043', '2024-02-13', 'Eye Primer', 200, 95000.00, 'Dikirim'),
('P044', '2024-02-14', 'Toner Brightening', 300, 75000.00, 'Dikirim'),
('P045', '2024-02-15', 'Lip Gloss', 250, 50000.00, 'Diproses'),
('P046', '2024-02-16', 'Compact Powder', 120, 60000.00, 'Dikirim'),
('P047', '2024-02-17', 'Lip Balm SPF', 150, 40000.00, 'Dikirim'),
('P048', '2024-02-18', 'Serum Pore Minimizer', 180, 100000.00, 'Dikirim'),
('P049', '2024-02-19', 'Face Cream', 200, 80000.00, 'Diproses'),
('P050', '2024-02-20', 'Maskara Curling', 300, 85000.00, 'Dikirim'),
('P051', '2024-02-21', 'Face Oil', 250, 120000.00, 'Dikirim'),
('P052', '2024-02-22', 'Lip Liner', 120, 45000.00, 'Dikirim'),
('P053', '2024-02-23', 'Serum Wajah', 150, 100000.00, 'Diproses'),
('P054', '2024-02-24', 'Blush On Powder', 180, 70000.00, 'Dikirim'),
('P055', '2024-02-25', 'Krim Siang SPF', 200, 110000.00, 'Dikirim'),
('P056', '2024-02-26', 'Toner Anti-Aging', 300, 130000.00, 'Dikirim'),
('P057', '2024-02-27', 'Face Scrub', 250, 50000.00, 'Dikirim'),
('P058', '2024-02-28', 'Lip Tint', 120, 60000.00, 'Diproses'),
('P059', '2024-03-01', 'Eyeliner Pencil', 150, 35000.00, 'Dikirim'),
('P060', '2024-03-02', 'Foundation Cushion', 180, 150000.00, 'Dikirim'),
('P061', '2024-03-03', 'Parfum Mini', 200, 75000.00, 'Dikirim'),
('P062', '2024-03-04', 'Krim Mata', 300, 120000.00, 'Dikirim'),
('P063', '2024-03-05', 'Face Mask', 250, 25000.00, 'Dikirim'),
('P064', '2024-03-06', 'Lip Stain', 120, 85000.00, 'Diproses'),
('P065', '2024-03-07', 'BB Cream Anti-Acne', 150, 110000.00, 'Dikirim'),
('P066', '2024-03-08', 'Krim Whitening', 180, 90000.00, 'Dikirim'),
('P067', '2024-03-09', 'Pensil Alis', 200, 45000.00, 'Dikirim'),
('P068', '2024-03-10', 'Serum Wajah', 300, 120000.00, 'Dikirim'),
('P069', '2024-03-11', 'Maskara Waterproof', 250, 85000.00, 'Dikirim'),
('P070', '2024-03-12', 'Setting Spray', 120, 60000.00, 'Dikirim');

-- --------------------------------------------------------

--
-- Table structure for table `stok_bahan`
--

DROP TABLE IF EXISTS `stok_bahan`;
CREATE TABLE `stok_bahan` (
  `id` varchar(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `bahan_baku` varchar(255) DEFAULT NULL,
  `penanggung_jawab` varchar(100) DEFAULT NULL,
  `jumlah_stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stok_bahan`
--

INSERT INTO `stok_bahan` (`id`, `tanggal`, `bahan_baku`, `penanggung_jawab`, `jumlah_stok`) VALUES
('S001', '2024-01-01', 'Minyak Esensial', 'Andi', 150),
('S002', '2024-01-02', 'Ekstrak Bunga', 'Budi', 100),
('S003', '2024-01-03', 'Aloe Vera', 'Citra', 200),
('S004', '2024-01-04', 'Vitamin E', 'Dwi', 250),
('S005', '2024-01-05', 'Gliserin', 'Eko', 120),
('S006', '2024-01-06', 'Minyak Jojoba', 'Fajar', 180),
('S007', '2024-01-07', 'Shea Butter', 'Gita', 75),
('S008', '2024-01-08', 'Lidah Buaya', 'Hani', 300),
('S009', '2024-01-09', 'Ekstrak Teh Hijau', 'Iwan', 200),
('S010', '2024-01-10', 'Minyak Zaitun', 'Joko', 160),
('S011', '2024-01-11', 'Collagen', 'Leni', 130),
('S012', '2024-01-12', 'Asam Hialuronat', 'Mita', 220),
('S013', '2024-01-13', 'Kafein', 'Nia', 90),
('S014', '2024-01-14', 'Bahan Pewangi', 'Oka', 160),
('S015', '2024-01-15', 'Bahan Pengawet', 'Pasha', 180),
('S016', '2024-01-16', 'Ekstrak Almond', 'Qori', 200),
('S017', '2024-01-17', 'Ekstrak Ginseng', 'Rani', 100),
('S018', '2024-01-18', 'Bahan Pembersih', 'Sari', 140),
('S019', '2024-01-19', 'Bahan Anti-Aging', 'Tia', 90),
('S020', '2024-01-20', 'Bahan Pelembab', 'Uli', 250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kaskeluar`
--
ALTER TABLE `kaskeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kasmasuk`
--
ALTER TABLE `kasmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesananmasuk`
--
ALTER TABLE `pesananmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_bahan`
--
ALTER TABLE `stok_bahan`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
