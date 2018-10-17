-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 02:49 PM
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
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamahasiswa`
--

CREATE TABLE `datamahasiswa` (
  `nama` varchar(50) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `programstudi` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `mottohidup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datamahasiswa`
--

INSERT INTO `datamahasiswa` (`nama`, `nim`, `jeniskelamin`, `programstudi`, `fakultas`, `asal`, `mottohidup`) VALUES
('Adit', '1234567890', 'Perempuan', 'MBTI', 'Fakultas Teknik Elektro', 'Lampung', 'apa aja boleh'),
('Baduy', '6701174076', 'Perempuan', 'Fashion Design', 'Faklutas Industri Kreatif', 'Tng', 'hmm(10jam)'),
('Abdul', '6701174077', 'Perempuan', 'Ilmu Komunikasi', 'Fakultas Komunikasi Bisnis', 'Rawa-rawa', 'hayoooo'),
('Tiara Fatehana', '6701174078', 'Perempuan', 'Teknik Industri', 'Fakultas Teknik Elektro', 'bandung', 'Apa aja ku bisa'),
('Adi Subianto', '6705174030', 'Laki - Laki', 'MBTI', 'Fakultas Komunikasi Bisnis', 'Tangerang', 'Ceking selalu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
