-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 08, 2019 at 02:06 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `address3` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address1`, `address2`, `address3`) VALUES
('Jalan Pak 2/3, 75450 Melaka\r\nOpen 24 hours\r\nPhone : 062319779', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `photo` varchar(1000) NOT NULL,
  `descriptions` varchar(1000) NOT NULL,
  `normalprice` varchar(1000) NOT NULL,
  `offerprice` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `photo`, `descriptions`, `normalprice`, `offerprice`) VALUES
(25, 'powerrootadmin/images/0027463_heart_shape_black_forest_cake_385.jpeg', 'Heart shape balck forest', 'RM 200', 'Rm 100'),
(26, 'powerrootadmin/images/blackforest.jpeg', 'Black forest', 'RM 300', 'Rm 200'),
(27, 'powerrootadmin/images/purepunch.jpg', 'Pure Punch Cake', 'RM 300', 'Rm 250');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`firstname`, `lastname`, `email`, `phone`, `comment`) VALUES
('Hafizur', 'Rahman', 'hafiz1anik@gmail.com', 104370465, 'I need some information'),
('Hafizur', 'Rahman', 'anas@gmail.com', 104370465, 'yuyriuiui'),
('hafiz', 'anik', 'hafiz@gmail.com', 568798898, 'sdsdsdsd'),
('rahman', 'anik', 'hafiz@gmail.com', 104370465, 'kjdokjdoejdkdkddlsd'),
('fsdfsdfds', 'dfdfdsf', 'hafiz@gmail.com', 109028992, 'sdffdfdf'),
('fsdfsdfds', 'dfdfdsf', 'hafiz@gmail.com', 109028992, 'sdffdfdf'),
('Hafizur', 'anik', 'hafiz@gmail.com', 104370465, 'cscccc'),
('Hafizur', 'anik', 'hafiz@gmail.com', 104370465, 'cscccc'),
('Hafizur', 'anik', 'hafiz@gmail.com', 104370465, 'cscccc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `password`) VALUES
(1, 'hafiz1anik@gmail.com', 'hafiz', '$2y$10$lhw/rwEqVflJVInobIbXqeh5n/TV5C9h5v0xuznSSF83OneG5/Xty'),
(2, 'shakil@gmail.com', 'shakil', '$2y$10$4gAVLAm8o/B3cLRRLegr/.mV3aDUh6.gXBT0lV7MZkT9xh.yHXV0C'),
(3, 'shahriar@gmail.com', 'shahriar', '$2y$10$De0UiZGp3YI8zf69i01EWOxVUCqz0bahmidNAR9AJhXYhu3GE7znK'),
(4, 'anas@gmail.com', 'anas', '$2y$10$Yo4aIKP5nVeLmLy2iRwfJep7b3HSZfweTceeDyR56yiTpynIsRljC'),
(5, 'mohammad@gmail.com', 'mohammad', '$2y$10$0a7WkarsuvV3kNJzkuCa3ecnnBUHT3/m6chavkVqbhtQLH//nMMFC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
