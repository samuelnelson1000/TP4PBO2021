-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Apr 2021 pada 17.19
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_taaruf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `taaruf`
--

CREATE TABLE `taaruf` (
  `id` int(11) NOT NULL,
  `nim` varchar(8) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomor_telepon` varchar(16) NOT NULL,
  `kelas` varchar(32) NOT NULL,
  `asal_daerah` varchar(32) NOT NULL,
  `status_kenalan` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `taaruf`
--

INSERT INTO `taaruf` (`id`, `nim`, `nama`, `nomor_telepon`, `kelas`, `asal_daerah`, `status_kenalan`) VALUES
(1, '1901283', 'Rick Astley', '08125872921', 'Pend. Ilmu Komputer B', 'California', 'Sudah Kenal'),
(2, '1907421', 'Tatang Sutarma', '0218573993', 'Ilmu Komputer C2', 'Sumedang', 'Baru Kenalan'),
(3, '1900001', 'Joseph Surasep', '08881092836', 'Ilmu Komputer C1', 'Bandung', 'Baru Kenalan'),
(7, '1902374', 'John Henry', '0816374125', 'Ilmu Komputer C1', 'Bekasi', 'Baru Kenalan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `taaruf`
--
ALTER TABLE `taaruf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `taaruf`
--
ALTER TABLE `taaruf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
