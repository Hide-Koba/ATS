-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2018 at 10:23 AM
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
  `position` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Job_Position`
--

INSERT INTO `Job_Position` (`id`, `position`, `status`) VALUES
(1, 'manager', 1),
(2, 'developer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Job_post`
--

CREATE TABLE `Job_post` (
  `id` int(11) NOT NULL,
  `Post_Title` varchar(50) NOT NULL,
  `short_description` text NOT NULL,
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

INSERT INTO `Job_post` (`id`, `Post_Title`, `short_description`, `Post_Description`, `status`, `Job_Pos`, `wage_per_month`, `place_of_work`, `company_name`, `dead_line`, `counter_person_name`, `email`, `phone`) VALUES
(1, 'Junior Programmer123456', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 1, 0.00, 'Paramatta', '', '2018-05-24', '', 'salil.prasad46@gmail.com', ''),
(3, 'TEST JOB TITLE', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'TEST Job Descritpiion', 1, 2, 0.00, 'melbourne', '', '0000-00-00', '', 'salil.prasad46@gmail.com', ''),
(4, 'Senior Programmer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Programming in PHP', 1, 2, 4000.00, 'Brisbane', 'Hi-Tech company', '2019-01-01', 'Hideaki', 'hide@feduni.com', '044000000'),
(5, 'Senior Programmer', 'Programming in PHP', 'Lorem Ipsum is simply dummy text of the printing and typesetting ', 1, 2, 4000.00, 'Brisbane', 'Hi-Tech company', '2019-01-01', 'Hideaki', 'hide@feduni.com', '044000000');

-- --------------------------------------------------------

--
-- Table structure for table `mac_users`
--

CREATE TABLE `mac_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(150) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `phone_number` varchar(140) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mac_users`
--

INSERT INTO `mac_users` (`id`, `first_name`, `last_name`, `username`, `password`, `Address`, `phone_number`, `Email`, `status`) VALUES
(1, 'salil', 'koirala', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'parramatta', '', 'koirala.salu@gmail.com', 1),
(2, 'salil', 'koirala', 'salil', '9057b37cd5a0fab4a477300bbe56babe', 'girraween', '12345', 'koirala.salu@gmail.com', 1);

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
  `Job_Pos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Resume_Candidate`
--

INSERT INTO `Resume_Candidate` (`id`, `first_name`, `last_name`, `Address`, `Email`, `Phone_Number`, `Status`, `Job_Pos`) VALUES
(1, 'salil', 'koirala', 'girraween', 'koirala.salu@gmail.com', '343434', 4, 1),
(2, 'Hideaki', 'kobayashi', 'chatswood', 'dfjdkf@gmail.com', '393434', 1, 1),
(3, 'shankar', 'pandey', 'hurstville', 'shankar@hotmail.com', '122', 1, 2),
(4, 'gyanendra', 'poudel', 'kogarah', 'gyanendra@gmail.com', '12212', 1, 2),
(5, 'fahad', 'kalhoro', 'campbelltown', 'fahad@gmail.com', '3343545', 3, 2),
(18, 'salil', 'koirala', 'girraween', 'koirala.salu@gmail.com', '0404490484', 1, 1),
(35, ' hcheck', 'check2', 'girraween', 'dfjkd@gmail.com', '121', 1, 1),
(42, 'thor', 'ragnarak', 'asgard', 'thor_asgard@gmail.com', '3434', 1, 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mac_users`
--
ALTER TABLE `mac_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Resume_Candidate`
--
ALTER TABLE `Resume_Candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
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
