-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.31-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for portal
CREATE DATABASE IF NOT EXISTS `portal` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `portal`;

-- Dumping structure for table portal.contact_times
CREATE TABLE IF NOT EXISTS `contact_times` (
  `contactid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `morning` tinyint(1) NOT NULL DEFAULT '0',
  `afternoon` tinyint(1) NOT NULL DEFAULT '0',
  `evening` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table portal.contact_times: ~26 rows (approximately)
/*!40000 ALTER TABLE `contact_times` DISABLE KEYS */;
INSERT INTO `contact_times` (`contactid`, `morning`, `afternoon`, `evening`, `created_at`, `updated_at`) VALUES
	(1, 1, 0, 0, '2018-03-25 18:51:36', '2018-03-25 20:16:30'),
	(2, 1, 1, 1, '2018-03-25 20:23:46', '2018-03-25 20:23:46'),
	(3, 1, 1, 0, '2018-03-25 20:24:53', '2018-03-25 20:24:53'),
	(4, 1, 1, 1, '2018-03-25 20:28:58', '2018-03-25 20:28:58'),
	(5, 1, 1, 1, '2018-03-25 20:32:11', '2018-03-25 20:32:11'),
	(6, 1, 1, 1, '2018-03-25 20:35:07', '2018-03-25 20:35:07'),
	(7, 1, 1, 1, '2018-03-25 20:36:42', '2018-03-25 20:36:42'),
	(8, 1, 1, 1, '2018-03-25 20:39:37', '2018-03-25 20:39:37'),
	(9, 1, 1, 1, '2018-03-25 20:54:00', '2018-03-25 20:54:00'),
	(10, 1, 1, 1, '2018-03-25 20:56:00', '2018-03-25 20:56:00'),
	(11, 1, 1, 1, '2018-03-25 20:57:01', '2018-03-25 20:57:01'),
	(12, 1, 1, 1, '2018-03-25 20:59:19', '2018-03-25 20:59:19'),
	(13, 1, 1, 1, '2018-03-25 20:59:49', '2018-03-25 20:59:49'),
	(14, 1, 1, 1, '2018-03-25 21:04:59', '2018-03-25 21:04:59'),
	(15, 1, 1, 1, '2018-03-25 21:08:42', '2018-03-25 21:08:42'),
	(16, 1, 1, 1, '2018-03-25 21:12:33', '2018-03-25 21:12:33'),
	(17, 1, 0, 0, '2018-03-25 21:13:24', '2018-03-25 21:13:24'),
	(18, 1, 1, 1, '2018-03-25 22:06:45', '2018-03-25 22:06:45'),
	(19, 0, 0, 1, '2018-03-25 22:08:33', '2018-03-25 22:11:48'),
	(20, 0, 0, 1, '2018-03-25 22:41:03', '2018-03-25 22:41:14'),
	(21, 0, 1, 0, '2018-03-25 22:52:25', '2018-03-25 22:57:03'),
	(22, 1, 0, 0, '2018-03-25 23:01:38', '2018-03-25 23:01:38'),
	(23, 0, 1, 0, '2018-03-25 23:19:44', '2018-03-25 23:19:44'),
	(24, 0, 1, 0, '2018-03-25 23:20:56', '2018-03-25 23:20:56'),
	(25, 0, 1, 1, '2018-03-25 23:23:20', '2018-03-25 23:23:28'),
	(26, 0, 1, 0, '2018-03-25 23:44:21', '2018-03-25 23:44:21'),
	(27, 0, 1, 1, '2018-03-26 00:05:11', '2018-03-26 00:05:19');
/*!40000 ALTER TABLE `contact_times` ENABLE KEYS */;

-- Dumping structure for table portal.countries
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table portal.countries: ~5 rows (approximately)
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` (`id`, `country_name`, `created_at`, `updated_at`) VALUES
	(1, 'Australia', '2018-03-23 20:25:35', '2018-03-23 20:25:37'),
	(2, 'Canada', '2018-03-22 20:25:54', '2018-03-23 20:26:05'),
	(3, 'India', '2018-03-23 20:26:19', '2018-03-23 20:26:20'),
	(4, 'Netherlands', '2018-03-23 20:26:36', '2018-03-23 20:26:38'),
	(5, 'Switzerland', '2018-03-23 20:26:52', '2018-03-23 20:26:53'),
	(6, 'United States of America', '2018-03-23 20:27:15', '2018-03-23 20:27:15');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;

-- Dumping structure for table portal.future_members
CREATE TABLE IF NOT EXISTS `future_members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` int(11) NOT NULL,
  `interested` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `countries_id` int(11) NOT NULL,
  `states_id` int(11) NOT NULL,
  `contactid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table portal.future_members: ~0 rows (approximately)
/*!40000 ALTER TABLE `future_members` DISABLE KEYS */;
INSERT INTO `future_members` (`id`, `name`, `email`, `contact`, `interested`, `created_at`, `updated_at`, `user_id`, `countries_id`, `states_id`, `contactid`) VALUES
	(1, 'Shreya Rajwade', 'shreyarajwade13@outlook.com', 2016809992, 'Yes', '2018-03-26 00:05:11', '2018-03-26 00:05:11', 1, 3, 7, 27);
/*!40000 ALTER TABLE `future_members` ENABLE KEYS */;

-- Dumping structure for table portal.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table portal.migrations: ~16 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table portal.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table portal.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table portal.states
CREATE TABLE IF NOT EXISTS `states` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `state_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table portal.states: ~18 rows (approximately)
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` (`id`, `state_name`, `created_at`, `updated_at`, `country_id`) VALUES
	(1, 'Victoria', '2018-03-23 20:30:28', '2018-03-23 20:30:28', 1),
	(2, 'Queensland', '2018-03-23 20:30:50', '2018-03-23 20:30:51', 1),
	(3, 'New South Wales', '2018-03-23 20:31:12', '2018-03-23 20:31:13', 1),
	(4, 'British Columbia', '2018-03-23 20:33:17', '2018-03-23 20:33:17', 2),
	(5, 'Ontario', '2018-03-23 20:33:43', '2018-03-23 20:33:43', 2),
	(6, 'Quebec', '2018-03-23 20:34:29', '2018-03-23 20:34:30', 2),
	(7, 'Mumbai', '2018-03-23 20:39:56', '2018-03-23 20:39:57', 3),
	(8, 'Delhi', '2018-03-23 20:40:07', '2018-03-23 20:40:07', 3),
	(9, 'Gujarat', '2018-03-23 20:40:24', '2018-03-23 20:40:24', 3),
	(10, 'North Holland', '2018-03-23 20:41:36', '2018-03-23 20:41:37', 4),
	(11, 'Friesland', '2018-03-23 20:42:01', '2018-03-23 20:42:01', 4),
	(12, 'Limburg', '2018-03-23 20:42:19', '2018-03-23 20:42:19', 4),
	(13, 'Zurich', '2018-03-23 20:42:56', '2018-03-23 20:42:57', 5),
	(14, 'Lucerne', '2018-03-23 20:43:14', '2018-03-23 20:43:14', 5),
	(15, 'Bern', '2018-03-23 20:43:41', '2018-03-23 20:43:41', 5),
	(16, 'New York', '2018-03-23 20:44:02', '2018-03-23 20:44:02', 6),
	(17, 'San Francisco', '2018-03-23 20:44:35', '2018-03-23 20:44:36', 6),
	(18, 'Texas', '2018-03-23 20:44:55', '2018-03-23 20:44:55', 6);
/*!40000 ALTER TABLE `states` ENABLE KEYS */;

-- Dumping structure for table portal.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table portal.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Daniel Mccullough', 'daniel.mccullough@conference-board.org', '$2y$10$AXVWIk1d2t.OyrKka8C2CurPvcrLTDK9DgV2XCM5kthQEQ8N5NHYu', 'amNeISMcqA0cc1b7Sgp365kwoI0UnJSPHZvbLIXfaDZAxvPNwQsDy6Wf9FSe', '2018-03-25 23:59:31', '2018-03-26 00:05:24'),
	(2, 'Robert Green', 'robert.green@conference-board.org', '$2y$10$9a6dKaVdingOdAUH7Xbwn.RO6UYzchVpOo/7TxgW0l1trbJGzBwGm', 'PkLMgUB50YWdh2ZqOoddg6GQnNcs3CzSDuPOnpKc8nHCT3EJlaV3asrj1za7', '2018-03-26 00:00:14', '2018-03-26 00:05:54'),
	(3, 'Mark Lackey', 'mark.lackey@conference-board.org', '$2y$10$eUAmMfWUa9TZ3qXyLv86suk7QMIqtOqqKGc.ks8JzEVfzCB..r.76', 'Gg4A9LH8qMu0FoCQcn1t6YnrjcRPf05HmZTCwwYB2GZU0PNZSZLSZAsYwjrr', '2018-03-26 00:00:48', '2018-03-26 00:00:50');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
