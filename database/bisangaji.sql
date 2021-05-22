-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2021 pada 14.14
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bisangaji`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_user`
--

CREATE TABLE `level_user` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `level_user`
--

INSERT INTO `level_user` (`id_level`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama_user`, `id_level`) VALUES
(2, 'admin@gmail.com', 'admin', 'Admin', 1),
(15, 'yudhakrisnawan1922@gmail.com', 'yudha', 'Yudha Krisnawan', 2),
(16, 'rizal@gmail.com', 'rizal', 'Rizal Alfianto', 2),
(17, 'andicho@gmail.com', 'andicho', 'Andicho Putra Argadinata', 2),
(18, 'farid@gmail.com', 'farid', 'Muhammad Farid Irsyadi', 2),
(19, 'yusuf@gmail.com', 'yusuf', 'Yusuf Khoirul Umam', 2),
(20, 'cahyaning@gmail.com', 'cahyaning', 'Cahyaning Wulan Fitri', 2),
(21, 'zalina@gmail.com', 'zalina', 'Zalina Oktavia', 2),
(22, 'nuraini@gmail.com', 'nuraini', 'Nur Aini', 2),
(23, 'dini@gmail.com', 'dini', 'Dini Wulan Suci', 2),
(24, 'sabilul@gmail.com', 'sabilul', 'Sabilul Alif', 2),
(25, 'erwin@gmail.com', 'erwin', 'Erwin Prima', 2),
(26, 'azzam@gmail.com', 'azzam', 'Abdulloh Azzam', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `judul_video` varchar(100) NOT NULL,
  `nama_video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id_video`, `judul_video`, `nama_video`) VALUES
(4, 'Belajar Rukun Islam', 'islam.mp4'),
(5, 'Belajar Rukun Iman', 'iman.mp4'),
(11, 'Belajar Huruf Hijaiyah', 'hijaiyah.mp4'),
(13, 'Belajar Berdzikir', 'dzikir.mp4');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `level_user`
--
ALTER TABLE `level_user`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level_2` (`id_level`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level_user` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
