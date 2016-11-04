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

-- Volcando datos para la tabla db_sample_test.person: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `person` DISABLE KEYS */;
INSERT INTO `person` (`ID_PERSON`, `NAME`, `LASTNAME`, `BIRTHDATE`, `CITY`) VALUES
	(1, 'Alberto', 'Mendoza', '1990-11-03', 'Barcelona'),
	(2, 'Jaime', 'Llaume', '1980-10-04', 'Barcelona'),
	(3, 'Nicoleta', 'Sanchez', '1965-07-20', 'Madrid'),
	(4, 'Ricardo', 'Megildo', '1995-05-16', 'Valencia'),
	(5, 'Cecilia', 'Soto', '1992-06-15', 'Vigo'),
	(6, 'Monica', 'Sevilla', '1991-08-22', 'Tarragona'),
	(7, 'Jordi', 'Matos', '1984-01-23', 'Segovia'),
	(8, 'Tomas', 'Muller', '1978-03-13', 'Vitoria'),
	(9, 'Mateo', 'Neyra', '1979-04-08', 'Leon'),
	(10, 'Cristina', 'Rengifo', '1986-11-05', 'Ibiza');
/*!40000 ALTER TABLE `person` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
