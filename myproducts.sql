-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 12:08 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproducts`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `sub_category`, `product_name`, `unit`, `price`) VALUES
(26, 'Cloths', 'Paste', 'kkk', 'Per Ltr', 99),
(27, 'Cloths', 'Tshirt', 'kkk', 'Per Pkt', 54),
(28, 'Cloths', 'Tshirt', 'kkk', 'Per Pkt', 54),
(29, 'Cloths', 'Tshirt', 'kkk', 'Per Pkt', 54),
(30, 'Cloths', 'Tshirt', 'kkk', 'Per Pkt', 54),
(31, 'Grocery', 'Salt', 'kkk', 'Per Pkt', 54);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `category`) VALUES
(1, 'Grocery'),
(2, 'Cloths'),
(3, 'Vegetable');

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_categories`
--

CREATE TABLE `product_sub_categories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_sub_categories`
--

INSERT INTO `product_sub_categories` (`id`, `category_id`, `sub_category`) VALUES
(1, 1, 'Sugar'),
(2, 1, 'Salt'),
(3, 2, 'Tshirt'),
(4, 2, 'Jeans'),
(7, 3, 'Tomato'),
(8, 3, 'Bins');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit`) VALUES
(1, 'Per Pkt'),
(2, 'Per Ltr'),
(3, 'Per Price');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sub_categories`
--
ALTER TABLE `product_sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_sub_categories`
--
ALTER TABLE `product_sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_sub_categories`
--
ALTER TABLE `product_sub_categories`
  ADD CONSTRAINT `product_sub_categories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
