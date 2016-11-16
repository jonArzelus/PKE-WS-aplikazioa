-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2016 a las 12:15:24
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
  `ekintzaMota` set('galdera txertatu','galderak ikusi','xml galderak ikusi','ikaslea begiratu') NOT NULL,
  `ekintzaData` varchar(255) NOT NULL,
  `IP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ekintzak`
--

INSERT INTO `ekintzak` (`ID`, `konexioa`, `postaElektronikoa`, `ekintzaMota`, `ekintzaData`, `IP`) VALUES
(94, -1, 'guest', 'galderak ikusi', 'Sun, 23 Oct 2016 17:59:46 +0200', '127.0.0.1'),
(95, 25, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Sun, 23 Oct 2016 18:04:44 +0200', '127.0.0.1'),
(96, 25, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sun, 23 Oct 2016 18:04:53 +0200', '127.0.0.1'),
(97, 25, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sun, 23 Oct 2016 18:08:37 +0200', '127.0.0.1'),
(98, 25, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sun, 23 Oct 2016 18:09:04 +0200', '127.0.0.1'),
(99, 26, 'rosa123@ikasle.ehu.eus', 'galderak ikusi', 'Sun, 23 Oct 2016 18:10:23 +0200', '127.0.0.1'),
(100, 26, 'rosa123@ikasle.ehu.eus', 'galderak ikusi', 'Sun, 23 Oct 2016 18:10:28 +0200', '127.0.0.1'),
(101, 26, 'rosa123@ikasle.ehu.eus', 'galderak ikusi', 'Sun, 23 Oct 2016 18:12:54 +0200', '127.0.0.1'),
(102, -1, 'guest', 'galderak ikusi', 'Sun, 23 Oct 2016 18:12:59 +0200', '127.0.0.1'),
(103, -1, 'guest', 'galderak ikusi', 'Sun, 23 Oct 2016 18:13:07 +0200', '127.0.0.1'),
(104, -1, 'guest', 'xml galderak ikusi', 'Sun, 23 Oct 2016 18:13:40 +0200', '127.0.0.1'),
(105, 27, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Sun, 23 Oct 2016 18:40:16 +0200', '127.0.0.1'),
(106, 27, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Sun, 23 Oct 2016 18:41:13 +0200', '127.0.0.1'),
(107, 27, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sun, 23 Oct 2016 18:42:36 +0200', '127.0.0.1'),
(108, 27, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Sun, 23 Oct 2016 18:42:46 +0200', '127.0.0.1'),
(109, 27, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Sun, 23 Oct 2016 18:45:00 +0200', '127.0.0.1'),
(110, 28, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Mon, 24 Oct 2016 13:38:27 +0200', '127.0.0.1'),
(111, 28, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Mon, 24 Oct 2016 13:38:30 +0200', '127.0.0.1'),
(112, -1, 'guest', 'xml galderak ikusi', 'Mon, 24 Oct 2016 13:46:57 +0200', '127.0.0.1'),
(113, -1, 'guest', 'xml galderak ikusi', 'Mon, 24 Oct 2016 13:47:02 +0200', '127.0.0.1'),
(114, -1, 'guest', 'xml galderak ikusi', 'Mon, 24 Oct 2016 13:49:03 +0200', '127.0.0.1'),
(115, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Tue, 25 Oct 2016 09:28:44 +0200', '127.0.0.1'),
(116, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Tue, 25 Oct 2016 09:31:13 +0200', '127.0.0.1'),
(117, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Tue, 25 Oct 2016 09:32:46 +0200', '127.0.0.1'),
(118, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Tue, 25 Oct 2016 09:32:47 +0200', '127.0.0.1'),
(119, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Tue, 25 Oct 2016 09:37:20 +0200', '127.0.0.1'),
(120, 29, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Tue, 25 Oct 2016 09:43:10 +0200', '127.0.0.1'),
(121, 29, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Tue, 25 Oct 2016 09:43:13 +0200', '127.0.0.1'),
(122, 30, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Thu, 27 Oct 2016 10:01:05 +0200', '127.0.0.1'),
(123, 30, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Thu, 27 Oct 2016 10:01:43 +0200', '127.0.0.1'),
(124, 30, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Thu, 27 Oct 2016 10:06:22 +0200', '127.0.0.1'),
(125, 30, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Thu, 27 Oct 2016 10:06:54 +0200', '127.0.0.1'),
(126, 30, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Thu, 27 Oct 2016 10:07:06 +0200', '127.0.0.1'),
(127, 30, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Thu, 27 Oct 2016 10:09:10 +0200', '127.0.0.1'),
(128, 30, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Thu, 27 Oct 2016 10:13:34 +0200', '127.0.0.1'),
(129, 30, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Thu, 27 Oct 2016 10:14:49 +0200', '127.0.0.1'),
(130, 30, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Thu, 27 Oct 2016 10:20:32 +0200', '127.0.0.1'),
(131, 30, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Thu, 27 Oct 2016 10:21:38 +0200', '127.0.0.1'),
(132, 30, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Thu, 27 Oct 2016 10:26:40 +0200', '127.0.0.1'),
(133, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sat, 29 Oct 2016 11:44:29 +0200', '127.0.0.1'),
(134, 31, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sat, 29 Oct 2016 12:36:07 +0200', '127.0.0.1'),
(135, 31, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sat, 29 Oct 2016 12:44:46 +0200', '127.0.0.1'),
(136, 31, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sat, 29 Oct 2016 12:46:01 +0200', '127.0.0.1'),
(137, 31, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Sat, 29 Oct 2016 13:00:18 +0200', '127.0.0.1'),
(138, 31, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Sat, 29 Oct 2016 13:02:13 +0200', '127.0.0.1'),
(139, 31, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Sat, 29 Oct 2016 13:02:24 +0200', '127.0.0.1'),
(140, 31, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sat, 29 Oct 2016 13:05:43 +0200', '127.0.0.1'),
(141, 31, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sat, 29 Oct 2016 13:06:20 +0200', '127.0.0.1'),
(142, 31, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sat, 29 Oct 2016 13:06:24 +0200', '127.0.0.1'),
(143, 31, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Sat, 29 Oct 2016 13:40:23 +0200', '127.0.0.1'),
(144, 31, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Sat, 29 Oct 2016 13:50:04 +0200', '127.0.0.1'),
(145, 31, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sat, 29 Oct 2016 13:50:06 +0200', '127.0.0.1'),
(146, 31, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sat, 29 Oct 2016 14:04:52 +0200', '127.0.0.1'),
(147, 31, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sat, 29 Oct 2016 14:10:38 +0200', '127.0.0.1'),
(148, 31, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sat, 29 Oct 2016 14:22:37 +0200', '127.0.0.1'),
(149, 32, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sat, 29 Oct 2016 15:52:45 +0200', '127.0.0.1'),
(150, 32, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sat, 29 Oct 2016 16:13:14 +0200', '127.0.0.1'),
(151, 33, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sun, 30 Oct 2016 00:32:05 +0200', '127.0.0.1'),
(152, 33, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sun, 30 Oct 2016 00:33:09 +0200', '127.0.0.1'),
(153, 33, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sun, 30 Oct 2016 00:55:40 +0200', '127.0.0.1'),
(154, 33, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sun, 30 Oct 2016 01:05:18 +0200', '127.0.0.1'),
(155, 34, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sun, 30 Oct 2016 12:16:13 +0100', '127.0.0.1'),
(156, 34, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sun, 30 Oct 2016 12:19:44 +0100', '127.0.0.1'),
(157, 34, 'inaki123@ikasle.ehu.es', 'galdera txertatu', 'Sun, 30 Oct 2016 12:25:40 +0100', '127.0.0.1'),
(158, 34, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sun, 30 Oct 2016 12:26:04 +0100', '127.0.0.1'),
(159, 34, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sun, 30 Oct 2016 12:33:40 +0100', '127.0.0.1'),
(160, 34, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sun, 30 Oct 2016 12:34:57 +0100', '127.0.0.1'),
(161, 34, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sun, 30 Oct 2016 12:34:59 +0100', '127.0.0.1'),
(162, 34, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sun, 30 Oct 2016 12:38:01 +0100', '127.0.0.1'),
(163, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:23:03 +0100', '::1'),
(164, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:23:15 +0100', '::1'),
(165, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:23:25 +0100', '::1'),
(166, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:23:26 +0100', '::1'),
(167, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:23:27 +0100', '::1'),
(168, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:23:28 +0100', '::1'),
(169, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:23:28 +0100', '::1'),
(170, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:23:40 +0100', '::1'),
(171, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:23:55 +0100', '::1'),
(172, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:23:55 +0100', '::1'),
(173, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:31:05 +0100', '::1'),
(174, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:31:17 +0100', '::1'),
(175, 35, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Fri, 04 Nov 2016 18:31:40 +0100', '::1'),
(176, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:31:57 +0100', '::1'),
(177, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:32:09 +0100', '::1'),
(178, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:34:37 +0100', '::1'),
(179, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:34:38 +0100', '::1'),
(180, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:34:46 +0100', '::1'),
(181, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:34:49 +0100', '::1'),
(182, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:35:24 +0100', '::1'),
(183, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:35:32 +0100', '::1'),
(184, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:39:30 +0100', '::1'),
(185, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:41:01 +0100', '::1'),
(186, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:41:11 +0100', '::1'),
(187, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:41:15 +0100', '::1'),
(188, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:42:14 +0100', '::1'),
(189, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:43:52 +0100', '::1'),
(190, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:47:51 +0100', '::1'),
(191, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:48:17 +0100', '::1'),
(192, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:54:36 +0100', '::1'),
(193, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:54:46 +0100', '::1'),
(194, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:55:29 +0100', '::1'),
(195, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:55:39 +0100', '::1'),
(196, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:55:50 +0100', '::1'),
(197, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:55:51 +0100', '::1'),
(198, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:55:59 +0100', '::1'),
(199, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:56:00 +0100', '::1'),
(200, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:56:00 +0100', '::1'),
(201, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 18:57:39 +0100', '::1'),
(202, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:14:42 +0100', '::1'),
(203, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:15:03 +0100', '::1'),
(204, 35, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:15:05 +0100', '::1'),
(205, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:15:40 +0100', '::1'),
(206, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:27:31 +0100', '::1'),
(207, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:27:50 +0100', '::1'),
(208, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:28:12 +0100', '::1'),
(209, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:29:18 +0100', '::1'),
(210, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:31:46 +0100', '::1'),
(211, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:31:46 +0100', '::1'),
(212, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:33:34 +0100', '::1'),
(213, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:34:01 +0100', '::1'),
(214, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:34:27 +0100', '::1'),
(215, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:34:45 +0100', '::1'),
(216, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:35:04 +0100', '::1'),
(217, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:35:49 +0100', '::1'),
(218, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:36:45 +0100', '::1'),
(219, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:37:29 +0100', '::1'),
(220, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:37:38 +0100', '::1'),
(221, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:37:44 +0100', '::1'),
(222, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:37:53 +0100', '::1'),
(223, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:38:05 +0100', '::1'),
(224, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:38:13 +0100', '::1'),
(225, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:38:51 +0100', '::1'),
(226, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:44:02 +0100', '::1'),
(227, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:44:07 +0100', '::1'),
(228, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:44:25 +0100', '::1'),
(229, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:44:59 +0100', '::1'),
(230, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:45:17 +0100', '::1'),
(231, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:45:27 +0100', '::1'),
(232, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:45:35 +0100', '::1'),
(233, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:45:50 +0100', '::1'),
(234, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:45:51 +0100', '::1'),
(235, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:47:22 +0100', '::1'),
(236, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:47:38 +0100', '::1'),
(237, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:47:39 +0100', '::1'),
(238, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:48:28 +0100', '::1'),
(239, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:48:30 +0100', '::1'),
(240, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:48:43 +0100', '::1'),
(241, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:49:22 +0100', '::1'),
(242, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:49:47 +0100', '::1'),
(243, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:49:48 +0100', '::1'),
(244, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:49:53 +0100', '::1'),
(245, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:50:48 +0100', '::1'),
(246, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:51:28 +0100', '::1'),
(247, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:51:29 +0100', '::1'),
(248, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:51:44 +0100', '::1'),
(249, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:52:12 +0100', '::1'),
(250, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:53:24 +0100', '::1'),
(251, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:53:47 +0100', '::1'),
(252, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:55:42 +0100', '::1'),
(253, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 22:59:20 +0100', '::1'),
(254, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 23:08:46 +0100', '::1'),
(255, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 23:08:46 +0100', '::1'),
(256, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 23:13:55 +0100', '::1'),
(257, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 23:21:48 +0100', '::1'),
(258, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 23:22:47 +0100', '::1'),
(259, 36, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 23:24:06 +0100', '::1'),
(260, 39, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Fri, 04 Nov 2016 23:59:22 +0100', '::1'),
(261, 39, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Sat, 05 Nov 2016 00:02:48 +0100', '::1'),
(262, 41, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Sun, 06 Nov 2016 01:22:14 +0100', '::1'),
(263, 41, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Sun, 06 Nov 2016 01:24:53 +0100', '::1'),
(264, 41, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Sun, 06 Nov 2016 01:28:19 +0100', '::1'),
(265, 41, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Sun, 06 Nov 2016 01:36:12 +0100', '::1'),
(266, 41, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Sun, 06 Nov 2016 01:38:27 +0100', '::1'),
(267, 41, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Sun, 06 Nov 2016 01:38:57 +0100', '::1'),
(268, 41, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Sun, 06 Nov 2016 01:40:17 +0100', '::1'),
(269, 41, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Sun, 06 Nov 2016 01:40:20 +0100', '::1'),
(270, 41, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Sun, 06 Nov 2016 01:40:24 +0100', '::1'),
(271, 41, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Sun, 06 Nov 2016 01:40:59 +0100', '::1'),
(272, 41, 'a000@ikasle.ehu.eus', 'xml galderak ikusi', 'Sun, 06 Nov 2016 01:44:25 +0100', '::1'),
(273, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 01:49:15 +0100', '::1'),
(274, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 02:19:01 +0100', '::1'),
(275, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 02:31:32 +0100', '::1'),
(276, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 02:33:12 +0100', '::1'),
(277, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 02:34:45 +0100', '::1'),
(278, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 02:38:55 +0100', '::1'),
(279, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 02:40:30 +0100', '::1'),
(280, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 02:40:31 +0100', '::1'),
(281, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 02:40:33 +0100', '::1'),
(282, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 02:41:05 +0100', '::1'),
(283, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 02:41:08 +0100', '::1'),
(284, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 02:41:11 +0100', '::1'),
(285, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 02:41:12 +0100', '::1'),
(286, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 02:41:12 +0100', '::1'),
(287, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 02:42:43 +0100', '::1'),
(288, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 02:43:01 +0100', '::1'),
(289, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 23:16:35 +0100', '::1'),
(290, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 23:16:40 +0100', '::1'),
(291, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 23:16:44 +0100', '::1'),
(292, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 23:16:51 +0100', '::1'),
(293, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 23:17:00 +0100', '::1'),
(294, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 23:17:03 +0100', '::1'),
(295, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 23:17:03 +0100', '::1'),
(296, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 23:17:03 +0100', '::1'),
(297, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 23:17:04 +0100', '::1'),
(298, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Sun, 06 Nov 2016 23:17:05 +0100', '::1'),
(299, -1, 'Erabiltzaile Anonimoa', 'xml galderak ikusi', 'Mon, 07 Nov 2016 00:34:04 +0100', '::1'),
(300, 42, 'rosa123@ikasle.ehu.eus', 'xml galderak ikusi', 'Thu, 10 Nov 2016 09:09:56 +0100', '::1'),
(301, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 22:42:35 +0100', '::1'),
(302, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 22:42:47 +0100', '::1'),
(303, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 22:47:33 +0100', '::1'),
(304, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 22:47:41 +0100', '::1'),
(305, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:05:49 +0100', '::1'),
(306, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:30:31 +0100', '::1'),
(307, 45, 'web000@ehu.es', 'galdera txertatu', 'Sun, 13 Nov 2016 23:30:42 +0100', '::1'),
(308, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:30:55 +0100', '::1'),
(309, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:31:06 +0100', '::1'),
(310, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:31:29 +0100', '::1'),
(311, 45, 'web000@ehu.es', 'galdera txertatu', 'Sun, 13 Nov 2016 23:31:35 +0100', '::1'),
(312, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:32:11 +0100', '::1'),
(313, 45, 'web000@ehu.es', 'galdera txertatu', 'Sun, 13 Nov 2016 23:32:26 +0100', '::1'),
(314, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:32:27 +0100', '::1'),
(315, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:37:38 +0100', '::1'),
(316, 45, 'web000@ehu.es', 'galdera txertatu', 'Sun, 13 Nov 2016 23:37:44 +0100', '::1'),
(317, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:38:50 +0100', '::1'),
(318, 45, 'web000@ehu.es', 'galdera txertatu', 'Sun, 13 Nov 2016 23:39:22 +0100', '::1'),
(319, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:41:10 +0100', '::1'),
(320, 45, 'web000@ehu.es', 'galdera txertatu', 'Sun, 13 Nov 2016 23:41:14 +0100', '::1'),
(321, 45, 'web000@ehu.es', 'galdera txertatu', 'Sun, 13 Nov 2016 23:41:36 +0100', '::1'),
(322, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:41:43 +0100', '::1'),
(323, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:41:47 +0100', '::1'),
(324, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:42:06 +0100', '::1'),
(325, 45, 'web000@ehu.es', 'galdera txertatu', 'Sun, 13 Nov 2016 23:42:12 +0100', '::1'),
(326, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:42:18 +0100', '::1'),
(327, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:43:57 +0100', '::1'),
(328, 45, 'web000@ehu.es', 'galdera txertatu', 'Sun, 13 Nov 2016 23:44:02 +0100', '::1'),
(329, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:44:12 +0100', '::1'),
(330, 45, 'web000@ehu.es', 'galdera txertatu', 'Sun, 13 Nov 2016 23:44:27 +0100', '::1'),
(331, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:44:41 +0100', '::1'),
(332, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:44:52 +0100', '::1'),
(333, 45, 'web000@ehu.es', 'galdera txertatu', 'Sun, 13 Nov 2016 23:44:58 +0100', '::1'),
(334, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:45:00 +0100', '::1'),
(335, 45, 'web000@ehu.es', 'galdera txertatu', 'Sun, 13 Nov 2016 23:47:04 +0100', '::1'),
(336, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:47:14 +0100', '::1'),
(337, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:47:22 +0100', '::1'),
(338, 45, 'web000@ehu.es', 'galdera txertatu', 'Sun, 13 Nov 2016 23:47:26 +0100', '::1'),
(339, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:47:27 +0100', '::1'),
(340, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Sun, 13 Nov 2016 23:47:32 +0100', '::1'),
(341, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Wed, 16 Nov 2016 12:09:39 +0100', '::1'),
(342, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Wed, 16 Nov 2016 12:10:24 +0100', '::1'),
(343, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Wed, 16 Nov 2016 12:12:41 +0100', '::1'),
(344, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Wed, 16 Nov 2016 12:14:03 +0100', '::1'),
(345, 45, 'web000@ehu.es', 'xml galderak ikusi', 'Wed, 16 Nov 2016 12:14:29 +0100', '::1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `erabiltzaileak`
--

CREATE TABLE `erabiltzaileak` (
  `IzenAbizena` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `erabiltzaileMota` set('GUEST','USER','IRAKASLEA','ADMIN') NOT NULL,
  `PostaElektronikoa` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `Pasahitza` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `TelefonoZenbakia` int(9) NOT NULL,
  `Espezialitatea` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `Interesak` text CHARACTER SET latin1 COLLATE latin1_spanish_ci,
  `Argazkia` varchar(255) DEFAULT NULL,
  `kontagailua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `erabiltzaileak`
--

INSERT INTO `erabiltzaileak` (`IzenAbizena`, `erabiltzaileMota`, `PostaElektronikoa`, `Pasahitza`, `TelefonoZenbakia`, `Espezialitatea`, `Interesak`, `Argazkia`, `kontagailua`) VALUES
('Guest Guest', 'GUEST', 'guest001@ikasle.ehu.eus', '44ab1ddff4c9d0245c1386688dbc7a8be736c03e', 666666666, 'Software', 'INTERESIK_GABE', 'ARGAZKI_GABE', 0),
('Rosa Arruabarrena Santos', 'IRAKASLEA', 'rosa123@ikasle.ehu.eus', '7c4a8d09ca3762af61e59520943dc26494f8941b', 123456789, 'LSI', 'Web sistemak', 'null', 0),
('Inaki Berriotxoa Gabiria', 'USER', 'iberriochoa001@ikasle.ehu.eus', '79437f5edda13f9c0669b978dd7a9066dd2059f1', 123456789, 'software', 'Dronak', 'erabiltzaileIrudiak/iberriochoa001ikasleehueus', 0),
('Web Master', 'IRAKASLEA', 'web000@ehu.es', '9dfab044e4cfcdea8048af43640b6d2f832707bc', 0, 'Softwarea', NULL, 'erabiltzaileIrudiak/web000@ehu.es', 0);

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
(25, 'inaki123@ikasle.ehu.es', 'Sun, 23 Oct 2016 18:03:59 +0200'),
(26, 'rosa123@ikasle.ehu.eus', 'Sun, 23 Oct 2016 18:09:20 +0200'),
(27, 'inaki123@ikasle.ehu.es', 'Sun, 23 Oct 2016 18:39:59 +0200'),
(28, 'inaki123@ikasle.ehu.es', 'Mon, 24 Oct 2016 13:38:16 +0200'),
(29, 'inaki123@ikasle.ehu.es', 'Tue, 25 Oct 2016 09:43:04 +0200'),
(30, 'inaki123@ikasle.ehu.es', 'Thu, 27 Oct 2016 09:43:52 +0200'),
(31, 'inaki123@ikasle.ehu.es', 'Sat, 29 Oct 2016 11:44:53 +0200'),
(32, 'inaki123@ikasle.ehu.es', 'Sat, 29 Oct 2016 15:34:07 +0200'),
(33, 'inaki123@ikasle.ehu.es', 'Sun, 30 Oct 2016 00:10:01 +0200'),
(34, 'inaki123@ikasle.ehu.es', 'Sun, 30 Oct 2016 12:11:22 +0100'),
(35, 'a000@ikasle.ehu.eus', 'Fri, 04 Nov 2016 18:31:10 +0100'),
(36, 'rosa123@ikasle.ehu.eus', 'Fri, 04 Nov 2016 22:15:16 +0100'),
(37, 'a000@ikasle.ehu.eus', 'Fri, 04 Nov 2016 23:30:39 +0100'),
(38, 'a000@ikasle.ehu.eus', 'Fri, 04 Nov 2016 23:39:24 +0100'),
(39, 'a000@ikasle.ehu.eus', 'Fri, 04 Nov 2016 23:40:25 +0100'),
(40, 'a000@ikasle.ehu.eus', 'Sat, 05 Nov 2016 01:14:38 +0100'),
(41, 'a000@ikasle.ehu.eus', 'Sun, 06 Nov 2016 01:19:51 +0100'),
(42, 'rosa123@ikasle.ehu.eus', 'Thu, 10 Nov 2016 09:09:51 +0100'),
(43, 'rosa123@ikasle.ehu.eus', 'Thu, 10 Nov 2016 09:35:16 +0100'),
(44, 'web000@ehu.es', 'Thu, 10 Nov 2016 09:41:38 +0100'),
(45, 'web000@ehu.es', 'Sun, 13 Nov 2016 22:37:14 +0100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quiz`
--

CREATE TABLE `quiz` (
  `galderaZenbakia` int(11) NOT NULL,
  `egilePosta` varchar(255) NOT NULL,
  `galderaTestua` varchar(255) NOT NULL,
  `erantzunTestua` varchar(255) NOT NULL,
  `zailtasuna` set('1','2','3','4','5') DEFAULT NULL,
  `galderaArloa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `quiz`
--

INSERT INTO `quiz` (`galderaZenbakia`, `egilePosta`, `galderaTestua`, `erantzunTestua`, `zailtasuna`, `galderaArloa`) VALUES
(30, 'web000@ehu.es', 'Amanita muskaria zer da?', 'Setatxo bat', '1', 'mikologia');

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
-- Indices de la tabla `erabiltzaileak`
--
ALTER TABLE `erabiltzaileak`
  ADD PRIMARY KEY (`PostaElektronikoa`);

--
-- Indices de la tabla `konexioak`
--
ALTER TABLE `konexioak`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `postaElektronikoa` (`postaElektronikoa`);

--
-- Indices de la tabla `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`galderaZenbakia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ekintzak`
--
ALTER TABLE `ekintzak`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=346;
--
-- AUTO_INCREMENT de la tabla `konexioak`
--
ALTER TABLE `konexioak`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT de la tabla `quiz`
--
ALTER TABLE `quiz`
  MODIFY `galderaZenbakia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
