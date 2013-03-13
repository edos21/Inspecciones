-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-03-2013 a las 22:44:21
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
  `rif` varchar(30) DEFAULT NULL,
  `empresa` varchar(200) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `region` varchar(200) DEFAULT NULL,
  `direccion` text,
  `unidadest` varchar(200) DEFAULT NULL,
  `vehiculo` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cinspecciones`
--

INSERT INTO `cinspecciones` (`id`, `rif`, `empresa`, `telefono`, `region`, `direccion`, `unidadest`, `vehiculo`) VALUES
(3, '0-12345678-1', 'OVPersonal', '0251-0000000', 'Lara', 'Calle 20 entre carrera 25 y avenida Venezuela', '1000', 'No');

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
  `direccion` text,
  `departamento` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `cedula`, `grado`, `apellidos`, `nombres`, `direccion`, `departamento`) VALUES
(3, '12345678', 'Primer', 'Ovalles', 'Omar', 'Calle 20 entre carrera 25 y avenida Venezuela.', 'Informatica');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
