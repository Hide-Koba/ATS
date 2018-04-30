-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2018 at 11:49 AM
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
-- Table structure for table `Job_post`
--

CREATE TABLE `Job_post` (
  `id` int(11) NOT NULL,
  `Post_Title` varchar(50) NOT NULL,
  `Post_Description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `Job_Pos` int(11) NOT NULL,
  `wage_per_month` double(9,2) NOT NULL,
  `place_of_work` varchar(256) NOT NULL,
  `company_name` varchar(256) NOT NULL,
  `dead_line` date NOT NULL,
  `counter_person_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Job_post`
--

INSERT INTO `Job_post` (`id`, `Post_Title`, `Post_Description`, `status`, `Job_Pos`, `wage_per_month`, `place_of_work`, `company_name`, `dead_line`, `counter_person_name`, `email`, `phone`) VALUES
(1, 'Junior Programmer', 'Junior programmer\r\nWage=$4000/month', 1, 1, 0.00, '', '', '0000-00-00', '', '', ''),
(3, 'TEST JOB TITLE', 'TEST Job Descritpiion', 1, 2, 0.00, '', '', '0000-00-00', '', '', ''),
(4, 'Senior Programmer', 'Programming in PHP', 1, 2, 4000.00, 'Brisbane', 'Hi-Tech company', '2019-01-01', 'Hideaki', 'hide@feduni.com', '044000000'),
(5, 'Senior Programmer', 'Programming in PHP', 1, 2, 4000.00, 'Brisbane', 'Hi-Tech company', '2019-01-01', 'Hideaki', 'hide@feduni.com', '044000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Job_post`
--
ALTER TABLE `Job_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Job_Pos` (`Job_Pos`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Job_post`
--
ALTER TABLE `Job_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Job_post`
--
ALTER TABLE `Job_post`
  ADD CONSTRAINT `job_post_ibfk_1` FOREIGN KEY (`Job_Pos`) REFERENCES `Job_Position` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
