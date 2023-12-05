-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2023 pada 17.13
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelabuhan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dokument_pendukung_pib`
--

CREATE TABLE `t_dokument_pendukung_pib` (
  `dokumen_pendukung_pib_id` int(11) NOT NULL,
  `header_pib_id` int(11) DEFAULT NULL,
  `no_seri` varchar(10) DEFAULT NULL,
  `jenis_dokumen` varchar(200) DEFAULT NULL,
  `nomor_dokumen` varchar(50) DEFAULT NULL,
  `tgl_dokumen` date DEFAULT NULL,
  `nama_file` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_dokument_pendukung_pib`
--
ALTER TABLE `t_dokument_pendukung_pib`
  ADD PRIMARY KEY (`dokumen_pendukung_pib_id`),
  ADD KEY `header_pib_id` (`header_pib_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_dokument_pendukung_pib`
--
ALTER TABLE `t_dokument_pendukung_pib`
  MODIFY `dokumen_pendukung_pib_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
