-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 02, 2021 at 09:59 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `qty`) VALUES
(1, 'coca', 2),
(2, 'sting', 1),
(3, 'coca', 2),
(4, 'sting', 1),
(5, 'coca', 2),
(6, 'sting', 1),
(7, 'coca', 2),
(8, 'sting', 1),
(9, 'coca', 2),
(10, 'sting', 1),
(11, 'coca', 2),
(12, 'sting', 1),
(13, 'coca', 2),
(14, 'sting', 1),
(15, 'coca', 2),
(16, 'sting', 1),
(17, 'coca', 2),
(18, 'sting', 1),
(19, 'coca', 2),
(20, 'sting', 1),
(21, 'coca', 2),
(22, 'sting', 1),
(23, 'coca', 2),
(24, 'sting', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `item` varchar(100) NOT NULL,
  `price` decimal(4,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `method` varchar(50) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`item`, `price`, `quantity`, `method`, `total`) VALUES
('Item1', '5.00', 1, 'ABA', '5.00'),
('Item2', '3.00', 2, 'Wing', '6.00'),
('Item3', '4.00', 1, 'ABA', '4.00'),
('Item4', '5.00', 1, 'ABA', '5.00'),
('Item5', '6.00', 1, 'PiPay', '6.00'),
('Item6', '10.00', 1, 'ABA', '10.00'),
('Item7', '15.00', 1, 'Wing', '15.00'),
('Item8', '2.00', 1, 'Wing', '2.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
