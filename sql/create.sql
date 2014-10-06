-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.20 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             8.3.0.4796
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para mibasededatos
CREATE DATABASE IF NOT EXISTS `mibasededatos` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mibasededatos`;


-- Volcando estructura para tabla mibasededatos.departamento
CREATE TABLE IF NOT EXISTS `departamento` (
  `idlocalidad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  `provincia_id` int(11) NOT NULL,
  PRIMARY KEY (`idlocalidad`),
  KEY `fk_departamento_provincia1_idx` (`provincia_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla mibasededatos.departamento: 0 rows
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` (`idlocalidad`, `nombre`, `provincia_id`) VALUES
	(1, 'Godoy Cruz', 0),
	(2, 'Guaymallén', 0),
	(3, 'Las Heras', 0);
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;


-- Volcando estructura para tabla mibasededatos.direccion
CREATE TABLE IF NOT EXISTS `direccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `calle` varchar(45) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `piso` int(11) DEFAULT NULL,
  `depto` varchar(5) DEFAULT NULL,
  `persona_id` int(10) unsigned NOT NULL,
  `departamento_idlocalidad` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_direccion_persona_idx` (`persona_id`),
  KEY `fk_direccion_departamento1_idx` (`departamento_idlocalidad`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla mibasededatos.direccion: 0 rows
/*!40000 ALTER TABLE `direccion` DISABLE KEYS */;
INSERT INTO `direccion` (`id`, `calle`, `numero`, `piso`, `depto`, `persona_id`, `departamento_idlocalidad`) VALUES
	(1, 'San MArtín', 1131, 1, 'B', 0, 0);
/*!40000 ALTER TABLE `direccion` ENABLE KEYS */;


-- Volcando estructura para tabla mibasededatos.persona
CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `apellido` varchar(150) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `dni` int(11) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `creado` datetime DEFAULT NULL,
  `biografia` text,
  `vive` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dni_UNIQUE` (`dni`),
  KEY `apenom` (`apellido`,`nombre`),
  KEY `fecha` (`fecha_nacimiento`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla mibasededatos.persona: 0 rows
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` (`id`, `apellido`, `nombre`, `dni`, `fecha_nacimiento`, `creado`, `biografia`, `vive`) VALUES
	(1, 'Simpson', 'Homero', 12123123, '2014-10-06', '2014-10-06 10:45:46', 'askda kagd asdga dhags dgd agda shdg', 1);
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;


-- Volcando estructura para tabla mibasededatos.provincia
CREATE TABLE IF NOT EXISTS `provincia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla mibasededatos.provincia: 0 rows
/*!40000 ALTER TABLE `provincia` DISABLE KEYS */;
INSERT INTO `provincia` (`id`, `nombre`) VALUES
	(5, 'Mendoza'),
	(6, 'San Juan'),
	(7, 'Córdoba');
/*!40000 ALTER TABLE `provincia` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
