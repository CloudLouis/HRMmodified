-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2018 at 07:19 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitnami_orangehrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `ohrm_vendor`
--

CREATE TABLE `ohrm_vendor` (
  `name` varchar(225) NOT NULL,
  `PIC` varchar(225) NOT NULL,
  `contact` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `bank` varchar(225) NOT NULL,
  `account_number` int(11) NOT NULL,
  `account_name` varchar(225) NOT NULL,
  `bank_branch_address` varchar(225) NOT NULL,
  `NPWP` varchar(225) NOT NULL,
  `code` varchar(6) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ohrm_vendor`
--

INSERT INTO `ohrm_vendor` (`name`, `PIC`, `contact`, `address`, `bank`, `account_number`, `account_name`, `bank_branch_address`, `NPWP`, `code`, `id`) VALUES
('Doe\'s Company', 'Johnson', 'Jane', 'Company Street 7th', '', 21838, '', '', '8884222', 'DCPY', 2),
('That One Company', 'Jonathan', 'Keaton', 'Bat Street', '', 743218, '', '', '487222466697', 'TOC', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ohrm_vendor`
--
ALTER TABLE `ohrm_vendor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ohrm_vendor`
--
ALTER TABLE `ohrm_vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
