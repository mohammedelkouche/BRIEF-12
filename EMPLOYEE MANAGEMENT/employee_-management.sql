-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 01:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee -management`
--
CREATE DATABASE IF NOT EXISTS `employee -management` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `employee -management`;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `SerialNumber` char(50) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `First Name` varchar(30) NOT NULL,
  `Date of Birth` date NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Salary` decimal(30,0) NOT NULL,
  `Job` varchar(30) NOT NULL,
  `Photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`SerialNumber`, `lastname`, `First Name`, `Date of Birth`, `Department`, `Salary`, `Job`, `Photo`) VALUES
('1111', 'ELKOUCHE ', 'MOHAMMED', '1998-04-12', 'Information Technology', '10000', 'WEB DEVELOPER', ''),
('1112', 'INAB', 'NADIR', '1999-07-20', 'Information Technology', '13000', 'mobile developer', ''),
('1113', 'ALAMI', 'AHMED', '1997-01-02', 'Marketing', '10000', 'MARKETER', ''),
('1118', 'WAHABI', 'YOUNES', '1990-12-25', 'administration', '20000', 'manageress', '[value-8]'),
('1114', 'BENYECHOU', 'AZIZ', '1999-06-17', 'Human Resource', '12000', 'Recruiter', ''),
('1115', 'SDIKI', 'MAHDI', '1996-03-11', 'Human Resource', '12000', 'manager', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
