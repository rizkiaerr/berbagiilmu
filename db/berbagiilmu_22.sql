-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jun 2017 pada 17.13
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.5

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
-- Struktur dari tabel `admin`
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
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `buku_id` smallint(3) NOT NULL,
  `buku_judul` varchar(50) DEFAULT NULL,
  `buku_penulis` varchar(30) DEFAULT NULL,
  `buku_author` smallint(3) DEFAULT NULL,
  `buku_kategori` varchar(10) DEFAULT NULL,
  `buku_bahasa` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`buku_id`, `buku_judul`, `buku_penulis`, `buku_author`, `buku_kategori`, `buku_bahasa`) VALUES
(1, 'Belajar Mengiklaskan', 'Pak Atang', 1, '01', 'Indonesia'),
(2, 'Kamus Besar Bahasa Indonesia', 'Pak Robi', 1, '02', 'Indonesia'),
(3, 'Letak Segitiga Muda', 'Pak Samsul', 3, '03', 'Indonesia'),
(4, 'Lembar Kerja Siswa', 'Pak I Made', 4, '04', 'Indonesia'),
(5, 'Buku Teks', 'Pak Reza', 4, '05', 'Indonesia'),
(6, 'Perekenomian Indonesia 2017', 'Pak Asep', 3, '06', 'Indonesia'),
(7, 'Kue Is Live', 'Pak Jaka', 5, '07', 'Indonesia'),
(8, 'Undang Udang Indonesia', 'Pak Kanto', 2, '08', 'Indonesia'),
(9, 'Ki Joko Bodo', 'Pak Rede', 3, '09', 'Indonesia'),
(10, 'Mengenal Penyakit Kulit', 'Pak Roso', 2, '10', 'Indonesia'),
(11, 'Bahasa C#', 'Pak Atep', 1, '11', 'Indonesia'),
(12, 'Masakan Padang', 'Pak Robi', 4, '12', 'Indonesia'),
(13, 'Mengelola Hotel Di Indonesia', 'Pak Edi', 5, '13', 'Indonesia'),
(14, 'Mengenal Diri Sendiri', 'Pak Ade', 2, '14', 'Indonesia'),
(15, 'Tabloid Remaja', 'Pak Rodi', 3, '15', 'Indonesia'),
(16, 'Komputer Generasi Ke 5', 'Pak Ius', 2, '16', 'Indonesia'),
(17, 'Sastra Indonesia', 'Pak Opik', 1, '17', 'Indonesia'),
(18, 'Sejarah Indonesia', 'Pak Didit', 3, '18', 'Indonesia'),
(19, 'Belajar Photoshop', 'Pak Garen', 4, '19', 'Indonesia'),
(20, 'Belajar Java', 'Pak Draven', 5, '20', 'Indonesia'),
(21, 'Pengemanan Website', 'Pak Firaun', 4, '21', 'Indonesia'),
(22, 'Mengenal Linux', 'Pak Pajero', 5, '22', 'Indonesia'),
(23, 'Kumpulan Software Terbaik 2017', 'Pak Preman', 3, '23', 'Indonesia'),
(24, 'Komputer', 'Pak Aoi', 1, '24', 'Indonesia'),
(25, 'Mengenal PHP', 'Pak Momoko', 3, '27', 'Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` varchar(10) NOT NULL,
  `kategori_jenis` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
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
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `member_id` smallint(3) NOT NULL,
  `member_nama` varchar(20) DEFAULT NULL,
  `member_jk` varchar(1) DEFAULT NULL,
  `member_ttl` varchar(20) DEFAULT NULL,
  `member_tglahir` date DEFAULT NULL,
  `member_alamat` varchar(50) DEFAULT NULL,
  `member_tlp` decimal(13,0) DEFAULT NULL,
  `member_username` varchar(20) DEFAULT NULL,
  `member_email` varchar(40) DEFAULT NULL,
  `member_password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`member_id`, `member_nama`, `member_jk`, `member_ttl`, `member_tglahir`, `member_alamat`, `member_tlp`, `member_username`, `member_email`, `member_password`) VALUES
(1, 'Ruru', 'P', 'Bandung', '1996-01-09', 'cek edit seluruh database ke 1 januari', '8182341234', 'rina1', 'januari@gmail.com', ''),
(2, 'aris aa', 'L', 'bandung', '2017-05-18', 'bandung 3', '229121212', 'aaramdhan1', 'cek2@gmail.com', '12312'),
(3, 'aris arianto', 'L', 'jakarta', '1996-02-12', 'rancaekek', '88812122', 'aaramdhan2', 'arisramdhan13@gmail.com', 'jangantau123'),
(4, 'rini', 'P', 'bandung', '2017-05-21', 'bandung 4', '881221211', 'rini2', 'rini@gmail.com', '12'),
(5, 'roni', 'L', 'surabaya', '2017-05-18', 'bandung 5', '881244211', 'roni3', 'roni@gmail.com', '123'),
(7, 'aa', '', '1999-10-12', NULL, 'cimohai', NULL, NULL, 'fleqsy_afc@yahoo.com', 'asdasdf');

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
  MODIFY `buku_id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`buku_kategori`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_member` FOREIGN KEY (`buku_author`) REFERENCES `member` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
