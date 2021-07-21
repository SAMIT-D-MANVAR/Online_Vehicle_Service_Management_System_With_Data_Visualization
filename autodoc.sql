-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 08:28 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autodoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `application_no` int(11) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `phone_no` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `pincode` varchar(30) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`application_no`, `customer_name`, `email_id`, `phone_no`, `dob`, `gender`, `address`, `pincode`, `city`) VALUES
(1, 'samit d manvar', 'manvarsamit@gmail.com', '6933632566', '2020-12-10', 'male', 'sai niketan apartment ,opp urwa canara school', '575003', 'mangalore'),
(2, 'lokesh agarwal', 'lokesh@gmail.com', '5699362533', '2020-12-23', 'male', 'royal palm towers,nehru road', '563288', 'udupi'),
(3, 'raju', 'raju@gmail.com', '8788951357', '2021-03-25', 'male', 'vishwas kuteera towers,kodialbail', '575003', 'mangalore'),
(4, 'rohan singh', 'singhrrohan11@gmail.com', '8951456213', '2020-12-29', 'male', 'mauriskha palace,opp to gandhi maidan', '575023', 'kundapur'),
(6, 'pavan', 'pavan@gmail.com', '1234567890', '2020-12-11', 'male', 'xyz colony', '575009', 'udupi'),
(7, 'rahul', 'rahul@gmail.com', '9447584585', '2020-12-01', 'male', 'xyz colony', '575004', 'mangalore'),
(8, 'varun', 'abcdefg@gmail.com', '4844454183', '2020-12-10', 'male', 'warehouse road', '575003', 'mangalore'),
(9, 'samit d manvar', 'samitd@gmail.com', '6369512366', '2020-12-26', 'male', 'sai niketan aparts,opp urwa canara school,gandhinagar', '578996', 'kundapur'),
(10, 'rohit singh', 'rohit@gmail.com', '4563211111', '2020-12-25', 'male', 'arya society,arya samj road,balmatta', '574220', 'mangalore'),
(11, 'yash', 'yash@gmail.com', '9517536482', '2020-12-22', 'male', 'vishwas kuteera,kodialguttu', '575002', 'mangalore'),
(12, 'anudeep k sharma', 'aksharma@gmail.com', '9856745323', '2020-12-27', 'male', 'vishwas samarat,opp just bake,lalbagh', '575004', 'udupi'),
(13, 'rajath rao tn', 'rrtn@gmail.com', '9475395100', '2021-01-03', 'male', 'kushi kunj,mannagudda', '575003', 'mangalore');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(70) NOT NULL,
  `email_id` varchar(70) NOT NULL,
  `service_satisfaction` varchar(30) NOT NULL,
  `service_hours` varchar(30) NOT NULL,
  `appointment` varchar(30) NOT NULL,
  `pick_drop` varchar(30) NOT NULL,
  `staff_friendly` varchar(30) NOT NULL,
  `overall` varchar(30) NOT NULL,
  `other_suggestions` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email_id`, `service_satisfaction`, `service_hours`, `appointment`, `pick_drop`, `staff_friendly`, `overall`, `other_suggestions`) VALUES
('prajwal s', 'prajwal@gmail.com', 'somewhat', 'yes', 'yes', 'no', '', 'good', 'overall best , nominial cost'),
('rahul', 'rahul@gmail.com', 'yes', 'yes', 'yes', 'yes', 'yes', 'excellent', 'excellent'),
('rakesh sharma', 'rakesh@gmail.com', 'somewhat', 'no', 'no', 'no', 'no', 'average', 'needs to provide good offers'),
('rajath rao tn', 'rrtn@gmail.com', 'yes', 'yes', 'yes', 'yes', 'no', 'verygood', 'need to add more slots'),
('ryan', 'ryan@gmail.com', 'yes', 'no', 'yes', 'yes', 'no', 'good', 'excellent work done'),
('ryan menezes', 'ryanmenezes@gmail.com', 'somewhat', 'yes', 'no', 'no', 'yes', 'excellent', 'excellent work'),
('sachinkrishna', 'sachin@gmail.com', 'yes', 'yes', 'yes', 'yes', 'yes', 'good', 'good'),
('samit', 'samit@gmail.com', 'yes', 'yes', 'yes', 'yes', 'yes', 'good', 'on time pick drop'),
('sooraj t rao', 'soorajt@gmail.com', 'somewhat', 'yes', 'no', 'no', 'yes', 'satisfactory', 'need to be on time for pick dr'),
('saurav', 'ssaurav90@gmail.com', 'somewhat', 'no', 'yes', 'yes', 'yes', 'excellent', 'need to add more bike services');

-- --------------------------------------------------------

--
-- Table structure for table `news1`
--

CREATE TABLE `news1` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `daily_newsletter` varchar(10) DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news1`
--

INSERT INTO `news1` (`name`, `email`, `daily_newsletter`) VALUES
('rajath rao tn', 'rrtn@gmail.com', 'yes'),
('samit d manvar', 'samit@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `servicedetails`
--

CREATE TABLE `servicedetails` (
  `application_no` int(11) NOT NULL,
  `reg_no` varchar(70) DEFAULT NULL,
  `vehicle_type` varchar(50) DEFAULT NULL,
  `make_model` varchar(100) DEFAULT NULL,
  `pickup` varchar(15) DEFAULT NULL,
  `sdate` date DEFAULT NULL,
  `stime` time DEFAULT NULL,
  `service_type` varchar(60) DEFAULT NULL,
  `cost` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicedetails`
--

INSERT INTO `servicedetails` (`application_no`, `reg_no`, `vehicle_type`, `make_model`, `pickup`, `sdate`, `stime`, `service_type`, `cost`) VALUES
(1, 'ka19mx1234', 'four wheeler', 'hyundai creta', 'yes', '2020-12-10', '10:00:00', 'PERIODIC MAINTENANCE', '10000'),
(2, 'ka20mz1299', 'four wheeler', 'honda accord', 'yes', '2020-12-10', '11:00:00', 'AC SERVICES', '5500'),
(3, 'ka10bv6540', 'two wheeler', 'bajaj pulsar', 'no', '2020-12-24', '12:00:00', 'OIL AND AIR FILTER', '4500'),
(4, 'ka17mz0840', 'four wheeler', 'suzuki baleno', 'yes', '2020-12-11', '12:00:00', 'WHEEL REPLACEMENT', '5000'),
(6, 'ka19mz4563', 'four wheeler', 'maruthi omni', 'yes', '2020-12-10', '12:00:00', 'BODY REPAIR', '7500'),
(7, 'ka19mk1234', 'four wheeler', 'Maruthi', 'yes', '2020-12-10', '02:00:00', 'WHEEL REPLACEMENT', '5000'),
(8, 'ka19mz1111', 'four wheeler', 'bmw x6', 'yes', '2020-12-11', '01:00:00', 'PERIODIC MAINTENANCE', '7000'),
(9, 'ka06bn1457', 'four wheeler', 'ford endavour', 'yes', '2020-12-27', '10:00:00', 'PERIODIC MAINTENANCE', '10000'),
(10, 'ka56mz1002', 'four wheeler', 'suzuki ciaz', 'no', '2020-12-30', '01:00:00', 'AC SERVICES', '5500'),
(11, 'ka19ma1231', 'four wheeler', 'tata tiago', 'no', '2021-01-27', '01:00:00', 'REGULAR BIKE SERVICE', '5000'),
(12, 'ka20ml2771', 'four wheeler', 'suzuki ertiga', 'no', '2020-12-31', '00:00:00', 'RUNNING REPAIRS', '6500'),
(13, 'ka19mc0019', 'four wheeler', 'tata harrier', 'yes', '2021-01-02', '11:00:00', 'CAR SPA', '7000');

-- --------------------------------------------------------

--
-- Table structure for table `servicestatus`
--

CREATE TABLE `servicestatus` (
  `reg_no` varchar(70) DEFAULT NULL,
  `customer_name` varchar(100) NOT NULL,
  `sstatus` varchar(50) DEFAULT 'booked',
  `sdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicestatus`
--

INSERT INTO `servicestatus` (`reg_no`, `customer_name`, `sstatus`, `sdate`) VALUES
('ka20ml2771', 'anudeep k sharma', 'serviceing', '2020-12-31'),
('ka20mz1299', 'lokesh agarwal', 'completed', '2020-12-10'),
('ka19mz4563', 'pavan', 'booked', '2020-12-10'),
('ka19mk1234', 'rahul', 'serviceing', '2020-12-10'),
('ka19mc0019', 'rajath rao tn', 'serviceing', '2021-01-02'),
('ka10bv6540', 'raju', 'booked', '2020-12-24'),
('ka17mz0840', 'rohan singh', 'serviceing', '2020-12-11'),
('ka56mz1002', 'rohit singh', 'serviceing', '2020-12-30'),
('ka19mx1234', 'samit d manvar', 'completed', '2020-12-10'),
('ka19mz1111', 'varun', 'completed', '2020-12-11'),
('ka19ma1231', 'yash', 'booked', '2021-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `username` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`username`, `email_id`, `password`) VALUES
('abhishek', 'abhisekh@gmail.com', 'abhiaaaaaaaa'),
('arjun', 'sarjun@gmail.com', 'arjun'),
('dipti', 'dipti@gmail.com', 'dipti##aaa'),
('prajinrp', 'prajin@gmail.com', 'prajinrp'),
('rahul', 'rahul@gmail.com', '1234567'),
('rajath rao tn', 'rajathr@gmail.com', 'rajathraotn'),
('ryan', 'ryan@gmail.com', 'ryan'),
('sachinkrishna_99', 'krishsachin@gmail.com', 'sachin'),
('samit', 'samit@gmail.com', 'samit1234'),
('samitdmanvar', 'samit@gmail.com', 'samit123'),
('samit_123', 'samit@gmail.com', 'samit'),
('suresh#123', 'suresh@gmail.com', 'suresh123'),
('varun', 'abcdefg@gmail.com', '1234567'),
('xyz', 'xyz@gmail.com', 'xycbdgs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `customerdetails`
--
ALTER TABLE `customerdetails`
  ADD PRIMARY KEY (`application_no`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `news1`
--
ALTER TABLE `news1`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `servicedetails`
--
ALTER TABLE `servicedetails`
  ADD PRIMARY KEY (`application_no`);

--
-- Indexes for table `servicestatus`
--
ALTER TABLE `servicestatus`
  ADD PRIMARY KEY (`customer_name`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerdetails`
--
ALTER TABLE `customerdetails`
  MODIFY `application_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `servicedetails`
--
ALTER TABLE `servicedetails`
  MODIFY `application_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `servicedetails`
--
ALTER TABLE `servicedetails`
  ADD CONSTRAINT `servicedetails_ibfk_1` FOREIGN KEY (`application_no`) REFERENCES `customerdetails` (`application_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
