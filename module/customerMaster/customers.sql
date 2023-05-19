-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 08:56 AM
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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `FName` text NOT NULL,
  `MName` text NOT NULL,
  `LName` text NOT NULL,
  `Gender` text NOT NULL,
  `DOB` date NOT NULL,
  `Age` int(11) NOT NULL,
  `Phoneno` int(10) NOT NULL,
  `Mobileno` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Street` text NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  `Pincode` int(11) NOT NULL,
  `Country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `FName`, `MName`, `LName`, `Gender`, `DOB`, `Age`, `Phoneno`, `Mobileno`, `Email`, `Address`, `Street`, `City`, `State`, `Pincode`, `Country`) VALUES
(26, 'Shubhangi', 'Shivaji', 'Bhingude', '', '1998-03-05', 24, 5667878, '2147483647', 'Shubhangi@gmail.com', 'at post teurwadi', 'kolhapur', 'Kolhapur', 'maharashtra', 416508, 'India'),
(27, 'Ruchika', 'Popat', 'Gadave', 'Female', '1998-03-10', 24, 202525, '9807654321', 'ruchika50@gmail.com', 'kolhapur', 'kolhapur', 'Kolhapur', 'maharashtra', 411360, 'India'),
(30, 'raj', 'nilesh', 'patil', 'Male', '1998-04-08', 23, 6376676, '975684322', 'rajpatil@gmail.com', 'kolhapur', 'pune', 'pune', 'pune', 411360, 'India'),
(31, 'anushka', 'anil', 'khade', 'Female', '2003-11-28', 18, 2147483647, '7865943522', 'anushka@gmail.com', 'at-post palashi', 'satara', 'satara', 'maharashtra', 415507, 'India'),
(32, 'sanyu', 'om', 'patil', 'Female', '1984-06-12', 24, 2147483647, '9863746473', 'sanyu@gmail.com', 'rajarampuri,kolhapur', 'ring road, rajarampuri', 'Kolhapur', 'maharashtra', 416508, 'India'),
(36, 'Akshay', 'sarjerao', 'Gaikwad', 'Male', '1997-08-22', 25, 2147483647, '7875712066', 'Akshay@gmail.com', 'pargaon', 'kolhapur', 'Kolhapur', 'maharashtra', 417856, 'India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
