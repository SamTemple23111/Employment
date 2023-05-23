-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 10:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employment`
--

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(10) NOT NULL,
  `role` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `mobile_number` int(15) NOT NULL,
  `phone_number` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zipcode` int(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `employee_count` int(10) NOT NULL,
  `income` varchar(30) NOT NULL,
  `cr_photo` varchar(300) NOT NULL,
  `logo` varchar(300) NOT NULL,
  `password` varchar(200) NOT NULL,
  `account_create_date` varchar(50) NOT NULL,
  `account_create_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `role`, `name`, `number`, `type`, `mobile_number`, `phone_number`, `username`, `email`, `address1`, `address2`, `country`, `zipcode`, `city`, `employee_count`, `income`, `cr_photo`, `logo`, `password`, `account_create_date`, `account_create_time`) VALUES
(4, 'facility', 'فيصل عبدالله الزهراني', 1, 'شركة', 551524456, 551524456, 'ifaisalqz', 'ifaisalqz@gmail.com', 'طريق الملك عبدالعزيز', 'الياسمين', 'المملكة العربية السعودية', 13326, 'الرياض', 10, 'ifaisalqz', '1684831190_CV.pdf', '1684831190_GIF.gif', 'ad151a70d06db3d12a638d7c3f235a2cf416f31f', '2023/05/23', '10:39:50 am');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `role` varchar(15) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `middle_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `id_number` int(10) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zipcode` int(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `degree` varchar(25) NOT NULL,
  `major` varchar(50) NOT NULL,
  `gpa` varchar(15) NOT NULL,
  `gpa_from` varchar(5) NOT NULL,
  `cv` varchar(300) NOT NULL,
  `id_photo` varchar(300) NOT NULL,
  `avatar` varchar(300) NOT NULL,
  `degree_photo` varchar(300) NOT NULL,
  `password` varchar(200) NOT NULL,
  `account_create_date` varchar(50) NOT NULL,
  `account_create_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `first_name`, `middle_name`, `last_name`, `id_number`, `mobile_number`, `birthdate`, `gender`, `username`, `email`, `address1`, `address2`, `country`, `zipcode`, `city`, `degree`, `major`, `gpa`, `gpa_from`, `cv`, `id_photo`, `avatar`, `degree_photo`, `password`, `account_create_date`, `account_create_time`) VALUES
(41, 'user', 'فيصل', 'عبدالله', 'الزهراني', 1115124768, '0551524456', '2002-02-14', 'ذكر', 'ifaisalqz', 'ifaisalqz@gmail.com', 'طريق الملك عبدالعزيز', 'الياسمين', 'المملكة العربية السعودية', 13326, 'الرياض', 'بكالوريوس', 'تقنية البرمجة وتطوير الويب', 'ifaisalqz', '5', '../uploads/cv/1684783799_CV.pdf', '../uploads/id_photo/1684783799_6343825.jpg', '../uploads/avatar/1684783799_6343825.jpg', '../uploads/degree_photo/1684783799_6343825.jpg', 'ad151a70d06db3d12a638d7c3f235a2cf416f31f', '2023/05/22', '09:29:59 pm'),
(42, 'user', 'فيصل', 'عبدالله', 'الزهراني', 1113124768, '0551324456', '2002-02-14', 'ذكر', 'ifaisalqz1', 'ifaisalqz1@gmail.com', 'طريق الملك عبدالعزيز', 'الياسمين', 'المملكة العربية السعودية', 13326, 'الرياض', 'ماجستير', 'تقنية البرمجة وتطوير الويب', '5', '5', '../uploads/cv/1684830307_CV.pdf', '../uploads/id_photo/1684830307_الهوية-الوطنية.jpeg', '1684830307_PNG.png', '../uploads/degree_photo/1684830307_JEPG.jpeg', 'ad151a70d06db3d12a638d7c3f235a2cf416f31f', '2023/05/23', '10:25:07 am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
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
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
