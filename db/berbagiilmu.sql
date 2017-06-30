-- MySQL dump 10.16  Distrib 10.1.21-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `admin_id` smallint(3) NOT NULL AUTO_INCREMENT,
  `admin_nama` varchar(20) DEFAULT NULL,
  `admin_jk` varchar(1) DEFAULT NULL,
  `admin_ttl` varchar(20) DEFAULT NULL,
  `admin_tglahir` date DEFAULT NULL,
  `admin_alamat` varchar(50) DEFAULT NULL,
  `admin_tlp` decimal(13,0) DEFAULT NULL,
  `admin_username` varchar(20) DEFAULT NULL,
  `admin_email` varchar(40) DEFAULT NULL,
  `admin_password` varchar(20) DEFAULT NULL,
  `admin_foto` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Adira','L','Bandung','0000-00-00','Jl Kramatjati No 32 Bandung',89695686313,'admin','fleqsy_afc@yahoo.com','admin_coi11',NULL),(2,'aris rianti','L','Banjar','1996-02-05','bandung',81321535501,'admin1','arisrianti@gmail.com','jangantau','2.png');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buku`
--

DROP TABLE IF EXISTS `buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buku` (
  `buku_id` smallint(3) NOT NULL AUTO_INCREMENT,
  `buku_judul` varchar(50) DEFAULT NULL,
  `buku_author` smallint(3) DEFAULT NULL,
  `buku_kategori` varchar(10) DEFAULT NULL,
  `tanggal_upload` date DEFAULT NULL,
  PRIMARY KEY (`buku_id`),
  KEY `fk_member` (`buku_author`),
  KEY `fk_kategori_member` (`buku_kategori`),
  CONSTRAINT `fk_kategori_member` FOREIGN KEY (`buku_kategori`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_member` FOREIGN KEY (`buku_author`) REFERENCES `member` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buku`
--

LOCK TABLES `buku` WRITE;
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
INSERT INTO `buku` VALUES (1,'Belajar Mengiklaskan',10,'29','2017-01-01'),(2,'Kamus Besar Bahasa Indonesia',10,'29','2017-01-02'),(3,'Letak Segitiga Muda',3,'29','2017-01-03'),(4,'Lembar Kerja Siswa',4,'29','2017-01-04'),(5,'Buku Teks',4,'29','2017-01-05'),(6,'Perekenomian Indonesia 2017',3,'29','2017-01-06'),(7,'Kue Is Live',5,'29','2017-01-07'),(8,'Undang Udang Indonesia',2,'29','2017-01-08'),(9,'Ki Joko Bodo',3,'29','2017-01-09'),(10,'Mengenal Penyakit Kulit',2,'29','2017-01-10'),(11,'Bahasa C#',10,'29','2017-01-11'),(12,'Masakan Padang',4,'29','2017-01-12'),(13,'Mengelola Hotel Di Indonesia',5,'29','2017-01-13'),(14,'Mengenal Diri Sendiri',2,'29','2017-01-14'),(15,'Tabloid Remaja',3,'29','2017-01-15'),(16,'Komputer Generasi Ke 5',2,'29','2017-01-16'),(17,'Sastra Indonesia',10,'29','2017-01-17'),(18,'Sejarah Indonesia',3,'29','2017-01-18'),(19,'Belajar Photoshop',4,'29','2017-01-19'),(20,'Belajar Java',5,'29','2017-01-20'),(21,'Pengemanan Website',4,'29','2017-01-21'),(22,'Mengenal Linux',5,'29','2017-01-22'),(23,'Kumpulan Software Terbaik 2017',3,'29','2017-01-23'),(24,'Komputer',10,'29','2017-01-24'),(25,'Mengenal PHP',3,'29','2017-01-25');
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buku_admin`
--

DROP TABLE IF EXISTS `buku_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buku_admin` (
  `buku_id` varchar(5) NOT NULL,
  `buku_judul` varchar(50) DEFAULT NULL,
  `buku_penulis` varchar(30) DEFAULT NULL,
  `buku_author` smallint(3) DEFAULT NULL,
  `buku_kategori` varchar(10) DEFAULT NULL,
  `buku_bahasa` varchar(10) DEFAULT NULL,
  `tanggal_upload` date DEFAULT NULL,
  PRIMARY KEY (`buku_id`),
  KEY `fk_author` (`buku_author`),
  KEY `fk_kategori` (`buku_kategori`),
  CONSTRAINT `fk_author` FOREIGN KEY (`buku_author`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_kategori` FOREIGN KEY (`buku_kategori`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buku_admin`
--

LOCK TABLES `buku_admin` WRITE;
/*!40000 ALTER TABLE `buku_admin` DISABLE KEYS */;
INSERT INTO `buku_admin` VALUES ('A_01','Numerical Mathematic And Computing','Ward Cheney',1,'16','Inggris','0000-00-00');
/*!40000 ALTER TABLE `buku_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `kategori_id` varchar(10) NOT NULL,
  `kategori_jenis` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES ('01','Agama'),('02','Bahasa dan Kamus'),('03','Biografi'),('04','Buku Sekolah'),('05','Buku Teks'),('06','Ekonomi dan Manajemen'),('07','Hobi dan Usaha'),('08','Hukum dan Undang-Undang'),('09','Inspirasi dan Spiritual'),('10','Kesehatan dan Lingkungan'),('11','Komputer dan Internet'),('12','Masakan dan Makanan'),('13','Perhotelan dan Pariwisata'),('14','Prikologi dan Pengembangan Dir'),('15','Remaja'),('16','Sains dan Teknologi'),('17','Sastra dan Filsafat'),('18','Sejarah dan Budaya'),('19','Animasi dan Desain'),('20','Pemrograman'),('21','Security'),('22','Sistem Operasi'),('23','Software'),('24','Hardware'),('25','Tools & Utility'),('26','Web Design'),('27','Web Programming'),('28','Lainnya'),('29','Other');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `member_id` smallint(3) NOT NULL AUTO_INCREMENT,
  `member_nama` varchar(20) DEFAULT NULL,
  `member_jk` varchar(1) DEFAULT NULL,
  `member_ttl` varchar(20) DEFAULT NULL,
  `member_tglahir` date DEFAULT NULL,
  `member_alamat` varchar(50) DEFAULT NULL,
  `member_tlp` decimal(13,0) DEFAULT NULL,
  `member_username` varchar(20) DEFAULT NULL,
  `member_email` varchar(40) DEFAULT NULL,
  `member_password` varchar(40) DEFAULT NULL,
  `member_foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (2,'aris aa','L','bandung','2017-05-18','bandung 3',229121212,'aaramdhan1','cek2@gmail.com','12312','default.png'),(3,'aris arianto','L','jakarta','1996-02-12','rancaekek',88812122,'aaramdhan2','arisramdhan13@gmail.com','jangantau123','default.png'),(4,'rini','P','bandung','2017-05-21','bandung 4',881221211,'rini2','rini@gmail.com','12','default.png'),(5,'roni','L','surabaya','2017-05-18','bandung 5',881244211,'roni3','roni@gmail.com','123','default.png'),(7,'aa','','1999-10-12',NULL,'cimohai',NULL,NULL,'fleqsy_afc@yahoo.com','asdasdf','default.png'),(8,'asdasdf','L','bandung','2011-12-12','bandung',89695686313,'asdasdf','fleqsy_afc@yahoo.com','259a2d1f68fef2c2b38e','default.png'),(9,'asdasd','L','bandung','2011-12-12','bandung',89695686313,'asdasd','fleqsy_afc@yahoo.com','a8f5f167f44f4964e6c998dee827110c','default.png'),(10,'Ruru','P','Bandung','1996-01-09','cek edit seluruh database ke 1 januari',8182341234,'rina1','januari@gmail.com','','default.png'),(12,'cek_member','P','Banjar1','1995-02-06','Bandung',9991111111,'MemberOne','member12@email.com','aa08769cdcb26674c6706093503ff0a3','12.png');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-30 11:06:38
