-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 14, 2023 at 04:17 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catogories`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_request`
--

DROP TABLE IF EXISTS `product_request`;
CREATE TABLE IF NOT EXISTS `product_request` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_request`
--

INSERT INTO `product_request` (`product_id`, `category`, `sub_category`) VALUES
(1, 'Gifts', ''),
(2, 'Electronics', ''),
(3, 'Electronics', ''),
(4, 'Home & Garden', 'Paint Brushes'),
(5, 'Electronics', 'Broadband routers'),
(6, 'Electronics', 'Broadband routers'),
(7, 'Electronics', 'Washing machine'),
(8, 'Electronics', 'Televisions');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

DROP TABLE IF EXISTS `sub`;
CREATE TABLE IF NOT EXISTS `sub` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`id`, `category`, `sub_category`) VALUES
(1, 'Electronics', 'Mobile phones'),
(2, 'Electronics', 'Televisions'),
(3, 'Electronics ', 'Washing machine'),
(4, 'Electronics', 'Broadband routers'),
(5, 'Food', 'Burgers'),
(6, 'Food', 'Beverages'),
(7, 'Food', 'Shorteats'),
(8, 'Food', 'Fruits'),
(9, 'Gifts', 'Teddy bears'),
(10, 'Gifts', 'Juwelleries'),
(11, 'Gifts', 'watches'),
(12, 'Gifts', 'Children Toys'),
(13, 'Home & Garden', 'Paint Brushes'),
(14, 'Home & Garden', 'Brooms'),
(15, 'Electronics', 'Home theatres');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
