-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2018 at 05:27 AM
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
  `duration` int(11) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `execid` int(11) NOT NULL,
  `leaveflag` int(11) NOT NULL,
  `depressedflag` int(11) NOT NULL,
  `angerflag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calls`
--

INSERT INTO `calls` (`id`, `path`, `duration`, `starttime`, `endtime`, `execid`, `leaveflag`, `depressedflag`, `angerflag`) VALUES
(1, 'none', 10, '08:10:00', '08:20:00', 1, 0, 0, 0),
(2, 'none', 2, '17:55:00', '06:06:00', 2, 1, 0, 0),
(3, 'none', 20, '18:00:00', '18:20:00', 2, 0, 0, 0),
(4, 'none', 10, '10:00:00', '12:00:00', 3, 1, 0, 0),
(5, 'none', 10, '11:11:00', '11:21:00', 3, 0, 0, 0),
(6, 'none', 22, '11:11:00', '11:21:00', 2, 0, 0, 0),
(7, 'none', 25, '11:11:00', '11:21:00', 5, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `executors`
--

CREATE TABLE `executors` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `position` varchar(30) NOT NULL,
  `office` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `startdate` date NOT NULL,
  `salary` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `executors`
--

INSERT INTO `executors` (`id`, `name`, `position`, `office`, `age`, `startdate`, `salary`, `email`, `rating`) VALUES
(1, 'Mary Jane', 'Call Center Attendee', 'Edinburgh', 61, '2011-04-25', 10000, 'maryjane@gmail.com', 1),
(2, 'Airi Satou', 'Call Center Attendee', 'Tokyo\r\n', 61, '2011-04-25', 15000, 'airisatou@gmail.com', 5),
(3, 'Angel Ram', 'Call Center Attendee', 'London\r\n', 61, '2011-04-25', 20000, '\r\nangelram@gmail.com', 20),
(4, 'Ashton Cox', 'Call Center Attendee', 'San Francisco', 61, '2011-04-25', 5000, '\r\nastoncox@gmail.com', 15),
(5, 'Brad Greer', 'Call Center Attendee', 'London\r\n', 61, '2011-04-25', 15000, '\r\nbradgreer@gmail.com', 4),
(6, 'Brenden Wagner', 'Call Center Attendee', 'London\r\n', 61, '2011-04-25', 0, '\r\nbrenden wagner@gmail.com', 0),
(7, 'Bruno Nash', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nbrunonash@gmail.com', 0),
(8, 'Caesar Vance', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\ncaesarvance@gmail.com', 0),
(9, 'Cara Stevens', 'Call Center Attendee', 'London\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(10, 'Cedric Kelly', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(11, 'Spidey', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(12, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(13, 'Mary Jane', 'Call Center Attendee', 'London\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(14, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(15, 'Mary Jane', 'Call Center Attendee', 'London\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(16, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(17, 'Mary Jane', 'Call Center Attendee', 'London\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(18, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(19, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(20, 'Mary Jane', 'Call Center Attendee', 'London\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(21, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(22, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(23, 'Mary Jane', 'Call Center Attendee', 'London\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(24, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(25, 'Mary Jane', 'Call Center Attendee', 'London\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(26, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(27, 'Mary Jane', 'Call Center Attendee', 'London\r\n', 0, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(28, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(29, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(30, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(31, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(32, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(33, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(34, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(35, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(36, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(37, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(38, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0),
(39, 'Mary Jane', 'Call Center Attendee', 'Edinburgh\r\n', 61, '2011-04-25', 0, '\r\nmaryjane@gmail.com', 0);

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
-- Table structure for table `reviewcalls`
--

CREATE TABLE `reviewcalls` (
  `rc_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewcalls`
--

INSERT INTO `reviewcalls` (`rc_id`, `id`, `path`) VALUES
(30, 1, 'uploads/review/1review.flac'),
(31, 2, 'uploads/review/2review.flac'),
(32, 3, 'uploads/review/3review.flac'),
(33, 4, 'uploads/review/4review.flac'),
(34, 5, 'uploads/review/5review.flac'),
(35, 6, 'uploads/review/6review.flac'),
(36, 7, 'uploads/review/7review.flac');

-- --------------------------------------------------------

--
-- Table structure for table `reviewwordset`
--

CREATE TABLE `reviewwordset` (
  `rws_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `wordset` text NOT NULL,
  `sentiment` text NOT NULL,
  `stars` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewwordset`
--

INSERT INTO `reviewwordset` (`rws_id`, `id`, `wordset`, `sentiment`, `stars`) VALUES
(1, 1, '[{\"score\":0,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.880435,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"neutral\",\"subjectivity\":\"subjective\",\"text\":\"3 stars\",\"polarity_confidence\":0.4973515570163727,\"subjectivity_confidence\":0.9972097171122319}', 4),
(2, 2, '[{\"score\":0,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"neutral\",\"subjectivity\":\"subjective\",\"text\":\"1 *\",\"polarity_confidence\":0.4337550401687622,\"subjectivity_confidence\":0.6334286450495379}', 0),
(3, 3, '[{\"score\":0.094554,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0.01258,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0.043064,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.389457,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0.097011,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"neutral\",\"subjectivity\":\"subjective\",\"text\":\"five stars\",\"polarity_confidence\":0.5201404094696045,\"subjectivity_confidence\":0.9989296183236084}', 5),
(4, 4, '[{\"score\":0.094554,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0.01258,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0.043064,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.389457,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0.097011,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"neutral\",\"subjectivity\":\"subjective\",\"text\":\"five stars\",\"polarity_confidence\":0.5201404094696045,\"subjectivity_confidence\":0.9989296183236084}', 5),
(5, 5, '[{\"score\":0.019276,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0.017723,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0.03385,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.627808,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0.117487,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"neutral\",\"subjectivity\":\"subjective\",\"text\":\"four stars\",\"polarity_confidence\":0.48975899815559387,\"subjectivity_confidence\":0.995041392943055}', 4),
(6, 6, '[{\"score\":0.022831,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0.041569,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0.042517,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.603199,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0.216037,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"neutral\",\"subjectivity\":\"subjective\",\"text\":\"two stars\",\"polarity_confidence\":0.4868916869163513,\"subjectivity_confidence\":0.9872726443366234}', 2),
(7, 7, '[{\"score\":0,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.880435,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"neutral\",\"subjectivity\":\"subjective\",\"text\":\"3 stars\",\"polarity_confidence\":0.4973515570163727,\"subjectivity_confidence\":0.9972097171122319}', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subjectcalls`
--

CREATE TABLE `subjectcalls` (
  `sc_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectcalls`
--

INSERT INTO `subjectcalls` (`sc_id`, `id`, `path`) VALUES
(30, 1, 'uploads/executive/1executive.flac'),
(31, 2, 'uploads/executive/2executive.flac'),
(32, 3, 'uploads/executive/3executive.flac'),
(33, 4, 'uploads/executive/4executive.flac'),
(34, 5, 'uploads/executive/5executive.flac'),
(35, 6, 'uploads/executive/6executive.flac'),
(36, 7, 'uploads/executive/7executive.flac');

-- --------------------------------------------------------

--
-- Table structure for table `subjectwordset`
--

CREATE TABLE `subjectwordset` (
  `sws_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `wordset` text NOT NULL,
  `sentiment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectwordset`
--

INSERT INTO `subjectwordset` (`sws_id`, `id`, `wordset`, `sentiment`) VALUES
(1, 1, '[{\"score\":0.095447,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0.059294,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0.083377,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.236596,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0.072556,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"negative\",\"subjectivity\":\"subjective\",\"text\":\"hello Im calling regarding a toaster that I have purchased from your company I just wanted to know whether this toaster is able to toast the bread on both sides at the same time\",\"polarity_confidence\":0.7042074203491211,\"subjectivity_confidence\":1}'),
(2, 2, '[{\"score\":0.153387,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0.059136,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0.048066,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.0305,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0.359646,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"negative\",\"subjectivity\":\"subjective\",\"text\":\"hello Im calling regarding a toaster that I have purchased from your company it has been giving me loads of trouble their bread doesnt toast even the ad Im extremely unhappy please provide me with a refund I will never buy from you again\",\"polarity_confidence\":0.7879583835601807,\"subjectivity_confidence\":1}'),
(3, 3, '[{\"score\":0.153387,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0.059136,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0.048066,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.0305,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0.359646,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"negative\",\"subjectivity\":\"subjective\",\"text\":\"hello Im calling regarding a toaster that I have purchased from your company it has been giving me loads of trouble their bread doesnt toast even the ad Im extremely unhappy please provide me with a refund I will never buy from you again\",\"polarity_confidence\":0.7879583835601807,\"subjectivity_confidence\":1}'),
(4, 4, '[{\"score\":0.153387,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0.059136,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0.048066,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.0305,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0.359646,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"negative\",\"subjectivity\":\"subjective\",\"text\":\"hello Im calling regarding a toaster that I have purchased from your company it has been giving me loads of trouble their bread doesnt toast even the ad Im extremely unhappy please provide me with a refund I will never buy from you again\",\"polarity_confidence\":0.7879583835601807,\"subjectivity_confidence\":1}'),
(5, 5, '[{\"score\":0.015151,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0.01142,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0.004726,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.623918,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0.008486,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"negative\",\"subjectivity\":\"subjective\",\"text\":\"hello Im calling regarding a toaster that I had purchased from your company I have called to provide feedback regarding it using the toaster has been a pleasure it toasted bread evenly and has made my life easier thank you for making such great products\",\"polarity_confidence\":0.6982749700546265,\"subjectivity_confidence\":1}'),
(6, 6, '[{\"score\":0.015151,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0.01142,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0.004726,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.623918,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0.008486,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"negative\",\"subjectivity\":\"subjective\",\"text\":\"hello Im calling regarding a toaster that I had purchased from your company I have called to provide feedback regarding it using the toaster has been a pleasure it toasted bread evenly and has made my life easier thank you for making such great products\",\"polarity_confidence\":0.6982749700546265,\"subjectivity_confidence\":1}'),
(7, 7, '[{\"score\":0.015151,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0.01142,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0.004726,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.623918,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0.008486,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"negative\",\"subjectivity\":\"subjective\",\"text\":\"hello Im calling regarding a toaster that I had purchased from your company I have called to provide feedback regarding it using the toaster has been a pleasure it toasted bread evenly and has made my life easier thank you for making such great products\",\"polarity_confidence\":0.6982749700546265,\"subjectivity_confidence\":1}');

-- --------------------------------------------------------

--
-- Table structure for table `usercalls`
--

CREATE TABLE `usercalls` (
  `uc_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercalls`
--

INSERT INTO `usercalls` (`uc_id`, `id`, `path`) VALUES
(30, 1, 'uploads/customer/1customer.flac'),
(31, 2, 'uploads/customer/2customer.flac'),
(32, 3, 'uploads/customer/3customer.flac'),
(33, 4, 'uploads/customer/4customer.flac'),
(34, 5, 'uploads/customer/5customer.flac'),
(35, 6, 'uploads/customer/6customer.flac'),
(36, 7, 'uploads/customer/7customer.flac');

-- --------------------------------------------------------

--
-- Table structure for table `userwordset`
--

CREATE TABLE `userwordset` (
  `uws_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `execid` int(11) NOT NULL DEFAULT '1',
  `wordset` text NOT NULL,
  `sentiment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userwordset`
--

INSERT INTO `userwordset` (`uws_id`, `id`, `execid`, `wordset`, `sentiment`) VALUES
(1, 1, 1, '[{\"score\":0.095447,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0.059294,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0.083377,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.236596,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0.072556,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"negative\",\"subjectivity\":\"subjective\",\"text\":\"hello Im calling regarding a toaster that I have purchased from your company I just wanted to know whether this toaster is able to toast the bread on both sides at the same time\",\"polarity_confidence\":0.7042074203491211,\"subjectivity_confidence\":1}'),
(2, 2, 2, '[{\"score\":0.153387,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0.059136,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0.048066,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.0305,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0.359646,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"negative\",\"subjectivity\":\"subjective\",\"text\":\"hello Im calling regarding a toaster that I have purchased from your company it has been giving me loads of trouble their bread doesnt toast even the ad Im extremely unhappy please provide me with a refund I will never buy from you again\",\"polarity_confidence\":0.7879583835601807,\"subjectivity_confidence\":1}'),
(3, 3, 3, '[{\"score\":0.015151,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0.01142,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0.004726,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.623918,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0.008486,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"negative\",\"subjectivity\":\"subjective\",\"text\":\"hello Im calling regarding a toaster that I had purchased from your company I have called to provide feedback regarding it using the toaster has been a pleasure it toasted bread evenly and has made my life easier thank you for making such great products\",\"polarity_confidence\":0.6982749700546265,\"subjectivity_confidence\":1}'),
(4, 4, 3, '[{\"score\":0.153387,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0.059136,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0.048066,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.0305,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0.359646,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"negative\",\"subjectivity\":\"subjective\",\"text\":\"hello Im calling regarding a toaster that I have purchased from your company it has been giving me loads of trouble their bread doesnt toast even the ad Im extremely unhappy please provide me with a refund I will never buy from you again\",\"polarity_confidence\":0.7879583835601807,\"subjectivity_confidence\":1}'),
(5, 5, 1, '[{\"score\":0.015151,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0.01142,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0.004726,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.623918,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0.008486,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"negative\",\"subjectivity\":\"subjective\",\"text\":\"hello Im calling regarding a toaster that I had purchased from your company I have called to provide feedback regarding it using the toaster has been a pleasure it toasted bread evenly and has made my life easier thank you for making such great products\",\"polarity_confidence\":0.6982749700546265,\"subjectivity_confidence\":1}'),
(6, 6, 1, '[{\"score\":0.153387,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0.059136,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0.048066,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.0305,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0.359646,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"negative\",\"subjectivity\":\"subjective\",\"text\":\"hello Im calling regarding a toaster that I have purchased from your company it has been giving me loads of trouble their bread doesnt toast even the ad Im extremely unhappy please provide me with a refund I will never buy from you again\",\"polarity_confidence\":0.7879583835601807,\"subjectivity_confidence\":1}'),
(7, 7, 1, '[{\"score\":0.095447,\"tone_id\":\"anger\",\"tone_name\":\"Anger\"},{\"score\":0.059294,\"tone_id\":\"disgust\",\"tone_name\":\"Disgust\"},{\"score\":0.083377,\"tone_id\":\"fear\",\"tone_name\":\"Fear\"},{\"score\":0.236596,\"tone_id\":\"joy\",\"tone_name\":\"Joy\"},{\"score\":0.072556,\"tone_id\":\"sadness\",\"tone_name\":\"Sadness\"}]', '{\"polarity\":\"negative\",\"subjectivity\":\"subjective\",\"text\":\"hello Im calling regarding a toaster that I have purchased from your company I just wanted to know whether this toaster is able to toast the bread on both sides at the same time\",\"polarity_confidence\":0.7042074203491211,\"subjectivity_confidence\":1}');

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
-- Indexes for table `reviewcalls`
--
ALTER TABLE `reviewcalls`
  ADD PRIMARY KEY (`rc_id`);

--
-- Indexes for table `reviewwordset`
--
ALTER TABLE `reviewwordset`
  ADD PRIMARY KEY (`rws_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviewcalls`
--
ALTER TABLE `reviewcalls`
  MODIFY `rc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `subjectcalls`
--
ALTER TABLE `subjectcalls`
  MODIFY `sc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `usercalls`
--
ALTER TABLE `usercalls`
  MODIFY `uc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
