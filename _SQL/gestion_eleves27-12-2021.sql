# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.26)
# Database: gestion_eleves
# Generation Time: 2021-12-27 07:49:14 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table formations
# ------------------------------------------------------------

CREATE TABLE `formations` (
  `idformation` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `status` enum('on','off') NOT NULL DEFAULT 'on',
  PRIMARY KEY (`idformation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `formations` WRITE;
/*!40000 ALTER TABLE `formations` DISABLE KEYS */;

INSERT INTO `formations` (`idformation`, `create_date`, `update_date`, `title`, `status`)
VALUES
	(1,'2021-12-22 00:00:00','2021-12-22 00:00:00','Développeur','on'),
	(2,'2021-12-22 00:00:00','2021-12-22 00:00:00','Graphiste','on');

/*!40000 ALTER TABLE `formations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table nationalities
# ------------------------------------------------------------

CREATE TABLE `nationalities` (
  `idnationality` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` char(3) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `status` enum('on','off') NOT NULL DEFAULT 'on',
  PRIMARY KEY (`idnationality`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `nationalities` WRITE;
/*!40000 ALTER TABLE `nationalities` DISABLE KEYS */;

INSERT INTO `nationalities` (`idnationality`, `code`, `title`, `status`)
VALUES
	(1,'fr','Francaise','on');

/*!40000 ALTER TABLE `nationalities` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table rooms
# ------------------------------------------------------------

CREATE TABLE `rooms` (
  `idroom` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `number` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) DEFAULT NULL,
  `status` enum('on','off') NOT NULL DEFAULT 'on',
  PRIMARY KEY (`idroom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table students
# ------------------------------------------------------------

CREATE TABLE `students` (
  `idstudent` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `firstname` varchar(255) NOT NULL DEFAULT '',
  `lastname` varchar(255) NOT NULL DEFAULT '',
  `idnationality` int(10) NOT NULL,
  `idformation` int(10) DEFAULT NULL,
  `status` enum('on','off') NOT NULL DEFAULT 'on',
  PRIMARY KEY (`idstudent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;

INSERT INTO `students` (`idstudent`, `create_date`, `update_date`, `firstname`, `lastname`, `idnationality`, `idformation`, `status`)
VALUES
	(1,'2021-12-21 00:00:00','2021-12-21 00:00:00','Morgan','Jacquet',1,1,'on');

/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table students_formations
# ------------------------------------------------------------

CREATE TABLE `students_formations` (
  `idstudent_formation` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `idstudent` int(10) NOT NULL,
  `idteacher_formation` int(10) NOT NULL,
  `status` enum('on','off') NOT NULL DEFAULT 'on',
  PRIMARY KEY (`idstudent_formation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table teachers
# ------------------------------------------------------------

CREATE TABLE `teachers` (
  `idteacher` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `firstname` varchar(255) NOT NULL DEFAULT '',
  `lastname` varchar(255) DEFAULT NULL,
  `idnationality` int(10) NOT NULL,
  `status` enum('on','off') NOT NULL DEFAULT 'on',
  PRIMARY KEY (`idteacher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table teachers_formations
# ------------------------------------------------------------

CREATE TABLE `teachers_formations` (
  `idteacher_formation` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `formation_start` datetime NOT NULL,
  `formation_end` datetime NOT NULL,
  `idteacher` int(10) NOT NULL,
  `idformation` int(10) NOT NULL,
  `idroom` int(10) NOT NULL,
  `status` enum('on','off') NOT NULL DEFAULT 'on',
  PRIMARY KEY (`idteacher_formation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
