-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 08:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `criminal`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_master`
--

CREATE TABLE `area_master` (
  `area_id` int(10) UNSIGNED NOT NULL,
  `city_id` varchar(45) DEFAULT NULL,
  `area_name` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `area_master`
--

INSERT INTO `area_master` (`area_id`, `city_id`, `area_name`, `date`) VALUES
(3, '1', 'Nilavagilu', '2024-03-01'),
(4, '2', 'Alathur', '2024-03-01'),
(5, '3', 'Arlihalli', '2024-03-01'),
(6, '4', 'Gowripur', '2024-03-01'),
(7, '6', 'Chandur', '2024-03-01'),
(8, '7', 'Devagiri', '2024-03-01'),
(9, '10', 'uppinangady', '2024-03-01'),
(10, '8', 'Nandipura', '2024-03-01'),
(11, '11', 'Konaje', '2024-03-01'),
(12, '9', 'Harandur', '2024-03-01'),
(13, '12', 'Mudigere', '2024-03-01'),
(14, '13', 'Ramanagara', '2024-03-01'),
(15, '14', 'Shanthapura', '2024-03-01'),
(16, '14', 'Shanthapura', '2024-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `citymaster`
--

CREATE TABLE `citymaster` (
  `city_id` int(10) UNSIGNED NOT NULL,
  `district_id` varchar(45) DEFAULT NULL,
  `city_name` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `citymaster`
--

INSERT INTO `citymaster` (`city_id`, `district_id`, `city_name`, `date`) VALUES
(1, '1', 'Hunsur', '2024-03-05'),
(2, '1', 'Nanjangud', '2024-03-05'),
(3, '2', 'Hospet', '2024-03-05'),
(4, '2', 'Sandur', '2024-03-05'),
(6, '3', 'Chikodi', '2024-03-05'),
(7, '3', 'Belgaum', '2024-03-05'),
(8, '4', 'Mudigere', '2024-03-05'),
(9, '4', 'Koppa', '2024-03-05'),
(10, '5', 'Puttur', '2024-03-05'),
(11, '5', 'Bantwal', '2024-03-05'),
(12, '6', 'Maddur', '2024-03-05'),
(13, '6', 'Mandya', '2024-03-05'),
(14, '7', 'Sakleshpur', '2024-03-05'),
(15, '7', 'Belur', '2024-03-05'),
(16, '9', 'Karkala', '2024-03-05'),
(17, '9', 'Kundapur', '2024-03-05'),
(18, '10', 'Hubli', '2024-03-05'),
(19, '10', 'Kundgol', '2024-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `CMP_ID` int(10) UNSIGNED NOT NULL,
  `STATION_ID` varchar(45) DEFAULT NULL,
  `COMPLAINTNO` varchar(45) DEFAULT NULL,
  `NAME` varchar(45) DEFAULT NULL,
  `TYPE` varchar(45) DEFAULT NULL,
  `DESCRIPTION` varchar(45) DEFAULT NULL,
  `PHONE` varchar(45) DEFAULT NULL,
  `STATUS` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`CMP_ID`, `STATION_ID`, `COMPLAINTNO`, `NAME`, `TYPE`, `DESCRIPTION`, `PHONE`, `STATUS`) VALUES
(1, '1', '1000', 'megha', 'civil', 'abc', '9874563210', 'Withdraw');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(10) UNSIGNED NOT NULL,
  `district_name` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `district_name`, `date`) VALUES
(1, 'Mysore', '2024-03-06'),
(2, 'Bellary', '2024-03-06'),
(3, 'Belagavi', '2024-03-06'),
(4, 'Chikkamangaluru', '2024-03-03'),
(5, 'Dakshina kannada', '2024-03-04'),
(6, 'Mandya', '2024-03-01'),
(7, 'Hassan', '2024-03-06'),
(8, 'Kolar', '2024-03-02'),
(9, 'Udupi', '2024-03-01'),
(10, 'Dharwad', '2024-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `phone`, `email`, `subject`, `message`) VALUES
(1, 'ADSASD', '3123', 'user@gmail.com', 'asd', 'ded');

-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

CREATE TABLE `fir` (
  `FIR_ID` int(10) UNSIGNED NOT NULL,
  `STATION_ID` varchar(45) DEFAULT NULL,
  `FIR_DATE` varchar(45) DEFAULT NULL,
  `TYPE` varchar(45) DEFAULT NULL,
  `INFORECEIVED_DATE` varchar(45) DEFAULT NULL,
  `INFORECEIVED_TIME` varchar(45) DEFAULT NULL,
  `PLACE` varchar(45) DEFAULT NULL,
  `ACCUSED_DETAILS` varchar(45) DEFAULT NULL,
  `AREA_ID` varchar(45) DEFAULT NULL,
  `TIME` varchar(45) DEFAULT NULL,
  `STATUS` varchar(45) DEFAULT NULL,
  `DATE_CREATED` varchar(45) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `COMPLAINT_NO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `fir`
--

INSERT INTO `fir` (`FIR_ID`, `STATION_ID`, `FIR_DATE`, `TYPE`, `INFORECEIVED_DATE`, `INFORECEIVED_TIME`, `PLACE`, `ACCUSED_DETAILS`, `AREA_ID`, `TIME`, `STATUS`, `DATE_CREATED`, `photo`, `COMPLAINT_NO`) VALUES
(1, '1', '2018-06-06', 'civil', '2018-06-06', '10 am', 'lakshmipuram', 'moosa, mysore,koppalu', '1', '6 am', 'Closed', NULL, 'Chrysanthemum.jpg', NULL),
(2, '1', '2018-06-06', 'criminal', '2018-06-06', '10 am', 'lakshmipuram', 'moosa, mysore,koppalu', '1', '6 am', 'xxxxx', NULL, 'IMG_20190125_112250.jpg', NULL),
(3, '1', '2018-06-06', 'criminal', '2018-06-06', '10 am', 'lakshmipuram', 'moosa, mysore,koppalu', '3', '6 am', 'xxxxx', NULL, 'IMG_20190125_112250.jpg', NULL),
(4, '1', '23/04/2021', 'Criminal', '23/04/2021', '10:20am', 'Mangalore', 'ABC', '15', '10:00am', 'Active', NULL, '1.jpg', NULL),
(5, '1', '23/04/2021', 'Criminal', '23/04/2021', '10:20am', 'Udupi1', 'ABC', '3', '10:00am', 'Active', NULL, '1.jpg', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(10) UNSIGNED NOT NULL,
  `Username` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Usertype` varchar(45) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `Username`, `email`, `phone`, `Password`, `Usertype`, `date`) VALUES
(1, 'admin', 'admin@gmail.com', '1234567894', '12', 'Admin', '2024-03-05'),
(3, 'josline', 'police@gmail.com', '45124578', '34', 'Police', '2024-03-05'),
(4, 'megha', 'user@gmail.com', '45124454544', '34', 'User', '2024-03-01'),
(7, 'Jason', 'jason@gmail.com', '789451245', '12', 'Police', '2024-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `prisoners`
--

CREATE TABLE `prisoners` (
  `id` int(11) NOT NULL,
  `VISITOR_ID` int(11) NOT NULL,
  `NAME` varchar(45) DEFAULT NULL,
  `PLACE` varchar(45) DEFAULT NULL,
  `PHONE` varchar(45) DEFAULT NULL,
  `TIME_IN` varchar(45) DEFAULT NULL,
  `TIME_OUT` varchar(45) DEFAULT NULL,
  `STATION_ID` varchar(45) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `DATE_CREATED` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `prisoners`
--

INSERT INTO `prisoners` (`id`, `VISITOR_ID`, `NAME`, `PLACE`, `PHONE`, `TIME_IN`, `TIME_OUT`, `STATION_ID`, `status`, `DATE_CREATED`) VALUES
(2, 4, 'John', 'mangalore', '7845124578', '16:02', '21:02', '1', 'Pending', '2024-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `registration_user`
--

CREATE TABLE `registration_user` (
  `user_reg_id` int(10) UNSIGNED NOT NULL,
  `Username` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Usertype` varchar(45) NOT NULL,
  `dob` datetime NOT NULL,
  `phone` varchar(45) NOT NULL,
  `usercode` varchar(45) NOT NULL,
  `verified` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration_user`
--

INSERT INTO `registration_user` (`user_reg_id`, `Username`, `name`, `Password`, `Email`, `Usertype`, `dob`, `phone`, `usercode`, `verified`, `gender`) VALUES
(3, 'megha', 'Megha', 'megha123', 'megha@gmail.com', 'User', '2000-10-27 00:00:00', '9874563210', '6964', 'Yes', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `station_master`
--

CREATE TABLE `station_master` (
  `station_id` int(10) UNSIGNED NOT NULL,
  `station_name` varchar(45) DEFAULT NULL,
  `head` varchar(45) DEFAULT NULL,
  `member` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `district_id` varchar(45) DEFAULT NULL,
  `city_id` varchar(45) DEFAULT NULL,
  `area_id` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `station_master`
--

INSERT INTO `station_master` (`station_id`, `station_name`, `head`, `member`, `phone`, `district_id`, `city_id`, `area_id`, `date`) VALUES
(1, 'lakshmipuram police station', 'mysore', '12', '08212418320', '1', '1', '5', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_master`
--
ALTER TABLE `area_master`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `citymaster`
--
ALTER TABLE `citymaster`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`CMP_ID`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `fir`
--
ALTER TABLE `fir`
  ADD PRIMARY KEY (`FIR_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `prisoners`
--
ALTER TABLE `prisoners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_user`
--
ALTER TABLE `registration_user`
  ADD PRIMARY KEY (`user_reg_id`);

--
-- Indexes for table `station_master`
--
ALTER TABLE `station_master`
  ADD PRIMARY KEY (`station_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_master`
--
ALTER TABLE `area_master`
  MODIFY `area_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `citymaster`
--
ALTER TABLE `citymaster`
  MODIFY `city_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `CMP_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fir`
--
ALTER TABLE `fir`
  MODIFY `FIR_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `prisoners`
--
ALTER TABLE `prisoners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration_user`
--
ALTER TABLE `registration_user`
  MODIFY `user_reg_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `station_master`
--
ALTER TABLE `station_master`
  MODIFY `station_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
