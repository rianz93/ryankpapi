-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 07:05 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `hibah_tahun_kegiatan` varchar(20) NOT NULL,
  `hibah_judul_penelitian` varchar(50) NOT NULL,
  `hibah_personil_penelitian` varchar(50) NOT NULL,
  `hibah_jabatan` varchar(20) NOT NULL,
  `hibah_bidang_penelitian` varchar(20) NOT NULL,
  `hibah_dana` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hibah_ditlitabmas`
--

INSERT INTO `hibah_ditlitabmas` (`hibah_id`, `hibah_tahun_kegiatan`, `hibah_judul_penelitian`, `hibah_personil_penelitian`, `hibah_jabatan`, `hibah_bidang_penelitian`, `hibah_dana`) VALUES
('HD931', '2019', 'iot tetete', 'firman', 'pengusul', 'biotech', 260000000);

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
  `buku_ajar_tahun` varchar(35) NOT NULL,
  `buku_ajar_nama_dosen` varchar(35) NOT NULL,
  `buku_ajar_NIDN` varchar(35) NOT NULL,
  `buku_ajar_judul` varchar(50) NOT NULL,
  `buku_ajar_penerbit` varchar(35) NOT NULL,
  `buku_ajar_ISBN` varchar(35) NOT NULL,
  `buku_ajar_jumlah_halaman` int(20) NOT NULL,
  `buku_ajar_halaman_cover` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penelitian_buku_ajar`
--

INSERT INTO `penelitian_buku_ajar` (`buku_ajar_id`, `buku_ajar_tahun`, `buku_ajar_nama_dosen`, `buku_ajar_NIDN`, `buku_ajar_judul`, `buku_ajar_penerbit`, `buku_ajar_ISBN`, `buku_ajar_jumlah_halaman`, `buku_ajar_halaman_cover`) VALUES
('BA581', '2006', 'Eston Sulli S.T.', '17013078', 'Implementasi Password Hash Pada Aplikasi Web', 'Deep Publisher', '2554-2876', 50, 'http://localhost/ryankp/penelitian/berkas/BA84Generated (1).pdf');

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
  `hki_id` varchar(10) NOT NULL,
  `hki_tahun` varchar(35) NOT NULL,
  `hki_nama_dosen` varchar(50) NOT NULL,
  `hki_NIDN` varchar(35) NOT NULL,
  `hki_judul` varchar(150) NOT NULL,
  `hki_jenis` varchar(35) NOT NULL,
  `hki_no_pendaftaran` varchar(35) NOT NULL,
  `hki_status` varchar(35) NOT NULL,
  `hki_nomor` varchar(35) NOT NULL,
  `hki_berkas` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penelitian_hki`
--

INSERT INTO `penelitian_hki` (`hki_id`, `hki_tahun`, `hki_nama_dosen`, `hki_NIDN`, `hki_judul`, `hki_jenis`, `hki_no_pendaftaran`, `hki_status`, `hki_nomor`, `hki_berkas`) VALUES
('HK691', '2015', 'Ryan Erlando Supit S.T', '16013045', 'Implementasi Sistem Pendukung Keputusan dalam Musyawarah Masyarakat', 'Hak Cipta', 'EC22590100', 'Granted', '814322', 'http://localhost/ryankp/penelitian/berkas/HK59Generated (1).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `penelitian_jurnal`
--

CREATE TABLE `penelitian_jurnal` (
  `jurnal_id` varchar(10) NOT NULL,
  `jurnal_jenis_jurnal` varchar(99) NOT NULL,
  `jurnal_tahun_kegiatan` varchar(50) NOT NULL,
  `jurnal_judul_publikasi` varchar(150) NOT NULL,
  `jurnal_nama` varchar(99) NOT NULL,
  `jurnal_ISSN` varchar(20) NOT NULL,
  `jurnal_volume` varchar(20) NOT NULL,
  `jurnal_halaman` varchar(35) NOT NULL,
  `jurnal_nomor` varchar(20) NOT NULL,
  `jurnal_url` varchar(99) NOT NULL,
  `jurnal_berkas` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penelitian_jurnal`
--

INSERT INTO `penelitian_jurnal` (`jurnal_id`, `jurnal_jenis_jurnal`, `jurnal_tahun_kegiatan`, `jurnal_judul_publikasi`, `jurnal_nama`, `jurnal_ISSN`, `jurnal_volume`, `jurnal_halaman`, `jurnal_nomor`, `jurnal_url`, `jurnal_berkas`) VALUES
('PJ213', 'Jurnal Nasional Terakreditasi', '2015', 'IOT Pengenalan Sistem Informasi Terhadap Masyarakat', 'Realtech ', '2525-2566', '4', '19-68', '15', 'rin.com', 'http://localhost/ryankp/penelitian/berkas/PJ13Generated.pdf'),
('PJ252', 'Jurnal Internasional', '2019', 'Implementasi MD5 Pada Keamanan Komputer Berbasis Website Online dengan Analisis Data', 'Implementasi MD5 Pada Keamanan Komputer B ', '2881-2150', '4', '92', '14', 'biotech/indoMd5encrytion.com', 'http://localhost/ryankp/penelitian/berkas/PJ52Generated.pdf');

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
  `peneliti_tahun` varchar(15) NOT NULL,
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
('PA142', '2020', 'Keny Sompotan', 'Pria', 'Master', 'Indonesia', '2020-12-24', '2022-04-30'),
('PA644', '2018', 'Hizkia Tontong', 'Pria', 'informatika', 'Perancis', '2020-12-01', '2020-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `penulis_id` varchar(10) NOT NULL,
  `jurnal_id` varchar(10) NOT NULL,
  `penulis_nama_penulis` varchar(99) NOT NULL,
  `penulis_ke` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`penulis_id`, `jurnal_id`, `penulis_nama_penulis`, `penulis_ke`) VALUES
('PS310', 'PJ252', 'Bragi Wewengkang S.T.', 1),
('PS320', 'PJ213', 'Ryan Supit S.T.', 1),
('PS551', 'PJ213', 'Keny Sompotan S.Kom.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `penyelenggaraan_forum`
--

CREATE TABLE `penyelenggaraan_forum` (
  `penyelenggaraan_forum_id` varchar(10) NOT NULL,
  `penyelenggaraan_forum_tahun_kegiatan` varchar(35) NOT NULL,
  `penyelenggaraan_forum_nama_kegiatan` varchar(50) NOT NULL,
  `penyelenggaraan_forum_level` varchar(35) NOT NULL,
  `penyelenggaraan_forum_pelaksana` varchar(35) NOT NULL,
  `penyelenggaraan_forum_mitra` varchar(35) NOT NULL,
  `penyelenggaraan_forum_tanggal_mulai` date NOT NULL,
  `penyelenggaraan_forum_tanggal_selesai` date NOT NULL,
  `penyelenggaraan_forum_tempat` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyelenggaraan_forum`
--

INSERT INTO `penyelenggaraan_forum` (`penyelenggaraan_forum_id`, `penyelenggaraan_forum_tahun_kegiatan`, `penyelenggaraan_forum_nama_kegiatan`, `penyelenggaraan_forum_level`, `penyelenggaraan_forum_pelaksana`, `penyelenggaraan_forum_mitra`, `penyelenggaraan_forum_tanggal_mulai`, `penyelenggaraan_forum_tanggal_selesai`, `penyelenggaraan_forum_tempat`) VALUES
('PF332', '2012', 'Pelaksanaan Pohon Terang IOT', 'Regional', 'Fakultas Teknik', 'Unika De La Salle Manado', '2020-12-01', '2020-12-31', 'Manado, jln Martadinata No. 77');

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
  ADD PRIMARY KEY (`penulis_id`),
  ADD KEY `penulis_ibfk_1` (`jurnal_id`);

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
  ADD CONSTRAINT `penulis_ibfk_1` FOREIGN KEY (`jurnal_id`) REFERENCES `penelitian_jurnal` (`jurnal_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
