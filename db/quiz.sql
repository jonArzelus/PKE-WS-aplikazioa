
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-10-2016 a las 10:47:55
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
-- Estructura de tabla para la tabla `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `galderaZenbakia` int(11) NOT NULL AUTO_INCREMENT,
  `egilePosta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `galderaTestua` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `erantzunTestua` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zailtasuna` set('1','2','3','4','5') COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`galderaZenbakia`),
  FULLTEXT KEY `egilePosta` (`egilePosta`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
