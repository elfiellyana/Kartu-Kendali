-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Okt 2018 pada 00.55
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kartu_kendali`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` varchar(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `password` varchar(8) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE IF NOT EXISTS `surat_keluar` (
  `id_petugas` varchar(11) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `no_surat` int(11) NOT NULL,
  `perihal` text NOT NULL,
  `keterangan` text NOT NULL,
  `alamat` text NOT NULL,
  `nomor` int(15) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `file_surat` text NOT NULL,
  `tempat_folder_keluar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keuangan`
--

CREATE TABLE IF NOT EXISTS `surat_keuangan` (
  `no_agenda_keuangan` varchar(200) NOT NULL,
  `id_petugas_keuangan` varchar(10) NOT NULL,
  `no_surat_keuangan` varchar(100) NOT NULL,
  `tanggal_masuk_keuangan` date NOT NULL,
  `tanggal_surat_keuangan` date NOT NULL,
  `tanggal_penyelesaian_keuangan` varchar(25) NOT NULL,
  `perihal_keuangan` text NOT NULL,
  `asal_surat_keuangan` text NOT NULL,
  `untuk_keuangan` text NOT NULL,
  `catatan_keuangan` text NOT NULL,
  `file_surat_keuangan` text NOT NULL,
  `tempat_folder_keuangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE IF NOT EXISTS `surat_masuk` (
  `no_agenda_masuk` varchar(100) NOT NULL,
  `id_petugas_masuk` varchar(5) NOT NULL,
  `no_surat_masuk` varchar(50) NOT NULL,
  `tanggal_masuk_masuk` date NOT NULL,
  `tanggal_surat_masuk` date NOT NULL,
  `tanggal_penyelesaian_masuk` varchar(8) NOT NULL,
  `perihal_masuk` text NOT NULL,
  `asal_surat_masuk` text NOT NULL,
  `untuk_masuk` text NOT NULL,
  `catatan_masuk` text NOT NULL,
  `file_surat_masuk` text NOT NULL,
  `tempat_folder_masuk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `surat_keuangan`
--
ALTER TABLE `surat_keuangan`
  ADD PRIMARY KEY (`no_agenda_keuangan`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`no_agenda_masuk`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
