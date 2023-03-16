-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 05:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phone`
--

-- --------------------------------------------------------

--
-- Table structure for table `phone_details`
--

CREATE TABLE `phone_details` (
  `id` int(11) NOT NULL,
  `phone_name` varchar(155) NOT NULL,
  `phone_price` int(11) NOT NULL,
  `phone_display_title` varchar(50) NOT NULL,
  `phone_display_detail` varchar(155) NOT NULL,
  `phone_camera_title` varchar(50) NOT NULL,
  `phone_camera_detail` varchar(155) NOT NULL,
  `phone_cpu_title` varchar(50) NOT NULL,
  `phone_cpu_details` varchar(155) NOT NULL,
  `phone_system_title` varchar(50) NOT NULL,
  `phone_system_details` varchar(155) NOT NULL,
  `phone_memory` varchar(155) NOT NULL,
  `phone_battery` varchar(155) NOT NULL,
  `phone_image_path` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phone_details`
--

INSERT INTO `phone_details` (`id`, `phone_name`, `phone_price`, `phone_display_title`, `phone_display_detail`, `phone_camera_title`, `phone_camera_detail`, `phone_cpu_title`, `phone_cpu_details`, `phone_system_title`, `phone_system_details`, `phone_memory`, `phone_battery`, `phone_image_path`) VALUES
(1, 'Samsung', 3999, '6.6\"', 'Dynamic Amoled 2x 24-bit 1440 x 3088 pixel', '200 mp + 10 mp ', 'ultra-wide front camera 12 mp', 'Qualcomm Snapdragon 8 Gen 2 ', '3.2 Ghz', 'One UI', 'One ui 5.1 based on android 13', 'RAM 8/12 GB ROM 256/512GB', '5000 mAh fast charge 45W', 'Nokia-C22.png'),
(2, 'Huawei', 9999, '6.4\"', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phone_details`
--
ALTER TABLE `phone_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phone_details`
--
ALTER TABLE `phone_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
