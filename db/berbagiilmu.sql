/*
SQLyog Community v9.63 
MySQL - 5.5.5-10.1.13-MariaDB : Database - berbagiilmu
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`berbagiilmu` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `berbagiilmu`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

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
  `admin_foto` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`admin_id`,`admin_nama`,`admin_jk`,`admin_ttl`,`admin_tglahir`,`admin_alamat`,`admin_tlp`,`admin_username`,`admin_email`,`admin_password`,`admin_foto`) values (1,'Adira','L','Bandung','0000-00-00','Jl Kramatjati No 32 Bandung','89695686313','admin','fleqsy_afc@yahoo.com','admin_coi11','1.png');

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

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
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

/*Data for the table `buku` */

insert  into `buku`(`buku_id`,`buku_judul`,`buku_author`,`buku_kategori`,`tanggal_upload`) values (41,'belajar gitar dasar disertai gambar',12,'29','2017-07-02');

/*Table structure for table `buku_admin` */

DROP TABLE IF EXISTS `buku_admin`;

CREATE TABLE `buku_admin` (
  `buku_id` varchar(5) NOT NULL,
  `buku_judul` varchar(50) DEFAULT NULL,
  `buku_penulis` varchar(50) DEFAULT NULL,
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

/*Data for the table `buku_admin` */

insert  into `buku_admin`(`buku_id`,`buku_judul`,`buku_penulis`,`buku_author`,`buku_kategori`,`buku_bahasa`,`tanggal_upload`) values ('A_01','Numerical Mathematic And Computing','Ward Cheney',1,'16','Inggris','0000-00-00'),('A_02','An Introdiction to Relational Database Theory','Hugh Darwen',1,'20','Inggris','2017-06-29'),('A_03','Basic English Grammar','Anne Seaton',1,'02','Inggris','2017-06-30'),('A_04','English For English Speakers Beginner','bookboon',1,'02','Inggris','2017-07-01'),('A_05','International Financial Reporting','Marco Mongiello',1,'06','Inggris','2017-07-01'),('A_06','Cost Anaysis','Christopher J. Skousen',1,'06','Inggris','2017-07-01'),('A_07','Introduction to Managerial Accounting','Christopher J. Skousen',1,'06','Inggris','2017-07-01'),('A_08','Engineering Mathematics','Christopher C. Tisdell',1,'16','Inggris','2017-07-01'),('A_09','Introduction to Complex Numbers','Christopher C. Tisdell',1,'16','Inggris','2017-07-01'),('A_10','Mengapa Kita Shalat','Yufig',1,'01','Indonesia','2017-07-02'),('A_11','Meraih Surga Bulan Ramadhan','Syaikh Muhammad bin Shalih Al-Utsaimin',1,'01','Indonesia','2017-07-02'),('A_12','Riwayat Hidup Yasodhara Putri Yang Mulia','Upa Sasanasena Seng Hansen',1,'03','Indonesia','2017-07-02');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `kategori_id` varchar(10) NOT NULL,
  `kategori_jenis` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`kategori_id`,`kategori_jenis`) values ('01','Agama'),('02','Bahasa dan Kamus'),('03','Biografi'),('04','Buku Sekolah'),('05','Buku Teks'),('06','Ekonomi dan Manajemen'),('07','Hobi dan Usaha'),('08','Hukum dan Undang-Undang'),('09','Inspirasi dan Spiritual'),('10','Kesehatan dan Lingkungan'),('11','Komputer dan Internet'),('12','Masakan dan Makanan'),('13','Perhotelan dan Pariwisata'),('14','Prikologi'),('15','Remaja'),('16','Sains dan Teknologi'),('17','Sastra dan Filsafat'),('18','Sejarah dan Budaya'),('19','Animasi dan Desain'),('20','Pemrograman'),('21','Security'),('22','Sistem Operasi'),('23','Software'),('24','Hardware'),('25','Tools & Utility'),('26','Web Design'),('27','Web Programming'),('28','Lainnya'),('29','Other');

/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

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
  `member_foto` varchar(40) DEFAULT 'default.png',
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `member` */

insert  into `member`(`member_id`,`member_nama`,`member_jk`,`member_ttl`,`member_tglahir`,`member_alamat`,`member_tlp`,`member_username`,`member_email`,`member_password`,`member_foto`) values (12,'Feki','L','Bandung','1990-12-20','Jalan Dago 99','89695686313','Aircraft','fekipangestu@yahoo.com','faf1818b0a5febc6eb37f90ada0e3d29','default.png');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
