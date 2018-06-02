-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 02, 2018 at 06:54 PM
-- Server version: 5.5.42-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cybersyd_ats`
--

-- --------------------------------------------------------

--
-- Table structure for table `Edu_history`
--

CREATE TABLE IF NOT EXISTS `Edu_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_type` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `country` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `DegreeDate` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=120 ;

--
-- Dumping data for table `Edu_history`
--

INSERT INTO `Edu_history` (`id`, `school_type`, `name`, `country`, `city`, `degree`, `title`, `DegreeDate`, `user_id`) VALUES
(1, 'university', 'Federation University', 'AU', 'Sydney', 'masters', 'Master of Technology', '', 52),
(2, 'college', 'Greenwich English College', '', '', '', '', '2016-06', 52),
(3, 'university', 'Central Queensland University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Business', '2013-02', 52),
(4, 'university', 'Macquarie University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Commerce', '', 52),
(5, 'trade', 'Sydney Institute of Business and Technology', 'AU', 'Sydney', 'vocational', 'Diploma of Business Administration', '2008-10', 52),
(6, 'trade', 'Australian Centre of Language', 'AU', 'Sydney', 'vocational', 'Certificate 3', '2007-05', 52),
(7, 'highschool', 'Toho High school', '', '', 'high school or equivalent', '', '2006-03', 52),
(8, 'university', 'Federation University', 'AU', 'Sydney', 'masters', 'Master of Technology', '', 53),
(9, 'college', 'Greenwich English College', '', '', '', '', '2016-06', 53),
(10, 'university', 'Central Queensland University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Business', '2013-02', 53),
(11, 'university', 'Macquarie University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Commerce', '', 53),
(12, 'trade', 'Sydney Institute of Business and Technology', 'AU', 'Sydney', 'vocational', 'Diploma of Business Administration', '2008-10', 53),
(13, 'trade', 'Australian Centre of Language', 'AU', 'Sydney', 'vocational', 'Certificate 3', '2007-05', 53),
(14, 'highschool', 'Toho High school', '', '', 'high school or equivalent', '', '2006-03', 53),
(15, 'university', 'Federation University', 'AU', 'Sydney', 'masters', 'Master of Technology', '', 54),
(16, 'college', 'Greenwich English College', '', '', '', '', '2016-06', 54),
(17, 'university', 'Central Queensland University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Business', '2013-02', 54),
(18, 'university', 'Macquarie University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Commerce', '', 54),
(19, 'trade', 'Sydney Institute of Business and Technology', 'AU', 'Sydney', 'vocational', 'Diploma of Business Administration', '2008-10', 54),
(20, 'trade', 'Australian Centre of Language', 'AU', 'Sydney', 'vocational', 'Certificate 3', '2007-05', 54),
(21, 'highschool', 'Toho High school', '', '', 'high school or equivalent', '', '2006-03', 54),
(22, 'university', 'Federation University', 'AU', 'Sydney', 'masters', 'Master of Technology', '', 55),
(23, 'college', 'Greenwich English College', '', '', '', '', '2016-06', 55),
(24, 'university', 'Central Queensland University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Business', '2013-02', 55),
(25, 'university', 'Macquarie University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Commerce', '', 55),
(26, 'trade', 'Sydney Institute of Business and Technology', 'AU', 'Sydney', 'vocational', 'Diploma of Business Administration', '2008-10', 55),
(27, 'trade', 'Australian Centre of Language', 'AU', 'Sydney', 'vocational', 'Certificate 3', '2007-05', 55),
(28, 'highschool', 'Toho High school', '', '', 'high school or equivalent', '', '2006-03', 55),
(29, 'university', 'Federation University', 'AU', 'Sydney', 'masters', 'Master of Technology', '', 56),
(30, 'college', 'Greenwich English College', '', '', '', '', '2016-06', 56),
(31, 'university', 'Central Queensland University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Business', '2013-02', 56),
(32, 'university', 'Macquarie University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Commerce', '', 56),
(33, 'trade', 'Sydney Institute of Business and Technology', 'AU', 'Sydney', 'vocational', 'Diploma of Business Administration', '2008-10', 56),
(34, 'trade', 'Australian Centre of Language', 'AU', 'Sydney', 'vocational', 'Certificate 3', '2007-05', 56),
(35, 'highschool', 'Toho High school', '', '', 'high school or equivalent', '', '2006-03', 56),
(36, 'university', 'Federation University', 'AU', 'Sydney', 'masters', 'Master of Technology', '', 57),
(37, 'college', 'Greenwich English College', '', '', '', '', '2016-06', 57),
(38, 'university', 'Central Queensland University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Business', '2013-02', 57),
(39, 'university', 'Macquarie University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Commerce', '', 57),
(40, 'trade', 'Sydney Institute of Business and Technology', 'AU', 'Sydney', 'vocational', 'Diploma of Business Administration', '2008-10', 57),
(41, 'trade', 'Australian Centre of Language', 'AU', 'Sydney', 'vocational', 'Certificate 3', '2007-05', 57),
(42, 'highschool', 'Toho High school', '', '', 'high school or equivalent', '', '2006-03', 57),
(43, 'university', 'Federation University', 'AU', 'Sydney', 'masters', 'Master of Technology', '', 58),
(44, 'college', 'Greenwich English College', '', '', '', '', '2016-06', 58),
(45, 'university', 'Central Queensland University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Business', '2013-02', 58),
(46, 'university', 'Macquarie University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Commerce', '', 58),
(47, 'trade', 'Sydney Institute of Business and Technology', 'AU', 'Sydney', 'vocational', 'Diploma of Business Administration', '2008-10', 58),
(48, 'trade', 'Australian Centre of Language', 'AU', 'Sydney', 'vocational', 'Certificate 3', '2007-05', 58),
(49, 'highschool', 'Toho High school', '', '', 'high school or equivalent', '', '2006-03', 58),
(50, 'university', 'Federation University', 'AU', 'Sydney', 'masters', 'Master of Technology', '', 20),
(51, 'college', 'Greenwich English College', '', '', '', '', '2016-06', 20),
(52, 'university', 'Central Queensland University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Business', '2013-02', 20),
(53, 'university', 'Macquarie University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Commerce', '', 20),
(54, 'trade', 'Sydney Institute of Business and Technology', 'AU', 'Sydney', 'vocational', 'Diploma of Business Administration', '2008-10', 20),
(55, 'trade', 'Australian Centre of Language', 'AU', 'Sydney', 'vocational', 'Certificate 3', '2007-05', 20),
(56, 'highschool', 'Toho High school', '', '', 'high school or equivalent', '', '2006-03', 20),
(57, 'university', 'Federation University', 'AU', 'Sydney', 'masters', 'Master of Technology', '', 21),
(58, 'college', 'Greenwich English College', '', '', '', '', '2016-06', 21),
(59, 'university', 'Central Queensland University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Business', '2013-02', 21),
(60, 'university', 'Macquarie University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Commerce', '', 21),
(61, 'trade', 'Sydney Institute of Business and Technology', 'AU', 'Sydney', 'vocational', 'Diploma of Business Administration', '2008-10', 21),
(62, 'trade', 'Australian Centre of Language', 'AU', 'Sydney', 'vocational', 'Certificate 3', '2007-05', 21),
(63, 'highschool', 'Toho High school', '', '', 'high school or equivalent', '', '2006-03', 21),
(64, 'university', 'Federation University', 'AU', 'Sydney', 'masters', 'Master of Technology', '', 22),
(65, 'college', 'Greenwich English College', '', '', '', '', '2016-06', 22),
(66, 'university', 'Central Queensland University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Business', '2013-02', 22),
(67, 'university', 'Macquarie University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Commerce', '', 22),
(68, 'trade', 'Sydney Institute of Business and Technology', 'AU', 'Sydney', 'vocational', 'Diploma of Business Administration', '2008-10', 22),
(69, 'trade', 'Australian Centre of Language', 'AU', 'Sydney', 'vocational', 'Certificate 3', '2007-05', 22),
(70, 'highschool', 'Toho High school', '', '', 'high school or equivalent', '', '2006-03', 22),
(71, 'university', 'Federation University', 'AU', 'Sydney', 'masters', 'Master of Technology', '', 23),
(72, 'college', 'Greenwich English College', '', '', '', '', '2016-06', 23),
(73, 'university', 'Central Queensland University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Business', '2013-02', 23),
(74, 'university', 'Macquarie University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Commerce', '', 23),
(75, 'trade', 'Sydney Institute of Business and Technology', 'AU', 'Sydney', 'vocational', 'Diploma of Business Administration', '2008-10', 23),
(76, 'trade', 'Australian Centre of Language', 'AU', 'Sydney', 'vocational', 'Certificate 3', '2007-05', 23),
(77, 'highschool', 'Toho High school', '', '', 'high school or equivalent', '', '2006-03', 23),
(78, 'university', 'Federation University', 'AU', 'Sydney', 'masters', 'Master of Technology', '', 24),
(79, 'college', 'Greenwich English College', '', '', '', '', '2016-06', 24),
(80, 'university', 'Central Queensland University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Business', '2013-02', 24),
(81, 'university', 'Macquarie University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Commerce', '', 24),
(82, 'trade', 'Sydney Institute of Business and Technology', 'AU', 'Sydney', 'vocational', 'Diploma of Business Administration', '2008-10', 24),
(83, 'trade', 'Australian Centre of Language', 'AU', 'Sydney', 'vocational', 'Certificate 3', '2007-05', 24),
(84, 'highschool', 'Toho High school', '', '', 'high school or equivalent', '', '2006-03', 24),
(85, 'university', 'Federation University', 'AU', 'Sydney', 'masters', 'Master of Technology', '', 25),
(86, 'college', 'Greenwich English College', '', '', '', '', '2016-06', 25),
(87, 'university', 'Central Queensland University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Business', '2013-02', 25),
(88, 'university', 'Macquarie University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Commerce', '', 25),
(89, 'trade', 'Sydney Institute of Business and Technology', 'AU', 'Sydney', 'vocational', 'Diploma of Business Administration', '2008-10', 25),
(90, 'trade', 'Australian Centre of Language', 'AU', 'Sydney', 'vocational', 'Certificate 3', '2007-05', 25),
(91, 'highschool', 'Toho High school', '', '', 'high school or equivalent', '', '2006-03', 25),
(92, 'university', 'Federation University', 'AU', 'Sydney', 'masters', 'Master of Technology', '', 26),
(93, 'college', 'Greenwich English College', '', '', '', '', '2016-06', 26),
(94, 'university', 'Central Queensland University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Business', '2013-02', 26),
(95, 'university', 'Macquarie University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Commerce', '', 26),
(96, 'trade', 'Sydney Institute of Business and Technology', 'AU', 'Sydney', 'vocational', 'Diploma of Business Administration', '2008-10', 26),
(97, 'trade', 'Australian Centre of Language', 'AU', 'Sydney', 'vocational', 'Certificate 3', '2007-05', 26),
(98, 'highschool', 'Toho High school', '', '', 'high school or equivalent', '', '2006-03', 26),
(99, 'university', 'Federation University', 'AU', 'Sydney', 'masters', 'Master of Technology', '', 27),
(100, 'college', 'Greenwich English College', '', '', '', '', '2016-06', 27),
(101, 'university', 'Central Queensland University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Business', '2013-02', 27),
(102, 'university', 'Macquarie University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Commerce', '', 27),
(103, 'trade', 'Sydney Institute of Business and Technology', 'AU', 'Sydney', 'vocational', 'Diploma of Business Administration', '2008-10', 27),
(104, 'trade', 'Australian Centre of Language', 'AU', 'Sydney', 'vocational', 'Certificate 3', '2007-05', 27),
(105, 'highschool', 'Toho High school', '', '', 'high school or equivalent', '', '2006-03', 27),
(106, 'university', 'Federation University', 'AU', 'Sydney', 'masters', 'Master of Technology', '', 28),
(107, 'college', 'Greenwich English College', '', '', '', '', '2016-06', 28),
(108, 'university', 'Central Queensland University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Business', '2013-02', 28),
(109, 'university', 'Macquarie University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Commerce', '', 28),
(110, 'trade', 'Sydney Institute of Business and Technology', 'AU', 'Sydney', 'vocational', 'Diploma of Business Administration', '2008-10', 28),
(111, 'trade', 'Australian Centre of Language', 'AU', 'Sydney', 'vocational', 'Certificate 3', '2007-05', 28),
(112, 'highschool', 'Toho High school', '', '', 'high school or equivalent', '', '2006-03', 28),
(113, 'university', 'Federation University', 'AU', 'Sydney', 'masters', 'Master of Technology', '', 29),
(114, 'college', 'Greenwich English College', '', '', '', '', '2016-06', 29),
(115, 'university', 'Central Queensland University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Business', '2013-02', 29),
(116, 'university', 'Macquarie University', 'AU', 'Sydney', 'bachelors', 'Bachelor of Commerce', '', 29),
(117, 'trade', 'Sydney Institute of Business and Technology', 'AU', 'Sydney', 'vocational', 'Diploma of Business Administration', '2008-10', 29),
(118, 'trade', 'Australian Centre of Language', 'AU', 'Sydney', 'vocational', 'Certificate 3', '2007-05', 29),
(119, 'highschool', 'Toho High school', '', '', 'high school or equivalent', '', '2006-03', 29);

-- --------------------------------------------------------

--
-- Table structure for table `Emp_history`
--

CREATE TABLE IF NOT EXISTS `Emp_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `org_name` varchar(256) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132 ;

--
-- Dumping data for table `Emp_history`
--

INSERT INTO `Emp_history` (`id`, `user_id`, `org_name`, `start_date`, `end_date`, `title`) VALUES
(1, 50, '', '2015-12', 'current', 'IT Consultant Web Developer Web Designer'),
(2, 50, 'Homestay and Education Australia', '2016-02', 'current', 'Programmer and web developer'),
(3, 50, 'River Express Pty Ltd', '2017-08', 'current', 'IT Consultant Web Developer Web Designer'),
(4, 50, 'Wordpress', '2016-12', '2017-01', 'IT Consultant Web Programmer Web Designer'),
(5, 50, 'AJ Bridge International Pty Ltd', '2014-08', '2015-10', 'Software Consultant and Excel VBA Programmer'),
(6, 51, '', '2015-12', 'current', 'IT Consultant Web Developer Web Designer'),
(7, 51, 'Homestay and Education Australia', '2016-02', 'current', 'Programmer and web developer'),
(8, 51, 'River Express Pty Ltd', '2017-08', 'current', 'IT Consultant Web Developer Web Designer'),
(9, 51, 'Wordpress', '2016-12', '2017-01', 'IT Consultant Web Programmer Web Designer'),
(10, 51, 'AJ Bridge International Pty Ltd', '2014-08', '2015-10', 'Software Consultant and Excel VBA Programmer'),
(11, 51, 'Endo Lumber Company', '2010-12', '2011-01', ''),
(12, 51, 'Monochrome Antina', '2007-01', '2009-12', 'Game Script programmer Meeting Administration'),
(13, 52, '', '2015-12', 'current', 'IT Consultant Web Developer Web Designer'),
(14, 52, 'Homestay and Education Australia', '2016-02', 'current', 'Programmer and web developer'),
(15, 52, 'River Express Pty Ltd', '2017-08', 'current', 'IT Consultant Web Developer Web Designer'),
(16, 52, 'Wordpress', '2016-12', '2017-01', 'IT Consultant Web Programmer Web Designer'),
(17, 52, 'AJ Bridge International Pty Ltd', '2014-08', '2015-10', 'Software Consultant and Excel VBA Programmer'),
(18, 52, 'Endo Lumber Company', '2010-12', '2011-01', ''),
(19, 52, 'Monochrome Antina', '2007-01', '2009-12', 'Game Script programmer Meeting Administration'),
(20, 53, '', '2015-12', 'current', 'IT Consultant Web Developer Web Designer'),
(21, 53, 'Homestay and Education Australia', '2016-02', 'current', 'Programmer and web developer'),
(22, 53, 'River Express Pty Ltd', '2017-08', 'current', 'IT Consultant Web Developer Web Designer'),
(23, 53, 'Wordpress', '2016-12', '2017-01', 'IT Consultant Web Programmer Web Designer'),
(24, 53, 'AJ Bridge International Pty Ltd', '2014-08', '2015-10', 'Software Consultant and Excel VBA Programmer'),
(25, 53, 'Endo Lumber Company', '2010-12', '2011-01', ''),
(26, 53, 'Monochrome Antina', '2007-01', '2009-12', 'Game Script programmer Meeting Administration'),
(27, 54, '', '2015-12', 'current', 'IT Consultant Web Developer Web Designer'),
(28, 54, 'Homestay and Education Australia', '2016-02', 'current', 'Programmer and web developer'),
(29, 54, 'River Express Pty Ltd', '2017-08', 'current', 'IT Consultant Web Developer Web Designer'),
(30, 54, 'Wordpress', '2016-12', '2017-01', 'IT Consultant Web Programmer Web Designer'),
(31, 54, 'AJ Bridge International Pty Ltd', '2014-08', '2015-10', 'Software Consultant and Excel VBA Programmer'),
(32, 54, 'Endo Lumber Company', '2010-12', '2011-01', ''),
(33, 54, 'Monochrome Antina', '2007-01', '2009-12', 'Game Script programmer Meeting Administration'),
(34, 55, '', '2015-12', 'current', 'IT Consultant Web Developer Web Designer'),
(35, 55, 'Homestay and Education Australia', '2016-02', 'current', 'Programmer and web developer'),
(36, 55, 'River Express Pty Ltd', '2017-08', 'current', 'IT Consultant Web Developer Web Designer'),
(37, 55, 'Wordpress', '2016-12', '2017-01', 'IT Consultant Web Programmer Web Designer'),
(38, 55, 'AJ Bridge International Pty Ltd', '2014-08', '2015-10', 'Software Consultant and Excel VBA Programmer'),
(39, 55, 'Endo Lumber Company', '2010-12', '2011-01', ''),
(40, 55, 'Monochrome Antina', '2007-01', '2009-12', 'Game Script programmer Meeting Administration'),
(41, 56, '', '2015-12', 'current', 'IT Consultant Web Developer Web Designer'),
(42, 56, 'Homestay and Education Australia', '2016-02', 'current', 'Programmer and web developer'),
(43, 56, 'River Express Pty Ltd', '2017-08', 'current', 'IT Consultant Web Developer Web Designer'),
(44, 56, 'Wordpress', '2016-12', '2017-01', 'IT Consultant Web Programmer Web Designer'),
(45, 56, 'AJ Bridge International Pty Ltd', '2014-08', '2015-10', 'Software Consultant and Excel VBA Programmer'),
(46, 56, 'Endo Lumber Company', '2010-12', '2011-01', ''),
(47, 56, 'Monochrome Antina', '2007-01', '2009-12', 'Game Script programmer Meeting Administration'),
(48, 57, '', '2015-12', 'current', 'IT Consultant Web Developer Web Designer'),
(49, 57, 'Homestay and Education Australia', '2016-02', 'current', 'Programmer and web developer'),
(50, 57, 'River Express Pty Ltd', '2017-08', 'current', 'IT Consultant Web Developer Web Designer'),
(51, 57, 'Wordpress', '2016-12', '2017-01', 'IT Consultant Web Programmer Web Designer'),
(52, 57, 'AJ Bridge International Pty Ltd', '2014-08', '2015-10', 'Software Consultant and Excel VBA Programmer'),
(53, 57, 'Endo Lumber Company', '2010-12', '2011-01', ''),
(54, 57, 'Monochrome Antina', '2007-01', '2009-12', 'Game Script programmer Meeting Administration'),
(55, 58, '', '2015-12', 'current', 'IT Consultant Web Developer Web Designer'),
(56, 58, 'Homestay and Education Australia', '2016-02', 'current', 'Programmer and web developer'),
(57, 58, 'River Express Pty Ltd', '2017-08', 'current', 'IT Consultant Web Developer Web Designer'),
(58, 58, 'Wordpress', '2016-12', '2017-01', 'IT Consultant Web Programmer Web Designer'),
(59, 58, 'AJ Bridge International Pty Ltd', '2014-08', '2015-10', 'Software Consultant and Excel VBA Programmer'),
(60, 58, 'Endo Lumber Company', '2010-12', '2011-01', ''),
(61, 58, 'Monochrome Antina', '2007-01', '2009-12', 'Game Script programmer Meeting Administration'),
(62, 20, '', '2015-12', 'current', 'IT Consultant Web Developer Web Designer'),
(63, 20, 'Homestay and Education Australia', '2016-02', 'current', 'Programmer and web developer'),
(64, 20, 'River Express Pty Ltd', '2017-08', 'current', 'IT Consultant Web Developer Web Designer'),
(65, 20, 'Wordpress', '2016-12', '2017-01', 'IT Consultant Web Programmer Web Designer'),
(66, 20, 'AJ Bridge International Pty Ltd', '2014-08', '2015-10', 'Software Consultant and Excel VBA Programmer'),
(67, 20, 'Endo Lumber Company', '2010-12', '2011-01', ''),
(68, 20, 'Monochrome Antina', '2007-01', '2009-12', 'Game Script programmer Meeting Administration'),
(69, 21, '', '2015-12', 'current', 'IT Consultant Web Developer Web Designer'),
(70, 21, 'Homestay and Education Australia', '2016-02', 'current', 'Programmer and web developer'),
(71, 21, 'River Express Pty Ltd', '2017-08', 'current', 'IT Consultant Web Developer Web Designer'),
(72, 21, 'Wordpress', '2016-12', '2017-01', 'IT Consultant Web Programmer Web Designer'),
(73, 21, 'AJ Bridge International Pty Ltd', '2014-08', '2015-10', 'Software Consultant and Excel VBA Programmer'),
(74, 21, 'Endo Lumber Company', '2010-12', '2011-01', ''),
(75, 21, 'Monochrome Antina', '2007-01', '2009-12', 'Game Script programmer Meeting Administration'),
(76, 22, '', '2015-12', 'current', 'IT Consultant Web Developer Web Designer'),
(77, 22, 'Homestay and Education Australia', '2016-02', 'current', 'Programmer and web developer'),
(78, 22, 'River Express Pty Ltd', '2017-08', 'current', 'IT Consultant Web Developer Web Designer'),
(79, 22, 'Wordpress', '2016-12', '2017-01', 'IT Consultant Web Programmer Web Designer'),
(80, 22, 'AJ Bridge International Pty Ltd', '2014-08', '2015-10', 'Software Consultant and Excel VBA Programmer'),
(81, 22, 'Endo Lumber Company', '2010-12', '2011-01', ''),
(82, 22, 'Monochrome Antina', '2007-01', '2009-12', 'Game Script programmer Meeting Administration'),
(83, 23, '', '2015-12', 'current', 'IT Consultant Web Developer Web Designer'),
(84, 23, 'Homestay and Education Australia', '2016-02', 'current', 'Programmer and web developer'),
(85, 23, 'River Express Pty Ltd', '2017-08', 'current', 'IT Consultant Web Developer Web Designer'),
(86, 23, 'Wordpress', '2016-12', '2017-01', 'IT Consultant Web Programmer Web Designer'),
(87, 23, 'AJ Bridge International Pty Ltd', '2014-08', '2015-10', 'Software Consultant and Excel VBA Programmer'),
(88, 23, 'Endo Lumber Company', '2010-12', '2011-01', ''),
(89, 23, 'Monochrome Antina', '2007-01', '2009-12', 'Game Script programmer Meeting Administration'),
(90, 24, '', '2015-12', 'current', 'IT Consultant Web Developer Web Designer'),
(91, 24, 'Homestay and Education Australia', '2016-02', 'current', 'Programmer and web developer'),
(92, 24, 'River Express Pty Ltd', '2017-08', 'current', 'IT Consultant Web Developer Web Designer'),
(93, 24, 'Wordpress', '2016-12', '2017-01', 'IT Consultant Web Programmer Web Designer'),
(94, 24, 'AJ Bridge International Pty Ltd', '2014-08', '2015-10', 'Software Consultant and Excel VBA Programmer'),
(95, 24, 'Endo Lumber Company', '2010-12', '2011-01', ''),
(96, 24, 'Monochrome Antina', '2007-01', '2009-12', 'Game Script programmer Meeting Administration'),
(97, 25, '', '2015-12', 'current', 'IT Consultant Web Developer Web Designer'),
(98, 25, 'Homestay and Education Australia', '2016-02', 'current', 'Programmer and web developer'),
(99, 25, 'River Express Pty Ltd', '2017-08', 'current', 'IT Consultant Web Developer Web Designer'),
(100, 25, 'Wordpress', '2016-12', '2017-01', 'IT Consultant Web Programmer Web Designer'),
(101, 25, 'AJ Bridge International Pty Ltd', '2014-08', '2015-10', 'Software Consultant and Excel VBA Programmer'),
(102, 25, 'Endo Lumber Company', '2010-12', '2011-01', ''),
(103, 25, 'Monochrome Antina', '2007-01', '2009-12', 'Game Script programmer Meeting Administration'),
(104, 26, '', '2015-12', 'current', 'IT Consultant Web Developer Web Designer'),
(105, 26, 'Homestay and Education Australia', '2016-02', 'current', 'Programmer and web developer'),
(106, 26, 'River Express Pty Ltd', '2017-08', 'current', 'IT Consultant Web Developer Web Designer'),
(107, 26, 'Wordpress', '2016-12', '2017-01', 'IT Consultant Web Programmer Web Designer'),
(108, 26, 'AJ Bridge International Pty Ltd', '2014-08', '2015-10', 'Software Consultant and Excel VBA Programmer'),
(109, 26, 'Endo Lumber Company', '2010-12', '2011-01', ''),
(110, 26, 'Monochrome Antina', '2007-01', '2009-12', 'Game Script programmer Meeting Administration'),
(111, 27, '', '2015-12', 'current', 'IT Consultant Web Developer Web Designer'),
(112, 27, 'Homestay and Education Australia', '2016-02', 'current', 'Programmer and web developer'),
(113, 27, 'River Express Pty Ltd', '2017-08', 'current', 'IT Consultant Web Developer Web Designer'),
(114, 27, 'Wordpress', '2016-12', '2017-01', 'IT Consultant Web Programmer Web Designer'),
(115, 27, 'AJ Bridge International Pty Ltd', '2014-08', '2015-10', 'Software Consultant and Excel VBA Programmer'),
(116, 27, 'Endo Lumber Company', '2010-12', '2011-01', ''),
(117, 27, 'Monochrome Antina', '2007-01', '2009-12', 'Game Script programmer Meeting Administration'),
(118, 28, '', '2015-12', 'current', 'IT Consultant Web Developer Web Designer'),
(119, 28, 'Homestay and Education Australia', '2016-02', 'current', 'Programmer and web developer'),
(120, 28, 'River Express Pty Ltd', '2017-08', 'current', 'IT Consultant Web Developer Web Designer'),
(121, 28, 'Wordpress', '2016-12', '2017-01', 'IT Consultant Web Programmer Web Designer'),
(122, 28, 'AJ Bridge International Pty Ltd', '2014-08', '2015-10', 'Software Consultant and Excel VBA Programmer'),
(123, 28, 'Endo Lumber Company', '2010-12', '2011-01', ''),
(124, 28, 'Monochrome Antina', '2007-01', '2009-12', 'Game Script programmer Meeting Administration'),
(125, 29, '', '2015-12', 'current', 'IT Consultant Web Developer Web Designer'),
(126, 29, 'Homestay and Education Australia', '2016-02', 'current', 'Programmer and web developer'),
(127, 29, 'River Express Pty Ltd', '2017-08', 'current', 'IT Consultant Web Developer Web Designer'),
(128, 29, 'Wordpress', '2016-12', '2017-01', 'IT Consultant Web Programmer Web Designer'),
(129, 29, 'AJ Bridge International Pty Ltd', '2014-08', '2015-10', 'Software Consultant and Excel VBA Programmer'),
(130, 29, 'Endo Lumber Company', '2010-12', '2011-01', ''),
(131, 29, 'Monochrome Antina', '2007-01', '2009-12', 'Game Script programmer Meeting Administration');

-- --------------------------------------------------------

--
-- Table structure for table `Job_Position`
--

CREATE TABLE IF NOT EXISTS `Job_Position` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `position` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `Job_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Job_Pos` (`Job_Pos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `Job_post`
--

INSERT INTO `Job_post` (`id`, `Post_Title`, `short_description`, `Post_Description`, `status`, `Job_Pos`, `wage_per_month`, `place_of_work`, `company_name`, `dead_line`, `counter_person_name`, `email`, `phone`) VALUES
(1, 'Junior Programmer', '', 'Junior programmer\r\nWage=$4000/month', 1, 1, 0.00, '', '', '0000-00-00', '', '', ''),
(3, 'TEST JOB TITLE', '', 'TEST Job Descritpiion', 1, 2, 0.00, '', '', '0000-00-00', '', '', ''),
(4, 'Senior Programmer', '', 'Programming in PHP', 1, 2, 4000.00, 'Brisbane', 'Hi-Tech company', '2019-01-01', 'Hideaki', 'hide@feduni.com', '044000000'),
(5, 'Senior Programmer', '', 'Programming in PHP', 1, 2, 4000.00, 'Brisbane', 'Hi-Tech company', '2019-01-01', 'Hideaki', 'hide@feduni.com', '044000000'),
(8, 'title', 'description', 'post_description', 1, 1, 123.00, 'sydney', 'company', '0000-00-00', 'hide', 'bb.haruna@gmail.com', '0448801277'),
(18, 'title', 'description', 'post_description', 1, 1, 123.00, 'sydney', 'company', '0000-00-00', 'hide', 'bb.haruna@gmail.com', '0448801277'),
(19, 'title', 'description', 'post_description', 1, 1, 123.00, 'sydney', 'company', '0000-00-00', 'hide', 'bb.haruna@gmail.com', '0448801277'),
(22, 'test', 'test1', 'dfdf', 1, 1, 12232.00, '', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mac_users`
--

CREATE TABLE IF NOT EXISTS `mac_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `username` varchar(155) NOT NULL,
  `password` varchar(155) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `phone_number` varchar(140) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `mac_users`
--

INSERT INTO `mac_users` (`id`, `first_name`, `last_name`, `username`, `password`, `Address`, `phone_number`, `Email`, `status`) VALUES
(1, 'salil', 'koirala', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'parramatta', '', '', 1),
(2, 'gyanendra', 'poudel', '', '', 'kogarah', '', '', 1),
(3, 'salil', 'koirala', 'salil', '9057b37cd5a0fab4a477300bbe56babe', 'dfd', '212', 'koirala.salu@gmail.com', 1),
(4, 'hideaki', 'kobayashi', 'user_name', 'cc03e747a6afbbcbf8be7668acfebee5', '112_a', '0448801277', 'bb.haruna@gmail.com', 1),
(5, 'salil', 'koirala', 'salil', '9057b37cd5a0fab4a477300bbe56babe', 'dfd', '212', 'koirala.salu@gmail.com', 1),
(6, 'salil', 'koirala', 'salil', '9057b37cd5a0fab4a477300bbe56babe', 'dfd', '212', 'koirala.salu@gmail.com', 1),
(7, 'hideaki', 'kobayashi', 'user_name', 'cc03e747a6afbbcbf8be7668acfebee5', '112_a', '0448801277', 'bb.haruna@gmail.com', 1),
(8, 'salil', 'koirala', 'salil', '9057b37cd5a0fab4a477300bbe56babe', 'dfd', '212', 'koirala.salu@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Resume_Candidate`
--

CREATE TABLE IF NOT EXISTS `Resume_Candidate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_Number` varchar(50) NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Job_Pos` int(11) NOT NULL,
  `cv_file_name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Job_Pos` (`Job_Pos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `Resume_Candidate`
--

INSERT INTO `Resume_Candidate` (`id`, `first_name`, `last_name`, `Address`, `Email`, `Phone_Number`, `Status`, `Job_Pos`, `cv_file_name`) VALUES
(4, 'c', 'ab', 'e', 'd', 'f', 1, 1, '40237cbd-394f-430c-bfcf-f1371e8b92f0'),
(5, 'a', 'test', 'c', 'b', 'de', 1, 1, '8885d9a4-23d7-45f3-950e-5f83f5c15dc6'),
(6, 'a', 'test', 'c', 'b', 'de', 1, 1, '943badb8-44b4-4cdc-b217-484815d5b706'),
(7, 'a', 'test', 'c', 'b', 'de', 1, 1, 'b85d0316-7d1d-44a7-bf3a-59a70fee5297.png'),
(8, '', '', '', 'hide@gmail.com', '', 1, 1, ''),
(9, '', '', '', 'hide@gmail.com', '', 1, 1, ''),
(10, '', '', '', 'hide@gmail.com', '', 1, 1, ''),
(11, '', '', 'central', 'hide@gmail.com', '23223', 1, 1, ''),
(12, '', '', 'central', 'hide@gmail.com', '23223', 1, 1, ''),
(13, '', '', 'centrail', 'hide@gmail.co', '2323', 1, 1, ''),
(14, '', '', 'centrail', 'hide@gmail.co', '2323', 1, 1, ''),
(15, 'thor', 'ragnarko', 'asgard', 'asgard@god.com', '12345', 1, 1, ''),
(16, 'thor', 'ragnarko', 'asgard', 'asgard@god.com', '12345', 1, 1, ''),
(17, 'Hideaki', 'Kobayashi', '112 Middle Horbour Road', 'bb.haruna@gmail.com', '448801277', 1, 1, '06d3d8c7-6e38-46c3-9f1f-5a8fc77faa48.docx'),
(18, 'Hideaki', 'Kobayashi', '112 Middle Horbour Road', 'bb.haruna@gmail.com', '448801277', 1, 1, '8eae70c7-6e3b-418e-95cf-51abf7751278.docx'),
(19, 'Hideaki', 'Kobayashi', '112 Middle Horbour Road', 'bb.haruna@gmail.com', '448801277', 1, 1, '03f38e8a-5005-49b1-93c1-ce95921b078b.docx'),
(20, 'Hideaki', 'Kobayashi', '112 Middle Horbour Road', 'bb.haruna@gmail.com', '448801277', 1, 1, '0361db4d-f31a-4fd0-b162-a3f10d320cd0.docx'),
(21, 'Hideaki', 'Kobayashi', '112 Middle Horbour Road', 'bb.haruna@gmail.com', '448801277', 1, 1, 'f4fb7c05-b79e-4d9b-9f02-ad1d41ed21fe.docx'),
(22, 'Hideaki', 'Kobayashi', '112 Middle Horbour Road', 'bb.haruna@gmail.com', '448801277', 1, 1, '889ff5bc-1144-4baa-aec4-cc6afca303c2.docx'),
(23, 'Hideaki', 'Kobayashi', '112 Middle Horbour Road', 'bb.haruna@gmail.com', '448801277', 1, 1, '5470bfa0-612c-4bf3-adcc-8cd1e8ccde06.docx'),
(24, 'Hideaki', 'Kobayashi', '112 Middle Horbour Road', 'bb.haruna@gmail.com', '448801277', 1, 1, '85fb80b7-5d4a-4ce1-aa95-2678bfdc76e8.docx'),
(25, 'Hideaki', 'Kobayashi', 'Suite 103, 379 - 383 Pitt Street', 'hide@study-au.com', '0292680933', 1, 1, 'cd7fa40b-44fe-4fd9-b24b-8959bc7df4c6.docx'),
(26, 'Hideaki', 'Kobayashi', 'Suite 103, 379 - 383 Pitt Street', 'hide@study-au.com', '0292680933', 1, 1, '2b1afb8c-fa5e-4f07-a5db-8ba8bd8a1e98.docx'),
(27, 'Hideaki', 'Kobayashi', 'Suite 103, 379 - 383 Pitt Street', 'hide@study-au.com', '0292680933', 1, 1, '1e5eb0f4-26c9-44df-a827-878b94e59838.docx'),
(28, 'Hideaki', 'Kobayashi', 'Suite 103, 379 - 383 Pitt Street', 'hide@study-au.com', '0292680933', 1, 1, '51917b2d-1056-46b3-b1eb-6c1ecdbe9c95.docx'),
(29, 'Hideaki', 'Kobayashi', 'Suite 103, 379 - 383 Pitt Street', 'hide@study-au.com', '0292680933', 1, 1, 'bea7b870-3929-4c4a-bf1c-a556ee76b0de.docx');

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
