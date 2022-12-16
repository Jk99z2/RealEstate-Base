-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 12:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--
CREATE DATABASE IF NOT EXISTS `real_estate` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `real_estate`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `img_category` varchar(50) NOT NULL,
  PRIMARY KEY (`id_category`),
  KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_category`, `category`, `img_category`) VALUES
(1, 'Casa', 'Casa.png'),
(2, 'Departamento', 'Departamento.png'),
(3, 'Local', 'Local.png');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  KEY `city` (`city`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`city`, `state`) VALUES
('Manzanillo', 'Colima'),
('Guadalajara', 'Jalisco'),
('Puerto Vallarta', 'Jalisco'),
('Colima', 'Colima');

-- --------------------------------------------------------

--
-- Table structure for table `pics`
--

CREATE TABLE IF NOT EXISTS `pics` (
  `id_post` int(11) NOT NULL,
  `pic1` varchar(50) NOT NULL,
  `pic2` varchar(50) NOT NULL,
  `pic3` varchar(50) NOT NULL,
  `pic4` varchar(50) NOT NULL,
  `pic5` varchar(50) NOT NULL,
  `pic6` varchar(50) NOT NULL,
  `pic7` varchar(50) NOT NULL,
  `pic8` varchar(50) NOT NULL,
  `pic9` varchar(50) NOT NULL,
  `pic10` varchar(50) NOT NULL,
  KEY `id_post` (`id_post`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resp_agent` varchar(50) NOT NULL,
  `inv_id` varchar(20) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` int(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `map` varchar(80) NOT NULL,
  `sup_terr` int(11) NOT NULL,
  `sup_cons` int(11) NOT NULL,
  `floors` int(11) NOT NULL,
  `rooms` int(11) NOT NULL,
  `wc` int(11) NOT NULL,
  `parking` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `video_link` varchar(200) NOT NULL,
  `state` varchar(30) NOT NULL,
  `comments` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`),
  KEY `location` (`location`),
  KEY `email_user` (`email_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rstate_data`
--

CREATE TABLE IF NOT EXISTS `rstate_data` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `logo` varchar(20) NOT NULL,
  `location` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `cel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rstate_data`
--

INSERT INTO `rstate_data` (`id`, `name`, `logo`, `location`, `email`, `tel`, `cel`) VALUES
(0, 'Demo Real Estate', 'logo.png', 'Manzanillo, Colima', 'demo@email.com', '3141234567', '3143312345');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `pwd` varchar(250) NOT NULL,
  `role` tinyint(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `contact`, `pwd`, `role`) VALUES
(1, 'Enrique de Jesús', 'Ochoa Preciado', 'eochoa11@ucol.mx', '3141076334', '66986dd7abd4c1e9d96f0a4625c7893c31a79a03ba811d975b6c9af0480b0841619bca5f492d85b7143cc8aef96662b196c9c8d3870092c649f27b350ff13314', 2),
(2, 'Developer', 'Developer', 'dev@dev.com', '3141234567', 'e50d11e94bafcd7c78120d7a6478bce07c60b70207f7aa19e71ebdb37eecccbde475e051a28209fdfb5c9a217ea08d335422244574465e73c39863c8f18874fa', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`category`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `properties_ibfk_2` FOREIGN KEY (`location`) REFERENCES `locations` (`city`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `properties_ibfk_3` FOREIGN KEY (`email_user`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `properties_ibfk_4` FOREIGN KEY (`id`) REFERENCES `pics` (`id_post`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
