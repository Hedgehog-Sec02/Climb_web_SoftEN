-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 11:26 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `climbblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(5) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `personID` varchar(20) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `birthDate` date NOT NULL,
  `personImage` text,
  `qNO1` int(11) NOT NULL,
  `qNO2` int(11) NOT NULL,
  `qNO3` int(11) NOT NULL,
  `question1` varchar(50) NOT NULL,
  `question2` varchar(50) NOT NULL,
  `question3` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `userPoint` int(11) NOT NULL,
  `lname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `fname`, `personID`, `userName`, `password`, `birthDate`, `personImage`, `qNO1`, `qNO2`, `qNO3`, `question1`, `question2`, `question3`, `userEmail`, `status`, `userPoint`, `lname`) VALUES
(1, 'atisit thongbai', '1103702281441', 'atisit', '1111111111111111', '1997-03-14', '', 1, 2, 3, 'good', 'good', 'good', 'atisit_thongbai@kkumail.com', 'user', 100, ''),
(2, 'Atisit thongbai', '1103702281441', 'autherAz-_4555555555', 'autherAz-_4555555555', '1997-03-14', 'Username_Valid.png', 1, 4, 7, 'asdas', 'asdasdas', 'dassad', 'atisits_thongbai@kkumail.com', 'WAIT', 0, ''),
(3, '', '', 'artit123', '', '0000-00-00', NULL, 0, 0, 0, '', '', '', '', '', 0, ''),
(4, '', 'artit123464565615656', 'artit123464565615656', 'artit123464565615656', '1899-12-31', '11.jpg', 1, 4, 7, 'DFGDFGDFGDF', 'GDFGDFG', 'DFGDFGA', 'atisit_thongbDai@kkumail.com', 'WAIT', 0, 'thongbai'),
(5, 'Atisit', '1103702281441', 'insertResult15615156', 'insertResult15615156', '1997-03-14', '20.jpg', 1, 4, 7, 'ffdgdfgdf', 'gdfgdfgfdfg', 'dfgfdfdgdfga', 'atisit_thongbai@kkumail.comd', 'WAIT', 0, 'thongbai'),
(6, 'Atisit', '1103702281441', 'atisitA5555555555555', 'atisitA5555555555555', '1997-03-14', '21.jpg', 1, 4, 7, 'DFGDFGDFD', 'DFGDFGFDG', 'DFGDFGFDDFG', 'atisit_thongdbai@kkumail.com', 'WAIT', 0, 'thongbai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
