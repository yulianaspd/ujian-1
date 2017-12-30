-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Des 2017 pada 06.56
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ujian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jawaban`
--

CREATE TABLE `tb_jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `benar` int(3) NOT NULL,
  `salah` int(3) NOT NULL,
  `nilai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jawaban`
--

INSERT INTO `tb_jawaban` (`id_jawaban`, `id_siswa`, `tanggal`, `benar`, `salah`, `nilai`) VALUES
(1, 1, '2017-12-18', 0, 0, 0),
(2, 1, '2017-12-18', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` enum('TKI','ADM Perkantoran','Akutansi','Tata Niaga','Keperawatan') NOT NULL,
  `nilai` float NOT NULL,
  `waktu` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama`, `jurusan`, `nilai`, `waktu`, `keterangan`) VALUES
(1, 'Bahasa Indonesia', 'TKI', 65, 30, 'Bahasa Indonesia IPA'),
(3, 'Coba', 'ADM Perkantoran', 80, 80, '80'),
(4, 'Coba 2', 'TKI', 80, 80, '--');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` enum('Islam','Kristen','Khatolik','Hindu','Budha') NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `jurusan` enum('TKI','ADM Perkantoran','Akutansi','Tata Niaga','Keperawatan') NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nim`, `nama`, `jk`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat`, `jurusan`, `username`, `password`) VALUES
(1, '123456', 'Wahaha', 'Laki -Laki', 'Sini', '2017-12-18', 'Islam', 'Solo', 'TKI', 'haha', '4e4d6c332b6fe62a63afe56171fd3725');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal`
--

CREATE TABLE `tb_soal` (
  `id_soal` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban` varchar(5) NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `e` text NOT NULL,
  `status` enum('Tampil','Tidak','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_soal`
--

INSERT INTO `tb_soal` (`id_soal`, `id_mapel`, `tanggal`, `pertanyaan`, `jawaban`, `a`, `b`, `c`, `d`, `e`, `status`) VALUES
(1, 1, '2017-12-16', 'bahasa indo', 'B', 'asdasfwena sts', ' ertnserts er', 'tnaetan5an54', 'n45an45an5anwt dfxf h', 'xthx t ryze rt', 'Tampil'),
(2, 3, '2017-12-16', 'jangan Coba coba', 'A', 'waraew zsdf zabe', 'seawera weraw erabw', 'waerbaebraebr', 'awebradg dfg', 'sdasdasda', 'Tampil'),
(4, 3, '2017-12-20', '', 'A', 'asdasd', 'asdasd', 'sdadsa', 'sdasda', 'sdasdasd', 'Tampil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('Admin','Siswa','','') NOT NULL,
  `status` enum('Aktif','Tidak','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `nim`, `nama`, `email`, `username`, `password`, `level`, `status`) VALUES
(1, 0, 'Coba', 'coba@gmail.com', 'coba', 'c3ec0f7b054e729c5a716c8125839829', 'Admin', 'Aktif'),
(2, 0, 'Admin Coba', 'admin@coba.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Aktif'),
(3, 123456, 'Wahaha', '', 'test', '098f6bcd4621d373cade4e832627b4f6', 'Siswa', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_soal`
--
ALTER TABLE `tb_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
