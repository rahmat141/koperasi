-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Bulan Mei 2020 pada 01.12
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
-- Struktur dari tabel `cashflow`
--

CREATE TABLE `cashflow` (
  `id_transaksi` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_transaksi` varchar(255) COLLATE utf8_bin NOT NULL,
  `debit` int(11) NOT NULL,
  `kredit` int(11) NOT NULL,
  `kategori` varchar(255) COLLATE utf8_bin NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id_kehadiran` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_kerja` time NOT NULL,
  `jam_datang` time NOT NULL,
  `jam_pulang` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kehadiran`
--

INSERT INTO `kehadiran` (`id_kehadiran`, `id_pegawai`, `tanggal`, `jam_kerja`, `jam_datang`, `jam_pulang`) VALUES
(7, 9, '2020-05-05', '08:00:00', '07:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pack`
--

CREATE TABLE `pack` (
  `id_brg_pack` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pack`
--

INSERT INTO `pack` (`id_brg_pack`, `nama_barang`) VALUES
('P-001', 'Dus Al-Arsy'),
('P-002', 'Dus Atlantis'),
('P-003', 'Dus Gajah Asia'),
('P-004', 'Dus Putih'),
('P-005', 'Plastik Al-Arsy'),
('P-006', 'Plastik Atlantis'),
('P-007', 'Plastik Gajah Asia'),
('P-008', 'Cap Al-Arsy'),
('P-009', 'Cap Atlantis'),
('P-010', 'Cap Gajah Asia'),
('P-011', 'Lakban'),
('P-012', 'Lem');

-- --------------------------------------------------------

--
-- Struktur dari tabel `packing`
--

CREATE TABLE `packing` (
  `id_packing` int(11) NOT NULL,
  `id_brg_pack` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `packing`
--

INSERT INTO `packing` (`id_packing`, `id_brg_pack`, `jumlah`, `tgl_masuk`) VALUES
(1, 'P-001', 100, '2020-05-01'),
(2, 'P-002', 200, '2020-05-02'),
(3, 'P-003', 500, '2020-05-02'),
(4, 'P-001', 1200, '2020-05-09'),
(5, 'P-002', 2000, '2020-05-09'),
(6, 'P-003', 2000, '2020-05-09'),
(7, 'P-001', 100, '2020-05-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `pekerjaan`, `jenis_kelamin`, `alamat`, `no_hp`) VALUES
(9, 'Hendra', 'Mesin 2', 'Laki-Laki', 'Sukabirus', '08216426'),
(10, 'Sulis', 'Finishing', 'Perempuan', 'Sukabirus 135', '0897655778'),
(11, 'yani', 'Finishing', 'Perempuan', 'sukapura 298', '097665');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `alamat`, `no_hp`) VALUES
(1, 'Asep Purnama', 'Bandung Selatan', '0821664789');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggajian`
--

CREATE TABLE `penggajian` (
  `id_gaji` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `gapok` int(11) NOT NULL,
  `lembur` int(11) NOT NULL,
  `lainnya` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penggajian`
--

INSERT INTO `penggajian` (`id_gaji`, `id_pegawai`, `gapok`, `lembur`, `lainnya`, `tgl`) VALUES
(1, 9, 500000, 20000, 0, '2020-05-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `sales` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `no_nota` varchar(255) NOT NULL,
  `pcs` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `id_produk`, `id_pembeli`, `sales`, `tanggal`, `no_nota`, `pcs`, `keterangan`) VALUES
(2, 3, 1, 'Apit', '2020-05-06', '0/8777', 20, 'transfer'),
(3, 3, 1, 'Apit', '2020-05-07', '0/8778', 10, 'transfer'),
(4, 2, 1, 'Apit', '2020-05-06', '0/8779', 20, 'transfer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `kualitas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `harga`, `ukuran`, `kualitas`) VALUES
(2, 'Allysa', 20000, 'Besar', 'Bagus'),
(3, 'Donggala', 50000, 'Besar', 'Bagus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produksi`
--

CREATE TABLE `produksi` (
  `id_produksi` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `tanggal_produksi` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produksi`
--

INSERT INTO `produksi` (`id_produksi`, `id_pegawai`, `id_produk`, `tanggal_produksi`, `jumlah`) VALUES
(1, 9, 2, '2020-05-05', 200),
(2, 9, 2, '2020-05-05', 5),
(3, 10, 2, '2020-05-22', 200),
(4, 11, 3, '2020-05-15', 10),
(5, 10, 2, '2020-05-27', 15),
(6, 11, 3, '2020-05-21', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'umah', 'umah123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cashflow`
--
ALTER TABLE `cashflow`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id_kehadiran`),
  ADD KEY `fk_kehadiran` (`id_pegawai`);

--
-- Indeks untuk tabel `pack`
--
ALTER TABLE `pack`
  ADD PRIMARY KEY (`id_brg_pack`);

--
-- Indeks untuk tabel `packing`
--
ALTER TABLE `packing`
  ADD PRIMARY KEY (`id_packing`),
  ADD KEY `id_brg_pack` (`id_brg_pack`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `penggajian`
--
ALTER TABLE `penggajian`
  ADD PRIMARY KEY (`id_gaji`),
  ADD KEY `fk_gaji` (`id_pegawai`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `fk_penjualan` (`id_produk`),
  ADD KEY `fk_pembeli` (`id_pembeli`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id_produksi`),
  ADD KEY `fk_pegawai` (`id_pegawai`),
  ADD KEY `fk_sarung` (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cashflow`
--
ALTER TABLE `cashflow`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `packing`
--
ALTER TABLE `packing`
  MODIFY `id_packing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penggajian`
--
ALTER TABLE `penggajian`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id_produksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cashflow`
--
ALTER TABLE `cashflow`
  ADD CONSTRAINT `cashflow_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD CONSTRAINT `fk_kehadiran` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);

--
-- Ketidakleluasaan untuk tabel `packing`
--
ALTER TABLE `packing`
  ADD CONSTRAINT `packing_ibfk_1` FOREIGN KEY (`id_brg_pack`) REFERENCES `pack` (`id_brg_pack`);

--
-- Ketidakleluasaan untuk tabel `penggajian`
--
ALTER TABLE `penggajian`
  ADD CONSTRAINT `fk_gaji` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `fk_pembeli` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`),
  ADD CONSTRAINT `fk_penjualan` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `produksi`
--
ALTER TABLE `produksi`
  ADD CONSTRAINT `fk_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `fk_sarung` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
