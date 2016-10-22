-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2016 a las 22:18:16
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `erabiltzaileak`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ekintzak`
--

CREATE TABLE `ekintzak` (
  `ID` int(11) NOT NULL,
  `konexioa` int(11) NOT NULL,
  `postaElektronikoa` varchar(255) NOT NULL,
  `ekintzaMota` set('galdera txertatu','galderak ikusi') NOT NULL,
  `ekintzaData` varchar(255) NOT NULL,
  `IP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ekintzak`
--

INSERT INTO `ekintzak` (`ID`, `konexioa`, `postaElektronikoa`, `ekintzaMota`, `ekintzaData`, `IP`) VALUES
(24, 20, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sun, 16 Oct 2016 22:16:37 +0200', '::1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ekintzak`
--
ALTER TABLE `ekintzak`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `konexioa` (`konexioa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ekintzak`
--
ALTER TABLE `ekintzak`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
