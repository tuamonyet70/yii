-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 08, 2016 at 01:35 PM
-- Server version: 5.5.52-MariaDB-1ubuntu0.14.04.1
-- PHP Version: 5.6.23-1+deprecated+dontuse+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yii`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata_siswa`
--

CREATE TABLE IF NOT EXISTS `biodata_siswa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `NIS` int(30) NOT NULL,
  `Nama_depan` varchar(100) NOT NULL,
  `Nama_Belakang` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-laki') NOT NULL,
  `agama` enum('Islam','Katolik',' kristen','Hindu','Budha') NOT NULL,
  `semester` enum('Genap',' Ganjil') NOT NULL,
  `jurusan` enum('IPA',' IPS') NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(12) NOT NULL,
  `Alamat` varchar(25) NOT NULL,
  `ayah` varchar(100) NOT NULL,
  `ibu` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `biodata_siswa`
--

INSERT INTO `biodata_siswa` (`id`, `NIS`, `Nama_depan`, `Nama_Belakang`, `jenis_kelamin`, `agama`, `semester`, `jurusan`, `kelas`, `tanggal_lahir`, `Alamat`, `ayah`, `ibu`) VALUES
(2, 456788, 'imam', 'subekti', 'Laki-laki', 'Islam', ' Ganjil', 'IPA', 'x', '1999-11-01', 'Ds.Tasikmadu', 'sarjo', 'ngatemi'),
(3, 284375, 'FAJAR', 'PURNAMA', 'Laki-laki', 'Islam', ' Ganjil', ' IPS', 'XII', '01-14-2010', 'Ds.Tasikmadu', 'WARSONO', 'NGATMINI');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(20) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` enum('IPA',' IPS') NOT NULL,
  `nomer_absen` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nama_siswa`, `kelas`, `jurusan`, `nomer_absen`) VALUES
(1, 'jamil', '10', ' IPS', 1),
(2, 'FIDA', 'X', '', 1),
(7, 'tukiyem', '10', '', 1),
(8, 'Ata', 'X11', 'IPA', 20);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(7, 'guru', 'hwVACmWXedG2YksGhcnL8yr6EJqlNh87', '$2y$13$3yJUwU11jNOm5ffv0rg3weBpQn4hJPIoYDVSBrtiTzHlAN32gchrC', NULL, 'bornline87@gmail.com', 10, 1262291844, 1262291844),
(8, 'bekti', 'hAfKFBxSSpVZISQOnuvIGdhZmPjPMSeY', '$2y$13$lqNLk3AtK/BY.pZ5V4uUD.TLjk2k7zz.aQhzflwmnMhvBbwYDbeLa', NULL, 'bektidukoh@gmail.com', 10, 1262282825, 1262282825),
(9, 'Kepala Sekolah', 'k6G7Wat-9QEzbgwi-ZcgQ9n-I1f_wDCq', '$2y$13$AH4fIHBEAN1oY2k4u.u1o.z.xvoxQasnp60sNn79tAa13Jg9Egl3q', NULL, 'wonglinuxertuban@gmail.com', 10, 1473346349, 1473346349);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `jurusan` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `jurusan`) VALUES
(1, '2'),
(2, 'IPA');

-- --------------------------------------------------------

--
-- Table structure for table `kep_sek`
--

CREATE TABLE IF NOT EXISTS `kep_sek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kep_sek`
--

INSERT INTO `kep_sek` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(3, 'bekti', '-uPAR5JUlvpD0rOOAOOdfJMpN5yJv88n', '$2y$13$sEUwC5WUG.7fvHmz5KcI3eEnveK.PZ5CUn4pI8q1ZGwiOBbLmR2F.', NULL, 'bornline87@gmail.com', 10, 0, 0),
(4, 'uciha', 'YoOpkfinwmf042WLHQ2EtAAlcFclan-c', '$2y$13$lwK8DWQDeHKxXac7QFNYTOEZnwWkJae1PCQsDj8fHKnxxRJ0S5gJ.', NULL, 'bektidukoh@gmail.com', 10, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Matematika'),
(3, 'Bahasa Inggris'),
(4, 'IPA'),
(5, 'Bahasa Indonesia'),
(6, 'Bahasa Indonesia'),
(7, 'Bahasa Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1465313369),
('m130524_201442_init', 1465313372),
('m140602_111327_create_menu_table', 1262333835),
('m160312_050000_create_user', 1262333835);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `mata_pelajaran` varchar(25) NOT NULL,
  `tugas1` int(100) NOT NULL,
  `tugas2` int(100) NOT NULL,
  `uts` int(100) NOT NULL,
  `uas` int(100) NOT NULL,
  `total_nilai` int(200) NOT NULL,
  `nilai_rata_rata` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `mata_pelajaran`, `tugas1`, `tugas2`, `uts`, `uas`, `total_nilai`, `nilai_rata_rata`) VALUES
(1, 'matematika', 35, 79, 90, 1280, 1484, 87),
(2, 'PPKN', 80, 76, 85, 430, 671, 250);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(3, 'bekti', '-uPAR5JUlvpD0rOOAOOdfJMpN5yJv88n', '$2y$13$sEUwC5WUG.7fvHmz5KcI3eEnveK.PZ5CUn4pI8q1ZGwiOBbLmR2F.', NULL, 'bornline87@gmail.com', 10, 0, 0),
(4, 'uciha', 'YoOpkfinwmf042WLHQ2EtAAlcFclan-c', '$2y$13$lwK8DWQDeHKxXac7QFNYTOEZnwWkJae1PCQsDj8fHKnxxRJ0S5gJ.', NULL, 'bektidukoh@gmail.com', 10, 0, 0),
(5, 'Siswa', '38T1G3cmFcFg2EAownLfx4iQJOEkSnxo', '$2y$13$gv7TwiwVIjw1NvFkuLYh8ub8h3SyKkwDSkmPQEqWTzFYzD7QB6GEy', NULL, 'wonglinuxertuban@gmail.com', 10, 1262283175, 1262283175);

-- --------------------------------------------------------

--
-- Table structure for table `study`
--

CREATE TABLE IF NOT EXISTS `study` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `jurusan` varchar(30) NOT NULL,
  `pelajaran` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `study`
--

INSERT INTO `study` (`id`, `jurusan`, `pelajaran`) VALUES
(1, '234', 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `t_u`
--

CREATE TABLE IF NOT EXISTS `t_u` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `t_u`
--

INSERT INTO `t_u` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(3, 'bekti', '-uPAR5JUlvpD0rOOAOOdfJMpN5yJv88n', '$2y$13$sEUwC5WUG.7fvHmz5KcI3eEnveK.PZ5CUn4pI8q1ZGwiOBbLmR2F.', NULL, 'bornline87@gmail.com', 10, 0, 0),
(4, 'uciha', 'YoOpkfinwmf042WLHQ2EtAAlcFclan-c', '$2y$13$lwK8DWQDeHKxXac7QFNYTOEZnwWkJae1PCQsDj8fHKnxxRJ0S5gJ.', NULL, 'bektidukoh@gmail.com', 10, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(7, 'bekti', 'NBqlUDLdH53_nuCtHz3Vl9YDM5ZsYZWH', '$2y$13$U9VZyeo/4ahJrhovD87mmekAwfEvLT3H1SSS1gfUUUe0H9X3xEskW', NULL, 'bornline87@gmail.com', 10, 1469288384, 1469288384);

-- --------------------------------------------------------

--
-- Table structure for table `wali_kelas`
--

CREATE TABLE IF NOT EXISTS `wali_kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `wali_kelas`
--

INSERT INTO `wali_kelas` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(3, 'bekti', '-uPAR5JUlvpD0rOOAOOdfJMpN5yJv88n', '$2y$13$sEUwC5WUG.7fvHmz5KcI3eEnveK.PZ5CUn4pI8q1ZGwiOBbLmR2F.', NULL, 'bornline87@gmail.com', 10, 0, 0),
(4, 'uciha', 'YoOpkfinwmf042WLHQ2EtAAlcFclan-c', '$2y$13$lwK8DWQDeHKxXac7QFNYTOEZnwWkJae1PCQsDj8fHKnxxRJ0S5gJ.', NULL, 'bektidukoh@gmail.com', 10, 0, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
