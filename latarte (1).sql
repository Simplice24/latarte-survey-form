-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 08:45 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `latarte`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
`id` int(225) NOT NULL,
  `admin_username` varchar(70) NOT NULL,
  `admin_password` varchar(40) NOT NULL,
  `role` varchar(225) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `admin_username`, `admin_password`, `role`, `date`) VALUES
(1, 'Admin', 'Witch07', 'Super_admin', '2021-08-14 19:56:20'),
(2, 'Admin1', 'lowkey', 'admin', '2021-08-14 20:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
`id` int(255) NOT NULL,
  `fname` varchar(70) NOT NULL,
  `lname` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `email`, `username`, `password`, `date`) VALUES
(1, 'Kabanda', 'Derrick', 'kderick@gmail.com', 'derrick12', '12345', '2021-08-04 16:39:32'),
(3, 'Niyitanga', 'Aime De Die', 'niyitangaaime@gamil.com', 'toptech', 'toptech123', '2021-08-04 16:39:32'),
(8, 'Ishimwe', 'Kevin', 'ishkevin@gmail.com', 'IshKevin', 'getit', '2021-08-04 16:39:32'),
(9, 'Irumva', 'Faustin', 'irufaustin@gmail.com', 'faustin23', 'yolla', '2021-08-04 16:39:32'),
(10, 'kimenyi', 'Honore', 'kimhonore05@gmail.com', 'Honore', 'bigboi', '2021-08-04 16:39:32'),
(14, 'Devin ', 'Booker', 'dbooker1@gamil.com', 'dbook1', 'missedchampionship', '2021-08-07 15:50:05'),
(15, 'Jrue', 'Holiday', 'jhold99@gamil.com', 'JrueHoliday', 'champion ', '2021-08-07 15:51:55'),
(16, 'Jj', 'Redick', 'jjredick@gmail.com', 'jjred', 'gone ', '2021-08-15 16:25:40');

-- --------------------------------------------------------

--
-- Table structure for table `survey1`
--

CREATE TABLE IF NOT EXISTS `survey1` (
`id` int(225) NOT NULL,
  `username` varchar(70) NOT NULL,
  `Qst1` varchar(30) NOT NULL,
  `Qst2` varchar(30) NOT NULL,
  `Qst3` varchar(30) NOT NULL,
  `Qst4` varchar(30) NOT NULL,
  `Qst5` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey1`
--

INSERT INTO `survey1` (`id`, `username`, `Qst1`, `Qst2`, `Qst3`, `Qst4`, `Qst5`, `comment`, `date`) VALUES
(2, 'derrick12', 'Very satisfied', 'Yes', 'Yes', 'Yes', 'Yes', '            i am very satisfied to work as la tarte employee', '2021-08-04 16:39:58'),
(3, 'Honore', 'unsatisfied', 'No', 'Yes', 'No', 'Yes', '            It should be better by  increasing our monthly salary', '2021-08-04 16:39:58');

-- --------------------------------------------------------

--
-- Table structure for table `survey2`
--

CREATE TABLE IF NOT EXISTS `survey2` (
`id` int(225) NOT NULL,
  `username` varchar(70) NOT NULL,
  `Qst1` varchar(30) NOT NULL,
  `Qst2` varchar(30) NOT NULL,
  `Qst3` varchar(30) NOT NULL,
  `Qst4` varchar(30) NOT NULL,
  `Qst5` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey2`
--

INSERT INTO `survey2` (`id`, `username`, `Qst1`, `Qst2`, `Qst3`, `Qst4`, `Qst5`, `comment`, `date`) VALUES
(4, 'iyesiam', 'Very satisfied', 'Less than a month', 'Once a week', 'price', 'probably', '            It''s all good carry on ', '2021-08-04 16:40:22'),
(7, 'toptech', 'Very satisfied', 'Less than a month', '2 to 3 times a month', 'usability', 'not sure', '             We really need improvement ', '2021-08-04 16:40:22'),
(8, '', 'Very satisfied', '1-3 years', 'Once a week', 'quality', 'definitely', '            it''s all good with your product ', '2021-08-07 17:00:01'),
(9, '', 'Very satisfied', '1-3 years', 'Once a week', 'quality', 'definitely', '            it''s all good with your product ', '2021-08-07 17:03:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey1`
--
ALTER TABLE `survey1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey2`
--
ALTER TABLE `survey2`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
MODIFY `id` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `survey1`
--
ALTER TABLE `survey1`
MODIFY `id` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `survey2`
--
ALTER TABLE `survey2`
MODIFY `id` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
