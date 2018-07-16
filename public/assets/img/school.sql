-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2018 at 07:55 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_menu`
--

CREATE TABLE `food_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_type` int(11) NOT NULL,
  `guide` int(10) DEFAULT NULL,
  `rates` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(2) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_menu`
--

INSERT INTO `food_menu` (`id`, `image`, `name`, `food_type`, `guide`, `rates`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'bananas2.png', 'test', 7, 1, '111', 1, '2018-07-16 04:48:56', '2018-07-16 08:10:33'),
(2, 'noimage.png', 'test', 1, 1, '111', 1, '2018-07-16 06:05:26', '2018-07-16 09:14:50'),
(3, 'noimage.png', 'test', 1, NULL, '40', 1, '2018-07-16 07:49:43', '2018-07-16 07:49:43'),
(4, 'noimage.png', 'images', 1, 1, '1', 1, '2018-07-16 07:53:24', '2018-07-16 07:53:24'),
(6, 'noimage.png', 'tesst tesst', 4, NULL, '1155', 1, '2018-07-16 08:07:36', '2018-07-16 08:07:41'),
(9, 'img.jpg', 'test11', 3, NULL, '80', 1, '2018-07-16 09:01:14', '2018-07-16 09:01:14');

-- --------------------------------------------------------

--
-- Table structure for table `food_types`
--

CREATE TABLE `food_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_types`
--

INSERT INTO `food_types` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'อาหารประเภท ผัด', 1, '2018-07-16 12:50:41', '2018-07-16 12:50:41'),
(2, 'อาหารประเภท ต้ม', 1, '2018-07-16 12:50:41', '2018-07-16 12:50:41'),
(3, 'อาหารประเภท ทอด', 1, '2018-07-16 12:51:02', '2018-07-16 12:51:02'),
(4, 'อาหารประเภท ยำ', 1, '2018-07-16 12:51:02', '2018-07-16 12:51:02'),
(5, 'อาหารจานเดียว', 1, '2018-07-16 12:51:53', '2018-07-16 12:51:53'),
(6, 'พิซซ่า', 1, '2018-07-16 12:51:53', '2018-07-16 12:51:53'),
(7, 'เครื่องดื่ม', 1, '2018-07-16 12:52:37', '2018-07-16 12:52:37'),
(8, 'กาแฟ', 1, '2018-07-16 12:52:37', '2018-07-16 12:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_14_143014_create_food_types_table', 1),
(4, '2018_07_14_143140_create_food_menuses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recommended_menu`
--

CREATE TABLE `recommended_menu` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `food_type` varchar(255) COLLATE utf8_bin NOT NULL,
  `rates` varchar(255) COLLATE utf8_bin NOT NULL,
  `is_active` int(2) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type_id`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@hotmail.com', '$2y$10$cjmiffk.ZLZ1nVWeJJaLf.9BWHf4EV5Cg4zmE4vsSwZkQmTPwI8La', '2', 1, NULL, '2018-07-16 04:40:52', '2018-07-16 04:40:52'),
(2, 'tesst tesst', 'admin@test.com', '$2y$10$/IffVpnAdeocErMw8cUuZuPSxpYXDhBLs08wTWg1dU.dlJM4WSkHK', '4', 1, NULL, '2018-07-16 05:47:32', '2018-07-16 05:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `is_active` tinyint(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'ลูกค้า', 1, '2018-07-16 11:55:40', '2018-07-16 11:55:40'),
(2, 'ผู้ดูแลระบบ', 1, '2018-07-16 11:56:05', '2018-07-16 11:56:05'),
(3, 'พนักงานเสริฟ', 1, '2018-07-16 11:57:17', '2018-07-16 11:57:17'),
(4, 'พนักงานเคาน์เตอร์', 1, '2018-07-16 11:57:32', '2018-07-16 11:57:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_menu`
--
ALTER TABLE `food_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_types`
--
ALTER TABLE `food_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_menu`
--
ALTER TABLE `food_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `food_types`
--
ALTER TABLE `food_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
