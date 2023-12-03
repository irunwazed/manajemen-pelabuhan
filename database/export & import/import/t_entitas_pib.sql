-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2023 pada 18.18
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
-- Struktur dari tabel `t_entitas_pib`
--

CREATE TABLE `t_entitas_pib` (
  `entitas_pib_id` int(11) NOT NULL,
  `header_pib_id` int(11) DEFAULT NULL,
  `npwp_importir` varchar(20) DEFAULT NULL,
  `nama_importir` varchar(200) DEFAULT NULL,
  `alamat_importir` varchar(200) DEFAULT NULL,
  `nib_importir` varchar(100) DEFAULT NULL,
  `status_importir` varchar(100) DEFAULT NULL,
  `npwp_pemilik_barang` varchar(20) DEFAULT NULL,
  `nama_pemilik_barang` varchar(200) DEFAULT NULL,
  `alamat_pemilik_barang` varchar(200) DEFAULT NULL,
  `npwp_pemusatan` varchar(20) DEFAULT NULL,
  `nama_pemusatan` varchar(200) DEFAULT NULL,
  `alamat_pemusatan` varchar(200) DEFAULT NULL,
  `npwp_pengirim` varchar(20) DEFAULT NULL,
  `nama_pengirim` varchar(200) DEFAULT NULL,
  `alamat_pengirim` varchar(200) DEFAULT NULL,
  `negara_pengirim` varchar(100) DEFAULT NULL,
  `npwp_penjual` varchar(20) DEFAULT NULL,
  `nama_penjual` varchar(200) DEFAULT NULL,
  `alamat_penjual` varchar(200) DEFAULT NULL,
  `negara_penjual` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_entitas_pib`
--
ALTER TABLE `t_entitas_pib`
  ADD PRIMARY KEY (`entitas_pib_id`),
  ADD KEY `header_pib_id` (`header_pib_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_entitas_pib`
--
ALTER TABLE `t_entitas_pib`
  MODIFY `entitas_pib_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
