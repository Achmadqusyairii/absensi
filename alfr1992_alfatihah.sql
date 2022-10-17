-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Sep 2022 pada 11.14
-- Versi server: 10.2.44-MariaDB-cll-lve
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alfr1992_alfatihah`
--

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
  `jamaah_img` varchar(40) NOT NULL,
  `qr_code` varchar(50) NOT NULL,
  `kehadiran` enum('Hadir','Tidak Hadir / Belum Hadir','','') NOT NULL DEFAULT 'Tidak Hadir / Belum Hadir',
  `created_by` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jamaah`
--

INSERT INTO `jamaah` (`id_jamaah`, `nik`, `nama_jamaah`, `nomor_telepon`, `jenis_kelamin`, `alamat`, `nomor_paspor`, `grup_keberangkatan`, `paket`, `jamaah_img`, `qr_code`, `kehadiran`, `created_by`) VALUES
(4, '3575026706590001', 'ALFIYAH MUHAYIN SAMIN', '081242290008', 'Perempuan', 'PERUM KEBON CANDI BLOK H-18 RT 001 RW 012, KEL. KARANGSENTUL, KEC. GONDANG WETAN, KAB. PASURUAN', 'C3015193', '11 Oktober 2022', 'VIP 13 Hari', 'b3f4220539fa725f99523bbaefd32d8c.jpg', '3575026706590001.png', 'Tidak Hadir / Belum Hadir', 7),
(5, '3575026407680002', 'ANITA ERNA YULIARTI', '082230036742', 'Perempuan', 'JL. UNTUNG SUROPATI RT 003 RW 001 , KEL. PURUT REJO, KEC. PURWOREJO, KOTA PASURUAN', 'E0411259', '11 Oktober 2022', 'VIP 13 Hari', '700108993d389c40590807d768c6494e.jpeg', '3575026407680002.png', 'Tidak Hadir / Belum Hadir', 7),
(6, '3575022205600001', 'ADI WALUYO WALIJO', '081331343307', 'Laki-Laki', 'JL. UNTUNG SUROPATI RT 003 RW 001 , KEL. PURUT REJO, KEC. PURWOREJO, KOTA PASURUAN', 'E0411260', '11 Oktober 2022', 'VIP 13 Hari', '9d9a0dea6e8f7a306894f2a3b848cd9d.jpeg', '3575022205600001.png', 'Tidak Hadir / Belum Hadir', 7),
(7, '3514120903700001', 'DIDIK HADI PRAYITNO', '082230441435', 'Laki-Laki', 'Jl. Kecicang RT 004 RW 004 Kel Ngerong, Kec Gempol, Kab Pasuruan', 'C9653203', '16 hari', 'VIP', '7ea69350dc071487c18fb8a26417f013.jpg', '3514120903700001.png', 'Tidak Hadir / Belum Hadir', 2),
(8, '3574011703600001', 'SUKATMAN', '081386378020', 'Laki-Laki', '', 'E0193950', '01 OKTOBER 2022', '16 H', 'c35d46521e4b7b77a2ee205840ec4296.jpg', '3574011703600001.png', 'Tidak Hadir / Belum Hadir', 3),
(9, '3574016512570001', 'WARSINI', '081386378020', 'Perempuan', '', 'E0193952', '01 OKTOBER 2022', '16 H', '570dfd489e4c2a5bdd8dceef4daca705.jpg', '3574016512570001.png', 'Tidak Hadir / Belum Hadir', 3),
(10, '3514142504810008', 'ISWANTORO', '082126646565', 'Laki-Laki', '', '', '11 Oktober 2022', 'VIP 13 Hari', '212db966bd76a18c7d5e3a6a38e7b5c8.jpeg', '3514142504810008.png', 'Tidak Hadir / Belum Hadir', 7),
(11, '3514145307800008', 'IIS YULIATININGSIH', '082231412926', 'Perempuan', '', '', '11 Oktober 2022', 'VIP 13 Hari', '53c717b7b227339808d538b13f79036b.jpeg', '3514145307800008.png', 'Tidak Hadir / Belum Hadir', 7),
(12, '3574021412570001', 'AHMAD RAFIUDIN', '', 'Laki-Laki', '', 'C7851677', '01 OKTOBER 2022', '16 H', '2e60afd0d2d222bf782f8464bb99b19a.jpg', '3574021412570001.png', 'Tidak Hadir / Belum Hadir', 3),
(13, '3574024706580001', 'NUR IZZAH FARIDAH', '', 'Perempuan', '', 'C7851676', '01 OKTOBER 2022', '16 H', 'e1807a6c5972235748a60ebe9cbb77a6.jpg', '3574024706580001.png', 'Tidak Hadir / Belum Hadir', 3);

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
-- Dumping data untuk tabel `kehadiran`
--

INSERT INTO `kehadiran` (`id_kehadiran`, `id_jamaah`, `nik`, `nama_jamaah`, `kehadiran`) VALUES
(43, '12', '35750211059900022', 'Abdul Mutholib', 'Tidak Hadir / Belum Hadir'),
(44, '5', '3575021105990002', 'Abu Tholib', 'Tidak Hadir / Belum Hadir'),
(45, '3', '3575021105990004', 'Mahrus Widi Pratama', 'Hadir');

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
(1, 'Admin Super Power', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1', '0000-00-00', '0', '123456'),
(2, 'Kantor Cabang Malang', 'cabang.malang', '430e1ddc2127505b756fe2c3807e6dfa', '2', '0000-00-00', '1', 'cabangmalang205'),
(3, 'Kantor Cabang Probolinggo', 'cabang.probolinggo', 'ebc35d9c6b0ee27816e366e5b3dd6af8', '2', '0000-00-00', '1', 'cabangprobolinggo012'),
(4, 'Kantor Cabang Situbondo', 'cabang.situbondo', 'e55f6ebe9e737b0fc2e6bc10ff2f4d40', '2', '0000-00-00', '1', 'cabangsitubondo407'),
(5, 'Kantor Cabang Jember', 'cabang.jember', '3e6d9b89d64abffdccce5db08e5ca432', '2', '0000-00-00', '1', 'cabangjember611'),
(6, 'Kantor Jakarta', 'office.jakarta', '62fa4af43a22bb044b369c5fcf64bbdf', '2', '0000-00-00', '1', 'officejakarta110'),
(7, 'Kantor Pusat Pasuruan', 'pusat.pas', '5ec4dd8bf2e93b327fb5e72fb08f50ae', '1', '0000-00-00', '1', 'pusatpasuruan01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jamaah`
--
ALTER TABLE `jamaah`
  ADD PRIMARY KEY (`id_jamaah`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jamaah`
--
ALTER TABLE `jamaah`
  MODIFY `id_jamaah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
