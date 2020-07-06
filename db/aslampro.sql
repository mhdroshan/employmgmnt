-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2019 at 11:06 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aslampro`
--

-- --------------------------------------------------------

--
-- Table structure for table `empdata`
--

DROP TABLE IF EXISTS `empdata`;
CREATE TABLE IF NOT EXISTS `empdata` (
  `ename` varchar(30) NOT NULL,
  `jobtype` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dailywage` int(30) NOT NULL,
  PRIMARY KEY (`ename`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workdata`
--

DROP TABLE IF EXISTS `workdata`;
CREATE TABLE IF NOT EXISTS `workdata` (
  `namewor` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `locname` varchar(30) NOT NULL,
  `locid1` varchar(30) NOT NULL,
  `locid2` varchar(30) NOT NULL,
  `worprice` varchar(30) NOT NULL,
  `empnames` varchar(100) NOT NULL,
  `wortypeee` varchar(20) NOT NULL,
  `fundrel` varchar(10) NOT NULL,
  `othrex1` varchar(30) NOT NULL,
  `otherx2` varchar(30) NOT NULL,
  `othram1` varchar(20) NOT NULL,
  `othram2` varchar(20) NOT NULL,
  `vehname` varchar(20) NOT NULL,
  PRIMARY KEY (`namewor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workdetails`
--

DROP TABLE IF EXISTS `workdetails`;
CREATE TABLE IF NOT EXISTS `workdetails` (
  `nmofwork` varchar(40) NOT NULL,
  `pricee` varchar(30) NOT NULL,
  `stafreq` int(30) NOT NULL,
  PRIMARY KEY (`nmofwork`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
