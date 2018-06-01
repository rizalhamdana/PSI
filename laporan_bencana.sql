-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 09:25 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laporan_bencana`
--

-- --------------------------------------------------------

--
-- Table structure for table `bencana`
--

CREATE TABLE `bencana` (
  `id_bencana` int(11) NOT NULL,
  `nama_bencana` varchar(100) NOT NULL,
  `tanggal_bencana` date NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `jenis_bencana` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bencana`
--

INSERT INTO `bencana` (`id_bencana`, `nama_bencana`, `tanggal_bencana`, `id_wilayah`, `jenis_bencana`) VALUES
(12, 'Erupsi Gunung Merapi', '2018-06-01', 2, 'Letusan Gunung Api');

-- --------------------------------------------------------

--
-- Table structure for table `jenisbencana`
--

CREATE TABLE `jenisbencana` (
  `jenis_bencana` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenisbencana`
--

INSERT INTO `jenisbencana` (`jenis_bencana`) VALUES
('Letusan Gunung Api'),
('Gempa Bumi');

-- --------------------------------------------------------

--
-- Table structure for table `kerusakan`
--

CREATE TABLE `kerusakan` (
  `id_kerusakan` int(11) NOT NULL,
  `jenis_kerusakan` int(11) NOT NULL,
  `objek_kerusakan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kerusakanspesifikasi`
--

CREATE TABLE `kerusakanspesifikasi` (
  `id_spesifikasi` int(11) NOT NULL,
  `id_kerusakan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_pengguna` int(11) NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `id_bencana` int(11) NOT NULL,
  `id_kerusakan` int(11) NOT NULL,
  `objek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `status_pengguna` int(11) NOT NULL,
  `id_wilayah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `nama_pengguna`, `status_pengguna`, `id_wilayah`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 1, 1),
(5, 'sptandi', '827ccb0eea8a706c4c34a16891f84e7b', 'Saputro Andi', 2, 5),
(6, 'fazaraihan', 'e807f1fcf82d132f9bb018ca6738a19f', 'Faza Raihan', 2, 2),
(7, 'rizalhamdan', '9ce389a88d98f56fa50e777e60c4ad9f', 'Rizal Hamdan Arigusti', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `spesifikasi`
--

CREATE TABLE `spesifikasi` (
  `id_spesifikasi` int(11) NOT NULL,
  `nama_spesifikasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `nama_wilayah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `nama_wilayah`) VALUES
(1, 'Kantor Pusat'),
(2, 'D.I Yogyakarta'),
(4, 'DKI Jakarta'),
(5, 'Jawa Tengah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bencana`
--
ALTER TABLE `bencana`
  ADD PRIMARY KEY (`id_bencana`),
  ADD KEY `id_wilayah` (`id_wilayah`);

--
-- Indexes for table `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indexes for table `kerusakanspesifikasi`
--
ALTER TABLE `kerusakanspesifikasi`
  ADD KEY `id_spesifikasi` (`id_spesifikasi`),
  ADD KEY `id_kerusakan` (`id_kerusakan`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_wilayah` (`id_wilayah`),
  ADD KEY `id_bencana` (`id_bencana`),
  ADD KEY `id_kerusakan` (`id_kerusakan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_wilayah` (`id_wilayah`);

--
-- Indexes for table `spesifikasi`
--
ALTER TABLE `spesifikasi`
  ADD PRIMARY KEY (`id_spesifikasi`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bencana`
--
ALTER TABLE `bencana`
  MODIFY `id_bencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bencana`
--
ALTER TABLE `bencana`
  ADD CONSTRAINT `bencana_ibfk_1` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id_wilayah`);

--
-- Constraints for table `kerusakanspesifikasi`
--
ALTER TABLE `kerusakanspesifikasi`
  ADD CONSTRAINT `kerusakanspesifikasi_ibfk_1` FOREIGN KEY (`id_spesifikasi`) REFERENCES `spesifikasi` (`id_spesifikasi`),
  ADD CONSTRAINT `kerusakanspesifikasi_ibfk_2` FOREIGN KEY (`id_kerusakan`) REFERENCES `kerusakan` (`id_kerusakan`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_4` FOREIGN KEY (`id_kerusakan`) REFERENCES `kerusakan` (`id_kerusakan`),
  ADD CONSTRAINT `laporan_ibfk_5` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `laporan_ibfk_6` FOREIGN KEY (`id_bencana`) REFERENCES `bencana` (`id_bencana`);

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id_wilayah`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
