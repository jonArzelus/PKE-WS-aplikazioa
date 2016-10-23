-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2016 at 11:41 
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
  `ekintzaMota` set('galdera txertatu','galderak ikusi') NOT NULL,
  `ekintzaData` varchar(255) NOT NULL,
  `IP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekintzak`
--

INSERT INTO `ekintzak` (`ID`, `konexioa`, `postaElektronikoa`, `ekintzaMota`, `ekintzaData`, `IP`) VALUES
(24, 20, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sun, 16 Oct 2016 22:16:37 +0200', '::1'),
(25, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 21:04:52 +0200', '127.0.0.1'),
(26, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 21:09:19 +0200', '127.0.0.1'),
(27, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 21:10:34 +0200', '127.0.0.1'),
(28, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 21:17:19 +0200', '127.0.0.1'),
(29, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 21:17:59 +0200', '127.0.0.1'),
(30, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 21:25:13 +0200', '127.0.0.1'),
(31, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 21:25:20 +0200', '127.0.0.1'),
(32, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 21:25:33 +0200', '127.0.0.1'),
(33, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 21:33:48 +0200', '127.0.0.1'),
(34, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 21:34:50 +0200', '127.0.0.1'),
(35, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 21:41:01 +0200', '127.0.0.1'),
(36, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 21:43:58 +0200', '127.0.0.1'),
(37, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 21:46:02 +0200', '127.0.0.1'),
(38, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 21:53:36 +0200', '127.0.0.1'),
(39, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 21:54:29 +0200', '127.0.0.1'),
(40, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 21:58:31 +0200', '127.0.0.1'),
(41, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 22:35:02 +0200', '127.0.0.1'),
(42, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 22:35:23 +0200', '127.0.0.1'),
(43, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 22:37:54 +0200', '127.0.0.1'),
(44, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 22:38:24 +0200', '127.0.0.1'),
(45, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 22:38:30 +0200', '127.0.0.1'),
(46, 21, 'a000@ikasle.ehu.eus', '', 'Sat, 22 Oct 2016 22:38:33 +0200', '127.0.0.1'),
(47, 21, 'a000@ikasle.ehu.eus', '', 'Sat, 22 Oct 2016 22:46:01 +0200', '127.0.0.1'),
(48, 21, 'a000@ikasle.ehu.eus', '', 'Sat, 22 Oct 2016 22:53:17 +0200', '127.0.0.1'),
(49, 21, 'a000@ikasle.ehu.eus', '', 'Sat, 22 Oct 2016 22:53:18 +0200', '127.0.0.1'),
(50, 21, 'a000@ikasle.ehu.eus', '', 'Sat, 22 Oct 2016 22:56:42 +0200', '127.0.0.1'),
(51, 21, 'a000@ikasle.ehu.eus', '', 'Sat, 22 Oct 2016 22:57:11 +0200', '127.0.0.1'),
(52, 21, 'a000@ikasle.ehu.eus', '', 'Sat, 22 Oct 2016 23:02:15 +0200', '127.0.0.1'),
(53, 21, 'a000@ikasle.ehu.eus', '', 'Sat, 22 Oct 2016 23:02:17 +0200', '127.0.0.1'),
(54, 21, 'a000@ikasle.ehu.eus', '', 'Sat, 22 Oct 2016 23:05:57 +0200', '127.0.0.1'),
(55, 21, 'a000@ikasle.ehu.eus', '', 'Sat, 22 Oct 2016 23:05:59 +0200', '127.0.0.1'),
(56, 21, 'a000@ikasle.ehu.eus', '', 'Sat, 22 Oct 2016 23:07:58 +0200', '127.0.0.1'),
(57, 21, 'a000@ikasle.ehu.eus', '', 'Sat, 22 Oct 2016 23:08:00 +0200', '127.0.0.1'),
(58, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 23:08:26 +0200', '127.0.0.1'),
(59, 21, 'a000@ikasle.ehu.eus', '', 'Sat, 22 Oct 2016 23:08:30 +0200', '127.0.0.1'),
(60, 21, 'a000@ikasle.ehu.eus', '', 'Sat, 22 Oct 2016 23:11:50 +0200', '127.0.0.1'),
(61, 21, 'a000@ikasle.ehu.eus', '', 'Sat, 22 Oct 2016 23:12:30 +0200', '127.0.0.1'),
(62, 21, 'a000@ikasle.ehu.eus', '', 'Sat, 22 Oct 2016 23:12:33 +0200', '127.0.0.1'),
(63, 21, 'a000@ikasle.ehu.eus', 'galdera txertatu', 'Sat, 22 Oct 2016 23:13:49 +0200', '127.0.0.1'),
(64, 21, 'a000@ikasle.ehu.eus', '', 'Sat, 22 Oct 2016 23:13:52 +0200', '127.0.0.1'),
(65, 21, 'a000@ikasle.ehu.eus', '', 'Sat, 22 Oct 2016 23:20:48 +0200', '127.0.0.1'),
(66, 21, 'a000@ikasle.ehu.eus', '', 'Sat, 22 Oct 2016 23:21:05 +0200', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `erabiltzaileak`
--

CREATE TABLE `erabiltzaileak` (
  `IzenAbizena` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `erabiltzaileMota` set('GUEST','USER','ADMIN') NOT NULL,
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
('Guest Guest', 'GUEST', 'guest001@ikasle.ehu.eus', 'guestguest', 666666666, 'Software', 'INTERESIK_GABE', 'ARGAZKI_GABE');

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
(12, 'a000@ikasle.ehu.eus', 'Sun, 16 Oct 2016 22:01:47 +0200'),
(13, 'a000@ikasle.ehu.eus', 'Sun, 16 Oct 2016 22:01:53 +0200'),
(14, 'a000@ikasle.ehu.eus', 'Sun, 16 Oct 2016 22:02:01 +0200'),
(15, 'a000@ikasle.ehu.eus', 'Sun, 16 Oct 2016 22:04:23 +0200'),
(16, 'a000@ikasle.ehu.eus', 'Sun, 16 Oct 2016 22:04:31 +0200'),
(17, 'a000@ikasle.ehu.eus', 'Sun, 16 Oct 2016 22:04:36 +0200'),
(18, 'a000@ikasle.ehu.eus', 'Sun, 16 Oct 2016 22:08:47 +0200'),
(19, 'a000@ikasle.ehu.eus', 'Sun, 16 Oct 2016 22:11:47 +0200'),
(20, 'a000@ikasle.ehu.eus', 'Sun, 16 Oct 2016 22:13:46 +0200'),
(21, 'a000@ikasle.ehu.eus', 'Sat, 22 Oct 2016 20:25:31 +0200');

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
(6, 'a000@ikasle.ehu.eus', 'Donostia nun dago?', 'Gipuzkoan', '1', 'Geografia'),
(7, 'a000@ikasle.ehu.eus', 'Hello', 'aoskd', '1', 'asd'),
(8, 'a000@ikasle.ehu.eus', 'aasd', 'gsdfg', '1', 'asdf'),
(9, 'a000@ikasle.ehu.eus', 'Hellasd', 'sdfl', '1', 'sldkfs'),
(10, 'a000@ikasle.ehu.eus', 'sdah', 'aeg', '1', 'asd'),
(11, 'a000@ikasle.ehu.eus', 'asdf', 'jerth', '1', 'sdfg'),
(12, 'a000@ikasle.ehu.eus', 'fgjdfg', 'ryukrdgh', '1', 'sdfhsrgh'),
(13, 'a000@ikasle.ehu.eus', 'sdf', 'gsdfgh', '1', 'dgfj'),
(14, 'a000@ikasle.ehu.eus', 'asdf', 'sfg', '1', 'ryjk'),
(15, 'a000@ikasle.ehu.eus', 'dsghs', 'hkfghj', '1', 'gsdfg'),
(16, 'a000@ikasle.ehu.eus', 'sadf', 'adfg', '1', 'adfg'),
(17, 'a000@ikasle.ehu.eus', 'sgfh', 'asdg', '1', 'afg'),
(18, 'a000@ikasle.ehu.eus', 'sgfh', 'asdg', '1', 'afg'),
(19, 'a000@ikasle.ehu.eus', 'gfhr', 'asdf', '1', 'asdf'),
(20, 'a000@ikasle.ehu.eus', 'gfhr', 'asdf', '1', 'asdf'),
(21, 'a000@ikasle.ehu.eus', 'asdg', 'asd', '1', 'asf'),
(22, 'a000@ikasle.ehu.eus', 'thefg', 'asdg', '1', 'wrth'),
(23, 'a000@ikasle.ehu.eus', 'thefg', 'asdg', '1', 'wrth');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `konexioak`
--
ALTER TABLE `konexioak`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `galderaZenbakia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
