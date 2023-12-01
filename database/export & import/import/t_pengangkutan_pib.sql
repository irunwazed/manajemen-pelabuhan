-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2023 pada 14.06
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
-- Struktur dari tabel `t_pengangkutan_pib`
--
DROP TABLE IF EXISTS t_pengangkutan_pib;
CREATE TABLE `t_pengangkutan_pib` (
  `pengangkutan_pib_id` INT(11) NOT NULL,
  `header_pib_id` INT(11) DEFAULT NULL,
  `no_bc11_pib` VARCHAR(20) DEFAULT NULL,
  `no_post_bc11_pib` VARCHAR(20) DEFAULT NULL,
  `cara_pengangkutan_pib` VARCHAR(5) DEFAULT 'LAUT',
  `nama_sarana_pengangkut` VARCHAR(200) DEFAULT NULL,
  `no_voyage` VARCHAR(20) DEFAULT NULL,
  `bendera` VARCHAR(100) DEFAULT NULL,
  `perkiraan_tgl_tiba` DATE DEFAULT NULL,
  `pelabuhan_muat` VARCHAR(100) DEFAULT NULL,
  `pelabuhan_transit` VARCHAR(100) DEFAULT NULL,
  `tempat_penimbunan` VARCHAR(100) DEFAULT NULL,
  `tanggal_bc11_pib` DATE DEFAULT NULL,
  `pelabuhan_tujuan` INT(11) DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_pengangkutan_pib`
--
ALTER TABLE `t_pengangkutan_pib`
  ADD PRIMARY KEY (`pengangkutan_pib_id`),
  ADD KEY `header_pib_id` (`header_pib_id`),
  ADD KEY `pelabuhan_id` (`pelabuhan_tujuan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_pengangkutan_pib`
--
ALTER TABLE `t_pengangkutan_pib`
  MODIFY `pengangkutan_pib_id` INT(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
