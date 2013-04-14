-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-04-2013 a las 12:28:44
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Volcado de datos para la tabla `cinspecciones`
--

INSERT INTO `cinspecciones` (`id`, `empresa`, `fecha`, `telefono`, `region`, `direccion`, `unidadest`, `vehiculo`, `habitabilidad`) VALUES
(38, 'Edosistems', '2013-02-03', '0251-2354541', 'Lara', 'Lara.', '10', '3', '5'),
(39, 'Edosistems', '2013-02-10', '0251-2354541', 'Lara.', 'Lara.', '10', '2', '5'),
(41, 'CargoExpress', '2013-03-07', '0212-6213264', 'Lara.', 'Lara.', '10', '12', '7'),
(42, 'MaxMedia', '2013-02-05', '0251-2354541', 'Lara', 'Lara.', '10', '2', '5'),
(44, 'Cuadernos Oh', '2012-08-03', '0251-2466582', 'Lara', 'Lara.', '10', '2', '3'),
(45, 'Vehiculos Hola', '2013-02-07', '0251-3286122', 'Lara', 'Lara.', '10', '2', '3'),
(46, 'Enersto Bar and Coffee', '2013-02-15', '0251-6382130', 'Lara', 'Lara.', '10', '2', '3'),
(47, 'MaxMedia', '2013-02-07', '0251-6322123', 'Lara', 'Lara.', '10', '3', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
