-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Nov 2021 pada 07.48
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kdbarang` int(10) NOT NULL,
  `namabarang` varchar(10) NOT NULL,
  `qty` int(5) NOT NULL,
  `kategori` text NOT NULL,
  `harga` int(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `ketstok` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kdbarang`, `namabarang`, `qty`, `kategori`, `harga`, `keterangan`, `ketstok`) VALUES
(16, 'Betadine', 100, 'Lain2', 50000, 'Obat Luka', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_login`
--

CREATE TABLE `tabel_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_login`
--

INSERT INTO `tabel_login` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kdbarang`),
  ADD UNIQUE KEY `kdbarang` (`kdbarang`),
  ADD UNIQUE KEY `kdbarang_2` (`kdbarang`,`namabarang`,`qty`,`kategori`,`harga`,`keterangan`,`ketstok`) USING HASH,
  ADD UNIQUE KEY `kdbarang_3` (`kdbarang`,`namabarang`,`qty`,`kategori`,`harga`,`keterangan`,`ketstok`) USING HASH;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `kdbarang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
