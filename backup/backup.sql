-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 11:06 PM
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
-- Database: `foodpark`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `user_name`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_no` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `status` tinyint(5) NOT NULL DEFAULT 0,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_no`, `o_id`, `c_id`, `total_amount`, `status`, `date`) VALUES
(11, 11, 12, 190, 1, '2020-03-19'),
(12, 12, 12, 1680, 1, '2020-03-19'),
(13, 13, 12, 2920, 1, '2020-03-23'),
(14, 14, 12, 140, 1, '2020-04-03'),
(15, 15, 12, 840, 1, '2020-04-03'),
(16, 16, 12, 100, 1, '2020-04-03'),
(17, 17, 12, 360, 1, '2020-04-04'),
(18, 18, 12, 50, 1, '2020-04-05'),
(19, 19, 12, 280, 1, '2020-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `name`, `address`, `phone_no`, `password`) VALUES
(12, 'Vishruth', '#925, 7th Cross, 13th Main, Gokula, 1st Stage, 1st Phase,\r\nHMT Layout, Mathikere', '7411033883', '$2y$10$3/4RZ8pLZHQiuloXnbrGz.xOMTxZr9yOT6o58yWTmflRqEVS64rDq');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `im_id` int(11) NOT NULL,
  `i_name` varchar(200) NOT NULL,
  `category` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`im_id`, `i_name`, `category`, `price`, `image`, `status`) VALUES
(25, 'Idli Vada', 'sanman', 60, 'img/item/2020-04-03 09-18-21_idli_vada_sanman.jpg', 1),
(55, 'Masala Dosa', 'sanman', 60, 'img/item/2020-04-04 10-47-51_masala_dosa.jpg', 1),
(56, 'Rava Idli', 'sanman', 45, 'img/item/2020-04-04 10-48-16_rava_idli_sanman.jpg', 1),
(57, 'Bonda Soup', 'sanman', 50, 'img/item/2020-04-04 10-48-55_bonda_soup.jpg', 1),
(58, 'Pongal', 'sanman', 60, 'img/item/2020-04-04 10-49-21_pongal_sanman.jpg', 1),
(59, 'Poori', 'sanman', 50, 'img/item/2020-04-04 10-49-40_poori_sanman.jpg', 1),
(60, 'Kesari Bath', 'sanman', 60, 'img/item/2020-04-04 10-50-10_kesari_bath_sanman.jpg', 1),
(61, 'Maddur Vada', 'sanman', 30, 'img/item/2020-04-04 10-50-30_maddur_vada_sanman.jpg', 1),
(62, 'Upma', 'sanman', 60, 'img/item/2020-04-04 10-51-15_upma_sanman.jpg', 1),
(63, 'Set Dosa', 'sanman', 65, 'img/item/2020-04-04 10-52-08_set_dosa_sanman.jpg', 1),
(64, 'Paneer Butter Masala', 'sagar', 210, 'img/item/2020-04-04 10-53-55_paneer_butter_masala_sagar.jpg', 1),
(65, 'Veg Biryani', 'sagar', 230, 'img/item/2020-04-04 10-54-20_veg_biriyani_sagar.jpg', 1),
(66, 'Veg Noodles', 'sagar', 180, 'img/item/2020-04-04 10-54-40_veg_noodles_sagar.jpg', 1),
(67, 'Kaju Masala', 'sagar', 280, 'img/item/2020-04-04 10-55-08_kaju_masala_sagar.jpg', 1),
(68, 'Butter Kulcha', 'sagar', 45, 'img/item/2020-04-04 10-55-37_butter_kulcha_sagar.jpg', 1),
(69, 'Roti Curry', 'sagar', 180, 'img/item/2020-04-04 10-56-05_roti_curry_sagar.jpg', 1),
(70, 'Gobi Manchurian', 'sagar', 180, 'img/item/2020-04-04 10-56-35_gobi_manchurian_sagar.jpg', 1),
(71, 'Gulab Jamun', 'sagar', 45, 'img/item/2020-04-04 10-57-06_gulab_jamun_sagar.jpg', 1),
(72, 'Mughlai Biryani', 'sagar', 250, 'img/item/2020-04-04 10-58-08_mughlai_biryani_sagar.jpg', 1),
(73, 'Navratna Korma', 'sagar', 230, 'img/item/2020-04-04 10-58-52_navratan_korma_sagar.jpg', 1),
(74, 'Samosa Chaat', 'agarwal', 50, 'img/item/2020-04-04 11-00-14_samosa_chat.jpg', 1),
(75, 'Sev Puri', 'agarwal', 45, 'img/item/2020-04-04 11-00-40_sev_puri_agarwal.jpg', 1),
(76, 'Raj Kachori Chaat', 'agarwal', 60, 'img/item/2020-04-04 11-01-06_raj_kachori_agarwal.jpg', 1),
(77, 'Rasgulla', 'agarwal', 30, 'img/item/2020-04-04 11-01-27_rasgulla_agarwal.jpg', 1),
(78, 'Rasmalai', 'agarwal', 50, 'img/item/2020-04-04 11-01-55_rasmalai_agarwal.jpg', 1),
(79, 'Dahi Papdi Chaat', 'agarwal', 60, 'img/item/2020-04-04 11-02-17_dahi_papdi_chaat_agarwal.jpg', 1),
(80, 'Dhokla', 'agarwal', 45, 'img/item/2020-04-04 11-02-42_dhokla_agarwal.jpg', 1),
(81, 'Bhel Puri', 'agarwal', 45, 'img/item/2020-04-04 11-03-18_bhel_puri_agarwal.jpg', 1),
(82, 'Badam Milk', 'agarwal', 30, 'img/item/2020-04-04 11-03-43_Badam-Milk-Shake.jpg', 1),
(83, 'Pani Puri', 'agarwal', 50, 'img/item/2020-04-04 11-05-28_pani_puri_agarwal.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `o_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`o_id`, `c_id`) VALUES
(11, 12),
(12, 12),
(13, 12),
(14, 12),
(15, 12),
(16, 12),
(17, 12),
(18, 12),
(19, 12);

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `om_id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `im_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`om_id`, `o_id`, `im_id`, `quantity`, `date`) VALUES
(26, 16, 25, 2, '2020-04-03'),
(29, 19, 25, 2, '2020-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `todays_special`
--

CREATE TABLE `todays_special` (
  `t_id` int(11) NOT NULL,
  `im_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_no`),
  ADD KEY `o_id` (`o_id`,`c_id`),
  ADD KEY `bill_ibfk_2` (`c_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `phone_no` (`phone_no`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`im_id`),
  ADD UNIQUE KEY `i_name` (`i_name`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
  ADD PRIMARY KEY (`om_id`),
  ADD KEY `o_id` (`o_id`,`im_id`),
  ADD KEY `order_master_ibfk_2` (`im_id`);

--
-- Indexes for table `todays_special`
--
ALTER TABLE `todays_special`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `im_id` (`im_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `im_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `om_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `todays_special`
--
ALTER TABLE `todays_special`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`o_id`) REFERENCES `order` (`o_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_master`
--
ALTER TABLE `order_master`
  ADD CONSTRAINT `order_master_ibfk_1` FOREIGN KEY (`o_id`) REFERENCES `order` (`o_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_master_ibfk_2` FOREIGN KEY (`im_id`) REFERENCES `item` (`im_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `todays_special`
--
ALTER TABLE `todays_special`
  ADD CONSTRAINT `todays_special_ibfk_1` FOREIGN KEY (`im_id`) REFERENCES `item` (`im_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
