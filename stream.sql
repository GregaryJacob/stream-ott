-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 09:43 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
(6, 'Allu Arjun', 'Allu Arjun.jpg'),
(7, 'Dwayne Johnson', 'Dwayne Johnson.jpg'),
(8, 'Gal Gadot', 'gal gadot.jpg'),
(9, 'Alexandra Daddario', 'alexandra daddario1.jpg'),
(10, 'Thammana Bhatia', 'Tamanna Bhatia.jpg'),
(11, 'Srinidhi Shetty', 'Srinidhi Shetty.jpg'),
(12, 'Ramachandra Raju', 'Ramachandra Raju.jpg'),
(13, 'Yash', 'Yash.jpg'),
(14, 'Sivakarthikayan', 'Sivakarthikeyan.jpg'),
(15, 'Priyanka Arul Mohan', 'Priyanka Arul Mohan.jpg'),
(16, 'S J Surya', 'SJ Surya.jpg'),
(17, 'Shruti Ramachandran', 'Shruti Ramachandran.png'),
(18, 'VIJAY DEVERAKONDA', 'VIJAY DEVERAKONDA.jpg'),
(19, 'Rashmika Mandanna', 'Rashmika Mandanna.jpg'),
(20, 'Prakash Raj', 'Prakash Raj.jpg'),
(21, 'Shaam', 'Shaam.jpg'),
(22, 'Nora Fatehi', 'Nora Fatehi.jpg'),
(23, 'Prabhas', 'Prabhas.jpg'),
(24, 'Rana Daggubati', 'Rana Daggubati.jpg'),
(25, 'Anushka Shetty', 'Anushka Shetty.jpg'),
(26, 'Sathyaraj', 'Sathyaraj.jpg'),
(27, 'Shruti Haasan', 'Shruti Haasan.jpg'),
(28, 'Karthi Shiva', 'Karthi Shiva.jpg'),
(29, 'Yogi Babu', 'Yogi Babu.jpg'),
(30, 'Sam Hargrave', 'Sam Hargrave.jpg'),
(31, 'Ranbir Kapoor', 'Ranbir Kapoor.png'),
(32, 'Deepika Padukone', 'Deepika Padukone.jpg'),
(33, '	Shah Rukh Khan', 'Shah Rukh Khan.jpg'),
(34, 'Mouni Roy', 'Mouni Roy.jpg'),
(35, 'Amitabh Bachchan', 'Amitabh Bachchan.jpg'),
(36, 'Aliya Bhatt', 'Aliya Bhatt.png'),
(37, 'Akkineni Nagarjuna', 'Akkineni Nagarjuna.jpg'),
(38, 'Golshifteh Farahani', 'Golshifteh Farahani.jpg'),
(39, 'Chris Hemsworth', 'Chris Hemsworth.jpg'),
(40, 'Pradeep Ranganathan', 'Pradeep Ranganathan.jpg'),
(41, 'Ivana', 'Ivana.jpg'),
(42, 'Megan Fox', 'Megan Fox.jpg.crdownload'),
(43, 'Shia Saide LaBeouf', 'Shia Saide LaBeouf.jpg'),
(44, 'Rachael Taylor', 'Rachael Taylor.jpg'),
(45, 'Rosie Huntington-Whiteley', 'Rosie Huntington-Whiteley.jpg');

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
(1, 'Prashanth Neel', 'Prashanth Neel.jpg'),
(2, 'SS Rajamouli', 'S.S Rajamouli.jpg'),
(3, 'Rawson Marshall Thurber', 'Rawson Marshall Thurber.jpg'),
(4, 'Sam Hargrave', 'Sam Hargrave.jpg'),
(5, 'Cibi Chakaravarthi', 'Cibi Chakaravarthi.jpg'),
(6, 'Bharat Kamma', 'Bharat Kamma.jpg'),
(7, 'Surender Reddy', 'Surender Reddy.jpeg'),
(8, 'N.lingusamy', 'N.lingusamy.jpg'),
(9, 'Ayan Mukerji', 'Ayan Mukerji.jpg'),
(10, 'Pradeep Ranganathan', 'Pradeep Ranganathan.jpg'),
(11, 'Robert McGee', 'Robert McGee.jpg'),
(12, 'Michelle Lewitt', 'Michelle Lewitt.jpg');

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
(2, 'Fantacy'),
(3, 'Thriller'),
(4, 'Sci-Fi'),
(5, 'Action'),
(6, 'Drama'),
(9, 'Romance'),
(10, 'WAR'),
(11, 'Comedy'),
(12, 'Adventure');

-- --------------------------------------------------------

--
-- Table structure for table `latest`
--

CREATE TABLE `latest` (
  `lid` int(11) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latest`
--

INSERT INTO `latest` (`lid`, `mid`) VALUES
(2, 1),
(3, 3),
(4, 6);

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
  `genret` varchar(500) NOT NULL,
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

INSERT INTO `movies` (`mid`, `title`, `trailer`, `movie`, `duration`, `longd`, `shortd`, `did`, `actor`, `genre`, `genret`, `lang`, `pub`, `rate`, `feature`, `kids`, `thumb`, `banner`) VALUES
(6, 'Love Today', 'https://www.youtube.com/watch?v=FaQe8JFGdaM', 'https://drive.google.com/file/d/1-EJn00ocpIRhP8jvWx6zezxtpCXwl_4Z/view?usp=share_link', '2Hrs:32Mins', 'While a couple is deeply in love, her father challenges the two to switch their phones with each other to test their relationship. Chaos ensues as the lovers secrets are unearthed.', 'While a couple is deeply in love, her father challenges the two to switch their phones with each other to test their relationship. Chaos ensues as the lovers secrets are unearthed.', 10, 'Pradeep Ranganathan,Ivana,Sathyaraj', 'Comedy', 'Romance', 'Tamil', '2022', '5', 'On', 'On', 'Love Today.jpg', 'Lovetoday.jpg'),
(7, 'Bhramasthra', 'https://www.youtube.com/watch?v=V5jVntRVl-0', 'https://www.youtube.com/watch?v=EUT-IAVpNNk', '2Hrs:48Mins', 'A young man on the brink of falling in love gets his world turned upside down when he discovers he has the power to control fire and a connection to a secret society of guardians.', 'A young man on the brink of falling in love gets his world turned upside down when he discovers he has the power to control fire and a connection to a secret society of guardians.', 9, 'Ranbir Kapoor,Amitabh Bachchan,Aliya Bhatt', 'Action,Romance', 'Romance', 'Telugu', '2022', '4', 'On', 'On', 'Bhramasthra.png', 'Bhramasthra.jpg'),
(8, 'Paiyaa', 'https://www.youtube.com/watch?v=GSKeirZ6_Cg', 'https://www.youtube.com/watch?v=0QkDdt1xjl4&list=WL&index=5&t=1170s', '2Hrs31Mins', 'Shiva, an unemployed graduate, falls in love with Charulatha. However, when on Charulathas request, he drives her to Mumbai, the two are chased down by two different gangs for different reasons.', 'Shiva, an unemployed graduate, falls in love with Charulatha. However, when on Charulathas request, he drives her to Mumbai, the two are chased down by two different gangs for different reasons.', 8, 'Karthi Shiva,Yogi Babu,Thammana Bhatia', 'Action', 'Thriller', 'English', '2010', '5', 'On', 'On', 'Paiya.jpg', 'Paiya.jpg'),
(9, 'Transformers', 'https://www.youtube.com/watch?v=AntcyqJ6brc', 'https://www.youtube.com/watch?v=rdyErxqsCao&list=PLyKz3q8Mt9mCuhJ5tynY5HyrosbKXxzOX&index=2&t=5782s', '2Hrs:11Min', 'Transformers is a series of science fiction action films based on the Transformers franchise of the 1980s. Michael Bay directed the first five films: Transformers, Revenge of the Fallen, Dark of the Moon, Age of Extinction, and The Last Knight, and has served as a producer for subsequent films.', 'The noble Autobots and Decepticons, two intergalactic races of robots, crash land on Earth. They battle for Allspark, the ultimate power source, whose location is held by Sam.', 12, 'Megan Fox,Shia Saide LaBeouf,Rosie Huntington-Whiteley', 'Action,Sci-Fi', 'Fantacy', 'English', '2007', '5', 'On', 'On', 'Transformers.jpg', 'Transformers.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `sid` int(11) NOT NULL,
  `title` text NOT NULL,
  `trailer` text NOT NULL,
  `showd` text NOT NULL,
  `thumb` text NOT NULL,
  `banner` text NOT NULL,
  `duration` text NOT NULL,
  `longd` text NOT NULL,
  `shortd` text NOT NULL,
  `did` int(11) NOT NULL,
  `actors` text NOT NULL,
  `lang` text NOT NULL,
  `genre` text NOT NULL,
  `genret` varchar(500) NOT NULL,
  `pub` text NOT NULL,
  `rating` text NOT NULL,
  `kids` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`sid`, `title`, `trailer`, `showd`, `thumb`, `banner`, `duration`, `longd`, `shortd`, `did`, `actors`, `lang`, `genre`, `genret`, `pub`, `rating`, `kids`) VALUES
(2, 'Chakkapazham', 'https://www.youtube.com/watch?v=VwKHPwvPHn0', 'https://www.youtube.com/watch?v=N2iHAYSkQGY&t=86s', 'chakkapazham.jpg', 'chakkapazham.jpg', '32min', 'The familial life of a compounder working at a veterinary hospital is confronted with a series of misunderstandings and chaos.', 'The familial life of a compounder working at a veterinary hospital is confronted with a series of misunderstandings and chaos.', 4, 'Dwayne Johnson,Nora Fatehi,Sathyaraj', 'Malayalam', 'Comedy', 'Drama', '2022', '4', 'Off');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `user` varchar(500) NOT NULL,
  `pass` varchar(500) NOT NULL,
  `sts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `user`, `pass`, `sts`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fev`
--

CREATE TABLE `tbl_fev` (
  `fid` int(11) NOT NULL,
  `shid` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `types` int(11) NOT NULL,
  `sts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fev`
--

INSERT INTO `tbl_fev` (`fid`, `shid`, `user`, `types`, `sts`) VALUES
(1, 9, 6, 1, 1),
(2, 9, 6, 1, 1),
(3, 7, 5, 1, 1),
(4, 7, 5, 1, 0),
(5, 6, 5, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plans`
--

CREATE TABLE `tbl_plans` (
  `id` int(11) NOT NULL,
  `type` varchar(500) NOT NULL,
  `amount` varchar(500) NOT NULL,
  `val` varchar(500) NOT NULL,
  `isdel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_plans`
--

INSERT INTO `tbl_plans` (`id`, `type`, `amount`, `val`, `isdel`) VALUES
(1, 'Free', '0', 'Month', 0),
(2, 'Premium', '199', '3 Months', 1),
(3, 'Basic', '99', '1 Month', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub`
--

CREATE TABLE `tbl_sub` (
  `sid` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `plan` int(11) NOT NULL,
  `dates` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `isdel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sub`
--

INSERT INTO `tbl_sub` (`sid`, `user`, `plan`, `dates`, `status`, `isdel`) VALUES
(3, 3, 2, '11-01-2023', 1, 1),
(4, 5, 3, '13-01-2023', 1, 1),
(6, 5, 3, '24-01-2023', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `uid` int(11) NOT NULL,
  `usrname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `pass` varchar(500) NOT NULL,
  `types` int(11) NOT NULL,
  `isdel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`uid`, `usrname`, `email`, `fname`, `lname`, `pass`, `types`, `isdel`) VALUES
(3, 'niddheesh', 'nidheesh366@gmail.com', 'NIdheesh ', ' Baby', '12332', 1, 1),
(4, 'user1', 'user1@gmail.com', 'user', ' 1', 'user', 0, 1),
(5, 'user2', 'user2@gmail.com', 'user', ' 2', '123456789', 1, 1),
(6, 'user5', 'user5@gmail.com', 'user', ' 5', '123', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `top`
--

CREATE TABLE `top` (
  `tpid` int(11) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top`
--

INSERT INTO `top` (`tpid`, `mid`) VALUES
(1, 2),
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `trend`
--

CREATE TABLE `trend` (
  `tid` int(11) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trend`
--

INSERT INTO `trend` (`tid`, `mid`) VALUES
(1, 3);

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
-- Indexes for table `latest`
--
ALTER TABLE `latest`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fev`
--
ALTER TABLE `tbl_fev`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `tbl_plans`
--
ALTER TABLE `tbl_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sub`
--
ALTER TABLE `tbl_sub`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `top`
--
ALTER TABLE `top`
  ADD PRIMARY KEY (`tpid`);

--
-- Indexes for table `trend`
--
ALTER TABLE `trend`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actor`
--
ALTER TABLE `actor`
  MODIFY `acid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `latest`
--
ALTER TABLE `latest`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_fev`
--
ALTER TABLE `tbl_fev`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_plans`
--
ALTER TABLE `tbl_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_sub`
--
ALTER TABLE `tbl_sub`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `top`
--
ALTER TABLE `top`
  MODIFY `tpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trend`
--
ALTER TABLE `trend`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
