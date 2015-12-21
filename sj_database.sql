-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2015 at 01:21 PM
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
  `product_name` varchar(150) NOT NULL,
  `product_price` int(7) NOT NULL,
  `product_stock` int(3) NOT NULL,
  `product_description` varchar(1000) NOT NULL,
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
('bd_sd_tb_1', 'Desdemona Side Table', 6500, 5, 'The undertones of wine red with deep brown give this Vintage design an aesthetic appeal. Slightly curved designs, cut-out finishes and Victorian handles set the tone for a royal setting.', 'Pr_Images/Bedsidetable/bd_sd_tb_1-1.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_1-2.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_1-3.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_1-4.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_1-5.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_1-6.jpg', 'Engineered Wood', 'Yes', 'Rectangular', 'Normal', 'Rectangular', 'Engineered Wood', 'Rectangular', 'Brown', 'Bedside Table '),
('bd_sd_tb_2', 'Fabian Side Table', 5460, 5, 'Youthful, jazzy, contemporary. This side table is a style statement. Colorful and vibrant with a sleek clean-lined style. ', 'Pr_Images/Bedsidetable/bd_sd_tb_2-1.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_2-2.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_2-3.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_2-4.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_2-5.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_2-6.jpg', 'Engineered Wood', 'Yes', 'Rectangular', 'Normal', 'Rectangular', 'Engineered Wood', 'Rectangular', 'Red & White', 'Bedside Table'),
('bd_sd_tb_3', 'Horatio Side Table', 4628, 5, 'Simple, subtle design that can fit into any room. This understated table with its built-in handles is a consumers favorite. ', 'Pr_Images/Bedsidetable/bd_sd_tb_3-1.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_3-2.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_3-3.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_3-4.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_3-5.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_3-6.jpg', 'Engineered Wood', 'Yes', 'Rectangular', 'Normal', 'Rectangular', 'Engineered Wood', 'Rectangular', 'Light Cherry & Brown', 'Bedside Table'),
('bd_sd_tb_4', 'Interiors Stephano Side Table', 9600, 5, 'A combination of soft materials and sharp designs. Black leather with beige accents offer a dramatic and enticing design. Gun metal finish handles exemplify the contemporary character.', 'Pr_Images/Bedsidetable/bd_sd_tb_4-1.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_4-2.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_4-3.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_4-4.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_4-5.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_4-6.jpg', 'Engineered Wood', 'Yes', 'Square', 'Normal', 'Square', 'Engineered Wood', 'Square', 'Black', 'Bedside Table'),
('bd_sd_tb_5', 'Hughes Side Table', 5999, 5, 'Colonial Style Furniture is graceful and refined, often characterized by the use of turnings, curved legs and motifs to present an elegant appearance. Colonial Style Furniture sees Indian craftsmen interpreting European period styles (such as the Queen Anne and Georgian styles) in indigenous woods like Sheesham and Mango.', 'Pr_Images/Bedsidetable/bd_sd_tb_5-1.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_5-2.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_5-3.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_5-4.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_5-5.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_5-6.jpg', 'Acacia Wood', 'Yes', 'Square', 'Normal', 'Square', 'Acacia Wood', 'Square', 'Black', 'Bedside Table'),
('bd_sd_tb_6', 'Bed Side Drawer Table', 12503, 5, 'Bedside Tables are small tables often with drawers designed to be placed beside your bed. They keep your books, alarm clock, bed side lamp, midnight snack and water within arms reach.\r\n\r\nIn its carefully crafted details, ethnic furniture takes you back to a different era of living; your house becomes a home with furniture that transcends generations. Influenced by ethnic art and literature, this style of furniture is designed to balance design with the practicality that your home demands. ', 'Pr_Images/Bedsidetable/bd_sd_tb_6-1.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_6-2.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_6-3.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_6-4.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_6-5.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_6-6.jpg', 'Sheesham Wood', 'Yes', 'Square', 'Normal', 'Square', 'Sheesham Wood', 'Square', 'Multi-Colour', 'Bedside Table'),
('bd_sd_tb_7', 'Nirvaana Bed Side Table', 7999, 5, 'In its carefully crafted details, ethnic furniture takes you back to a different era of living; your house becomes a home with furniture that transcends generations. Influenced by ethnic art and literature, this style of furniture is designed to balance design with the practicality that your home demands. ', 'Pr_Images/Bedsidetable/bd_sd_tb_7-1.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_7-2.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_7-3.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_7-4.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_7-5.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_7-6.jpg', 'Mango Wood', 'Yes', 'Rectangular', 'Normal', 'Rectangular', 'Mango Wood', 'Rectangular', 'Brown', 'Bedside Table'),
('bd_sd_tb_8', 'Urmila Bedside Table', 7199, 5, 'Quirky Furniture incorporating a twist to industrial and recycled elements to fashion unique pieces that have entered the zeitgeist as a reflection of humankind?s distance from Industry and as an extension of the green movement.', 'Pr_Images/Bedsidetable/bd_sd_tb_8-1.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_8-2.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_8-3.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_8-4.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_8-5.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_8-6.jpg', 'Mango Wood', 'Yes', 'Square', 'Normal', 'Rectangular', 'Mango Wood', 'Square', 'Multi-Colour', 'Bedside Table'),
('bd_sd_tb_9', 'Sahadeva Bed Side Table', 7199, 5, 'In its carefully crafted details, ethnic furniture takes you back to a different era of living; your house becomes a home with furniture that transcends generations. Influenced by ethnic art and literature, this style of furniture is designed to balance design with the practicality that your home demands. ', 'Pr_Images/Bedsidetable/bd_sd_tb_9-1.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_9-2.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_9-3.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_9-4.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_9-5.jpg', 'Pr_Images/Bedsidetable/bd_sd_tb_9-6.jpg', 'Mango Wood', 'Yes', 'Square', 'Normal', 'Rectangular', 'Mango Wood', 'Rectangular', 'Golden and Black', 'Bedside Table');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `new_order`
--

INSERT INTO `new_order` (`order_id`, `product_id`, `user_id`, `total_amt`, `payment_mode`, `order_status`, `order_date`) VALUES
(1, 'test', 'Archil01', 8399, 'COD', 'Under Process', '2015-12-19'),
(2, 'test', 'Archil01', 20999, 'COD', 'Under Process', '2015-12-19'),
(3, 'P_BED_9', 'Archil01', 26599, 'COD', 'Under Process', '2015-12-19'),
(4, '0', 'Archil01', 29798, 'COD', 'Under Process', '2015-12-19'),
(5, '0', 'Archil01', 65598, 'COD', 'Under Process', '2015-12-19'),
(6, 'P_BED_8', 'Archil01', 34298, 'COD', 'Under Process', '2015-12-19');

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
-- Table structure for table `order_refund_return`
--

CREATE TABLE IF NOT EXISTS `order_refund_return` (
  `order_id` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `order_del_date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `request_for` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_bed`
--

CREATE TABLE IF NOT EXISTS `product_bed` (
  `product_id` varchar(12) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_img` varchar(400) NOT NULL,
  `product_img2` varchar(400) NOT NULL,
  `product_img3` varchar(400) NOT NULL,
  `product_img4` varchar(400) NOT NULL,
  `product_img5` varchar(400) NOT NULL,
  `product_img6` varchar(400) NOT NULL,
  `product_price` int(7) NOT NULL,
  `product_desc` varchar(1000) NOT NULL,
  `product_stock` int(3) NOT NULL,
  `product_h` int(3) NOT NULL,
  `product_w` int(3) NOT NULL,
  `product_color` varchar(20) NOT NULL,
  `product_warranty` varchar(8) NOT NULL,
  `product_d` int(3) NOT NULL,
  `product_assembly` varchar(30) NOT NULL,
  `product_material` varchar(30) NOT NULL,
  `storage` varchar(3) NOT NULL,
  `bed_type` varchar(10) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_bed`
--

INSERT INTO `product_bed` (`product_id`, `product_name`, `product_img`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_img6`, `product_price`, `product_desc`, `product_stock`, `product_h`, `product_w`, `product_color`, `product_warranty`, `product_d`, `product_assembly`, `product_material`, `storage`, `bed_type`) VALUES
('P_BED_1', 'Havana Queen Size Bed', 'Pr_Images/Bed/P_Bed_1-1.jpg', 'Pr_Images/Bed/P_Bed_1-2.jpg', 'Pr_Images/Bed/P_Bed_1-3.jpg', 'Pr_Images/Bed/P_Bed_1-4.jpg', 'Pr_Images/Bed/P_Bed_1-5.jpg', 'Pr_Images/Bed/P_Bed_1-6.jpg', 38999, 'This SKU is a hand-picked Pepperfry favorite!\r\n\r\nContemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place. ', 5, 33, 66, 'Provincial Teak', '1 Year', 81, 'Carpenter Assembly', 'Sheesham Wood', 'Yes', 'Queen'),
('P_BED_2', 'Mexico Queen Sized Bed', 'Pr_Images/Bed/P_Bed_2-1.jpg', 'Pr_Images/Bed/P_Bed_2-2.jpg', 'Pr_Images/Bed/P_Bed_2-3.jpg', 'Pr_Images/Bed/P_Bed_2-4.jpg', 'Pr_Images/Bed/P_Bed_2-5.jpg', 'Pr_Images/Bed/P_Bed_2-6.jpg', 26599, 'Contemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place. ', 5, 35, 66, 'Black', '1 Year', 86, 'Carpenter Assembly', 'Mango Wood', 'Yes', 'Queen'),
('P_BED_3', 'Havana Slatted Queen Size Bed', 'Pr_Images/Bed/P_Bed_3-1.jpg', 'Pr_Images/Bed/P_Bed_3-2.jpg', 'Pr_Images/Bed/P_Bed_3-3.jpg', 'Pr_Images/Bed/P_Bed_3-4.jpg', 'Pr_Images/Bed/P_Bed_3-5.jpg', 'Pr_Images/Bed/P_Bed_3-6.jpg', 24499, 'Contemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place. ', 5, 34, 66, 'Provincial Teak', '1 Year', 81, 'Carpenter Assembly', 'Sheesham Wood', 'No', 'Queen'),
('P_BED_4', 'Panama City King Size Bed', 'Pr_Images/Bed/P_Bed_4-1.jpg', 'Pr_Images/Bed/P_Bed_4-2.jpg', 'Pr_Images/Bed/P_Bed_4-3.jpg', 'Pr_Images/Bed/P_Bed_4-4.jpg', 'Pr_Images/Bed/P_Bed_4-5.jpg', 'Pr_Images/Bed/P_Bed_4-6.jpg', 22399, 'Contemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place. ', 5, 30, 78, 'Provincial Teak', '1 Year', 82, 'Carpenter Assembly', 'Mango Wood', 'No', 'King'),
('P_BED_5', 'Guatemala King Size Bed', 'Pr_Images/Bed/P_Bed_5-1.jpg', 'Pr_Images/Bed/P_Bed_5-2.jpg', 'Pr_Images/Bed/P_Bed_5-3.jpg', 'Pr_Images/Bed/P_Bed_5-4.jpg', 'Pr_Images/Bed/P_Bed_5-5.jpg', 'Pr_Images/Bed/P_Bed_5-6.jpg', 39899, 'Contemporary Furniture reflects designs that are current or en vogue. It doesn''t necessarily reference historical design styles and often provides a feeling of everything in its place. ', 5, 34, 78, 'Espresso Walnut', '1 Year', 82, 'Carpenter Assembly', 'Sheesham Wood', 'Yes', 'King'),
('P_BED_6', 'Newnham King Size Bed', 'Pr_Images/Bed/P_Bed_6-1.jpg', 'Pr_Images/Bed/P_Bed_6-2.jpg', 'Pr_Images/Bed/P_Bed_6-3.jpg', 'Pr_Images/Bed/P_Bed_6-4.jpg', 'Pr_Images/Bed/P_Bed_6-5.jpg', 'Pr_Images/Bed/P_Bed_6-6.jpg', 31199, 'olonial Style Furniture is graceful and refined, often characterized by the use of turnings, curved legs and motifs to present an elegant appearance. Colonial Style Furniture sees Indian craftsmen interpreting European period styles (such as the Queen Anne and Georgian styles) in indigenous woods like Sheesham and Mango.', 5, 12, 80, 'Espresso Walnut', '1 Year', 84, 'Carpenter Assembly', 'Sheesham Wood', 'No', 'King'),
('P_BED_7', 'Santa Cruz Extendable Single Bed', 'Pr_Images/Bed/P_Bed_7-1.jpg', 'Pr_Images/Bed/P_Bed_7-2.jpg', 'Pr_Images/Bed/P_Bed_7-3.jpg', 'Pr_Images/Bed/P_Bed_7-4.jpg', 'Pr_Images/Bed/P_Bed_7-5.jpg', 'Pr_Images/Bed/P_Bed_7-6.jpg', 20999, 'Contemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place. ', 5, 28, 39, 'Provincial Teak', '1 Year', 81, 'Carpenter Assembly', 'Sheesham Wood', 'No', 'Single'),
('P_BED_8', 'Casa Rio Single Bed', 'Pr_Images/Bed/P_Bed_8-1.jpg', 'Pr_Images/Bed/P_Bed_8-2.jpg', 'Pr_Images/Bed/P_Bed_8-3.jpg', 'Pr_Images/Bed/P_Bed_8-4.jpg', 'Pr_Images/Bed/P_Bed_8-5.jpg', 'Pr_Images/Bed/P_Bed_8-6.jpg', 13299, 'Contemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place.', 5, 13, 74, 'Espresso Walnut', '1 Year', 38, 'Carpenter Assembly', 'Sheesham Wood', 'No', 'Single'),
('P_BED_9', 'Ciudad Single Bed', 'Pr_Images/Bed/P_Bed_9-1.jpg', 'Pr_Images/Bed/P_Bed_9-2.jpg', 'Pr_Images/Bed/P_Bed_9-3.jpg', 'Pr_Images/Bed/P_Bed_9-4.jpg', 'Pr_Images/Bed/P_Bed_9-5.jpg', 'Pr_Images/Bed/P_Bed_9-6.jpg', 26599, 'Contemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place. ', 5, 44, 57, 'Honey Oak', '1 Year', 83, 'Carpenter Assembly', 'Sheesham Wood', 'No', 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `product_bookshelf_display_unit`
--

CREATE TABLE IF NOT EXISTS `product_bookshelf_display_unit` (
  `product_id` varchar(12) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_price` int(7) NOT NULL,
  `product_stock` int(3) NOT NULL,
  `product_img` varchar(400) NOT NULL,
  `product_img2` varchar(400) NOT NULL,
  `product_img3` varchar(400) NOT NULL,
  `product_img4` varchar(400) NOT NULL,
  `product_img5` varchar(400) NOT NULL,
  `product_img6` varchar(400) NOT NULL,
  `shape` varchar(20) NOT NULL,
  `material` varchar(25) NOT NULL,
  `product_desc` varchar(1000) NOT NULL,
  `assembly` varchar(20) NOT NULL,
  `floor_standing` varchar(3) NOT NULL,
  `storage_type` varchar(30) NOT NULL,
  `with_storage` varchar(3) NOT NULL,
  `size` varchar(10) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_bookshelf_display_unit`
--

INSERT INTO `product_bookshelf_display_unit` (`product_id`, `product_name`, `product_price`, `product_stock`, `product_img`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_img6`, `shape`, `material`, `product_desc`, `assembly`, `floor_standing`, `storage_type`, `with_storage`, `size`) VALUES
('P_DIS_1', 'Narushi Display Shelf Unit', 4559, 5, 'Pr_Images/Bookshelf/P_DIS_1-1.jpg', 'Pr_Images/Bookshelf/P_DIS_1-2.jpg', 'Pr_Images/Bookshelf/P_DIS_1-3.jpg', 'Pr_Images/Bookshelf/P_DIS_1-4.jpg', 'Pr_Images/Bookshelf/P_DIS_1-5.jpg', 'Pr_Images/Bookshelf/P_DIS_1-6.jpg', 'Rectangular', 'Engineered Wood', 'Modern Furniture reflects the design philosophy of form following function prevalent in modernism. These designs represent the ideals of cutting excess, practicality and an absence of decoration.\r\n\r\nThe forms of furniture are visually light (like in the use of polished metal and engineered wood) and follow minimalist principles of design which are influenced by architectural concepts like the cantilever. Modern furniture fits best in open floor plans with clean lines that thrive in the absence of clutter.', 'Self Assembly', 'Yes', 'Open Storage', 'Yes', '73'),
('P_DIS_2', 'Akiro Three Tier Bookcase ', 1839, 5, 'Pr_Images/Bookshelf/P_DIS_2-1.jpg', 'Pr_Images/Bookshelf/P_DIS_2-2.jpg', 'Pr_Images/Bookshelf/P_DIS_2-3.jpg', 'Pr_Images/Bookshelf/P_DIS_2-4.jpg', 'Pr_Images/Bookshelf/P_DIS_2-5.jpg', 'Pr_Images/Bookshelf/P_DIS_2-6.jpg', 'Rectangular', 'Engineered Wood', 'Modern Furniture reflects the design philosophy of form following function prevalent in modernism. These designs represent the ideals of cutting excess, practicality and an absence of decoration.', 'Carpenter Assembly', 'Yes', 'Open Storage', 'Yes', '32'),
('P_DIS_3', 'Wilberforce Book Shelf', 45599, 5, 'Pr_Images/Bookshelf/P_DIS_3-1.jpg', 'Pr_Images/Bookshelf/P_DIS_3-2.jpg', 'Pr_Images/Bookshelf/P_DIS_3-3.jpg', 'Pr_Images/Bookshelf/P_DIS_3-4.jpg', 'Pr_Images/Bookshelf/P_DIS_3-5.jpg', 'Pr_Images/Bookshelf/P_DIS_3-6.jpg', 'Rectangular', 'Sheesham Wood', 'Colonial Style Furniture is graceful and refined, often characterized by the use of turnings, curved legs and motifs to present an elegant appearance. Colonial Style Furniture sees Indian craftsmen interpreting European period styles (such as the Queen Anne and Georgian styles) in indigenous woods like Sheesham and Mango.', 'No Assembly Required', 'Yes', 'Open Storage, Drawer', 'Yes', '73'),
('P_DIS_4', 'Isabella Book Shelf', 20799, 5, 'Pr_Images/Bookshelf/P_DIS_4-1.jpg', 'Pr_Images/Bookshelf/P_DIS_4-2.jpg', 'Pr_Images/Bookshelf/P_DIS_4-3.jpg', 'Pr_Images/Bookshelf/P_DIS_4-4.jpg', 'Pr_Images/Bookshelf/P_DIS_4-5.jpg', 'Pr_Images/Bookshelf/P_DIS_4-6.jpg', 'Rectangular', 'Mango Wood', 'Colonial Style Furniture is graceful and refined, often characterized by the use of turnings, curved legs and motifs to present an elegant appearance. Colonial Style Furniture sees Indian craftsmen interpreting European period styles (such as the Queen Anne and Georgian styles) in indigenous woods like Sheesham and Mango.', 'No Assembly Required', 'Yes', 'Open Storage', 'Yes', '72'),
('P_DIS_5', 'Crixas Bookshelf', 26399, 5, 'Pr_Images/Bookshelf/P_DIS_5-1.jpg', 'Pr_Images/Bookshelf/P_DIS_5-2.jpg', 'Pr_Images/Bookshelf/P_DIS_5-3.jpg', 'Pr_Images/Bookshelf/P_DIS_5-4.jpg', 'Pr_Images/Bookshelf/P_DIS_5-5.jpg', 'Pr_Images/Bookshelf/P_DIS_5-6.jpg', 'Rectangular', 'Sheesham Wood', 'Quirky Furniture incorporating a twist to industrial and recycled elements to fashion unique pieces that have entered the zeitgeist as a reflection of humankind?s distance from Industry and as an extension of the green movement.', 'No Assembly Required', 'Yes', 'Open Storage', 'Yes', '66'),
('P_DIS_6', 'Iduapriem Book Shelf', 28799, 5, 'Pr_Images/Bookshelf/P_DIS_6-1.jpg', 'Pr_Images/Bookshelf/P_DIS_6-2.jpg', 'Pr_Images/Bookshelf/P_DIS_6-3.jpg', 'Pr_Images/Bookshelf/P_DIS_6-4.jpg', 'Pr_Images/Bookshelf/P_DIS_6-5.jpg', 'Pr_Images/Bookshelf/P_DIS_6-6.jpg', 'Rectangular', 'Mango Wood', 'Quirky Furniture incorporating a twist to industrial and recycled elements to fashion unique pieces that have entered the zeitgeist as a reflection of humankind distance from Industry and as an extension of the green movement.', 'No Assembly Required', 'Yes', 'Open Storage', 'Yes', '64'),
('P_DIS_7', 'Iduapriem Book Shelf', 21999, 5, 'Pr_Images/Bookshelf/P_DIS_7-1.jpg', 'Pr_Images/Bookshelf/P_DIS_7-2.jpg', 'Pr_Images/Bookshelf/P_DIS_7-3.jpg', 'Pr_Images/Bookshelf/P_DIS_7-4.jpg', 'Pr_Images/Bookshelf/P_DIS_7-5.jpg', 'Pr_Images/Bookshelf/P_DIS_7-6.jpg', 'Rectangular', 'Mango Wood', 'Quirky Furniture incorporating a twist to industrial and recycled elements to fashion unique pieces that have entered the zeitgeist as a reflection of humankind distance from Industry and as an extension of the green movement.', 'No Assembly Required', 'Yes', 'Open Storage', 'Yes', '60'),
('P_DIS_8', 'Subrata Book Shelf', 13599, 5, 'Pr_Images/Bookshelf/P_DIS_8-1.jpg', 'Pr_Images/Bookshelf/P_DIS_8-2.jpg', 'Pr_Images/Bookshelf/P_DIS_8-3.jpg', 'Pr_Images/Bookshelf/P_DIS_8-4.jpg', 'Pr_Images/Bookshelf/P_DIS_8-5.jpg', 'Pr_Images/Bookshelf/P_DIS_8-6.jpg', 'Rectangular', 'Mango Wood', 'In its carefully crafted details, ethnic furniture takes you back to a different era of living; your house becomes a home with furniture that transcends generations. Influenced by ethnic art and literature, this style of furniture is designed to balance design with the practicality that your home demands. ', 'No Assembly Required', 'Yes', 'Open Storage, Closed Storage', 'Yes', '75'),
('P_DIS_9', 'Clermont Book Shelf', 14399, 5, 'Pr_Images/Bookshelf/P_DIS_9-1.jpg', 'Pr_Images/Bookshelf/P_DIS_9-2.jpg', 'Pr_Images/Bookshelf/P_DIS_9-3.jpg', 'Pr_Images/Bookshelf/P_DIS_9-4.jpg', 'Pr_Images/Bookshelf/P_DIS_9-5.jpg', 'Pr_Images/Bookshelf/P_DIS_9-6.jpg', 'Rectangular', 'Mango Wood', 'Quirky Furniture incorporating a twist to industrial and recycled elements to fashion unique pieces that have entered the zeitgeist as a reflection of humankind distance from Industry and as an extension of the green movement.', 'No Assembly Required', 'Yes', 'Open Storage', 'Yes', '38');

-- --------------------------------------------------------

--
-- Table structure for table `product_dinning_table`
--

CREATE TABLE IF NOT EXISTS `product_dinning_table` (
  `product_id` varchar(12) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `product_price` int(7) NOT NULL,
  `product_stock` int(3) NOT NULL,
  `product_img` varchar(400) NOT NULL,
  `product_img2` varchar(400) NOT NULL,
  `product_img3` varchar(400) NOT NULL,
  `product_img4` varchar(400) NOT NULL,
  `product_img5` varchar(400) NOT NULL,
  `product_img6` varchar(400) NOT NULL,
  `product_desc` varchar(1000) NOT NULL,
  `table_storage` varchar(15) NOT NULL,
  `primary_room` varchar(15) NOT NULL,
  `table_shape` varchar(20) NOT NULL,
  `assembly` varchar(20) NOT NULL,
  `table_sitting_space` varchar(1) NOT NULL,
  `table_material` varchar(20) NOT NULL,
  `chair_type` varchar(20) NOT NULL,
  `material` varchar(15) NOT NULL,
  `chair_material` varchar(15) NOT NULL,
  `cushain_type` varchar(6) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_dinning_table`
--

INSERT INTO `product_dinning_table` (`product_id`, `product_name`, `product_price`, `product_stock`, `product_img`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_img6`, `product_desc`, `table_storage`, `primary_room`, `table_shape`, `assembly`, `table_sitting_space`, `table_material`, `chair_type`, `material`, `chair_material`, `cushain_type`) VALUES
('P_DIN_1', 'San Juan Dining Set', 30099, 5, 'Pr_Images/Diningtable/P_DIN_1-1.jpg', 'Pr_Images/Diningtable/P_DIN_1-2.jpg', 'Pr_Images/Diningtable/P_DIN_1-3.jpg', 'Pr_Images/Diningtable/P_DIN_1-4.jpg', 'Pr_Images/Diningtable/P_DIN_1-5.jpg', 'Pr_Images/Diningtable/P_DIN_1-6.jpg', 'This SKU is a hand-picked Pepperfry favorite!\r\n\r\nContemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place. ', 'Without Storage', 'Dining Room', 'Square', 'Self Assembly', '4', 'Acacia Wood', 'Without Upholstery', 'Acacia Wood', 'Acacia Wood', 'None'),
('P_DIN_2', 'Clermont Dining Set', 49599, 5, 'Pr_Images/Diningtable/P_DIN_2-1.jpg', 'Pr_Images/Diningtable/P_DIN_2-2.jpg', 'Pr_Images/Diningtable/P_DIN_2-3.jpg', 'Pr_Images/Diningtable/P_DIN_2-4.jpg', 'Pr_Images/Diningtable/P_DIN_2-5.jpg', 'Pr_Images/Diningtable/P_DIN_2-6.jpg', 'Quirky Furniture incorporating a twist to industrial and recycled elements to fashion unique pieces that have entered the zeitgeist as a reflection of humankind distance from Industry and as an extension of the green movement.', 'Without Storage', 'Dining Room', 'Circle', 'Self Assembly', '4', 'Metal', 'Without Upholstery', 'Metal', 'Metal', 'None'),
('P_DIN_3', 'Nirvaana Dining Set', 44799, 5, 'Pr_Images/Diningtable/P_DIN_3-1.jpg', 'Pr_Images/Diningtable/P_DIN_3-2.jpg', 'Pr_Images/Diningtable/P_DIN_3-3.jpg', 'Pr_Images/Diningtable/P_DIN_3-4.jpg', 'Pr_Images/Diningtable/P_DIN_3-5.jpg', 'Pr_Images/Diningtable/P_DIN_3-6.jpg', 'In its carefully crafted details, ethnic furniture takes you back to a different era of living; your house becomes a home with furniture that transcends generations. Influenced by ethnic art and literature, this style of furniture is designed to balance design with the practicality that your home demands. ', 'Without Storage', 'Dining Room', 'Rectangular', 'Self Assembly', '4', 'Sheesham Wood', 'Without Upholstery', 'Sheesham Wood', 'Sheesham Wood', 'None'),
('P_DIN_4', 'Santa Fe Dining Set', 53899, 5, 'Pr_Images/Diningtable/P_DIN_4-1.jpg', 'Pr_Images/Diningtable/P_DIN_4-2.jpg', 'Pr_Images/Diningtable/P_DIN_4-3.jpg', 'Pr_Images/Diningtable/P_DIN_4-4.jpg', 'Pr_Images/Diningtable/P_DIN_4-5.jpg', 'Pr_Images/Diningtable/P_DIN_4-6.jpg', 'Contemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place. ', 'Without Storage', 'Dining Room', 'Rectangular', 'Self Assembly', '6', 'Sheesham Wood', 'With Upholstery', 'Sheesham Wood', 'Sheesham Wood', 'Soft'),
('P_DIN_5', 'Casa Madera Dining Set', 53199, 5, 'Pr_Images/Diningtable/P_DIN_5-1.jpg', 'Pr_Images/Diningtable/P_DIN_5-2.jpg', 'Pr_Images/Diningtable/P_DIN_5-3.jpg', 'Pr_Images/Diningtable/P_DIN_5-4.jpg', 'Pr_Images/Diningtable/P_DIN_5-5.jpg', 'Pr_Images/Diningtable/P_DIN_5-6.jpg', 'Contemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place. ', 'Without Storage', 'Dining Room', 'Rectangular', 'Self Assembly', '6', 'Sheesham Wood', 'With Upholstery', 'Sheesham Wood', 'Sheesham Wood', 'Soft'),
('P_DIN_6', 'Oriel Dining Set', 71999, 5, 'Pr_Images/Diningtable/P_DIN_6-1.jpg', 'Pr_Images/Diningtable/P_DIN_6-2.jpg', 'Pr_Images/Diningtable/P_DIN_6-3.jpg', 'Pr_Images/Diningtable/P_DIN_6-4.jpg', 'Pr_Images/Diningtable/P_DIN_6-5.jpg', 'Pr_Images/Diningtable/P_DIN_6-6.jpg', 'Colonial Style Furniture is graceful and refined, often characterized by the use of turnings, curved legs and motifs to present an elegant appearance. Colonial Style Furniture sees Indian craftsmen interpreting European period styles (such as the Queen Anne and Georgian styles) in indigenous woods like Sheesham and Mango.', 'Without Storage', 'Dining Room', 'Rectangular', 'Self Assembly', '6', 'Sheesham Wood', 'With Upholstery', 'Sheesham Wood', 'Sheesham Wood', 'Soft'),
('P_DIN_7', 'Bernadita Dining Set', 51799, 5, 'Pr_Images/Diningtable/P_DIN_7-1.jpg', 'Pr_Images/Diningtable/P_DIN_7-2.jpg', 'Pr_Images/Diningtable/P_DIN_7-3.jpg', 'Pr_Images/Diningtable/P_DIN_7-4.jpg', 'Pr_Images/Diningtable/P_DIN_7-5.jpg', 'Pr_Images/Diningtable/P_DIN_7-6.jpg', 'Contemporary Furniture reflects designs that are current or en vogue. It doesn''t necessarily reference historical design styles and often provides a feeling of everything in its place. ', 'Without Storage', 'Dining Room', 'Rectangular', 'Self Assembly', '8', 'Sheesham Wood', 'With Upholstery', 'Sheesham Wood', 'Sheesham Wood', 'Soft'),
('P_DIN_8', 'Brianna Dining Set', 49699, 5, 'Pr_Images/Diningtable/P_DIN_8-1.jpg', 'Pr_Images/Diningtable/P_DIN_8-2.jpg', 'Pr_Images/Diningtable/P_DIN_8-3.jpg', 'Pr_Images/Diningtable/P_DIN_8-4.jpg', 'Pr_Images/Diningtable/P_DIN_8-5.jpg', 'Pr_Images/Diningtable/P_DIN_8-6.jpg', 'Contemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place. ', 'Without Storage', 'Dining Room', 'Rectangular', 'Self Assembly', '8', 'Sheesham Wood', 'With Upholstery', 'Sheesham Wood', 'Sheesham Wood', 'Soft'),
('P_DIN_9', 'Brunilda Dining Set', 51099, 5, 'Pr_Images/Diningtable/P_DIN_9-1.jpg', 'Pr_Images/Diningtable/P_DIN_9-2.jpg', 'Pr_Images/Diningtable/P_DIN_9-3.jpg', 'Pr_Images/Diningtable/P_DIN_9-4.jpg', 'Pr_Images/Diningtable/P_DIN_9-5.jpg', 'Pr_Images/Diningtable/P_DIN_9-6.jpg', 'Contemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place. ', 'Without Storage', 'Dining Room', 'Rectangular', 'Self Assembly', '8', 'Sheesham Wood', 'Without Upholstery', 'Sheesham Wood', 'Sheesham Wood', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `product_dresser_mirror`
--

CREATE TABLE IF NOT EXISTS `product_dresser_mirror` (
  `product_id` varchar(12) CHARACTER SET utf8 NOT NULL,
  `product_name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `product_price` int(7) NOT NULL,
  `product_stock` int(3) NOT NULL,
  `product_desc` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `product_img` varchar(400) NOT NULL,
  `product_img2` varchar(400) NOT NULL,
  `product_img3` varchar(400) NOT NULL,
  `product_img4` varchar(400) NOT NULL,
  `product_img5` varchar(400) NOT NULL,
  `product_img6` varchar(400) NOT NULL,
  `frame_material` varchar(30) CHARACTER SET utf8 NOT NULL,
  `storage_type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `primary_room` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_dresser_mirror`
--

INSERT INTO `product_dresser_mirror` (`product_id`, `product_name`, `product_price`, `product_stock`, `product_desc`, `product_img`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_img6`, `frame_material`, `storage_type`, `primary_room`) VALUES
('P_DRM_1', 'Angel Dresser', 22900, 5, 'Modern Furniture reflects the design philosophy of form following function prevalent in modernism. These designs represent the ideals of cutting excess, practicality and an absence of decoration.\r\n\r\nThe forms of furniture are visually light and follow minimalist principles of design which are influenced by architectural concepts like the cantilever. Modern furniture fits best in open floor plans with clean lines that thrive in the absence of clutter.', 'Pr_Images/Dressingtable/P_DRM_1-1.jpg', 'Pr_Images/Dressingtable/P_DRM_1-2.jpg', 'Pr_Images/Dressingtable/P_DRM_1-3.jpg', 'Pr_Images/Dressingtable/P_DRM_1-4.jpg', 'Pr_Images/Dressingtable/P_DRM_1-5.jpg', 'Pr_Images/Dressingtable/P_DRM_1-6.jpg', 'Engineered Wood', 'Open Storage, Drawers', 'Bedroom'),
('P_DRM_2', 'Dressing Table', 57761, 5, 'Modern Furniture reflects the design philosophy of form following function prevalent in modernism. These designs represent the ideals of cutting excess, practicality and an absence of decoration. \r\n\r\nThe forms of furniture are visually light and follow minimalist principles of design which are influenced by architectural concepts like the cantilever. Modern furniture fits best in open floor plans with clean lines that thrive in the absence of clutter. ', 'Pr_Images/Dressingtable/P_DRM_2-1.jpg', 'Pr_Images/Dressingtable/P_DRM_2-2.jpg', 'Pr_Images/Dressingtable/P_DRM_2-3.jpg', 'Pr_Images/Dressingtable/P_DRM_2-4.jpg', 'Pr_Images/Dressingtable/P_DRM_2-5.jpg', 'Pr_Images/Dressingtable/P_DRM_2-6.jpg', 'Engineered Wood', 'Drawers', 'Bedroom'),
('P_DRM_3', 'Mondo Dressing Table', 47145, 5, 'Modern Furniture reflects the design philosophy of form following function prevalent in modernism. These designs represent the ideals of cutting excess, practicality and an absence of decoration. \r\n\r\nThe forms of furniture are visually light and follow minimalist principles of design which are influenced by architectural concepts like the cantilever. Modern furniture fits best in open floor plans with clean lines that thrive in the absence of clutter.', 'Pr_Images/Dressingtable/P_DRM_3-1.jpg', 'Pr_Images/Dressingtable/P_DRM_3-2.jpg', 'Pr_Images/Dressingtable/P_DRM_3-3.jpg', 'Pr_Images/Dressingtable/P_DRM_3-4.jpg', 'Pr_Images/Dressingtable/P_DRM_3-5.jpg', 'Pr_Images/Dressingtable/P_DRM_3-6.jpg', 'Engineered Wood', 'Open Storage, Drawers', 'Bedroom'),
('P_DRM_4', 'Thyme Dressing Table', 37695, 5, 'Contemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place. ', 'Pr_Images/Dressingtable/P_DRM_4-1.jpg', 'Pr_Images/Dressingtable/P_DRM_4-2.jpg', 'Pr_Images/Dressingtable/P_DRM_4-3.jpg', 'Pr_Images/Dressingtable/P_DRM_4-4.jpg', 'Pr_Images/Dressingtable/P_DRM_4-5.jpg', 'Pr_Images/Dressingtable/P_DRM_4-6.jpg', 'Acacia Wood', 'Drawers', 'Bedroom'),
('P_DRM_5', 'Montana Dresser', 36645, 5, 'Modern Furniture reflects the design philosophy of form following function prevalent in modernism. These designs represent the ideals of cutting excess, practicality and an absence of decoration.', 'Pr_Images/Dressingtable/P_DRM_5-1.jpg', 'Pr_Images/Dressingtable/P_DRM_5-2.jpg', 'Pr_Images/Dressingtable/P_DRM_5-3.jpg', 'Pr_Images/Dressingtable/P_DRM_5-4.jpg', 'Pr_Images/Dressingtable/P_DRM_5-5.jpg', 'Pr_Images/Dressingtable/P_DRM_5-6.jpg', 'Engineered Wood', 'Drawers', 'Bedroom'),
('P_DRM_6', 'Astra Dresser', 29508, 5, 'Modern Furniture reflects the design philosophy of form following function prevalent in modernism. These designs represent the ideals of cutting excess, practicality and an absence of decoration.\r\n\r\nThe forms of furniture are visually light and follow minimalist principles of design which are influenced by architectural concepts like the cantilever. Modern furniture fits best in open floor plans with clean lines that thrive in the absence of clutter.', 'Pr_Images/Dressingtable/P_DRM_6-1.jpg', 'Pr_Images/Dressingtable/P_DRM_6-2.jpg', 'Pr_Images/Dressingtable/P_DRM_6-3.jpg', 'Pr_Images/Dressingtable/P_DRM_6-4.jpg', 'Pr_Images/Dressingtable/P_DRM_6-5.jpg', 'Pr_Images/Dressingtable/P_DRM_6-6.jpg', 'Engineered Wood', 'Drawers', 'Bedroom'),
('P_DRM_7', 'Essex Dressing Table', 27805, 5, 'Modern Furniture reflects the design philosophy of form following function prevalent in modernism. These designs represent the ideals of cutting excess, practicality and an absence of decoration.\r\n\r\nThe forms of furniture are visually light (like in the use of polished metal and engineered wood) and follow minimalist principles of design which are influenced by architectural concepts like the cantilever. Modern furniture fits best in open floor plans with clean lines that thrive in the absence of clutter.', 'Pr_Images/Dressingtable/P_DRM_7-1.jpg', 'Pr_Images/Dressingtable/P_DRM_7-2.jpg', 'Pr_Images/Dressingtable/P_DRM_7-3.jpg', 'Pr_Images/Dressingtable/P_DRM_7-4.jpg', 'Pr_Images/Dressingtable/P_DRM_7-5.jpg', 'Pr_Images/Dressingtable/P_DRM_7-6.jpg', 'Acacia Wood', 'Drawers', 'Bedroom'),
('P_DRM_8', 'Harvest Dresser', 26900, 5, 'Contemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place.', 'Pr_Images/Dressingtable/P_DRM_8-1.jpg', 'Pr_Images/Dressingtable/P_DRM_8-2.jpg', 'Pr_Images/Dressingtable/P_DRM_8-3.jpg', 'Pr_Images/Dressingtable/P_DRM_8-4.jpg', 'Pr_Images/Dressingtable/P_DRM_8-5.jpg', 'Pr_Images/Dressingtable/P_DRM_8-6.jpg', 'Engineered Wood', 'Closed Storage, Drawers', 'Bedroom'),
('P_DRM_9', 'Cubus Dresser', 26900, 5, 'Contemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place.', 'Pr_Images/Dressingtable/P_DRM_9-1.jpg', 'Pr_Images/Dressingtable/P_DRM_9-2.jpg', 'Pr_Images/Dressingtable/P_DRM_9-3.jpg', 'Pr_Images/Dressingtable/P_DRM_9-4.jpg', 'Pr_Images/Dressingtable/P_DRM_9-5.jpg', 'Pr_Images/Dressingtable/P_DRM_9-6.jpg', 'Sheesham Wood', 'Closed Storage, Drawers', 'Bedroom');

-- --------------------------------------------------------

--
-- Table structure for table `product_sofa`
--

CREATE TABLE IF NOT EXISTS `product_sofa` (
  `product_id` varchar(12) CHARACTER SET utf8 NOT NULL,
  `product_name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `product_price` int(7) NOT NULL,
  `product_stock` int(3) NOT NULL,
  `product_desc` varchar(1000) CHARACTER SET utf8 NOT NULL,
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
('P_SOFA_1', 'Mariana Sofa Set', 36399, 5, ' Contemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place.\r\n\r\nThese cool, refined designs in teak wood will throw a contemporary spin to an otherwise plain home. Teak being a unique timber with good grain quality and charming textures matures beautifully over time. These sophisticated furniture products are sure to attract attention and compliment any living space. So go ahead and indulge in the Mariana Teak wood collection.', 'Pr_Images/Sofa/P_SOFA_1-1.jpg', 'Pr_Images/Sofa/P_SOFA_1-2.jpg', 'Pr_Images/Sofa/P_SOFA_1-3.jpg', 'Pr_Images/Sofa/P_SOFA_1-4.jpg', 'Pr_Images/Sofa/P_SOFA_1-5.jpg', 'Pr_Images/Sofa/P_SOFA_1-6.jpg', 26, 71, 25, 'No Assembly Required', '1 Year', 'Teak Wood', 'Living Room', 'Fresh Walnut'),
('P_SOFA_2', 'Modern Living Room Set', 125883, 5, 'Add a pinch of classic flair and a sparkle of verve to your living room with this finely polished Wooden Set from our "Modern Collection" handcrafted in Teak wood with excellent creamish white finish done over it. The sleek structure of the sofa gives it a modern look with a quaint twist to it. The seats are made up of foam covered with jute textured red cotton cloth. The Set includes two single seater sofa with Dhokra and Warli Work, a two-seater sofa with Dhrokra and Warli Art , a Teak Finished wooden Center table with Dhokra and Warli Art which is covered with a glass top to protect it from normal wear and tear, two finely polished blue colored wooden Patio Chairs and two teak wooden Cerulean blue side / corner table with Dhokra and Warli Art. The set will add a class and elegance to your living room. The seat of the sofa is detachable and made up of Foam covered with Jute textured cotton cloth which makes a comfortable seating.', 'Pr_Images/Sofa/P_SOFA_2-1.jpg', 'Pr_Images/Sofa/P_SOFA_2-2.jpg', 'Pr_Images/Sofa/P_SOFA_2-3.jpg', 'Pr_Images/Sofa/P_SOFA_2-4.jpg', 'Pr_Images/Sofa/P_SOFA_2-5.jpg', 'Pr_Images/Sofa/P_SOFA_2-6.jpg', 36, 52, 22, 'No Assembly Required', '1 Year', 'Teak Wood', 'Living Room', 'Multi-Colour'),
('P_SOFA_3', 'Mariana Sofa Set', 46899, 5, 'Contemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place.', 'Pr_Images/Sofa/P_SOFA_3-1.jpg', 'Pr_Images/Sofa/P_SOFA_3-2.jpg', 'Pr_Images/Sofa/P_SOFA_3-3.jpg', 'Pr_Images/Sofa/P_SOFA_3-4.jpg', 'Pr_Images/Sofa/P_SOFA_3-5.jpg', 'Pr_Images/Sofa/P_SOFA_3-6.jpg', 30, 69, 30, 'No Assembly Required', '1 Year', 'Teak Wood', 'Living Room', 'Natural Teak'),
('P_SOFA_4', 'Classic jute Sofa Set', 47272, 5, 'A great addition to your home, the unique Jute design that is sure to enhance the beauty of any home''s dcor. This contemporary 3 plus 1 plus 1 set invites you to sit and relax with its soft lines and warm tone it ensures maximum comfort and beauty.', 'Pr_Images/Sofa/P_SOFA_4-1.jpg', 'Pr_Images/Sofa/P_SOFA_4-2.jpg', 'Pr_Images/Sofa/P_SOFA_4-3.jpg', 'Pr_Images/Sofa/P_SOFA_4-4.jpg', 'Pr_Images/Sofa/P_SOFA_4-5.jpg', 'Pr_Images/Sofa/P_SOFA_4-6.jpg', 30, 35, 68, 'No Assembly Required', '1 Year', 'Teak Wood', 'Living Room', 'Natural Teak'),
('P_SOFA_5', 'Lima Sofa Set', 46899, 5, 'Contemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place. ', 'Pr_Images/Sofa/P_SOFA_5-1.jpg', 'Pr_Images/Sofa/P_SOFA_5-2.jpg', 'Pr_Images/Sofa/P_SOFA_5-3.jpg', 'Pr_Images/Sofa/P_SOFA_5-4.jpg', 'Pr_Images/Sofa/P_SOFA_5-5.jpg', 'Pr_Images/Sofa/P_SOFA_5-6.jpg', 30, 24, 28, 'No Assembly Required', '1 Year', 'Sheesham Wood', 'Living Room', 'Provincial Teak'),
('P_SOFA_6', 'Mariana Sofa Set', 46199, 5, ' Contemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place.\r\n\r\nThese cool, refined designs in teak wood will throw a contemporary spin to an otherwise plain home. Teak being a unique timber with good grain quality and charming textures matures beautifully over time. These sophisticated furniture products are sure to attract attention and compliment any living space. So go ahead and indulge in the Mariana Teak wood collection.', 'Pr_Images/Sofa/P_SOFA_6-1.jpg', 'Pr_Images/Sofa/P_SOFA_6-2.jpg', 'Pr_Images/Sofa/P_SOFA_6-3.jpg', 'Pr_Images/Sofa/P_SOFA_6-4.jpg', 'Pr_Images/Sofa/P_SOFA_6-5.jpg', 'Pr_Images/Sofa/P_SOFA_6-6.jpg', 30, 84, 28, 'No Assembly Required', '1 Year', 'Sheesham Wood', 'Living Room', 'Provincial Teak'),
('P_SOFA_7', 'Elementary Sofa Set', 43636, 5, 'A great addition to your home, this contemporary 3 plus 1 plus 1 set invites you to sit and relax with its soft lines and warm tone it ensures maximum comfort and beauty', 'Pr_Images/Sofa/P_SOFA_7-1.jpg', 'Pr_Images/Sofa/P_SOFA_7-2.jpg', 'Pr_Images/Sofa/P_SOFA_7-3.jpg', 'Pr_Images/Sofa/P_SOFA_7-4.jpg', 'Pr_Images/Sofa/P_SOFA_7-5.jpg', 'Pr_Images/Sofa/P_SOFA_7-6.jpg', 30, 31, 69, 'No Assembly Required', '1 Year', 'Teak Wood', 'Living Room', 'Multi Colour'),
('P_SOFA_8', 'Mariana Sofa Set', 39899, 5, ' Contemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place.\r\n\r\nThese cool, refined designs in teak wood will throw a contemporary spin to an otherwise plain home. Teak being a unique timber with good grain quality and charming textures matures beautifully over time. These sophisticated furniture products are sure to attract attention and compliment any living space. So go ahead and indulge in the Mariana Teak wood collection.', 'Pr_Images/Sofa/P_SOFA_8-1.jpg', 'Pr_Images/Sofa/P_SOFA_8-2.jpg', 'Pr_Images/Sofa/P_SOFA_8-3.jpg', 'Pr_Images/Sofa/P_SOFA_8-4.jpg', 'Pr_Images/Sofa/P_SOFA_8-5.jpg', 'Pr_Images/Sofa/P_SOFA_8-6.jpg', 26, 69, 24, 'No Assembly Required', '1 Year', 'Teak Wood', 'Living Room', 'Fresh Walnut'),
('P_TABLE_9', 'Mariana Sofa Set', 37799, 5, ' Contemporary Furniture reflects designs that are current or en vogue. It doesnt necessarily reference historical design styles and often provides a feeling of everything in its place.\r\n\r\nThese cool, refined designs in teak wood will throw a contemporary spin to an otherwise plain home. Teak being a unique timber with good grain quality and charming textures matures beautifully over time. These sophisticated furniture products are sure to attract attention and compliment any living space. So go ahead and indulge in the Mariana Teak wood collection.', 'Pr_Images/Sofa/P_SOFA_9-1.jpg', 'Pr_Images/Sofa/P_SOFA_9-2.jpg', 'Pr_Images/Sofa/P_SOFA_9-3.jpg', 'Pr_Images/Sofa/P_SOFA_9-4.jpg', 'Pr_Images/Sofa/P_SOFA_9-5.jpg', 'Pr_Images/Sofa/P_SOFA_9-6.jpg', 30, 67, 23, 'No Assembly Required', '1 Year', 'Teak Wood', 'Living Room', 'Natural Teak');

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE IF NOT EXISTS `product_table` (
  `product_id` varchar(12) CHARACTER SET utf8 NOT NULL,
  `product_name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `product_price` int(7) NOT NULL,
  `product_stock` int(3) NOT NULL,
  `product_desc` varchar(1000) CHARACTER SET utf8 NOT NULL,
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
  `assembly_type` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`product_id`, `product_name`, `product_price`, `product_stock`, `product_desc`, `product_img`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_img6`, `colour`, `storage_type`, `sitting_capacity`, `material`, `shape`, `size`, `style`, `table_shape`, `table_material`, `assembly_type`) VALUES
('P_TABLE_1', 'Santiago Coffee Table', 8399, 5, 'Contemporary Furniture reflects designs that are current or en vogue. It doesn''t necessarily reference historical design styles and often provides a feeling of everything in its place. ', 'Pr_Images/Table/P_TABLE_1-1.jpg', 'Pr_Images/Table/P_TABLE_1-2.jpg', 'Pr_Images/Table/P_TABLE_1-3.jpg', 'Pr_Images/Table/P_TABLE_1-4.jpg', 'Pr_Images/Table/P_TABLE_1-5.jpg', 'Pr_Images/Table/P_TABLE_1-6.jpg', 'Provincial Teak', 'Open Storage', 'Without Seating', 'Sheesham Wood', 'Rectangular ', 18, 'Normal', 'Rectangular ', 'Sheesham Wood', 'No Assembly Required'),
('P_TABLE_2', 'Crixas Console Table', 8799, 5, 'Quirky Furniture incorporating a twist to industrial and recycled elements to fashion unique pieces that have entered the zeitgeist as a reflection of humankinds distance from Industry and as an extension of the green movement.', 'Pr_Images/Table/P_TABLE_2-1.jpg', 'Pr_Images/Table/P_TABLE_2-2.jpg', 'Pr_Images/Table/P_TABLE_2-3.jpg', 'Pr_Images/Table/P_TABLE_2-4.jpg', 'Pr_Images/Table/P_TABLE_2-5.jpg', 'Pr_Images/Table/P_TABLE_2-6.jpg', 'Multi-Colour', 'Open Storage, Drawers', 'Without Seating', 'Recycled Wood', 'Rectangular', 30, 'Normal', 'Rectangular', 'Recycled Wood', 'No Assembly Required'),
('P_TABLE_3', 'Clermont Console Table', 18399, 5, 'Quirky Furniture incorporating a twist to industrial and recycled elements to fashion unique pieces that have entered the zeitgeist as a reflection of humankinds distance from Industry and as an extension of the green movement.', 'Pr_Images/Table/P_TABLE_3-1.jpg', 'Pr_Images/Table/P_TABLE_3-2.jpg', 'Pr_Images/Table/P_TABLE_3-3.jpg', 'Pr_Images/Table/P_TABLE_3-4.jpg', 'Pr_Images/Table/P_TABLE_3-5.jpg', 'Pr_Images/Table/P_TABLE_3-6.jpg', 'Black', 'Open Storage', 'Without Seating', 'Metal', 'Rectangular', 32, 'Normal', 'Rectangular', 'Metal', 'No Assembly Required'),
('P_TABLE_4', 'Morila Cabinet Console Table', 30399, 5, 'Quirky Furniture incorporating a twist to industrial and recycled elements to fashion unique pieces that have entered the zeitgeist as a reflection of humankind?s distance from Industry and as an extension of the green movement.', 'Pr_Images/Table/P_TABLE_4-1.jpg', 'Pr_Images/Table/P_TABLE_4-2.jpg', 'Pr_Images/Table/P_TABLE_4-3.jpg', 'Pr_Images/Table/P_TABLE_4-4.jpg', 'Pr_Images/Table/P_TABLE_4-5.jpg', 'Pr_Images/Table/P_TABLE_4-6.jpg', 'Multi-Colour', 'Closed Storage', 'Without Seating', 'Recycled Wood', 'Rectangular', 39, 'Normal', 'Rectangular', 'Recycled Wood', 'No Assembly Required'),
('P_TABLE_5', 'Cowal Console Table', 17999, 5, 'Quirky Furniture incorporating a twist to industrial and recycled elements to fashion unique pieces that have entered the zeitgeist as a reflection of humankinds distance from Industry and as an extension of the green movement.', 'Pr_Images/Table/P_TABLE_5-1.jpg', 'Pr_Images/Table/P_TABLE_5-2.jpg', 'Pr_Images/Table/P_TABLE_5-3.jpg', 'Pr_Images/Table/P_TABLE_5-4.jpg', 'Pr_Images/Table/P_TABLE_5-5.jpg', 'Pr_Images/Table/P_TABLE_5-6.jpg', 'Dual Tone', 'Open Storage', 'Without Seating', 'Recycled Wood', 'Rectangular', 32, 'Normal', 'Rectangular', 'Recycled Wood', 'No Assembly Required'),
('P_TABLE_6', 'Sahadeva Console Table', 23599, 5, 'Quirky Furniture incorporating a twist to industrial and recycled elements to fashion unique pieces that have entered the zeitgeist as a reflection of humankinds distance from Industry and as an extension of the green movement.', 'Pr_Images/Table/P_TABLE_6-1.jpg', 'Pr_Images/Table/P_TABLE_6-2.jpg', 'Pr_Images/Table/P_TABLE_6-3.jpg', 'Pr_Images/Table/P_TABLE_6-4.jpg', 'Pr_Images/Table/P_TABLE_6-5.jpg', 'Pr_Images/Table/P_TABLE_6-6.jpg', 'Dual Tone', 'Closed Storage', 'Without Seating', 'Dual Tone', 'Rectangular', 34, 'Normal', 'Rectangular', 'Dual Tone', 'No Assembly Required'),
('P_TABLE_7', 'Trigarta Console Table', 20799, 5, 'In its carefully crafted details, ethnic furniture takes you back to a different era of living; your house becomes a home with furniture that transcends generations. Influenced by ethnic art and literature, this style of furniture is designed to balance design with the practicality that your home demands. ', 'Pr_Images/Table/P_TABLE_7-1.jpg', 'Pr_Images/Table/P_TABLE_7-2.jpg', 'Pr_Images/Table/P_TABLE_7-3.jpg', 'Pr_Images/Table/P_TABLE_7-4.jpg', 'Pr_Images/Table/P_TABLE_7-5.jpg', 'Pr_Images/Table/P_TABLE_7-6.jpg', 'Provincial Teak', 'Open Storage, Closed Storage', 'Without Seating', 'Sheesham Wood', 'Rectangular', 36, 'Normal', 'Rectangular', 'Sheesham Wood', 'Self Assembly'),
('P_TABLE_8', 'Jarasandha Console Table', 8399, 5, 'In its carefully crafted details, ethnic furniture takes you back to a different era of living; your house becomes a home with furniture that transcends generations. Influenced by ethnic art and literature, this style of furniture is designed to balance design with the practicality that your home demands.', 'Pr_Images/Table/P_TABLE_8-1.jpg', 'Pr_Images/Table/P_TABLE_8-2.jpg', 'Pr_Images/Table/P_TABLE_8-3.jpg', 'Pr_Images/Table/P_TABLE_8-4.jpg', 'Pr_Images/Table/P_TABLE_8-5.jpg', 'Pr_Images/Table/P_TABLE_8-6.jpg', 'Provincial Teak', 'Drawers', 'Without Seating', 'Mango Wood', 'Rectangular', 30, 'Normal', 'Rectangular', 'Mango Wood', 'Self Assembly'),
('P_TABLE_9', 'Sukshara Console Table', 17199, 5, 'In its carefully crafted details, ethnic furniture takes you back to a different era of living; your house becomes a home with furniture that transcends generations. Influenced by ethnic art and literature, this style of furniture is designed to balance design with the practicality that your home demands. ', 'Pr_Images/Table/P_TABLE_9-1.jpg', 'Pr_Images/Table/P_TABLE_9-2.jpg', 'Pr_Images/Table/P_TABLE_9-3.jpg', 'Pr_Images/Table/P_TABLE_9-4.jpg', 'Pr_Images/Table/P_TABLE_9-5.jpg', 'Pr_Images/Table/P_TABLE_9-6.jpg', 'Painted - Multicolour', 'Drawers', 'Without Seating', 'Mango Wood', 'Rectangular', 30, 'Normal', 'Rectangular', 'Mango Wood', 'No Assembly Required');

-- --------------------------------------------------------

--
-- Table structure for table `product_tv_unit`
--

CREATE TABLE IF NOT EXISTS `product_tv_unit` (
  `product_id` varchar(12) NOT NULL,
  `product_name` varchar(150) CHARACTER SET utf8 NOT NULL,
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
  `product_desc` varchar(1000) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tv_unit`
--

INSERT INTO `product_tv_unit` (`product_id`, `product_name`, `product_price`, `product_stock`, `product_img`, `product_img1`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `wall_mount`, `floor_standing`, `primary_room`, `product_desc`) VALUES
('P_TV_1', 'Optima TV Unit', 14190, 5, 'Pr_Images/Tvunit/P_TV_1-1.jpg', 'Pr_Images/Tvunit/P_TV_1-2.jpg', 'Pr_Images/Tvunit/P_TV_1-3.jpg', 'Pr_Images/Tvunit/P_TV_1-4.jpg', 'Pr_Images/Tvunit/P_TV_1-5.jpg', 'Pr_Images/Tvunit/P_TV_1-6.jpg', 'No', 'Yes', 'Living Room', 'Sleekly designed, this TV unit has plenty of shelves and racks to organize not only all of your entertainment gadgets, but also space to keep books and kick-knacks in. It is made from premium grade materials and has a rich dark finish.'),
('P_TV_2', 'Entertainment Unit', 15645, 5, 'Pr_Images/Tvunit/P_TV_2-1.jpg', 'Pr_Images/Tvunit/P_TV_2-2.jpg', 'Pr_Images/Tvunit/P_TV_2-3.jpg', 'Pr_Images/Tvunit/P_TV_2-4.jpg', 'Pr_Images/Tvunit/P_TV_2-5.jpg', 'Pr_Images/Tvunit/P_TV_2-6.jpg', 'No', 'Yes', 'Living Room', 'Modern Furniture reflects the design philosophy of form following function prevalent in modernism. These designs represent the ideals of cutting excess, practicality and an absence of decoration. \r\n\r\nThe forms of furniture are visually light and follow minimalist principles of design which are influenced by architectural concepts like the cantilever. Modern furniture fits best in open floor plans with clean lines that thrive in the absence of clutter. '),
('P_TV_3', 'Kaffee Entertainment Unit', 22346, 5, 'Pr_Images/Tvunit/P_TV_3-1.jpg', 'Pr_Images/Tvunit/P_TV_3-2.jpg', 'Pr_Images/Tvunit/P_TV_3-3.jpg', 'Pr_Images/Tvunit/P_TV_3-4.jpg', 'Pr_Images/Tvunit/P_TV_3-5.jpg', 'Pr_Images/Tvunit/P_TV_3-6.jpg', 'No', 'Yes', 'Living Room', 'Modern Furniture reflects the design philosophy of form following function prevalent in modernism. These designs represent the ideals of cutting excess, practicality and an absence of decoration.\r\n\r\nThe forms of furniture are visually light and follow minimalist principles of design which are influenced by architectural concepts like the cantilever. Modern furniture fits best in open floor plans with clean lines that thrive in the absence of clutter.'),
('P_TV_4', 'Greta Wall Unit', 12495, 5, 'Pr_Images/Tvunit/P_TV_4-1.jpg', 'Pr_Images/Tvunit/P_TV_4-2.jpg', 'Pr_Images/Tvunit/P_TV_4-3.jpg', 'Pr_Images/Tvunit/P_TV_4-4.jpg', 'Pr_Images/Tvunit/P_TV_4-5.jpg', 'Pr_Images/Tvunit/P_TV_4-6.jpg', 'No', 'Yes', 'Living Room', 'Modern Furniture reflects the design philosophy of form following function prevalent in modernism. These designs represent the ideals of cutting excess, practicality and an absence of decoration.\r\n\r\nThe forms of furniture are visually light (like in the use of polished metal and engineered wood) and follow minimalist principles of design which are influenced by architectural concepts like the cantilever. Modern furniture fits best in open floor plans with clean lines that thrive in the absence of clutter.'),
('P_TV_5', 'Jasmine Wall Unit', 29508, 5, 'Pr_Images/Tvunit/P_TV_5-1.jpg', 'Pr_Images/Tvunit/P_TV_5-2.jpg', 'Pr_Images/Tvunit/P_TV_5-3.jpg', 'Pr_Images/Tvunit/P_TV_5-4.jpg', 'Pr_Images/Tvunit/P_TV_5-5.jpg', 'Pr_Images/Tvunit/P_TV_5-6.jpg', 'No', 'Yes', 'Living Room', 'Modern Furniture reflects the design philosophy of form following function prevalent in modernism. These designs represent the ideals of cutting excess, practicality and an absence of decoration.'),
('P_TV_6', 'Oslo Entertainment Unit', 18588, 5, 'Pr_Images/Tvunit/P_TV_6-1.jpg', 'Pr_Images/Tvunit/P_TV_6-2.jpg', 'Pr_Images/Tvunit/P_TV_6-3.jpg', 'Pr_Images/Tvunit/P_TV_6-4.jpg', 'Pr_Images/Tvunit/P_TV_6-5.jpg', 'Pr_Images/Tvunit/P_TV_6-6.jpg', 'No', 'Yes', 'Living Room', 'Modern Furniture reflects the design philosophy of form following function prevalent in modernism. These designs represent the ideals of cutting excess, practicality and an absence of decoration. \r\n\r\nThe forms of furniture are visually light and follow minimalist principles of design which are influenced by architectural concepts like the cantilever. Modern furniture fits best in open floor plans with clean lines that thrive in the absence of clutter. '),
('P_TV_7', 'Alhambra Entertainment Unit', 17499, 5, 'Pr_Images/Tvunit/P_TV_7-1.jpg', 'Pr_Images/Tvunit/P_TV_7-2.jpg', 'Pr_Images/Tvunit/P_TV_7-3.jpg', 'Pr_Images/Tvunit/P_TV_7-4.jpg', 'Pr_Images/Tvunit/P_TV_7-5.jpg', 'Pr_Images/Tvunit/P_TV_7-6.jpg', 'No', 'Yes', 'Living Room', 'Contemporary Furniture reflects designs that are current or en vogue. It doesn''t necessarily reference historical design styles and often provides a feeling of everything in its place. '),
('P_TV_8', 'Brihadratha Entertainment Unit', 33599, 5, 'Pr_Images/Tvunit/P_TV_8-1.jpg', 'Pr_Images/Tvunit/P_TV_8-2.jpg', 'Pr_Images/Tvunit/P_TV_8-3.jpg', 'Pr_Images/Tvunit/P_TV_8-4.jpg', 'Pr_Images/Tvunit/P_TV_8-5.jpg', 'Pr_Images/Tvunit/P_TV_8-6.jpg', 'No', 'Yes', 'Living Room', 'In its carefully crafted details, ethnic furniture takes you back to a different era of living; your house becomes a home with furniture that transcends generations. Influenced by ethnic art and literature, this style of furniture is designed to balance design with the practicality that your home demands. '),
('P_TV_9', 'Somapi Entertainment Unit', 15199, 5, 'Pr_Images/Tvunit/P_TV_9-1.jpg', 'Pr_Images/Tvunit/P_TV_9-2.jpg', 'Pr_Images/Tvunit/P_TV_9-3.jpg', 'Pr_Images/Tvunit/P_TV_9-4.jpg', 'Pr_Images/Tvunit/P_TV_9-5.jpg', 'Pr_Images/Tvunit/P_TV_9-6.jpg', 'No', 'Yes', 'Living Room', 'In its carefully crafted details, ethnic furniture takes you back to a different era of living; your house becomes a home with furniture that transcends generations. Influenced by ethnic art and literature, this style of furniture is designed to balance design with the practicality that your home demands. ');

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
('ameyp', '123456789', 'ameyp@ymail.com', 'amey', 'pokle', 'sdsa53d1', 'Vadodara', 'Gujarat', 35323, '89545', '', ''),
('Archil01', '123456789', 'archil.ggwp@gmail.co', 'Archil', 'Prajapati', 'dsfjsjd', 'Vadodara', 'Gujarat', 39004, '9351321', '', 'n'),
('vijay1', 'password', 'rrgreatvijay5@gmail.com', 'Vijay', 'Sekhar', 'ajsdhaskj hj', 'Vadodara', 'Gujarat', 390009, '9510835904', '', ''),
('vijay11', '12345678', 'rrgreatvijay5@gmail.comw', 'Vijay1', 'Sekhar1', '654', 'Vadodara', 'Gujarat', 265, '325', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
