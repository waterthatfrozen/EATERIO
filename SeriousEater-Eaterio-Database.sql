-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 05:51 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eaterio`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ct_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `ct_amount` int(11) NOT NULL,
  `ct_note` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_pwd` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_firstname` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_lastname` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_phoneno` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_gender` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'M for Male, F for Female',
  `c_type` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Type of customer in this canteen (STD for student, INS for instructor, STF for staff, GUE for guest, ADM for admin, OTH for other)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_username`, `c_pwd`, `c_firstname`, `c_lastname`, `c_email`, `c_phoneno`, `c_gender`, `c_type`) VALUES
(1, '6222780379', '6222780379', 'Paphana', 'Yiwsiw', '6222780379@g.siit.tu.ac.th', '0840631422', 'M', 'STD'),
(2, '6222780668', '6222780668', 'Sirada', 'Chaisawat', '6222780668@g.siit.tu.ac.th', '0884984730', 'F', 'STD'),
(3, '6222780569', '6222780569', 'Thanakit', 'Lerttomolsakul', '6222780569@g.siit.tu.ac.th', '0864115780', 'M', 'STD'),
(4, 'BKD_Admin01', '12345678', 'Paphana', 'Yiwsiw', 'admin_dummy@email.com', '0800000000', 'M', 'ADM'),
(5, 'thanaruk.thee', 'thanaruk', 'Thanaruk', 'Theeramunkong', 'thanaruk@siit.tu.ac.th', '0800000001', 'M', 'INS');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `f_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `f_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_price` decimal(6,2) NOT NULL,
  `f_todayavail` tinyint(4) NOT NULL DEFAULT 1 COMMENT 'Food is available to order or not',
  `f_preorderavail` tinyint(4) NOT NULL DEFAULT 1,
  `f_pic` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`f_id`, `s_id`, `f_name`, `f_price`, `f_todayavail`, `f_preorderavail`, `f_pic`) VALUES
(1, 1, 'ข้าวกะเพราหมูสับ', '40.00', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `ord_id` int(11) NOT NULL,
  `orh_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `ord_amount` int(11) NOT NULL,
  `ord_buyprice` decimal(6,2) NOT NULL COMMENT 'To keep the snapshot of selected menu cost at the time of the purchase.',
  `ord_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`ord_id`, `orh_id`, `f_id`, `ord_amount`, `ord_buyprice`, `ord_note`) VALUES
(4, 2, 1, 1, '40.00', 'ไม่ใส่ใบกะเพรา');

-- --------------------------------------------------------

--
-- Table structure for table `order_header`
--

CREATE TABLE `order_header` (
  `orh_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `orh_ordertime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `orh_pickuptime` datetime NOT NULL,
  `orh_orderstatus` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orh_finishedtime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_header`
--

INSERT INTO `order_header` (`orh_id`, `c_id`, `s_id`, `p_id`, `orh_ordertime`, `orh_pickuptime`, `orh_orderstatus`, `orh_finishedtime`) VALUES
(2, 1, 1, 0, '2021-09-21 13:59:34', '2021-09-21 21:00:00', 'RECEIVED', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `p_type` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_amount` tinyint(4) NOT NULL,
  `p_detail` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `s_id` int(11) NOT NULL,
  `s_username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_pwd` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_location` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_openhour` time NOT NULL,
  `s_closehour` time NOT NULL,
  `s_available` tinyint(4) NOT NULL DEFAULT 1 COMMENT 'Shop ready for taking an order or not (True for open, False for close)',
  `s_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_phoneno` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`s_id`, `s_username`, `s_pwd`, `s_name`, `s_location`, `s_openhour`, `s_closehour`, `s_available`, `s_email`, `s_phoneno`) VALUES
(1, 'shop001', '12345678', 'ร้านอาหารตามสั่ง', 'โรงอาหารล็อกที่ 2', '08:00:00', '14:30:00', 1, 'shop001@email.com', '0900000001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ct_id`),
  ADD KEY `fk_ct_c_idx` (`c_id`),
  ADD KEY `fk_ct_s_idx` (`s_id`),
  ADD KEY `fk_ct_f_idx` (`f_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `food_shop_s_id_idx` (`s_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`ord_id`),
  ADD KEY `fk_orh_ord_idx` (`orh_id`),
  ADD KEY `fk_f_ord_idx` (`f_id`);

--
-- Indexes for table `order_header`
--
ALTER TABLE `order_header`
  ADD PRIMARY KEY (`orh_id`),
  ADD KEY `fk_orh_idx` (`c_id`),
  ADD KEY `fk_s_orh_idx` (`s_id`),
  ADD KEY `fk_p_orh_idx` (`p_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `p_c_fk_idx` (`c_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `ord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_header`
--
ALTER TABLE `order_header`
  MODIFY `orh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_ct_c` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_ct_f` FOREIGN KEY (`f_id`) REFERENCES `food` (`f_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_ct_s` FOREIGN KEY (`s_id`) REFERENCES `shop` (`s_id`) ON DELETE CASCADE;

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `fk_food_shop_id` FOREIGN KEY (`s_id`) REFERENCES `shop` (`s_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `fk_f_ord` FOREIGN KEY (`f_id`) REFERENCES `food` (`f_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_orh_ord` FOREIGN KEY (`orh_id`) REFERENCES `order_header` (`orh_id`) ON DELETE CASCADE;

--
-- Constraints for table `order_header`
--
ALTER TABLE `order_header`
  ADD CONSTRAINT `fk_c_orh` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_p_orh` FOREIGN KEY (`p_id`) REFERENCES `payment` (`p_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_s_orh` FOREIGN KEY (`s_id`) REFERENCES `shop` (`s_id`) ON DELETE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_p_c` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
