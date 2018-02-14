-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2018 at 02:26 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `callreview`
--

-- --------------------------------------------------------

--
-- Table structure for table `calls`
--

CREATE TABLE `calls` (
  `id` int(11) NOT NULL,
  `path` varchar(500) NOT NULL,
  `duration` time NOT NULL,
  `start-time` time NOT NULL,
  `end-time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `executors`
--

CREATE TABLE `executors` (
  `id` int(11) NOT NULL,
  `first name` varchar(10) NOT NULL,
  `position` varchar(30) NOT NULL,
  `office` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `startdate` date NOT NULL,
  `salary` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `executors`
--

INSERT INTO `executors` (`id`, `first name`, `position`, `office`, `age`, `startdate`, `salary`, `email`) VALUES
(1, 'Mary Jane', 'System Architect', 'Edinburgh', 61, '2011-04-25', '$320,800', 'maryjane@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `first name` varchar(10) NOT NULL,
  `last name` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjectcalls`
--

CREATE TABLE `subjectcalls` (
  `sc_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjectwordset`
--

CREATE TABLE `subjectwordset` (
  `sws_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `wordset` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usercalls`
--

CREATE TABLE `usercalls` (
  `uc_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userwordset`
--

CREATE TABLE `userwordset` (
  `uws_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `wordset` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calls`
--
ALTER TABLE `calls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `executors`
--
ALTER TABLE `executors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectcalls`
--
ALTER TABLE `subjectcalls`
  ADD PRIMARY KEY (`sc_id`);

--
-- Indexes for table `subjectwordset`
--
ALTER TABLE `subjectwordset`
  ADD PRIMARY KEY (`sws_id`);

--
-- Indexes for table `usercalls`
--
ALTER TABLE `usercalls`
  ADD PRIMARY KEY (`uc_id`);

--
-- Indexes for table `userwordset`
--
ALTER TABLE `userwordset`
  ADD PRIMARY KEY (`uws_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `executors`
--
ALTER TABLE `executors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjectcalls`
--
ALTER TABLE `subjectcalls`
  MODIFY `sc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjectwordset`
--
ALTER TABLE `subjectwordset`
  MODIFY `sws_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usercalls`
--
ALTER TABLE `usercalls`
  MODIFY `uc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userwordset`
--
ALTER TABLE `userwordset`
  MODIFY `uws_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
