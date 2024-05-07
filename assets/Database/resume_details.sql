-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 07:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `resume_details`
--

CREATE TABLE `resume_details` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneno` varchar(20) DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `achive_title` varchar(255) DEFAULT NULL,
  `achive_description` text DEFAULT NULL,
  `exp_title` varchar(255) DEFAULT NULL,
  `exp_organization` varchar(255) DEFAULT NULL,
  `exp_location` varchar(255) DEFAULT NULL,
  `exp_start_date` date DEFAULT NULL,
  `exp_end_date` date DEFAULT NULL,
  `exp_description` text DEFAULT NULL,
  `edu_school` varchar(255) DEFAULT NULL,
  `edu_degree` varchar(255) DEFAULT NULL,
  `edu_city` varchar(255) DEFAULT NULL,
  `edu_start_date` date DEFAULT NULL,
  `edu_end_date` date DEFAULT NULL,
  `edu_description` text DEFAULT NULL,
  `proj_title` varchar(255) DEFAULT NULL,
  `proj_link` varchar(255) DEFAULT NULL,
  `proj_description` text DEFAULT NULL,
  `skills` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resume_details`
--

INSERT INTO `resume_details` (`id`, `firstname`, `middlename`, `lastname`, `designation`, `address`, `email`, `phoneno`, `summary`, `achive_title`, `achive_description`, `exp_title`, `exp_organization`, `exp_location`, `exp_start_date`, `exp_end_date`, `exp_description`, `edu_school`, `edu_degree`, `edu_city`, `edu_start_date`, `edu_end_date`, `edu_description`, `proj_title`, `proj_link`, `proj_description`, `skills`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', ''),
(2, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resume_details`
--
ALTER TABLE `resume_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resume_details`
--
ALTER TABLE `resume_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
