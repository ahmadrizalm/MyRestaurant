-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2015 at 12:56 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(40) NOT NULL,
  `harga_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga_menu`) VALUES
(2101, 'Nasi Putih', 3000),
(2102, 'Ayam Goreng', 8000),
(2103, 'Mujaer Goreng', 7000),
(2104, 'Lele Goreng', 6500),
(2105, 'Nasi Rawon', 10000),
(2106, 'Nasi Pecel', 8500),
(2107, 'Tahu Telor', 8500),
(2108, 'Mie Setan', 10000),
(2109, 'Bakso Penyet', 8000),
(2110, 'Trancam', 6500),
(2201, 'Es Teh', 2000),
(2202, 'Es Jeruk', 2500),
(2203, 'Es Campur', 5000),
(2204, 'Kopi', 3000),
(2205, 'Wedang Jahe', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
`id_pesanan` int(11) NOT NULL,
  `nomor_meja` int(11) NOT NULL,
  `tanggal_pesan` datetime NOT NULL,
  `pesanan` varchar(100) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status_pemesanan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nip` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nip`, `password`, `nama`, `tgl_lahir`, `tmp_lahir`, `jabatan`) VALUES
(1001, 'fe1d8a9f01936c33598c', 'Sutrisno', '1995-12-01', 'Fak.Teknik', 'Manager'),
(1002, '3c55ed3745dcdb455a90', 'Mahendra Data', '1996-03-01', 'Fak.Teknik', 'Chef'),
(1003, '0b976e7c71f9c0980a07', 'Mardji', '1995-10-08', 'Fak.MIPA', 'Kasir'),
(1004, 'a648ab9a3e32c5f3f6e9', 'Heru Nurwarsito', '1995-11-30', 'Fak.Teknik', 'Pelayan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
 ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
