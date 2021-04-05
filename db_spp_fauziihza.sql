-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Mar 2021 pada 07.40
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spp_fauziihza`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `kompetensi_keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kompetensi_keahlian`) VALUES
(101, 'kelas 12', 'RPL(Rekayasa Perangkat Lunak)'),
(102, 'kelas 10', 'Akuntansi'),
(103, 'kelas 11', 'TM(Tekhnik permesinan)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `Tgl_bayar` date NOT NULL,
  `Bulan_dibayar` varchar(20) NOT NULL,
  `tahun_dibayar` varchar(11) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` enum('admin','petugas','','') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'Hajarudin', '123', 'Hajarudin gustixa', 'petugas'),
(2, 'Kusnaedi hermawan', '123', 'Kusnaedi hermawan', 'petugas'),
(3, 'Siti khoirulloh', '543', 'Siti khoirullah', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` char(10) NOT NULL,
  `nis` char(15) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `id_spp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `no_telp`, `id_spp`) VALUES
('0118741444', '0254321113', 'Agung prasetyo', 103, 'Gang haji asnawi rt 03 rw 05', '081213138412', 203),
('0118741445', '0254321114', 'Ananda khotimah', 102, 'jalan pangauban RT05 RW02 batujajar barat', '081341241412', 202),
('0118741446', '0254321115', 'Benimaru sinegar', 101, 'Gg haji umar batujajar barat rt 02 rw 13 batujajar barat', '081465145236', 201),
('118741447', '254321116', 'dendi sunarji', 103, 'Gang haji jambu RT 02 RW 05', '0812241244239', 203),
('118741448', '254321117', 'Dea fatmawati', 102, 'gang jambu RT 05 RW 03', '082834957495', 202),
('118741449', '254321118', 'Endang saputra', 101, 'gang anggur RT 10 RW 1', '083258257285', 201),
('118741450', '254321119', 'Farzaenulloh', 103, 'gang mangga RT 12 RW 07', '08122087593', 203),
('118741451', '254321120', 'Hendi hermawan', 102, 'gang Rambutan RT 20 RW 12', '08174753892', 202),
('118741452', '254321121', 'Irfan hakim', 101, 'Gang hj suryanto RT 04 RW 05', '084235295758', 201),
('118741453', '254321122', 'Karmelia ayunda', 102, 'gang dukuh RT 05 RW 08', '08925234536', 202);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(20) NOT NULL,
  `kompetensi_keahlian` varchar(30) NOT NULL,
  `nominal` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`id_spp`, `kompetensi_keahlian`, `nominal`) VALUES
(201, 'RPL(Rekayasa Perangkat Lunak)', 150),
(202, 'Akuntansi', 250),
(203, 'TM(Tekhnik permesinan)', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
