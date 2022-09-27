-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 03:42 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hanchey`
--

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `tid` varchar(40) NOT NULL,
  `id_card` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `position` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `dob` date NOT NULL,
  `pob` text NOT NULL,
  `phone` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `tid`, `id_card`, `name`, `gender`, `position`, `image`, `dob`, `pob`, `phone`) VALUES
(25, '1900300460', '061261445(01)', 'ឌីម គា', 'male', '2', 'myimg.jpg', '1990-05-07', '<p>ស្រុកត្បូងឃ្មុំ ខេត្តកំពង់ចាម</p>', '០96 6 14 14 66'),
(26, '1810800370', '062055116', 'ភា គិន', 'male', '0', 'photo_2017-06-17_15-22-29.jpg', '1981-10-28', '<p>ខេត្តកណ្តាល</p>', '០12 735 195'),
(27, '1840300135', '061909860', 'ឃ្លាំង នរា', 'male', '1', 'photo_2019-06-25_16-37-59.jpg', '1984-03-03', '<p>ខេត្តកំពង់ចាម</p>', '០17 474 599'),
(28, '1690300454', '061620711', 'ទ្រី ទាងម៉េង', 'male', '1', 'photo_2019-02-27_16-26-28.jpg', '1969-08-20', '<p>ខេត្តកំពង់ចាម</p>', '092 772 944'),
(29, '1970300085', '061426691', 'ស៊ីម ពន្លក', 'male', '5', 'photo_2020-11-10_21-21-36.jpg', '1997-03-17', '<p>ខេត្តកំពង់ចាម</p>', '081 824 864'),
(30, '1690300456', '061621311', 'ទូច ឆេងហ៊ត់', 'male', '3', 'photo_2018-06-17_08-19-27.jpg', '1969-08-10', '<p>ខេត្តកំពង់ចាម</p>', '012 635 118'),
(31, '1690300457', '061620035', 'គូ ចាន់ថា', 'male', '4', 'cha.jpg', '1969-03-13', '<p>ខេត្តកំពង់ចាម</p>', '012 30 23 26'),
(33, '1931000010', '070266658', 'ជា ឃួច', 'male', '2', 'photo_2020-12-11_16-11-54.jpg', '1993-05-21', '<p>ខេត្តក្រចេះ</p>', '070 35 80 91'),
(37, '2700300345', '061628314', 'ឈិន ម៉ៅ', 'female', '2', 'mao.jpg', '1970-06-11', '<p>ខេត្តកំពង់ចាម</p>', '017 79 78 85'),
(38, '2881000161', '070134682', 'ឌី​ វិចិត្រ', 'female', '2', 'vichet.jpg', '1988-04-11', '<p>ខេត្តក្រចេះ</p>', '087 41 66 17'),
(39, '290300439', '061530032', 'ពេជ្រ ចាន់ធូ', 'female', '2', 'photo_2020-11-17_13-27-57.jpg', '1994-04-03', '<p>ខេត្តកំពង់ចាម</p>', '087 43 25 85'),
(40, '2900600218', '150888251', 'ភន ស្រីម៉ៅ', 'female', '2', 'photo_2020-10-19_16-10-57.jpg', '1990-12-10', '<p>ខេត្តកំពង់ធំ</p>', '010 68​ 22 14'),
(41, '2930300100', '061619631', 'ស្រេង បូរី', 'female', '2', 'photo_2019-08-27_12-00-42.jpg', '1993-10-19', '<p>ខេត្តកំពង់ចាម</p>', '078 24 22 06'),
(42, '1860600151', '150657964', 'ហ៊ិន ជីម', 'male', '2', 'photo_2020-07-23_23-24-42.jpg', '1986-01-15', '<p>ខេត្តកំពង់ធំ</p>', '011 70 74 78'),
(43, '2910300159', '061927065', 'ហេង លីនដា', 'female', '2', '123946415_881277879278439_8115244308598280748_o.jpg', '1991-04-07', '<p>ខេត្តកំពង់ចាម</p>', '078 30 79 01'),
(44, '1870300030', '061897244', 'អ៊ឹង គីមហៃ', 'male', '2', '', '1987-02-15', '<p>ខេត្តកំពង់ចាម</p>', '097 999 39 29');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_detail`
--

CREATE TABLE `teacher_detail` (
  `id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `image` text NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_detail`
--

INSERT INTO `teacher_detail` (`id`, `t_id`, `title`, `date`, `image`, `detail`) VALUES
(75, 25, 'ចូលបំរើការងារ', '2020-10-01', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `image`, `status`) VALUES
(3, 'admin', 'admin', 'myimg.jpg', 1),
(12, 'davy', '123456', 'mywife.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_detail`
--
ALTER TABLE `teacher_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `teacher_detail`
--
ALTER TABLE `teacher_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
