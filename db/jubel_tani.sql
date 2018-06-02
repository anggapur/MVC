-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 06:03 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jubel_tani`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `NAMA_BARANG` varchar(15) DEFAULT NULL,
  `ICON` longblob,
  `BARANGID` int(11) NOT NULL,
  `WAKTU` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `FOTO_ID` int(11) NOT NULL,
  `PETANI_ID` int(11) DEFAULT NULL,
  `FILE` longblob,
  `WAKTU` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasil_panen`
--

CREATE TABLE `hasil_panen` (
  `HASILPANEN_ID` int(11) NOT NULL,
  `BARANGID` int(11) DEFAULT NULL,
  `PETANI_ID` int(11) DEFAULT NULL,
  `PEDAGANG_ID` int(11) DEFAULT NULL,
  `JUMLAH` int(11) DEFAULT NULL,
  `SATUAN` varchar(10) DEFAULT NULL,
  `HARGASATUAN` int(11) DEFAULT NULL,
  `WAKTU` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `identitas_pedagang`
--

CREATE TABLE `identitas_pedagang` (
  `PEDAGANG_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `NAMA_TOKO` varchar(30) DEFAULT NULL,
  `ALAMAT` varchar(30) DEFAULT NULL,
  `KTP` int(11) DEFAULT NULL,
  `PHONE` int(11) DEFAULT NULL,
  `NAMA` varchar(30) DEFAULT NULL,
  `KECAMATAN` varchar(15) DEFAULT NULL,
  `KOTA` varchar(15) DEFAULT NULL,
  `WAKTU` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memberikan`
--

CREATE TABLE `memberikan` (
  `HASILPANEN_ID` int(11) NOT NULL,
  `TRANSAKSI_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `petani_identitas`
--

CREATE TABLE `petani_identitas` (
  `PETANI_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `KTP` int(11) DEFAULT NULL,
  `NAMA` varchar(30) DEFAULT NULL,
  `ALAMAT` varchar(30) DEFAULT NULL,
  `PHONE` int(11) DEFAULT NULL,
  `KECAMATAN` varchar(15) DEFAULT NULL,
  `KOTA` varchar(15) DEFAULT NULL,
  `WAKTU` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tawar`
--

CREATE TABLE `tawar` (
  `TAWAR_ID` int(11) NOT NULL,
  `PEDAGANG_ID` int(11) DEFAULT NULL,
  `WAKTU` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tawar_detail`
--

CREATE TABLE `tawar_detail` (
  `TAWARDETAIL_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `DESKRIPSI` longtext,
  `WAKTU` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `TRANSAKSI_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `PETANI_ID` int(11) DEFAULT NULL,
  `PEDAGANG_ID` int(11) DEFAULT NULL,
  `METODE_PENGIRIMAN` varchar(10) DEFAULT NULL,
  `HARGA_SATUAN` int(11) DEFAULT NULL,
  `JUMLAH` int(11) DEFAULT NULL,
  `SATUAN` varchar(10) DEFAULT NULL,
  `STATUS_PENGIRIMAN` varchar(10) DEFAULT NULL,
  `STATUS_PEMBAYARAN` varchar(10) DEFAULT NULL,
  `WAKTU` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(11) NOT NULL,
  `TRANSAKSI_ID` int(11) DEFAULT NULL,
  `TAWARDETAIL_ID` int(11) DEFAULT NULL,
  `PEDAGANG_ID` int(11) DEFAULT NULL,
  `PETANI_ID` int(11) DEFAULT NULL,
  `USERNAME` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL,
  `STATE` int(11) DEFAULT NULL,
  `WAKTU` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`BARANGID`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`FOTO_ID`),
  ADD KEY `FK_FOTO_MENGUNGGA_PETANI_I` (`PETANI_ID`);

--
-- Indexes for table `hasil_panen`
--
ALTER TABLE `hasil_panen`
  ADD PRIMARY KEY (`HASILPANEN_ID`),
  ADD KEY `FK_HASIL_PA_MEMBELI_IDENTITA` (`PEDAGANG_ID`),
  ADD KEY `FK_HASIL_PA_MEMILIKI_BARANG` (`BARANGID`),
  ADD KEY `FK_HASIL_PA_MENGHASIL_PETANI_I` (`PETANI_ID`);

--
-- Indexes for table `identitas_pedagang`
--
ALTER TABLE `identitas_pedagang`
  ADD PRIMARY KEY (`PEDAGANG_ID`),
  ADD KEY `FK_IDENTITA_MELENGKAP_USER` (`USER_ID`);

--
-- Indexes for table `memberikan`
--
ALTER TABLE `memberikan`
  ADD PRIMARY KEY (`HASILPANEN_ID`,`TRANSAKSI_ID`),
  ADD KEY `FK_MEMBERIK_MEMBERIKA_TRANSAKS` (`TRANSAKSI_ID`);

--
-- Indexes for table `petani_identitas`
--
ALTER TABLE `petani_identitas`
  ADD PRIMARY KEY (`PETANI_ID`),
  ADD KEY `FK_PETANI_I_MENGISI2_USER` (`USER_ID`);

--
-- Indexes for table `tawar`
--
ALTER TABLE `tawar`
  ADD PRIMARY KEY (`TAWAR_ID`),
  ADD KEY `FK_TAWAR_MENAWAR_IDENTITA` (`PEDAGANG_ID`);

--
-- Indexes for table `tawar_detail`
--
ALTER TABLE `tawar_detail`
  ADD PRIMARY KEY (`TAWARDETAIL_ID`),
  ADD KEY `FK_TAWAR_DE_MEMPROSES_USER` (`USER_ID`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`TRANSAKSI_ID`),
  ADD KEY `FK_TRANSAKS_MELAKUKAN_PETANI_I` (`PETANI_ID`),
  ADD KEY `FK_TRANSAKS_MELANGSUN_IDENTITA` (`PEDAGANG_ID`),
  ADD KEY `FK_TRANSAKS_MEMPROSES_USER` (`USER_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`),
  ADD KEY `FK_USER_MELENGKAP_IDENTITA` (`PEDAGANG_ID`),
  ADD KEY `FK_USER_MEMPROSES_TRANSAKS` (`TRANSAKSI_ID`),
  ADD KEY `FK_USER_MEMPROSES_TAWAR_DE` (`TAWARDETAIL_ID`),
  ADD KEY `FK_USER_MENGISI_PETANI_I` (`PETANI_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `FK_FOTO_MENGUNGGA_PETANI_I` FOREIGN KEY (`PETANI_ID`) REFERENCES `petani_identitas` (`PETANI_ID`);

--
-- Constraints for table `hasil_panen`
--
ALTER TABLE `hasil_panen`
  ADD CONSTRAINT `FK_HASIL_PA_MEMBELI_IDENTITA` FOREIGN KEY (`PEDAGANG_ID`) REFERENCES `identitas_pedagang` (`PEDAGANG_ID`),
  ADD CONSTRAINT `FK_HASIL_PA_MEMILIKI_BARANG` FOREIGN KEY (`BARANGID`) REFERENCES `barang` (`BARANGID`),
  ADD CONSTRAINT `FK_HASIL_PA_MENGHASIL_PETANI_I` FOREIGN KEY (`PETANI_ID`) REFERENCES `petani_identitas` (`PETANI_ID`);

--
-- Constraints for table `identitas_pedagang`
--
ALTER TABLE `identitas_pedagang`
  ADD CONSTRAINT `FK_IDENTITA_MELENGKAP_USER` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`);

--
-- Constraints for table `memberikan`
--
ALTER TABLE `memberikan`
  ADD CONSTRAINT `FK_MEMBERIK_MEMBERIKA_HASIL_PA` FOREIGN KEY (`HASILPANEN_ID`) REFERENCES `hasil_panen` (`HASILPANEN_ID`),
  ADD CONSTRAINT `FK_MEMBERIK_MEMBERIKA_TRANSAKS` FOREIGN KEY (`TRANSAKSI_ID`) REFERENCES `transaksi` (`TRANSAKSI_ID`);

--
-- Constraints for table `petani_identitas`
--
ALTER TABLE `petani_identitas`
  ADD CONSTRAINT `FK_PETANI_I_MENGISI2_USER` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`);

--
-- Constraints for table `tawar`
--
ALTER TABLE `tawar`
  ADD CONSTRAINT `FK_TAWAR_MENAWAR_IDENTITA` FOREIGN KEY (`PEDAGANG_ID`) REFERENCES `identitas_pedagang` (`PEDAGANG_ID`);

--
-- Constraints for table `tawar_detail`
--
ALTER TABLE `tawar_detail`
  ADD CONSTRAINT `FK_TAWAR_DE_MEMPROSES_USER` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_TRANSAKS_MELAKUKAN_PETANI_I` FOREIGN KEY (`PETANI_ID`) REFERENCES `petani_identitas` (`PETANI_ID`),
  ADD CONSTRAINT `FK_TRANSAKS_MELANGSUN_IDENTITA` FOREIGN KEY (`PEDAGANG_ID`) REFERENCES `identitas_pedagang` (`PEDAGANG_ID`),
  ADD CONSTRAINT `FK_TRANSAKS_MEMPROSES_USER` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_USER_MELENGKAP_IDENTITA` FOREIGN KEY (`PEDAGANG_ID`) REFERENCES `identitas_pedagang` (`PEDAGANG_ID`),
  ADD CONSTRAINT `FK_USER_MEMPROSES_TAWAR_DE` FOREIGN KEY (`TAWARDETAIL_ID`) REFERENCES `tawar_detail` (`TAWARDETAIL_ID`),
  ADD CONSTRAINT `FK_USER_MEMPROSES_TRANSAKS` FOREIGN KEY (`TRANSAKSI_ID`) REFERENCES `transaksi` (`TRANSAKSI_ID`),
  ADD CONSTRAINT `FK_USER_MENGISI_PETANI_I` FOREIGN KEY (`PETANI_ID`) REFERENCES `petani_identitas` (`PETANI_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
