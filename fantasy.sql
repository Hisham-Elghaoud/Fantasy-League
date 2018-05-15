-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2018 at 12:49 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fantasy`
--

-- --------------------------------------------------------

--
-- Table structure for table `combination`
--

CREATE TABLE IF NOT EXISTS `combination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(200) NOT NULL,
  `P1` varchar(200) NOT NULL,
  `P2` varchar(200) NOT NULL,
  `P3` varchar(200) NOT NULL,
  `P4` varchar(200) NOT NULL,
  `P5` varchar(200) NOT NULL,
  `P6` varchar(200) NOT NULL,
  `P7` varchar(200) NOT NULL,
  `P8` varchar(200) NOT NULL,
  `P9` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `combination`
--

INSERT INTO `combination` (`id`, `User_Name`, `P1`, `P2`, `P3`, `P4`, `P5`, `P6`, `P7`, `P8`, `P9`) VALUES
(1, 'ayoub_user', 'Muhimen Alssdiq', 'Ayoub Lwela', 'Bader Eltobal', 'Omar Almogrbe', 'Hisham Elghaoud', 'Mooad Zbeda', 'Steve Jobes', 'Stevie Feliciano', 'Jenny Hess');

-- --------------------------------------------------------

--
-- Table structure for table `matchs`
--

CREATE TABLE IF NOT EXISTS `matchs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team1` varchar(100) NOT NULL,
  `team2` varchar(100) NOT NULL,
  `match_date` date NOT NULL,
  `score` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `matchs`
--

INSERT INTO `matchs` (`id`, `team1`, `team2`, `match_date`, `score`) VALUES
(1, 'al athad', 'al ahli', '2018-05-15', '1 - 2'),
(2, 'al shat', 'al madena', '2018-05-15', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Player_Name` varchar(250) NOT NULL,
  `Game_Week_Points` int(11) NOT NULL,
  `Total_points` int(100) NOT NULL,
  `Team` varchar(200) NOT NULL,
  `Salary` double NOT NULL,
  `update_date` date NOT NULL,
  `goals` int(11) NOT NULL,
  `asesst` int(11) NOT NULL,
  `miss_pelanty` int(11) NOT NULL,
  `clean_sheet` int(11) NOT NULL,
  `gk_score` int(11) NOT NULL,
  `pelanty_save` int(11) NOT NULL,
  `goal_conceded` int(11) NOT NULL,
  `own_goal` int(11) NOT NULL,
  `full_match` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `Player_Name`, `Game_Week_Points`, `Total_points`, `Team`, `Salary`, `update_date`, `goals`, `asesst`, `miss_pelanty`, `clean_sheet`, `gk_score`, `pelanty_save`, `goal_conceded`, `own_goal`, `full_match`) VALUES
(1, 'Ayoub Lwela', 2, 10, 'al athad', 100, '2018-05-14', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Muhimen Alssdiq', 4, 15, 'al athad', 100, '2018-05-14', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'Bader Eltobal', 2, 8, 'al madena', 100, '2018-05-13', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Omar Almogrbe', 6, 15, 'al madena', 50, '2018-05-13', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'Hisham Elghaoud', 4, 12, 'al shat', 50, '2018-05-13', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Mooad Zbeda', 6, 12, 'al ahli', 100, '2018-05-14', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Steve Jobes', 5, 5, 'al ahli', 50, '2018-05-13', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'Stevie Feliciano', 4, 4, 'al shat', 50, '2018-05-13', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'Jenny Hess', 1, 1, 'al madena', 50, '2018-05-13', 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'mi', 0, 0, 'al ahli', 100, '2018-05-14', 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE IF NOT EXISTS `ranks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(250) NOT NULL,
  `Game_Week_Ranks` int(11) NOT NULL,
  `Total_Ranks` int(11) NOT NULL,
  `Point_Game_Week` int(11) NOT NULL,
  `Total_Points` int(11) NOT NULL,
  `Register_Date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`id`, `User_Name`, `Game_Week_Ranks`, `Total_Ranks`, `Point_Game_Week`, `Total_Points`, `Register_Date`) VALUES
(1, 'ayoub_user', 2, 2, 24, 328, '2018-05-14'),
(2, 'Hisham', 1, 1, 25, 340, '2018-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_name`) VALUES
(1, 'al athad'),
(2, 'al ahli'),
(3, 'al madena'),
(4, 'al shat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(250) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Phone_Number` varchar(20) NOT NULL,
  `prevlage` text NOT NULL,
  `Register_Date` date NOT NULL,
  `Register_Time` time NOT NULL,
  `Favorite_Team` varchar(250) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Transfer` int(11) NOT NULL,
  `img_src` varchar(500) NOT NULL,
  `my_team` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `User_Name`, `Email`, `Password`, `Phone_Number`, `prevlage`, `Register_Date`, `Register_Time`, `Favorite_Team`, `First_Name`, `Last_Name`, `Transfer`, `img_src`, `my_team`) VALUES
(1, 'ayoub_user', 'ayoub_fhlom@yahoo.com', '123456789', '0927173403', 'User', '2018-05-16', '10:30:00', 'dfds', 'moaad', 'adsaf', 0, '../img/pic.png', 1),
(3, 'Hisham', 'hisham@gmail.com', '123456789', '0944687203', 'User', '2018-05-07', '23:04:09', 'al athad', 'Ù‡Ø´Ø§Ù…', 'Ø§Ù„Ù‚Ø¹ÙˆØ¯', 0, '../img/pic.png', 1),
(8, 'Admin', '', '123456789', '', 'Admin', '0000-00-00', '00:00:00', '', '', '', 0, '', 1);
