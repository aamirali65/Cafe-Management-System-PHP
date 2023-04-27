-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2023 at 07:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `catlog`
--

CREATE TABLE `catlog` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catlog`
--

INSERT INTO `catlog` (`id`, `name`, `status`) VALUES
(8, 'All', 1),
(9, 'Fries', 1),
(10, 'juices', 1),
(11, 'Drinks', 1),
(12, 'Snacks', 1),
(13, 'Fast Food', 1);

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
  `o_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(500) DEFAULT NULL,
  `qty` int(11) DEFAULT 1,
  `t_price` int(11) DEFAULT NULL,
  `e_time` timestamp(6) NULL DEFAULT current_timestamp(6)
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
  `item_type` int(11) DEFAULT 0,
  `item_cat` int(11) NOT NULL,
  `items` varchar(510) DEFAULT '',
  `item_price` int(11) DEFAULT NULL,
  `stock` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items_and_deals`
--

INSERT INTO `items_and_deals` (`i_id`, `item_name`, `item_type`, `item_cat`, `items`, `item_price`, `stock`) VALUES
(18, 'Fruita Vital Red Grapes', 1, 8, '', 70, 0),
(17, 'Coffee', 1, 11, '', 150, 0),
(12, 'Water ( L  )', 1, 11, '', 100, 0),
(13, 'Fries ', 1, 9, '', 180, 0),
(16, 'Tea ', 1, 11, '', 80, 0),
(15, 'Slice Juice', 1, 8, '', 60, 72),
(11, 'Water ( S )', 1, 11, '', 50, 216),
(21, 'Fruita Vital Orange', 1, 8, '', 60, 0),
(20, 'Fruita Vitals Royal Mangoes', 1, 8, '', 60, 0),
(22, 'Chicken Sandwich', 1, 13, '', 90, 0),
(23, 'Sting', 1, 11, '', 80, 50),
(27, 'Lays', 1, 12, '', 60, 96),
(25, '7up', 1, 11, '', 60, 50),
(26, 'Cheetos', 1, 12, '', 50, 32),
(30, 'Fruita Vital Red Grapes', 1, 10, '', 80, 20),
(31, 'Fruita Vital Mango', 1, 10, '', 60, 20),
(32, 'Pepsi', 1, 11, '', 60, 96),
(33, 'Slice Juice', 1, 10, '', 60, 24),
(34, 'Fruita Vital Orange', 1, 10, '', 60, 24),
(35, 'Brownies', 1, 8, '', 150, 0),
(46, 'Samosa', 1, 12, '', 50, 0),
(45, 'Dew ', 1, 11, '', 60, 96),
(47, 'Mirinda', 1, 11, '', 60, 0),
(48, 'Cardamom Tea', 1, 11, '', 100, 0),
(51, 'Pizza Slice', 1, 13, '', 130, 0),
(52, 'Brownies', 1, 13, '', 150, 0);

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
(1, 'Marksman Cafe', 'R46C+3PC, Korangi Creek, Karachi, Karachi City, Sindh', 3082093681);

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
  `o_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_orders`
--

INSERT INTO `table_orders` (`o_id`, `t_no`, `items`, `addr`, `o_addedBy`, `o_time`) VALUES
(245, 2, '[{\"id:\":\"27\",\"qty\":\"1\"}]', '0', 8, '2023-03-05 18:03:55'),
(244, 6, '[{\"id:\":\"23\",\"qty\":\"3\"}]', '0', 8, '2023-03-05 17:56:42'),
(243, 4, '[{\"id:\":\"52\",\"qty\":\"1\"},{\"id:\":\"51\",\"qty\":\"1\"},{\"id:\":\"25\",\"qty\":\"1\"}]', '0', 8, '2023-03-05 17:52:03'),
(242, 6, '[{\"id:\":\"46\",\"qty\":\"9\"},{\"id:\":\"29\",\"qty\":\"1\"},{\"id:\":\"22\",\"qty\":\"1\"},{\"id:\":\"16\",\"qty\":\"1\"}]', '0', 8, '2023-03-05 16:36:22'),
(241, 7, '[{\"id:\":\"17\",\"qty\":\"1\"}]', '0', 8, '2023-03-05 16:02:22'),
(240, 2, '[{\"id:\":\"16\",\"qty\":\"9\"}]', '0', 8, '2023-03-05 15:34:52'),
(239, 7, '[{\"id:\":\"17\",\"qty\":\"1\"}]', '0', 8, '2023-03-05 15:12:14'),
(235, 6, '[{\"id:\":\"23\",\"qty\":\"1\"},{\"id:\":\"48\",\"qty\":\"1\"}]', '0', 8, '2023-03-05 14:45:47'),
(234, 9, '[{\"id:\":\"13\",\"qty\":\"1\"}]', '0', 8, '2023-03-05 14:39:13'),
(232, 5, '[{\"id:\":\"51\",\"qty\":\"1\"}]', '0', 8, '2023-03-05 14:28:49'),
(231, 4, '[{\"id:\":\"12\",\"qty\":\"1\"},{\"id:\":\"46\",\"qty\":\"1\"},{\"id:\":\"23\",\"qty\":\"1\"}]', '0', 8, '2023-03-05 13:58:38'),
(230, 7, '[{\"id:\":\"16\",\"qty\":\"24\"}]', '0', 8, '2023-03-05 13:54:16'),
(233, 6, '[{\"id:\":\"23\",\"qty\":\"1\"},{\"id:\":\"51\",\"qty\":\"1\"}]', '0', 8, '2023-03-05 14:37:35'),
(228, 2, '[{\"id:\":\"32\",\"qty\":\"4\"}]', '0', 8, '2023-03-05 13:20:29'),
(226, 1, '[{\"id:\":\"16\",\"qty\":\"1\"}]', '0', 8, '2023-03-05 12:43:33'),
(227, 2, '[{\"id:\":\"51\",\"qty\":\"2\"},{\"id:\":\"23\",\"qty\":\"1\"},{\"id:\":\"32\",\"qty\":\"1\"}]', '0', 8, '2023-03-05 13:15:24'),
(225, 2, '[{\"id:\":\"17\",\"qty\":\"1\"}]', '0', 8, '2023-03-05 12:31:46'),
(224, 1, '[{\"id:\":\"12\",\"qty\":\"1\"}]', '0', 8, '2023-03-05 12:29:41'),
(222, 5, '[{\"id:\":\"51\",\"qty\":\"1\"}]', '0', 8, '2023-03-05 11:27:19'),
(223, 3, '[{\"id:\":\"16\",\"qty\":\"9\"}]', '0', 8, '2023-03-05 11:49:37'),
(220, 6, '[{\"id:\":\"23\",\"qty\":\"4\"},{\"id:\":\"51\",\"qty\":\"4\"}]', '0', 8, '2023-03-05 11:19:18'),
(219, 4, '[{\"id:\":\"46\",\"qty\":\"1\"}]', '0', 8, '2023-03-05 10:49:35'),
(218, 1, '[{\"id:\":\"12\",\"qty\":\"1\"},{\"id:\":\"17\",\"qty\":\"1\"}]', '0', 8, '2023-03-05 10:34:49'),
(246, 1, '[{\"id:\":\"27\",\"qty\":\"1\"}]', '0', 8, '2023-03-07 09:00:48'),
(247, 1, '[{\"id:\":\"30\",\"qty\":\"1\"},{\"id:\":\"31\",\"qty\":\"2\"},{\"id:\":\"11\",\"qty\":\"2\"},{\"id:\":\"26\",\"qty\":\"1\"}]', '0', 8, '2023-03-07 09:03:18'),
(248, 2, '[{\"id:\":\"26\",\"qty\":\"1\"}]', '0', 8, '2023-03-07 09:04:45'),
(249, 3, '[{\"id:\":\"34\",\"qty\":\"2\"}]', '0', 8, '2023-03-07 09:06:26'),
(250, 2, '[{\"id:\":\"11\",\"qty\":\"2\"}]', '0', 8, '2023-03-07 09:11:31'),
(251, 2, '[{\"id:\":\"11\",\"qty\":\"1\"},{\"id:\":\"16\",\"qty\":\"1\"}]', '0', 8, '2023-03-07 09:11:57'),
(252, 3, '[{\"id:\":\"16\",\"qty\":\"6\"}]', '0', 8, '2023-03-07 09:24:42'),
(253, 3, '[]', '0', 8, '2023-03-07 09:25:04'),
(254, 1, '[{\"id:\":\"23\",\"qty\":\"3\"}]', '0', 8, '2023-03-07 09:40:12'),
(255, 1, '[{\"id:\":\"16\",\"qty\":\"1\"},{\"id:\":\"12\",\"qty\":\"2\"}]', '0', 8, '2023-03-07 10:30:06'),
(256, 1, '[{\"id:\":\"23\",\"qty\":\"1\"}]', '0', 8, '2023-03-07 11:07:22'),
(257, 2, '[{\"id:\":\"27\",\"qty\":\"1\"}]', '0', 8, '2023-03-07 11:44:29'),
(258, 5, '[{\"id:\":\"23\",\"qty\":\"1\"}]', '0', 8, '2023-03-07 12:30:26'),
(259, 3, '[{\"id:\":\"23\",\"qty\":\"1\"},{\"id:\":\"13\",\"qty\":\"1\"}]', '0', 8, '2023-03-07 14:06:15'),
(260, 3, '[{\"id:\":\"13\",\"qty\":\"2\"}]', '0', 8, '2023-03-07 14:07:16'),
(262, 10, '[{\"id:\":\"32\",\"qty\":\"1\"}]', '0', 8, '2023-03-07 15:21:55'),
(263, 10, '[{\"id:\":\"27\",\"qty\":\"1\"}]', '0', 8, '2023-03-07 15:27:27'),
(264, 7, '[{\"id:\":\"27\",\"qty\":\"1\"}]', '0', 8, '2023-03-07 15:50:02'),
(265, 7, '[{\"id:\":\"16\",\"qty\":\"1\"}]', '0', 8, '2023-03-07 16:10:35'),
(266, 9, '[{\"id:\":\"27\",\"qty\":\"1\"}]', '0', 8, '2023-03-07 16:39:56'),
(268, 1, '[{\"id:\":\"13\",\"qty\":\"2\"},{\"id:\":\"32\",\"qty\":\"1\"},{\"id:\":\"16\",\"qty\":\"1\"}]', '0', 8, '2023-03-07 17:03:37'),
(269, 1, '[{\"id:\":\"23\",\"qty\":\"1\"}]', '0', 8, '2023-03-07 17:24:00'),
(270, 1, '[{\"id:\":\"27\",\"qty\":\"1\"},{\"id:\":\"23\",\"qty\":\"2\"}]', '0', 8, '2023-03-08 08:31:57'),
(271, 2, '[{\"id:\":\"32\",\"qty\":\"1\"},{\"id:\":\"23\",\"qty\":\"1\"},{\"id:\":\"27\",\"qty\":\"1\"}]', '0', 8, '2023-03-08 09:03:14'),
(272, 1, '[{\"id:\":\"31\",\"qty\":\"2\"}]', '0', 8, '2023-03-08 09:25:45'),
(273, 2, '[{\"id:\":\"31\",\"qty\":\"1\"}]', '0', 8, '2023-03-08 09:27:17'),
(274, 2, '[]', '0', 8, '2023-03-08 09:27:22'),
(275, 8, '[{\"id:\":\"23\",\"qty\":\"2\"}]', '0', 8, '2023-03-08 09:32:16'),
(276, 8, '[]', '0', 8, '2023-03-08 09:32:21'),
(277, 1, '[{\"id:\":\"32\",\"qty\":\"1\"},{\"id:\":\"13\",\"qty\":\"2\"}]', '0', 8, '2023-03-08 10:54:54'),
(278, 1, '[{\"id:\":\"32\",\"qty\":\"2\"}]', '0', 8, '2023-03-08 10:57:35'),
(279, 1, '[{\"id:\":\"31\",\"qty\":\"3\"}]', '0', 8, '2023-03-08 11:02:45'),
(280, 2, '[{\"id:\":\"25\",\"qty\":\"2\"}]', '0', 8, '2023-03-08 12:46:17'),
(281, 2, '[{\"id:\":\"26\",\"qty\":\"1\"}]', '0', 8, '2023-03-08 12:53:43'),
(282, 1, '[{\"id:\":\"27\",\"qty\":\"1\"}]', '0', 8, '2023-03-08 13:49:44'),
(283, 1, '[{\"id:\":\"12\",\"qty\":\"1\"}]', '0', 8, '2023-03-08 14:02:09'),
(284, 1, '[]', '0', 8, '2023-03-08 14:02:56'),
(285, 1, '[{\"id:\":\"30\",\"qty\":\"1\"},{\"id:\":\"32\",\"qty\":\"1\"},{\"id:\":\"13\",\"qty\":\"2\"}]', '0', 8, '2023-03-08 14:52:23'),
(286, 1, '[]', '0', 8, '2023-03-08 15:02:32'),
(287, 3, '[{\"id:\":\"12\",\"qty\":\"1\"}]', '0', 8, '2023-03-08 15:59:36'),
(288, 2, '[{\"id:\":\"13\",\"qty\":\"1\"}]', '0', 8, '2023-03-08 16:17:24'),
(289, 7, '[{\"id:\":\"17\",\"qty\":\"1\"}]', '0', 8, '2023-03-08 16:59:33'),
(290, 7, '[{\"id:\":\"27\",\"qty\":\"1\"}]', '0', 8, '2023-03-08 17:00:35'),
(291, 1, '[{\"id:\":\"16\",\"qty\":\"1\"}]', '0', 8, '2023-03-08 17:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add`
--

CREATE TABLE `tbl_add` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
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
  `email` varchar(50) NOT NULL,
  `number` varchar(20) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `number`, `user_name`, `pass`, `role`, `image`, `active`, `date`) VALUES
(8, 'aamir@gmail.com', '03003264993', 'Aamir', '496faad245f6faceb2bddf680e08df81', '1', '0993fb2f-0065-4126-8ae5-b25d173441cb.jpg', 1, '2023-03-03 04:27:00'),
(10, 'ali@gmail.com', '03003265587', 'Ali', 'dbcff85b4ad32c7ee6e56b33f9c687e6', '2', 'login (1).webp', 1, '2023-03-04 08:27:41');

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
  `u_type` int(11) DEFAULT 0,
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_orders`
--
ALTER TABLE `table_orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `temp_orders`
--
ALTER TABLE `temp_orders`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=649;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
