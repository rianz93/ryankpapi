-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 07:58 PM
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
  `user_id` int(10) NOT NULL,
  `hibah_dana` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hibah_ditlitabmas`
--

INSERT INTO `hibah_ditlitabmas` (`hibah_id`, `hibah_tahun_kegiatan`, `hibah_judul_penelitian`, `hibah_personil_penelitian`, `hibah_jabatan`, `hibah_bidang_penelitian`, `user_id`, `hibah_dana`) VALUES
('HD931', '2019', 'iot tetete', 'firman', 'pengusul', 'biotech', 0, 14000000);

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
  `user_id` int(10) NOT NULL,
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
  `user_id` int(11) NOT NULL,
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
  `user_id` int(10) NOT NULL,
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
  `user_id` int(10) NOT NULL,
  `hki_berkas` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `user_id` int(10) NOT NULL,
  `jurnal_berkas` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penelitian_jurnal`
--

INSERT INTO `penelitian_jurnal` (`jurnal_id`, `jurnal_jenis_jurnal`, `jurnal_tahun_kegiatan`, `jurnal_judul_publikasi`, `jurnal_nama`, `jurnal_ISSN`, `jurnal_volume`, `jurnal_halaman`, `jurnal_nomor`, `jurnal_url`, `user_id`, `jurnal_berkas`) VALUES
('PJ252', 'Jurnal Internasional', '2019', 'Implementasi MD5 Pada Keamanan Komputer Berbasis Website Online dengan Analisis Data', 'Implementasi MD5 Pada Keamanan Komputer B ', '2881-2150', '5', '78', '14', 'biotech/indoMd5encrytion.com', 1, 'http://localhost/ryankp/penelitian/berkas/PJ52Generated.pdf'),
('PJ903', 'Jurnal Nasional Terakreditasi', '2018', 'IOT pendeteksi covid 19 interval jarak melalui GPS smartphone', 'Realtech', '2991-344b', '1354', '1 s/d 15', '012033', 'legit.com/jurnalPengembangan?55311', 2, 'http://localhost/ryankp/penelitian/berkas/PJ70jurnal.PDF'),
('PJ912', 'Jurnal Internasional', '2019', 'Pengenalan IOT dan implementasi terhadap masyarakat tentang pengembangan IOT alat pendeteksi bencana', 'Realtech Nasional', '2089-4500', '3', '12-67', '6', 'github.com/ryankp.com', 2, 'http://localhost/ryankp/penelitian/berkas/PJ97Generated.pdf');

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
  `user_id` int(10) NOT NULL,
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
('PA142', '2020', 'Keny Sompotan S.T M.Sc', 'Pria', 'Master', 'Indonesia', '2020-12-24', '2022-04-30'),
('PA473', '2015', 'Ryan Erlando Supit S.T', 'Pria', 'Bachelor', 'Indonesia', '2020-12-23', '2021-03-31'),
('PA644', '2019', 'Hizkia Tontong S.T', 'Pria', 'informatika', 'Perancis', '2020-12-01', '2020-12-31');

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
('PS310', 'PJ252', 'Hizkia Tontong', 1),
('PS400', 'PJ912', 'Ryan Erlando Supit S.T.', 1),
('PS401', 'PJ912', 'Eston Suli S.Kom.', 2),
('PS402', 'PJ912', 'Cleonart Dotulong S.Kom.', 3),
('PS761', 'PJ252', 'Keny Sompotan', 2),
('PS970', 'PJ903', 'Ryan Erlando Supit S.T.', 1);

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
-- Table structure for table `pkm_mbh`
--

CREATE TABLE `pkm_mbh` (
  `pkm_mbh_id` varchar(35) NOT NULL,
  `pkm_mbh_tahun` varchar(50) NOT NULL,
  `pkm_mbh_nama` varchar(35) NOT NULL,
  `pkm_mbh_bidang_usaha` varchar(35) NOT NULL,
  `user_id` int(10) NOT NULL,
  `pkm_mbh_berkas` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pkm_mbh`
--

INSERT INTO `pkm_mbh` (`pkm_mbh_id`, `pkm_mbh_tahun`, `pkm_mbh_nama`, `pkm_mbh_bidang_usaha`, `user_id`, `pkm_mbh_berkas`) VALUES
('MBH641', '2018', 'Mitra UMKM Makanan Lezat', 'Makanan Berat', 1, 'http://localhost/ryankp/pkm/berkas/MBH12Generated (2).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pkm_uhk`
--

CREATE TABLE `pkm_uhk` (
  `pkm_uhk_id` varchar(10) NOT NULL,
  `pkm_uhk_tahun` varchar(35) NOT NULL,
  `pkm_uhk_unit` varchar(35) NOT NULL,
  `pkm_uhk_pengurus` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL,
  `pkm_uhk_berkas` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pkm_uhk`
--

INSERT INTO `pkm_uhk` (`pkm_uhk_id`, `pkm_uhk_tahun`, `pkm_uhk_unit`, `pkm_uhk_pengurus`, `user_id`, `pkm_uhk_berkas`) VALUES
('UHK621', '2018', 'Kepala', 'rs', 1, 'http://localhost/ryankp/pkm/berkas/UHK51Generated (2).pdf'),
('UHK961', '2017', 'rere', 'rere', 1, 'http://localhost/ryankp/pkm/berkas/UHK70Generated (2).pdf'),
('UHK971', '2018', 'Kelapa', 'Ryan S', 1, 'http://localhost/ryankp/pkm/berkas/UHK10Generated (2).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `produk_tersertifikasi`
--

CREATE TABLE `produk_tersertifikasi` (
  `produk_tersertifikasi_id` varchar(35) NOT NULL,
  `produk_tersertifikasi_tahun` varchar(50) NOT NULL,
  `produk_tersertifikasi_produk` varchar(50) NOT NULL,
  `produk_tersertifikasi_sertifikasi` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL,
  `produk_tersertifikasi_berkas` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_tersertifikasi`
--

INSERT INTO `produk_tersertifikasi` (`produk_tersertifikasi_id`, `produk_tersertifikasi_tahun`, `produk_tersertifikasi_produk`, `produk_tersertifikasi_sertifikasi`, `user_id`, `produk_tersertifikasi_berkas`) VALUES
('PT292', '2018', 'Makanan Ringan', '', 1, 'http://localhost/ryankp/pkm/berkas/PT33Generated (2).pdf'),
('PT471', '2018', 'Arduino Pendeteksi Banjir', 'MIT License', 1, 'http://localhost/ryankp/pkm/berkas/PT52Generated (2).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `produk_terstandarisasi`
--

CREATE TABLE `produk_terstandarisasi` (
  `produk_terstandarisasi_id` varchar(35) NOT NULL,
  `produk_terstandarisasi_tahun` varchar(35) NOT NULL,
  `produk_terstandarisasi_produk` varchar(35) NOT NULL,
  `produk_terstandarisasi_standarisasi` varchar(50) NOT NULL,
  `user_id` int(10) NOT NULL,
  `produk_terstandarisasi_berkas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_terstandarisasi`
--

INSERT INTO `produk_terstandarisasi` (`produk_terstandarisasi_id`, `produk_terstandarisasi_tahun`, `produk_terstandarisasi_produk`, `produk_terstandarisasi_standarisasi`, `user_id`, `produk_terstandarisasi_berkas`) VALUES
('PTS101', '2018', 'Makanan Ringan', 'MUI', 1, 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_nama` varchar(50) NOT NULL,
  `user_nick` varchar(35) NOT NULL,
  `user_password` varchar(99) NOT NULL,
  `user_priority` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_nick`, `user_password`, `user_priority`) VALUES
(1, 'Melani Adrian Ph.D', 'ma', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'Junaidy Budi Sanger S.Kom., M.Kom', 'jbs', '21232f297a57a5a743894a0e4a801fc3', 'user'),
(6, 'Ryan Erlando Supit S.T', 'res', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(7, 'Bragi Wewengkang S.T', 'bw', '21232f297a57a5a743894a0e4a801fc3', 'user');

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
-- Indexes for table `pkm_mbh`
--
ALTER TABLE `pkm_mbh`
  ADD PRIMARY KEY (`pkm_mbh_id`);

--
-- Indexes for table `pkm_uhk`
--
ALTER TABLE `pkm_uhk`
  ADD PRIMARY KEY (`pkm_uhk_id`);

--
-- Indexes for table `produk_tersertifikasi`
--
ALTER TABLE `produk_tersertifikasi`
  ADD PRIMARY KEY (`produk_tersertifikasi_id`);

--
-- Indexes for table `produk_terstandarisasi`
--
ALTER TABLE `produk_terstandarisasi`
  ADD PRIMARY KEY (`produk_terstandarisasi_id`);

--
-- Indexes for table `unit_bisnis_hr`
--
ALTER TABLE `unit_bisnis_hr`
  ADD PRIMARY KEY (`unit_bisnis_hr_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
