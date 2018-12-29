-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 29, 2018 at 04:56 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omsakthi`
--

-- --------------------------------------------------------

--
-- Table structure for table `biils`
--

CREATE TABLE `biils` (
  `id` int(11) NOT NULL,
  `date_is` varchar(250) NOT NULL,
  `bill_name` varchar(500) NOT NULL,
  `bill_details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biils`
--

INSERT INTO `biils` (`id`, `date_is`, `bill_name`, `bill_details`) VALUES
(1, '$date_is', '', '$bill_details'),
(2, '28/12/2018', '', '{\"ser_no\":\"1\",\"date_is\":\"28-12-2018\",\"v_details\":\"sss\",\"v_no\":\"\",\"km\":\"ssa\",\"product_name\":[\"product1\",\"product2\",\"product3\"],\"product_price\":[\"11\",\"11\",\"11\"]}');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `qty`) VALUES
(1, 'product1', 50, 1),
(2, 'product2', 50, 1),
(3, 'product3', 50, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biils`
--
ALTER TABLE `biils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biils`
--
ALTER TABLE `biils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
