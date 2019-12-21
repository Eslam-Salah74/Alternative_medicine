-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 07:17 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organic_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `subtitle` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `links` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `subtitle`, `description`, `links`) VALUES
(2, 'Linear-Algebra', 'Linear Algebra', '', 'www.Linear_Algebra.com'),
(5, 'Heat', 'Heat', 'HEAT HEAT HEAT HEAT HEAT', 'www.Heat.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `cate_name` varchar(250) NOT NULL,
  `cate_benefits` longtext NOT NULL,
  `cate_illness` longtext NOT NULL,
  `cate_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `dept_id`, `cate_name`, `cate_benefits`, `cate_illness`, `cate_img`) VALUES
(9, 1, 'Apples', 'Apples are known for their great health benefits, as it is said that \"an apple a day keeps the doctor away from you every day\", so what do you know about the benefits of apples and nutritional values?\r\napples benefits\r\n1- Improving the health of the nervous system and nerves\r\n2- It protects against dementia\r\n3- Reducing the risk of stroke\r\n4- Reducing high cholesterol levels\r\n5- Protection from diabetes', 'Weight loss / breast cancer', 'apple.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(250) NOT NULL,
  `dept_desc` longtext NOT NULL,
  `dept_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `dept_name`, `dept_desc`, `dept_img`) VALUES
(1, 'Fruits', 'Fruits Fruits Fruits Fruits\r\nFruits Fruits Fruits', 'fruits.jpg'),
(2, 'Herbals', '<ol><li><strong>Herbals</strong></li><li><strong>Herbals</strong></li><li><strong>Herbals</strong></li></ol>', 'herbs.jpg'),
(3, 'Vegerables', '<ul><li><strong>Vegerables Vegerables Vegerables&nbsp;</strong></li><li><strong>VegerablesVegerablesVegerablesVegerables</strong></li><li><strong>Vegerables Vegerables Vegerables</strong></li></ul>', 'Vegetables.jpg'),
(4, 'Spices', '<ul><li><strong>Spices Spices Spices</strong></li><li><strong>Spices Spices Spices</strong></li></ul>', 'Spices.jpg'),
(5, 'Oils', '<ul><li>Oils Oils&nbsp; Oils&nbsp; Oils&nbsp;</li><li>Oils&nbsp; Oils&nbsp; Oils&nbsp; Oils&nbsp;</li><li>Oils&nbsp; Oils&nbsp; Oils&nbsp; Oils&nbsp;</li></ul>', 'oils.jpg'),
(6, 'honey', '<ul><li>honey honey honey honey&nbsp;</li><li>honey honey honey honey&nbsp;</li><li>honey honey honey honey&nbsp;</li></ul>', 'honey.jpg'),
(7, 'Dates', '<ul><li>Dates Dates Dates Dates&nbsp;</li><li>Dates Dates Dates Dates</li></ul>', 'Dates.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `name`, `description`, `image`) VALUES
(1, 'plum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur. Nam lobortis, erat quis pulvinar dignissim, velit ligula ullamcorper ipsu', 'd1.jpg'),
(2, 'Carrots', 'a tapering orange-colored root eaten as a vegetable. 2 the cultivated feathery-leaved plant of the parsley family that yields this vegetable.', 'd2.jpg'),
(3, 'Grape', 'a berry, typically green (classified as white), purple, red, or black, growing in clusters on a grapevine, eaten as fruit, and used in making wine.', 'd3.jpg'),
(4, 'Apples', 'the round fruit of a tree of the rose family, which typically has thin red or green skin and crisp flesh. Many varieties have been developed as dessert or cooking fruit or for making cider.', 'd4.jpg'),
(5, 'Strawberries', 'The garden strawberry (or simply strawberry; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria, collectively known as the strawberries, which are cultivated worldwide for their fruit. The fruit is widely appreciated for its ', 'd5.jpg'),
(6, 'Orange', 'reddish yellow, like a ripe orange in color. Its delicate, red, yellow and orange tubular flowers are quite striking but I am not sure how well the plants will grow in our cooler climate.', 'd6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(4, 'Eslam', 'eslam@gmail.com', '123', 'Admin'),
(8, 'hamed', 'hamed@yahoo.com', '123', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`dept_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
