-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2020 pada 12.41
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `bamer`
--

CREATE TABLE `bamer` (
  `id` int(11) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `harga_bawang` int(11) NOT NULL,
  `jumlah_bawang` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bamer`
--

INSERT INTO `bamer` (`id`, `kota`, `harga_bawang`, `jumlah_bawang`, `total`) VALUES
(2, '11122', 1222, 1122, 122),
(3, '3', 3, 3, 33);

-- --------------------------------------------------------

--
-- Struktur dari tabel `baput`
--

CREATE TABLE `baput` (
  `id` int(11) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `harga_bawang` int(11) NOT NULL,
  `jumlah_bawang` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`) VALUES
(1, 'prima', 'primyo15@gmail.com', '$2y$10$jCj3sDZsrnWpFJwQDRYEE.W9s6W6.lDDbHqCbXWYaHIU0iNPkUn36', 'prima'),
(2, 'aku', 'aku@gmail.com', '$2y$10$tfg5wdKWBY1xtOsBha6pA.KZcaa1PEia.VXaL90VLqnekx/PR..Oy', 'aku'),
(3, 'coba', 'coba@gmail.com', '$2y$10$SkLaTDAXYSxqK4gecrU.qe.UHtil9LmCf0bMtEiFPZ2n.YsQM63qy', 'coba'),
(4, 'lulu', 'lulu@gmail.com', '$2y$10$1o2SklRf/eRR6JL8qO3wbupCibP9Sy5E1H.rooFMDERTeBj7Qg/iS', 'lulu'),
(5, 'lala', 'lalalal@gmail.com', '$2y$10$EJH82GOUJZp0mRj2rD08FetuijeYC3A5q5hCzTRwKuxyjXI1SaueC', 'aaa'),
(6, 'yaya', 'yaya@gmail.com', '$2y$10$dZYHVkmNu9KX2ANfbcCndO00TePxWyj4GdjyUXi1.JE7s3LpuDE8S', 'yaya'),
(7, 'sdfa', 'Susitio104@gmail.com', '$2y$10$wtBZwzSXdE3B4EMr6l6are3LP6.GhYmMvbdB2Akh83BE4PTRTZLfW', 'safcds'),
(9, '', '', '$2y$10$EOGJwZryNbEOJshZZK/9/utCTgxTHFmE4KRf/zcPO1bvSV7arr/8y', ''),
(26, 'lolo', 'Susitio104@gmail.com', '$2y$10$yx7yOv0qMVEyc.hQz2sC5uludM0Bhe9SVsPIukMzWHHxDjVLT4TUK', 'lolo'),
(27, 'sdaf', 'Susitio104@gmail.com', '$2y$10$C0ivNSA7zJuUiatlAd0oquFkuybZtWYP3UuzbMPG.mMgFoYoX048y', 'pdaas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bamer`
--
ALTER TABLE `bamer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `baput`
--
ALTER TABLE `baput`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bamer`
--
ALTER TABLE `bamer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `baput`
--
ALTER TABLE `baput`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
