-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 22, 2020 at 06:24 AM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suivi`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` varchar(200) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `courseId` int(45) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `deleted` char(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `disciplineMarks`
--

CREATE TABLE `disciplineMarks` (
  `id` varchar(200) NOT NULL,
  `created_on` date DEFAULT NULL,
  `deleted` char(45) DEFAULT NULL,
  `student_id` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` varchar(200) NOT NULL,
  `name` varchar(45) NOT NULL,
  `created_on` date NOT NULL,
  `deleted` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` varchar(200) NOT NULL,
  `course_id` varchar(200) DEFAULT NULL,
  `points` varchar(45) NOT NULL,
  `created_on` date DEFAULT NULL,
  `deleted` char(45) DEFAULT NULL,
  `student_id` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` varchar(200) NOT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `deleted` char(45) DEFAULT NULL,
  `parent_id` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `phone` char(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `deleted` char(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `deleted` char(45) DEFAULT NULL,
  `student_id` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` varchar(200) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `phone` char(45) DEFAULT NULL,
  `staff_role_id` varchar(200) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `deleted` char(45) DEFAULT NULL,
  `staff_no` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffrole`
--

CREATE TABLE `staffrole` (
  `id` varchar(200) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `deleted` char(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(200) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `parent_id` varchar(200) DEFAULT NULL,
  `level_id` varchar(200) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `deleted` char(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(200) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `user_id` varchar(200) NOT NULL,
  `user_type_id` varchar(200) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `created_on` date DEFAULT NULL,
  `deleted` char(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_id`, `user_type_id`, `status`, `created_on`, `deleted`) VALUES
('e9b25b2d-a313-453f-8dfb-20c4672b8ebb', 'admin', 'e6e061838856bf47e1de730719fb2609', '', 'Administrator', 'Active', '2020-09-21', '');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `id` varchar(200) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `deleted` char(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `name`, `created_on`, `deleted`) VALUES
('115a3f3c-e09c-4f8a-827f-cf909ba73a11', 'parent', '2020-09-22', 'no'),
('4acad40b-2b2e-415b-9608-9fc5a5f50488', 'staff', '2020-09-22', 'no'),
('caaf2f1e-139c-4f42-b303-28fc3d3bffe0', 'student', '2020-09-22', 'no'),
('d6cff493-7684-4799-872f-b6e0bc3e3373', 'teacher', '2020-09-22', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disciplineMarks`
--
ALTER TABLE `disciplineMarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffrole`
--
ALTER TABLE `staffrole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
