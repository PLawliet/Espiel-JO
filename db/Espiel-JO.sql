-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2013 at 01:58 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Espiel-JO`
--

-- --------------------------------------------------------

--
-- Table structure for table `group_message`
--

CREATE TABLE IF NOT EXISTS `group_message` (
  `group_message_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(150) DEFAULT NULL,
  `group_message_to_post` text,
  PRIMARY KEY (`group_message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `group_message`
--


-- --------------------------------------------------------

--
-- Table structure for table `job_posted`
--

CREATE TABLE IF NOT EXISTS `job_posted` (
  `job_posted_id` int(11) NOT NULL AUTO_INCREMENT,
  `poster` varchar(150) DEFAULT NULL,
  `job` text,
  `current_time` time DEFAULT NULL,
  PRIMARY KEY (`job_posted_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `job_posted`
--


-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE IF NOT EXISTS `main` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `group_id_message` int(11) DEFAULT NULL,
  `id_job_posted` int(11) DEFAULT NULL,
  `id_message` int(11) DEFAULT NULL,
  `id_payment` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `main`
--


-- --------------------------------------------------------

--
-- Table structure for table `message_centre`
--

CREATE TABLE IF NOT EXISTS `message_centre` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `current_user_fullname` varchar(150) DEFAULT NULL,
  `recipient` varchar(150) DEFAULT NULL,
  `message_to_sent` text,
  `time_sent` time DEFAULT NULL,
  `display_as_received` varchar(20) DEFAULT NULL,
  `display_as_sent` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `message_centre`
--


-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `payer` int(11) DEFAULT NULL,
  `payee` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `time_payed` time DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `payment`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `log` varchar(10) DEFAULT NULL,
  `money` int(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `middlename`, `lastname`, `username`, `address`, `age`, `gender`, `email`, `password`, `log`, `money`) VALUES
(1, 'Princess Emmanuelle', 'Ramiscal', 'Espiel', 'PLawliet', 'cansamada East', 16, 'female', 'espielprincessemmanuelle@yahoo.com', '81086', 'out', 0);
