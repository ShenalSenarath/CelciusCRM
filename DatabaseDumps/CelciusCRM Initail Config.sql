-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2014 at 02:17 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `CelciusCRM`
--

-- --------------------------------------------------------

--
-- Table structure for table `ContactsDetails`
--

CREATE TABLE IF NOT EXISTS `ContactsDetails` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `HotelID` int(11) NOT NULL,
  `ChainID` int(11) DEFAULT NULL,
  `Position` varchar(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `OfficeNumber` varchar(15) NOT NULL,
  `MobileNumber` varchar(15) NOT NULL,
  `LastEdited` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `HotelID` (`HotelID`,`ChainID`),
  KEY `ChainID` (`ChainID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `HotelChainDetails`
--

CREATE TABLE IF NOT EXISTS `HotelChainDetails` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ChainName` varchar(30) NOT NULL,
  `HeadOfficeAddress` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `HotelDetails`
--

CREATE TABLE IF NOT EXISTS `HotelDetails` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `HotelName` varchar(30) NOT NULL,
  `Address` text NOT NULL,
  `HotelChainID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `HotelChainID` (`HotelChainID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ProductDetails`
--

CREATE TABLE IF NOT EXISTS `ProductDetails` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductType` int(11) NOT NULL,
  `ProductName` varchar(30) NOT NULL,
  `Size` varchar(10) NOT NULL,
  `Material` varchar(30) NOT NULL,
  `TreadCount` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ProductType` (`ProductType`),
  KEY `ProductType_2` (`ProductType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ProductTypes`
--

CREATE TABLE IF NOT EXISTS `ProductTypes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductType` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `RoomDetails`
--

CREATE TABLE IF NOT EXISTS `RoomDetails` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `RoomType` varchar(30) NOT NULL,
  `HotelID` int(11) NOT NULL,
  `Count` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `HotelID` (`HotelID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ContactsDetails`
--
ALTER TABLE `ContactsDetails`
  ADD CONSTRAINT `ContactsDetails_ibfk_2` FOREIGN KEY (`ChainID`) REFERENCES `HotelChainDetails` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ContactsDetails_ibfk_1` FOREIGN KEY (`HotelID`) REFERENCES `HotelDetails` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `HotelDetails`
--
ALTER TABLE `HotelDetails`
  ADD CONSTRAINT `HotelDetails_ibfk_1` FOREIGN KEY (`HotelChainID`) REFERENCES `HotelChainDetails` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `ProductDetails`
--
ALTER TABLE `ProductDetails`
  ADD CONSTRAINT `ProductDetails_ibfk_1` FOREIGN KEY (`ProductType`) REFERENCES `ProductTypes` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `RoomDetails`
--
ALTER TABLE `RoomDetails`
  ADD CONSTRAINT `RoomDetails_ibfk_1` FOREIGN KEY (`HotelID`) REFERENCES `HotelDetails` (`ID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
