-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 11:15 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collage`
--

-- --------------------------------------------------------

--
-- Table structure for table `internal1`
--

CREATE TABLE `internal1` (
  `usn` varchar(30) NOT NULL,
  `sub1` varchar(20) NOT NULL,
  `sub2` varchar(20) NOT NULL,
  `sub3` varchar(20) NOT NULL,
  `sub4` varchar(20) NOT NULL,
  `sub5` varchar(20) NOT NULL,
  `sub6` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internal1`
--

INSERT INTO `internal1` (`usn`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`) VALUES
('1db17cs106', '28', '28', '27', '27', '28', '30');

-- --------------------------------------------------------

--
-- Table structure for table `internal2`
--

CREATE TABLE `internal2` (
  `usn` varchar(30) NOT NULL,
  `sub1` varchar(20) NOT NULL,
  `sub2` varchar(20) NOT NULL,
  `sub3` varchar(20) NOT NULL,
  `sub4` varchar(20) NOT NULL,
  `sub5` varchar(20) NOT NULL,
  `sub6` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internal2`
--

INSERT INTO `internal2` (`usn`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`) VALUES
('1db17cs106', '28', '25', '26', '30', '24', '28');

-- --------------------------------------------------------

--
-- Table structure for table `internal3`
--

CREATE TABLE `internal3` (
  `usn` varchar(30) NOT NULL,
  `sub1` varchar(20) NOT NULL,
  `sub2` varchar(20) NOT NULL,
  `sub3` varchar(20) NOT NULL,
  `sub4` varchar(20) NOT NULL,
  `sub5` varchar(20) NOT NULL,
  `sub6` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internal3`
--

INSERT INTO `internal3` (`usn`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`) VALUES
('1db17cs106', '28', '27', '27', '23', '27', '28');

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `mid` varchar(20) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `sec` varchar(10) NOT NULL,
  `sem` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `psw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`mid`, `mname`, `branch`, `sec`, `sem`, `year`, `psw`) VALUES
('1db17cs24', 'Bhasker', 'CS', 'B', 5, 3, 'bhasker');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `usn` varchar(30) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `sem` int(11) NOT NULL,
  `sec` varchar(10) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `psw` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `usn`, `batch`, `year`, `branch`, `sem`, `sec`, `phone`, `email`, `psw`, `sex`) VALUES
(1, 'Rajesh', '1db17cs106', '17', 3, 'CS', 5, 'B', '9148002717', 'rajesh@gmail.com', 'rajesh', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `usn` varchar(30) NOT NULL,
  `sub1` varchar(20) NOT NULL,
  `sub2` varchar(20) NOT NULL,
  `sub3` varchar(20) NOT NULL,
  `sub4` varchar(20) NOT NULL,
  `sub5` varchar(20) NOT NULL,
  `sub6` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`usn`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`) VALUES
('1db17cs106', '17CS51', '17CS52', '17CS53', '17CS54', '17CS55', '17CS56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
