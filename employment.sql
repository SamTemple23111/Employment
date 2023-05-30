-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 11:30 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `role` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `role`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'ad151a70d06db3d12a638d7c3f235a2cf416f31f');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `message_sent_date` varchar(50) NOT NULL,
  `message_sent_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `message_sent_date`, `message_sent_time`) VALUES
(12, 'فيصل عبدالله الزهراني', 'ifaisalqz@gmail.com', 'استفسار', 'السلام عليكم ورحمة الله وبركاته،\r\n\r\nاود الإستفسار عن شركة الإتصالات السعودية هل سوف يتم إتاحة وظائف جديدة من قبلهم أم لا؟. \r\n\r\nشركًا لكم.', '2023/05/30', '03:57:41 am');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(10) NOT NULL,
  `role` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `facility_number` int(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
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

INSERT INTO `facilities` (`id`, `role`, `name`, `facility_number`, `type`, `mobile_number`, `phone_number`, `username`, `email`, `address1`, `address2`, `country`, `zipcode`, `city`, `employee_count`, `income`, `cr_photo`, `logo`, `password`, `account_create_date`, `account_create_time`) VALUES
(7, 'facility', 'شركة الإتصالات السعودية', 1111111111, 'شركة', '0551524456', '0551524456', 'ifaisalqz', 'ifaisalqz@gmail.com', 'طريق الملك عبدالعزيز', 'الياسمين', 'المملكة العربية السعودية', 13326, 'الرياض', 5, 'ifaisalqz', '1685284242_CV.pdf', 'STC.jpg', 'ad151a70d06db3d12a638d7c3f235a2cf416f31f', '2023/05/28', '05:30:42 pm');

-- --------------------------------------------------------

--
-- Table structure for table `facilities_request`
--

CREATE TABLE `facilities_request` (
  `id_request` int(15) NOT NULL,
  `name` varchar(150) NOT NULL,
  `ads_title` varchar(100) NOT NULL,
  `ads_major` varchar(100) NOT NULL,
  `ads_description` varchar(500) NOT NULL,
  `ads_created_date` varchar(50) NOT NULL,
  `ads_created_time` varchar(50) NOT NULL,
  `id_fk` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `facilities_request`
--

INSERT INTO `facilities_request` (`id_request`, `name`, `ads_title`, `ads_major`, `ads_description`, `ads_created_date`, `ads_created_time`, `id_fk`) VALUES
(25, 'شركة الإتصالات السعودية', 'إعلان توظيف في مجال الحاسب', 'تطوير الويب', 'يجب ان يكون حاصل على مؤهل البكالوريوس، يجب ان يكون لديه خبره 5 سنوات في المجال على الأقل', '2023/05/30', '02:45:07 AM', 7);

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

CREATE TABLE `moderator` (
  `id` int(10) NOT NULL,
  `role` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `moderator`
--

INSERT INTO `moderator` (`id`, `role`, `username`, `password`) VALUES
(1, 'moderator', 'moderator', 'ad151a70d06db3d12a638d7c3f235a2cf416f31f');

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
(9, 'user', 'فيصل', 'عبدالله', 'الزهراني', 1115124768, '0551524456', '2002-02-17', 'ذكر', 'ifaisalqz', 'ifaisalqz@gmail.com', 'طريق الملك عبدالعزيز', 'الياسمين', 'المملكة العربية السعودية', 13326, 'الرياض', 'دكتوراه', 'تقنية البرمجة وتطوير الويب', 'ifaisalqz', '5', '1685283631_CV.pdf', '1685283631_الهوية-الوطنية.jpeg', 'SS.JPG', '1685283631_use_case.pdf', 'ad151a70d06db3d12a638d7c3f235a2cf416f31f', '2023/05/28', '05:20:31 pm');

-- --------------------------------------------------------

--
-- Table structure for table `users_apply`
--

CREATE TABLE `users_apply` (
  `apply_id` int(10) NOT NULL,
  `facility_id` int(10) NOT NULL,
  `role` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
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
  `account_create_date` varchar(50) NOT NULL,
  `account_create_time` varchar(50) NOT NULL,
  `id_request_fk` int(10) NOT NULL,
  `id_fk` int(10) NOT NULL,
  `apply_status` varchar(50) NOT NULL,
  `apply_date` varchar(50) NOT NULL,
  `apply_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users_apply`
--

INSERT INTO `users_apply` (`apply_id`, `facility_id`, `role`, `name`, `first_name`, `middle_name`, `last_name`, `id_number`, `mobile_number`, `birthdate`, `gender`, `username`, `email`, `address1`, `address2`, `country`, `zipcode`, `city`, `degree`, `major`, `gpa`, `gpa_from`, `cv`, `id_photo`, `avatar`, `degree_photo`, `account_create_date`, `account_create_time`, `id_request_fk`, `id_fk`, `apply_status`, `apply_date`, `apply_time`) VALUES
(24, 7, 'user', 'شركة الإتصالات السعودية', 'فيصل', 'عبدالله', 'الزهراني', 1115124768, '0551524456', '2002-02-17', 'ذكر', 'ifaisalqz', 'ifaisalqz@gmail.com', 'الياسمين', 'المملكة العربية السعودية', '9', 13326, 'الرياض', 'دكتوراه', 'تقنية البرمجة وتطوير الويب', 'ifaisalqz', '5', '1685283631_CV.pdf', '1685283631_الهوية-الوطنية.jpeg', 'SS.JPG', '1685283631_use_case.pdf', '2023/05/28', '05:20:31 pm', 25, 9, 'تحت المراجعة', '2023/05/30', '03:54:32 am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities_request`
--
ALTER TABLE `facilities_request`
  ADD PRIMARY KEY (`id_request`),
  ADD KEY `id_fk` (`id_fk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_apply`
--
ALTER TABLE `users_apply`
  ADD PRIMARY KEY (`apply_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `facilities_request`
--
ALTER TABLE `facilities_request`
  MODIFY `id_request` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users_apply`
--
ALTER TABLE `users_apply`
  MODIFY `apply_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `facilities_request`
--
ALTER TABLE `facilities_request`
  ADD CONSTRAINT `id_fk` FOREIGN KEY (`id_fk`) REFERENCES `facilities` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
