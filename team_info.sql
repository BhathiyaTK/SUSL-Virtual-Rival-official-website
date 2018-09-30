-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 30, 2018 at 05:10 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virtual_rival`
--

-- --------------------------------------------------------

--
-- Table structure for table `team_info`
--

DROP TABLE IF EXISTS `team_info`;
CREATE TABLE IF NOT EXISTS `team_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(100) NOT NULL,
  `university_name` varchar(150) NOT NULL,
  `leader_name` varchar(100) NOT NULL,
  `leader_email` varchar(150) NOT NULL,
  `leader_phone` int(30) NOT NULL,
  `leader_t_shirt` varchar(10) NOT NULL,
  `leader_meal` varchar(20) NOT NULL,
  `member1_name` varchar(100) NOT NULL,
  `member1_email` varchar(150) NOT NULL,
  `member1_t_shirt` varchar(10) NOT NULL,
  `member1_meal` varchar(20) NOT NULL,
  `member2_name` varchar(100) NOT NULL,
  `member2_email` varchar(150) NOT NULL,
  `member2_t_shirt` varchar(10) NOT NULL,
  `member2_meal` varchar(20) NOT NULL,
  `member3_name` varchar(100) NOT NULL,
  `member3_email` varchar(150) NOT NULL,
  `member3_t_shirt` varchar(10) NOT NULL,
  `member3_meal` varchar(20) NOT NULL,
  `member4_name` varchar(100) NOT NULL,
  `member4_email` varchar(150) NOT NULL,
  `member4_t_shirt` varchar(10) NOT NULL,
  `member4_meal` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_info`
--

INSERT INTO `team_info` (`id`, `team_name`, `university_name`, `leader_name`, `leader_email`, `leader_phone`, `leader_t_shirt`, `leader_meal`, `member1_name`, `member1_email`, `member1_t_shirt`, `member1_meal`, `member2_name`, `member2_email`, `member2_t_shirt`, `member2_meal`, `member3_name`, `member3_email`, `member3_t_shirt`, `member3_meal`, `member4_name`, `member4_email`, `member4_t_shirt`, `member4_meal`) VALUES
(1, '%s', '%s', '%s', '%s', &d, '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
