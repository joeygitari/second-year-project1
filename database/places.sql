-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 06:37 PM
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
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `number` int(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `county` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`number`, `region`, `county`) VALUES
(11, 'Central Kenya', 'Aberdares'),
(5, 'Diani', 'Diani'),
(18, 'Rift Valley', 'Kajiado'),
(9, 'Central Kenya', 'Kiambu'),
(2, 'Kisumu', 'Kisumu'),
(4, 'Lamu', 'Lamu'),
(10, 'Central Kenya', 'Limuru'),
(7, 'Malindi', 'Malindi'),
(14, 'Central Kenya', 'Meru'),
(3, 'Mombasa', 'Mombasa'),
(1, 'Nairobi', 'Nairobi'),
(17, 'Rift Valley', 'Nakuru'),
(15, 'Central Kenya', 'Nanyuki'),
(19, 'Rift Valley', 'Narok'),
(13, 'Central Kenya', 'Nyahururu'),
(16, 'Central Kenya', 'Nyandarua'),
(12, 'Central Kenya', 'Sagana'),
(21, 'Rift Valley', 'Samburu'),
(6, 'Taita', 'Taita'),
(20, 'Rift Valley', 'Turkana'),
(8, 'Malindi', 'Watamu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`county`),
  ADD KEY `id` (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `number` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
