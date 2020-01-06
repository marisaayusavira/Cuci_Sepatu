-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 29, 2019 at 07:18 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cuci_sepatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$0Q0fjXZtQ8FkC4JemDnEMOS3R.hzPRtmHjn5MrGAky6kG7GwxZdNS');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_sepatu`
--

CREATE TABLE `jenis_sepatu` (
  `id` int(11) NOT NULL,
  `nama_jenis_sepatu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_sepatu`
--

INSERT INTO `jenis_sepatu` (`id`, `nama_jenis_sepatu`) VALUES
(2, 'Boot'),
(3, 'Semi Boot'),
(4, 'Casual');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(14) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `jk`, `alamat`, `telp`, `username`, `password`) VALUES
(3, 'gema fajar', 'Laki-laki', 'padang', '082122855458', 'gemafajar', '$2y$10$fTxhpR.OauuhDrOuN/zBd.8yXXISc1ktt9P5SFQeaIfVH9DTOvB.u');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(10) NOT NULL,
  `nama_layanan` varchar(50) DEFAULT NULL,
  `id_jenis_sepatu` int(10) NOT NULL,
  `harga` double NOT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `id_jenis_sepatu`, `harga`, `foto`) VALUES
(12, 'Coloring + Deep Cleaning', 3, 50000, 'clean.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `faktur` varchar(25) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_pelanggan` int(10) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `total_bayar` double NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `faktur` varchar(191) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `layanan` varchar(191) NOT NULL,
  `sepatu` varchar(191) NOT NULL,
  `harga` varchar(191) NOT NULL,
  `taggal` date NOT NULL,
  `waktu` time NOT NULL,
  `jumlah` varchar(11) NOT NULL,
  `total` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`faktur`, `id_pelanggan`, `layanan`, `sepatu`, `harga`, `taggal`, `waktu`, `jumlah`, `total`, `status`) VALUES
('SC20191227045955', 6, 'Standard Clean / Quick Clean', 'Semi Boot', '40000', '2019-12-27', '05:00:01', '2', '80000', 'Pending'),
('SC20191227051619', 6, 'Standard Clean / Quick Clean', 'Semi Boot', '40000', '2019-12-27', '05:16:35', '3', '120000', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `username` varchar(191) NOT NULL,
  `aktif` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `telp`, `email`, `password`, `username`, `aktif`) VALUES
(6, 'gemafajar', 'padang', '12309876', 'gemafajar09@gmail.com', '7bedc9fd30769590c992b8f7f23738f7', 'gemafajar', 1),
(7, 'sibnagke', 'padang', '0987654321', 'gemafajar09@gmail.com', 'abecde1811866a1881231e7977bf97a0', 'bangkelu', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `jenis_sepatu`
--
ALTER TABLE `jenis_sepatu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`),
  ADD UNIQUE KEY `id_jenis_sepatu` (`id_jenis_sepatu`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`faktur`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenis_sepatu`
--
ALTER TABLE `jenis_sepatu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `layanan`
--
ALTER TABLE `layanan`
  ADD CONSTRAINT `layanan_ibfk_1` FOREIGN KEY (`id_jenis_sepatu`) REFERENCES `jenis_sepatu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
