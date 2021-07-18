-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 03:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(100) NOT NULL,
  `answer` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`) VALUES
(1, 'Hypertext preprocessor', 1),
(2, 'Personal Home Page', 1),
(3, 'Pretext Hypertext Processor', 1),
(4, 'Preprocessor Home Page', 1),
(5, '.html', 2),
(6, '.css', 2),
(7, '.php', 2),
(8, '.cpp', 2),
(9, '\\r', 3),
(10, '\\n', 3),
(11, '\\t', 3),
(12, '/n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(100) NOT NULL,
  `question` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `ans_id`) VALUES
(1, 'what is the full form of php?', 1),
(2, 'PHP files have a default file extension of ?', 7),
(3, 'Which of the below symbols is a newline character?', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(250) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `totalques` int(250) DEFAULT NULL,
  `answerscorrect` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `totalques`, `answerscorrect`) VALUES
(1, 'maya32@gmail.com', 3, 2),
(2, 'maya32@gmail.com', 3, 3),
(3, 'maya32@gmail.com', 3, 3),
(4, 'maya32@gmail.com', 3, 3),
(5, 'maya32@gmail.com', 3, 3),
(6, 'maya32@gmail.com', 3, 3),
(7, 'maya32@gmail.com', 3, 3),
(8, 'maya32@gmail.com', 3, 3),
(9, 'maya32@gmail.com', 3, 3),
(10, 'maya32@gmail.com', 3, 2),
(11, 'maya32@gmail.com', 3, 2),
(12, 'maya32@gmail.com', 3, 2),
(13, 'maya32@gmail.com', 3, 2),
(14, 'maya32@gmail.com', 3, 2),
(15, 'maya32@gmail.com', 3, 2),
(16, 'maya32@gmail.com', 3, 2),
(17, 'kjkj@gmail.com', 3, 3),
(18, 'maya32@gmail.com', 3, 3),
(19, 'maya32@gmail.com', 3, 3),
(20, 'maya32@gmail.com', 3, 3),
(21, 'maya32@gmail.com', 3, 3),
(22, 'maya32@gmail.com', 3, 3),
(23, 'maya32@gmail.com', 3, 2),
(24, 'maya32@gmail.com', 3, 0),
(25, 'maya32@gmail.com', 3, 0),
(26, 'maya32@gmail.com', 3, 3),
(27, 'maya32@gmail.com', 3, 3),
(28, 'maya32@gmail.com', 3, 3),
(29, 'maya32@gmail.com', 3, 3),
(30, 'maya32@gmail.com', 3, 3),
(31, 'maya32@gmail.com', 3, 3),
(32, 'maya32@gmail.com', 3, 1),
(33, 'maya32@gmail.com', 3, 1),
(34, 'maya32@gmail.com', 3, 1),
(35, 'maya32@gmail.com', 3, 1),
(36, 'maya32@gmail.com', 3, 1),
(37, 'maya32@gmail.com', 3, 1),
(38, 'maya32@gmail.com', 3, 1),
(39, 'maya32@gmail.com', 3, 0),
(40, 'maya32@gmail.com', 3, 0),
(41, 'maya32@gmail.com', 3, 1),
(42, 'maya32@gmail.com', 3, 1),
(43, 'maya32@gmail.com', 3, 3),
(44, 'maya32@gmail.com', 3, 3),
(45, 'maya32@gmail.com', 3, 0),
(46, 'maya32@gmail.com', 3, 0),
(47, 'maya32@gmail.com', 3, 0),
(48, 'maya32@gmail.com', 3, 0),
(49, 'maya32@gmail.com', 3, 0),
(50, 'maya32@gmail.com', 3, 2),
(51, 'maya32@gmail.com', 3, 2),
(52, 'maya32@gmail.com', 3, 0),
(53, 'maya32@gmail.com', 3, 3),
(54, 'maya32@gmail.com', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
