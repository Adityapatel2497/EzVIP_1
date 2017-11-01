-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 31, 2017 at 06:12 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezvip`
--

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

DROP TABLE IF EXISTS `package`;
CREATE TABLE IF NOT EXISTS `package` (
  `pno` int(10) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `club` varchar(50) NOT NULL,
  `artist` varchar(50) NOT NULL,
  `com` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  PRIMARY KEY (`pno`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pno`, `pname`, `club`, `artist`, `com`, `total`) VALUES
(1, 'dj night', 'nightclud22', 'chainsomkers', '12', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

DROP TABLE IF EXISTS `party`;
CREATE TABLE IF NOT EXISTS `party` (
  `pno` int(10) NOT NULL AUTO_INCREMENT,
  `club` varchar(50) NOT NULL DEFAULT '',
  `artist` varchar(50) NOT NULL,
  `charge` varchar(20) NOT NULL,
  `guest` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`pno`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`pno`, `club`, `artist`, `charge`, `guest`, `date`, `time`) VALUES
(2, 'baroda Night Club', 'chainsmokers', '4500', '20', '2017-11-04', 'time');

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

DROP TABLE IF EXISTS `quotation`;
CREATE TABLE IF NOT EXISTS `quotation` (
  `Qno` int(10) NOT NULL AUTO_INCREMENT,
  `qname` varchar(30) NOT NULL,
  `cost` varchar(30) NOT NULL,
  `qdetails` varchar(200) NOT NULL,
  `qafrom` varchar(20) NOT NULL,
  `qato` varchar(20) NOT NULL,
  PRIMARY KEY (`Qno`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`Qno`, `qname`, `cost`, `qdetails`, `qafrom`, `qato`) VALUES
(1, 'djnight', '3500', 'will be added soon.........', '2017-10-01', '2017-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

DROP TABLE IF EXISTS `usertable`;
CREATE TABLE IF NOT EXISTS `usertable` (
  `Sno` int(100) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`Sno`, `fname`, `lname`, `email`, `uname`, `dob`, `contact`, `pass`, `type`) VALUES
(1, 'Aditya', 'Patel', 'aadi.2497@gmail.com', 'aadi.2497', '1997-04-02', '7201995510', 'Black2ack', 'a'),
(2, 'Niral', 'Bhagat', '15102004@nuv.ac.in', 'Niral.005', '1992-11-05', '1236547890', 'Pass1234', 'a'),
(11, 'emp', 'common', '333@333.com', 'e', '10-10-2000', '9898493493', 'e', 'e'),
(4, 'Aniruddha', 'Shringapure', 'ani25@gmail.com', 'ani25', '1995-12-25', '9099988555', 'Ani01225', 'v'),
(9, 'Admin', 'common', '1111@111.com', 'a', '12-12-2000', '1233211234', 'a', 'a'),
(10, 'vendor', 'common', '222@222.com', 'v', '11-11-2000', '2121212323', 'v', 'v');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

DROP TABLE IF EXISTS `vendor`;
CREATE TABLE IF NOT EXISTS `vendor` (
  `vno` int(10) NOT NULL AUTO_INCREMENT,
  `vname` varchar(50) NOT NULL,
  `vtype` varchar(2) NOT NULL,
  PRIMARY KEY (`vno`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vno`, `vname`, `vtype`) VALUES
(1, 'Vadodara Night Club', 'c'),
(2, 'baroda Night Club', 'c'),
(3, 'chainsmokers', 'a'),
(4, 'hardwell', 'a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
