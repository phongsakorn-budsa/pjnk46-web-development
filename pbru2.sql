-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2026 at 07:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbru2`
--

-- --------------------------------------------------------

--
-- Table structure for table `age_group`
--

CREATE TABLE `age_group` (
  `age_id` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) DEFAULT NULL,
  `label_age` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `age_group`
--

INSERT INTO `age_group` (`age_id`, `gender`, `min`, `max`, `label_age`) VALUES
(1, 'ชาย', 13, 15, 'รุ่นอายุ 13-15 ปี'),
(2, 'ชาย', 16, 19, 'รุ่นอายุ 16-19 ปี'),
(3, 'ชาย', 20, 29, 'รุ่นอายุ 20-29 ปี'),
(4, 'ชาย', 30, 39, 'รุ่นอายุ 30-39 ปี'),
(5, 'ชาย', 40, 49, 'รุ่นอายุ 40-49 ปี'),
(6, 'ชาย', 50, 59, 'รุ่นอายุ 50-59 ปี'),
(7, 'ชาย', 60, 69, 'รุ่นอายุ 60-69 ปี'),
(8, 'ชาย', 70, NULL, 'รุ่นอายุ 70 ปีขึ้นไป'),
(9, 'หญิง', 13, 15, 'รุ่นอายุ 13-15 ปี'),
(10, 'หญิง', 16, 19, 'รุ่นอายุ 16-19 ปี'),
(11, 'หญิง', 20, 29, 'รุ่นอายุ 20-29 ปี'),
(12, 'หญิง', 30, 39, 'รุ่นอายุ 30-39 ปี'),
(13, 'หญิง', 40, 49, 'รุ่นอายุ 40-49 ปี'),
(14, 'หญิง', 50, 59, 'รุ่นอายุ 50-59 ปี'),
(15, 'หญิง', 60, NULL, 'รุ่นอายุ 60 ปีขึ้นไป'),
(16, 'ชาย', 18, 29, 'รุ่นอายุ 18-29 ปี'),
(17, 'ชาย', 30, 34, 'รุ่นอายุ 30-34 ปี'),
(18, 'ชาย', 35, 39, 'รุ่นอายุ 35-39 ปี'),
(19, 'ชาย', 40, 44, 'รุ่นอายุ 40-44 ปี'),
(20, 'ชาย', 45, 49, 'รุ่นอายุ 45-49 ปี'),
(21, 'ชาย', 50, 54, 'รุ่นอายุ 50-54 ปี'),
(22, 'ชาย', 55, 59, 'รุ่นอายุ 55-59 ปี'),
(23, 'ชาย', 60, 64, 'รุ่นอายุ 60-64 ปี'),
(24, 'ชาย', 65, 69, 'รุ่นอายุ 65-69 ปี'),
(25, 'ชาย', 70, NULL, 'รุ่นอายุ 70 ปีขึ้นไป'),
(26, 'หญิง', 18, 29, 'รุ่นอายุ 18-29 ปี'),
(27, 'หญิง', 30, 34, 'รุ่นอายุ 30-34 ปี'),
(28, 'หญิง', 40, 44, 'รุ่นอายุ 40-44 ปี'),
(29, 'หญิง', 45, 49, 'รุ่นอายุ 45-49 ปี'),
(30, 'หญิง', 50, 54, 'รุ่นอายุ 50-54 ปี'),
(31, 'หญิง', 55, 59, 'รุ่นอายุ 55-59 ปี'),
(32, 'หญิง', 60, NULL, 'รุ่นอายุ 60 ปีขึ้นไป'),
(33, 'หญิง', 35, 39, 'รุ่นอายุ 35-39 ปี');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `regis_id` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `race_type`
--

CREATE TABLE `race_type` (
  `race_id` int(11) NOT NULL,
  `race_name` varchar(100) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `distance` varchar(100) NOT NULL,
  `time_limit` varchar(100) NOT NULL,
  `fee` int(11) NOT NULL,
  `Giveaway` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `race_type`
--

INSERT INTO `race_type` (`race_id`, `race_name`, `start_time`, `distance`, `time_limit`, `fee`, `Giveaway`) VALUES
(1, 'Marathon', '03:00', '42.195 กิโลเมตร', '7 ชั่วโมง', 1000, 'Vest / T-Shirt (Marathon)'),
(2, 'Marathon (70+)', '03:00', '42.195 กิโลเมตร', '7 ชั่วโมง', 0, 'Vest / T-Shirt (Marathon)'),
(3, 'Marathon (ผู้พิการ / handicapped)', '03:00', '42.195 กิโลเมตร', '7 ชั่วโมง', 500, 'Vest / T-Shirt (Marathon)'),
(4, 'Half Marathon', '05:00', '21.1 กิโลเมตร', '4 ชั่วโมง', 800, 'Vest / T-Shirt (Half Marathon)'),
(5, 'Half Marathon (70+)', '05:00', '21.1 กิโลเมตร', '4 ชั่วโมง', 0, 'Vest / T-Shirt (Half Marathon)'),
(6, 'Half Marathon (ผู้พิการ / handicapped)', '05:00', '21.1 กิโลเมตร', '4 ชั่วโมง', 600, 'Vest / T-Shirt (Half Marathon)'),
(7, 'Mini Marathon', '06:00', '10 กิโลเมตร', '2 ชั่วโมง 30 นาที', 600, 'Vest / T-Shirt (Mini Marathon)'),
(8, 'Mini Marathon (70+)', '06:00', '10 กิโลเมตร', '2 ชั่วโมง 30 นาที', 0, 'Vest / T-Shirt (Mini Marathon)'),
(9, 'Mini Marathon (ผู้พิการ / handicapped)', '06:00', '10 กิโลเมตร', '2 ชั่วโมง 30 นาที', 300, 'Vest / T-Shirt (Mini Marathon)');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `regis_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `race_id` int(11) NOT NULL,
  `age_id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `race_type` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `shipping` varchar(100) NOT NULL,
  `shipping_fee` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `role`, `created_at`) VALUES
(1, 'admin01', 'Admin_01', 'admin', '2025-12-22 03:09:32'),
(2, 'kensoyer', '123456zsa', 'admin', '2025-12-24 15:47:03'),
(3, 'ken', '123456zsa', '', '2026-09-30 17:17:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `age_group`
--
ALTER TABLE `age_group`
  ADD PRIMARY KEY (`age_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `regis_id` (`regis_id`);

--
-- Indexes for table `race_type`
--
ALTER TABLE `race_type`
  ADD PRIMARY KEY (`race_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`regis_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `race_id` (`race_id`),
  ADD KEY `age_id` (`age_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `age_group`
--
ALTER TABLE `age_group`
  MODIFY `age_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `race_type`
--
ALTER TABLE `race_type`
  MODIFY `race_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `regis_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`regis_id`) REFERENCES `registration` (`regis_id`);

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `registration_ibfk_2` FOREIGN KEY (`race_id`) REFERENCES `race_type` (`race_id`),
  ADD CONSTRAINT `registration_ibfk_3` FOREIGN KEY (`age_id`) REFERENCES `age_group` (`age_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
