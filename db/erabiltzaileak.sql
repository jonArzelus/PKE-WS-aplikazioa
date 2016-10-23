-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2016 at 06:15 
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
(104, -1, 'guest', 'xml galderak ikusi', 'Sun, 23 Oct 2016 18:13:40 +0200', '127.0.0.1');

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
('Inaki Berriotxoa Gabiria', 'USER', 'inaki123@ikasle.ehu.es', '123456', 987654321, 'software', 'Droneak', 'erabiltzaileIrudiak/inaki123ikasleehues');

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
(26, 'rosa123@ikasle.ehu.eus', 'Sun, 23 Oct 2016 18:09:20 +0200');

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
(27, 'inaki123@ikasle.ehu.es', 'Non dago Wally?', 'San mamesen', '3', 'Humorea');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `konexioak`
--
ALTER TABLE `konexioak`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `galderaZenbakia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
