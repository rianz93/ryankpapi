-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 07:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lppm`
--

-- --------------------------------------------------------

--
-- Table structure for table `hibah_ditlitabmas`
--

CREATE TABLE `hibah_ditlitabmas` (
  `hibah_id` varchar(20) NOT NULL,
  `hibah_tahun_kegiatan` date NOT NULL,
  `hibah_judul_penelitian` varchar(50) NOT NULL,
  `hibah_personil_penelitian` varchar(50) NOT NULL,
  `hibah_jabatan` varchar(20) NOT NULL,
  `hibah_bidang_penelitian` varchar(20) NOT NULL,
  `hibah_dana` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hibah_nonditlitabmas`
--

CREATE TABLE `hibah_nonditlitabmas` (
  `hibah_nonditlitabmas_id` varchar(10) NOT NULL,
  `hibah_nonditlitabmas_tahun_kegiatan` date NOT NULL,
  `hibah_nonditlitabmas_judul_penelitian` varchar(50) NOT NULL,
  `hibah_nonditlitabmas_personil_penelitian` varchar(50) NOT NULL,
  `hibah_nonditlitabmas_jabatan` varchar(35) NOT NULL,
  `hibah_nonditlitabmas_jenis_penelitian` varchar(50) NOT NULL,
  `hibah_nonditlitabmas_bidang_penelitian` varchar(50) NOT NULL,
  `hibah_nonditlitabmas_sumber_dana` varchar(50) NOT NULL,
  `hibah_nonditlitabmas_institusi` varchar(35) NOT NULL,
  `hibah_nonditlitabmas_jumlah_dana` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian_buku_ajar`
--

CREATE TABLE `penelitian_buku_ajar` (
  `buku_ajar_id` varchar(10) NOT NULL,
  `buku_ajar_tahun` date NOT NULL,
  `buku_ajar_nama_dosen` varchar(35) NOT NULL,
  `buku_ajar_NIDN` varchar(35) NOT NULL,
  `buku_ajar_judul` varchar(50) NOT NULL,
  `buku_ajar_penerbit` varchar(35) NOT NULL,
  `buku_ajar_ISBN` varchar(35) NOT NULL,
  `buku_ajar_jumlah_halaman` int(20) NOT NULL,
  `buku_ajar_halaman_cover` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian_forum_ilmiah`
--

CREATE TABLE `penelitian_forum_ilmiah` (
  `forum_ilmiah_id` varchar(20) NOT NULL,
  `forum_ilmiah_jenis` varchar(35) NOT NULL,
  `forum_ilmiah_tahun_kegiatan` date NOT NULL,
  `forum_ilmiah_nama_dosen` varchar(50) NOT NULL,
  `forum_ilmiah_NIDN` varchar(20) NOT NULL,
  `forum_ilmiah_status` varchar(50) NOT NULL,
  `forum_ilmiah_judul_makalah` varchar(50) NOT NULL,
  `forum_ilmiah_penyelenggara` varchar(50) NOT NULL,
  `forum_ilmiah_nama` varchar(50) NOT NULL,
  `forum_ilmiah_tanggal_mulai` date NOT NULL,
  `forum_ilmiah_tanggal_selesai` date NOT NULL,
  `forum_ilmiah_berkas` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian_hki`
--

CREATE TABLE `penelitian_hki` (
  `hki_id` int(10) NOT NULL,
  `hki_tahun` date NOT NULL,
  `hki_nama_dosen` varchar(50) NOT NULL,
  `hki_NIDN` varchar(35) NOT NULL,
  `hki_judul` varchar(50) NOT NULL,
  `hki_jenis` varchar(35) NOT NULL,
  `hki_no_pendaftaraan` varchar(35) NOT NULL,
  `hki_status` varchar(35) NOT NULL,
  `hki_nomor` varchar(35) NOT NULL,
  `hki_berkas` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian_jurnal`
--

CREATE TABLE `penelitian_jurnal` (
  `jurnal_id` varchar(10) NOT NULL,
  `jurnal_jenis_jurnal` varchar(99) NOT NULL,
  `jurnal_tahun_kegiatan` date NOT NULL,
  `jurnal_judul_publikasi` varchar(50) NOT NULL,
  `jurnal_nama` varchar(50) NOT NULL,
  `jurnal_ISSN` varchar(20) NOT NULL,
  `jurnal_volume` varchar(20) NOT NULL,
  `jurnal_nomor` varchar(20) NOT NULL,
  `jurnal_url` varchar(99) NOT NULL,
  `jurnal_berkas` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian_luaran`
--

CREATE TABLE `penelitian_luaran` (
  `luaran_id` varchar(10) NOT NULL,
  `luaran_tahun_kegiatan` date NOT NULL,
  `luaran_nama_dosen` varchar(50) NOT NULL,
  `luaran_NIDN` varchar(35) NOT NULL,
  `luaran_luaran` varchar(35) NOT NULL,
  `luaran_jenis` varchar(35) NOT NULL,
  `luaran_deskripsi_singkat` varchar(99) NOT NULL,
  `luaran_berkas` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `peneliti_asing`
--

CREATE TABLE `peneliti_asing` (
  `peneliti_id` varchar(10) NOT NULL,
  `peneliti_tahun` date NOT NULL,
  `peneliti_nama` varchar(99) NOT NULL,
  `peneliti_jenis_kelamin` varchar(20) NOT NULL,
  `peneliti_akademik` varchar(50) NOT NULL,
  `peneliti_negara` varchar(20) NOT NULL,
  `peneliti_tanggal_mulai` date NOT NULL,
  `peneliti_tanggal_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peneliti_asing`
--

INSERT INTO `peneliti_asing` (`peneliti_id`, `peneliti_tahun`, `peneliti_nama`, `peneliti_jenis_kelamin`, `peneliti_akademik`, `peneliti_negara`, `peneliti_tanggal_mulai`, `peneliti_tanggal_selesai`) VALUES
('pa1', '2020-11-11', 'steven chow', 'laki-laki', 'informatika', 'perancis', '2020-11-04', '2020-11-06');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `penulis_id` varchar(10) NOT NULL,
  `junal_id` varchar(10) NOT NULL,
  `penulis_nama_penulis` varchar(99) NOT NULL,
  `penulis_ke` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penyelenggaraan_forum`
--

CREATE TABLE `penyelenggaraan_forum` (
  `penyelenggaraan_forum_id` varchar(10) NOT NULL,
  `penyelenggaraan_forum_tahun_kegiatan` date NOT NULL,
  `penyelenggaraan_forum_nama_kegiatan` varchar(50) NOT NULL,
  `penyelenggaraan_forum_level` varchar(35) NOT NULL,
  `penyelenggaraan_forum_pelaksana` varchar(35) NOT NULL,
  `penyelenggaraan_forum_mitra` int(35) NOT NULL,
  `penyelenggaraan_forum_tanggal_mulai` date NOT NULL,
  `penyelenggaraan_forum_tanggal_selesai` date NOT NULL,
  `penyelenggaraan_forum_tempat` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `unit_bisnis_hr`
--

CREATE TABLE `unit_bisnis_hr` (
  `unit_bisnis_hr_id` varchar(10) NOT NULL,
  `unit_bisnis_hr_lingkup_kegiatan` varchar(50) NOT NULL,
  `unit_bisnis_hr_sk` varchar(35) NOT NULL,
  `unit_bisnis_hr_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hibah_ditlitabmas`
--
ALTER TABLE `hibah_ditlitabmas`
  ADD PRIMARY KEY (`hibah_id`);

--
-- Indexes for table `hibah_nonditlitabmas`
--
ALTER TABLE `hibah_nonditlitabmas`
  ADD PRIMARY KEY (`hibah_nonditlitabmas_id`);

--
-- Indexes for table `penelitian_buku_ajar`
--
ALTER TABLE `penelitian_buku_ajar`
  ADD PRIMARY KEY (`buku_ajar_id`);

--
-- Indexes for table `penelitian_hki`
--
ALTER TABLE `penelitian_hki`
  ADD PRIMARY KEY (`hki_id`);

--
-- Indexes for table `penelitian_jurnal`
--
ALTER TABLE `penelitian_jurnal`
  ADD PRIMARY KEY (`jurnal_id`);

--
-- Indexes for table `penelitian_luaran`
--
ALTER TABLE `penelitian_luaran`
  ADD PRIMARY KEY (`luaran_id`);

--
-- Indexes for table `peneliti_asing`
--
ALTER TABLE `peneliti_asing`
  ADD PRIMARY KEY (`peneliti_id`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`penulis_id`);

--
-- Indexes for table `penyelenggaraan_forum`
--
ALTER TABLE `penyelenggaraan_forum`
  ADD PRIMARY KEY (`penyelenggaraan_forum_id`);

--
-- Indexes for table `unit_bisnis_hr`
--
ALTER TABLE `unit_bisnis_hr`
  ADD PRIMARY KEY (`unit_bisnis_hr_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penulis`
--
ALTER TABLE `penulis`
  ADD CONSTRAINT `penulis_ibfk_1` FOREIGN KEY (`penulis_id`) REFERENCES `penelitian_jurnal` (`jurnal_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
