-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-04-2013 a las 18:17:54
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inspecciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cinspecciones`
--

CREATE TABLE IF NOT EXISTS `cinspecciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(200) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `region` varchar(200) DEFAULT NULL,
  `direccion` text,
  `unidadest` varchar(200) DEFAULT NULL,
  `vehiculo` varchar(10) DEFAULT NULL,
  `habitabilidad` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE IF NOT EXISTS `grado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id`, `descripcion`) VALUES
(1, 'General de Brigada'),
(2, 'Coronel'),
(3, 'Teniente Coronel'),
(4, 'Mayor'),
(5, 'Capitan'),
(6, 'Primer Teniente'),
(7, 'Teniente'),
(8, 'Sargento Supervisor'),
(9, 'Sargento Ayudante'),
(10, 'Sargento Mayor 1'),
(11, 'Sargento Mayor 2'),
(12, 'Sargento Mayor 3'),
(13, 'Sargento 1'),
(14, 'Sargento 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(12) DEFAULT NULL,
  `grado` varchar(100) DEFAULT NULL,
  `apellidos` varchar(200) DEFAULT NULL,
  `nombres` varchar(200) DEFAULT NULL,
  `departamento` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `cedula`, `grado`, `apellidos`, `nombres`, `departamento`) VALUES
(8, '12421321', '', '', '', 'Narcoticos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_inspeccion`
--

CREATE TABLE IF NOT EXISTS `personal_inspeccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_inspeccion` varchar(255) DEFAULT NULL,
  `id_personal` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
