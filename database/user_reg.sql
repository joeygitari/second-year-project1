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
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `user_level` int(11) DEFAULT 0,
  `user_type` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`FirstName`, `LastName`, `Email`, `PhoneNumber`, `Pass`, `user_level`, `user_type`) VALUES
('Admin', 'Joanne', 'admin@gmail.com', '0022', '123', 1, 'admin'),
('Wairimu', 'Kamiri', 'joannekiara12@gmail.com', '07123456', '$2y$10$xJlZGinwXBuI7YNBE8YseOz.ZqhxyfRvzBjztsggpTS', 0, 'user'),
('Luna', 'Gitari', 'luna@gmail.com', '12345', '$2y$10$9a0Tie7oM2xwnQGVaPQnZemQ.cPg4xm7POn/tVrfPMl', 0, 'user'),
('Pookie', 'Gitari', 'pooks@gmail.com', '0799999', '$2y$10$ahSwQaW2Ye4JGg4h.exwWefO8du2SB7EpOEVXeXJnbh', 0, 'user'),
('Thamani ', 'Thayu', 'tthayu@gmail.com', '111000', 'joanne', 0, 'user'),
('Imani', 'Wendo', 'wendo@gmail.com', '074567890', '$2y$10$KgE2OEJr4.dQmPAkrQCfOurSEZvv51UGgepZ9M7kof7', 0, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`Email`),
  ADD KEY `Email_2` (`Email`),
  ADD KEY `Email_3` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
