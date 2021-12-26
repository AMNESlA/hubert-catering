-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 03:10 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catering`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `username` varchar(6) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(3) NOT NULL,
  `nama_menu` text NOT NULL,
  `harga_menu` int(8) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga_menu`, `gambar`) VALUES
(1, 'Paket 1 Seafood (cumi, udang, ikan, dan bakso)', 20000, ''),
(2, 'Paket 1 Vegetarian (jamur, brokoli, capcay, dan sawi)', 15000, ''),
(3, 'Paket 3 Bakaran (ayam bakar, sambal, lalap, dan terong)', 18000, ''),
(4, 'Paket 4 nasi uduk (ayam gorng, sambal, cah kangkung, dan tempe)', 18000, '');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(6) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `handphone` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `username`, `password`, `alamat`, `handphone`, `email`) VALUES
(1, 'Azriyan Arham', 'azrian', '827ccb0eea8a706c4c34a16891f84e7b', ' Jl. Mayor', ' 080808080808', 'imamz@gmail.com'),
(5, 'Abik Suleman', 'abik', '827ccb0eea8a706c4c34a16891f84e7b', 'Jl. Siliwangi No.8 Kelurahan Pandeglang ', '080808080808', 'gchchchch@chgchg'),
(6, 'Arman Maulana', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Jl. Mayor', '080808080808', 'andidarmawan@gmail.com'),
(7, 'Arie Suryo Wibowo', 'ariek', '827ccb0eea8a706c4c34a16891f84e7b', 'Jl. Kolonel', '080909090909', 'bagasahmad@gmail.com'),
(9, 'Cinta Laura', 'aries', '827ccb0eea8a706c4c34a16891f84e7b', 'Jl. Violin', '080909090909', 'erik@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(3) NOT NULL,
  `id_pelanggan` int(3) NOT NULL,
  `id_menu` int(3) NOT NULL,
  `jumlah_pembelian` int(3) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `tgl_pengiriman` date NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(3) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
