-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2014 at 10:24 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lister`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `listing_ID` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `listing_ID` (`listing_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE IF NOT EXISTS `listings` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `list_by` int(11) NOT NULL,
  `inventory` varchar(45) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(1000) NOT NULL,
  `internal_number` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `manufacturer` varchar(100) NOT NULL,
  `serial_number` varchar(50) NOT NULL,
  `model_number` varchar(50) NOT NULL,
  `more_info` varchar(1500) NOT NULL,
  `condition` int(1) NOT NULL,
  `condition_info` varchar(100) NOT NULL,
  `weight` varchar(15) NOT NULL,
  `length_1` decimal(15,0) NOT NULL,
  `width_1` decimal(15,0) NOT NULL,
  `height_1` decimal(15,0) NOT NULL,
  `dims_2` decimal(15,0) NOT NULL,
  `length_2` decimal(15,0) NOT NULL,
  `width_2` decimal(15,0) NOT NULL,
  `height_2` decimal(15,0) NOT NULL,
  `listing_note` varchar(1500) NOT NULL,
  `ebay_listed` int(1) NOT NULL DEFAULT '0',
  `ebay_lister` int(11) DEFAULT NULL,
  `ebay_date` date NOT NULL,
  `sold` int(1) NOT NULL DEFAULT '0',
  `sold_date` date NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `list_by` (`list_by`),
  KEY `ebay_lister` (`ebay_lister`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`ID`, `list_by`, `inventory`, `date`, `description`, `internal_number`, `price`, `manufacturer`, `serial_number`, `model_number`, `more_info`, `condition`, `condition_info`, `weight`, `length_1`, `width_1`, `height_1`, `dims_2`, `length_2`, `width_2`, `height_2`, `listing_note`, `ebay_listed`, `ebay_lister`, `ebay_date`, `sold`, `sold_date`) VALUES
(1, 1, '12', '2014-12-03 15:22:58', '124', '124', '1', '124', '24', '124', '12', 5, '124', '124', '124', '124', '12', '412', '124', '12', '12', '124', 1, 1, '2014-12-01', 0, '0000-00-00'),
(2, 1, '12', '2014-12-03 15:22:58', '124', '124', '1', '124', '24', '124', '12', 1, '124', '124', '124', '124', '12', '412', '124', '12', '12', '124', 1, 1, '2014-12-01', 0, '0000-00-00'),
(3, 2, '12', '2014-12-03 15:22:58', '124', '124', '1', '124', '24', '124', '12', 1, '124', '124', '124', '124', '12', '412', '124', '12', '12', '124', 1, 1, '2014-12-01', 0, '0000-00-00'),
(4, 1, 'afasd', '2014-12-03 16:59:03', 'this is a test description', '1234', '13', 'huff', 'D24D2', 'SD35512F', 'this is more info', 0, 'broken on the side', '15-45', '1', '2', '3', '0', '1', '2', '3', '', 1, NULL, '0000-00-00', 0, '0000-00-00'),
(5, 1, 'afasd', '2014-12-03 16:59:23', 'this is a test description', '1234', '13', 'huff', 'D24D2', 'SD35512F', 'this is more info', 0, 'broken on the side', '15-45', '1', '2', '3', '0', '1', '2', '3', '', 1, NULL, '0000-00-00', 0, '0000-00-00'),
(6, 1, '45-B-2-R', '2014-12-03 21:43:08', 'transformer kva 35', '315', '500', 'allen bradley', '041687', 'l235-775', 'i am running out of time', 0, 'dirty', '50', '0', '0', '0', '0', '0', '0', '0', '', 1, 1, '0000-00-00', 0, '0000-00-00'),
(7, 3, '', '2014-12-03 22:22:44', '', '', '0', '', '', '', '', 0, '', '', '0', '0', '0', '0', '0', '0', '0', '', 1, NULL, '0000-00-00', 0, '0000-00-00'),
(8, 3, '3456', '2014-12-04 15:29:52', 'this t a tres', '', '0', 'allen bradley', '', 'kug678', '', 1, '', '15-45', '124', '15', '45', '0', '0', '0', '0', '', 1, NULL, '0000-00-00', 0, '0000-00-00'),
(9, 1, 'CV3# 78-C-2-K, ', '2014-12-04 19:23:01', 'AC Servo Motor', '', '0', 'Yaskawa', '', 'USAGED-09A22K ', 'Encoder UTOPH-81AWF .85kw  7.6 amp.  ', 4, 'dirty', '13', '13', '6', '7', '0', '0', '0', '0', '', 0, NULL, '0000-00-00', 0, '0000-00-00'),
(11, 3, 'asdf', '2014-12-05 15:31:23', '', '', '0', 'asdf', '', 'aaf', '', 0, '', '1', '1', '1', '1', '0', '0', '0', '0', '', 0, NULL, '0000-00-00', 0, '0000-00-00'),
(12, 3, '12', '2014-12-05 15:53:10', '124', '124', '1', '124', '24', '124', '12', 5, '124', '124', '124', '124', '12', '412', '124', '12', '12', '124', 1, 1, '0000-00-00', 0, '0000-00-00'),
(13, 3, 'CV3# 78-C-2-K2', '2014-12-05 15:58:03', 'AC Servo Motor', '', '0', 'Yaskawa', '', 'USAGED-09A22K ', 'Encoder UTOPH-81AWF .85kw  7.6 amp.  ', 4, 'dirty', '13', '13', '6', '7', '0', '0', '0', '0', '', 1, NULL, '0000-00-00', 0, '0000-00-00'),
(14, 1, '12', '2014-12-09 16:27:13', '124', '124', '1', '124', '24', '124', '12', 5, '124', '124', '124', '124', '12', '412', '124', '12', '12', '124', 1, 1, '0000-00-00', 0, '0000-00-00'),
(15, 1, '12', '2014-12-09 16:27:28', '124', '124', '1', '124', '24', '124', '12', 5, '124', '124', '124', '124', '12', '412', '124', '12', '12', '124', 1, 1, '0000-00-00', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `permission` int(1) NOT NULL DEFAULT '1' COMMENT '1 = Stripper, 2 = Lister, 3 = Admin',
  `user_name` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `first_name`, `last_name`, `permission`, `user_name`, `password`) VALUES
(1, 'Sari', 'Rahal', 3, 'admin', 'bjc4400'),
(2, 'Carmen', 'VanSuilichem', 3, 'carmen', '349267Bull'),
(3, 'test', 'test', 1, 'test', 'test'),
(4, 'ebaylister', 'lastname', 2, 'ebaylister', 'ebaylister');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`listing_ID`) REFERENCES `listings` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `listings`
--
ALTER TABLE `listings`
  ADD CONSTRAINT `listings_ibfk_1` FOREIGN KEY (`list_by`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `listings_ibfk_2` FOREIGN KEY (`ebay_lister`) REFERENCES `user` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
