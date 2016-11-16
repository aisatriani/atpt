/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.5.52-0ubuntu0.14.04.1 : Database - rekam_medis
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `asuransi` */

DROP TABLE IF EXISTS `asuransi`;

CREATE TABLE `asuransi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_asuransi` char(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `asuransi` */

LOCK TABLES `asuransi` WRITE;

UNLOCK TABLES;

/*Table structure for table `bersalin` */

DROP TABLE IF EXISTS `bersalin`;

CREATE TABLE `bersalin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bersalin` */

LOCK TABLES `bersalin` WRITE;

UNLOCK TABLES;

/*Table structure for table `diagnosa` */

DROP TABLE IF EXISTS `diagnosa`;

CREATE TABLE `diagnosa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `icd` char(10) NOT NULL,
  `diagnosis` char(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `diagnosa` */

LOCK TABLES `diagnosa` WRITE;

UNLOCK TABLES;

/*Table structure for table `dokter` */

DROP TABLE IF EXISTS `dokter`;

CREATE TABLE `dokter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(200) NOT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `telp` char(20) NOT NULL,
  `kompetensi` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dokter` */

LOCK TABLES `dokter` WRITE;

UNLOCK TABLES;

/*Table structure for table `kamar` */

DROP TABLE IF EXISTS `kamar`;

CREATE TABLE `kamar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_kamar` char(10) NOT NULL,
  `nama_kamar` char(100) NOT NULL,
  `ruangan_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kamar` */

LOCK TABLES `kamar` WRITE;

UNLOCK TABLES;

/*Table structure for table `kandungan` */

DROP TABLE IF EXISTS `kandungan`;

CREATE TABLE `kandungan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kandungan` */

LOCK TABLES `kandungan` WRITE;

UNLOCK TABLES;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

LOCK TABLES `migrations` WRITE;

insert  into `migrations`(`migration`,`batch`) values ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1);

UNLOCK TABLES;

/*Table structure for table `obat` */

DROP TABLE IF EXISTS `obat`;

CREATE TABLE `obat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `obat` */

LOCK TABLES `obat` WRITE;

UNLOCK TABLES;

/*Table structure for table `pasien` */

DROP TABLE IF EXISTS `pasien`;

CREATE TABLE `pasien` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `no_reg` char(6) NOT NULL,
  `nama_lengkap` char(250) NOT NULL,
  `kelamin` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` char(100) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `kabkota_id` int(10) unsigned NOT NULL,
  `nama_ibu` varchar(250) DEFAULT NULL,
  `nama_bapak` varchar(250) DEFAULT NULL,
  `baru_lama` enum('BARU','LAMA') NOT NULL,
  `asuransi_id` int(10) unsigned NOT NULL,
  `rujukan_id` int(10) unsigned NOT NULL,
  `tgl_mrs` date NOT NULL,
  `tgl_krs` date NOT NULL,
  `ruang_rawat_id` int(10) unsigned NOT NULL,
  `kelas_id` int(10) unsigned NOT NULL,
  `dokter_id` int(10) unsigned NOT NULL,
  `keadaan_keluar_id` int(10) unsigned NOT NULL,
  `cara_kelur_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pasien` */

LOCK TABLES `pasien` WRITE;

UNLOCK TABLES;

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

LOCK TABLES `password_resets` WRITE;

UNLOCK TABLES;

/*Table structure for table `perawat` */

DROP TABLE IF EXISTS `perawat`;

CREATE TABLE `perawat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(200) NOT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `telp` char(20) NOT NULL,
  `kompetensi` char(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `perawat` */

LOCK TABLES `perawat` WRITE;

UNLOCK TABLES;

/*Table structure for table `ruangan` */

DROP TABLE IF EXISTS `ruangan`;

CREATE TABLE `ruangan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_ruangan` char(10) NOT NULL,
  `nama_ruangan` char(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ruangan` */

LOCK TABLES `ruangan` WRITE;

UNLOCK TABLES;

/*Table structure for table `tindakan` */

DROP TABLE IF EXISTS `tindakan`;

CREATE TABLE `tindakan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `icopim` char(10) NOT NULL,
  `tindakan` char(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tindakan` */

LOCK TABLES `tindakan` WRITE;

UNLOCK TABLES;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

LOCK TABLES `users` WRITE;

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
