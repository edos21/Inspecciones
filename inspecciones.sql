-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
<<<<<<< HEAD
-- Tiempo de generación: 14-04-2013 a las 18:17:54
=======
-- Tiempo de generación: 14-04-2013 a las 12:55:26
>>>>>>> 5a13034e53559dee4f5656eafbb9c6807f14b95d
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
<<<<<<< HEAD
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;
=======
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
>>>>>>> 5a13034e53559dee4f5656eafbb9c6807f14b95d

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
<<<<<<< HEAD
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;
=======
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;
>>>>>>> 5a13034e53559dee4f5656eafbb9c6807f14b95d

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `cedula`, `grado`, `apellidos`, `nombres`, `departamento`) VALUES
<<<<<<< HEAD
(8, '12421321', '', '', '', 'Narcoticos');
=======
(7, '12653452', '4', 'Ovalles', 'Omar', 'Informatica'),
(8, '12421321', '', '', '', 'Narcoticos'),
(9, '7653212', '5', 'Lopez', 'Jose', 'Narcoticos'),
(10, '12078653', '5', 'Rodriguez', 'Jose', 'Informatica'),
(11, '10986321', '2', 'Mendoza', 'Jose', 'Narcoticos');
>>>>>>> 5a13034e53559dee4f5656eafbb9c6807f14b95d

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_inspeccion`
--

CREATE TABLE IF NOT EXISTS `personal_inspeccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_inspeccion` varchar(255) DEFAULT NULL,
  `id_personal` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
<<<<<<< HEAD
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;
=======
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Volcado de datos para la tabla `personal_inspeccion`
--

INSERT INTO `personal_inspeccion` (`id`, `id_inspeccion`, `id_personal`) VALUES
(33, '38', '8'),
(34, '38', '9'),
(35, '39', '9'),
(36, '40', '8'),
(37, '40', '7'),
(38, '41', '8'),
(39, '42', '7'),
(40, '43', '7'),
(41, '44', '11'),
(42, '44', '10'),
(43, '45', '11'),
(44, '46', '10'),
(45, '46', '9'),
(46, '47', '7');
>>>>>>> 5a13034e53559dee4f5656eafbb9c6807f14b95d

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
