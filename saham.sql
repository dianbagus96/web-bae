/*
SQLyog Community v13.0.0 (64 bit)
MySQL - 10.1.21-MariaDB : Database - saham
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`saham` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `saham`;

/*Table structure for table `tm_company` */

DROP TABLE IF EXISTS `tm_company`;

CREATE TABLE `tm_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tm_company` */

/*Table structure for table `tm_investor` */

DROP TABLE IF EXISTS `tm_investor`;

CREATE TABLE `tm_investor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat_1` varchar(150) DEFAULT NULL,
  `alamat_2` varchar(150) NOT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `la` char(2) NOT NULL,
  `status` varchar(30) NOT NULL,
  `jml_saham` char(11) NOT NULL,
  `persen` char(8) NOT NULL,
  `kode` char(7) DEFAULT NULL,
  `absen` char(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tm_investor` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
