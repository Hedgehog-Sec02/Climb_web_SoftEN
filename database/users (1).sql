-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 01:09 PM
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
  `lastUpdate` datetime NOT NULL,
  `loginStatus` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `fname`, `personID`, `userName`, `password`, `birthDate`, `personImage`, `qNO1`, `qNO2`, `qNO3`, `question1`, `question2`, `question3`, `userEmail`, `status`, `userPoint`, `lastUpdate`, `loginStatus`) VALUES
(1, 'atisit', '1103702281441', 'atisit', '1111111111111', '1997-03-14', '', 1, 2, 3, 'good', 'good', 'good', 'atisit_thongbai@kkumail.com', 'user', 100, '0000-00-00 00:00:00', 0),
(2, 'Atisit thongbai', '1103702281441', 'autherAz-_4555555555', 'autherAz-_4555555555', '1997-03-14', 'Username_Valid.png', 1, 4, 7, 'asdas', 'asdasdas', 'dassad', 'atisits_thongbai@kkumail.com', 'WAIT', 0, '0000-00-00 00:00:00', 0),
(3, '', '', 'artit123', '', '0000-00-00', NULL, 0, 0, 0, '', '', '', '', '', 0, '0000-00-00 00:00:00', 0),
(4, '', 'artit123464565615656', 'artit123464565615656', 'artit123464565615656', '1899-12-31', '11.jpg', 1, 4, 7, 'DFGDFGDFGDF', 'GDFGDFG', 'DFGDFGA', 'atisit_thongbDai@kkumail.com', 'WAIT', 0, '0000-00-00 00:00:00', 0),
(5, 'Atisit', '1103702281441', 'insertResult15615156', 'insertResult15615156', '1997-03-14', '20.jpg', 1, 4, 7, 'ffdgdfgdf', 'gdfgdfgfdfg', 'dfgfdfdgdfga', 'atisit_thongbai@kkumail.comd', 'WAIT', 0, '0000-00-00 00:00:00', 0),
(6, 'Atisit', '1103702281441', 'auther', 'auther', '1997-03-14', '21.jpg', 1, 4, 7, 'DFGDFGDFD', 'DFGDFGFDG', 'DFGDFGFDDFG', 'atisit_thongdbai@kkumail.com', 'user', 0, '2018-04-15 14:00:25', 0),
(7, 'ddfgfdgfdgdfgdfgdgA5', '1103702281446', 'ddfgfdgfdgdfgdfgdgA5', 'ddfgfdgfdgdfgdfgdgA5', '0000-00-00', 'images.jpg', 1, 4, 7, 'ddfgfdgfdgdfgdfgdgA5', 'ddfgfdgfdgdfgdfgdgA5', 'ddfgfdgfdgdfgdfgdgA5', 'atisit_thdongbai@kkumail.com', 'WAIT', 0, '0000-00-00 00:00:00', 0),
(8, 'fdgfdgfdgfdgfdgDFFD5', '103615156155615', 'fdgfdgfdgfdgfdgDFFD5', 'fdgfdgfdgfdgfdgDFFD5', '0000-00-00', 'Hot-Sun.jpg', 1, 4, 7, 'fdgfdgfdgfdgfdgDFFD5', 'fdgfdgfdgfdgfdgDFFD5', 'fdgfdgfdgfdgfdgDFFD5', 'atisit_thodngbai@kkumail.com', 'WAIT', 0, '0000-00-00 00:00:00', 0),
(9, 'ddffdgfdgfdgdfgDF55', '', '', '', '0000-00-00', '', 1, 4, 7, 'ddffdgfdgfdgdfgDF55', 'ddffdgfdgfdgdfgDF55', 'ddffdgfdgfdgdfgDF55', 'atisit_thoDngbai@kkumail.com', 'WAIT', 0, '2018-04-15 14:01:20', 0),
(10, 'ddffdgfdgfdgdfgDF55', '1103702281448', 'ddffdgfdgfdgdfgDF55', 'ddffdgfdgfdgdfgDF55', '0000-00-00', 'images.jpg', 1, 4, 7, 'ddffdgfdgfdgdfgDF55', 'ddffdgfdgfdgdfgDF55', 'ddffdgfdgfdgdfgDF55', 'atisit_thodngbai@kkumail.com', 'WAIT', 0, '0000-00-00 00:00:00', 0),
(14, 'อาทิตย์ ประคำ', '1469900387907', 'artit01', 'aB_1111111111111', '0000-00-00', 'atisit_iden.jpg', 1, 4, 7, 'หมา', 'แดง', 'spiderman', 'artit1150@hotmail.com', 'WAIT', 0, '0000-00-00 00:00:00', 0);

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
  MODIFY `userID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
