-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 05:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` enum('P','L') DEFAULT NULL,
  `tmp_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `agama` enum('Islam','Protestan','Katolik','Hindu','Buddha','Kong Hu Cu') DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `fakultas` enum('FIB','FK','FH','FT','FP','FEB','FAPET','FMIPA','FKH','FTP','FPAR','FISIP','FKP') DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jk`, `tmp_lahir`, `tgl_lahir`, `alamat`, `agama`, `no_telp`, `fakultas`, `prodi`) VALUES
('1708561069', 'I Gede Teguh Mahardika', 'L', 'Denpasar', '1999-12-31', 'Bukit Jimbaran', 'Hindu', '089767555654', 'FMIPA', 'Informatika'),
('1708561071', 'Pingkan Anggriani Pitoy', 'P', 'Denpasar', '1999-12-31', 'Bukit Jimbaran', 'Protestan', '086545323444', 'FMIPA', 'Informatika'),
('1708561072', 'Gede Bakti Pernata', 'L', 'Denpasar', '1999-12-31', 'Bukit Jimbaran', 'Hindu', '081888928398', 'FMIPA', 'Informatika'),
('1708561073', 'Ni Putu Mira Novita Dewi', 'P', 'Denpasar', '1998-04-28', 'Jalan Paku Sari III No. 38', 'Hindu', '082146452927', 'FMIPA', 'Informatika'),
('1708561074', 'Zhaqy Hikkammi Gullam Ramadhan', 'L', 'Denpasar', '1999-12-31', 'Bukit Jimbaran', 'Islam', '089765345265', 'FMIPA', 'Informatika'),
('1708561075', 'Putu Pasek Wahyu Chandra Putra', 'L', 'Denpasar', '1999-12-31', 'Bukit Jimbaran', 'Hindu', '081453278666', 'FMIPA', 'Informatika'),
('1708561077', 'Ni Putu Vidya Vira Prashanti', 'P', 'Denpasar', '1999-12-31', 'Bukit Jimbaran', 'Hindu', '085643543777', 'FMIPA', 'Informatika'),
('1708561078', 'I Kadek Agus Andika Putra', 'L', 'Denpasar', '1999-12-31', 'Bukit Jimbaran', 'Hindu', '081777656434', 'FMIPA', 'Informatika'),
('1708561079', 'Agus Prayogo', 'L', 'Denpasar', '1999-12-31', 'Denpasar', 'Islam', '089767564545', 'FMIPA', 'Informatika'),
('1708561081', 'Gregorius Ericco Jansen', 'L', 'Denpasar', '1999-12-31', 'Bukit Jimbaran', 'Islam', '082324324333', 'FMIPA', 'Informatika'),
('1708561082', 'Ni Made Sinta Wahyuni', 'P', 'Denpasar', '1999-03-22', 'Bukit Jimbaran Badung', 'Hindu', '087675453265', 'FMIPA', 'Informatika'),
('1708561085', 'Winda Rianty', 'P', 'Denpasar', '1999-04-29', 'Bukit Jimbaran', 'Islam', '086756453454', 'FMIPA', 'Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
