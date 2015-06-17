-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2015 at 10:00 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang1`
--

CREATE TABLE IF NOT EXISTS `barang1` (
  `id` int(11) NOT NULL,
  `kategori` int(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `s` int(100) NOT NULL,
  `m` int(100) NOT NULL,
  `l` int(100) NOT NULL,
  `xl` int(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `berat` int(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang1`
--

INSERT INTO `barang1` (`id`, `kategori`, `nama_barang`, `s`, `m`, `l`, `xl`, `ukuran`, `stok`, `berat`, `harga`, `gambar`, `deskripsi`) VALUES
(14, 2, 'Jersey Juventus Second', 3, 1, 3, 3, 0, 0, 20, 10000, 'gbr_20150617203658.jpg', 'sdasfdsf'),
(15, 1, 'MU Baru 2015', 2, 2, 1, 2, 0, 0, 3, 10000, 'gbr_20150617205510.jpg', 'Jersey MU'),
(16, 3, 'Sepatu Adidas', 0, -2, 0, 0, 45, 3, 2, 200000, 'gbr_20150617205700.jpg', 'adidas');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` enum('paid','unconfirmed','confirmed','unpaid','pengiriman','batal') NOT NULL,
  `bukti` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `date`, `user_id`, `status`, `bukti`) VALUES
(7, '2015-06-17 00:00:00', 2, 'paid', ''),
(8, '2015-06-17 00:00:00', 2, 'unconfirmed', ''),
(9, '2015-06-17 00:00:00', 2, 'unconfirmed', ''),
(10, '2015-06-17 00:00:00', 2, 'confirmed', ''),
(11, '2015-06-17 00:00:00', 2, 'unconfirmed', ''),
(12, '2015-06-17 00:00:00', 4, 'unconfirmed', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori1`
--

CREATE TABLE IF NOT EXISTS `kategori1` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori1`
--

INSERT INTO `kategori1` (`id`, `kategori`) VALUES
(1, 'Jersey Baru'),
(2, 'Jersey Second'),
(3, 'Sepatu Futsal');

-- --------------------------------------------------------

--
-- Table structure for table `konfirm_pembayaran`
--

CREATE TABLE IF NOT EXISTS `konfirm_pembayaran` (
  `id_invoice` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `dari_bank` varchar(20) NOT NULL,
  `nama_pemilik` varchar(20) NOT NULL,
  `tujuan_transfer` varchar(30) NOT NULL,
  `jumlah_transfer` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `scan_struk` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) NOT NULL,
  `invoice_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `qty` int(3) NOT NULL,
  `price` int(9) NOT NULL,
  `options` text NOT NULL,
  `pengiriman` int(11) NOT NULL,
  `total_harga` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `invoice_id`, `product_id`, `product_name`, `qty`, `price`, `options`, `pengiriman`, `total_harga`) VALUES
(7, 7, 13, 'Baju Second Bola', 2, 20000, 'm', 2, 1),
(8, 10, 14, 'Jersey Juventus Second', 2, 20000, 'm', 1, 1),
(9, 11, 15, 'MU Baru 2015', 1, 10000, 'l', 0, 0),
(10, 12, 16, 'Sepatu Adidas', 2, 400000, 'm', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `password`, `email`) VALUES
(3, 'asdasdasdasd', 'asdasdasd', 'asdasdasd@asdasdasd'),
(4, 'zxczxc@zxczxc', 'ecb97ffafc1798cd2f67', 'zxczxc@zxczxc');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id_status` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `nama`) VALUES
('1', 'Belum Transfer'),
('2', 'Sudah Transfer'),
('3', 'Dikirim'),
('4', 'Dibatalkan');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE IF NOT EXISTS `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `testimoni` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `kota`, `testimoni`) VALUES
(1, 'asdad', 'asdczxczxczc', 'adfvaef adfvgaref evfaregavre'),
(2, 'Danur Wijayanto', 'Solo', 'Sanga bagus dan bla bla bla'),
(3, 'zxcvcv', 'gdhdgjhgj', 'dghmhgkliuoyufy'),
(4, 'danur', 'wija', 'bla asdfla;skdf a oapefk');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `no_hp`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `password`) VALUES
(2, 'danur wijayanto00', 'mobinity.fx@gmail.com', '085642180514', 'benowo rt 06 rw 08 ngringoooo', 'Jawa Tengah', 'Surakartaaa', 'Jaten', 'ngringo', '123123'),
(3, 'danoer', 'widjayanto@gmail.com', '085642180514', 'semarang', 'q2ee', 'asdczxczxczc', 'zxcada', 'benowo', 'asdasdasd'),
(4, 'Danur Wijayanto', 'danurwijayanto@gmail.com', '085642180514', 'benowo rt 06 rw 08 ngringo', 'Jawa Tengah', 'Surakarta', 'Jaten', 'Ngringo', 'nvidiagt440**//');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang1`
--
ALTER TABLE `barang1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori1`
--
ALTER TABLE `kategori1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfirm_pembayaran`
--
ALTER TABLE `konfirm_pembayaran`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang1`
--
ALTER TABLE `barang1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kategori1`
--
ALTER TABLE `kategori1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
