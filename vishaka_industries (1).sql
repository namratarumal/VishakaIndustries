-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 07:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vishaka_industries`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_tbls`
--

CREATE TABLE `category_tbls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) DEFAULT NULL,
  `category_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_tbls`
--

INSERT INTO `category_tbls` (`id`, `category_name`, `category_image`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'DOBBY BORDER TOWEL', 'DSC_2191.JPG', 'active', '2023-08-29 00:04:05', '2023-09-02 00:48:43'),
(2, 'RIBS TOWEL', 'DSC_2223.JPG', 'active', '2023-09-02 00:56:56', '2023-09-02 00:56:56'),
(3, 'JACQUARD VELOUR TOWEL', 'DSC_2250.JPG', 'active', '2023-09-02 00:58:06', '2023-09-02 00:58:06'),
(4, 'PROMOTIONAL TOWELS', 'WhatsApp Image 2019-09-23 at 12.16.46 PM.jpeg', 'active', '2023-09-02 00:58:39', '2023-09-02 00:58:39'),
(5, 'YARN JACQUARD BEACH VELOUR TOWEL', 'beach.jpg', 'active', '2023-09-02 00:59:58', '2023-09-02 00:59:58'),
(6, 'YARN DYED JACQUARD FOUTA TOWEL', 'GNH_5475 copy copy.JPG', 'active', '2023-09-02 01:01:03', '2023-09-02 01:01:03');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbls`
--

CREATE TABLE `contact_tbls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'empty',
  `email` varchar(255) NOT NULL DEFAULT 'empty',
  `subject` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) NOT NULL DEFAULT 'empty',
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_tbls`
--

INSERT INTO `contact_tbls` (`id`, `name`, `email`, `subject`, `mobile_no`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Mahesh', 'mahesh@gmail.com', 'subject', '9292929292', 'message', '2023-09-02 12:06:31', '2023-09-02 12:06:31'),
(2, 'youknow me', 'you@gmail.com', 'subject', '9933999999', 'message', '2023-09-02 12:08:25', '2023-09-02 12:08:25'),
(6, 'dasda', 'youknowmw@gmail.com', NULL, '7066121675', 'das', '2023-09-04 23:56:27', '2023-09-04 23:56:27'),
(7, 'asda', 'youknowmw@gmail.com', NULL, '7066121675', 'asd', '2023-09-04 23:56:41', '2023-09-04 23:56:41'),
(8, 'YouKnow Me', 'youknowmw@gmail.com', NULL, '7066121675', NULL, '2023-09-04 23:56:48', '2023-09-04 23:56:48'),
(9, 'YouKnow Me', 'youknowmw@gmail.com', NULL, '7066121675', NULL, '2023-09-04 23:56:57', '2023-09-04 23:56:57'),
(10, 'Mahesh Yangandul', 'maheshyangandul@gmail.com', NULL, '9145706236', NULL, '2023-09-04 23:57:02', '2023-09-04 23:57:02'),
(11, 'YouKnow Me', 'youknowmw@gmail.com', NULL, '7066121675', NULL, '2023-09-04 23:57:08', '2023-09-04 23:57:08'),
(12, 'YouKnow Me', 'youknowmw@gmail.com', NULL, '7066121675', NULL, '2023-09-04 23:57:13', '2023-09-04 23:57:13'),
(13, 'YouKnow Me', 'youknowmw@gmail.com', NULL, '7066121675', NULL, '2023-09-04 23:57:19', '2023-09-04 23:57:19'),
(14, 'Mahesh Yangandul', 'maheshyangandul@gmail.com', NULL, '9145706236', NULL, '2023-09-04 23:57:25', '2023-09-04 23:57:25'),
(15, 'Namrata Rumal', 'namrata@gmail.com', NULL, '8934225677', 'hdfsdufhuis', '2024-02-12 03:54:23', '2024-02-12 03:54:23');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_tbls`
--

CREATE TABLE `enquiry_tbls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiry_tbls`
--

INSERT INTO `enquiry_tbls` (`id`, `name`, `email`, `mobile_no`, `address`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Mahesh Yangandul', 'maheshyangandul@gmail.com', '9145706236', NULL, NULL, '2023-09-02 12:49:12', '2023-09-02 12:49:12'),
(3, 'Mahesh Yangandul', 'maheshyangandul@gmail.com', '9145706236', NULL, 'dasdfdasfa', '2023-09-04 00:02:04', '2023-09-04 00:02:04');

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
-- Table structure for table `feedback_tbls`
--

CREATE TABLE `feedback_tbls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback_tbls`
--

INSERT INTO `feedback_tbls` (`id`, `name`, `email`, `mobile_no`, `address`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Mahesh Yangandul', 'maheshyangandul@gmail.com', '9145706236', NULL, NULL, '2023-09-02 12:42:39', '2023-09-02 12:42:39'),
(3, 'Namrata Rumal', 'namrata@gmail.com', '8934225677', NULL, 'enquiry', '2024-02-12 03:56:15', '2024-02-12 03:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cid` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_tbls`
--

CREATE TABLE `login_tbls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login_tbls`
--

INSERT INTO `login_tbls` (`id`, `name`, `username`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user', '123', '', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_27_060344_create_products_tbls_table', 1),
(6, '2023_08_27_060355_create_category_tbls_table', 1),
(7, '2023_08_27_060417_create_contact_tbls_table', 1),
(8, '2023_08_27_060429_create_feedback_tbls_table', 1),
(9, '2023_08_27_060442_create_enquiry_tbls_table', 1),
(10, '2023_09_01_051051_create_login_tbls_table', 2),
(11, '2024_02_12_112702_create_galleries_table', 3);

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
-- Table structure for table `products_tbls`
--

CREATE TABLE `products_tbls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `materials` varchar(255) NOT NULL,
  `quality` varchar(255) NOT NULL,
  `use` varchar(255) NOT NULL,
  `sizes` varchar(255) NOT NULL,
  `gms` varchar(255) NOT NULL,
  `colors` varchar(255) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_tbls`
--

INSERT INTO `products_tbls` (`id`, `category_id`, `title`, `materials`, `quality`, `use`, `sizes`, `gms`, `colors`, `product_image`, `product_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Description', '100% cotton Bath Towel', 'Piece Dyed Dobby Border Bath Towel', 'Bath Sheet, Bath Towel, Hand Towel', '90X180, 75X150, 50X90, 40X60', '450', 'As Per Requirement', 'DSC_2191.JPG', 'active', '2023-08-29 00:05:30', '2023-08-29 00:05:30'),
(2, 2, 'Description', '100% cotton', 'Piece Dyed Ribs Bath Towel', 'Bath Towel, Hand Towel', '40X60, 50X90, 75X150 cms', '450', 'As Per Requirement', 'DSC_2223.JPG', 'active', '2023-09-02 01:13:10', '2023-09-02 01:13:10'),
(3, 3, 'Description', '100% cotton', 'Piece Dyed Jacquard Velour', 'Bath Towel, Hand Towel', 'Bath Towel, Hand Towel', '450', 'As Per Requirement', 'DSC_2250.JPG', 'active', '2023-09-02 01:14:32', '2023-09-02 01:14:32'),
(4, 4, 'Description', '100% cotton', 'Promotional Towel', 'Promotional Sets for Gift Purpose', '40X60, 50X90, 70X140', '450', 'As Per Requirement', 'WhatsApp Image 2019-09-23 at 12.16.46 PM.jpeg', 'active', '2023-09-02 01:16:53', '2023-09-02 01:16:53'),
(5, 5, 'Description', '100% cotton', '100% cotton', 'Beach', '100X180, 90X180, 80X160, 75X150', '380 to 450', 'As Per Requirement', 'beach.jpg', 'active', '2023-09-02 01:18:24', '2023-09-02 01:21:26'),
(6, 6, 'Description', '100% cotton', 'Fouta Towel', 'Beach Towel', '90X180, 80X160', '350', 'As Per Requirement', 'GNH_5475 copy copy.JPG', 'active', '2023-09-02 01:20:00', '2023-09-02 01:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_tbls`
--
ALTER TABLE `category_tbls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_tbls`
--
ALTER TABLE `contact_tbls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_tbls`
--
ALTER TABLE `enquiry_tbls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback_tbls`
--
ALTER TABLE `feedback_tbls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_tbls`
--
ALTER TABLE `login_tbls`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products_tbls`
--
ALTER TABLE `products_tbls`
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
-- AUTO_INCREMENT for table `category_tbls`
--
ALTER TABLE `category_tbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_tbls`
--
ALTER TABLE `contact_tbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `enquiry_tbls`
--
ALTER TABLE `enquiry_tbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback_tbls`
--
ALTER TABLE `feedback_tbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_tbls`
--
ALTER TABLE `login_tbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_tbls`
--
ALTER TABLE `products_tbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
