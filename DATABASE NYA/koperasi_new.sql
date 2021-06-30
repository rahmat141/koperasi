-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 12:30 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` text NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `bpkb` varchar(255) NOT NULL,
  `stnk` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `status_anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `username`, `password`, `nama`, `nik`, `email`, `no_hp`, `alamat`, `ktp`, `bpkb`, `stnk`, `jenis_kelamin`, `status_anggota`) VALUES
(2, 'eben', '123', 'Eben Ezer sibarani', '8345785', 'ebenezer@gmail.com', '214748364', 'Bida Ayu', 'ktp.jpg', '7703b79a9480c6937b9d150455e1210c.jpg', '47b8807ed53fe14bf91c2864fd241e1c.jpg', 'Laki-laki', 1),
(7, 'Joan', '321', 'Joan Gray', '520200020', 'joangray12@gmail.com', '87654', 'Batam Kepri', '', '', '', 'Laki-laki', 1),
(9, 'firman', '123', 'Firmansyah Arnold', '67678687', 'firmannsyah@gmail.com', '0', 'Semarang', 'c36218d156495147ee75da9993e4fdd0.png', '8a9c28e6060c1045d76d59291a22d8c5.png', 'f9eca82f6832c69b8b18f37e5e421414.png', 'Laki-laki', 1),
(10, 'tes', 'tes', 'tes', '67678687', 'tes@gmail.com', '0', 'cibinong', 'e1f42c8b3cf73abe94651c10af7d83c4.jpg', '', '', 'Laki-laki', 1),
(11, 'albert', '123', 'Albert Frans Kevin', '214576246', 'albert@gmail.com', '82211', 'Batam', 'faf089201ee8cf626af8fa49a2f52dea.jpg', 'cc2fa33f5bca8414b672f44241352de0.jpeg', '48d087b11530eb69e95cc3beed93e7e9.jpg', 'Laki-laki', 1),
(13, 'andre', '123', 'Andre Parhusip', '235235', 'andre@gmail.com', '8212231', 'bougenvilee', '7767ad53caa58f68fa804ae2e847ab2d.jpg', '', '', 'Laki-laki', 1),
(14, 'niken', '123', 'Niken Pragaluh', '1515565', 'niken@gmail.com', '7812333', 'Bali', '686e2f717a070b2db55d54f7fd6ffef4.jpg', '', '', 'Perempuan', 1),
(16, 'sandona', '123', 'sandona', '1222211', 'sandona@gmail.com', '812455', 'dekat sandona', '0fdb9c2333393c1f4f8bf49dbecdb15e.jpg', '', '', 'Laki-laki', 1),
(18, 'nadia', '123', 'Nadia', '235235', 'nadia@gmail.com', '2147483647', 'Batam, Kepulauan Riau,', '8eeee2aa89f9bdfa77ffb7dc69167f9c.jpg', '', '', 'Perempuan', 2),
(19, 'hariadi', '123', 'Hariadi Arfah', '2323232', 'hariadi@gmail.com', '2147483647', 'Makasssar', '1d24949d471678499317b7eb80f1e3b7.jpg', '', '', 'Laki-laki', 1),
(21, 'bunga', '123', 'bunga c', '1233', 'bunga@gmail.com', '81233', 'jkt', '531325be029634f97f08f0ae9aa013be.jpeg', '', '', 'Perempuan', 2),
(22, 'tandu', '123', 'tandu', '123331', 'tandu@gmail.com', '81231', 'bali', '47df241ba17d0d5304b9140e63d6c3d5.jpg', '', '', 'Laki-laki', 1),
(23, 'jono', '123', 'Bang Jono', '123411', 'jono@gmail.com', '8123456', 'Afrika', '1564a1ad392dbc1b52d5f90f57ed8351.jpg', '', '', 'Laki-laki', 1),
(24, 'valentino', '123', 'valentino', '123312', 'valentino@gmail.com', '812331', 'Jakarta', 'aed71b9ed9b2c5edd2002a978393cd0e.jpeg', '', '', 'Laki-laki', 1),
(25, 'sutris', '123', 'Sutris', '12331', 'sutris@gmail.com', '81231', 'Batam', 'cae4ff703568837670cc11b68affc33b.jpg', '', '', 'Laki-laki', 2),
(26, 'sumitro', '123', 'Sumitro', '123123', 'sumitro@gmail.com', '812312', 'Batam', '3a10d7f6aa4ae364356eeacfbf8e8e45.jpg', '', '', 'Laki-laki', 1),
(27, 'kevin', '123', 'Kevin Sihotang', '2147483647', 'kevin@gmail.com', '2147483647', 'Batam, Kepulauan Riau,', '27c8604e24eee2c5e0c52a88724e6876.jpg', '', '', 'Laki-laki', 1),
(28, 'judika', '123', 'Judika', '2147483647', 'judika@gmail.com', '812311', 'Medan', '11584a9028b666d09e3ac6cd813ec567.jpg', '', '', 'Laki-laki', 1),
(29, 'hendrik', '123', 'Hendrik', '2147483647', 'hendrik@gmail.com', '812311', 'Batam', 'b81da51cd7579d793e94d9b8a389927f.jpg', '', '', 'Laki-laki', 1),
(30, 'jago', '123', 'Bang Jago', '2147483647', 'jago@gmail.com', '812312', 'Amerika', '99bdae264434d4610b0518237fd9a275.jpeg', '', '', 'Laki-laki', 2),
(31, 'sukijah', '123', 'Sukijah', '235235', 'sukijah@gmail.com', '81231', 'Papua', '257028c9353eef6de8630196542c6583.jpg', '', '', 'Perempuan', 1),
(32, 'nurhayati', '123', 'Nurhayati', '2147483647', 'nurhayati@gmail.com', '2147483647', 'Batam, Kepulauan Riau,', '603dae5ac9c6e558fa57403ee17d4c95.jpg', '', '', 'Perempuan', 2),
(33, 'januari', '123', 'Januari', '2147483647', 'januari@gmail.com', '2147483647', 'Jawa Timur', '8823ad1fc401a1febf8149f60e4920bf.jpg', '', '', 'Laki-laki', 1),
(34, 'joshua', '123', 'Joshua', '2147483647', 'joshua@gmail.com', '2147483647', 'Kalideres', 'c2747580470966f1e5d8c7becc8c6854.png', '', '', 'Laki-laki', 1),
(35, 'cecil', '123', 'Cecilia', '2147483647', 'cecil23@gmail.com', '2147483647', 'Amerika', '1553638843570591304cd78856664e29.jpg', '', '', 'Perempuan', 1),
(37, 'nikolas', '123', 'Nikolas', '2147483647', 'nikolassinaga1@gmail.com', '2147483647', 'Batu Aji', 'ab64d40edaa84ce645716a3e42f272b1.png', '', '', 'Laki-laki', 1),
(38, 'jono', '123', 'Jono', '2147483647', 'albertsihotang58@gmail.com', '2147483647', 'Batam, Kepulauan Riau,', '130a7152b503a3617ebe6d2ed95283bf.jpg', '', '', 'Laki-laki', 1),
(39, 'tiara', '123', 'Tiara Andini', '2147483647', 'tiara@gmail.com', '81231147', 'Kediri', 'de18d4d9d0cc87eb32b7f03edb7b1070.jpg', '', '', 'Perempuan', 1),
(40, 'syahrini', '123', 'Syahrini', '2147483647', 'syahrini88@gmail.com', '2147483647', 'Afghanistan', 'c921c48ec05bec441b0788e59e141d0c.jpg', '', '', 'Perempuan', 2),
(41, 'dayana', '123', 'Dayana', '2147483647', 'dayana11@gmail.com', '81243165', 'Rusia', '3952368b6e7fcea975f4b84eeb7d85c5.jpg', '', '', 'Perempuan', 1),
(42, 'aqua', '123', 'Aqua', '235235', 'aqua88@gmail.com', '2147483647', 'Jl pendekar no 11', '9f5601a04a4a7d6b6db3ff8c166104ba.jpg', '', '', 'Laki-laki', 1),
(43, 'citra', '123', 'Citra Skolastika', '2147483647', 'citra@gmail.com', '2147483647', 'Jl Bojongsoang no 1', '4daf58763e97812d4a79d7ce841294f2.jpg', '', '', 'Perempuan', 1),
(45, 'fredi', '123', 'bebas', '2110254512', 'fredi@mail.com', '2165154', 'Bandung Permata', 'c9457596e8f47d7e65a2f2403b90271b.jpg', '', '', 'Laki-laki', 2),
(46, 'bryan', '1234', 'Bryan', '1231234235', 'bryan@gmail.com', '123412342', 'Bandung Permata', '5ed1543bb4d3951a313d8991c899eab9.jpg', '', '', 'Laki-laki', 2),
(48, 'fredd', '123', 'Freddy', '2147483647', 'fredy@mail.com', '2147483647', 'Bandung', 'abfdcf94d88496e9b907156fd0d6cae8.jpg', '', '', 'Laki-laki', 2);

-- --------------------------------------------------------

--
-- Table structure for table `angsuran`
--

CREATE TABLE `angsuran` (
  `id_angsuran` int(11) NOT NULL,
  `nominal` int(255) NOT NULL,
  `tanggal_angsuran` date NOT NULL,
  `id_pinjaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angsuran`
--

INSERT INTO `angsuran` (`id_angsuran`, `nominal`, `tanggal_angsuran`, `id_pinjaman`) VALUES
(42, 516667, '2021-06-24', 57),
(43, 508334, '2021-06-25', 57),
(44, 500000, '2021-06-25', 57),
(45, 491667, '2021-06-25', 57),
(46, 483334, '2021-06-27', 57),
(47, 475000, '2021-06-28', 57),
(48, 466667, '2021-06-29', 57),
(49, 458334, '2021-06-30', 57),
(50, 450000, '2021-07-01', 57),
(51, 441667, '2021-07-02', 57),
(52, 433334, '2021-07-02', 57),
(53, 424996, '2021-07-03', 57),
(54, 1060000, '2021-07-25', 58),
(55, 1040000, '2021-06-30', 58),
(56, 1020000, '2021-07-01', 58),
(61, 1120000, '2021-06-25', 61),
(62, 1100000, '2021-07-01', 61),
(63, 4200000, '2021-07-01', 61),
(64, 1210000, '2021-06-28', 62),
(65, 1188000, '2021-07-01', 62),
(66, 1166000, '2021-07-31', 62),
(69, 1210000, '2021-07-27', 64),
(70, 1188000, '2021-09-01', 64),
(71, 1166000, '2021-10-01', 64),
(72, 1936000, '2021-10-30', 64);

-- --------------------------------------------------------

--
-- Table structure for table `histori_pinjaman`
--

CREATE TABLE `histori_pinjaman` (
  `id_history` int(11) NOT NULL,
  `jml_pinjaman` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tenor` date NOT NULL,
  `plafon` varchar(255) NOT NULL,
  `bunga` int(255) NOT NULL,
  `tgl_pinjaman` date NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_pinjaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `histori_pinjaman`
--

INSERT INTO `histori_pinjaman` (`id_history`, `jml_pinjaman`, `status`, `tenor`, `plafon`, `bunga`, `tgl_pinjaman`, `id_anggota`, `id_pinjaman`) VALUES
(44, 5000000, 'Cleared', '2022-06-25', '0', 2, '2021-06-25', 2, 57),
(45, 3000000, 'Cleared', '2021-09-25', '0', 2, '2021-06-25', 2, 58),
(48, 6000000, 'Cleared', '2021-11-20', '0', 2, '2021-05-20', 2, 61),
(49, 5500000, 'Cleared', '2021-11-28', '0', 2, '2021-06-28', 2, 62),
(50, 5500000, 'Cleared', '2021-11-30', '0', 2, '2021-06-30', 2, 64);

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notif` int(11) NOT NULL,
  `notif` varchar(255) NOT NULL,
  `dari` varchar(50) NOT NULL DEFAULT '',
  `untuk` varchar(50) NOT NULL DEFAULT '',
  `tipe` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_read` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id_notif`, `notif`, `dari`, `untuk`, `tipe`, `created_at`, `is_read`) VALUES
(1, 'Ada peminjaman baru', '2', 'petugas', 'approval', '2021-06-25 19:04:55', 1),
(4, 'Peminjaman anda diterima', 'petugas', '2', 'accept', '2021-06-25 20:02:14', 1),
(5, 'Ada peminjaman baru', '9', 'petugas', 'approval', '2021-06-25 20:28:50', 1),
(6, 'Peminjaman anda ditolak', 'petugas', '9', 'decline', '2021-06-25 20:29:36', 1),
(7, 'Ada peminjaman baru', '2', 'petugas', 'approval', '2021-06-27 07:55:55', 1),
(8, 'Peminjaman anda diterima', 'petugas', '2', 'accept', '2021-06-27 07:56:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `username`, `password`) VALUES
(1, 'Petugas', 'petugas', 'petugas'),
(2, 'Supervisor', 'supervisor', 'supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjaman` int(11) NOT NULL,
  `jml_pinjaman` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `angsuran` int(255) NOT NULL,
  `tenor` date NOT NULL,
  `plafon` int(255) NOT NULL,
  `bunga` int(255) NOT NULL,
  `denda` int(255) NOT NULL,
  `tgl_pinjaman` date NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `jenis_jaminan` varchar(50) DEFAULT NULL,
  `jaminan_ktp` varchar(255) DEFAULT NULL,
  `jaminan_surat` varchar(255) DEFAULT NULL,
  `jaminan_pajak` varchar(255) DEFAULT NULL,
  `jaminan_stnk` varchar(255) DEFAULT NULL,
  `jaminan_foto` varchar(255) DEFAULT NULL,
  `taksiran_jaminan` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjaman`, `jml_pinjaman`, `status`, `angsuran`, `tenor`, `plafon`, `bunga`, `denda`, `tgl_pinjaman`, `id_anggota`, `jenis_jaminan`, `jaminan_ktp`, `jaminan_surat`, `jaminan_pajak`, `jaminan_stnk`, `jaminan_foto`, `taksiran_jaminan`) VALUES
(57, 5000000, 'Cleared', 0, '2022-06-25', 0, 2, 0, '2021-06-25', 2, 'Tanah', '1624475756-jtp.jpg', '1624475756-bpkb.jpg', '1624475756-stnk.jpg', NULL, NULL, NULL),
(58, 3000000, 'Cleared', 0, '2021-09-25', 0, 2, 0, '2021-06-25', 2, 'Tanah', '1624475977-jtp.jpg', '1624475977-bpkb.jpg', '1624475977-stnk.jpg', NULL, NULL, NULL),
(61, 6000000, 'Cleared', 0, '2021-11-20', 0, 2, 50000, '2021-05-20', 2, 'Tanah', '1624570844-jtp.jpg', '1624570844-bpkb.jpg', '1624570844-stnk.jpg', NULL, NULL, NULL),
(62, 5500000, 'Cleared', 0, '2021-11-28', 0, 2, 50000, '2021-06-28', 2, 'Tanah', '1624647895-jtp.jpg', '1624647895-bpkb.jpg', '1624647895-stnk.jpg', NULL, NULL, NULL),
(63, 2000000, 'Declined', 2120000, '2021-11-27', 0, 2, 0, '2021-06-27', 9, 'Tanah', '1624652930-jtp.jpg', '1624652930-bpkb.jpg', '1624652930-stnk.jpg', NULL, NULL, NULL),
(64, 5500000, 'Cleared', 0, '2021-11-30', 0, 2, 100000, '2021-06-30', 2, 'Tanah', '1624780555-jtp.jpg', '1624780555-bpkb.jpg', '1624780555-stnk.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_simpanan`
--

CREATE TABLE `riwayat_simpanan` (
  `id_riwayatSimpanan` int(11) NOT NULL,
  `nominal` int(255) NOT NULL,
  `tanggal_ambil` date NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_tipeSimpanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat_simpanan`
--

INSERT INTO `riwayat_simpanan` (`id_riwayatSimpanan`, `nominal`, `tanggal_ambil`, `id_anggota`, `id_tipeSimpanan`) VALUES
(6, 500, '2020-11-21', 2, 2),
(7, 500, '2021-01-30', 10, 2),
(8, 200, '2021-01-30', 10, 2),
(9, 1000, '2021-01-30', 10, 1),
(10, 3000, '2021-02-15', 11, 2),
(11, 2000, '2021-02-15', 11, 2),
(12, 1500, '2021-03-24', 2, 1),
(13, 5000, '2021-04-08', 2, 2),
(14, 3215, '2021-04-11', 2, 1),
(15, 9990, '2021-04-11', 2, 2),
(16, 128000, '2021-04-11', 2, 1),
(21, 1234, '2021-04-13', 11, 1),
(22, 1234, '2021-04-13', 11, 1),
(23, 5432, '2021-04-13', 2, 1),
(24, 1234, '2021-04-13', 2, 1),
(26, 9765, '2021-04-13', 11, 2),
(27, 1209, '2021-04-13', 11, 1),
(28, 1000, '2021-04-15', 13, 2),
(29, 5000, '2021-04-15', 2, 2),
(30, 1500, '2021-04-15', 11, 2),
(31, 888, '2021-04-15', 11, 2),
(32, 1234, '2021-04-15', 11, 2),
(33, 4321, '2021-04-15', 11, 2),
(34, 1115, '2021-04-15', 11, 2),
(35, 567, '2021-04-15', 10, 2),
(36, 10000, '2021-04-16', 2, 2),
(37, 58000, '2021-04-21', 2, 2),
(38, 50000, '2021-04-21', 2, 2),
(39, 40000, '2021-04-21', 24, 2),
(40, 2500, '2021-04-21', 24, 2),
(41, 2500, '2021-04-21', 24, 2);

-- --------------------------------------------------------

--
-- Table structure for table `simpanan`
--

CREATE TABLE `simpanan` (
  `id_simpanan` int(11) NOT NULL,
  `nominal` int(255) NOT NULL,
  `tanggal_simpanan` date NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_tipeSimpanan` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simpanan`
--

INSERT INTO `simpanan` (`id_simpanan`, `nominal`, `tanggal_simpanan`, `id_anggota`, `id_tipeSimpanan`, `created_at`) VALUES
(8, 1500, '2020-11-21', 2, 1, '2021-04-11 05:32:54'),
(9, 2000, '2020-11-21', 2, 2, '2021-04-11 05:32:54'),
(11, 3500, '2020-11-21', 2, 2, '2021-04-11 05:32:54'),
(14, 1500, '2020-12-01', 2, 1, '2021-04-11 05:32:54'),
(15, 5000, '2020-12-15', 2, 3, '2021-04-11 05:32:54'),
(16, 1000, '2021-01-30', 10, 1, '2021-04-11 05:32:54'),
(17, 1000, '2021-01-30', 10, 2, '2021-04-11 05:32:54'),
(18, 1500, '2021-01-20', 10, 2, '2021-04-11 05:32:54'),
(19, 1000, '2021-01-28', 10, 3, '2021-04-11 05:32:54'),
(20, 35000, '2021-04-19', 11, 3, '2021-04-11 05:32:54'),
(22, 4500, '2021-04-14', 11, 1, '2021-04-11 05:32:54'),
(24, 7500, '2021-02-15', 11, 2, '2021-04-11 05:32:54'),
(25, 4000, '2021-02-17', 2, 3, '2021-04-11 05:32:54'),
(27, 2500, '2021-03-02', 2, 2, '2021-04-11 05:32:54'),
(28, 1000, '2021-03-15', 13, 1, '2021-04-11 05:32:54'),
(29, 1000, '2021-03-15', 13, 3, '2021-04-11 05:32:54'),
(30, 1000, '2021-03-14', 13, 2, '2021-04-11 05:32:54'),
(31, 2000, '2021-03-17', 2, 1, '2021-04-11 05:32:54'),
(33, 4000, '2021-03-24', 13, 3, '2021-04-11 05:32:54'),
(35, 2000, '2021-03-26', 13, 3, '2021-04-11 05:32:54'),
(36, 3000, '2021-03-26', 13, 3, '2021-04-11 05:32:54'),
(37, 4000, '2021-03-26', 13, 3, '2021-04-11 05:32:54'),
(38, 3000, '2021-04-02', 2, 2, '2021-04-11 05:32:54'),
(42, 2500, '2021-04-02', 2, 1, '2021-04-11 05:32:54'),
(43, 5500, '2021-04-02', 2, 2, '2021-04-11 05:32:54'),
(44, 5500, '2021-04-02', 2, 2, '2021-04-11 05:32:54'),
(45, 5500, '2021-04-02', 2, 2, '2021-04-11 05:32:54'),
(47, 6000, '2021-04-03', 2, 2, '2021-04-11 05:32:54'),
(49, 6500, '2021-04-03', 2, 2, '2021-04-11 05:32:54'),
(51, 2000, '2021-04-02', 2, 2, '2021-04-11 05:32:54'),
(61, 2500, '2021-04-02', 2, 2, '2021-04-11 05:32:54'),
(62, 2500, '2021-04-02', 2, 2, '2021-04-11 05:32:54'),
(64, 2500, '2021-04-02', 2, 2, '2021-04-11 05:32:54'),
(77, 50000, '2021-04-10', 11, 2, '2021-04-11 05:32:54'),
(78, 90000, '2021-04-10', 13, 1, '2021-04-11 05:32:54'),
(80, 2500, '2021-04-11', 2, 1, '2021-04-11 05:32:54'),
(81, 2500, '2021-04-11', 2, 1, '2021-04-11 05:32:54'),
(82, 2500, '2021-04-11', 2, 1, '2021-04-11 05:32:54'),
(84, 6500, '2021-04-11', 2, 1, '2021-04-11 05:32:54'),
(86, 5000, '2021-04-11', 11, 1, '2021-04-11 00:40:01'),
(87, 8800, '2021-04-11', 2, 1, '2021-04-11 00:56:47'),
(91, 8888, '2021-04-11', 10, 2, '2021-04-11 08:29:45'),
(92, 34567, '2021-04-11', 13, 1, '2021-04-11 12:45:08'),
(94, 15000, '2021-04-14', 14, 3, '2021-04-14 02:16:17'),
(95, 1200, '2021-04-14', 14, 3, '2021-04-14 02:29:49'),
(96, 50000, '2021-04-15', 14, 1, '2021-04-15 03:53:54'),
(98, 30000, '2021-04-15', 14, 1, '2021-04-15 03:56:55'),
(99, 10000, '2021-04-15', 14, 2, '2021-04-15 14:13:54'),
(100, 3000, '2021-04-15', 13, 2, '2021-04-15 14:16:28'),
(102, 10000, '2021-04-15', 2, 2, '2021-04-15 14:28:05'),
(103, 5000, '2021-04-16', 2, 2, '2021-04-16 01:56:21'),
(105, 95372, '2021-04-16', 2, 2, '2021-04-16 02:06:29'),
(106, 50000, '2021-04-16', 11, 1, '2021-04-16 04:16:00'),
(107, 100000, '2021-04-16', 11, 1, '2021-04-16 06:54:54'),
(108, 35000, '2021-04-16', 2, 3, '2021-04-16 06:56:55'),
(110, 45000, '2021-04-16', 2, 1, '2021-04-16 07:01:06'),
(111, 15000, '2021-04-17', 19, 2, '2021-04-17 11:15:50'),
(112, 88000, '2021-04-17', 11, 2, '2021-04-17 16:56:08'),
(113, 6900, '2021-04-18', 2, 2, '2021-04-18 01:19:03'),
(114, 60900, '2021-04-18', 2, 2, '2021-04-18 01:19:27'),
(116, 1000, '2021-04-18', 2, 1, '2021-04-18 13:09:04'),
(127, 35000, '2021-04-18', 22, 3, '2021-04-18 15:19:45'),
(128, 35000, '2021-04-19', 23, 3, '2021-04-18 15:22:50'),
(129, 35000, '2021-04-18', 24, 3, '2021-04-18 15:58:50'),
(130, 35000, '2021-04-19', 25, 3, '2021-04-18 16:06:52'),
(131, 35000, '2021-04-18', 26, 3, '2021-04-18 16:24:18'),
(132, 35000, '2021-04-18', 27, 3, '2021-04-18 16:33:41'),
(133, 35000, '2021-04-18', 28, 3, '2021-04-18 16:40:25'),
(134, 35000, '2021-04-18', 33, 3, '2021-04-19 05:15:11'),
(135, 35000, '2021-04-19', 33, 3, '2021-04-19 05:15:20'),
(136, 35000, '2021-04-18', 31, 3, '2021-04-19 05:16:04'),
(137, 50000, '2021-04-20', 23, 1, '2021-04-20 02:23:18'),
(138, 50000, '2021-04-20', 7, 1, '2021-04-20 02:29:10'),
(139, 50000, '2021-04-20', 26, 1, '2021-04-20 03:25:38'),
(140, 2500, '2021-04-20', 19, 1, '2021-04-20 03:47:22'),
(141, 40000, '2021-04-20', 11, 2, '2021-04-20 03:52:03'),
(142, 35000, '2021-04-20', 34, 3, '2021-04-20 15:56:56'),
(143, 35500, '2021-04-20', 35, 3, '2021-04-20 16:04:46'),
(145, -13, '2021-04-21', 24, 1, '2021-04-21 07:07:45'),
(146, 50000, '2021-04-21', 2, 2, '2021-04-21 07:25:03'),
(147, 50000, '2021-04-21', 2, 2, '2021-04-21 07:26:31'),
(148, 50000, '2021-04-21', 2, 1, '2021-04-21 10:33:55'),
(149, 25000, '2021-04-21', 35, 2, '2021-04-21 11:48:15'),
(150, 35000, '2021-04-21', 39, 3, '2021-04-21 14:19:08'),
(153, 35000, '2021-04-21', 40, 3, '2021-04-21 14:28:29'),
(154, 35000, '2021-04-21', 41, 3, '2021-04-21 14:30:03'),
(155, 50000, '2021-04-21', 24, 1, '2021-04-21 15:21:26'),
(156, 100000, '2021-04-25', 41, 1, '2021-04-25 07:48:13'),
(157, 100000, '2021-05-07', 26, 2, '2021-05-07 16:51:53'),
(158, 40000, '2021-05-11', 28, 2, '2021-05-11 05:34:01'),
(159, 35000, '2021-05-30', 42, 3, '2021-05-30 09:57:39'),
(160, 35000, '2021-06-03', 43, 3, '2021-06-03 06:24:10');

-- --------------------------------------------------------

--
-- Table structure for table `status_anggota`
--

CREATE TABLE `status_anggota` (
  `status_anggota` int(11) NOT NULL,
  `statusnya` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_anggota`
--

INSERT INTO `status_anggota` (`status_anggota`, `statusnya`) VALUES
(1, 'Aktif'),
(2, 'Nonaktif');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_simpanan`
--

CREATE TABLE `tipe_simpanan` (
  `id_tipeSimpanan` int(11) NOT NULL,
  `tipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_simpanan`
--

INSERT INTO `tipe_simpanan` (`id_tipeSimpanan`, `tipe`) VALUES
(1, 'Simpanan Wajib'),
(2, 'Simpanan Sukarela'),
(3, 'Simpanan Pokok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `status_anggota` (`status_anggota`);

--
-- Indexes for table `angsuran`
--
ALTER TABLE `angsuran`
  ADD PRIMARY KEY (`id_angsuran`),
  ADD KEY `angsuran_ibfk_1` (`id_pinjaman`);

--
-- Indexes for table `histori_pinjaman`
--
ALTER TABLE `histori_pinjaman`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `histori_pinjaman_ibfk_1` (`id_anggota`),
  ADD KEY `histori_pinjaman_ibfk_2` (`id_pinjaman`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `riwayat_simpanan`
--
ALTER TABLE `riwayat_simpanan`
  ADD PRIMARY KEY (`id_riwayatSimpanan`),
  ADD KEY `riwayat_simpanan_ibfk_1` (`id_anggota`);

--
-- Indexes for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`id_simpanan`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `fk_tipe` (`id_tipeSimpanan`);

--
-- Indexes for table `status_anggota`
--
ALTER TABLE `status_anggota`
  ADD PRIMARY KEY (`status_anggota`);

--
-- Indexes for table `tipe_simpanan`
--
ALTER TABLE `tipe_simpanan`
  ADD PRIMARY KEY (`id_tipeSimpanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `angsuran`
--
ALTER TABLE `angsuran`
  MODIFY `id_angsuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `histori_pinjaman`
--
ALTER TABLE `histori_pinjaman`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `riwayat_simpanan`
--
ALTER TABLE `riwayat_simpanan`
  MODIFY `id_riwayatSimpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `simpanan`
--
ALTER TABLE `simpanan`
  MODIFY `id_simpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `status_anggota`
--
ALTER TABLE `status_anggota`
  MODIFY `status_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipe_simpanan`
--
ALTER TABLE `tipe_simpanan`
  MODIFY `id_tipeSimpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`status_anggota`) REFERENCES `status_anggota` (`status_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `angsuran`
--
ALTER TABLE `angsuran`
  ADD CONSTRAINT `angsuran_ibfk_1` FOREIGN KEY (`id_pinjaman`) REFERENCES `pinjaman` (`id_pinjaman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `histori_pinjaman`
--
ALTER TABLE `histori_pinjaman`
  ADD CONSTRAINT `histori_pinjaman_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `histori_pinjaman_ibfk_2` FOREIGN KEY (`id_pinjaman`) REFERENCES `pinjaman` (`id_pinjaman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD CONSTRAINT `pinjaman_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `riwayat_simpanan`
--
ALTER TABLE `riwayat_simpanan`
  ADD CONSTRAINT `riwayat_simpanan_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD CONSTRAINT `fk_tipe` FOREIGN KEY (`id_tipeSimpanan`) REFERENCES `tipe_simpanan` (`id_tipeSimpanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `simpanan_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
