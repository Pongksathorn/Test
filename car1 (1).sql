-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 10:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `car1`
--

CREATE TABLE `car1` (
  `Car_id` varchar(3) NOT NULL,
  `ds` varchar(255) NOT NULL,
  `outds` varchar(255) NOT NULL,
  `tohuy` varchar(255) NOT NULL,
  `outhuy` varchar(255) NOT NULL,
  `terminal` varchar(255) NOT NULL,
  `toterminal` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car1`
--

INSERT INTO `car1` (`Car_id`, `ds`, `outds`, `tohuy`, `outhuy`, `terminal`, `toterminal`, `note`) VALUES
('562', 'สุริน', '05.20', '05.53', '05.40', 'กรุงเทพ', '5.20', 'รถธรรมดา'),
('562', 'สำโรงทาบ', '05.20', '05.53', '05.40', 'กรุงเทพ', '5.20', 'รถธรรมดา'),
('635', 'อุบลราชธานี', '05.20', '05.53', '05.40', 'กรุงเทพ', '5.20', 'รถธรรมดา');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
