DROP TABLE admin;
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

INSERT INTO admin VALUES ("1", "Adira", "L", "Bandung", "0000-00-00", "Jl Kramatjati No 32 Bandung", "89695686313", "admin", "fleqsy_afc@yahoo.com", "admin_coi11", "1.png");



DROP TABLE buku;
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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

INSERT INTO buku VALUES ("37", "belajar gitar dasar disertai gambar.pdf", "12", "29", "2017-07-02");



DROP TABLE buku_admin;
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

INSERT INTO buku_admin VALUES ("A_01", "Numerical Mathematic And Computing", "Ward Cheney", "1", "16", "Inggris", "0000-00-00");
INSERT INTO buku_admin VALUES ("A_02", "An Introdiction to Relational Database Theory", "Hugh Darwen", "1", "20", "Inggris", "2017-06-29");
INSERT INTO buku_admin VALUES ("A_03", "Basic English Grammar", "Anne Seaton", "1", "02", "Inggris", "2017-06-30");
INSERT INTO buku_admin VALUES ("A_04", "English For English Speakers Beginner", "bookboon", "1", "02", "Inggris", "2017-07-01");
INSERT INTO buku_admin VALUES ("A_05", "International Financial Reporting", "Marco Mongiello", "1", "06", "Inggris", "2017-07-01");
INSERT INTO buku_admin VALUES ("A_06", "Cost Anaysis", "Christopher J. Skousen", "1", "06", "Inggris", "2017-07-01");
INSERT INTO buku_admin VALUES ("A_07", "Introduction to Managerial Accounting", "Christopher J. Skousen", "1", "06", "Inggris", "2017-07-01");
INSERT INTO buku_admin VALUES ("A_08", "Engineering Mathematics", "Christopher C. Tisdell", "1", "16", "Inggris", "2017-07-01");
INSERT INTO buku_admin VALUES ("A_09", "Introduction to Complex Numbers", "Christopher C. Tisdell", "1", "16", "Inggris", "2017-07-01");
INSERT INTO buku_admin VALUES ("A_10", "Mengapa Kita Shalat", "Yufig", "1", "01", "Indonesia", "2017-07-02");
INSERT INTO buku_admin VALUES ("A_11", "Meraih Surga Bulan Ramadhan", "Syaikh Muhammad bin Shalih Al-Utsaimin", "1", "01", "Indonesia", "2017-07-02");
INSERT INTO buku_admin VALUES ("A_12", "Riwayat Hidup Yasodhara Putri Yang Mulia", "Upa Sasanasena Seng Hansen", "1", "03", "Indonesia", "2017-07-02");



DROP TABLE kategori;
CREATE TABLE `kategori` (
  `kategori_id` varchar(10) NOT NULL,
  `kategori_jenis` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO kategori VALUES ("01", "Agama");
INSERT INTO kategori VALUES ("02", "Bahasa dan Kamus");
INSERT INTO kategori VALUES ("03", "Biografi");
INSERT INTO kategori VALUES ("04", "Buku Sekolah");
INSERT INTO kategori VALUES ("05", "Buku Teks");
INSERT INTO kategori VALUES ("06", "Ekonomi dan Manajemen");
INSERT INTO kategori VALUES ("07", "Hobi dan Usaha");
INSERT INTO kategori VALUES ("08", "Hukum dan Undang-Undang");
INSERT INTO kategori VALUES ("09", "Inspirasi dan Spiritual");
INSERT INTO kategori VALUES ("10", "Kesehatan dan Lingkungan");
INSERT INTO kategori VALUES ("11", "Komputer dan Internet");
INSERT INTO kategori VALUES ("12", "Masakan dan Makanan");
INSERT INTO kategori VALUES ("13", "Perhotelan dan Pariwisata");
INSERT INTO kategori VALUES ("14", "Prikologi");
INSERT INTO kategori VALUES ("15", "Remaja");
INSERT INTO kategori VALUES ("16", "Sains dan Teknologi");
INSERT INTO kategori VALUES ("17", "Sastra dan Filsafat");
INSERT INTO kategori VALUES ("18", "Sejarah dan Budaya");
INSERT INTO kategori VALUES ("19", "Animasi dan Desain");
INSERT INTO kategori VALUES ("20", "Pemrograman");
INSERT INTO kategori VALUES ("21", "Security");
INSERT INTO kategori VALUES ("22", "Sistem Operasi");
INSERT INTO kategori VALUES ("23", "Software");
INSERT INTO kategori VALUES ("24", "Hardware");
INSERT INTO kategori VALUES ("25", "Tools & Utility");
INSERT INTO kategori VALUES ("26", "Web Design");
INSERT INTO kategori VALUES ("27", "Web Programming");
INSERT INTO kategori VALUES ("28", "Lainnya");
INSERT INTO kategori VALUES ("29", "Other");



DROP TABLE member;
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

INSERT INTO member VALUES ("12", "Feki", "L", "Bandung", "1990-12-20", "Jalan Dago 99", "89695686313", "Aircraft", "fekipangestu@yahoo.com", "faf1818b0a5febc6eb37f90ada0e3d29", "default.png");



