-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 12:41 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `nama` text NOT NULL,
  `gambar` text NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `nama`, `gambar`, `ket`) VALUES
(1, 'daasd', 'bg-1.jpg', 'dasdasdsa'),
(2, 'dsaasdsad', 'IMG_20180512_190328.jpg', 'cxcXCZCZC');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `genre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `genre`) VALUES
(1, 'pop'),
(2, 'dangdut'),
(3, 'reggae'),
(4, 'jazz');

-- --------------------------------------------------------

--
-- Table structure for table `jadwalkonser`
--

CREATE TABLE `jadwalkonser` (
  `id_konser` int(11) NOT NULL,
  `nama_artis` text NOT NULL,
  `tempat` text NOT NULL,
  `tgl` date NOT NULL,
  `informasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwalkonser`
--

INSERT INTO `jadwalkonser` (`id_konser`, `nama_artis`, `tempat`, `tgl`, `informasi`) VALUES
(3, 'meli', 'Korea', '2018-12-24', 'dia mau konser'),
(4, 'raiso', 'jakarta', '2018-12-24', 'suka suka dia mau konser dimana');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` text NOT NULL,
  `negara` text NOT NULL,
  `kota` text NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `tw` text NOT NULL,
  `ig` text NOT NULL,
  `fb` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `negara`, `kota`, `notelp`, `email`, `tw`, `ig`, `fb`) VALUES
(6, 'Meli Melinda', 'Indonesia', 'Indramayu', '8978208749', 'melinawada29@gmail.com', 'https://www.facebook.com/profile.php?id=100005055856241', 'https://www.instagram.com/melinawada/', 'https://www.facebook.com/profile.php?id=100005055856241				\r\n	');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('meli', 'melinda');

-- --------------------------------------------------------

--
-- Table structure for table `musik`
--

CREATE TABLE `musik` (
  `id_musik` int(11) NOT NULL,
  `penyanyi` text NOT NULL,
  `judul_lagu` text NOT NULL,
  `file` varchar(250) NOT NULL,
  `lirik` text NOT NULL,
  `genre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musik`
--

INSERT INTO `musik` (`id_musik`, `penyanyi`, `judul_lagu`, `file`, `lirik`, `genre`) VALUES
(6, 'DASDAS', 'DSDSDF', 'separation.mp3', '<p>DFSDFADSFAS</p>', 'ZXZxZ'),
(8, 'dsasds', 'dsadsa', 'black_plant.mp3', '<p>dassadsa</p>', 'dasdasdas'),
(9, 'faasfs', 'fasf', 'hidden.mp3', '<p>cxzcxz</p>', 'cxczx'),
(10, 'Siti badriyah', 'lagi syantik', 'black_plant.mp3', '<pre><em><strong>emang lagi manja lagi pengen dimanja,</strong></em></pre>', 'dangdut');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `kota` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `kota`, `pesan`) VALUES
(8, '', '', '', ''),
(9, 'MELI', 'melinawada29@gmail.com', 'indramayu', 'request lagu dangdut dong'),
(10, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vidio`
--

CREATE TABLE `vidio` (
  `id_vidio` int(11) NOT NULL,
  `artis` text NOT NULL,
  `link_vidio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vidio`
--

INSERT INTO `vidio` (`id_vidio`, `artis`, `link_vidio`) VALUES
(1, 'hgjhg', 'https://www.youtube.com/watch?v=g3On93DpNyo'),
(2, 'fsdfds', 'https://www.youtube.com/watch?v=Ii1jvubIC8g');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `jadwalkonser`
--
ALTER TABLE `jadwalkonser`
  ADD PRIMARY KEY (`id_konser`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `musik`
--
ALTER TABLE `musik`
  ADD PRIMARY KEY (`id_musik`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `vidio`
--
ALTER TABLE `vidio`
  ADD PRIMARY KEY (`id_vidio`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jadwalkonser`
--
ALTER TABLE `jadwalkonser`
  MODIFY `id_konser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `musik`
--
ALTER TABLE `musik`
  MODIFY `id_musik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `vidio`
--
ALTER TABLE `vidio`
  MODIFY `id_vidio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
