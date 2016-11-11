-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 11, 2016 at 12:19 
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
  `Argazkia` varchar(255) DEFAULT NULL,
  `kontagailua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erabiltzaileak`
--

INSERT INTO `erabiltzaileak` (`IzenAbizena`, `erabiltzaileMota`, `PostaElektronikoa`, `Pasahitza`, `TelefonoZenbakia`, `Espezialitatea`, `Interesak`, `Argazkia`, `kontagailua`) VALUES
('Guest Guest', 'GUEST', 'guest001@ikasle.ehu.eus', '44ab1ddff4c9d0245c1386688dbc7a8be736c03e', 666666666, 'Software', 'INTERESIK_GABE', 'ARGAZKI_GABE', 0),
('Rosa Arruabarrena Santos', 'IRAKASLEA', 'rosa123@ikasle.ehu.eus', '7c4a8d09ca3762af61e59520943dc26494f8941b', 123456789, 'LSI', 'Web sistemak', 'null', 0),
('Inaki Berriotxoa Gabiria', 'USER', 'iberriochoa001@ikasle.ehu.eus', '79437f5edda13f9c0669b978dd7a9066dd2059f1', 123456789, 'software', 'Dronak', 'erabiltzaileIrudiak/iberriochoa001ikasleehueus', 0),
('Web Master', 'IRAKASLEA', 'web000@ehu.es', '9dfab044e4cfcdea8048af43640b6d2f832707bc', 0, 'Softwarea', NULL, 'erabiltzaileIrudiak/web000@ehu.es', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `erabiltzaileak`
--
ALTER TABLE `erabiltzaileak`
  ADD PRIMARY KEY (`PostaElektronikoa`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
