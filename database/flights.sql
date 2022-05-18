-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 06:36 PM
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
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `FlightId` int(11) NOT NULL,
  `FromAirport` varchar(100) NOT NULL,
  `ToAirport` varchar(100) NOT NULL,
  `Airline` varchar(100) NOT NULL,
  `Seating` varchar(100) NOT NULL,
  `DepartureDate` date NOT NULL,
  `ReturnDate` date NOT NULL,
  `Fare` varchar(100) NOT NULL,
  `Tickets` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`FlightId`, `FromAirport`, `ToAirport`, `Airline`, `Seating`, `DepartureDate`, `ReturnDate`, `Fare`, `Tickets`, `Price`, `FullName`, `PhoneNumber`, `Email`) VALUES
(11, 'JKIA', 'UKA', 'Jambo Jet', 'Window', '2022-05-06', '2022-05-08', 'Window', 0, 22000, 'Luna Gitari', '12345', 'luna@gmail.com'),
(12, 'JKIA', 'UKA', 'Jambo Jet', 'Window', '2022-05-06', '2022-05-08', 'Aisle', 2, 22000, 'Luna Gitari', '12345', 'luna@gmail.com'),
(13, 'JKIA', 'UKA', 'Jambo Jet', 'Window', '2022-05-07', '0000-00-00', 'Window', 1, 2211, 'Luna Gitari', '12345', 'luna@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`FlightId`),
  ADD KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `FlightId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flights`
--
ALTER TABLE `flights`
  ADD CONSTRAINT `flights_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `user_reg` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
