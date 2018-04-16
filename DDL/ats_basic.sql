-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2018 at 09:54 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ats`
--

-- --------------------------------------------------------

--
-- Table structure for table `Job_Position`
--

CREATE TABLE `Job_Position` (
  `id` int(10) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Job_Position`
--

INSERT INTO `Job_Position` (`id`, `job_title`, `status`) VALUES
(1, 'manager', 1),
(2, 'developer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Job_post`
--

CREATE TABLE `Job_post` (
  `id` int(11) NOT NULL,
  `Post_Title` varchar(50) NOT NULL,
  `Post_Description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `Job_Pos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mac_users`
--

CREATE TABLE `mac_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `username` varchar(155) NOT NULL,
  `password` varchar(155) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `phone_number` varchar(140) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mac_users`
--

INSERT INTO `mac_users` (`id`, `first_name`, `last_name`, `username`, `password`, `Address`, `phone_number`, `Email`, `status`) VALUES
(1, 'salil', 'koirala', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'parramatta', '', '', 1),
(2, 'gyanendra', 'poudel', '', '', 'kogarah', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Resume_Candidate`
--

CREATE TABLE `Resume_Candidate` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_Number` varchar(50) NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Job_Pos` int(11) NOT NULL,
  `cv_file_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Resume_Candidate`
--

INSERT INTO `Resume_Candidate` (`id`, `first_name`, `last_name`, `Address`, `Email`, `Phone_Number`, `Status`, `Job_Pos`, `cv_file_name`) VALUES
(4, 'c', 'ab', 'e', 'd', 'f', 1, 1, '40237cbd-394f-430c-bfcf-f1371e8b92f0'),
(5, 'a', 'test', 'c', 'b', 'de', 1, 1, '8885d9a4-23d7-45f3-950e-5f83f5c15dc6'),
(6, 'a', 'test', 'c', 'b', 'de', 1, 1, '943badb8-44b4-4cdc-b217-484815d5b706'),
(7, 'a', 'test', 'c', 'b', 'de', 1, 1, 'b85d0316-7d1d-44a7-bf3a-59a70fee5297.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Job_Position`
--
ALTER TABLE `Job_Position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Job_post`
--
ALTER TABLE `Job_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Job_Pos` (`Job_Pos`);

--
-- Indexes for table `mac_users`
--
ALTER TABLE `mac_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Resume_Candidate`
--
ALTER TABLE `Resume_Candidate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Job_Pos` (`Job_Pos`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Job_Position`
--
ALTER TABLE `Job_Position`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Job_post`
--
ALTER TABLE `Job_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mac_users`
--
ALTER TABLE `mac_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Resume_Candidate`
--
ALTER TABLE `Resume_Candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Job_post`
--
ALTER TABLE `Job_post`
  ADD CONSTRAINT `job_post_ibfk_1` FOREIGN KEY (`Job_Pos`) REFERENCES `Job_Position` (`id`);

--
-- Constraints for table `Resume_Candidate`
--
ALTER TABLE `Resume_Candidate`
  ADD CONSTRAINT `resume_candidate_ibfk_1` FOREIGN KEY (`Job_Pos`) REFERENCES `Job_Position` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
