-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 15, 2022 at 10:57 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `state_id`, `created_at`, `updated_at`) VALUES
(1, 'Bengaluru', 1, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(2, 'Mysuru', 1, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(3, 'Ballari', 1, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(4, 'Vijayapura', 1, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(5, 'Tumakuru', 1, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(6, 'Raichur', 1, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(7, 'Bidar', 1, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(8, 'Hospet', 1, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(9, 'Gadag-Betageri', 1, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(10, 'Robertsonpet', 1, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(11, 'Mumbai', 2, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(12, 'Pune', 2, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(13, 'Nagpur', 2, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(14, 'Thane', 2, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(15, 'Nashik', 2, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(16, 'Solapur', 2, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(17, 'Amravati', 2, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(18, 'Kolhapur', 2, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(19, 'Ulhasnagar', 2, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(20, 'Malegaon', 2, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(21, 'Chennai', 3, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(22, 'Coimbatore', 3, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(23, 'Madurai', 3, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(24, 'Salem', 3, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(25, 'Tiruppur', 3, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(26, 'Vellore', 3, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(27, 'Erode', 3, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(28, 'Dindigul', 3, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(29, 'Hosur', 3, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(30, 'Karur', 3, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(31, 'Kochi', 4, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(32, 'Kollam', 4, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(33, 'Thrissur', 4, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(34, 'Thiruvananthapuram', 4, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(35, 'Alappuzha', 4, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(36, 'Kottayam', 4, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(37, 'Manjeri', 4, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(38, 'Ponnani', 4, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(39, 'Payyanur', 4, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(40, 'Koyilandy', 4, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(41, 'Ludhiana', 5, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(42, 'Amritsar', 5, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(43, 'Jalandhar', 5, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(44, 'Patiala', 5, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(45, 'Bathinda', 5, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(46, 'Mohali', 5, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(47, 'Firozpur', 5, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(48, 'Batala', 5, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(49, 'Pathankot', 5, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(50, 'Moga', 5, '2022-02-14 04:03:16', '2022-02-14 04:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `created_at`, `updated_at`) VALUES
(1, 'India', '2022-02-14 04:03:16', '2022-02-14 04:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `email`, `phone_number`, `country_id`, `state_id`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 'test package', 'madf', 'admin@admin.com', '911111111111', 1, 2, 18, '2022-02-14 05:31:29', '2022-02-14 05:31:29'),
(2, 'asdf sad', 'madf', 'admin1@admin.com', '911111111111', 1, 2, 18, '2022-02-14 05:35:43', '2022-02-14 05:35:43'),
(3, 'test package1', 'madf', 'admin11@admin.com', '911111111111', 1, 3, 21, '2022-02-14 05:47:20', '2022-02-14 05:47:20'),
(4, 'sdcasdf', 'madf', 'sa@sa.com', '911111111111', 1, 2, 11, '2022-02-14 05:55:45', '2022-02-14 05:55:45'),
(5, 'abcd', 'asdf', 'abcd@abcd.com', '9100000000000', 1, 2, 14, '2022-02-15 01:02:16', '2022-02-15 01:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(10, '2022_02_14_093134_create_countries_table', 3),
(11, '2022_02_14_093436_create_states_table', 3),
(12, '2022_02_14_094215_create_cities_table', 3),
(13, '2022_02_14_100434_create_customers_table', 4),
(14, '2022_02_14_100546_create_suppliers_table', 4);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Karnataka', 1, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(2, 'Maharashtra', 1, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(3, 'Tamil Nadu', 1, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(4, 'Kerala', 1, '2022-02-14 04:03:16', '2022-02-14 04:03:16'),
(5, 'Punjab', 1, '2022-02-14 04:03:16', '2022-02-14 04:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `supplier_code`, `address`, `email`, `phone_number`, `country_id`, `state_id`, `city_id`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 'madfq', 'admin@admin.com', '911111111111', 1, 4, 32, '2022-02-14 06:16:18', '2022-02-15 04:56:24'),
(2, 'abcd', 'abcd', 'abcd', 'abcd@abcd.com', '9100000000000', 1, 2, 16, '2022-02-15 01:00:59', '2022-02-15 01:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abdullah', 'joy2362', 'abdullahzahidjoy@gmail.com', NULL, '$2y$10$gx3Qq7ZpN/6nYriF/QLvjO.TnbvhW2VtzJ0KHafcAL3.hAZ.UVVTC', NULL, NULL, NULL, '2022-02-14 02:58:44', '2022-02-14 02:58:44'),
(2, 'admin', 'admin', 'admin@admin.com', NULL, '$2y$10$Dj3uWLSLODk81sH3cOx4ZO1ecaUQE4bRYH2mI6w8RlPtCYwWiiIge', NULL, NULL, NULL, '2022-02-14 04:34:47', '2022-02-14 04:34:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_state_id_foreign` (`state_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD KEY `customers_country_id_foreign` (`country_id`),
  ADD KEY `customers_state_id_foreign` (`state_id`),
  ADD KEY `customers_city_id_foreign` (`city_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_foreign` (`country_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_email_unique` (`email`),
  ADD KEY `suppliers_country_id_foreign` (`country_id`),
  ADD KEY `suppliers_state_id_foreign` (`state_id`),
  ADD KEY `suppliers_city_id_foreign` (`city_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `customers_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `customers_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `suppliers_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `suppliers_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `suppliers_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
