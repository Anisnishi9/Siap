-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2020 at 01:13 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `nomor` varchar(20) NOT NULL,
  `idkategori` varchar(20) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `thn` int(5) NOT NULL,
  `tglmasuk` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `keterangan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`nomor`, `idkategori`, `departemen`, `status`, `judul`, `thn`, `tglmasuk`, `lokasi`, `keterangan`) VALUES
('BK.1.1.1.2     ', 'Buku', 'JDIH', 'Terpinjam', 'JDIH jhgf alala', 2015, '1 Januari 2015', 'Lantai 1 Lemari ke-1 Rak ke-1 Nomor ke-2', NULL),
('BK.1.1.23.3 ', 'Buku', 'JDIH', 'Tersedia', 'Masakan', 2020, '7 March 2020', 'Lantai 1 Lemari ke-1 Rak ke-23 Nomor ke-3', NULL),
('BK.1.2.2.1', 'Buku', 'Dinas Komunikasi dan Informatika (DISKOMINFO)', 'Terpinjam', 'Buku Pedoman PemanfaatanJaringan', 2015, '1 Januari 2015', 'Lantai 1 Lemari ke-2 Rak ke-2 Nomor ke-1', NULL),
('BK.1.4.1.13', 'Buku', 'Dinas Komunikasi dan Informatika (DISKOMINFO)', 'Tersedia', 'Layanan Keuangan ', 2015, '1 Januari 2015', 'Lantai 1 Lemari ke-4 Rak ke-1', NULL),
('BK.2.2.1.2', 'Buku', 'Dinas Pemberdayaan Masyarakat dan Desa (Dinas PMD)', 'Terpinjam', 'Buku Pedoman Pemanfaatan Jurnal Ilmiah Kualitas Terbaik lah', 2017, '11 Juli 2017', 'Lantai 2 Lemari ke-2 Rak ke-1 Nomor ke-2', ''),
('BK.3.6.2.2', 'Buku', 'Dinas Kearsipan dan Perpustakaan (DISARPUS)', 'Tersedia', 'Buku Pedoman Pemanfaatan Sawah', 2020, '7 March 2020', 'Lantai 3 Lemari ke-6 Rak ke-2 Nomor ke-2', NULL),
('BK.3.6.4.2', 'Buku', 'Dinas Pemberdayaan Masyarakat dan Desa (Dinas PMD)', 'Terpinjam', 'qwertyiuyfb', 2020, '8 March 2020', 'Lantai 3 Lemari ke-6 Rak ke-4 Nomor ke-2', NULL),
('BK.4.9.5.2', 'Buku', 'Dinas Pemberdayaan Masyarakat dan Desa (Dinas PMD)', 'Tersedia', 'Buku Pedoman Pemanfaatan Lahan Sebagai Area Resapan', 2020, '14 September 2020', 'Lantai 4 Lemari ke-9 Rak ke-5 Nomor ke-2', NULL),
('BK.5.1.2.2', 'Buku', 'Dinas Perdagangan, Koperasi, Usaha Kecil dan Menengah (DPKUKM)', 'Tersedia', 'Dokumen Catatan Kelahiran', 2015, '1 Januari 2015', 'Lantai 5 Lemari ke-1 Rak ke-2 Nomor ke-2', NULL),
('BK.5.4.2.2', 'Buku', 'Dinas Komunikasi dan Informatika (DISKOMINFO)', 'Terpinjam', 'Buku Keluarga Berencana', 2017, '11 Februari 2017', 'Lantai 5 Lemari ke-4 Rak ke-2 Nomor ke-2', NULL),
('BK.5.6.5.4', 'Buku', 'Kantor Kesbangpol', 'Tersedia', 'Anis Nur Choiriyah', 2020, '8 March 2020', 'Lantai 5 Lemari ke-6 Rak ke-5 Nomor ke-4', NULL),
('BK.5.8.9.2', 'Buku', 'Dinas Kepemudaan dan Olahraga (DISPORA)', 'Tersedia', 'Buku Kenangan Akhir Tahun', 2018, '6 Maret 2018', 'Lantai 5 Lemari ke-8 Rak ke-9 Nomor ke-2', ''),
('BK.9.44.44.44', 'Buku', 'Sekertaris Daerah', 'Tersedia', 'Anis Nur Choiriyah', 2020, '7 March 2020', 'Lantai 9 Lemari ke-44 Rak ke-44 Nomor ke-44', NULL),
('BK.9.8.7.6', 'Buku', 'Sekertaris Daerah', 'Terpinjam', 'Membuat Manisan', 2020, '7 March 2020', 'Lantai 9 Lemari ke-8 Rak ke-7 Nomor ke-6', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `nomor` varchar(20) NOT NULL,
  `idkategori` varchar(20) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `thn` int(5) NOT NULL,
  `tglmasuk` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `keterangan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`nomor`, `idkategori`, `departemen`, `status`, `judul`, `thn`, `tglmasuk`, `lokasi`, `keterangan`) VALUES
('DK.1.2.2.1', 'Dokumen', 'PPID', 'Tersedia', 'Pedoman Pemanfaatan Lahan Jalan', 2015, '1 Januari 2015', 'Lantai 1 Lemari ke-2 Rak ke-2 Nomor ke-1', NULL),
('DK.1.2.2.2', 'Dokumen', 'PPID', 'Tersedia', 'Masakan', 2020, '7 March 2020', 'Lantai 1 Lemari ke-2 Rak ke-2 Nomor ke-2', NULL),
('DK.2.7.6.4', 'Dokumen', 'Badan Perencanaan, Penelitian dan Pengembangan Daerah (BAPPELBANGDA)', 'Tersedia', 'Ramayana', 2020, '7 March 2020', 'Lantai 2 Lemari ke-7 Rak ke-6 Nomor ke-4', NULL),
('DK.4.8.7.2', 'Dokumen', 'Dinas Komunikasi dan Informatika (DISKOMINFO)', 'Tersedia', 'Dokumen Catatan Kelahiran', 2020, '1 Februari 2020', 'Lantai 4 Lemari ke-8 Rak ke-7 Nomor ke-2', NULL),
('DK.5.7.5.4', 'Dokumen', 'Kantor Kesbangpol', 'Tersedia', 'Anis Nur Choiriyah', 2020, '8 March 2020', 'Lantai 5 Lemari ke-7 Rak ke-5 Nomor ke-4', NULL),
('DK.8.2.1.1', 'Dokumen', 'Sekertariat Daerah', 'Tersedia', 'Membuat kue', 2020, '7 March 2020', 'Lantai 8 Lemari ke-2 Rak ke-1 Nomor ke-1', NULL),
('DK.8.8.5.4', 'Dokumen', 'Sekertariat Daerah', 'Tersedia', 'Laporan Rapat Daerah', 2015, '1 Januari 2015', 'Lantai 8 Lemari ke-8 Rak ke-5 Nomor ke-4', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `kategori`) VALUES
(1, 'Buku'),
(2, 'Dokumen'),
(3, 'Laporan'),
(4, 'Surat'),
(5, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `lain`
--

CREATE TABLE `lain` (
  `nomor` varchar(20) NOT NULL,
  `idkategori` varchar(20) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `thn` int(5) NOT NULL,
  `tglmasuk` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lain`
--

INSERT INTO `lain` (`nomor`, `idkategori`, `departemen`, `status`, `judul`, `keterangan`, `thn`, `tglmasuk`, `lokasi`) VALUES
('L.1.2.1.1', 'Lainnya', 'JDIH', 'Tersedia', 'Dokumen Catatan Kelahiran', 'Tahun Pengadaan 2020', 2020, '7 March 2020', 'Lantai 1 Lemari ke-2 Rak ke-1 Nomor ke-1'),
('L.1.2.3.2', 'Lainnya', 'PPID', 'Tersedia', 'Masakan', 'Untuk Makan Siang', 2020, '7 March 2020', 'Lantai 1 Lemari ke-2 Rak ke-3 Nomor ke-2'),
('L.1.9.1.11', 'Lainnya', 'JDIH', 'Tersedia', 'Dokumen Catatan Kelahiran anak', 'Dokumen Catatan Kelahiran', 2015, '1 Januari 2015', 'Lantai 1 Lemari ke-9 Rak ke-1 Nomor ke-11'),
('L.3.1.1.1', 'Lainnya', 'Dinas Kearsipan dan Perpustakaan (DISARPUS)', 'Tersedia', 'Masakan Jamur', 'Untuk Makan Siang', 2020, '7 March 2020', 'Lantai 3 Lemari ke-1 Rak ke-1 Nomor ke-1'),
('L.3.1.2.2', 'Lainnya', 'Dinas Kearsipan dan Perpustakaan (DISARPUS)', 'Tersedia', 'Pedoman Pemanfaatan Alat Olahraga', 'Pedoman Pemanfaatan Alat Olahraga', 2020, '2 Maret 2020', 'Lantai 3 Lemari ke-1 Rak ke-2 Nomor ke-2'),
('L.4.3.11.2', 'Lainnya', 'Dinas Komunikasi dan Informatika (DISKOMINFO)', 'Terpinjam', 'Arsip Nasional Ujian CPNS Daerah', 'Arsip Nasional Ujian CPNS Daerah', 2019, '2 Agustus 2019', 'Laintai 4 Lemari ke-3 Rak ke-11 Nomor ke-2'),
('L.5.6.4.2', 'Lainnya', 'Kantor Kesbangpol', 'Tersedia', 'Anis Nur Choiriyah', 'asdfghjkl', 2020, '8 March 2020', 'Lantai 5 Lemari ke-6 Rak ke-4 Nomor ke-2');

-- --------------------------------------------------------

--
-- Table structure for table `lap`
--

CREATE TABLE `lap` (
  `nomor` varchar(20) NOT NULL,
  `idkategori` varchar(20) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `judul` varchar(200) NOT NULL,
  `thn` int(5) NOT NULL,
  `tglmasuk` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `keterangan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lap`
--

INSERT INTO `lap` (`nomor`, `idkategori`, `departemen`, `status`, `judul`, `thn`, `tglmasuk`, `lokasi`, `keterangan`) VALUES
('L.2.1.1.1', 'Laporan', 'Badan Perencanaan, Penelitian dan Pengembangan Daerah (BAPPELBANGDA)', 'Tersedia', 'Masakan', 2020, '7 March 2020', 'Lantai 2 Lemari ke-1 Rak ke-1 Nomor ke-1', NULL),
('L.2.4.1.1', 'Laporan', 'Badan Perencanaan, Penelitian dan Pengembangan Daerah (BAPPELBANGDA)', 'Tersedia', 'Keterangan Lantai', 2015, '1 Januari 2015', 'Lantai 2 Lemari ke-4 Rak ke-1 Nomor ke-1', NULL),
('LP.1.1.1.6', 'Laporan', 'PPID', 'Tersedia', 'Penanggulangan', 2020, '7 March 2020', 'Lantai 1 Lemari ke-1 Rak ke-1 Nomor ke-6', NULL),
('LP.1.1.3.1', 'Laporan', 'Dinas Kepemudaan dan Olahraga (DISPORA)', 'Terpinjam', 'Laporan Kebugaran Tubuh', 2016, '1 Januari 2016', 'Lantai 1 Lemari ke-1 Rak ke-3 Nomor ke-1', NULL),
('LP.3.5.10.2', 'Laporan', 'Dinas Kearsipan dan Perpustakaan (DISARPUS)', 'Tersedia', 'Laporan Keuangan anis', 2019, '1 Mei 2019', 'Lantai 3 Lemari ke-5 Rak ke-10 Nomor ke-2', NULL),
('LP.4.4.12.12', 'Laporan', 'Dinas Pemberdayaan Masyarakat dan Desa (Dinas PMD)', 'Tersedia', 'Laporan Pengadaan Barang nanana', 2020, '4 Januari 2020', 'Lantai 4 Lemari ke-4 Rak ke-12 Nomor ke-12', NULL),
('LP.4.4.2.33', 'Laporan', 'Dinas Perindustrian dan Tenaga Kerja (DISNAKER)', 'Tersedia', 'Penataan Jalan Utama', 2018, '1 Januari 2018', 'Lantai 4 Lemari ke-4 Rak ke-2 Nomor ke-33', NULL),
('LP.5.8.4.2', 'Laporan', 'Kantor Kesbangpol', 'Tersedia', 'Anis Nur Choiriyah', 2020, '8 March 2020', 'Lantai 5 Lemari ke-8 Rak ke-4 Nomor ke-2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `nomorarsip` varchar(30) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `namapeminjam` varchar(50) NOT NULL,
  `nippeminjam` int(20) NOT NULL,
  `kontak` int(20) NOT NULL,
  `tglpinjam` varchar(20) NOT NULL,
  `tglkembali` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `nomorarsip`, `departemen`, `namapeminjam`, `nippeminjam`, `kontak`, `tglpinjam`, `tglkembali`) VALUES
(11, 'BK.1.1.1.1', 'JDIH', 'rtyuio', 56789, 5678, '1 Januari 2015', '6 March 2020'),
(12, 'BK.4.9.5.2', 'Dinas Pemberdayaan Masyarakat dan Desa (Dinas PMD)', 'ertyuknbv', 56789, 876543, '1 Januari 2015', '6 March 2020'),
(13, 'BK.5.4.2.2', 'Dinas Komunikasi dan Informatika (DISKOMINFO)', 'wertyujhgfcv', 654323456, 765434567, '1 Januari 2015', '7 March 2020'),
(14, 'BK.5.8.9.2', 'Dinas Kepemudaan dan Olahraga (DISPORA)', 'Sulis Setiyawati', 123456789, 2345678, '1 Januari 2015', '7 March 2020'),
(16, 'BK.2.2.1.2', 'Dinas Pemberdayaan Masyarakat dan Desa (Dinas PMD)', 'ertyuio', 87654, 345678, '1 Januari 2015', '6 March 2020'),
(18, 'BK.1.1.1.1', 'JDIH', 'ertyuikjnb', 76543, 2345678, '3 Maret 2016', '7 March 2020'),
(19, 'BK.1.1.1.2', 'JDIH', 'dtyujnbvc', 456789, 87654, '1 Januari 2015', '7 March 2020'),
(20, 'BK.1.1.1.1', 'JDIH', 'ertyhgvc', 6543, 3456, '1 Februari 2015', '7 March 2020'),
(21, 'BK.1.4.1.13', 'Dinas Komunikasi dan Informatika (DISKOMINFO)', 'uytrew', 23456, 87654, '1 Januari 2015', '7 March 2020'),
(22, 'BK.1.4.1.13', 'Dinas Komunikasi dan Informatika (DISKOMINFO)', 'uytrew', 23456, 87654, '1 Januari 2015', '7 March 2020'),
(23, 'BK.1.1.1.2', 'JDIH', 'kytfd', 34567, 87654, '1 Januari 2015', '7 March 2020'),
(24, 'BK.1.1.1.2', 'JDIH', 'kytfd', 34567, 87654, '1 Januari 2015', '7 March 2020'),
(25, 'BK.1.2.2.1', 'Dinas Komunikasi dan Informatika (DISKOMINFO)', 'ytdcvbn', 87654, 3456, '1 Januari 2015', '7 March 2020'),
(26, 'BK.2.1.1.1', 'JDIH', 'iuytr', 98765, 45678, '1 Januari 2015', '7 March 2020'),
(27, 'L.4.3.11.2', 'Dinas Komunikasi dan Informatika (DISKOMINFO)', 'uytrew', 23456, 87654, '1 Januari 2015', '7 March 2020'),
(28, 'BK.1.1.1.1', 'JDIH', 'iuytr', 234567, 987654, '1 Januari 2015', '7 March 2020'),
(29, 'BK.1.1.1.2', 'JDIH', 'lkjhg', 45678, 9876, '1 Januari 2015', '7 March 2020'),
(30, 'L.1.9.1.11', 'JDIH', 'jhghvc', 678, 876, '1 Januari 2015', '7 March 2020'),
(31, 'BK.1.1.1.1', 'JDIH', 'Anis Nur Choiriyah', 1234567890, 123456789, '1 Januari 2015', '7 March 2020'),
(32, 'BK.1.1.1.1', 'JDIH', 'Anis Nur Choiriyah', 1234567890, 123456789, '1 Januari 2015', '7 March 2020'),
(33, 'BK.1.1.1.2', 'JDIH', 'Sulis Setiyawati', 23456789, 2147483647, '7 March 2020', '7 March 2020'),
(37, 'LP.1.1.3.1', 'Dinas Kepemudaan dan Olahraga (DISPORA)', 'Lala', 2147483647, 9876, '7 March 2020', NULL),
(38, 'LP.4.4.2.33', 'Dinas Pemberdayaan Masyarakat dan Desa (Dinas PMD)', 'Taya', 9765, 56789, '7 March 2020', '7 March 2020'),
(39, 'SU.1.1.2.2', 'Kantor Kesbangpol', 'Rara', 2345678, 9876543, '7 March 2020', '7 March 2020'),
(40, 'BK.2.2.1.2', 'Dinas Pemberdayaan Masyarakat dan Desa (Dinas PMD)', 'Anis', 987654, 345678, '7 March 2020', '7 March 2020'),
(41, 'BK.2.2.1.2', 'Dinas Pemberdayaan Masyarakat dan Desa (Dinas PMD)', 'iuytrew', 234567, 987654, '7 March 2020', '7 March 2020'),
(42, 'BK.3.6.4.3', 'Dinas Pemberdayaan Masyarakat dan Desa (Dinas PMD)', 'trewq', 12345, 1234, '7 March 2020', '7 March 2020'),
(43, 'BK.1.1.1.1', 'JDIH', 'anis anis', 987654, 34567890, '7 March 2020', '7 March 2020'),
(44, 'BK.1.1.1.2', 'JDIH', 'iuytre', 2345, 123, '7 March 2020', '7 March 2020'),
(45, 'BK.9.8.7.6', 'Sekertaris Daerah', 'Anis', 345678, 876543, '7 March 2020', '8 March 2020'),
(46, 'BK.5.4.3.2', 'Kantor Kesbangpol', 'dvhjk', 5432, 23456, '8 March 2020', '8 March 2020'),
(47, 'DK.1.1.2.2', 'Kantor Kesbangpol', 'kjhgf', 234567, 98765, '8 March 2020', '8 March 2020'),
(48, 'SU.4.8.5.3', 'Dinas Perdagangan, Koperasi, Usaha Kecil dan Menengah (DPKUKM)', 'iuytre', 2345678, 9876543, '8 March 2020', NULL),
(49, 'BK.9.8.7.6', 'Sekertaris Daerah', 'iuytr', 3456789, 9876543, '8 March 2020', NULL),
(52, 'BK.1.2.2.1', 'Dinas Komunikasi dan Informatika (DISKOMINFO)', 'anis', 456789, 9876543, '9 March 2020', NULL),
(53, 'BK.2.2.1.2', 'Dinas Pemberdayaan Masyarakat dan Desa (Dinas PMD)', 'ila', 76543, 340, '9 March 2020', NULL),
(54, 'BK.3.6.4.2', 'Dinas Pemberdayaan Masyarakat dan Desa (Dinas PMD)', 'uytfcvbjk', 987654, 3456789, '9 March 2020', NULL),
(55, 'BK.5.4.2.2', 'Dinas Komunikasi dan Informatika (DISKOMINFO)', 'oiuyt', 3456789, 8765, '9 March 2020', NULL),
(56, 'L.4.3.11.2', 'Dinas Komunikasi dan Informatika (DISKOMINFO)', 'mnbvcx', 4567890, 98765432, '9 March 2020', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `nomor` varchar(20) NOT NULL,
  `idkategori` varchar(20) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `klasifikasi` varchar(15) NOT NULL,
  `nomorsurat` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `dari` varchar(50) NOT NULL,
  `kepada` varchar(50) NOT NULL,
  `lampiran` varchar(100) NOT NULL,
  `thn` int(5) NOT NULL,
  `tglsurat` varchar(20) NOT NULL,
  `tglmasuk` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `keterangan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`nomor`, `idkategori`, `departemen`, `status`, `klasifikasi`, `nomorsurat`, `jenis`, `judul`, `dari`, `kepada`, `lampiran`, `thn`, `tglsurat`, `tglmasuk`, `lokasi`, `keterangan`) VALUES
('SU.1.1.2.2', 'Surat', 'PPID', 'Tersedia', '', 'UI/09/9872/HK', 'Surat Permohonan', 'Permohonan Ijin', 'Kantor Bupati', 'Kepala Dinas', 'Hal 14', 2016, '1 Januari 2016', '1 Januari 2016', 'Lantai 1 Lemari ke-1 Rak ke-2 Nomor ke-2', NULL),
('SU.1.2.3.11', 'Surat', 'JDIH', 'Tersedia', '', 'KK/8765/LK/09', 'Surat Permohonan', 'Penangkapan', 'Aliansi Pedagang Daerah', 'Kabid Satpol PP', 'Hal 1', 2016, '2 Januari 2016', '1 Januari 2016', 'Lantai 1 Lemari ke-2 Rak ke-3 Nomor ke-11', NULL),
('SU.1.8.7.5', 'Surat', 'PPID', 'Tersedia', 'Surat Masuk', 'JH/98765/L', 'Surat Permohonan', 'kjhgfd', 'oiuytr', 'ertyui', 'dfghjk', 2020, '12 Agustus 2020', '8 March 2020', 'Lantai 1 Lemari ke-8 Rak ke-7 Nomor ke-5', NULL),
('SU.3.1.1.1', 'Surat', 'Dinas Kearsipan dan Perpustakaan (DISARPUS)', 'Tersedia', '', 'JHG/987/LKJH', 'Surat Permohonan', 'Pesanan Katering', 'Warmindo', 'Ketua Dinas', 'Hal 1', 2020, '1 April2020', '7 March 2020', 'Lantai 3 Lemari ke-1 Rak ke-1 Nomor ke-1', NULL),
('SU.3.3.1.2', 'Surat', 'Dinas Kepemudaan dan Olahraga (DISPORA)', 'Tersedia', '', 'YH/5678/K/22', 'Surat Pengantar', 'Permintaan Penambahan Alat Kesehatan', 'Puskesmas Gentan', 'Kabid Dinas Kesehatan', 'Hal 4', 2019, '3 Februari 2019', '4 Februari 2019', 'Lantai 3 Lemari ke-3 Rak ke-1 Nomor ke-2', NULL),
('SU.3.9.8.7', 'Surat', 'Dinas Kearsipan dan Perpustakaan (DISARPUS)', 'Terpinjam', '', 'K/98/l', 'Surat Permohonan', 'Masakan', 'Warmindo', 'Dinas', 'Hal 1', 2020, '8 Maret2020', '7 March 2020', 'Lantai 3 Lemari ke-9 Rak ke-8 Nomor ke-7', NULL),
('SU.4.8.5.3', 'Surat', 'Dinas Perdagangan, Koperasi, Usaha Kecil dan Menengah (DPKUKM)', 'Terpinjam', '', 'I/8765/HJ', 'Surat Keputusan', 'Perjanjian Batal', 'Ramayanan', 'Raul', 'Hal 1', 2020, '2 Januari 2020', '7 March 2020', 'Lantai 4 Lemari ke-8 Rak ke-5 Nomor ke-3', NULL),
('SU.5.3.1.2', 'Surat', 'Dinas Komunikasi dan Informatika (DISKOMINFO)', 'Tersedia', '', 'IP/565/12/S', 'Surat Pemberitahuan', 'Ijin Magang', 'Universitas Sebelas Maret', 'Dinas Komunikasi dan Informasi', 'Hal 1', 2019, '9 Agustus 2019', '10 Agustus 2019', 'Lantai 5 Lemari ke-3 Rak ke-1 Nomor ke-2', NULL),
('SU.5.4.2.2', 'Surat', 'Kantor Kesbangpol', 'Tersedia', 'Surat Masuk', 'LK/9876543/L', 'Surat Permohonan', 'Anis', 'Anis Nur Choiriyah', 'Anis', 'Anis', 2020, '1 Januari 2020', '8 March 2020', 'Lantai 5 Lemari ke-4 Rak ke-2 Nomor ke-2', NULL),
('SU.8.1.1.2', 'Surat', 'Dinas Kepemudaan dan Olahraga (DISPORA)', 'Tersedia', 'Surat Masuk', 'BN/78/098/M', 'Surat Perintah', 'Marging Building kkkkkk', 'PT. INDAYA ', 'Kabid Bidang Pekerjaan Umum', 'Hal 1', 2018, '8 Januari 2018', '9 Januari 2018', 'Lantai 8 Lemari ke-1 Rak ke-1 Nomor ke-2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `role` varchar(100) NOT NULL,
  `passwd` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `role`, `passwd`) VALUES
(1, 'anis', 'Anis Nur Choiriyah', 'Dinas Pemberdayaan Masyarakat dan Desa (Dinas PMD)', 'anis'),
(2, 'nishi', 'Nishi Anis', 'Administrator', 'nishi'),
(3, 'salala', 'Sasa Lala', 'Dinas Komunikasi dan Informatika (DISKOMINFO)', 'salala'),
(4, 'sanana', 'Sasa Nana', 'Dinas Kepemudaan dan Olahraga (DISPORA)', 'sanana'),
(5, 'sulis', 'Sulis Setiyawati', 'Kantor Kesbangpol', 'sulis'),
(6, 'lina', 'Lina Sari ', 'JDIH', 'lina'),
(7, 'kala', 'Kalalal', 'Dinas Perdagangan, Koperasi, Usaha Kecil dan Menengah (DPUKM)', 'kala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `lain`
--
ALTER TABLE `lain`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `lap`
--
ALTER TABLE `lap`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
