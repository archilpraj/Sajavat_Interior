-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2015 at 02:10 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

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
  `product_table_type` varchar(30) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bed_side_table`
--

INSERT INTO `bed_side_table` (`product_id`, `product_name`, `product_price`, `product_stock`, `product_description`, `product_img`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_img6`, `product_material`, `product_storage`, `product_table_top_shape`, `product_style`, `product_table_shape`, `product_table_material`, `product_shape`, `product_color`, `product_table_type`) VALUES
('bd_sd_tb_1', 'Amey Bed', 20, 2, 'amey ka bed Gg ', '', '', '', '', '', '', 'Gold', '10', 'Extra large', 'Winner', 'Largr', 'Gold', 'Large', 'loage', 'sleeping');

-- --------------------------------------------------------

--
-- Table structure for table `new_order`
--

CREATE TABLE IF NOT EXISTS `new_order` (
  `order_id` int(5) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(200) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `total_amt` int(11) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `order_date` date NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `old_order`
--

CREATE TABLE IF NOT EXISTS `old_order` (
  `order_id` int(5) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(200) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `total_amt` int(11) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `order_date` date NOT NULL,
  `delivery_date` date NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `old_order`
--

INSERT INTO `old_order` (`order_id`, `product_id`, `user_id`, `total_amt`, `payment_mode`, `order_status`, `order_date`, `delivery_date`) VALUES
(1, 'dsdvs', 'dvsdv', 2134, 'sdvsdv', 'dsvsd', '2015-12-08', '2015-12-02');

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
  `bed_type` varchar(5) NOT NULL,
  PRIMARY KEY (`product_id`)
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

--
-- Dumping data for table `product_bookshelf_display_unit`
--

INSERT INTO `product_bookshelf_display_unit` (`product_id`, `product_name`, `product_price`, `product_stock`, `product_img`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_img6`, `shape`, `material`, `product_desc`, `assembly`, `floor_standing`, `storage_type`, `with_storage`, `size`) VALUES
('P_DIS_1', 'Display Unit', 2000, 10, '', '', '', '', '', '', 'box', 'box', 'display desc', 'no', 'yes', 'none', 'yes', '20');

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
  `cushain_type` varchar(6) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_dinning_table`
--

INSERT INTO `product_dinning_table` (`product_id`, `product_name`, `product_price`, `product_stock`, `product_img`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_img6`, `product_desc`, `table_storage`, `primary_room`, `table_shape`, `assembly`, `table_sitting_space`, `table_material`, `upholstery_material`, `chair_type`, `material`, `chair_material`, `cushain_type`) VALUES
('P_DIN_1', 'Dining Table', 3000, 10, '', '', '', '', '', '', '', 'dining storage', 'bedroom', 'box', 'no', '1', 'none', 'none', 'none', 'wtf', 'wtf', 'wtf');

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
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_dresser_mirror`
--

INSERT INTO `product_dresser_mirror` (`product_id`, `product_name`, `product_price`, `product_stock`, `product_desc`, `product_img`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_img6`, `frame_material`, `storage_type`, `type`) VALUES
('P_DRM_1', 'Dressor', 5000, 20, 'descr', '', '', '', '', '', '', 'wtf', 'wtf', 'wtf');

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
  `colour` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_sofa`
--

INSERT INTO `product_sofa` (`product_id`, `product_name`, `product_price`, `product_stock`, `product_desc`, `product_img`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_img6`, `product_h`, `product_w`, `product_d`, `assembly`, `warranty`, `primary_material`, `room_type`, `colour`) VALUES
('P_SFA_1', 'Sofa', 6000, 50, 'descr', '', '', '', '', '', '', 2, 3, 5, 'no', 'no', 'wtf', 'no', 'wtf');

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

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`product_id`, `product_name`, `product_price`, `product_stock`, `product_desc`, `product_img`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_img6`, `colour`, `storage_type`, `sitting_capacity`, `material`, `shape`, `size`, `style`, `table_shape`, `table_material`, `assembly_type`) VALUES
('P_TBL_1', 'Table', 6000, 30, 'descrt', '', '', '', '', '', '', 'red', 'wtf', '30', 'wtf', 'wtf', 2, 'wtf', 'wtf', 'wtf', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `product_tv_unit`
--

CREATE TABLE IF NOT EXISTS `product_tv_unit` (
  `product_id` varchar(12) NOT NULL,
  `product_name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `product_price` int(7) NOT NULL,
  `product_stock` int(3) NOT NULL,
  `product_img` varchar(400) NOT NULL,
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

--
-- Dumping data for table `product_tv_unit`
--

INSERT INTO `product_tv_unit` (`product_id`, `product_name`, `product_price`, `product_stock`, `product_img`, `product_img1`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `wall_mount`, `floor_standing`, `primary_room`, `product_desc`) VALUES
('P_TV_1', 'TV', 5000, 10, '', '', '', '', '', '', 'no', 'yes', 'none', 'wtf');

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
  `req_p_change` varchar(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_password`, `user_email`, `user_firstname`, `user_lastname`, `user_address`, `user_city`, `user_state`, `user_pincode`, `user_phone`, `user_vcode`, `req_p_change`) VALUES
('Archil01', '123456789', 'archil.prajapati@gmail.com', 'Archil', 'Prajapati', 'Tarsali', 'Vadodara', 'Gujarat', 390010, '8866769072', '', 'n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
