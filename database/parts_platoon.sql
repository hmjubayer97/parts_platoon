-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 03:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parts_platoon`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambas`
--

CREATE TABLE `ambas` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `imege` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ambas`
--

INSERT INTO `ambas` (`id`, `name`, `imege`) VALUES
(2, 'OutSider', 'Out.jpg'),
(3, 'WanaBeGump', 'Wana.jpg'),
(4, 'Chocolate Biker', 'choco.jpg'),
(5, 'Next Gear', 'ng.jpg'),
(6, 'MSI', 'msi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'Lifan'),
(2, 'Yamaha'),
(3, 'Honda'),
(5, 'Shell'),
(6, 'TVS'),
(7, 'Luqo Moli'),
(8, 'Bajaj'),
(9, 'RCB'),
(10, 'Motul');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `items` varchar(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `imege` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `brands` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `founder`
--

CREATE TABLE `founder` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `founder`
--

INSERT INTO `founder` (`id`, `name`, `email`, `user_name`, `password`, `token`) VALUES
(1, 'jubayer', 'hmjubayer@gmail.com', 'jb007', '1234', 'a109f6b3da018ad418d09dc0549f1cf7');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_quantity` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'unpaid',
  `shipping` varchar(255) NOT NULL DEFAULT 'On Process'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_name`, `product_quantity`, `amount`, `customer_name`, `address`, `number`, `payment_method`, `status`, `shipping`) VALUES
(24, '\r\n        Gloves(Honda)(1)        ', '\r\n        1        \r\n         ', '200', 'Samiul Mahin', 'Coatchandpur', '01304555701', 'Card Payment', 'Paid', 'Deliverd'),
(25, '\r\n        Gloves(Honda)(1)        ', '\r\n        1        \r\n         ', '200', 'Samiul Mahin', 'Coatchandpur', '01304555701', 'Card Payment', 'Paid', 'On Process');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `order_id`, `description`, `amount`, `status`) VALUES
(1, 12, '\r\n        Engine Oil(Yamaha)(1)         ', 200, 'Paid'),
(2, 18, '\r\n        Engine Oil(Yamaha)(1)         ', 200, 'Paid'),
(3, 19, '\r\n        Parts 2(Lifan)(1)         ', 200, 'Paid'),
(4, 20, '\r\n        Polish 1(Lifan)(1)         ', 200, 'Paid'),
(5, 21, '\r\n        Gloves(Honda)(1)         ', 200, 'Paid'),
(6, 22, '\r\n        Parts 4(Yamaha)(1)         ', 200, 'Paid'),
(7, 23, '\r\n        Parts 1(Lifan)(1)         ', 200, 'Paid'),
(8, 24, '\r\n        Gloves(Honda)(1)         ', 200, 'Paid'),
(9, 25, '\r\n        Gloves(Honda)(1)         ', 200, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `brands` varchar(100) NOT NULL DEFAULT 'Local',
  `price` int(11) NOT NULL,
  `imege` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `type`, `brands`, `price`, `imege`, `status`) VALUES
(5, 'Engine Oil', 'Lubricant', 'Yamaha', 200, 'b46ab47ce2d0b20fde3b240e1dc24bae.png', 'in_stock'),
(7, 'Honda Engine Oil', 'Lubricant', 'Honda', 200, 'Honda.jpg', 'in_stock'),
(8, 'Shell Advance Motorcycle Engine Oils', 'Lubricant', 'Shell', 200, 'Shell-Advance-Ultra-Price-in-BD.png', 'in_stock'),
(9, 'TVS Engine Oil', 'Lubricant', 'TVS', 200, 'tvs.jpg', 'in_stock'),
(10, 'Luqo Moli', 'Lubricant', 'Luqo Moli', 200, 'Lm.jpg', 'in_stock'),
(11, 'Parts 1', 'Parts', 'Lifan', 200, 'p1.jpg', 'in_stock'),
(12, 'Parts 2', 'Parts', 'Lifan', 200, 'p2.png', 'in_stock'),
(13, 'Parts 3', 'Parts', 'Lifan', 200, 'p3.jpg', 'in_stock'),
(14, 'Parts 4', 'Parts', 'Yamaha', 200, 'p4.png', 'in_stock'),
(15, 'Parts 5', 'Parts', 'Lifan', 200, 'p5.jpg', 'in_stock'),
(16, 'Parts 7', 'Parts', 'Honda', 200, 'p7.jpg', 'in_stock'),
(17, 'Gloves', 'Accessories', 'Honda', 200, 'G1.jpg', 'in_stock'),
(18, 'Polish 1', 'Accessories', 'Lifan', 200, 'bp1.jpg', 'in_stock'),
(19, 'polish 2', 'Accessories', 'Lifan', 200, 'bp2.jpg', 'in_stock'),
(20, 'polish 3', 'Accessories', 'Lifan', 200, 'bp3.jpg', 'in_stock'),
(21, 'Motul Engine Oil', 'Lubricant', 'Motul', 200, 'Motul.jpg', 'in_stock');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `imege` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `imege`) VALUES
(3, 'Honda', 'banner.png'),
(8, 'Yamaha', 'banner2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(2, 'Lubricant'),
(4, 'Accessories'),
(6, 'Parts');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambas`
--
ALTER TABLE `ambas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `founder`
--
ALTER TABLE `founder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambas`
--
ALTER TABLE `ambas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `founder`
--
ALTER TABLE `founder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
