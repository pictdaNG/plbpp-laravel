-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2019 at 07:31 AM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.2.21-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plbpp`
--

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
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2019_04_24_143504_create_procurements_table', 1);

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
-- Table structure for table `procurements`
--

CREATE TABLE `procurements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contractor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract_sum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_award` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `procuring_entity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `procurements`
--

INSERT INTO `procurements` (`id`, `serial`, `project_title`, `contractor`, `contract_sum`, `date_of_award`, `procuring_entity`, `lga`, `created_at`, `updated_at`) VALUES
(1, '1', 'Construction of Mararaban Demshin -Shimankar Road (Road 1 Section 1).', 'Tongyi Engr. Nig. Ltd', '  843,815,577.31 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(2, '2', 'Construction of Spurs from Demshin-A/Dadi-Kalong-Nyak Shargang- A/Rina (Road 1 Section 2).', 'EEC Int. Ltd', '  2,760,883,083.80 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(3, '3', 'Rehabilitation of Dokan Tofa-Ba\'ap-Kurgwi Road with Spur to Bwali (Road 2 Section 1)', 'EEC Int. Ltd', '  4,149,228,121.70 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(4, '4', 'Rehabilitation of Spurs to Lardang-Tim and Kwoor Loop (Road 2 Section 2)', 'Champion Construction Nig. Ltd', '  1,040,486,610.32 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(5, '5', 'Construction of Shinkwan-Tunkus (Shendam Bye Pass (Road 3)', 'PW Nig. Ltd.', '  1,284,219,015.84 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(6, '6', 'Construction of Wase-Kadarko-Dadin Kowa -Mabudi Road (Road 4)', 'EEC Int. Ltd', '  4,420,192,938.40 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(7, '7', 'Construction of Dengi-Bashar-Gajin Bashar Road (Road 5).', 'H & M engr. Nig. Ltd', '  811,716,837.75 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(8, '8', 'Construction Of Dengi-Kwalmiya-Dagub-Gagdi Road (Road 6).', 'RIC Rock Int. LTd', '  3,244,387,022.25 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(9, '9', 'Construction of Dawaki-Gyanggyang Road (Road 7 Section 2).', 'AVI Construction Nig. Ltd.', '  376,184,561.92 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(10, '10', 'Construction of Somji-Seri-Amper Road (road 7 Section 2).', 'Admoak Const. Int. Nig. Ltd', '  1,307,995,586.23 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(11, '11', 'Construction of Lankang-Dyis-Kagu-Sihin road (Road 8)', 'Moulds Nig. Ltd', '  2,086,006,570.06 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(12, '12', 'Construction of Mangu Bye Pass (Road 9).', 'PW Nig. Ltd.', '  3,768,155,307.00 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(13, '13', 'Construction of Kuba-Tenti-Manguna-Daffo Road (Road 10).', 'Moulds Nig. Ltd', '  2,618,344,192.02 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(14, '14', 'Construction of Kpasho-Kogom-Vwang with Spur to Vom Vet (Road 11).', 'Ell Service', '  893,626,259.97 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(15, '15', 'Construction of Bet-Lobiring-Dorowa Road (Road 12 Section 1).', 'Griffins Const. Ltd', '  880,322,308.00 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(16, '16', 'Construction of Dorowa-Mazat-Kuba Road with Spur to Nding (Road 12 Section 2)', 'Bindigari Const. Ltd', '  813,156,941.00 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(17, '17', 'Construction of Fobur-Naton-Fursa-Maijuju Road (Road 13 Section 1)', 'Moulds Nig. Ltd', '  1,846,249,184.59 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(18, '18', 'Construction of Maijuju-Zandi Road (Road 13 Section 2)', 'Deux Project Ltd', '  1,069,524,641.19 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(19, '19', 'Construction of Tahoss-Ganawuri Road (Road 14 Section 1).', 'PW Nig. Ltd.', '  1,193,380,519.16 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(20, '20', 'Construction of Spur to Dahreng-Spur to Koronfang-Hawan Kibo (Road 14 Section 2).', 'Jodalsam Global Ltd', '  824,881,543.95 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(21, '21', 'Construction of Wase-Mavo-Gimbi Road (Road 15)', 'EEC Int. Ltd', '  1,592,474,999.22 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(22, '22', 'Construction of Lohmak-Gazun Road with a spur to Kumkwam (Road 16)', 'Net Track Global', '  492,290,065.48 ', '7/8/2017', 'MINISTRY OF WORKS', '', NULL, NULL),
(23, '23', 'Construction of Standard Mini Fuel Dump with Service Pits', 'Emptech Oil and Gas Nig. Ltd.', '  118,000,000.00 ', '17/11/2017', 'GOVERNMENT HOUSE ADMINISTRATION', '', NULL, NULL),
(24, '24', 'Production of 2018 Wall and Table Top Calenders', 'Integrated Masterz Concepts', '  31,000,000.00 ', '7/12/2017', 'MINISTRY OF INFORMATION AND COMMUNICATION', '', NULL, NULL),
(25, '25', 'Procurement of Opthalmological Equipment', 'Fedivine Ventures', '  62,584,444.97 ', '17/4/2017', 'MINISTRY OF HEALTH', '', NULL, NULL),
(26, '26', ' Identification of Intervention and Selection of High Priority Rural Roads in the 17 LGAs.', 'Pheman Peniel Consultants Ltd.', '  30,000,000.00 ', '10/5/2017', 'RURAL ACCESS AND AGRICULTURAL MARKETING PROGRAMME (RAAMP)', '', NULL, NULL),
(27, '', '', '', '', '', '', '', NULL, NULL),
(28, '', '  ', '', '', '', '', '', NULL, NULL);

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
-- Indexes for dumped tables
--

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
-- Indexes for table `procurements`
--
ALTER TABLE `procurements`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `procurements`
--
ALTER TABLE `procurements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
