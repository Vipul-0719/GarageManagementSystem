-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 08:58 AM
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
-- Table structure for table `vendor_master`
--

CREATE TABLE `vendor_master` (
  `id` int(20) NOT NULL,
  `vendorName` varchar(12) NOT NULL,
  `Cno` int(15) NOT NULL,
  `RegNumber` varchar(20) NOT NULL,
  `VenEmail` varchar(20) NOT NULL,
  `gstNumber` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `pincode` int(10) NOT NULL,
  `street` varchar(15) NOT NULL,
  `bankName` varchar(20) NOT NULL,
  `ifscCode` varchar(15) NOT NULL,
  `bankBranch` varchar(15) NOT NULL,
  `accountNumber` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_master`
--

INSERT INTO `vendor_master` (`id`, `vendorName`, `Cno`, `RegNumber`, `VenEmail`, `gstNumber`, `country`, `state`, `city`, `pincode`, `street`, `bankName`, `ifscCode`, `bankBranch`, `accountNumber`) VALUES
(1, 'pradnya', 2147483647, '19201107', 'pradnyapatil829@gmai', '23457889900', 'india', 'Maharashtra', 'Kolhapur', 416503, 'swami samarth n', 'state bank', '56677883666', 'rajarampuri', 2147483647),
(2, 'Shubhangi', 2147483647, '19201108', 'shubhangi98@gmail.co', '23457566343', 'india', 'Maharashtra', 'Kolhapur', 416515, 'rajarampuri', 'state bank', '56677883666', 'rajarampuri', 2147483647),
(3, 'Madhuri', 2147483647, '19201109', 'madhuri@gmail.com', '5667566343', 'india', 'Maharashtra', 'Kolhapur', 416523, 'shahupuri', 'state bank', '56677883666', 'rajarampuri', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vendor_master`
--
ALTER TABLE `vendor_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vendor_master`
--
ALTER TABLE `vendor_master`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
