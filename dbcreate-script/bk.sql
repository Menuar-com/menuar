-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2011 at 03:25 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `menuar`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_block`
--

CREATE TABLE `menu_block` (
  `blkID` int(10) NOT NULL AUTO_INCREMENT,
  `blkName` varchar(30) NOT NULL,
  `blkType` tinyint(4) NOT NULL,
  `blkClass` int(5) NOT NULL,
  `blkOwner` int(10) NOT NULL,
  `blkCol` int(4) NOT NULL,
  `blkPosition` int(4) NOT NULL,
  `blkOptions` text NOT NULL,
  KEY `blkID` (`blkID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=835 ;

--
-- Dumping data for table `menu_block`
--

INSERT INTO `menu_block` VALUES(834, '沙律', 3, 2, 2, 0, 0, '');
INSERT INTO `menu_block` VALUES(833, '主食', 2, 1, 2, 0, 0, '');
INSERT INTO `menu_block` VALUES(830, '凍飲類', 0, 0, 2, 2, 0, '');
INSERT INTO `menu_block` VALUES(832, '車仔麵', 1, 3, 2, 0, 0, '');
INSERT INTO `menu_block` VALUES(831, '中午套餐', 0, 1, 2, 0, 0, '');
INSERT INTO `menu_block` VALUES(829, 'fdsasad', 0, 0, 2, 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `menu_comment`
--

CREATE TABLE `menu_comment` (
  `comID` int(11) NOT NULL DEFAULT '0',
  `cusID` int(11) NOT NULL DEFAULT '0',
  `resID` int(11) NOT NULL DEFAULT '0',
  `comContent` text COLLATE utf8_unicode_ci NOT NULL,
  `comPostDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comModDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`comID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_comment`
--


-- --------------------------------------------------------

--
-- Table structure for table `menu_customerinfo`
--

CREATE TABLE `menu_customerinfo` (
  `cusID` int(11) NOT NULL AUTO_INCREMENT,
  `cusPassword` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `cusName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cusEmail` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `cusPhoneArray` text COLLATE utf8_unicode_ci NOT NULL,
  `cusGender` tinyint(4) NOT NULL,
  `cusBirthday` date NOT NULL,
  `cusAddressArray` text COLLATE utf8_unicode_ci NOT NULL,
  `cusPromo` tinyint(1) NOT NULL,
  `cusPoints` smallint(6) NOT NULL DEFAULT '0',
  `cusFavouriteRes` int(11) NOT NULL DEFAULT '0',
  `cusFavouriteFood` int(11) NOT NULL DEFAULT '0',
  `cusResOwner` tinyint(1) NOT NULL,
  PRIMARY KEY (`cusID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `menu_customerinfo`
--

INSERT INTO `menu_customerinfo` VALUES(1, '9ab1c5afa4946ca0040271736f38c83a', '', '1010hk@gmail.com', '', 3, '0000-00-00', '', 0, 0, 0, 0, 1);
INSERT INTO `menu_customerinfo` VALUES(2, '9ab1c5afa4946ca0040271736f38c83a', '', 'cksam@ust.hk', '', 3, '0000-00-00', '', 0, 0, 0, 0, 1);
INSERT INTO `menu_customerinfo` VALUES(3, '5f4dcc3b5aa765d61d8327deb882cf99', '', 'jcct0704@gmail.com', '', 3, '0000-00-00', '', 1, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_drink`
--

CREATE TABLE `menu_drink` (
  `driID` int(11) NOT NULL AUTO_INCREMENT,
  `driOwner` int(10) NOT NULL,
  `driName` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `driPrice` tinyint(4) NOT NULL DEFAULT '0',
  `driType` int(10) NOT NULL DEFAULT '0',
  `driPicture` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `driDescription` text COLLATE utf8_unicode_ci NOT NULL,
  KEY `driID` (`driID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2025 ;

--
-- Dumping data for table `menu_drink`
--

INSERT INTO `menu_drink` VALUES(2024, 2, '熱奶加蛋', 16, 830, '', '');
INSERT INTO `menu_drink` VALUES(2023, 2, '熱檸啡', 14, 830, '', '');
INSERT INTO `menu_drink` VALUES(2022, 2, '熱檸樂', 14, 830, '', '');
INSERT INTO `menu_drink` VALUES(2021, 2, '熱鮮奶', 14, 830, '', '');
INSERT INTO `menu_drink` VALUES(2020, 2, '熱檸蜜', 12, 830, '', '');
INSERT INTO `menu_drink` VALUES(2019, 2, '熱桔蜜', 12, 830, '', '');
INSERT INTO `menu_drink` VALUES(2018, 2, '清香奶水', 12, 830, '', '');
INSERT INTO `menu_drink` VALUES(2017, 2, '滾水蛋', 12, 830, '', '');
INSERT INTO `menu_drink` VALUES(2016, 2, '西洋菜蜜', 12, 830, '', '');
INSERT INTO `menu_drink` VALUES(2015, 2, '檸檬茶', 12, 830, '', '');
INSERT INTO `menu_drink` VALUES(2014, 2, '杏仁霜', 12, 830, '', '');
INSERT INTO `menu_drink` VALUES(2013, 2, '荷蘭谷古', 12, 830, '', '');
INSERT INTO `menu_drink` VALUES(2012, 2, '好立克', 12, 830, '', '');
INSERT INTO `menu_drink` VALUES(2011, 2, '阿華田', 12, 830, '', '');
INSERT INTO `menu_drink` VALUES(2010, 2, '西冷紅茶', 12, 830, '', '');
INSERT INTO `menu_drink` VALUES(2009, 2, '香濃咖啡', 12, 830, '', '');
INSERT INTO `menu_drink` VALUES(2008, 2, 'fdsa', 32, 829, '', '');
INSERT INTO `menu_drink` VALUES(2007, 2, 'fdsa', 23, 829, '', '');
INSERT INTO `menu_drink` VALUES(2006, 2, 'gdsa', 42, 829, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu_food_type1`
--

CREATE TABLE `menu_food_type1` (
  `fooID` int(11) NOT NULL AUTO_INCREMENT,
  `fooOwner` int(10) NOT NULL,
  `fooName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT 'Name of Food',
  `fooPrice` tinyint(4) NOT NULL DEFAULT '0',
  `fooType` int(10) NOT NULL DEFAULT '0',
  `fooPicture` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `fooDescription` text COLLATE utf8_unicode_ci NOT NULL,
  `fooRank` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fooID`),
  KEY `fooID` (`fooID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2005 ;

--
-- Dumping data for table `menu_food_type1`
--

INSERT INTO `menu_food_type1` VALUES(2004, 2, 'kg', 23, 833, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(2003, 2, 'jf', 43, 833, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(2002, 2, 'hf', 127, 833, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(2001, 2, 'hf', 53, 833, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(2000, 2, '茄茸雜箘有機意粉', 45, 833, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1999, 2, '茄茸帆立貝有機意粉', 43, 833, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1998, 2, '日式海鮮炒烏冬', 43, 833, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1997, 2, '炒蒜蓉有機雜菜', 45, 833, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1996, 2, '冬菇糙紅米有機菜飯', 47, 833, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1995, 2, '香蒜三絲西蘭花', 43, 833, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1994, 2, '蠔油雜菇燴小棠菜', 42, 833, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1993, 2, '焗芝士白汁磨菇椰菜花', 45, 833, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1992, 2, '日式鰻魚炒烏冬', 45, 833, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1990, 2, '豉油皇XO醬炒腸粉', 43, 833, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1991, 2, '日式蕎麥冷麵', 43, 833, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1989, 2, 'yo', 11, 831, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1987, 2, 'yi', 12, 831, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1988, 2, 'yi', 12, 831, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1981, 2, '蓮藕馬蹄蒸牛肉餅', 13, 831, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1982, 2, '什錦雞粒玉子豆腐', 53, 831, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1983, 2, '鹹蛋馬蹄蒸肉餅', 12, 831, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1984, 2, '冬菇炸菜蒸牛肉絲', 43, 831, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1985, 2, '木耳馬蹄蒸肉餅', 12, 831, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1986, 2, 'yu', 32, 831, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1980, 2, '香茅牛肉', 51, 831, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1979, 2, '草菇麵根炆雞', 14, 831, '', '', 0);
INSERT INTO `menu_food_type1` VALUES(1978, 2, '蓮藕炆排骨', 32, 831, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_food_type2`
--

CREATE TABLE `menu_food_type2` (
  `fooID` int(11) NOT NULL AUTO_INCREMENT,
  `fooOwner` int(10) NOT NULL,
  `fooName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT 'Name of Food',
  `fooType` int(10) NOT NULL DEFAULT '0',
  `fooPicture` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `fooDescription` text COLLATE utf8_unicode_ci NOT NULL,
  `fooRank` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fooID`),
  KEY `fooID` (`fooID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=433 ;

--
-- Dumping data for table `menu_food_type2`
--

INSERT INTO `menu_food_type2` VALUES(432, 2, '日式蟹籽沙律', 834, '', '', 0);
INSERT INTO `menu_food_type2` VALUES(431, 2, '凱撒沙律', 834, '', '', 0);
INSERT INTO `menu_food_type2` VALUES(430, 2, '鮮雜果沙律', 834, '', '', 0);
INSERT INTO `menu_food_type2` VALUES(429, 2, '鮮雜果拼盤', 834, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_food_type3`
--

CREATE TABLE `menu_food_type3` (
  `fooID` int(11) NOT NULL AUTO_INCREMENT,
  `fooOwner` int(10) NOT NULL,
  `fooName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT 'Name of Food',
  `fooAB` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `fooType` int(10) NOT NULL DEFAULT '0',
  `fooPicture` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `fooDescription` text COLLATE utf8_unicode_ci NOT NULL,
  `fooRank` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fooID`),
  KEY `fooID` (`fooID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=848 ;

--
-- Dumping data for table `menu_food_type3`
--

INSERT INTO `menu_food_type3` VALUES(847, 2, '豬大腸', 'A', 832, '', '', 0);
INSERT INTO `menu_food_type3` VALUES(846, 2, '豬紅', 'A', 832, '', '', 0);
INSERT INTO `menu_food_type3` VALUES(845, 2, '油麵', 'B', 832, '', '', 0);
INSERT INTO `menu_food_type3` VALUES(844, 2, '貢丸', 'A', 832, '', '', 0);
INSERT INTO `menu_food_type3` VALUES(843, 2, '米線', 'B', 832, '', '', 0);
INSERT INTO `menu_food_type3` VALUES(842, 2, '墨魚丸', 'A', 832, '', '', 0);
INSERT INTO `menu_food_type3` VALUES(841, 2, '米粉', 'B', 832, '', '', 0);
INSERT INTO `menu_food_type3` VALUES(840, 2, '牛丸', 'A', 832, '', '', 0);
INSERT INTO `menu_food_type3` VALUES(839, 2, '河粉', 'B', 832, '', '', 0);
INSERT INTO `menu_food_type3` VALUES(838, 2, '魚丸', 'A', 832, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_messages`
--

CREATE TABLE `menu_messages` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `message` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `menu_messages`
--


-- --------------------------------------------------------

--
-- Table structure for table `menu_options`
--

CREATE TABLE `menu_options` (
  `optID` int(10) NOT NULL,
  `optName` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optFormClass` tinyint(1) NOT NULL,
  `optDescription` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`optID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_options`
--


-- --------------------------------------------------------

--
-- Table structure for table `menu_order`
--

CREATE TABLE `menu_order` (
  `ordID` int(11) NOT NULL DEFAULT '0',
  `cusID` int(11) NOT NULL DEFAULT '0',
  `resID` int(11) NOT NULL DEFAULT '0',
  `ordTime` datetime NOT NULL DEFAULT '2000-00-00 00:00:00',
  `ordDetails` text COLLATE utf8_unicode_ci NOT NULL,
  `ordRemark` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `orderTotalPrice` tinyint(4) NOT NULL DEFAULT '0',
  `ordAddress` text COLLATE utf8_unicode_ci NOT NULL,
  `ordPhoneArray` text COLLATE utf8_unicode_ci NOT NULL,
  `ordStatus` enum('recorded','processing','out for deliver','delivered') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'recorded',
  PRIMARY KEY (`ordID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_order`
--


-- --------------------------------------------------------

--
-- Table structure for table `menu_restaurantinfo`
--

CREATE TABLE `menu_restaurantinfo` (
  `resID` int(11) NOT NULL DEFAULT '0',
  `resLoginName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `resName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resOpenTime` time NOT NULL,
  `resCloseTime` time NOT NULL,
  `resRegionID` smallint(6) NOT NULL DEFAULT '0',
  `resAddress` text COLLATE utf8_unicode_ci NOT NULL,
  `resPhone` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `resPhoto` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `resLogo` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `resPriceLimit` tinyint(4) NOT NULL DEFAULT '0',
  `resStatus` enum('open','closed') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'open',
  `resDescription` text COLLATE utf8_unicode_ci NOT NULL,
  `resNotics` text COLLATE utf8_unicode_ci NOT NULL,
  `resRank` smallint(6) NOT NULL DEFAULT '0',
  `resSpeed` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `resPage` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`resID`),
  UNIQUE KEY `resID` (`resID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_restaurantinfo`
--

INSERT INTO `menu_restaurantinfo` VALUES(2, 'cksam@ust.hk', '金鳳茶餐廳', '00:00:00', '19:00:00', 0, '香港灣仔春園街41號', '25720526', 'upload/img_resPhoto/2.jpg', 'upload/img_reslogo/2.jpg', 0, '', '金鳳茶餐廳正', '成功成為第一間測試茶餐廳', 0, '', '');
