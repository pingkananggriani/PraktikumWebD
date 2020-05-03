-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 02:32 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simak`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `idmahasiswa` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenisKelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tempatLahir` varchar(20) NOT NULL,
  `tglLahir` date NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `fakultas` enum('Fakultas Ilmu Budaya','Fakultas Kedokteran','Fakultas Hukum','Fakultas Teknik','Fakultas Pertanian','Fakultas Ekonomi dan Bisnis','Fakultas Peternakan','Fakultas MIPA','Fakultas Kedokteran Hewan','Fakultas Teknologi Pertanian','Fakultas Ilmu Sosial dan Ilmu Politik','Fakultas Kelautan dan Perikanan','Fakultas Pariwisata') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`idmahasiswa`, `nim`, `nama`, `jenisKelamin`, `tempatLahir`, `tglLahir`, `alamat`, `email`, `fakultas`) VALUES
(1, '1708561053', 'Ni Putu Ayu Sherly Anggita Sugiarta ', 'Perempuan', 'Karangasem ', '1999-08-12', 'Jimbaran ', 'ayusherly@gmail.com ', 'Fakultas MIPA'),
(2, '1708561054', 'Adi Saputro Wibowo ', 'Laki-laki', 'Magetan ', '1999-01-26', 'Jalan Gunung Slamet XII No 15 Denpasar Barat ', 'adhisaputra11@gmail.com ', 'Fakultas MIPA'),
(4, '1708561056', 'Hendra Pradiptha   ', 'Laki-laki', 'Denpasar   ', '1999-12-14', 'Denpasar     ', 'hendrapradiptha98@gmail.com   ', 'Fakultas MIPA'),
(9, '1708561057', 'I Gusti Ayu Widiantari Putri', 'Perempuan', 'Denpasar', '1999-06-16', 'jl. tukad pancoran', 'ayut@ymail.com', 'Fakultas Kedokteran'),
(10, '1708561055', 'Diky Rizky Awan', 'Laki-laki', 'Denpasar', '1999-01-01', 'Tuban', 'awan@mail.com', 'Fakultas Peternakan'),
(11, '1708561051', 'I Gst Bgs Bayu Adi Pramana ', 'Laki-laki', 'Tabanan ', '1999-07-15', 'Marga ', 'bayu@adi.com ', 'Fakultas Ekonomi dan Bisnis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`idmahasiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `idmahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
