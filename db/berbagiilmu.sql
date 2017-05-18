/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.20 : Database - berbagiilmu
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

/*Table structure for table `adm` */

DROP TABLE IF EXISTS `adm`;

CREATE TABLE `adm` (
  `id` char(10) NOT NULL,
  `nama` char(15) DEFAULT NULL,
  `pass` char(20) DEFAULT NULL,
  `email` char(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `adm` */

insert  into `adm`(`id`,`nama`,`pass`,`email`) values ('1','admin1','admin','-'),('2','admin2','admin','-');

/*Table structure for table `buku` */

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `id` char(12) DEFAULT NULL,
  `nama_buku` char(30) DEFAULT NULL,
  `kategori` char(15) DEFAULT NULL,
  `deskripsi` char(50) DEFAULT NULL,
  `author` char(40) DEFAULT NULL,
  `uploader` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `buku` */

/*Table structure for table `kategori_buku` */

DROP TABLE IF EXISTS `kategori_buku`;

CREATE TABLE `kategori_buku` (
  `idkat` char(5) DEFAULT NULL,
  `kategori` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kategori_buku` */

/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `id` char(12) DEFAULT NULL,
  `nama` char(30) DEFAULT NULL,
  `pass` char(30) DEFAULT NULL,
  `email` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `member` */

insert  into `member`(`id`,`nama`,`pass`,`email`) values ('1','member1','member','datagame12@gmail.com'),('2','member2','member','datagame13@gmail.com'),('3','guest','guest','-');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
