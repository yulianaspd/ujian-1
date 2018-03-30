-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Mar 2018 pada 03.32
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
-- Struktur dari tabel `tb_bahas`
--

CREATE TABLE `tb_bahas` (
  `id_bahas` int(11) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `jurusan` enum('TKI','ADM-Perkantoran','Akuntansi','Pemasaran','Keperawatan') NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_bahas`
--

INSERT INTO `tb_bahas` (`id_bahas`, `nama_mapel`, `jurusan`, `keterangan`, `file`) VALUES
(3, 'Bahasa-Indonesia-TKI', 'TKI', 'Pembahasan-Soal', '56ac0c61916729177b2045c2855b11f3.pdf'),
(4, 'Bahasa-Indonesia-ADM-Perkantoran', 'ADM-Perkantoran', 'Pembahasan Soal', '52fef279d15f5dd9331d5f4acfb67da0.pdf'),
(5, 'Bahasa-Indonesia-Akutansi', 'Akuntansi', 'Pembahasan Soal', '0d5b214bcc6da649de4fb9621bb270e4.pdf'),
(6, 'Bahasa-Indonesia-Pemasaran', 'Pemasaran', 'Pembahasan Soal', '10606ed4b2c6353ff157e7bbbfae400b.pdf'),
(7, 'Bahasa-Indonesia-Keperawatan', 'Keperawatan', 'Pembahasan Soal', 'e05c4bacf03a2353938967d682faae03.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL,
  `jurusan` enum('TKI','ADM-Perkantoran','Akuntansi','Pemasaran','Keperawatan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama_mapel`, `jurusan`) VALUES
(9, 'Bahasa-Indonesia-TKI', 'TKI'),
(10, 'Bahasa-Indonesia-ADM-Perkantoran', 'ADM-Perkantoran'),
(11, 'Bahasa-Indonesia-Akutansi', 'Akuntansi'),
(12, 'Bahasa-Indonesia-Pemasaran', 'Pemasaran'),
(13, 'Bahasa-Indonesia-Keperawatan', 'Keperawatan'),
(14, 'Matematika-TKI', 'TKI'),
(15, 'Matematika-ADM-Perkantoran', 'ADM-Perkantoran'),
(16, 'Matematika-Keperawatan', 'Keperawatan'),
(17, 'Matematika-Pemasaran', 'Pemasaran'),
(18, 'Matematika-Akutansi', 'Akuntansi'),
(19, 'Bahasa-Inggris-Pemasaran', 'Pemasaran'),
(20, 'Bahasa-Inggris-Akutansi', 'Akuntansi'),
(21, 'Bahasa-Inggris-ADM-Perkantoran', 'ADM-Perkantoran'),
(22, 'Bahasa-Inggris-TKI', 'TKI'),
(23, 'Bahasa-Inggris-Keperawatan', 'Keperawatan'),
(24, 'Kejuruan-Akutansi', 'Akuntansi'),
(25, 'Kejuruan-ADM-Perkantoran', 'ADM-Perkantoran'),
(26, 'Kejuruan-TKI', 'TKI'),
(27, 'Kejuruan-Pemasaran', 'Pemasaran'),
(28, 'Kejuruan-Keperawatan', 'Keperawatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `benar` double NOT NULL,
  `nilai` double NOT NULL,
  `durasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `nis`, `nama`, `nama_mapel`, `jurusan`, `benar`, `nilai`, `durasi`) VALUES
(4, '123456', 'Wahaha', 'Bahasa-Indonesia-TKI', 'TKI', 0, 0, ''),
(5, '8643', 'EVA MARDIANA', 'Bahasa-Indonesia-Keperawatan', 'Keperawatan', 0, 0, '00:52'),
(6, '8715', 'BAGUS SEPTI YANTO', 'Bahasa-Indonesia-Pemasaran', 'Pemasaran', 0, 0, '00:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha') NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `jurusan` enum('TKI','ADM-Perkantoran','Akuntansi','Pemasaran','Keperawatan') NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nis`, `nama`, `jk`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat`, `jurusan`, `username`, `password`) VALUES
(2, '8594', 'ALBERT FIRDAUS', 'Laki -Laki', 'SURAKARTA', '2000-08-11', 'Kristen', 'Kampung Sewu Rt 05 Rw 06 Sewu, Jebres, Surakarta, 57123', 'TKI', 'albert', '6c5bc43b443975b806740d8e41146479'),
(3, '8596', 'ANGELICA SEKAR RATNANINGRUM', 'Perempuan', 'SURAKARTA', '1999-08-07', 'Katholik', 'Tegalharjo Rt 01 Rw 05 Tegalharjo, Jebres, Surakarta, 57128', 'TKI', 'angel', 'f4f068e71e0d87bf0ad51e6214ab84e9'),
(4, '8643', 'EVA MARDIANA', 'Perempuan', 'SURAKARTA', '2000-04-26', 'Kristen', 'Jln. Pelangi Timur No. 23 Rt 03 Rw 28 Mojosongo, Jebres, Surakarta, 57127', 'Keperawatan', 'eva', '14bd76e02198410c078ab65227ea0794'),
(5, '8644', 'FIBIAN ANJANI RAMLI', 'Laki -Laki', 'SURAKARTA', '2000-02-03', 'Islam', 'Petoran Rt 04 Rw 05 Kel. Jebres, Kec. Jebres, Surakarta, 57126', 'Keperawatan', 'febian', '0fd978835477456e301c65c22b408ae8'),
(6, '8663', 'CLARA DIAH SULASTRI', 'Perempuan', 'SURAKARTA', '2000-08-11', 'Katholik', 'Purbowardayan Rt 01 Rw 02 Tegalharjo, Jebres, Surakarta, 57128', 'Akuntansi', 'clara', '23d1e10df85ef805b442a922b240ce25'),
(7, '8676', 'SENDITIO BRASTITO', 'Laki -Laki', 'KARANGANYAR', '1998-07-28', 'Islam', 'Gondang Barat Rt 01 Rw 03 Manahan, Banjarsari, Surakarta', 'Akuntansi', 'sendito', 'ddba6756681747e635c74b386516fd2e'),
(8, '8684', 'DIAN RANI', 'Perempuan', 'SURAKARTA', '2000-09-22', 'Kristen', 'Jln. Merak No. 32 BGI Rt 02 Rw 11 Jaten, Kec. Jaten, Karanganyar, 57771', 'ADM-Perkantoran', 'dian', 'f97de4a9986d216a6e0fea62b0450da9'),
(9, '8688', 'EVI MARDIANA', 'Perempuan', 'SURAKARTA', '2000-04-26', 'Kristen', 'Petoran Rt 04 Rw 05 Kel. Jebres, Kec. Jebres, Surakarta, 57126', 'ADM-Perkantoran', 'evi', '689635ad79c4a248aa87d21ad4f28422'),
(10, '8715', 'BAGUS SEPTI YANTO', 'Laki -Laki', 'SURAKARTA', '2000-09-14', 'Islam', 'Kandang Sapi Rt 02 Rw 34 Kel. Jebre, Kec. Jebres, Surakarta, 57126', 'Pemasaran', 'bagus', '17b38fc02fd7e92f3edeb6318e3066d8'),
(11, '8722', 'MELINIA KRISTIANI', 'Perempuan', 'SURAKARTA', '1999-12-27', 'Kristen', 'Pucangsawit Rt 05 Rw 08 Pucangsawit, Jebres, Surakarta, 57128', 'Pemasaran', 'melinia', 'efa608460240e17f20ca89572c6bf13f');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal`
--

CREATE TABLE `tb_soal` (
  `id_soal` int(11) NOT NULL,
  `jurusan` enum('TKI','ADM-Perkantoran','Akuntansi','Pemasaran','Keperawatan') NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban` enum('1','2','3','4','5') NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `e` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_soal`
--

INSERT INTO `tb_soal` (`id_soal`, `jurusan`, `nama_mapel`, `pertanyaan`, `jawaban`, `a`, `b`, `c`, `d`, `e`) VALUES
(17, 'TKI', 'Bahasa-Indonesia-TKI', 'Minat investor  asing yang tinggi ke negara berkembang bisa dilihat dari transaksi yang terjadi di pasar modal. Dalam tiga tahun terakhir, arus modal asing ke pasar saham dan pasar uang di negara berkembang sangat besar.\r\nMakna istilah investor pada paragraf di atas adalah ...', '1', 'A. nasabah', 'B. pengusaha', 'C. penanam modal', 'D. penguasa ', 'E. pemilik'),
(18, 'TKI', 'Bahasa-Indonesia-TKI', 'Bila anda gemar melakukan perjalanan jauh dengan menggunakan pesawat, berikut ini merupakan cara untuk mendapatkan kenyamanan. Untuk dapat memperoleh kenyamanan, biasakan datang lebih awal, saat memilih tiket pilihan tempat duduk di belakang atau tengah. Hal lain, pilah barang bawaan menjadi dua bagian untuk di kabin dan untuk masuk bagasi. Dalam penerbangan, pakaliah sepatu yang mudah dilepas dan siapkan bacaan.', '3', 'A. Cara melakukan penerbangan yang praktis.', 'B. Strategi dalam melakukanh penerbangan.', 'C. Cara memperoleh kenyamanan dalam penerbangan.', 'D. Hal-hal yang perlu dilakukan dalam penerbangan.', 'E. Kiat-kiat melakukan penerbangan jauh.'),
(19, 'TKI', 'Bahasa-Indonesia-TKI', 'Perubahan iklim merupakan fenomena yang dipicu oleh kegiatan manusia, terutama yang berkaitan dengan penggunakan bahan bakar fosil dan kegiatan alih guna lahan. Kegiatan tersebut dapat menghasilkan gas yang semakin lama, semakin banyak jumlahnya di atmosfir. Gas-gas tersebut memiliki sifat seperti kaca yang meneruskan radiasi cahaya matahari sehingga suhu atmosfir bumi meningkat. Inilah yang disebut efek rumah kaca yang mengakibatkan pemanasan global.', '4', 'A. Gas-gas hasil pembakaran mematikan ribuan spesies.', 'B. Suhu atmosfir bumi meningkat karena sedikitnya rumah kaca.', 'C. Rumah yang banyak menggunakan bahan kaca.', 'D. Pemanasan global akibat efek rumah kaca.', 'E. Bumi semakin hari semakin padat penduduknya.'),
(20, 'TKI', 'Bahasa-Indonesia-TKI', 'Susah lebih dari lima jam jaringan listrik didekat SMK Balikpapan rusak.Pihak PLN sedang berusaha memperbaiki kerusakan tersebut. Karena kerusakan itu, pelakaran praktik boga dan busana dihentikan. Maklum saja, dalam berpraktik mereka menggunakan peralatan listrik. Jadi, jika listrik padam meraka tidak bisa praktik memasak dan menjahit. Pertanyaan yang sesuai dengan isi paragraf tersebut adalah...', '2', 'A. Para siswa merasa senang tidak melanjutkan praktik.', 'B. Ketika listrik padam pelajaran praktik dihentikan.', 'C. Para siswa merasa senang saat praktik dibengkel.', 'D. Pemadaman listrik setiap hari merupakan hal yang biasa.', 'E. PLN masih mencari penyebab padamnya listrik.'),
(21, 'TKI', 'Bahasa-Indonesia-TKI', 'Katakan tidak untuk narkoba!\r\nIsi teks iklan tersebut adalah ...\r\n', '3', 'A. Hati-hati jika ada orang yang menawari narkoba.', 'B. Sekali anda mencoba narkoba pasti anda ketagihan.', 'C. Jangan sekali-sekali menggunakan narkoba.', 'D. Hati-hati terhadap orang yang membawa narkoba.', 'E. Jangan mendekati korban narkoba.'),
(22, 'TKI', 'Bahasa-Indonesia-TKI', '(1) Akhir-akhir ini jumlah penduduk dikota-kota besar seperti Jakarta mengalami  kenaikan yang signifikan. (2) Kenaikan jumlah penduduk ini disebabkan oleh sebuah fenoma sosial yang terjadi belakangan ini, yaitu urbananisasi. (3) Fenomena inilah yang menyebabkan laju pertumbuhunan penduduk yang tidak terbendung sehingga dapat menyebabkan beberapa permasalahan yang timbul dikota besar. (4) Mengapa hal ini sampai terjadi ? (5) Banyak faktor yang mendorong fenomena ini.\r\nKalimat yang didalamnya terkandung hubungan sebab akibat dalam paragraf tersebut terdapat pada nomer ...\r\n', '3', 'A. (1)', 'B. (2)', 'C. (3)', 'D. (4)', 'E. (5)'),
(23, 'TKI', 'Bahasa-Indonesia-TKI', 'Perajin kain songket tradisional Minangkabau, Sumatra Barat, bertahan dengan motif kuno berusia ratusan tahun. Perajin memunculkan kembali motif kuno dari songket tua yang tersimpan. Untuk menjaga keaslian produksi, perajin menggunakan alat songket bukan mesin. Tanggapan logis terhadap paragraf tersebut adalah....\r\n', '4', 'A. Perajin kain songket tradisional Minangkabau bertahan pada motif kuno.', 'B. Motif kuno yang dipertahankan perajinan berusia ratusan tahun.', 'C. Jenis songket tua yang tersimpan kembali dimunculkan.', 'D. Untuk menjaga keaslian produksi, penggunaan alat songket perlu dipertahankan.', 'E. Mesin tidak cocok untuk para perajin kain songket.'),
(24, 'TKI', 'Bahasa-Indonesia-TKI', 'Kartini lahir di Jepara, Jawa tengah, pada tanggal 21 april 1897. Kartini adalah putri dari Adipati Ario Sosrodiningrat, Bupati Jepara, dan M.A Ngasirah, putri dari Nyai Siti Aminah dan Kyai Haji Madirono, seorang guru agama di Telukawur, Jepara.\r\nPada usia dua belas tahun, Kartini harus mengalami masa pingitan. Kartini harus mengalami masa pingitan. Kartini dipingit karena tradisi di tempat tinggalnya. Apabila seorang gadis sudah menamatkan belajar di tingkat sekolah dasar, gadis tersebut harus mengalami masa pingitan hingga pernikahannya tiba. Ringkasan yang sesuai dengan kutipan teks tersebut adalah ...\r\n', '2', 'A. Kartini mengalami masa pingitan selama dua belas tahhun setelah lulus sekolah dasar sampai pernikahaannya.', 'B. Kartini putri seorang bupati dan cucu seorang guru agama, mengalami masa pingitan karena tradisi di tempat tinggalnya.', 'C. Kartini lahir dan dibesarkan di Jepara. Setelah tamat sekolah dasar, setelah tamat sekolah dasar dia melanjutkan kesekolah yang lebih tinggi karna beliau anak bangsawan.', 'D. Kartini sudah menamatkan sekolah dasarnya dan harus dipingit selama dua belas tahun.', 'E. Kartini anak seorang bangsawan, bebas melanjutkan pendidikannya, tetapi juga harus menjalani masa pingitan karena tradisi ditempat tinggalnya.'),
(25, 'TKI', 'Bahasa-Indonesia-TKI', 'Sedikitnya 7,5 ton pempek dikirim ke luar Palembang sebagai oleh-oleh. (2) Selain itu pempek juga berfungsi sebagai tali silahturahim. (3) Berati saat ini penggemar pempek lebih banyak dari pada tahun-tahun sebelumnya. (4) Kondisi ini dapat menggerakan ekonomi daerah. Kalimat di dalamnya terkandung hubungan perbandingan adalah nomor ...\r\n', '3', 'A. (1)', 'B. (2)', 'C. (3)', 'D. (4)', 'E. (5)'),
(26, 'TKI', 'Bahasa-Indonesia-TKI', 'Insyaf\r\nOleh: Amir Hamzah\r\nSegala kupinta tiada kau beri\r\nSegala kutanya tiada kau sakiti\r\nBuatlah aku berdiri sendiri\r\nPenuntun tiada mimimpin jari\r\nMajas yang terdapat dalam kutipan puisi tersebut adalah...\r\n', '2', 'A. Epifora', 'B. Metonomia', 'C. Anafora', 'D. Personifikasi', 'E. Iitotes'),
(27, 'ADM-Perkantoran', 'Bahasa-Indonesia-ADM-Perkantoran', 'Minat investor  asing yang tinggi ke negara berkembang bisa dilihat dari transaksi yang terjadi di pasar modal. Dalam tiga tahun terakhir, arus modal asing ke pasar saham dan pasar uang di negara berkembang sangat besar.\r\nMakna istilah investor pada paragraf di atas adalah ...\r\n', '3', 'A. nasabah', 'B. pengusaha', 'C. penanam modal', 'D. penguasa ', 'E. pemilik'),
(28, 'ADM-Perkantoran', 'Bahasa-Indonesia-ADM-Perkantoran', 'Bila anda gemar melakukan perjalanan jauh dengan menggunakan pesawat, berikut ini merupakan cara untuk mendapatkan kenyamanan. Untuk dapat memperoleh kenyamanan, biasakan datang lebih awal, saat memilih tiket pilihan tempat duduk di belakang atau tengah. Hal lain, pilah barang bawaan menjadi dua bagian untuk di kabin dan untuk masuk bagasi. Dalam penerbangan, pakaliah sepatu yang mudah dilepas dan siapkan bacaan.', '3', 'A. Cara melakukan penerbangan yang praktis.', 'B. Strategi dalam melakukanh penerbangan.', 'C. Cara memperoleh kenyamanan dalam penerbangan.', 'D. Hal-hal yang perlu dilakukan dalam penerbangan.', 'E. Kiat-kiat melakukan penerbangan jauh.'),
(29, 'ADM-Perkantoran', 'Bahasa-Indonesia-ADM-Perkantoran', 'Perubahan iklim merupakan fenomena yang dipicu oleh kegiatan manusia, terutama yang berkaitan dengan penggunakan bahan bakar fosil dan kegiatan alih guna lahan. Kegiatan tersebut dapat menghasilkan gas yang semakin lama, semakin banyak jumlahnya di atmosfir. Gas-gas tersebut memiliki sifat seperti kaca yang meneruskan radiasi cahaya matahari sehingga suhu atmosfir bumi meningkat. Inilah yang disebut efek rumah kaca yang mengakibatkan pemanasan global.', '4', 'A. Gas-gas hasil pembakaran mematikan ribuan spesies.', 'B. Suhu atmosfir bumi meningkat karena sedikitnya rumah kaca.', 'C. Rumah yang banyak menggunakan bahan kaca.', 'D. Pemanasan global akibat efek rumah kaca.', 'E. Bumi semakin hari semakin padat penduduknya.'),
(30, 'ADM-Perkantoran', 'Bahasa-Indonesia-ADM-Perkantoran', 'Susah lebih dari lima jam jaringan listrik didekat SMK Balikpapan rusak.Pihak PLN sedang berusaha memperbaiki kerusakan tersebut. Karena kerusakan itu, pelakaran praktik boga dan busana dihentikan. Maklum saja, dalam berpraktik mereka menggunakan peralatan listrik. Jadi, jika listrik padam meraka tidak bisa praktik memasak dan menjahit.\r\nPertanyaan yang sesuai dengan isi paragraf tersebut adalah...', '2', 'A. Para siswa merasa senang tidak melanjutkan praktik.', 'B. Ketika listrik padam pelajaran praktik dihentikan.', 'C. Para siswa merasa senang saat praktik dibengkel.', 'D. Pemadaman listrik setiap hari merupakan hal yang biasa.', 'E. PLN masih mencari penyebab padamnya listrik.'),
(31, 'ADM-Perkantoran', 'Bahasa-Indonesia-ADM-Perkantoran', 'Katakan tidak untuk narkoba!\r\nIsi teks iklan tersebut adalah ...\r\n', '3', 'A. Hati-hati jika ada orang yang menawari narkoba.', 'B. Sekali anda mencoba narkoba pasti anda ketagihan.', 'C. Jangan sekali-sekali menggunakan narkoba.', 'D. Hati-hati terhadap orang yang membawa narkoba.', 'E. Jangan mendekati korban narkoba.'),
(32, 'ADM-Perkantoran', 'Bahasa-Indonesia-ADM-Perkantoran', '(1) Akhir-akhir ini jumlah penduduk dikota-kota besar seperti Jakarta mengalami  kenaikan yang signifikan. (2) Kenaikan jumlah penduduk ini disebabkan oleh sebuah fenoma sosial yang terjadi belakangan ini, yaitu urbananisasi. (3) Fenomena inilah yang menyebabkan laju pertumbuhunan penduduk yang tidak terbendung sehingga dapat menyebabkan beberapa permasalahan yang timbul dikota besar. (4) Mengapa hal ini sampai terjadi ? (5) Banyak faktor yang mendorong fenomena ini. Kalimat yang didalamnya terkandung hubungan sebab akibat dalam paragraf tersebut terdapat pada nomer ...\r\n', '3', 'A. (1)', 'B. (2)', 'C. (3)', 'D. (4)', 'E. (5)'),
(33, 'ADM-Perkantoran', 'Bahasa-Indonesia-ADM-Perkantoran', 'Perajin kain songket tradisional Minangkabau, Sumatra Barat, bertahan dengan motif kuno berusia ratusan tahun. Perajin memunculkan kembali motif kuno dari songket tua yang tersimpan. Untuk menjaga keaslian produksi, perajin menggunakan alat songket bukan mesin.\r\nTanggapan logis terhadap paragraf tersebut adalah....\r\n', '4', 'A. Perajin kain songket tradisional Minangkabau bertahan pada motif kuno.', 'B. Motif kuno yang dipertahankan perajinan berusia ratusan tahun.', 'C. Jenis songket tua yang tersimpan kembali dimunculkan.', 'D. Untuk menjaga keaslian produksi, penggunaan alat songket perlu dipertahankan.', 'E. Mesin tidak cocok untuk para perajin kain songket.'),
(34, 'ADM-Perkantoran', 'Bahasa-Indonesia-ADM-Perkantoran', 'Kartini lahir di Jepara, Jawa tengah, pada tanggal 21 april 1897. Kartini adalah putri dari Adipati Ario Sosrodiningrat, Bupati Jepara, dan M.A Ngasirah, putri dari Nyai Siti Aminah dan Kyai Haji Madirono, seorang guru agama di Telukawur, Jepara.\r\nPada usia dua belas tahun, Kartini harus mengalami masa pingitan. Kartini harus mengalami masa pingitan. Kartini dipingit karena tradisi di tempat tinggalnya. Apabila seorang gadis sudah menamatkan belajar di tingkat sekolah dasar, gadis tersebut harus mengalami masa pingitan hingga pernikahannya tiba. Ringkasan yang sesuai dengan kutipan teks tersebut adalah ...\r\n', '2', 'A. Kartini mengalami masa pingitan selama dua belas tahhun setelah lulus sekolah dasar sampai pernikahaannya.', 'B. Kartini putri seorang bupati dan cucu seorang guru agama, mengalami masa pingitan karena tradisi di tempat tinggalnya.', 'C. Kartini lahir dan dibesarkan di Jepara. Setelah tamat sekolah dasar, setelah tamat sekolah dasar dia melanjutkan kesekolah yang lebih tinggi karna beliau anak bangsawan.', 'D. Kartini sudah menamatkan sekolah dasarnya dan harus dipingit selama dua belas tahun.', 'E. Kartini anak seorang bangsawan, bebas melanjutkan pendidikannya, tetapi juga harus menjalani masa pingitan karena tradisi ditempat tinggalnya.'),
(35, 'ADM-Perkantoran', 'Bahasa-Indonesia-ADM-Perkantoran', 'Sedikitnya 7,5 ton pempek dikirim ke luar Palembang sebagai oleh-oleh. (2) Selain itu pempek juga berfungsi sebagai tali silahturahim. (3) Berati saat ini penggemar pempek lebih banyak dari pada tahun-tahun sebelumnya. (4) Kondisi ini dapat menggerakan ekonomi daerah. Kalimat di dalamnya terkandung hubungan perbandingan adalah nomor ...\r\n', '3', 'A. (1)', 'B. (2)', 'C. (3)', 'D. (4)', 'E. (5)'),
(36, 'ADM-Perkantoran', 'Bahasa-Indonesia-ADM-Perkantoran', 'Insyaf\r\nOleh: Amir Hamzah\r\nSegala kupinta tiada kau beri\r\nSegala kutanya tiada kau sakiti\r\nBuatlah aku berdiri sendiri\r\nPenuntun tiada mimimpin jari\r\nMajas yang terdapat dalam kutipan puisi tersebut adalah...\r\n', '3', 'A. Epifora', 'B. Metonomia', 'C. Anafora', 'D. Personifikasi', 'E. Iitotes'),
(37, 'Akuntansi', 'Bahasa-Indonesia-Akutansi', 'Minat investor  asing yang tinggi ke negara berkembang bisa dilihat dari transaksi yang terjadi di pasar modal. Dalam tiga tahun terakhir, arus modal asing ke pasar saham dan pasar uang di negara berkembang sangat besar.\r\nMakna istilah investor pada paragraf di atas adalah ...\r\n', '3', 'A. nasabah', 'B. pengusaha', 'C. penanam modal', 'D. penguasa ', 'E. pemilik'),
(38, 'Akuntansi', 'Bahasa-Indonesia-Akutansi', 'Bila anda gemar melakukan perjalanan jauh dengan menggunakan pesawat, berikut ini merupakan cara untuk mendapatkan kenyamanan. Untuk dapat memperoleh kenyamanan, biasakan datang lebih awal, saat memilih tiket pilihan tempat duduk di belakang atau tengah. Hal lain, pilah barang bawaan menjadi dua bagian untuk di kabin dan untuk masuk bagasi. Dalam penerbangan, pakaliah sepatu yang mudah dilepas dan siapkan bacaan.', '3', 'A. Cara melakukan penerbangan yang praktis.', 'B. Strategi dalam melakukanh penerbangan.', 'C. Cara memperoleh kenyamanan dalam penerbangan.', 'D. Hal-hal yang perlu dilakukan dalam penerbangan.', 'E. Kiat-kiat melakukan penerbangan jauh.'),
(39, 'Akuntansi', 'Bahasa-Indonesia-Akutansi', 'Perubahan iklim merupakan fenomena yang dipicu oleh kegiatan manusia, terutama yang berkaitan dengan penggunakan bahan bakar fosil dan kegiatan alih guna lahan. Kegiatan tersebut dapat menghasilkan gas yang semakin lama, semakin banyak jumlahnya di atmosfir. Gas-gas tersebut memiliki sifat seperti kaca yang meneruskan radiasi cahaya matahari sehingga suhu atmosfir bumi meningkat. Inilah yang disebut efek rumah kaca yang mengakibatkan pemanasan global.', '4', 'A. Gas-gas hasil pembakaran mematikan ribuan spesies.', 'B. Suhu atmosfir bumi meningkat karena sedikitnya rumah kaca.', 'C. Rumah yang banyak menggunakan bahan kaca.', 'D. Pemanasan global akibat efek rumah kaca.', 'E. Bumi semakin hari semakin padat penduduknya.'),
(40, 'Akuntansi', 'Bahasa-Indonesia-Akutansi', 'Susah lebih dari lima jam jaringan listrik didekat SMK Balikpapan rusak.Pihak PLN sedang berusaha memperbaiki kerusakan tersebut. Karena kerusakan itu, pelakaran praktik boga dan busana dihentikan. Maklum saja, dalam berpraktik mereka menggunakan peralatan listrik. Jadi, jika listrik padam meraka tidak bisa praktik memasak dan menjahit.\r\nPertanyaan yang sesuai dengan isi paragraf tersebut adalah...\r\n', '2', 'A. Para siswa merasa senang tidak melanjutkan praktik.', 'B. Ketika listrik padam pelajaran praktik dihentikan.', 'C. Para siswa merasa senang saat praktik dibengkel.', 'D. Pemadaman listrik setiap hari merupakan hal yang biasa.', 'E. PLN masih mencari penyebab padamnya listrik.'),
(41, 'Akuntansi', 'Bahasa-Indonesia-Akutansi', 'Katakan tidak untuk narkoba!\r\nIsi teks iklan tersebut adalah ...\r\n', '3', 'A. Hati-hati jika ada orang yang menawari narkoba.', 'B. Sekali anda mencoba narkoba pasti anda ketagihan.', 'C. Jangan sekali-sekali menggunakan narkoba.', 'D. Hati-hati terhadap orang yang membawa narkoba.', 'E. Jangan mendekati korban narkoba.'),
(42, 'Akuntansi', 'Bahasa-Indonesia-Akutansi', '(1) Akhir-akhir ini jumlah penduduk dikota-kota besar seperti Jakarta mengalami  kenaikan yang signifikan. (2) Kenaikan jumlah penduduk ini disebabkan oleh sebuah fenoma sosial yang terjadi belakangan ini, yaitu urbananisasi. (3) Fenomena inilah yang menyebabkan laju pertumbuhunan penduduk yang tidak terbendung sehingga dapat menyebabkan beberapa permasalahan yang timbul dikota besar. (4) Mengapa hal ini sampai terjadi ? (5) Banyak faktor yang mendorong fenomena ini.\r\nKalimat yang didalamnya terkandung hubungan sebab akibat dalam paragraf tersebut terdapat pada nomer ...\r\n', '3', 'A. (1)', 'B. (2)', 'C. (3)', 'D. (4)', 'E. (5)'),
(43, 'Akuntansi', 'Bahasa-Indonesia-Akutansi', 'Perajin kain songket tradisional Minangkabau, Sumatra Barat, bertahan dengan motif kuno berusia ratusan tahun. Perajin memunculkan kembali motif kuno dari songket tua yang tersimpan. Untuk menjaga keaslian produksi, perajin menggunakan alat songket bukan mesin.\r\nTanggapan logis terhadap paragraf tersebut adalah....\r\n', '4', 'A. Perajin kain songket tradisional Minangkabau bertahan pada motif kuno.', 'B. Motif kuno yang dipertahankan perajinan berusia ratusan tahun.', 'C. Jenis songket tua yang tersimpan kembali dimunculkan.', 'D. Untuk menjaga keaslian produksi, penggunaan alat songket perlu dipertahankan.', 'E. Mesin tidak cocok untuk para perajin kain songket.'),
(44, 'Akuntansi', 'Bahasa-Indonesia-Akutansi', 'Kartini lahir di Jepara, Jawa tengah, pada tanggal 21 april 1897. Kartini adalah putri dari Adipati Ario Sosrodiningrat, Bupati Jepara, dan M.A Ngasirah, putri dari Nyai Siti Aminah dan Kyai Haji Madirono, seorang guru agama di Telukawur, Jepara.\r\nPada usia dua belas tahun, Kartini harus mengalami masa pingitan. Kartini harus mengalami masa pingitan. Kartini dipingit karena tradisi di tempat tinggalnya. Apabila seorang gadis sudah menamatkan belajar di tingkat sekolah dasar, gadis tersebut harus mengalami masa pingitan hingga pernikahannya tiba. Ringkasan yang sesuai dengan kutipan teks tersebut adalah ...\r\n', '2', 'A. Kartini mengalami masa pingitan selama dua belas tahhun setelah lulus sekolah dasar sampai pernikahaannya.', 'B. Kartini putri seorang bupati dan cucu seorang guru agama, mengalami masa pingitan karena tradisi di tempat tinggalnya', 'C. Kartini lahir dan dibesarkan di Jepara. Setelah tamat sekolah dasar, setelah tamat sekolah dasar dia melanjutkan kesekolah yang lebih tinggi karna beliau anak bangsawan.', 'D. Kartini sudah menamatkan sekolah dasarnya dan harus dipingit selama dua belas tahun.', 'E. Kartini anak seorang bangsawan, bebas melanjutkan pendidikannya, tetapi juga harus menjalani masa pingitan karena tradisi ditempat tinggalnya.'),
(45, 'Akuntansi', 'Bahasa-Indonesia-Akutansi', 'Sedikitnya 7,5 ton pempek dikirim ke luar Palembang sebagai oleh-oleh. (2) Selain itu pempek juga berfungsi sebagai tali silahturahim. (3) Berati saat ini penggemar pempek lebih banyak dari pada tahun-tahun sebelumnya. (4) Kondisi ini dapat menggerakan ekonomi daerah. Kalimat di dalamnya terkandung hubungan perbandingan adalah nomor ...\r\n', '3', 'A. (1)', 'B. (2)', 'C. (3)', 'D. (4)', 'E. (5)'),
(46, 'Akuntansi', 'Bahasa-Indonesia-Akutansi', 'Insyaf\r\nOleh: Amir Hamzah\r\nSegala kupinta tiada kau beri\r\nSegala kutanya tiada kau sakiti\r\nBuatlah aku berdiri sendiri\r\nPenuntun tiada mimimpin jari\r\nMajas yang terdapat dalam kutipan puisi tersebut adalah...', '3', 'A. Epifora', 'B. Metonomia', 'C. Anafora', 'D. Personifikasi', 'E. Iitotes'),
(47, 'Pemasaran', 'Bahasa-Indonesia-Pemasaran', 'Minat investor  asing yang tinggi ke negara berkembang bisa dilihat dari transaksi yang terjadi di pasar modal. Dalam tiga tahun terakhir, arus modal asing ke pasar saham dan pasar uang di negara berkembang sangat besar.\r\nMakna istilah investor pada paragraf di atas adalah ...\r\n', '3', 'A. nasabah', 'B. pengusaha', 'C. penanam modal', 'D. penguasa ', 'E. pemilik'),
(48, 'Pemasaran', 'Bahasa-Indonesia-Pemasaran', 'Bila anda gemar melakukan perjalanan jauh dengan menggunakan pesawat, berikut ini merupakan cara untuk mendapatkan kenyamanan. Untuk dapat memperoleh kenyamanan, biasakan datang lebih awal, saat memilih tiket pilihan tempat duduk di belakang atau tengah. Hal lain, pilah barang bawaan menjadi dua bagian untuk di kabin dan untuk masuk bagasi. Dalam penerbangan, pakaliah sepatu yang mudah dilepas dan siapkan bacaan.', '3', 'A. Cara melakukan penerbangan yang praktis.', 'B. Strategi dalam melakukanh penerbangan.', 'C. Cara memperoleh kenyamanan dalam penerbangan.', 'D. Hal-hal yang perlu dilakukan dalam penerbangan.', 'E. Kiat-kiat melakukan penerbangan jauh.'),
(49, 'Pemasaran', 'Bahasa-Indonesia-Pemasaran', 'Perubahan iklim merupakan fenomena yang dipicu oleh kegiatan manusia, terutama yang berkaitan dengan penggunakan bahan bakar fosil dan kegiatan alih guna lahan. Kegiatan tersebut dapat menghasilkan gas yang semakin lama, semakin banyak jumlahnya di atmosfir. Gas-gas tersebut memiliki sifat seperti kaca yang meneruskan radiasi cahaya matahari sehingga suhu atmosfir bumi meningkat. Inilah yang disebut efek rumah kaca yang mengakibatkan pemanasan global.', '4', 'A. Gas-gas hasil pembakaran mematikan ribuan spesies.', 'B. Suhu atmosfir bumi meningkat karena sedikitnya rumah kaca.', 'C. Rumah yang banyak menggunakan bahan kaca.', 'D. Pemanasan global akibat efek rumah kaca.', 'E. Bumi semakin hari semakin padat penduduknya.'),
(50, 'Pemasaran', 'Bahasa-Indonesia-Pemasaran', 'Susah lebih dari lima jam jaringan listrik didekat SMK Balikpapan rusak.Pihak PLN sedang berusaha memperbaiki kerusakan tersebut. Karena kerusakan itu, pelakaran praktik boga dan busana dihentikan. Maklum saja, dalam berpraktik mereka menggunakan peralatan listrik. Jadi, jika listrik padam meraka tidak bisa praktik memasak dan menjahit. Pertanyaan yang sesuai dengan isi paragraf tersebut adalah...\r\n', '2', 'A. Para siswa merasa senang tidak melanjutkan praktik.', 'B. Ketika listrik padam pelajaran praktik dihentikan.', 'C. Para siswa merasa senang saat praktik dibengkel.', 'D. Pemadaman listrik setiap hari merupakan hal yang biasa.', 'E. PLN masih mencari penyebab padamnya listrik.'),
(51, 'Pemasaran', 'Bahasa-Indonesia-Pemasaran', 'Katakan tidak untuk narkoba! \r\nIsi teks iklan tersebut adalah ...\r\n', '3', 'A. Hati-hati jika ada orang yang menawari narkoba.', 'B. Sekali anda mencoba narkoba pasti anda ketagihan.', 'C. Jangan sekali-sekali menggunakan narkoba.', 'D. Hati-hati terhadap orang yang membawa narkoba.', 'E. Jangan mendekati korban narkoba.'),
(52, 'Pemasaran', 'Bahasa-Indonesia-Pemasaran', '(1) Akhir-akhir ini jumlah penduduk dikota-kota besar seperti Jakarta mengalami  kenaikan yang signifikan. (2) Kenaikan jumlah penduduk ini disebabkan oleh sebuah fenoma sosial yang terjadi belakangan ini, yaitu urbananisasi. (3) Fenomena inilah yang menyebabkan laju pertumbuhunan penduduk yang tidak terbendung sehingga dapat menyebabkan beberapa permasalahan yang timbul dikota besar. (4) Mengapa hal ini sampai terjadi ? (5) Banyak faktor yang mendorong fenomena ini. Kalimat yang didalamnya terkandung hubungan sebab akibat dalam paragraf tersebut terdapat pada nomer ...\r\n', '3', 'A. (1)', 'B. (2)', 'C. (3)', 'D. (4)', 'E. (5)'),
(53, 'Pemasaran', 'Bahasa-Indonesia-Pemasaran', 'Perajin kain songket tradisional Minangkabau, Sumatra Barat, bertahan dengan motif kuno berusia ratusan tahun. Perajin memunculkan kembali motif kuno dari songket tua yang tersimpan. Untuk menjaga keaslian produksi, perajin menggunakan alat songket bukan mesin. \r\nTanggapan logis terhadap paragraf tersebut adalah....', '4', 'A. Perajin kain songket tradisional Minangkabau bertahan pada motif kuno.', 'B. Motif kuno yang dipertahankan perajinan berusia ratusan tahun.', 'C. Jenis songket tua yang tersimpan kembali dimunculkan.', 'D. Untuk menjaga keaslian produksi, penggunaan alat songket perlu dipertahankan.', 'E. Mesin tidak cocok untuk para perajin kain songket.'),
(54, 'Pemasaran', 'Bahasa-Indonesia-Pemasaran', 'Kartini lahir di Jepara, Jawa tengah, pada tanggal 21 april 1897. Kartini adalah putri dari Adipati Ario Sosrodiningrat, Bupati Jepara, dan M.A Ngasirah, putri dari Nyai Siti Aminah dan Kyai Haji Madirono, seorang guru agama di Telukawur, Jepara.\r\nPada usia dua belas tahun, Kartini harus mengalami masa pingitan. Kartini harus mengalami masa pingitan. Kartini dipingit karena tradisi di tempat tinggalnya. Apabila seorang gadis sudah menamatkan belajar di tingkat sekolah dasar, gadis tersebut harus mengalami masa pingitan hingga pernikahannya tiba. \r\nRingkasan yang sesuai dengan kutipan teks tersebut adalah ...', '2', 'A. Kartini mengalami masa pingitan selama dua belas tahhun setelah lulus sekolah dasar sampai pernikahaannya.', 'B. Kartini putri seorang bupati dan cucu seorang guru agama, mengalami masa pingitan karena tradisi di tempat tinggalnya.', 'C. Kartini lahir dan dibesarkan di Jepara. Setelah tamat sekolah dasar, setelah tamat sekolah dasar dia melanjutkan kesekolah yang lebih tinggi karna beliau anak bangsawan.', 'D. Kartini sudah menamatkan sekolah dasarnya dan harus dipingit selama dua belas tahun.', 'E. Kartini anak seorang bangsawan, bebas melanjutkan pendidikannya, tetapi juga harus menjalani masa pingitan karena tradisi ditempat tinggalnya.'),
(55, 'Keperawatan', 'Bahasa-Indonesia-Keperawatan', 'Minat investor  asing yang tinggi ke negara berkembang bisa dilihat dari transaksi yang terjadi di pasar modal. Dalam tiga tahun terakhir, arus modal asing ke pasar saham dan pasar uang di negara berkembang sangat besar.\r\nMakna istilah investor pada paragraf di atas adalah ...\r\n', '3', 'A. nasabah', 'B. pengusaha', 'C. penanam modal', 'D. penguasa ', 'E. pemilik'),
(56, 'Pemasaran', 'Bahasa-Indonesia-Pemasaran', 'Sedikitnya 7,5 ton pempek dikirim ke luar Palembang sebagai oleh-oleh. (2) Selain itu pempek juga berfungsi sebagai tali silahturahim. (3) Berati saat ini penggemar pempek lebih banyak dari pada tahun-tahun sebelumnya. (4) Kondisi ini dapat menggerakan ekonomi daerah.\r\nKalimat di dalamnya terkandung hubungan perbandingan adalah nomor ...\r\n', '3', 'A. (1)', 'B. (2)', 'C. (3)', 'D. (4)', 'E. (5)'),
(57, 'Pemasaran', 'Bahasa-Indonesia-Pemasaran', 'Insyaf\r\nOleh: Amir Hamzah\r\nSegala kupinta tiada kau beri\r\nSegala kutanya tiada kau sakiti\r\nBuatlah aku berdiri sendiri\r\nPenuntun tiada mimimpin jari\r\nMajas yang terdapat dalam kutipan puisi tersebut adalah...\r\n', '3', 'A. Epifora', 'B. Metonomia', 'C. Anafora', 'D. Personifikasi', 'E. Iitotes'),
(58, 'Keperawatan', 'Bahasa-Indonesia-Keperawatan', 'Bila anda gemar melakukan perjalanan jauh dengan menggunakan pesawat, berikut ini merupakan cara untuk mendapatkan kenyamanan. Untuk dapat memperoleh kenyamanan, biasakan datang lebih awal, saat memilih tiket pilihan tempat duduk di belakang atau tengah. Hal lain, pilah barang bawaan menjadi dua bagian untuk di kabin dan untuk masuk bagasi. Dalam penerbangan, pakaliah sepatu yang mudah dilepas dan siapkan bacaan.', '3', 'A. Cara melakukan penerbangan yang praktis.', 'B. Strategi dalam melakukanh penerbangan.', 'C. Cara memperoleh kenyamanan dalam penerbangan.', 'D. Hal-hal yang perlu dilakukan dalam penerbangan.', 'E. Kiat-kiat melakukan penerbangan jauh.'),
(59, 'Keperawatan', 'Bahasa-Indonesia-Keperawatan', 'Perubahan iklim merupakan fenomena yang dipicu oleh kegiatan manusia, terutama yang berkaitan dengan penggunakan bahan bakar fosil dan kegiatan alih guna lahan. Kegiatan tersebut dapat menghasilkan gas yang semakin lama, semakin banyak jumlahnya di atmosfir. Gas-gas tersebut memiliki sifat seperti kaca yang meneruskan radiasi cahaya matahari sehingga suhu atmosfir bumi meningkat. Inilah yang disebut efek rumah kaca yang mengakibatkan pemanasan global.', '4', 'A. Gas-gas hasil pembakaran mematikan ribuan spesies.', 'B. Suhu atmosfir bumi meningkat karena sedikitnya rumah kaca.', 'C. Rumah yang banyak menggunakan bahan kaca.', 'D. Pemanasan global akibat efek rumah kaca.', 'E. Bumi semakin hari semakin padat penduduknya.'),
(60, 'Keperawatan', 'Bahasa-Indonesia-Keperawatan', 'Susah lebih dari lima jam jaringan listrik didekat SMK Balikpapan rusak.Pihak PLN sedang berusaha memperbaiki kerusakan tersebut. Karena kerusakan itu, pelakaran praktik boga dan busana dihentikan. Maklum saja, dalam berpraktik mereka menggunakan peralatan listrik. Jadi, jika listrik padam meraka tidak bisa praktik memasak dan menjahit.\r\nPertanyaan yang sesuai dengan isi paragraf tersebut adalah...\r\n', '2', 'A. Para siswa merasa senang tidak melanjutkan praktik.', 'B. Ketika listrik padam pelajaran praktik dihentikan.', 'C. Para siswa merasa senang saat praktik dibengkel.', 'D. Pemadaman listrik setiap hari merupakan hal yang biasa.', 'E. PLN masih mencari penyebab padamnya listrik.'),
(61, 'Keperawatan', 'Bahasa-Indonesia-Keperawatan', 'Katakan tidak untuk narkoba!\r\nIsi teks iklan tersebut adalah ...\r\n', '3', 'A. Hati-hati jika ada orang yang menawari narkoba.', 'B. Sekali anda mencoba narkoba pasti anda ketagihan.', 'C. Jangan sekali-sekali menggunakan narkoba.', 'D. Hati-hati terhadap orang yang membawa narkoba.', 'E. Jangan mendekati korban narkoba.'),
(62, 'Keperawatan', 'Bahasa-Indonesia-Keperawatan', '(1) Akhir-akhir ini jumlah penduduk dikota-kota besar seperti Jakarta mengalami  kenaikan yang signifikan. (2) Kenaikan jumlah penduduk ini disebabkan oleh sebuah fenoma sosial yang terjadi belakangan ini, yaitu urbananisasi. (3) Fenomena inilah yang menyebabkan laju pertumbuhunan penduduk yang tidak terbendung sehingga dapat menyebabkan beberapa permasalahan yang timbul dikota besar. (4) Mengapa hal ini sampai terjadi ? (5) Banyak faktor yang mendorong fenomena ini.\r\nKalimat yang didalamnya terkandung hubungan sebab akibat dalam paragraf tersebut terdapat pada nomer ...', '3', 'A. (1)', 'B. (2)', 'C. (3)', 'D. (4)', 'E. (5)'),
(63, 'Keperawatan', 'Bahasa-Indonesia-Keperawatan', 'Perajin kain songket tradisional Minangkabau, Sumatra Barat, bertahan dengan motif kuno berusia ratusan tahun. Perajin memunculkan kembali motif kuno dari songket tua yang tersimpan. Untuk menjaga keaslian produksi, perajin menggunakan alat songket bukan mesin.\r\nTanggapan logis terhadap paragraf tersebut adalah....', '4', 'A. Perajin kain songket tradisional Minangkabau bertahan pada motif kuno.', 'B. Motif kuno yang dipertahankan perajinan berusia ratusan tahun.', 'C. Jenis songket tua yang tersimpan kembali dimunculkan.', 'D. Untuk menjaga keaslian produksi, penggunaan alat songket perlu dipertahankan.', 'E. Mesin tidak cocok untuk para perajin kain songket.'),
(64, 'Keperawatan', 'Bahasa-Indonesia-Keperawatan', 'Kartini lahir di Jepara, Jawa tengah, pada tanggal 21 april 1897. Kartini adalah putri dari Adipati Ario Sosrodiningrat, Bupati Jepara, dan M.A Ngasirah, putri dari Nyai Siti Aminah dan Kyai Haji Madirono, seorang guru agama di Telukawur, Jepara.\r\nPada usia dua belas tahun, Kartini harus mengalami masa pingitan. Kartini harus mengalami masa pingitan. Kartini dipingit karena tradisi di tempat tinggalnya. Apabila seorang gadis sudah menamatkan belajar di tingkat sekolah dasar, gadis tersebut harus mengalami masa pingitan hingga pernikahannya tiba.\r\nRingkasan yang sesuai dengan kutipan teks tersebut adalah ...', '4', 'A. Kartini mengalami masa pingitan selama dua belas tahhun setelah lulus sekolah dasar sampai pernikahaannya.', 'B. Kartini putri seorang bupati dan cucu seorang guru agama, mengalami masa pingitan karena tradisi di tempat tinggalnya.', 'C. Kartini lahir dan dibesarkan di Jepara. Setelah tamat sekolah dasar, setelah tamat sekolah dasar dia melanjutkan kesekolah yang lebih tinggi karna beliau anak bangsawan.', 'D. Kartini sudah menamatkan sekolah dasarnya dan harus dipingit selama dua belas tahun.', 'E. Kartini anak seorang bangsawan, bebas melanjutkan pendidikannya, tetapi juga harus menjalani masa pingitan karena tradisi ditempat tinggalnya.'),
(65, 'Keperawatan', 'Bahasa-Indonesia-Keperawatan', 'Sedikitnya 7,5 ton pempek dikirim ke luar Palembang sebagai oleh-oleh. (2) Selain itu pempek juga berfungsi sebagai tali silahturahim. (3) Berati saat ini penggemar pempek lebih banyak dari pada tahun-tahun sebelumnya. (4) Kondisi ini dapat menggerakan ekonomi daerah.\r\nKalimat di dalamnya terkandung hubungan perbandingan adalah nomor ...', '3', 'A. (1)', 'B. (2)', 'C. (3)', 'D. (4)', 'E. (5)'),
(66, 'Pemasaran', 'Bahasa-Indonesia-Keperawatan', 'Insyaf\r\nOleh: Amir Hamzah\r\nSegala kupinta tiada kau beri\r\nSegala kutanya tiada kau sakiti\r\nBuatlah aku berdiri sendiri\r\nPenuntun tiada mimimpin jari\r\nMajas yang terdapat dalam kutipan puisi tersebut adalah...', '3', 'A. Epifora', 'B. Metonomia', 'C. Anafora', 'D. Personifikasi', 'E. Iitotes'),
(67, 'TKI', 'Matematika-TKI', 'Bentuk sederhana  dari (a(-6). b(7). c(12))/(a(-5).b(5). C(8)) adalah...', '1', 'A. a(2).b(-4).c(-8)', 'B. a(2).b(4).c(-8)', 'C. a(2).b(4).c(8)', 'D. a(-2).b(4).c(8)', 'E. a(-2).b(-4).c(-8)'),
(68, 'TKI', 'Matematika-TKI', 'Nilai dari 8(4/3)-25(1/2)+125 1/3 adalah ...', '3', 'A. 6', 'B. 8', 'C. 16', 'D. 18', 'E. 26'),
(69, 'TKI', 'Matematika-TKI', 'Nilai dari 4_log81.3_log?32  adalah ...', '2', 'A. 5', 'B. 10', 'C. 15', 'D. 20', 'E. 32'),
(70, 'TKI', 'Matematika-TKI', 'Grafik fungsi f(x)=-x(2)+2x+3, untuk x € R adalah ...', '2', 'A. x=(-1,3); y=(-3,0)', 'B. x=(-1,3); y=(3,0)', 'C. x=(-3,1); y=(0,3)', 'D. x=(-3,1); y=(-3,0)', 'E.  x=(-3,-1); y=(0,3)'),
(71, 'TKI', 'Matematika-TKI', 'Fungsi kuadrat yang grafiknya memiliki titik balik P(3,9) dan memiliki titik A(5,13) adalah ...', '4', 'f(x)=(x+3)(2)+5', 'f(x)=(x+3)(2)+9', 'f(x)=(x-3)(2)+5', 'f(x)=(x-3)(2)+9', 'f(x)=(x-3)(2)+13'),
(72, 'TKI', 'Matematika-TKI', 'Matriks A =     (2x+y    15)\r\n                           (27     x+2y)\r\n\r\n                B =     (4           15)\r\n                           (27         -1)\r\nJika A=B maka nilai x+y adalah ...', '5', 'A. -5', 'B. -3', 'C. -2', 'D. 0', 'E. 3'),
(73, 'TKI', 'Matematika-TKI', 'Hasil dari perkalian matriks :\r\n(5  2)\r\n(3  1)\r\n(0  4)\r\n\r\n(-1  -2  -3)\r\n(2    1    0)\r\n', '5', 'A. (-1  -8  -15)   (8    4    0)   (-1   -5   -9)', 'B. (8    4    0)   (-1  -5  -9)   (-1  -8  -15)', 'C. (-1  -1  -8)   (-8  -5  4)   (-15  -9  0)', 'D. (-1  -15  -8)   (-1   -9   -5)  (8   0   4)', 'E. (-1  -8  -15)   (-1  -5  -9)   (8   4   0) '),
(74, 'TKI', 'Matematika-TKI', 'Seorang pekerja bangunan membeli 2 kaleng cat dan 3 kuas seharga Rp.101.500,00. Esok harinta pekerja itu membeli 1 kaleng cat dan 2 kuas yang sama sehargaRp.53.500,00. Harga 1 kaleng cat dan 1 kuas adalah ...', '2', 'A. Rp.46.000,00', 'B. Rp.48.000,00', 'C. Rp.49.000,00', 'D. Rp.51.000,00', 'E. Rp.53.000,00'),
(75, 'TKI', 'Matematika-TKI', 'Sebuah perusahaan pakaian mrnghasilakan 50 baju pada awal produksi dan meningkat menjadi 55 pada hari berikutnya. Apabila peningkatan jumlah produksi konstan setiap hari, jika jumlah produksi setelah 30 hari adalah ...', '4', 'A. 2500 baju', 'B. 2720 baju', 'C. 2750 baju', 'D. 3675 baju', 'E. 3750 baju'),
(76, 'TKI', 'Matematika-TKI', 'Seorang penjahit akan membuat dua model baju. Baju model pertama dan kedua berturut-turut memerlukan bahan sebanyak 1,5 m dan 2 m kain. Baju yang diproduksi paling banyk 20 potong dan bahan kain yang tersedia sebanyak 30 m. Jika banyak model pertama x potong, dan baju model kedua y potong, manakah pernyataan yang benar berikut ini?', '5', 'A. Membuat baju model pertama dan kedua sama banyak tetap paling menguntungkan.', 'B. Membuat baju model pertama dan kedua sama banyak tidak ada pengaruh dalam keunungan.', 'C. Membuat baju model pertama setengah kali dari model kedua akan menguntungkan.', 'D. Lebih baik membuat baju model kedua saja paling untung, jika harga model pertama lebih mahal.', 'E. Membuat baju model pertama saja paling untung, jika harga model kedua lebih murah dari model pertama. '),
(77, '', 'Matematika-ADM-Perkantoran', 'Persentil ke-60 dari data 8,2,5,7,9,3,4,6,9,8,10,3 adalah ...', '4', 'A. 6', 'B. 6,8', 'C. 7', 'D. 7,8', 'E. 9'),
(78, '', 'Matematika-ADM-Perkantoran', 'Berikut menunjukkan presentase kelulusan siswa tiga sekolah selama empat tahun.\r\nSekolah A \r\nI = 50%\r\nII = 60%\r\nIII = 90%\r\nIV = 80%\r\nSekolah B\r\nI = 90%\r\nII = 90%\r\nIII = 90%\r\nIV = 90%\r\nSekolah C\r\nI = 70%\r\nII = 70%\r\nIII = 80%\r\nIV = 100% \r\nPersyaratan berikut yang benar berdasarkan kutipan diatas adalah ..', '5', 'A. Rata-rata presentase kelulusan sekolah C terbaik', 'B. Presentase kelulusan sekolah C selalu berada di posisi kedua', 'C. Presentase kelulusan sekolah C selalu lebih baik daripada sekolah A', 'D. Presentase kelulusan sekolah B selau lebih baik daripada sekolah C', 'E. Presentase kelulusan sekolah C selalu lebih baik daripada tahun sebelumnya'),
(79, '', 'Matematika-ADM-Perkantoran', 'Seutas tali dipotong menjadi 7 bagian dan panjang masing-masing membentuk deret geometri. Jika panjang potongan tali terpendek 6 cm dan tali terpanjang 384 cm makan banyak tali semula adalah...', '1', 'A. 762 cm', 'B. 662 cm', 'C. 570 cm', 'D. 562 cm', 'E. 462 cm'),
(80, '', 'Matematika-ADM-Perkantoran', 'Lima tahun yang lalu umur Adi dua kali umur Budi sedangan lima tahun yang akan datang umur Adi 3/2 kali umur Budi, umur Adi sekarang adalah...', '2', 'A. 30', 'B. 25', 'C. 20', 'D. 15', 'E. 10'),
(81, '', 'Matematika-ADM-Perkantoran', 'Bayang titik R(-2, 5) jika dirotasikan dengan R (0, 180 derajat) adalah ...', '2', 'A. (2,5)', 'B. (2,-5)', 'C. (5,2)', 'D. (-2,-5)', 'E. (5,-2)'),
(82, '', 'Matematika-ADM-Perkantoran', 'Nilai dan Frekuensi\r\n60-63 (5)\r\n64-67 (9)\r\n68-71 (8)\r\n72-75 (10)\r\n76-79 (3)\r\n80-83 (5)\r\nMedian dari data tersebut adalah ...\r\n', '5', 'A. 66,5', 'B. 67,5', 'C. 68,5', 'D. 69,5', 'E. 70,5'),
(83, '', 'Matematika-ADM-Perkantoran', 'Modus dari data di bawah ini adalah ...\r\nData dan Frekuensi:\r\n12 (4)\r\n17 (8)\r\n22 (15)\r\n27 (18)\r\n32 (8)\r\n37 (3)\r\n', '5', 'A. 26,6', 'B. 26,5', 'C. 26,0', 'D. 25,8', 'E. 25,5'),
(84, '', 'Matematika-ADM-Perkantoran', 'Diketahui rataan hitung ulangan matematika adalah 75 dengan simpangan baku 2,5 jika angka baku Amir = 4 maka nilai ulangan matematika Amir adalah ..', '3', 'A. 82', 'B. 84', 'C. 85', 'D. 86', 'E. 88'),
(85, '', 'Matematika-ADM-Perkantoran', 'Diketahui nilai rataan hitung sekelompok data adalah 65 jika koefisien variasinya 12% maka simpangan baku dari data tersebut adalah ...', '5', 'A. 7,4', 'B. 7,5', 'C. 7,6', 'D. 7,7', 'E. 7,8'),
(86, '', 'Matematika-ADM-Perkantoran', 'Simpangan rata-rata dari data 5,6,7,8,9 adalah ..', '4', 'A. 0,9', 'B. 1,0', 'C. 1,1', 'D. 1,2', 'E. 1,3'),
(87, 'Keperawatan', 'Matematika-Keperawatan', 'Seorang pekerja bangunan membeli 2 kaleng cat dan 3 kuas seharga Rp.101.500,00. Esok harinta pekerja itu membeli 1 kaleng cat dan 2 kuas yang sama sehargaRp.53.500,00. Harga 1 kaleng cat dan 1 kuas adalah ...', '2', 'A. Rp.46.000,00', 'B. Rp.48.000,00', 'C. Rp.49.000,00', 'D. Rp.51.000,00', 'E. Rp.53.000,00'),
(88, 'Keperawatan', 'Matematika-Keperawatan', 'Seorang penjahit akan membuat dua model baju. Baju model pertama dan kedua berturut-turut memerlukan bahan sebanyak 1,5 m dan 2 m kain. Baju yang diproduksi paling banyk 20 potong dan bahan kain yang tersedia sebanyak 30 m. Jika banyak model pertama x potong, dan baju model kedua y potong, manakah pernyataan yang benar berikut ini?', '5', 'A. Membuat baju model pertama dan kedua sama banyak tetap paling menguntungkan.', 'B. Membuat baju model pertama dan kedua sama banyak tidak ada pengaruh dalam keunungan.', 'C. Membuat baju model pertama setengah kali dari model kedua akan menguntungkan.', 'D. Lebih baik membuat baju model kedua saja paling untung, jika harga model pertama lebih mahal.', 'E. Membuat baju model pertama saja paling untung, jika harga model kedua lebih murah dari model pertama. '),
(89, 'Keperawatan', 'Matematika-Keperawatan', 'Diketahui barisan aritmaika 7, 9, 11, 13, ...., 57. Banyak suku barisan tersebut adalah ...', '2', 'A. 25', 'B. 26', 'C. 28', 'D. 29', 'E. 30'),
(90, 'Keperawatan', 'Matematika-Keperawatan', 'Sebuah perusahaan pakaian mrnghasilakan 50 baju pada awal produksi dan meningkat menjadi 55 pada hari berikutnya. Apabila peningkatan jumlah produksi konstan setiap hari, jika jumlah produksi setelah 30 hari adalah ...', '4', 'A. 2500 baju', 'B. 2720 baju', 'C. 2750 baju', 'D. 3675 baju', 'E. 3750 baju'),
(91, 'Keperawatan', 'Matematika-Keperawatan', 'Hati-hati dengan menghitung upah pekerja, bisa jadi merugikan usaha dan pekerja. Upah rata-rata 7 orang pekerja sebesar Rp.250.000,00 per hari. Jika ada tambahan satu orang pekerja rata-rata upahnya menjadi Rp. 237.000,00 per hari. Manakah perhitungan yang tepat berdasarkan data ?', '2', 'A. Upah pekerja baru 50% lebih kecil dari rata-rata pekerja lama.', 'B. Upah pekerja untuk delapan orang tersebut kurang dari dua juta rupiah.', 'C. Upah pekerja baru sebesar 75% dari rata-rata upah pekerja lama.', 'D. Pekerja baru membebani anggaran lebih dari 70%.', 'E. Anggaran untuk membayar pekerja delapan orang merugikan usaha.'),
(92, 'Keperawatan', 'Matematika-Keperawatan', 'Dari angka 1,2,3,4,5,6,7, dan 8 akan di buat nomor plat kendaraan yang terdiri dari atas 4 angka berbeda. Banyak noor plat kendaraan  yang  dapat dibuat adalah...', '1', 'A. 1680 cara', 'B. 168 cara', 'C. 70 cara', 'D. 42 cara', 'E. 24 cara'),
(93, 'Keperawatan', 'Matematika-Keperawatan', 'Seorang pekerja bangunan membeli 2 kaleng cat dan 3 kuas seharga Rp.101.500,00. Esok harinta pekerja itu membeli 1 kaleng cat dan 2 kuas yang sama sehargaRp.53.500,00. Harga 1 kaleng cat dan 1 kuas adalah ...', '2', 'A. Rp.46.000,00', 'B. Rp.48.000,00', 'C. Rp.49.000,00', 'D. Rp.51.000,00', 'E. Rp.53.000,00'),
(94, 'Keperawatan', 'Matematika-Keperawatan', 'Matriks A =     (2x+y    15)\r\n                           (27     x+2y)\r\n\r\n                B =     (4           15)\r\n                           (27         -1)\r\nJika A=B maka nilai x+y adalah ...', '5', 'A. -5', 'B. -3', 'C. -2', 'D. 0', 'E. 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(11) NOT NULL,
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

INSERT INTO `tb_users` (`id_users`, `nama`, `email`, `username`, `password`, `level`, `status`) VALUES
(1, 'Coba', 'coba@gmail.com', 'coba', 'c3ec0f7b054e729c5a716c8125839829', 'Admin', 'Aktif'),
(2, 'Admin Kesiswaan', 'admin@coba.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bahas`
--
ALTER TABLE `tb_bahas`
  ADD PRIMARY KEY (`id_bahas`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

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
-- AUTO_INCREMENT for table `tb_bahas`
--
ALTER TABLE `tb_bahas`
  MODIFY `id_bahas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
