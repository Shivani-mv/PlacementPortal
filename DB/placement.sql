-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2017 at 09:02 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`, `created_at`, `modified_at`, `deleted_at`) VALUES
(1, 'razu', '123', '2017-05-24 04:44:03', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `clock_in` time NOT NULL,
  `clock_out` time NOT NULL,
  `total_work` float NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `create_by` varchar(30) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `modified_by` varchar(30) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `status`, `create_by`, `create_date`, `modified_by`, `modified_date`) VALUES
(1, 'IT', 1, 'Admin', '2017-05-24 06:37:11', '', '2017-05-05 18:00:00'),
(2, 'Coaching', 1, 'Admin', '2017-05-24 06:37:29', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` char(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `create_by` varchar(30) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `modified_by` varchar(30) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `employee_designations`
--

CREATE TABLE `employee_designations` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  `created_by` varchar(30) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `modified_by` varchar(30) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `employee_designations`
--

INSERT INTO `employee_designations` (`id`, `title`, `status`, `created_by`, `create_date`, `modified_by`, `modified_date`) VALUES
(1, 'Teacher', 1, 'Admin', '2017-05-24 06:36:17', '', '2017-05-24 06:36:17'),
(2, 'Programmer', 1, 'Admin', '2017-05-03 18:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_leavs`
--

CREATE TABLE `employee_leavs` (
  `id` int(11) NOT NULL,
  `leave_id` int(11) NOT NULL,
  `total_leave_yarly` int(11) NOT NULL,
  `deducated_leav` int(11) NOT NULL,
  `remaining_leav` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modfied_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `item` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `holiday_informations`
--

CREATE TABLE `holiday_informations` (
  `id` int(11) NOT NULL,
  `holiday_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `types` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modfied_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `holydays`
--

CREATE TABLE `holydays` (
  `id` int(11) NOT NULL,
  `attendace_id` int(11) NOT NULL,
  `month` date NOT NULL,
  `day` date NOT NULL,
  `year` date NOT NULL,
  `description` varchar(155) NOT NULL,
  `status` int(11) NOT NULL,
  `crated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `leav_to` date NOT NULL,
  `leav_from` date NOT NULL,
  `total_leav` int(11) NOT NULL,
  `staus` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `modified_at` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `test_name` varchar(30) NOT NULL,
  `test_date` date NOT NULL,
  `test_time` time NOT NULL,
  `test_type` text NOT NULL,
  `mode` text NOT NULL,
  `pv` text NOT NULL,
  `status2` int(11) NOT NULL DEFAULT '1',
  `insert_by2` varchar(30) NOT NULL,
  `insert_date2` timestamp NULL DEFAULT NULL,
  `update_by2` varchar(30) NOT NULL,
  `update_date2` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `test_name`, `test_date`, `test_time`, `test_type`,`mode`,`pv`, `status2`, `insert_by2`, `insert_date2`, `update_by2`, `update_date2`) VALUES
(1, 'Py-coding', '2017-05-03', '00:17:00', 'Coding', 'abc', 'codechef', '1', 'admin', '2017-05-29 18:00:00', '', NULL);


-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `id` int(11) NOT NULL,
  `event_name1` varchar(30) NOT NULL,
  `event_date1` date NOT NULL,
  `event_time1` time NOT NULL,
  `event_type1` text NOT NULL,
  `coordinator` text NOT NULL,
  `platform` text NOT NULL,
  `status1` int(11) NOT NULL DEFAULT '1',
  `insert_by1` varchar(30) NOT NULL,
  `insert_date1` timestamp NULL DEFAULT NULL,
  `update_by1` varchar(30) NOT NULL,
  `update_date1` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `online`
--

INSERT INTO `online` (`id`, `event_name1`, `event_date1`, `event_time1`, `event_type1`,`coordinator`,`platform`, `status1`, `insert_by1`, `insert_date1`, `update_by1`, `update_date1`) VALUES
(1, 'Py-coding', '2017-05-03', '00:17:00', 'Coding', 'abc', 'codechef', '1', 'admin', '2017-05-29 18:00:00', '', NULL);


-- --------------------------------------------------------

--
-- Table structure for table `offline`
--

CREATE TABLE `offline` (
  `id` int(11) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `event_type` text NOT NULL,
  `guest` text NOT NULL,
  `venue` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `insert_by` varchar(30) NOT NULL,
  `insert_date` timestamp NULL DEFAULT NULL,
  `update_by` varchar(30) NOT NULL,
  `update_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `offline`
--

INSERT INTO `offline` (`id`, `event_name`, `event_date`, `event_time`, `event_type`,`guest`,`venue`, `status`, `insert_by`, `insert_date`, `update_by`, `update_date`) VALUES
(1, 'Webinar', '2017-05-22', '10:01:00', 'fh htyt rtyt t rt','Shiva','CMRIT', 1, 'admin', '2017-05-21 20:00:50', '', NULL);


-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `visit_date` date NOT NULL,
  `visit_time` time NOT NULL,
  `company_type` text NOT NULL,
  `cut_off` varchar(11) NOT NULL,
  `venue1` text NOT NULL,
  `status3` int(11) NOT NULL DEFAULT '1',
  `insert_by3` varchar(30) NOT NULL,
  `insert_date3` timestamp NULL DEFAULT NULL,
  `update_by3` varchar(30) NOT NULL,
  `update_date3` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `visit_date`, `visit_time`, `company_type`,`cut_off`,`venue1`, `status3`, `insert_by3`, `insert_date3`, `update_by3`, `update_date3`) VALUES
(1, 'Amazon', '2017-05-22', '10:00:00', 'fh htyt rtyt t rt','7.2','CMRIT', 1, 'admin', '2017-05-21 20:00:50', '', NULL);


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_designations`
--
ALTER TABLE `employee_designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_leavs`
--
ALTER TABLE `employee_leavs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holiday_informations`
--
ALTER TABLE `holiday_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holydays`
--
ALTER TABLE `holydays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online`
--
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offline`
--
ALTER TABLE `offline`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee_designations`
--
ALTER TABLE `employee_designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employee_leavs`
--
ALTER TABLE `employee_leavs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `holiday_informations`
--
ALTER TABLE `holiday_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `holydays`
--
ALTER TABLE `holydays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
--
-- AUTO_INCREMENT for table `online`
--
ALTER TABLE `online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
--
-- AUTO_INCREMENT for table `offline`
--
ALTER TABLE `offline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
