-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2018 at 07:46 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btwofficial`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `UID` int(11) NOT NULL,
  `PID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`UID`, `PID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `my`
--

CREATE TABLE `my` (
  `UID` int(11) NOT NULL,
  `PID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my`
--

INSERT INTO `my` (`UID`, `PID`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `Text` longtext NOT NULL,
  `Title` text NOT NULL,
  `Pic` longblob,
  `Genre` text NOT NULL,
  `Location` text NOT NULL,
  `FavCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`ID`, `UID`, `Text`, `Title`, `Pic`, `Genre`, `Location`, `FavCount`) VALUES
(1, 1, 'this is the text of the post', 'title of the post', NULL, 'comedy', 'islamabad,Pakistan', 23),
(2, 1, 'this is the text for the post 2 and blah blah blah', 'this is the title for post 2', NULL, 'action', 'islamabad, Pakistan.', 34);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Pass` text NOT NULL,
  `DOB` date NOT NULL,
  `Gender` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='an entry is built in this table upon sign up';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Email`, `Pass`, `DOB`, `Gender`) VALUES
(1, 'umaryousafzai9@gmail.com', 'wellnewpassset', '2018-01-03', 1),
(46, 'khan@yahoo.com', 'newpass', '2017-11-19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `Fname` varchar(30) NOT NULL,
  `Sname` varchar(30) NOT NULL,
  `PID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `Location` text NOT NULL,
  `About` text NOT NULL,
  `Ppic` blob,
  `Cpic` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`Fname`, `Sname`, `PID`, `ID`, `Location`, `About`, `Ppic`, `Cpic`) VALUES
('umar', 'khan', 1, 1, 'islamabad, Pakistan', 'this is about the student', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`UID`,`PID`),
  ADD KEY `UID` (`UID`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `my`
--
ALTER TABLE `my`
  ADD PRIMARY KEY (`UID`,`PID`),
  ADD KEY `UID` (`UID`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UID` (`UID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`PID`),
  ADD UNIQUE KEY `IDU` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `user` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`PID`) REFERENCES `posts` (`ID`);

--
-- Constraints for table `my`
--
ALTER TABLE `my`
  ADD CONSTRAINT `my_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `user` (`ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `my_ibfk_2` FOREIGN KEY (`PID`) REFERENCES `posts` (`ID`) ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD CONSTRAINT `FK` FOREIGN KEY (`ID`) REFERENCES `user` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
