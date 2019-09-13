-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 13, 2019 at 03:07 PM
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
  `car_name` varchar(200) NOT NULL,
  `car_model` varchar(200) NOT NULL,
  `car_picture` varchar(200) NOT NULL,
  `car_seat` int(11) NOT NULL,
  `plack_number` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(11) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date_of_birth` date NOT NULL,
  `password` varchar(200) NOT NULL,
  `price_of_place` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT;

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
