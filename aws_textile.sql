-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2020 pada 11.56
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aws_textile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_datang` varchar(255) NOT NULL,
  `jam_pulang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kehadiran`
--

INSERT INTO `kehadiran` (`id_pegawai`, `nama`, `tanggal`, `jam_datang`, `jam_pulang`) VALUES
(7, 'Yusril Wahyuda', '2020-05-02', '06:00', '17:00'),
(8, 'Sherli Yualinda', '2020-05-02', '06:00', '15:00'),
(9, 'Sherla Yualinda', '2020-05-02', '07:00', '15:00'),
(11, 'Yusril Wahyuda', '2020-05-03', '07:00', '15:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_sarung`
--

CREATE TABLE `penjualan_sarung` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `sales` varchar(255) NOT NULL,
  `no_Nota` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `qyt` varchar(255) NOT NULL,
  `harga_perqyt` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan_sarung`
--

INSERT INTO `penjualan_sarung` (`id`, `tanggal`, `sales`, `no_Nota`, `item`, `qyt`, `harga_perqyt`, `keterangan`) VALUES
(1, '2020-05-03', 'Facebook', '032/0918', 'Alisa', '5', '286000', 'BCA 2/9 2.350.000 JNE Tracking 100.000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `penjualan_sarung`
--
ALTER TABLE `penjualan_sarung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `penjualan_sarung`
--
ALTER TABLE `penjualan_sarung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
