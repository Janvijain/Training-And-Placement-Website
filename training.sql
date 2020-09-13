-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2020 at 08:25 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`id`, `email`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `id` int(10) NOT NULL,
  `cmname` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `stipend` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`id`, `cmname`, `url`, `stipend`) VALUES
(2, 'XYZ', 'work from home', '20000-30000'),
(3, 'ABC', 'Mumbai', '30000-35000'),
(4, 'PQR', 'Pune', '20000-25000'),
(5, 'PQR', 'Pune', '20000'),
(6, 'PQR', 'Pune', '20000'),
(7, 'SPR', 'Mumbai', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) NOT NULL,
  `namee` varchar(150) NOT NULL,
  `cname` varchar(150) NOT NULL,
  `year` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `namee`, `cname`, `year`) VALUES
(1, 'pallavi', 'xyz', '2020-21'),
(2, 'janvi', 'abc', '2020-21'),
(3, 'pragati', 'pqr', '2020-21'),
(4, 'pranali', 'abc1', '2020-21'),
(5, 'sachita', 'wxy', '2020-21'),
(6, 'sarika', 'qer', '2020-21'),
(7, 'yash', 'rem', '2020-21'),
(8, 'vrushabh', 'chs', '2018-19'),
(9, 'vrushabh', 'cbu', '2018-2019'),
(10, 'Janvi', 'cscj', '2017-2018');

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE `seminar` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `url` varchar(200) NOT NULL,
  `fee` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seminar`
--

INSERT INTO `seminar` (`id`, `name`, `url`, `fee`) VALUES
(2, 'Webinar on Data Science', 'UCOE', '250'),
(3, 'NSS Orentation', 'UCOE', 'FREE'),
(4, 'Webinar on Wordpress', 'UCOE', '300'),
(5, 'Web Development Seminar', 'UCOE', 'FREE'),
(6, 'XYZ', 'UCOE', 'FREE'),
(7, 'XYZ', 'UCOE', 'FREE');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `birthday` date NOT NULL,
  `contact` bigint(10) NOT NULL,
  `stream` varchar(250) NOT NULL,
  `degree` varchar(250) NOT NULL,
  `pwd` int(250) NOT NULL,
  `pic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `email`, `birthday`, `contact`, `stream`, `degree`, `pwd`, `pic`) VALUES
(8, 'Janvi', 'Shree Shrimal', 'janvi@gmail.com', '2001-01-23', 7894561237, 'Computer', 'B.Tech', 1234, 'images/WhatsApp Image 2020-09-09 at 17.34.55.jpeg'),
(9, 'Vrushabh', 'Jain', 'vrush@gmail.com', '2002-03-14', 7894561237, 'Computer', 'B.Tech', 1234, 'images/vrushabh.jpeg'),
(10, 'Sarika', 'Jain', 'sarika@gmail.com', '2007-11-05', 7894561237, 'Computer', 'B.Tech', 1234, 'images/WhatsApp Image 2020-09-09 at 3.48.56 PM.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `seminar`
--
ALTER TABLE `seminar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
