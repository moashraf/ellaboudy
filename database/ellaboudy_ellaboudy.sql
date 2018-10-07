-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 04, 2018 at 06:35 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ellaboudy_ellaboudy`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `project_route` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `project_route`, `image`, `created_at`, `updated_at`) VALUES
(11, '6', 'slider/1530017626.jpg', NULL, '2018-08-01 09:24:54'),
(12, '8', 'slider/1530017767.jpg', NULL, '2018-08-16 06:42:51'),
(13, '6', 'slider/1530019985.jpeg', NULL, '2018-08-01 09:26:23'),
(14, '6', 'slider/1531052583.jpg', NULL, '2018-08-06 09:56:55'),
(15, '6', 'slider/1531131118.jpg', NULL, '2018-08-06 09:56:40'),
(17, '6', 'slider/1531563333.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banner_description`
--

CREATE TABLE `banner_description` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `btn_text` text COLLATE utf8_unicode_ci NOT NULL,
  `lang_id` int(11) NOT NULL,
  `banner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner_description`
--

INSERT INTO `banner_description` (`id`, `title`, `description`, `btn_text`, `lang_id`, `banner_id`) VALUES
(7, 'Ellaboudy construction', 'Reality on the ground', 'Phase 1', 1, 11),
(8, 'اللبودى', 'علي ارض الواقع', 'المرحلة الاولة', 2, 11),
(9, 'Ellaboudy construction', 'Reality on the ground', 'Phase 1', 1, 12),
(10, 'اللبودى', 'علي ارض الواقع', 'المرحلة الاولة', 2, 12),
(11, 'Ellaboudy construction', '0', '0', 1, 13),
(12, 'اللبودى', 'زينه', 'زينه', 2, 13),
(13, 'Ellaboudy construction', 'Reality on the ground', 'Phase 1', 1, 14),
(14, 'اللبودى', 'علي ارض الواقع', 'المرحلة الاولة', 2, 14),
(15, 'Ellaboudy construction', 'Reality on the ground', 'Phase 1& 2', 1, 15),
(16, 'اللبودى', 'علي ارض الواقع', 'المرحلة الاولة', 2, 15),
(17, 'Ellaboudy construction', '122', '122', 1, 17),
(18, 'اللبودى', '122', '122', 2, 17);

-- --------------------------------------------------------

--
-- Table structure for table `label`
--

CREATE TABLE `label` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `label`
--

INSERT INTO `label` (`id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, NULL, NULL, NULL),
(6, NULL, NULL, NULL),
(7, NULL, NULL, NULL),
(8, NULL, NULL, NULL),
(9, NULL, NULL, NULL),
(10, NULL, NULL, NULL),
(11, NULL, NULL, NULL),
(12, NULL, NULL, NULL),
(13, NULL, NULL, NULL),
(14, NULL, NULL, NULL),
(15, NULL, NULL, NULL),
(16, NULL, NULL, NULL),
(21, NULL, NULL, NULL),
(22, NULL, NULL, NULL),
(23, NULL, NULL, NULL),
(24, NULL, NULL, NULL),
(25, NULL, NULL, NULL),
(26, NULL, NULL, NULL),
(27, NULL, NULL, NULL),
(28, NULL, NULL, NULL),
(29, NULL, NULL, NULL),
(30, NULL, NULL, NULL),
(31, NULL, NULL, NULL),
(32, NULL, NULL, NULL),
(33, NULL, NULL, NULL),
(35, NULL, NULL, NULL),
(36, NULL, NULL, NULL),
(37, NULL, NULL, NULL),
(38, NULL, NULL, NULL),
(39, NULL, NULL, NULL),
(40, NULL, NULL, NULL),
(41, NULL, NULL, NULL),
(42, NULL, NULL, NULL),
(43, NULL, NULL, NULL),
(44, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `label_description`
--

CREATE TABLE `label_description` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `label_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `label_description`
--

INSERT INTO `label_description` (`id`, `text`, `label_id`, `lang_id`) VALUES
(6, 'Home', 5, 1),
(7, 'الرئيسية', 5, 2),
(8, 'Projects', 6, 1),
(9, 'مشاريعنا', 6, 2),
(10, 'OFFERS', 7, 1),
(11, 'العروض', 7, 2),
(12, 'Our Services', 8, 1),
(13, 'خدماتنا', 8, 2),
(14, 'CONTACT US', 9, 1),
(15, 'اتصل بنا', 9, 2),
(16, '+0100733796', 10, 1),
(17, '+0100733796', 10, 2),
(18, 'sales@ELLABOUDY.COM', 11, 1),
(19, 'Sales@ELLABOUDY.COM', 11, 2),
(20, 'OUR WORK', 12, 1),
(21, 'اخر اعمالنا', 12, 2),
(22, 'Latest Projects', 13, 1),
(23, 'اخر المشروعات', 13, 2),
(24, 'Our Work in Videos', 14, 1),
(25, 'فيديوهات عن اعمالنا', 14, 2),
(26, 'Watch Video', 15, 1),
(27, 'شاهد الفيديو', 15, 2),
(28, 'Our Services', 16, 1),
(29, 'خدماتنا', 16, 2),
(36, 'Contact Us', 21, 1),
(37, 'اتصل بنا', 21, 2),
(38, 'Site Map', 22, 1),
(39, 'خريطة الموقع', 22, 2),
(40, 'Name', 23, 1),
(41, 'الاسم', 23, 2),
(42, 'Email', 24, 1),
(43, 'البريد الالكترونى', 24, 2),
(44, 'Get in touch', 25, 1),
(45, 'تواصل معنا', 25, 2),
(46, 'ELLABOUDY GROUP', 26, 1),
(47, 'اللبودى جروب', 26, 2),
(48, '.', 27, 1),
(49, '.', 27, 2),
(50, 'Sitemap', 28, 1),
(51, 'خريطة الموقع', 28, 2),
(52, 'Newsletter', 29, 1),
(53, 'نشرة الاخبار', 29, 2),
(54, 'Email', 30, 1),
(55, 'البريد الالكترونى', 30, 2),
(56, 'Lorem ipsum proin gravida nibh vel velit auctor aliollicitudin sed odio vulputate', 31, 1),
(57, 'لوريم ابسوم', 31, 2),
(58, 'Submit', 32, 1),
(59, 'سجل', 32, 2),
(60, 'About Us', 33, 1),
(61, 'عن شركتنا', 33, 2),
(64, 'https://www.google.com.eg/maps/place/Le+Jardin+Residence,+%D8%B7%D8%B1%D9%8A%D9%82+%D8%A7%D9%84%D8%A3%D8%B3%D9%83%D9%86%D8%AF%D8%B1%D9%8A%D9%87+%D8%A7%D9%84%D8%B5%D8%AD%D8%B1%D8%A7%D9%88%D9%8A%D8%8C+%D8%A7%D9%84%D8%AC%D9%8A%D8%B2%D8%A9%E2%80%AD/@30.0366144,31.0660958,17z/data=!4m13!1m7!3m6!1s0x14585ad8a47339ef:0xe8390a435c73ee0a!2zTGUgSmFyZGluIFJlc2lkZW5jZSwg2LfYsdmK2YIg2KfZhNij2LPZg9mG2K_YsdmK2Ycg2KfZhNi12K3Ysdin2YjZitiMINin2YTYrNmK2LLYqQ!3b1!8m2!3d30.0363692!4d31.0639662!3m4!1s0x14585ad8a47339ef:0xe8390a435c73ee0a!8m2!3d30.0363692!4d31.0639662?hl=ar', 35, 1),
(65, 'https://www.google.com.eg/maps/place/Le+Jardin+Residence,+%D8%B7%D8%B1%D9%8A%D9%82+%D8%A7%D9%84%D8%A3%D8%B3%D9%83%D9%86%D8%AF%D8%B1%D9%8A%D9%87+%D8%A7%D9%84%D8%B5%D8%AD%D8%B1%D8%A7%D9%88%D9%8A%D8%8C+%D8%A7%D9%84%D8%AC%D9%8A%D8%B2%D8%A9%E2%80%AD/@30.0366144,31.0660958,17z/data=!4m13!1m7!3m6!1s0x14585ad8a47339ef:0xe8390a435c73ee0a!2zTGUgSmFyZGluIFJlc2lkZW5jZSwg2LfYsdmK2YIg2KfZhNij2LPZg9mG2K_YsdmK2Ycg2KfZhNi12K3Ysdin2YjZitiMINin2YTYrNmK2LLYqQ!3b1!8m2!3d30.0363692!4d31.0639662!3m4!1s0x14585ad8a47339ef:0xe8390a435c73ee0a!8m2!3d30.0363692!4d31.0639662?hl=ar', 35, 2),
(66, 'Scroll Down', 36, 1),
(67, 'Scroll Down', 36, 2),
(68, 'OUR GALLERY', 37, 1),
(69, 'OUR GALLERY', 37, 2),
(70, 'Layouts Plan', 38, 1),
(71, 'Layouts Plan', 38, 2),
(72, 'CONTACT US', 39, 1),
(73, 'CONTACT US', 39, 2),
(74, 'Like Our Work?', 40, 1),
(75, 'Like Our Work?', 40, 2),
(76, '.', 41, 1),
(77, '.', 41, 2),
(78, 'About Me\r\n\r\n\r\nHaving been in the real estate development sector since 1935 we always strived for diversity.\r\nWe have excelled in the residential apartments projects housed nearly 1000 residents in our buildings all over Cairo with 23 residential buildings in the best areas.\r\nWe have completed our first compound (Phase 1) and we shall proceed with our next to Two phases , residential and commercial in the best location at the moment Cairo / Alex road 7km from the new Egyptian museum and 10km from the sphinx international airport , to provide our clients as always with our company edge location.', 42, 1),
(79, 'About Me\r\n\r\n\r\n\r\nنعد من اقدم الشركات التي لها تاريخ طويل في قطاع التطوير العقاري منذ عام 1935 ،  نسعى دائمًا للتنوع.\r\nلقد تفوقنا في مشاريع الابراج والشقق السكنية التي تضم ما يقرب من 1000 من سكان مبانينا في جميع أنحاء القاهرة مع 23 مبنى سكني في أفضل المناطق.\r\nأكملنا أول مجمع لنا (المرحلة الأولى) وسنواصل العمل في مرحلتين ، سكنية وتجارية في أفضل موقع والذي يقع في طريق القاهرة / الإسكندرية على بعد 7 كم من المتحف المصري الجديد وعلى بعد 10 كم من مطار أبو الهول الدولي ، \r\nنقدم لعملائنا كما هو الحلول الدائمه مع افضل موقع لشركتنا.', 42, 2),
(80, 'Capitalizing on the Unique Qualities', 43, 1),
(81, 'Capitalizing on the Unique Qualities', 43, 2),
(82, 'About Me About Me About Me About Me About Me About Me About Me', 44, 1),
(83, 'About Me About Me About Me About Me About Me About Me About Me', 44, 2);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `language` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `is_default` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `language`, `is_default`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'English', 1, '2018-06-09 22:00:00', '2018-06-09 22:00:00', NULL),
(2, 'عربى', 0, '2018-06-09 22:00:00', '2018-06-18 10:17:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'slider/1531133955.jpg', NULL, NULL, NULL),
(11, 'slider/1531555641.jpg', NULL, NULL, NULL),
(12, 'slider/1531555881.jpg', NULL, NULL, NULL),
(13, 'slider/1531555947.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `offer_description`
--

CREATE TABLE `offer_description` (
  `id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `lang_id` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `offer_description`
--

INSERT INTO `offer_description` (`id`, `title`, `description`, `lang_id`, `offer_id`) VALUES
(11, 'phase 1', '565', 1, 10),
(12, 'الموقع العام', '55', 2, 10),
(13, 'layout', 'layout', 1, 11),
(14, 'الموقع العام', 'الموقع العام', 2, 11),
(15, 'Delivering', 'Apartments and duplexes with great views ranging from 126 - 166 - 175 - 215 meters available to move in .', 1, 12),
(16, 'للتسليم الفوري', 'شقق و دوبلكس بمنظر رائع مساحات 125 - 166 - 175 - 215 متوفره', 2, 12),
(17, 'Duplex', '.', 1, 13),
(18, 'دوبلكس', '.', 2, 13);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `units_number` text COLLATE utf8_unicode_ci,
  `map` text COLLATE utf8_unicode_ci,
  `area` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `short_description` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `description`, `image`, `units_number`, `map`, `area`, `created_at`, `updated_at`, `short_description`) VALUES
(6, 'Project X', 'long description', '/tmp/php4kGn6a', '25', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11618.209886505481!2d31.074877312454504!3d30.033573799773013!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14585ad8a47339ef%3A0xe8390a435c73ee0a!2zTGUgSmFyZGluIFJlc2lkZW5jZSwg2LfYsdmK2YIg2KfZhNij2LPZg9mG2K_YsdmK2Ycg2KfZhNi12K3Ysdin2YjZitiMINin2YTYrNmK2LLYqQ!5e0!3m2!1sar!2seg!4v1531644269790\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '120 m', '2018-07-09 13:55:24', '2018-09-16 14:40:06', 'short description for project x'),
(8, 'le jardin plans', '2', 'project/1531562707.jpg', '2', '2', '2', '2018-07-14 08:05:07', '2018-09-16 14:14:43', '2'),
(9, 'le jardin phase 1', '3', 'project/1531562772.jpg', '3', '3', '3', '2018-07-14 08:06:12', '2018-09-16 14:11:04', '3'),
(10, 'Villas in the United Kingdom', '11', 'project/1531562871.jpg', '11', '11', '11', '2018-07-14 08:07:51', '2018-09-16 14:12:26', '11'),
(11, 'Villa in the uk', '2', 'project/1531562976.jpg', '2', 'e', 'en', '2018-07-14 08:09:36', '2018-09-16 14:13:13', '2'),
(12, 'lejardin Project 4', '4', 'project/1531644519.jpg', '1', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11618.209886505481!2d31.074877312454504!3d30.033573799773013!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14585ad8a47339ef%3A0xe8390a435c73ee0a!2zTGUgSmFyZGluIFJlc2lkZW5jZSwg2LfYsdmK2YIg2KfZhNij2LPZg9mG2K_YsdmK2Ycg2KfZhNi12K3Ysdin2YjZitiMINin2YTYrNmK2LLYqQ!5e0!3m2!1sar!2seg!4v1531644269790\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '2', '2018-07-15 06:48:39', '2018-07-15 06:48:39', '4');

-- --------------------------------------------------------

--
-- Table structure for table `project_image`
--

CREATE TABLE `project_image` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_image`
--

INSERT INTO `project_image` (`id`, `image`, `project_id`, `created_at`, `updated_at`) VALUES
(11, 'project_image/1531565144.jpg', 10, '2018-07-14 08:45:44', '2018-07-14 08:45:44'),
(12, 'project_image/1531565156.jpg', 10, '2018-07-14 08:45:56', '2018-07-14 08:45:56'),
(13, 'project_image/1531565179.jpg', 10, '2018-07-14 08:46:19', '2018-07-14 08:46:19'),
(22, 'project_image/1534410905.png', 8, '2018-08-16 07:15:05', '2018-08-16 07:15:05'),
(23, 'project_image/1534410922.png', 8, '2018-08-16 07:15:22', '2018-08-16 07:15:22'),
(24, 'project_image/1534410951.png', 8, '2018-08-16 07:15:51', '2018-08-16 07:15:51'),
(25, 'project_image/1534410999.png', 8, '2018-08-16 07:16:39', '2018-08-16 07:16:39'),
(26, 'project_image/1534411048.png', 8, '2018-08-16 07:17:28', '2018-08-16 07:17:28'),
(27, 'project_image/1534411066.png', 8, '2018-08-16 07:17:46', '2018-08-16 07:17:46'),
(28, 'project_image/1534411084.png', 8, '2018-08-16 07:18:04', '2018-08-16 07:18:04'),
(29, 'project_image/1534411104.png', 8, '2018-08-16 07:18:24', '2018-08-16 07:18:24'),
(30, 'project_image/1534411127.png', 8, '2018-08-16 07:18:47', '2018-08-16 07:18:47'),
(31, 'project_image/1534411155.png', 8, '2018-08-16 07:19:15', '2018-08-16 07:19:15'),
(32, 'project_image/1534411177.png', 8, '2018-08-16 07:19:37', '2018-08-16 07:19:37'),
(33, 'project_image/1534411198.png', 8, '2018-08-16 07:19:58', '2018-08-16 07:19:58'),
(34, 'project_image/1534411220.png', 8, '2018-08-16 07:20:20', '2018-08-16 07:20:20'),
(35, 'project_image/1534411328.png', 8, '2018-08-16 07:22:08', '2018-08-16 07:22:08'),
(36, 'project_image/1534411370.png', 8, '2018-08-16 07:22:50', '2018-08-16 07:22:50'),
(37, 'project_image/1534411405.png', 8, '2018-08-16 07:23:25', '2018-08-16 07:23:25'),
(38, '/tmp/phpZhKEsD', 6, '2018-09-16 16:29:41', '2018-09-16 14:29:41'),
(39, '/tmp/phpirYGwN', 6, '2018-09-16 16:32:47', '2018-09-16 14:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `project_video`
--

CREATE TABLE `project_video` (
  `id` int(11) NOT NULL,
  `video` text COLLATE utf8_unicode_ci NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_video`
--

INSERT INTO `project_video` (`id`, `video`, `project_id`, `created_at`, `updated_at`) VALUES
(1, 'JZE2F7wJphM', 8, '2018-08-16 06:28:13', '2018-08-16 06:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `image`, `created_at`, `updated_at`) VALUES
(5, 'service/1529323153.png', NULL, NULL),
(6, 'service/1529495635.png', NULL, NULL),
(16, 'service/1531555001.jpg', NULL, NULL),
(17, 'service/1531555140.png', NULL, NULL),
(18, 'service/1531555228.jpg', NULL, NULL),
(19, 'service/1531643444.png', NULL, NULL),
(20, 'service/1531643553.png', NULL, NULL),
(21, 'service/1531643612.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_description`
--

CREATE TABLE `service_description` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `lang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service_description`
--

INSERT INTO `service_description` (`id`, `service_id`, `title`, `description`, `lang_id`) VALUES
(3, 4, 'Lorem Ipsum', 'Lorem Ipsum', 1),
(4, 4, 'لوريم ابسوم', 'لوريم ابسوم', 2),
(5, 5, 'Service En', 'Test Service En', 1),
(6, 5, 'تجربة #1', 'تجربة #2', 2),
(7, 6, 'Service #2', 'Service #3', 1),
(8, 6, 'Service #3', 'Service #3', 2),
(9, 8, 'Zenai', 'zena', 1),
(10, 8, 'زينه', 'زينه', 2),
(11, 9, 'service', 'service', 1),
(12, 9, 'صيانة', 'صيانة', 2),
(13, 13, '1', '1', 1),
(14, 13, '1', '1', 2),
(15, 15, '1', '1', 1),
(16, 15, '1', '1', 2),
(17, 16, 'security', 'security', 1),
(18, 16, 'امن', 'امن', 2),
(19, 17, 'customer service', 'customer service', 1),
(20, 17, 'خدمة عملاء', 'خدمة عملاء', 2),
(21, 18, 'Maintenance services', 'Maintenance services', 1),
(22, 18, 'خدمات صيانة', 'خدمات صيانة', 2),
(23, 19, 'lift', 'lift', 1),
(24, 19, 'مصعد', 'مصعد', 2),
(25, 20, 'parking', 'parking', 1),
(26, 20, 'جراجات', 'جراجات', 2),
(27, 21, 'mall', 'mall', 1),
(28, 21, 'مول', 'مول', 2);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `icon`, `url`, `created_at`, `updated_at`) VALUES
(1, 'fa fa-facebook-square', 'https://www.facebook.com/Ellaboudy-Group-2073390999589788/?modal=admin_todo_tour', '2018-08-01 12:21:56', '2018-08-01 10:21:56'),
(2, 'fa fa-twitter-square', 'http://twitter.com', '2018-06-20 10:25:37', '2018-06-20 10:25:37'),
(3, 'fa fa-youtube-square', 'https://www.youtube.com/channel/UCHM7GWDnN4tRMKO0yrjfedg?disable_polymer=true', '2018-08-01 12:47:56', '2018-08-01 10:47:56'),
(4, 'fa fa-snapchat-square', 'https://accounts.snapchat.com/accounts/welcome', '2018-08-01 12:29:42', '2018-08-01 10:29:42'),
(5, 'fa fa-snapchat-square', 'https://www.instagram.com/ellaboudy.group/', '2018-08-01 12:12:58', '2018-08-01 10:12:58');

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
(1, 'Admin', 'zeina@admin.com', '$2y$10$C5URvkur6qsmau3e6ZmGt.TXnIdnO8TjhpDPui2JE3novGS7937f6', 'Iw2iqhmWfb05wCdJwQIPtbEBUxePIPusK1nXzypaJ9hVRVK0PAphKz4p7ftn', '2018-06-10 05:23:25', '2018-06-10 05:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'JZE2F7wJphM', '2018-06-10 08:27:01', '2018-06-26 11:43:06', NULL),
(2, 'JZE2F7wJphM', '2018-07-08 10:28:25', '2018-07-08 10:28:25', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_description`
--
ALTER TABLE `banner_description`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banner_id` (`banner_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `label`
--
ALTER TABLE `label`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `label_description`
--
ALTER TABLE `label_description`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `label_id` (`label_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_description`
--
ALTER TABLE `offer_description`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offer_id` (`offer_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_image`
--
ALTER TABLE `project_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `project_video`
--
ALTER TABLE `project_video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_description`
--
ALTER TABLE `service_description`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `banner_description`
--
ALTER TABLE `banner_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `label`
--
ALTER TABLE `label`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `label_description`
--
ALTER TABLE `label_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `offer_description`
--
ALTER TABLE `offer_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `project_image`
--
ALTER TABLE `project_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `project_video`
--
ALTER TABLE `project_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `service_description`
--
ALTER TABLE `service_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banner_description`
--
ALTER TABLE `banner_description`
  ADD CONSTRAINT `banner_description_ibfk_1` FOREIGN KEY (`banner_id`) REFERENCES `banner` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `banner_description_ibfk_2` FOREIGN KEY (`lang_id`) REFERENCES `language` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `label_description`
--
ALTER TABLE `label_description`
  ADD CONSTRAINT `label_description_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `language` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `label_description_ibfk_2` FOREIGN KEY (`label_id`) REFERENCES `label` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offer_description`
--
ALTER TABLE `offer_description`
  ADD CONSTRAINT `offer_description_ibfk_1` FOREIGN KEY (`offer_id`) REFERENCES `offer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `offer_description_ibfk_2` FOREIGN KEY (`lang_id`) REFERENCES `language` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_image`
--
ALTER TABLE `project_image`
  ADD CONSTRAINT `project_image_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_video`
--
ALTER TABLE `project_video`
  ADD CONSTRAINT `project_video_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_description`
--
ALTER TABLE `service_description`
  ADD CONSTRAINT `service_description_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `language` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_description_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `service_description` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
