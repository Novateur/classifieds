-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2017 at 03:58 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `classified`
--

-- --------------------------------------------------------

--
-- Table structure for table `adsize`
--

CREATE TABLE IF NOT EXISTS `adsize` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newspaper` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `adsize`
--

INSERT INTO `adsize` (`id`, `newspaper`, `image`, `price`, `description`, `section`, `category`) VALUES
(1, 'DailyTimes', NULL, '1000', 'page corner', NULL, NULL),
(2, 'DailyTimes', NULL, '2670.60', 'page center', NULL, NULL),
(3, 'DailyTimes', NULL, '4000', 'Back inner', NULL, NULL),
(4, 'DailyTimes', NULL, '7000', 'Front inner', 'Fashion', 'Hair dressing'),
(7, 'DailyTimes', '3178adsize6620.jpg', '8790.78', 'Page insert', 'Fashion', 'Hair dressing'),
(25, 'The sun', '8047adsize876.jpg', '23322334.89', 'anything', NULL, NULL),
(26, 'The sun', '6679adsize9600.jpg', '8689589478.85', 'anything', 'Fashion', 'Hair dressing'),
(27, 'DailyTimes', '8879adsize9245.jpg', '45653.89', 'Back page', 'Fashion', 'Hair dressing');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `announcer_name` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `announcing` text COLLATE utf8_unicode_ci,
  `size` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `announcer_name`, `announcing`, `size`, `user_id`, `address`) VALUES
(1, 'Mabayoje idowu odi', 'ownership of Kwara State Government Certificate of occupancy on plot 4 Block 39 LPQQR of Adewole Housing Estate, Ilorin Kwara State Nigeria', '2', '1', 'P.O.BOX 779 Kaduna');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `newspaper` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `newspaper`, `section_id`) VALUES
(2, 'gfgfrdefds', 'The sun', 'News'),
(3, 'Hair dressing', 'DailyTimes', 'Fashion'),
(4, 'Suite making', 'DailyTimes', 'Fashion'),
(5, 'Business', 'DailyTimes', 'Economics');

-- --------------------------------------------------------

--
-- Table structure for table `change_name`
--

CREATE TABLE IF NOT EXISTS `change_name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `former_name` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_name` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time1` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `section` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `days to appear` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `change_name`
--

INSERT INTO `change_name` (`id`, `former_name`, `current_name`, `size`, `user_id`, `time1`, `section`, `category`, `days to appear`) VALUES
(1, 'Okoli Chima Oduduwa', 'Victor Chima Oduduwa', '1', '1', NULL, NULL, NULL, NULL),
(2, 'Blessing Chidinma Agu', 'Blessing Chidinma Okoro', '1', '1', NULL, NULL, NULL, NULL),
(3, 'Kenneth Elvis Prince', 'Gbenga Elvis Prince', '1', '1', NULL, NULL, NULL, NULL),
(4, 'Kenneth Elvis Prince', 'Kenneth Elvis Prince', '1', '1', NULL, NULL, NULL, NULL),
(5, 'Kenneth Elvis Prince', 'Kenneth Elvis Prince', '1', '1', NULL, NULL, NULL, NULL),
(6, 'Kenneth Elvis Prince', 'Kenneth Elvis Prince', '1', '1', NULL, NULL, NULL, NULL),
(7, 'Kenneth Elvis Prince', 'Kenneth Elvis Prince', '1', '1', NULL, NULL, NULL, NULL),
(8, 'Kenneth Elvis Prince', 'Kenneth Elvis Prince', '1', '1', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `csv`
--

CREATE TABLE IF NOT EXISTS `csv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `csv`
--

INSERT INTO `csv` (`id`, `fullname`, `nickname`) VALUES
(1, 'Akobundu Michael', 'bundle'),
(2, 'Samuel Ogbe', 'goalball'),
(3, 'Okonkwo Henry', 'gandalf'),
(4, 'Okoroafor Chukwuemeka', 'Rico');

-- --------------------------------------------------------

--
-- Table structure for table `loss_of_document`
--

CREATE TABLE IF NOT EXISTS `loss_of_document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lost_document` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `owner_name` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_created` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `loss_of_document`
--

INSERT INTO `loss_of_document` (`id`, `lost_document`, `owner_name`, `size`, `time_created`, `user_id`) VALUES
(1, 'Original Re-certification and Re-issuance C of O Acknowledgement in respect of plot No.1220 Cadastral Zone AO7 with new file NO.MISC 53364,old file no.So 1376 Situated at 1220 Cadastral Zone A07 Abuja ', 'Justice Othman Mohammed', '2', NULL, '1'),
(2, 'Original Re-certification and Re-issuance C of O Acknowledgement in respect of plot No.1220 Cadastral Zone AO7 with new file NO.MISC 53364,old file no.So 1376 Situated at 1220 Cadastral Zone A07 Abuja', 'Akobundu Michael', '2', NULL, '1'),
(3, 'Original Re-certification and Re-issuance C of O Acknowledgement in respect of plot No.1220 Cadastral Zone AO7 with new file NO.MISC 53364,old file no.So 1376 Situated at 1220 Cadastral Zone A07 Abuja', 'Olawale Adeyinka', '2', NULL, '1'),
(4, 'Original Re-certification and Re-issuance C of O Acknowledgement in respect of plot No.1220 Cadastral Zone AO7 with new file NO.MISC 53364,old file no.So 1376 Situated at 1220 Cadastral Zone A07 Abuja', 'Prince Nnamdi', '2', NULL, '1'),
(5, 'Original Re-certification and Re-issuance C of O Acknowledgement in respect of plot No.1220 Cadastral Zone AO7 with new file NO.MISC 53364,old file no.So 1376 Situated at 1220 Cadastral Zone A07 Abuja', 'Samuel Kingsley', '2', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `newspapers`
--

CREATE TABLE IF NOT EXISTS `newspapers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_newspaper` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `newspapers`
--

INSERT INTO `newspapers` (`id`, `name_newspaper`, `logo`, `description`) VALUES
(1, 'The sun', 'mastercard.svg', 'The best newspaper in nigeria so far'),
(2, 'DailyTimes', 'visa.svg', 'Newspaper of the century');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `package` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `days` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time1` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dddd` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `newspaper` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section_name`, `newspaper`) VALUES
(1, 'News', 'The sun'),
(2, 'News', 'DailyTimes'),
(3, 'Economics', 'DailyTimes'),
(4, 'Fashion', 'The sun'),
(5, 'Fashion', 'DailyTimes'),
(6, 'Education', 'The sun'),
(8, 'Tourism', 'The sun');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `addr` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `title`, `addr`, `city`, `country`, `postal`) VALUES
(2, 'Akobundu', 'Michael', 'akobundumichael94@gmail.com', '558d9b35628519f7427cb9f4210a2f71fbdf714b', '0890876765', NULL, NULL, NULL, NULL, NULL),
(4, 'Onwuka', 'Nnamdi', 'onwuka@gmail.com', '6fa45ff98a0d3ccc4f371548dcf7a98a6e0ee58e', '07062132032', 'Dr', 'Ajegunle', 'Lagos', 'Nigeria', '01'),
(5, 'Akobundu', 'Ezinwanne', 'bundle94@gmail.com', 'a2221eecd8f121077d84615c2290381a663efca7', '07060815446', 'Mr', 'CBD', 'Abuja', 'Nigeria', '01'),
(6, 'david', 'davido', 'rdtd@thg.com', '26a3c8d084fabdd72967cbbf33486692e0ef54d5', '9876543', 'Mr', 'ftf ffjj', 'lagos', 'Nigeria', '897657');
