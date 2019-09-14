-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 14, 2019 at 02:21 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `private_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminstrator`
--

CREATE TABLE `adminstrator` (
  `admin_id` int(11) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `admin_statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(200) DEFAULT NULL,
  `car_model` varchar(200) DEFAULT NULL,
  `car_picture` varchar(200) DEFAULT NULL,
  `car_seat` int(11) DEFAULT NULL,
  `car_plate` varchar(200) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `c_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `car_name`, `car_model`, `car_picture`, `car_seat`, `car_plate`, `driver_id`, `c_date`) VALUES
(1, 'Noah BMW-910', 'New Model', '(42).jpg', 4, 'RW-568-9876', 11, '2019-09-14 00:20:11'),
(2, 'Noah BMW-910', 'New Model', '(42).jpg', 4, 'RW-568-9876', 2, '2019-09-14 00:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(11) NOT NULL,
  `f_name` varchar(200) DEFAULT NULL,
  `l_name` varchar(200) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone_number` varchar(256) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `permit_id` varchar(200) DEFAULT NULL,
  `c_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `f_name`, `l_name`, `age`, `gender`, `email`, `phone_number`, `address`, `password`, `permit_id`, `c_date`) VALUES
(1, 'abc', 'abc', 0, '', 'abc@gmail.com', '87654567', 'hhh', 'abc', '456', '2019-09-18 00:00:00'),
(2, 'dfghjk', 'dfghjkl', 0, '', 'dfghj@dfghj.dfghj', '987654', 'fghjklkjh', 'dfghjklk', '4567890', '2019-09-09 00:00:00'),
(3, 'EZECHIEL', 'dfghjkl', 0, '', 'dfghj@dfghj.dfghj', '987654', 'fghjklkjh', 'dfghjklk', '4567890', '2019-09-09 00:00:00'),
(4, 'EZECHIEL', 'dfghjkl', 0, '', 'dfghj@dfghj.dfghj', '987654', 'fghjklkjh', 'dfghjklk', '4567890', '2019-09-09 00:00:00'),
(5, 'EZECHIEL', 'EZPK', 0, '', 'dfghj@dfghj.dfghj', '987654', 'fghjklkjh', 'dfghjklk', '4567890', '2019-09-09 00:00:00'),
(6, 'EZECHIEL', 'EZPK', 0, '', 'ezpk@gmail.com', '987654', 'fghjklkjh', 'dfghjklk', '4567890', '2019-09-09 00:00:00'),
(7, 'EZECHIEL', 'EZPK', 0, '', 'ezpk@gmail.com', '545454', 'fghjklkjh', 'dfghjklk', '4567890', '2019-09-13 22:46:51'),
(8, 'EZECHIEL', 'EZPK', 0, '', 'ezpk@gmail.com', '545454', 'gisozi', 'ezpk', '4567890', '2019-09-13 22:48:30'),
(9, 'BENJAMIN', 'BEN', 24, 'M', 'ben@gmail.com', '0987659876', 'kjhgf', 'ben', '98765', '2019-09-13 23:15:24'),
(10, 'Ezpk', 'Ezechiel', 20, 'M', 'eze@gmail.com', '0987654321', 'Gisozi', 'ezpk', '876598765', '2019-09-13 23:41:13'),
(11, 'BENJAMIN', 'BEN', 23, 'M', 'ben@gmail.com', '0987659876', 'Gisozi', 'ben', '7654', '2019-09-14 00:12:39');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `passenger_id` int(11) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `passenger_id` int(11) NOT NULL,
  `slip_number` varchar(200) NOT NULL,
  `slip_picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `trip_id` int(11) NOT NULL,
  `from_place` varchar(200) NOT NULL,
  `destination_place` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `driver_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`passenger_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `passenger_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
