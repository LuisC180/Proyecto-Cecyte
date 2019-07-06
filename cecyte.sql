-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para cecyte
CREATE DATABASE IF NOT EXISTS `cecyte` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cecyte`;

-- Volcando estructura para tabla cecyte.docentes
CREATE TABLE IF NOT EXISTS `docentes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `apellido_paterno` tinytext NOT NULL,
  `apellido_materno` tinytext,
  `nombre` tinytext NOT NULL,
  `rfc` tinytext,
  `curp` tinytext NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `tipo_sangre` tinytext NOT NULL,
  `lugar_nacimiento` tinytext NOT NULL,
  `nss` tinytext NOT NULL,
  `correo_electronico` tinytext,
  `telefono_casa` tinytext NOT NULL,
  `telefono_celular` tinytext NOT NULL,
  `colonia` tinytext NOT NULL,
  `calle` tinytext NOT NULL,
  `numero_domicilio` tinytext NOT NULL,
  `codigo_postal` tinytext NOT NULL,
  `municipio` tinytext NOT NULL,
  `estado` tinytext NOT NULL,
  `numero_empleado` tinytext NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `estatus` tinytext NOT NULL,
  `departamento` tinytext NOT NULL,
  `puesto` tinytext NOT NULL,
  `horas` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cecyte.docentes: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `docentes` DISABLE KEYS */;
INSERT INTO `docentes` (`id`, `apellido_paterno`, `apellido_materno`, `nombre`, `rfc`, `curp`, `fecha_nacimiento`, `tipo_sangre`, `lugar_nacimiento`, `nss`, `correo_electronico`, `telefono_casa`, `telefono_celular`, `colonia`, `calle`, `numero_domicilio`, `codigo_postal`, `municipio`, `estado`, `numero_empleado`, `fecha_ingreso`, `estatus`, `departamento`, `puesto`, `horas`) VALUES
	(1, 'Batres', 'Juarez', 'Juan Luis', 'BAJJ961117CD3', 'BAJJ961117HZSTRN00', '1996-11-17', 'O+', 'Rio Grande', '66159604868', 'juanluis.batresjuarez@live.com', '9825243', '4981026432', 'Centro', 'Reforma', '', '98400', 'Rio Grande', 'Zacatecas', '230', '2019-01-01', 'Empleado Base', 'Finanzas', 'Jefe de todo el pedo', 2),
	(2, 'Batres', 'Juarez', 'Juan Luis', 'BAJJ961117CD3', 'BAJJ961117HZSTRN00', '1996-11-17', 'O+', 'Rio Grande', '66159604868', 'juanluis.batresjuarez@live.com', '9825243', '4981026432', 'Centro', 'Reforma', '26', '98400', 'Rio Grande', 'Zacatecas', '231', '2019-01-01', 'Empleado Base', 'Finanzas', 'Jefe de todo el pedo', 2);
/*!40000 ALTER TABLE `docentes` ENABLE KEYS */;

-- Volcando estructura para tabla cecyte.egresos
CREATE TABLE IF NOT EXISTS `egresos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` tinytext NOT NULL,
  `detalle` text,
  `costo` float NOT NULL,
  `fecha_egreso` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cecyte.egresos: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `egresos` DISABLE KEYS */;
INSERT INTO `egresos` (`id`, `nombre`, `detalle`, `costo`, `fecha_egreso`) VALUES
	(1, 'Sillas', 'Sillas para centro de computo', 1200, '2019-07-06');
/*!40000 ALTER TABLE `egresos` ENABLE KEYS */;

-- Volcando estructura para tabla cecyte.incidencias
CREATE TABLE IF NOT EXISTS `incidencias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_empleado` int(11) NOT NULL,
  `fecha_incidencia` tinytext NOT NULL,
  `clausula` tinytext NOT NULL,
  `asunto` tinytext NOT NULL,
  `documentacion` tinytext NOT NULL,
  `motivos` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cecyte.incidencias: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `incidencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `incidencias` ENABLE KEYS */;

-- Volcando estructura para tabla cecyte.ingresos
CREATE TABLE IF NOT EXISTS `ingresos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `apellido_paterno` tinytext,
  `apellido_materno` tinytext,
  `nombre` tinytext NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `grado` int(10) unsigned NOT NULL,
  `grupo` tinytext NOT NULL,
  `semestre` tinytext NOT NULL,
  `carrera` tinytext NOT NULL,
  `concepto` int(11) NOT NULL,
  `costo` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cecyte.ingresos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `ingresos` DISABLE KEYS */;
INSERT INTO `ingresos` (`id`, `apellido_paterno`, `apellido_materno`, `nombre`, `fecha_ingreso`, `grado`, `grupo`, `semestre`, `carrera`, `concepto`, `costo`) VALUES
	(9, 'BATRES', 'JUAREZ', 'JUAN LUIS', '1996-11-17', 6, 'A', 'Febrero-Julio', 'Soporte y Matenimiento al Equipo de Computo', 2, 250),
	(10, 'QUIRINO', 'ADAME', 'JOSE CARLOS', '2019-07-06', 6, 'A', 'Febrero-Julio', 'Enfermeria General', 8, 300);
/*!40000 ALTER TABLE `ingresos` ENABLE KEYS */;

-- Volcando estructura para tabla cecyte.ingresos_conceptos
CREATE TABLE IF NOT EXISTS `ingresos_conceptos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `concepto` tinytext NOT NULL,
  `costo` float unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla cecyte.ingresos_conceptos: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `ingresos_conceptos` DISABLE KEYS */;
INSERT INTO `ingresos_conceptos` (`id`, `concepto`, `costo`) VALUES
	(1, 'Certificado', 100),
	(2, 'Reposición o Duplicado de Certificados', 250),
	(3, 'Constancia de estudios', 25),
	(4, 'Expedición de títulos de técnico CECyTEZ', 250),
	(5, 'Reposición de credencial', 100),
	(6, 'Evaluación de extraordinario', 100),
	(7, 'Curso intersemestral', 150),
	(8, 'Recursamiento de asignatura', 300),
	(9, 'Cuotas voluntarias', 600),
	(10, 'Credencial', 30),
	(11, 'Cuotas Voluntarias con 50% de condonación', 300),
	(12, 'Cuotas Voluntarias con 100% de condonación', 0),
	(13, 'Cooperación para material de exámenes', 70);
/*!40000 ALTER TABLE `ingresos_conceptos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
