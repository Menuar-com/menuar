-- phpMyAdmin SQL Dump
-- version 3.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2011 at 02:32 PM
-- Server version: 5.1.54
-- PHP Version: 5.3.5-1ubuntu7.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `menuar`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_food_popupoptions`
--

CREATE TABLE IF NOT EXISTS `menu_food_popupoptions` (
  `fooType` int(11) NOT NULL,
  `drink` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `soup` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sauce` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `staple` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `moar_info` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `gen_info` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`fooType`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_food_popupoptions`
--

INSERT INTO `menu_food_popupoptions` (`fooType`, `drink`, `soup`, `sauce`, `staple`, `moar_info`, `gen_info`) VALUES
(753, '["2006","2014","2018","2019","2020","2022","2023","2024"]', '{"\\u808c\\u8089\\u6c64\\u5e95":1,"\\u897f\\u74dc\\u6c64\\u5e95":1}', '{"\\u829d\\u9ebb\\u9171":1,"\\u756a\\u8304\\u9171":1}', '{"\\u6cb9\\u9762":1,"\\u4e4c\\u51ac":1}', '{"\\u591a\\u996d":1,"\\u591a\\u8fa3":1}', NULL),
(751, '["2015","2018","2019","2020","2021","2022","2023"]', '{"\\u808c\\u8089\\u6c64\\u5e95":0}', '{"\\u829d\\u9ebb\\u9171":0,"\\u756a\\u8304\\u9171":0}', '{"\\u6cb9\\u9762":0,"\\u4e4c\\u51ac":0}', '{"\\u591a\\u996d":0}', NULL),
(752, '["2021","2022","2023"]', '{"\\u808c\\u8089\\u6c64\\u5e95":0}', '{"\\u829d\\u9ebb\\u9171":0,"\\u756a\\u8304\\u9171":0}', '{"\\u6cb9\\u9762":0,"\\u4e4c\\u51ac":0}', NULL, NULL),
(754, '["2006","2007","2008","2019","2020"]', '{"\\u808c\\u8089\\u6c64\\u5e95":0}', '{"\\u829d\\u9ebb\\u9171":0,"\\u756a\\u8304\\u9171":0}', '{"\\u6cb9\\u9762":0,"\\u4e4c\\u51ac":0}', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
