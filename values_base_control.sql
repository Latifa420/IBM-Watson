-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 02:22 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base_control`
--

-- --------------------------------------------------------

--
-- Table structure for table `values_base_control`
--

CREATE TABLE `values_base_control` (
  `stop` varchar(10) NOT NULL,
  `right_side` varchar(10) NOT NULL,
  `left_side` varchar(10) NOT NULL,
  `forward` varchar(10) NOT NULL,
  `backward` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `values_base_control`
--

INSERT INTO `values_base_control` (`stop`, `right_side`, `left_side`, `forward`, `backward`) VALUES
('', '', '', 'Forward', ''),
('Stop', '', '', '', ''),
('', '', '', '', 'Backward'),
('', '', '', 'Forward', ''),
('Stop', '', '', '', ''),
('', 'Right', '', '', ''),
('', '', 'Left', '', ''),
('Stop', '', '', '', ''),
('', 'Right', '', '', ''),
('', '', '', '', 'Backward');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
