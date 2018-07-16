-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2018 at 09:15 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bdcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `carnames`
--

CREATE TABLE `carnames` (
  `id` int(10) UNSIGNED NOT NULL,
  `car_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carnames`
--

INSERT INTO `carnames` (`id`, `car_name`) VALUES
(1, 'BUS'),
(2, 'Track'),
(3, 'MiniBus'),
(4, 'Motorbike');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(10) UNSIGNED NOT NULL,
  `carname_id` int(11) NOT NULL,
  `car_wheel` int(11) NOT NULL,
  `car_chasis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_metro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_reg_num` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_reg_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_insurence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_road_permit_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_engine_num` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `car_document_pdf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `carname_id`, `car_wheel`, `car_chasis`, `car_metro`, `car_reg_num`, `car_reg_date`, `car_insurence`, `car_road_permit_no`, `car_engine_num`, `car_pic`, `driver_id`, `owner_id`, `car_document_pdf`, `car_color`, `car_status`, `created_at`, `updated_at`) VALUES
(1, 3, 6, 'fa34543afa', 'Kushtia', 'Kushtia MA 37-5135', '2018-06-13', 'sadffasd234asdf', NULL, 'asdfasdf234234', 'http://localhost/BDCMS/public/Frontend/images/cars/6B3sKzLX1psZheRBI01aUJRhR7prZIHSBEDzVppz.png', NULL, NULL, 'http://localhost/BDCMS/public/Frontend/images/document/qnuhe8G43of0vPToCXtFnzA2Fwkv0puvFOxNXn52.bin', 'Yellow', 0, '2018-07-16 07:11:35', '2018-07-16 07:11:35');

-- --------------------------------------------------------

--
-- Table structure for table `car_status`
--

CREATE TABLE `car_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `owner_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `strat_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(10) UNSIGNED NOT NULL,
  `case_type_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `complainant_id` int(11) NOT NULL,
  `complainant_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `withdraw_id` int(11) NOT NULL,
  `withdraw_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `case_types`
--

CREATE TABLE `case_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `case_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_fine` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `driver_exp`
--

CREATE TABLE `driver_exp` (
  `id` int(10) UNSIGNED NOT NULL,
  `driver_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `strat_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2018_07_04_051319_create_cars_table', 1),
(4, '2018_07_04_051517_create_office_addresses_table', 1),
(5, '2018_07_04_051535_create_contacts_table', 1),
(6, '2018_07_04_051549_create_sliders_table', 1),
(7, '2018_07_04_051603_create_logos_table', 1),
(8, '2018_07_04_051616_create_notices_table', 1),
(9, '2018_07_04_051628_create_roles_table', 1),
(10, '2018_07_04_051647_create_carnames_table', 1),
(11, '2018_07_04_051711_create_case_types_table', 1),
(12, '2018_07_04_051726_create_cases_table', 1),
(13, '2018_07_05_131035_create_driver_exp_table', 1),
(14, '2018_07_05_131458_create_car_status_table', 1),
(15, '2018_07_15_080521_create_tbl_car_reg_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `not_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `not_pdf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `not_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `office_addresses`
--

CREATE TABLE `office_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `off_district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `off_upazilla` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `off_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `off_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `off_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `off_web` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_desc` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `role_desc`) VALUES
(1, 'SupperAdmin', 'SupperAdmin Inforamtions'),
(2, 'Owner', 'Owner Informations'),
(3, 'Driver', 'Driver Informations'),
(4, 'Zilla Admin', 'Zilla admin informations'),
(5, 'Upzilla Admin', 'Upzilla admin informations'),
(6, 'Surgent', 'Surgent Information');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car_reg`
--

CREATE TABLE `tbl_car_reg` (
  `id` int(10) UNSIGNED NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_car_reg`
--

INSERT INTO `tbl_car_reg` (`id`, `district`, `keyword`) VALUES
(1, 'Khulna', 'MA'),
(2, 'Kushtia', 'LA'),
(3, 'Khulna', 'GHA'),
(4, 'Dhaka', 'MA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_profile_pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `user_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_passport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_lisence` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_nid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_posting` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_identidy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_joining_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_fname`, `user_profile_pic`, `user_email`, `user_password`, `user_mobile`, `car_id`, `user_address`, `user_birthday`, `user_gender`, `driver_id`, `user_passport`, `user_lisence`, `user_nid`, `user_posting`, `user_identidy`, `user_joining_date`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Abdullah', 'Lutfore', 'http://localhost/BDCMS/public/Frontend/images/driver/default_driver.png', 'abdullah@gmail.com', '123456', '01969516500', '1', '15/1 , Nirala , Khulna, ShatKira', '1992-07-13', 'male', NULL, NULL, 'af153dsfa13asd35', '13513185351', NULL, NULL, NULL, 3, 'B9fYadu83oQ73LCS4Dmhx4efX', '2018-07-15 16:04:08', '2018-07-15 16:04:08'),
(5, 'Shariful Islam', 'Atiyer', 'http://localhost/BDCMS/public/Frontend/images/owner/H2yeUZ9iBEnLhpTKIeOq0bcn8GjgfuS5A2Si5Ec8.jpeg', 'shariful.info56@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01955646464', '1', '15/1 , Nirala , Khulna, Bangladesh', '1992-07-11', 'male', '4', NULL, NULL, '135163813514', NULL, NULL, NULL, 2, 'V30gj8V1PQqOtg1oqQDaPRY2P', '2018-07-16 07:11:36', '2018-07-16 07:11:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carnames`
--
ALTER TABLE `carnames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_status`
--
ALTER TABLE `car_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_types`
--
ALTER TABLE `case_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver_exp`
--
ALTER TABLE `driver_exp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_addresses`
--
ALTER TABLE `office_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_car_reg`
--
ALTER TABLE `tbl_car_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_email_unique` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carnames`
--
ALTER TABLE `carnames`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `car_status`
--
ALTER TABLE `car_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `case_types`
--
ALTER TABLE `case_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driver_exp`
--
ALTER TABLE `driver_exp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `office_addresses`
--
ALTER TABLE `office_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_car_reg`
--
ALTER TABLE `tbl_car_reg`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
