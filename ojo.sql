-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2024 at 02:57 AM
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
-- Database: `ojo`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NewImg` blob DEFAULT NULL,
  `NewText1` varchar(100) DEFAULT NULL,
  `NewText2` longtext DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `create` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `NewImg`, `NewText1`, `NewText2`, `slug`, `create`, `created_at`, `updated_at`) VALUES
(1, 0x313732343236393034362e6a7067, 'How to play dota 2 game', '<p>In the heart of the ancient forest, a small village thrived amidst towering trees and sparkling streams. The villagers, known for their craftsmanship, created beautiful, intricate artifacts that attracted visitors from far and wide. Each morning, the sun cast a golden hue over the village, illuminating the lush greenery and enhancing the vibrant colors of the artisans\' work. Children played in the meadows while elders shared stories of old. The harmony between nature and human effort was evident in every corner. As the seasons changed, the village adapted, celebrating festivals with joyous enthusiasm. Despite the challenges of time, the spirit of creativity and community remained strong, preserving their heritage and traditions for generations.</p>', 'how-to-play-dota-2-game', '2024-08-21 19:37:26', '2024-08-21 12:37:26', '2024-08-21 12:47:48'),
(2, 0x313732343237303130302e6a7067, 'ym yr mtym', '<p>sf dag tsj etj egtjjtd</p>', 'ym-yr-mtym', '2024-08-21 19:55:00', '2024-08-21 12:55:00', '2024-08-21 12:55:00'),
(3, 0x313732343237303131372e6a7067, 'sc sdbd', '<p>s FERH RFYK TUL&nbsp;</p>', 'sc-sdbd', '2024-08-21 19:55:17', '2024-08-21 12:55:17', '2024-08-21 12:55:17'),
(4, 0x313732343237303133312e6a7067, 'sc sdbd', '<p>&nbsp;FRHYT jultululj</p>', 'sc-sdbd-2', '2024-08-21 19:55:31', '2024-08-21 12:55:31', '2024-08-21 12:55:31'),
(5, 0x313732343237303135302e6a7067, 'rhbrsgnr fgm', '<p>&nbsp;dggjub</p>', 'rhbrsgnr-fgm', '2024-08-21 19:55:50', '2024-08-21 12:55:50', '2024-08-21 12:55:50');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `BrandImg` blob DEFAULT NULL,
  `BrandText` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `BrandImg`, `BrandText`, `created_at`, `updated_at`) VALUES
(1, 0x313732343238373532392e706e67, 'logo1', '2024-08-21 17:23:51', '2024-08-21 17:46:33'),
(3, 0x313732343238373534332e706e67, 'logo2', '2024-08-21 17:45:43', '2024-08-21 17:45:43'),
(4, 0x313732343238373535322e706e67, 'logo3', '2024-08-21 17:45:52', '2024-08-21 17:45:52'),
(5, 0x313732343238373535322e706e67, 'logo3', '2024-08-21 17:45:52', '2024-08-21 17:45:52'),
(6, 0x313732343238373536302e706e67, 'logo4', '2024-08-21 17:46:00', '2024-08-21 17:46:07'),
(7, 0x313732343238373537352e706e67, 'logo5', '2024-08-21 17:46:15', '2024-08-21 17:46:15'),
(8, 0x313732343238373538362e706e67, 'logo6', '2024-08-21 17:46:26', '2024-08-21 17:46:26'),
(10, 0x313732343238373631382e706e67, 'logo8', '2024-08-21 17:46:58', '2024-08-21 17:46:58'),
(11, 0x313732343238373632382e706e67, 'logo9', '2024-08-21 17:47:08', '2024-08-21 17:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(63, '0001_01_01_000000_create_users_table', 1),
(64, '0001_01_01_000001_create_cache_table', 1),
(65, '0001_01_01_000002_create_jobs_table', 1),
(66, '2024_08_19_214730_create_pages_table', 1),
(67, '2024_08_20_005821_create_portfolios_table', 1),
(68, '2024_08_20_010203_create_services_table', 1),
(69, '2024_08_20_011147_create_blogs_table', 1),
(70, '2024_08_20_133419_create_oauth_auth_codes_table', 1),
(71, '2024_08_20_133420_create_oauth_access_tokens_table', 1),
(72, '2024_08_20_133421_create_oauth_refresh_tokens_table', 1),
(73, '2024_08_20_133422_create_oauth_clients_table', 1),
(74, '2024_08_20_133423_create_oauth_personal_access_clients_table', 1),
(75, '2024_08_22_000237_create_brands_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `PortImg` blob DEFAULT NULL,
  `PortText1` varchar(100) DEFAULT NULL,
  `PortText2` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `PortImg`, `PortText1`, `PortText2`, `created_at`, `updated_at`) VALUES
(1, 0x313732343236393032392e6a7067, 'Some recent work All Web Design UI/UX Design Mobile Apps Logo Design', 'Logo', '2024-08-21 12:37:09', '2024-08-21 12:37:09'),
(2, 0x313732343238303831352e6a7067, 'www', 'Social Media', '2024-08-21 15:53:35', '2024-08-21 15:53:35'),
(3, 0x313732343238303832362e6a7067, 'OJO DIGITAL MARKETING', 'Logo', '2024-08-21 15:53:46', '2024-08-21 15:53:46'),
(4, 0x313732343238303833352e6a7067, 'hedtjdkg', 'Social Media', '2024-08-21 15:53:55', '2024-08-21 16:01:33'),
(5, 0x313732343238303834392e6a7067, 'Chan Thar Thu Kha Hospital', 'Social Media', '2024-08-21 15:54:09', '2024-08-21 15:54:09'),
(6, 0x313732343238303836352e6a7067, 'gd ng', 'Social Media', '2024-08-21 15:54:25', '2024-08-21 15:54:25'),
(7, 0x313732343238303838312e6a7067, 'svd dvds sffbc', 'Social Media', '2024-08-21 15:54:41', '2024-08-21 15:54:41'),
(8, 0x313732343238303839352e6a7067, 'Logo Design', 'Logo', '2024-08-21 15:54:55', '2024-08-21 15:54:55'),
(9, 0x313732343238303930392e6a7067, 'gd ng sfh  htd', 'Social Media', '2024-08-21 15:55:09', '2024-08-21 15:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ServiceImg1` blob DEFAULT NULL,
  `ServiceImg2` blob DEFAULT NULL,
  `ServiceText1` varchar(100) DEFAULT NULL,
  `ServiceText2` longtext DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `ServiceImg1`, `ServiceImg2`, `ServiceText1`, `ServiceText2`, `slug`, `created_at`, `updated_at`) VALUES
(1, 0x313732343237363130322e706e67, 0x313732343237363132372e6a7067, 'UI/UX DESIGN', '<p>In the heart of the ancient forest, a small village thrived amidst towering trees and sparkling streams. The villagers, known for their craftsmanship, created beautiful, intricate artifacts that attracted visitors from far and wide. Each morning, the sun cast a golden hue over the village, illuminating the lush greenery and enhancing the vibrant colors of the artisans\' work. Children played in the meadows while elders shared stories of old. The harmony between nature and human effort was evident in every corner. As the seasons changed, the village adapted, celebrating festivals with joyous enthusiasm. Despite the challenges of time, the spirit of creativity and community remained strong, preserving their heritage and traditions for generations.</p>', 'ui-ux-design', '2024-08-21 12:29:39', '2024-08-21 14:35:27'),
(2, 0x313732343237363136352e706e67, 0x313732343237363136352e6a7067, 'social media', '<p>ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;</p>', 'ui-ux-design-2', '2024-08-21 14:36:05', '2024-08-21 14:36:25'),
(3, 0x313732343237363231302e706e67, 0x313732343237363231302e6a7067, 'content', '<p>ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;</p>', 'content', '2024-08-21 14:36:50', '2024-08-21 14:36:50'),
(4, 0x313732343237363234352e706e67, 0x313732343237363234352e6a7067, 'media buying', '<p>ads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjkads ajgpfdhjdoifhj tiihj[tphj tohjetdpjhzj[ptjk</p>', 'media-buying', '2024-08-21 14:37:25', '2024-08-21 16:52:40'),
(5, 0x313732343237363239352e706e67, 0x313732343237363239352e6a7067, 'motion video', '<p>ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;ylug;.gu;</p>', 'motion-video', '2024-08-21 14:38:15', '2024-08-21 14:38:15'),
(6, 0x313732343237363334312e706e67, 0x313732343237363334312e6a7067, 'social media marketing', '<p>&nbsp;.spboerj[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu[objeioghbteugu</p><p>&nbsp;</p>', 'social-media-marketing', '2024-08-21 14:39:02', '2024-08-21 16:52:50'),
(7, 0x313732343237363337362e706e67, 0x313732343237363337362e6a7067, 'Tiktok marketing', '<p>g oihgi hgfieh &nbsp;ifhdfbih0 fuboufb &nbsp;g oihgi hgfieh &nbsp;ifhdfbih0 fuboufbg oihgi hgfieh &nbsp;ifhdfbih0 fuboufbg oihgi hgfieh &nbsp;ifhdfbih0 fuboufbg oihgi hgfieh &nbsp;ifhdfbih0 fuboufbg oihgi hgfieh &nbsp;ifhdfbih0 fuboufbg oihgi hgfieh &nbsp;ifhdfbih0 fuboufbg oihgi hgfieh &nbsp;ifhdfbih0 fuboufbg oihgi hgfieh &nbsp;ifhdfbih0 fuboufbg oihgi hgfieh &nbsp;ifhdfbih0 fuboufbg oihgi hgfieh &nbsp;ifhdfbih0 fuboufbg oihgi hgfieh &nbsp;ifhdfbih0 fuboufbg oihgi hgfieh &nbsp;ifhdfbih0 fuboufbg oihgi hgfieh &nbsp;ifhdfbih0 fuboufbg oihgi hgfieh &nbsp;ifhdfbih0 fuboufb</p>', 'tiktok-marketing', '2024-08-21 14:39:36', '2024-08-21 14:39:36');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('G9c0Ija72NOQ2MdBWUBWV0kElSkiw4TXETcSt7mN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im5ldyI7YTowOnt9czozOiJvbGQiO2E6MDp7fX1zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfdG9rZW4iO3M6NDA6IlN3QU5uckZzV3N4RFRRdE8zUnNRd2JXVHhySndtU05iMG1Sd3FGdVkiO30=', 1724288216);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ojo', 'ojoadmin@gmail.com', NULL, '$2y$12$.NWmYDeUuDgLJrLDHew3NeKbqDyzfvv2CslgXaZu5z9FpxqZ5GgC2', NULL, '2024-08-21 12:23:11', '2024-08-21 12:23:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
