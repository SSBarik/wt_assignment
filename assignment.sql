-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 28, 2019 at 09:15 AM
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
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `link` varchar(255) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `uid`, `type`, `pname`, `description`, `link`, `timestamp`) VALUES
(1, 5, 'web', 'Hostel Management System', '\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://blog.beaconstac.com/2018/12/beacon-use-cases-for-2019-the-unstoppable-force-of-proximity-marketing/', '2019-04-25 18:36:41.231212'),
(2, 6, 'iot', 'Driver Smart Tracking', '\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://blog.beaconstac.com/2018/12/beacon-use-cases-for-2019-the-unstoppable-force-of-proximity-marketing/', '2019-04-25 18:40:45.029280'),
(3, 7, 'ml', 'AI Mantra Explorer', 'Waah ahdjksd adjkhskdhs sadskdsnds dklahdhsads d dlsads dsa.Waah ahdjksd adjkhskdhs sadskdsnds dklahdhsads d dlsads dsa.Waah ahdjksd adjkhskdhs sadskdsnds dklahdhsads d dlsads dsa.Waah ahdjksd adjkhskdhs sadskdsnds dklahdhsads d dlsads dsa.Waah ahdjksd adjkhskdhs sadskdsnds dklahdhsads d dlsads dsa.Waah ahdjksd adjkhskdhs sadskdsnds dklahdhsads d dlsads dsa.Waah ahdjksd adjkhskdhs sadskdsnds dklahdhsads d dlsads dsa.Waah ahdjksd adjkhskdhs sadskdsnds dklahdhsads d dlsads dsa.Waah ahdjksd adjkhskdhs sadskdsnds dklahdhsads d dlsads dsa.Waah ahdjksd adjkhskdhs sadskdsnds dklahdhsads d dlsads dsa.', 'https://indoo.rs/industry-4-0-with-indoor-positioning/', '2019-04-25 19:09:43.377876'),
(4, 7, 'web', 'College Fest Registration', '\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://blog.lighthouse.io/exploring-new-ways-to-use-beacons-for-people-and-asset-tracking/', '2019-04-25 19:55:12.056063'),
(5, 9, 'ml', 'Plantation Monitoring System', '\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'https://indoo.rs/industry-4-0-with-indoor-positioning/', '2019-04-28 09:10:07.942469');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` char(20) NOT NULL,
  `lname` char(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `gender` char(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` char(20) NOT NULL,
  `pincode` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `contact`, `gender`, `dob`, `address`, `city`, `pincode`) VALUES
(2, 'Shashank', 'Barik', 'tester@gmail.com', 'a969bccb02c49c76d28bb530fc125e40', '8763343657', '2', '2019-02-18', 'Jyoti Vihar, Sambalpur University, TH-5/1, Old Post-office lane', 'Sambalpur', 768019),
(3, 'Shashank', 'Barik', 'tester@gmail.com', 'a969bccb02c49c76d28bb530fc125e40', '8763343657', '2', '2019-02-18', 'Jyoti Vihar, Sambalpur University, TH-5/1, Old Post-office lane', 'Sambalpur', 768019),
(4, 'Babu', 'One', 'tester1@gmail.com', 'a969bccb02c49c76d28bb530fc125e40', '8763343657', '2', '2019-02-06', 'Jyoti Vihar, Sambalpur University, TH-5/1, Old Post-office lane', 'Sambalpur', 768019),
(5, 'Simchan', 'Sahu', 'ss@suiit.ac.in', '202cb962ac59075b964b07152d234b70', '8763343657', '2', '2019-01-01', 'Jyoti Vihar, Sambalpur University, TH-5/1, Old Post-office lane', 'Sambalpur', 768019),
(6, 'Doremon', 'Babu', 'dore@suiit.ac.in', '202cb962ac59075b964b07152d234b70', '8763343657', 'male', '2019-01-01', 'Jyoti Vihar, Sambalpur University, TH-5/1, Old Post-office lane', 'Sambalpur', 768019),
(7, 'Shashank', 'Barik', 'shashank.shekhar.barik@suiit.ac.in', '202cb962ac59075b964b07152d234b70', '8763343657', 'male', '2020-01-02', 'Jyoti Vihar, Sambalpur University, TH-5/1, Old Post-office lane', 'Sambalpur', 768019),
(8, 'Doremon', 'Babu', 'dore@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', '8763343655', 'male', '2019-01-02', 'Jyoti Vihar, Sambalpur University, TH-5/1, Old Post-office lane', 'Sambalpur', 768019),
(9, 'SSB', 'Babu', 'ssb@suiit.ac.in', 'eb62f6b9306db575c2d596b1279627a4', '8763343657', 'male', '2019-12-31', 'Jyoti Vihar, Sambalpur University, TH-5/1, Old Post-office lane', 'Sambalpur', 768019);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
