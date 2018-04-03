-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2018 at 06:27 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realstate`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `title`, `description`, `created_at`) VALUES
(1, 'edited title', 'edited desc', '2018-01-13 15:25:13'),
(11, 'Future plan', 'This is our future plan', '2018-01-14 07:11:13'),
(13, 'Agendas', 'These are our agendas', '2018-01-14 07:12:56'),
(14, 'try', 'try desc', '2018-01-14 07:17:55'),
(15, 'aa', 'aaaa', '2018-01-14 07:18:51'),
(16, 'sample', 'This is one of the longest description. I am simply writing a ything...', '2018-01-14 07:30:02'),
(17, 'sample', '                                                            Lorem ipsum is the world Lorem ipsum is the world', '2018-01-14 07:48:21'),
(18, 'sample 2', 'desc 2', '2018-01-14 12:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'nepal', 'nepal', '2018-01-14 15:48:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buyrequest`
--

CREATE TABLE `tbl_buyrequest` (
  `req_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `contact_no` varchar(13) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(13) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `full_name`, `email`, `phone_no`, `address`, `username`, `password`, `created_at`) VALUES
(26, 'Nishant subedi', 'nishantsubedi1996@gmail.com', '9808462775', 'kathmandu', 'nishant', 'e10adc3949ba59abbe56e057f20f883e', '2018-01-12 18:52:53'),
(27, 'ram', 'ram@gmail.com', '9789254789', 'kathmandu', 'ramprasad', 'a152e841783914146e4bcd4f39100686', '2018-01-12 19:17:08'),
(28, 'Ramesh Thapa', 'ramesh@gmail.com', '9841001122', 'Jamal', 'ramesh', '6fc42c4388ed6f0c5a91257f096fef3c', '2018-01-13 10:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter`
--

CREATE TABLE `tbl_newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_newsletter`
--

INSERT INTO `tbl_newsletter` (`id`, `email`, `created_at`) VALUES
(7, 'nepaleverest5@gmail.com', '2018-01-13 10:35:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property`
--

CREATE TABLE `tbl_property` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prop_location` varchar(100) NOT NULL,
  `prop_price` int(11) NOT NULL,
  `category` enum('House','Land','Apartment') NOT NULL,
  `add_type` enum('Normal','Premium') NOT NULL,
  `image_url` varchar(32) NOT NULL,
  `details` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_property`
--

INSERT INTO `tbl_property` (`id`, `user_id`, `prop_location`, `prop_price`, `category`, `add_type`, `image_url`, `details`, `created_at`) VALUES
(8, 45, 'Golfutar', 1000000, 'House', 'Normal', 'try1.jpg', 'good', '0000-00-00 00:00:00'),
(10, 45, 'a11', 1, 'House', 'Normal', 'try2.jpg', 'aa', '2018-01-14 16:35:38'),
(11, 45, 'Jamal', 2200, 'House', 'Normal', 'pp1.PNG', 'good', '2018-01-14 18:03:37'),
(12, 45, 'Bansbari', 2111, 'House', 'Normal', 'try.PNG', 'nice', '2018-01-14 18:05:10'),
(13, 45, 'Hattigaunda', 3111, 'House', 'Normal', 'try2.jpg', 'very nice', '2018-01-14 18:05:41'),
(14, 45, 'Budhanilkantha', 31000, 'House', 'Normal', 'bernabeu1.jpg', 'Fantastic', '2018-01-14 18:07:44'),
(15, 45, 'Bhaktapur', 41000, 'Land', 'Normal', 'pp1.PNG', 'Fantastic', '2018-01-14 18:10:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_buyrequest`
--
ALTER TABLE `tbl_buyrequest`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_property`
--
ALTER TABLE `tbl_property`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_buyrequest`
--
ALTER TABLE `tbl_buyrequest`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_property`
--
ALTER TABLE `tbl_property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
