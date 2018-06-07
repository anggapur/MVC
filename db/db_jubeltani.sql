-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2018 at 03:03 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jubeltani2`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `BARANG_ID` int(11) NOT NULL,
  `BARANG_NAMA` varchar(30) NOT NULL,
  `BARANG_THUMBNAIL` varchar(50) NOT NULL,
  `WAKTU_BUAT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_panen`
--

CREATE TABLE `hasil_panen` (
  `HASILPANEN_ID` int(11) NOT NULL,
  `BARANG_ID` int(11) NOT NULL,
  `PETANI_ID` int(11) NOT NULL,
  `JUMLAH` int(11) NOT NULL,
  `SATUAN_ID` int(11) NOT NULL,
  `HARGA_SATUAN` int(11) NOT NULL,
  `WAKTU_BUAT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_panen_foto`
--

CREATE TABLE `hasil_panen_foto` (
  `HASILPANENFOTO_ID` int(11) NOT NULL,
  `HASILPANEN_ID` int(11) NOT NULL,
  `FILE` text NOT NULL,
  `WAKTU_BUAT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `identitas_pedagang`
--

CREATE TABLE `identitas_pedagang` (
  `PEDAGANG_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `NAMA_TOKO` varchar(30) NOT NULL,
  `ALAMAT` text NOT NULL,
  `NO_KTP` int(11) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `KECAMATAN` varchar(30) NOT NULL,
  `KOTA` varchar(30) NOT NULL,
  `WAKTU_BUAT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `identitas_petani`
--

CREATE TABLE `identitas_petani` (
  `PETANI_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `KTP` varchar(11) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `ALAMAT` text NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `KECAMATAN` varchar(30) NOT NULL,
  `KOTA` varchar(30) NOT NULL,
  `WAKTU_BUAT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas_petani`
--

INSERT INTO `identitas_petani` (`PETANI_ID`, `USER_ID`, `KTP`, `NAMA`, `ALAMAT`, `PHONE`, `KECAMATAN`, `KOTA`, `WAKTU_BUAT`) VALUES
(1, 2, '90909090', 'Pedagang Besar', 'Jalanin Aja Dulu, Denpasar', '0361 768900', 'denpasar utara', 'denpasar', '2018-06-03 00:00:00'),
(2, 3, '80808080', 'Petani Sederhana', 'Jalan Kenangan, Tabanan', '0361 90909090', 'kediri', 'tabanan', '2018-06-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `SATUAN_ID` int(11) NOT NULL,
  `SATUAN_NAMA` varchar(30) NOT NULL,
  `WAKTU_BUAT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tawar`
--

CREATE TABLE `tawar` (
  `TAWAR_ID` int(11) NOT NULL,
  `PEDAGANG_ID` int(11) NOT NULL,
  `HASILPANEN_ID` int(11) NOT NULL,
  `WAKTU_BUAT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tawar_detail`
--

CREATE TABLE `tawar_detail` (
  `TAWARDETAIL_ID` int(11) NOT NULL,
  `TAWAR_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `DESKRIPSI` text NOT NULL,
  `HARGA_PENAWARAN` varchar(30) NOT NULL,
  `STATUS_HARGA_PENAWARAN` enum('0','1','','') NOT NULL,
  `WAKTU_BUAT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `TRANSAKSI_ID` int(11) NOT NULL,
  `HASILPANEN_ID` int(11) NOT NULL,
  `PEDAGANG_ID` int(11) NOT NULL,
  `METODE_PENGIRIMAN` enum('sendiri','diantar','','') NOT NULL,
  `HARGA_SATUAN` varchar(30) NOT NULL,
  `JUMLAH` int(11) NOT NULL,
  `SATUAN_ID` int(11) NOT NULL,
  `STATUS_PENGIIRMAN` enum('0','1','','') NOT NULL,
  `STATUS_PEMBAYARAN` enum('0','1','','') NOT NULL,
  `WAKTU_BUAT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(11) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` text NOT NULL,
  `STATE` enum('admin','pedagang','petani','') NOT NULL,
  `WAKTU_BUAT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `USERNAME`, `PASSWORD`, `STATE`, `WAKTU_BUAT`) VALUES
(1, 'Admin 1', 'Admin123', 'admin', '2018-06-03 00:00:00'),
(2, 'Pedagang 1', 'Pedagang123', 'pedagang', '2018-06-03 00:00:00'),
(3, 'Petani 1', 'Petani 123', 'petani', '2018-06-03 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`BARANG_ID`);

--
-- Indexes for table `hasil_panen`
--
ALTER TABLE `hasil_panen`
  ADD PRIMARY KEY (`HASILPANEN_ID`),
  ADD KEY `SATUAN_ID` (`SATUAN_ID`),
  ADD KEY `BARANG_ID` (`BARANG_ID`),
  ADD KEY `PETANI_ID` (`PETANI_ID`);

--
-- Indexes for table `hasil_panen_foto`
--
ALTER TABLE `hasil_panen_foto`
  ADD PRIMARY KEY (`HASILPANENFOTO_ID`),
  ADD KEY `HASILPANEN_ID` (`HASILPANEN_ID`);

--
-- Indexes for table `identitas_pedagang`
--
ALTER TABLE `identitas_pedagang`
  ADD PRIMARY KEY (`PEDAGANG_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `identitas_petani`
--
ALTER TABLE `identitas_petani`
  ADD PRIMARY KEY (`PETANI_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`SATUAN_ID`);

--
-- Indexes for table `tawar`
--
ALTER TABLE `tawar`
  ADD PRIMARY KEY (`TAWAR_ID`),
  ADD KEY `PEDAGANG_ID` (`PEDAGANG_ID`),
  ADD KEY `HASILPANEN_ID` (`HASILPANEN_ID`);

--
-- Indexes for table `tawar_detail`
--
ALTER TABLE `tawar_detail`
  ADD PRIMARY KEY (`TAWARDETAIL_ID`),
  ADD KEY `TAWAR_ID` (`TAWAR_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD KEY `HASILPANEN_ID` (`HASILPANEN_ID`),
  ADD KEY `HASILPANEN_ID_2` (`HASILPANEN_ID`),
  ADD KEY `PEDAGANG_ID` (`PEDAGANG_ID`),
  ADD KEY `SATUAN_ID` (`SATUAN_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `BARANG_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil_panen`
--
ALTER TABLE `hasil_panen`
  MODIFY `HASILPANEN_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil_panen_foto`
--
ALTER TABLE `hasil_panen_foto`
  MODIFY `HASILPANENFOTO_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `identitas_pedagang`
--
ALTER TABLE `identitas_pedagang`
  MODIFY `PEDAGANG_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `identitas_petani`
--
ALTER TABLE `identitas_petani`
  MODIFY `PETANI_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `SATUAN_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tawar_detail`
--
ALTER TABLE `tawar_detail`
  MODIFY `TAWARDETAIL_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil_panen`
--
ALTER TABLE `hasil_panen`
  ADD CONSTRAINT `hasil_panen_ibfk_1` FOREIGN KEY (`SATUAN_ID`) REFERENCES `satuan` (`SATUAN_ID`),
  ADD CONSTRAINT `hasil_panen_ibfk_2` FOREIGN KEY (`BARANG_ID`) REFERENCES `barang` (`BARANG_ID`),
  ADD CONSTRAINT `hasil_panen_ibfk_3` FOREIGN KEY (`PETANI_ID`) REFERENCES `identitas_petani` (`PETANI_ID`);

--
-- Constraints for table `hasil_panen_foto`
--
ALTER TABLE `hasil_panen_foto`
  ADD CONSTRAINT `hasil_panen_foto_ibfk_1` FOREIGN KEY (`HASILPANEN_ID`) REFERENCES `hasil_panen` (`HASILPANEN_ID`);

--
-- Constraints for table `identitas_pedagang`
--
ALTER TABLE `identitas_pedagang`
  ADD CONSTRAINT `identitas_pedagang_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`);

--
-- Constraints for table `identitas_petani`
--
ALTER TABLE `identitas_petani`
  ADD CONSTRAINT `identitas_petani_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`);

--
-- Constraints for table `tawar`
--
ALTER TABLE `tawar`
  ADD CONSTRAINT `tawar_ibfk_1` FOREIGN KEY (`PEDAGANG_ID`) REFERENCES `identitas_pedagang` (`PEDAGANG_ID`),
  ADD CONSTRAINT `tawar_ibfk_2` FOREIGN KEY (`HASILPANEN_ID`) REFERENCES `hasil_panen` (`HASILPANEN_ID`);

--
-- Constraints for table `tawar_detail`
--
ALTER TABLE `tawar_detail`
  ADD CONSTRAINT `tawar_detail_ibfk_1` FOREIGN KEY (`TAWAR_ID`) REFERENCES `tawar` (`TAWAR_ID`),
  ADD CONSTRAINT `tawar_detail_ibfk_2` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`SATUAN_ID`) REFERENCES `satuan` (`SATUAN_ID`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`HASILPANEN_ID`) REFERENCES `hasil_panen` (`HASILPANEN_ID`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`PEDAGANG_ID`) REFERENCES `identitas_pedagang` (`PEDAGANG_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
