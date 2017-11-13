-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 03:30 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_cuti`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagian`
--

CREATE TABLE IF NOT EXISTS `bagian` (
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagian`
--

INSERT INTO `bagian` (`id`, `nama`) VALUES
(1, 'IT'),
(2, 'Marketting'),
(3, 'Keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE IF NOT EXISTS `cuti` (
`id` int(11) NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `hak` int(11) NOT NULL,
  `masa_berlaku` int(11) NOT NULL,
  `syarat` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id`, `nama`, `deskripsi`, `hak`, `masa_berlaku`, `syarat`) VALUES
(1, 'Besar', '', 21, 1825, ''),
(2, 'Tahunan', '', 12, 365, ''),
(3, 'Bonus', '', 6, 365, '');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `nik` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_bagian` int(11) NOT NULL,
  `tanggal_masuk_kerja` date NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nik`, `nama`, `id_bagian`, `tanggal_masuk_kerja`, `alamat`, `jabatan`, `username`, `password`, `remember_token`) VALUES
('1', 'Slamet (Karyawan IT)', 1, '2014-01-10', 'Jln. Gatot Subroto', 'karyawan', '1', '$2y$10$5cPZzQDZYsIIbixGi6UdnOULOLLLlyYb3iwGMLPOZM8Q/K.amMZvC', ''),
('12', 'Sukijo (Karyawan Marketting)', 2, '2013-01-10', 'Jln. Markissa', 'karyawan', '12', '$2y$10$uZi/aknbTu6o6RxnUE9LOujJjo0lZNLeX2VDFXCl7aQ0yef/E1XBG', ''),
('123', 'Paijo (Karyawan Keuangan)', 3, '2013-01-01', 'Jln. Jeruk Barat', 'karyawan', '123', '$2y$10$NHX5xS5V2M44F7T6kVnU0egrSeN3ZvxYxrUS.b0pvODDdXGmWTJma', 'UjqqyVgd0LdBVlJlnrVhXK6PJXU1xn2uuNYAsX22pBF3RCGeiQfJJSzmGwpr'),
('1234', 'Priska Tiara (Admin)', 2, '2014-06-01', 'asdfa', 'admin', '1234', '$2y$10$egKO7KoYe9yw3F55mPlrROKZ5P5GxN9E3nCzxGdT3ImrGx/eYom6q', 'J3KosgfdyIk3QxHc3EJn7Le4CJMFb68gwJbgxCjwtfWpyMUNxalEhJqa74AQ'),
('12345', 'Sutarman (Pimpinan IT)', 1, '2011-01-02', 'Jln. Pisang', 'pimpinan', '12345', '$2y$10$0YhNu5PcPy5zGFAzftrFUeFCgbgwPWD4FzOl4zyp9QV.qNYKtY/B.', '798jJh7mQHFcAx6BYjDkr1J6HbGdQugYJqfDAFsAqcKf9FF0mv05R21ZMXvZ'),
('123456', 'Suteja (HR)', 1, '2010-10-10', 'Jln. Kemerdekaan', 'hr', '123456', '$2y$10$Fi4Af6EDuTEjQq7nuEn1oOs0SLKqapDdMR5n4pEKljjQRM10gWbjq', 'tQUkGNhagn7RoczGUyieZh14tLCmIuooElzm01hOI2S5IL9oGhUOXk8HJ2x5'),
('1234567', 'Inem (Pimpinan Marketting)', 2, '2013-01-11', 'Jln. Pemuda', 'pimpinan', '1234567', '$2y$10$fpWk6XmhtbuJuhdYgyQMF.DEq59/QTaDhzj9H7HTTvZaruo3mtnBu', '5OR4fRX8VP6yIV9YFpnsdTjYtwGKMynSltYnE9mdiZr8wFa8TWu5rpWz7TQi'),
('12345678', 'Suratman (Pimpinan Keuangan)', 3, '2010-10-10', 'Jln. Perintis Kemerdekaan', 'pimpinan', '12345678', '$2y$10$g5P/XLez5EZALCeMLfN7P.yKgP2OiImHkwzKDB/LxOsmDMiz74Dlq', '');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
`id_kota` int(11) NOT NULL,
  `nama_kota` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
(1, 'kendari'),
(2, 'bandung');

-- --------------------------------------------------------

--
-- Table structure for table `kouta_cuti`
--

CREATE TABLE IF NOT EXISTS `kouta_cuti` (
`id_kuota` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `sisa_kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level_user`
--

CREATE TABLE IF NOT EXISTS `level_user` (
`id_level_user` int(11) NOT NULL,
  `nama_level` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level_user`
--

INSERT INTO `level_user` (`id_level_user`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'Pemimpin'),
(3, 'Pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`id_menu` int(11) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE IF NOT EXISTS `notifikasi` (
`id` int(11) NOT NULL,
  `to` varchar(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `status` varchar(6) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id`, `to`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, '1234', 'Pengajuan Cuti Besar tanggal 3 Agustus 2014, telah disetujui', 'read', '2014-08-05 00:00:00', '2014-08-10 19:50:58'),
(2, '1234', 'Pengajuan Cuti {"id":2,"nama":"Tahunan","deskripsi":"","hak":12,"masa_berlaku":365,"syarat":""}->nama tanggal 2014-08-10 telah disetujui', 'read', '2014-08-10 20:10:19', '2014-08-10 20:14:29'),
(3, '1234', 'Pengajuan CutiTahunantanggal 2014-08-10 telah disetujui', 'read', '2014-08-10 20:13:56', '2014-08-10 20:14:27'),
(4, '1234', 'Pengajuan Cuti Tahunan tanggal 2014-08-10 telah disetujui', 'read', '2014-08-10 20:15:01', '2014-08-10 20:17:05'),
(5, '1234', 'Pengajuan Cuti Tahunan tanggal 2014-08-10 ditolak', 'read', '2014-08-10 20:16:47', '2014-08-10 20:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
`id_pegawai` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama_pegawai` varchar(500) NOT NULL,
  `jabatan` varchar(500) NOT NULL,
  `status` enum('PNS','Honorer') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nik`, `nama_pegawai`, `jabatan`, `status`) VALUES
(1, '11111111111', 'Ilham', 'Bagian IT', 'PNS'),
(2, '22222222222', 'Yogi', 'Bagian Logistik', 'PNS');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_cuti`
--

CREATE TABLE IF NOT EXISTS `pengajuan_cuti` (
`id_pengajuan` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_type_cuti` int(11) NOT NULL,
  `tgl_sekarang` date NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `id_kota` int(11) NOT NULL,
  `alasan` text NOT NULL,
  `disetujui_pimpinan` int(11) NOT NULL,
  `disetujui_hr` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan_cuti`
--

INSERT INTO `pengajuan_cuti` (`id_pengajuan`, `id_pegawai`, `id_type_cuti`, `tgl_sekarang`, `tgl_mulai`, `tgl_selesai`, `id_kota`, `alasan`, `disetujui_pimpinan`, `disetujui_hr`) VALUES
(1, 1, 1, '2017-11-01', '2017-11-09', '2017-11-23', 1, 'Maklassssss', 0, 0),
(2, 2, 2, '2017-11-17', '2017-11-18', '2017-11-30', 2, 'hjhjghjfjjfjfhjfhj', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE IF NOT EXISTS `permission` (
`group_id` mediumint(9) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type_cuti`
--

CREATE TABLE IF NOT EXISTS `type_cuti` (
`id_type_cuti` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `id_kuota` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_cuti`
--

INSERT INTO `type_cuti` (`id_type_cuti`, `type`, `keterangan`, `id_kuota`) VALUES
(1, 'Bulanan', 'Cuti 12 Hari kerja', 1),
(2, 'Tahunan', 'Cuti 36 Hari kerja', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_user` int(11) unsigned NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `nama_lengkap` varchar(500) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `id_level_user` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `id_pegawai`, `nama_lengkap`, `username`, `password`, `id_level_user`, `foto`) VALUES
(2, 1, 'Ilham Julian Efendi', 'ilham', '57cf5ad49695e3adc1a29cf47a43bc06', 1, 'cacacacsca'),
(3, 2, 'Syafruddin Ode', 'yogi', '5621be1f2352574f7a48ba5596a7c69d', 2, 'cacacacafa');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pengajuan_cuti`
--
CREATE TABLE IF NOT EXISTS `v_pengajuan_cuti` (
`id_pengajuan` int(11)
,`nama_pegawai` varchar(500)
,`type` varchar(200)
,`tgl_sekarang` date
,`tgl_mulai` date
,`tgl_selesai` date
,`nama_kota` varchar(500)
,`alasan` text
,`disetujui_pimpinan` int(11)
,`disetujui_hr` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_user`
--
CREATE TABLE IF NOT EXISTS `v_user` (
`id_user` int(11) unsigned
,`id_pegawai` int(11)
,`nama_lengkap` varchar(500)
,`username` varchar(300)
,`password` varchar(300)
,`id_level_user` int(11)
,`foto` text
,`nama_level` varchar(300)
);
-- --------------------------------------------------------

--
-- Structure for view `v_pengajuan_cuti`
--
DROP TABLE IF EXISTS `v_pengajuan_cuti`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pengajuan_cuti` AS select `pengajuan_cuti`.`id_pengajuan` AS `id_pengajuan`,`pegawai`.`nama_pegawai` AS `nama_pegawai`,`type_cuti`.`type` AS `type`,`pengajuan_cuti`.`tgl_sekarang` AS `tgl_sekarang`,`pengajuan_cuti`.`tgl_mulai` AS `tgl_mulai`,`pengajuan_cuti`.`tgl_selesai` AS `tgl_selesai`,`kota`.`nama_kota` AS `nama_kota`,`pengajuan_cuti`.`alasan` AS `alasan`,`pengajuan_cuti`.`disetujui_pimpinan` AS `disetujui_pimpinan`,`pengajuan_cuti`.`disetujui_hr` AS `disetujui_hr` from (((`pengajuan_cuti` join `pegawai` on((`pengajuan_cuti`.`id_pegawai` = `pegawai`.`id_pegawai`))) join `type_cuti` on((`pengajuan_cuti`.`id_type_cuti` = `type_cuti`.`id_type_cuti`))) join `kota` on((`pengajuan_cuti`.`id_kota` = `kota`.`id_kota`)));

-- --------------------------------------------------------

--
-- Structure for view `v_user`
--
DROP TABLE IF EXISTS `v_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_user` AS select `u`.`id_user` AS `id_user`,`u`.`id_pegawai` AS `id_pegawai`,`u`.`nama_lengkap` AS `nama_lengkap`,`u`.`username` AS `username`,`u`.`password` AS `password`,`u`.`id_level_user` AS `id_level_user`,`u`.`foto` AS `foto`,`lu`.`nama_level` AS `nama_level` from (`users` `u` join `level_user` `lu`) where (`u`.`id_level_user` = `lu`.`id_level_user`);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
 ADD PRIMARY KEY (`nik`), ADD KEY `id_bagian` (`id_bagian`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
 ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `kouta_cuti`
--
ALTER TABLE `kouta_cuti`
 ADD PRIMARY KEY (`id_kuota`);

--
-- Indexes for table `level_user`
--
ALTER TABLE `level_user`
 ADD PRIMARY KEY (`id_level_user`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pengajuan_cuti`
--
ALTER TABLE `pengajuan_cuti`
 ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
 ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `type_cuti`
--
ALTER TABLE `type_cuti`
 ADD PRIMARY KEY (`id_type_cuti`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bagian`
--
ALTER TABLE `bagian`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kouta_cuti`
--
ALTER TABLE `kouta_cuti`
MODIFY `id_kuota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `level_user`
--
ALTER TABLE `level_user`
MODIFY `id_level_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengajuan_cuti`
--
ALTER TABLE `pengajuan_cuti`
MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
MODIFY `group_id` mediumint(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `type_cuti`
--
ALTER TABLE `type_cuti`
MODIFY `id_type_cuti` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
