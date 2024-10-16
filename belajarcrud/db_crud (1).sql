-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2024 pada 13.36
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajar`
--

CREATE TABLE `pelajar` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nomor_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelajar`
--

INSERT INTO `pelajar` (`id`, `nama`, `jenis_kelamin`, `jurusan`, `alamat`, `hobi`, `tempat_lahir`, `tanggal_lahir`, `nomor_hp`) VALUES
(31, 'Idris Afdal', 'Laki - Laki', 'IPA', 'Bogar', 'Turu', 'Palopo', '2024-10-03', '09876432'),
(34, 'M Rifky', 'Laki - Laki', 'IPA', '554443fdfd', 'dfdr', 'Malangke', '2024-10-12', '34434343'),
(35, 'Andi Surya', 'Laki - Laki', 'IPA', 'Jl. Merpati No. 5, Makassar', 'Bermain gitar', 'Makassar', '2000-02-02', '08123456789'),
(36, 'Siti Aisyah', 'Perempuan', 'IPS', 'Jl. Kenari No. 9, Surabaya', 'Membaca', 'Surabaya', '1997-10-22', '08211234567'),
(37, 'Budi Santoso', 'Laki - Laki', 'IPA', 'Jl. Anggrek No. 11, Jakarta', 'Sepak bola', 'Jakarta', '1994-03-18', '08512345678'),
(38, 'Rina Kurniawati', 'Perempuan', 'BAHASA', 'Jl. Flamboyan No. 23, Bandung', 'Fotografi', 'Bandung', '0000-00-00', '08191234567'),
(39, 'Hendra Wijaya', 'Laki-laki', 'IPS', 'Jl. Melati No. 7, Yogyakarta', 'Bersepeda', 'Yogyakarta', '1993-08-19', '08781234567'),
(40, 'Indah Permata', 'Perempuan', 'IPS', 'Jl. Mawar No. 12, Semarang', 'Mendengarkan musik', 'Semarang', '1998-05-10', '08311234567'),
(41, 'Rizky Pratama', 'Laki-laki', 'BAHASA', 'Jl. Cemara No. 19, Bali', 'Menulis', 'Denpasar', '1995-11-25', '08551234567'),
(42, 'Dewi Lestari', 'Perempuan', 'IPA', 'Jl. Dahlia No. 4, Medan', 'Memasak', 'Medan', '1996-02-14', '08231234567'),
(43, 'Ardi Susanto', 'Laki-laki', 'IPS', 'Jl. Bougenville No. 8, Palembang', 'Bermain catur', 'Palembang', '1997-09-29', '08981234567'),
(44, 'Lina Hartono', 'Perempuan', 'BAHASA', 'Jl. Cendana No. 17, Malang', 'Menari', 'Malang', '1994-06-22', '08171234567');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
