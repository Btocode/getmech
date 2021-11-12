-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql205.epizy.com
-- Generation Time: Nov 12, 2021 at 01:41 PM
-- Server version: 5.7.34-37
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_30201231_getmech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'afsan', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_list`
--

CREATE TABLE `appointment_list` (
  `regNo` int(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phoneNumber` varchar(32) NOT NULL,
  `carLicenseNumber` varchar(255) NOT NULL,
  `carEngineNumber` varchar(255) NOT NULL,
  `dateOfAppointment` date NOT NULL,
  `mechName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment_list`
--

INSERT INTO `appointment_list` (`regNo`, `fullName`, `address`, `phoneNumber`, `carLicenseNumber`, `carEngineNumber`, `dateOfAppointment`, `mechName`) VALUES
(128, 'Zaria_Kling25', '6814 Levi Row', '634-966-6662', '188', '301', '2021-10-20', '1'),
(130, 'Aurelia.Hoeger10', '6133 Charlie Springs', '295-771-2511', '436', '224', '2021-11-16', '1'),
(131, 'Porter52', '4792 Cody Fall', '070-686-1292', '322', '507', '2021-12-16', '1'),
(132, 'Chelsey.Funk85', '84862 Kub Mission', '650-409-5834', '410', '569', '2022-03-29', '1'),
(133, 'Chelsie_Franecki27', '18099 Callie Valley', '196-720-2371', '602', '252', '2021-05-03', '4'),
(135, 'Augusta98', '51024 Brendan Park', '096-467-2337', '575', '443', '2022-02-22', '3'),
(136, 'Chanelle.Labadie50', '1009 Wilkinson Village', '194-765-5500', '630', '312', '2022-04-06', '2');

-- --------------------------------------------------------

--
-- Table structure for table `mechanic_list`
--

CREATE TABLE `mechanic_list` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `orders` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mechanic_list`
--

INSERT INTO `mechanic_list` (`id`, `name`, `orders`) VALUES
(1, 'Jack Ma', 4),
(2, 'Jeff Bezos', 1),
(3, 'Linus Torvals', 1),
(4, 'Mark Zuckerburg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_list`
--
ALTER TABLE `appointment_list`
  ADD PRIMARY KEY (`regNo`);

--
-- Indexes for table `mechanic_list`
--
ALTER TABLE `mechanic_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_list`
--
ALTER TABLE `appointment_list`
  MODIFY `regNo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `mechanic_list`
--
ALTER TABLE `mechanic_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
