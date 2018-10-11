-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 03:56 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `Nama` text NOT NULL,
  `NIM` int(10) NOT NULL,
  `Kelas` varchar(15) NOT NULL,
  `Jenis_Kelamin` text NOT NULL,
  `Hobi` text NOT NULL,
  `Fakultas` text NOT NULL,
  `Alamat` text NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`Nama`, `NIM`, `Kelas`, `Jenis_Kelamin`, `Hobi`, `Fakultas`, `Alamat`, `Password`) VALUES
('r', 1, '', '', '', 'FIT', '1', ''),
('Win', 3, '', '', '', 'FIT', '33333', ''),
('siapa', 4, '', '', '', 'FIT', '4444', ''),
('Melii', 78, '', '', '', 'FIT', '78', ''),
('wiwiiw', 111, '', '', '', 'FIT', '11111', ''),
('riska', 123, 'D3MI4101', 'Perempuan', 'Menulis', 'FIT', 'dhywugw', ''),
('frfrf', 222, 'D3MI4101', 'Perempuan', 'Menggambar', 'FIT', '222', ''),
('Win', 333, '', '', '', 'FIT', '3333', ''),
('Lina', 567, 'D3MI4103', 'Perempuan', 'Menggambar', 'FIT', '567', ''),
('Fathan', 2345, 'D3MI4102', 'Laki-Laki', 'Berenang', 'FIT', '2345', ''),
('Naswa', 123456, 'D3MI4102', 'Perempuan', 'Menulis', 'FIT', '123456', '');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `id` int(10) NOT NULL,
  `postingan` text NOT NULL,
  `dokumen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id`, `postingan`, `dokumen`) VALUES
(0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
