-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 14, 2016 at 11:03 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `poker`
--

-- --------------------------------------------------------

--
-- Table structure for table `dobbel_scores`
--

CREATE TABLE `dobbel_scores` (
  `PK` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Worp` char(5) NOT NULL,
  `Score` varchar(20) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dobbel_scores`
--

INSERT INTO `dobbel_scores` (`PK`, `User_ID`, `Worp`, `Score`, `Time`) VALUES
(26, 123456, '21110', 'One pair', '2016-06-14 08:51:28'),
(27, 123456, '31100', '3 of a kind', '2016-06-14 08:52:48'),
(28, 123456, '21110', 'One pair', '2016-06-14 08:52:59'),
(29, 123456, '21110', 'One pair', '2016-06-14 08:53:11'),
(30, 123456, '32000', '3 of a kind', '2016-06-14 08:54:04'),
(31, 123456, '21110', 'One pair', '2016-06-14 08:54:43'),
(32, 123456, '31100', '3 of a kind', '2016-06-14 08:55:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dobbel_scores`
--
ALTER TABLE `dobbel_scores`
  ADD PRIMARY KEY (`PK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dobbel_scores`
--
ALTER TABLE `dobbel_scores`
  MODIFY `PK` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
