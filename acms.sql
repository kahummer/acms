-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2018 at 05:50 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acms`
--

-- --------------------------------------------------------

--
-- Table structure for table `aeroplanes`
--

CREATE TABLE `aeroplanes` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `aircraft_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturers_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacture_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Flight_hours` int(11) NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aeroplanes`
--

INSERT INTO `aeroplanes` (`id`, `created_at`, `updated_at`, `aircraft_id`, `manufacturers_name`, `manufacture_date`, `Flight_hours`, `Address`) VALUES
(1, NULL, NULL, 'aircraft1', 'jdjdhhdjhd', 'jdhjhdjhd', 123, '123ddmdd'),
(2, '2018-02-22 04:08:47', '2018-02-22 04:08:47', 'De78989', 'ckjclklx', '2013-04-09', 2565, 'jhuihijk'),
(3, '2018-02-22 04:13:57', '2018-02-22 04:13:57', 'DKJDKD', 'MMNKNKK', '2013-04-09', 1234, 'KKLJKLJJKL'),
(4, '2018-02-22 04:23:56', '2018-02-22 04:23:56', 'dhhkkk', 'kjkkjjkkjk', '2013-04-09', 234, 'jhkcijdkj'),
(5, '2018-02-22 04:59:45', '2018-02-22 04:59:45', 'hdhhhd', 'klkdjjiijk', '2013-08-08', 4525226, 'nfjfjfjfj');

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

CREATE TABLE `airports` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `county` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`id`, `created_at`, `updated_at`, `name`, `country`, `county`, `level`, `type`) VALUES
(1, '2018-02-16 13:45:46', '2018-02-16 13:45:46', 'jkai', 'Kenya', 'NAirobi', 'International', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `incidents`
--

CREATE TABLE `incidents` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `incidentid` int(255) NOT NULL,
  `aeroplane` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `incidentname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `casualties` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `damagelevel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incidents`
--

INSERT INTO `incidents` (`id`, `created_at`, `updated_at`, `incidentid`, `aeroplane`, `incidentname`, `location`, `image`, `casualties`, `damagelevel`, `description`) VALUES
(1, '2018-02-19 05:23:09', '2018-02-19 05:23:09', 3456, 'aircraft1', 'kjkjkjkj', 'kjkjkjkjkj', '1519305470.png', '6', 'Medium', 'kjkjkjkj'),
(2, '2018-02-22 06:58:59', '2018-02-22 06:58:59', 38116, 'aircraft1', 'Tire Burst', 'JKAI', NULL, '2', 'high', 'A replacement was ordered'),
(3, '2018-02-22 07:00:24', '2018-02-22 07:00:24', 68859, 'aircraft1', 'Tire Burst', 'JKAI', NULL, '2', 'high', 'A replacement was ordered'),
(4, '2018-02-22 07:09:21', '2018-02-22 07:09:21', 78464, 'aircraft1', 'Tire Burst', 'JKAI', NULL, '2', 'high', 'A replacement was ordered'),
(5, '2018-02-22 07:16:03', '2018-02-22 07:16:03', 17921, 'aircraft1', 'Tire Burst', 'JKAI', NULL, '2', 'high', 'An order placed'),
(6, '2018-02-22 07:21:14', '2018-02-22 07:21:14', 59314, 'aircraft1', 'Tire Burst', 'JKAI', NULL, '3', 'high', 'I love music'),
(7, '2018-02-22 07:24:36', '2018-02-22 07:24:36', 73223, 'aircraft1', 'Windscreen Shutter', 'Willson Airport', NULL, '4', 'high', 'I love afrojack'),
(8, '2018-02-22 07:28:31', '2018-02-22 07:28:31', 55447, 'aircraft1', 'Tire Burst', 'JKAI', NULL, '2', 'high', 'Afrojack- stret of lights'),
(9, '2018-02-22 07:30:11', '2018-02-22 07:30:11', 26616, 'aircraft1', 'Windscreen Shutter', 'JKAI', NULL, '4', 'high', 'Loveed it'),
(10, '2018-02-22 07:57:37', '2018-02-22 07:57:37', 96523, 'aircraft1', 'Windscreen Shutter', 'JKAI', NULL, '5', 'Medium', 'Replacement ordered'),
(11, '2018-02-22 08:05:28', '2018-02-22 08:05:28', 68261, 'aircraft1', 'Tire Burst', 'JKAI', NULL, '4', 'high', 'Afro jack'),
(12, '2018-02-22 08:20:15', '2018-02-22 08:20:15', 44839, 'aircraft1', 'Tire Burst', 'JKAI', NULL, '4', 'high', 'Afro jack'),
(13, '2018-02-22 08:20:42', '2018-02-22 08:20:42', 45313, 'aircraft1', 'Tire Burst', 'JKAI', NULL, '3', 'high', 'yhdjhduhdjhdj'),
(14, '2018-02-22 09:15:59', '2018-02-22 09:15:59', 96434, 'aircraft1', 'Windscreen Shutter', 'jkai', NULL, '3', 'high', 'Timeflies'),
(15, '2018-02-22 09:17:32', '2018-02-22 09:17:32', 77585, 'aircraft1', 'Windscreen Shutter', 'jkai', NULL, '3', 'high', 'Timeflies'),
(16, '2018-02-22 09:20:37', '2018-02-22 09:20:37', 98140, 'aircraft1', 'Windscreen Shutter', 'jkai', NULL, '3', 'high', 'Timeflies'),
(17, '2018-02-22 09:30:25', '2018-02-22 09:30:25', 50977, 'aircraft1', 'Tire Burst', 'jkai', NULL, '6', 'high', 'Little bit unsteady'),
(18, '2018-02-22 09:33:49', '2018-02-22 09:33:49', 11295, 'aircraft1', 'Tire Burst', 'jkai', NULL, '6', 'high', 'Little bit unsteady'),
(19, '2018-02-22 09:55:00', '2018-02-22 09:55:00', 33155, 'aircraft1', 'Tire Burst', 'jkai', NULL, '6', 'high', 'Little bit unsteady'),
(20, '2018-02-22 10:00:02', '2018-02-22 10:00:02', 55198, 'aircraft1', 'Tire Burst', 'jkai', NULL, '6', 'high', 'Little bit unsteady'),
(21, '2018-02-22 10:14:27', '2018-02-22 10:17:50', 56614, 'aircraft1', 'Tire Burst', 'jkai', '1519305470.png', '6', 'high', 'Little bit unsteady'),
(22, '2018-02-22 10:17:50', '2018-02-22 10:17:50', 20235, 'aircraft1', 'Tire Burst', 'jkai', NULL, '6', 'high', 'Little bit unsteady'),
(23, '2018-02-22 10:22:42', '2018-02-22 10:22:42', 38525, 'aircraft1', 'Tire Burst', 'jkai', NULL, '6', 'high', 'Little bit unsteady'),
(24, '2018-02-22 10:23:47', '2018-02-22 10:23:47', 43753, 'aircraft1', 'Tire Burst', 'jkai', NULL, '6', 'high', 'Little bit unsteady'),
(25, '2018-02-22 10:24:14', '2018-02-22 10:24:14', 38644, 'aircraft1', 'Tire Burst', 'jkai', NULL, '6', 'high', 'Little bit unsteady'),
(26, '2018-02-22 10:24:35', '2018-02-22 10:24:35', 29938, 'aircraft1', 'Tire Burst', 'jkai', NULL, '6', 'high', 'Little bit unsteady'),
(27, '2018-02-22 10:24:51', '2018-02-22 10:24:51', 88530, 'aircraft1', 'Tire Burst', 'jkai', NULL, '6', 'high', 'Little bit unsteady'),
(28, '2018-02-22 10:25:41', '2018-02-22 10:25:41', 95028, 'aircraft1', 'Tire Burst', 'jkai', NULL, '6', 'high', 'Little bit unsteady'),
(29, '2018-02-22 10:25:55', '2018-02-22 10:25:55', 65617, 'aircraft1', 'Tire Burst', 'jkai', NULL, '6', 'high', 'Little bit unsteady'),
(30, '2018-02-22 10:26:53', '2018-02-22 10:26:53', 35001, 'aircraft1', 'Tire Burst', 'jkai', NULL, '6', 'high', 'Little bit unsteady'),
(31, '2018-02-22 11:33:23', '2018-02-22 11:33:38', 88277, 'aircraft1', 'Windscreen Shutter', 'Nairobi,Kenya', '1519310018.png', '5', 'high', 'Try out'),
(32, '2018-02-22 11:33:38', '2018-02-22 11:33:38', 66060, 'aircraft1', 'Windscreen Shutter', 'Nairobi,Kenya', NULL, '5', 'high', 'Try out'),
(33, '2018-02-22 11:35:31', '2018-02-22 11:35:39', 45187, 'aircraft1', 'Windscreen Shutter', 'Nairobi,Kenya', '1519310139.png', '5', 'high', 'Try out'),
(34, '2018-02-22 11:35:39', '2018-02-22 11:35:39', 37744, 'aircraft1', 'Windscreen Shutter', 'Nairobi,Kenya', NULL, '5', 'high', 'Try out'),
(35, '2018-02-22 11:53:18', '2018-02-22 11:53:34', 11604, 'aircraft1', 'gear lock', 'JKAI', '1519311214.jpg', '0', 'high', 'New gears were fitted'),
(36, '2018-02-22 11:53:34', '2018-02-22 11:53:34', 68285, 'aircraft1', 'gear lock', 'JKAI', NULL, '0', 'high', 'New gears were fitted');

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
(1, '2017_08_09_072501_create_mainteinance_table', 1),
(2, '2017_08_15_065453_create_settings_table', 1),
(3, '2017_08_15_111423_create_meterreadings_table', 1),
(4, '2017_08_15_152353_create_bills_table', 1),
(5, '2017_08_16_080707_create_houses_table', 1),
(6, '2018_02_13_160810_Create_Aeroplanes_table', 2),
(7, '2018_02_16_091535_create_airports_table', 3),
(9, '2018_02_16_183753_create_incidents_table', 4),
(10, '2018_02_19_090309_create_repairs_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_id`, `model_type`) VALUES
(1, 1, 'App\\User'),
(1, 2, 'App\\User'),
(1, 3, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dennisluke44@gmail.com', '$2y$10$lia5U.C9Pgv1UAS2K3vgiehwTZq50Pclf0ybc.RdPZURGrtXjf7vm', '2017-09-06 17:32:10'),
('beatricekinyua@gmail.com', '$2y$10$DNR8s2ZFiQQ7ZB5F9BOKoecM4o.4/xnFaYD8kYm6m13S8aGI48deO', '2017-09-12 10:01:57'),
('beatykinyua@gmail.com', '$2y$10$5j10fZlE8QEWu6enAVV51.p6CWggu9xIFZwfbiChGJtUoqXOZoX7K', '2017-09-12 13:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administer roles & permissions', 'web', '2017-08-01 08:03:18', '2017-08-01 08:03:18');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `repairs`
--

CREATE TABLE `repairs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `repaireid` int(255) NOT NULL,
  `aeroplane` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `repairs`
--

INSERT INTO `repairs` (`id`, `created_at`, `updated_at`, `repaireid`, `aeroplane`, `item`, `type`, `description`) VALUES
(1, NULL, NULL, 345, 'aircraft1', 'gears', 'Repaire', 'kdjkjdjdjdkljdjd'),
(2, '2018-02-22 12:22:35', '2018-02-22 12:22:35', 64973, 'aircraft1', 'gears', 'Mainteinance', 'New gears fitted'),
(3, '2018-02-22 12:30:40', '2018-02-22 12:30:40', 38598, 'aircraft1', 'Gears', 'Mainteinance', 'New gears were advocated for');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2017-08-01 08:03:55', '2017-08-01 08:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `housenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` tinyint(1) NOT NULL,
  `mainteinance` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `created_at`, `updated_at`, `housenumber`, `occupation`, `mainteinance`) VALUES
(91, '2017-09-12 15:04:40', '2017-09-13 15:03:12', 'A1', 1, 1),
(92, '2017-09-12 15:04:51', '2017-09-13 05:45:38', 'A2', 1, 1),
(93, '2017-09-12 15:05:01', '2017-09-12 15:14:00', 'A3', 0, 1),
(94, '2017-09-12 15:10:18', '2017-09-12 15:10:18', 'B1', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'beatrice', 'beatykinyua@gmail.com', '$2y$10$rxXZfeAhD7PdAyIQSPioOOxPLM.dQOgxNj8Ino/2IKIu1uCnsBGcW', 'cRldLRrArK60yYOsGGjoe7CovqHPc1kHPO4NM7qc7Tvc31zFk1voEJvhqKdV', '2017-08-05 08:18:24', '2017-08-05 08:19:40'),
(5, 'beaty', 'beatricekinyua@gmail.com', '$2y$10$YfcCbTtcYCR1uquu6FrU0unkJvRSe8KogzUPClpmvKEwKWN77IXPe', 'goaZw4HXq2lqIjGN4ipUtrbS2aAIeUBHgMNJlUZTunoAlRUc3sLoOLyXYQH5', '2017-09-11 16:26:26', '2017-09-11 16:26:26'),
(6, 'Lewis', 'lewismuch5@gmail.com', '$2y$10$dub7TneEL76owECjFq3u8.ASNTADEvgodanrJnaZeI22KUgIHG8Hy', NULL, '2018-01-16 06:22:34', '2018-01-16 06:22:34'),
(7, 'admin', 'meritei@covercloudlimited.com', '$2y$10$XKwtis9Zw4.EHo8pc4WYmO5PZB977SqxXMhqfv9Y/yjSkyeCp2Cni', 'JCbmSAnuOAgh7rKokQSVGrvVYLZCejYBq06yhkIJne5NOGGnr1TtLOOcXKYc', '2018-02-14 06:11:05', '2018-02-14 06:11:05'),
(8, 'Moses', 'moecleaning11@gmail.com', '$2y$10$ouNgKFcxyYK5EAq9DQxiluzEzkDd3p8eWJjiOv3uei3lXhxfylYpC', 'ulJw0hLFFGiqnSP48UlUz0nFPwumV8yf6h6TaQTcSbq19I1kMag8v4KFOsJv', '2018-02-16 12:26:14', '2018-02-16 12:26:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aeroplanes`
--
ALTER TABLE `aeroplanes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airports`
--
ALTER TABLE `airports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incidents`
--
ALTER TABLE `incidents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repairs`
--
ALTER TABLE `repairs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
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
-- AUTO_INCREMENT for table `aeroplanes`
--
ALTER TABLE `aeroplanes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `airports`
--
ALTER TABLE `airports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `incidents`
--
ALTER TABLE `incidents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `repairs`
--
ALTER TABLE `repairs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
