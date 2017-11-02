-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2017 at 03:21 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'User', 'Admin', 'Password'),
(2, 'mikeman', 'emmalead', 'mike');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `UserID` int(11) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userStatus` enum('Y','N') NOT NULL DEFAULT 'N',
  `contactPerson` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `confirmationCode` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`UserID`, `companyName`, `address`, `userName`, `password`, `userEmail`, `userStatus`, `contactPerson`, `Phone`, `confirmationCode`) VALUES
(17, 'Vanguard Pharmacy', 'Ikeja', 'Highbee', 'Password', 'Ogagun@gmail.com', 'N', 'Johnson', '08066516088', 'f78d578804'),
(18, 'NIIT', 'Ikeja', 'User', 'Password', 'User@gmail.com', 'N', 'Mr. Jimoh', '090332315', '2697249fb4'),
(20, 'HIIT', 'Ikeja', 'Highbee`', 'PAssword', 'Highbee@gmail.com', 'Y', 'Judit', '09088773322', '1a48ad9338'),
(22, 'Khalid Estate Manager And Co.', 'Iyana Ipaja', 'Khalid', 'Khalid', 'Khalid@gmail.com', 'Y', 'Khalid', '09044332266', '1513881940'),
(23, 'Lofty', '13, sango Ota', 'Ajibola', 'Pass', 'Ajibola@gmail.com', 'Y', 'Ajibola', '09088776655', '9916'),
(24, 'K Akolade', '12, Ijoko', 'Ajileke', 'Pass', 'Ajileke@gmail.com', 'N', 'Ajileke', '090776655', '25780'),
(25, 'Abigeal@gmail.com', 'Isoko', 'Abigeal', 'Pass', 'Abigeal@gmail.com', 'N', 'Abigeal', '09088776655', '10ad46ad28');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contactID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='this table stores contact details from the web page';

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactID`, `name`, `Email`, `Subject`, `message`) VALUES
(4, 'hihi', 'hihih@gmail.com', 'iohiohi', 'hiohio'),
(5, 'ioji', 'jiijio@jij.com', 'jioj', 'ijijiojiojio'),
(6, 'John', 'John@gmail.com', 'Enquiry', 'Netwoki');

-- --------------------------------------------------------

--
-- Table structure for table `projectprogress`
--

CREATE TABLE IF NOT EXISTS `projectprogress` (
  `projectID` int(11) NOT NULL,
  `projectRegNo` varchar(20) NOT NULL,
  `companyEmail` varchar(50) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `companyAddress` varchar(150) NOT NULL,
  `startDate` varchar(10) NOT NULL,
  `endDate` varchar(10) NOT NULL,
  `contactPerson` varchar(50) NOT NULL,
  `percentageDone` varchar(10) NOT NULL,
  `officerInCHarge` varchar(50) NOT NULL,
  `platformInUse` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='Stores details of the project';

--
-- Dumping data for table `projectprogress`
--

INSERT INTO `projectprogress` (`projectID`, `projectRegNo`, `companyEmail`, `Title`, `companyName`, `companyAddress`, `startDate`, `endDate`, `contactPerson`, `percentageDone`, `officerInCHarge`, `platformInUse`) VALUES
(6, 'Prj10/07/0', 'ogagun@gmail.com', 'Stock Control', 'Vanguard Pharmacy', 'Ikeja', '12/02/2017', '24/06/2017', 'John', '50', 'Kenny', 'Visual Studio.Net');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `projectprogress`
--
ALTER TABLE `projectprogress`
  ADD PRIMARY KEY (`projectID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `projectprogress`
--
ALTER TABLE `projectprogress`
  MODIFY `projectID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
