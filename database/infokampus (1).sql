-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 09:34 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infokampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `biodata_id` int(11) NOT NULL,
  `biodata_nama` varchar(255) NOT NULL,
  `biodata_email` varchar(255) NOT NULL,
  `biodata_hp` varchar(13) NOT NULL,
  `biodata_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `kontak_id` int(11) NOT NULL,
  `kontak_nama` varchar(255) NOT NULL,
  `kontak_email` varchar(255) NOT NULL,
  `kontak_hp` varchar(13) NOT NULL,
  `kontak_pesan` text NOT NULL,
  `kontak_date` datetime NOT NULL,
  `kontak_status` enum('Belum Dibaca','Sudah Dibaca') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`kontak_id`, `kontak_nama`, `kontak_email`, `kontak_hp`, `kontak_pesan`, `kontak_date`, `kontak_status`) VALUES
(1, 'test', 'taufikkamil522@gmail.com', '082258515288', 'halo salam kenal', '2019-07-18 10:19:36', 'Sudah Dibaca'),
(2, '', '', '', '', '2019-07-10 00:00:00', 'Belum Dibaca');

-- --------------------------------------------------------

--
-- Table structure for table `lomba`
--

CREATE TABLE `lomba` (
  `lomba_id` int(11) NOT NULL,
  `lomba_judul` varchar(255) NOT NULL,
  `lomba_gambar` varchar(255) NOT NULL,
  `lomba_isi` text NOT NULL,
  `lomba_link` text NOT NULL,
  `lomba_deadline` datetime NOT NULL,
  `lomba_tiket` enum('Gratis','Bayar') NOT NULL,
  `lomba_alamat` varchar(255) NOT NULL,
  `lomba_created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `lomba_update_time` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `lomba_kat_id` int(11) NOT NULL,
  `lomba_created_by_id` int(11) NOT NULL,
  `lomba_update_by_id` int(11) NOT NULL,
  `status` enum('Menunggu','Diterima','Ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lomba`
--

INSERT INTO `lomba` (`lomba_id`, `lomba_judul`, `lomba_gambar`, `lomba_isi`, `lomba_link`, `lomba_deadline`, `lomba_tiket`, `lomba_alamat`, `lomba_created_time`, `lomba_update_time`, `lomba_kat_id`, `lomba_created_by_id`, `lomba_update_by_id`, `status`) VALUES
(1, 'ini adalah dunia yang telah kita dia aku kamu situ sana dan yang ada di sini pohon 1 dot png satu satu', 'pohon1.png', 'ini adalah dunia yang telah kita dia aku kamu situ sana dan yang ada di sini pohon 1 dot png satu satu', '1', '2019-07-09 00:00:18', 'Gratis', 'jl. in aja', '2019-07-09 21:04:25', '2019-07-12 20:29:11', 1, 1, 1, 'Diterima'),
(14, '', '', '', '', '0000-00-00 00:00:00', '', '', '2019-07-12 06:03:09', '2019-07-12 06:03:09', 0, 1, 1, 'Menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `lomba_kategori`
--

CREATE TABLE `lomba_kategori` (
  `lomba_kategori_id` int(11) NOT NULL,
  `lomba_kategori_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lomba_kategori`
--

INSERT INTO `lomba_kategori` (`lomba_kategori_id`, `lomba_kategori_nama`) VALUES
(1, 'Nasional');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `team_nama` varchar(50) NOT NULL,
  `team_jabatan` varchar(100) NOT NULL,
  `team_isi` text NOT NULL,
  `team_image` varchar(255) NOT NULL,
  `team_created_time` datetime NOT NULL,
  `team_created_by` int(11) NOT NULL,
  `team_update_time` datetime NOT NULL,
  `team_update_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_nama`, `team_jabatan`, `team_isi`, `team_image`, `team_created_time`, `team_created_by`, `team_update_time`, `team_update_by`) VALUES
(1, 'Aripsssss', 'gamerssssss', 'mntep nih gw anak usu lohsssssssss', 'contoh_pas_photo.jpg', '2018-12-03 14:07:45', 0, '0000-00-00 00:00:00', 0),
(2, '1', '1', '1', 'contoh_pas_photo.jpg', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1),
(3, '3', '3', '3', 'pohon2.png', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(4, '1', '1', '1', 'pohon3.png', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(5, '4', '4', '4', 'pohon.png', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_pass_ret` varchar(255) NOT NULL,
  `user_level` enum('admin','member') NOT NULL,
  `biodata_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`, `user_pass_ret`, `user_level`, `biodata_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`biodata_id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`kontak_id`);

--
-- Indexes for table `lomba`
--
ALTER TABLE `lomba`
  ADD PRIMARY KEY (`lomba_id`);

--
-- Indexes for table `lomba_kategori`
--
ALTER TABLE `lomba_kategori`
  ADD PRIMARY KEY (`lomba_kategori_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `biodata_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `kontak_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lomba`
--
ALTER TABLE `lomba`
  MODIFY `lomba_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lomba_kategori`
--
ALTER TABLE `lomba_kategori`
  MODIFY `lomba_kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
