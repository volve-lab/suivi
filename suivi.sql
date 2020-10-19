-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2020 at 06:18 AM
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

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `courseId`, `created_on`, `deleted`) VALUES
('0461bb7c-6596-4699-96c8-51016cb83719', 'Math', 200, '2020-10-10', 'no'),
('de145ae6-33f6-460d-a9b3-535321f2cef0', 'English', 201, '2020-10-10', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `disciplineMarks`
--

CREATE TABLE `disciplineMarks` (
  `id` varchar(200) NOT NULL,
  `marks` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_on` date DEFAULT NULL,
  `deleted` char(45) DEFAULT NULL,
  `student_id` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disciplineMarks`
--

INSERT INTO `disciplineMarks` (`id`, `marks`, `comment`, `created_on`, `deleted`, `student_id`) VALUES
('15e9b0b9-ce15-4efe-8e35-46d2324cf1b9', 10, ' drink beer', '2020-10-14', 'no', 'f70eb22a-9d06-408e-9107-cad9f25da765'),
('2e1615e8-9051-42a3-9fe2-a030916233f0', 5, ' fsd', '2020-10-14', 'no', 'f70eb22a-9d06-408e-9107-cad9f25da765'),
('50a7d596-9658-47c2-84d1-e20dea18cfc0', 5, ' Going out without permission', '2020-10-14', 'no', '70eb22a-9d06-408e-9107-cad9f25da765'),
('bac31fc2-06aa-4ca9-8d48-b26d21e526f0', 4, ' out of class', '2020-10-14', 'no', 'f70eb22a-9d06-408e-9107-cad9f25da765');

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

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `name`, `created_on`, `deleted`) VALUES
('708adfa0-dc0c-4c7c-9c6e-f421d3b9a1fc', 'level 1', '2020-09-25', 'no'),
('132f2b0e-933f-424c-b948-5ae8b2ed12be', 'level 2', '2020-09-25', 'no'),
('e02880cc-458c-4599-8fa4-8153c605c5ee', 'level 3', '2020-09-25', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` varchar(200) NOT NULL,
  `report_id` varchar(200) NOT NULL,
  `quiz` int(11) NOT NULL,
  `exam` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `deleted` varchar(10) NOT NULL
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
  `id` varchar(200) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` char(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `deleted` char(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `firstname`, `lastname`, `gender`, `phone`, `email`, `created_on`, `deleted`) VALUES
('cbe5dc87-6795-41f2-a3bf-8b0d074d74a1', 'Sam', 'Umusaza', 'Male', '0788211578', 'sam@gmail.com', '2020-10-10', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_on` date DEFAULT NULL,
  `deleted` char(45) DEFAULT NULL,
  `student_id` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `description`, `start_date`, `end_date`, `start_time`, `end_time`, `created_on`, `deleted`, `student_id`) VALUES
('3b3e2fe1-721c-4e5f-b17f-b03d83d6803b', ' sickness', '2020-10-11', '2020-10-17', '00:00:00', '00:00:00', '2020-10-11', 'no', 'f70eb22a-9d06-408e-9107-cad9f25da765');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` varchar(200) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `deleted` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` varchar(200) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` char(45) DEFAULT NULL,
  `staff_role_id` varchar(200) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `deleted` char(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `firstname`, `lastname`, `gender`, `phone`, `staff_role_id`, `created_on`, `deleted`) VALUES
('76487962-b0f2-4102-9de2-9316fbfdec35', 'Ntwari', 'Yvan', 'Male', '0788211578', '2374fd1e-ed4b-4c33-8405-9aa423a1d6a2', '2020-10-10', 'no');

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

--
-- Dumping data for table `staffrole`
--

INSERT INTO `staffrole` (`id`, `name`, `created_on`, `deleted`) VALUES
('2374fd1e-ed4b-4c33-8405-9aa423a1d6a2', 'teacher', '2020-10-10', 'no'),
('76b86e9e-6e6a-4076-9d1d-4cd6bf01d2bc', 'patron', '2020-10-10', 'no'),
('7903d85c-8583-4b88-8236-50ae85df9d3e', 'matron', '2020-10-10', 'no'),
('92bb503c-b3f5-49cd-968f-11237e1feeb0', 'discipline master', '2020-10-10', 'no'),
('b2b4bd78-24ec-49e9-a39a-bfcc78c6f0d9', 'dean of study', '2020-10-10', 'no');

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

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `lastname`, `gender`, `parent_id`, `level_id`, `created_on`, `deleted`) VALUES
('f70eb22a-9d06-408e-9107-cad9f25da765', 'Blaise', 'Irakoze', 'Male', 'cbe5dc87-6795-41f2-a3bf-8b0d074d74a1', '132f2b0e-933f-424c-b948-5ae8b2ed12be', '2020-10-10', 'no');

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
('75956970-672e-4fd4-ae7a-ff9d576956b9', 'yvan', '', '76487962-b0f2-4102-9de2-9316fbfdec35', 'caaf2f1e-139c-4f42-b303-28fc3d3bffe0', 'Active', '2020-10-10', 'no'),
('9b5fbbc1-b52f-44c5-bccd-c2ca19498abc', '', '', '8fc55f81-749b-4451-b5b2-2477a16c8cd6', '', 'Active', '2020-10-11', 'no'),
('b00048fd-22a7-4f6c-86f4-27ba0b8afe9f', 'sam', '', 'cbe5dc87-6795-41f2-a3bf-8b0d074d74a1', '115a3f3c-e09c-4f8a-827f-cf909ba73a11', 'Active', '2020-10-10', 'no'),
('bee53e8a-f3b2-41db-9cf2-8074dfdd6901', '', '', '3b3e2fe1-721c-4e5f-b17f-b03d83d6803b', '', 'Active', '2020-10-11', 'no'),
('d0a4dafd-530c-4b8a-b34a-4ae7ce7d38ef', 'admin', 'e6e061838856bf47e1de730719fb2609', '', 'Administrator', 'Active', '2020-10-10', ''),
('d82d6b4f-898c-463c-a8f9-2f38e3c7a335', 'blaise', '', 'f70eb22a-9d06-408e-9107-cad9f25da765', 'caaf2f1e-139c-4f42-b303-28fc3d3bffe0', 'Active', '2020-10-10', 'no'),
('e9b25b2d-a313-453f-8dfb-20c4672b8ebb', 'admin', 'e6e061838856bf47e1de730719fb2609', '', '1a35b440-12f4-43ae-8444-d54793667c2a', 'Active', '2020-09-21', 'no');

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
('0397944c-8178-4ff7-85bc-8b8e49ea48f0', 'dean of study', '2020-10-10', 'no'),
('115a3f3c-e09c-4f8a-827f-cf909ba73a11', 'parent', '2020-09-22', 'no'),
('1a35b440-12f4-43ae-8444-d54793667c2a', 'administrator', '2020-10-10', 'no'),
('4acad40b-2b2e-415b-9608-9fc5a5f50488', 'staff', '2020-09-22', 'no'),
('b1b482ae-c103-436e-b798-315df42964a6', 'disciplineMaster', '2020-10-10', 'no'),
('b4a4cfe3-b74c-4fb7-956b-ec2f1f4ff06b', 'patron', '2020-10-10', 'no'),
('caaf2f1e-139c-4f42-b303-28fc3d3bffe0', 'student', '2020-09-22', 'no');

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
