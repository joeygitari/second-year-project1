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
-- Table structure for table `pswreset`
--

CREATE TABLE `pswreset` (
  `pswResetId` int(11) NOT NULL,
  `pswResetEmail` text NOT NULL,
  `pswResetSelector` text NOT NULL,
  `pswResetToken` longtext NOT NULL,
  `pswResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pswreset`
--

INSERT INTO `pswreset` (`pswResetId`, `pswResetEmail`, `pswResetSelector`, `pswResetToken`, `pswResetExpires`) VALUES
(1, 'gitarijoanne@gmail.com', 'cfdd2f9083bed898', '$2y$10$Q.Eb02ByyQc8BmbMsfZRDO0d5ZUT35imB7vhD2RzWygtV3aN60ik.', '1649187661'),
(2, 'joannekiara12@gmail.com', '938b30eb479c1904', '$2y$10$LVqfaTlO6p2QbLL3AG02a.5929dnsHQMDZFat/0ArU2sOD03qBF.O', '1649359975'),
(3, 'luna@gmail.com', 'ed2c213a3cb05412', '$2y$10$x1thRRnKOhp/nZetsWFJmev4aV/yCAwG6gOWqNw/BgyNmjVlZGcUu', '1649360143');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pswreset`
--
ALTER TABLE `pswreset`
  ADD PRIMARY KEY (`pswResetId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pswreset`
--
ALTER TABLE `pswreset`
  MODIFY `pswResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
