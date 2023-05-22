-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2021 at 06:37 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackingwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'adminIsHacker', 'eyJpdiI6IkFkdnB6d1VBWlhZZ3gyb1RPNnJOcEE9PSIsInZhbHVlIjoieE5FOEh3R2RIUFhwMmptRW13cjk1dz09IiwibWFjIjoiZTE1Y2QwNTEwY2M0ZTMwNGJjMjg0YTY3ZmE4NzM2ZDc0MWQ5MDI3Y2QwMDlmZGMzOTZhMTdkNDRkMTA1OWE3ZSJ9', '2021-03-22 01:13:48', '2021-03-22 01:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_login_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ex_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ccv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `card_id`, `card_type`, `country`, `ex_date`, `bank_name`, `card_number`, `ccv`, `created_at`, `updated_at`) VALUES
(1, 'abbc', 'credit', 'bd', '2021-06-30', 'dbbl', '12121221221', '2332', '2021-03-22 01:15:36', '2021-03-22 01:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `check_cards`
--

CREATE TABLE `check_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Zunaid.me', 'eyJpdiI6Ii9WN1ZIanpqSjVpcnU0dk1uR3ZpT3c9PSIsInZhbHVlIjoiWkxiRnZIdzZ6QjRLMmtDaEJxTFg3QT09IiwibWFjIjoiNDMxNTJjYzY0YWY5ZTNhZTNhY2JlYmFkODBmNmNlNjJjYTc2MjVlYjhhNTg2MmZiYTE3ZWQ1NWRiNGFmMjQ4YSJ9', '2021-03-22 01:12:10', '2021-03-22 01:12:10'),
(2, 'rajo', 'eyJpdiI6ImsxaEZvRWN3QllnQUJxQzVmb1d3dWc9PSIsInZhbHVlIjoiN0tNdzFGbE5uek1RK3VXZzQ2cExmQT09IiwibWFjIjoiMDA0NDc0NDA1MGZjOWRkNTcwZjYzZjZmOGQxMzJkYThlZTYyNTI3OTE1YTQ0ZWIwZTU3NDY4YTgzNDc2YjdkZiJ9', '2021-03-22 09:58:57', '2021-03-22 09:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `exploits`
--

CREATE TABLE `exploits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exploit_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `platform` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `script` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exploits`
--

INSERT INTO `exploits` (`id`, `exploit_name`, `platform`, `script`, `price`, `created_at`, `updated_at`) VALUES
(1, 'ray', 'development', '774eeb8e3d5733bfe22e4ab21ac571fb.zip', '30$', '2021-03-23 11:21:07', '2021-03-23 11:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_02_27_172424_create_customers_table', 1),
(2, '2021_03_02_202041_create_orders_table', 1),
(3, '2021_03_07_164942_create_spam_cards_table', 1),
(4, '2021_03_12_142931_create_cards_table', 1),
(5, '2021_03_13_150908_create_banks_table', 1),
(6, '2021_03_13_151817_create_paypals_table', 1),
(7, '2021_03_13_152012_create_exploits_table', 1),
(8, '2021_03_16_195242_create_admins_table', 1),
(9, '2021_03_17_055804_create_check_cards_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tran_id` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `username`, `email`, `product`, `amount`, `item_id`, `tran_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '6058443e3f2e9', 'Zunaid.me', 'jonaeidhossain589@gmail.com', 'Bank Account', '10$', '1', 'hasdyry2346', 'Delivered', '2021-03-22 01:16:14', '2021-03-22 01:16:14'),
(2, '6058bf6072258', 'rajo', 'r@gmail.com', 'Card', '130$', '10 Cards', 'dfdsfasd', 'pending', '2021-03-22 10:01:36', '2021-03-22 10:01:36'),
(3, '6058c0a2a8c29', 'rajo', 'almamun.raju520@gmail.com', 'Card', '130$', '10 Cards', 'dfadfdf', 'pending', '2021-03-22 10:06:58', '2021-03-22 10:06:58'),
(4, '6058c137c9ade', 'rajo', 'almamun.raju520@gmail.com', 'Exploit', '120$', '1', 'dfdsfasd', 'Delivered', '2021-03-22 10:09:27', '2021-03-22 10:09:27'),
(5, '6058c51dd9315', 'rajo', 'almamun.raju520@gmail.com', 'Card', '130$', '10 Cards', 'dfdsfasdddddd', 'Delivered', '2021-03-22 10:26:05', '2021-03-22 10:26:05'),
(6, '605a225d4ddca', 'rajo', 'almamun.raju520@gmail.com', 'Card', '130$', '10 Cards', 'dfdsfasdadkfjkdjfjsdkfjk', 'Delivered', '2021-03-23 11:16:13', '2021-03-23 11:16:13'),
(7, '605a23f96011a', 'rajo', 'almamun.raju520@gmail.com', 'Exploit', '30$', '1', 'dfwefrewfewfrewrwer', 'Delivered', '2021-03-23 11:23:05', '2021-03-23 11:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `paypals`
--

CREATE TABLE `paypals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paypal_user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paypal_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paypals`
--

INSERT INTO `paypals` (`id`, `paypal_user_name`, `paypal_password`, `country`, `price`, `created_at`, `updated_at`) VALUES
(1, 'abc', '121212', 'BD', '10$', '2021-03-22 01:15:17', '2021-03-22 01:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `spam_cards`
--

CREATE TABLE `spam_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cardNumber` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ccv` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exDate` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_username_unique` (`username`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cards_card_id_unique` (`card_id`);

--
-- Indexes for table `check_cards`
--
ALTER TABLE `check_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exploits`
--
ALTER TABLE `exploits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paypals`
--
ALTER TABLE `paypals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spam_cards`
--
ALTER TABLE `spam_cards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `check_cards`
--
ALTER TABLE `check_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exploits`
--
ALTER TABLE `exploits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `paypals`
--
ALTER TABLE `paypals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spam_cards`
--
ALTER TABLE `spam_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
