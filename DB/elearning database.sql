-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 02:39 PM
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
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `admin_full_name` varchar(255) NOT NULL,
  `admin_phone_no` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_full_name`, `admin_phone_no`, `admin_email`, `admin_password`, `admin_photo`) VALUES
(1, 'Admin', '0123456789', 'admin@gmail.com', '11111111', '');

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `assign_id` int(255) NOT NULL,
  `class_id` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `submitted_assignment` varchar(255) NOT NULL,
  `submitted_exam` varchar(255) NOT NULL,
  `quiz` varchar(255) NOT NULL,
  `assignment` varchar(255) NOT NULL,
  `exam` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`assign_id`, `class_id`, `student_id`, `submitted_assignment`, `submitted_exam`, `quiz`, `assignment`, `exam`, `total`) VALUES
(1, 2, 2, 'PROJECT DESIGN PROPOSAL FORMAT.pdf', 'PROJECT DESIGN PROPOSAL FORMAT.pdf', '  20', '  25', ' 50', '95'),
(3, 4, 3, '', '', ' 22', ' ', ' ', '22'),
(4, 4, 2, '', '', ' 30', ' 23', ' 40', '93'),
(5, 2, 4, 'Assignment 1 (2022).pdf', '', '  40', '  ', '  ', '40'),
(6, 4, 6, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(255) NOT NULL,
  `class_title` varchar(255) NOT NULL,
  `class_desc` varchar(255) NOT NULL,
  `teacher_id` int(255) NOT NULL,
  `material` varchar(255) NOT NULL,
  `assignment` varchar(255) NOT NULL,
  `exam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_title`, `class_desc`, `teacher_id`, `material`, `assignment`, `exam`) VALUES
(2, 'Introduction to Hardware Programming', 'This course mainly focuses on Hardware programming and Assembly', 5, 'PROJECT DESIGN PROPOSAL FORMAT.pdf', 'PROJECT DESIGN PROPOSAL FORMAT.pdf', 'PROJECT DESIGN PROPOSAL FORMAT.pdf'),
(4, 'AI', 'Artificial Intellegence', 5, 'Feed.mp4', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(255) NOT NULL,
  `student_full_name` varchar(255) NOT NULL,
  `student_phone_no` varchar(255) NOT NULL,
  `student_gender` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `student_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_full_name`, `student_phone_no`, `student_gender`, `student_email`, `student_password`, `student_photo`) VALUES
(2, ' Fenan Bekele', ' 1234567897', 'male', 'fen@gmail.com', '1bbd886460827015e5d605ed44252251', '291701015_2836884163123907_85073817969997439_n.jpg'),
(3, 'Gedion Mekbib', '1234567897', 'male', 'gedionmek@gmail.com', '1bbd886460827015e5d605ed44252251', ''),
(4, 'Solomon Terefe', '1234567897', 'male', 'sol@gmail.com', '1bbd886460827015e5d605ed44252251', ''),
(5, 'Kebede Abebe', '1234567897', '', 'keb@gmail.com', '1bbd886460827015e5d605ed44252251', ''),
(6, 'Abebe Keb', '1234567897', 'male', 'abe@gmail.com', '1bbd886460827015e5d605ed44252251', ''),
(7, 'Almaz', '1234567897', 'female', 'almaz@gmail.com', '1bbd886460827015e5d605ed44252251', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(255) NOT NULL,
  `teacher_full_name` varchar(255) NOT NULL,
  `teacher_phone_no` varchar(255) NOT NULL,
  `teacher_gender` varchar(255) NOT NULL,
  `teacher_email` varchar(255) NOT NULL,
  `teacher_password` varchar(255) NOT NULL,
  `teacher_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_full_name`, `teacher_phone_no`, `teacher_gender`, `teacher_email`, `teacher_password`, `teacher_photo`) VALUES
(1, 'Naol Bekele', '0912345678', 'male', 'naol@gmail.com', '1bbd886460827015e5d605ed44252251', ''),
(2, 'Angerashe', '0123456789', 'female', 'ang@gmail.com', '1bbd886460827015e5d605ed44252251', ''),
(5, '    Gedion Teacher', '    1234567891', 'male', 'gedi@gmail.com', '1bbd886460827015e5d605ed44252251', 'Screenshot (31).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `assign_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
