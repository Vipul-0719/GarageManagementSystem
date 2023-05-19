-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 09:11 AM
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
-- Table structure for table `vehicleinfo`
--

CREATE TABLE `vehicleinfo` (
  `id` int(20) NOT NULL,
  `FName` text NOT NULL,
  `vname` text NOT NULL,
  `vnumber` varchar(12) NOT NULL,
  `cnumber` int(12) NOT NULL,
  `rdate` date NOT NULL,
  `vtype` varchar(11) NOT NULL,
  `vcolor` text NOT NULL,
  `ftype` text NOT NULL,
  `mname` varchar(5) NOT NULL,
  `myear` year(4) NOT NULL,
  `enumber` int(10) NOT NULL,
  `ngear` int(10) NOT NULL,
  `oreading` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicleinfo`
--

INSERT INTO `vehicleinfo` (`id`, `FName`, `vname`, `vnumber`, `cnumber`, `rdate`, `vtype`, `vcolor`, `ftype`, `mname`, `myear`, `enumber`, `ngear`, `oreading`) VALUES
(15, '26,Shubhangi', 'BMW', 'MH10 BA7149', 0, '2022-04-01', '2 wheeler', 'Silver', 'CNG', 'Categ', 2018, 0, 8, 1220),
(29, '26,Shubhangi', 'BMW', 'MH10 BA7149', 2147483647, '2022-05-27', '4 wheeler', 'black', 'Diesel', 'j1', 2018, 7, 8, 6800),
(30, '26,Shubhangi', 'BMW', 'MH10 BA7149', 2147483647, '2022-05-27', '4 wheeler', 'black', 'Diesel', 'j1', 2018, 7, 8, 6800),
(31, '27,Ruchika', 'Mahindra', 'MH09 BJ5454', 2147483647, '2022-05-20', '4 wheeler', 'black', 'CNG', 'j1', 2017, 7, 8, 2993),
(34, '27,Ruchika', 'KIA', 'MH10 BA7149', 2147483647, '2022-05-09', '4 wheeler', 'White', 'CNG', 'j1', 2017, 97, 8, 2993);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vehicleinfo`
--
ALTER TABLE `vehicleinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vehicleinfo`
--
ALTER TABLE `vehicleinfo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
