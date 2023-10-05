-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 12:34 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidewa`
--

-- --------------------------------------------------------

--
-- Table structure for table `ktp`
--

CREATE TABLE `ktp` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `tmpt_tgllahir` varchar(255) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pm`
--

CREATE TABLE `pm` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pengaduan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sku`
--

CREATE TABLE `sku` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `tmpt_tgllahir` varchar(255) NOT NULL,
  `no_ktp` int(16) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `tempatlahir` varchar(255) NOT NULL,
  `tanggallahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nik`, `namalengkap`, `jeniskelamin`, `tempatlahir`, `tanggallahir`, `alamat`, `username`, `password`) VALUES
(13, '1234567890123456', 'Arip Irwansyah', 'pria', 'Karawang', '2000-11-01', 'krw', 'aripirwansyah', '$2y$10$GSE.tX0Q6GVuIlzzQ9afyeNPyAgoeWhdspdCLm9KLyav6pscJx2qi'),
(14, '0987623451683218', 'Rose', 'wanita', 'Karawang', '2000-11-01', 'Ciketing', 'roseeeee', '$2y$10$gtlDjI9vs19hWWdRjv4Qu.FcmU85e5xZXis/5FR2bYwuaQT6jHdJa'),
(15, '987345612348763', 'Mr. Beast', 'pria', 'Karawang', '2000-11-01', 'Jatimulya', 'beasttt', '$2y$10$LzBGpoQgK8cN6IKPqC1biehcVZiZ6sSmmWi278X3ty2NbBYbNyxQK'),
(16, '6734531678954321', 'Musk', 'pria', 'Karawang', '2000-11-01', 'Rw. Nambo', 'muskuyyy', '$2y$10$6WvbiPPDEOsiVu3nYge3teE/N.ye32eN7pFCm7tONsP6Nck32Xjue'),
(17, '9823763812934578', 'Steve', 'pria', 'Karawang', '0000-00-00', 'asas', 'stve', '$2y$10$y1/r.rCt6zHwa0N.oJLPH.0i0PoR5M2clDRrEY/rw5egIJtm1AkWG'),
(18, '8723645129307637', 'Kojo', 'pria', 'Karawang', '2023-09-23', 'Cicadas', 'kojosatoru', '$2y$10$uV6WbX2FeRJWyJGeAU9oGOzj5aGcd4z3QK7GWMAsYSDw7zrSjejpO'),
(19, '7182638126491713', 'Ucil', 'pria', 'Karawang', '2023-09-01', 'Kajaj', 'ucillll', '$2y$10$uwuBrvv2BiNeDPmr3L.ItugJDI8UArDFWQa7RsK5u9wjs4f/3Zh2a'),
(24, '1221344356657887', 'Irwansyah', 'laki-laki', 'Karawang', '2023-09-22', 'krw', 'irwnsyharip', '$2y$10$yFYH14rQpFhZZ7b4.nW85uxusiPqNB/EI6sDg5qIHspvnywKcKXPe'),
(25, '7192718196727653', 'Mawar', 'Perempuan', 'Karawang', '2023-09-07', 'Krw', 'mawardah', '$2y$10$xttqjqR1SI1BSI4Sc7PKHO7u3iNpbRdDuG8WgSRoYLq4MoGv4nja.'),
(26, '3219457777777777', 'Joji', 'Laki-laki', 'Tokyo', '2023-09-29', 'Jl. Kebangsaan', 'jojifluffy', '$2y$10$fP8GFqMEb8wq6Ji1N0XpL.sBFVtF/9O51sdXkbnO55ChPdo3SDKwy'),
(28, '3215686868686868', 'Jeje', 'Laki-laki', 'Karawang', '2023-09-05', 'Krw', 'jejejejejeboy', '$2y$10$9se/IgtCw0yhxJIjy8kN.ud7zLEcLVPeno.IbJ2e.Hgzb2KlpPnx6'),
(29, '3215696969696969', 'Reza', 'Laki-laki', 'Karawang', '2023-09-13', 'Krw', 'rezarapokt', '$2y$10$GXVDWsnYPSdtutbzpQ8lmODtPmMNktfn9GwnKnzjwdfSbHSUcvWcC'),
(30, '0000000000000000', 'Admin', 'Laki-laki', '', '0000-00-00', '', 'admin', '$2y$10$ul1e0nlrlz3P.yKphT.C7elfcIE2Yd3ZSbdHcdwazVGbuAXdTGDDC'),
(31, '', '', '', '', '0000-00-00', '', 'adminsidewa', '$2y$10$eLx1RwthrVQxKLIiHVu3uuKv18Axc8mTmhbn20n.bTbOCssCrnhf.'),
(32, '', '', '', '', '0000-00-00', '', 'admindesa', '$2y$10$L6wzO7edVBN9x3PF3TzPgujCvDosw2hl6A5cjI0OXli8N1itXXXNa');

-- --------------------------------------------------------

--
-- Table structure for table `usertest`
--

CREATE TABLE `usertest` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertest`
--

INSERT INTO `usertest` (`id`, `username`, `password`) VALUES
(1, 'aripirwansyah', '$2y$10$4agf9cLXqY3Tpb5CqqPsuO7B6KM0zt.FsDiT3yt.U/aAQnSDDWFqu'),
(2, 'aripirwnsyah', '$2y$10$cAzSTLwx0NAGy/z/WF6vvORmRKTFEn3wgtL.Cnu5/oZ9HDHVg6IIe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pm`
--
ALTER TABLE `pm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sku`
--
ALTER TABLE `sku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertest`
--
ALTER TABLE `usertest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ktp`
--
ALTER TABLE `ktp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pm`
--
ALTER TABLE `pm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sku`
--
ALTER TABLE `sku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `usertest`
--
ALTER TABLE `usertest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
