-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2013 at 05:07 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbwebisc`
--

-- --------------------------------------------------------

--
-- Table structure for table `daugia`
--

CREATE TABLE IF NOT EXISTS `daugia` (
  `sp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sp_price_now` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sp_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `daugia`
--

INSERT INTO `daugia` (`sp_id`, `user_id`, `sp_price_now`) VALUES
(1, 8, '510000'),
(1, 10, '515000'),
(2, 10, '800000');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `sp_id` int(11) NOT NULL AUTO_INCREMENT,
  `sp_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `sp_status` int(45) NOT NULL,
  `sp_time` datetime NOT NULL,
  `sp_price_goc` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `sp_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`sp_id`, `sp_name`, `sp_status`, `sp_time`, `sp_price_goc`, `sp_image`) VALUES
(1, 'Tăm tre Trẻ Em Mù', 0, '2013-12-21 00:00:00', '500000', 'http://dnapharma.com.vn/ImgUpload/tamtre633909286168125000.jpg'),
(2, 'Bút Chì Yêu Thương', 1, '2013-12-22 00:00:00', '600000', 'http://llwww.thejigsawpuzzles.com/download/640582-2/get-1-2010-6nj0iaez.jpg'),
(3, 'Bút Bi Thương Yêu', 1, '2013-12-22 05:00:00', '600000', 'http://llwww.thejigsawpuzzles.com/download/640582-2/get-1-2010-6nj0iaez.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
  `tintuc_id` int(11) NOT NULL AUTO_INCREMENT,
  `tintuc_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `tintuc_content` text COLLATE utf8_unicode_ci,
  `tintuc_postdate` date DEFAULT NULL,
  `tintuc_keyword` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tintuc_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tintuc_cataloge_id` int(11) NOT NULL,
  PRIMARY KEY (`tintuc_id`),
  KEY `tintuc_cataloge_id` (`tintuc_cataloge_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`tintuc_id`, `tintuc_title`, `user_id`, `tintuc_content`, `tintuc_postdate`, `tintuc_keyword`, `tintuc_status`, `tintuc_cataloge_id`) VALUES
(1, 'Nhà Hảo Tâm Sài Gòn Nguyễn Trung Việt', 1, '[b][i][center]Không Có Nội Dung[/center][/i][/b]', '2013-12-21', 'Hảo Tâm', 'Đã Ủng Hộ', 2),
(5, 'Hảo Tầm Đòi Quà', 1, '[b][center]Một Nhà Hảo Tâm...[/center][/b]', '2013-12-21', 'Hảo Tâm, Đòi Quà', 'Đã Ủng Hộ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc_cataloge`
--

CREATE TABLE IF NOT EXISTS `tintuc_cataloge` (
  `tintuc_cataloge_id` int(11) NOT NULL AUTO_INCREMENT,
  `tintuc_cataloge_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tintuc_cataloge_id`),
  UNIQUE KEY `tintuc_cataloge_name_UNIQUE` (`tintuc_cataloge_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tintuc_cataloge`
--

INSERT INTO `tintuc_cataloge` (`tintuc_cataloge_id`, `tintuc_cataloge_name`) VALUES
(2, 'Do admin post'),
(1, 'Do người dùng post');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_avatar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_sdt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_level_id` int(11) NOT NULL,
  `user_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email_UNIQUE` (`user_email`),
  KEY `user_level_id` (`user_level_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_name`, `user_address`, `user_avatar`, `user_sdt`, `user_level_id`, `user_password`, `user_description`) VALUES
(1, 'vietnt134@gmail.com', 'Nguyễn Trung Việt', '47/8/5 đường 2, Phường Bình An, Quận 2, TPHCM', '', '0903676222', 1, 'whatdidyoudo134', ''),
(8, 'trongloitk192@gmail.com', 'Nguyễn Thị Lợi', '45/8, đường 3, P.An Bình, Quận 2, TPHCM', 'DMC-DevilMayCry-2013-02-03-19-18-40-86.png', '01232254526', 2, 'whatdidyoudo', ''),
(10, '10520649@gm.uit.edu.vn', 'Nguyễn Việt', '45/8, đường 3, P.An Bình, Quận 2, TPHCM', 'DMC-DevilMayCry-2013-02-03-19-18-40-86.png', '01232254526', 2, '12345678', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE IF NOT EXISTS `user_level` (
  `user_level_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_level_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_level_id`),
  UNIQUE KEY `user_level_name_UNIQUE` (`user_level_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`user_level_id`, `user_level_name`) VALUES
(1, 'Admin'),
(4, 'Donor'),
(3, 'Primary_User'),
(2, 'User');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `tintuc_ibfk_3` FOREIGN KEY (`tintuc_cataloge_id`) REFERENCES `tintuc_cataloge` (`tintuc_cataloge_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_level_id`) REFERENCES `user_level` (`user_level_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
