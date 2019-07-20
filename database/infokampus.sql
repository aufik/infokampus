-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2019 at 04:54 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

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
  `biodata_id` varchar(11) NOT NULL,
  `biodata_nama` varchar(255) NOT NULL,
  `biodata_email` varchar(255) NOT NULL,
  `biodata_hp` varchar(13) NOT NULL,
  `biodata_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`biodata_id`, `biodata_nama`, `biodata_email`, `biodata_hp`, `biodata_foto`) VALUES
('BIO0000001', '', '1@mail.com', '', ''),
('BIO0000002', '', '1@mail.com', '', ''),
('BIO0000003', '', 'kamil@mail.com', '', ''),
('BIO0000004', '', 'kamil1@gmail.com', '', ''),
('BIO0000005', '', 'test@mail.com', '', ''),
('BIO0000006', '', '', '', '');

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
(2, '', '', '', '', '2019-07-10 00:00:00', 'Sudah Dibaca');

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
  `lomba_created_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lomba_update_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lomba_kat_id` int(11) NOT NULL,
  `lomba_created_by_id` int(11) NOT NULL,
  `lomba_update_by_id` int(11) NOT NULL,
  `status` enum('Menunggu','Diterima','Ditolak') NOT NULL,
  `lomba_keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lomba`
--

INSERT INTO `lomba` (`lomba_id`, `lomba_judul`, `lomba_gambar`, `lomba_isi`, `lomba_link`, `lomba_deadline`, `lomba_tiket`, `lomba_alamat`, `lomba_created_time`, `lomba_update_time`, `lomba_kat_id`, `lomba_created_by_id`, `lomba_update_by_id`, `status`, `lomba_keterangan`) VALUES
(1, 'ini adalah dunia yang telah kita dia aku kamu situ sana dan yang ada di sini pohon 1 dot png satu satu', 'pohon1.png', 'ini adalah dunia yang telah kita dia aku kamu situ sana dan yang ada di sini pohon 1 dot png satu satu', '1', '2019-07-09 00:00:18', 'Gratis', 'jl. in aja', '2019-07-09 21:04:25', '2019-07-12 20:29:11', 1, 1, 1, 'Diterima', ''),
(14, '', '', '', '', '0000-00-00 00:00:00', '', '', '2019-07-12 06:03:09', '2019-07-18 15:51:21', 1, 1, 1, 'Ditolak', '<p>maaf Lomba Tidak Jelas, Harap diperbaiki terlebih dahulu</p>'),
(19, '14', 'oil-bottle7.png', '<p>14</p>', '4', '2020-07-18 00:00:00', '', '4', '2019-07-17 02:30:05', '2019-07-18 14:53:08', 1, 6, 6, 'Diterima', ''),
(24, '1', 'index.jpg', '<p>1111</p>', '1', '0000-00-00 00:00:00', '', '1', '2019-07-17 03:20:08', '2019-07-18 15:45:46', 1, 6, 6, 'Ditolak', ''),
(25, '2', 'crude_palm_oil_23.jpg', '<p>2</p>', '2', '2020-02-02 14:02:00', '', '2', '2019-07-17 03:22:21', '2019-07-18 15:49:48', 1, 6, 6, 'Ditolak', '<p>maaf Lomba Tidak Jelas, Harap diperbaiki terlebih dahulu</p>');

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
(1, 'Nasional'),
(2, 'Internasional');

-- --------------------------------------------------------

--
-- Table structure for table `parameter`
--

CREATE TABLE `parameter` (
  `id_pt` int(11) NOT NULL,
  `nama_pt` varchar(225) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tentang` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `identitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parameter`
--

INSERT INTO `parameter` (`id_pt`, `nama_pt`, `no_telp`, `alamat`, `email`, `tentang`, `visi`, `misi`, `identitas`) VALUES
(0, 'PT. BERKAH MULIA FARM', ' (061) 7640663', 'Jl. Sultan Serdang, Batang Kuis Pasar VII Gg. Rotan Tanjung Morawa, Deli Serdang', 'info@bmfarm.com', '<p><strong>PT. BERKAH MULIA BETON</strong>&nbsp;atau masyarakat lebih mengenalnya dengan&nbsp;<strong>PT. BM BETON</strong>&nbsp;merupakan perusahaan Supplier Ready Mix Concrete (beton cor siap pakai) dengan mutu dan harga terbaik sesuai dengan standar nasional untuk pengecoran pada proyek pembangunan skala kecil dan skala besar baik itu struktural maupun non struktural seperti proyek pembangunan jalan raya, jalan komplek/perumahan, jalan tol, jalan setapak, jalan desa, rumah tinggal, toko, supermarket, gedung perkantoran, apartemen, tower, jembatan dan lain-lain.</p>\r\n\r\n<p>PT. BM Beton juga menyewakan berbagai sarana pendukung pengecoran seperti : Pompa Beton (Concrete Pump), Alat Getar (Vibrator), Trowle dan lain-lain. PT. BM Beton juga menerima jasa pesanan pengerjaan proyek seperti proyek pembangunan jalan, pengerjaan rumah tinggal dan lain-lain.</p>\r\n\r\n<p>PT. BM BETON telah beroperasi sejak tahun 2010 dengan mengembangkan pasar readymix concrete diwilayah Medan dan sekitarnya. PT. BM Beton didukung oleh sumber daya manusia yang memiliki team work terbaik, potensial, berkualitas serta pemahaman akan kebutuhan pasar yang kompetitif dan dinamis sejalan dengan pertumbuhan ekonomi khususnya di wilayah Medan.</p>\r\n\r\n<p>Kejujuran, kerja keras, disiplin, dedikasi, integritas dan kerja sama merupakan standar nilai utama yang terus menerus kami bangun untuk menghasilkan sumber daya yang terampil dan berwawasan luas dalam mendukung pelanggan mencapai produktivitas.</p>\r\n', '<blockquote>\r\n<p>&quot;Senantiasa berusaha menjadi perusahaan yang terbaik dan terdepan dalam industry readymix di Indonesia dan juga memberikan kualitas terbaik dalam jasa konstruksi dan investasi untuk memenuhi kepuasan pelanggan, pemegang saham dan karyawan melalui pengembangan SDM, teknologi, proses bisnis internal dan pertumbuhan yang berkesinambungan&quot;</p>\r\n</blockquote>\r\n', '<blockquote>\r\n<ul>\r\n	<li>Menyediakan produk dan jasa yang berkualitas tinggi</li>\r\n	<li>Meningkatkan nilai yang tinggi bagi pemegang saham</li>\r\n	<li>Memenuhi kebutuhan pelanggan dengan produk dan layanan yang handal</li>\r\n	<li>Memberikan lingkungan kerja yang aman dan meningkatkan kesejahteraan dan memberikan kesempatan berkembang bagi karyawan</li>\r\n	<li>Mengembangkan proses bisnis yang efektif dan efisien untuk meningkatkan daya saing</li>\r\n	<li>Meningkatkan hubungan kemitraan dengan mitra kerja atas dasar kesetaraan</li>\r\n	<li>Menjaga lingkungan bisnis dengan menghindari persaingan tidak sehat</li>\r\n	<li>Menjaga keseimbangan lingkungan dengan memperhatikan dampak lingkungan dan masyarakat sekitar</li>\r\n</ul>\r\n</blockquote>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_pt` int(11) NOT NULL,
  `nama_pt` varchar(255) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tentang` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `identitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_pt`, `nama_pt`, `no_telp`, `alamat`, `email`, `tentang`, `visi`, `misi`, `identitas`) VALUES
(1, 'INFOKAMPUS', '08951239129', 'Jl.Sei Padang No.76 Kota Medan, Kelurahan Merdeka, Kecamatan Medan Bary', 'md.infokampus@gmail.com', '<p>Infokampus adalah sebuah Start-up yang berfokus sebagai portal informasi lomba, beasiswa, dan berbagai event kampus, sekolah, dan instansi terkait.</p>\r\n', '<p>Infokampus adalah sebuah Start-up yang berfokus sebagai portal informasi lomba, beasiswa, dan berbagai event kampus, sekolah, dan instansi terkait.</p>\r\n', '<p>Infokampus adalah sebuah Start-up yang berfokus sebagai portal informasi lomba, beasiswa, dan berbagai event kampus, sekolah, dan instansi terkait.</p>\r\n', '');

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
  `user_level` enum('member','admin') NOT NULL,
  `biodata_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`, `user_pass_ret`, `user_level`, `biodata_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', '0'),
(2, '1', 'c4ca4238a0b923820dcc509a6f75849b', '1', 'member', 'BIO0000001'),
(4, 'kamil', '9c88bffe244ae9a2e3fda52c5a88799f', 'kamil123!@#', 'member', 'BIO0000003'),
(5, 'kamil1', '832b094432677a13aa800cf0c685a032', 'kamil1', 'member', 'BIO0000004'),
(6, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'member', 'BIO0000005');

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
-- Indexes for table `parameter`
--
ALTER TABLE `parameter`
  ADD PRIMARY KEY (`id_pt`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_pt`);

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
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `kontak_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lomba`
--
ALTER TABLE `lomba`
  MODIFY `lomba_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `lomba_kategori`
--
ALTER TABLE `lomba_kategori`
  MODIFY `lomba_kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parameter`
--
ALTER TABLE `parameter`
  MODIFY `id_pt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_pt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
