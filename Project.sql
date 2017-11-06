-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2017 at 10:14 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `Problems`
--

CREATE TABLE `Problems` (
  `PROB_ID` int(5) NOT NULL,
  `PROB_NAME` varchar(40) NOT NULL,
  `SETTLER` varchar(40) DEFAULT 'NULL',
  `AC` int(11) NOT NULL DEFAULT '0',
  `WA` int(11) NOT NULL DEFAULT '0',
  `TLE` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Problems`
--

INSERT INTO `Problems` (`PROB_ID`, `PROB_NAME`, `SETTLER`, `AC`, `WA`, `TLE`) VALUES
(10001, 'Watermelon', 'NULL', 0, 0, 0),
(10002, '\r\nTheatre Square', 'NULL', 0, 0, 0),
(10003, '\r\nWay Too Long Words ', 'NULL', 0, 0, 0),
(10004, '\r\nNext Round ', 'NULL', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `RegisteredUsers`
--

CREATE TABLE `RegisteredUsers` (
  `FNAME` varchar(40) NOT NULL,
  `LNAME` varchar(40) NOT NULL,
  `HANDLE` varchar(40) NOT NULL,
  `INSTITUTION` varchar(40) NOT NULL,
  `PASSWORD` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RegisteredUsers`
--

INSERT INTO `RegisteredUsers` (`FNAME`, `LNAME`, `HANDLE`, `INSTITUTION`, `PASSWORD`) VALUES
('ABC', 'DEF', 'abc', 'IIT Mandi', 'abcd'),
('Abhigyan', 'Khaund', 'abhi', 'IIT Mandi', 'abhi'),
('Mehul', 'Raj', 'mehul', 'IIT Mandi', 'mehul'),
('Vishal', 'Anand', 'vish', 'IIT Mandi', 'vish'),
('Vishal', 'Anand', 'vishal_anand', 'IIT Mandi', 'vishal');

-- --------------------------------------------------------

--
-- Table structure for table `Submissions`
--

CREATE TABLE `Submissions` (
  `PROB_ID` int(5) DEFAULT NULL,
  `HANDLE` varchar(40) DEFAULT NULL,
  `STATUS` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Problems`
--
ALTER TABLE `Problems`
  ADD PRIMARY KEY (`PROB_ID`);

--
-- Indexes for table `RegisteredUsers`
--
ALTER TABLE `RegisteredUsers`
  ADD PRIMARY KEY (`HANDLE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
