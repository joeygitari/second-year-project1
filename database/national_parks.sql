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
-- Table structure for table `national_parks`
--

CREATE TABLE `national_parks` (
  `number` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `county` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `national_parks`
--

INSERT INTO `national_parks` (`number`, `name`, `county`) VALUES
(1, 'Nairobi National Park', 'Nairobi'),
(2, 'Nairobi Animal Orphanage', 'Nairobi'),
(3, 'Giraffe Centre', 'Nairobi'),
(4, 'The David Sheldrick Wildlife Trust', 'Nairobi'),
(5, 'Snake Park', 'Nairobi'),
(6, 'Haller Park', 'Mombasa'),
(7, 'Nguuni Nature Sanctuary', 'Mombasa'),
(8, 'Mamba Village', 'Mombasa'),
(9, 'Mombasa Marine Park And Reserve', 'Mombasa'),
(10, 'Kisumu Impala Sanctuary', 'Kisumu'),
(11, 'Ndere Island National Park', 'Kisumu'),
(12, 'Ruma National Park', 'Kisumu'),
(13, 'Meru National Park', 'Meru'),
(14, 'Aberdare National Park', 'Nyandarua'),
(15, 'Ol Pejeta Wildlife Sanctuary', 'Nanyuki'),
(16, 'Kiunga Marine National Reserve', 'Lamu'),
(17, 'Colobus Conservation Centre', 'Diani'),
(18, 'Kisite-Mpunguti Marine National Park', 'Diani'),
(19, 'Falconry Of Kenya', 'Malindi'),
(20, 'Tsavo East National Park', 'Taita'),
(21, 'Tsavo West National Park', 'Taita'),
(22, 'Lake Nakuru National Park', 'Nakuru'),
(23, 'Maasai Mara', 'Narok'),
(24, 'Sibiloi National Park', 'Turkana'),
(25, 'South Turkana National Reserve', 'Turkana'),
(26, 'Samburu National Reserve', 'Samburu'),
(27, 'Amboseli National Park', 'Kajiado'),
(28, 'Hells Gate National Park', 'Nakuru'),
(29, 'Hells Gate National Park', 'Nakuru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `national_parks`
--
ALTER TABLE `national_parks`
  ADD PRIMARY KEY (`number`),
  ADD KEY `county` (`county`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `national_parks`
--
ALTER TABLE `national_parks`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
