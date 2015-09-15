/*
SQLyog Community Edition- MySQL GUI v8.05 
MySQL - 5.6.14 : Database - tallerguerrero
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`tallerguerrero` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tallerguerrero`;

/*Table structure for table `contactos` */

DROP TABLE IF EXISTS `contactos`;

CREATE TABLE `contactos` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `comentario` text,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `contactos` */

insert  into `contactos`(`id`,`nombre`,`comentario`,`correo`,`telefono`) values (4,'javier','buen servicio','jesusj_sanchez@hotmail.com','9865040');

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` tinytext NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `posts` */

insert  into `posts`(`id`,`nombre`,`descripcion`,`precio`,`imagen`,`status`) values (2,'soldadura12','es una buena soldadura\r\n',30.5,'../img/taller2.jpg','soldadura'),(3,'torno','buen torno',12.5,'../img/taller1.jpg','torno'),(4,'herreria','buen herreria',10.5,'../img/taller3.jpg','herreria');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
