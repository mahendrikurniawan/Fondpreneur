-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2022 pada 12.32
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `nom` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesanan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`nom`, `nama`, `email`, `pesanan`, `tanggal`) VALUES
(1, 'Fanny Febrian', 'fannyfebrian1@gmail.com', 'Pembuatan Banner', '2022-08-11'),
(2, 'Febrian Nur Hadi', 'nurhadifebrian@gmail.com', 'Pembuatan Logo Perusahaan', '2022-08-24'),
(3, 'Farhan Nur Hidayah', 'hidayahallah23@gmail.com', 'Pembuatan Poster', '2022-09-14'),
(4, 'Bambang Al Haji', 'bambangalhaj1@gmail.com', 'Pembuatan Feed IG', '2022-09-20'),
(5, 'Ilham Udin', 'ilhamudin43@gmail.com', 'Pembuatan Poster', '2022-10-10'),
(6, 'Murtod', 'murtod12@gmail.com', 'Pembuatan Banner', '2022-11-12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`nom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
