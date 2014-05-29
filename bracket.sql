-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2014 at 09:16 PM
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
  PRIMARY KEY (`ID`),
  KEY `team_1_ID` (`team_1_ID`),
  KEY `team_2_ID` (`team_2_ID`),
  KEY `tournament_ID` (`tournament_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`ID`, `tournament_ID`, `date`, `time`, `location`, `team_1_ID`, `team_2_ID`, `team_1_score`, `team_2_score`) VALUES
(1, 1, '2014-03-20', '13:00:00', 'Memphis', 17, 1, 67, 55),
(7, 1, '2014-05-01', '12:59:00', 'home', 10, 45, 44, 45);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

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
(69, 'LA-Lafayette', '');

-- --------------------------------------------------------

--
-- Table structure for table `team_tournament_region`
--

CREATE TABLE IF NOT EXISTS `team_tournament_region` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `team_ID` int(100) NOT NULL,
  `tournament_ID` int(100) NOT NULL,
  `seed` int(2) NOT NULL,
  `overall_seed` int(2) NOT NULL,
  `starting_placement` int(2) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `team_ID` (`team_ID`,`tournament_ID`),
  KEY `tournament_ID` (`tournament_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `team_tournament_region`
--

INSERT INTO `team_tournament_region` (`ID`, `team_ID`, `tournament_ID`, `seed`, `overall_seed`, `starting_placement`) VALUES
(1, 17, 1, 1, 1, 1),
(2, 1, 1, 16, 63, 2),
(3, 10, 1, 8, 49, 3),
(4, 45, 1, 9, 26, 4),
(5, 59, 1, 5, 24, 5),
(6, 50, 1, 12, 99, 6),
(7, 57, 1, 4, 11, 7),
(8, 55, 1, 13, 45, 8),
(9, 41, 1, 6, 20, 9),
(10, 13, 1, 11, 39, 10),
(11, 52, 1, 3, 22, 11),
(12, 62, 1, 14, 51, 12),
(13, 37, 1, 7, 13, 13),
(14, 51, 1, 10, 41, 14),
(15, 23, 1, 2, 16, 15),
(16, 16, 1, 15, 53, 16),
(17, 3, 2, 1, 2, 17),
(18, 63, 2, 16, 60, 18),
(19, 19, 2, 8, 9, 19),
(20, 43, 2, 9, 28, 20),
(21, 42, 2, 5, 33, 21),
(22, 40, 2, 12, 99, 22),
(23, 49, 2, 4, 99, 23),
(24, 38, 2, 13, 40, 24),
(25, 5, 2, 6, 34, 25),
(26, 36, 2, 11, 52, 26),
(27, 12, 2, 3, 12, 27),
(28, 69, 2, 14, 99, 28),
(29, 44, 2, 7, 29, 29),
(30, 6, 2, 10, 35, 30),
(31, 66, 2, 2, 10, 31),
(32, 2, 2, 15, 57, 32),
(33, 61, 3, 1, 7, 33),
(34, 9, 3, 16, 54, 34),
(35, 29, 3, 8, 32, 35),
(36, 18, 3, 9, 36, 36),
(37, 8, 3, 5, 14, 37),
(38, 20, 3, 12, 64, 38),
(39, 31, 3, 2, 19, 39),
(40, 14, 3, 13, 50, 40),
(41, 39, 3, 6, 31, 41),
(42, 46, 3, 11, 47, 42),
(43, 22, 3, 3, 17, 43),
(44, 34, 3, 14, 62, 44),
(45, 11, 3, 7, 23, 45),
(46, 47, 3, 10, 44, 46),
(47, 60, 3, 2, 6, 47),
(48, 33, 3, 15, 99, 48),
(49, 65, 4, 1, 3, 49),
(50, 7, 4, 16, 59, 50),
(51, 25, 4, 8, 21, 51),
(52, 24, 4, 9, 48, 52),
(53, 48, 4, 5, 25, 53),
(54, 35, 4, 12, 55, 54),
(55, 26, 4, 4, 4, 55),
(56, 27, 4, 13, 61, 56),
(57, 28, 4, 6, 37, 57),
(58, 53, 4, 11, 30, 58),
(59, 15, 4, 3, 8, 59),
(60, 30, 4, 14, 58, 60),
(61, 54, 4, 7, 42, 61),
(62, 4, 4, 10, 38, 62),
(63, 32, 4, 4, 15, 63),
(64, 67, 4, 15, 56, 64);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_ID` int(100) NOT NULL,
  `tournament_region_ID` int(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `tournament_region_ID` (`tournament_region_ID`,`code`),
  KEY `user_ID` (`user_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_3` FOREIGN KEY (`tournament_ID`) REFERENCES `tournament` (`ID`),
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`team_1_ID`) REFERENCES `team` (`ID`),
  ADD CONSTRAINT `game_ibfk_2` FOREIGN KEY (`team_2_ID`) REFERENCES `team` (`ID`);

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
  ADD CONSTRAINT `team_tournament_region_ibfk_3` FOREIGN KEY (`tournament_ID`) REFERENCES `tournament_region` (`ID`),
  ADD CONSTRAINT `team_tournament_region_ibfk_1` FOREIGN KEY (`team_ID`) REFERENCES `team` (`ID`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`tournament_region_ID`) REFERENCES `tournament_region` (`ID`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`user_ID`) REFERENCES `user` (`ID`);

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
