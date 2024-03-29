-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 07:06 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin@admin.com', '$2y$10$tQni4k0ibFsRfzPKCb3RaebATY8px4D5iOrio3TertXUhImrjHttO', NULL, NULL, '2022-03-19 14:09:23');

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `attendance` tinyint(4) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `employee_id`, `attendance`, `date`, `month`, `year`, `created_at`, `updated_at`) VALUES
(19, 4, 0, '2022-02-22', 'february', '2022', '2022-02-22 14:17:44', '2022-02-22 14:17:44'),
(26, 4, 0, '2022-03-02', 'march', '2022', '2022-03-02 09:48:20', '2022-03-02 09:48:20'),
(27, 6, 0, '2022-03-02', 'march', '2022', '2022-03-02 09:48:20', '2022-03-02 09:48:20'),
(28, 7, 0, '2022-03-02', 'march', '2022', '2022-03-02 09:48:20', '2022-03-02 09:48:20'),
(29, 8, 0, '2022-03-02', 'march', '2022', '2022-03-02 09:48:20', '2022-03-02 09:48:20'),
(30, 4, 0, '2022-03-12', 'march', '2022', '2022-03-12 10:28:03', '2022-03-12 10:28:03'),
(31, 6, 1, '2022-03-12', 'march', '2022', '2022-03-12 10:28:03', '2022-03-12 10:28:03'),
(32, 7, 1, '2022-03-12', 'march', '2022', '2022-03-12 10:28:03', '2022-03-12 10:28:03'),
(33, 8, 1, '2022-03-12', 'march', '2022', '2022-03-12 10:28:03', '2022-03-12 10:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `contact_inquiries`
--

CREATE TABLE `contact_inquiries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `mobile` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `created_at`, `updated_at`, `status`, `mobile`, `address`, `state`, `city`, `designation`, `salary`, `photo`, `experience`, `joining_date`) VALUES
(4, 'Hawa', 'hawa@gmail.com', '2022-02-20 13:44:58', '2022-03-18 21:48:23', 0, '0731512383', 'Kabul', 'center', 'Shar -e- Now', 'Operation Manager', '40000', '/images/1.png', '10', '2022-02-24'),
(6, 'Khadija', 'khadija_sadiqi@gmail.com', '2022-02-22 23:08:31', '2022-03-18 21:42:19', 0, '0799889900', 'kabul', 'paghmad', 'Qargha', 'Software Developer', '100000', '/images/avatar-02.jpg', '2 Year', '2022-02-01'),
(7, 'Aqsa', 'aqsa@gmail.com', '2022-02-22 23:20:42', '2022-03-18 21:49:43', 0, '0797224252', 'Baghlan', 'Pulkhumery', 'Pulkhumery', 'Engineer', '15000', '/images/9-small.png', '1 Year', '2021-12-01'),
(8, 'Hina', 'hina@gmail.com', '2022-02-22 23:23:35', '2022-03-18 21:45:06', 0, '0799476694', 'Herat', 'Center', 'Herat', 'Engineer', '20000', '/images/bg-title-01.jpg', '3', '2022-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `employee_salaries`
--

CREATE TABLE `employee_salaries` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `month` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `absents` int(11) DEFAULT NULL,
  `presents` int(11) DEFAULT NULL,
  `generated_salary` decimal(12,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deducted_salary` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_salaries`
--

INSERT INTO `employee_salaries` (`id`, `employee_id`, `month`, `year`, `absents`, `presents`, `generated_salary`, `created_at`, `updated_at`, `deducted_salary`) VALUES
(1, 5, 'february', '2022', 1, 4, '99000.00', '2022-02-22 14:27:56', '2022-02-22 14:27:56', '1000.00'),
(2, 4, 'february', '2022', 1, 4, '38333.33', '2022-02-22 15:57:19', '2022-02-22 15:57:19', '1666.67'),
(3, 6, 'february', '2022', 0, 1, '10000.00', '2022-03-02 09:49:54', '2022-03-02 09:49:54', '0.00');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(5, '2019_04_24_144756_create_attendances_table', 3),
(6, '2022_02_20_195149_create_admins_table', 0),
(7, '2022_02_20_195149_create_attendances_table', 0),
(8, '2022_02_20_195149_create_employees_table', 0),
(9, '2022_02_20_195149_create_failed_jobs_table', 0),
(10, '2022_02_20_195149_create_password_resets_table', 0),
(11, '2022_02_20_195149_create_personal_access_tokens_table', 0),
(12, '2022_02_20_195149_create_products_table', 0),
(13, '2022_02_20_195149_create_purchase_materials_table', 0),
(14, '2022_02_20_195149_create_suppliers_table', 0),
(15, '2022_02_20_195149_create_users_table', 0),
(16, '2022_02_20_195151_add_foreign_keys_to_attendances_table', 0),
(17, '2022_03_31_082843_create_notifications_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('26bd0491-da7b-4730-b7de-135d0dc010a1', 'App\\Notifications\\OrderPlaced', 'App\\Models\\Admin', 2, '{\"title\":\"New Order\",\"amount\":1050,\"invoice_id\":13}', '2022-04-01 12:13:29', '2022-04-01 12:12:38', '2022-04-01 12:13:29'),
('abeabf9f-f065-443f-81d5-f70f899c1449', 'App\\Notifications\\OrderPlaced', 'App\\Models\\Admin', 2, '{\"title\":\"New Order\",\"amount\":400,\"invoice_id\":12}', '2022-04-01 11:51:25', '2022-04-01 11:50:41', '2022-04-01 11:51:25');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `discount` int(25) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `order_date` date NOT NULL,
  `status` enum('Pending','Delivered','Cancelled') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(12,2) NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `created_at`, `updated_at`, `quantity`, `discount`, `user_id`, `order_date`, `status`, `amount`, `address`, `city`, `state`, `phone`, `payment_method`, `notes`) VALUES
(8, 10, '2022-03-20 22:31:52', '2022-03-20 22:31:52', 6, 0, 8, '2022-02-21', NULL, '594.00', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 10, '2022-03-25 03:05:45', '2022-03-25 03:40:29', 1, 4, 4, '2022-03-10', NULL, '100.00', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 10, '2022-03-25 03:39:36', '2022-03-25 03:39:36', 2, 4, 3, '2022-03-11', NULL, '192.00', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 10, '2022-03-25 03:53:58', '2022-03-25 03:53:58', 1, 1, 9, '2022-03-01', NULL, '99.00', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 11, '2022-04-01 12:12:38', '2022-04-01 12:14:30', 3, 2, 11, '2022-04-01', NULL, '1050.00', 'Culpa deserunt temp', 'Illo commodi sit eu', 'Ut consequat Eum si', 'Culpa deserunt temp', 'Bank Transfer', 'Dolor aspernatur ame'),
(14, 11, '2022-04-03 11:39:50', '2022-04-03 11:39:50', 2, 2, 9, '2022-04-14', NULL, '672.00', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 11, '2022-04-03 12:23:12', '2022-04-03 12:23:12', 3, 4, 10, '2022-03-10', NULL, '924.00', NULL, NULL, NULL, NULL, NULL, NULL);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'AppToken', '69870d639f9095b11ed10c5c1edbe5d071517231a14d82beb4e65a1f72d82983', '[\"*\"]', NULL, '2022-01-30 02:40:29', '2022-01-30 02:40:29'),
(2, 'App\\Models\\User', 1, 'AppToken', 'eb82a51d35e5caf53b596f42e86b670bdbb0274d6c9b9306c4f5433df265def1', '[\"*\"]', NULL, '2022-01-30 02:44:21', '2022-01-30 02:44:21'),
(3, 'App\\Models\\User', 1, 'AppToken', '18f81a2dc7d9db08a3252893567bcb156842c99c66877ba28d269a6d3105bf83', '[\"*\"]', NULL, '2022-01-30 02:46:03', '2022-01-30 02:46:03'),
(4, 'App\\Models\\User', 1, 'AppToken', 'd29dc03f34cd6d7c0d6ca5b81287bc469d04c9909239cfba23097d9cbc4e0c35', '[\"*\"]', NULL, '2022-01-30 02:46:31', '2022-01-30 02:46:31'),
(5, 'App\\Models\\User', 1, 'AppToken', 'e2b4da85c5b59ec3655bdd20e3d21687eab04af9dba8ef016446c661d19fc9d0', '[\"*\"]', NULL, '2022-01-30 02:47:26', '2022-01-30 02:47:26'),
(6, 'App\\Models\\User', 1, 'AppToken', '20fd5cbfb3b653e94cdb1ed1bf6505dc38a5e107b092022ce84dfa8961052431', '[\"*\"]', NULL, '2022-01-30 03:14:57', '2022-01-30 03:14:57'),
(7, 'App\\Models\\User', 1, 'AppToken', '7ec2e5ff39800a8defbd921107612411f6691ad9b42a3c728ff39f8f7f3befe0', '[\"*\"]', NULL, '2022-01-30 03:21:05', '2022-01-30 03:21:05'),
(8, 'App\\Models\\User', 1, 'AppToken', '0e73b4afa3ec7b55a59cb606019b4ca8a0cdb4a5ec1194ab8a4ef88a8817aa4a', '[\"*\"]', NULL, '2022-01-30 03:22:19', '2022-01-30 03:22:19'),
(9, 'App\\Models\\User', 1, 'AppToken', 'f4905c1a9148d2331f05434dcc97df49ae303bab5765cf63cf70f679dd6085d4', '[\"*\"]', NULL, '2022-01-30 03:22:27', '2022-01-30 03:22:27'),
(10, 'App\\Models\\User', 1, 'AppToken', '8347ad089730a9777db125cdfd9f57d0254dec427aeac61250e26e8255e8669e', '[\"*\"]', NULL, '2022-01-30 03:24:01', '2022-01-30 03:24:01'),
(11, 'App\\Models\\User', 3, 'AppToken', 'f88948c0e6bc79f52bddb56d6b6a597f27a4ac59921b602ba6b881c46785327f', '[\"*\"]', NULL, '2022-02-21 10:44:41', '2022-02-21 10:44:41'),
(12, 'App\\Models\\User', 3, 'AppToken', 'bcd1f0f4203d0c560ecb1bc13290b75f27454b471798808343cc961ef19997b2', '[\"*\"]', '2022-02-21 11:54:18', '2022-02-21 10:45:27', '2022-02-21 11:54:18'),
(13, 'App\\Models\\User', 2, 'AppToken', '619df246f15b678deadfd90daa9bbbed7189c5bcdc7b8de88fa03f6a3cf49e4f', '[\"*\"]', '2022-02-21 11:58:03', '2022-02-21 11:57:54', '2022-02-21 11:58:03'),
(14, 'App\\Models\\User', 2, 'AppToken', '4df6b30f469299eb626b4a76a6d07764f3615be278d79be4b5598ab31d05f5ab', '[\"*\"]', NULL, '2022-02-21 12:02:32', '2022-02-21 12:02:32'),
(15, 'App\\Models\\User', 1, 'AppToken', '2d64b0fedabe3a5aa2615d844e9c2fbb0d8484a4dbde67526a4208696692eed8', '[\"*\"]', NULL, '2022-02-21 13:33:44', '2022-02-21 13:33:44'),
(16, 'App\\Models\\User', 4, 'AppToken', '08b360781f866f3029cbb8a6fd2a427701728946612736ef90c753fea0703ffb', '[\"*\"]', NULL, '2022-02-22 14:11:43', '2022-02-22 14:11:43'),
(17, 'App\\Models\\User', 4, 'AppToken', '21e78c139abb07842e6cc6e7058f742b2b8ed8892ab1cdde82f3b2d3afca47aa', '[\"*\"]', NULL, '2022-02-23 00:52:55', '2022-02-23 00:52:55'),
(18, 'App\\Models\\User', 4, 'AppToken', 'b38781ec15143936279a59e031b040e5f7f7d92beb535100f05ac66c21f50020', '[\"*\"]', NULL, '2022-02-23 01:08:27', '2022-02-23 01:08:27'),
(19, 'App\\Models\\User', 6, 'AppToken', '87d508279c60e912a2909fe3e860fcaf6d7fbb358d478a907361b8a804786285', '[\"*\"]', NULL, '2022-03-02 09:28:25', '2022-03-02 09:28:25'),
(20, 'App\\Models\\User', 4, 'AppToken', 'f1a262e3415cce01e6c743acaaf13ae2b43feae52be639ed3806ab43a2bf6571', '[\"*\"]', NULL, '2022-03-10 10:35:13', '2022-03-10 10:35:13'),
(21, 'App\\Models\\User', 4, 'AppToken', '16eea9d9ed4afe9250057e25247c766ffda55eeceff853dc5c3f109825894949', '[\"*\"]', NULL, '2022-03-10 11:08:55', '2022-03-10 11:08:55'),
(22, 'App\\Models\\User', 7, 'AppToken', '2c61b20f5fd31d5f6b5bbb03047be3a6a8e95d6d3e8a2f128db5679ebae7a796', '[\"*\"]', NULL, '2022-03-11 05:36:42', '2022-03-11 05:36:42'),
(23, 'App\\Models\\User', 7, 'AppToken', 'b799c437af299fbd9509e81340dfe2ed51a16a4f67479d53eb06d56f74ec2969', '[\"*\"]', NULL, '2022-03-11 23:04:48', '2022-03-11 23:04:48'),
(24, 'App\\Models\\User', 7, 'AppToken', '1513f7c470f4902e2fe69dae490730d9b7c266f33afcc231543f6a0f81346010', '[\"*\"]', NULL, '2022-03-12 10:21:57', '2022-03-12 10:21:57'),
(25, 'App\\Models\\User', 7, 'AppToken', 'c7d03a291cf783a28009cccf77d697fa5ddabf35b3f249dbfcdcc22ffb8d9b7c', '[\"*\"]', NULL, '2022-03-14 06:44:58', '2022-03-14 06:44:58'),
(26, 'App\\Models\\User', 8, 'AppToken', '91ae32b6c1797f2ef8c88c8c1414507bf6df1f41eed51d6c8d33084b5761e38a', '[\"*\"]', NULL, '2022-03-14 14:20:44', '2022-03-14 14:20:44'),
(27, 'App\\Models\\User', 9, 'AppToken', '2558e0ee6091d98578712c41143c4c95daf18c239bf479009c70ecbb8d20bb36', '[\"*\"]', NULL, '2022-03-21 02:18:25', '2022-03-21 02:18:25'),
(28, 'App\\Models\\User', 10, 'AppToken', '375e77af9c54ad844677a55c624a7069f3ddc77a9c14c131ac9a044e9ffae58c', '[\"*\"]', NULL, '2022-03-28 13:19:08', '2022-03-28 13:19:08'),
(29, 'App\\Models\\User', 11, 'AppToken', '78a99fab60a4bf0b681f87587d8bb5ad7c710aab9765b1d77d4438cd03e9f623', '[\"*\"]', '2022-04-01 12:12:38', '2022-04-01 11:47:12', '2022-04-01 12:12:38');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `discounted_price` double(10,2) NOT NULL,
  `description` text NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `discounted_price`, `description`, `image1`, `image2`, `created_at`, `updated_at`) VALUES
(10, 'Choco Cake', 101.00, 100.00, 'That is very nice cake.\r\nI like that cake.', '/images/product-14.jpg', NULL, '2022-03-18 22:36:44', '2022-03-25 03:02:48'),
(11, 'oil', 400.00, 350.00, 'This is very nice product', '/images/product-5.jpg', NULL, '2022-03-22 11:57:05', '2022-03-22 12:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `product_comments`
--

CREATE TABLE `product_comments` (
  `id` bigint(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_comments`
--

INSERT INTO `product_comments` (`id`, `product_id`, `name`, `rating`, `comment`, `created_at`, `updated_at`, `email`) VALUES
(1, 1, 'Consequatur reprehen', 4, 'Aute eius minima eum', '2022-02-21 08:25:22', '2022-02-21 08:25:22', 'lupuxudyl@mailinator.com'),
(2, 1, 'Autem pariatur Cons', 0, 'Optio unde illo dol', '2022-02-21 08:29:28', '2022-02-21 08:29:28', 'qiqa@mailinator.com'),
(3, 1, 'Totam in sunt quibus', 0, 'Quia sunt dolor hic', '2022-02-21 08:29:35', '2022-02-21 08:29:35', 'bexacezan@mailinator.com'),
(4, 1, 'Totam in sunt quibus', 3, 'Quia sunt dolor hic', '2022-02-21 08:29:37', '2022-02-21 08:29:37', 'bexacezan@mailinator.com'),
(5, 1, 'Totam in sunt quibus', 5, 'Quia sunt dolor hic', '2022-02-21 08:29:43', '2022-02-21 08:29:43', 'bexacezan@mailinator.com'),
(6, 1, 'Commodi a fugiat cor', 0, 'Et laborum non sapie', '2022-02-21 08:31:14', '2022-02-21 08:31:14', 'hefotiz@mailinator.com'),
(7, 1, 'Accusantium qui saep', 5, 'Voluptas omnis labor', '2022-02-21 08:32:46', '2022-02-21 08:32:46', 'lesy@mailinator.com'),
(8, 1, 'shoaib', 5, 'testing', '2022-02-21 08:33:53', '2022-02-21 08:33:53', 'mocoti@mailinator.com'),
(9, 1, 'Yuli Farrell1', 5, 'test', '2022-02-21 12:04:47', '2022-02-21 12:04:47', 'gutulusix@mailinator.com'),
(10, 1, 'wafiullah', 4, 'Deserunt fuga Optio', '2022-02-22 14:12:23', '2022-02-22 14:12:23', 'wafi@gmail.com'),
(11, 8, 'wafiullah', 3, 'that product is great', '2022-02-23 00:53:43', '2022-02-23 00:53:43', 'wafi@gmail.com'),
(12, 7, 'wafiullah', 4, 'Fugiat pariatur Per', '2022-02-23 01:08:57', '2022-02-23 01:08:57', 'wafi@gmail.com'),
(13, 8, 'wafiullah', 5, 'I like taht meats', '2022-02-23 23:33:53', '2022-02-23 23:33:53', 'wafi@gmail.com'),
(14, 8, 'wafiullah', 1, 'I like that meats', '2022-02-23 23:36:21', '2022-02-23 23:36:21', 'wafi@gmail.com'),
(15, 8, 'ahmad', 5, 'Dolorem ut veniam n', '2022-03-02 09:29:44', '2022-03-02 09:29:44', 'admin@admin.com'),
(16, 7, 'wafiullah', 3, 'this is very nice project', '2022-03-10 10:36:01', '2022-03-10 10:36:01', 'wafi@gmail.com'),
(17, 5, 'wafiullah', 4, 'Saepe reiciendis ull', '2022-03-12 10:22:38', '2022-03-12 10:22:38', 'wafiullah@gmail.com'),
(18, 5, 'wafiullah', 5, 'Saepe reiciendis ull\n\n\n\n\n\n\n\n\n\nthis id', '2022-03-12 10:23:32', '2022-03-12 10:23:32', 'wafiullah@gmail.com'),
(19, 5, 'wafiullah', 5, 'Saepe reiciendis ull\n\n\n\n\n\n\n\n\n\nthis id dddddddd', '2022-03-12 10:23:49', '2022-03-12 10:23:49', 'wafiullah@gmail.com'),
(20, 10, 'mayar', 3, 'this is very', '2022-03-28 13:19:50', '2022-03-28 13:19:50', 'mayar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_materials`
--

CREATE TABLE `purchase_materials` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` decimal(12,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `supplier_id` int(11) NOT NULL,
  `total_amount` decimal(12,0) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_date` date NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_materials`
--

INSERT INTO `purchase_materials` (`id`, `title`, `unit_price`, `created_at`, `updated_at`, `supplier_id`, `total_amount`, `description`, `unit`, `purchase_date`, `quantity`) VALUES
(3, 'Potatoes', '25', '2022-02-20 14:36:36', '2022-02-20 14:45:11', 1, '25000', 'Potatoes', 'Kg', '2022-02-22', 25),
(4, 'oil', '100', '2022-02-22 14:37:35', '2022-02-22 14:37:35', 2, '1200', 'oil is very expensive', 'Lt', '2022-02-01', 12);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `email`, `created_at`, `updated_at`, `address`, `mobile`) VALUES
(1, 'Muhammad Nasir', 'mnasir@gmail.com', '2022-02-20 08:17:40', '2022-03-18 21:52:28', 'Kabul', '0781234567'),
(2, 'Sadaf Sadiqi', 'sadaf@gmail.com', '2022-02-21 00:30:33', '2022-03-18 21:51:36', 'Ghazni', '0776467017');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Nasim Allison', 'nasim@gmail.com', NULL, '$2y$10$BoOM2B/UD31q3aLmbHgJm.s7qXB8kKOjVT2bOZSiaSAXvIQ9DziNy', NULL, '2022-02-21 00:07:25', '2022-03-18 21:35:27', 0),
(2, 'Sina', 'sina@gmail.com', NULL, '$2y$10$uQD8kvzsPHTGD61qiPG08Oqo/oIRciwUy9W.cuYIsV2GytQeo3ICa', NULL, '2022-02-21 10:36:50', '2022-03-18 21:37:04', 0),
(3, 'Rhona', 'rhona@gmail.com', NULL, '$2y$10$cQbzAIFKTtwvRaeH3MERtOkqckOKbB302p5VCrKvEKb8OwqmlRT/S', NULL, '2022-02-21 10:42:24', '2022-03-18 21:34:43', 0),
(4, 'wafiullah', 'wafi@gmail.com', NULL, '$2y$10$UdnwNj3QD8FAzXxp78vxieNL5gretNNfb/FgZczGa0SfCzLUad8wO', NULL, '2022-02-22 14:11:29', '2022-02-22 14:11:29', 0),
(6, 'ahmad', 'admin@admin.com', NULL, '$2y$10$PWYqJyoW2cXDJZaAmWWjYutyiGrTzB2imykVgMLesmpe9lW5Ok1/G', NULL, '2022-03-02 09:28:12', '2022-03-02 09:28:12', 0),
(7, 'Shima', 'shima@gmail.com', NULL, '$2y$10$y7Y9txLzaa0ZgqjJLGeF0OAOUJweStNwG85M72oFU1HjrAJ1wO/XW', NULL, '2022-03-11 05:36:11', '2022-03-18 21:38:11', 0),
(8, 'khadija', 'khadija@gmail.com', NULL, '$2y$10$.aCehSaCBedqQtqRCxmKku4yzeKX9pVc.7Y9Q2rPgDgC.0MA5bjj.', NULL, '2022-03-14 14:20:30', '2022-03-14 14:20:30', 0),
(9, 'wafi', 'w@gmail.com', NULL, '$2y$10$9FaEM2zqB0IiQm79.iC2/OUukjTB1xNDZDYTcI8UHtMkejotJc5Py', NULL, '2022-03-21 02:18:05', '2022-03-21 02:18:05', 0),
(10, 'mayar', 'mayar@gmail.com', NULL, '$2y$10$ryJhc8DhCETSjZmPk05UP.DF4MGxxkL89aIFw3C43Hb52oo18EsN2', NULL, '2022-03-28 13:18:55', '2022-03-28 13:18:55', 0),
(11, 'wafiwafi', 'wafiwafi@gmail.com', NULL, '$2y$10$xrVHmxCUEkvPpo8sds7RKOWsNz9.DrPGXYwN/odJR0KjnQGwn.WcC', NULL, '2022-04-01 11:46:57', '2022-04-01 11:46:57', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendances_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `contact_inquiries`
--
ALTER TABLE `contact_inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `employee_salaries`
--
ALTER TABLE `employee_salaries`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_materials`
--
ALTER TABLE `purchase_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `contact_inquiries`
--
ALTER TABLE `contact_inquiries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee_salaries`
--
ALTER TABLE `employee_salaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `purchase_materials`
--
ALTER TABLE `purchase_materials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
