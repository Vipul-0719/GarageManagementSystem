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
-- Table structure for table `pucinfo`
--

CREATE TABLE `pucinfo` (
  `id` int(11) NOT NULL,
  `vname` text NOT NULL,
  `vid` int(10) NOT NULL,
  `lnumber` varchar(20) NOT NULL,
  `pucnumber` varchar(20) NOT NULL,
  `cname` text NOT NULL,
  `caddress` text NOT NULL,
  `tdate` date NOT NULL,
  `valid` date NOT NULL,
  `res` text NOT NULL,
  `freason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pucinfo`
--

INSERT INTO `pucinfo` (`id`, `vname`, `vid`, `lnumber`, `pucnumber`, `cname`, `caddress`, `tdate`, `valid`, `res`, `freason`) VALUES
(15, '34,KIA', 0, 'RJ9384685', 'KL0989090', 'Soldier Station', 'Pratap Nagar,Jaipur', '2022-06-04', '2022-05-07', 'Pass', 'co value not in range in pertol test'),
(27, '15,BMW', 0, 'RJ9384685', 'KL098652', 'kolkhapur', 'kolhapur', '2022-05-27', '2022-05-01', 'Pass', ''),
(32, '31,Mahindra', 0, 'RJ9384685', 'KL098652', 'PolicyBazaar', 'Pratap Nagar,Jaipur', '2022-05-13', '2022-05-01', 'Pass', ''),
(33, '15,BMW', 0, 'RJ9384685', 'KL098652', 'PolicyBazaar', 'Pratap Nagar,Jaipur', '2022-05-13', '2022-05-01', 'Pass', ''),
(36, '32,Toyota', 0, 'RJ9384685', 'KL098652', 'Soldier Station2', 'Nagpur', '2022-06-03', '2022-05-03', 'Pass', ''),
(37, '15,BMW', 0, 'RJ9384685', 'KL098652', 'PolicyBazaar', 'kolhapur', '2022-05-08', '2022-05-28', 'Fail', 'co value not in range in pertol test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pucinfo`
--
ALTER TABLE `pucinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pucinfo`
--
ALTER TABLE `pucinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
