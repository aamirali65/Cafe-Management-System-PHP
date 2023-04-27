-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2021 at 10:03 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `black`
--

-- --------------------------------------------------------

--
-- Table structure for table `catlog`
--

CREATE TABLE `catlog` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catlog`
--

INSERT INTO `catlog` (`id`, `name`, `status`) VALUES
(2, 'Fast Food', 1),
(3, 'Rolls', 1),
(5, 'BBQ', 1),
(7, 'Tea', 1),
(8, 'Deals', 1);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_order`
--

CREATE TABLE `delivery_order` (
  `d_id` int(11) NOT NULL,
  `items` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `p_no` varchar(20) DEFAULT NULL,
  `w_id` int(11) DEFAULT NULL,
  `o_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(500) DEFAULT NULL,
  `qty` int(11) DEFAULT '1',
  `t_price` int(11) DEFAULT NULL,
  `e_time` timestamp(6) NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exp_head`
--

CREATE TABLE `exp_head` (
  `e_Id` int(11) NOT NULL,
  `exp_head` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exp_head`
--

INSERT INTO `exp_head` (`e_Id`, `exp_head`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Table structure for table `items_and_deals`
--

CREATE TABLE `items_and_deals` (
  `i_id` int(11) NOT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `item_type` int(11) DEFAULT '0',
  `item_cat` int(11) NOT NULL,
  `items` varchar(510) DEFAULT '',
  `item_price` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items_and_deals`
--

INSERT INTO `items_and_deals` (`i_id`, `item_name`, `item_type`, `item_cat`, `items`, `item_price`) VALUES
(1, 'Chicken Roll', 1, 3, '', 100),
(2, 'Zinger Burger', 1, 2, '', 200),
(4, 'Elaichi Tea', 1, 2, '', 200),
(6, 'Zinger Burgerr', 1, 2, '', 160),
(7, 'Chicken green (full)', 1, 2, '', 70),
(8, 'Zinger Burgerrr', 1, 2, '', 200),
(9, 'Deal 1', 1, 8, '', 250);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `logo` varchar(300) NOT NULL,
  `address` varchar(120) NOT NULL,
  `number` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `logo`, `address`, `number`) VALUES
(1, 'IMG_0018.JPG', 'fgdfgdfgdfgdf', 4545645);

-- --------------------------------------------------------

--
-- Table structure for table `table_orders`
--

CREATE TABLE `table_orders` (
  `o_id` int(11) NOT NULL,
  `t_no` int(11) DEFAULT NULL,
  `items` varchar(1000) DEFAULT NULL,
  `addr` varchar(500) DEFAULT NULL,
  `o_addedBy` int(11) DEFAULT NULL,
  `o_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_orders`
--

INSERT INTO `table_orders` (`o_id`, `t_no`, `items`, `addr`, `o_addedBy`, `o_time`) VALUES
(11, 2, '[{\"id:\":\"2\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"7\",\"qty\":\"1\"},{\"id:\":\"8\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 16:37:05'),
(10, 9286, '[{\"id:\":\"7\",\"qty\":\"1\"},{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"8\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', 'House number  mc 101', NULL, '2021-09-13 17:02:05'),
(9, 1, '[{\"id:\":\"4\",\"qty\":\"3\"},{\"id:\":\"7\",\"qty\":\"1\"},{\"id:\":\"6\",\"qty\":\"1\"}]', '0', NULL, '2021-09-13 17:01:36'),
(12, 1, '[{\"id:\":\"2\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"6\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 16:37:45'),
(13, 1, '[]', '0', NULL, '2021-09-14 16:44:47'),
(14, 1, '[]', '0', NULL, '2021-09-14 16:47:07'),
(15, 9286, '[{\"id:\":\"2\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"6\",\"qty\":\"1\"}]', 'asdasd', NULL, '2021-09-14 18:04:36'),
(16, 2, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:13:21'),
(17, 2, '[]', '0', NULL, '2021-09-14 18:14:19'),
(18, 2, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:14:54'),
(19, 3, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:15:28'),
(20, 1, '[{\"id:\":\"4\",\"qty\":\"3\"},{\"id:\":\"2\",\"qty\":\"3\"}]', '0', NULL, '2021-09-14 18:16:04'),
(21, 1, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:16:40'),
(22, 2, '[{\"id:\":\"7\",\"qty\":\"1\"},{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:17:11'),
(23, 2, '[]', '0', NULL, '2021-09-14 18:18:17'),
(24, 1, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:18:49'),
(25, 1, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:19:24'),
(26, 1, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"},{\"id:\":\"1\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:20:09'),
(27, 2, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:21:20'),
(28, 9286, '[{\"id:\":\"4\",\"qty\":\"2\"},{\"id:\":\"2\",\"qty\":\"2\"}]', '', NULL, '2021-09-14 18:23:14'),
(29, 2, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:25:11'),
(30, 2, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:25:33'),
(31, 2, '[{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:26:09'),
(32, 1, '[{\"id:\":\"2\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:26:55'),
(33, 1, '[]', '0', NULL, '2021-09-14 18:30:04'),
(34, 3, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:37:46'),
(35, 9286, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '', NULL, '2021-09-14 18:39:07'),
(36, 2, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:40:35'),
(37, 4, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:41:15'),
(38, 4, '[]', '0', NULL, '2021-09-14 18:42:17'),
(39, 1, '[{\"id:\":\"1\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:42:25'),
(40, 2, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:43:31'),
(41, 3, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:44:51'),
(42, 3, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:47:11'),
(43, 4, '[{\"id:\":\"2\",\"qty\":\"1\"},{\"id:\":\"1\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:47:53'),
(44, 2, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:51:41'),
(45, 3, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:52:48'),
(46, 2, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"},{\"id:\":\"1\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:53:51'),
(47, 3, '[{\"id:\":\"2\",\"qty\":\"1\"},{\"id:\":\"1\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:54:20'),
(48, 1, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"},{\"id:\":\"1\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:54:45'),
(49, 1, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:56:01'),
(50, 1, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:56:39'),
(51, 2, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"},{\"id:\":\"1\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:57:17'),
(52, 2, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 18:59:23'),
(53, 2, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:01:06'),
(54, 1, '[{\"id:\":\"7\",\"qty\":\"1\"},{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:01:55'),
(55, 4, '[{\"id:\":\"7\",\"qty\":\"1\"},{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:03:42'),
(56, 2, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:04:33'),
(57, 9286, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '', NULL, '2021-09-14 19:05:33'),
(58, 9286, '[]', '', NULL, '2021-09-14 19:06:09'),
(59, 2, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:06:35'),
(60, 9286, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '', NULL, '2021-09-14 19:07:59'),
(61, 1, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:11:53'),
(62, 3, '[{\"id:\":\"4\",\"qty\":\"2\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:13:29'),
(63, 3, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:15:49'),
(64, 3, '[{\"id:\":\"7\",\"qty\":\"1\"},{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:17:26'),
(65, 2, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:18:44'),
(66, 2, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:20:40'),
(67, 2, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:21:18'),
(68, 2, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:22:06'),
(69, 2, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:23:21'),
(70, 3, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:23:50'),
(71, 2, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:27:43'),
(72, 9286, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '', NULL, '2021-09-14 19:28:54'),
(73, 2, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:30:27'),
(74, 4, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:31:21'),
(75, 2, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:33:05'),
(76, 5, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:34:39'),
(77, 2, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:36:09'),
(78, 4, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"2\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:37:27'),
(79, 2, '[{\"id:\":\"7\",\"qty\":\"1\"},{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:42:05'),
(80, 5, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:42:56'),
(81, 3, '[{\"id:\":\"7\",\"qty\":\"1\"},{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:43:48'),
(82, 3, '[{\"id:\":\"7\",\"qty\":\"1\"},{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:44:31'),
(83, 7, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:45:12'),
(84, 3, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:46:16'),
(85, 3, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:48:27'),
(86, 5, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:51:42'),
(87, 4, '[{\"id:\":\"8\",\"qty\":\"1\"},{\"id:\":\"7\",\"qty\":\"1\"},{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:57:20'),
(88, 3, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:58:20'),
(89, 5, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:58:52'),
(90, 5, '[{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 19:59:33'),
(91, 3, '[{\"id:\":\"6\",\"qty\":\"1\"},{\"id:\":\"4\",\"qty\":\"1\"},{\"id:\":\"2\",\"qty\":\"1\"}]', '0', NULL, '2021-09-14 20:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add`
--

CREATE TABLE `tbl_add` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_add`
--

INSERT INTO `tbl_add` (`id`, `name`, `status`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(0, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(20) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `full_name`, `father_name`, `email`, `number`, `user_name`, `pass`, `role`, `dob`, `image`, `active`, `date`) VALUES
(1, 'Adnan', 'Afzal', 'adnanafzal@gmail.com', '03082093681', 'addi_arain', '1234567890', '1', '2021-09-15', 'IMG_0122.JPG', 1, '2021-09-14 15:01:47'),
(2, 'Muhammad Arsalan', 'Abdul Razzaq', 'arsalanrazzaq613@hotmail.com', '03082093681', 'arsalan_shani', '12345', '1', '1995-09-20', 'a.png', 1, '2019-09-22 14:12:25'),
(7, 'Muhammad Arsalan', 'Muhammad ', 'arsalanrazzaq613@hotmail.com', '0308293681', 'addi_arainn', '1234567890', '1', '2021-09-13', 'IMG_0123.JPG', 1, '2021-09-14 15:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `temp_orders`
--

CREATE TABLE `temp_orders` (
  `t_id` int(11) NOT NULL,
  `table_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `i_id` int(11) DEFAULT NULL,
  `delivery_add` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_orders`
--

INSERT INTO `temp_orders` (`t_id`, `table_id`, `qty`, `i_id`, `delivery_add`) VALUES
(217, 1, 2, 4, 'hello'),
(216, 1, 2, 2, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `w_id` int(11) NOT NULL,
  `w_fname` varchar(100) DEFAULT NULL,
  `w_lname` varchar(100) DEFAULT NULL,
  `w_pno` varchar(20) DEFAULT NULL,
  `w_nicno` varchar(20) DEFAULT NULL,
  `w_address` varchar(100) DEFAULT NULL,
  `u_type` int(11) DEFAULT '0',
  `u_salary` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catlog`
--
ALTER TABLE `catlog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `delivery_order`
--
ALTER TABLE `delivery_order`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `exp_head`
--
ALTER TABLE `exp_head`
  ADD PRIMARY KEY (`e_Id`);

--
-- Indexes for table `items_and_deals`
--
ALTER TABLE `items_and_deals`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_orders`
--
ALTER TABLE `table_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `tbl_add`
--
ALTER TABLE `tbl_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `temp_orders`
--
ALTER TABLE `temp_orders`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catlog`
--
ALTER TABLE `catlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `delivery_order`
--
ALTER TABLE `delivery_order`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exp_head`
--
ALTER TABLE `exp_head`
  MODIFY `e_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items_and_deals`
--
ALTER TABLE `items_and_deals`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_orders`
--
ALTER TABLE `table_orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `temp_orders`
--
ALTER TABLE `temp_orders`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
