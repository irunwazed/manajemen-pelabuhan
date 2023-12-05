-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2023 pada 14.00
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

CREATE TABLE `t_data_transaksi_pib` (
  `data_transaksi_pib_id` int(11) NOT NULL,
  `header_pib_id` int(11) NOT NULL,
  `valuta_pib` varchar(100) DEFAULT NULL,
  `ndpbm_pib` bigint(20) DEFAULT NULL,
  `jenis_transaksi` varchar(100) DEFAULT NULL,
  `biaya_tambahan` bigint(20) DEFAULT NULL,
  `diskon` bigint(20) DEFAULT NULL,
  `freight` bigint(20) DEFAULT NULL,
  `asuransi` bigint(20) DEFAULT NULL,
  `voluntary_declaration` varchar(100) DEFAULT NULL,
  `rupiah` bigint(20) DEFAULT NULL,
  `berat_kotor` int(11) DEFAULT NULL,
  `berat_bersih` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_data_transaksi_pib`
--
ALTER TABLE `t_data_transaksi_pib`
  ADD PRIMARY KEY (`data_transaksi_pib_id`),
  ADD KEY `header_pib_id` (`header_pib_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_data_transaksi_pib`
--
ALTER TABLE `t_data_transaksi_pib`
  MODIFY `data_transaksi_pib_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;