-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2016 at 11:01 PM
-- Server version: 10.0.25-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.4-7ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `idAdministrator` int(2) NOT NULL,
  `nama` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idGuru` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `idSiswa` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`idAdministrator`, `nama`, `username`, `password`, `idGuru`, `idSiswa`) VALUES
(1, 'Andi Sholihin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', ''),
(3, 'Qutsiyah', 'qutsi', 'b9dc597fff690a099a7662fe97c253da', '', ''),
(2, 'Achmad Fauzi', 'fauzi', '0bd9897bf12294ce35fdc0e21065c8a7', '', ''),
(12, 'imam', 'bekti', 'linuxmint', 'bekti', 'tarom');

-- --------------------------------------------------------

--
-- Table structure for table `data_nilai`
--

CREATE TABLE `data_nilai` (
  `mata_pelajaran` varchar(25) NOT NULL,
  `tugas1` int(11) NOT NULL,
  `tugas2` int(11) NOT NULL,
  `uts` int(11) NOT NULL,
  `uas` int(11) NOT NULL,
  `total_nilai` int(11) NOT NULL,
  `nilai_rata_rata` int(11) NOT NULL,
  `id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_pelajaran`
--

CREATE TABLE `data_pelajaran` (
  `pelajaran` varchar(15) NOT NULL,
  `guru_pengajar` varchar(15) NOT NULL,
  `semester` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pelajaran`
--

INSERT INTO `data_pelajaran` (`pelajaran`, `guru_pengajar`, `semester`, `id`) VALUES
('matematika', 'sulastri', 2, 1),
('matematika', 'sulis', 2, 2),
('ppkn', 'surti', 2, 3),
('penjaskes', 'sardi', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `kelas` varchar(20) NOT NULL,
  `nama_siswa` varchar(20) NOT NULL,
  `id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`kelas`, `nama_siswa`, `id`) VALUES
('x', 'jamil', 1);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `idGuru` int(5) NOT NULL,
  `nama` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wali_kelas` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idWali_kelas` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`idGuru`, `nama`, `alamat`, `wali_kelas`, `password`, `foto`, `idWali_kelas`) VALUES
(1, 'Budi Sentosa', 'Pamekasan', 'X-1', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', '123'),
(2, 'Bahruddin', 'Sampang', 'X-2', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(3, 'Sitti Zulaiha', 'Pamekasan', 'X-3', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(4, 'Dani ramadhan', 'Sumenep', 'X-4', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(5, 'Susanto Bakri', 'Bangkalan', 'XI IPA 1', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(6, 'Megawati Pratiwi', 'Pamekasan', 'XI IPA 2', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(7, 'Midun', 'Kamal', 'XI IPA 3', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(8, 'Moh Salman', 'Kamal', 'XI IPA 3', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(9, 'Dewi Karisma', 'Kamal', 'XI IPS 1', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(10, 'Reny Sinta', 'Bangkalan', 'XI IPS 2', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(11, 'Sudi Yanto', 'Pamekasan', 'XI IPS 3', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(12, 'Dina Atiqah', 'Sampang', 'XI IPS 4', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(13, 'Citra Ananda', 'Kamal', 'Tidak', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(14, 'Hidayatul Mustafidah', 'Gresik', 'Tidak', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `input_nilai`
--

CREATE TABLE `input_nilai` (
  `kelas` int(10) NOT NULL,
  `nama_siswa` varchar(20) NOT NULL,
  `id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_nilai`
--

INSERT INTO `input_nilai` (`kelas`, `nama_siswa`, `id`) VALUES
(10, '', 1),
(10, 'surti', 2),
(10, 'Abdul Malik', 5);

-- --------------------------------------------------------

--
-- Table structure for table `input_siswa`
--

CREATE TABLE `input_siswa` (
  `id` int(25) NOT NULL,
  `NIS` int(25) NOT NULL,
  `nama_siswa` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(7) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_siswa`
--

INSERT INTO `input_siswa` (`id`, `NIS`, `nama_siswa`, `jenis_kelamin`, `agama`, `tempat_lahir`, `tanggal_lahir`) VALUES
(6, 185658, '4657', 'perempuan', 'islam', 'tuban', '1992-06-06'),
(123, 123, 'fkdjfmkd', 'laki-laki', 'hindu', 'tuban', '0000-00-00'),
(4657, 56865, '4657', 'laki-laki', 'islam', 'tuban', '0000-00-00'),
(123456, 12345, 'tarom', 'laki-laki', 'kristen', 'tuban', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `idmata_pelajaran` int(5) NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`idmata_pelajaran`, `nama`) VALUES
(9, 'Matematika'),
(10, 'Bahasa Inggris'),
(11, 'Fisika'),
(12, 'Biologi'),
(13, 'Pendidikan Agama Islam'),
(14, 'Teknologi Informasi Dan Komunikasi'),
(15, 'Sosiologi'),
(16, 'Bahasa Daerah'),
(18, 'Kimia'),
(19, 'Bahasa Indonesia'),
(20, 'Bahasa Jawa');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1465313369),
('m130524_201442_init', 1465313372);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `idSiswa` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`idSiswa`, `nama`, `alamat`, `kelas`, `password`) VALUES
('1221', 'Ahmad Ali Irfan', 'Jenu', 'XII IPS 3', '827ccb0eea8a706c4c34a16891f84e7b'),
('1215', 'Afida Yuana Rahayu', 'Tasikmadu', 'X IPS 3', '827ccb0eea8a706c4c34a16891f84e7b'),
('2111', 'Dina Cintya', 'Pamekasan', 'XII IPA 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('2113', 'Dinda Asmara', 'Sampang', 'XII IPA 3', '827ccb0eea8a706c4c34a16891f84e7b'),
('2114', 'Suci Permata', 'Sumenep', 'XII IPA 4', '827ccb0eea8a706c4c34a16891f84e7b'),
('2115', 'Asmirandah', 'Bangkalan', 'XI IPA 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('1110', 'Fandi Irawan', 'Sampang', 'X - 3', '827ccb0eea8a706c4c34a16891f84e7b'),
('1212', 'Gilang Ramadhan', 'Sampang', 'X - 4', '827ccb0eea8a706c4c34a16891f84e7b'),
('1010', 'Misbahul Munir', 'Sampang', 'XI IPS 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('1000', 'Eka Sucianti', 'Pamekasan', 'X - 2', '827ccb0eea8a706c4c34a16891f84e7b'),
('0809', 'Syaifuddin', 'Pamekasan', 'X - 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('1001', 'Wardatul Hayati', 'Kamal', 'X - 2', '827ccb0eea8a706c4c34a16891f84e7b'),
('1023', 'Soraya Putri', 'Bangkalan', 'XI IPA 1', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'bekti', 'dQWMBa8xgCLZOYwsGPtiYShZr4VbOgK-', '$2y$13$W8Gnqaux/R/P7bQTfBRI.uGu0uI9xHSu5OeL85w.lgjcqb0zm567O', NULL, 'bektidukoh@gmail.com', 10, 1465313473, 1465313473),
(2, 'hasan', 'N6-PW9kFGzXTsBCBajLFQ8Rn4XoFN0OF', '$2y$13$YMOtQeG0NesPxAX5Z1EICuCm88iEDnNPZg8.GKLXg.aTFWCje2qG2', NULL, 'wonglinuxertuban@gmail.com', 10, 1465660974, 1465660974),
(3, 'dian', 'm9KFW6c6ohorlUk-k2FDjrfPC09hCafZ', '$2y$13$sYufbTJ76R7o6m8QSEK7l.6hHmeG0OTiWPU5JtZqwzHQVJMG55bW.', NULL, 'bornline87@gmail.com', 10, 1465901200, 1465901200);

-- --------------------------------------------------------

--
-- Table structure for table `wali_kelas`
--

CREATE TABLE `wali_kelas` (
  `idWali_kelas` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wali_kelas`
--

INSERT INTO `wali_kelas` (`idWali_kelas`, `password`) VALUES
('surti', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`idAdministrator`,`idGuru`,`idSiswa`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `fk_Administrator_Guru` (`idGuru`),
  ADD KEY `fk_Administrator_Siswa` (`idSiswa`);

--
-- Indexes for table `data_nilai`
--
ALTER TABLE `data_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pelajaran`
--
ALTER TABLE `data_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`idGuru`),
  ADD KEY `fk_Guru_Wali_kelas` (`idWali_kelas`);

--
-- Indexes for table `input_nilai`
--
ALTER TABLE `input_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_siswa`
--
ALTER TABLE `input_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`idmata_pelajaran`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`idSiswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD PRIMARY KEY (`idWali_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `idAdministrator` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `idmata_pelajaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
