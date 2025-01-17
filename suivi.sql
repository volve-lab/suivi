-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2020 at 06:13 AM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

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
-- Table structure for table `disciplinemarks`
--

CREATE TABLE `disciplinemarks` (
  `id` varchar(200) NOT NULL,
  `marks` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_on` date DEFAULT NULL,
  `deleted` char(45) DEFAULT NULL,
  `student_id` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disciplinemarks`
--

INSERT INTO `disciplinemarks` (`id`, `marks`, `comment`, `created_on`, `deleted`, `student_id`) VALUES
('15e9b0b9-ce15-4efe-8e35-46d2324cf1b9', 10, ' drink beer', '2020-10-14', 'no', 'f70eb22a-9d06-408e-9107-cad9f25da765'),
('2e1615e8-9051-42a3-9fe2-a030916233f0', 5, ' fsd', '2020-10-14', 'no', 'f70eb22a-9d06-408e-9107-cad9f25da765'),
('50a7d596-9658-47c2-84d1-e20dea18cfc0', 5, ' Going out without permission', '2020-10-14', 'no', '70eb22a-9d06-408e-9107-cad9f25da765'),
('93c4eba2-5c0f-4b22-9db4-9f4935619228', 5, ' Going out', '2020-11-14', 'no', 'f70eb22a-9d06-408e-9107-cad9f25da765'),
('bac31fc2-06aa-4ca9-8d48-b26d21e526f0', 4, ' out of class', '2020-10-14', 'no', 'f70eb22a-9d06-408e-9107-cad9f25da765'),
('fc173b58-e57e-4e12-be74-ce8b412d69f9', 10, ' drink beer', '2020-11-14', 'no', 'f70eb22a-9d06-408e-9107-cad9f25da765');

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
  `course` varchar(50) NOT NULL,
  `quiz` int(11) NOT NULL,
  `exam` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `deleted` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `report_id`, `course`, `quiz`, `exam`, `total`, `created_on`, `updated_on`, `deleted`) VALUES
('ee87ecff-8354-4aa4-b706-e0e2827ac4d2', '765941e6-47c0-4a22-ae18-108186fdcf4d', 'Math', 10, 20, 30, '0000-00-00', '0000-00-00', 'no'),
('6053f7ad-aeca-4b95-817f-caff3db21604', '765941e6-47c0-4a22-ae18-108186fdcf4d', 'English', 10, 20, 30, '0000-00-00', '0000-00-00', 'no'),
('114bf0a9-8629-41e4-90f4-d0ea42921252', '765941e6-47c0-4a22-ae18-108186fdcf4d', 'Total', 20, 40, 60, '0000-00-00', '0000-00-00', 'no');

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
('295de526-5fcf-4316-b8f8-988424374e5d', 'Blaise', 'Irakoze', 'Male', '0788747121', 'blaise@gmail.com', '2020-11-14', 'no'),
('cbe5dc87-6795-41f2-a3bf-8b0d074d74a1', 'Sam', 'Umusaza', 'Male', '0788747121', 'sam@gmail.com', '2020-10-10', 'no');

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
('0e78cb3e-447f-4ee2-9f8a-a0ac95ff278b', ' Sick permission', '2020-11-16', '2020-11-21', '13:00:00', '14:00:00', '2020-11-16', 'no', 'e5bf8958-c30f-4857-8498-47e89f5b30bf'),
('1b2039ac-6dfe-4bee-b67c-c80e3905c004', ' gfd', '2020-11-16', '2020-11-18', '01:00:00', '01:00:00', '2020-11-16', 'no', '\'\'e5bf8958-c30f-4857-8498-47e89f5b30bf\'\''),
('38bd97a6-a456-4e95-b1f8-d720fda42b63', '  sickness permission', '2020-10-30', '2020-10-31', '00:00:00', '15:00:00', '2020-10-30', 'no', 'f70eb22a-9d06-408e-9107-cad9f25da765'),
('3b3e2fe1-721c-4e5f-b17f-b03d83d6803b', ' sickness', '2020-10-11', '2020-10-17', '00:00:00', '00:00:00', '2020-10-11', 'no', 'f70eb22a-9d06-408e-9107-cad9f25da765'),
('495e3e0d-fb85-4e3c-91f2-e55f7ce675f1', ' Sick permission', '2020-11-16', '2020-11-21', '01:00:00', '01:00:00', '2020-11-16', 'no', 'e5bf8958-c30f-4857-8498-47e89f5b30bf'),
('a98fb82f-b598-4560-89fc-39ff8006a804', 'sick permission', '2020-11-16', '2020-11-23', '01:00:00', '02:00:00', '2020-11-16', 'no', 'e5bf8958-c30f-4857-8498-47e89f5b30bf'),
('d395afef-c456-4b45-a1be-c0fb59f3c409', ' Wedding permission', '2020-11-18', '2020-11-23', '00:00:00', '01:00:00', '2020-11-16', 'no', 'e5bf8958-c30f-4857-8498-47e89f5b30bf'),
('e9c7ac9b-dda3-41e2-81fc-31ca0d198225', ' fsd', '2020-11-17', '2020-11-09', '01:00:00', '01:00:00', '2020-11-16', 'no', '\'e5bf8958-c30f-4857-8498-47e89f5b30bf\'');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` varchar(200) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `level_id` varchar(200) NOT NULL,
  `created_on` date NOT NULL,
  `updated_on` date NOT NULL,
  `deleted` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `student_id`, `level_id`, `created_on`, `updated_on`, `deleted`) VALUES
('765941e6-47c0-4a22-ae18-108186fdcf4d', '', '', '2020-10-21', '0000-00-00', 'no');

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
('33b48396-bd7a-4ed7-a194-e3b7bac841e8', 'Angel', 'Uwimana', 'Female', '0788888888', '7903d85c-8583-4b88-8236-50ae85df9d3e', '2020-11-14', 'no'),
('76487962-b0f2-4102-9de2-9316fbfdec35', 'Ntwari', 'Yvan', 'Male', '0788211578', '2374fd1e-ed4b-4c33-8405-9aa423a1d6a2', '2020-10-10', 'no'),
('d17b44d4-c6d5-4f77-8602-10787ef2f7bf', 'Mukwende ', 'Placide', 'Male', '0788211578', 'b2b4bd78-24ec-49e9-a39a-bfcc78c6f0d9', '2020-11-14', 'no');

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
('e5bf8958-c30f-4857-8498-47e89f5b30bf', 'Levi', 'Ganza', 'Male', '295de526-5fcf-4316-b8f8-988424374e5d', 'e02880cc-458c-4599-8fa4-8153c605c5ee', '2020-11-14', 'no'),
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
('b00048fd-22a7-4f6c-86f4-27ba0b8afe9f', 'sam', '332532dcfaa1cbf61e2a266bd723612c', 'cbe5dc87-6795-41f2-a3bf-8b0d074d74a1', '115a3f3c-e09c-4f8a-827f-cf909ba73a11', 'Active', '2020-10-10', 'no'),
('c8e66c6a-9661-4302-96a1-a68ec1594ebc', 'mukwende ', '', 'd17b44d4-c6d5-4f77-8602-10787ef2f7bf', '4acad40b-2b2e-415b-9608-9fc5a5f50488', 'Active', '2020-11-14', 'no'),
('cf71c86e-764a-4289-9b4e-8c4c6ccbb704', 'angel', 'f4f068e71e0d87bf0ad51e6214ab84e9', '33b48396-bd7a-4ed7-a194-e3b7bac841e8', '4acad40b-2b2e-415b-9608-9fc5a5f50488', 'Active', '2020-11-14', 'no'),
('d82d6b4f-898c-463c-a8f9-2f38e3c7a335', 'blaise', '6a3611785d499d8821a0d9b24d464e0f', 'f70eb22a-9d06-408e-9107-cad9f25da765', 'caaf2f1e-139c-4f42-b303-28fc3d3bffe0', 'Active', '2020-10-10', 'no'),
('dbda01f9-ef8d-4cac-bd0d-a93faf168761', 'levi', '', 'e5bf8958-c30f-4857-8498-47e89f5b30bf', 'caaf2f1e-139c-4f42-b303-28fc3d3bffe0', 'Active', '2020-11-14', 'no'),
('e9b25b2d-a313-453f-8dfb-20c4672b8ebb', 'admin', 'd41d8cd98f00b204e9800998ecf8427e', '', '1a35b440-12f4-43ae-8444-d54793667c2a', 'Active', '2020-09-21', 'no');

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
('1a35b440-12f4-43ae-8444-d54793667c2a', 'administrator', '2020-10-10', 'no'),
('4acad40b-2b2e-415b-9608-9fc5a5f50488', 'staff', '2020-09-22', 'no'),
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
-- Indexes for table `disciplinemarks`
--
ALTER TABLE `disciplinemarks`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
