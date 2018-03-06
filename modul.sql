-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 01, 2017 at 01:35 PM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul`
--

-- --------------------------------------------------------

--
-- Table structure for table `brugerrolle`
--

CREATE TABLE IF NOT EXISTS `brugerrolle` (
  `id` int(11) NOT NULL,
  `rolle` varchar(50) NOT NULL,
  `niveau` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brugerrolle`
--

INSERT INTO `brugerrolle` (`id`, `rolle`, `niveau`) VALUES
(1, 'Super Admin', 100),
(2, 'Admin', 90),
(8, 'Super Bruger', 20),
(9, '2. Level Bruger', 10),
(10, 'Bruger', 1),
(11, 'Gæst', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brugerrolle`
--
ALTER TABLE `brugerrolle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brugerrolle`
--
ALTER TABLE `brugerrolle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
