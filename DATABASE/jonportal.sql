-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 04, 2018 at 03:42 PM
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
-- Database: `jonportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

DROP TABLE IF EXISTS `applicants`;
CREATE TABLE IF NOT EXISTS `applicants` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `ContactNo` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `Experience` varchar(100) NOT NULL,
  `JobId` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`Name`, `Email`, `ContactNo`, `Gender`, `Qualification`, `Experience`, `JobId`) VALUES
('Madhu Verma', 'madhu@gmail.com', '9586748857', 'F', 'B.Tech', '5yrs', '101'),
('Radha Jain', 'radha@gmail.com', '9820394856', 'F', 'M.Tech', 'exp', '101'),
('Mahesh Joshi', 'abhi45@gmail.com', '8495338592', 'M', 'B.Tech-Computer Engineering', 'exp', '101');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `LoginId` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Company` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Industry` varchar(100) NOT NULL,
  PRIMARY KEY (`LoginId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`LoginId`, `Password`, `Email`, `Company`, `Location`, `Industry`) VALUES
('U123', '0987', 'shakti_ltd@gmail.com', 'Shakti Solution Ltd', 'Mumbai', 'IT software/hardware/network');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `JobId` varchar(100) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `JobSkill` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `Experience` varchar(100) NOT NULL,
  `Salary` varchar(100) NOT NULL,
  `CompanyName` varchar(100) NOT NULL,
  PRIMARY KEY (`JobId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`JobId`, `Position`, `Description`, `JobSkill`, `Location`, `Qualification`, `Experience`, `Salary`, `CompanyName`) VALUES
('101', 'Analyst', 'Work as analyst', 'IT software/hardware/network', 'Mumbai', 'B.Tech', '2-3yrs', '25000', 'Shakti Solutions');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Name` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DateOfBirth` varchar(20) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `JobSkill` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  PRIMARY KEY (`UserName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `UserName`, `Password`, `Email`, `DateOfBirth`, `Contact`, `JobSkill`, `Location`) VALUES
('Akanksha Bhandari', 'u1698', 'akb13', 'akankshabhandari98@gmail.com', '1998-04-12', '9427373741', 'Education/Training', 'Ahmedabad'),
('Riya Mishra', 'riri', '0988', 'riya@gmail.com', '12-05-1992', '985739485', 'IT software/hardware/network', 'Mumbai');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
