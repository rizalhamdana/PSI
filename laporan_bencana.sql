-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2018 at 01:59 PM
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
(21, 'Erupsi Gunung Merapi', '2018-06-20', 2, 'Letusan Gunung Api'),
(22, 'Gempa Bumi', '2018-06-18', 4, 'Gempa Bumi'),
(24, 'Tanah Longsor', '2017-11-07', 4, 'Tanah Longsor');

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
('Gempa Bumi'),
('Banjir'),
('Tanah Longsor');

-- --------------------------------------------------------

--
-- Table structure for table `kerusakan`
--

CREATE TABLE `kerusakan` (
  `id_kerusakan` int(11) NOT NULL,
  `jenis_kerusakan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerusakan`
--

INSERT INTO `kerusakan` (`id_kerusakan`, `jenis_kerusakan`) VALUES
(1, 'Rusak Ringan'),
(2, 'Rusak Sedang'),
(3, 'Rusak Berat');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_pengguna` int(11) NOT NULL,
  `id_wilayah` int(11) NOT NULL,
  `id_bencana` int(11) NOT NULL,
  `id_kerusakan` int(11) NOT NULL,
  `objek` varchar(50) NOT NULL,
  `tanggal_laporan` datetime NOT NULL,
  `id_laporan` int(11) NOT NULL,
  `lokasi` text NOT NULL,
  `persen_rusak_struktur` int(11) NOT NULL,
  `persen_rusak_penunjang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_pengguna`, `id_wilayah`, `id_bencana`, `id_kerusakan`, `objek`, `tanggal_laporan`, `id_laporan`, `lokasi`, `persen_rusak_struktur`, `persen_rusak_penunjang`) VALUES
(12, 2, 21, 2, 'Rumah', '2018-06-26 00:30:49', 1, 'asksaklaskl', 40, 50),
(12, 2, 21, 3, 'Rumah', '2018-06-26 00:31:36', 2, 'sadsad', 70, 80),
(12, 2, 21, 1, 'Rumah', '2018-07-02 18:30:26', 3, 'asjsja', 30, 10),
(12, 2, 21, 2, 'Fasilitas Peribadatan', '2018-07-02 18:58:48', 4, 'dasds', 60, 40);

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
(12, 'rizalhamdan', '9ce389a88d98f56fa50e777e60c4ad9f', 'Rizal Hamdan Arigusti', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `rules_kerusakan`
--

CREATE TABLE `rules_kerusakan` (
  `id_rules` int(11) NOT NULL,
  `kondisi1` varchar(50) NOT NULL,
  `kondisi2` varchar(50) NOT NULL,
  `hasil` varchar(50) NOT NULL,
  `id_kerusakan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rules_kerusakan`
--

INSERT INTO `rules_kerusakan` (`id_rules`, `kondisi1`, `kondisi2`, `hasil`, `id_kerusakan`) VALUES
(55, 'BERAT', 'BERAT', 'RENDAH', 1),
(56, 'BERAT', 'SEDANG', 'RENDAH', 1),
(57, 'BERAT', 'RINGAN', 'RENDAH', 1),
(58, 'SEDANG', 'BERAT', 'RENDAH', 1),
(59, 'SEDANG', 'SEDANG', 'RENDAH', 1),
(60, 'SEDANG', 'RINGAN', 'RENDAH', 1),
(61, 'RINGAN', 'BERAT', 'TINGGI', 1),
(62, 'RINGAN', 'SEDANG', 'TINGGI', 1),
(63, 'RINGAN', 'RINGAN', 'TINGGI', 1),
(64, 'BERAT', 'BERAT', 'RENDAH', 2),
(65, 'BERAT', 'SEDANG', 'RENDAH', 2),
(66, 'BERAT', 'RINGAN', 'RENDAH', 2),
(67, 'SEDANG', 'BERAT', 'TINGGI', 2),
(68, 'SEDANG', 'SEDANG', 'TINGGI', 2),
(69, 'SEDANG', 'RINGAN', 'TINGGI', 2),
(70, 'RINGAN', 'BERAT', 'RENDAH', 2),
(71, 'RINGAN', 'SEDANG', 'RENDAH', 2),
(72, 'RINGAN', 'RINGAN', 'RENDAH', 2),
(73, 'BERAT', 'BERAT', 'TINGGI', 3),
(74, 'BERAT', 'SEDANG', 'TINGGI', 3),
(75, 'BERAT', 'RINGAN', 'TINGGI', 3),
(76, 'SEDANG', 'BERAT', 'RENDAH', 3),
(77, 'SEDANG', 'SEDANG', 'RENDAH', 3),
(78, 'SEDANG', 'RINGAN', 'RENDAH', 3),
(79, 'RINGAN', 'BERAT', 'RENDAH', 3),
(80, 'RINGAN', 'SEDANG', 'RENDAH', 3),
(81, 'RINGAN', 'RINGAN', 'RENDAH', 3);

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
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
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
-- Indexes for table `rules_kerusakan`
--
ALTER TABLE `rules_kerusakan`
  ADD PRIMARY KEY (`id_rules`),
  ADD KEY `id_kerusakan` (`id_kerusakan`);

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
  MODIFY `id_bencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `rules_kerusakan`
--
ALTER TABLE `rules_kerusakan`
  MODIFY `id_rules` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
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
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `laporan_ibfk_2` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id_wilayah`),
  ADD CONSTRAINT `laporan_ibfk_4` FOREIGN KEY (`id_kerusakan`) REFERENCES `kerusakan` (`id_kerusakan`),
  ADD CONSTRAINT `laporan_ibfk_5` FOREIGN KEY (`id_bencana`) REFERENCES `bencana` (`id_bencana`);

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_wilayah`) REFERENCES `wilayah` (`id_wilayah`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
