-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2023 pada 14.56
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
-- Struktur dari tabel `t_data_barang_pib`
--

CREATE TABLE `t_data_barang_pib` (
  `data_barang_pib_id` int(11) NOT NULL,
  `header_pib_id` decimal(10,0) DEFAULT NULL,
  `no_seri_barang` varchar(10) DEFAULT NULL,
  `hs_code_barang` varchar(20) DEFAULT NULL,
  `kode_barang` varchar(20) DEFAULT NULL,
  `lartas_barang` varchar(200) DEFAULT NULL,
  `uraian_barang` varchar(200) DEFAULT NULL,
  `merk_barang` varchar(100) DEFAULT NULL,
  `ukuran_barang` varchar(100) DEFAULT NULL,
  `type_barang` varchar(100) DEFAULT NULL,
  `kondisi_barang` varchar(200) DEFAULT NULL,
  `negara` varchar(100) DEFAULT NULL,
  `berat_bersih` decimal(10,0) DEFAULT NULL,
  `dokumen_lartas` varchar(200) DEFAULT NULL,
  `satuan_id` decimal(10,0) DEFAULT NULL,
  `kemasan_id` decimal(10,0) DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `jenis_nilai` varchar(100) DEFAULT NULL,
  `jatuh_tempo` date DEFAULT NULL,
  `voluntary_declaration` varchar(200) DEFAULT NULL,
  `biaya_tambahan` decimal(10,0) DEFAULT NULL,
  `fob` decimal(10,0) DEFAULT NULL,
  `harga_satuan` decimal(10,0) DEFAULT NULL,
  `freight` decimal(10,0) DEFAULT NULL,
  `asuransi` decimal(10,0) DEFAULT NULL,
  `cif_rupiah` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_data_barang_pib`
--
ALTER TABLE `t_data_barang_pib`
  ADD PRIMARY KEY (`data_barang_pib_id`),
  ADD KEY `satuan_id` (`satuan_id`),
  ADD KEY `kemasan_id` (`kemasan_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_data_barang_pib`
--
ALTER TABLE `t_data_barang_pib`
  MODIFY `data_barang_pib_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
