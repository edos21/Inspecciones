-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-03-2013 a las 22:19:08
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `cinspecciones`
--

INSERT INTO `cinspecciones` (`id`, `rif`, `empresa`, `telefono`, `region`, `direccion`, `unidadest`, `vehiculo`) VALUES
(21, 'dfgdf', 'fdgdf', 'gdfg', 'fd', 'gdfgd					', 'fgdfg', 'Si'),
(22, 'V-12586321-E', 'Samsung', '0212-1223565', 'Caracas', '						Caracas					', '100', 'Si');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `cedula`, `grado`, `apellidos`, `nombres`, `direccion`, `departamento`) VALUES
(3, '12345678x', 'Primerx', 'Ovallesx', 'Omarx', 'Calle 20 entre carrera 25 y avenida Venezuela.', 'Informaticax'),
(4, '12363656', 'Primero', 'Carlos', 'Rodriguez', 'Caracas, Av. Plaza, Edificio Homero', 'Narcoticos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_inspeccion`
--

CREATE TABLE IF NOT EXISTS `personal_inspeccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_inspeccion` varchar(255) DEFAULT NULL,
  `id_personal` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `personal_inspeccion`
--

INSERT INTO `personal_inspeccion` (`id`, `id_inspeccion`, `id_personal`) VALUES
(13, '21', '3'),
(14, '21', '3'),
(15, '22', '4'),
(16, '22', '4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
