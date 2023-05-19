-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 04:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gms`
--

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(10) NOT NULL,
  `service` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `cost` int(50) NOT NULL,
  `gst` int(50) NOT NULL,
  `charges` varchar(20) NOT NULL,
  `saccode` int(10) NOT NULL,
  `alert` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service`, `image`, `cost`, `gst`, `charges`, `saccode`, `alert`, `date`) VALUES
(35, 'Filter change', '', 250, 0, '500', 0, '', '2022-04-28'),
(40, 'Wheel Align', '', 250, 5, '400', 456, '', '2022-04-29'),
(41, 'Wheel Align', 'service-image.bin', 250, 0, '400', 456, '', '2022-04-29'),
(43, 'Filter change', '', 150, 0, '300', 994403, '', '2022-04-29'),
(47, 'Oil change', '', 200, 5, '400', 994408, '', '2022-06-30'),
(48, 'Oil change', '', 200, 5, '500', 994408, '', '2022-07-31'),
(49, 'Tyre Tube', '', 1200, 5, '1400', 994409, '', '2024-07-01'),
(50, '', '', 0, 0, '', 0, '', '0000-00-00'),
(54, 'Tyre Tube with tyre', '', 1200, 5, '1300', 994409, '', '2022-05-01'),
(55, 'Tyre Tube with tyre', '', 0, 0, '', 0, '', '2022-05-02'),
(56, 'Wheel Align', '', 2000, 5, '2500', 994408, '', '2022-05-21'),
(57, 'Tyre Tube with tyre', '', 0, 0, '', 0, '', '2022-05-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
