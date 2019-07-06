-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-05-2019 a las 14:39:10
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `comoquieras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE IF NOT EXISTS `alumno` (
  `id_alumno` int(11) NOT NULL AUTO_INCREMENT,
  `apellidoP` varchar(50) DEFAULT NULL,
  `apellidoM` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `grado` int(11) NOT NULL,
  `grupo` varchar(1) NOT NULL,
  `semestre` varchar(50) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `concepto` varchar(50) NOT NULL,
  `precio` double NOT NULL,
  PRIMARY KEY (`id_alumno`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `apellidoP`, `apellidoM`, `nombre`, `fecha`, `grado`, `grupo`, `semestre`, `carrera`, `concepto`, `precio`) VALUES
(1, 'Arias Vega', NULL, 'Alejandro', NULL, 3, 'K', 'Febrero-Julio', 'Enfermeria General', '', 0),
(2, 'Almaraz', NULL, 'Luis', NULL, 7, 'H', 'Agosto-Diciembre', 'Enfermeria General', '', 0),
(3, 'Saucedo', 'Gonzales ', 'Carol', NULL, 9, 'K', 'Febrero-Julio', 'Enfermeria General', '', 0),
(4, 'Lopez', 'Perez', 'Arturo', NULL, 8, 'B', 'Agosto-Diciembre', 'Soporte y Matenimiento al Equipo de Computo', '', 0),
(5, '', '', 'Cantu', NULL, 3, 'H', 'CERTIFICADO PARCIAL $100.', 'Enfermeria General', '', 0),
(6, 'Longoria', 'Juanes', 'Cantu', NULL, 7, 'A', 'Febrero-Julio', 'Proceso de GestiÃ³n Administrativa', '', 0),
(7, 'Carranza', 'Castillo', 'Pancho', '2019-08-19', 7, 'C', 'Agosto-Diciembre', 'Enfermeria General', 'Credencial $30', 30),
(8, 'Longoria', 'Perez', 'Luis Enrique', '2019-08-02', 3, 'A', 'Agosto-Diciembre', 'Enfermeria General', 'ReposiciÃ³n o Duplicado de Certificados $250', 250),
(9, 'Saucedo', 'Perez', 'Valeria', '2019-05-11', 9, 'H', 'Febrero-Julio', 'Proceso de GestiÃ³n Administrativa', 'ReposiciÃ³n o Duplicado de Certificados $250', 250);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conceptodepago`
--

DROP TABLE IF EXISTS `conceptodepago`;
CREATE TABLE IF NOT EXISTS `conceptodepago` (
  `idConceptoDePago` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Monto` double DEFAULT NULL,
  `NombreConcepto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idConceptoDePago`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conceptodepago`
--

INSERT INTO `conceptodepago` (`idConceptoDePago`, `Monto`, `NombreConcepto`) VALUES
(1, 100, 'CERTIFICADO PARCIAL'),
(2, 250, 'REP O DUP DE CERT'),
(3, 25, 'CONSTANCIA DE ESTUDIOS '),
(4, 250, 'EXPEDICION DE TITULOS DE TECNICO CECYTEZ'),
(5, 100, 'REPOSICION DE CREDENCIAL'),
(6, 100, 'EVALUACION DE EXTRAORDINARIO'),
(7, 150, 'CURSO INTERSEMESTRAL'),
(8, 300, 'RECURSAMIENTO DE ASIGNATURA '),
(9, 600, 'CUOTAS VOLUNTARIAS'),
(10, 30, 'CREDENCIAL'),
(11, 300, 'CUOTAS VOLUNTARIAS CON 50% DE CONDONACION'),
(12, 0, 'CUOTAS VOLUNTARIAS CON 100% DE DESCUENTO'),
(13, 70, 'COOPERACION PARA MATERIAL DE EXAMENES');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
