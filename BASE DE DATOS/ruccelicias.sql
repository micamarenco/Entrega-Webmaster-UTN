-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-12-2019 a las 01:56:53
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ruccelicias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coberturas`
--

DROP TABLE IF EXISTS `coberturas`;
CREATE TABLE IF NOT EXISTS `coberturas` (
  `id-cobertura` int(11) NOT NULL AUTO_INCREMENT,
  `cobertura` varchar(50) NOT NULL,
  `precio` varchar(4) NOT NULL,
  PRIMARY KEY (`id-cobertura`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `coberturas`
--

INSERT INTO `coberturas` (`id-cobertura`, `cobertura`, `precio`) VALUES
(1, 'Con Frutas', '40'),
(2, 'Chocolates', '50'),
(3, 'Fondant', '45'),
(4, 'Granas', '40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

DROP TABLE IF EXISTS `consulta`;
CREATE TABLE IF NOT EXISTS `consulta` (
  `id-cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  PRIMARY KEY (`id-cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id-cliente`, `nombre`, `email`, `comentario`) VALUES
(1, 'gonzalo', 'rgers@dfgr', 'regt'),
(2, '', '', ''),
(3, 'efr', 'wd@casd', 'sd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formas`
--

DROP TABLE IF EXISTS `formas`;
CREATE TABLE IF NOT EXISTS `formas` (
  `id-forma` int(11) NOT NULL AUTO_INCREMENT,
  `forma` varchar(50) NOT NULL,
  `precio` varchar(4) NOT NULL,
  PRIMARY KEY (`id-forma`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `formas`
--

INSERT INTO `formas` (`id-forma`, `forma`, `precio`) VALUES
(1, 'Cuadrada', '0'),
(2, 'Rectangular', '15'),
(3, 'Circular', '10'),
(4, 'Numerica', '40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `id-pedido` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `relleno` varchar(50) NOT NULL,
  `cobertura` varchar(50) NOT NULL,
  `forma` varchar(50) NOT NULL,
  `cantidad-pisos` varchar(10) NOT NULL,
  `color` varchar(50) NOT NULL,
  `aclaraciones` varchar(255) NOT NULL,
  PRIMARY KEY (`id-pedido`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id-pedido`, `nombre`, `email`, `producto`, `relleno`, `cobertura`, `forma`, `cantidad-pisos`, `color`, `aclaraciones`) VALUES
(1, 'th', 'thr', 'defecto', 'defecto', 'defecto', 'defecto', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pisos`
--

DROP TABLE IF EXISTS `pisos`;
CREATE TABLE IF NOT EXISTS `pisos` (
  `id-piso` int(11) NOT NULL AUTO_INCREMENT,
  `piso` varchar(50) NOT NULL,
  `precio` varchar(50) NOT NULL,
  PRIMARY KEY (`id-piso`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pisos`
--

INSERT INTO `pisos` (`id-piso`, `piso`, `precio`) VALUES
(1, 'Piso Extra', '100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id-producto` int(11) NOT NULL AUTO_INCREMENT,
  `producto` varchar(50) NOT NULL,
  `precio` varchar(4) NOT NULL,
  PRIMARY KEY (`id-producto`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id-producto`, `producto`, `precio`) VALUES
(1, 'Torta', '300'),
(2, 'Brownie', '250'),
(3, 'Tiramisu', '300'),
(4, 'Profiteroles', '250'),
(5, 'CupCakes', '200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rellenos`
--

DROP TABLE IF EXISTS `rellenos`;
CREATE TABLE IF NOT EXISTS `rellenos` (
  `id-relleno` int(11) NOT NULL AUTO_INCREMENT,
  `relleno` varchar(50) NOT NULL,
  `precio` varchar(4) NOT NULL,
  PRIMARY KEY (`id-relleno`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rellenos`
--

INSERT INTO `rellenos` (`id-relleno`, `relleno`, `precio`) VALUES
(1, 'Dulce de Leche', '25'),
(2, 'Chocolate', '25'),
(3, 'Nutella', '30'),
(4, 'Crema', '25'),
(5, 'Crema con Durazno', '40'),
(6, 'Crema con Frutillas', '40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
