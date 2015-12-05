-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2015 at 11:17 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sj_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `bed_side_table`
--

CREATE TABLE IF NOT EXISTS `bed_side_table` (
  `product_id` varchar(12) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_price` int(7) NOT NULL,
  `product_stock` int(3) NOT NULL,
  `product_description` varchar(100) NOT NULL,
  `product_img` varchar(400) NOT NULL,
  `product_img2` varchar(400) NOT NULL,
  `product_img3` varchar(400) NOT NULL,
  `product_img4` varchar(400) NOT NULL,
  `product_img5` varchar(400) NOT NULL,
  `product_img6` varchar(400) NOT NULL,
  `product_material` varchar(30) NOT NULL,
  `product_storage` varchar(3) NOT NULL,
  `product_table_top_shape` varchar(30) NOT NULL,
  `product_style` varchar(30) NOT NULL,
  `product_table_shape` varchar(30) NOT NULL,
  `product_table_material` varchar(30) NOT NULL,
  `product_shape` varchar(30) NOT NULL,
  `product_color` varchar(30) NOT NULL,
  `product_table_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_bed`
--

CREATE TABLE IF NOT EXISTS `product_bed` (
  `product_id` varchar(12) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_img` varchar(400) NOT NULL,
  `product_img2` varchar(400) NOT NULL,
  `product_img3` varchar(400) NOT NULL,
  `product_img4` varchar(400) NOT NULL,
  `product_img5` varchar(400) NOT NULL,
  `product_img6` varchar(400) NOT NULL,
  `product_price` int(7) NOT NULL,
  `product_desc` varchar(100) NOT NULL,
  `product_stock` int(3) NOT NULL,
  `product_h` int(3) NOT NULL,
  `product_w` int(3) NOT NULL,
  `product_color` varchar(20) NOT NULL,
  `product_warranty` varchar(8) NOT NULL,
  `product_d` int(3) NOT NULL,
  `product_assembly` varchar(30) NOT NULL,
  `product_material` varchar(30) NOT NULL,
  `storage` varchar(3) NOT NULL,
  `bed_type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_bed`
--

INSERT INTO `product_bed` (`product_id`, `product_name`, `product_img`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_img6`, `product_price`, `product_desc`, `product_stock`, `product_h`, `product_w`, `product_color`, `product_warranty`, `product_d`, `product_assembly`, `product_material`, `storage`, `bed_type`) VALUES
('P_BED_1', 'Miranda Solid Wood Queen Size Bed with Storage', 'Pr_Images/Bed/P_BED_1-1.jpg', 'Pr_Images\\Bed\\P_BED_1-2.jpg', 'Pr_Images\\Bed\\P_BED_1-3.jpg', 'Pr_Images\\Bed\\P_BED_1-4.jpg', 'Pr_Images\\Bed\\P_BED_1-5.jpg', 'Pr_Images\\Bed\\P_BED_1-6.jpg', 32474, 'Miranda Solid Wood Queen Size Bed with Storage in Espresso Walnut Finish by Woodsworth', 5, 32, 62, 'Espresso Walnut', '1 Year', 80, 'Carpenter Assembly', 'Sheesham Wood', 'Yes', 'Queen'),
('P_BED_2', 'Cocoa Queen Bed with Box Storage', 'Pr_Images/Bed/P_BED_2-1.jpg', 'Pr_Images/Bed/P_BED_2-2.jpg', 'Pr_Images/Bed/P_BED_2-3.jpg', 'Pr_Images/Bed/P_BED_2-4.jpg', 'Pr_Images/Bed/P_BED_2-5.jpg', 'Pr_Images/Bed/P_BED_2-6.jpg', 18585, 'Cocoa Queen Bed with Box Storage in Black & Dark Acacia Matt Finish', 6, 32, 62, 'Cocoa', '3 Year', 77, 'Carpenter Assembly', 'Engineered Wood', 'Yes', 'Queen'),
('P_BED_3', 'Kosmo Imperial Queen Bed', 'Pr_Images/Bed/P_BED_3-1.jpg', 'Pr_Images/Bed/P_BED_3-2.jpg', 'Pr_Images/Bed/P_BED_3-3.jpg', 'Pr_Images/Bed/P_BED_3-4.jpg', 'Pr_Images/Bed/P_BED_3-5.jpg', 'Pr_Images/Bed/P_BED_3-6.jpg', 23192, 'Kosmo Imperial Queen Bed with Front Pull Out Storage in Natural Wenge Colour', 8, 35, 63, 'Natural Wenge', '2 Year', 87, 'Carpenter Assembly', 'Engineered Wood', 'Yes', 'Queen');

-- --------------------------------------------------------

--
-- Table structure for table `product_bookshelf_display_unit`
--

CREATE TABLE IF NOT EXISTS `product_bookshelf_display_unit` (
  `product_id` varchar(12) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_price` int(7) NOT NULL,
  `product_stock` int(3) NOT NULL,
  `product_img` varchar(400) NOT NULL,
  `product_img2` varchar(400) NOT NULL,
  `product_img3` varchar(400) NOT NULL,
  `product_img4` varchar(400) NOT NULL,
  `product_img5` varchar(400) NOT NULL,
  `product_img6` varchar(400) NOT NULL,
  `shape` varchar(10) NOT NULL,
  `material` varchar(25) NOT NULL,
  `product_desc` varchar(100) NOT NULL,
  `assembly` varchar(3) NOT NULL,
  `floor_standing` varchar(3) NOT NULL,
  `storage_type` varchar(20) NOT NULL,
  `with_storage` varchar(3) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_dinning_table`
--

CREATE TABLE IF NOT EXISTS `product_dinning_table` (
  `product_id` varchar(12) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_price` int(7) NOT NULL,
  `product_stock` int(3) NOT NULL,
  `product_img` varchar(400) NOT NULL,
  `product_img2` varchar(400) NOT NULL,
  `product_img3` varchar(400) NOT NULL,
  `product_img4` varchar(400) NOT NULL,
  `product_img5` varchar(400) NOT NULL,
  `product_img6` varchar(400) NOT NULL,
  `product_desc` varchar(100) NOT NULL,
  `table_storage` varchar(15) NOT NULL,
  `primary_room` varchar(15) NOT NULL,
  `table_shape` varchar(10) NOT NULL,
  `assembly` varchar(3) NOT NULL,
  `table_sitting_space` varchar(1) NOT NULL,
  `table_material` varchar(12) NOT NULL,
  `upholstery_material` varchar(10) NOT NULL,
  `chair_type` varchar(15) NOT NULL,
  `material` varchar(15) NOT NULL,
  `chair_material` varchar(15) NOT NULL,
  `cushain_type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_dresser_mirror`
--

CREATE TABLE IF NOT EXISTS `product_dresser_mirror` (
  `product_id` varchar(12) CHARACTER SET utf8 NOT NULL,
  `product_name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `product_price` int(7) NOT NULL,
  `product_stock` int(3) NOT NULL,
  `product_desc` varchar(100) CHARACTER SET utf8 NOT NULL,
  `product_img` varchar(400) NOT NULL,
  `product_img2` varchar(400) NOT NULL,
  `product_img3` varchar(400) NOT NULL,
  `product_img4` varchar(400) NOT NULL,
  `product_img5` varchar(400) NOT NULL,
  `product_img6` varchar(400) NOT NULL,
  `frame_material` varchar(30) CHARACTER SET utf8 NOT NULL,
  `storage_type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_sofa`
--

CREATE TABLE IF NOT EXISTS `product_sofa` (
  `product_id` varchar(12) CHARACTER SET utf8 NOT NULL,
  `product_name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `product_price` int(7) NOT NULL,
  `product_stock` int(3) NOT NULL,
  `product_desc` varchar(100) CHARACTER SET utf8 NOT NULL,
  `product_img` varchar(400) NOT NULL,
  `product_img2` varchar(400) NOT NULL,
  `product_img3` varchar(400) NOT NULL,
  `product_img4` varchar(400) NOT NULL,
  `product_img5` varchar(400) NOT NULL,
  `product_img6` varchar(400) NOT NULL,
  `product_h` int(3) NOT NULL,
  `product_w` int(3) NOT NULL,
  `product_d` int(3) NOT NULL,
  `assembly` varchar(30) CHARACTER SET utf8 NOT NULL,
  `warranty` varchar(8) NOT NULL,
  `primary_material` varchar(30) CHARACTER SET utf8 NOT NULL,
  `room_type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `colour` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE IF NOT EXISTS `product_table` (
  `product_id` varchar(12) CHARACTER SET utf8 NOT NULL,
  `product_name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `product_price` int(7) NOT NULL,
  `product_stock` int(3) NOT NULL,
  `product_desc` varchar(100) CHARACTER SET utf8 NOT NULL,
  `product_img` varchar(400) NOT NULL,
  `product_img2` varchar(400) NOT NULL,
  `product_img3` varchar(400) NOT NULL,
  `product_img4` varchar(400) NOT NULL,
  `product_img5` varchar(400) NOT NULL,
  `product_img6` varchar(400) NOT NULL,
  `colour` varchar(30) CHARACTER SET utf8 NOT NULL,
  `storage_type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `sitting_capacity` varchar(30) CHARACTER SET utf8 NOT NULL,
  `material` varchar(30) CHARACTER SET utf8 NOT NULL,
  `shape` varchar(30) CHARACTER SET utf8 NOT NULL,
  `size` int(3) NOT NULL,
  `style` varchar(30) CHARACTER SET utf8 NOT NULL,
  `table_shape` varchar(30) CHARACTER SET utf8 NOT NULL,
  `table_material` varchar(30) CHARACTER SET utf8 NOT NULL,
  `assembly_type` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_tv_unit`
--

CREATE TABLE IF NOT EXISTS `product_tv_unit` (
  `product_id` varchar(12) NOT NULL,
  `product_name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `product_price` int(7) NOT NULL,
  `product_stock` int(3) NOT NULL,
  `product_img0` varchar(400) NOT NULL,
  `product_img1` varchar(400) NOT NULL,
  `product_img2` varchar(400) NOT NULL,
  `product_img3` varchar(400) NOT NULL,
  `product_img4` varchar(400) NOT NULL,
  `product_img5` varchar(400) NOT NULL,
  `wall_mount` varchar(3) NOT NULL,
  `floor_standing` varchar(3) NOT NULL,
  `primary_room` varchar(20) NOT NULL,
  `product_desc` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sbadmin`
--

CREATE TABLE IF NOT EXISTS `sbadmin` (
  `name` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sbadmin`
--

INSERT INTO `sbadmin` (`name`, `email`, `password`) VALUES
('Admin', 'info.sjinteriors@gmail.com', 'admin12345');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` varchar(20) NOT NULL,
  `user_password` varchar(25) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_firstname` varchar(45) NOT NULL,
  `user_lastname` varchar(45) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_city` varchar(45) NOT NULL,
  `user_state` varchar(45) NOT NULL,
  `user_pincode` int(6) NOT NULL,
  `user_phone` varchar(10) NOT NULL,
  `user_vcode` text NOT NULL,
  `req_p_change` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_password`, `user_email`, `user_firstname`, `user_lastname`, `user_address`, `user_city`, `user_state`, `user_pincode`, `user_phone`, `user_vcode`, `req_p_change`) VALUES
('Archil01', '123456789', 'archil.prajapati@gmail.com', 'Archil', 'Prajapati', 'Tarsali', 'Vadodara', 'Gujarat', 390010, '8866769072', '', 'n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bed_side_table`
--
ALTER TABLE `bed_side_table`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_bed`
--
ALTER TABLE `product_bed`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_dinning_table`
--
ALTER TABLE `product_dinning_table`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_dresser_mirror`
--
ALTER TABLE `product_dresser_mirror`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_sofa`
--
ALTER TABLE `product_sofa`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
