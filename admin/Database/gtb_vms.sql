-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 18, 2020 at 10:07 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gtb_vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `postion` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `postion`, `department`, `email`, `phone`) VALUES
(1, 'Yewande Balogun', 'Manager', 'App Developement', 'yewande@gmail.com', '09038888888'),
(2, 'Balogun Yewande', 'Client Service', 'SME Customer Care', 'yewande@gmail.com', '090292388823');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `user_level` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `last_login` varchar(100) NOT NULL,
  `log` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `ip`, `user_level`, `status`, `last_login`, `log`) VALUES
(11, 'Damilo', 'dmb@gmail.com', 'e83ba306f910950b0542591cd17438da5faa74d1', '127.0.0.1', 1, 'Admin', '2020-02-18 21:37:45 PM', 0),
(5, 'Chisom Jude', 'ogeb@gmail.com', 'e83ba306f910950b0542591cd17438da5faa74d1', '127.0.0.1', 1, 'Admin', '2020-02-18 09:37:47 AM', 0),
(13, 'Test Account', 'chi@gmail.com', 'e83ba306f910950b0542591cd17438da5faa74d1', '127.0.0.1', 2, 'User', '2020-02-18 22:55:47 PM', 0),
(10, 'Chisom Benita', 'chib@gmail.com', 'e83ba306f910950b0542591cd17438da5faa74d1', '127.0.0.1', 1, 'Admin', '2020-02-18 09:48:04 AM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

DROP TABLE IF EXISTS `visitors`;
CREATE TABLE IF NOT EXISTS `visitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `visiting_staff` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `sign_in_date` varchar(100) NOT NULL,
  `sign_in_time` varchar(100) NOT NULL,
  `sign_out_date` varchar(100) NOT NULL,
  `sign_out_time` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `visiting_dept` varchar(100) NOT NULL,
  `signout_ip` varchar(100) DEFAULT NULL,
  `signout_comment` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `name`, `phone`, `email`, `company`, `ip_address`, `visiting_staff`, `reason`, `sign_in_date`, `sign_in_time`, `sign_out_date`, `sign_out_time`, `comment`, `visiting_dept`, `signout_ip`, `signout_comment`) VALUES
(1, 'Yemi Alade ', '09039293429', 'yemi@gmail.com', 'Yemi Tunes Ng', '127.0.0.1', 'Manager', 'Official', '2020-02-16', '07:05:02', '2020-02-16', '06:54:32 PM', 'Want to propose to be a brand ambasssdor', 'Marketing Department', '127.0.0.1', 'It was a very welcoming experience. All thanks to GTB'),
(2, 'Jude Chisom', '07030415912', 'judegodstimechisom@gmail.com', ' TechyTech PLC', '127.0.0.1', 'Yewande Balogun ', 'Personal', '2020-02-12', '03:58:19 PM', '0', '0', 'fdms', '', '', ''),
(14, 'Jude Chisom', '07030415912', 'judegodstimechisom@gmail.com', 'Spice Technologies', '127.0.0.1', 'Balogun Yewande ', 'Personal', '2020-02-18', '09:14:59 PM', '0', '0', 'ok ', 'SME Customer Care', '', NULL),
(5, 'Mike Bello', '0909239293', 'mb@gmail.com', 'Wale Adenuga Productions', '127.0.0.1', 'Balogun Yewande ', 'Personal', '2020-02-14', '04:15:33 PM', '2020-02-17', '10:31:55', 'To deliver a piece of urgent information from home', 'SME Customer Care)', '', 'Forced Signout by Admin'),
(6, 'Mike Bello', '0909239293', 'mb@gmail.com', 'Spex MicroSystems', '127.0.0.1', 'Balogun Yewande ', 'Personal', '2020-02-16', '04:17:08 PM', '0', '0', 'To deliver a piece of urgent information from home', 'SME Customer Care)', '', ''),
(7, 'Mike Bello', '0909239293', 'mb@gmail.com', 'Wale Adenuga Productions', '127.0.0.1', 'Balogun Yewande ', 'Personal', '2020-02-16', '04:25:38 PM', '0', '0', 'To deliver a piece of urgent information from home', 'SME Customer Care) ', '', ''),
(8, 'Muna G', '07030415912', 'munag@gmail.com', 'Food like Home Ng', '127.0.0.1', 'Balogun Yewande ', 'Official', '2020-02-16', '08:47:47 PM', '2020-02-17', '10:31:28', 'I want to present a proposal to be your food vendor both for events and staff lunch supply', 'SME Customer Care', '', 'Forced Signout by Admin'),
(13, 'Dele Okowa', '07023023032', 'deleo@gmail.co', 'Dob and Bod Ng', '127.0.0.1', 'Balogun Yewande ', 'Official', '2020-02-17', '07:37:16 PM', '0', '0', 'Follow up on proposal submitted to the Manager ', 'SME Customer Care', '', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
