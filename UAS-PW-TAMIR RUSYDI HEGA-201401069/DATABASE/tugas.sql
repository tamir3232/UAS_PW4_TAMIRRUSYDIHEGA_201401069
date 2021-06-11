-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 05:42 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `niali2`
--

CREATE TABLE `niali2` (
  `nama` varchar(100) NOT NULL,
  `komentar` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `niali2`
--

INSERT INTO `niali2` (`nama`, `komentar`, `foto`) VALUES
('boboi', 'foto itu ambil di mana', 'profil4.jpg'),
('kiki', 'aku pingin kesana deh saking lihat fotonya', 'profil2.jpg'),
('suamer', 'saya ingin sekali bisa foto bersama', 'profil3.jpg'),
('tamir', 'kapan kapan aku ingin kesana', 'profil1.png'),
('yaya', 'waw pemandangan ini sangat bagus', 'rusa3.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `namaawal` varchar(33) NOT NULL,
  `namaakhir` varchar(33) NOT NULL,
  `email` varchar(33) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`namaawal`, `namaakhir`, `email`, `username`, `password`, `tanggallahir`, `jeniskelamin`) VALUES
('kaki', 'tamir', 'kaka@gmail.com', 'kaka', 'kaka', '2004-04-09', 'Laki-Laki'),
('sulay', 'man', 'sulay@gmail.com', 'sulay', '12345', '2004-07-21', 'Perempuan'),
('aa', 'a', 'ss@gmail.com', 'yaya', '123', '2004-04-09', 'Laki-Laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `niali2`
--
ALTER TABLE `niali2`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
