-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2024 at 04:20 PM
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
-- Database: `cleaning`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_body` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 for draft,1 for published, 2 for waiting, 3 for review',
  `published_at` datetime DEFAULT NULL,
  `index_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 for no-index,1 for index',
  `meta_image` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `slug`, `video_url`, `short_description`, `blog_body`, `status`, `published_at`, `index_status`, `meta_image`, `meta_title`, `meta_description`, `media`, `created_at`, `updated_at`) VALUES
(1, 1, 'What Do Customers Want In A Smash Repair Company?', 'what-do-customers-want-in-a-smash-repair-company', NULL, NULL, '<p>When choosing an automotive repair shop customers look out for many factors. Years ago people considered mere pricing and quality as the prime focus, but now the time has changed, and they consider multiple factors. Customers seek quality work, honesty, and experienced technicians who can restore their vehicles when choosing a <a href=\"https://alphasmashrepair.com.au/\">smash repair company Perth</a>. To help you, we have provided all the necessary details about what customers want in a repair company when they are searching for it. Let’s start.</p>\r\n<h2><b>What Customers Prioritize For a Smash Repair Shop?</b></h2>\r\n<p>Explore the valuable points that customers always consider while booking any automotive repair company to get rid of damaged vehicles. Check them out!</p><p>\r\n</p><h3><b>Quality of Work</b></h3>\r\n<p>The most obvious point is quality work. Customers must have surety that their car is in good hands. They know that your company is using avant garde tools and equipment to repair the body, bonnet, and panel of your car. Quality work means fixing the problem of cars within a time frame while maintaining the high standards. The points that define auto repair company quality work precisely.</p>\r\n<ul><li>Comprehensive inspection</li>\r\n<li>Genuine parts use</li>\r\n<li>Warranty on repairs</li>\r\n<li>Safety compliance</li></ul>\r\n<h3><b>Honesty and Transparency</b></h3>\r\n<p>Another valuable factor is honesty and transparency. It comes to play an essential role in fascinating clients with your auto repair shop. With this honesty factor, you can build and nurture best customer relations. Honestly tell the customers about the car problems and the total cost required to fix them. Do not make your clients tense with extra and hidden charges. Offer them with:</p>\r\n<ul><li>24/7 availability</li>\r\n<li>Honest assessments</li>\r\n<li>Customer consent</li>\r\n<li>Ethical practices</li></ul>\r\n<h3><b>Myriad Auto Repair Services</b></h3>\r\n<p>The auto repair shop should serve as a one stop solution. Whether the clients need towing, car wrapping, or dent repair services in Perth, the certified technicians are always ready to serve them. Explain the problem clearly to the clients, and select the service for their car to solve the issue on the spot. The comprehensive services offer a variety of benefits to clients.</p>\r\n<ul><li>Convenience</li>\r\n<li>Consistency</li>\r\n<li>Save time</li>\r\n<li>Simplified record keeping</li></ul>\r\n<h3><b>Communication and Customer Service</b></h3>\r\n<p>Communication and customer service do not mean you need to be merely nice to clients. Instead, it is more than this. You have to meet and greet them in a soft and friendly manner. Communicate with customers about the real car problems that need to be fixed. If they have queries, answer them on the spot. The right customer service depicts that you are concerned about your clients\' satisfaction a lot. You should give them:</p>\r\n<ul><li>Personalized attention</li>\r\n<li>Clear communication</li>\r\n<li>Follow up</li>\r\n<li>Prompt response</li></ul>\r\n<h3><b>Reputation and Reviews</b></h3>\r\n<p>Building a strong business reputation and getting optimistic client reviews is really to be in dire straits. You should show the clients a good track of delivering quality services. According to Brightlocal, 90% of people read online reviews before acquiring any repair services from businesses. Having satisfied customers helps your brand achieve more new intended clients. You can boost your business reputation with:</p>\r\n<ul><li>Awards and accolades</li>\r\n<li>Word of mouth</li>\r\n<li>Positive reviews</li>\r\n<li>Response to feedback</li></ul>\r\n<p>These are the valuable factors that clients pay attention to when opting for an auto repair shop.</p>\r\n<h3><b>Takeaways for Improving Clientele for Your Auto Repair Shop</b></h3>\r\nRemember clients will never be impressed with how beautifully you decorate your auto repair shop with materialistic things. There are many things to follow in this digital age for boosting the clientele other than how professionally you are serving your clients with quality work. Some essential tips to attract customers to your auto repair shop.<p></p>\r\n<ul><li>Market your brand.</li>\r\n<li>Active on social media.</li>\r\n<li>Build a strong brand image.</li>\r\n<li>Offer seasonal packages.</li>\r\n<li>Host free seminars.</li>\r\n<li>Try to have your brand apps.</li>\r\n<li>Encourage clients to write reviews.</li>\r\n<li>Offer people rewards through your app or website.</li></ul>\r\n<p>These pro tips help your auto repair shop build connections with customers by interacting with them online everywhere. It\'s a digital world, so try to influence targeted audiences and provide them minor or major smash repair solutions for their malfunctioned or wrecked cars. This customer-oriented mini guide is expected to repair your cars beyond excellence.</p>', 1, NULL, 1, NULL, 'What Do Customers Want In A Smash Repair Company? - Alphasmashrepair', 'In this article we have explained that what do customer want in a smash repair company.', '{\"image_alt\":\"smash repair company\",\"full_image\":\"a-smash-repair-company.webp\"}', '2024-08-23 02:51:05', '2024-08-23 03:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'blog' COMMENT 'type for category like services, products',
  `meta_image` varchar(150) DEFAULT NULL,
  `meta_title` varchar(150) DEFAULT NULL,
  `meta_description` varchar(250) DEFAULT NULL,
  `index_status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 for no-index,1 for index',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `parent_id`, `type`, `meta_image`, `meta_title`, `meta_description`, `index_status`, `created_at`, `updated_at`) VALUES
(1, 'Repair', 'repair', NULL, 'blog', NULL, 'Repair', 'Repair', 0, '2024-08-23 02:49:23', '2024-08-23 02:49:23');

-- --------------------------------------------------------

--
-- Table structure for table `email_accounts`
--

CREATE TABLE `email_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email_account` varchar(191) NOT NULL COMMENT 'This will be used as username in configuration for connection.',
  `password` varchar(255) NOT NULL,
  `host` varchar(100) NOT NULL,
  `port` smallint(6) NOT NULL,
  `encryption` varchar(10) NOT NULL DEFAULT 'ssl' COMMENT 'Supported encryption types are: false, ssl, tls, starttls, notls',
  `validateCert` tinyint(1) NOT NULL DEFAULT 1,
  `protocol` varchar(10) NOT NULL DEFAULT 'imap' COMMENT 'Supported protocols are: imap, pop3, nntp',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 for in-active, 1 for active ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_accounts`
--

INSERT INTO `email_accounts` (`id`, `email_account`, `password`, `host`, `port`, `encryption`, `validateCert`, `protocol`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'info@ozcleaningperth.com.au', 'AQC2yVl1A)Ly', 'cp-wc22.syd02.ds.network', 993, 'ssl', 1, 'imap', 1, '2023-08-09 08:16:06', '2023-10-26 19:09:19', NULL);

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
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_type` varchar(255) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_data`
--

CREATE TABLE `form_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_id` bigint(20) UNSIGNED NOT NULL,
  `field_name` varchar(255) DEFAULT NULL,
  `field_value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `type` char(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `label_menu` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_04_19_071843_create_categories_table', 1),
(7, '2023_04_19_072827_create_blogs_table', 1),
(8, '2023_08_09_121338_add_columns_to_users', 1),
(9, '2023_08_09_121434_create_galleries_table', 1),
(10, '2023_08_09_121510_create_pages_table', 1),
(11, '2023_08_09_121810_create_content_sections_table', 1),
(12, '2023_08_09_121827_create_page_sections_table', 1),
(13, '2023_08_09_122311_create_email_accounts_table', 1),
(14, '2023_08_09_122551_create_signatures_table', 1),
(15, '2023_08_09_122714_create_settings_table', 1),
(16, '2023_08_15_052651_create_section_services_table', 2),
(25, '2023_09_26_101445_add_columns_into_page', 3),
(26, '2023_10_04_051917_create_menus_table', 4),
(27, '2023_10_10_065025_create_permission_tables', 5),
(28, '2018_08_08_100000_create_telescope_entries_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `sub_slug` varchar(255) DEFAULT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `meta_image` varchar(200) DEFAULT NULL,
  `meta_title` varchar(200) DEFAULT NULL,
  `meta_description` varchar(250) DEFAULT NULL,
  `index_status` tinyint(4) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `header_links` longtext DEFAULT NULL,
  `footer_links` longtext DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'page' COMMENT 'type for page like services, blog, page and etc',
  `footer_menu` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_sections`
--

CREATE TABLE `page_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_title` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `sort_by` smallint(6) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'User list', 'web', '2023-10-09 19:51:23', '2023-10-09 19:51:23'),
(2, 'User Create', 'web', '2023-10-09 19:51:23', '2023-10-09 19:51:23'),
(3, 'User Update', 'web', '2023-10-09 19:51:23', '2023-10-09 19:51:23'),
(4, 'User Delete', 'web', '2023-10-09 19:51:23', '2023-10-09 19:51:23'),
(5, 'Blog list', 'web', '2023-10-09 19:51:23', '2023-10-09 19:51:23'),
(6, 'Blog Create', 'web', '2023-10-09 19:51:23', '2023-10-09 19:51:23'),
(7, 'Blog Update', 'web', '2023-10-09 19:51:23', '2023-10-09 19:51:23'),
(8, 'Blog Delete', 'web', '2023-10-09 19:51:23', '2023-10-09 19:51:23'),
(9, 'Page list', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(10, 'Page Create', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(11, 'Page Update', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(12, 'Page Delete', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(13, 'Service list', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(14, 'Service Create', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(15, 'Service Update', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(16, 'Service Delete', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(17, 'Mail box', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(18, 'Email Setting List', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(19, 'Email Setting Create', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(20, 'Email Setting Update', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(21, 'Signature List', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(22, 'Signature Create', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(23, 'Signature Update', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(24, 'Gallery', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(25, 'Role list', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(26, 'Role Create', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(27, 'Role Update', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(28, 'Role Delete', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(29, 'Settings', 'web', '2023-10-09 19:51:24', '2023-10-09 19:51:24'),
(30, 'Sub service list', 'web', '2023-10-09 20:26:58', '2023-10-09 20:26:58'),
(31, 'Sub service Create', 'web', '2023-10-09 20:26:58', '2023-10-09 20:26:58'),
(32, 'Sub service Update', 'web', '2023-10-09 20:26:58', '2023-10-09 20:26:58'),
(33, 'Sub service Delete', 'web', '2023-10-09 20:26:58', '2023-10-09 20:26:58'),
(34, 'Menu Update', 'web', '2023-10-09 20:26:58', '2023-10-09 20:26:58'),
(35, 'Category list', 'web', '2023-10-09 20:33:34', '2023-10-09 20:33:34'),
(36, 'Category Create', 'web', '2023-10-09 20:33:34', '2023-10-09 20:33:34'),
(37, 'Category Update', 'web', '2023-10-09 20:33:34', '2023-10-09 20:33:34'),
(38, 'Category Delete', 'web', '2023-10-09 20:33:34', '2023-10-09 20:33:34');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2023-10-09 19:51:43', '2023-10-09 19:51:43'),
(2, 'User', 'web', '2023-10-09 20:25:04', '2023-10-09 20:25:04');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(5, 2),
(6, 2),
(7, 2),
(8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `section_services`
--

CREATE TABLE `section_services` (
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `values` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `values`, `created_at`, `updated_at`) VALUES
(1, 'contact', '[{\"heading\":null,\"map\":null,\"address\":null,\"email\":null,\"phone\":null,\"fax\":null}]', '2023-08-15 05:49:43', '2024-11-27 16:04:26'),
(2, 'social', '{\"facebook\":\"https:\\/\\/www.facebook.com\\/people\\/Sapphire-Driving-Academy\\/100089952324304\\/\",\"instagram\":\"https:\\/\\/www.instagram.com\\/sapphiredrivingacademy_\\/\",\"linkedin\":null,\"pinterest\":null,\"twitter\":null}', '2023-08-15 06:02:23', '2024-11-20 18:23:45'),
(3, 'donations', '[\"50\",\"100\",\"150\",\"200\"]', '2023-08-18 06:14:52', '2023-08-18 06:14:52'),
(4, 'theme', '{\"header_logo_alt\":\"header logo\",\"header_logo\":\"footerlogo.png\",\"footer_logo_alt\":null,\"footer_logo\":\"footer-logo.png\",\"footer_description\":null,\"copyright\":null}', '2023-08-25 02:02:08', '2024-12-11 12:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `signatures`
--

CREATE TABLE `signatures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telescope_entries`
--

CREATE TABLE `telescope_entries` (
  `sequence` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) NOT NULL,
  `batch_id` char(36) NOT NULL,
  `family_hash` varchar(255) DEFAULT NULL,
  `should_display_on_index` tinyint(1) NOT NULL DEFAULT 1,
  `type` varchar(20) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `telescope_entries`
--

INSERT INTO `telescope_entries` (`sequence`, `uuid`, `batch_id`, `family_hash`, `should_display_on_index`, `type`, `content`, `created_at`) VALUES
(1, '9ca76995-d349-4fb4-97e1-d7d686706606', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"2.98\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:48'),
(2, '9ca76995-e99c-49b5-ae21-880ba47e8f0d', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from information_schema.tables where table_schema = \'ozwebcli_alphasmashrepair\' and table_name = \'migrations\' and table_type = \'BASE TABLE\'\",\"time\":\"1.54\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/artisan\",\"line\":37,\"hash\":\"ad7d07e5104cadcc6e9623dfc5fefdd8\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:49'),
(3, '9ca76995-e9ea-4dce-ae77-7ad93ebcc394', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from information_schema.tables where table_schema = \'ozwebcli_alphasmashrepair\' and table_name = \'migrations\' and table_type = \'BASE TABLE\'\",\"time\":\"0.45\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/artisan\",\"line\":37,\"hash\":\"ad7d07e5104cadcc6e9623dfc5fefdd8\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:49'),
(4, '9ca76995-ea33-4ff0-83c5-51937e71afe8', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `migration` from `migrations` order by `batch` asc, `migration` asc\",\"time\":\"0.40\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/artisan\",\"line\":37,\"hash\":\"ed08a59c7f0b8851f0fd2291ca94d5c7\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:49'),
(5, '9ca76995-ea80-48b7-aeb2-ba57328752d5', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `migration` from `migrations` order by `batch` asc, `migration` asc\",\"time\":\"0.37\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/artisan\",\"line\":37,\"hash\":\"ed08a59c7f0b8851f0fd2291ca94d5c7\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:49'),
(6, '9ca76995-eadf-4981-82b0-1f9f4a689d12', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select max(`batch`) as aggregate from `migrations`\",\"time\":\"0.35\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/artisan\",\"line\":37,\"hash\":\"06e60d7b3d1a0c2de504de4e6f27735e\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:49'),
(7, '9ca76995-f266-44c1-8772-cc17653e2266', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"create table `telescope_entries` (`sequence` bigint unsigned not null auto_increment primary key, `uuid` char(36) not null, `batch_id` char(36) not null, `family_hash` varchar(255) null, `should_display_on_index` tinyint(1) not null default \'1\', `type` varchar(20) not null, `content` longtext not null, `created_at` datetime null) default character set utf8mb4 collate \'utf8mb4_unicode_ci\'\",\"time\":\"11.49\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/database\\/migrations\\/2018_08_08_100000_create_telescope_entries_table.php\",\"line\":39,\"hash\":\"d9429550f8856c1af1c89f24a6440cb5\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:49'),
(8, '9ca76995-f591-4833-9cef-bad856e42675', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"alter table `telescope_entries` add unique `telescope_entries_uuid_unique`(`uuid`)\",\"time\":\"7.78\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/database\\/migrations\\/2018_08_08_100000_create_telescope_entries_table.php\",\"line\":39,\"hash\":\"9fb859ae1faff74c6b9e0b70dfd8eea9\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:49'),
(9, '9ca76995-f838-4de4-9726-cf41ede28a84', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"alter table `telescope_entries` add index `telescope_entries_batch_id_index`(`batch_id`)\",\"time\":\"6.46\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/database\\/migrations\\/2018_08_08_100000_create_telescope_entries_table.php\",\"line\":39,\"hash\":\"2b075509a9242d6e3f622536c5ccca07\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:49'),
(10, '9ca76995-fa8c-4569-9897-0cd96a363a0c', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"alter table `telescope_entries` add index `telescope_entries_family_hash_index`(`family_hash`)\",\"time\":\"5.66\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/database\\/migrations\\/2018_08_08_100000_create_telescope_entries_table.php\",\"line\":39,\"hash\":\"3d25a2a244bd2028dfa0326d3dbf7f4c\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:49'),
(11, '9ca76995-fd4d-4e15-ac30-39bfe68c1185', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"alter table `telescope_entries` add index `telescope_entries_created_at_index`(`created_at`)\",\"time\":\"6.75\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/database\\/migrations\\/2018_08_08_100000_create_telescope_entries_table.php\",\"line\":39,\"hash\":\"7352e7f84460fb7ffc450e7ea4de9dc7\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:49'),
(12, '9ca76995-fff4-4f20-af73-c4966ab3c3da', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"alter table `telescope_entries` add index `telescope_entries_type_should_display_on_index_index`(`type`, `should_display_on_index`)\",\"time\":\"6.48\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/database\\/migrations\\/2018_08_08_100000_create_telescope_entries_table.php\",\"line\":39,\"hash\":\"7317a4cad2dfa1a5167548a6acd0b6a5\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:49'),
(13, '9ca76996-028d-42d2-a930-e909700ccae3', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"create table `telescope_entries_tags` (`entry_uuid` char(36) not null, `tag` varchar(255) not null) default character set utf8mb4 collate \'utf8mb4_unicode_ci\'\",\"time\":\"6.00\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/database\\/migrations\\/2018_08_08_100000_create_telescope_entries_table.php\",\"line\":52,\"hash\":\"5ed47d3cfcd3051674e3cb7b613f0fba\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:49'),
(14, '9ca76996-06dc-4230-a12a-c1f4e812bbf1', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"alter table `telescope_entries_tags` add primary key (`entry_uuid`, `tag`)\",\"time\":\"10.64\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/database\\/migrations\\/2018_08_08_100000_create_telescope_entries_table.php\",\"line\":52,\"hash\":\"2116836576aac7ced047ceaf39f00066\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:49'),
(15, '9ca76996-095d-417b-a13c-15c1b0945181', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"alter table `telescope_entries_tags` add index `telescope_entries_tags_tag_index`(`tag`)\",\"time\":\"6.01\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/database\\/migrations\\/2018_08_08_100000_create_telescope_entries_table.php\",\"line\":52,\"hash\":\"0bdb35d17e876d6225a7774a2c17647d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:49'),
(16, '9ca76996-1212-4b7e-88e9-6a0b347d49d0', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"alter table `telescope_entries_tags` add constraint `telescope_entries_tags_entry_uuid_foreign` foreign key (`entry_uuid`) references `telescope_entries` (`uuid`) on delete cascade\",\"time\":\"21.93\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/database\\/migrations\\/2018_08_08_100000_create_telescope_entries_table.php\",\"line\":52,\"hash\":\"662a818f80a3a9ba2570081fd7a6af2f\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:49'),
(17, '9ca76996-1563-4da0-9355-b67204d4e138', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"create table `telescope_monitoring` (`tag` varchar(255) not null) default character set utf8mb4 collate \'utf8mb4_unicode_ci\'\",\"time\":\"7.97\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/database\\/migrations\\/2018_08_08_100000_create_telescope_entries_table.php\",\"line\":56,\"hash\":\"8cddf327ba1b3bd52637b409200a4c1f\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:49'),
(18, '9ca76996-1956-49fd-8120-983dbc90fef1', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"alter table `telescope_monitoring` add primary key (`tag`)\",\"time\":\"9.79\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/database\\/migrations\\/2018_08_08_100000_create_telescope_entries_table.php\",\"line\":56,\"hash\":\"08d3a45fa093c0d1e94dc4ec5f5fd42b\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:49'),
(19, '9ca76996-1a4e-4dc7-a06a-67f2c98dc775', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"insert into `migrations` (`migration`, `batch`) values (\'2018_08_08_100000_create_telescope_entries_table\', 6)\",\"time\":\"1.14\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/artisan\",\"line\":37,\"hash\":\"f2b8e8e4266db16aec6db940c643eb68\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:49'),
(20, '9ca76996-1a91-47e3-a2ff-5e7150832f14', '9ca76996-1b1b-4519-b301-0dbf44ad89ce', NULL, 1, 'command', '{\"command\":\"migrate\",\"exit_code\":0,\"arguments\":{\"command\":\"migrate\"},\"options\":{\"database\":null,\"force\":false,\"path\":[],\"realpath\":false,\"schema-path\":null,\"pretend\":false,\"seed\":false,\"seeder\":null,\"step\":false,\"isolated\":false,\"help\":false,\"quiet\":false,\"verbose\":false,\"version\":false,\"ansi\":null,\"no-interaction\":false,\"env\":null},\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:20:49'),
(21, '9ca76a17-8cf1-4e8a-9650-f2ec0318a8f4', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"4.80\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(22, '9ca76a17-9bc7-4ed9-a3e5-9be1c5fcc7c2', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `pages` where `type` = \'page\' and `slug` = \'home\' and `status` = 1 limit 1\",\"time\":\"0.66\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"6a711c996a2206eb839551ea363ea29c\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(23, '9ca76a17-9be1-4919-94bb-3c5f6336cda3', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'model', '{\"action\":\"retrieved\",\"model\":\"App\\\\Models\\\\Page\",\"count\":1,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(24, '9ca76a17-9dd3-4ce8-a538-9358fe496e14', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `id`, `sort_by`, `page_id`, `content`, `section`, `section_title`, `status` from `page_sections` where `page_sections`.`page_id` in (1) and `status` = 1 order by `sort_by` asc\",\"time\":\"0.56\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":24,\"hash\":\"cf684b5dbcff3320fc94629833a555a6\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(25, '9ca76a17-9df0-4b6e-b240-05b71af7b820', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'model', '{\"action\":\"retrieved\",\"model\":\"App\\\\Models\\\\PageSection\",\"count\":12,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(26, '9ca76a17-9fff-474a-ba3f-d8d6e13a5580', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `pages`.*, `section_services`.`section_id` as `pivot_section_id`, `section_services`.`service_id` as `pivot_service_id` from `pages` inner join `section_services` on `pages`.`id` = `section_services`.`service_id` where `section_services`.`section_id` in (1, 2, 3, 4, 5, 6) and `status` = 1\",\"time\":\"0.64\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":24,\"hash\":\"e2fa9f0816a90e3042be0d5990396f43\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(27, '9ca76a17-a053-4c06-ba77-e6e0aae0c54d', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `id`, `sort_by`, `page_id`, `content`, `section`, `section_title`, `status` from `page_sections` where `page_sections`.`page_id` in (1) and `status` = 1 order by `sort_by` asc\",\"time\":\"0.48\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"cf684b5dbcff3320fc94629833a555a6\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(28, '9ca76a17-a0c2-4d89-baa5-424b11156a05', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `pages`.*, `section_services`.`section_id` as `pivot_section_id`, `section_services`.`service_id` as `pivot_service_id` from `pages` inner join `section_services` on `pages`.`id` = `section_services`.`service_id` where `section_services`.`section_id` in (1, 2, 3, 4, 5, 6) and `status` = 1\",\"time\":\"0.51\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"e2fa9f0816a90e3042be0d5990396f43\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(29, '9ca76a17-a665-4748-aa88-86e8ac0d7551', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'view', '{\"name\":\"index\",\"path\":\"\\/resources\\/views\\/index.blade.php\",\"data\":[\"pageData\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(30, '9ca76a17-a7b4-4645-999b-50243dd68b10', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'view', '{\"name\":\"components.section_2\",\"path\":\"\\/resources\\/views\\/components\\/section_2.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(31, '9ca76a17-a7f9-4a42-8dc1-cab982446e3d', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'view', '{\"name\":\"components.section_3\",\"path\":\"\\/resources\\/views\\/components\\/section_3.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(32, '9ca76a17-a87e-441c-ab0f-891733db095d', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select count(*) as aggregate from `pages` where `type` in (\'service\', \'sub service\') and `status` = 1\",\"time\":\"0.52\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/storage\\/framework\\/views\\/9150a587f53c49e2523bb329caff5356.php\",\"line\":18,\"hash\":\"ee41e4d8a767ab022570f596b8b74598\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(33, '9ca76a17-a8eb-408a-88b2-6ccd04c6084d', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'view', '{\"name\":\"components.section_6\",\"path\":\"\\/resources\\/views\\/components\\/section_6.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(34, '9ca76a17-a930-4194-bfc8-bceda734cd83', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'view', '{\"name\":\"components.section_13\",\"path\":\"\\/resources\\/views\\/components\\/section_13.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(35, '9ca76a17-a964-4d38-bb69-6087a60e0900', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'view', '{\"name\":\"components.section_5\",\"path\":\"\\/resources\\/views\\/components\\/section_5.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(36, '9ca76a17-a9a4-4e7c-8f99-04e00e8b699f', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'view', '{\"name\":\"components.section_1\",\"path\":\"\\/resources\\/views\\/components\\/section_1.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(37, '9ca76a17-aa32-4227-9349-f9eb48f010e2', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `menus` where `parent_id` is null order by `sort_order` asc\",\"time\":\"0.44\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":50,\"hash\":\"58c83c9dffb061e235b7c54fcbde30b0\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(38, '9ca76a17-aa82-4eb9-b2a1-6ac1e9102d91', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `pages` where `type` = \'service\' and `status` = 1\",\"time\":\"0.45\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":51,\"hash\":\"52df561862381c57487fc461b66f54d3\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(39, '9ca76a17-aaca-4a26-9eef-ab5f56638531', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `pages` where `type` = \'service\' and `footer_menu` = 1 and `status` = 1\",\"time\":\"0.37\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":52,\"hash\":\"07a959f28706fac789105d26aa3f5859\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(40, '9ca76a17-aae1-4d6b-ab03-284f9d48f5ce', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'view', '{\"name\":\"layouts.master\",\"path\":\"\\/resources\\/views\\/layouts\\/master.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\",\"mega_menus\",\"services\",\"footer_services\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[49:59]\",\"type\":\"composer\"},{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(41, '9ca76a17-ac20-463c-87b8-71b4c63be064', '9ca76a17-ad1e-4557-87f4-f101eba8b42d', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/\",\"method\":\"GET\",\"controller_action\":\"App\\\\Http\\\\Controllers\\\\WebsiteController@index\",\"middleware\":[\"web\"],\"headers\":{\"accept\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.7\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6ImtvNm5qOGZpbmFDQUJkZmFkVGVNenc9PSIsInZhbHVlIjoiam5lT0ZOR3dTeVB1ZGQyUE53TlJmSmZXSDdITmhKdEFMaFZVZ3pHSTZ6cDFpY1FLMTlOY3lmdW13T2did1hXSEdjdUxmUXBzN2pSTUNiRjgzTVZMQzhFNEZ6ZVE4aDJadEl2YlJ5bUlrR2R4UnIyL0hSb0pDYlBnVndMOVNJVnYiLCJtYWMiOiJmOTlkZTJmYmNkNjk0ZDdiYzhlNDUzZDQ5ZTFjNjA1NmVjMjRhY2NjZTVjYTNkOGQ0MmE0ZmFlODY3NTc3YWExIiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6ImFmUlNsZFNsSHRlN3drRU16bkgyR2c9PSIsInZhbHVlIjoiNmdjY0tiOWZ1VTRSdlJ5blhOVHZkOFI4Qnh6OFNDSlc3TXNDQ09CQTU0ZlRDMndJbHEwTWpWbU05VkF3Q2g0NmpZNmJxblBzang5ZDNBekVHOG93MnBSMGw3cWhGN2NrSTJwVVpUMTdzeWxlZGVpQkdVcTBrRjF5VlQwb3k3SSsiLCJtYWMiOiI5N2RjZTYyNGQxNzJiMTM4YjJhZDAyYWI5NWQzZjIyNTQ4ZTc2ZTI4NGU3ZTI5OTQ5ZGEwN2VkZWMwZWJhZDA5IiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"upgrade-insecure-requests\":\"1\",\"bn-client-port\":\"53405\"},\"payload\":[],\"session\":{\"_token\":\"LRxyPLoQJNY1W5oGhLv6ZerYR6SCJxkgEcNHcWiN\",\"_previous\":{\"url\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\"},\"_flash\":{\"old\":[],\"new\":[]}},\"response_status\":200,\"response\":{\"view\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/resources\\/views\\/index.blade.php\",\"data\":{\"pageData\":\"App\\\\Models\\\\Page:1\",\"settings\":{\"contact\":\"[{\\\"heading\\\":null,\\\"map\\\":null,\\\"address\\\":null,\\\"email\\\":\\\"info@flooringperth\\\",\\\"phone\\\":\\\"1111111111\\\",\\\"fax\\\":null}]\",\"social\":\"{\\\"facebook\\\":\\\"https:\\\\\\/\\\\\\/www.facebook.com\\\",\\\"instagram\\\":null,\\\"linkedin\\\":null,\\\"pinterest\\\":\\\"https:\\\\\\/\\\\\\/www.pinterest.com\\\",\\\"twitter\\\":null}\",\"donations\":\"[\\\"50\\\",\\\"100\\\",\\\"150\\\",\\\"200\\\"]\",\"theme\":\"{\\\"header_logo_alt\\\":\\\"header logo\\\",\\\"header_logo\\\":\\\"logo.png\\\",\\\"footer_logo_alt\\\":\\\"footer logo\\\",\\\"footer_logo\\\":\\\"logo-footer.png\\\",\\\"footer_description\\\":null,\\\"copyright\\\":\\\"Copyright \\\\u00a9 2024 <a class=\\\\\\\"d-inline-block\\\\\\\" href=\\\\\\\"\\\\\\/\\\\\\\">env(\'APP_NAME\')<\\\\\\/a> | <a class=\\\\\\\"d-inline-block\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/ozwebdevelopment.com.au\\\\\\/web-design\\\\\\\">website design by ozwebdevelopment<\\\\\\/a>\\\"}\"},\"contact\":[{\"heading\":null,\"map\":null,\"address\":null,\"email\":\"info@flooringperth\",\"phone\":\"1111111111\",\"fax\":null}],\"social\":{\"facebook\":\"https:\\/\\/www.facebook.com\",\"instagram\":null,\"linkedin\":null,\"pinterest\":\"https:\\/\\/www.pinterest.com\",\"twitter\":null},\"theme\":{\"header_logo_alt\":\"header logo\",\"header_logo\":\"logo.png\",\"footer_logo_alt\":\"footer logo\",\"footer_logo\":\"logo-footer.png\",\"footer_description\":null,\"copyright\":\"Copyright \\u00a9 2024 <a class=\\\"d-inline-block\\\" href=\\\"\\/\\\">env(\'APP_NAME\')<\\/a> | <a class=\\\"d-inline-block\\\" href=\\\"https:\\/\\/ozwebdevelopment.com.au\\/web-design\\\">website design by ozwebdevelopment<\\/a>\"},\"seo\":[]}},\"duration\":376,\"memory\":10,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(42, '9ca76a18-4a5e-44f2-9abb-ed4203c321d3', '9ca76a18-511a-4bc0-b7d7-7aef4f5e944e', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"2.39\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(43, '9ca76a18-5050-4162-886a-07479b290a4d', '9ca76a18-511a-4bc0-b7d7-7aef4f5e944e', NULL, 1, 'view', '{\"name\":\"errors::404\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/404.blade.php\",\"data\":[\"exception\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(44, '9ca76a18-5091-4ac9-8870-39fc1cc69c82', '9ca76a18-511a-4bc0-b7d7-7aef4f5e944e', NULL, 1, 'view', '{\"name\":\"errors::minimal\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/minimal.blade.php\",\"data\":[\"exception\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(45, '9ca76a18-50dd-46ce-bc3b-ac160f063382', '9ca76a18-511a-4bc0-b7d7-7aef4f5e944e', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/assets\\/css\\/bootstrap.min.css.map\",\"method\":\"GET\",\"controller_action\":null,\"middleware\":[],\"headers\":{\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6ImRCRTliTjQyWUxqd2thaGhVTTdEV1E9PSIsInZhbHVlIjoiTmlGdDFLNmVEZWo5aGhYODEvckppckNCcnErbStMaTdtRHZiQkYySndHNkwwNzZMYU5BdGV3d1EzUERWVGpLVkl0RUFkVlFNUlkyS2VvM0FTeVhSWWpFc0tuQnllWGJEWURiUWR6VXFNdUMya0tyN293UE92RmlDUjhTQk9lUkYiLCJtYWMiOiIwMDkwMmZhMmQzMWQyZjVmNWE0ZjJlODMyMDg3NTU4Y2YwYTkxYTM1Y2EyZTc2MWE1YTljOGE3M2NiMzgyYzI1IiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6IkhndHNFdkhOczJ3SHZsSjk5K1lKNEE9PSIsInZhbHVlIjoiNjZ5cFNCWFJOS1g5OGc1dWtoYVRLR3luU3JsYkh6b1hTaU1ZN05rMVRnS1FIQ0diSFJjYkxCaTFzKzhiTHRhSzdIQUxmTFl6T1JpQWNhQmtQdnY2TmxUaUdOV3VVeFdRQmFzVFV6VStaYXV3cDBwd09UTHNkQ2NUcHYyZENKazgiLCJtYWMiOiI2NzRjNWE0YTk0MjVkNDM0MTVkZjMzY2I4YzYyZmE5NDUxNmU0Y2JmMWZlNjJkMjM2MmI5ZjVhNTBlOTk2Yjg2IiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"bn-client-port\":\"53405\"},\"payload\":[],\"session\":[],\"response_status\":404,\"response\":\"HTML Response\",\"duration\":59,\"memory\":4,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:14'),
(46, '9ca76a19-9bfd-499f-b8c0-f7cd79f38025', '9ca76a19-a2d1-4c41-add4-e72a71f269b1', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"2.29\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:15'),
(47, '9ca76a19-a195-4158-84ea-87faec882301', '9ca76a19-a2d1-4c41-add4-e72a71f269b1', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `section` from `page_sections` where exists (select * from `pages` where `page_sections`.`page_id` = `pages`.`id` and (`slug` = \'home\' or `sub_slug` = \'home\')) and `status` = 1\",\"time\":\"0.70\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/WebsiteController.php\",\"line\":46,\"hash\":\"78c7353a485e7754c6222e715fa1043e\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:15'),
(48, '9ca76a19-a260-4072-979a-a5f09e5f30d0', '9ca76a19-a2d1-4c41-add4-e72a71f269b1', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/css\\/home.css\",\"method\":\"GET\",\"controller_action\":\"App\\\\Http\\\\Controllers\\\\WebsiteController@page_css_marge\",\"middleware\":[\"web\"],\"headers\":{\"accept\":\"text\\/css,*\\/*;q=0.1\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6ImRCRTliTjQyWUxqd2thaGhVTTdEV1E9PSIsInZhbHVlIjoiTmlGdDFLNmVEZWo5aGhYODEvckppckNCcnErbStMaTdtRHZiQkYySndHNkwwNzZMYU5BdGV3d1EzUERWVGpLVkl0RUFkVlFNUlkyS2VvM0FTeVhSWWpFc0tuQnllWGJEWURiUWR6VXFNdUMya0tyN293UE92RmlDUjhTQk9lUkYiLCJtYWMiOiIwMDkwMmZhMmQzMWQyZjVmNWE0ZjJlODMyMDg3NTU4Y2YwYTkxYTM1Y2EyZTc2MWE1YTljOGE3M2NiMzgyYzI1IiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6IkhndHNFdkhOczJ3SHZsSjk5K1lKNEE9PSIsInZhbHVlIjoiNjZ5cFNCWFJOS1g5OGc1dWtoYVRLR3luU3JsYkh6b1hTaU1ZN05rMVRnS1FIQ0diSFJjYkxCaTFzKzhiTHRhSzdIQUxmTFl6T1JpQWNhQmtQdnY2TmxUaUdOV3VVeFdRQmFzVFV6VStaYXV3cDBwd09UTHNkQ2NUcHYyZENKazgiLCJtYWMiOiI2NzRjNWE0YTk0MjVkNDM0MTVkZjMzY2I4YzYyZmE5NDUxNmU0Y2JmMWZlNjJkMjM2MmI5ZjVhNTBlOTk2Yjg2IiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"referer\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\\/\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"bn-client-port\":\"25313\"},\"payload\":[],\"session\":{\"_token\":\"LRxyPLoQJNY1W5oGhLv6ZerYR6SCJxkgEcNHcWiN\",\"_previous\":{\"url\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\\/css\\/home.css\"},\"_flash\":{\"old\":[],\"new\":[]}},\"response_status\":200,\"response\":\"Empty Response\",\"duration\":54,\"memory\":2,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:15'),
(49, '9ca76a19-fa20-4407-b229-d41e0ae1c6d7', '9ca76a19-ffac-4d04-8997-2384d651afe3', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"1.89\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:15'),
(50, '9ca76a19-ff05-4483-85d3-28a1b4076963', '9ca76a19-ffac-4d04-8997-2384d651afe3', NULL, 1, 'view', '{\"name\":\"errors::404\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/404.blade.php\",\"data\":[\"exception\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:15'),
(51, '9ca76a19-ff36-4c69-bde2-e80507a7786a', '9ca76a19-ffac-4d04-8997-2384d651afe3', NULL, 1, 'view', '{\"name\":\"errors::minimal\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/minimal.blade.php\",\"data\":[\"exception\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:15'),
(52, '9ca76a19-ff70-4012-be84-191505a8d29d', '9ca76a19-ffac-4d04-8997-2384d651afe3', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/media\\/logo-footer.png\",\"method\":\"GET\",\"controller_action\":null,\"middleware\":[],\"headers\":{\"accept\":\"image\\/avif,image\\/webp,image\\/apng,image\\/svg+xml,image\\/*,*\\/*;q=0.8\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6ImRCRTliTjQyWUxqd2thaGhVTTdEV1E9PSIsInZhbHVlIjoiTmlGdDFLNmVEZWo5aGhYODEvckppckNCcnErbStMaTdtRHZiQkYySndHNkwwNzZMYU5BdGV3d1EzUERWVGpLVkl0RUFkVlFNUlkyS2VvM0FTeVhSWWpFc0tuQnllWGJEWURiUWR6VXFNdUMya0tyN293UE92RmlDUjhTQk9lUkYiLCJtYWMiOiIwMDkwMmZhMmQzMWQyZjVmNWE0ZjJlODMyMDg3NTU4Y2YwYTkxYTM1Y2EyZTc2MWE1YTljOGE3M2NiMzgyYzI1IiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6IkhndHNFdkhOczJ3SHZsSjk5K1lKNEE9PSIsInZhbHVlIjoiNjZ5cFNCWFJOS1g5OGc1dWtoYVRLR3luU3JsYkh6b1hTaU1ZN05rMVRnS1FIQ0diSFJjYkxCaTFzKzhiTHRhSzdIQUxmTFl6T1JpQWNhQmtQdnY2TmxUaUdOV3VVeFdRQmFzVFV6VStaYXV3cDBwd09UTHNkQ2NUcHYyZENKazgiLCJtYWMiOiI2NzRjNWE0YTk0MjVkNDM0MTVkZjMzY2I4YzYyZmE5NDUxNmU0Y2JmMWZlNjJkMjM2MmI5ZjVhNTBlOTk2Yjg2IiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"referer\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\\/\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"bn-client-port\":\"53406\"},\"payload\":[],\"session\":[],\"response_status\":404,\"response\":\"HTML Response\",\"duration\":49,\"memory\":4,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:15'),
(53, '9ca76a1a-d605-4d96-9958-200994c8187d', '9ca76a1a-dc14-46ce-b85a-e540e64b9580', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"2.01\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:16'),
(54, '9ca76a1a-db12-4ae5-bf4d-86da6d88738d', '9ca76a1a-dc14-46ce-b85a-e540e64b9580', NULL, 1, 'view', '{\"name\":\"errors::404\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/404.blade.php\",\"data\":[\"exception\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:16'),
(55, '9ca76a1a-db4c-4612-a2af-f1e44737fbe0', '9ca76a1a-dc14-46ce-b85a-e540e64b9580', NULL, 1, 'view', '{\"name\":\"errors::minimal\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/minimal.blade.php\",\"data\":[\"exception\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:16'),
(56, '9ca76a1a-db88-4fae-b5f3-2b60a09c6e80', '9ca76a1a-dc14-46ce-b85a-e540e64b9580', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/assets\\/css\\/bootstrap.min.css.map\",\"method\":\"GET\",\"controller_action\":null,\"middleware\":[],\"headers\":{\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6InhpSUM1a3ZoWUdQbm9ETGdvWFFST0E9PSIsInZhbHVlIjoiZ2lHVWRMZGM5WlZsK3BpRVdpT20yQklyMG9xNFlZbFVHcUVrMnJQSzdJMUJqNU4ra3IzbG1YU0MwWVlSQmdFVG5hMitmajNURG9Vd29tTHZDRUpQdHVibEdZZWF0Umh4eTIxR3lhZ3F5WjNEc1Rkd2JMc1Z6aG1ldWVTZitnczIiLCJtYWMiOiI1YzMxNmNhOTE5MjhjMzE1NGYwMzIxNDRlNzRiZWQ2YjQyNzkyNDlmMDg1ZTJkNGRiZGRkODM5NzQ0YTA4Mjg0IiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6Inp5UDFYUmw4RlJoR0puT004aGVQTXc9PSIsInZhbHVlIjoiTWsxTkd4alZqZzY1RjVuRUZYT3BMWTVORmZ4bXVKWGllWmwxM3VaSk1mY0Rua2F4YTQvRThJczZnRitmWTgyZExybEpZMGM3RjB2WUs4TUZwR2dPaHJOMzZTRW9KZmhIN0o1Z0c3RkhPblpYQ2MzZ0plL2N5RGE1aGYyZjVsOW0iLCJtYWMiOiIzMjk0NzQxNzM5ZWQ0MWM0NjI3ODRlMDQ3Njk1ZmM5NGY4NjMzZWIxMWQwZjNhYjU1NDYyYTBmMjllMTViYjcwIiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"bn-client-port\":\"53408\"},\"payload\":[],\"session\":[],\"response_status\":404,\"response\":\"HTML Response\",\"duration\":52,\"memory\":4,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:16'),
(57, '9ca76a1b-52e1-4360-9e8a-6175472e3ad1', '9ca76a1b-5854-468a-be30-a6a538fc1b7c', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"2.21\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:16'),
(58, '9ca76a1b-579d-4126-8065-b48ed13458c2', '9ca76a1b-5854-468a-be30-a6a538fc1b7c', NULL, 1, 'view', '{\"name\":\"errors::404\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/404.blade.php\",\"data\":[\"exception\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:16'),
(59, '9ca76a1b-57dd-4ffc-9e7a-41c38b7fd70b', '9ca76a1b-5854-468a-be30-a6a538fc1b7c', NULL, 1, 'view', '{\"name\":\"errors::minimal\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/minimal.blade.php\",\"data\":[\"exception\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:16'),
(60, '9ca76a1b-5818-4558-b486-6d0622cb2a8d', '9ca76a1b-5854-468a-be30-a6a538fc1b7c', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/assets\\/js\\/bootstrap.js.map\",\"method\":\"GET\",\"controller_action\":null,\"middleware\":[],\"headers\":{\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6InhpSUM1a3ZoWUdQbm9ETGdvWFFST0E9PSIsInZhbHVlIjoiZ2lHVWRMZGM5WlZsK3BpRVdpT20yQklyMG9xNFlZbFVHcUVrMnJQSzdJMUJqNU4ra3IzbG1YU0MwWVlSQmdFVG5hMitmajNURG9Vd29tTHZDRUpQdHVibEdZZWF0Umh4eTIxR3lhZ3F5WjNEc1Rkd2JMc1Z6aG1ldWVTZitnczIiLCJtYWMiOiI1YzMxNmNhOTE5MjhjMzE1NGYwMzIxNDRlNzRiZWQ2YjQyNzkyNDlmMDg1ZTJkNGRiZGRkODM5NzQ0YTA4Mjg0IiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6Inp5UDFYUmw4RlJoR0puT004aGVQTXc9PSIsInZhbHVlIjoiTWsxTkd4alZqZzY1RjVuRUZYT3BMWTVORmZ4bXVKWGllWmwxM3VaSk1mY0Rua2F4YTQvRThJczZnRitmWTgyZExybEpZMGM3RjB2WUs4TUZwR2dPaHJOMzZTRW9KZmhIN0o1Z0c3RkhPblpYQ2MzZ0plL2N5RGE1aGYyZjVsOW0iLCJtYWMiOiIzMjk0NzQxNzM5ZWQ0MWM0NjI3ODRlMDQ3Njk1ZmM5NGY4NjMzZWIxMWQwZjNhYjU1NDYyYTBmMjllMTViYjcwIiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"bn-client-port\":\"25313\"},\"payload\":[],\"session\":[],\"response_status\":404,\"response\":\"HTML Response\",\"duration\":60,\"memory\":4,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:22:16'),
(61, '9ca76be4-c49a-440f-be57-b07c38ddea17', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"2.23\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(62, '9ca76be4-e53d-4729-8a8d-2d8a06a29756', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `pages` where `type` = \'page\' and `slug` = \'home\' and `status` = 1 limit 1\",\"time\":\"1.01\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"6a711c996a2206eb839551ea363ea29c\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(63, '9ca76be4-e558-4ac7-92c1-f0f87fc2b14a', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'model', '{\"action\":\"retrieved\",\"model\":\"App\\\\Models\\\\Page\",\"count\":1,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(64, '9ca76be4-edaf-4bf5-9706-aa2dac921669', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `id`, `sort_by`, `page_id`, `content`, `section`, `section_title`, `status` from `page_sections` where `page_sections`.`page_id` in (1) and `status` = 1 order by `sort_by` asc\",\"time\":\"0.68\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":24,\"hash\":\"cf684b5dbcff3320fc94629833a555a6\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(65, '9ca76be4-edcd-4a67-a03d-f981c29ca726', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'model', '{\"action\":\"retrieved\",\"model\":\"App\\\\Models\\\\PageSection\",\"count\":12,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(66, '9ca76be5-02cc-4ccb-b140-c6630adf1822', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `pages`.*, `section_services`.`section_id` as `pivot_section_id`, `section_services`.`service_id` as `pivot_service_id` from `pages` inner join `section_services` on `pages`.`id` = `section_services`.`service_id` where `section_services`.`section_id` in (1, 2, 3, 4, 5, 6) and `status` = 1\",\"time\":\"0.80\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":24,\"hash\":\"e2fa9f0816a90e3042be0d5990396f43\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(67, '9ca76be5-0366-4742-99f7-7efcffb9cf1a', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `id`, `sort_by`, `page_id`, `content`, `section`, `section_title`, `status` from `page_sections` where `page_sections`.`page_id` in (1) and `status` = 1 order by `sort_by` asc\",\"time\":\"0.52\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"cf684b5dbcff3320fc94629833a555a6\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(68, '9ca76be5-03fd-4ca0-9e91-53d1c9999858', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `pages`.*, `section_services`.`section_id` as `pivot_section_id`, `section_services`.`service_id` as `pivot_service_id` from `pages` inner join `section_services` on `pages`.`id` = `section_services`.`service_id` where `section_services`.`section_id` in (1, 2, 3, 4, 5, 6) and `status` = 1\",\"time\":\"0.51\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"e2fa9f0816a90e3042be0d5990396f43\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(69, '9ca76be5-41e2-4189-8832-d9f7c78415b5', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'view', '{\"name\":\"index\",\"path\":\"\\/resources\\/views\\/index.blade.php\",\"data\":[\"pageData\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(70, '9ca76be5-4ae3-4ea0-a9d0-1fbd37235d6a', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'view', '{\"name\":\"components.section_2\",\"path\":\"\\/resources\\/views\\/components\\/section_2.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(71, '9ca76be5-52b2-4cee-9bbb-3045763314cc', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'view', '{\"name\":\"components.section_3\",\"path\":\"\\/resources\\/views\\/components\\/section_3.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(72, '9ca76be5-556a-4929-a3b7-66e67a6c2c5a', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select count(*) as aggregate from `pages` where `type` in (\'service\', \'sub service\') and `status` = 1\",\"time\":\"0.66\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/storage\\/framework\\/views\\/9150a587f53c49e2523bb329caff5356.php\",\"line\":18,\"hash\":\"ee41e4d8a767ab022570f596b8b74598\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16');
INSERT INTO `telescope_entries` (`sequence`, `uuid`, `batch_id`, `family_hash`, `should_display_on_index`, `type`, `content`, `created_at`) VALUES
(73, '9ca76be5-5dfe-4380-be86-a5c9b3805a54', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'view', '{\"name\":\"components.section_6\",\"path\":\"\\/resources\\/views\\/components\\/section_6.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(74, '9ca76be5-6354-40ed-9ebc-677bc523e9c9', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'view', '{\"name\":\"components.section_13\",\"path\":\"\\/resources\\/views\\/components\\/section_13.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(75, '9ca76be5-63ca-40fd-976b-dfb098938936', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'view', '{\"name\":\"components.section_5\",\"path\":\"\\/resources\\/views\\/components\\/section_5.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(76, '9ca76be5-6740-45ed-acfd-83fa5ecd4ec4', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'view', '{\"name\":\"components.section_1\",\"path\":\"\\/resources\\/views\\/components\\/section_1.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(77, '9ca76be5-69ec-45c6-bad9-55175ef1c783', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `menus` where `parent_id` is null order by `sort_order` asc\",\"time\":\"0.49\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":50,\"hash\":\"58c83c9dffb061e235b7c54fcbde30b0\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(78, '9ca76be5-6a3d-4dc8-8baf-eb7b170e5f90', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `pages` where `type` = \'service\' and `status` = 1\",\"time\":\"0.42\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":51,\"hash\":\"52df561862381c57487fc461b66f54d3\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(79, '9ca76be5-6a85-4550-bfa7-1452ce9d35d0', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `pages` where `type` = \'service\' and `footer_menu` = 1 and `status` = 1\",\"time\":\"0.40\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":52,\"hash\":\"07a959f28706fac789105d26aa3f5859\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(80, '9ca76be5-6a9f-4f6b-ae2c-036f88b00659', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'view', '{\"name\":\"layouts.master\",\"path\":\"\\/resources\\/views\\/layouts\\/master.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\",\"mega_menus\",\"services\",\"footer_services\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[49:59]\",\"type\":\"composer\"},{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(81, '9ca76be5-827e-4628-91e9-f69b1a62385c', '9ca76be5-830d-4b92-bd47-a7fbdcf3f40d', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/\",\"method\":\"GET\",\"controller_action\":\"App\\\\Http\\\\Controllers\\\\WebsiteController@index\",\"middleware\":[\"web\"],\"headers\":{\"accept\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.7\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6ImxtM0txMWRuWW1SSi8xWXNSc3d0WkE9PSIsInZhbHVlIjoiRWp0SFdSTlpQR2FiekpGM01qdEEyWU50d01wUVdJOUkzTWNES1Z3VHR4ZC9KKzNRaDI5YnpFYmRBTWNPdjk0ZXN2dkIwVnFUV2I1WWEwMVh5TVhuN25DVU4wT0w2OC9BTW9ySEdTeGREaXFjYXNxNy9lOWNRejBacU5DTnd3TU0iLCJtYWMiOiJlYzM5YmE1ZmY2YWU2NWM3ZWFkMGM0M2FkMGRlZjk1NTNlNGI2YjIxYzVkMGJiYjcwNzlkYWI5NmJhMWI0NDgyIiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6IkwwWUxvUVJMb1EyVWljV05TWDRMb1E9PSIsInZhbHVlIjoiOWxoVVU4Q0lqbG42QVliSlpyQkx3ZDJMYVR6amxIYVNDbU9tWHN5SnRjUlQyZUNtSHFTTjRnUVExT2Z5WmlBeUs2V29zdllmbnN6MEdVUkYxT1JWcFpoMkZLWHcwUlRxS25OcnJQNWRBRTYrZHZ3eDVsaGIyQWo0U1NwVWE5WlUiLCJtYWMiOiI3NTNlM2RhYTM3NzVkN2RiMWM4ZTQ3ZWQ5YTkzNzI4NDQyNDk5ODQ2ZWViNjUyMTFjNDM3ZGY5NmY0ZmM4MWM2IiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"upgrade-insecure-requests\":\"1\",\"bn-client-port\":\"53659\"},\"payload\":[],\"session\":{\"_token\":\"LRxyPLoQJNY1W5oGhLv6ZerYR6SCJxkgEcNHcWiN\",\"_previous\":{\"url\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\"},\"_flash\":{\"old\":[],\"new\":[]}},\"response_status\":200,\"response\":{\"view\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/resources\\/views\\/index.blade.php\",\"data\":{\"pageData\":\"App\\\\Models\\\\Page:1\",\"settings\":{\"contact\":\"[{\\\"heading\\\":null,\\\"map\\\":null,\\\"address\\\":null,\\\"email\\\":\\\"info@flooringperth\\\",\\\"phone\\\":\\\"1111111111\\\",\\\"fax\\\":null}]\",\"social\":\"{\\\"facebook\\\":\\\"https:\\\\\\/\\\\\\/www.facebook.com\\\",\\\"instagram\\\":null,\\\"linkedin\\\":null,\\\"pinterest\\\":\\\"https:\\\\\\/\\\\\\/www.pinterest.com\\\",\\\"twitter\\\":null}\",\"donations\":\"[\\\"50\\\",\\\"100\\\",\\\"150\\\",\\\"200\\\"]\",\"theme\":\"{\\\"header_logo_alt\\\":\\\"header logo\\\",\\\"header_logo\\\":\\\"logo.png\\\",\\\"footer_logo_alt\\\":\\\"footer logo\\\",\\\"footer_logo\\\":\\\"logo-footer.png\\\",\\\"footer_description\\\":null,\\\"copyright\\\":\\\"Copyright \\\\u00a9 2024 <a class=\\\\\\\"d-inline-block\\\\\\\" href=\\\\\\\"\\\\\\/\\\\\\\">env(\'APP_NAME\')<\\\\\\/a> | <a class=\\\\\\\"d-inline-block\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/ozwebdevelopment.com.au\\\\\\/web-design\\\\\\\">website design by ozwebdevelopment<\\\\\\/a>\\\"}\"},\"contact\":[{\"heading\":null,\"map\":null,\"address\":null,\"email\":\"info@flooringperth\",\"phone\":\"1111111111\",\"fax\":null}],\"social\":{\"facebook\":\"https:\\/\\/www.facebook.com\",\"instagram\":null,\"linkedin\":null,\"pinterest\":\"https:\\/\\/www.pinterest.com\",\"twitter\":null},\"theme\":{\"header_logo_alt\":\"header logo\",\"header_logo\":\"logo.png\",\"footer_logo_alt\":\"footer logo\",\"footer_logo\":\"logo-footer.png\",\"footer_description\":null,\"copyright\":\"Copyright \\u00a9 2024 <a class=\\\"d-inline-block\\\" href=\\\"\\/\\\">env(\'APP_NAME\')<\\/a> | <a class=\\\"d-inline-block\\\" href=\\\"https:\\/\\/ozwebdevelopment.com.au\\/web-design\\\">website design by ozwebdevelopment<\\/a>\"},\"seo\":[]}},\"duration\":634,\"memory\":4,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:16'),
(82, '9ca76be7-8a78-4c02-89d7-5751ba6a27d1', '9ca76be7-9068-4043-b6a8-8f7c101120ba', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"2.23\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:18'),
(83, '9ca76be7-8f6e-40fa-bd71-07f5d9373bfe', '9ca76be7-9068-4043-b6a8-8f7c101120ba', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `section` from `page_sections` where exists (select * from `pages` where `page_sections`.`page_id` = `pages`.`id` and (`slug` = \'home\' or `sub_slug` = \'home\')) and `status` = 1\",\"time\":\"0.53\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/WebsiteController.php\",\"line\":46,\"hash\":\"78c7353a485e7754c6222e715fa1043e\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:18'),
(84, '9ca76be7-9028-448e-bd00-d96546665a59', '9ca76be7-9068-4043-b6a8-8f7c101120ba', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/css\\/home.css\",\"method\":\"GET\",\"controller_action\":\"App\\\\Http\\\\Controllers\\\\WebsiteController@page_css_marge\",\"middleware\":[\"web\"],\"headers\":{\"accept\":\"text\\/css,*\\/*;q=0.1\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6ImdPWWFOMmZtUnFoWGpqTWZWcUNrSWc9PSIsInZhbHVlIjoicDRNYlBhUlEybGdQMmFIVUlTdkRoU0JJQWN4OGVFSjBPZnBTNE1ZbVIvTmYzdWpqdnVlU3YvNXpxUVZQa2ZvZnBReVBQWk9aeFl2WFJLdTdZcUJJSE9MWHF1Vmx1RUYzL2dNUGxaU0JKZWZtVGIyUFord1R0aFdESmVFclltZEoiLCJtYWMiOiJiOTljOGZlNjQ2Mzk4NTk2ZDQzMDIwOTM4M2MwODE3NGU3ZmY3MGRkZWJiYTYwMmE4NDI0Y2Q2YzgzM2Q2OTIzIiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6ImsvQkl4NGt5U2tqRnBZWjZJZWdpZ0E9PSIsInZhbHVlIjoiZ3JBS3RGK0wwYldVNHNSL0dvZlRaQSt6SWhHdGtFMEVDbVdwUjZ1aDdHL3FWS1dFOHZsbE9ZUi9qOUVOR0VhN1hyNWN2aFlQQ0dKMWRzcHoxK0VtenNuVTNLSEFxdTN3M2tlTFhQSFJOZEs2b1RSVWN4Q3dDOHhhbFhqMVF5VWIiLCJtYWMiOiJmNjUwNGE3MjYzOGQ4MjFjYTBlMjk0ZmJhZDFiNDRhZTI5N2YzMzc3ZWRhNTExM2ZjZWYxZDEzOWZmNWE3MzA2IiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"referer\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\\/\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"bn-client-port\":\"53659\"},\"payload\":[],\"session\":{\"_token\":\"LRxyPLoQJNY1W5oGhLv6ZerYR6SCJxkgEcNHcWiN\",\"_previous\":{\"url\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\\/css\\/home.css\"},\"_flash\":{\"old\":[],\"new\":[]}},\"response_status\":200,\"response\":\"Empty Response\",\"duration\":51,\"memory\":2,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:18'),
(85, '9ca76be7-eed9-4ed1-8a0d-c2b27f6e6e88', '9ca76be7-fbc2-46c0-b526-37e82b37cf14', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"1.92\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:18'),
(86, '9ca76be7-f99a-4758-90cd-0b5d737c930a', '9ca76be7-fbc2-46c0-b526-37e82b37cf14', NULL, 1, 'view', '{\"name\":\"errors::404\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/404.blade.php\",\"data\":[\"exception\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:18'),
(87, '9ca76be7-faa3-490b-905c-c5ff656f9633', '9ca76be7-fbc2-46c0-b526-37e82b37cf14', NULL, 1, 'view', '{\"name\":\"errors::minimal\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/minimal.blade.php\",\"data\":[\"exception\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:18'),
(88, '9ca76be7-fb71-48f5-8e13-f1e76c3d9ebf', '9ca76be7-fbc2-46c0-b526-37e82b37cf14', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/media\\/logo-footer.png\",\"method\":\"GET\",\"controller_action\":null,\"middleware\":[],\"headers\":{\"accept\":\"image\\/avif,image\\/webp,image\\/apng,image\\/svg+xml,image\\/*,*\\/*;q=0.8\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6ImdPWWFOMmZtUnFoWGpqTWZWcUNrSWc9PSIsInZhbHVlIjoicDRNYlBhUlEybGdQMmFIVUlTdkRoU0JJQWN4OGVFSjBPZnBTNE1ZbVIvTmYzdWpqdnVlU3YvNXpxUVZQa2ZvZnBReVBQWk9aeFl2WFJLdTdZcUJJSE9MWHF1Vmx1RUYzL2dNUGxaU0JKZWZtVGIyUFord1R0aFdESmVFclltZEoiLCJtYWMiOiJiOTljOGZlNjQ2Mzk4NTk2ZDQzMDIwOTM4M2MwODE3NGU3ZmY3MGRkZWJiYTYwMmE4NDI0Y2Q2YzgzM2Q2OTIzIiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6ImsvQkl4NGt5U2tqRnBZWjZJZWdpZ0E9PSIsInZhbHVlIjoiZ3JBS3RGK0wwYldVNHNSL0dvZlRaQSt6SWhHdGtFMEVDbVdwUjZ1aDdHL3FWS1dFOHZsbE9ZUi9qOUVOR0VhN1hyNWN2aFlQQ0dKMWRzcHoxK0VtenNuVTNLSEFxdTN3M2tlTFhQSFJOZEs2b1RSVWN4Q3dDOHhhbFhqMVF5VWIiLCJtYWMiOiJmNjUwNGE3MjYzOGQ4MjFjYTBlMjk0ZmJhZDFiNDRhZTI5N2YzMzc3ZWRhNTExM2ZjZWYxZDEzOWZmNWE3MzA2IiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"referer\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\\/\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"bn-client-port\":\"53676\"},\"payload\":[],\"session\":[],\"response_status\":404,\"response\":\"HTML Response\",\"duration\":69,\"memory\":4,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:18'),
(89, '9ca76be9-d9f1-48f7-a17b-0924881c1e20', '9ca76be9-df91-4ab4-8be1-c5c5dc0b39ad', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"2.23\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:19'),
(90, '9ca76be9-dee4-44b5-bc89-52e49a6bfc26', '9ca76be9-df91-4ab4-8be1-c5c5dc0b39ad', NULL, 1, 'view', '{\"name\":\"errors::404\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/404.blade.php\",\"data\":[\"exception\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:19'),
(91, '9ca76be9-df14-4f94-8035-33a761180960', '9ca76be9-df91-4ab4-8be1-c5c5dc0b39ad', NULL, 1, 'view', '{\"name\":\"errors::minimal\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/minimal.blade.php\",\"data\":[\"exception\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:19'),
(92, '9ca76be9-df52-4343-a142-b71051369ca9', '9ca76be9-df91-4ab4-8be1-c5c5dc0b39ad', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/assets\\/images\\/flooring-favicon.png?dssa=\",\"method\":\"GET\",\"controller_action\":null,\"middleware\":[],\"headers\":{\"accept\":\"image\\/avif,image\\/webp,image\\/apng,image\\/svg+xml,image\\/*,*\\/*;q=0.8\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6IkJjOVJhaEppbnpWRlJnZGtnS0E5dUE9PSIsInZhbHVlIjoiNUlGZVpzbmZ2aVF0aGFzU2tHdm0xdzQ0SGtVazFGRlZuOHJFdUJlOWR2d0x6TlRvNFRtbVZXNllVUC9sTHJtREFXZ3AyNDJkMlh2SW9KaGdCV0pzczFnZE1IdGJWSVFBemVyK2gxTG9IYjVYQlpJNzFBcG5iamFZcWZXOU1qankiLCJtYWMiOiI3YjVlYTkxOTY3ZmMyOTRhYjE5MDI5NjM5ZGY5MWRiZDBiYTc0OGFlMzYyNjZjYTYzZmM2NTI2NTY1NGIxNzBkIiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6IllDQ0NyU1p0b3NFK0ovRWxiak9idGc9PSIsInZhbHVlIjoiN3FPeno1c043bWt4UCt5SHJScWFCVmExSTBhSEwxYTJ6S2t5SHAvL2I3YWJRRGFxRDUwN3BySHUyeDNWbHBWelh0UGdCa3Z6Vi8rZ3UxQmdmMW9HT3pVMjdSS2ROWHloelNBQkkvUjV5MWtmTVdIcW5KQXJDZlRaS0VSM1Vod3MiLCJtYWMiOiJiZTExMzViZjJjZjU3Y2I0ZDdiODZiOGMwNzg4MTE3YTg2OWUwZDM0MzhmYjRkMWE5NzFkOWQ4Yzk4ZWYzN2VkIiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"referer\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\\/\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"bn-client-port\":\"53673\"},\"payload\":{\"dssa\":null},\"session\":[],\"response_status\":404,\"response\":\"HTML Response\",\"duration\":52,\"memory\":4,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:27:19'),
(93, '9ca76c8e-eb0f-4fae-8dd9-3a6d56c0e98c', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `pages` where `type` = \'page\' and `slug` = \'home\' and `status` = 1 limit 1\",\"time\":\"2.99\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"6a711c996a2206eb839551ea363ea29c\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(94, '9ca76c8e-ee23-4327-bf84-2697771bffba', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'model', '{\"action\":\"retrieved\",\"model\":\"App\\\\Models\\\\Page\",\"count\":1,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(95, '9ca76c8e-f017-4cd4-b899-6d45eb72d373', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `id`, `sort_by`, `page_id`, `content`, `section`, `section_title`, `status` from `page_sections` where `page_sections`.`page_id` in (1) and `status` = 1 order by `sort_by` asc\",\"time\":\"0.67\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":24,\"hash\":\"cf684b5dbcff3320fc94629833a555a6\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(96, '9ca76c8e-f02f-4610-aad0-df5ff64274f8', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'model', '{\"action\":\"retrieved\",\"model\":\"App\\\\Models\\\\PageSection\",\"count\":12,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(97, '9ca76c8e-f23d-461c-8926-7a8b00dd3db8', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `pages`.*, `section_services`.`section_id` as `pivot_section_id`, `section_services`.`service_id` as `pivot_service_id` from `pages` inner join `section_services` on `pages`.`id` = `section_services`.`service_id` where `section_services`.`section_id` in (1, 2, 3, 4, 5, 6) and `status` = 1\",\"time\":\"0.58\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":24,\"hash\":\"e2fa9f0816a90e3042be0d5990396f43\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(98, '9ca76c8e-f289-4048-a7c4-51ec8ffce92d', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `id`, `sort_by`, `page_id`, `content`, `section`, `section_title`, `status` from `page_sections` where `page_sections`.`page_id` in (1) and `status` = 1 order by `sort_by` asc\",\"time\":\"0.42\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"cf684b5dbcff3320fc94629833a555a6\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(99, '9ca76c8e-f2f7-4282-a3ee-f3ace88003b5', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `pages`.*, `section_services`.`section_id` as `pivot_section_id`, `section_services`.`service_id` as `pivot_service_id` from `pages` inner join `section_services` on `pages`.`id` = `section_services`.`service_id` where `section_services`.`section_id` in (1, 2, 3, 4, 5, 6) and `status` = 1\",\"time\":\"0.46\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"e2fa9f0816a90e3042be0d5990396f43\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(100, '9ca76c8e-f8a5-4570-9526-2b799e42f4bd', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'view', '{\"name\":\"index\",\"path\":\"\\/resources\\/views\\/index.blade.php\",\"data\":[\"pageData\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[35:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(101, '9ca76c8e-f906-4490-aa80-0017afed4866', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"0.40\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":36,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(102, '9ca76c8e-fa4e-4a2c-bcff-dc4f5229e176', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'view', '{\"name\":\"components.section_2\",\"path\":\"\\/resources\\/views\\/components\\/section_2.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[35:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(103, '9ca76c8e-fa90-471c-97b5-4b8dea98d30e', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"0.39\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":36,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(104, '9ca76c8e-fad7-4457-a150-456e5b793324', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'view', '{\"name\":\"components.section_3\",\"path\":\"\\/resources\\/views\\/components\\/section_3.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[35:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(105, '9ca76c8e-fb0f-4860-a927-b00e6a40c97e', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"0.32\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":36,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(106, '9ca76c8e-fb85-4df6-a9af-ac912440017e', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select count(*) as aggregate from `pages` where `type` in (\'service\', \'sub service\') and `status` = 1\",\"time\":\"0.37\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/storage\\/framework\\/views\\/9150a587f53c49e2523bb329caff5356.php\",\"line\":18,\"hash\":\"ee41e4d8a767ab022570f596b8b74598\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(107, '9ca76c8e-fbfb-499a-beba-b4d65aa0f19e', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'view', '{\"name\":\"components.section_6\",\"path\":\"\\/resources\\/views\\/components\\/section_6.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[35:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(108, '9ca76c8e-fc31-4559-a7a4-fc0f1f0743c0', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"0.31\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":36,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(109, '9ca76c8e-fc7a-415e-9989-539320abb316', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'view', '{\"name\":\"components.section_13\",\"path\":\"\\/resources\\/views\\/components\\/section_13.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[35:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(110, '9ca76c8e-fcb0-42bb-97ca-31ad1566f4c0', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"0.31\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":36,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(111, '9ca76c8e-fce3-49a0-bbaa-8c9cb3d91333', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'view', '{\"name\":\"components.section_5\",\"path\":\"\\/resources\\/views\\/components\\/section_5.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[35:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(112, '9ca76c8e-fd17-494a-aecb-6c4a515ba613', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"0.30\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":36,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(113, '9ca76c8e-fd5c-4a0e-a1d0-2563c1b4d41b', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'view', '{\"name\":\"components.section_1\",\"path\":\"\\/resources\\/views\\/components\\/section_1.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[35:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(114, '9ca76c8e-fd92-4da6-92be-052af55988c8', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"0.33\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":36,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(115, '9ca76c8e-fe20-4968-b383-0c17f6a38bb0', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `menus` where `parent_id` is null order by `sort_order` asc\",\"time\":\"0.41\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":50,\"hash\":\"58c83c9dffb061e235b7c54fcbde30b0\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(116, '9ca76c8e-fe6b-4da0-ac4c-b5861b11df16', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `pages` where `type` = \'service\' and `status` = 1\",\"time\":\"0.42\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":51,\"hash\":\"52df561862381c57487fc461b66f54d3\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(117, '9ca76c8e-feae-49af-af8e-7162f1e55a36', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `pages` where `type` = \'service\' and `footer_menu` = 1 and `status` = 1\",\"time\":\"0.36\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":52,\"hash\":\"07a959f28706fac789105d26aa3f5859\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(118, '9ca76c8e-fec5-4325-aa8e-52d307bbb021', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'view', '{\"name\":\"layouts.master\",\"path\":\"\\/resources\\/views\\/layouts\\/master.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\",\"mega_menus\",\"services\",\"footer_services\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[49:59]\",\"type\":\"composer\"},{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[35:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(119, '9ca76c8e-fef6-4814-ae48-87ed15d6c984', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"0.30\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":36,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(120, '9ca76c8f-003f-4a19-b305-c84fadfad397', '9ca76c8f-0197-493e-9a93-9b690cf2da66', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/\",\"method\":\"GET\",\"controller_action\":\"App\\\\Http\\\\Controllers\\\\WebsiteController@index\",\"middleware\":[\"web\"],\"headers\":{\"accept\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.7\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6ImRiTlpnVVJBbVRFTDdZTTVqUE11MWc9PSIsInZhbHVlIjoicmh6bkZpdHNkbysvWVM4cVVWeEZOMHNjU1YvdllIM0h6bEkzTWxrOUhxdytNVDF1alk4elpNMWkxQWxxY3RDRm4rTU9DTm5mM0FqN2taM3dMNTNlWldCcEloOVN6R2QwcEgxTjRlcFF2Z3VQZDFMRDl0aXcvUlBHWk5TcFpqT20iLCJtYWMiOiI0YmYxNjQyZDgwNjA5MGQxMTQxNmIwZTM4OTc0MDY5MzBjN2E3MWQxNGMxYTFjNDE5NzA5YjQ0NTY4OWIyY2UyIiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6IlZRK01NaDliMUR2NHpMdjVzY3N1SEE9PSIsInZhbHVlIjoiOTQ2M1RlczFRWDkybWo0SFU3b3VtVVB3NStMTm9PY0FFbVVtNW9xWEpZejA3OFUxSkRyZHZGOVkwR0lFZmVMdjJTbkJCeFNaYmN4U05yNnhpdUZwNjZ3Zk9TeUw0ZnRZdVBLbDJPTnpaRmhTcmxmUlNYczlPQm9HNi9xelR4Q3AiLCJtYWMiOiJkNmQxZDdiOGNlZGMyNzM1Njk2YTE2NDY4OTQ0NDU0Mjc1OWZmZWFjMjdhZjZhZDM3YzYwYzlmYmJmNjE2YjdiIiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"upgrade-insecure-requests\":\"1\",\"bn-client-port\":\"53756\"},\"payload\":[],\"session\":{\"_token\":\"LRxyPLoQJNY1W5oGhLv6ZerYR6SCJxkgEcNHcWiN\",\"_previous\":{\"url\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\"},\"_flash\":{\"old\":[],\"new\":[]}},\"response_status\":200,\"response\":{\"view\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/resources\\/views\\/index.blade.php\",\"data\":{\"pageData\":\"App\\\\Models\\\\Page:1\",\"settings\":{\"contact\":\"[{\\\"heading\\\":null,\\\"map\\\":null,\\\"address\\\":null,\\\"email\\\":\\\"info@flooringperth\\\",\\\"phone\\\":\\\"1111111111\\\",\\\"fax\\\":null}]\",\"social\":\"{\\\"facebook\\\":\\\"https:\\\\\\/\\\\\\/www.facebook.com\\\",\\\"instagram\\\":null,\\\"linkedin\\\":null,\\\"pinterest\\\":\\\"https:\\\\\\/\\\\\\/www.pinterest.com\\\",\\\"twitter\\\":null}\",\"donations\":\"[\\\"50\\\",\\\"100\\\",\\\"150\\\",\\\"200\\\"]\",\"theme\":\"{\\\"header_logo_alt\\\":\\\"header logo\\\",\\\"header_logo\\\":\\\"logo.png\\\",\\\"footer_logo_alt\\\":\\\"footer logo\\\",\\\"footer_logo\\\":\\\"logo-footer.png\\\",\\\"footer_description\\\":null,\\\"copyright\\\":\\\"Copyright \\\\u00a9 2024 <a class=\\\\\\\"d-inline-block\\\\\\\" href=\\\\\\\"\\\\\\/\\\\\\\">env(\'APP_NAME\')<\\\\\\/a> | <a class=\\\\\\\"d-inline-block\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/ozwebdevelopment.com.au\\\\\\/web-design\\\\\\\">website design by ozwebdevelopment<\\\\\\/a>\\\"}\"},\"contact\":[{\"heading\":null,\"map\":null,\"address\":null,\"email\":\"info@flooringperth\",\"phone\":\"1111111111\",\"fax\":null}],\"social\":{\"facebook\":\"https:\\/\\/www.facebook.com\",\"instagram\":null,\"linkedin\":null,\"pinterest\":\"https:\\/\\/www.pinterest.com\",\"twitter\":null},\"theme\":{\"header_logo_alt\":\"header logo\",\"header_logo\":\"logo.png\",\"footer_logo_alt\":\"footer logo\",\"footer_logo\":\"logo-footer.png\",\"footer_description\":null,\"copyright\":\"Copyright \\u00a9 2024 <a class=\\\"d-inline-block\\\" href=\\\"\\/\\\">env(\'APP_NAME\')<\\/a> | <a class=\\\"d-inline-block\\\" href=\\\"https:\\/\\/ozwebdevelopment.com.au\\/web-design\\\">website design by ozwebdevelopment<\\/a>\"},\"seo\":[]}},\"duration\":336,\"memory\":10,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:07'),
(121, '9ca76c91-c32d-48a7-b957-f2fb1a4d75db', '9ca76c91-c561-48d3-9f78-390d31e08829', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `section` from `page_sections` where exists (select * from `pages` where `page_sections`.`page_id` = `pages`.`id` and (`slug` = \'home\' or `sub_slug` = \'home\')) and `status` = 1\",\"time\":\"2.35\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/WebsiteController.php\",\"line\":46,\"hash\":\"78c7353a485e7754c6222e715fa1043e\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:09'),
(122, '9ca76c91-c4e7-4ca2-91fa-4fdaa5b528df', '9ca76c91-c561-48d3-9f78-390d31e08829', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/css\\/home.css\",\"method\":\"GET\",\"controller_action\":\"App\\\\Http\\\\Controllers\\\\WebsiteController@page_css_marge\",\"middleware\":[\"web\"],\"headers\":{\"accept\":\"text\\/css,*\\/*;q=0.1\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6IjBlbWh1aXhYZlV5eFNjaUpjL3c5MFE9PSIsInZhbHVlIjoiMzBSQ0VrMkJkTEtZUzlyWi9NOHhJZUp3NFVlV1owSG5CYzFXZTYycDkwN3JtUFZqMTBYaU80UjFZVzM0M3EzaHZ3QytWalJGNVZJQk1yS01PMVdiMFJsejhrSzI0SGhsZXo5d0cwMzNQcnI4S01hUHd6NVA5aTFldjZQd3l4cVEiLCJtYWMiOiIyYmJmZDdjNDgwZWQwZmNjY2M1ZTAyZjVhNzFlMWY3ODI5MTM0YTE0MTFlMTM4YjFhOGU5ZTk1YjBlMTIyMThiIiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6IjRLWnZEKzFrckdIc3hJc3B6OWw5blE9PSIsInZhbHVlIjoid1gxZkk2dmxRVHNxK1p6dThWZmczL1ZsbW55VHpLL3hPSzF6c24xZVdUYTlvVW5zejRkc3FOZjFSUzdJbnhUdFR4c1pHK1ptQlVDak9lUFJHK2lyZjMzK21NazhFVDA4aVM3d3hpajgySk9BZkZhSUpjZ2FDbVRrdEp0VEM2MlIiLCJtYWMiOiI0MTY3ZTkwYmI1OTQzYmVkYjczNDZlNGMzMmZhM2UyMGI0ZTg2NWY3ZmFmOWY4NDc3ZDU5Zjc0NDg4NTM4ZmU0IiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"referer\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\\/\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"bn-client-port\":\"53760\"},\"payload\":[],\"session\":{\"_token\":\"LRxyPLoQJNY1W5oGhLv6ZerYR6SCJxkgEcNHcWiN\",\"_previous\":{\"url\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\\/css\\/home.css\"},\"_flash\":{\"old\":[],\"new\":[]}},\"response_status\":200,\"response\":\"Empty Response\",\"duration\":53,\"memory\":4,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:09'),
(123, '9ca76c92-4642-4231-9e53-c91dc5779068', '9ca76c92-496a-47e3-aaca-45b605eb3e66', NULL, 1, 'view', '{\"name\":\"errors::404\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/404.blade.php\",\"data\":[\"exception\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[35:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:09'),
(124, '9ca76c92-484e-4738-810f-93d4a9f41bb5', '9ca76c92-496a-47e3-aaca-45b605eb3e66', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"1.96\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":36,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:09'),
(125, '9ca76c92-489d-4500-b84a-7021cd16bdbe', '9ca76c92-496a-47e3-aaca-45b605eb3e66', NULL, 1, 'view', '{\"name\":\"errors::minimal\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/minimal.blade.php\",\"data\":[\"exception\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[35:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:09'),
(126, '9ca76c92-48df-49c0-89dd-0c7e6d13a1c3', '9ca76c92-496a-47e3-aaca-45b605eb3e66', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"0.39\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":36,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:09'),
(127, '9ca76c92-492d-46b4-a927-387fd6a25b0e', '9ca76c92-496a-47e3-aaca-45b605eb3e66', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/media\\/logo-footer.png\",\"method\":\"GET\",\"controller_action\":null,\"middleware\":[],\"headers\":{\"accept\":\"image\\/avif,image\\/webp,image\\/apng,image\\/svg+xml,image\\/*,*\\/*;q=0.8\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6IjJtbXFNa1JNLzIzUlB6eGN5L2Fpamc9PSIsInZhbHVlIjoiQXpIZHIyVmQwQlNXYlRUQmUrZGlqa0J0VWc4cEpoRW81ZFpJRDBmejBTSVJldUtBWnNEdUlOQTQwM0EwUUt2Y25tZm1MRkFiZ2xSUkJoUGdzUS8xcnl0VFVIeUlib3g5RVpseTBtOEN6SjB6Z04yS2lBbVpFWmVOY3llbk5kSkwiLCJtYWMiOiI2MzI2OTVhMzNjMWRjY2I4NmQ2NmJkNTc2ZDBkZTQzZTI5MDE2YWRmNzVhZmYzN2JiODc5Y2I2ODZlYzAzMmZlIiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6InAzR253SDRQMWhjb3ZDWmpxNDBmcEE9PSIsInZhbHVlIjoiNlNWNjZnUE4xR0xRaDdiTTBaOVJlRzgzWi9kREFraS9WenB4NUZTcjA5Ri9rR0VDWGhyUlhvRmtyQ0NuajF1Mkd6aUxrU2VoNWZZcXVySVhFOXpjTEJPU2pkTnFRME56RjNhS1ZPc0d6VWJaaTZncXo1aEcrYVZkWTVjM2Z1UFIiLCJtYWMiOiI4YjI2NTU4ZTA4MTJmZmRmNDVhMDgxMWQyZDczNzMwNzBhM2YxNTBhMWMxYWEwM2QwNGY1ZTNlNjUzY2Y3MjJhIiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"referer\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\\/\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"bn-client-port\":\"53760\"},\"payload\":[],\"session\":[],\"response_status\":404,\"response\":\"HTML Response\",\"duration\":51,\"memory\":4,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:29:09'),
(128, '9ca76d72-ed04-4ef8-90f5-48cdf0351c9e', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"2.56\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37'),
(129, '9ca76d72-fb3c-4a36-8284-d80173bc7d61', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `pages` where `type` = \'page\' and `slug` = \'home\' and `status` = 1 limit 1\",\"time\":\"0.63\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"6a711c996a2206eb839551ea363ea29c\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37'),
(130, '9ca76d72-fb56-4817-a403-1f678f9f098c', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'model', '{\"action\":\"retrieved\",\"model\":\"App\\\\Models\\\\Page\",\"count\":1,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37'),
(131, '9ca76d72-fd4a-488d-ad65-a4dd327d8d53', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `id`, `sort_by`, `page_id`, `content`, `section`, `section_title`, `status` from `page_sections` where `page_sections`.`page_id` in (1) and `status` = 1 order by `sort_by` asc\",\"time\":\"0.62\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":24,\"hash\":\"cf684b5dbcff3320fc94629833a555a6\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37'),
(132, '9ca76d72-fd64-4ba6-bd9e-719831a98e18', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'model', '{\"action\":\"retrieved\",\"model\":\"App\\\\Models\\\\PageSection\",\"count\":12,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37'),
(133, '9ca76d72-ffb0-471a-8162-1a2e8a78e2bb', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `pages`.*, `section_services`.`section_id` as `pivot_section_id`, `section_services`.`service_id` as `pivot_service_id` from `pages` inner join `section_services` on `pages`.`id` = `section_services`.`service_id` where `section_services`.`section_id` in (1, 2, 3, 4, 5, 6) and `status` = 1\",\"time\":\"0.77\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":24,\"hash\":\"e2fa9f0816a90e3042be0d5990396f43\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37'),
(134, '9ca76d73-0011-4f4f-afce-fdf8df16b057', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `id`, `sort_by`, `page_id`, `content`, `section`, `section_title`, `status` from `page_sections` where `page_sections`.`page_id` in (1) and `status` = 1 order by `sort_by` asc\",\"time\":\"0.45\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"cf684b5dbcff3320fc94629833a555a6\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37'),
(135, '9ca76d73-00a1-4f61-91d9-0b2adc149d18', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `pages`.*, `section_services`.`section_id` as `pivot_section_id`, `section_services`.`service_id` as `pivot_service_id` from `pages` inner join `section_services` on `pages`.`id` = `section_services`.`service_id` where `section_services`.`section_id` in (1, 2, 3, 4, 5, 6) and `status` = 1\",\"time\":\"0.49\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"e2fa9f0816a90e3042be0d5990396f43\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37'),
(136, '9ca76d73-06a4-406a-b0e1-cb01f9275c9d', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'view', '{\"name\":\"index\",\"path\":\"\\/resources\\/views\\/index.blade.php\",\"data\":[\"pageData\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37'),
(137, '9ca76d73-07f2-4a0c-8d17-efebc26f75ac', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'view', '{\"name\":\"components.section_2\",\"path\":\"\\/resources\\/views\\/components\\/section_2.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37');
INSERT INTO `telescope_entries` (`sequence`, `uuid`, `batch_id`, `family_hash`, `should_display_on_index`, `type`, `content`, `created_at`) VALUES
(138, '9ca76d73-083c-4ebf-aba3-8408fdda0008', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'view', '{\"name\":\"components.section_3\",\"path\":\"\\/resources\\/views\\/components\\/section_3.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37'),
(139, '9ca76d73-08c6-4e87-a72a-6137e4057110', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select count(*) as aggregate from `pages` where `type` in (\'service\', \'sub service\') and `status` = 1\",\"time\":\"0.56\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/storage\\/framework\\/views\\/9150a587f53c49e2523bb329caff5356.php\",\"line\":18,\"hash\":\"ee41e4d8a767ab022570f596b8b74598\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37'),
(140, '9ca76d73-0933-4c8f-99cb-a36e8ffe7aaa', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'view', '{\"name\":\"components.section_6\",\"path\":\"\\/resources\\/views\\/components\\/section_6.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37'),
(141, '9ca76d73-0979-44c0-b0c2-b28369e34b9b', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'view', '{\"name\":\"components.section_13\",\"path\":\"\\/resources\\/views\\/components\\/section_13.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37'),
(142, '9ca76d73-09aa-4a0a-8ba0-8cb1aca2d856', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'view', '{\"name\":\"components.section_5\",\"path\":\"\\/resources\\/views\\/components\\/section_5.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37'),
(143, '9ca76d73-09e5-4cfd-8ad1-d41931580494', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'view', '{\"name\":\"components.section_1\",\"path\":\"\\/resources\\/views\\/components\\/section_1.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37'),
(144, '9ca76d73-0a9a-42b2-b393-00026ead3eb7', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `menus` where `parent_id` is null order by `sort_order` asc\",\"time\":\"0.82\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":50,\"hash\":\"58c83c9dffb061e235b7c54fcbde30b0\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37'),
(145, '9ca76d73-0aee-48b9-a8d0-01493c6b41a4', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `pages` where `type` = \'service\' and `status` = 1\",\"time\":\"0.46\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":51,\"hash\":\"52df561862381c57487fc461b66f54d3\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37'),
(146, '9ca76d73-0b08-4dac-ba66-c8ee4d573836', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'view', '{\"name\":\"layouts.master\",\"path\":\"\\/resources\\/views\\/layouts\\/master.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\",\"mega_menus\",\"services\",\"footer_services\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[49:61]\",\"type\":\"composer\"},{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37'),
(147, '9ca76d73-0c48-4747-8bb0-9157cc4377df', '9ca76d73-0d4c-4261-9cdb-4f128ebaadf2', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/\",\"method\":\"GET\",\"controller_action\":\"App\\\\Http\\\\Controllers\\\\WebsiteController@index\",\"middleware\":[\"web\"],\"headers\":{\"accept\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.7\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6IlJycVhVK25rUnBNTUFoZGF1UWFJc2c9PSIsInZhbHVlIjoiNXNxeG5VT0FyUCtxanYzZmRjVGRYNnVLTUVrOVlNRTZRN1AyNDA2T2FuOUVXVjZDblcvckREbUVrV0srUFF6dHlMaGhZUlRjWHcwekF3VXduNFlCZ2ZjUlhMbFlVYjRVbm9xak9BR1JueU1VZFg5a0VFQXk5d3JKS01UOE45UmIiLCJtYWMiOiJmZTMwMDBhZDIwNmY4MTAyNmMzN2RjMDM2NDA4MjFkZmE3NDY0YWE1YWNiMTUxNjlkMmUzYjRhNzYyYTJiOWE4IiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6ImFhR0lKSVdKa1BsLzE4VUJXNkRDV2c9PSIsInZhbHVlIjoiS2NyeVRjOU9SUDZVWFpselA5dURhR1FrNGszdFZ4cHEzazVaMVpUU1FJQ041YjduM21SRzdVaVZsaVZWaUt5RzR0VmJMU3R2QVlVT2YvcGkzVThXNmYrSXMvbGRoUUdoL1g4bi9aNDhESklRdHhud0RGaUFPM1RUR3QrQ0Y2bkMiLCJtYWMiOiIzZWMxNGVjNmMxYzZiYmY3ZWYwMzY0OGNkMWIxZDUzZDRkNWZkM2EyZmYzMzBkMzIyMjMzNTY2MDIxMzI5OTAwIiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"upgrade-insecure-requests\":\"1\",\"bn-client-port\":\"53878\"},\"payload\":[],\"session\":{\"_token\":\"LRxyPLoQJNY1W5oGhLv6ZerYR6SCJxkgEcNHcWiN\",\"_previous\":{\"url\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\"},\"_flash\":{\"old\":[],\"new\":[]}},\"response_status\":200,\"response\":{\"view\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/resources\\/views\\/index.blade.php\",\"data\":{\"pageData\":\"App\\\\Models\\\\Page:1\",\"settings\":{\"contact\":\"[{\\\"heading\\\":null,\\\"map\\\":null,\\\"address\\\":null,\\\"email\\\":\\\"info@flooringperth\\\",\\\"phone\\\":\\\"1111111111\\\",\\\"fax\\\":null}]\",\"social\":\"{\\\"facebook\\\":\\\"https:\\\\\\/\\\\\\/www.facebook.com\\\",\\\"instagram\\\":null,\\\"linkedin\\\":null,\\\"pinterest\\\":\\\"https:\\\\\\/\\\\\\/www.pinterest.com\\\",\\\"twitter\\\":null}\",\"donations\":\"[\\\"50\\\",\\\"100\\\",\\\"150\\\",\\\"200\\\"]\",\"theme\":\"{\\\"header_logo_alt\\\":\\\"header logo\\\",\\\"header_logo\\\":\\\"logo.png\\\",\\\"footer_logo_alt\\\":\\\"footer logo\\\",\\\"footer_logo\\\":\\\"logo-footer.png\\\",\\\"footer_description\\\":null,\\\"copyright\\\":\\\"Copyright \\\\u00a9 2024 <a class=\\\\\\\"d-inline-block\\\\\\\" href=\\\\\\\"\\\\\\/\\\\\\\">env(\'APP_NAME\')<\\\\\\/a> | <a class=\\\\\\\"d-inline-block\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/ozwebdevelopment.com.au\\\\\\/web-design\\\\\\\">website design by ozwebdevelopment<\\\\\\/a>\\\"}\"},\"contact\":[{\"heading\":null,\"map\":null,\"address\":null,\"email\":\"info@flooringperth\",\"phone\":\"1111111111\",\"fax\":null}],\"social\":{\"facebook\":\"https:\\/\\/www.facebook.com\",\"instagram\":null,\"linkedin\":null,\"pinterest\":\"https:\\/\\/www.pinterest.com\",\"twitter\":null},\"theme\":{\"header_logo_alt\":\"header logo\",\"header_logo\":\"logo.png\",\"footer_logo_alt\":\"footer logo\",\"footer_logo\":\"logo-footer.png\",\"footer_description\":null,\"copyright\":\"Copyright \\u00a9 2024 <a class=\\\"d-inline-block\\\" href=\\\"\\/\\\">env(\'APP_NAME\')<\\/a> | <a class=\\\"d-inline-block\\\" href=\\\"https:\\/\\/ozwebdevelopment.com.au\\/web-design\\\">website design by ozwebdevelopment<\\/a>\"},\"seo\":[]}},\"duration\":359,\"memory\":10,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:37'),
(148, '9ca76d75-27d0-4559-9258-9f0728e0e008', '9ca76d75-2fcd-4d4a-bebd-c4dcdabd95ca', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"2.07\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:38'),
(149, '9ca76d75-2db9-4e55-94d3-b7900b2235c9', '9ca76d75-2fcd-4d4a-bebd-c4dcdabd95ca', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `section` from `page_sections` where exists (select * from `pages` where `page_sections`.`page_id` = `pages`.`id` and (`slug` = \'home\' or `sub_slug` = \'home\')) and `status` = 1\",\"time\":\"0.92\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/WebsiteController.php\",\"line\":46,\"hash\":\"78c7353a485e7754c6222e715fa1043e\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:38'),
(150, '9ca76d75-2f67-46d1-848d-e6bb45bfe3d5', '9ca76d75-2fcd-4d4a-bebd-c4dcdabd95ca', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/css\\/home.css\",\"method\":\"GET\",\"controller_action\":\"App\\\\Http\\\\Controllers\\\\WebsiteController@page_css_marge\",\"middleware\":[\"web\"],\"headers\":{\"accept\":\"text\\/css,*\\/*;q=0.1\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6InVBTEdGdzZSUnh6bnR6a3Vzbk5tY2c9PSIsInZhbHVlIjoiRHRYUlVvRTlSc1NJZXZ5VnJaaEtrTjlEK3hJYzd1UEdDQmprOGlHS25QdFhEci9CNnIwRFBPUkNEbUdkeVlUZ2RRU2tWRDZ5WTc1R09UVnp0M1JQRExxZmRINkdQNWtwQ1FKQUd2eDhqYWlVaW9VU0ZwckliVXc3SlAxRVkxSlkiLCJtYWMiOiJiNmIxN2JhYWQ3NmQ2N2QzMjQxMzQyYjkxY2U1YjlmNzZiMzM2MDVhOGQ0OTZkYjgxZTk1Y2I1ZmNmNmU4NWQ0IiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6IlVkNDYySlMveHFoL1JETHNCK3dwbmc9PSIsInZhbHVlIjoiU3FCOVV4OW1pQWdtUzl3c0hFZEdXTi8wUzl3b2dRejBhbTA0ZENtL1pwbDZ2bi9rZ1MvdFpDM3N3ai9ocUphdTdLdFFNVHNnOWZRN3pvZjVTaVMyNzUyaFNzRXM0WVZnekNtQ2hJOXdSVUhpcm9xZHhmQVFsNEtudkFwVUFRMGoiLCJtYWMiOiI4YTBjOTcxNDBkYjlmM2Y3Y2JmNmFjMWRmY2EzNGZlN2ZiNThkODM0MzAwYTViY2E4YmY0NDEzYTFlMjdkYTQyIiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"referer\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\\/\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"bn-client-port\":\"53878\"},\"payload\":[],\"session\":{\"_token\":\"LRxyPLoQJNY1W5oGhLv6ZerYR6SCJxkgEcNHcWiN\",\"_previous\":{\"url\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\\/css\\/home.css\"},\"_flash\":{\"old\":[],\"new\":[]}},\"response_status\":200,\"response\":\"Empty Response\",\"duration\":64,\"memory\":4,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:38'),
(151, '9ca76d75-321f-49ee-b7f2-b0b75a72816a', '9ca76d75-38a0-468a-a375-05c8d2d5acae', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"2.46\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:38'),
(152, '9ca76d75-37d7-47be-8b1a-7a92180402d3', '9ca76d75-38a0-468a-a375-05c8d2d5acae', NULL, 1, 'view', '{\"name\":\"errors::404\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/404.blade.php\",\"data\":[\"exception\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:38'),
(153, '9ca76d75-3814-45de-9e0a-aa5b7dee1fef', '9ca76d75-38a0-468a-a375-05c8d2d5acae', NULL, 1, 'view', '{\"name\":\"errors::minimal\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/minimal.blade.php\",\"data\":[\"exception\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:38'),
(154, '9ca76d75-385c-4ee2-84a3-ad740a3c9b43', '9ca76d75-38a0-468a-a375-05c8d2d5acae', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/media\\/logo-footer.png\",\"method\":\"GET\",\"controller_action\":null,\"middleware\":[],\"headers\":{\"accept\":\"image\\/avif,image\\/webp,image\\/apng,image\\/svg+xml,image\\/*,*\\/*;q=0.8\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6InVBTEdGdzZSUnh6bnR6a3Vzbk5tY2c9PSIsInZhbHVlIjoiRHRYUlVvRTlSc1NJZXZ5VnJaaEtrTjlEK3hJYzd1UEdDQmprOGlHS25QdFhEci9CNnIwRFBPUkNEbUdkeVlUZ2RRU2tWRDZ5WTc1R09UVnp0M1JQRExxZmRINkdQNWtwQ1FKQUd2eDhqYWlVaW9VU0ZwckliVXc3SlAxRVkxSlkiLCJtYWMiOiJiNmIxN2JhYWQ3NmQ2N2QzMjQxMzQyYjkxY2U1YjlmNzZiMzM2MDVhOGQ0OTZkYjgxZTk1Y2I1ZmNmNmU4NWQ0IiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6IlVkNDYySlMveHFoL1JETHNCK3dwbmc9PSIsInZhbHVlIjoiU3FCOVV4OW1pQWdtUzl3c0hFZEdXTi8wUzl3b2dRejBhbTA0ZENtL1pwbDZ2bi9rZ1MvdFpDM3N3ai9ocUphdTdLdFFNVHNnOWZRN3pvZjVTaVMyNzUyaFNzRXM0WVZnekNtQ2hJOXdSVUhpcm9xZHhmQVFsNEtudkFwVUFRMGoiLCJtYWMiOiI4YTBjOTcxNDBkYjlmM2Y3Y2JmNmFjMWRmY2EzNGZlN2ZiNThkODM0MzAwYTViY2E4YmY0NDEzYTFlMjdkYTQyIiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"referer\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\\/\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"bn-client-port\":\"53881\"},\"payload\":[],\"session\":[],\"response_status\":404,\"response\":\"HTML Response\",\"duration\":58,\"memory\":4,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:31:38'),
(155, '9ca76e19-6057-45a7-8054-8f28efeb6557', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"2.85\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(156, '9ca76e19-6ea2-40de-9bb9-c62eccb7e89f', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `pages` where `type` = \'page\' and `slug` = \'home\' and `status` = 1 limit 1\",\"time\":\"0.64\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"6a711c996a2206eb839551ea363ea29c\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(157, '9ca76e19-6ebf-4b31-a293-292be925b4e0', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'model', '{\"action\":\"retrieved\",\"model\":\"App\\\\Models\\\\Page\",\"count\":1,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(158, '9ca76e19-70bc-443e-95d6-a12b726064d9', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `id`, `sort_by`, `page_id`, `content`, `section`, `section_title`, `status` from `page_sections` where `page_sections`.`page_id` in (1) and `status` = 1 order by `sort_by` asc\",\"time\":\"0.62\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":24,\"hash\":\"cf684b5dbcff3320fc94629833a555a6\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(159, '9ca76e19-70da-44cb-9357-d3f54adbc735', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'model', '{\"action\":\"retrieved\",\"model\":\"App\\\\Models\\\\PageSection\",\"count\":12,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(160, '9ca76e19-72fd-4032-8eaa-43359f1fb364', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `pages`.*, `section_services`.`section_id` as `pivot_section_id`, `section_services`.`service_id` as `pivot_service_id` from `pages` inner join `section_services` on `pages`.`id` = `section_services`.`service_id` where `section_services`.`section_id` in (1, 2, 3, 4, 5, 6) and `status` = 1\",\"time\":\"0.76\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":24,\"hash\":\"e2fa9f0816a90e3042be0d5990396f43\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(161, '9ca76e19-735c-4b34-988e-a3b9d35f6a7d', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `id`, `sort_by`, `page_id`, `content`, `section`, `section_title`, `status` from `page_sections` where `page_sections`.`page_id` in (1) and `status` = 1 order by `sort_by` asc\",\"time\":\"0.53\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"cf684b5dbcff3320fc94629833a555a6\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(162, '9ca76e19-73dc-4669-96f6-5f1b9efc015c', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `pages`.*, `section_services`.`section_id` as `pivot_section_id`, `section_services`.`service_id` as `pivot_service_id` from `pages` inner join `section_services` on `pages`.`id` = `section_services`.`service_id` where `section_services`.`section_id` in (1, 2, 3, 4, 5, 6) and `status` = 1\",\"time\":\"0.53\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"e2fa9f0816a90e3042be0d5990396f43\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(163, '9ca76e19-7975-47ed-a5bd-926b9d701702', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'view', '{\"name\":\"index\",\"path\":\"\\/resources\\/views\\/index.blade.php\",\"data\":[\"pageData\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(164, '9ca76e19-7ac2-4f3b-b2d4-f5568837d467', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'view', '{\"name\":\"components.section_2\",\"path\":\"\\/resources\\/views\\/components\\/section_2.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(165, '9ca76e19-7b0b-4580-b925-02db6b6d8f83', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'view', '{\"name\":\"components.section_3\",\"path\":\"\\/resources\\/views\\/components\\/section_3.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(166, '9ca76e19-7b94-488f-b48d-f54708dd4ee6', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select count(*) as aggregate from `pages` where `type` in (\'service\', \'sub service\') and `status` = 1\",\"time\":\"0.59\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/storage\\/framework\\/views\\/9150a587f53c49e2523bb329caff5356.php\",\"line\":18,\"hash\":\"ee41e4d8a767ab022570f596b8b74598\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(167, '9ca76e19-7bff-4e1a-b351-123b82c7c9d6', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'view', '{\"name\":\"components.section_6\",\"path\":\"\\/resources\\/views\\/components\\/section_6.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(168, '9ca76e19-7c46-4dbd-8341-5f2ba7a87b49', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'view', '{\"name\":\"components.section_13\",\"path\":\"\\/resources\\/views\\/components\\/section_13.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(169, '9ca76e19-7c76-4a2f-9705-5ddebb72bc22', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'view', '{\"name\":\"components.section_5\",\"path\":\"\\/resources\\/views\\/components\\/section_5.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(170, '9ca76e19-7cb4-4ec3-a9de-01afb05e3e65', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'view', '{\"name\":\"components.section_1\",\"path\":\"\\/resources\\/views\\/components\\/section_1.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(171, '9ca76e19-7d43-49b0-9d3a-f7a3dbd46b67', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `menus` where `parent_id` is null order by `sort_order` asc\",\"time\":\"0.45\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":50,\"hash\":\"58c83c9dffb061e235b7c54fcbde30b0\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(172, '9ca76e19-7d94-4ef0-b9e4-2ecc5ff6b6db', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `pages` where `type` = \'service\' and `status` = 1\",\"time\":\"0.44\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":51,\"hash\":\"52df561862381c57487fc461b66f54d3\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(173, '9ca76e19-7dab-4a67-92bb-33379c420158', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'view', '{\"name\":\"layouts.master\",\"path\":\"\\/resources\\/views\\/layouts\\/master.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\",\"mega_menus\",\"services\",\"footer_services\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[49:61]\",\"type\":\"composer\"},{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(174, '9ca76e19-8233-4983-8a39-914a876836eb', '9ca76e19-834d-446f-96c6-31d04f453e28', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/\",\"method\":\"GET\",\"controller_action\":\"App\\\\Http\\\\Controllers\\\\WebsiteController@index\",\"middleware\":[\"web\"],\"headers\":{\"accept\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.7\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6IlE3bTkzMzJyOVp5YllVcmRnQTNEUEE9PSIsInZhbHVlIjoid2VwVkVvOHBVc2tvRVR3NStHZGU4QmU2ZGxsOXJ3UVYrdUNBNStsd0gyNXBDZ3dPM1lpS3RvZjFFZDZmY3BmR2cwSFU5RGdTQ00vRENTd1orQm9ncVhTakd3cWhXaHcvaFYwbjlIT0NpOWUrbm81NGlYQ09lZjg4QU9ieGhKbk4iLCJtYWMiOiIwNDhjN2M4ZDZkYjU5MmZiMzAyNDNiZWRlYTZmMDc4YzZjZmQ5MGQxZTAzYzNkMDFiMDdhOTg2Nzc2NTcwYmFhIiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6IitLakphTFpHcFgvQ0x3RjYxekU1dkE9PSIsInZhbHVlIjoiVkN3ZGxUeW5QNjYrZ0E1TllKZnBLdWZuTGtQc1lXR0JSRUxHT3ZZL3lpWUZ2bExlQ3ZSZmk0MWZtWE5qdXJOejErSDVqUzRoUy9BVEU0Q1o4cGs5VFZ0cHFWTEg2NzhjbkowWVkwUlVOL1lFaUJWRzhmcmJMampYTWxlcEczSksiLCJtYWMiOiIyOTU0Y2Y5MjgzMjhjYTYzODA2MDFlMjg4YmYzZDc4ZGNlYTAyMjk5ZWMzMDRkMjBlYTI3OTEzYjQwZWEwNDdjIiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"upgrade-insecure-requests\":\"1\",\"bn-client-port\":\"25801\"},\"payload\":[],\"session\":{\"_token\":\"LRxyPLoQJNY1W5oGhLv6ZerYR6SCJxkgEcNHcWiN\",\"_previous\":{\"url\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\"},\"_flash\":{\"old\":[],\"new\":[]}},\"response_status\":200,\"response\":{\"view\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/resources\\/views\\/index.blade.php\",\"data\":{\"pageData\":\"App\\\\Models\\\\Page:1\",\"settings\":{\"contact\":\"[{\\\"heading\\\":null,\\\"map\\\":null,\\\"address\\\":null,\\\"email\\\":\\\"info@flooringperth\\\",\\\"phone\\\":\\\"1111111111\\\",\\\"fax\\\":null}]\",\"social\":\"{\\\"facebook\\\":\\\"https:\\\\\\/\\\\\\/www.facebook.com\\\",\\\"instagram\\\":null,\\\"linkedin\\\":null,\\\"pinterest\\\":\\\"https:\\\\\\/\\\\\\/www.pinterest.com\\\",\\\"twitter\\\":null}\",\"donations\":\"[\\\"50\\\",\\\"100\\\",\\\"150\\\",\\\"200\\\"]\",\"theme\":\"{\\\"header_logo_alt\\\":\\\"header logo\\\",\\\"header_logo\\\":\\\"logo.png\\\",\\\"footer_logo_alt\\\":\\\"footer logo\\\",\\\"footer_logo\\\":\\\"logo-footer.png\\\",\\\"footer_description\\\":null,\\\"copyright\\\":\\\"Copyright \\\\u00a9 2024 <a class=\\\\\\\"d-inline-block\\\\\\\" href=\\\\\\\"\\\\\\/\\\\\\\">env(\'APP_NAME\')<\\\\\\/a> | <a class=\\\\\\\"d-inline-block\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/ozwebdevelopment.com.au\\\\\\/web-design\\\\\\\">website design by ozwebdevelopment<\\\\\\/a>\\\"}\"},\"contact\":[{\"heading\":null,\"map\":null,\"address\":null,\"email\":\"info@flooringperth\",\"phone\":\"1111111111\",\"fax\":null}],\"social\":{\"facebook\":\"https:\\/\\/www.facebook.com\",\"instagram\":null,\"linkedin\":null,\"pinterest\":\"https:\\/\\/www.pinterest.com\",\"twitter\":null},\"theme\":{\"header_logo_alt\":\"header logo\",\"header_logo\":\"logo.png\",\"footer_logo_alt\":\"footer logo\",\"footer_logo\":\"logo-footer.png\",\"footer_description\":null,\"copyright\":\"Copyright \\u00a9 2024 <a class=\\\"d-inline-block\\\" href=\\\"\\/\\\">env(\'APP_NAME\')<\\/a> | <a class=\\\"d-inline-block\\\" href=\\\"https:\\/\\/ozwebdevelopment.com.au\\/web-design\\\">website design by ozwebdevelopment<\\/a>\"},\"seo\":[]}},\"duration\":379,\"memory\":10,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:26'),
(175, '9ca76e1b-7b38-4cc4-82f3-2a5a91d8b85a', '9ca76e1b-8235-48fb-99cf-c94fe8277acf', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"1.99\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:27'),
(176, '9ca76e1b-80a3-46a0-90aa-b707805d190c', '9ca76e1b-8235-48fb-99cf-c94fe8277acf', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `section` from `page_sections` where exists (select * from `pages` where `page_sections`.`page_id` = `pages`.`id` and (`slug` = \'home\' or `sub_slug` = \'home\')) and `status` = 1\",\"time\":\"0.71\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/WebsiteController.php\",\"line\":46,\"hash\":\"78c7353a485e7754c6222e715fa1043e\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:27'),
(177, '9ca76e1b-81e7-4f97-b8ff-1dcc8553faa4', '9ca76e1b-8235-48fb-99cf-c94fe8277acf', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/css\\/home.css\",\"method\":\"GET\",\"controller_action\":\"App\\\\Http\\\\Controllers\\\\WebsiteController@page_css_marge\",\"middleware\":[\"web\"],\"headers\":{\"accept\":\"text\\/css,*\\/*;q=0.1\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6IkU1dzVaMThIazF0TGFnWlBTcEsvNkE9PSIsInZhbHVlIjoiQ2IzSHBCa05Ydmw5OHMyT2JpaGJyMnFPRGFIeStUMCsvbnUvVW9uck1acEhMMENxQlkxUGdESXlQQTViNVRBbWFweUJrV0lud2FZTEFWWWlBU1h5ZEJRV1hUMGEwUUtCakhZcnA0VWdHZG9ubE1DUW93NW83aUlNZjB4c2JRMm8iLCJtYWMiOiIxMTFjNTM0MWY5NzZhN2Q5Njk5NzlmODU1YWJiMWRlMWRhMjk2YjVjMGIxZGM5YzRmZjgwYmRiYTlhYmM1N2IyIiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6IkhKNldHZ0hDSWpPOFFTd0piYXQ5R1E9PSIsInZhbHVlIjoiWDIrY3A2N09tYjdpZTVmTDgzdWxlZ01aUkp3RDV5Y3JqbUtBbStEY3M2ZzBhN0Evc3ZwTjBFbDJEZVdKQ1prOHRsTWpxYXNCa3VEWGU1bm9nT05JWFFqWjdzc2w2REZTNVNYYUt6NGxtbmZnZXZqaVVYNGhiQ29KQkpjemtGeWoiLCJtYWMiOiJkNDJjNTViZmIzM2JjMDBjMjc0MDlmYjM5ZDhhZWZhNzE2NTdiYjNiNDUwMDQ4M2Q2MmE5N2ExMTI2NTM4Y2RhIiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"referer\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\\/\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"bn-client-port\":\"53970\"},\"payload\":[],\"session\":{\"_token\":\"LRxyPLoQJNY1W5oGhLv6ZerYR6SCJxkgEcNHcWiN\",\"_previous\":{\"url\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\\/css\\/home.css\"},\"_flash\":{\"old\":[],\"new\":[]}},\"response_status\":200,\"response\":\"Empty Response\",\"duration\":58,\"memory\":4,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:27'),
(178, '9ca76e1b-84aa-4a94-992a-62e07fd7da9b', '9ca76e1b-8acd-443d-b9b3-f70340b16e14', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"2.72\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:27'),
(179, '9ca76e1b-8a01-42c2-ba7d-1ec20e668b23', '9ca76e1b-8acd-443d-b9b3-f70340b16e14', NULL, 1, 'view', '{\"name\":\"errors::404\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/404.blade.php\",\"data\":[\"exception\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:27'),
(180, '9ca76e1b-8a3f-47d3-9c35-e153c4b3ce8c', '9ca76e1b-8acd-443d-b9b3-f70340b16e14', NULL, 1, 'view', '{\"name\":\"errors::minimal\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/minimal.blade.php\",\"data\":[\"exception\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:27'),
(181, '9ca76e1b-8a89-426e-a743-e0dcad34c53f', '9ca76e1b-8acd-443d-b9b3-f70340b16e14', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/media\\/logo-footer.png\",\"method\":\"GET\",\"controller_action\":null,\"middleware\":[],\"headers\":{\"accept\":\"image\\/avif,image\\/webp,image\\/apng,image\\/svg+xml,image\\/*,*\\/*;q=0.8\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6IkU1dzVaMThIazF0TGFnWlBTcEsvNkE9PSIsInZhbHVlIjoiQ2IzSHBCa05Ydmw5OHMyT2JpaGJyMnFPRGFIeStUMCsvbnUvVW9uck1acEhMMENxQlkxUGdESXlQQTViNVRBbWFweUJrV0lud2FZTEFWWWlBU1h5ZEJRV1hUMGEwUUtCakhZcnA0VWdHZG9ubE1DUW93NW83aUlNZjB4c2JRMm8iLCJtYWMiOiIxMTFjNTM0MWY5NzZhN2Q5Njk5NzlmODU1YWJiMWRlMWRhMjk2YjVjMGIxZGM5YzRmZjgwYmRiYTlhYmM1N2IyIiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6IkhKNldHZ0hDSWpPOFFTd0piYXQ5R1E9PSIsInZhbHVlIjoiWDIrY3A2N09tYjdpZTVmTDgzdWxlZ01aUkp3RDV5Y3JqbUtBbStEY3M2ZzBhN0Evc3ZwTjBFbDJEZVdKQ1prOHRsTWpxYXNCa3VEWGU1bm9nT05JWFFqWjdzc2w2REZTNVNYYUt6NGxtbmZnZXZqaVVYNGhiQ29KQkpjemtGeWoiLCJtYWMiOiJkNDJjNTViZmIzM2JjMDBjMjc0MDlmYjM5ZDhhZWZhNzE2NTdiYjNiNDUwMDQ4M2Q2MmE5N2ExMTI2NTM4Y2RhIiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"referer\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\\/\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"bn-client-port\":\"53968\"},\"payload\":[],\"session\":[],\"response_status\":404,\"response\":\"HTML Response\",\"duration\":63,\"memory\":4,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:33:27'),
(182, '9ca77173-4795-4aaa-b22d-15b40a9ae8b7', '9ca77174-7c8d-4d94-8723-5c115c6022a0', '8ca46d1e711446ed225d525720c6bb44', 1, 'exception', '{\"class\":\"Spatie\\\\LaravelIgnition\\\\Exceptions\\\\ViewException\",\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/resources\\/views\\/components\\/section_2.blade.php\",\"line\":18,\"message\":\"Undefined variable $slider\",\"context\":{\"view\":{\"view\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/resources\\/views\\/components\\/section_2.blade.php\",\"data\":[]}},\"trace\":[{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Bootstrap\\/HandleExceptions.php\",\"line\":254},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/resources\\/views\\/components\\/section_2.blade.php\",\"line\":18},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Filesystem\\/Filesystem.php\",\"line\":124},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Filesystem\\/Filesystem.php\",\"line\":125},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/View\\/Engines\\/PhpEngine.php\",\"line\":58},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/View\\/Engines\\/CompilerEngine.php\",\"line\":72},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/View\\/View.php\",\"line\":207},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/View\\/View.php\",\"line\":190},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/View\\/View.php\",\"line\":159},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/resources\\/views\\/index.blade.php\",\"line\":24},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Filesystem\\/Filesystem.php\",\"line\":124},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Filesystem\\/Filesystem.php\",\"line\":125},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/View\\/Engines\\/PhpEngine.php\",\"line\":58},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/View\\/Engines\\/CompilerEngine.php\",\"line\":72},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/View\\/View.php\",\"line\":207},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/View\\/View.php\",\"line\":190},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/View\\/View.php\",\"line\":159},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Http\\/Response.php\",\"line\":69},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Http\\/Response.php\",\"line\":35},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/Router.php\",\"line\":911},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/Router.php\",\"line\":878},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/Router.php\",\"line\":799},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php\",\"line\":141},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/Middleware\\/SubstituteBindings.php\",\"line\":50},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php\",\"line\":180},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Middleware\\/VerifyCsrfToken.php\",\"line\":78},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php\",\"line\":180},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/View\\/Middleware\\/ShareErrorsFromSession.php\",\"line\":49},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php\",\"line\":180},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Session\\/Middleware\\/StartSession.php\",\"line\":121},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Session\\/Middleware\\/StartSession.php\",\"line\":64},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php\",\"line\":180},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Cookie\\/Middleware\\/AddQueuedCookiesToResponse.php\",\"line\":37},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php\",\"line\":180},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Cookie\\/Middleware\\/EncryptCookies.php\",\"line\":67},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php\",\"line\":180},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php\",\"line\":116},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/Router.php\",\"line\":800},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/Router.php\",\"line\":777},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/Router.php\",\"line\":741},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Routing\\/Router.php\",\"line\":730},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Kernel.php\",\"line\":200},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php\",\"line\":141},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Middleware\\/SecurityHeaders.php\",\"line\":19},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php\",\"line\":180},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Middleware\\/TransformsRequest.php\",\"line\":21},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Middleware\\/ConvertEmptyStringsToNull.php\",\"line\":31},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php\",\"line\":180},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Middleware\\/TransformsRequest.php\",\"line\":21},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Middleware\\/TrimStrings.php\",\"line\":40},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php\",\"line\":180},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Middleware\\/ValidatePostSize.php\",\"line\":27},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php\",\"line\":180},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Middleware\\/PreventRequestsDuringMaintenance.php\",\"line\":70},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php\",\"line\":180},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Http\\/Middleware\\/HandleCors.php\",\"line\":49},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php\",\"line\":180},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Http\\/Middleware\\/TrustProxies.php\",\"line\":39},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php\",\"line\":180},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Pipeline\\/Pipeline.php\",\"line\":116},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Kernel.php\",\"line\":175},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Http\\/Kernel.php\",\"line\":144},{\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/public\\/index.php\",\"line\":52}],\"line_preview\":{\"9\":\"                    <figure class=\\\"srp-banner-img-holder mb-0\\\">\",\"10\":\"                        <img src=\\\"{{ asset(\'media\\/\'. ($section_content[\'full_image\'] ?? \'\')) }}\\\" class=\\\"img-fluid\\\" alt=\\\"{{ $section_content[\'image_alt\'] ?? \'\' }}\\\">\",\"11\":\"                    <\\/figure>\",\"12\":\"                <\\/div>\",\"13\":\"                <div class=\\\"col-lg-5\\\">\",\"14\":\"                    <div class=\\\"srp-section-caption fw-medium mb-0\\\">\",\"15\":\"                        @isset($section_content[\'heading\'])\",\"16\":\"                        <{{$section_content[\'heading_tag\'] ?? \'h2\'}} class=\\\"fw-bold\\\">{{ $section_content[\'heading\'] }}<\\/{{$section_content[\'heading_tag\'] ?? \'h2\'}}>\",\"17\":\"                    @endisset\",\"18\":\"                    {!! preg_replace(\'\\/<p><br><\\\\\\/p>\\/\', \'\', $slider[\'description\']) ?? \'\' !!}\",\"19\":\"                    <\\/div>\",\"20\":\"                <\\/div>\",\"21\":\"            <\\/div>\",\"22\":\"        <\\/div>\",\"23\":\"    <\\/div>\",\"24\":\"<\\/section>\"},\"hostname\":\"cp-wc22.syd02.ds.network\",\"occurrences\":1}', '2024-07-31 12:42:48');
INSERT INTO `telescope_entries` (`sequence`, `uuid`, `batch_id`, `family_hash`, `should_display_on_index`, `type`, `content`, `created_at`) VALUES
(183, '9ca77172-f0d2-4003-894f-3ced770d8dc5', '9ca77174-7c8d-4d94-8723-5c115c6022a0', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"3.34\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:42:48'),
(184, '9ca77172-fe72-472f-a051-55e7655bf634', '9ca77174-7c8d-4d94-8723-5c115c6022a0', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `pages` where `type` = \'page\' and `slug` = \'home\' and `status` = 1 limit 1\",\"time\":\"0.60\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"6a711c996a2206eb839551ea363ea29c\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:42:48'),
(185, '9ca77172-fe8b-42c4-adee-ca19a2fe3aef', '9ca77174-7c8d-4d94-8723-5c115c6022a0', NULL, 1, 'model', '{\"action\":\"retrieved\",\"model\":\"App\\\\Models\\\\Page\",\"count\":1,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:42:48'),
(186, '9ca77173-005b-4f8e-b1e7-922cf7e6b185', '9ca77174-7c8d-4d94-8723-5c115c6022a0', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `id`, `sort_by`, `page_id`, `content`, `section`, `section_title`, `status` from `page_sections` where `page_sections`.`page_id` in (1) and `status` = 1 order by `sort_by` asc\",\"time\":\"0.42\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":24,\"hash\":\"cf684b5dbcff3320fc94629833a555a6\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:42:48'),
(187, '9ca77173-0074-4fe4-afb0-48447ffb83bb', '9ca77174-7c8d-4d94-8723-5c115c6022a0', NULL, 1, 'model', '{\"action\":\"retrieved\",\"model\":\"App\\\\Models\\\\PageSection\",\"count\":12,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:42:48'),
(188, '9ca77173-027d-444b-a051-71a1f2c99e4d', '9ca77174-7c8d-4d94-8723-5c115c6022a0', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `pages`.*, `section_services`.`section_id` as `pivot_section_id`, `section_services`.`service_id` as `pivot_service_id` from `pages` inner join `section_services` on `pages`.`id` = `section_services`.`service_id` where `section_services`.`section_id` in (1, 2, 3, 4, 5, 6) and `status` = 1\",\"time\":\"0.69\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":24,\"hash\":\"e2fa9f0816a90e3042be0d5990396f43\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:42:48'),
(189, '9ca77173-02cf-4ed7-bf2b-109fdf8ec871', '9ca77174-7c8d-4d94-8723-5c115c6022a0', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `id`, `sort_by`, `page_id`, `content`, `section`, `section_title`, `status` from `page_sections` where `page_sections`.`page_id` in (1) and `status` = 1 order by `sort_by` asc\",\"time\":\"0.46\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"cf684b5dbcff3320fc94629833a555a6\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:42:48'),
(190, '9ca77173-033c-48aa-8e36-729c68573ee5', '9ca77174-7c8d-4d94-8723-5c115c6022a0', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `pages`.*, `section_services`.`section_id` as `pivot_section_id`, `section_services`.`service_id` as `pivot_service_id` from `pages` inner join `section_services` on `pages`.`id` = `section_services`.`service_id` where `section_services`.`section_id` in (1, 2, 3, 4, 5, 6) and `status` = 1\",\"time\":\"0.50\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"e2fa9f0816a90e3042be0d5990396f43\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:42:48'),
(191, '9ca77173-08ba-48e3-8d83-e848fd1ac8db', '9ca77174-7c8d-4d94-8723-5c115c6022a0', NULL, 1, 'view', '{\"name\":\"index\",\"path\":\"\\/resources\\/views\\/index.blade.php\",\"data\":[\"pageData\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:42:48'),
(192, '9ca77173-0902-49a8-aae6-435591bb766c', '9ca77174-7c8d-4d94-8723-5c115c6022a0', NULL, 1, 'view', '{\"name\":\"components.section_2\",\"path\":\"\\/resources\\/views\\/components\\/section_2.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:42:48'),
(193, '9ca77174-7755-44c9-984c-0031b19d1f70', '9ca77174-7c8d-4d94-8723-5c115c6022a0', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/\",\"method\":\"GET\",\"controller_action\":\"App\\\\Http\\\\Controllers\\\\WebsiteController@index\",\"middleware\":[\"web\"],\"headers\":{\"accept\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.7\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6IjMyekZaQlZIbUJFelR2UUpqaVVzWUE9PSIsInZhbHVlIjoiOHZVMkNYcERFY2dOdW1NQW1pbnBESUROWExyd0g5R1RocXZYTWU5RFlHWWJ0RXFIb3VtMjA3Z0l0bnRhdEdCNUwzZVVzYlVHMTEyOUlHUEo0QVZMK3ROYlRINGxOdXBXSENzTDJqbDNzYkdmdWRWenY4R2l3bWJSQmRiYmRWU2IiLCJtYWMiOiJjNTQ4OWVjZjkwNzE3ODY0MTZhMjFiNGY0YmE2NTFjMzhjMzU1MmM2YjQ4M2U0MTExMDM2Yzg1MTE1MDQ4MmNmIiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6IkZ3MHdNVW1PMlNUdG91bjF6WU1STFE9PSIsInZhbHVlIjoidDBrSGRBbVdnak1vUitoZ1o5R3RjYTdGbmQxQUFuRnBFVEV4QlgrTmVHVXpZUktBR21rV0ZSRU12NTY2d2JaUUpJenBuOGhRZmVCaHBlMEUwT2JXRTVBY0xmK2Z1S1pBZWZrQWFuYkZYQzUzeVd5b3Vha0RqdWkrU1puZUpXS3giLCJtYWMiOiI1MTMzZTkyNGEyMDIzOGY2ODM3YTVkNWFhYzU1ZWNkOTA3MDJkZTdkZjliMDIzYTJiZTUyMWE3MTBiYmY0MTU1IiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"upgrade-insecure-requests\":\"1\",\"bn-client-port\":\"26055\"},\"payload\":[],\"session\":{\"_token\":\"LRxyPLoQJNY1W5oGhLv6ZerYR6SCJxkgEcNHcWiN\",\"_previous\":{\"url\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\"},\"_flash\":{\"old\":[],\"new\":[]}},\"response_status\":500,\"response\":\"HTML Response\",\"duration\":1298,\"memory\":14,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:42:49'),
(194, '9ca7719c-f8d6-484c-bd1e-ce7ce8743d69', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"1.85\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(195, '9ca7719c-fd0a-4b98-8b8c-c73101fea055', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `pages` where `type` = \'page\' and `slug` = \'home\' and `status` = 1 limit 1\",\"time\":\"0.57\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"6a711c996a2206eb839551ea363ea29c\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(196, '9ca7719c-fd24-4ce1-acad-30426ef272e5', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'model', '{\"action\":\"retrieved\",\"model\":\"App\\\\Models\\\\Page\",\"count\":1,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(197, '9ca7719c-fdb2-4d0d-a573-bb8daf31298b', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `id`, `sort_by`, `page_id`, `content`, `section`, `section_title`, `status` from `page_sections` where `page_sections`.`page_id` in (1) and `status` = 1 order by `sort_by` asc\",\"time\":\"0.40\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":24,\"hash\":\"cf684b5dbcff3320fc94629833a555a6\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(198, '9ca7719c-fdc6-4f1a-ae2f-e0a62f66a87c', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'model', '{\"action\":\"retrieved\",\"model\":\"App\\\\Models\\\\PageSection\",\"count\":12,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(199, '9ca7719c-fe46-48ea-b678-3f35348f73fe', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `pages`.*, `section_services`.`section_id` as `pivot_section_id`, `section_services`.`service_id` as `pivot_service_id` from `pages` inner join `section_services` on `pages`.`id` = `section_services`.`service_id` where `section_services`.`section_id` in (1, 2, 3, 4, 5, 6) and `status` = 1\",\"time\":\"0.45\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":24,\"hash\":\"e2fa9f0816a90e3042be0d5990396f43\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(200, '9ca7719c-fe88-49c5-af36-dd9e646f9ded', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `id`, `sort_by`, `page_id`, `content`, `section`, `section_title`, `status` from `page_sections` where `page_sections`.`page_id` in (1) and `status` = 1 order by `sort_by` asc\",\"time\":\"0.34\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"cf684b5dbcff3320fc94629833a555a6\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(201, '9ca7719c-feef-4629-90f7-5c7679f485b9', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `pages`.*, `section_services`.`section_id` as `pivot_section_id`, `section_services`.`service_id` as `pivot_service_id` from `pages` inner join `section_services` on `pages`.`id` = `section_services`.`service_id` where `section_services`.`section_id` in (1, 2, 3, 4, 5, 6) and `status` = 1\",\"time\":\"0.48\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Http\\/Controllers\\/Controller.php\",\"line\":36,\"hash\":\"e2fa9f0816a90e3042be0d5990396f43\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(202, '9ca7719c-fff9-49fd-8762-75e9aa773bd1', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'view', '{\"name\":\"index\",\"path\":\"\\/resources\\/views\\/index.blade.php\",\"data\":[\"pageData\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(203, '9ca7719d-0026-4f8b-a115-3bece63a125a', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'view', '{\"name\":\"components.section_2\",\"path\":\"\\/resources\\/views\\/components\\/section_2.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(204, '9ca7719d-00d0-4bc6-a14b-066eff8d02bd', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'view', '{\"name\":\"components.section_3\",\"path\":\"\\/resources\\/views\\/components\\/section_3.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(205, '9ca7719d-019f-4538-a63b-562ecd382cca', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select count(*) as aggregate from `pages` where `type` in (\'service\', \'sub service\') and `status` = 1\",\"time\":\"0.37\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/storage\\/framework\\/views\\/9150a587f53c49e2523bb329caff5356.php\",\"line\":18,\"hash\":\"ee41e4d8a767ab022570f596b8b74598\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(206, '9ca7719d-0223-4bd3-9e7b-af5cc842f0d1', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'view', '{\"name\":\"components.section_6\",\"path\":\"\\/resources\\/views\\/components\\/section_6.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(207, '9ca7719d-0297-4d45-aaef-46bdf6f4a181', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'view', '{\"name\":\"components.section_13\",\"path\":\"\\/resources\\/views\\/components\\/section_13.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(208, '9ca7719d-02cd-484e-91dd-adfb1822f660', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'view', '{\"name\":\"components.section_5\",\"path\":\"\\/resources\\/views\\/components\\/section_5.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(209, '9ca7719d-030c-42b4-b704-37485e75e8d9', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'view', '{\"name\":\"components.section_1\",\"path\":\"\\/resources\\/views\\/components\\/section_1.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(210, '9ca7719d-0398-4925-9072-7f86c3d9ec85', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `menus` where `parent_id` is null order by `sort_order` asc\",\"time\":\"0.36\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":50,\"hash\":\"58c83c9dffb061e235b7c54fcbde30b0\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(211, '9ca7719d-03da-4b59-8115-ac74d848777b', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `pages` where `type` = \'service\' and `status` = 1\",\"time\":\"0.32\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":51,\"hash\":\"52df561862381c57487fc461b66f54d3\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(212, '9ca7719d-03ef-4d43-b6c4-ce60e6672d5e', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'view', '{\"name\":\"layouts.master\",\"path\":\"\\/resources\\/views\\/layouts\\/master.blade.php\",\"data\":[\"pageData\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\",\"__currentLoopData\",\"section\",\"key\",\"loop\",\"section_content\",\"mega_menus\",\"services\",\"footer_services\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[49:61]\",\"type\":\"composer\"},{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(213, '9ca7719d-056b-45dd-bc57-2da913d1a158', '9ca7719d-05b3-42b1-992d-f5f4f4875f07', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/\",\"method\":\"GET\",\"controller_action\":\"App\\\\Http\\\\Controllers\\\\WebsiteController@index\",\"middleware\":[\"web\"],\"headers\":{\"accept\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.7\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6IkxlS0paUGp5TzZFbzM5QmVoc1c5Tmc9PSIsInZhbHVlIjoiUWQvZWg1cjg2K0hUSEhNUnFWYTBHWjhMa3RXYlM5UmZrU1lBWStFUVlmeEhVY0pPZ2hjc2ZBWTEyc3dNUTFTSXhxUFdONDdBZkRGVU4zcUk5Rm45aUdyQWUwY2NIajhPV2lSVXhoUGpmYnhRcUR6YmRpckdsWTBialNPcER0QWsiLCJtYWMiOiJjYmQwNDA4MmYwMmFiMTg2NzY4YzU0MGFmY2E0MTk0OTA1ZGI1YzA3ZjExMzBiMzA1ZjkwYmE2MGIyOGEyNjQ4IiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6IlRac1kzRnQzMi8xby9jQnRMR05aTXc9PSIsInZhbHVlIjoiMGVzTnF5QWFLVU1Ncmd1Q2pkdytIQ201MzVPeS9EYUo0RW1MR3dYOEdQVFVRTE02bGZlWDdSeWxFM1J0RzB1bWpKU1hhaXNhZjZkNHZXbmFXNUVNa082OFdGbkwxZkxSWjNHcGFmYklZeGo1ZHdOQWN5RDhuZzZpSThvMnVPMGEiLCJtYWMiOiJlZWNjZmE0NjU5Mjk2ZjU2YjQ0ZTkzYmJhMDVkOGE5NjFkM2RiNDFjYzE1OTBlN2Q5ZDBkM2JmZDE0OWFlZTYyIiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"upgrade-insecure-requests\":\"1\",\"bn-client-port\":\"54424\"},\"payload\":[],\"session\":{\"_token\":\"LRxyPLoQJNY1W5oGhLv6ZerYR6SCJxkgEcNHcWiN\",\"_previous\":{\"url\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\"},\"_flash\":{\"old\":[],\"new\":[]}},\"response_status\":200,\"response\":{\"view\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/resources\\/views\\/index.blade.php\",\"data\":{\"pageData\":\"App\\\\Models\\\\Page:1\",\"settings\":{\"contact\":\"[{\\\"heading\\\":null,\\\"map\\\":null,\\\"address\\\":null,\\\"email\\\":\\\"info@flooringperth\\\",\\\"phone\\\":\\\"1111111111\\\",\\\"fax\\\":null}]\",\"social\":\"{\\\"facebook\\\":\\\"https:\\\\\\/\\\\\\/www.facebook.com\\\",\\\"instagram\\\":null,\\\"linkedin\\\":null,\\\"pinterest\\\":\\\"https:\\\\\\/\\\\\\/www.pinterest.com\\\",\\\"twitter\\\":null}\",\"donations\":\"[\\\"50\\\",\\\"100\\\",\\\"150\\\",\\\"200\\\"]\",\"theme\":\"{\\\"header_logo_alt\\\":\\\"header logo\\\",\\\"header_logo\\\":\\\"logo.png\\\",\\\"footer_logo_alt\\\":\\\"footer logo\\\",\\\"footer_logo\\\":\\\"logo-footer.png\\\",\\\"footer_description\\\":null,\\\"copyright\\\":\\\"Copyright \\\\u00a9 2024 <a class=\\\\\\\"d-inline-block\\\\\\\" href=\\\\\\\"\\\\\\/\\\\\\\">env(\'APP_NAME\')<\\\\\\/a> | <a class=\\\\\\\"d-inline-block\\\\\\\" href=\\\\\\\"https:\\\\\\/\\\\\\/ozwebdevelopment.com.au\\\\\\/web-design\\\\\\\">website design by ozwebdevelopment<\\\\\\/a>\\\"}\"},\"contact\":[{\"heading\":null,\"map\":null,\"address\":null,\"email\":\"info@flooringperth\",\"phone\":\"1111111111\",\"fax\":null}],\"social\":{\"facebook\":\"https:\\/\\/www.facebook.com\",\"instagram\":null,\"linkedin\":null,\"pinterest\":\"https:\\/\\/www.pinterest.com\",\"twitter\":null},\"theme\":{\"header_logo_alt\":\"header logo\",\"header_logo\":\"logo.png\",\"footer_logo_alt\":\"footer logo\",\"footer_logo\":\"logo-footer.png\",\"footer_description\":null,\"copyright\":\"Copyright \\u00a9 2024 <a class=\\\"d-inline-block\\\" href=\\\"\\/\\\">env(\'APP_NAME\')<\\/a> | <a class=\\\"d-inline-block\\\" href=\\\"https:\\/\\/ozwebdevelopment.com.au\\/web-design\\\">website design by ozwebdevelopment<\\/a>\"},\"seo\":[]}},\"duration\":68,\"memory\":4,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:15'),
(214, '9ca7719f-72c6-4cb4-8489-52ebc3c6d8d9', '9ca7719f-7d29-40a0-aa70-d6db3ef50f9f', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select `values`, `key` from `settings`\",\"time\":\"1.88\",\"slow\":false,\"file\":\"\\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php\",\"line\":35,\"hash\":\"5161b54ff92ae6605472272823ea2e9d\",\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:17'),
(215, '9ca7719f-7bc5-49ea-8dd7-5231b9bbad7b', '9ca7719f-7d29-40a0-aa70-d6db3ef50f9f', NULL, 1, 'view', '{\"name\":\"errors::404\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/404.blade.php\",\"data\":[\"exception\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:17'),
(216, '9ca7719f-7c1e-41c1-b705-32f20a1b81e6', '9ca7719f-7d29-40a0-aa70-d6db3ef50f9f', NULL, 1, 'view', '{\"name\":\"errors::minimal\",\"path\":\"\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Foundation\\/Exceptions\\/views\\/minimal.blade.php\",\"data\":[\"exception\",\"settings\",\"contact\",\"social\",\"theme\",\"seo\"],\"composers\":[{\"name\":\"Closure at \\/home\\/ozwebcli\\/public_html\\/alphasmashrepair\\/app\\/Providers\\/AppServiceProvider.php[36:48]\",\"type\":\"composer\"}],\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:17'),
(217, '9ca7719f-7c79-4684-ab7e-bd4a97762126', '9ca7719f-7d29-40a0-aa70-d6db3ef50f9f', NULL, 1, 'request', '{\"ip_address\":\"202.142.153.198\",\"uri\":\"\\/media\\/logo-footer.png\",\"method\":\"GET\",\"controller_action\":null,\"middleware\":[],\"headers\":{\"accept\":\"image\\/avif,image\\/webp,image\\/apng,image\\/svg+xml,image\\/*,*\\/*;q=0.8\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"connection\":\"close\",\"content-length\":\"0\",\"cookie\":\"laravel_maintenance=eyJleHBpcmVzX2F0IjoxNzIyNDQ0ODQ5LCJtYWMiOiJhMTBlMzcwNmU2YTk5ZGY5MmJjM2E3OGJlNzY3ZjVjNTVkMDljYzQxNzFhNmRmYTUyZTBhYmNjYjljMGM0MjU0In0%3D; XSRF-TOKEN=eyJpdiI6IlRNSzB3Vk9VVkpjWVE5VUYxaW5ic0E9PSIsInZhbHVlIjoidHprcUFkdFB4RXJYdm91MmZJRWxlQVFWYXJ0RVM2NEtFS0prNmdJL1RleEpFbW8vaUs0RUlCUHZuY21rZzJaekljbW15ZGNQSGp5YWdjWXQyTlVTdTlOR1ZlaU5UMGV2ZTdLenBYMVhFVzgvMmtKYjVlbGQ2NTJXTENjZ2VmN1EiLCJtYWMiOiI1MjU1NWVmMmY4ZjBkMTUzMjIwNzJhM2U3ZWQ2MjZlYzhlMGRmMTlmN2RhZjI4MzZlOGFkNzk5NDM3NzYwMGMxIiwidGFnIjoiIn0%3D; website_template_session=eyJpdiI6IkhJSTlMUjhveHNkVkQzUmhZMG5kRmc9PSIsInZhbHVlIjoiMXhvOEFoK1hNdjNPK0QrVHdUR1VTeE11cS93M3dNTDBpR0wrZkE0VlFvR2krQU15OGZiZDJZeHMyQmNJQ1hRYktXRXlrbkI5bFlDbUwvaEFQMTNxZ0FoZ245LzBqSk5pR0VRcnlpRVJ4dHZBOCtxTElHTEN3eTlLQUY3a3ZEdzciLCJtYWMiOiIyODllNjUwNjYyYzkzNjM0NDRmM2QwZjdlMGM4MTQ0MmZjZDE2MDczNTZiNmQ3N2EzNWE3YTc3ZTVjYzZlODM0IiwidGFnIjoiIn0%3D\",\"host\":\"alphasmashrepair.ozwebclient.com\",\"pragma\":\"no-cache\",\"referer\":\"http:\\/\\/alphasmashrepair.ozwebclient.com\\/\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/127.0.0.0 Safari\\/537.36\",\"cache-control\":\"no-cache\",\"x-forwarded-for\":\"202.142.153.198\",\"x-real-ip\":\"103.20.200.169\",\"x-forwarded-proto\":\"http\",\"x-forwarded-ssl\":\"off\",\"x-forwarded-port\":\"80\",\"bn-client-port\":\"26069\"},\"payload\":[],\"session\":[],\"response_status\":404,\"response\":\"HTML Response\",\"duration\":61,\"memory\":4,\"hostname\":\"cp-wc22.syd02.ds.network\"}', '2024-07-31 12:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `telescope_entries_tags`
--

CREATE TABLE `telescope_entries_tags` (
  `entry_uuid` char(36) NOT NULL,
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `telescope_entries_tags`
--

INSERT INTO `telescope_entries_tags` (`entry_uuid`, `tag`) VALUES
('9ca76a17-9be1-4919-94bb-3c5f6336cda3', 'App\\Models\\Page'),
('9ca76a17-9df0-4b6e-b240-05b71af7b820', 'App\\Models\\PageSection'),
('9ca76be4-e558-4ac7-92c1-f0f87fc2b14a', 'App\\Models\\Page'),
('9ca76be4-edcd-4a67-a03d-f981c29ca726', 'App\\Models\\PageSection'),
('9ca76c8e-ee23-4327-bf84-2697771bffba', 'App\\Models\\Page'),
('9ca76c8e-f02f-4610-aad0-df5ff64274f8', 'App\\Models\\PageSection'),
('9ca76d72-fb56-4817-a403-1f678f9f098c', 'App\\Models\\Page'),
('9ca76d72-fd64-4ba6-bd9e-719831a98e18', 'App\\Models\\PageSection'),
('9ca76e19-6ebf-4b31-a293-292be925b4e0', 'App\\Models\\Page'),
('9ca76e19-70da-44cb-9357-d3f54adbc735', 'App\\Models\\PageSection'),
('9ca77172-fe8b-42c4-adee-ca19a2fe3aef', 'App\\Models\\Page'),
('9ca77173-0074-4fe4-afb0-48447ffb83bb', 'App\\Models\\PageSection'),
('9ca7719c-fd24-4ce1-acad-30426ef272e5', 'App\\Models\\Page'),
('9ca7719c-fdc6-4f1a-ae2f-e0a62f66a87c', 'App\\Models\\PageSection');

-- --------------------------------------------------------

--
-- Table structure for table `telescope_monitoring`
--

CREATE TABLE `telescope_monitoring` (
  `tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `default_email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `phone_number`, `country`, `city`, `postal_code`, `state`, `ip`, `type`, `email_verified_at`, `default_email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, 'hussyawan@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'info@ozcleaningperth.com.au', '$2y$10$q0wCWBEgumNKvrM5lh5P2.IRkMhKi4hUoG1uyWbQKc7ASRZZZMGVm', '1hs8MivqPhLoifLiYozwlEQTMrnF6wqUDBnBwIKFfL764Xw9Iw8bgLB4sS7j', '2023-08-09 08:04:31', '2024-08-08 02:00:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `email_accounts`
--
ALTER TABLE `email_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_accounts_email_account_unique` (`email_account`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_data`
--
ALTER TABLE `form_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_data_form_id_foreign` (`form_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_sections`
--
ALTER TABLE `page_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_sections_page_id_foreign` (`page_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `section_services`
--
ALTER TABLE `section_services`
  ADD KEY `section_services_section_id_foreign` (`section_id`),
  ADD KEY `section_services_service_id_foreign` (`service_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signatures`
--
ALTER TABLE `signatures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telescope_entries`
--
ALTER TABLE `telescope_entries`
  ADD PRIMARY KEY (`sequence`),
  ADD UNIQUE KEY `telescope_entries_uuid_unique` (`uuid`),
  ADD KEY `telescope_entries_batch_id_index` (`batch_id`),
  ADD KEY `telescope_entries_family_hash_index` (`family_hash`),
  ADD KEY `telescope_entries_created_at_index` (`created_at`),
  ADD KEY `telescope_entries_type_should_display_on_index_index` (`type`,`should_display_on_index`);

--
-- Indexes for table `telescope_entries_tags`
--
ALTER TABLE `telescope_entries_tags`
  ADD PRIMARY KEY (`entry_uuid`,`tag`),
  ADD KEY `telescope_entries_tags_tag_index` (`tag`);

--
-- Indexes for table `telescope_monitoring`
--
ALTER TABLE `telescope_monitoring`
  ADD PRIMARY KEY (`tag`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email_accounts`
--
ALTER TABLE `email_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_data`
--
ALTER TABLE `form_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_sections`
--
ALTER TABLE `page_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `signatures`
--
ALTER TABLE `signatures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `telescope_entries`
--
ALTER TABLE `telescope_entries`
  MODIFY `sequence` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `form_data`
--
ALTER TABLE `form_data`
  ADD CONSTRAINT `form_data_form_id_foreign` FOREIGN KEY (`form_id`) REFERENCES `forms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `page_sections`
--
ALTER TABLE `page_sections`
  ADD CONSTRAINT `page_sections_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `section_services`
--
ALTER TABLE `section_services`
  ADD CONSTRAINT `section_services_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `page_sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `section_services_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `telescope_entries_tags`
--
ALTER TABLE `telescope_entries_tags`
  ADD CONSTRAINT `telescope_entries_tags_entry_uuid_foreign` FOREIGN KEY (`entry_uuid`) REFERENCES `telescope_entries` (`uuid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
