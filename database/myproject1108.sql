-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2019 at 06:05 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_login`
--

CREATE TABLE `history_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `action` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_login`
--

INSERT INTO `history_login` (`id`, `username`, `action`, `created_at`) VALUES
(9, 'admin', 'login', '2019-08-10 09:34:08'),
(10, 'admin', 'logout', '2019-08-10 09:39:15'),
(11, 'admin', 'login', '2019-08-10 09:48:57'),
(12, 'admin', 'login', '2019-08-10 09:51:43'),
(13, 'admin', 'logout', '2019-08-10 09:55:28'),
(14, 'Linh', 'login', '2019-08-10 09:55:42'),
(15, 'vuong', 'login', '2019-08-10 09:55:56'),
(16, 'Vuong', 'login', '2019-08-10 09:58:14'),
(17, 'Linh', 'login', '2019-08-10 09:58:42'),
(18, 'admin', 'login', '2019-08-10 09:59:08'),
(19, 'Linh', 'login', '2019-08-10 09:59:35'),
(20, 'Linh', 'login', '2019-08-10 09:59:58'),
(21, 'phuc', 'login', '2019-08-10 10:01:23'),
(22, 'Linh', 'login', '2019-08-10 10:02:34'),
(23, 'Vuong', 'login', '2019-08-10 10:03:13'),
(24, 'Linh', 'login', '2019-08-10 10:05:24'),
(25, 'Linh', 'login', '2019-08-10 10:06:31'),
(26, 'Linh', 'login', '2019-08-10 10:07:45'),
(27, 'admin', 'login', '2019-08-10 10:09:38'),
(28, 'Vuong', 'login', '2019-08-10 10:17:52'),
(29, 'Vuong', 'login', '2019-08-10 10:17:54'),
(30, 'linh', 'login', '2019-08-10 10:18:35'),
(31, 'Vuong', 'login', '2019-08-10 10:18:42'),
(32, 'admin', 'logout', '2019-08-10 10:46:42'),
(33, 'Linh', 'login', '2019-08-10 10:47:03'),
(34, 'Linh', 'logout', '2019-08-10 10:47:39'),
(35, 'Linh', 'login', '2019-08-10 10:47:55'),
(36, 'admin', 'login', '2019-08-10 11:43:25'),
(37, 'Vuong', 'login', '2019-08-10 12:35:55'),
(38, 'admin', 'login', '2019-08-10 15:22:26'),
(39, 'admin', 'login', '2019-08-10 15:24:00'),
(40, 'quy', 'login', '2019-08-11 12:43:17');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `size` bigint(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `size`, `username`, `created_at`) VALUES
(50, 'images/IMG_20190809_001416_600.jpg', 479842, NULL, '2019-08-10 06:18:22'),
(51, 'images/IMG_20190805_232609.jpg', 1193116, NULL, '2019-08-10 06:18:22'),
(52, 'images/IMG_20190727_235230.jpg', 1151671, NULL, '2019-08-10 06:18:22'),
(53, 'images/IMG_20190724_124657.jpg', 1218177, NULL, '2019-08-10 06:18:22'),
(54, 'images/11.png\r\n', NULL, NULL, '2019-08-10 06:18:22'),
(55, 'images/13.png', NULL, NULL, '2019-08-10 06:18:22'),
(56, 'images/61139390_10205720389804333_7067369789374595072_o.jpg', 349568, 'admin', '2019-08-10 06:19:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `times` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `times`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL, '2111', NULL, NULL, NULL, NULL),
(2, 'linh', NULL, NULL, '1', NULL, NULL, NULL, NULL),
(3, 'quy', NULL, NULL, '1', NULL, NULL, NULL, NULL),
(4, 'phuc', NULL, NULL, '1', NULL, NULL, NULL, NULL),
(5, 'vuong', NULL, NULL, '1', NULL, NULL, NULL, NULL),
(6, 'phuong', NULL, NULL, '1', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_login`
--
ALTER TABLE `history_login`
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
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `history_login`
--
ALTER TABLE `history_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
