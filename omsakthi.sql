-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 31, 2018 at 09:42 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `qty`) VALUES
(1, 'water service', 50, 1),
(2, 'engine oil', 50, 1),
(3, 'seat and tank cover', 50, 1),
(4, 'battery charge', 0, 0),
(5, 'wheel truing & vulcanizing', 0, 0),
(6, 'silencer cleaning charge', NULL, NULL),
(7, 'front spork spares', NULL, NULL),
(8, 'front wheel spares', NULL, NULL),
(9, 'clutch spares', NULL, NULL),
(10, 'electrical spares', NULL, NULL),
(11, 'engine spares', NULL, NULL),
(12, 'rear wheel spares', NULL, NULL),
(13, 'cables spares', NULL, NULL),
(14, 'bearing', NULL, NULL),
(15, 'tinking charges', NULL, NULL),
(16, 'taplong cotting', NULL, NULL),
(17, 'coil testing & rework', NULL, NULL),
(18, 'lathe spares', NULL, NULL),
(19, 'lathe charges', NULL, NULL),
(20, 'labour charges', NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
