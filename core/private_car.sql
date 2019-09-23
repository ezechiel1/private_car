-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 23, 2019 at 10:08 PM
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
(3, 'Prado MTK', 'Toyota T10', '(13).jpg', 5, 'RW-9886755', 3, '2019-09-16 17:43:19'),
(4, 'SDF', 'KJHG', 'bg_road2.jpg', 6, '2345', 5, '2019-09-16 17:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comments_id` int(11) NOT NULL,
  `passenger_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `travel_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `category` int(11) NOT NULL,
  `c_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comments_id`, `passenger_id`, `driver_id`, `travel_id`, `message`, `category`, `c_date`) VALUES
(1, 3, 0, 0, 'iugtfjyufjunhbgfnh', 0, '2019-09-18 17:24:08'),
(2, 4, 1, 1, 'l,mj vbgvfkigvf', 1, '2019-09-18 17:41:17'),
(3, 4, 1, 1, 'fcvgkjvcbnm', 0, '2019-09-18 17:46:42'),
(6, 4, 1, 1, 'kujnhyvfjyuhcdgtfrd', 0, '2019-09-18 18:43:52'),
(7, 4, 1, 1, 'd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjnd,k,kcdmhjn', 1, '2019-09-18 18:55:17'),
(8, 4, 1, 1, 'hyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvfhyfd,kmjcd,kcdvf,kvfcdmjvf', 0, '2019-09-18 18:55:41'),
(9, 4, 1, 1, '', 0, '2019-09-18 21:32:42'),
(10, 6, 3, 3, 'hey.. how are you going?', 0, '2019-09-20 17:07:19'),
(11, 6, 3, 3, 'salut pourquoi vous ne dites rien.?', 0, '2019-09-20 19:06:36'),
(12, 6, 3, 3, 'desole j etais occupe...', 0, '2019-09-20 19:13:31'),
(13, 6, 3, 3, 'hey', 0, '2019-09-20 19:17:56'),
(14, 6, 3, 3, 'apa ok', 1, '2019-09-20 19:30:02'),
(15, 6, 3, 3, 'ok ok', 1, '2019-09-20 19:30:29'),
(16, 6, 3, 3, 'pale ni sawa sana', 1, '2019-09-20 19:31:15'),
(17, 6, 3, 3, 'viki una sema kwa?', 1, '2019-09-20 19:32:20'),
(18, 6, 3, 3, 'sinjo ivi  BADIIIIII.....', 1, '2019-09-20 19:33:24'),
(19, 6, 3, 3, 'BONsoir tout le monde je vous appelle depuis KInshasa... minapoenda nizunde mu gari yenu.', 1, '2019-09-20 19:35:21'),
(20, 6, 3, 3, 'salut', 1, '2019-09-20 19:36:08'),
(21, 6, 3, 3, 'bonsoir laba... je suis ezechiel depiuis ulk kigali', 0, '2019-09-20 19:36:42'),
(22, 6, 3, 3, 'bonsoiir ezechiel.. comment allez vous ce soir.. ', 1, '2019-09-20 19:37:42'),
(23, 6, 3, 3, 'voulez-vous voyager?? notre organisation de transport est la meilleure de toutes les entreprises de transport pour parcourir tout le pays de Rwanda. si une fois vous voulez voyager connecter sur notre site provate_car.com et reverver  votre toicker de transport en ligne.', 1, '2019-09-20 19:42:29'),
(24, 6, 3, 3, 'hey', 0, '2019-09-20 19:50:19'),
(25, 6, 3, 3, 'voulez-vous voyager?? notre organisation de transport est la meilleure de toutes les entreprises de transport pour parcourir tout le pays de Rwanda. si une fois vous voulez voyager connecter sur notre site provate_car.com et reverver votre toicker de transport en ligne.voulez-vous voyager?? notre organisation de transport est la meilleure de toutes les entreprises de transport pour parcourir tout le pays de Rwanda. si une fois vous voulez voyager connecter sur notre site provate_car.com et reverver votre toicker de transport en ligne.', 0, '2019-09-20 19:56:40'),
(26, 6, 3, 3, 'hey mbusa', 1, '2019-09-20 23:11:50'),
(27, 6, 3, 3, 'how are you going', 1, '2019-09-20 23:13:00'),
(28, 7, 3, 5, 'hey', 0, '2019-09-20 23:14:58'),
(29, 7, 3, 5, 'hey there', 1, '2019-09-20 23:15:12'),
(30, 8, 1, 6, 'hey kaka', 0, '2019-09-20 23:21:01'),
(31, 8, 1, 6, 'hey there comment ca va??', 1, '2019-09-20 23:21:25'),
(32, 8, 1, 6, 'ca va bien et vous??', 0, '2019-09-20 23:21:45'),
(33, 11, 3, 7, 'hey', 0, '2019-09-20 23:51:51'),
(34, 11, 3, 7, 'fdyufdjufdjyujugfjugffdyufdjufdjyujugfjugffdyufdjufdjyujugfjugffdyufdjufdjyujugfjugffdyufdjufdjyujugfjugffdyufdjufdjyujugfjugffdyufdjufdjyujugfjugffdyufdjufdjyujugfjugffdyufdjufdjyujugfjugffdyufdjufdjyujugfjugffdyufdjufdjyujugfjugf', 1, '2019-09-20 23:52:59');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(11) NOT NULL,
  `f_name` varchar(200) DEFAULT NULL,
  `l_name` varchar(200) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(55) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone_number` varchar(256) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `permit_id` varchar(200) DEFAULT NULL,
  `profile_picture` varchar(200) DEFAULT NULL,
  `c_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `f_name`, `l_name`, `age`, `gender`, `email`, `phone_number`, `address`, `password`, `permit_id`, `profile_picture`, `c_date`) VALUES
(1, 'Ezechiel', 'Ezpk', 26, 'M', 'ezpk@gmail.com', '+250786618405', 'Gisozi', 'ezpk', 'RW12345', 'bg_road2.jpg', '2019-09-15 23:55:01'),
(2, 'BEN MBUSA', 'Victoire', 24, 'M', 'ben@gmail.com', '+250786543213', 'Kagugu', '', 'RW-4567', 'kali_linux_error_unable_to_lock_administration.png', '2019-09-16 16:09:00'),
(3, 'Jams', 'Kanduki', 29, 'M', 'jams@gmail.com', '+250785353647', 'Gisozi', 'jams', 'P0986363-RW', '', '2019-09-16 17:42:33'),
(4, 'victoire', 'muthamu', 20, 'M', 'muthamubenjamin@gmail.com', '09876543', 'congo', '123', '987654', '', '2019-09-16 13:45:23'),
(5, 'victoire', 'muthamu', 30, 'M', 'benjaminmuthamu@yahoo.com', '09876543', 'congo', '123', '987654', '', '2019-09-16 17:37:54'),
(6, 'BEN', 'muth', 29, 'M', 'muthamubenjamin@gmail.com', '09876543', 'congo', '123', '987654', NULL, '2019-09-16 20:56:20');

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
  `passenger_phone` varchar(110) DEFAULT NULL,
  `passenger_address` varchar(200) DEFAULT NULL,
  `passenger_gender` varchar(200) DEFAULT NULL,
  `passenger_age` int(11) DEFAULT NULL,
  `passenger_password` varchar(200) DEFAULT NULL,
  `passenger_c_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`passenger_id`, `passenger_fname`, `passenger_lname`, `passenger_surname`, `passenger_email`, `passenger_phone`, `passenger_address`, `passenger_gender`, `passenger_age`, `passenger_password`, `passenger_c_date`) VALUES
(1, 'ben', 'muth', 'vicky', 'ben@gmail.com', '987654', 'congo', 'M', 20, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2019-09-16 13:39:44'),
(2, 'victoire', 'muthamu', 'vicky', 'benjaminmuthamu@yahoo.com', '9876543', 'congo', 'M', 20, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2019-09-16 14:26:15'),
(3, 'victoire', 'muthamu', 'vicky', 'benja@gmail.com', '9876543', 'congo', 'M', 20, '36eb29d78167c54eb641476024b0bb07d3e17b0a', '2019-09-18 15:14:38'),
(4, 'aa', 'cc', 'bb', 'aa@gmail.com', '98765', 'ddd', 'M', 5, 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', '2019-09-18 15:33:24'),
(5, 'BBB', 'CCC', 'HHHH', 'bbb@gmail.com', '9876555', 'gisozi', 'M', 8, '5cb138284d431abd6a053a56625ec088bfb88912', '2019-09-20 16:03:08'),
(6, 'KKK', 'LLLL', 'NNN', 'kk@gmail.com', '98765600', 'gisozi', 'M', 90, '2ed45186c72f9319dc64338cdf16ab76b44cf3d1', '2019-09-20 17:00:50'),
(7, 'Victoire', 'Muth', 'Viki', 'viki@gmail.com', '98655678', 'gisozi', 'M', 22, '0677f2f7a1e3ff4a3aba77b6f3dec6d0bfb0991e', '2019-09-20 18:33:50'),
(8, 'eze', 'eze', 'eze', 'eze@gmail.com', '9876567', 'gisozi', 'M', 21, 'ee63de610e542592d2e8aceeeb63eb534707b58a', '2019-09-20 18:38:57'),
(9, 'Jacques', 'Jac', 'Jac', 'jac@gmail.com', '09874764747', 'gshgdshgdhg', 'M', 8, 'fbfc7b30e295ecc377035a5bf61db1f06a356c3e', '2019-09-20 21:35:31'),
(10, 'kjhfdsdhjhfGJKJHGF', 'JKHGFDUHYFD', 'JHGFKJHGF', 'jjj@gmail.com', '9876545678', 'ifgjhfd', 'M', 87, 'c84c766f873ecedf75aa6cf35f1e305e095fec83', '2019-09-20 22:07:16'),
(11, 'e', 'e', 'e', 'e@gmail.com', '9865678', 'ghj', 'M', 8, '58e6b3a414a1e090dfc6029add0f3555ccba127f', '2019-09-20 23:50:56'),
(12, 'z', 'x', 'z', 'z@gmail.com', '09876567', '09876567', 'M', 9, '395df8f7c51f007019cb30201c49e884b46b92fa', '2019-09-20 23:57:13');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `bank_name` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `passenger_id` int(11) NOT NULL,
  `slip_number` varchar(200) NOT NULL,
  `slip_picture` varchar(200) NOT NULL,
  `c_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `bank_name`, `amount`, `date`, `passenger_id`, `slip_number`, `slip_picture`, `c_date`) VALUES
(1, 'Bank of Kigali', 1234, '2019-08-28', 1, '321', 'fardc_prise_d_arme2.jpg', '2019-09-16 15:25:22'),
(2, 'Access Bank', 1234, '2019-09-06', 1, '321', 'followup1.jpg', '2019-09-18 15:15:11'),
(3, 'Access Bank', 3300, '2019-09-18', 1, '', 'fardc_prise_d_arme2.jpg', '2019-09-18 15:34:04'),
(4, 'Access Bank', 3300, '2019-09-20', 5, '3763', 'fardc_prise_d_arme2.jpg', '2019-09-20 16:59:39'),
(5, 'Bank of Kigali', 8000, '2019-09-20', 6, '300', 'fardc_prise_d_arme2.jpg', '2019-09-20 17:02:51'),
(6, 'Access Bank', 777, '2019-09-20', 6, '777', 'kali_linux_error_unable_to_lock_administration.png', '2019-09-20 17:05:25'),
(7, 'I & M(Former BCR)/Kigali', 5000, '2019-09-20', 6, '8000', 'bg_road2.jpg', '2019-09-20 17:06:47'),
(8, 'Eco Bank/Kigali(Former BCDI)', 4000, '2019-09-20', 7, '4000', 'fardc_prise_d_arme2.jpg', '2019-09-20 18:34:20'),
(9, 'Eco Bank/Kigali(Former BCDI)', 4000, '2019-09-20', 7, '4000', 'fardc_prise_d_arme2.jpg', '2019-09-20 18:34:20'),
(10, 'Kenya Commercial BanK', 8000, '2019-09-20', 8, '8000', 'bg_road2.jpg', '2019-09-20 18:39:29'),
(11, 'Access Bank', 600, '2019-09-20', 11, '800', 'city.png', '2019-09-20 23:51:28'),
(12, 'Equity Bank', 9000, '2019-09-20', 12, '9000', 'city.png', '2019-09-20 23:57:27'),
(13, 'Bank of Kigali', 9000, '2019-09-21', 12, '9000', 'city.png', '2019-09-21 00:02:56');

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
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`travel_id`, `trip_id`, `passenger_id`, `payment_id`, `c_date`) VALUES
(1, 1, 4, 1, '2019-09-18 11:26:25'),
(2, 8, 6, 6, '2019-09-20 17:05:25'),
(3, 8, 6, 7, '2019-09-20 17:06:47'),
(4, 8, 7, 8, '2019-09-20 18:34:20'),
(5, 8, 7, 9, '2019-09-20 18:34:20'),
(6, 2, 8, 10, '2019-09-20 18:39:29'),
(7, 6, 11, 11, '2019-09-20 23:51:28'),
(8, 6, 12, 12, '2019-09-20 23:57:27'),
(9, 6, 12, 13, '2019-09-21 00:02:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comments_id`);

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
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comments_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `passenger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `set_travel`
--
ALTER TABLE `set_travel`
  MODIFY `trip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `travel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
