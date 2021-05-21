-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2021 at 03:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Trisula_Fc`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita_bola`
--

CREATE TABLE `berita_bola` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `penulis_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `foto_berita` varchar(30) NOT NULL,
  `tgl_berita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama_contact` varchar(128) NOT NULL,
  `No.Hp` varchar(128) NOT NULL,
  `Email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemain_bola`
--

CREATE TABLE `pemain_bola` (
  `id_pemain` int(11) NOT NULL,
  `nama_pemain` varchar(225) DEFAULT NULL,
  `tgl_pemain` date DEFAULT NULL,
  `alamat_pemain` varchar(255) DEFAULT NULL,
  `umur_pemain` int(11) DEFAULT NULL,
  `nohp_pemain` varchar(20) DEFAULT NULL,
  `email_pemain` varchar(225) DEFAULT NULL,
  `nm_ortu_pemain` varchar(30) DEFAULT NULL,
  `asalkota_pemain` varchar(50) DEFAULT NULL,
  `posisi_pemain` varchar(30) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemain_bola`
--

INSERT INTO `pemain_bola` (`id_pemain`, `nama_pemain`, `tgl_pemain`, `alamat_pemain`, `umur_pemain`, `nohp_pemain`, `email_pemain`, `nm_ortu_pemain`, `asalkota_pemain`, `posisi_pemain`, `image`) VALUES
(9, 'sakti', '1979-06-27', 'Teng duo kebon ix Rt014/Rw000 sungai gelam muaro jambi', 21, '083121766390', 'rtsnurf@gmail.com', 'sakti122', 'JAMBI', 'kanan', ''),
(10, 'hhhhhd', '2021-05-19', 'Teng duo kebon ix Rt014/Rw000 sungai gelam muaro jambi', 21, '083121766390', 'rtsnurf@gmail.com', 'ewsdjsnd jambi', 'JAMBI', 'kanan', ''),
(12, 'sakti coba', '2021-05-10', 'taman adiyasa block f No 17 RT07 Rw07', 21, '089673841131', 'rtsnurf@gmail.com', 'ewsdjsnd', 'Tanggerang', 'kanan', ''),
(13, 'sakti', '2021-05-18', 'Teng duo kebon ix Rt014/Rw000 sungai gelam muaro jambi', NULL, '083121766390', 'rtsnurf@gmail.com', 'ewsdjsnd jambi', 'JAMBI', 'kanan', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `image`, `role_id`, `is_active`, `date_created`) VALUES
(6, 'Tri sakti', 'rtsnurf@gmail.com', '$2y$10$aEr6LQCisxkiUWMbE1uJ4.h/A3B62wc.bWMUJnvfSDS', 'default.jpg', 1, 2, 1619907022),
(7, 'Tri sakti', 'sandydwiguna@ymail.com', '$2y$10$cdcf.4.fWNPSN/UjJDkDyOJzn0oz8b8Gw6RDP1nL.xw', 'default.jpg', 1, 2, 1619907247),
(8, 'vidya', 'vidyaanggraini98@gmail.com', '$2y$10$shPhiG.BCYU3CUb7uO2GVegmnz1ovoY67p72SckuUGs', 'default.jpg', 1, 2, 1619907527),
(9, 'Tri sakti', 'alfinoviazh8@gmail.com', '$2y$10$3IrMKikKE75ivpm7zj.yJeYosXuyzNGRXOeMtqOI0Ui', 'default.jpg', 1, 2, 1619907580);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id_video` int(11) NOT NULL,
  `judul_video` varchar(120) NOT NULL,
  `video` varchar(120) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita_bola`
--
ALTER TABLE `berita_bola`
  ADD PRIMARY KEY (`id_berita`),
  ADD UNIQUE KEY `id_berita` (`id_berita`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `pemain_bola`
--
ALTER TABLE `pemain_bola`
  ADD PRIMARY KEY (`id_pemain`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita_bola`
--
ALTER TABLE `berita_bola`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemain_bola`
--
ALTER TABLE `pemain_bola`
  MODIFY `id_pemain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
