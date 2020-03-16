-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 01:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `racket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coach`
--

CREATE TABLE `tbl_coach` (
  `Id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_coach`
--

INSERT INTO `tbl_coach` (`Id`, `name`, `description`) VALUES
(3, 'RED', '                                    <strong>Lorem Ipsum</strong> <br>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_commitee`
--

CREATE TABLE `tbl_commitee` (
  `Id` int(11) NOT NULL,
  `name` text NOT NULL,
  `designation` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_commitee`
--

INSERT INTO `tbl_commitee` (`Id`, `name`, `designation`) VALUES
(1, 'Mr. Hrishikesh Shroff', 'President'),
(3, 'Rohit', 'Character');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comms`
--

CREATE TABLE `tbl_comms` (
  `Id` int(11) NOT NULL,
  `name` text NOT NULL,
  `post` varchar(255) NOT NULL,
  `number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_comms`
--

INSERT INTO `tbl_comms` (`Id`, `name`, `post`, `number`) VALUES
(1, 'Mr. H. Shroff', '- Jt. Hony. Secretary & coordinator (NJDP)', '+919903032547'),
(2, 'Jackey Shroff', 'Detective', '789246131'),
(4, 'Pramit Majumdar', 'Jr. Developer', '+91237116646');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE `tbl_courses` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`id`, `name`, `image`, `description`) VALUES
(2, 'NATIONAL DEVELOPMENT PROGRAMME(NJDP)', 'Screenshot (3).png', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <h4><span style=\"font-weight: normal;\">To cradle future squash the Club started a National Junior Development Program in November 2002 to\r\n                    popularize the game amongst school children and create an environment for the participants to\r\n                    develop their skills in the game to a competitive level. Qualified coaches impart training at all\r\n                    levels.&nbsp;</span></h4><div><br></div><div><br></div><h4><span style=\"font-weight: normal;\">&nbsp;This program is a part of National Junior Development Program (NJDP) which is the official coaching\r\n                    system adopted by Squash Racket Federation of India (SRFI).&nbsp;</span></h4><div><br></div><div><br></div><h4><span style=\"font-weight: normal;\">The program participants are divided\r\n                    into three categories i.e. Beginners - Talented – Elite\r\n\r\n                    Participants need to put in 4 to 6 hours a week.</span></h4><div><br></div><div><br></div><h4><span style=\"font-weight: normal;\">&nbsp;The Elite squad would obviously need to put in\r\n                    additional hours.\r\n\r\n                    More than 600 children have trained at the Club under our professional coaches.&nbsp;</span></h4><div><br></div><div><br></div><h4><span style=\"font-weight: normal;\">We are perhaps the\r\n                    only club that gives memberships to children and in their names.&nbsp;</span></h4><div><br></div><div><br></div><h4><span style=\"font-weight: normal;\">The only condition is that they\r\n                    have to be interested in squash. This is with an eye to the future.&nbsp;</span></h4><div><br></div><div><br></div><h4><span style=\"font-weight: normal;\">The idea is to groom the next\r\n                    generation of squash enthusiasts</span></h4><h4><span style=\"background-color: rgb(51, 0, 204);\"></span></h4>                                                                                                                                                                                                ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `Id` int(11) NOT NULL,
  `event` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`Id`, `event`) VALUES
(1, 'Screenshot (4).png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `Id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`Id`, `title`, `description`, `image`, `category`) VALUES
(2, 'REd', 'DEA', 'Screenshot (14).png', 'CRC @019'),
(3, 'ewer', '                                adsasd', 'Screenshot (28).png', 'crc-2017'),
(4, 'ar', '                                adsad', 'Screenshot (14).png', 'CRC2018'),
(5, 'adsd', '                                adsd', 'Screenshot (9).png', 'CRC2018'),
(6, 'RED', '                                adasddad', 'Screenshot (11).png', 'crc-2020'),
(7, 'adsad', '                                asdad', 'Screenshot (4).png', 'CRC2018'),
(8, 'asdasd', '                                adsad', 'Screenshot (9).png', 'crc-2020'),
(9, 'asdads', '                                adsad', 'Screenshot (4).png', 'crc-2017'),
(10, 'asdsad', '                                adsadsadd', 'Screenshot (3).png', 'CEasd'),
(11, 'red', '                                adasds', 'Screenshot (14).png', 'FC-2020'),
(12, 'asdad', '                                adsads', 'Screenshot (4).png', 'CRC2018');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE `tbl_notice` (
  `Id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notice`
--

INSERT INTO `tbl_notice` (`Id`, `title`, `date`, `description`) VALUES
(1, 'RED', '14th April 2020', '                                    <h4>To cradle future squash the Club started a National Junior Development Program in November 2002 to\r\n                    popularize the game amongst school children and create an environment for the participants to\r\n                    develop their skills in the game to a competitive level. Qualified coaches impart training at all\r\n                    levels.\r\n\r\n                    This program is a part of National Junior Development Program (NJDP) which is the official coaching\r\n                    system adopted by Squash Racket Federation of India (SRFI). The program participants are divided\r\n                    into three categories i.e. Beginners - Talented – Elite\r\n\r\n                    Participants need to put in 4 to 6 hours a week. The Elite squad would obviously need to put in\r\n                    additional hours.\r\n\r\n                    More than 600 children have trained at the Club under our professional coaches. We are perhaps the\r\n                    only club that gives memberships to children and in their names. The only condition is that they\r\n                    have to be interested in squash. This is with an eye to the future.</h4>                                                                '),
(4, 'READ', '16th MArch 2020', '<h4>To cradle future squash the Club started a National Junior Development Program in November 2002 to\r\n                    popularize the game amongst school children and create an environment for the participants to\r\n                    develop their skills in the game to a competitive level. Qualified coaches impart training at all\r\n                    levels.\r\n\r\n                    This program is a part of National Junior Development Program (NJDP) which is the official coaching\r\n                    system adopted by Squash Racket Federation of India (SRFI). The program participants are divided\r\n                    into three categories i.e. Beginners - Talented – Elite\r\n\r\n                    Participants need to put in 4 to 6 hours a week. The Elite squad would obviously need to put in\r\n                    additional hours.\r\n\r\n                    More than 600 children have trained at the Club under our professional coaches. We are perhaps the\r\n                    only club that gives memberships to children and in their names. The only condition is that they\r\n                    have to be interested in squash. This is with an eye to the future. The idea is to groom the next\r\n                    generation of squash enthusiasts</h4>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `Id` int(10) NOT NULL,
  `text` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `simage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`Id`, `text`, `description`, `simage`) VALUES
(2, 'LOrem', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Screenshot (59).png'),
(3, 'LOREM', '                                IU', 'Screenshot (37).png'),
(4, 'RED', '                                LOREM IPSUM<br>', 'Screenshot (97).png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_squad`
--

CREATE TABLE `tbl_squad` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_squad`
--

INSERT INTO `tbl_squad` (`id`, `name`, `description`, `image`) VALUES
(2, 'STATE DEVELOPMENT ', '                                                                                                                        <strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of&nbsp;                                                                ', 'Screenshot (14).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_coach`
--
ALTER TABLE `tbl_coach`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_commitee`
--
ALTER TABLE `tbl_commitee`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_comms`
--
ALTER TABLE `tbl_comms`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_squad`
--
ALTER TABLE `tbl_squad`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_coach`
--
ALTER TABLE `tbl_coach`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_commitee`
--
ALTER TABLE `tbl_commitee`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_comms`
--
ALTER TABLE `tbl_comms`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_squad`
--
ALTER TABLE `tbl_squad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
