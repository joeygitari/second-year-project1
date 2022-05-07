-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2022 at 02:40 PM
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
(1, 'Diani', 'Diani Sea Lodge', '2022-05-08', '2022-05-13', 2, 0, 0, 0, 'Luna Gitari', '12345', 'luna@gmail.com'),
(2, 'Nairobi', 'Kempinski Villa Rosa', '2022-05-06', '2022-05-08', 1, 0, 0, 0, 'Luna Gitari', '12345', 'luna@gmail.com'),
(3, 'Nairobi', 'Kempinski Villa Rosa', '2022-05-06', '2022-05-08', 2, 0, 0, 0, 'Luna Gitari', '12345', 'luna@gmail.com'),
(4, 'Nairobi', 'Kempinski Villa Rosa', '2022-05-06', '2022-05-08', 1, 0, 0, 37537, 'Luna Gitari', '12345', 'luna@gmail.com');

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

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Email` varchar(100) NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(6, 'Taita', 'Taita'),
(20, 'Rift Valley', 'Turkana'),
(8, 'Malindi', 'Watamu');

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
('Hellen', 'Mwaura', 'hellenm@gmail.com', '0711111111', '$2y$10$oVRj6wRE/LSS7VVH2fDLLeDZoww8/jUvRK8xffG3Xej', 0, 'user'),
('Wairimu', 'Kamiri', 'joannekiara12@gmail.com', '070000000', '$2y$10$AIepSSppjXvd0Y0axVHpUeGHBl3fBG/8UI7JZmm/mUw', 0, 'user'),
('Luna', 'Gitari', 'luna@gmail.com', '12345', '$2y$10$9a0Tie7oM2xwnQGVaPQnZemQ.cPg4xm7POn/tVrfPMl', 0, 'user'),
('Pookie', 'Gitari', 'pooks@gmail.com', '0799999', '$2y$10$ahSwQaW2Ye4JGg4h.exwWefO8du2SB7EpOEVXeXJnbh', 0, 'user'),
('Thamani', 'Thayu', 'tthayu@gmail.com', '000000', '$2y$10$U6pQ.YCBSjEK5VkvusZa5OWSUKs/Px9cAn2h7BR0aH.', 0, 'user');

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
-- Indexes for table `adventures`
--
ALTER TABLE `adventures`
  ADD PRIMARY KEY (`number`),
  ADD KEY `county` (`county`),
  ADD KEY `county_2` (`county`);

--
-- Indexes for table `beaches`
--
ALTER TABLE `beaches`
  ADD PRIMARY KEY (`number`),
  ADD KEY `county` (`county`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`FlightId`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `historical_sites`
--
ALTER TABLE `historical_sites`
  ADD PRIMARY KEY (`number`),
  ADD KEY `county` (`county`);

--
-- Indexes for table `national_parks`
--
ALTER TABLE `national_parks`
  ADD PRIMARY KEY (`number`),
  ADD KEY `county` (`county`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`county`),
  ADD KEY `id` (`number`);

--
-- Indexes for table `pswreset`
--
ALTER TABLE `pswreset`
  ADD PRIMARY KEY (`pswResetId`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommodation`
--
ALTER TABLE `accommodation`
  MODIFY `HotelId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `adventures`
--
ALTER TABLE `adventures`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `beaches`
--
ALTER TABLE `beaches`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `FlightId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `historical_sites`
--
ALTER TABLE `historical_sites`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `national_parks`
--
ALTER TABLE `national_parks`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `number` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pswreset`
--
ALTER TABLE `pswreset`
  MODIFY `pswResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD CONSTRAINT `accommodation_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `user_reg` (`Email`);

--
-- Constraints for table `adventures`
--
ALTER TABLE `adventures`
  ADD CONSTRAINT `adventures_ibfk_1` FOREIGN KEY (`county`) REFERENCES `places` (`county`);

--
-- Constraints for table `beaches`
--
ALTER TABLE `beaches`
  ADD CONSTRAINT `beaches_ibfk_1` FOREIGN KEY (`county`) REFERENCES `places` (`county`);

--
-- Constraints for table `flights`
--
ALTER TABLE `flights`
  ADD CONSTRAINT `flights_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `user_reg` (`Email`);

--
-- Constraints for table `historical_sites`
--
ALTER TABLE `historical_sites`
  ADD CONSTRAINT `historical_sites_ibfk_1` FOREIGN KEY (`county`) REFERENCES `places` (`county`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
