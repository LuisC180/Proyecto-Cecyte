-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-05-2019 a las 17:20:34
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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

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
(9, 'Saucedo', 'Perez', 'Valeria', '2019-05-11', 9, 'H', 'Febrero-Julio', 'Proceso de GestiÃ³n Administrativa', 'ReposiciÃ³n o Duplicado de Certificados $250', 250),
(10, 'Galvan', ' Soto', 'Marisol', '2019-08-17', 9, 'A', 'Febrero-Julio', 'Soporte y Matenimiento al Equipo de Computo', 'Certificado $100', 100),
(11, 'Salas', 'Cuevas', 'Diana', '2019-05-19', 3, 'C', 'Agosto-Diciembre', 'Enfermeria General', 'Certificado $100', 100),
(12, 'Sanchez', 'Sanchez', 'Chalino', '2019-05-19', 1, 'A', 'Febrero-Julio', 'Soporte y Matenimiento al Equipo de Computo', 'Certificado $100', 100),
(13, 'Mares', 'Lopez', 'Margarita', '2019-05-19', 1, 'A', 'Agosto-Diciembre', 'Enfermeria General', 'Certificado $100', 100),
(14, 'Mares', 'Lopez', 'Margarita', '2019-05-19', 1, 'A', 'Agosto-Diciembre', 'Enfermeria General', 'Certificado $100', 100),
(15, 'Castro', 'Almaraz', 'Sergio', '2019-05-19', 1, 'B', 'Agosto-Diciembre', 'Soporte y Matenimiento al Equipo de Computo', 'Certificado $100', 100),
(16, 'Alvarez', 'Molina', 'Arturo', '2019-05-19', 1, 'A', 'Agosto-Diciembre', 'Soporte y Matenimiento al Equipo de Computo', 'Certificado $100', 100),
(17, 'Alvarez', 'Molina', 'Arturo', '2019-05-19', 1, 'A', 'Agosto-Diciembre', 'Soporte y Matenimiento al Equipo de Computo', 'Certificado $100', 100),
(18, 'Zarzoza ', 'Guitierrez', 'Angel', '2019-05-17', 1, 'A', 'Febrero-Julio', 'Enfermeria General', 'Certificado $100', 100),
(19, 'Almanza', 'Rodriguez', 'monico', '2019-05-17', 2, 'A', 'Agosto-Diciembre', 'Enfermeria General', 'ExpediciÃ³n de tÃ­tulos de tÃ©cnico CECyTEZ $250', 250),
(20, 'Alcala', 'Durango', 'Irvin', '2019-05-10', 1, 'C', 'Agosto-Diciembre', 'Enfermeria General', 'Cuotas Voluntarias con 50% de condonaciÃ³n $300', 300),
(21, 'Alvarado', 'Landeros', 'Victoria', '2019-05-23', 9, 'A', 'Febrero-Julio', 'Enfermeria General', 'Cuotas Voluntarias con 50% de condonaciÃ³n $300', 300),
(22, 'Contreras', 'Contreras', 'Samuel', '2019-05-08', 3, 'D', 'Agosto-Diciembre', 'Proceso de GestiÃ³n Administrativa', 'Constancia de estudios $25', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargahoraria`
--

DROP TABLE IF EXISTS `cargahoraria`;
CREATE TABLE IF NOT EXISTS `cargahoraria` (
  `idCargaHoraria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `HorasDescarga` int(10) UNSIGNED DEFAULT NULL,
  `HorasAsesoria` int(10) UNSIGNED DEFAULT NULL,
  `HorasFortalecimiento` int(10) UNSIGNED DEFAULT NULL,
  `HorasTutorias` int(10) UNSIGNED DEFAULT NULL,
  `IngresoMensualBruto` double DEFAULT NULL,
  `IngresoMensualNeto` double DEFAULT NULL,
  `TotalHoras` int(10) UNSIGNED DEFAULT NULL,
  `CicloEscolar` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`idCargaHoraria`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargahoraria`
--

INSERT INTO `cargahoraria` (`idCargaHoraria`, `HorasDescarga`, `HorasAsesoria`, `HorasFortalecimiento`, `HorasTutorias`, `IngresoMensualBruto`, `IngresoMensualNeto`, `TotalHoras`, `CicloEscolar`) VALUES
(1, 60, 60, 60, 60, 4500, 5800, 240, 'FA19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clausulas`
--

DROP TABLE IF EXISTS `clausulas`;
CREATE TABLE IF NOT EXISTS `clausulas` (
  `idClausulas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idClausulas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comisiones`
--

DROP TABLE IF EXISTS `comisiones`;
CREATE TABLE IF NOT EXISTS `comisiones` (
  `idComisiones` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Personal_idPersonal` int(10) UNSIGNED NOT NULL,
  `TipoComision` varchar(1) DEFAULT NULL,
  `Asunto` text,
  `Fecha` date DEFAULT NULL,
  `Descripcion` text,
  PRIMARY KEY (`idComisiones`),
  KEY `Comisiones_FKIndex1` (`Personal_idPersonal`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

DROP TABLE IF EXISTS `domicilio`;
CREATE TABLE IF NOT EXISTS `domicilio` (
  `idDomicilio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `CP` int(10) UNSIGNED DEFAULT NULL,
  `Calle` varchar(50) DEFAULT NULL,
  `Numero` int(10) UNSIGNED DEFAULT NULL,
  `Colonia` varchar(50) DEFAULT NULL,
  `Municipio` varchar(50) DEFAULT NULL,
  `Localidad` varchar(50) DEFAULT NULL,
  `Estado` varchar(50) DEFAULT NULL,
  `TelefonoCasa` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idDomicilio`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `domicilio`
--

INSERT INTO `domicilio` (`idDomicilio`, `CP`, `Calle`, `Numero`, `Colonia`, `Municipio`, `Localidad`, `Estado`, `TelefonoCasa`) VALUES
(1, 98400, 'flamingos', 238, 'Halcones', 'Rio Grande', 'Rio Grande', 'Zacatecas', '9820137');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresos`
--

DROP TABLE IF EXISTS `egresos`;
CREATE TABLE IF NOT EXISTS `egresos` (
  `id_egreso` int(11) NOT NULL AUTO_INCREMENT,
  `N_egreso` varchar(100) NOT NULL,
  `D_egreso` varchar(100) NOT NULL,
  `Costo` float NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`id_egreso`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `egresos`
--

INSERT INTO `egresos` (`id_egreso`, `N_egreso`, `D_egreso`, `Costo`, `Fecha`) VALUES
(1, 'Renta de sillas ', 'Sillas y mesas para el Dia del Maestro', 500, '2019-05-15'),
(2, 'Soldadura ', 'Paquete de varilla para soldar sillas y mesas de aulas', 250, '2019-08-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

DROP TABLE IF EXISTS `historial`;
CREATE TABLE IF NOT EXISTS `historial` (
  `idHistorial` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Recibo_idFolio` int(10) UNSIGNED NOT NULL,
  `Alumno_idAlumno` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`idHistorial`),
  KEY `Historial_FKIndex1` (`Recibo_idFolio`),
  KEY `Historial_FKIndex2` (`Alumno_idAlumno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacionlaboral`
--

DROP TABLE IF EXISTS `informacionlaboral`;
CREATE TABLE IF NOT EXISTS `informacionlaboral` (
  `idInformacionLaboral` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Estatus` varchar(1) DEFAULT NULL,
  `Horas` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`idInformacionLaboral`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `informacionlaboral`
--

INSERT INTO `informacionlaboral` (`idInformacionLaboral`, `Estatus`, `Horas`) VALUES
(1, 'A', 240);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugarnacimiento`
--

DROP TABLE IF EXISTS `lugarnacimiento`;
CREATE TABLE IF NOT EXISTS `lugarnacimiento` (
  `idLugarNacimiento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Pais` varchar(30) DEFAULT NULL,
  `Estado` varchar(30) DEFAULT NULL,
  `Localidad` varchar(30) DEFAULT NULL,
  `Municipio` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idLugarNacimiento`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lugarnacimiento`
--

INSERT INTO `lugarnacimiento` (`idLugarNacimiento`, `Pais`, `Estado`, `Localidad`, `Municipio`) VALUES
(1, 'Mexico', 'Zacatecas', 'Rio Grande ', 'Rio Grande');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pases`
--

DROP TABLE IF EXISTS `pases`;
CREATE TABLE IF NOT EXISTS `pases` (
  `idPases` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Personal_idPersonal` int(10) UNSIGNED NOT NULL,
  `InicioHora` time DEFAULT NULL,
  `FinHora` time DEFAULT NULL,
  `Observaciones` text,
  `Motivo` text,
  `Fecha` date DEFAULT NULL,
  `TipoES` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`idPases`),
  KEY `Pases_FKIndex1` (`Personal_idPersonal`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

DROP TABLE IF EXISTS `permisos`;
CREATE TABLE IF NOT EXISTS `permisos` (
  `idPermisos` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Personal_idPersonal` int(10) UNSIGNED NOT NULL,
  `Clausula` int(10) UNSIGNED DEFAULT NULL,
  `Asunto` text,
  `Documento` text,
  `Fecha` date DEFAULT NULL,
  `Observaciones` text,
  PRIMARY KEY (`idPermisos`),
  KEY `Permisos_FKIndex1` (`Personal_idPersonal`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

DROP TABLE IF EXISTS `personal`;
CREATE TABLE IF NOT EXISTS `personal` (
  `idPersonal` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `CargaHoraria_idCargaHoraria` int(10) UNSIGNED NOT NULL,
  `InformacionLaboral_idInformacionLaboral` int(10) UNSIGNED NOT NULL,
  `LugarNacimiento_idLugarNacimiento` int(10) UNSIGNED NOT NULL,
  `Domicilio_idDomicilio` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `ApellidoP` varchar(20) DEFAULT NULL,
  `ApellidoM` varchar(20) DEFAULT NULL,
  `NoEmpleado` int(10) UNSIGNED DEFAULT NULL,
  `CURP` varchar(18) DEFAULT NULL,
  `TelefonoCel` varchar(10) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `RFC` varchar(13) DEFAULT NULL,
  `SS` varchar(11) DEFAULT NULL,
  `Departamento` varchar(30) DEFAULT NULL,
  `Puesto` varchar(30) DEFAULT NULL,
  `FechaIngreso` date DEFAULT NULL,
  PRIMARY KEY (`idPersonal`),
  KEY `Personal_FKIndex1` (`Domicilio_idDomicilio`),
  KEY `Personal_FKIndex2` (`LugarNacimiento_idLugarNacimiento`),
  KEY `Personal_FKIndex4` (`InformacionLaboral_idInformacionLaboral`),
  KEY `Personal_FKIndex5` (`CargaHoraria_idCargaHoraria`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`idPersonal`, `CargaHoraria_idCargaHoraria`, `InformacionLaboral_idInformacionLaboral`, `LugarNacimiento_idLugarNacimiento`, `Domicilio_idDomicilio`, `Nombre`, `ApellidoP`, `ApellidoM`, `NoEmpleado`, `CURP`, `TelefonoCel`, `Correo`, `FechaNacimiento`, `RFC`, `SS`, `Departamento`, `Puesto`, `FechaIngreso`) VALUES
(1, 1, 1, 1, 1, 'Luis', 'Castro', 'Almaraz', 189, 'CAAL960118HZSSLS04', '4981093478', 'luis.castro_18@outloook,com', '2014-04-02', 'CAAL78QW12Q12', 'CAAL1401SD1', 'Edificio 2', 'Docente', '2019-02-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo`
--

DROP TABLE IF EXISTS `recibo`;
CREATE TABLE IF NOT EXISTS `recibo` (
  `idFolio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ConceptoDePagoDePago_idConceptoDePago` int(10) UNSIGNED NOT NULL,
  `Alumno_idAlumno` int(10) UNSIGNED NOT NULL,
  `Fecha` date DEFAULT NULL,
  PRIMARY KEY (`idFolio`),
  KEY `Recibo_FKIndex1` (`ConceptoDePagoDePago_idConceptoDePago`),
  KEY `Recibo_FKIndex2` (`Alumno_idAlumno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
