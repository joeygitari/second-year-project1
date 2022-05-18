-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 06:32 PM
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
-- Table structure for table `accommodation`
--

CREATE TABLE `accommodation` (
  `HotelId` int(11) NOT NULL,
  `Place` varchar(100) NOT NULL,
  `Hotel` varchar(100) NOT NULL,
  `CheckIn` date NOT NULL,
  `CheckOut` date NOT NULL,
  `Adults` int(10) NOT NULL,
  `Children` int(10) NOT NULL,
  `Infants` int(10) NOT NULL,
  `Price` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `PhoneNumber` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accommodation`
--

INSERT INTO `accommodation` (`HotelId`, `Place`, `Hotel`, `CheckIn`, `CheckOut`, `Adults`, `Children`, `Infants`, `Price`, `FullName`, `PhoneNumber`, `Email`) VALUES
(2, 'Nairobi', 'Kempinski Villa Rosa', '2022-05-06', '2022-05-08', 1, 0, 0, 0, 'Luna Gitari', '12345', 'luna@gmail.com'),
(3, 'Nairobi', 'Kempinski Villa Rosa', '2022-05-06', '2022-05-08', 2, 0, 0, 0, 'Luna Gitari', '12345', 'luna@gmail.com'),
(4, 'Nairobi', 'Kempinski Villa Rosa', '2022-05-06', '2022-05-08', 1, 0, 0, 37537, 'Luna Gitari', '12345', 'luna@gmail.com'),
(5, 'Malindi', 'Hemingways Watamu', '2022-06-08', '2022-06-10', 2, 0, 0, 30607, 'Wairimu Kamiri', '07123456', 'joannekiara12@gmail.com'),
(6, 'Lamu', 'The Red Pepper House', '2022-05-19', '2022-05-21', 2, 0, 0, 58905, 'Luna Gitari', '07123456', 'luna@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`HotelId`),
  ADD KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommodation`
--
ALTER TABLE `accommodation`
  MODIFY `HotelId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD CONSTRAINT `accommodation_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `user_reg` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
