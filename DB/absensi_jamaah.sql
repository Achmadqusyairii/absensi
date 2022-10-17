-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Sep 2022 pada 10.46
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi_jamaah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(150) DEFAULT NULL,
  `berita_isi` text,
  `berita_image` varchar(40) DEFAULT NULL,
  `berita_tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `img_dropzone`
--

CREATE TABLE `img_dropzone` (
  `id` int(11) NOT NULL,
  `nama` varchar(51) NOT NULL,
  `tipe` varchar(5) NOT NULL,
  `ukuran` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `img_dropzone`
--

INSERT INTO `img_dropzone` (`id`, `nama`, `tipe`, `ukuran`) VALUES
(17, 'IMG-20171125-WA0051.jpg', 'image', '14655');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jamaah`
--

CREATE TABLE `jamaah` (
  `id_jamaah` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama_jamaah` varchar(255) NOT NULL,
  `nomor_telepon` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `alamat` text NOT NULL,
  `nomor_paspor` varchar(11) NOT NULL,
  `grup_keberangkatan` varchar(50) NOT NULL,
  `paket` varchar(11) NOT NULL,
  `lama_hari` int(10) NOT NULL,
  `hotel_madinah` varchar(100) NOT NULL,
  `hotel_mekkah` varchar(100) NOT NULL,
  `jamaah_img` varchar(40) NOT NULL,
  `qr_code` varchar(50) NOT NULL,
  `kehadiran` enum('Hadir','Tidak Hadir / Belum Hadir','','') NOT NULL DEFAULT 'Tidak Hadir / Belum Hadir',
  `created_by` int(5) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uuid` text,
  `qr_code_benar` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jamaah`
--

INSERT INTO `jamaah` (`id_jamaah`, `nik`, `nama_jamaah`, `nomor_telepon`, `jenis_kelamin`, `alamat`, `nomor_paspor`, `grup_keberangkatan`, `paket`, `lama_hari`, `hotel_madinah`, `hotel_mekkah`, `jamaah_img`, `qr_code`, `kehadiran`, `created_by`, `created_at`, `updated_at`, `uuid`, `qr_code_benar`) VALUES
(4, '..', 'ALFIYAH MUHAYIN SAMIN', '..', 'Perempuan', '..', '..', '2022-10-11', 'VIP', 13, '', '', 'b3f4220539fa725f99523bbaefd32d8c.jpg', '3575026706590001.png', 'Hadir', 7, '2022-09-19 00:00:00', '2022-09-30 08:16:28', '1a17abc1-3ab1-11ed-8d7e-c81f66b925de', '1a17abc1-3ab1-11ed-8d7e-c81f66b925de.png'),
;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id_kehadiran` int(11) NOT NULL,
  `id_jamaah` varchar(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama_jamaah` varchar(255) NOT NULL,
  `kehadiran` enum('Hadir','Tidak Hadir / Belum Hadir','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `kategori` enum('Umroh','Haji','Tour','') NOT NULL,
  `nama_program` varchar(100) NOT NULL,
  `paket` enum('Ekonomi','Hemat','Semi VIP','VIP') NOT NULL DEFAULT 'Ekonomi',
  `hotel_mekkah` varchar(100) NOT NULL,
  `hotel_madinah` varchar(100) NOT NULL,
  `bintang_mekkah` varchar(2) NOT NULL,
  `bintang_madinah` varchar(2) NOT NULL,
  `matauang` enum('Rp','USD','','') NOT NULL DEFAULT 'Rp',
  `uang_muka` varchar(50) NOT NULL,
  `matauangall` enum('Rp','USD','','') NOT NULL DEFAULT 'Rp',
  `harga_paket` varchar(50) NOT NULL,
  `sudah_termasuk` text NOT NULL,
  `belum_termasuk` text NOT NULL,
  `paket_img` varchar(40) NOT NULL,
  `tampilan` enum('Uang Muka','Harga','','') NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
------------------------------

--
-- Struktur dari tabel `scan`
--

CREATE TABLE `scan` (
  `id_scan` int(11) NOT NULL,
  `nik_terscan` varchar(100) NOT NULL,
  `id_jamaah` varchar(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_level` varchar(3) DEFAULT NULL,
  `created_at` date NOT NULL,
  `created_by` varchar(11) NOT NULL,
  `pass` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`, `created_at`, `created_by`, `pass`) VALUES
(1, 'Admin Super Power', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', '0000-00-00', '0', '123456');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indeks untuk tabel `img_dropzone`
--
ALTER TABLE `img_dropzone`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jamaah`
--
ALTER TABLE `jamaah`
  ADD PRIMARY KEY (`id_jamaah`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `scan`
--
ALTER TABLE `scan`
  ADD PRIMARY KEY (`id_scan`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `img_dropzone`
--
ALTER TABLE `img_dropzone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `jamaah`
--
ALTER TABLE `jamaah`
  MODIFY `id_jamaah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `scan`
--
ALTER TABLE `scan`
  MODIFY `id_scan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
