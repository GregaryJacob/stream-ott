-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 04:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stream`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `acid` int(11) NOT NULL,
  `anm` text NOT NULL,
  `aurl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`acid`, `anm`, `aurl`) VALUES
(1, 'Yash', 'user.jpg'),
(2, 'Vijay', 'user.jpg'),
(3, 'Samantha', 'user.jpg'),
(4, 'Mammootty', 'user.jpg'),
(5, 'Mohanlal', 'user.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `did` int(11) NOT NULL,
  `dnm` text NOT NULL,
  `durl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`did`, `dnm`, `durl`) VALUES
(1, 'Prashanth Neel', 'user.jpg'),
(2, 'SS Rajamouli', 'user.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `gid` int(11) NOT NULL,
  `gnm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`gid`, `gnm`) VALUES
(1, 'Horror'),
(2, 'Fantacy'),
(3, 'Thriller'),
(4, 'Sci-Fi'),
(5, 'Action'),
(6, 'Drama');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `mid` int(11) NOT NULL,
  `title` text NOT NULL,
  `trailer` text NOT NULL,
  `movie` text NOT NULL,
  `duration` text NOT NULL,
  `longd` text NOT NULL,
  `shortd` text NOT NULL,
  `did` int(11) NOT NULL,
  `actor` text NOT NULL,
  `genre` text NOT NULL,
  `lang` text NOT NULL,
  `pub` text NOT NULL,
  `rate` text NOT NULL,
  `feature` text NOT NULL,
  `kids` text NOT NULL,
  `thumb` text NOT NULL,
  `banner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mid`, `title`, `trailer`, `movie`, `duration`, `longd`, `shortd`, `did`, `actor`, `genre`, `lang`, `pub`, `rate`, `feature`, `kids`, `thumb`, `banner`) VALUES
(1, 'Pirates Of Sea', 'D:/CSS/Stream/video/trailer.mp4', 'D:/CSS/Stream/video/trailer.mp4', '1 Hrs: 40 Mins', 'Piracy is an act of robbery or criminal violence by ship or boat-borne attackers upon another ship or a coastal area, typically with the goal of stealing cargo and other valuable items or properties. Piracy is an act of robbery or criminal violence by ship or boat-borne attackers upon another ship or a coastal area, typically with the goal of stealing cargo and other valuable items or properties. Piracy is an act of robbery or criminal violence by ship or boat-borne attackers upon another ship or a coastal area, typically with the goal of stealing cargo and other valuable items or properties. Piracy is an act of robbery or criminal violence by ship or boat-borne attackers upon another ship or a coastal area, typically with the goal of stealing cargo and other valuable items or properties.', 'Piracy is an act of robbery or criminal violence by ship or boat-borne attackers upon another ship or a coastal area, typically with the goal of stealing cargo and other valuable items or properties.', 1, 'Yash Samantha Yash', 'Thriller Fantacy', 'English', '2021', '4', 'On', 'On', 'pirthumb.jpg', 'pirates.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`acid`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actor`
--
ALTER TABLE `actor`
  MODIFY `acid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
