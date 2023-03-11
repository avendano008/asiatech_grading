-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 11:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asiatech_grading`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(250) NOT NULL,
  `f_name` varchar(500) DEFAULT NULL,
  `l_name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `staff_id` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `f_name`, `l_name`, `email`, `password`, `status`, `staff_id`) VALUES
(1, 'f_admin', 'l_admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'active', '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(250) NOT NULL,
  `name` varchar(500) NOT NULL,
  `loc` varchar(500) NOT NULL,
  `upload_date` varchar(500) NOT NULL,
  `user_id` varchar(500) NOT NULL,
  `user_type` varchar(500) NOT NULL,
  `plain_text` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registrar`
--

CREATE TABLE `registrar` (
  `id` int(250) NOT NULL,
  `f_name` varchar(500) DEFAULT NULL,
  `l_name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(250) NOT NULL,
  `name` varchar(500) NOT NULL,
  `school_year_from` varchar(500) NOT NULL,
  `school_year_to` varchar(500) NOT NULL,
  `region` varchar(500) NOT NULL,
  `division` varchar(500) NOT NULL,
  `school_name` varchar(500) NOT NULL,
  `school_id` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semester_subject`
--

CREATE TABLE `semester_subject` (
  `id` int(250) NOT NULL,
  `subject_id` varchar(500) NOT NULL,
  `semester_id` varchar(500) NOT NULL,
  `teacher_id` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(250) NOT NULL,
  `images_id` varchar(500) NOT NULL,
  `f_name` varchar(500) DEFAULT NULL,
  `m_name` varchar(500) NOT NULL,
  `l_name` varchar(500) DEFAULT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL,
  `student_number` varchar(500) NOT NULL,
  `semester_id` varchar(500) NOT NULL,
  `grade` varchar(500) NOT NULL,
  `strand` varchar(500) NOT NULL,
  `section` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `b_day` varchar(500) DEFAULT NULL,
  `age` varchar(500) DEFAULT NULL,
  `cp_1` varchar(500) DEFAULT NULL,
  `cp_2` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `region` varchar(500) DEFAULT NULL,
  `province` varchar(500) DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL,
  `brgy` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_record`
--

CREATE TABLE `student_record` (
  `id` int(250) NOT NULL,
  `student_id` varchar(500) DEFAULT NULL,
  `semester_subject_id` varchar(500) DEFAULT NULL,
  `quarter` varchar(500) DEFAULT NULL,
  `ww1` varchar(500) DEFAULT NULL,
  `ww2` varchar(500) DEFAULT NULL,
  `ww3` varchar(500) DEFAULT NULL,
  `ww4` varchar(500) DEFAULT NULL,
  `ww5` varchar(500) DEFAULT NULL,
  `ww6` varchar(500) DEFAULT NULL,
  `ww7` varchar(500) DEFAULT NULL,
  `ww8` varchar(500) DEFAULT NULL,
  `ww9` varchar(500) DEFAULT NULL,
  `ww10` varchar(500) DEFAULT NULL,
  `ww_total` varchar(500) DEFAULT NULL,
  `pt1` varchar(500) DEFAULT NULL,
  `pt2` varchar(500) DEFAULT NULL,
  `pt3` varchar(500) DEFAULT NULL,
  `pt4` varchar(500) DEFAULT NULL,
  `pt5` varchar(500) DEFAULT NULL,
  `pt6` varchar(500) DEFAULT NULL,
  `pt7` varchar(500) DEFAULT NULL,
  `pt8` varchar(500) DEFAULT NULL,
  `pt9` varchar(500) DEFAULT NULL,
  `pt10` varchar(500) DEFAULT NULL,
  `pt_total` varchar(500) DEFAULT NULL,
  `qa_assessment` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(250) NOT NULL,
  `name` varchar(500) NOT NULL,
  `strand` varchar(500) NOT NULL,
  `unit` varchar(500) NOT NULL,
  `track` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(250) NOT NULL,
  `images_id` varchar(500) NOT NULL,
  `f_name` varchar(500) DEFAULT NULL,
  `l_name` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `semester_id` varchar(500) NOT NULL,
  `department` varchar(500) NOT NULL,
  `department_type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrar`
--
ALTER TABLE `registrar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester_subject`
--
ALTER TABLE `semester_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_record`
--
ALTER TABLE `student_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registrar`
--
ALTER TABLE `registrar`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semester_subject`
--
ALTER TABLE `semester_subject`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_record`
--
ALTER TABLE `student_record`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
