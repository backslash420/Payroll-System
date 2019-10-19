-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 05, 2019 at 02:51 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_employee`
--

CREATE TABLE `add_employee` (
  `Id:` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name:` text COLLATE utf8_unicode_ci NOT NULL,
  `designation:` text COLLATE utf8_unicode_ci NOT NULL,
  `school_name:` text COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(12) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `edu_qualification` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `job_experience` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `publications` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `outstanding_quality` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_employee`
--

INSERT INTO `add_employee` (`Id:`, `name:`, `designation:`, `school_name:`, `birth_date`, `number`, `email`, `address`, `edu_qualification`, `job_experience`, `publications`, `outstanding_quality`, `comment`) VALUES
('1', 'Aman Ullah', 'Assistant teacher', 'Comilla Zilla School', '8 March 1999', 1521525421, 'riadmohammod2000@gmail.com', 'EPZ Road,Tomcombridge,Comilla', 'SSC:GPA-5\r\nHSC:GPA-5\r\nDiploma:GPA3.5', '2 Years', 'dont know', 'Nothing', 'good'),
('2', 'Jibon Sahidul', 'Lecturur', 'Ibn Taimiya', '21 December 1998', 1631840317, 'jibon@gmail.com', 'Feni', 'SSC:GPA-5\r\nHSC:GPA-5\r\nDiploma:GPA3.5', '1 Years', 'dont know', 'Nothing', 'good'),
('3', 'Ahmed', 'Lecturur', 'Ibn Taimiya', '21 December 1998', 12255, 'robi@gmail.com', 'Feni', 'SSC:GPA-5\r\nHSC:GPA-5\r\nDiploma:GPA3.5', '1 Years', 'dont know', 'Nothing', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `add_sallary`
--

CREATE TABLE `add_sallary` (
  `id` int(50) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_join` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `casual_hour` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `basic` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `special_allowance` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `houserent` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `medical_allowance` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gross_pay` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `deduction` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Total_pay` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_sallary`
--

INSERT INTO `add_sallary` (`id`, `name`, `date_of_join`, `casual_hour`, `description`, `basic`, `special_allowance`, `houserent`, `medical_allowance`, `gross_pay`, `deduction`, `Total_pay`) VALUES
(1, 'Aman Ullah', '2 Jan 2016', '8 hour', 'aaaaaaaaaaaaaaaaaa', '20000', '2000', '8000', '500', '200', '100', 28800),
(2, 'Jibon Sahidul', '2 Jan 2016', '5 Hours', 'aaaaaaaaaa', '11000', '2000', '4000', '500', '200', '100', 15800),
(3, 'Ahmed', '2 Jan 2016', '8 hour', 'uytrdesdfgh', '20000', '2000', '8000', '500', '200', '100', 28800);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`email`, `password`) VALUES
('abc@gmail.com', '123'),
('riad@gmail.com', '321'),
('bcd@gmail.com', '456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
