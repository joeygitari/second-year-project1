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
-- Table structure for table `historical_sites`
--

CREATE TABLE `historical_sites` (
  `number` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `county` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `historical_sites`
--

INSERT INTO `historical_sites` (`number`, `name`, `county`) VALUES
(1, 'Nairobi National Museum', 'Nairobi'),
(2, 'Nairobi Art Gallery', 'Nairobi'),
(3, 'Bomas Of Kenya', 'Nairobi'),
(4, 'The Karen Blixen Museum', 'Nairobi'),
(5, 'The Kenya National Archives', 'Nairobi'),
(6, 'The Kenya Railway', 'Nairobi'),
(7, 'Maasai Market', 'Nairobi'),
(8, 'Kisumu Museum', 'Kisumu'),
(9, 'Thimlich Ohinga Historic Site', 'Kisumu'),
(10, 'Fort Jesus', 'Mombasa'),
(11, 'Bombolulu Workshops and Cultural Centre', 'Mombasa'),
(12, 'Old Town Mombasa', 'Mombasa'),
(13, 'Mbaraki Pillar', 'Mombasa'),
(14, 'Mombasa Spice Market', 'Mombasa'),
(15, 'Jumba La Mtwana', 'Mombasa'),
(16, 'Takwa Ruins', 'Lamu'),
(17, 'Lamu Museum', 'Lamu'),
(18, 'Fort Shela', 'Lamu'),
(19, 'German Post Office', 'Lamu'),
(20, 'The Swahili House Museum', 'Lamu'),
(21, 'Siyu Fort', 'Lamu'),
(22, 'Pate Island', 'Lamu'),
(23, 'Matondoni Village', 'Lamu'),
(24, 'Kazuri Beads Factory', 'Nairobi'),
(25, 'Kaya Kinondo Sacred Forest', 'Diani'),
(26, 'Vasco Da Gama Pillar', 'Malindi'),
(27, 'Malindi Museum', 'Malindi'),
(28, 'Portuguese Chapel', 'Malindi'),
(29, 'Mbaraki Pillar', 'Mombasa'),
(30, 'Mombasa Spice Market', 'Mombasa'),
(31, 'Jumba La Mtwana', 'Mombasa'),
(32, 'Takwa Ruins', 'Lamu'),
(33, 'Lamu Museum', 'Lamu'),
(34, 'Fort Shela', 'Lamu'),
(35, 'German Post Office', 'Lamu'),
(36, 'The Swahili House Museum', 'Lamu'),
(37, 'Siyu Fort', 'Lamu'),
(38, 'Pate Island', 'Lamu'),
(39, 'Matondoni Village', 'Lamu'),
(40, 'Kazuri Beads Factory', 'Nairobi'),
(41, 'Kaya Kinondo Sacred Forest', 'Diani'),
(42, 'Vasco Da Gama Pillar', 'Malindi'),
(43, 'Malindi Museum', 'Malindi'),
(44, 'Portuguese Chapel', 'Malindi'),
(45, 'Ndoro Sculpure Garden', 'Malindi'),
(46, 'Gede Ruins', 'Malindi'),
(47, 'Lord Egerton Castle', 'Nakuru'),
(48, 'Kariandusi Museum', 'Nakuru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historical_sites`
--
ALTER TABLE `historical_sites`
  ADD PRIMARY KEY (`number`),
  ADD KEY `county` (`county`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historical_sites`
--
ALTER TABLE `historical_sites`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `historical_sites`
--
ALTER TABLE `historical_sites`
  ADD CONSTRAINT `historical_sites_ibfk_1` FOREIGN KEY (`county`) REFERENCES `places` (`county`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
