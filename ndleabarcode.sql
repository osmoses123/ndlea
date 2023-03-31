-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 12:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ndleabarcode`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `surname`, `last_name`, `email`, `email_verified_at`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '', '', 'pcrooks@example.com', '2023-03-16 11:40:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2023-03-16 11:40:35', '2023-03-16 11:40:35'),
(2, 'Admin', '', '', 'larue.huels@example.org', '2023-03-16 11:40:35', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, '2023-03-16 11:40:36', '2023-03-16 11:40:36'),
(3, 'Moses', 'Ayoade', 'Bukunmi', 'osmoses123@gmail.com', NULL, '$2y$10$HHJlcqj8.lL1zfHewe4w2ehbgrRKPD/vP7JWkoamu8AhAw6795L2i', 0, '2023-03-16 13:52:17', NULL),
(4, 'Moses', 'Ayoade', 'Bukunmi', 'osmoses@gmail.com', NULL, '$2y$10$UJAEHuKzBIg8TDDRpqz2ju75uWs/BwGu5QY7WBcS1c0iLyeuI/HYq', 0, '2023-03-16 13:55:14', NULL),
(5, 'Maris', 'Cross', 'Love', 'renisuqa@mailinator.com', NULL, '$2y$10$Oy2VpvQ7dTBdJaVIi4rhlOKSsRtfi5zVrIc520RLaDmGykxiTDd6K', 0, '2023-03-20 14:15:16', NULL),
(6, 'Deirdre', 'Wiley', 'Wiggins', 'cebysoze@mailinator.com', NULL, '$2y$10$QMBAzkuNEkKGURSHc3Cykud5/GLt5akDnDjGwNOZxt.TJFMv7BwIi', 0, '2023-03-21 09:33:31', NULL),
(7, 'Chava', 'Briggs', 'Thompson', 'piqacymo@mailinator.com', NULL, '$2y$10$HDVM9LOuvM8QZv9YCwIMju9C7zdG5HVY6gLGq17hZVW/DxRXzXVcS', 0, '2023-03-21 14:05:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `methylendioxymethamphetamine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amphetamine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ketamine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cotinine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `methamphetamine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marijuana` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `morphine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opiatestramadol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `benzodiazepines` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cocaineheroin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qrcode` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'completed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `fullname`, `phone`, `email`, `caddress`, `dob`, `urine`, `methylendioxymethamphetamine`, `amphetamine`, `ketamine`, `cotinine`, `methamphetamine`, `marijuana`, `morphine`, `opiatestramadol`, `benzodiazepines`, `cocaineheroin`, `note`, `qrcode`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kiayada Casey', '+1 (167) 322-4185', 'gotuwepug@mailinator.com', 'Iusto eaque molestia', '2017-03-21', 'urine', NULL, 'Amphetamine', NULL, 'Cotinine', 'Methamphetamine', NULL, 'Morphine', 'Opiates Tramadol', 'Benzodiazepines', 'Cocaine Heroin', 'Odio rerum non offic. dddd', '13455488385', 'completed', NULL, NULL),
(2, 'Uta Galloway', '+1 (924) 238-8658', 'wubezotity@mailinator.com', 'Harum pariatur Modi', '1974-04-13', 'urine', NULL, NULL, NULL, 'Cotinine', 'Methamphetamine', 'Marijuana', 'Morphine', 'Opiates Tramadol', NULL, NULL, 'Qui delectus, dicta . dd', 'NDLEA-CET-(mt_rand(1000000000,99999999999))', 'completed', NULL, NULL),
(3, 'Bradley Terrell', '+1 (855) 858-3807', 'napog@mailinator.com', 'Ea veritatis perspic', '1978-01-01', 'urine', 'Methylendioxymethamphetamine', NULL, 'Ketamine', 'Cotinine', 'Methamphetamine', NULL, NULL, NULL, 'Benzodiazepines', 'Cocaine Heroin', 'Ea consectetur cupid.dd', 'NDLEA-CET-2845127383', 'completed', NULL, NULL),
(4, 'Lane Hurst', '+1 (598) 667-6385', 'dycakumika@mailinator.com', 'Quis qui anim dolore', '1992-11-02', 'urine', 'Methylendioxymethamphetamine', 'Amphetamine', NULL, 'Cotinine', 'Methamphetamine', NULL, NULL, NULL, NULL, NULL, NULL, 'NDLEA-CET-467771', 'completed', NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hods`
--

CREATE TABLE `hods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `director_id` int(11) DEFAULT NULL,
  `director` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hods`
--

INSERT INTO `hods` (`id`, `name`, `surname`, `last_name`, `director_id`, `director`, `email`, `email_verified_at`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hope', 'Turner', 'Morin', NULL, NULL, 'hinepyvo@mailinator.com', NULL, '$2y$10$G.ipu2VHcTpq4Y7LoqbnSO7gW/Yn5nAW7a2dBfpJM5KjZU/Fxxt8O', 0, '2023-03-21 09:04:27', NULL),
(2, 'Quemby', 'Rowe', 'Salinas', NULL, NULL, 'nymoh@mailinator.com', NULL, '$2y$10$Od0VN5GKnDFSCUH.yTTsgOyNLUds.IWCLiziLSn6unLLEJIkQDlbS', 0, '2023-03-21 09:11:57', NULL),
(3, 'Dustin', 'Hester', 'Adams', NULL, NULL, 'pugosog@mailinator.com', NULL, '$2y$10$KF.pm8ZiDbJ.UEQzJotQTeg/ph/y7MqDGh2RGXf3xVXOTNJp/vtbO', 0, '2023-03-21 09:25:42', NULL);

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_16_001634_create_admin_table', 2),
(6, '2023_03_20_121719_create_hod_table', 3),
(9, '2023_03_30_201216_create_certificates_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('osmoses123@gmail.com', '$2y$10$X.6u1VdQ00EDx/KxNZAgJ.0k2ri3BYAIxzjqNUFf/hNZexwYEJZ2.', '2023-03-15 23:06:47');

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ayoade Bukunmi Moses', 'osmoses123@gmail.com', NULL, '$2y$10$U.QbfcizB0Al1KIjwY2b8OtnIZQ/5BaiWJhgdNLNqX6nCulHa/MEK', NULL, '2023-03-15 23:05:58', '2023-03-15 23:05:58'),
(4, 'Ayoade Bukunmi Moses', 'osmoses1@gmail.com', NULL, '$2y$10$/v8P1KPg3fwruwagCdGzW.lb1I66x9cEnvrgZWLhZZrcxJxcTNk7S', NULL, '2023-03-16 14:07:31', '2023-03-16 14:07:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hods`
--
ALTER TABLE `hods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hod_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hods`
--
ALTER TABLE `hods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
