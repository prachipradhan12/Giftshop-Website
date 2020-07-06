-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2012 at 06:24 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `giftshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`serial`, `name`, `email`, `address`, `phone`) VALUES
(1, 'shree', 'shree_12691@yahoo.co.in', 'vashi', '46553645765'),
(2, 'shahrukh', 'shahrukh@gmail.com', 'bandra', '9845623154'),
(3, 'shahrukh', 'shahrukh@gmail.com', 'bandra', '9845623154'),
(4, 'shahrukh', 'shahrukh@gmail.com', 'bandra', '9845623154'),
(5, 'shahrukh', 'shahrukh@gmail.com', 'bandra', '9845623154'),
(6, 'Shridhar', 'shree_12691@yahoo.co.in', 'vashi', '3689');

-- --------------------------------------------------------

--
-- Table structure for table `flowers`
--

CREATE TABLE IF NOT EXISTS `flowers` (
  `id_no` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `prize` int(250) NOT NULL,
  `picture` varchar(80) NOT NULL,
  PRIMARY KEY (`id_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `flowers`
--

INSERT INTO `flowers` (`id_no`, `name`, `prize`, `picture`) VALUES
(1, 'Yellow Flowers', 200, 'images/f1.jpg'),
(2, 'Mix Flowers', 350, 'images/f2.jpg'),
(3, 'Red Roses', 250, 'images/f3.jpg'),
(4, 'Pink Roses', 150, 'images/f4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gift`
--

CREATE TABLE IF NOT EXISTS `gift` (
  `id_no` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `prize` int(100) NOT NULL,
  `picture` varchar(80) NOT NULL,
  PRIMARY KEY (`id_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gift`
--

INSERT INTO `gift` (`id_no`, `name`, `prize`, `picture`) VALUES
(1, 'Black Forest Cake', 500, 'images/s1.jpg'),
(2, 'Pooh Cake', 450, 'images/s2.jpg'),
(3, 'Sweet Box', 400, 'images/s3.jpg'),
(4, 'Kaju Katli', 550, 'images/s4.jpg'),
(5, 'Mithai', 300, 'images/s5.jpg'),
(6, 'Cream Cake', 600, 'images/s6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gifts`
--

CREATE TABLE IF NOT EXISTS `gifts` (
  `id_no` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `prize` int(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `gifts`
--

INSERT INTO `gifts` (`id_no`, `name`, `prize`, `picture`, `category`) VALUES
(1, 'Black Forest Cake', 500, 'images/s1.jpg', 's'),
(2, 'Pooh Cake', 450, 'images/s2.jpg', 's'),
(3, 'Sweet Box', 400, 'images/s3.jpg', 's'),
(4, 'Kaju Katli', 550, 'images/s4.jpg', 's'),
(5, 'Yellow Flowers', 250, 'images/f1.jpg', 'f'),
(6, 'Mix Flowers', 300, 'images/f2.jpg', 'f'),
(7, 'Red Roses', 250, 'images/f3.jpg', 'f'),
(8, 'Pink Roses', 150, 'images/f4.jpg', 'f'),
(9, 'Mickey & Minnie', 350, 'images/t1.jpg', 't'),
(10, 'Cute Doggy', 200, 'images/t2.jpg', 't'),
(11, 'Drum Set', 450, 'images/t3.jpg', 't'),
(12, 'Doll', 300, 'images/t4.jpg', 't');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`serial`, `date`, `customerid`) VALUES
(1, '2012-10-13', 1),
(2, '2012-10-14', 2),
(3, '2012-10-14', 3),
(4, '2012-10-14', 4),
(5, '2012-10-14', 5),
(6, '2012-10-14', 6);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderid`, `productid`, `quantity`, `price`) VALUES
(2, 1, 1, 500),
(2, 4, 1, 550),
(3, 1, 1, 500),
(3, 4, 1, 550),
(4, 1, 1, 500),
(4, 4, 1, 550),
(5, 1, 1, 500),
(5, 4, 1, 550),
(6, 1, 2, 500),
(6, 2, 1, 450);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`firstName`, `lastName`, `sex`, `password`) VALUES
('Shridhar', 'Devadiga', 'male', '123456'),
('shahrukh', 'khan', 'male', '654321');

-- --------------------------------------------------------

--
-- Table structure for table `toys`
--

CREATE TABLE IF NOT EXISTS `toys` (
  `id_no` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `prize` int(200) NOT NULL,
  `picture` varchar(80) NOT NULL,
  PRIMARY KEY (`id_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `toys`
--

INSERT INTO `toys` (`id_no`, `name`, `prize`, `picture`) VALUES
(1, 'Mickey & Minnie', 350, 'images/t1.jpg'),
(2, 'Cute Dogy', 200, 'images/t2.jpg'),
(3, 'Drum Set', 450, 'images/t3.jpg'),
(4, 'Doll', 300, 'images/t4.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
