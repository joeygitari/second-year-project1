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
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `name` varchar(100) NOT NULL,
  `county` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`name`, `county`) VALUES
('Kempinski Villa Rosa', 'Nairobi'),
('Hemingways Nairobi', 'Nairobi'),
('Karen Gables', 'Nairobi'),
('City Lodge Hotel', 'Nairobi'),
('Nairobi Serena Hotel', 'Nairobi'),
('Fairmont The Norfolk', 'Nairobi'),
('Sankara Nairobi', 'Nairobi'),
('Movenpick Hotel and Residences', 'Nairobi'),
('Town Lodge', 'Nairobi'),
('Hilton Garden Inn', 'Nairobi'),
('Fairview Hotel', 'Nairobi'),
('Four Points By Sheraton', 'Nairobi'),
('Tribe Hotel', 'Nairobi'),
('Crowne Plaza', 'Nairobi'),
('Park Inn By Radisson', 'Nairobi'),
('Best Western Plus Meridian', 'Nairobi'),
('Trademark Hotel', 'Nairobi'),
('Sarova Panafric', 'Nairobi'),
('Sarova Stanley', 'Nairobi'),
('Tamarind Tree Hotel', 'Nairobi'),
('Eka Hotel', 'Nairobi'),
('Double Tree By Hilton', 'Nairobi'),
('Ole Sereni Hotel', 'Nairobi'),
('The Boma', 'Nairobi'),
('Ciala Resort Hotels', 'Kisumu'),
('Imperial Hotel', 'Kisumu'),
('Acacia Premier Hotel', 'Kisumu'),
('Sovereign Hotel', 'Kisumu'),
('Best Western Kisumu Hotel', 'Kisumu'),
('The Vic Hotel', 'Kisumu'),
('The Grand Royal Swiss Hotel', 'Kisumu'),
('Pinecone Hotel', 'Kisumu'),
('Jumuia Hotel', 'Kisumu'),
('Sarova Whitesands Beach Resort And Spa', 'Mombasa'),
('PrideInn Paradise Beach Resort And Spa', 'Mombasa'),
('Travellers Beach Hotel', 'Mombasa'),
('Serena Beach Resort And Spa', 'Mombasa'),
('Voyager Beach Resort', 'Mombasa'),
('Hotel Englishpoint And Spa', 'Mombasa'),
('Severin Sea Lodge', 'Mombasa'),
('Sun Africa Beach Hotel And Spa', 'Mombasa'),
('Sultan Palace', 'Mombasa'),
('The Majilis Resort', 'Lamu'),
('The Red Pepper House', 'Lamu'),
('Manda Bay', 'Lamu'),
('Kizingo Beach Eco Lodge', 'Lamu'),
('Kijani Hotel', 'Lamu'),
('Banana House And Wellness Centre', 'Lamu'),
('Zubeida Boutique Resort', 'Diani'),
('Waterlovers Beach Resort', 'Diani'),
('Eleven Pearl Hotel And Spa', 'Diani'),
('Pinewood Beach Resort And Spa', 'Diani'),
('Searenity Beach Villa', 'Diani'),
('Baobab Beach Resort And Spa', 'Diani'),
('Leisure Lodge Beach And Golf Resort', 'Diani'),
('Neptune Paradise Beach Resort And Spa', 'Diani'),
('Diani Sea Lodge', 'Diani'),
('Jacaranda Indian Ocean Beach Resort', 'Diani'),
('Swahili Beach Resort', 'Diani'),
('Papillon Lagoon Reef Hotel', 'Diani'),
('Billionaire Resort And Retreat', 'Malindi'),
('Hemingways Watamu', 'Malindi'),
('Medina Palms Watamu', 'Malindi'),
('Leopard Point Luxury Beach Resort And Spa', 'Malindi'),
('Lion In The Sun Billionaire Retreat Malindi', 'Malindi'),
('White Elephant Sea Lodge', 'Malindi'),
('Ocean Beach Resort And Spa', 'Malindi'),
('Visiwa Beach Resort', 'Malindi'),
('Turtle Bay Beach Club', 'Malindi'),
('Salt Lick Safari Lodge', 'Taita'),
('Maneaters Tsavo', 'Taita'),
('Kilaguni Serena Safari Lodge', 'Taita'),
('Manyatta Camp', 'Taita'),
('Taita Hills Safari Resort And Spa', 'Taita'),
('Voi Wildlife Lodge', 'Taita'),
('Sweetwaters Serena Camp', 'Central Kenya'),
('Ole Samara Suites', 'Central Kenya'),
('Alba Hotel', 'Central Kenya'),
('Aberdare Prestige And Royal Cottages', 'Central Kenya'),
('Sovereign Suites', 'Central Kenya'),
('The Warwick Hotel', 'Central Kenya'),
('Angama Mara', 'Rift Valley'),
('Sarova Lion Hill Game Lodge', 'Rift Valley'),
('Enashipai Resort And Spa', 'Rift Valley'),
('Olare Mara Kempinski', 'Rift Valley'),
('Sarova Woodlands Hotel And Spa', 'Rift Valley'),
('The Great Rift Valley Lodge And Golf Resort', 'Rift Valley'),
('Sarova Mara Game Park', 'Rift Valley'),
('Mara Intrepids Tented Camp', 'Rift Valley'),
('Neptune Mara Rianta Luxury Camp', 'Rift Valley'),
('Honeymoon Hut', 'Rift Valley'),
('Entim Mara', 'Rift Valley'),
('Desert Rose', 'Rift Valley'),
('Andrews', 'Nairobi'),
('Andrews', 'Nairobi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
