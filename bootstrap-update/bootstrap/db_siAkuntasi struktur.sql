
CREATE DATABASE IF NOT EXISTS `db_siakuntansi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_siakuntansi`;


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
