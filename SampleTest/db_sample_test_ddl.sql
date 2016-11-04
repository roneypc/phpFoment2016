-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.16-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para db_sample_test
CREATE DATABASE IF NOT EXISTS `db_sample_test` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_sample_test`;

-- Volcando estructura para tabla db_sample_test.person
CREATE TABLE IF NOT EXISTS `person` (
  `ID_PERSON` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) NOT NULL,
  `LASTNAME` varchar(50) NOT NULL,
  `BIRTHDATE` date NOT NULL,
  `CITY` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_PERSON`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
