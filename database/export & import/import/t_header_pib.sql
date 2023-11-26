-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2023 pada 09.02
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
-- Struktur dari tabel `t_header_pib`
--

CREATE TABLE `t_header_pib` (
  `header_pib_id` int(11) NOT NULL,
  `no_pengajuan` varchar(20) DEFAULT NULL,
  `pelabuhan_id` int(11) DEFAULT NULL,
  `kantor_kepabeanan` varchar(100) DEFAULT NULL,
  `jenis_pib` enum('BIASA','BERKALA') DEFAULT NULL,
  `jenis_import_id` decimal(10,0) DEFAULT NULL,
  `cara_bayar_id` decimal(10,0) DEFAULT NULL,
  `flag` char(1) DEFAULT '1' COMMENT '1 awal pengisian,2 kirim,N delete'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_header_pib`
--
ALTER TABLE `t_header_pib`
  ADD PRIMARY KEY (`header_pib_id`),
  ADD KEY `pelabuhan_id` (`pelabuhan_id`),
  ADD KEY `jenis_import_id` (`jenis_import_id`),
  ADD KEY `cara_bayar_id` (`cara_bayar_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_header_pib`
--
ALTER TABLE `t_header_pib`
  MODIFY `header_pib_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
