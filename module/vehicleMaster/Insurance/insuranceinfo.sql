-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 09:10 AM
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
-- Table structure for table `insuranceinfo`
--

CREATE TABLE `insuranceinfo` (
  `id` int(25) NOT NULL,
  `vname` text NOT NULL,
  `FName` text NOT NULL,
  `cname` text NOT NULL,
  `pnumber` int(15) NOT NULL,
  `cpayable` int(10) NOT NULL,
  `vnumber` varchar(10) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `pdocument` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insuranceinfo`
--

INSERT INTO `insuranceinfo` (`id`, `vname`, `FName`, `cname`, `pnumber`, `cpayable`, `vnumber`, `sdate`, `edate`, `pdocument`) VALUES
(5, '32,Toyota', '30,raj', 'PolicyBazaar', 19201107, 500000, 'MH10 BA714', '2022-05-23', '2022-06-01', ''),
(6, '31,Mahindra', '27,Ruchika', 'PolicyBazaar', 19201107, 500000, 'MH10 BA714', '2022-05-23', '2022-06-01', ''),
(7, '29,BMW', '27,Ruchika', 'PolicyBazaar3', 19201109, 500000, 'MH09 BJ070', '2022-05-25', '2022-05-27', ''),
(11, '31,Mahindra', '29,Madhuri', 'Soldier Station', 7898098, 500000, 'MH10 BA714', '2022-05-17', '2022-05-19', ''),
(12, '31,Mahindra', '30,raj', 'PolicyBazaar2', 19201107, 30000, 'MH09 BJ070', '2022-05-20', '2022-06-04', ''),
(13, '34,KIA', '26,Shubhangi', 'Soldier Station', 19201107, 500000, 'MH09 BJ070', '2022-05-09', '2022-05-26', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insuranceinfo`
--
ALTER TABLE `insuranceinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insuranceinfo`
--
ALTER TABLE `insuranceinfo`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
