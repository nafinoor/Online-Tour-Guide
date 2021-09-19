-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 10:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otg`
--
CREATE DATABASE IF NOT EXISTS `otg` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `otg`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `password`) VALUES
(801, 'Paul', '7890'),
(802, 'kumar', '6543');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `d_date` date NOT NULL,
  `d_time` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `noOfPerson` varchar(45) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `user_id`, `p_id`, `d_date`, `d_time`, `mobile`, `noOfPerson`, `trans_id`, `h_id`) VALUES
(3001, 5001, 4001, '2021-09-18', '09:30', '01521560406', '1', 9001, 7001),
(3002, 5002, 4001, '2021-09-22', '18:55', '01627600504', '2', 9002, 7001),
(3003, 5003, 4001, '2021-09-09', '20:04', '01306989647', '2', 9001, 7001),
(3004, 5004, 4003, '2021-09-07', '19:06', '0169999999', '1', 9005, 7004),
(3005, 5005, 4003, '2021-10-01', '15:38', '01987525417', '2', 9005, 7004),
(3006, 5011, 4003, '2021-09-22', '', '01892222222', '1', 9005, 7004);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `h_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `h_fare` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`h_id`, `name`, `h_fare`, `p_id`) VALUES
(7001, 'Hotel Diana Residential', 1000, 4001),
(7002, 'New Ekota Residential Hotel', 800, 4001),
(7003, 'HOTEL SHALIMAR INT\'L (RESIDENTIAL)', 1100, 4002),
(7004, 'HOTEL METROPOLITAN INTL', 1200, 4003);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `p_id` int(11) NOT NULL,
  `place` varchar(45) NOT NULL,
  `p_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`p_id`, `place`, `p_cost`) VALUES
(4001, 'KEOKRADONG', 6000),
(4002, 'TAZINGDONG', 5000),
(4003, 'COX\'S BAZAR', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `t_id` int(9) NOT NULL,
  `tourist_spot` varchar(45) NOT NULL,
  `review_details` varchar(1200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`t_id`, `tourist_spot`, `review_details`, `user_id`) VALUES
(1001, 'cox bazar', 'good', 5001),
(1002, 'Sajek', 'great', 5002),
(1003, 'Kuakata', 'excellent.', 5003),
(1006, 'Kuakata', 'Kub Nice Lagsa.', 5001);

-- --------------------------------------------------------

--
-- Stand-in structure for view `showbooking`
-- (See below for the actual view)
--
CREATE TABLE `showbooking` (
`Booking ID` int(11)
,`USER ID` int(11)
,`User Name` varchar(45)
,`Email ID` varchar(45)
,`Contact` varchar(45)
,`Package ID` int(11)
,`Transport` varchar(45)
,`Hotel` varchar(45)
,`Date` date
,`Time` varchar(45)
,`Amount(TK)` double
);

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `trans_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `trans_fare` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`trans_id`, `name`, `trans_fare`, `p_id`) VALUES
(9001, 'ENA ENTERPRISE', 500, 4001),
(9002, 'RAIDA DELUXE', 900, 4001),
(9003, 'HANIF ENTERPRISE', 600, 4002),
(9004, 'SAUDIA LOCAL BUS SERVICE', 400, 4002),
(9005, 'GREEN LINE', 1200, 4003),
(9006, 'TURAG LOCAL BUS SERVICE', 150, 4003);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `email_id` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `email_id`, `password`) VALUES
(5001, 'Nafi Bin', 'Noor', 'nafi.noor@northsouth.edu', '5680'),
(5002, 'Fahmid', 'Abrar', 'fahmid.samin@northsouth.edu', '1234'),
(5003, 'Saadman Ahmed', 'Udoy', 'ahmed.udoy@gmail.com', '45678'),
(5004, 'abc', 'de', 'abc@gamil.com', '1234'),
(5005, 'Walter', 'Lewin', 'w.lewin@gmail.com', '5678'),
(5010, 'Teressa', 'Lisbon', 't.lisbon@yahoo.com', '5680'),
(5011, 'Jenny', 'Paul', 'jenny.paul@yahoo.com', '6789'),
(5012, 'Jenny', 'Kumar', 'j.kumar@yahoo.com', '5680'),
(5013, 'Jenny', 'Kumar', 'j.kumar@yahoo.com', '5680'),
(5014, 'Jenny', 'K', 'j.kumar@ovi.com', '23'),
(5016, 'Nishat', 'Noor', 'nishat_noor@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Structure for view `showbooking`
--
DROP TABLE IF EXISTS `showbooking`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `showbooking`  AS SELECT DISTINCT `b`.`b_id` AS `Booking ID`, `b`.`user_id` AS `USER ID`, `u`.`fname` AS `User Name`, `u`.`email_id` AS `Email ID`, `b`.`mobile` AS `Contact`, `p`.`p_id` AS `Package ID`, `t`.`name` AS `Transport`, `h`.`name` AS `Hotel`, `b`.`d_date` AS `Date`, `b`.`d_time` AS `Time`, (`h`.`h_fare` + `p`.`p_cost` + `t`.`trans_fare`) * `b`.`noOfPerson` AS `Amount(TK)` FROM ((((`booking` `b` join `user` `u`) join `transport` `t`) join `hotel` `h`) join `package` `p`) WHERE `b`.`user_id` = `u`.`user_id` AND `b`.`p_id` = `p`.`p_id` AND `b`.`h_id` = `h`.`h_id` AND `b`.`trans_id` = `t`.`trans_id` GROUP BY `b`.`d_date` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `trans_id` (`trans_id`),
  ADD KEY `h_id` (`h_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`h_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=803;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3007;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7005;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4004;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `t_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9007;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5017;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `package` (`p_id`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`trans_id`) REFERENCES `transport` (`trans_id`),
  ADD CONSTRAINT `booking_ibfk_4` FOREIGN KEY (`h_id`) REFERENCES `hotel` (`h_id`);

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `package` (`p_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `transport`
--
ALTER TABLE `transport`
  ADD CONSTRAINT `transport_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `package` (`p_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
