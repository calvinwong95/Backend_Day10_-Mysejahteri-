-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 02:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysejahteri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_name` varchar(70) NOT NULL,
  `admin_contact` varchar(20) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_status` tinyint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `checkin`
--

CREATE TABLE `checkin` (
  `checkin_id` int(11) NOT NULL,
  `checkin_phone` varchar(20) NOT NULL,
  `checkin_location` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkin`
--

INSERT INTO `checkin` (`checkin_id`, `checkin_phone`, `checkin_location`, `date_created`) VALUES
(1, '12345', '', '2021-10-25 15:43:35'),
(2, '12345', 'invoke sdn. bhd', '2021-10-25 15:43:49'),
(3, '12345', 'invoke sdn. bhd', '2021-10-25 15:43:51'),
(4, '12345', 'invoke sdn. bhd', '2021-10-25 15:43:53'),
(5, '12345', 'invoke sdn. bhd', '2021-10-25 15:43:54'),
(6, '12345', 'invoke sdn. bhd', '2021-10-25 15:43:57'),
(7, '12345', 'invoke sdn. bhd', '2021-10-25 15:43:59'),
(8, '12345', 'invoke sdn. bhd', '2021-10-25 15:44:00'),
(9, '12345', 'invoke sdn. bhd', '2021-10-25 15:44:01'),
(10, '12345', 'invoke sdn. bhd', '2021-10-25 15:44:04'),
(11, '12345', 'invoke sdn. bhd', '2021-10-25 15:44:05'),
(12, '123123123', '', '2021-10-26 00:24:49'),
(13, '123123123', '', '2021-10-26 00:25:13'),
(14, '123123123', 'invoke sdn. bhd', '2021-10-26 00:25:25'),
(15, '123123123', 'invoke sdn. bhd', '2021-10-26 00:25:31'),
(16, '123123123', 'invoke sdn. bhd', '2021-10-26 00:25:33'),
(17, '123123123', 'invoke sdn. bhd', '2021-10-26 00:25:35'),
(18, '123123123', 'invoke sdn. bhd', '2021-10-26 00:25:37'),
(19, '123123123', 'invoke sdn. bhd', '2021-10-26 00:25:38'),
(20, '123123123', 'invoke sdn. bhd', '2021-10-26 00:25:40'),
(21, '123123123', 'invoke sdn. bhd', '2021-10-26 00:25:41'),
(22, '123123123', 'invoke sdn. bhd', '2021-10-26 00:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_branch` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_branch`, `date_created`) VALUES
(1, 'invoke sdn. bhd', '', '2021-10-25 12:16:19');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_password` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_status` tinyint(4) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_email`, `customer_password`, `customer_name`, `customer_status`, `date_created`) VALUES
(1, '', '', 'CheeHoe', 0, '2021-10-25 15:43:35'),
(2, '', '', 'Arjun', 0, '2021-10-26 00:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `tac`
--

CREATE TABLE `tac` (
  `tac_id` int(11) NOT NULL,
  `tac_phone` varchar(20) NOT NULL,
  `tac_tac` int(10) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tac`
--

INSERT INTO `tac` (`tac_id`, `tac_phone`, `tac_tac`, `date_created`) VALUES
(1, '', 176560, '2021-10-25 15:43:35'),
(2, '', 955018, '2021-10-26 00:24:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `checkin`
--
ALTER TABLE `checkin`
  ADD PRIMARY KEY (`checkin_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tac`
--
ALTER TABLE `tac`
  ADD PRIMARY KEY (`tac_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `checkin`
--
ALTER TABLE `checkin`
  MODIFY `checkin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tac`
--
ALTER TABLE `tac`
  MODIFY `tac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
