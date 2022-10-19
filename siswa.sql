-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2022 pada 05.19
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_xiirpl3`
--

CREATE TABLE `biodata_xiirpl3` (
  `nis` int(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` enum('X RPL','X ANM','X DKV','XI RPL 1','XI RPL 2','XI ANM 1','XI ANM 2','XI DKV 1','XI DKV 2','XII RPL 1','XII RPL 2','XII RPL 3','XII ANM 1','XII ANM 2','XII ANM 3','XII DKV 1','XII DKV 2','XII DKV 3') NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nama_bapak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biodata_xiirpl3`
--

INSERT INTO `biodata_xiirpl3` (`nis`, `nama`, `kelas`, `jenis_kelamin`, `alamat`, `no_hp`, `nama_ibu`, `nama_bapak`) VALUES
(182, 'ABRAR WAHID LUBIS', 'XII RPL 3', 'L', 'Jalan Wahid', 81211111, 'Ibu Abrar', 'Bapak Abrar'),
(183, 'ADIT SATRIADI', 'XII RPL 3', 'L', 'Jalan Adit', 81211113, 'Ibu Adit', 'Bapak Adit'),
(184, 'ADITYA ARIFIANSYAH PUTRA', 'XII RPL 3', 'L', 'Jalan Aditya', 81211114, 'Ibu Aditya', 'Bapak Aditya'),
(185, 'ANA TRI RAMADHANI', 'XII RPL 3', 'P', 'Jalan Ana', 81211115, 'Ibu Ana', 'Bapak Ana'),
(186, 'AVRIEL NAYLA KHAIRANI', 'XII RPL 3', 'P', 'Jalan Avriel', 81211116, 'Ibu Avriel', 'Bapak Avriel'),
(187, 'BELA KARANIKA', 'XII RPL 3', 'P', 'Jalan Bela', 81211117, 'Ibu Bela', 'Bapak Bela'),
(188, 'DAFIF AL-AZIZ IMANSYAH', 'XII RPL 3', 'L', 'Jalan Dafif', 81211118, 'Ibu Dafif', 'Bapak Dafif'),
(189, 'DESTIARUM GAYA WATI', 'XII RPL 3', 'P', 'Jalan Wati', 812111110, 'Ibu Wati', 'Bapak Wati'),
(190, 'DIAZ EKA LESTARI', 'XII RPL 3', 'P', 'Jalan Diaz', 812111111, 'Ibu Diaz', 'Bapak Diaz'),
(191, 'FAJAR RUDIN', 'XII RPL 3', 'L', 'Jalan Fajar', 812111112, 'Ibu Fajar', 'Bapak Fajar'),
(192, 'FIRMANSYAH DWI APRIANTO', 'XII RPL 3', 'L', 'Jalan Firmansyah', 812111113, 'Ibu Firmansyah', 'Bapak Firmansyah'),
(193, 'FITRI ANDRIANI', 'XII RPL 3', 'P', 'Jalan Fitri', 812111114, 'Ibu Fitri', 'Bapak Fitri'),
(195, 'HANNA FLORECITA', 'XII RPL 3', 'P', 'Jalan Hanna', 812111115, 'Ibu Hanna', 'Bapak Hanna'),
(196, 'INDAH NURVITASARI', 'XII RPL 3', 'P', 'Jalan Indah', 812111116, 'Ibu Jalan', 'Bapak Jalan'),
(197, 'IWAN RAMADHAN', 'XII RPL 3', 'L', 'Jalan Iwan', 812111117, 'Ibu Iwan', 'Bapak Iwan'),
(198, 'LAZUARDI RANDYANINGTYAS', 'XII RPL 3', 'L', 'Jalan Lazuardi', 812111118, 'Ibu Lazuardi', 'Bapak Lazuardi'),
(199, 'MUHAMMAD ADI NUGROHO', 'XII RPL 3', 'L', 'Jalan Adi', 812111119, 'Ibu Adi', 'Bapak Adi'),
(200, 'MUHAMMAD ALFI ANFAHSA', 'XII RPL 3', 'L', 'Jalan Alfi', 812111120, 'Ibu Alfi', 'Bapak Alfi'),
(201, 'MUHAMMAD AZIS', 'XII RPL 3', 'L', 'Jalan Azis', 812111121, 'Ibu Azis', 'Bapak Azis'),
(202, 'MUHAMMAD HAIKAL AZAMI', 'XII RPL 3', 'L', 'Jalan Haikal', 812111122, 'Ibu Haikal', 'Bapak Haikal'),
(203, 'MUHAMMAD IRFAN', 'XII RPL 3', 'L', 'Jalan Irfan', 812111123, 'Ibu Irfan', 'Bapak Irfan'),
(204, 'MUHAMMAD SHANDY WIJAYA', 'XII RPL 3', 'L', 'Jalan Shandy', 812111124, 'Ibu Shandy', 'Bapak Shandy'),
(205, 'MUHAMMAD SOPYAN', 'XII RPL 3', 'L', 'Jalan Sopyan', 812111125, 'Ibu Sopyan', 'Bapak Sopyan'),
(206, 'NANDA CLARISSA', 'XII RPL 3', 'P', 'Jalan Nanda', 812111126, 'Ibu Nanda', 'Bapak Nanda'),
(207, 'NAZWA AMANDA SYIFA', 'XII RPL 3', 'P', 'Jalan Nazwa', 812111127, 'Ibu Nazwa', 'Bapak Nazwa'),
(208, 'RAFI KURNIAWAN', 'XII RPL 3', 'L', 'Jalan Rafi', 812111128, 'Ibu Rafi', 'Bapak Rafi'),
(209, 'RAKHA PRAYOGA', 'XII RPL 3', 'L', 'Jalan Rakha', 812111129, 'Ibu Rakha', 'Bapak Rakha'),
(210, 'RIO SAPUTRA', 'XII RPL 3', 'L', 'Jalan Rio', 812111130, 'Ibu Rio', 'Bapak Rio'),
(211, 'SATYA BIMA PRATAMA', 'XII RPL 3', 'L', 'Jalan Satya', 812111131, 'Ibu Satya', 'Bapak Satya'),
(212, 'SUKEN MUCHAMMAD FAUZAN', 'XII RPL 3', 'L', 'Jalan H Kamin 1 No. 91', 812111132, 'Ibu Suken', 'Bapak Suken'),
(213, 'SULTAN RIYAN DENISTA', 'XII RPL 3', 'L', 'Jalan Sultan', 812111133, 'Ibu Sultan', 'Bapak Sultan'),
(214, 'SYAHRUL FADHILAH', 'XII RPL 3', 'L', 'Jalan Bolu', 812111134, 'Ibu Gandum', 'Bapak Roti'),
(215, 'SYAUQI AHMAD', 'XII RPL 3', 'L', 'Jalan Syauqi', 812111135, 'Ibu Syauqi', 'Bapak Syauqi'),
(216, 'ZAINAL ARIVIN', 'XII RPL 3', 'L', 'Jalan Zainal', 812111136, 'Ibu Zainal', 'Bapak Zainal'),
(428, 'DELON RAFAEL PARASIAN ZEBUA', 'XII RPL 3', 'L', 'Jalan Delon', 81211119, 'Ibu Delon', 'Bapak Delon'),
(642, 'ADI ROBBY KURNIAWAN', 'XII RPL 3', 'L', 'Jalan Robby', 81211112, 'Ibu Robby', 'Bapak Robby');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(6) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$0UVyF9AYfCnOKwKMOziBmeH0QXOKS5zoWjg0gJ3c0gsE7XgMvaaQC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata_xiirpl3`
--
ALTER TABLE `biodata_xiirpl3`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
