-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 08:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crystalbrand`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `stripeid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `email`, `name`, `phone`, `stripeid`) VALUES
(1, 'harrykennedy.cs@gmail.com', 'HamzaKhan', '03162400202', 'cus_OxvAEVSlY5YYMq'),
(2, 'harrykennedy.cs@gmail.com', 'HamzaKhan', '03162400202', 'cus_OxvGY5X0DOi8n0'),
(3, 'harrykennedy.cs@gmail.com', 'HamzaKhan', '03162400202', 'cus_Oxvsi828TZWB4J');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orderNumber` varchar(255) NOT NULL,
  `orderDate` varchar(255) NOT NULL,
  `orderTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `orderFrom` varchar(255) NOT NULL,
  `packageName` varchar(255) NOT NULL,
  `packagePrice` varchar(255) NOT NULL,
  `stripeCustomerID` varchar(255) NOT NULL,
  `stripePaymentID` varchar(255) NOT NULL,
  `stripeInvoiceLink` text NOT NULL,
  `orderStatus` varchar(255) NOT NULL,
  `orderPaymentStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderNumber`, `orderDate`, `orderTime`, `orderFrom`, `packageName`, `packagePrice`, `stripeCustomerID`, `stripePaymentID`, `stripeInvoiceLink`, `orderStatus`, `orderPaymentStatus`) VALUES
(1, 'CLD-3100DIR', '08-11-2023', '2023-11-08 00:07:58', 'Create Logo Design', 'basic logo', '300', 'cus_Oxv9vLMx3Cgdmz', 'ch_3O9zJKDiglXWKM9f0gHkvUTt', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xSGs2a3VEaWdsWFdLTTlmKN-iq6oGMgYpyD4S5946LBZI4ypODy2GcCKiZZgYiVf5Q_HkvOScSRrfWG9U22Xa0sX7U3tuHREmLTLn', 'Order Proccessing', 'Paid'),
(2, 'CLD-7697DIR', '08-11-2023', '2023-11-08 00:08:34', 'Create Logo Design', 'basic logo', '300', 'cus_OxvAEVSlY5YYMq', 'ch_3O9zJuDiglXWKM9f2X7dZFtk', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xSGs2a3VEaWdsWFdLTTlmKIOjq6oGMgb7_EhzmhQ6LBZj8BnJwpP0JAOMnwCYPEceYKIst1MzgoW0E3h0qLOC7puPg2XcJ-Ojm2w1', 'Order Proccessing', 'Paid'),
(3, 'CLD-2137DIR', '08-11-2023', '2023-11-08 00:15:06', 'Create Logo Design', 'basic logo', '300', 'cus_OxvGY5X0DOi8n0', 'ch_3O9zQEDiglXWKM9f4RbJoTqJ', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xSGs2a3VEaWdsWFdLTTlmKIumq6oGMgYKMYqLA7w6LBaf8n9TOg_hElQIr0JbVH95MEyOQ0JBindk-w1_XHErCpHKiM0qtwAwzoTP', 'Order Proccessing', 'Paid'),
(4, 'CLD-6718DIR', '08-11-2023', '2023-11-08 00:52:44', 'Create Logo Design', 'basic logo', '300', 'cus_Oxvsi828TZWB4J', 'ch_3OA00eDiglXWKM9f09UlR9dy', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xSGs2a3VEaWdsWFdLTTlmKN23q6oGMgZrKSdTe-06LBYxKRW_yMdcwUNzeLy_aO3RHhWvJdPApvt0J5Z4r3XJggQhj4ckAnSMR3QS', 'Order Proccessing', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `plancategory`
--

CREATE TABLE `plancategory` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `planitems`
--

CREATE TABLE `planitems` (
  `id` int(11) NOT NULL,
  `planId` int(11) NOT NULL,
  `itemsDescriptions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discountPrice` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `featured` varchar(255) NOT NULL,
  `planCategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plancategory`
--
ALTER TABLE `plancategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planitems`
--
ALTER TABLE `planitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `planId` (`planId`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `planCategoryId` (`planCategoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `plancategory`
--
ALTER TABLE `plancategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `planitems`
--
ALTER TABLE `planitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `planitems`
--
ALTER TABLE `planitems`
  ADD CONSTRAINT `planitems_ibfk_1` FOREIGN KEY (`planId`) REFERENCES `plans` (`id`);

--
-- Constraints for table `plans`
--
ALTER TABLE `plans`
  ADD CONSTRAINT `plans_ibfk_1` FOREIGN KEY (`planCategoryId`) REFERENCES `plancategory` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
