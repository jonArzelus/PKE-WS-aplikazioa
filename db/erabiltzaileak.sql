-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2016 at 12:41 
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erabiltzaileak`
--

-- --------------------------------------------------------

--
-- Table structure for table `ekintzak`
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
-- Dumping data for table `ekintzak`
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
(162, 34, 'inaki123@ikasle.ehu.es', 'xml galderak ikusi', 'Sun, 30 Oct 2016 12:38:01 +0100', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `erabiltzaileak`
--

CREATE TABLE `erabiltzaileak` (
  `IzenAbizena` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `erabiltzaileMota` set('GUEST','USER','IRAKASLEA','ADMIN') NOT NULL,
  `PostaElektronikoa` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `Pasahitza` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `TelefonoZenbakia` int(9) NOT NULL,
  `Espezialitatea` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `Interesak` text CHARACTER SET latin1 COLLATE latin1_spanish_ci,
  `Argazkia` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erabiltzaileak`
--

INSERT INTO `erabiltzaileak` (`IzenAbizena`, `erabiltzaileMota`, `PostaElektronikoa`, `Pasahitza`, `TelefonoZenbakia`, `Espezialitatea`, `Interesak`, `Argazkia`) VALUES
('Peñi Elaska', 'USER', 'a000@ikasle.ehu.eus', 'asdfasdfasdf', 666666666, 'software', 'INTERESIK_GABE', 'ARGAZKI_GABE'),
('Guest Guest', 'GUEST', 'guest001@ikasle.ehu.eus', 'guestguest', 666666666, 'Software', 'INTERESIK_GABE', 'ARGAZKI_GABE'),
('Rosa Arruabarrena Santos', 'IRAKASLEA', 'rosa123@ikasle.ehu.eus', '123456', 123456789, 'LSI', 'Web sistemak', 'null'),
('Jon Arzelus', 'USER', 'jon123@ikasle.ehu.es', '123456', 987654321, 'software', 'Robotak', 'erabiltzaileIrudiak/jon123ikasleehues'),
('Inaki Berriotxoa Gabiria', 'USER', 'inaki123@ikasle.ehu.es', '123456', 987654321, 'software', 'Droneak', 'erabiltzaileIrudiak/inaki123ikasleehues'),
('Aitor Mendilikueta', 'USER', 'aitor123@ikasle.ehu.es', '123456', 123456789, 'software', '', 'ARGAZKI_GABE');

-- --------------------------------------------------------

--
-- Table structure for table `konexioak`
--

CREATE TABLE `konexioak` (
  `ID` int(11) NOT NULL,
  `postaElektronikoa` varchar(255) NOT NULL,
  `konexioData` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konexioak`
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
(34, 'inaki123@ikasle.ehu.es', 'Sun, 30 Oct 2016 12:11:22 +0100');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
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
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`galderaZenbakia`, `egilePosta`, `galderaTestua`, `erantzunTestua`, `zailtasuna`, `galderaArloa`) VALUES
(1, 'a000@ikasle.ehu.eus', 'Zein da munduko hiriburua?', 'Urretxu', '1', 'Geografia'),
(2, 'a000@ikasle.ehu.eus', 'Goxoa al dago txokolatea?', 'Bai', '1', 'Gastronomia'),
(3, 'a000@ikasle.ehu.eus', 'Zein egun da gaur?', 'Mozkortzeko eguna', '1', 'Edariak'),
(4, 'a000@ikasle.ehu.eus', 'Zein da munduko hiriburua?', 'Urretxu', '1', 'Geografia'),
(5, 'a000@ikasle.ehu.eus', 'Donostia nun dago?', 'Gipuzkoan', '1', 'Geografia'),
(27, 'inaki123@ikasle.ehu.es', 'Non dago Wally?', 'San mamesen', '3', 'Humorea'),
(28, 'inaki123@ikasle.ehu.es', 'Zergatik bai?', 'Zergatik ez?', '1', 'filosofia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ekintzak`
--
ALTER TABLE `ekintzak`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `konexioa` (`konexioa`);

--
-- Indexes for table `erabiltzaileak`
--
ALTER TABLE `erabiltzaileak`
  ADD PRIMARY KEY (`PostaElektronikoa`);

--
-- Indexes for table `konexioak`
--
ALTER TABLE `konexioak`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `postaElektronikoa` (`postaElektronikoa`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`galderaZenbakia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ekintzak`
--
ALTER TABLE `ekintzak`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;
--
-- AUTO_INCREMENT for table `konexioak`
--
ALTER TABLE `konexioak`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `galderaZenbakia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
