
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-10-2016 a las 10:47:27
-- Versión del servidor: 10.0.20-MariaDB
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u880556081_perts`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erabiltzaileak`
--

CREATE TABLE IF NOT EXISTS `erabiltzaileak` (
  `IzenAbizena` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `PostaElektronikoa` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `Pasahitza` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `TelefonoZenbakia` int(9) NOT NULL,
  `Espezialitatea` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `Interesak` text CHARACTER SET latin1 COLLATE latin1_spanish_ci,
  `Argazkia` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`PostaElektronikoa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `erabiltzaileak`
--

INSERT INTO `erabiltzaileak` (`IzenAbizena`, `PostaElektronikoa`, `Pasahitza`, `TelefonoZenbakia`, `Espezialitatea`, `Interesak`, `Argazkia`) VALUES
('Jon Arzelus', 'jarzelus001@ikasle.ehu.eus', 'asdfasdf', 666666666, 'software', 'asdf', 'irudiak/CAT.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
