-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 07:44 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040030`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Id` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pnulis` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun` char(15) NOT NULL,
  `Gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Id`, `judul`, `penulis`, `penerbit`, `tahun`, `Gambar`) VALUES
(1, 'Teknik Analisis Dalam Penelitian Percobaan', 'Gaspersz, V.', 'Bandung : PT.Tarsito', '2006', 'Analisi.jpg'),
(2, 'Transport Processes and Unit Operations', 'Geankoplis, J.', 'Amerika Serikat : Perusahaan Simon & Schuster', '1993', 'Transport.jpg'),
(3, 'Mengemas Produk Pangan', 'Nurminabari, I.', 'Bandung : Manggu Makmur Tanjung Lestari', '2022', 'Pangan.jpg'),
(4, 'Ilmu Pengetahuan Bahan Pangan', 'Muchtadi, M.S.', 'Bandung : Alfabeta, CV', '2015', 'IPBP.jpg'),
(5, 'Dasar-Dasar Mikrobiologi', 'Michael, J.', 'Jakarta : UI-Press', '1986', 'Mikrobiologi.jpg'),
(6, 'Ibroh Dari Kehidupan Teroris dan Korbannya', 'Strawi, H.', 'Jakarta : Aliansi Indonesia Damai', '2018', 'AIDA.jpg'),
(7, 'Naruto', 'Kishimoto', 'Jepang : Shueisha', '1999', 'Naruto.jpg'),
(8, 'One Piece', 'Eiichiro Oda', 'Jepang : Shueisha', '1997', 'One Piece.jpg'),
(9, 'Attact On Titan', 'Hajime Isayama', 'Kodansha', '2009', 'AOT.jpg'),
(10, 'Tsubasa', 'Yoichi Takahashi', 'Jepang : Shueisha', '1981', 'Tsubasa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `username`, `password`) VALUES
(5, 'unpas', '$2y$10$h.S3z1OJo9AUe3h3NFyQiOrEoA.6bnbWt020KHPxfpg6aUtp.5r8i'),
(6, 'admin', '$2y$10$dUJFakolakobSjURm5l6OuW7dFE0RMY8WCrZVUw7a319LqmDgi2pu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
