-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2016 a las 22:18:07
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
-- Estructura de tabla para la tabla `konexioak`
--

CREATE TABLE `konexioak` (
  `ID` int(11) NOT NULL,
  `postaElektronikoa` varchar(255) NOT NULL,
  `konexioData` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `konexioak`
--

INSERT INTO `konexioak` (`ID`, `postaElektronikoa`, `konexioData`) VALUES
(12, 'a000@ikasle.ehu.eus', 'Sun, 16 Oct 2016 22:01:47 +0200'),
(13, 'a000@ikasle.ehu.eus', 'Sun, 16 Oct 2016 22:01:53 +0200'),
(14, 'a000@ikasle.ehu.eus', 'Sun, 16 Oct 2016 22:02:01 +0200'),
(15, 'a000@ikasle.ehu.eus', 'Sun, 16 Oct 2016 22:04:23 +0200'),
(16, 'a000@ikasle.ehu.eus', 'Sun, 16 Oct 2016 22:04:31 +0200'),
(17, 'a000@ikasle.ehu.eus', 'Sun, 16 Oct 2016 22:04:36 +0200'),
(18, 'a000@ikasle.ehu.eus', 'Sun, 16 Oct 2016 22:08:47 +0200'),
(19, 'a000@ikasle.ehu.eus', 'Sun, 16 Oct 2016 22:11:47 +0200'),
(20, 'a000@ikasle.ehu.eus', 'Sun, 16 Oct 2016 22:13:46 +0200');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `konexioak`
--
ALTER TABLE `konexioak`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `postaElektronikoa` (`postaElektronikoa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `konexioak`
--
ALTER TABLE `konexioak`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
