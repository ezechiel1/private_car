-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 16, 2019 at 06:47 PM
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
(1, 'Mercedece VW-450', 'Toyota T10', '(95).jpg', 3, 'VW-450-098', 1, '2019-09-15 23:56:20'),
(2, 'Noah BMW-910', 'New Model', '(17).jpg', 4, 'R90203', 2, '2019-09-16 16:11:37'),
(3, 'Prado MTK', 'Toyota T10', '(13).jpg', 5, 'RW-9886755', 3, '2019-09-16 17:43:19');

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
(1, 'Ezechiel', 'Ezpk', 26, 'M', 'ezpk@gmail.com', '+250786618405', 'Gisozi', 'ezpk', 'RW123456', '2019-09-15 23:55:01'),
(2, 'BENJAMIN', 'Victoire', 24, 'M', 'ben@gmail.com', '+250786543213', 'Kagugu', 'ben', 'RW-4567', '2019-09-16 16:09:00'),
(3, 'Jams', 'Kanduki', 29, 'M', 'jams@gmail.com', '+250785353647', 'Gisozi', 'jams', 'P0986363-RW', '2019-09-16 17:42:33');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `passenger_id` int(11) NOT NULL,
  `passenger_fname` varchar(200) DEFAULT NULL,
  `passenger_lname` varchar(200) DEFAULT NULL,
  `passenger_surname` varchar(200) DEFAULT NULL,
  `passenger_email` varchar(200) DEFAULT NULL,
  `passenger_phone` int(11) DEFAULT NULL,
  `passenger_address` varchar(200) DEFAULT NULL,
  `passenger_gender` varchar(200) DEFAULT NULL,
  `passenger_age` int(11) DEFAULT NULL,
  `passenger_password` varchar(200) DEFAULT NULL,
  `passenger_c_date` datetime NOT NULL
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
-- Table structure for table `set_travel`
--

CREATE TABLE `set_travel` (
  `trip_id` int(11) NOT NULL,
  `from_place` varchar(256) NOT NULL,
  `destination_place` varchar(256) NOT NULL,
  `from_date` date NOT NULL,
  `from_time` time NOT NULL,
  `available_seats` int(11) NOT NULL,
  `travel_fees` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `c_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `set_travel`
--

INSERT INTO `set_travel` (`trip_id`, `from_place`, `destination_place`, `from_date`, `from_time`, `available_seats`, `travel_fees`, `driver_id`, `car_id`, `status`, `c_date`) VALUES
(1, 'Gisenyi', 'Kigali', '2019-09-15', '09:00:00', 3, 3300, 1, 1, 0, '2019-09-15 23:58:46'),
(2, 'Gisenyi', 'Musanze', '2019-09-16', '14:00:00', 3, 2000, 1, 1, 0, '2019-09-16 00:00:25'),
(3, 'Gisenyi', 'Kigali', '2019-09-16', '20:08:00', 4, 3100, 2, 2, 0, '2019-09-16 16:12:48'),
(4, 'Nyirangarama', 'Kigali', '2019-09-16', '15:00:00', 4, 1500, 2, 2, 0, '2019-09-16 17:38:27'),
(5, 'Gisenyi', 'Kigali', '2019-09-16', '21:00:00', 4, 3500, 2, 2, 0, '2019-09-16 17:40:30'),
(6, 'Gisenyi', 'Kigali', '2019-09-16', '09:00:00', 5, 3500, 3, 3, 0, '2019-09-16 17:43:56'),
(7, 'Musanze', 'Gisenyi', '2019-09-16', '09:09:00', 4, 3500, 3, 3, 0, '2019-09-16 17:54:09'),
(8, 'Musanze', 'Gisenyi', '2019-09-16', '16:00:00', 4, 3300, 3, 3, 0, '2019-09-16 17:54:54'),
(9, 'Musanze', 'Kigali', '2019-09-16', '09:00:00', 3, 3300, 3, 3, 0, '2019-09-16 17:55:48');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `travel_id` int(11) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `passenger_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `c_date` datetime NOT NULL
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
-- Indexes for table `set_travel`
--
ALTER TABLE `set_travel`
  ADD PRIMARY KEY (`trip_id`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`travel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

--
-- AUTO_INCREMENT for table `set_travel`
--
ALTER TABLE `set_travel`
  MODIFY `trip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `travel_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
