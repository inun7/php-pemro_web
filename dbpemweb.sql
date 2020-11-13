-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2020 pada 15.22
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpemweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akunadmin`
--

CREATE TABLE `akunadmin` (
  `idAdmin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akunadmin`
--

INSERT INTO `akunadmin` (`idAdmin`, `username`, `password`) VALUES
(1, 'sulton.ainun', '1048');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `idBerita` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`idBerita`, `judul`, `foto`, `ukuran`, `tipe`, `deskripsi`) VALUES
(3, 'Universitas Jember berlakukan kuliah online untuk cegah penyebaran Covid-19.', 'logo-unej-baku.png', 0, '', 'MMP dan BBB menjadi website yang digunakan Universitas Jember dalam laksanakan program kuliah online.'),
(4, 'Covid-19 diprediksi akan berakhir pada bulan Juni dan kehidupan akan kembali normal.', 'Basis_Data.png', 0, '', 'Selamat tinggal covid-19, tolong jangan hadir lagi di bumi ku. Kembalikan kehidupan normal di bumi seperti biasa nya.'),
(5, 'Universitas Jember berikan bantuan paket data ke Mahasiswa nya di saat kuliah online.', 'logo-unej-baku.png', 0, '', 'Universitas Jember berikan donasi uang Rp.50000 untuk mendukung proses kuliah online.'),
(6, 'WHO telah menemukan vaksin covid-19, bye bye covid-19.', 'churchadmin-1-0.jpg', 0, '', 'Bye bye covid-19.'),
(15, 'Virus Corona akan segera berkahir, dan kehidupan kembali normal', 'churchadmin-1-0.jpg', 35160, 'image/jpeg', 'Virus Corona akan segera berkahir, dan kehidupan kembali normal'),
(16, 'Virus Corona akan segera berkahir, dan kehidupan kembali normal', 'Basis_Data.png', 121951, 'image/png', 'Virus Corona akan segera berkahir, dan kehidupan kembali normal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `idData` int(11) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `positif` int(11) DEFAULT NULL,
  `pdp` int(11) DEFAULT NULL,
  `odp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`idData`, `kecamatan`, `positif`, `pdp`, `odp`) VALUES
(1, 'Ajung', 1, 5, 44),
(2, 'Ambulu', 1, 1, 52),
(3, 'Arjasa', 1, 1, 13),
(4, 'Balung', 1, 6, 55),
(5, 'Bangsalsari', 0, 5, 24),
(6, 'Gumukmas', 0, 0, 22),
(7, 'Jelbuk', 0, 6, 14),
(8, 'Jenggawah', 0, 6, 14),
(9, 'Jombang', 2, 2, 5),
(10, 'Kalisat', 1, 5, 102),
(11, 'Kaliwates', 3, 5, 109),
(12, 'Kencong', 1, 3, 18),
(13, 'Ledokombo', 3, 3, 64),
(14, 'Mayang', 0, 1, 24),
(15, 'Mumbulsari', 0, 1, 21),
(16, 'Pakusari', 0, 1, 11),
(17, 'Panti', 0, 1, 34),
(18, 'Patrang', 2, 12, 54),
(19, 'Puger', 2, 11, 27),
(20, 'Rambipuji', 0, 6, 38),
(21, 'Semboro', 0, 1, 9),
(22, 'Silo', 0, 3, 71),
(23, 'Sukorambi', 1, 0, 18),
(24, 'Sukowono', 1, 1, 31),
(25, 'Sumberbaru', 1, 4, 16),
(26, 'Sumberjambe', 1, 1, 27),
(27, 'Sumbersari', 1, 13, 142),
(28, 'Tanggul', 0, 5, 46),
(29, 'Tempurejo', 1, 6, 45),
(30, 'Umbulsari', 0, 3, 19),
(31, 'Wuluhan', 0, 4, 56);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akunadmin`
--
ALTER TABLE `akunadmin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idBerita`);

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`idData`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akunadmin`
--
ALTER TABLE `akunadmin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `idBerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `idData` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
