-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2018 at 07:07 PM
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
  `ID_Combination` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`ID_Combination`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `combination`
--

INSERT INTO `combination` (`ID_Combination`, `User_Name`, `P1`, `P2`, `P3`, `P4`, `P5`, `P6`, `P7`, `P8`, `P9`) VALUES
(1, 'Ayoub_lwela', 'ali', 'ahmed', 'oumer', 'aya', 'Arroy', 'Yassen', 'Abu Bakr', 'jamal', 'nour');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `ID_Players` int(11) NOT NULL AUTO_INCREMENT,
  `Player_First_Name` varchar(250) NOT NULL,
  `Player_Last_Name` varchar(200) NOT NULL,
  `Game_Week_Points` int(11) NOT NULL,
  `Total_points` int(100) NOT NULL,
  `Team` varchar(200) NOT NULL,
  `Salary` double NOT NULL,
  `extra` varchar(200) NOT NULL,
  PRIMARY KEY (`ID_Players`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`ID_Players`, `Player_First_Name`, `Player_Last_Name`, `Game_Week_Points`, `Total_points`, `Team`, `Salary`, `extra`) VALUES
(1, 'ayoub', 'lwela', 100, 526, 'al athad', 2000000, '');

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE IF NOT EXISTS `ranks` (
  `ID_Ranks` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(250) NOT NULL,
  `Game_Week_Ranks` int(11) NOT NULL,
  `Total_Ranks` int(11) NOT NULL,
  `Point_Game_Week` int(11) NOT NULL,
  `Total_Points` int(11) NOT NULL,
  `Extra` varchar(250) NOT NULL,
  PRIMARY KEY (`ID_Ranks`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`ID_Ranks`, `User_Name`, `Game_Week_Ranks`, `Total_Ranks`, `Point_Game_Week`, `Total_Points`, `Extra`) VALUES
(1, 'ayoub_ranks', 160, 5305, 562, 256, 'non');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_name`) VALUES
(1, 'al athad');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `User_Name`, `Email`, `Password`, `Phone_Number`, `prevlage`, `Register_Date`, `Register_Time`, `Favorite_Team`, `First_Name`, `Last_Name`, `Transfer`) VALUES
(1, 'ayoub_user', 'ayoub_fhlom@yahoo.com', '123456789', '0927173403', 'Admin', '2018-05-16', '10:30:00', 'dfds', 'moaad', 'adsaf', 0),
(3, 'Ø§Ù„Ù‡Ø´', 'hisham@gmail.com', '123456789', '0944687203', 'User', '2018-05-07', '23:04:09', 'al athad', 'Ù‡Ø´Ø§Ù…', 'Ø§Ù„Ù‚Ø¹ÙˆØ¯', 0);
