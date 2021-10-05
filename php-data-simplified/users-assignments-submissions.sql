# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.7.32)
# Database: anly575take2
# Generation Time: 2021-10-05 17:27:13 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table assignments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `assignments`;

CREATE TABLE `assignments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `deadline` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `assignments` WRITE;
/*!40000 ALTER TABLE `assignments` DISABLE KEYS */;

INSERT INTO `assignments` (`id`, `name`, `description`, `deadline`)
VALUES
	(1,'Compose an original opera','Write all parts for a 5-hour opera, prominently featuring bassoons, children, and kites.','2021-10-01 08:00:00'),
	(2,'Write a proposal for world peace','Write a comprehensive plan for how to eliminate war, arguments, and all bad feelings, while increasing joy in everyone\'s hearts.','2021-10-01 08:00:00');

/*!40000 ALTER TABLE `assignments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table submissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `submissions`;

CREATE TABLE `submissions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(3) DEFAULT NULL,
  `assignment_id` int(3) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `grade` double(11,1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `submissions` WRITE;
/*!40000 ALTER TABLE `submissions` DISABLE KEYS */;

INSERT INTO `submissions` (`id`, `user_id`, `assignment_id`, `datetime`, `grade`)
VALUES
	(1,2,1,'2021-09-28 09:00:00',3.0),
	(2,1,2,'2021-09-28 10:00:00',2.3),
	(3,2,2,'2021-12-01 01:00:00',NULL),
	(4,3,1,'2021-12-01 01:00:00',4.0);

/*!40000 ALTER TABLE `submissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`)
VALUES
	(1,'Paul','Bohman','pb924@georgetown.edu'),
	(2,'Paul','Bunyan','paulbunyan@whatever.com'),
	(3,'Maria','von Trapp','maria@soundofmusic.com');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
