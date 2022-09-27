-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 05:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khmer24`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(250) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `status`) VALUES
(12, 'Popular Ads', 0),
(13, 'Feature Ads', 1),
(14, 'Latest Ads', 0);

-- --------------------------------------------------------

--
-- Table structure for table `commercial`
--

CREATE TABLE `commercial` (
  `com_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `com_name` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commercial`
--

INSERT INTO `commercial` (`com_id`, `status`, `com_name`, `image`) VALUES
(2, 0, 'Smart', '3662236756279314887.png');

-- --------------------------------------------------------

--
-- Table structure for table `container`
--

CREATE TABLE `container` (
  `con_id` int(11) NOT NULL,
  `con_name` text NOT NULL,
  `con_text` text NOT NULL,
  `image` text NOT NULL,
  `con_int` text NOT NULL,
  `con_cat` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `container`
--

INSERT INTO `container` (`con_id`, `con_name`, `con_text`, `image`, `con_int`, `con_cat`, `status`) VALUES
(11, '$$$-វីឡាកែងក្នុងបុរីម៉នដានីជិតវត្តភ្នៀតលក់ប្រញាប់-$$$', '', '40151--1627939267-19040118-b.jpg', '222$', 14, 1),
(12, 'ដីលក់', '', '356390-93-b.jpg', '500$', 14, 1),
(13, 'Dell inspiron 3467 (Used)ម៉ូតពេញនិយម ធន់ ល្បឿនលឿន អាចប្រើប្រាស់ជាមួយការងារឌីស្សាញ នឹងកាត់តវីដេអូ', '<p>រំលស់ផ្ទះ</p>\r\n<p>&nbsp;</p>', '332682---1612327394-28563368-b.jpg', '2000$', 14, 1),
(14, '$$$-ផ្ទះវីឡាលក់ បុរីម៉ន ដានីជិតវត្តភ្នៀត (តំលៃទាបជាងទីផ្សារច្រើន)-$$$', '', '332682---1612318164-47226048-b.jpg', '300$', 14, 1),
(15, 'land opposite the mountain for sale (Kep)', '', '332682-land-opposite-the-mountain-for-sale-kep-1611233655-77056064-b.jpg', '500$', 14, 1),
(16, '❤ 公寓靠近金宝城/机场 Cozy Apt with pool and gym', '', '2816-cozy-apt-with-pool34-b.jpg', '400$', 13, 1),
(17, '? វីឡាស្អាតបែបប្រណិតសម្រាប់ជួល', '', '173807-ud83dudce3-1655775247-43212482-b.jpg', '500$', 13, 1),
(18, 'Hotel business 19 room for rent', '', '115110-hotel-business-for-lease44-b.jpg', '111$', 13, 1),
(19, 'វីឡាអាងទឹកសម្រាប់ជួលនៅទួលគោក', '', '173807--1637055890-72462349-b.jpg', '30500$', 13, 1),
(20, 'Samsung A52 new 100% warranty 1year', '', '68039-samsung-a52-new-100-warranty-1year-1648352861-34884593-b.jpg', '500$', 12, 1),
(21, 'Iphone 13 pro max 128G blue ,green ,gold color new LL/A (no active )', '', '68039-iphone-13-pro-max-128g-blue-green-gold-color-new-lla-no-active-1654218329-25685868-b.jpg', '111$', 12, 1),
(22, 'Translucent anti-fall Protective Case Oneplus Family', '', '347731-translucent-anti-fall-protective-case-oneplus-family-1635397052-37804813-b.jpg', '500$', 12, 1),
(23, 'Galaxy TabA7 Lite Wi-Fi only new 100% warranty 1year', '', '68039-galaxy-taba7-lite-wi-fi-only-new-100-warranty-1year-1651554169-46165047-b.jpg', '222$', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `slide_id` int(11) NOT NULL,
  `slide_name` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`slide_id`, `slide_name`, `image`, `status`) VALUES
(5, 'cellcard', 'ai.jfif', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `commercial`
--
ALTER TABLE `commercial`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `container`
--
ALTER TABLE `container`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `commercial`
--
ALTER TABLE `commercial`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `container`
--
ALTER TABLE `container`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
