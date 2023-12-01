-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2023 pada 16.16
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
-- Struktur dari tabel `t_data_transaksi_pib`
--
DROP TABLE IF EXISTS t_data_transaksi_pib;
CREATE TABLE `t_data_transaksi_pib` (
  `data_transaksi_pib_id` INT(11) NOT NULL,
  `valuta_pib` VARCHAR(100) DEFAULT NULL,
  `ndpbm_pib` BIGINT(20) DEFAULT NULL,
  `jenis_transaksi` VARCHAR(100) DEFAULT NULL,
  `biaya_tambahan` BIGINT(20) DEFAULT NULL,
  `diskon` BIGINT(20) DEFAULT NULL,
  `freight` BIGINT(20) DEFAULT NULL,
  `asuransi` BIGINT(20) DEFAULT NULL,
  `voluntary_declaration` VARCHAR(100) DEFAULT NULL,
  `rupiah` BIGINT(20) DEFAULT NULL,
  `berat_kotor` INT(11) DEFAULT NULL,
  `berat_bersih` INT(11) DEFAULT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_data_transaksi_pib`
--
ALTER TABLE `t_data_transaksi_pib`
  ADD PRIMARY KEY (`data_transaksi_pib_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_data_transaksi_pib`
--
ALTER TABLE `t_data_transaksi_pib`
  MODIFY `data_transaksi_pib_id` INT(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
