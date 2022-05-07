-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 12:20 PM
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
-- Table structure for table `beaches`
--

CREATE TABLE `beaches` (
  `number` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `county` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beaches`
--

INSERT INTO `beaches` (`number`, `name`, `county`) VALUES
(1, 'Jomo Kenyatta Public Beach', 'Mombasa'),
(2, 'Nyali Beach', 'Mombasa'),
(3, 'Diani Beach', 'Diani'),
(4, 'Chale Island', 'Diani'),
(5, 'Tiwi Beaches', 'Diani'),
(6, 'Watamu Beach', 'Malindi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beaches`
--
ALTER TABLE `beaches`
  ADD PRIMARY KEY (`number`),
  ADD KEY `county` (`county`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beaches`
--
ALTER TABLE `beaches`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
