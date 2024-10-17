-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2024 at 05:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loop`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtasks`
--

CREATE TABLE `addtasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `taskName` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `deadline` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addtasks`
--

INSERT INTO `addtasks` (`id`, `taskName`, `dept`, `description`, `priority`, `deadline`, `status`, `client_id`, `created_at`, `updated_at`) VALUES
(2, 'Web develop', 'Web development', 'wrcg3xt5', 'high', '2024-11-05', 'not_started', 1, '2024-10-06 23:49:23', '2024-10-06 23:49:23'),
(3, 'Digital Marketing', 'Digital marketing', 'Making traffic', 'high', '2024-11-14', 'not_started', 2, '2024-10-15 08:50:38', '2024-10-15 08:50:38'),
(4, 'Motion Designing', 'Design', 'Make a design', 'medium', '2024-10-24', 'in_progress', 3, '2024-10-15 08:51:21', '2024-10-15 08:51:21'),
(5, 'Business Development', 'Business', 'Business Related', 'high', '2024-10-16', 'in_progress', 2, '2024-10-15 09:06:43', '2024-10-15 09:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `name`, `password`, `phone`, `role`, `created_at`, `updated_at`) VALUES
(1, 'danialhodges@gmail.com', 'Danial Hodges', '827ccb0eea8a706c4c34a16891f84e7b', '01779332887', 'Admin', NULL, NULL),
(2, 'rudolphnicholson@yahoo.com', 'Rudolph Nicholson', 'e10adc3949ba59abbe56e057f20f883e', '01304224186', 'CEO', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `allworks`
--

CREATE TABLE `allworks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_id` bigint(20) UNSIGNED NOT NULL,
  `assigned_team` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `due_date` date NOT NULL,
  `dependencies` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `emp_id`, `dept`, `date`, `created_at`, `updated_at`) VALUES
(5, '5', 'Design', '2024-10-09', '2024-10-08 23:56:01', '2024-10-08 23:56:01'),
(6, '6', 'Business', '2024-10-09', '2024-10-09 00:09:28', '2024-10-09 00:09:28'),
(7, '7', 'Web Development', '2024-10-09', '2024-10-09 00:12:05', '2024-10-09 00:12:05'),
(8, '8', 'App Development', '2024-10-09', '2024-10-09 00:14:52', '2024-10-09 00:14:52'),
(9, '9', 'Digital Marketing', '2024-10-09', '2024-10-09 00:17:05', '2024-10-09 00:17:05'),
(10, '10', 'Design', '2024-10-09', '2024-10-09 00:19:57', '2024-10-09 00:19:57'),
(11, '11', 'Web Development', '2024-10-09', '2024-10-09 00:21:49', '2024-10-09 00:21:49'),
(12, '12', 'Web Development', '2024-10-09', '2024-10-09 00:26:39', '2024-10-09 00:26:39'),
(13, '6', 'Business', '2024-10-15', '2024-10-15 02:17:19', '2024-10-15 02:17:19'),
(14, '8', 'App Development', '2024-10-15', '2024-10-15 02:22:30', '2024-10-15 02:22:30'),
(15, '9', 'Digital Marketing', '2024-10-15', '2024-10-15 08:58:43', '2024-10-15 08:58:43'),
(16, '10', 'Design', '2024-10-15', '2024-10-15 08:59:12', '2024-10-15 08:59:12'),
(17, '11', 'Web Development', '2024-10-15', '2024-10-15 08:59:57', '2024-10-15 08:59:57'),
(18, '12', 'Web Development', '2024-10-15', '2024-10-15 09:00:49', '2024-10-15 09:00:49'),
(19, '5', 'Design', '2024-10-15', '2024-10-15 09:04:17', '2024-10-15 09:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `meeting_time` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `phone`, `address`, `about`, `meeting_time`, `status`, `created_at`, `updated_at`) VALUES
(1, 'aukotex', 'tex@sdgnsn', '1234567890', 'main office', 'business', '2024-10-30 22:48:00', 1, '2024-10-06 10:48:54', '2024-10-15 02:40:00'),
(2, 'Minister', 'rico@gmail.com', '01779332884', 'Main office', 'Business Related', '2024-10-30 14:36:00', 1, '2024-10-15 02:36:10', '2024-10-15 02:36:10'),
(3, 'BBB', 'bbb@gmail.com', '01779332844', 'JFP', 'Marketing', '2024-10-24 14:39:00', 0, '2024-10-15 02:39:28', '2024-10-15 09:25:52'),
(4, 'Walton', 'walton@123.gmail.com', '01779332834', 'Main office', 'Project', '2024-10-30 20:53:00', 0, '2024-10-15 08:53:54', '2024-10-15 09:25:50'),
(5, 'Inglot', 'ing@19gmail.com', '01779332844', 'Main Office', 'Project', '2024-10-18 20:54:00', 0, '2024-10-15 08:54:34', '2024-10-15 09:25:49'),
(6, 'Savoy', 'savoy@gmail.com', '01779332834', 'Main Office', 'Project', '2024-10-27 00:55:00', 0, '2024-10-15 08:55:41', '2024-10-15 09:25:47');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desi` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `joining` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interns`
--

CREATE TABLE `interns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `supervisor` varchar(255) NOT NULL,
  `stipend` varchar(255) NOT NULL,
  `edu` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interns`
--

INSERT INTO `interns` (`id`, `name`, `dept`, `supervisor`, `stipend`, `edu`, `email`, `phone`, `address`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nil Das', 'Business', 'Abdullah Bari', '15000', 'BBA', 'nil@13.gmail.com', '01779332887', 'Dhanmondi,27,Dhaka', '2024-10-15', '2024-10-31', 'completed', '2024-10-15 02:30:01', '2024-10-15 02:30:20'),
(2, 'Oshmi Saha', 'App Development', 'Abdullah Bari', '15000', 'CSE', 'oshmi@yahoo.com', '01779332834', 'Uttara 5', '2024-10-16', '2024-10-30', 'active', '2024-10-15 02:38:22', '2024-10-15 02:38:22'),
(3, 'Max Gomes', 'Design', 'Sumon', '15000', 'Design', 'max@yahoo.com', '01779332884', 'Nawabganj, Dhaka', '2024-10-23', '2024-10-24', 'completed', '2024-10-15 09:08:20', '2024-10-15 09:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `reason` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `user_id`, `type`, `start_date`, `end_date`, `reason`, `status`, `created_at`, `updated_at`) VALUES
(3, 5, 'annual', '2024-10-24', '2024-11-09', 'Abroad Trip', 'declined', '2024-10-08 23:56:48', '2024-10-15 01:57:33'),
(4, 6, 'casual', '2024-10-10', '2024-10-23', 'Casual Leave', 'declined', '2024-10-09 00:10:25', '2024-10-15 02:09:41'),
(5, 9, 'casual', '2024-12-06', '2024-12-20', 'Casual Leave', 'declined', '2024-10-09 00:17:46', '2024-10-15 01:57:38'),
(6, 11, 'sick', '2024-10-11', '2024-10-11', 'Due to fever', 'declined', '2024-10-09 00:22:35', '2024-10-15 01:57:43'),
(9, 6, 'sick', '2024-10-18', '2024-10-23', 'emergency familiy', 'approved', '2024-10-15 02:10:30', '2024-10-15 02:11:47'),
(10, 5, 'sick', '2024-10-24', '2024-11-07', 'srgvetntumn', 'approved', '2024-10-15 02:18:26', '2024-10-15 02:20:23'),
(11, 8, 'casual', '2024-10-16', '2024-10-29', 'srgvnetyt', 'approved', '2024-10-15 02:21:30', '2024-10-15 02:22:04'),
(12, 5, 'casual', '2024-10-31', '2024-11-09', 'jgv', 'approved', '2024-10-15 09:05:21', '2024-10-15 09:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2024_09_29_172238_create_addtasks_table', 1),
(196, '2014_10_12_000000_create_users_table', 2),
(197, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(198, '2019_08_19_000000_create_failed_jobs_table', 2),
(199, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(200, '2024_09_14_052230_create_admins_table', 2),
(201, '2024_09_15_135647_create_tasks_table', 2),
(202, '2024_09_19_134414_create_clients_table', 2),
(203, '2024_09_20_025502_create_employees_table', 2),
(204, '2024_09_20_060518_create_interns_table', 2),
(205, '2024_09_28_133529_create_attendances_table', 2),
(206, '2024_09_29_040923_create_leaves_table', 2),
(207, '2024_09_29_141644_create_businesses_table', 2),
(208, '2024_09_29_141706_create_apps_table', 2),
(209, '2024_09_29_141718_create_webs_table', 2),
(210, '2024_09_29_141800_create_digitals_table', 2),
(211, '2024_09_29_141856_create_designs_table', 2),
(212, '2024_09_30_051715_create_addtasks_table', 2),
(213, '2024_10_01_195050_create_teams_table', 2),
(214, '2024_10_04_080004_create_allworks_table', 2),
(215, '2024_10_04_082127_add_dept_to_teams_table', 2),
(216, '2024_10_04_092430_create_myschedules_table', 2),
(217, '2024_10_04_123124_add_user_id_to_myschedules_table', 2),
(218, '2024_10_05_151302_add_department_to_attendances_table', 2),
(219, '2024_10_15_075453_add_status_to_leaves_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `myschedules`
--

CREATE TABLE `myschedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `deadline` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `des`, `dept`, `deadline`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Client Meeting', 'For  new Project', 'Web Development', '2024-10-12', 1, '2024-10-08 23:16:35', '2024-10-15 09:16:31'),
(2, 'Review Reports', 'Annual Reports of FInance', 'Business', '2024-10-09', 1, '2024-10-08 23:33:38', '2024-10-15 09:16:30'),
(3, 'Culture Check', 'A review on this', 'Design', '2024-10-10', 0, '2024-10-08 23:34:57', '2024-10-15 09:16:28'),
(4, 'Business Development', 'opportunities,  acquisitions, strategic alliences', 'Business', '2024-10-15', 0, '2024-10-08 23:37:57', '2024-10-15 09:16:26'),
(5, 'Review on customer Feedback', 'Make a report on this', 'App Development', '2024-10-20', 0, '2024-10-08 23:38:47', '2024-10-15 09:16:25'),
(6, 'Brands', 'Managing Brand Report', 'Digital Marketing', '2024-10-24', 0, '2024-10-08 23:39:15', '2024-10-15 09:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `team_members` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_joining` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `address`, `date_of_joining`, `email`, `email_verified_at`, `password`, `dept`, `designation`, `salary`, `file`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Mahmud Rabbi', '01779332884', 'Uttara 10', '2024-10-01', 'rabbi@yahoo.com', NULL, '$2y$10$7y2TTm1EqpbyGSvSVw6g3.p3dxTsKyXypa2HiIqQo0oXnouJiNlGO', 'Design', 'Motion Designer', 25000, '1728453327_Employeez.jpg', NULL, '2024-10-08 23:55:27', '2024-10-08 23:55:27'),
(6, 'Abdullah Bari', '01779332887', 'Mirpur 2,Dhaka', '2024-10-06', 'bari@123.gmail.com', NULL, '$2y$10$eJ0j8VIFttiF2yDbdCVYAug3WpaHib44ANX1nXlxm1BNjbtQmZQfC', 'Business', 'Business Development', 25000, '1728454139_formallllll.jpg', NULL, '2024-10-09 00:08:59', '2024-10-09 00:08:59'),
(8, 'Toa Hossain', '01779332887', 'ECB', '2024-09-01', 'toa@123gmail.com', NULL, '$2y$10$PXstrC8j09Zj1i812TwJLuxGdEW.WSMIz1SqKeewAK7EvSOU94IEy', 'App Development', 'Associate Software Engineer', 25000, '1728454454_formallllll.jpg', NULL, '2024-10-09 00:14:14', '2024-10-09 00:14:14'),
(9, 'Sumon Hossain', '01779332834', 'Nawabganj, Dhaka', '2024-08-01', 'sumon@gmail.com', NULL, '$2y$10$UPTQoqdE/d0KGouPLJlBAe582Y3ZzN3TEMY6iaoMO2UF/3D79quAa', 'Digital Marketing', 'Lead Marketer', 30000, '1728454601_formallllll.jpg', NULL, '2024-10-09 00:16:41', '2024-10-09 00:16:41'),
(10, 'Arko Mukherjee', '01779332844', 'Uttara 5', '2024-10-01', 'arko@gmail.com', NULL, '$2y$10$aY0GoqlrMaBG3LyOU1Tske8/eFCj8g1xdE4c/5fZUDUOV68l5QXne', 'Design', 'Motion Designer', 25000, '1728454774_formallllll.jpg', NULL, '2024-10-09 00:19:34', '2024-10-09 00:19:34'),
(11, 'Orpon Paul', '01779332812', 'Dhanmondi,32,Dhaka', '2024-10-01', 'orpo@gmail.com', NULL, '$2y$10$RaZ5EdLYZZGrVXCjyhovPOpDgJoK.SIdBgHFn85G7.Lg35O6iLvoe', 'Web Development', 'Associate Software Engineer', 25000, '1728454880_formallllll.jpg', NULL, '2024-10-09 00:21:20', '2024-10-09 00:21:20'),
(13, 'Sabbir', '01779332887', 'Uttara', '2024-10-30', 'sabbir@gmail.com', NULL, '$2y$10$8MjjqBNfmkwlO.13Cv/Dne2G/zyBkbJfLMoFkjjAle0068bCv1HCa', 'Web Development', 'software engineer', 40000, '1729147865_boyemp.png', NULL, '2024-10-17 00:51:06', '2024-10-17 00:51:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtasks`
--
ALTER TABLE `addtasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addtasks_client_id_foreign` (`client_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `allworks`
--
ALTER TABLE `allworks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `allworks_task_id_foreign` (`task_id`),
  ADD KEY `allworks_assigned_team_foreign` (`assigned_team`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `interns`
--
ALTER TABLE `interns`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `interns_email_unique` (`email`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leaves_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myschedules`
--
ALTER TABLE `myschedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `myschedules_user_id_foreign` (`user_id`);

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
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `addtasks`
--
ALTER TABLE `addtasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `allworks`
--
ALTER TABLE `allworks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interns`
--
ALTER TABLE `interns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `myschedules`
--
ALTER TABLE `myschedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addtasks`
--
ALTER TABLE `addtasks`
  ADD CONSTRAINT `addtasks_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `allworks`
--
ALTER TABLE `allworks`
  ADD CONSTRAINT `allworks_assigned_team_foreign` FOREIGN KEY (`assigned_team`) REFERENCES `teams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `allworks_task_id_foreign` FOREIGN KEY (`task_id`) REFERENCES `addtasks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `leaves`
--
ALTER TABLE `leaves`
  ADD CONSTRAINT `leaves_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `myschedules`
--
ALTER TABLE `myschedules`
  ADD CONSTRAINT `myschedules_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
