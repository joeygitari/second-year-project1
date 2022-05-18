-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 06:38 PM
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
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `TicketId` int(11) NOT NULL,
  `FlightId` int(11) NOT NULL,
  `Airline` varchar(100) NOT NULL,
  `FromAirport` varchar(100) NOT NULL DEFAULT 'JKIA',
  `ToAirport` varchar(100) NOT NULL DEFAULT 'MBA',
  `Price` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`TicketId`, `FlightId`, `Airline`, `FromAirport`, `ToAirport`, `Price`, `Email`) VALUES
(3, 16, 'Jambo Jet', 'JKIA', 'LAU', 22000, 'joannekiara12@gmail.com'),
(4, 15, 'Jambo Jet', 'JKIA', 'LAU', 22000, 'joannekiara12@gmail.com'),
(7, 14, 'Kenya Airways', 'JKIA', 'MBA', 22000, 'joannekiara12@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`TicketId`),
  ADD KEY `FlightId` (`FlightId`),
  ADD KEY `Email` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
