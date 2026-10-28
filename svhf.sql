-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 10:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `svhf`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_id` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_amount` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_id`, `p_name`, `t_id`, `p_amount`) VALUES
(1, 'pavan', '0', '788.00'),
(3, 'subbu', 'T75693953497569', '400.00'),
(6, 'surya', 'T75693953496309', '689.00'),
(8, 'shivaaa', 'T7569395349756939', '788.00'),
(9, 'kushal', 'T123456789912345', '1000.00'),
(10, 'Hema Sai', 'T2301111542020410067401', '1.00');

-- --------------------------------------------------------

--
-- Table structure for table `recipient`
--

CREATE TABLE `recipient` (
  `firstname` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'M for Male, F for Female',
  `c_type` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Type of customer in this canteen (STD for student,STF for staff, GUE for guest, ADM for admin, OTH for other)',
  `healthissue` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_r` int(10) NOT NULL,
  `hospitalname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospitalno` int(10) NOT NULL,
  `hospitaladdress` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_id` int(11) NOT NULL,
  `mobileno` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipient`
--

INSERT INTO `recipient` (`firstname`, `gender`, `c_type`, `healthissue`, `amount_r`, `hospitalname`, `hospitalno`, `hospitaladdress`, `r_id`, `mobileno`) VALUES
('Poorna', 'M', 'STD', 'Heart Attack', 50000, 'Poorna Centre', 2147483647, 'eluru', 8, NULL),
('balu', 'M', 'STF', 'Cancer', 100000, 'Balu Hospitals', 2147483647, 'vijayawada', 13, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `c_username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_pwd` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_firstname` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_lastname` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_gender` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'M for Male, F for Female',
  `c_type` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Type of customer in this canteen (STD for student,STF for staff, GUE for guest, ADM for admin, OTH for other)',
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`c_username`, `c_pwd`, `c_firstname`, `c_lastname`, `c_email`, `c_gender`, `c_type`, `c_id`) VALUES
('SVEC_Admin01', 'Admin01@SVEC', 'Admin', '01', 'admin01@gmail.com', 'M', 'ADM', 2),
('poorna', '12121212', 'Poorna', 'Sai', 'poorna7569@gmail.com', 'M', 'STD', 3),
('Rudhresh', '12345678', 'Rudhresh', 'Kumar', 'rudhresh@gmail.com', 'M', 'STD', 5),
('gowtham', '12345678', 'Gowtham', 'Kumar', 'gowthamkumarchitakani@gmail.com', 'M', 'STD', 6),
('cherish', '12345678', 'cherish', 'hii', 'poorna7569@gmail.com', 'M', 'STD', 7),
('jayakumari', '12345678', 'Jaya', 'Kumari', 'jayakumari@gmail.com', 'F', 'STF', 8),
('Devi Parvathi', '12121212', 'Devi', 'Parvathi', 'purnasaimarisetti123456@gmail.com', 'F', 'STF', 9),
('Rohith', 'Rohiththebaap', 'Rohith', 'Ganesh', 'rohithsaiganesh@gmail.com', 'M', 'STD', 10),
('tanvika', '123456789', 'Tanvika', 'Krishna', 'poorna7569@gmail.com', 'F', 'STD', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `t_id` (`t_id`);

--
-- Indexes for table `recipient`
--
ALTER TABLE `recipient`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `recipient`
--
ALTER TABLE `recipient`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
