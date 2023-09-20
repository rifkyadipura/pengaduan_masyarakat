-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2023 pada 14.58
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan_masyarakat_rifky`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `tampil_proses_rifky` ()   BEGIN 
SELECT pengaduan_rifky.id_pengaduan_rifky, pengaduan_rifky.tgl_pengaduan_rifky, pengaduan_rifky.nik_rifky, pengaduan_rifky.isi_laporan_rifky, pengaduan_rifky.status_rifky, masyarakat_rifky.nama_rifky FROM pengaduan_rifky INNER JOIN masyarakat_rifky ON pengaduan_rifky.nik_rifky = masyarakat_rifky.nik_rifky WHERE status_rifky = "proses";
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_aktif_rifky`
--

CREATE TABLE `log_aktif_rifky` (
  `id_log_rifky` int(11) NOT NULL,
  `id_pengaduan_rifky` int(11) NOT NULL,
  `tanggal_rifky` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `aktifitas_rifky` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `log_aktif_rifky`
--

INSERT INTO `log_aktif_rifky` (`id_log_rifky`, `id_pengaduan_rifky`, `tanggal_rifky`, `aktifitas_rifky`) VALUES
(1, 4, '2023-03-06 04:22:55', 'proses pengaduan'),
(2, 5, '2023-03-06 05:59:12', 'proses pengaduan'),
(3, 5, '2023-03-06 05:59:17', 'proses pengaduan'),
(4, 5, '2023-03-06 06:01:34', 'proses pengaduan'),
(5, 2, '2023-03-06 12:16:35', 'proses pengaduan'),
(6, 2, '2023-03-07 03:58:02', 'proses pengaduan'),
(7, 2, '2023-03-07 04:21:05', 'proses pengaduan'),
(8, 1, '2023-03-07 04:40:18', 'proses pengaduan'),
(9, 1, '2023-03-07 04:41:54', 'proses pengaduan'),
(10, 3, '2023-03-13 02:15:30', 'proses pengaduan'),
(11, 3, '2023-03-13 02:16:39', 'proses pengaduan'),
(12, 4, '2023-03-13 02:30:12', 'proses pengaduan'),
(13, 4, '2023-03-13 02:33:09', 'proses pengaduan'),
(14, 5, '2023-03-13 02:36:32', 'proses pengaduan'),
(15, 5, '2023-03-13 02:36:58', 'proses pengaduan'),
(16, 5, '2023-03-13 02:37:06', 'proses pengaduan'),
(17, 5, '2023-03-13 02:37:15', 'proses pengaduan'),
(18, 5, '2023-03-13 02:37:18', 'proses pengaduan'),
(19, 5, '2023-03-13 02:37:22', 'proses pengaduan'),
(20, 5, '2023-03-13 02:37:32', 'proses pengaduan'),
(21, 6, '2023-03-13 03:04:53', 'proses pengaduan'),
(22, 6, '2023-03-13 03:04:59', 'proses pengaduan'),
(23, 6, '2023-03-13 03:05:02', 'proses pengaduan'),
(24, 6, '2023-03-13 03:08:58', 'proses pengaduan'),
(25, 6, '2023-03-13 03:09:26', 'proses pengaduan'),
(26, 7, '2023-03-13 04:03:57', 'proses pengaduan'),
(27, 7, '2023-03-13 04:04:44', 'proses pengaduan'),
(28, 8, '2023-03-13 04:07:19', 'proses pengaduan'),
(29, 8, '2023-03-13 04:08:14', 'proses pengaduan'),
(30, 8, '2023-03-13 04:09:55', 'proses pengaduan'),
(31, 8, '2023-03-13 04:31:28', 'proses pengaduan'),
(32, 8, '2023-03-13 04:31:42', 'proses pengaduan'),
(33, 8, '2023-03-13 04:32:03', 'proses pengaduan'),
(34, 8, '2023-03-13 04:34:02', 'proses pengaduan'),
(35, 8, '2023-03-13 04:34:54', 'proses pengaduan'),
(36, 1, '2023-03-16 13:46:42', 'proses pengaduan'),
(37, 1, '2023-03-16 13:47:00', 'proses pengaduan'),
(38, 3, '2023-03-16 13:48:14', 'proses pengaduan'),
(39, 3, '2023-03-16 13:51:53', 'proses pengaduan'),
(40, 2, '2023-03-16 13:52:09', 'proses pengaduan'),
(41, 2, '2023-03-16 13:53:03', 'proses pengaduan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat_rifky`
--

CREATE TABLE `masyarakat_rifky` (
  `nik_rifky` char(16) NOT NULL,
  `nama_rifky` varchar(35) NOT NULL,
  `username_rifky` varchar(25) NOT NULL,
  `password_rifky` varchar(32) NOT NULL,
  `telp_rifky` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `masyarakat_rifky`
--

INSERT INTO `masyarakat_rifky` (`nik_rifky`, `nama_rifky`, `username_rifky`, `password_rifky`, `telp_rifky`) VALUES
('1135309170879005', 'febri mulyadi', 'febri', '202cb962ac59075b964b07152d234b70', '0897667535423'),
('2321309170030002', 'rian babayo', 'babayo', '202cb962ac59075b964b07152d234b70', '08767564635232'),
('3321309170030009', 'stepen anton goll', 'stepen', '202cb962ac59075b964b07152d234b70', '089766789876'),
('3324309170030010', 'agus samsudin', 'agus', '202cb962ac59075b964b07152d234b70', '0897643627282');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan_rifky`
--

CREATE TABLE `pengaduan_rifky` (
  `id_pengaduan_rifky` int(11) NOT NULL,
  `tgl_pengaduan_rifky` date NOT NULL,
  `nik_rifky` varchar(16) NOT NULL,
  `isi_laporan_rifky` text NOT NULL,
  `foto_rifky` varchar(255) NOT NULL,
  `status_rifky` enum('0','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengaduan_rifky`
--

INSERT INTO `pengaduan_rifky` (`id_pengaduan_rifky`, `tgl_pengaduan_rifky`, `nik_rifky`, `isi_laporan_rifky`, `foto_rifky`, `status_rifky`) VALUES
(1, '2023-03-16', '3321309170030009', 'ada sekelompok pemuda kurang kerjaan mohon di bina ', 'MB.png', 'selesai'),
(2, '2023-03-16', '1135309170879005', 'tolong di JL Messi Goat ada balap liar tolong di urus', 'messi.jpg', 'selesai'),
(3, '2023-03-16', '2321309170030002', 'ada tauran sekelompok anak muda di taman odado tolong ini sangat meresahkan', 'logo.jpg', 'proses'),
(4, '2023-03-16', '3321309170030009', 'tolong ada orang yang mengaku menjadi messi is goat rill no pek pek', 'messiun.jpg', '0');

--
-- Trigger `pengaduan_rifky`
--
DELIMITER $$
CREATE TRIGGER `log_aktivitas_rifky` AFTER UPDATE ON `pengaduan_rifky` FOR EACH ROW BEGIN
	INSERT INTO log_aktif_rifky
    SET id_pengaduan_rifky = OLD.id_pengaduan_rifky,
    aktifitas_rifky="proses pengaduan";
    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas_rifky`
--

CREATE TABLE `petugas_rifky` (
  `id_petugas_rifky` int(11) NOT NULL,
  `nama_petugas_rifky` varchar(35) NOT NULL,
  `username_rifky` varchar(25) NOT NULL,
  `password_rifky` varchar(32) NOT NULL,
  `telp_rifky` varchar(13) NOT NULL,
  `level_rifky` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `petugas_rifky`
--

INSERT INTO `petugas_rifky` (`id_petugas_rifky`, `nama_petugas_rifky`, `username_rifky`, `password_rifky`, `telp_rifky`, `level_rifky`) VALUES
(1, 'admin', 'admin', '202cb962ac59075b964b07152d234b70', '089657867765', 'admin'),
(2, 'DadangBedog', 'dadang', '202cb962ac59075b964b07152d234b70', '0897865678987', 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan_rifky`
--

CREATE TABLE `tanggapan_rifky` (
  `id_tanggapan_rifky` int(11) NOT NULL,
  `id_pengaduan_rifky` int(11) NOT NULL,
  `tgl_tanggapan_rifky` date NOT NULL,
  `tanggapan_rifky` text NOT NULL,
  `id_petugas_rifky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tanggapan_rifky`
--

INSERT INTO `tanggapan_rifky` (`id_tanggapan_rifky`, `id_pengaduan_rifky`, `tgl_tanggapan_rifky`, `tanggapan_rifky`, `id_petugas_rifky`) VALUES
(1, 1, '2023-03-16', 'baik kami akan bina agar lebih baik', 1),
(2, 2, '2023-03-16', 'tolong perwakilan warga datang ke kantor pengaduan agar proses dapat dengan mudah kami tangani', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `log_aktif_rifky`
--
ALTER TABLE `log_aktif_rifky`
  ADD PRIMARY KEY (`id_log_rifky`);

--
-- Indeks untuk tabel `masyarakat_rifky`
--
ALTER TABLE `masyarakat_rifky`
  ADD PRIMARY KEY (`nik_rifky`);

--
-- Indeks untuk tabel `pengaduan_rifky`
--
ALTER TABLE `pengaduan_rifky`
  ADD PRIMARY KEY (`id_pengaduan_rifky`),
  ADD KEY `nik_rifky` (`nik_rifky`);

--
-- Indeks untuk tabel `petugas_rifky`
--
ALTER TABLE `petugas_rifky`
  ADD PRIMARY KEY (`id_petugas_rifky`);

--
-- Indeks untuk tabel `tanggapan_rifky`
--
ALTER TABLE `tanggapan_rifky`
  ADD PRIMARY KEY (`id_tanggapan_rifky`),
  ADD KEY `id_petugas_rifky` (`id_petugas_rifky`),
  ADD KEY `id_pengaduan_rifky` (`id_pengaduan_rifky`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `log_aktif_rifky`
--
ALTER TABLE `log_aktif_rifky`
  MODIFY `id_log_rifky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `pengaduan_rifky`
--
ALTER TABLE `pengaduan_rifky`
  MODIFY `id_pengaduan_rifky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `petugas_rifky`
--
ALTER TABLE `petugas_rifky`
  MODIFY `id_petugas_rifky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tanggapan_rifky`
--
ALTER TABLE `tanggapan_rifky`
  MODIFY `id_tanggapan_rifky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengaduan_rifky`
--
ALTER TABLE `pengaduan_rifky`
  ADD CONSTRAINT `pengaduan_rifky_ibfk_1` FOREIGN KEY (`nik_rifky`) REFERENCES `masyarakat_rifky` (`nik_rifky`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tanggapan_rifky`
--
ALTER TABLE `tanggapan_rifky`
  ADD CONSTRAINT `tanggapan_rifky_ibfk_1` FOREIGN KEY (`id_petugas_rifky`) REFERENCES `petugas_rifky` (`id_petugas_rifky`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tanggapan_rifky_ibfk_2` FOREIGN KEY (`id_pengaduan_rifky`) REFERENCES `pengaduan_rifky` (`id_pengaduan_rifky`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
