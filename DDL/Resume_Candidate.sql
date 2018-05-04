-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2018 at 11:56 AM
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
  `cv_file_name` varchar(256) NOT NULL,
  `job_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Resume_Candidate`
--

INSERT INTO `Resume_Candidate` (`id`, `first_name`, `last_name`, `Address`, `Email`, `Phone_Number`, `Status`, `Job_Pos`, `cv_file_name`, `job_id`) VALUES
(4, 'c', 'ab', 'e', 'd', 'f', 1, 1, '40237cbd-394f-430c-bfcf-f1371e8b92f0', 0),
(5, 'a', 'test', 'c', 'b', 'de', 1, 1, '8885d9a4-23d7-45f3-950e-5f83f5c15dc6', 0),
(6, 'a', 'test', 'c', 'b', 'de', 1, 1, '943badb8-44b4-4cdc-b217-484815d5b706', 0),
(7, 'a', 'test', 'c', 'b', 'de', 1, 1, 'b85d0316-7d1d-44a7-bf3a-59a70fee5297.png', 0);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `Resume_Candidate`
--
ALTER TABLE `Resume_Candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Resume_Candidate`
--
ALTER TABLE `Resume_Candidate`
  ADD CONSTRAINT `resume_candidate_ibfk_1` FOREIGN KEY (`Job_Pos`) REFERENCES `Job_Position` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
