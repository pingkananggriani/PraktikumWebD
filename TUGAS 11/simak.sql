-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 04:49 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

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
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `nip` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `matkul` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`nip`, `nama`, `matkul`, `alamat`) VALUES
('000000000000000001', 'Putu Ayu, S.Kom, M.Kom.', 'Basis Data', 'Jimbaran'),
('000000000000000002', 'Samantha, S.T, M.Kom.', 'Analisis Numerik', 'Kuta'),
('000000000000000003', 'Komang Putra, S.T, M.Kom', 'Analisis Numerik', 'Jimbaran'),
('000000000000000004', 'Edward, S.Kom, M.Kom', 'Basis Data', 'Kuta'),
('000000000000000005', 'Satu, S.Si, M.Kom', 'Pengantar AI', 'Nusa Dua'),
('000000000000000006', 'Sastradi, S.Si, M.Kom', 'Matematika Diskrit', 'Denpasar'),
('000000000000000007', 'Bli, S.Kom, M.Si.', 'Matematika Diskrit', 'Nusa Dua'),
('000000000000000008', 'Collins, S.Si, M.Si', 'Matematika Diskrit 2', 'Denpasar'),
('000000000000000009', 'Made, S.S.', 'Bahasa Inggris Dasar', 'Jimbaran'),
('000000000000000010', 'Ketut, S.Kom, M.Kom', 'Etika', 'Denpasar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mhs`
--

CREATE TABLE `tb_mhs` (
  `nim` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jalur` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mhs`
--

INSERT INTO `tb_mhs` (`nim`, `nama`, `jalur`, `alamat`) VALUES
(1708561069, 'I Gede Teguh Mahardika', 'Komputasi', 'Denpasar'),
(1708561070, 'Pingkan Anggriani Pitoy', 'Multimedia', 'Jimbaran'),
(1708561072, 'Gede Bakti Pernata', 'Knowledge Discovery', 'Singaraja'),
(1708561073, 'Ni Putu Mira Novita', 'Big Data', 'Denpasar'),
(1708561074, 'Zhaky Hikkamu Gullam Ramadhan', 'MIR', 'Jimbaran'),
(1708561075, 'Putu Pasek Wahyu Chandra Putra', 'Komputasi', 'Karangasem'),
(1708561077, 'Ni Putu Vidya Vira Prashanti', 'Komputasi', 'Klungkung'),
(1708561078, 'I Kadek Agus Andika Putra', 'UI/UX', 'Gianyar'),
(1708561079, 'Agus Prayogo', 'Komputasi', 'Gianyar'),
(1708561080, 'Gregorius Ericco Jansen', 'Komputasi', 'Jimbaran'),
(1708561082, 'Ni Made Sinta Wahyuni', 'Text Mining', 'Jimbaran, Badung'),
(1708561084, 'Gevin Janitto P', 'UI/UX', 'Denpasar'),
(1708561085, 'Winda Rianty', 'Keamanan Digital', 'Jimbaran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tb_mhs`
--
ALTER TABLE `tb_mhs`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
