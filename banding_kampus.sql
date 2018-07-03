-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 03, 2018 at 09:22 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banding_kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akreditasi`
--

CREATE TABLE `tbl_akreditasi` (
  `id` int(11) NOT NULL,
  `nama_kampus` varchar(255) NOT NULL,
  `fakultas` varchar(255) NOT NULL,
  `akreditasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_akreditasi`
--

INSERT INTO `tbl_akreditasi` (`id`, `nama_kampus`, `fakultas`, `akreditasi`) VALUES
(36, 'lpkia', 'informatika', 'a'),
(38, 'lpkia', 'sistem informasi', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_profil`
--

CREATE TABLE `tbl_detail_profil` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `asal_kampus` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `fakultas` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `foto_ktm` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `status_kerja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_profil`
--

INSERT INTO `tbl_detail_profil` (`id`, `username`, `nim`, `asal_kampus`, `nama_lengkap`, `fakultas`, `kelas`, `no_hp`, `foto_ktm`, `status`, `status_kerja`) VALUES
(9, 'juheri', '150613035', 'lpkia', 'juheri', 'manajeman informastika', '3IF1', '756890', 'Haworthia-attenuata-_2_.jpg', '', ''),
(10, 'jek', '768970889867', 'lpkia', 'jek weh lah', 'manajeman informastika', '3IF1', '567890', 'database.png', '', ''),
(11, 'alsa', '678890', 'fiksi', 'alsa gunadi', 'naon weh', 'kbih', '7689', 'Haworthia-attenuata-_2_.jpg', '', ''),
(12, 'dea', '657789', 'lpkia', 'dea', 'manajeman informatika', '3IF1', '657899', 'Haworthia-attenuata-_2_.jpg', '', ''),
(13, 'saha', '6578', 'lpkia', 'saha weh', 'manajeman informatika', '3if', '6578', 'Haworthia-attenuata-_2_.jpg', '', ''),
(14, 'abc', '789009', 'inaba', ';bhlj', 'abc', 'kh', '7890', 'Haworthia-attenuata-_2_.jpg', '', ''),
(15, 'b', '125367899', 'inaba', 'kjb', 'kjvb;', 'jvkb', '567789', 'IMG_20100101_073902.jpg', '', ''),
(17, 'gunadi', '1507', 'unpad', 'gunadi', 'kedokteran', '3if-03', '0812321312', 'Object 1.png', 'mahasiswa', 'tidak bekerja'),
(18, 'bandingkampus', '67890968790', 'lpkia', 'banding', 'informatika', '3if', '87687589069', 'IMG_20100101_073902.jpg', 'alumni', 'bekerja');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kampus`
--

CREATE TABLE `tbl_kampus` (
  `id` int(11) NOT NULL,
  `nama_kampus` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kampus`
--

INSERT INTO `tbl_kampus` (`id`, `nama_kampus`, `alamat`, `foto`, `slogan`) VALUES
(3, 'INABA', 'jl. raya', '1', 'Sehat Selalu'),
(4, 'Merdeka', 'JL. 123', 'k', 'Bersama'),
(5, 'ITB', 'jl raya', 'database.png', 'test'),
(6, 'fiksi', 'binong', 'fghvjkl', 'teuing'),
(24, 'lpkia', 'j; raya', 'IMG_20100101_073902.jpg', 'jhvvk');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id` int(11) NOT NULL,
  `id_kampus` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `dosen` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `lingkungan` varchar(255) NOT NULL,
  `prestasi` varchar(255) NOT NULL,
  `mata_kuliah` varchar(255) NOT NULL,
  `biaya` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id`, `id_kampus`, `username`, `dosen`, `jurusan`, `lingkungan`, `prestasi`, `mata_kuliah`, `biaya`) VALUES
(12, 6, 'alsa', '100', '100', '60', '60', '20', '20'),
(20, 24, 'saha', '100', '100', '100', '100', '100 ', '100'),
(21, 24, 'jek', '60', '40', '60', '40', '60 ', '40'),
(22, 3, 'abc', '100', '80', '60', '40', '20 ', '100'),
(23, 3, 'b', '100', '100', '100', '100', '100 ', '100');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pertanyaan`
--

CREATE TABLE `tbl_pertanyaan` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `pil1` varchar(255) NOT NULL,
  `pil2` varchar(255) NOT NULL,
  `pil3` varchar(255) NOT NULL,
  `pil4` varchar(255) NOT NULL,
  `pil5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pertanyaan`
--

INSERT INTO `tbl_pertanyaan` (`id`, `pertanyaan`, `pil1`, `pil2`, `pil3`, `pil4`, `pil5`) VALUES
(2, 'Dosen di kampus ini sangatlah baik', 'Sangat Setuju', 'Setuju', 'Agak setuju', 'Tidak setuju', 'Sangat tidak setuju'),
(3, 'Jurusan di kampus ini sangatlah baik', 'Sangat Setuju', 'Setuju', 'Agak Setuju', 'Tidak setuju', 'Sangat tidak setuju'),
(4, 'Lingkungan di kampus ini sangatlah baik', 'Sangat Setuju', 'Setuju', 'Agak setuju', 'Tidak setuju', 'Sangat tidak setuju'),
(5, 'Prestasi di kampus ini baik', 'Sangat Setuju', 'Setuju', 'Agak Setuju', 'Tidak setuju', 'Sangat tidak setuju'),
(6, 'Mata Kuliah di kampus ini baik', 'Sangat setuju', 'Setuju', 'Agak Setuju', 'Kurang Setuju', 'Sangat tidak Setuju'),
(7, 'Biaya kuliah dikampus ini sangat terjangkau', 'Sangat setuju', 'Setuju', 'Agak Setuju', 'Kurang Setuju', 'Sangat tidak Setuju');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`username`, `email`, `password`) VALUES
('123', 'asd@gmail.com', '123'),
('abc', 'abc@mail.com', '123'),
('alsa', 'alsa@mail.com', '123'),
('b', 'b@mail.com', '123'),
('bandingkampus', 'bandingkampus@gmail.com', '123'),
('dea', 'dea@mail.com', '123'),
('gunadi', 'gunadi@gmail.com', '123'),
('jek', 'jek@mail.com', '123'),
('juheri', 'juheri842@gmail.com', '123'),
('saha', 'saha@mail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimoni`
--

CREATE TABLE `tbl_testimoni` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_kampus` varchar(255) NOT NULL,
  `testimoni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_testimoni`
--

INSERT INTO `tbl_testimoni` (`id`, `username`, `nama_kampus`, `testimoni`) VALUES
(1, 'abc', 'ljbgio', 'kjbnl'),
(2, 'saha', '', '<p>test euy</p>\r\n'),
(3, 'bandingkampus', '', '<p>kampus ini bersih</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ulasan`
--

CREATE TABLE `tbl_ulasan` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nama_kampus` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(255) NOT NULL,
  `ulasan` text NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ulasan`
--

INSERT INTO `tbl_ulasan` (`id`, `username`, `nama_kampus`, `tanggal`, `judul`, `ulasan`, `tag`) VALUES
(3, 'test', 'lpkia', '2018-06-26', 'hgj', 'hggj', 'hgj'),
(4, 'saha', 'LPKIA', '2018-06-30', 'abc', '<p>kjbldf;</p>\r\n', 'kjln'),
(5, 'saha', 'LPKIA', '2018-06-30', 'ULASAN', '<p>ULASAN</p>\r\n', 'ULASAN'),
(6, 'saha', 'LPKIA', '2018-06-30', 'ULASAN', '<p>ULASAN</p>\r\n', 'ULASAN'),
(7, 'saha', 'LPKIA', '2018-06-30', 'ULASAN', '<p>ULASAN</p>\r\n', 'ULASAN'),
(8, 'saha', 'LPKIA', '2018-07-01', 'abckasvdfkasuv', '<p>;kdasbfva</p>\r\n', 'k;sb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akreditasi`
--
ALTER TABLE `tbl_akreditasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_detail_profil`
--
ALTER TABLE `tbl_detail_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kampus`
--
ALTER TABLE `tbl_kampus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ulasan`
--
ALTER TABLE `tbl_ulasan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_akreditasi`
--
ALTER TABLE `tbl_akreditasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_detail_profil`
--
ALTER TABLE `tbl_detail_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_kampus`
--
ALTER TABLE `tbl_kampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_ulasan`
--
ALTER TABLE `tbl_ulasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
