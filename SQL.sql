-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 04:55 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_times`
--

CREATE TABLE `contact_times` (
  `contactid` int(10) UNSIGNED NOT NULL,
  `morning` tinyint(1) NOT NULL DEFAULT '0',
  `afternoon` tinyint(1) NOT NULL DEFAULT '0',
  `evening` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_times`
--

INSERT INTO `contact_times` (`contactid`, `morning`, `afternoon`, `evening`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 0, '2018-03-25 22:51:36', '2018-03-26 00:16:30'),
(2, 1, 1, 1, '2018-03-26 00:23:46', '2018-03-26 00:23:46'),
(3, 1, 1, 0, '2018-03-26 00:24:53', '2018-03-26 00:24:53'),
(4, 1, 1, 1, '2018-03-26 00:28:58', '2018-03-26 00:28:58'),
(5, 1, 1, 1, '2018-03-26 00:32:11', '2018-03-26 00:32:11'),
(6, 1, 1, 1, '2018-03-26 00:35:07', '2018-03-26 00:35:07'),
(7, 1, 1, 1, '2018-03-26 00:36:42', '2018-03-26 00:36:42'),
(8, 1, 1, 1, '2018-03-26 00:39:37', '2018-03-26 00:39:37'),
(9, 1, 1, 1, '2018-03-26 00:54:00', '2018-03-26 00:54:00'),
(10, 1, 1, 1, '2018-03-26 00:56:00', '2018-03-26 00:56:00'),
(11, 1, 1, 1, '2018-03-26 00:57:01', '2018-03-26 00:57:01'),
(12, 1, 1, 1, '2018-03-26 00:59:19', '2018-03-26 00:59:19'),
(13, 1, 1, 1, '2018-03-26 00:59:49', '2018-03-26 00:59:49'),
(14, 1, 1, 1, '2018-03-26 01:04:59', '2018-03-26 01:04:59'),
(15, 1, 1, 1, '2018-03-26 01:08:42', '2018-03-26 01:08:42'),
(16, 1, 1, 1, '2018-03-26 01:12:33', '2018-03-26 01:12:33'),
(17, 1, 0, 0, '2018-03-26 01:13:24', '2018-03-26 01:13:24'),
(18, 1, 1, 1, '2018-03-26 02:06:45', '2018-03-26 02:06:45'),
(19, 0, 0, 1, '2018-03-26 02:08:33', '2018-03-26 02:11:48'),
(20, 0, 0, 1, '2018-03-26 02:41:03', '2018-03-26 02:41:14'),
(21, 0, 1, 0, '2018-03-26 02:52:25', '2018-03-26 02:57:03'),
(22, 1, 0, 0, '2018-03-26 03:01:38', '2018-03-26 03:01:38'),
(23, 0, 1, 0, '2018-03-26 03:19:44', '2018-03-26 03:19:44'),
(24, 0, 1, 0, '2018-03-26 03:20:56', '2018-03-26 03:20:56'),
(25, 0, 1, 1, '2018-03-26 03:23:20', '2018-03-26 03:23:28'),
(26, 0, 1, 0, '2018-03-26 03:44:21', '2018-03-26 03:44:21'),
(27, 0, 1, 1, '2018-03-26 04:05:11', '2018-03-26 04:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `created_at`, `updated_at`) VALUES
(1, 'Australia', '2018-03-24 00:25:35', '2018-03-24 00:25:37'),
(2, 'Canada', '2018-03-23 00:25:54', '2018-03-24 00:26:05'),
(3, 'India', '2018-03-24 00:26:19', '2018-03-24 00:26:20'),
(4, 'Netherlands', '2018-03-24 00:26:36', '2018-03-24 00:26:38'),
(5, 'Switzerland', '2018-03-24 00:26:52', '2018-03-24 00:26:53'),
(6, 'United States of America', '2018-03-24 00:27:15', '2018-03-24 00:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `future_members`
--

CREATE TABLE `future_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` int(11) NOT NULL,
  `interested` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `countries_id` int(11) NOT NULL,
  `states_id` int(11) NOT NULL,
  `contactid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `future_members`
--

INSERT INTO `future_members` (`id`, `name`, `email`, `contact`, `interested`, `created_at`, `updated_at`, `user_id`, `countries_id`, `states_id`, `contactid`) VALUES
(1, 'Shreya Rajwade', 'shreyarajwade13@outlook.com', 2016809992, 'Yes', '2018-03-26 04:05:11', '2018-03-26 04:05:11', 1, 3, 7, 27);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2018_03_19_170407_create_members_table', 2),
('2018_03_20_004630_create_future_members_table', 3),
('2018_03_20_020613_create_contact_times_table', 4),
('2018_03_22_004422_add_user_id_to_future_members', 5),
('2018_03_24_000134_create_countries_table', 6),
('2018_03_24_000806_create_states_table', 7),
('2018_03_24_002038_add_countryid_to_states', 8),
('2018_03_24_003543_add_country_id_to_states', 9),
('2018_03_24_203344_add_countries_id_to_future_members', 10),
('2018_03_24_203650_add_states_id_to_future_members', 11),
('2018_03_25_023525_drop_column_from_future_members_table', 12),
('2018_03_25_024115_drop_state_column_from_future_members_table', 13),
('2018_03_25_024759_drop_column_from_future_members_table', 14),
('2018_03_25_041813_add_contactid_to_future_members', 15);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `state_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_name`, `created_at`, `updated_at`, `country_id`) VALUES
(1, 'Victoria', '2018-03-24 00:30:28', '2018-03-24 00:30:28', 1),
(2, 'Queensland', '2018-03-24 00:30:50', '2018-03-24 00:30:51', 1),
(3, 'New South Wales', '2018-03-24 00:31:12', '2018-03-24 00:31:13', 1),
(4, 'British Columbia', '2018-03-24 00:33:17', '2018-03-24 00:33:17', 2),
(5, 'Ontario', '2018-03-24 00:33:43', '2018-03-24 00:33:43', 2),
(6, 'Quebec', '2018-03-24 00:34:29', '2018-03-24 00:34:30', 2),
(7, 'Mumbai', '2018-03-24 00:39:56', '2018-03-24 00:39:57', 3),
(8, 'Delhi', '2018-03-24 00:40:07', '2018-03-24 00:40:07', 3),
(9, 'Gujarat', '2018-03-24 00:40:24', '2018-03-24 00:40:24', 3),
(10, 'North Holland', '2018-03-24 00:41:36', '2018-03-24 00:41:37', 4),
(11, 'Friesland', '2018-03-24 00:42:01', '2018-03-24 00:42:01', 4),
(12, 'Limburg', '2018-03-24 00:42:19', '2018-03-24 00:42:19', 4),
(13, 'Zurich', '2018-03-24 00:42:56', '2018-03-24 00:42:57', 5),
(14, 'Lucerne', '2018-03-24 00:43:14', '2018-03-24 00:43:14', 5),
(15, 'Bern', '2018-03-24 00:43:41', '2018-03-24 00:43:41', 5),
(16, 'New York', '2018-03-24 00:44:02', '2018-03-24 00:44:02', 6),
(17, 'San Francisco', '2018-03-24 00:44:35', '2018-03-24 00:44:36', 6),
(18, 'Texas', '2018-03-24 00:44:55', '2018-03-24 00:44:55', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Daniel Mccullough', 'daniel.mccullough@conference-board.org', '$2y$10$AXVWIk1d2t.OyrKka8C2CurPvcrLTDK9DgV2XCM5kthQEQ8N5NHYu', 'amNeISMcqA0cc1b7Sgp365kwoI0UnJSPHZvbLIXfaDZAxvPNwQsDy6Wf9FSe', '2018-03-26 03:59:31', '2018-03-26 04:05:24'),
(2, 'Robert Green', 'robert.green@conference-board.org', '$2y$10$9a6dKaVdingOdAUH7Xbwn.RO6UYzchVpOo/7TxgW0l1trbJGzBwGm', 'PkLMgUB50YWdh2ZqOoddg6GQnNcs3CzSDuPOnpKc8nHCT3EJlaV3asrj1za7', '2018-03-26 04:00:14', '2018-03-26 04:05:54'),
(3, 'Mark Lackey', 'mark.lackey@conference-board.org', '$2y$10$eUAmMfWUa9TZ3qXyLv86suk7QMIqtOqqKGc.ks8JzEVfzCB..r.76', 'Gg4A9LH8qMu0FoCQcn1t6YnrjcRPf05HmZTCwwYB2GZU0PNZSZLSZAsYwjrr', '2018-03-26 04:00:48', '2018-03-26 04:00:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_times`
--
ALTER TABLE `contact_times`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `future_members`
--
ALTER TABLE `future_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
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
-- AUTO_INCREMENT for table `contact_times`
--
ALTER TABLE `contact_times`
  MODIFY `contactid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `future_members`
--
ALTER TABLE `future_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
