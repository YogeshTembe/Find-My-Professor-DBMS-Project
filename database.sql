-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 21, 2020 at 05:24 PM
-- Server version: 8.0.16
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty number` int(6) NOT NULL,
  `first name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `middle name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `last name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `floor number` int(1) NOT NULL,
  `room number` int(3) NOT NULL,
  PRIMARY KEY (`faculty number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty number`, `first name`, `middle name`, `last name`, `floor number`, `room number`) VALUES
(125001, 'shreejan', 'jay', 'singh', 2, 208),
(125002, 'nishita', 'raghavan', 'kant', 2, 220);

-- --------------------------------------------------------

--
-- Table structure for table `facultyinfo`
--

DROP TABLE IF EXISTS `facultyinfo`;
CREATE TABLE IF NOT EXISTS `facultyinfo` (
  `faculty number` int(6) NOT NULL,
  `phone number` varchar(10) DEFAULT NULL,
  `email-id` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `domain of expertise` text NOT NULL,
  KEY `faculty number` (`faculty number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `facultyinfo`
--

INSERT INTO `facultyinfo` (`faculty number`, `phone number`, `email-id`, `domain of expertise`) VALUES
(125001, '55555', 'ggggg ', 'solar'),
(125001, '1122', 'sana', 'domain'),
(125002, '3434343434', '2011.nishita5002@gmail.com', 'M.Tech VLSI\r\n'),
(125002, NULL, 'nishitakant@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `facultytimetable`
--

DROP TABLE IF EXISTS `facultytimetable`;
CREATE TABLE IF NOT EXISTS `facultytimetable` (
  `faculty number` int(6) NOT NULL,
  `slot` int(1) NOT NULL,
  `day` varchar(9) NOT NULL,
  `first hour` int(3) NOT NULL,
  `second hour` int(3) NOT NULL,
  `third hour` int(3) NOT NULL,
  `fourth hour` int(3) NOT NULL,
  `fifth hour` int(3) NOT NULL,
  `sixth hour` int(3) NOT NULL,
  PRIMARY KEY (`faculty number`,`slot`,`day`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `facultytimetable`
--

INSERT INTO `facultytimetable` (`faculty number`, `slot`, `day`, `first hour`, `second hour`, `third hour`, `fourth hour`, `fifth hour`, `sixth hour`) VALUES
(125001, 2, 'Friday', 212, 202, 403, 219, 212, 208),
(125001, 2, 'Monday', 209, 211, 211, 219, 219, 219),
(125001, 2, 'Saturday', 302, 403, 212, 219, 219, 219),
(125001, 2, 'Thursday', 302, 212, 218, 208, 219, 219),
(125001, 2, 'Tuesday', 208, 205, 209, 209, 202, 203),
(125001, 2, 'Wednesday', 302, 403, 212, 208, 219, 219),
(125002, 1, 'Friday', 204, 207, 225, 201, 204, 203),
(125002, 1, 'Monday', 220, 202, 201, 302, 305, 204),
(125002, 1, 'Saturday', 203, 204, 213, 220, 403, 220),
(125002, 1, 'Thursday', 207, 208, 220, 220, 220, 220),
(125002, 1, 'Tuesday', 302, 220, 220, 203, 204, 213),
(125002, 1, 'Wednesday', 211, 224, 220, 220, 208, 213);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` int(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `account` enum('student','faculty') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `account`) VALUES
(125001, 'shreejan', 'faculty'),
(125002, 'nishita', 'faculty'),
(175020, 'Amit', 'student'),
(175021, 'harshita', 'student'),
(175022, 'kamini', 'student'),
(175023, 'kader', 'student'),
(175024, 'unka', 'student'),
(175025, 'tushar', 'student'),
(175026, 'khushi', 'student'),
(175027, 'yash', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student number` int(6) NOT NULL,
  `first name` varchar(20) NOT NULL,
  `middle name` varchar(20) NOT NULL,
  `last name` varchar(20) NOT NULL,
  `branch` varchar(4) NOT NULL,
  `semester` int(11) NOT NULL,
  `faculty number` int(6) NOT NULL,
  PRIMARY KEY (`student number`),
  KEY `faculty number` (`faculty number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student number`, `first name`, `middle name`, `last name`, `branch`, `semester`, `faculty number`) VALUES
(175020, 'Ami', 'san', 'sonavane', 'EXTC', 4, 125001),
(175021, 'harshita', 'ram', 'rasike', 'ETRX', 3, 125001),
(175022, 'kamini', 'pushpa', 'teske', 'EXTC', 6, 125001),
(175023, 'kader', 'sumit', 'keskar', 'ETRX', 3, 125001),
(175024, 'unkar', 'hanumant', 'shirke', 'COMP', 2, 125002),
(175025, 'tushar', 'kanvar', 'rathod', 'ETRX', 6, 125002),
(175026, 'khushi', 'samir', 'singh', 'COMP', 2, 125002),
(175027, 'yash', 'wasnar', 'kanchi', 'EXTC', 4, 125002);

-- --------------------------------------------------------

--
-- Table structure for table `studentfaculty`
--

DROP TABLE IF EXISTS `studentfaculty`;
CREATE TABLE IF NOT EXISTS `studentfaculty` (
  `faculty number` int(6) NOT NULL,
  `student number` int(6) NOT NULL,
  KEY `faculty number` (`faculty number`),
  KEY `student number` (`student number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `studentfaculty`
--

INSERT INTO `studentfaculty` (`faculty number`, `student number`) VALUES
(125001, 175020),
(125001, 175021),
(125001, 175022),
(125001, 175023),
(125002, 175024),
(125002, 175025),
(125002, 175026),
(125002, 175027);

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

DROP TABLE IF EXISTS `studentinfo`;
CREATE TABLE IF NOT EXISTS `studentinfo` (
  `student number` int(6) NOT NULL,
  `phone number` varchar(10) NOT NULL,
  `email-id` varchar(35) NOT NULL,
  KEY `student number` (`student number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`student number`, `phone number`, `email-id`) VALUES
(175020, '77777', '2017.amr30@gmail.com'),
(175020, '1111111111', ''),
(175021, '111222222', '2017.harshita5021@gmail.com'),
(175022, '1919191919', 'kamini89@gmail.com'),
(175023, '2323232323', 'kaderxo@gmail.com'),
(175024, '8888888888', 'unkar5024@gmail.com'),
(175024, '', 'unkar23@gmail.com'),
(175025, '6767676767', 'tushar5025@gmail.com'),
(175026, '4545454545', 'khushi5026@gmail.com'),
(175027, '3333333333', 'yashpp@gmail.com'),
(175027, '6666666666', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `facultyinfo`
--
ALTER TABLE `facultyinfo`
  ADD CONSTRAINT `facultyinfo_ibfk_1` FOREIGN KEY (`faculty number`) REFERENCES `faculty` (`faculty number`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `facultytimetable`
--
ALTER TABLE `facultytimetable`
  ADD CONSTRAINT `facultytimetable_ibfk_1` FOREIGN KEY (`faculty number`) REFERENCES `faculty` (`faculty number`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`faculty number`) REFERENCES `faculty` (`faculty number`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `studentfaculty`
--
ALTER TABLE `studentfaculty`
  ADD CONSTRAINT `studentfaculty_ibfk_1` FOREIGN KEY (`faculty number`) REFERENCES `faculty` (`faculty number`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `studentfaculty_ibfk_2` FOREIGN KEY (`student number`) REFERENCES `student` (`student number`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD CONSTRAINT `studentinfo_ibfk_1` FOREIGN KEY (`student number`) REFERENCES `student` (`student number`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
