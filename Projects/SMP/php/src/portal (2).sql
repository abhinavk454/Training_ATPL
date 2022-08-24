-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 23, 2022 at 06:32 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact_Number` varchar(100) NOT NULL,
  `ID` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Email`, `Contact_Number`, `ID`, `Password`) VALUES
('Abhinav Kumar', 'abhinav.kumar@atpl.live', '7980738779', 'AD101', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `Student_ID` varchar(100) NOT NULL,
  `Course_ID` varchar(100) NOT NULL,
  `Assigned_Faculty_ID` varchar(100) NOT NULL,
  `Start_Date` date NOT NULL,
  `Schedule` varchar(100) NOT NULL,
  KEY `Course_ID` (`Course_ID`),
  KEY `Student_ID` (`Student_ID`),
  KEY `Assigned_Faculty_ID` (`Assigned_Faculty_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--


-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `Course_ID` varchar(100) NOT NULL,
  `Course_Name` varchar(100) NOT NULL,
  `Course_Duration` varchar(100) NOT NULL,
  `Course_Structure` varchar(1000) NOT NULL,
  `Course_Fees` float NOT NULL,
  PRIMARY KEY (`Course_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--


-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Qualifications` varchar(100) NOT NULL,
  `Appointment_Date` date NOT NULL,
  `Salary` float NOT NULL,
  `ID` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Name`, `Email`, `Contact`, `Qualifications`, `Appointment_Date`, `Salary`, `ID`, `Password`) VALUES
('Anurag Sahu', 'anuragsahu1999.as@gmail.com', '9830534563', 'B.Tech', '2022-06-06', 35000, 'FL101', '753951'),
('Shivam Aggarwal', 'shivam.gmail@agarwal.com', '9876541231', '2022-08-15', '0000-00-00', 10000, 'FT7034', '*epBHPmV'),
('Shuvam', 'why@example.com', '7777777777', 'M.Tech', '2022-08-09', 210000, 'FT9536', '_gBUthCZ');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE IF NOT EXISTS `management` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact_Number` varchar(100) NOT NULL,
  `Access_Rights` varchar(100) NOT NULL,
  `ID` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`Name`, `Email`, `Contact_Number`, `Access_Rights`, `ID`, `Password`) VALUES
('Riya Jana', 'riyajana19@gmail.com', '8100815677', 'Manager Rights', 'MN101', '987654'),
('Paromita', 'paromita@iiht.live', '1234567890', '1', 'MT4156', 'P.N5kKMO');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact_Number` varchar(100) NOT NULL,
  `Date_of_Joining` date NOT NULL,
  `Course` varchar(100) NOT NULL,
  `ID` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Name`, `Email`, `Contact_Number`, `Date_of_Joining`, `Course`, `ID`) VALUES
('Raju Debnath', 'raju.debnath@atpl.live', '9870706969', '2022-08-02', 'ATPL', 'ST4650'),
('Gaurav Barman', 'gaurav@atpl.live', '0000108785', '2022-08-09', 'C++', 'ST9305'),
('abc', 'anurag@asd.vm', 'asdasdasdas', '2022-08-24', 'JAVA', 'ST5413'),
('ftujhj', 'a@g.c', '854165316', '2022-08-10', 'excel', 'ST6920');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `SL.NO` int(11) NOT NULL AUTO_INCREMENT,
  `ID` varchar(100) NOT NULL,
  `Father_Name` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Alternate_Contact_Number` varchar(100) NOT NULL,
  PRIMARY KEY (`SL.NO`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `student_details`
--

