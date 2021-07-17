-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 17, 2021 at 02:18 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodsamples`
--

DROP TABLE IF EXISTS `bloodsamples`;
CREATE TABLE IF NOT EXISTS `bloodsamples` (
  `donorName` varchar(50) NOT NULL,
  `donorEmail` varchar(50) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `bloodGroup` varchar(11) NOT NULL,
  `hcontact` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `entryDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

DROP TABLE IF EXISTS `hospitals`;
CREATE TABLE IF NOT EXISTS `hospitals` (
  `hname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(11) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `entryDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hname`, `email`, `pass`, `phone`, `city`, `entryDate`) VALUES
('Hemant Society Hospital', 'hemant@gmail.com', '17563740df9', '67563456', 'Saharanpur', '2021-07-17 13:28:30');

-- --------------------------------------------------------

--
-- Table structure for table `receivers`
--

DROP TABLE IF EXISTS `receivers`;
CREATE TABLE IF NOT EXISTS `receivers` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bloodGroup` varchar(11) NOT NULL,
  `pass` varchar(11) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `entryDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
