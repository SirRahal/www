-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2014 at 09:14 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bracket`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `tournament_ID` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(100) NOT NULL,
  `team_1_ID` int(100) NOT NULL,
  `team_2_ID` int(100) NOT NULL,
  `team_1_score` int(11) NOT NULL,
  `team_2_score` int(11) NOT NULL,
  `round` int(1) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `team_1_ID` (`team_1_ID`),
  KEY `team_2_ID` (`team_2_ID`),
  KEY `tournament_ID` (`tournament_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`ID`, `tournament_ID`, `date`, `time`, `location`, `team_1_ID`, `team_2_ID`, `team_1_score`, `team_2_score`, `round`) VALUES
(1, 1, '2014-03-20', '13:00:00', 'Memphis', 17, 1, 67, 55, 1),
(7, 1, '2014-05-01', '12:59:00', 'home', 10, 45, 48, 77, 1),
(11, 1, '2015-01-01', '01:00:00', 'florida', 17, 45, 61, 45, 2),
(12, 1, '2014-06-25', '12:01:00', 'va st', 59, 50, 75, 78, 1);

-- --------------------------------------------------------

--
-- Table structure for table `picks`
--

CREATE TABLE IF NOT EXISTS `picks` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_ID` int(11) NOT NULL,
  `team_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ticket_ID` (`ticket_ID`),
  KEY `team_ID` (`team_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `picks`
--

INSERT INTO `picks` (`ID`, `ticket_ID`, `team_ID`) VALUES
(1, 1, 17),
(2, 1, 60),
(3, 1, 12),
(4, 1, 26),
(5, 1, 59),
(6, 1, 39),
(7, 1, 44),
(8, 1, 25),
(9, 1, 18),
(10, 1, 51),
(11, 1, 53),
(12, 1, 40),
(13, 1, 14),
(14, 1, 62),
(15, 1, 67),
(16, 1, 63);

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE IF NOT EXISTS `placement` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_ID` int(100) NOT NULL,
  `team_ID` int(100) NOT NULL,
  `placement` int(2) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ticket_ID` (`ticket_ID`,`team_ID`),
  KEY `team_ID` (`team_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`ID`, `Name`) VALUES
(3, 'East'),
(4, 'Midwest'),
(1, 'South'),
(2, 'West');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `state` varchar(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`ID`, `name`, `state`) VALUES
(1, 'Dearborn High School', 'MI'),
(2, 'Forest Hills Northern', 'MI');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`ID`, `name`, `logo`) VALUES
(1, 'Albany NY', ''),
(2, 'American Univ', ''),
(3, 'Arizona', ''),
(4, 'Arizona St', ''),
(5, 'Baylor', ''),
(6, 'BYU', ''),
(7, 'Cal Poly SLO', ''),
(8, 'Cincinnati', ''),
(9, 'Coastal Car', ''),
(10, 'Colorado', ''),
(11, 'Connecticut', ''),
(12, 'Creighton', ''),
(13, 'Dayton', ''),
(14, 'Delaware', ''),
(15, 'Duke', ''),
(16, 'E Kentucky', ''),
(17, 'Florida', ''),
(18, 'G Washington', ''),
(19, 'Gonzaga', ''),
(20, 'Harvard', ''),
(21, 'Iowa', ''),
(22, 'Iowa St', ''),
(23, 'Kansas', ''),
(24, 'Kansas St', ''),
(25, 'Kentucky', ''),
(26, 'Louisville', ''),
(27, 'Manhattan', ''),
(28, 'Massachusetts', ''),
(29, 'Memphis', ''),
(30, 'Mercer', ''),
(31, 'Michigan', ''),
(32, 'Michigan St', ''),
(33, 'Mt St Mary''s', ''),
(34, 'N Dakota St', ''),
(35, 'NC Central', ''),
(36, 'NC State', ''),
(37, 'Nebraska', ''),
(38, 'New Mexico', ''),
(39, 'New Mexico St', ''),
(40, 'North Carolina', ''),
(41, 'Ohio St', ''),
(42, 'Oklahoma', ''),
(43, 'Oklahoma St', ''),
(44, 'Oregon', ''),
(45, 'Pittsburgh', ''),
(46, 'Providence', ''),
(47, 'San Diego St', ''),
(48, 'SF Austin', ''),
(49, 'St Joseph''s PA', ''),
(50, 'St Louis', ''),
(51, 'Stanford', ''),
(52, 'Syracuse', ''),
(53, 'Tennessee', ''),
(54, 'Texas', ''),
(55, 'Tulsa', ''),
(56, 'TX Southern', ''),
(57, 'UCLA', ''),
(58, 'ULL', ''),
(59, 'VA Commonwealth', ''),
(60, 'Villanova', ''),
(61, 'Virginia', ''),
(62, 'W Michigan', ''),
(63, 'Weber St', ''),
(64, 'WI Milwaukee', ''),
(65, 'Wichita St', ''),
(66, 'Wisconsin', ''),
(67, 'Wofford', ''),
(68, 'Xavier', ''),
(69, 'LA-Lafayette', ''),
(70, 'TBA', '');

-- --------------------------------------------------------

--
-- Table structure for table `team_tournament_region`
--

CREATE TABLE IF NOT EXISTS `team_tournament_region` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `team_ID` int(100) NOT NULL,
  `tournament_region_ID` int(100) NOT NULL,
  `seed` int(2) NOT NULL,
  `overall_seed` int(2) NOT NULL,
  `starting_placement` int(2) NOT NULL,
  `total_points` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `team_ID` (`team_ID`,`tournament_region_ID`),
  KEY `tournament_ID` (`tournament_region_ID`),
  KEY `tournament_region_ID` (`tournament_region_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `team_tournament_region`
--

INSERT INTO `team_tournament_region` (`ID`, `team_ID`, `tournament_region_ID`, `seed`, `overall_seed`, `starting_placement`, `total_points`) VALUES
(1, 17, 1, 1, 1, 1, 128),
(2, 1, 1, 16, 63, 2, 55),
(3, 10, 1, 8, 49, 3, 48),
(4, 45, 1, 9, 26, 4, 122),
(5, 59, 1, 5, 24, 5, 75),
(6, 50, 1, 12, 99, 6, 78),
(7, 57, 1, 4, 11, 7, 0),
(8, 55, 1, 13, 45, 8, 0),
(9, 41, 1, 6, 20, 9, 0),
(10, 13, 1, 11, 39, 10, 0),
(11, 52, 1, 3, 22, 11, 0),
(12, 62, 1, 14, 51, 12, 0),
(13, 37, 1, 7, 13, 13, 0),
(14, 51, 1, 10, 41, 14, 0),
(15, 23, 1, 2, 16, 15, 0),
(16, 16, 1, 15, 53, 16, 0),
(17, 3, 2, 1, 2, 17, 0),
(18, 63, 2, 16, 60, 18, 0),
(19, 19, 2, 8, 9, 19, 0),
(20, 43, 2, 9, 28, 20, 0),
(21, 42, 2, 5, 33, 21, 0),
(22, 40, 2, 12, 99, 22, 0),
(23, 49, 2, 4, 99, 23, 0),
(24, 38, 2, 13, 40, 24, 0),
(25, 5, 2, 6, 34, 25, 0),
(26, 36, 2, 11, 52, 26, 0),
(27, 12, 2, 3, 12, 27, 0),
(28, 69, 2, 14, 99, 28, 0),
(29, 44, 2, 7, 29, 29, 0),
(30, 6, 2, 10, 35, 30, 0),
(31, 66, 2, 2, 10, 31, 0),
(32, 2, 2, 15, 57, 32, 0),
(33, 61, 3, 1, 7, 33, 0),
(34, 9, 3, 16, 54, 34, 0),
(35, 29, 3, 8, 32, 35, 0),
(36, 18, 3, 9, 36, 36, 0),
(37, 8, 3, 5, 14, 37, 0),
(38, 20, 3, 12, 64, 38, 0),
(39, 31, 4, 2, 19, 39, 0),
(40, 14, 3, 13, 50, 40, 0),
(41, 39, 3, 6, 31, 41, 0),
(42, 46, 3, 11, 47, 42, 0),
(43, 22, 3, 3, 17, 43, 0),
(44, 34, 3, 14, 62, 44, 0),
(45, 11, 3, 7, 23, 45, 0),
(46, 47, 3, 10, 44, 46, 0),
(47, 60, 3, 2, 6, 47, 0),
(48, 33, 3, 15, 99, 48, 0),
(49, 65, 4, 1, 3, 49, 0),
(50, 7, 4, 16, 59, 50, 0),
(51, 25, 4, 8, 21, 51, 0),
(52, 24, 4, 9, 48, 52, 0),
(53, 48, 4, 5, 25, 53, 0),
(54, 35, 4, 12, 55, 54, 0),
(55, 26, 4, 4, 4, 55, 0),
(56, 27, 4, 13, 61, 56, 0),
(57, 28, 4, 6, 37, 57, 0),
(58, 53, 4, 11, 30, 58, 0),
(59, 15, 4, 3, 8, 59, 0),
(60, 30, 4, 14, 58, 60, 0),
(61, 54, 4, 7, 42, 61, 0),
(62, 4, 4, 10, 38, 62, 0),
(63, 32, 3, 4, 15, 63, 0),
(64, 67, 4, 15, 56, 64, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_ID` int(100) NOT NULL,
  `tournament_ID` int(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `rd_1` int(3) NOT NULL DEFAULT '0',
  `rd_2` int(3) NOT NULL DEFAULT '0',
  `rd_3` int(3) NOT NULL DEFAULT '0',
  `rd_4` int(3) NOT NULL DEFAULT '0',
  `rd_5` int(3) NOT NULL DEFAULT '0',
  `total_points` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `tournament_region_ID` (`tournament_ID`,`code`),
  KEY `user_ID` (`user_ID`),
  KEY `tournament_ID` (`tournament_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ID`, `user_ID`, `tournament_ID`, `code`, `rd_1`, `rd_2`, `rd_3`, `rd_4`, `rd_5`, `total_points`) VALUES
(1, 3, 1, '1-29td3', 142, 61, 0, 0, 0, 203),
(2, 3, 1, '1-48rc', 0, 0, 0, 0, 0, 0),
(3, 3, 1, '2-chj3', 0, 0, 0, 0, 0, 0),
(5, 3, 1, '2-zfr5', 0, 0, 0, 0, 0, 0),
(6, 4, 1, '1-adm2', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE IF NOT EXISTS `tournament` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `year` (`year`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`ID`, `year`) VALUES
(1, 2014);

-- --------------------------------------------------------

--
-- Table structure for table `tournament_region`
--

CREATE TABLE IF NOT EXISTS `tournament_region` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `tournament_ID` int(11) NOT NULL,
  `region_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `tournament_ID` (`tournament_ID`,`region_ID`),
  KEY `region_ID` (`region_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tournament_region`
--

INSERT INTO `tournament_region` (`ID`, `tournament_ID`, `region_ID`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tournament_results`
--

CREATE TABLE IF NOT EXISTS `tournament_results` (
  `ID` int(11) NOT NULL,
  `team_tournament_region_ID` int(11) NOT NULL,
  `placement` int(2) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `team_tournament_region_ID` (`team_tournament_region_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament_results`
--

INSERT INTO `tournament_results` (`ID`, `team_tournament_region_ID`, `placement`) VALUES
(1, 1, 7),
(2, 2, 2),
(3, 3, 2),
(4, 4, 3),
(5, 5, 2),
(6, 6, 2),
(7, 7, 2),
(8, 8, 2),
(9, 9, 2),
(10, 10, 2),
(11, 11, 2),
(12, 12, 2),
(13, 13, 2),
(14, 14, 2),
(15, 15, 2),
(16, 16, 2),
(17, 17, 2),
(18, 18, 2),
(19, 19, 2),
(20, 20, 2),
(21, 21, 2),
(22, 22, 2),
(23, 23, 2),
(24, 24, 2),
(25, 25, 2),
(26, 26, 2),
(27, 27, 2),
(28, 28, 2),
(29, 29, 2),
(30, 30, 2),
(31, 31, 2),
(32, 32, 2),
(33, 33, 2),
(34, 34, 2),
(35, 35, 2),
(36, 36, 2),
(37, 37, 2),
(38, 38, 2),
(39, 39, 2),
(40, 40, 2),
(41, 41, 2),
(42, 42, 2),
(43, 43, 2),
(44, 44, 2),
(45, 45, 2),
(46, 46, 2),
(47, 47, 2),
(48, 48, 2),
(49, 49, 2),
(50, 50, 2),
(51, 51, 2),
(52, 52, 2),
(53, 53, 2),
(54, 54, 2),
(55, 55, 2),
(56, 56, 2),
(57, 57, 2),
(58, 58, 2),
(59, 59, 2),
(60, 60, 2),
(61, 61, 2),
(62, 62, 2),
(63, 63, 2),
(64, 64, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip` varchar(8) NOT NULL,
  `phone` varchar(18) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`,`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `first_name`, `last_name`, `email`, `city`, `state`, `zip`, `phone`, `user_name`, `password`) VALUES
(1, 'Admin', 'Admin_last', 'admin@industrialtimesinc.com', 'grand rapids', 'MI', '49418', '3133848369', 'admin', 'sari'),
(3, 'mike', 'b', 'biggyistheman@yahoo.com', 'grand rapids', 'mi', '49534', '3133848369', 'sirrahal', 'bjc4400'),
(4, 'mike', 'b', 'sari@btmindustrial.com', 'grand rapids', 'mi', '49534', '3133848369', 'sirrahal2', 'bjc4400');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`team_1_ID`) REFERENCES `team` (`ID`),
  ADD CONSTRAINT `game_ibfk_2` FOREIGN KEY (`team_2_ID`) REFERENCES `team` (`ID`),
  ADD CONSTRAINT `game_ibfk_3` FOREIGN KEY (`tournament_ID`) REFERENCES `tournament` (`ID`);

--
-- Constraints for table `picks`
--
ALTER TABLE `picks`
  ADD CONSTRAINT `picks_ibfk_1` FOREIGN KEY (`ticket_ID`) REFERENCES `ticket` (`ID`),
  ADD CONSTRAINT `picks_ibfk_2` FOREIGN KEY (`team_ID`) REFERENCES `team` (`ID`);

--
-- Constraints for table `placement`
--
ALTER TABLE `placement`
  ADD CONSTRAINT `placement_ibfk_1` FOREIGN KEY (`ticket_ID`) REFERENCES `ticket` (`ID`),
  ADD CONSTRAINT `placement_ibfk_2` FOREIGN KEY (`team_ID`) REFERENCES `team` (`ID`);

--
-- Constraints for table `team_tournament_region`
--
ALTER TABLE `team_tournament_region`
  ADD CONSTRAINT `team_tournament_region_ibfk_1` FOREIGN KEY (`team_ID`) REFERENCES `team` (`ID`),
  ADD CONSTRAINT `team_tournament_region_ibfk_2` FOREIGN KEY (`tournament_region_ID`) REFERENCES `tournament_region` (`ID`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`user_ID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`tournament_ID`) REFERENCES `tournament` (`ID`);

--
-- Constraints for table `tournament_region`
--
ALTER TABLE `tournament_region`
  ADD CONSTRAINT `tournament_region_ibfk_1` FOREIGN KEY (`tournament_ID`) REFERENCES `tournament` (`ID`),
  ADD CONSTRAINT `tournament_region_ibfk_2` FOREIGN KEY (`region_ID`) REFERENCES `region` (`ID`);

--
-- Constraints for table `tournament_results`
--
ALTER TABLE `tournament_results`
  ADD CONSTRAINT `tournament_results_ibfk_1` FOREIGN KEY (`team_tournament_region_ID`) REFERENCES `team_tournament_region` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
