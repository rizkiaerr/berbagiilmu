-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2017 at 04:13 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berbagiilmu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` smallint(3) NOT NULL,
  `admin_nama` varchar(20) DEFAULT NULL,
  `admin_jk` varchar(1) DEFAULT NULL,
  `admin_ttl` varchar(20) DEFAULT NULL,
  `admin_tglahir` date DEFAULT NULL,
  `admin_alamat` varchar(50) DEFAULT NULL,
  `admin_tlp` decimal(13,0) DEFAULT NULL,
  `admin_username` varchar(20) DEFAULT NULL,
  `admin_email` varchar(40) DEFAULT NULL,
  `admin_password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `buku_id` smallint(3) NOT NULL,
  `buku_judul` varchar(30) DEFAULT NULL,
  `buku_penulis` varchar(30) DEFAULT NULL,
  `buku_author` smallint(3) DEFAULT NULL,
  `buku_kategori` varchar(10) DEFAULT NULL,
  `buku_bahasa` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` varchar(10) NOT NULL,
  `kategori_jenis` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_jenis`) VALUES
('01', 'Agama'),
('02', 'Bahasa dan Kamus'),
('03', 'Biografi'),
('04', 'Buku Sekolah'),
('05', 'Buku Teks'),
('06', 'Ekonomi dan Manajemen'),
('07', 'Hobi dan Usaha'),
('08', 'Hukum dan Undang-Undang'),
('09', 'Inspirasi dan Spiritual'),
('10', 'Kesehatan dan Lingkungan'),
('11', 'Komputer dan Internet'),
('12', 'Masakan dan Makanan'),
('13', 'Perhotelan dan Pariwisata'),
('14', 'Prikologi dan Pengembangan Dir'),
('15', 'Remaja'),
('16', 'Sains dan Teknologi'),
('17', 'Sastra dan Filsafat'),
('18', 'Sejarah dan Budaya'),
('19', 'Animasi dan Desain'),
('20', 'Pemrograman'),
('21', 'Security'),
('22', 'Sistem Operasi'),
('23', 'Software'),
('24', 'Hardware'),
('25', 'Tools & Utility'),
('26', 'Web Design'),
('27', 'Web Programming'),
('28', 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` smallint(3) NOT NULL,
  `member_nama` varchar(20) DEFAULT NULL,
  `member_jk` varchar(1) DEFAULT NULL,
  `member_ttl` varchar(20) DEFAULT NULL,
  `member_tglahir` date DEFAULT NULL,
  `member_alamat` varchar(50) DEFAULT NULL,
  `member_tlp` varchar(15) DEFAULT NULL,
  `member_username` varchar(20) DEFAULT NULL,
  `member_email` varchar(40) DEFAULT NULL,
  `member_password` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_nama`, `member_jk`, `member_ttl`, `member_tglahir`, `member_alamat`, `member_tlp`, `member_username`, `member_email`, `member_password`) VALUES
(18, 'Moch. Rizkia Hidayat', 'L', 'Sumedang', '1996-04-23', 'Tanjungsari', '089661203309', 'rizkiaerr', 'rizkiaerr@gmail.com', '69ec49b2a3de2c33c27e79cd3bf3d741');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`buku_id`),
  ADD KEY `fk_kategori` (`buku_kategori`),
  ADD KEY `fk_member` (`buku_author`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` smallint(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `buku_id` smallint(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
