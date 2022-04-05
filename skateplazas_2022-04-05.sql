# ************************************************************
# Sequel Ace SQL dump
# Version 20031
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.7.3-MariaDB-1:10.7.3+maria~focal)
# Database: skateplazas
# Generation Time: 2022-04-05 13:45:32 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table skateplazas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `skateplazas`;

CREATE TABLE `skateplazas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `dob` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `vibe` int(1) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `skateplazas` WRITE;
/*!40000 ALTER TABLE `skateplazas` DISABLE KEYS */;

INSERT INTO `skateplazas` (`id`, `name`, `country`, `city`, `dob`, `status`, `vibe`, `photo`)
VALUES
	(1,'Lloyds','UK','Bristol',1990,1,3,'lloyds.jpeg'),
	(2,'MACBA','Spain','Barcelona',1995,1,5,'macba.jpeg'),
	(3,'LP','China','Shanghai',2003,0,4,'lp.jpeg'),
	(4,'Love Park','USA','Philadelphia',1964,0,2,'love_park.jpeg'),
	(5,'Vale Anhangabau','Brazil','Sao Paulo',1980,1,2,'vale_anhangabau.jpeg'),
	(6,'Stalin Square','Czech Republic','Prague',1979,0,2,'staling_square.jpeg');

/*!40000 ALTER TABLE `skateplazas` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
