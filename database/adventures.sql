-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 06:34 PM
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
-- Database: `tour_guide`
--

-- --------------------------------------------------------

--
-- Table structure for table `adventures`
--

CREATE TABLE `adventures` (
  `number` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `county` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adventures`
--

INSERT INTO `adventures` (`number`, `name`, `county`) VALUES
(1, 'The Travelling Telescope - Nairobi Planetarium', 'Nairobi'),
(2, 'Kitengela Hot Glass', 'Nairobi'),
(3, 'Kit Mikayi', 'Kisumu'),
(4, 'Tusitiri Dhow', 'Lamu'),
(5, 'Lake Bogoria Hot Springs', 'Nakuru'),
(6, 'Ngong Hills', 'Kajiado'),
(7, 'Marafa Hells Kitchen', 'Watamu'),
(8, 'Stage Park', 'Malindi'),
(9, 'Mida Creek', 'Watamu'),
(10, 'Lake Chala', 'Taita'),
(11, 'Lugard Falls', 'Taita'),
(12, 'Dragons Teeth', 'Aberdares'),
(13, 'Buxton Tunnel', 'Limuru'),
(14, 'Karura Forest', 'Kiambu'),
(15, 'Rapids Camp', 'Sagana'),
(16, 'Tafaria Castle', 'Nyahururu'),
(17, 'Paradise Lost', 'Kiambu'),
(18, 'Menengai Crater', 'Nakuru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adventures`
--
ALTER TABLE `adventures`
  ADD PRIMARY KEY (`number`),
  ADD KEY `county` (`county`),
  ADD KEY `county_2` (`county`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adventures`
--
ALTER TABLE `adventures`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adventures`
--
ALTER TABLE `adventures`
  ADD CONSTRAINT `adventures_ibfk_1` FOREIGN KEY (`county`) REFERENCES `places` (`county`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
