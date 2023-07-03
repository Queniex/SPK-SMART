-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2023 pada 09.22
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `choose_data`
--

CREATE TABLE `choose_data` (
  `id` int(11) NOT NULL,
  `id_subkategori` int(11) NOT NULL,
  `num_choose` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `choose_data`
--

INSERT INTO `choose_data` (`id`, `id_subkategori`, `num_choose`, `id_user`) VALUES
(72, 34, 1, 7),
(73, 39, 1, 7),
(74, 40, 1, 7),
(75, 45, 1, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `nilai_bobot` float NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `nilai_bobot`, `id_user`) VALUES
(18, 'Gender', 0.15, 7),
(19, 'Usia', 0.25, 7),
(20, 'Berat', 0.3, 7),
(21, 'Harga', 0.3, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkategori`
--

CREATE TABLE `subkategori` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `subkategori` varchar(200) NOT NULL,
  `nilai_subkategori` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `subkategori`
--

INSERT INTO `subkategori` (`id`, `id_kategori`, `subkategori`, `nilai_subkategori`) VALUES
(34, 18, 'Jantan', 0.6),
(35, 18, 'Betina', 0.4),
(36, 19, '<= 1 thn', 0.3),
(37, 19, '1 - 3 thn', 0.5),
(38, 19, '3 - 5 thn', 0.3),
(39, 19, '> 5 thn', 0.2),
(40, 20, '< 10 kg', 0.2),
(41, 20, '10 - 15 kg', 0.3),
(42, 20, '15 - 20 kg\r\n', 0.4),
(43, 20, '25 - 40 kg ', 0.5),
(44, 20, '> 40 kg', 0.6),
(45, 21, '< 2,5 jt', 0.8),
(46, 21, '2,5 - 3,5 jt', 0.6),
(47, 21, '3,5 - 4,5 jt', 0.4),
(48, 21, '> 4,5 jt', 0.3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(7, 'admin', '$2y$10$FoLZCbs7ytMjzSE29q/kT.jD2CrtOlostHtBoOy7co/wKgA8nZF6i', 'admin'),
(8, 'Quenie', '$2y$10$WOWsShWhfBOfofCjUL1pBOEk7g67tVmefOliHIjWBHv2dO6PJ0qkC', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `choose_data`
--
ALTER TABLE `choose_data`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subkategori`
--
ALTER TABLE `subkategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `choose_data`
--
ALTER TABLE `choose_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `subkategori`
--
ALTER TABLE `subkategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
