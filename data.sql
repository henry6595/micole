-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.13-log - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para fvzihtls_mc_andresbello
DROP DATABASE IF EXISTS `fvzihtls_mc_andresbello`;
CREATE DATABASE IF NOT EXISTS `fvzihtls_mc_andresbello` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `fvzihtls_mc_andresbello`;

-- Volcando estructura para tabla fvzihtls_mc_andresbello.asistencia
DROP TABLE IF EXISTS `asistencia`;
CREATE TABLE IF NOT EXISTS `asistencia` (
  `indice` int(11) NOT NULL AUTO_INCREMENT,
  `alumno` varchar(120) NOT NULL DEFAULT '0',
  `asistencia` varchar(50) NOT NULL DEFAULT '5',
  `grado` int(11) NOT NULL DEFAULT '0',
  `mes` int(2) NOT NULL DEFAULT '0',
  `fecha` date NOT NULL,
  `dni_user` int(11) DEFAULT NULL,
  `dni_estudiante` int(11) DEFAULT NULL,
  PRIMARY KEY (`indice`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla fvzihtls_mc_andresbello.asistencia: ~9 rows (aproximadamente)
DELETE FROM `asistencia`;
/*!40000 ALTER TABLE `asistencia` DISABLE KEYS */;
INSERT INTO `asistencia` (`indice`, `alumno`, `asistencia`, `grado`, `mes`, `fecha`, `dni_user`, `dni_estudiante`) VALUES
	(127, 'GANOZA DAVILA  ALEXIS EDGARDO', 'ASISTIO', 16, 2, '2019-02-03', 72754438, 12345697),
	(128, 'FUERTES LUICHO  MELANY LADY', 'ASISTIO', 16, 2, '2019-02-03', 72754438, 12345696),
	(129, 'CASTILLO CAMPOS  ROSMERY JAYAIRA', 'ASISTIO', 16, 2, '2019-02-03', 72754438, 12345695),
	(130, 'CARRION MENCIA  MAYRA ELENA', 'ASISTIO', 16, 2, '2019-02-03', 72754438, 12345694),
	(131, 'CARRANZA ASENCIOS  DEBORA RAQUEL', 'ASISTIO', 16, 2, '2019-02-03', 72754438, 12345693),
	(132, 'CARLOS BAYONA  KARLA SOFIA', 'ASISTIO', 16, 2, '2019-02-03', 72754438, 12345692),
	(133, 'AYALA LOPEZ  BREDSSON MIGUEL', 'ASISTIO', 16, 2, '2019-02-03', 72754438, 12345691),
	(134, 'AVALO CHAFLOQUE  LEILA FERNANDA', 'ASISTIO', 16, 2, '2019-02-03', 72754438, 12345690),
	(135, 'ARI CORONADO  BREIDY BRISCELA', 'NOASISTIO', 16, 2, '2019-02-03', 72754438, 12345689);
/*!40000 ALTER TABLE `asistencia` ENABLE KEYS */;

-- Volcando estructura para procedimiento fvzihtls_mc_andresbello.asistencia_delete
DROP PROCEDURE IF EXISTS `asistencia_delete`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `asistencia_delete`(
	IN `fecha_o` DATE


)
BEGIN

delete from asistencia where fecha=fecha_o;

delete from asistencia_r where fecha=fecha_o;
END//
DELIMITER ;

-- Volcando estructura para tabla fvzihtls_mc_andresbello.asistencia_r
DROP TABLE IF EXISTS `asistencia_r`;
CREATE TABLE IF NOT EXISTS `asistencia_r` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grado` int(11) DEFAULT NULL,
  `mes` int(2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla fvzihtls_mc_andresbello.asistencia_r: ~1 rows (aproximadamente)
DELETE FROM `asistencia_r`;
/*!40000 ALTER TABLE `asistencia_r` DISABLE KEYS */;
INSERT INTO `asistencia_r` (`id`, `grado`, `mes`, `fecha`) VALUES
	(15, 16, 2, '2019-02-03');
/*!40000 ALTER TABLE `asistencia_r` ENABLE KEYS */;

-- Volcando estructura para tabla fvzihtls_mc_andresbello.calificaciones
DROP TABLE IF EXISTS `calificaciones`;
CREATE TABLE IF NOT EXISTS `calificaciones` (
  `indice` int(11) NOT NULL AUTO_INCREMENT,
  `alumno` varchar(120) NOT NULL DEFAULT '0',
  `nota` int(11) NOT NULL DEFAULT '5',
  `curso` varchar(120) NOT NULL DEFAULT '0',
  `grado` int(11) NOT NULL DEFAULT '0',
  `descripcion` varchar(300) NOT NULL DEFAULT '0',
  `tipo` varchar(50) NOT NULL DEFAULT '0',
  `fecha` date DEFAULT NULL,
  `dni_user` int(11) DEFAULT NULL,
  `dni_estudiante` int(11) DEFAULT NULL,
  PRIMARY KEY (`indice`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla fvzihtls_mc_andresbello.calificaciones: ~97 rows (aproximadamente)
DELETE FROM `calificaciones`;
/*!40000 ALTER TABLE `calificaciones` DISABLE KEYS */;
INSERT INTO `calificaciones` (`indice`, `alumno`, `nota`, `curso`, `grado`, `descripcion`, `tipo`, `fecha`, `dni_user`, `dni_estudiante`) VALUES
	(1, 'GANOZA DAVILA  ALEXIS EDGARDO', 11, 'geometria', 16, 'ángulos notables', 'practica', '2019-02-02', 72754438, 12345697),
	(2, 'FUERTES LUICHO  MELANY LADY', 12, 'geometria', 16, 'ángulos notables', 'practica', '2019-02-02', 72754438, 12345696),
	(3, 'CASTILLO CAMPOS  ROSMERY JAYAIRA', 9, 'geometria', 16, 'ángulos notables', 'practica', '2019-02-02', 72754438, 12345695),
	(4, 'CARRION MENCIA  MAYRA ELENA', 11, 'geometria', 16, 'ángulos notables', 'practica', '2019-02-02', 72754438, 12345694),
	(5, 'CARRANZA ASENCIOS  DEBORA RAQUEL', 12, 'geometria', 16, 'ángulos notables', 'practica', '2019-02-02', 72754438, 12345693),
	(6, 'CARLOS BAYONA  KARLA SOFIA', 12, 'geometria', 16, 'ángulos notables', 'practica', '2019-02-02', 72754438, 12345692),
	(7, 'AYALA LOPEZ  BREDSSON MIGUEL', 12, 'geometria', 16, 'ángulos notables', 'practica', '2019-02-02', 72754438, 12345691),
	(8, 'AVALO CHAFLOQUE  LEILA FERNANDA', 11, 'geometria', 16, 'ángulos notables', 'practica', '2019-02-02', 72754438, 12345690),
	(9, 'ARI CORONADO  BREIDY BRISCELA', 12, 'geometria', 16, 'ángulos notables', 'practica', '2019-02-02', 72754438, 12345689),
	(10, 'GANOZA DAVILA  ALEXIS EDGARDO', 19, 'algebra', 16, 'examen bimestral de álgebra', 'examen', '2019-02-02', 72754438, 12345697),
	(11, 'FUERTES LUICHO  MELANY LADY', 13, 'algebra', 16, 'examen bimestral de álgebra', 'examen', '2019-02-02', 72754438, 12345696),
	(12, 'CASTILLO CAMPOS  ROSMERY JAYAIRA', 12, 'algebra', 16, 'examen bimestral de álgebra', 'examen', '2019-02-02', 72754438, 12345695),
	(13, 'CARRION MENCIA  MAYRA ELENA', 13, 'algebra', 16, 'examen bimestral de álgebra', 'examen', '2019-02-02', 72754438, 12345694),
	(14, 'CARRANZA ASENCIOS  DEBORA RAQUEL', 13, 'algebra', 16, 'examen bimestral de álgebra', 'examen', '2019-02-02', 72754438, 12345693),
	(15, 'CARLOS BAYONA  KARLA SOFIA', 12, 'algebra', 16, 'examen bimestral de álgebra', 'examen', '2019-02-02', 72754438, 12345692),
	(16, 'AYALA LOPEZ  BREDSSON MIGUEL', 11, 'algebra', 16, 'examen bimestral de álgebra', 'examen', '2019-02-02', 72754438, 12345691),
	(17, 'AVALO CHAFLOQUE  LEILA FERNANDA', 12, 'algebra', 16, 'examen bimestral de álgebra', 'examen', '2019-02-02', 72754438, 12345690),
	(18, 'ARI CORONADO  BREIDY BRISCELA', 11, 'algebra', 16, 'examen bimestral de álgebra', 'examen', '2019-02-02', 72754438, 12345689),
	(19, 'GANOZA DAVILA  ALEXIS EDGARDO', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345697),
	(20, 'FUERTES LUICHO  MELANY LADY', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345696),
	(21, 'CASTILLO CAMPOS  ROSMERY JAYAIRA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345695),
	(22, 'CARRION MENCIA  MAYRA ELENA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345694),
	(23, 'CARRANZA ASENCIOS  DEBORA RAQUEL', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345693),
	(24, 'CARLOS BAYONA  KARLA SOFIA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345692),
	(25, 'AYALA LOPEZ  BREDSSON MIGUEL', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345691),
	(26, 'AVALO CHAFLOQUE  LEILA FERNANDA', 12, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345690),
	(27, 'ARI CORONADO  BREIDY BRISCELA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345689),
	(28, 'GANOZA DAVILA  ALEXIS EDGARDO', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345697),
	(29, 'FUERTES LUICHO  MELANY LADY', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345696),
	(30, 'CASTILLO CAMPOS  ROSMERY JAYAIRA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345695),
	(31, 'CARRION MENCIA  MAYRA ELENA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345694),
	(32, 'CARRANZA ASENCIOS  DEBORA RAQUEL', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345693),
	(33, 'CARLOS BAYONA  KARLA SOFIA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345692),
	(34, 'AYALA LOPEZ  BREDSSON MIGUEL', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345691),
	(35, 'AVALO CHAFLOQUE  LEILA FERNANDA', 12, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345690),
	(36, 'ARI CORONADO  BREIDY BRISCELA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345689),
	(37, 'GANOZA DAVILA  ALEXIS EDGARDO', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345697),
	(38, 'FUERTES LUICHO  MELANY LADY', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345696),
	(39, 'CASTILLO CAMPOS  ROSMERY JAYAIRA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345695),
	(40, 'CARRION MENCIA  MAYRA ELENA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345694),
	(41, 'CARRANZA ASENCIOS  DEBORA RAQUEL', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345693),
	(42, 'CARLOS BAYONA  KARLA SOFIA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345692),
	(43, 'AYALA LOPEZ  BREDSSON MIGUEL', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345691),
	(44, 'AVALO CHAFLOQUE  LEILA FERNANDA', 12, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345690),
	(45, 'ARI CORONADO  BREIDY BRISCELA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345689),
	(46, 'GANOZA DAVILA  ALEXIS EDGARDO', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345697),
	(47, 'FUERTES LUICHO  MELANY LADY', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345696),
	(48, 'CASTILLO CAMPOS  ROSMERY JAYAIRA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345695),
	(49, 'CARRION MENCIA  MAYRA ELENA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345694),
	(50, 'CARRANZA ASENCIOS  DEBORA RAQUEL', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345693),
	(51, 'CARLOS BAYONA  KARLA SOFIA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345692),
	(52, 'AYALA LOPEZ  BREDSSON MIGUEL', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345691),
	(53, 'AVALO CHAFLOQUE  LEILA FERNANDA', 12, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345690),
	(54, 'ARI CORONADO  BREIDY BRISCELA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345689),
	(55, 'GANOZA DAVILA  ALEXIS EDGARDO', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345697),
	(56, 'FUERTES LUICHO  MELANY LADY', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345696),
	(57, 'CASTILLO CAMPOS  ROSMERY JAYAIRA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345695),
	(58, 'CARRION MENCIA  MAYRA ELENA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345694),
	(59, 'CARRANZA ASENCIOS  DEBORA RAQUEL', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345693),
	(60, 'CARLOS BAYONA  KARLA SOFIA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345692),
	(61, 'AYALA LOPEZ  BREDSSON MIGUEL', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345691),
	(62, 'AVALO CHAFLOQUE  LEILA FERNANDA', 12, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345690),
	(63, 'ARI CORONADO  BREIDY BRISCELA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345689),
	(64, 'GANOZA DAVILA  ALEXIS EDGARDO', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345697),
	(65, 'FUERTES LUICHO  MELANY LADY', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345696),
	(66, 'CASTILLO CAMPOS  ROSMERY JAYAIRA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345695),
	(67, 'CARRION MENCIA  MAYRA ELENA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345694),
	(68, 'CARRANZA ASENCIOS  DEBORA RAQUEL', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345693),
	(69, 'CARLOS BAYONA  KARLA SOFIA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345692),
	(70, 'AYALA LOPEZ  BREDSSON MIGUEL', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345691),
	(71, 'AVALO CHAFLOQUE  LEILA FERNANDA', 12, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345690),
	(72, 'ARI CORONADO  BREIDY BRISCELA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345689),
	(73, 'GANOZA DAVILA  ALEXIS EDGARDO', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345697),
	(74, 'FUERTES LUICHO  MELANY LADY', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345696),
	(75, 'CASTILLO CAMPOS  ROSMERY JAYAIRA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345695),
	(76, 'CARRION MENCIA  MAYRA ELENA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345694),
	(77, 'CARRANZA ASENCIOS  DEBORA RAQUEL', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345693),
	(78, 'CARLOS BAYONA  KARLA SOFIA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345692),
	(79, 'AYALA LOPEZ  BREDSSON MIGUEL', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345691),
	(80, 'AVALO CHAFLOQUE  LEILA FERNANDA', 12, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345690),
	(81, 'ARI CORONADO  BREIDY BRISCELA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345689),
	(82, 'GANOZA DAVILA  ALEXIS EDGARDO', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345697),
	(83, 'FUERTES LUICHO  MELANY LADY', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345696),
	(84, 'CASTILLO CAMPOS  ROSMERY JAYAIRA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345695),
	(85, 'CARRION MENCIA  MAYRA ELENA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345694),
	(86, 'CARRANZA ASENCIOS  DEBORA RAQUEL', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345693),
	(87, 'CARLOS BAYONA  KARLA SOFIA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345692),
	(88, 'AYALA LOPEZ  BREDSSON MIGUEL', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345691),
	(89, 'AVALO CHAFLOQUE  LEILA FERNANDA', 12, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345690),
	(90, 'ARI CORONADO  BREIDY BRISCELA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345689),
	(91, 'GANOZA DAVILA  ALEXIS EDGARDO', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345697),
	(92, 'FUERTES LUICHO  MELANY LADY', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345696),
	(93, 'CASTILLO CAMPOS  ROSMERY JAYAIRA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345695),
	(94, 'CARRION MENCIA  MAYRA ELENA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345694),
	(95, 'CARRANZA ASENCIOS  DEBORA RAQUEL', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345693),
	(96, 'CARLOS BAYONA  KARLA SOFIA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345692),
	(97, 'AYALA LOPEZ  BREDSSON MIGUEL', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345691),
	(98, 'AVALO CHAFLOQUE  LEILA FERNANDA', 12, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345690),
	(99, 'ARI CORONADO  BREIDY BRISCELA', 11, 'algebra', 16, 'prueba', 'examen', '2019-02-03', 72754438, 12345689);
/*!40000 ALTER TABLE `calificaciones` ENABLE KEYS */;

-- Volcando estructura para tabla fvzihtls_mc_andresbello.calificaciones_r
DROP TABLE IF EXISTS `calificaciones_r`;
CREATE TABLE IF NOT EXISTS `calificaciones_r` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `curso` varchar(50) DEFAULT NULL,
  `grado` int(11) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla fvzihtls_mc_andresbello.calificaciones_r: ~11 rows (aproximadamente)
DELETE FROM `calificaciones_r`;
/*!40000 ALTER TABLE `calificaciones_r` DISABLE KEYS */;
INSERT INTO `calificaciones_r` (`id`, `curso`, `grado`, `tipo`, `dni`, `fecha`) VALUES
	(1, 'geometria', 16, 'practica', 72754438, '2019-02-02'),
	(2, 'algebra', 16, 'examen', 72754438, '2019-02-02'),
	(3, 'algebra', 16, 'examen', 72754438, '2019-02-03'),
	(4, 'algebra', 16, 'examen', 72754438, '2019-02-03'),
	(5, 'algebra', 16, 'examen', 72754438, '2019-02-03'),
	(6, 'algebra', 16, 'examen', 72754438, '2019-02-03'),
	(7, 'algebra', 16, 'examen', 72754438, '2019-02-03'),
	(8, 'algebra', 16, 'examen', 72754438, '2019-02-03'),
	(9, 'algebra', 16, 'examen', 72754438, '2019-02-03'),
	(10, 'algebra', 16, 'examen', 72754438, '2019-02-03'),
	(11, 'algebra', 16, 'examen', 72754438, '2019-02-03');
/*!40000 ALTER TABLE `calificaciones_r` ENABLE KEYS */;

-- Volcando estructura para tabla fvzihtls_mc_andresbello.conducta
DROP TABLE IF EXISTS `conducta`;
CREATE TABLE IF NOT EXISTS `conducta` (
  `indice` int(11) NOT NULL AUTO_INCREMENT,
  `alumno` varchar(120) NOT NULL DEFAULT '0',
  `nota` int(11) NOT NULL DEFAULT '5',
  `grado` int(11) NOT NULL DEFAULT '0',
  `justificacion` varchar(300) DEFAULT '0',
  `periodo` varchar(300) NOT NULL DEFAULT '0',
  `fecha` date DEFAULT NULL,
  `dni_user` int(11) DEFAULT NULL,
  `dni_estudiantes` int(11) DEFAULT NULL,
  PRIMARY KEY (`indice`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla fvzihtls_mc_andresbello.conducta: ~9 rows (aproximadamente)
DELETE FROM `conducta`;
/*!40000 ALTER TABLE `conducta` DISABLE KEYS */;
INSERT INTO `conducta` (`indice`, `alumno`, `nota`, `grado`, `justificacion`, `periodo`, `fecha`, `dni_user`, `dni_estudiantes`) VALUES
	(1, 'GANOZA DAVILA  ALEXIS EDGARDO', 12, 16, 'falta muy seguido a clases', 'Primer Bimestre', '2019-02-02', 72754438, 12345697),
	(2, 'FUERTES LUICHO  MELANY LADY', 18, 16, '', 'Primer Bimestre', '2019-02-02', 72754438, 12345696),
	(3, 'CASTILLO CAMPOS  ROSMERY JAYAIRA', 18, 16, '', 'Primer Bimestre', '2019-02-02', 72754438, 12345695),
	(4, 'CARRION MENCIA  MAYRA ELENA', 18, 16, '', 'Primer Bimestre', '2019-02-02', 72754438, 12345694),
	(5, 'CARRANZA ASENCIOS  DEBORA RAQUEL', 18, 16, '', 'Primer Bimestre', '2019-02-02', 72754438, 12345693),
	(6, 'CARLOS BAYONA  KARLA SOFIA', 18, 16, '', 'Primer Bimestre', '2019-02-02', 72754438, 12345692),
	(7, 'AYALA LOPEZ  BREDSSON MIGUEL', 18, 16, '', 'Primer Bimestre', '2019-02-02', 72754438, 12345691),
	(8, 'AVALO CHAFLOQUE  LEILA FERNANDA', 10, 16, 'el alumno responde a sus profesores de mala gana', 'Primer Bimestre', '2019-02-02', 72754438, 12345690),
	(9, 'ARI CORONADO  BREIDY BRISCELA', 12, 16, 'el alumno tiene mal comportamiento', 'Primer Bimestre', '2019-02-02', 72754438, 12345689);
/*!40000 ALTER TABLE `conducta` ENABLE KEYS */;

-- Volcando estructura para tabla fvzihtls_mc_andresbello.cursos
DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `indice` int(11) NOT NULL AUTO_INCREMENT,
  `curso` varchar(50) DEFAULT '0',
  `descripcion` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`indice`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla fvzihtls_mc_andresbello.cursos: ~4 rows (aproximadamente)
DELETE FROM `cursos`;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` (`indice`, `curso`, `descripcion`) VALUES
	(1, 'aritmetica', 'matematica1'),
	(2, 'geometria', 'matematica1'),
	(3, 'trigonometria', 'matematica1'),
	(4, 'algebra', 'matemática1');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;

-- Volcando estructura para tabla fvzihtls_mc_andresbello.dia
DROP TABLE IF EXISTS `dia`;
CREATE TABLE IF NOT EXISTS `dia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla fvzihtls_mc_andresbello.dia: ~5 rows (aproximadamente)
DELETE FROM `dia`;
/*!40000 ALTER TABLE `dia` DISABLE KEYS */;
INSERT INTO `dia` (`id`, `descripcion`) VALUES
	(1, 'Lunes'),
	(2, 'Martes'),
	(3, 'Miercoles'),
	(4, 'Jueves'),
	(5, 'Viernes');
/*!40000 ALTER TABLE `dia` ENABLE KEYS */;

-- Volcando estructura para procedimiento fvzihtls_mc_andresbello.editUser
DROP PROCEDURE IF EXISTS `editUser`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `editUser`(
	IN `userId` VARCHAR(255),
	IN `nombres` VARCHAR(255),
	IN `apellidos` VARCHAR(255),
	IN `dni` VARCHAR(255),
	IN `celular` VARCHAR(255) ,
	IN `telefono` VARCHAR(255),
	IN `direccion` VARCHAR(255),
	IN `correo` VARCHAR(255),
    IN `status` INT(10),
    IN `rol` INT(10)
)
BEGIN
UPDATE login SET nombres=nombres, apellidos=apellidos, dni=dni, celular=celular, telefono=telefono, direccion=direccion,
email=correo,situacion=status, rol=rol
 WHERE id = userId;

END//
DELIMITER ;

-- Volcando estructura para procedimiento fvzihtls_mc_andresbello.editUser_estudiante
DROP PROCEDURE IF EXISTS `editUser_estudiante`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `editUser_estudiante`(
	IN `userId` VARCHAR(255),
	IN `nombres` VARCHAR(255),
	IN `apellidos` VARCHAR(255),
	IN `dni` int(255),
	IN `celular` VARCHAR(255) ,
	IN `telefono` VARCHAR(255),
	IN `direccion` VARCHAR(255),
	IN `correo` VARCHAR(255),
	IN `status` INT(10),
	IN `rol` INT(10),
	IN `grado` INT(10),
	IN `seccion` INT(10)



)
BEGIN
UPDATE login SET nombres=nombres, apellidos=apellidos, dni=dni, celular=celular, telefono=telefono, direccion=direccion,
email=correo,situacion=status, rol=rol
 WHERE id = userId;
 
 UPDATE estudiantes SET nombres = nombres,apellidos=apellidos,estado=status, grado=grado, seccion=seccion
 WHERE dni = dni;

END//
DELIMITER ;

-- Volcando estructura para tabla fvzihtls_mc_andresbello.estudiantes
DROP TABLE IF EXISTS `estudiantes`;
CREATE TABLE IF NOT EXISTS `estudiantes` (
  `dni` int(8) NOT NULL,
  `nombres` varchar(80) DEFAULT NULL,
  `apellidos` varchar(80) DEFAULT NULL,
  `grado` int(2) DEFAULT NULL,
  `seccion` int(1) DEFAULT NULL,
  `estado` int(11) DEFAULT '1',
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla fvzihtls_mc_andresbello.estudiantes: ~62 rows (aproximadamente)
DELETE FROM `estudiantes`;
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
INSERT INTO `estudiantes` (`dni`, `nombres`, `apellidos`, `grado`, `seccion`, `estado`) VALUES
	(10001001, 'JUANA', 'LA SALLE', 15, 2, 1),
	(10001002, 'LUIS', 'CHACóN', 15, 1, 1),
	(10001003, 'MARCELO', 'RODRIGUEZ', 15, 1, 1),
	(10001005, 'MARCO ', 'AURELIO', 21, 1, 1),
	(12345689, ' BREIDY BRISCELA', 'ARI CORONADO', 16, 1, 1),
	(12345690, ' LEILA FERNANDA', 'AVALO CHAFLOQUE', 16, 1, 1),
	(12345691, ' BREDSSON MIGUEL', 'AYALA LOPEZ', 16, 1, 1),
	(12345692, ' KARLA SOFIA', 'CARLOS BAYONA', 16, 1, 1),
	(12345693, ' DEBORA RAQUEL', 'CARRANZA ASENCIOS', 16, 1, 1),
	(12345694, ' MAYRA ELENA', 'CARRION MENCIA', 16, 1, 1),
	(12345695, ' ROSMERY JAYAIRA', 'CASTILLO CAMPOS', 16, 1, 1),
	(12345696, ' MELANY LADY', 'FUERTES LUICHO', 16, 1, 1),
	(12345697, ' ALEXIS EDGARDO', 'GANOZA DAVILA', 16, 1, 1),
	(12345698, ' LUCYANNE PATRIZIA', 'GONZALES TEMOCHE', 21, 1, 1),
	(12345699, ' ANGELA ESKARLET', 'GRADOS HUARCA', 21, 1, 1),
	(12345700, ' JOSUE ISMAEL', 'LEVANO TARRILLO', 21, 1, 1),
	(12345701, ' CARLOS DANIEL EDUARDO', 'LOPEZ CAMPOS', 21, 1, 1),
	(12345702, ' RUTH ESTHER', 'MALLQUI SANTILLAN', 21, 1, 1),
	(12345703, ' IVONNE INES', 'MURGA SONCO', 21, 1, 1),
	(12345704, ' BRAAYAN MAX', 'QUEVEDO RAMIREZ', 21, 1, 1),
	(12345705, ' VALERIA', 'QUICENO GARCIA', 21, 1, 1),
	(12345706, ' TICCIANA FLOR ALELI', 'REATEGUI TERRONES', 21, 1, 1),
	(12345707, ' THELSY VANESSA', 'SOLANO SANCHEZ', 22, 1, 1),
	(12345708, ' FABIAN HEBER', 'TANTARUNA ACOSTA', 22, 1, 1),
	(12345709, ' DIEGO ALONSO', 'VASQUEZ VILCHEZ', 22, 1, 1),
	(12345710, ' ALEJANDRA CELESTE', 'VENTURA TALAVERANO', 22, 1, 1),
	(12345711, ' ALEXIS MAURO', 'VILLAFAN VERGARA', 22, 1, 1),
	(12345712, ' YASUMI YURICO', 'YATACO SAQUICURAY', 22, 1, 1),
	(12345713, ' BRAYAN LEONET', 'ZAMBRANO RODRIGUEZ', 22, 1, 1),
	(12345714, ' DAVID DANIEL', 'ALBERTO LOZANO', 22, 1, 1),
	(12345715, ' FRANCESCO ALEXANDER', 'ALEJOS HARO', 22, 1, 1),
	(12345716, ' FRANCISCO JAVIER', 'AYALA RODRIGUEZ', 23, 1, 1),
	(12345717, ' RENZO SHIRO MANUEL', 'BORDA SANGAMA', 23, 1, 1),
	(12345718, ' MATTHIAS', 'CALDAS HERNANDEZ', 23, 1, 1),
	(12345719, ' JONAS ISAMEL', 'CALLATA NEYRA', 23, 1, 1),
	(12345720, ' NAOMI ELIANA', 'CASTANEDA MORALES', 23, 1, 1),
	(12345721, ' JESUS ANTONY', 'FIGUEROA SILVESTRE', 23, 1, 1),
	(12345722, ' ANGELO FABIAN', 'GARCIA CASTILLO', 24, 1, 1),
	(12345723, ' DIEGO FERNANDO', 'GUERRA SANCHEZ', 24, 1, 1),
	(12345724, ' YANIRA MARGARITA', 'HERNANDEZ FUENTES', 24, 1, 1),
	(12345725, ' BRENDA JASMIN', 'HIDALGO DEL RIO', 24, 1, 1),
	(12345726, ' ANDY JUNIOR', 'INGA CISNEROS', 24, 1, 1),
	(12345727, ' MARIA FERNANDA', 'LOPEZ ACOSTA', 24, 1, 1),
	(12345728, ' CHRISTIAN EDUARDO', 'MANRIQUE FERNANDEZ', 24, 1, 1),
	(12345729, ' ADRIANA RUTH', 'MEMBRILLO RODRIGUEZ', 24, 1, 1),
	(12345730, ' ABIGAIL', 'MENDIZABAL OLIVARES', 25, 1, 1),
	(12345731, ' ALINA BRIGITTE', 'MENDOZA MATOS', 25, 1, 1),
	(12345732, ' ESTEFANO ADRIANO', 'PAJUELO VILLARREAL', 25, 1, 1),
	(12345733, ' RUT PILAR', 'PORRAS HERRERA', 25, 1, 1),
	(12345734, ' ISMAEL RICARDO', 'RAFAEL BORJA', 25, 1, 1),
	(12345735, ' KARLA GABRIELA', 'RIVERO DOMINGUEZ', 25, 1, 1),
	(12345736, ' SEBASTIAN ARMANDO', 'ROCA OLIVERA', 25, 1, 1),
	(12345737, ' PERCY MATEO', 'ROJAS ANCAJIMA', 25, 1, 1),
	(12345738, ' CHELY NAOMI', 'RUIZ PALACIOS', 25, 1, 1),
	(12345739, ' ROMINA YADHIRA', 'SALVADOR CUENCA', 25, 1, 1),
	(12345740, ' LESLIE GERALDINE', 'SANCHEZ CARBAJAL', 25, 1, 1),
	(12345741, ' FRANCHESCA CRISTELLE', 'SANDOVAL ELIAS', 25, 1, 1),
	(12345742, ' DANIEL JOSEPH', 'SERNAQUE RAMIREZ', 25, 1, 1),
	(12345743, ' MICHAEL STIVEN', 'SIFUENTES GONZALES', 25, 1, 1),
	(12345744, ' GRACIELA ARIANA', 'TANTARUNA ACOSTA', 25, 1, 1),
	(12345745, ' DANIELA ALEXANDRA', 'VASQUEZ OROSCO', 25, 1, 1),
	(12345746, ' DANIELA YAMILET', 'VENTURA TALAVERANO', 25, 1, 1);
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;

-- Volcando estructura para procedimiento fvzihtls_mc_andresbello.generar_horario
DROP PROCEDURE IF EXISTS `generar_horario`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `generar_horario`()
BEGIN

delete from horario;

-- Sexto de primaria *****************************************************************************
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 16, "NA", "Lunes"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 16, "NA", "Martes"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 16, "NA", "Miercoles"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 16, "NA", "Jueves"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 16, "NA", "Viernes"  from hora_horario h order by orden;
commit;

-- 1RO DE SECUNDARIA *****************************************************************************
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 21, "NA", "Lunes"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 21, "NA", "Martes"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 21, "NA", "Miercoles"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 21, "NA", "Jueves"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 21, "NA", "Viernes"  from hora_horario h order by orden;
commit;

-- 2DO DE SECUNDARIA *****************************************************************************
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 22, "NA", "Lunes"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 22, "NA", "Martes"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 22, "NA", "Miercoles"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 22, "NA", "Jueves"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 22, "NA", "Viernes"  from hora_horario h order by orden;
commit;

-- 3RO DE SECUNDARIA *****************************************************************************
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 23, "NA", "Lunes"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 23, "NA", "Martes"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 23, "NA", "Miercoles"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 23, "NA", "Jueves"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 23, "NA", "Viernes"  from hora_horario h order by orden;
commit;

-- 4TO DE SECUNDARIA *****************************************************************************
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 24, "NA", "Lunes"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 24, "NA", "Martes"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 24, "NA", "Miercoles"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 24, "NA", "Jueves"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 24, "NA", "Viernes"  from hora_horario h order by orden;
commit;
-- 5TO DE SECUNDARIA *****************************************************************************
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 25, "NA", "Lunes"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 25, "NA", "Martes"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 25, "NA", "Miercoles"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 25, "NA", "Jueves"  from hora_horario h order by orden;
commit;
insert into horario (turno, grado, seccion, dia) 
select CONCAT(h.hora_inicio," - ",h.hora_final), 25, "NA", "Viernes"  from hora_horario h order by orden;
commit;

END//
DELIMITER ;

-- Volcando estructura para tabla fvzihtls_mc_andresbello.grado
DROP TABLE IF EXISTS `grado`;
CREATE TABLE IF NOT EXISTS `grado` (
  `id` int(11) DEFAULT NULL,
  `descripcion` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla fvzihtls_mc_andresbello.grado: ~14 rows (aproximadamente)
DELETE FROM `grado`;
/*!40000 ALTER TABLE `grado` DISABLE KEYS */;
INSERT INTO `grado` (`id`, `descripcion`) VALUES
	(3, 'inicial 3 años'),
	(4, 'inicial 4 años'),
	(5, 'inicial 5 años'),
	(11, '1ro de primaria'),
	(12, '2do de primaria'),
	(13, '3ro de primaria'),
	(14, '4to de primaria'),
	(15, '5to de primaria'),
	(16, '6to de primaria'),
	(21, '1ro de secundaria'),
	(22, '2do de secundaria'),
	(23, '3ro de sucundaria'),
	(24, '4to de secundaria'),
	(25, '5to de secundaria');
/*!40000 ALTER TABLE `grado` ENABLE KEYS */;

-- Volcando estructura para tabla fvzihtls_mc_andresbello.horario
DROP TABLE IF EXISTS `horario`;
CREATE TABLE IF NOT EXISTS `horario` (
  `indice` int(11) NOT NULL AUTO_INCREMENT,
  `turno` varchar(50) DEFAULT '0',
  `curso` varchar(50) DEFAULT '0',
  `docente` varchar(50) DEFAULT '0',
  `grado` varchar(50) DEFAULT '0',
  `seccion` varchar(50) DEFAULT '0',
  `dia` varchar(50) DEFAULT '0',
  PRIMARY KEY (`indice`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla fvzihtls_mc_andresbello.horario: ~90 rows (aproximadamente)
DELETE FROM `horario`;
/*!40000 ALTER TABLE `horario` DISABLE KEYS */;
INSERT INTO `horario` (`indice`, `turno`, `curso`, `docente`, `grado`, `seccion`, `dia`) VALUES
	(1, '8:00 am - 9:00 am', 'algebra', '12345686', '16', 'NA', 'Lunes'),
	(2, '9:00 am - 10:00 am', 'aritmetica', '12345680', '16', 'NA', 'Lunes'),
	(3, '10:00 am - 11:00 am', 'geometria', '12345680', '16', 'NA', 'Lunes'),
	(4, '8:00 am - 9:00 am', 'geometria', '12345684', '16', 'NA', 'Martes'),
	(5, '9:00 am - 10:00 am', 'geometria', '12345679', '16', 'NA', 'Martes'),
	(6, '10:00 am - 11:00 am', 'trigonometria', '12345685', '16', 'NA', 'Martes'),
	(7, '8:00 am - 9:00 am', 'trigonometria', '12345681', '16', 'NA', 'Miercoles'),
	(8, '9:00 am - 10:00 am', 'geometria', '12345679', '16', 'NA', 'Miercoles'),
	(9, '10:00 am - 11:00 am', 'trigonometria', '12345680', '16', 'NA', 'Miercoles'),
	(10, '8:00 am - 9:00 am', 'algebra', '12345679', '16', 'NA', 'Jueves'),
	(11, '9:00 am - 10:00 am', 'geometria', '12345679', '16', 'NA', 'Jueves'),
	(12, '10:00 am - 11:00 am', 'aritmetica', '12345681', '16', 'NA', 'Jueves'),
	(13, '8:00 am - 9:00 am', 'aritmetica', '12345681', '16', 'NA', 'Viernes'),
	(14, '9:00 am - 10:00 am', 'aritmetica', '12345684', '16', 'NA', 'Viernes'),
	(15, '10:00 am - 11:00 am', 'aritmetica', '12345679', '16', 'NA', 'Viernes'),
	(16, '8:00 am - 9:00 am', '0', '0', '21', 'NA', 'Lunes'),
	(17, '9:00 am - 10:00 am', '0', '0', '21', 'NA', 'Lunes'),
	(18, '10:00 am - 11:00 am', '0', '0', '21', 'NA', 'Lunes'),
	(19, '8:00 am - 9:00 am', '0', '0', '21', 'NA', 'Martes'),
	(20, '9:00 am - 10:00 am', '0', '0', '21', 'NA', 'Martes'),
	(21, '10:00 am - 11:00 am', '0', '0', '21', 'NA', 'Martes'),
	(22, '8:00 am - 9:00 am', '0', '0', '21', 'NA', 'Miercoles'),
	(23, '9:00 am - 10:00 am', '0', '0', '21', 'NA', 'Miercoles'),
	(24, '10:00 am - 11:00 am', '0', '0', '21', 'NA', 'Miercoles'),
	(25, '8:00 am - 9:00 am', '0', '0', '21', 'NA', 'Jueves'),
	(26, '9:00 am - 10:00 am', '0', '0', '21', 'NA', 'Jueves'),
	(27, '10:00 am - 11:00 am', '0', '0', '21', 'NA', 'Jueves'),
	(28, '8:00 am - 9:00 am', '0', '0', '21', 'NA', 'Viernes'),
	(29, '9:00 am - 10:00 am', '0', '0', '21', 'NA', 'Viernes'),
	(30, '10:00 am - 11:00 am', '0', '0', '21', 'NA', 'Viernes'),
	(31, '8:00 am - 9:00 am', '0', '0', '22', 'NA', 'Lunes'),
	(32, '9:00 am - 10:00 am', '0', '0', '22', 'NA', 'Lunes'),
	(33, '10:00 am - 11:00 am', '0', '0', '22', 'NA', 'Lunes'),
	(34, '8:00 am - 9:00 am', '0', '0', '22', 'NA', 'Martes'),
	(35, '9:00 am - 10:00 am', '0', '0', '22', 'NA', 'Martes'),
	(36, '10:00 am - 11:00 am', '0', '0', '22', 'NA', 'Martes'),
	(37, '8:00 am - 9:00 am', '0', '0', '22', 'NA', 'Miercoles'),
	(38, '9:00 am - 10:00 am', '0', '0', '22', 'NA', 'Miercoles'),
	(39, '10:00 am - 11:00 am', '0', '0', '22', 'NA', 'Miercoles'),
	(40, '8:00 am - 9:00 am', '0', '0', '22', 'NA', 'Jueves'),
	(41, '9:00 am - 10:00 am', '0', '0', '22', 'NA', 'Jueves'),
	(42, '10:00 am - 11:00 am', '0', '0', '22', 'NA', 'Jueves'),
	(43, '8:00 am - 9:00 am', '0', '0', '22', 'NA', 'Viernes'),
	(44, '9:00 am - 10:00 am', '0', '0', '22', 'NA', 'Viernes'),
	(45, '10:00 am - 11:00 am', '0', '0', '22', 'NA', 'Viernes'),
	(46, '8:00 am - 9:00 am', '0', '0', '23', 'NA', 'Lunes'),
	(47, '9:00 am - 10:00 am', '0', '0', '23', 'NA', 'Lunes'),
	(48, '10:00 am - 11:00 am', '0', '0', '23', 'NA', 'Lunes'),
	(49, '8:00 am - 9:00 am', '0', '0', '23', 'NA', 'Martes'),
	(50, '9:00 am - 10:00 am', '0', '0', '23', 'NA', 'Martes'),
	(51, '10:00 am - 11:00 am', '0', '0', '23', 'NA', 'Martes'),
	(52, '8:00 am - 9:00 am', '0', '0', '23', 'NA', 'Miercoles'),
	(53, '9:00 am - 10:00 am', '0', '0', '23', 'NA', 'Miercoles'),
	(54, '10:00 am - 11:00 am', '0', '0', '23', 'NA', 'Miercoles'),
	(55, '8:00 am - 9:00 am', '0', '0', '23', 'NA', 'Jueves'),
	(56, '9:00 am - 10:00 am', '0', '0', '23', 'NA', 'Jueves'),
	(57, '10:00 am - 11:00 am', '0', '0', '23', 'NA', 'Jueves'),
	(58, '8:00 am - 9:00 am', '0', '0', '23', 'NA', 'Viernes'),
	(59, '9:00 am - 10:00 am', '0', '0', '23', 'NA', 'Viernes'),
	(60, '10:00 am - 11:00 am', '0', '0', '23', 'NA', 'Viernes'),
	(61, '8:00 am - 9:00 am', '0', '0', '24', 'NA', 'Lunes'),
	(62, '9:00 am - 10:00 am', '0', '0', '24', 'NA', 'Lunes'),
	(63, '10:00 am - 11:00 am', '0', '0', '24', 'NA', 'Lunes'),
	(64, '8:00 am - 9:00 am', '0', '0', '24', 'NA', 'Martes'),
	(65, '9:00 am - 10:00 am', '0', '0', '24', 'NA', 'Martes'),
	(66, '10:00 am - 11:00 am', '0', '0', '24', 'NA', 'Martes'),
	(67, '8:00 am - 9:00 am', '0', '0', '24', 'NA', 'Miercoles'),
	(68, '9:00 am - 10:00 am', '0', '0', '24', 'NA', 'Miercoles'),
	(69, '10:00 am - 11:00 am', '0', '0', '24', 'NA', 'Miercoles'),
	(70, '8:00 am - 9:00 am', '0', '0', '24', 'NA', 'Jueves'),
	(71, '9:00 am - 10:00 am', '0', '0', '24', 'NA', 'Jueves'),
	(72, '10:00 am - 11:00 am', '0', '0', '24', 'NA', 'Jueves'),
	(73, '8:00 am - 9:00 am', '0', '0', '24', 'NA', 'Viernes'),
	(74, '9:00 am - 10:00 am', '0', '0', '24', 'NA', 'Viernes'),
	(75, '10:00 am - 11:00 am', '0', '0', '24', 'NA', 'Viernes'),
	(76, '8:00 am - 9:00 am', '0', '0', '25', 'NA', 'Lunes'),
	(77, '9:00 am - 10:00 am', '0', '0', '25', 'NA', 'Lunes'),
	(78, '10:00 am - 11:00 am', '0', '0', '25', 'NA', 'Lunes'),
	(79, '8:00 am - 9:00 am', '0', '0', '25', 'NA', 'Martes'),
	(80, '9:00 am - 10:00 am', '0', '0', '25', 'NA', 'Martes'),
	(81, '10:00 am - 11:00 am', '0', '0', '25', 'NA', 'Martes'),
	(82, '8:00 am - 9:00 am', '0', '0', '25', 'NA', 'Miercoles'),
	(83, '9:00 am - 10:00 am', '0', '0', '25', 'NA', 'Miercoles'),
	(84, '10:00 am - 11:00 am', '0', '0', '25', 'NA', 'Miercoles'),
	(85, '8:00 am - 9:00 am', '0', '0', '25', 'NA', 'Jueves'),
	(86, '9:00 am - 10:00 am', '0', '0', '25', 'NA', 'Jueves'),
	(87, '10:00 am - 11:00 am', '0', '0', '25', 'NA', 'Jueves'),
	(88, '8:00 am - 9:00 am', '0', '0', '25', 'NA', 'Viernes'),
	(89, '9:00 am - 10:00 am', '0', '0', '25', 'NA', 'Viernes'),
	(90, '10:00 am - 11:00 am', '0', '0', '25', 'NA', 'Viernes');
/*!40000 ALTER TABLE `horario` ENABLE KEYS */;

-- Volcando estructura para tabla fvzihtls_mc_andresbello.hora_horario
DROP TABLE IF EXISTS `hora_horario`;
CREATE TABLE IF NOT EXISTS `hora_horario` (
  `indice` int(11) NOT NULL AUTO_INCREMENT,
  `orden` varchar(50) NOT NULL DEFAULT '0',
  `hora_inicio` varchar(50) NOT NULL DEFAULT '0',
  `hora_final` varchar(50) NOT NULL DEFAULT '0',
  `descripcion` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`indice`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla fvzihtls_mc_andresbello.hora_horario: ~2 rows (aproximadamente)
DELETE FROM `hora_horario`;
/*!40000 ALTER TABLE `hora_horario` DISABLE KEYS */;
INSERT INTO `hora_horario` (`indice`, `orden`, `hora_inicio`, `hora_final`, `descripcion`) VALUES
	(1, '1', '8:00 am', '9:00 am', 'primera hora'),
	(2, '2', '9:00 am', '10:00 am', 'segunda hora'),
	(3, '3', '10:00 am', '11:00 am', 'tercera hora');
/*!40000 ALTER TABLE `hora_horario` ENABLE KEYS */;

-- Volcando estructura para tabla fvzihtls_mc_andresbello.login
DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `situacion` int(2) NOT NULL,
  `rol` int(11) DEFAULT NULL,
  `fecha_registro` varchar(45) DEFAULT 'NUL',
  `dni` int(8) DEFAULT NULL,
  `celular` int(9) DEFAULT NULL,
  `telefono` int(9) DEFAULT NULL,
  `nacimiento` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dni` (`dni`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla fvzihtls_mc_andresbello.login: ~76 rows (aproximadamente)
DELETE FROM `login`;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`id`, `nombres`, `apellidos`, `email`, `password`, `situacion`, `rol`, `fecha_registro`, `dni`, `celular`, `telefono`, `nacimiento`, `direccion`) VALUES
	(1, 'Henry Zamir', 'Villanueva Monrroy', 'henryzamirv@gmail.com', '123456a.', 1, 1, '2018-11-23', 72754438, 989861707, 16275070, '06/05/1995', 'Jr. San Gregorio, Comas'),
	(2, 'CARLOS', 'TANTA ', 'HENRY.VILLANUEVA.MONRROY@GMAIL.COM', '123456A.', 1, 4, '2019-02-02', 89898989, 989861707, 5043923, '06/07/1995', 'JR. SAN GREGORIO, COMAS'),
	(3, 'RUFINA', 'MONRROY', 'HENRYZAMIRV@GMAIL.COM', '123456A.', 1, 5, '2019-02-02', 3020302, 999999999, 8888888, '21/11/1963', 'COMAS'),
	(4, 'LUIS', 'CHACóN', 'HENRYZAMIRV@GMAIL.COM', '123456A.', 1, 7, '2019-02-02', 10001002, 989861707, 123123, '05/02/2019', 'JR. SAN GREGORIO, COMAS'),
	(5, 'JUANA', 'LA SALLE', 'HENRYZAMIRV@GMAIL.COM', '123456A.', 1, 7, '2019-02-02', 10001001, 989861707, 1231231, '06/02/2019', 'JR. SAN GREGORIO, COMAS'),
	(6, 'MARCELO', 'RODRIGUEZ', 'HENRYZAMIRV@GMAIL.COM', '123456A.', 1, 7, '2019-02-02', 10001003, 989861707, 123123, '07/11/2018', 'JR. SAN GREGORIO, COMAS'),
	(7, 'MARCO ', 'AURELIO', 'HENRYZAMIRV@GMAIL.COM', '123456A.', 1, 7, '2019-02-02', 10001005, 989861707, 123123, '06/02/2019', 'JR. SAN GREGORIO, COMAS'),
	(8, 'Porfirio ', 'Diaz', 'henryzamirv@gmail.com', '123456a.', 1, 2, '2018-11-24', 12345678, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(9, 'pepito', 'pepito', 'henryzamirv@gmail.com', '123456a.', 1, 4, '2018-11-24', 12345679, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(10, 'juanito', 'juanito', 'henryzamirv@gmail.com', '123456a.', 1, 4, '2018-11-24', 12345680, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(11, 'menganito', 'menganito', 'henryzamirv@gmail.com', '123456a.', 1, 4, '2018-11-24', 12345681, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(12, 'sultanito', 'sultanito', 'henryzamirv@gmail.com', '123456a.', 1, 4, '2018-11-24', 12345682, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(13, 'zanganito', 'zanganito', 'henryzamirv@gmail.com', '123456a.', 1, 4, '2018-11-24', 12345683, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(14, 'rupito', 'rupito', 'henryzamirv@gmail.com', '123456a.', 1, 4, '2018-11-24', 12345684, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(15, 'tiranito', 'tiranito', 'henryzamirv@gmail.com', '123456a.', 1, 4, '2018-11-24', 12345685, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(16, 'gonito', 'gonito', 'henryzamirv@gmail.com', '123456a.', 1, 4, '2018-11-24', 12345686, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(17, 'rosaura', 'rosaura', 'henryzamirv@gmail.com', '123456a.', 1, 5, '2018-11-24', 12345687, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(18, 'rosaura2', 'rosaura2', 'henryzamirv@gmail.com', '123456a.', 1, 6, '2018-11-24', 12345688, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(19, ' BREIDY BRISCELA', 'ARI CORONADO', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345689, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(20, ' LEILA FERNANDA', 'AVALO CHAFLOQUE', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345690, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(21, ' BREDSSON MIGUEL', 'AYALA LOPEZ', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345691, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(22, ' KARLA SOFIA', 'CARLOS BAYONA', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345692, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(23, ' DEBORA RAQUEL', 'CARRANZA ASENCIOS', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345693, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(24, ' MAYRA ELENA', 'CARRION MENCIA', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345694, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(25, ' ROSMERY JAYAIRA', 'CASTILLO CAMPOS', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345695, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(26, ' MELANY LADY', 'FUERTES LUICHO', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345696, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(27, ' ALEXIS EDGARDO', 'GANOZA DAVILA', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345697, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(28, ' LUCYANNE PATRIZIA', 'GONZALES TEMOCHE', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345698, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(29, ' ANGELA ESKARLET', 'GRADOS HUARCA', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345699, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(30, ' JOSUE ISMAEL', 'LEVANO TARRILLO', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345700, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(31, ' CARLOS DANIEL EDUARDO', 'LOPEZ CAMPOS', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345701, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(32, ' RUTH ESTHER', 'MALLQUI SANTILLAN', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345702, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(33, ' IVONNE INES', 'MURGA SONCO', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345703, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(34, ' BRAAYAN MAX', 'QUEVEDO RAMIREZ', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345704, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(35, ' VALERIA', 'QUICENO GARCIA', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345705, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(36, ' TICCIANA FLOR ALELI', 'REATEGUI TERRONES', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345706, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(37, ' THELSY VANESSA', 'SOLANO SANCHEZ', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345707, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(38, ' FABIAN HEBER', 'TANTARUNA ACOSTA', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345708, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(39, ' DIEGO ALONSO', 'VASQUEZ VILCHEZ', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345709, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(40, ' ALEJANDRA CELESTE', 'VENTURA TALAVERANO', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345710, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(41, ' ALEXIS MAURO', 'VILLAFAN VERGARA', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345711, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(42, ' YASUMI YURICO', 'YATACO SAQUICURAY', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345712, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(43, ' BRAYAN LEONET', 'ZAMBRANO RODRIGUEZ', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345713, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(44, ' DAVID DANIEL', 'ALBERTO LOZANO', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345714, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(45, ' FRANCESCO ALEXANDER', 'ALEJOS HARO', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345715, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(46, ' FRANCISCO JAVIER', 'AYALA RODRIGUEZ', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345716, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(47, ' RENZO SHIRO MANUEL', 'BORDA SANGAMA', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345717, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(48, ' MATTHIAS', 'CALDAS HERNANDEZ', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345718, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(49, ' JONAS ISAMEL', 'CALLATA NEYRA', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345719, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(50, ' NAOMI ELIANA', 'CASTANEDA MORALES', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345720, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(51, ' JESUS ANTONY', 'FIGUEROA SILVESTRE', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345721, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(52, ' ANGELO FABIAN', 'GARCIA CASTILLO', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345722, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(53, ' DIEGO FERNANDO', 'GUERRA SANCHEZ', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345723, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(54, ' YANIRA MARGARITA', 'HERNANDEZ FUENTES', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345724, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(55, ' BRENDA JASMIN', 'HIDALGO DEL RIO', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345725, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(56, ' ANDY JUNIOR', 'INGA CISNEROS', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345726, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(57, ' MARIA FERNANDA', 'LOPEZ ACOSTA', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345727, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(58, ' CHRISTIAN EDUARDO', 'MANRIQUE FERNANDEZ', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345728, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(59, ' ADRIANA RUTH', 'MEMBRILLO RODRIGUEZ', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345729, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(60, ' ABIGAIL', 'MENDIZABAL OLIVARES', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345730, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(61, ' ALINA BRIGITTE', 'MENDOZA MATOS', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345731, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(62, ' ESTEFANO ADRIANO', 'PAJUELO VILLARREAL', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345732, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(63, ' RUT PILAR', 'PORRAS HERRERA', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345733, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(64, ' ISMAEL RICARDO', 'RAFAEL BORJA', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345734, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(65, ' KARLA GABRIELA', 'RIVERO DOMINGUEZ', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345735, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(66, ' SEBASTIAN ARMANDO', 'ROCA OLIVERA', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345736, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(67, ' PERCY MATEO', 'ROJAS ANCAJIMA', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345737, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(68, ' CHELY NAOMI', 'RUIZ PALACIOS', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345738, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(69, ' ROMINA YADHIRA', 'SALVADOR CUENCA', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345739, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(70, ' LESLIE GERALDINE', 'SANCHEZ CARBAJAL', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345740, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(71, ' FRANCHESCA CRISTELLE', 'SANDOVAL ELIAS', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345741, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(72, ' DANIEL JOSEPH', 'SERNAQUE RAMIREZ', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345742, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(73, ' MICHAEL STIVEN', 'SIFUENTES GONZALES', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345743, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(74, ' GRACIELA ARIANA', 'TANTARUNA ACOSTA', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345744, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(75, ' DANIELA ALEXANDRA', 'VASQUEZ OROSCO', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345745, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas'),
	(76, ' DANIELA YAMILET', 'VENTURA TALAVERANO', 'henryzamirv@gmail.com', '123456a.', 1, 7, '2018-11-24', 12345746, 989861707, 16275070, '06/05/1995', 'San Carlos, Comas');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

-- Volcando estructura para tabla fvzihtls_mc_andresbello.mes
DROP TABLE IF EXISTS `mes`;
CREATE TABLE IF NOT EXISTS `mes` (
  `id` int(11) DEFAULT NULL,
  `mes_texto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla fvzihtls_mc_andresbello.mes: ~12 rows (aproximadamente)
DELETE FROM `mes`;
/*!40000 ALTER TABLE `mes` DISABLE KEYS */;
INSERT INTO `mes` (`id`, `mes_texto`) VALUES
	(1, 'Enero'),
	(2, 'Febrero'),
	(3, 'Marzo'),
	(4, 'Abril'),
	(5, 'Mayo'),
	(6, 'Junio'),
	(7, 'Julio'),
	(8, 'Agosto'),
	(9, 'Setiembre'),
	(10, 'Octubre'),
	(11, 'Noviembre'),
	(12, 'Diciembre');
/*!40000 ALTER TABLE `mes` ENABLE KEYS */;

-- Volcando estructura para tabla fvzihtls_mc_andresbello.noticias
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `imagen` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `palabra_clave` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla fvzihtls_mc_andresbello.noticias: ~0 rows (aproximadamente)
DELETE FROM `noticias`;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` (`id`, `titulo`, `descripcion`, `imagen`, `palabra_clave`, `fecha`) VALUES
	(1, 'matricula 2019', 'bienvenido a la matricula 2019', 'default', 'matricula', '2019-02-02');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;

-- Volcando estructura para tabla fvzihtls_mc_andresbello.notificaciones
DROP TABLE IF EXISTS `notificaciones`;
CREATE TABLE IF NOT EXISTS `notificaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mensaje` varchar(1000) NOT NULL DEFAULT '0',
  `asunto` varchar(200) NOT NULL DEFAULT '0',
  `remitente` int(8) NOT NULL DEFAULT '0' COMMENT 'dni del remitente',
  `destinatario` int(8) NOT NULL DEFAULT '0' COMMENT 'dni del destino',
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla fvzihtls_mc_andresbello.notificaciones: ~7 rows (aproximadamente)
DELETE FROM `notificaciones`;
/*!40000 ALTER TABLE `notificaciones` DISABLE KEYS */;
INSERT INTO `notificaciones` (`id`, `mensaje`, `asunto`, `remitente`, `destinatario`, `fecha`) VALUES
	(1, 'mal comportamiento', 'mal comportamiento', 72754438, 12345689, '2019-02-02'),
	(2, 'los alumnos se comportan mal durante hora de clase.', 'mal comportamiento', 72754438, 12345690, '2019-02-02'),
	(3, 'los alumnos se comportan mal durante hora de clase.', 'mal comportamiento', 72754438, 12345689, '2019-02-02'),
	(4, 'mal comportamiento en el aula', 'mal comportamiento', 72754438, 12345690, '2019-02-02'),
	(5, 'mal comportamiento en el aula', 'mal comportamiento', 72754438, 12345689, '2019-02-02'),
	(6, 'asd', 'asd', 72754438, 12345689, '2019-02-03'),
	(7, 'qqq', 'qqq', 72754438, 12345689, '2019-02-03');
/*!40000 ALTER TABLE `notificaciones` ENABLE KEYS */;

-- Volcando estructura para procedimiento fvzihtls_mc_andresbello.procedimiento_asistencia
DROP PROCEDURE IF EXISTS `procedimiento_asistencia`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `procedimiento_asistencia`(
	IN `alumno` VARCHAR(200),
	IN `asistencia` VARCHAR(50)
,
	IN `grado` INT,
	IN `mes` INT,
	IN `fecha` DATE,
	IN `dni_user` INT,
	IN `dni_estudiante` INT

)
BEGIN
INSERT into asistencia (alumno,asistencia,grado,mes,fecha,dni_user,dni_estudiante) values (alumno,asistencia,grado,mes,fecha,dni_user,dni_estudiante);
END//
DELIMITER ;

-- Volcando estructura para procedimiento fvzihtls_mc_andresbello.registrar
DROP PROCEDURE IF EXISTS `registrar`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `registrar`(
	IN `password` varchar(255),
	IN `nomb` varchar(255),
	IN `apellido` varchar(255),
	IN `email` varchar(255),
	IN `rol` varchar(45),
	IN `dni` varchar(8),
	IN `datepicker` varchar(10),
	IN `celular` varchar(9),
	IN `telefono` varchar(7),
	IN `direccion` varchar(90)

)
BEGIN

insert into login(dni,password,nombres,apellidos,email,situacion,rol,fecha_registro,nacimiento,celular,telefono,direccion) values(dni,password,nomb,apellido,email,1,rol,CURDATE(),datepicker,celular,telefono,direccion);
END//
DELIMITER ;

-- Volcando estructura para procedimiento fvzihtls_mc_andresbello.registrar_estudiantes
DROP PROCEDURE IF EXISTS `registrar_estudiantes`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `registrar_estudiantes`(
	IN `password` varchar(255),
	IN `nomb` varchar(255),
	IN `apellido` varchar(255),
	IN `email` varchar(255),
	IN `rol` varchar(45),
	IN `dni` varchar(8),
	IN `datepicker` varchar(10),
	IN `celular` varchar(9),
	IN `telefono` varchar(7),
	IN `direccion` varchar(90),
	IN `grado` varchar(90),
	IN `seccion` varchar(90)


)
BEGIN

insert into login(dni,password,nombres,apellidos,email,situacion,rol,fecha_registro,nacimiento,celular,telefono,direccion) values(dni,password,nomb,apellido,email,1,rol,CURDATE(),datepicker,celular,telefono,direccion);

insert into estudiantes(dni,nombres,apellidos,grado,seccion) values(dni,nomb,apellido,grado,seccion);
END//
DELIMITER ;

-- Volcando estructura para procedimiento fvzihtls_mc_andresbello.removerUser
DROP PROCEDURE IF EXISTS `removerUser`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `removerUser`(
	IN `userID` INT(10)

)
BEGIN
UPDATE login SET Situacion = 0 WHERE id= userID;
END//
DELIMITER ;

-- Volcando estructura para tabla fvzihtls_mc_andresbello.roles_usuarios
DROP TABLE IF EXISTS `roles_usuarios`;
CREATE TABLE IF NOT EXISTS `roles_usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `rol_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla fvzihtls_mc_andresbello.roles_usuarios: ~7 rows (aproximadamente)
DELETE FROM `roles_usuarios`;
/*!40000 ALTER TABLE `roles_usuarios` DISABLE KEYS */;
INSERT INTO `roles_usuarios` (`ID`, `rol_name`) VALUES
	(1, 'Administrador'),
	(2, 'Director'),
	(3, 'SubDirector'),
	(4, 'Docente'),
	(5, 'Auxiliar'),
	(6, 'Administrativo'),
	(7, 'Estudiante');
/*!40000 ALTER TABLE `roles_usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla fvzihtls_mc_andresbello.seccion
DROP TABLE IF EXISTS `seccion`;
CREATE TABLE IF NOT EXISTS `seccion` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla fvzihtls_mc_andresbello.seccion: ~7 rows (aproximadamente)
DELETE FROM `seccion`;
/*!40000 ALTER TABLE `seccion` DISABLE KEYS */;
INSERT INTO `seccion` (`id`, `descripcion`) VALUES
	(1, 'A'),
	(2, 'B'),
	(3, 'C'),
	(4, 'D'),
	(5, 'E'),
	(6, 'F'),
	(7, 'G');
/*!40000 ALTER TABLE `seccion` ENABLE KEYS */;

-- Volcando estructura para tabla fvzihtls_mc_andresbello.we_service_colegios_url
DROP TABLE IF EXISTS `we_service_colegios_url`;
CREATE TABLE IF NOT EXISTS `we_service_colegios_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `end_point` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen_url` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla fvzihtls_mc_andresbello.we_service_colegios_url: ~0 rows (aproximadamente)
DELETE FROM `we_service_colegios_url`;
/*!40000 ALTER TABLE `we_service_colegios_url` DISABLE KEYS */;
/*!40000 ALTER TABLE `we_service_colegios_url` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
