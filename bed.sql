-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2025 at 01:29 PM
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
-- Database: `bed`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `overview` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `overview`, `image`, `created_at`, `updated_at`) VALUES
(1, '890', '<h4 style=\"margin-bottom: 15px; font-family: Poppins; line-height: 1.2; color: rgb(0, 35, 71); font-size: 30px;\"><span style=\"color: rgb(33, 37, 41); font-size: 16px;\">Subdue whales void god which living don\'t midst lesser yielding over lights whose. Cattle greater brought sixth fly den dry good tree isn\'t seed stars were.</span></h4><p style=\"margin-bottom: 30px; color: rgb(33, 37, 41); font-size: 16px; font-family: Poppins;\">Subdue whales void god which living don\'t midst lesser yieldi over lights whose. Cattle greater brought sixth fly den dry good tree isn\'t seed stars were the boring.</p>', '1750941539_31cc864b7e1f431d5b5f.png', '2025-06-26 10:46:40', '2025-06-26 12:42:57'),
(5, '', '<h3 class=\"mb-3\" style=\"font-family: Poppins; line-height: 1.2; color: rgb(33, 37, 41); font-size: 1.75rem;\">Our Commitment to Excellence</h3><p class=\"mb-3\" style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Founded with a vision to shape the future of education, Brahma Valley College of Education (B.Ed.) is dedicated to nurturing passionate educators. We combine innovative teaching methodologies with a supportive environment to prepare students for impactful careers in education.</p><p class=\"mb-4\" style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Our state-of-the-art facilities, experienced faculty, and student-centered approach ensure that every graduate is equipped to inspire and lead in classrooms and communities.</p>', '1751001644_f071af449fe817c59786.jpg', '2025-06-27 05:20:44', '2025-06-27 05:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_content`
--

CREATE TABLE `about_us_content` (
  `id` int(11) NOT NULL,
  `section_type` enum('hero','about','faculty') NOT NULL,
  `hero_title` varchar(255) DEFAULT NULL,
  `hero_subtitle` varchar(255) DEFAULT NULL,
  `hero_image` varchar(255) DEFAULT NULL,
  `overview` text DEFAULT NULL,
  `about_image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `department` text DEFAULT NULL,
  `faculty_image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us_content`
--

INSERT INTO `about_us_content` (`id`, `section_type`, `hero_title`, `hero_subtitle`, `hero_image`, `overview`, `about_image`, `name`, `designation`, `department`, `faculty_image`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', '1751001031_3e51bc7353cfcb2b1476.webp', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-27 05:10:07', '2025-06-28 06:08:47'),
(2, 'about', NULL, NULL, NULL, '<h3 class=\"mb-3\" style=\"font-family: Poppins; line-height: 1.2; color: rgb(33, 37, 41); font-size: 1.75rem;\"><span style=\"font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Founded with a vision to shape the future of education, Brahma Valley College of Education (B.Ed.) is dedicated to nurturing passionate educators. We combine innovative teaching methodologies with a supportive environment to prepare students for impactful careers in education.</span></h3><p class=\"mb-4\" style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Our state-of-the-art facilities, experienced faculty, and student-centered approach ensure that every graduate is equipped to inspire and lead in classrooms and communities.</p>', '1751090504_d0bb581eb44a7f079fdf.jpg', NULL, NULL, NULL, NULL, '2025-06-27 05:43:39', '2025-06-28 06:10:35'),
(3, 'faculty', NULL, NULL, NULL, NULL, NULL, 'Dr. Anita Sharma', 'Principal', 'With over 20 years of experience in education, Dr. Sharma leads with a vision to foster innovative teaching practices.', '1751090480_6aeb99db0f235e97cd39.png', '2025-06-27 05:49:56', '2025-06-28 06:01:20'),
(4, 'faculty', NULL, NULL, NULL, NULL, NULL, 'Prof. Rajesh Patil', 'Head of Pedagogy', 'An expert in curriculum design, Prof. Patil ensures our students master modern teaching methodologies.', '1751090458_bdbd85297bb809fedca0.png', '2025-06-27 05:51:53', '2025-06-28 06:00:58'),
(6, 'faculty', NULL, NULL, NULL, NULL, NULL, 'Ms. Priya Desai', 'Senior Lecturer', 'Ms. Desai brings passion and expertise to teacher training, specializing in inclusive education.', '1751090467_8b84741296a52577f249.png', '2025-06-27 05:54:06', '2025-06-28 06:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `admission_info`
--

CREATE TABLE `admission_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `overview` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission_info`
--

INSERT INTO `admission_info` (`id`, `title`, `overview`, `image`, `created_at`, `updated_at`) VALUES
(1, 'fg', '<h4 class=\"mb-3\" style=\"margin-bottom: 15px; font-family: Poppins; line-height: 1.2; color: rgb(0, 35, 71); font-size: 1.8rem;\">Admission Process</h4><p class=\"mb-3\" style=\"margin-bottom: 30px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Admission is conducted through the Maharashtra Common Entrance Cell, CET, organized by the Maharashtra Government.</p><p class=\"mb-3\" style=\"margin-bottom: 30px; color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\"><span style=\"font-weight: bolder;\">Course Duration:</span>&nbsp;2 Years<br><span style=\"font-weight: bolder;\">Intake:</span>&nbsp;100 (50+50)</p><h5 class=\"text-center mt-4 mb-3\" style=\"font-family: Poppins; line-height: 1.2; color: rgb(33, 37, 41); font-size: 1.5rem;\"><u style=\"color: rgb(248, 182, 0);\">Eligibility Criteria</u></h5><ul class=\"list-unstyled text-center\" style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\"><li>Minimum 45% marks in graduation (any faculty) + CET PASS for Reserved Category</li><li>Minimum 50% marks in graduation (any faculty) + CET PASS for Open Category</li></ul>', '1750941212_f8cfefffc47d5e783aa6.png', '2025-06-26 10:26:44', '2025-06-26 12:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `anti_ragging_cell`
--

CREATE TABLE `anti_ragging_cell` (
  `id` int(11) NOT NULL,
  `section_type` varchar(50) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `member_image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anti_ragging_cell`
--

INSERT INTO `anti_ragging_cell` (`id`, `section_type`, `title`, `subtitle`, `image`, `name`, `designation`, `member_image`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', '1751096890_09ff714c19f9582ce38a.webp', NULL, NULL, NULL, NULL, '2025-06-27 12:23:19', '2025-06-28 07:48:10'),
(2, 'member', NULL, NULL, NULL, 'Dr. Anita Bhaskar Thorat', 'Chairperson', '1751027097_b56358cc04c024d30b22.jpg', NULL, '2025-06-27 12:24:57', '2025-06-28 07:48:32'),
(4, 'member', NULL, NULL, NULL, 'Prof. Sachin Shivajirao Marathe', 'In-charge', '1751027648_6a344adafce7c4c770ee.jpg', NULL, '2025-06-27 12:34:08', '2025-06-28 07:48:46'),
(6, 'pdf', NULL, NULL, NULL, NULL, NULL, NULL, '1751027805_b248a0eb43395196d910.pdf', '2025-06-27 12:36:45', '2025-06-27 12:36:45'),
(7, 'pdf', NULL, NULL, NULL, NULL, NULL, NULL, '1751028451_d609490b236224796146.pdf', '2025-06-27 12:36:57', '2025-06-27 12:47:31'),
(9, 'member', NULL, NULL, NULL, 'Dr. Rabab Akil Bhagat', 'IQAC Coordinator', '1751096961_4c052f94e0d97ba8cb10.png', NULL, '2025-06-28 07:49:21', '2025-06-28 07:49:21'),
(10, 'member', NULL, NULL, NULL, 'Dr. Vidyadevi Bhila Bagul', 'Member', '1751096985_c7a26f35489494ce1841.png', NULL, '2025-06-28 07:49:45', '2025-06-28 07:49:45');

-- --------------------------------------------------------

--
-- Table structure for table `best_practices`
--

CREATE TABLE `best_practices` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `best_practices`
--

INSERT INTO `best_practices` (`id`, `file_name`, `created_at`, `updated_at`) VALUES
(1, '1751008479_c6ae5bcf3b8a224710e6.pdf', '2025-06-27 07:14:39', '2025-06-27 07:14:39'),
(2, '1751008549_5aa1dca8a1b1c4436c03.pdf', '2025-06-27 07:15:49', '2025-06-27 07:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `campus_director_desk`
--

CREATE TABLE `campus_director_desk` (
  `id` int(11) NOT NULL,
  `section_type` enum('hero','desk') NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `overview` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campus_director_desk`
--

INSERT INTO `campus_director_desk` (`id`, `section_type`, `title`, `subtitle`, `image`, `overview`, `name`, `designation`, `address`, `mobile`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', '1751005496_0754c1a0e1fee25cc59f.webp', NULL, NULL, NULL, NULL, NULL, '2025-06-27 06:24:56', '2025-06-28 06:25:21'),
(2, 'desk', 'Director\'s Message', 'Director\'s Message', '1751091921_8fcfdc7e00eda7c41d98.png', '<h4 class=\"card-title\" style=\"margin-bottom: 8px; font-family: Poppins; font-weight: 500; line-height: 1.2; color: rgb(33, 37, 41); font-size: 1.5rem;\">From The Director\'s Desk</h4><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">I take great pleasure in welcoming you to the Nashik Gramin Shikshan Prasarak Mandal. We are committed to the holistic growth and development of every student, ensuring a strong foundation for a successful career.</p><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Our institutions are backed by a team of highly qualified, experienced, and dedicated faculty members. They not only deliver academic excellence but also mentor students in their overall personality and skill development.</p><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">We believe that every student has unique potential, and it is our mission to nurture that potential with care, commitment, and competence. Our educational environment fosters independence, confidence, and leadership qualities.</p><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">I am confident that the students who graduate from our institutions will emerge as responsible, capable, and future-ready individuals. We are here to support you in every step of your academic journey and personal growth.</p><p class=\"fw-bold mt-4\" style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Best Wishes,<br>Dr. Chandrashekhar K. Patil<br>Campus Director</p>', 'Dr. Chandrashekhar K. Patil', 'Campus Director', 'Nashik Gramin Shikshan Prasarak Mandal', '12134567898', '2025-06-27 06:24:56', '2025-06-28 06:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `code_of_conduct`
--

CREATE TABLE `code_of_conduct` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `code_of_conduct`
--

INSERT INTO `code_of_conduct` (`id`, `file_name`, `created_at`, `updated_at`) VALUES
(1, '1751007998_00e49f65602c4b44311a.pdf', '2025-06-27 07:06:38', '2025-06-27 07:06:38'),
(3, '1751008149_2626ab39ff1163953dff.pdf', '2025-06-27 07:09:09', '2025-06-27 07:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_page`
--

CREATE TABLE `contact_us_page` (
  `id` int(11) NOT NULL,
  `section_type` enum('hero','contact') NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `map` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us_page`
--

INSERT INTO `contact_us_page` (`id`, `section_type`, `title`, `subtitle`, `image`, `map`, `address`, `mobile`, `email`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', '1751098604_0862e7a353cc36cbec8f.webp', NULL, NULL, NULL, NULL, '2025-06-28 05:24:58', '2025-06-28 08:16:44'),
(4, 'contact', NULL, NULL, NULL, 'Anjaneri, Trimbak Road, Nashik Maharashtra 422213', 'Anjaneri, Trimbak Road, nashik', '00 (440) 9865 562', 'bramahavalley@gmail.com', '2025-06-28 08:19:44', '2025-06-28 08:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `divyang_cell`
--

CREATE TABLE `divyang_cell` (
  `id` int(11) NOT NULL,
  `section_type` enum('hero','member','pdf') NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `divyang_cell`
--

INSERT INTO `divyang_cell` (`id`, `section_type`, `title`, `subtitle`, `name`, `designation`, `contact`, `image`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', NULL, NULL, NULL, '1751095383_935b27170927fe4923fc.webp', NULL, '2025-06-27 10:09:04', '2025-06-28 07:23:03'),
(2, 'member', NULL, NULL, 'Dr. Anita Bhaskar Thorat', 'Principal', '85858585', '1751019079_4a51c7fc579ccd29976a.jpg', NULL, '2025-06-27 10:11:19', '2025-06-28 07:22:02'),
(3, 'member', NULL, NULL, 'Dr. Rabab Akil Bhagat', 'Student Development Officer', '85858585', '1751019092_edf4ca3cb28a0a56988a.jpg', NULL, '2025-06-27 10:11:32', '2025-06-28 07:22:20'),
(5, 'pdf', NULL, NULL, NULL, NULL, NULL, NULL, '1751020285_ab65f1dada57a4ab2651.pdf', '2025-06-27 10:25:20', '2025-06-27 10:31:25'),
(7, 'member', NULL, NULL, 'Dr. Sachin Ashok Pore', 'Teacher Representative - Male', NULL, '1751095369_6314130ef8a089c93259.png', NULL, '2025-06-28 07:22:49', '2025-06-28 07:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `equal_opportunity`
--

CREATE TABLE `equal_opportunity` (
  `id` int(11) NOT NULL,
  `section_type` enum('hero','member','pdf') NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equal_opportunity`
--

INSERT INTO `equal_opportunity` (`id`, `section_type`, `title`, `subtitle`, `name`, `designation`, `contact`, `image`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', NULL, NULL, NULL, '1751094418_5f7acf67a52aa4969ab5.webp', NULL, '2025-06-27 08:51:04', '2025-06-28 07:06:58'),
(2, 'member', NULL, NULL, 'Dr. Anita Bhaskar Thorat', 'Principal', 'iuouio', '1751014361_ce6280306972c60baa22.jpg', NULL, '2025-06-27 08:52:41', '2025-06-28 07:07:15'),
(3, 'member', NULL, NULL, 'Dr. Rabab Akil Bhagat', 'IQAC Coordinator', 'iuoo', '1751014377_0cf6065168e41f0daec6.jpg', NULL, '2025-06-27 08:52:57', '2025-06-28 07:07:31'),
(5, 'pdf', NULL, NULL, NULL, NULL, NULL, NULL, '1751015120_32cef23664780c0a9587.pdf', '2025-06-27 08:58:16', '2025-06-27 09:05:20'),
(8, 'member', NULL, NULL, 'Dr. Vidyadevi Bhila Bagul', 'Member', '85858585', '1751094482_8569a85f3f483082b4c0.png', NULL, '2025-06-28 07:08:02', '2025-06-28 07:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `faq_testimonial`
--

CREATE TABLE `faq_testimonial` (
  `id` int(11) NOT NULL,
  `section_type` enum('faq','testimonial') NOT NULL,
  `question` text DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq_testimonial`
--

INSERT INTO `faq_testimonial` (`id`, `section_type`, `question`, `answer`, `content`, `name`, `designation`, `created_at`, `updated_at`) VALUES
(1, 'faq', 'What are the eligibility criteria for the B.Ed program?', 'Candidates must have a bachelor\'s degree with a minimum of 50% marks (45% for reserved categories) from a recognized university.', NULL, NULL, NULL, '2025-06-26 11:27:36', '2025-06-28 05:42:45'),
(3, 'testimonial', NULL, NULL, 'The faculty at BVCE are incredibly supportive, and the hands-on teaching practice helped me gain confidence as an educator. The campus facilities are top-notch!”', 'Priya Sharma', 'B.Ed Student, Aurangabad', '2025-06-26 11:36:44', '2025-06-28 05:44:24'),
(4, 'faq', 'Is there an entrance exam for admission?', 'Yes, you must qualify the MAH-B.Ed CET conducted by the State Common Entrance Test Cell, Maharashtra.', NULL, NULL, NULL, '2025-06-26 11:37:00', '2025-06-28 05:43:07'),
(6, 'testimonial', NULL, NULL, '“The cultural events and personality development programs at BVCE made my college experience unforgettable. I feel well-prepared for my teaching career.”', 'Priya Sharma ', ' B.Ed Student, Nashik   Previous Next', '2025-06-26 11:41:13', '2025-06-28 05:45:01'),
(7, 'faq', 'Are hostel facilities available for students?', 'Yes, BVCE offers hostels for boys (600 capacity) and girls (400 capacity) with all essential amenities.', NULL, NULL, NULL, '2025-06-28 05:43:27', '2025-06-28 05:43:27'),
(8, 'faq', 'What scholarships are available for students?', 'Scholarships are available per Government of Maharashtra guidelines for eligible and economically weaker students.', NULL, NULL, NULL, '2025-06-28 05:43:50', '2025-06-28 05:43:50');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Yoga Lecture', '1751090070_732a5115cb4bdb3e45a0.jpg', '2025-06-26 11:46:19', '2025-06-28 05:54:30'),
(2, 'Yoga Activity', '1751090101_ab63c13c31007335ea0a.jpg', '2025-06-26 11:47:37', '2025-06-28 05:55:01'),
(4, 'Teaching with Technology', '1751090141_55c4ec011eea7614402b.jpg', '2025-06-28 05:55:41', '2025-06-28 05:55:41'),
(5, 'Classroom Activity', '1751090160_c2db819e509641f644bc.jpg', '2025-06-28 05:56:00', '2025-06-28 05:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `general_secretary_desk`
--

CREATE TABLE `general_secretary_desk` (
  `id` int(11) NOT NULL,
  `section_type` enum('hero','desk') NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `overview` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `general_secretary_desk`
--

INSERT INTO `general_secretary_desk` (`id`, `section_type`, `title`, `subtitle`, `image`, `overview`, `name`, `designation`, `address`, `mobile`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', '1751091706_ff403d0771b0b9899865.webp', NULL, NULL, NULL, NULL, NULL, '2025-06-27 06:19:01', '2025-06-28 06:21:46'),
(2, 'desk', 'General Secretary\'s Message', 'General Secretary\'s', '1751091706_8c3601088af98f89e1d2.jpg', '<h4 class=\"card-title mb-3\" style=\"font-family: Poppins; font-weight: 500; line-height: 1.2; color: rgb(33, 37, 41); font-size: 1.5rem; margin-bottom: 1rem !important;\">From The General Secretary\'s Desk</h4><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Dear Student,</p><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Welcome to NGSPM’s Brahma Valley College of Education, Anjaneri, Nashik. We are proud to welcome you to our academic family. Over the past fifteen years, the college has achieved commendable progress in the field of education.</p><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Teachers and students are the lifeblood of any educational institution. Teachers, through their actions and values, leave a lasting impression on students. During your B.Ed. journey over the next two years, I am confident that you will experience high-quality, value-based education.</p><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Our college continues to emerge as a preferred institution due to its focus on research, co-curricular activities, sports, student development, and NSS. The growth in stature is the result of the dedicated efforts of our experienced faculty, committed staff, and visionary leadership.</p><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">We take pride in being a hub of excellence, and I am pleased to extend my best wishes to all faculty members and students in their future academic and personal pursuits.</p><p class=\"fw-bold mt-4\" style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Best Regards,<br>Rajaram D. Pangavhane (Patil)<br>General Secretary</p>', 'Rajaram D. Pangavhane (Patil)', 'General Secretary', 'Nashik Gramin Shikshan Prasarak Mandal', '1234567898', '2025-06-27 06:19:01', '2025-06-28 06:21:46');

-- --------------------------------------------------------

--
-- Table structure for table `grievance_cell_content`
--

CREATE TABLE `grievance_cell_content` (
  `id` int(11) NOT NULL,
  `section_type` enum('hero','member','pdf') NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grievance_cell_content`
--

INSERT INTO `grievance_cell_content` (`id`, `section_type`, `title`, `subtitle`, `name`, `designation`, `image`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'Apply now ', NULL, NULL, '1751096377_5dd6a0eb5b97069f2382.webp', NULL, '2025-06-27 11:05:15', '2025-06-28 07:39:56'),
(2, 'member', NULL, NULL, 'Dr. Anita Bhaskar Thorat', 'Principal', '1751023343_5d9702f584db6748dc4f.jpg', NULL, '2025-06-27 11:22:23', '2025-06-28 07:40:21'),
(3, 'member', NULL, NULL, 'Dr. Rahul Dalitrao Dhere', 'Coordinator', '1751023357_8ac4040b99d03ac5cf6d.jpg', NULL, '2025-06-27 11:22:37', '2025-06-28 07:40:35'),
(5, 'pdf', NULL, NULL, NULL, NULL, NULL, '1751023972_ef645d7689a9fe2d1ccf.pdf', '2025-06-27 11:29:56', '2025-06-27 11:32:52'),
(7, 'member', NULL, NULL, 'Dr. Sachin Ashok Pore', 'Teacher Representative', '1751096456_e93acccadb12d2b307bb.png', NULL, '2025-06-28 07:40:56', '2025-06-28 07:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `grievance_redressal_cell`
--

CREATE TABLE `grievance_redressal_cell` (
  `id` int(11) NOT NULL,
  `section_type` enum('hero','member','pdf') NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grievance_redressal_cell`
--

INSERT INTO `grievance_redressal_cell` (`id`, `section_type`, `title`, `subtitle`, `image`, `name`, `designation`, `contact`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', '1751095110_4d6441ed03a3c987df09.webp', NULL, NULL, NULL, NULL, '2025-06-27 09:35:11', '2025-06-28 07:18:30'),
(2, 'member', NULL, NULL, '1751017083_8c170dda9529cb971dd9.webp', 'Dr. Anita Bhaskar Thorat', 'Principal', 'uytyu', NULL, '2025-06-27 09:38:03', '2025-06-28 07:19:06'),
(4, 'member', NULL, NULL, '1751017109_36a6dc767a872749e7b8.jpg', 'Dr. Vidyadevi Bhila Bagul', 'Coordinator', 'tyutyu', NULL, '2025-06-27 09:38:29', '2025-06-28 07:19:24'),
(7, 'pdf', NULL, NULL, NULL, NULL, NULL, NULL, '1751018239_6e5114ae6bebd3dc0041.pdf', '2025-06-27 09:52:59', '2025-06-27 09:57:19'),
(9, 'member', NULL, NULL, '1751095193_fbfc3f51ac34f09b47eb.png', 'Dr. Sachin Ashok Pore', 'Teacher Representative', '85858585', NULL, '2025-06-28 07:19:53', '2025-06-28 07:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `hero_sections`
--

CREATE TABLE `hero_sections` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hero_sections`
--

INSERT INTO `hero_sections` (`id`, `title`, `subtitle`, `banner_image`, `created_at`, `updated_at`) VALUES
(1, 'Nashik Gramin Shikshan Prasarak Mandals BRAHMA VALLEY COLLEGE OF EDUCATION (B.ED.)', 'Id. No PU/NS/B.ED/104/2007 ', '1750938582_475e6a4622cf9d2beddb.webp', '2025-06-26 10:06:13', '2025-06-26 11:59:56'),
(2, 'Nashik Gramin Shikshan Prasarak Mandals BRAHMA VALLEY COLLEGE OF EDUCATION (B.ED.)', 'Id. No PU/NS/B.ED/104/2007', '1750938612_e03c713f07e248fc3a1e.webp', '2025-06-26 10:07:46', '2025-06-26 11:50:12'),
(4, 'Nashik Gramin Shikshan Prasarak Mandals BRAHMA VALLEY COLLEGE OF EDUCATION (B.ED.)', 'Id. No PU/NS/B.ED/104/2007', '1750938636_96f9dc356f8351cf8bc0.webp', '2025-06-26 10:13:43', '2025-06-26 11:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `infrastructure`
--

CREATE TABLE `infrastructure` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infrastructure`
--

INSERT INTO `infrastructure` (`id`, `title`, `subtitle`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Well-Equipped Library', 'A spacious library with ample reference books, textbooks, journals, and a dedicated reading hall.', '1751088806_21dafe647d4ebedca218.jpg', '2025-06-26 11:19:05', '2025-06-28 05:33:26'),
(3, 'Centralized Computer Lab', 'A modern computer lab with high-speed internet access for all students.', '1751088858_ea1fb02d94b7c2db7fd4.jpg', '2025-06-26 11:19:56', '2025-06-28 05:34:18'),
(4, 'Hostel Facility', 'Well-furnished, ventilated hostels with trained staff ensuring security, health, and hygiene.', '1751088922_99668b9a57f769290665.jpg', '2025-06-26 11:20:03', '2025-06-28 05:35:22'),
(5, 'Cafeteria', 'A professionally managed canteen offering nutritious food, clean drinking water, and a hygienic environment.', '1751088966_c0cb38c5d1e9a9ec1edb.jpg', '2025-06-28 05:36:06', '2025-06-28 05:36:06'),
(6, 'Transportation', 'Regular bus services by MSRTC from Nashik city and district to the college campus.', '1751088991_2ec17a47acb2e68d2be5.webp', '2025-06-28 05:36:31', '2025-06-28 05:36:31'),
(7, 'Personality Development', 'Programs to equip students with skills to manage stress, time, and succeed in a competitive world.', '1751089026_4cfddf5b2b36702014e0.png', '2025-06-28 05:37:06', '2025-06-28 05:37:06'),
(8, 'Cultural Fiesta & Sports', 'Annual celebrations and sports events like Gandhi Jayanti, Savitribai Phule Jayanti, Teachers\' Day, and more.', '1751089059_f12d044c0799547e7fea.jpg', '2025-06-28 05:37:39', '2025-06-28 05:37:39'),
(9, 'Scholarship', 'Scholarships and freeships as per Maharashtra Government for eligible and economically backward students.', '1751089095_2c320b74be16c66e3856.jpg', '2025-06-28 05:38:15', '2025-06-28 05:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `infrastructure_page`
--

CREATE TABLE `infrastructure_page` (
  `id` int(11) NOT NULL,
  `section_type` varchar(50) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infrastructure_page`
--

INSERT INTO `infrastructure_page` (`id`, `section_type`, `title`, `subtitle`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', NULL, '1751097270_73cdf36d9824a0c2a23f.webp', '2025-06-28 10:15:40', '2025-06-28 13:33:46'),
(7, 'gallery', NULL, NULL, 'Main Gate', '1751098265_d0b0a2c66d033c6a2ff5.png', '2025-06-28 13:41:05', '2025-06-28 13:41:05'),
(8, 'gallery', NULL, NULL, 'College Ground & Green Gym', '1751098297_ede3a1ec698f9ea2982b.jpg', '2025-06-28 13:41:37', '2025-06-28 13:41:37');

-- --------------------------------------------------------

--
-- Table structure for table `iqac_page`
--

CREATE TABLE `iqac_page` (
  `id` int(11) NOT NULL,
  `section_type` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iqac_page`
--

INSERT INTO `iqac_page` (`id`, `section_type`, `title`, `subtitle`, `name`, `designation`, `image`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', NULL, NULL, '1751009043_9ec671efff5a9d552221.webp', '2025-06-27 07:24:03', '2025-06-27 07:24:16'),
(2, 'member', NULL, NULL, 'Dr. Chandrashekhar Patil', 'Management Representative', '1751093723_ae3dae91b807a7a79bd7.png', '2025-06-27 07:24:43', '2025-06-28 06:55:23'),
(3, 'member', NULL, NULL, 'Dr. Anita Thorat', 'Principal', '1751093731_f1bdd353a37c15e98f1e.png', '2025-06-27 07:24:58', '2025-06-28 06:55:31'),
(5, 'member', NULL, NULL, 'Dr. Rabab Bhagat', 'IQAC Coordinator', '1751093744_7e5d965b2aec60e066e7.png', '2025-06-27 07:33:42', '2025-06-28 06:55:44'),
(6, 'member', NULL, NULL, 'Mr. Pramod Bhadakawade', 'Academic External Advisor', '1751093714_1eb32c6b15533fff868c.png', '2025-06-28 06:55:14', '2025-06-28 06:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `library_nep_2020`
--

CREATE TABLE `library_nep_2020` (
  `id` int(11) NOT NULL,
  `section_type` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `library_nep_2020`
--

INSERT INTO `library_nep_2020` (`id`, `section_type`, `title`, `subtitle`, `image`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', '1751097142_9c5ff6556890cb10c6b6.webp', NULL, '2025-06-27 12:55:20', '2025-06-28 07:52:22'),
(2, 'pdf', NULL, NULL, NULL, '1751029038_e79f742ae8801563327a.pdf', '2025-06-27 12:57:18', '2025-06-27 12:57:18'),
(4, 'pdf', NULL, NULL, NULL, '1751029530_550567f4648f28c259bb.pdf', '2025-06-27 13:05:23', '2025-06-27 13:05:30');

-- --------------------------------------------------------

--
-- Table structure for table `naac_documents`
--

CREATE TABLE `naac_documents` (
  `id` int(11) NOT NULL,
  `section_type` varchar(50) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `naac_documents`
--

INSERT INTO `naac_documents` (`id`, `section_type`, `title`, `subtitle`, `image`, `pdf`, `created_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College123', 'apply now', '1751087283_9a8e0520bb67cb343334.jpg', NULL, '2025-06-28 10:38:03'),
(2, 'pdf', NULL, NULL, NULL, '1751087371_b7b1bb03569ec94b36b2.pdf', '2025-06-28 10:39:31'),
(3, 'pdf', NULL, NULL, NULL, '1751087380_6b91e582da8a4658da93.pdf', '2025-06-28 10:39:40');

-- --------------------------------------------------------

--
-- Table structure for table `placement_cell_content`
--

CREATE TABLE `placement_cell_content` (
  `id` int(11) NOT NULL,
  `section_type` varchar(50) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `placement_cell_content`
--

INSERT INTO `placement_cell_content` (`id`, `section_type`, `title`, `subtitle`, `name`, `designation`, `image`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', NULL, NULL, '1751024353_db7d22885c9be919a779.webp', NULL, '2025-06-27 11:39:13', '2025-06-27 11:39:27'),
(2, 'member', NULL, NULL, 'DR. ANITA BHASKAR THORAT', 'PRINCIPAL', '1751024442_2738ab51e7760a52b3fb.jpg', NULL, '2025-06-27 11:40:42', '2025-06-28 07:43:08'),
(3, 'member', NULL, NULL, 'DR. RABAB AKIL BHAGAT', 'COORDINATOR', '1751024454_d6859c3e49d2d0e11ff6.jpg', NULL, '2025-06-27 11:40:54', '2025-06-28 07:43:22'),
(6, 'pdf', NULL, NULL, NULL, NULL, NULL, '1751024747_aff662dba0f223483de8.pdf', '2025-06-27 11:45:47', '2025-06-27 11:45:47'),
(7, 'pdf', NULL, NULL, NULL, NULL, NULL, '1751024953_c8b0caf8fa9fc2a3dc1a.pdf', '2025-06-27 11:48:57', '2025-06-27 11:49:13'),
(9, 'member', NULL, NULL, 'DR. VIDYADEVI BHILA BAGUL', 'MEMBER', '1751096627_3ba8fb760dd806d5bb3c.png', NULL, '2025-06-28 07:43:47', '2025-06-28 07:43:47'),
(10, 'member', NULL, NULL, 'DR. SACHIN ASHOK PORE', 'MEMBER', '1751096650_589d4d74b1a5a50050db.png', NULL, '2025-06-28 07:44:10', '2025-06-28 07:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `president_desk`
--

CREATE TABLE `president_desk` (
  `id` int(11) NOT NULL,
  `section_type` enum('hero','desk') NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `overview` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `president_desk`
--

INSERT INTO `president_desk` (`id`, `section_type`, `title`, `subtitle`, `image`, `overview`, `name`, `designation`, `address`, `mobile`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', '1751004792_f35849aab2a93fade8a9.jpg', NULL, NULL, NULL, NULL, NULL, '2025-06-27 06:13:12', '2025-06-28 06:17:23'),
(2, 'desk', 'President\'s Message', 'adsa', '1751091443_7a79ffc6903ee99dd2ac.png', '<h4 class=\"card-title mb-3\" style=\"font-family: Poppins; font-weight: 500; line-height: 1.2; color: rgb(33, 37, 41); font-size: 1.5rem; margin-bottom: 1rem !important;\">From The President\'s Desk</h4><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Brahma Valley College of Education (B.Ed.) is committed to imparting quality education in a safe and natural environment that fosters discipline, motivation, and lifelong learning.</p><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Our motto stands as a reminder that education is the most vital instrument for all-round development and for passing on culture and values through generations. At Brahma Valley, we aspire not just to shape successful professionals, but to nurture well-rounded, cultured individuals.</p><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">With this vision, we have created a nurturing environment and a systematic approach to enhance the holistic personality of every student-teacher. We believe education should develop both competence and character.</p><p class=\"fw-bold mt-4\" style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Best Regards,<br>Rajaram D. Pangavhane (Patil)<br>Founder President</p>', 'Rajaram D. Pangavhane (Patil)', 'Founder President', 'Nashik Gramin Shikshan Prasarak Mandal', '1234567898', '2025-06-27 06:13:12', '2025-06-28 06:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `principal_desk`
--

CREATE TABLE `principal_desk` (
  `id` int(11) NOT NULL,
  `section_type` enum('hero','desk') NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `overview` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `principal_desk`
--

INSERT INTO `principal_desk` (`id`, `section_type`, `title`, `subtitle`, `image`, `overview`, `name`, `designation`, `address`, `mobile`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', '1751006009_ddefd6ffc10d0bb3a891.webp', NULL, NULL, NULL, NULL, NULL, '2025-06-27 06:33:29', '2025-06-28 06:30:23'),
(2, 'desk', 'Principal\'s Message', 'Principal\'s Message', '1751092223_61a3414785910f861402.png', '<h4 class=\"card-title\" style=\"margin-bottom: 8px; font-family: Poppins; font-weight: 500; line-height: 1.2; color: rgb(33, 37, 41); font-size: 1.5rem;\">From The Principal\'s Desk</h4><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\"><span style=\"font-weight: bolder;\">Respected Parents and Dear Students,</span></p><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">It is with great pleasure that I welcome you to our college website. Since 2006, our institution has been imparting quality education in the tribal area of Nashik District. Nashik Gramin Shikshan Prasarak Mandal’s Brahma Valley College of Education is a vibrant educational community of exemplary standards with a commitment to quality education and a rigorous academic environment.</p><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Our Teacher Training Institute aims to enhance the quality of education and empower our teachers. We believe that well-trained and motivated teachers are the cornerstone of a successful institution, and this initiative reflects our commitment to providing the best learning experience for our students.</p><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">The institute offers training programs and workshops focused on modern teaching methodologies, classroom management, and educational technologies. Conducted by experienced educators and industry experts, these programs enable our teachers to refine their skills and stay up-to-date with current trends.</p><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">This initiative promotes a culture of continuous learning. We believe learning is a lifelong journey, and our teachers’ growth directly improves the quality of education you receive.</p><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">I encourage you to appreciate the efforts of our teachers and make the most of the enriched learning environment they offer. With support from our management, we’ve also established the YCMOU, Nashik study centre to help students who may have missed formal education opportunities.</p><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">We are committed to mentoring you as our mentees. Let us work hand in hand to build your future together.</p><p style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Thank you for visiting our website. I wish you a fulfilling and successful journey at our college.</p><p class=\"fw-bold mt-4\" style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\">Best Regards,<br>Dr. Anita B. Thorat<br>Principal</p>', 'Dr. Anita Bhaskar Thorat', 'Designation: Principal', 'Qualification: M.A., M.Ed., NET (JRF), DSM, Ph.D. (Education)  From The Principal\'s Desk', '12345678', '2025-06-27 06:33:29', '2025-06-28 06:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `right_to_information`
--

CREATE TABLE `right_to_information` (
  `id` int(11) NOT NULL,
  `section_type` enum('hero','member','pdf') NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `right_to_information`
--

INSERT INTO `right_to_information` (`id`, `section_type`, `title`, `subtitle`, `image`, `name`, `designation`, `contact`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', '1751010543_d324f0e1857f33fd2c79.webp', NULL, NULL, NULL, NULL, '2025-06-27 13:19:03', '2025-06-27 13:19:18'),
(3, 'member', NULL, NULL, '1751094247_14bcdcb509ddaf32ffde.png', 'Dr. Anita Thorat', 'Appealing Officer', '85858585', NULL, '2025-06-27 13:21:55', '2025-06-28 12:34:07'),
(4, 'member', NULL, NULL, '1751094292_ce09517d896eea0d72d6.png', 'Dr. Rabab Bhagat', 'Public Information Officer', '85858585', NULL, '2025-06-27 13:23:02', '2025-06-28 12:34:52'),
(5, 'pdf', NULL, NULL, NULL, NULL, NULL, NULL, '1751011949_671f301f83c161d291fc.pdf', '2025-06-27 13:42:29', '2025-06-27 13:42:29'),
(7, 'pdf', NULL, NULL, NULL, NULL, NULL, NULL, '1751012111_8e8462e12ed7ff88aaa6.pdf', '2025-06-27 13:45:11', '2025-06-27 13:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `student_council`
--

CREATE TABLE `student_council` (
  `id` int(11) NOT NULL,
  `section_type` enum('hero','member','pdf') NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_council`
--

INSERT INTO `student_council` (`id`, `section_type`, `title`, `subtitle`, `name`, `designation`, `image`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', NULL, NULL, '1751096752_fc192edbe7f672577862.webp', NULL, '2025-06-27 11:58:04', '2025-06-28 07:45:52'),
(2, 'member', NULL, NULL, 'DR. ANITA BHASKAR THORAT', 'PRINCIPAL', '1751025583_3355afb7ef48bdcb1497.jpg', NULL, '2025-06-27 11:59:43', '2025-06-28 07:46:18'),
(3, 'member', NULL, NULL, 'DR. RAHUL DALITRAO DHERE', 'TEACHER REPRESENTATIVE - MALE', '1751025596_445192b33551116dad4d.jpg', NULL, '2025-06-27 11:59:56', '2025-06-28 07:46:34'),
(5, 'member', NULL, NULL, 'DR. RABAB AKIL BHAGAT', 'TEACHER REPRESENTATIVE - FEMALE', '1751025944_f61f66622ba65d5dccd2.png', NULL, '2025-06-27 12:05:44', '2025-06-28 07:46:50'),
(6, 'pdf', NULL, NULL, NULL, NULL, NULL, '1751026154_7f74a1d6376d39c8063b.pdf', '2025-06-27 12:09:14', '2025-06-27 12:09:14'),
(7, 'pdf', NULL, NULL, NULL, NULL, NULL, '1751026449_547feee503baea33bb14.pdf', '2025-06-27 12:09:26', '2025-06-27 12:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `student_development_committee`
--

CREATE TABLE `student_development_committee` (
  `id` int(11) NOT NULL,
  `section_type` enum('hero','member','pdf') NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_development_committee`
--

INSERT INTO `student_development_committee` (`id`, `section_type`, `title`, `subtitle`, `name`, `designation`, `contact`, `image`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', NULL, NULL, NULL, '1751094757_8b66799fbb9b1e30b714.webp', NULL, '2025-06-27 09:13:13', '2025-06-28 07:12:37'),
(2, 'member', NULL, NULL, 'Dr. Anita Bhaskar Thorat', 'Principal', '85858585', '1751015720_bc0bad8cd7eadca9d235.jpg', NULL, '2025-06-27 09:15:20', '2025-06-28 07:12:54'),
(4, 'member', NULL, NULL, 'Dr. Rahul Dalitrao Dhere', 'Visit Department Head', '85858585', '1751015999_2266ba8abf4602d618d9.jpg', NULL, '2025-06-27 09:19:59', '2025-06-28 07:13:11'),
(7, 'pdf', NULL, NULL, NULL, NULL, NULL, NULL, '1751017847_6ed53563cdd2788b3fb0.pdf', '2025-06-27 09:26:49', '2025-06-27 09:50:47'),
(10, 'member', NULL, NULL, 'Dr. Vidyadevi Bhila Bagul', 'Cultural Department Head', '85858585', '1751094814_286f11efc0b2fc798922.png', NULL, '2025-06-28 07:13:34', '2025-06-28 07:13:34'),
(11, 'member', NULL, NULL, 'Prof. Sachin Shivajirao Marathe', 'Sports Department Head', '85858585', '1751094838_b2d18675e52f4ce78ad3.png', NULL, '2025-06-28 07:13:58', '2025-06-28 07:13:58');

-- --------------------------------------------------------

--
-- Table structure for table `teaching_faculty_page`
--

CREATE TABLE `teaching_faculty_page` (
  `id` int(11) NOT NULL,
  `section_type` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teaching_faculty_page`
--

INSERT INTO `teaching_faculty_page` (`id`, `section_type`, `title`, `subtitle`, `name`, `designation`, `qualification`, `image`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', NULL, NULL, NULL, '1751093398_1011f7c9e2698e8a4fcf.jpg', '2025-06-27 06:44:20', '2025-06-28 06:49:58'),
(2, 'teaching', NULL, NULL, 'DR. ANITA BHASKAR THORAT', 'PRINCIPAL', 'M.A., M.Ed., NET (JRF), DSM, Ph.D. (Education)', '1751092489_38581d9956bedfaf62b6.png', '2025-06-27 06:44:39', '2025-06-28 06:34:49'),
(3, 'nonteaching', NULL, NULL, 'MR. TOPALE BALU NATHU', 'LIBRARIAN', 'B.A., M.Lib.I.Sc., NET, SET', '1751092658_72f70d8ecf3d40afd3fb.png', '2025-06-27 06:44:54', '2025-06-28 06:37:38'),
(4, 'teaching', NULL, NULL, 'DR. RABAB AKIL BHAGAT', 'ASSISTANT PROFESSOR', 'MSc (Botany), M.Ed., NET, SET, DSM, Ph.D. (Education)', '1751092550_e6e3c54fbd58682068f9.png', '2025-06-27 06:45:14', '2025-06-28 06:35:50'),
(5, 'nonteaching', NULL, NULL, 'SHUBHANG MADHAV GHOTEKAR', 'MUSIC TEACHER', ' Sangit Alankar, B.A. (English)', '1751092693_7d818705ccb92efc9e02.png', '2025-06-27 06:45:25', '2025-06-28 06:38:13'),
(6, 'teaching', NULL, NULL, 'DR. RAHUL DALITRAO DHERE', 'ASSISTANT PROFESSOR', 'M.A. (Defense & Strategic Studies, Marathi, Politics), M.Ed., DSM, Ph.D. (Education)', '1751092587_5c0658a873a5d670c996.jpg', '2025-06-27 06:51:05', '2025-06-28 06:36:27'),
(9, 'teaching', NULL, NULL, 'PROF. KAVITA JAYPRAKASH KADAM', 'ASSISTANT PROFESSOR', 'M.Sc. (Maths), M.Ed., SET, DSM', '1751092619_7358e73b0d7e60109fd6.jpg', '2025-06-28 06:36:59', '2025-06-28 06:36:59'),
(10, 'nonteaching', NULL, NULL, 'NARODE SANDIP VISHWANATH', 'ACCOUNTANT', 'B.Com.', '1751092726_212349707fb4be1b0827.jpg', '2025-06-28 06:38:46', '2025-06-28 06:38:46'),
(11, 'nonteaching', NULL, NULL, 'GHANGALE HANUMANT RAMESH', 'PEON/CLERK', 'B.A.', '1751092757_ba34ed9a56ad1d39f536.png', '2025-06-28 06:39:17', '2025-06-28 06:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'bramha', 'valley', 'bramha@gmail.com', '$2y$10$RVzToP8nk3LqicMqf7gd2eyCq2np3doKvW7oUX9KINEa6ZgoGsSXO', '2025-06-28 16:23:45', '2025-06-28 16:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `vision_mission_page`
--

CREATE TABLE `vision_mission_page` (
  `id` int(11) NOT NULL,
  `section_type` enum('hero','content') NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `belief` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vision_mission_page`
--

INSERT INTO `vision_mission_page` (`id`, `section_type`, `title`, `subtitle`, `image`, `vision`, `mission`, `belief`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', '1751004066_4eff6c80e0c0d1dbf1c5.jpg', NULL, NULL, NULL, '2025-06-27 06:01:06', '2025-06-28 06:16:40'),
(2, 'content', NULL, NULL, NULL, '<h4 style=\"margin-bottom: 10px; font-family: Poppins; line-height: 1.2; color: rgb(51, 51, 51); font-size: 1.5rem; text-align: center;\"><span style=\"color: rgb(102, 102, 102); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 0.95rem;\">To create a center of excellence in Education (B.Ed) by developing future teachers with the right knowledge, skills, and attitude for life and society.</span></h4>', '<h4 style=\"margin-bottom: 10px; font-family: Poppins; line-height: 1.2; color: rgb(51, 51, 51); font-size: 1.5rem; text-align: center;\"><span style=\"color: rgb(102, 102, 102); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 0.95rem;\">To deliver quality education through innovative methods, foster creativity, empower rural youth and women, promote national integration, and support flexible, learner-centered programs that nurture moral and scientific values.</span></h4>', '<h4 style=\"margin-bottom: 10px; font-family: Poppins; line-height: 1.2; color: rgb(51, 51, 51); font-size: 1.5rem; text-align: center;\"><span style=\"color: rgb(102, 102, 102); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 0.95rem;\">“There is nothing as pure as knowledge”</span></h4>', '2025-06-27 06:01:06', '2025-06-28 06:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `why_join_bvce`
--

CREATE TABLE `why_join_bvce` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_type` enum('content','image') NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `overview` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `why_join_bvce`
--

INSERT INTO `why_join_bvce` (`id`, `section_type`, `title`, `heading`, `overview`, `image`, `created_at`, `updated_at`) VALUES
(1, 'content', 'Prime Accessibility', 'uiop', '<p class=\"mb-3\" style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\"><span style=\"font-weight: bolder;\">Easily approachable campus:</span></p><ol style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\"><li>By road, just 10 KM from Nashik City on Nashik-Trimbakeshwar Highway</li><li>By road, 180 KM from Aurangabad</li><li>By rail, 20 KM from Nashik Road railway station and 65 KM from Manmad Railway Junction</li><li>Nearest airport, about 40 KM away at Ozar Mig and 180 KM away at Mumbai Metro City</li></ol>', '1750935594_a7027d180f0f9dd1ad23.jpg', '2025-06-26 10:59:54', '2025-06-26 12:44:01'),
(2, 'content', 'World-Class Facilities', 'p[]', '<ol style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\"><li>Well-qualified and experienced faculty</li><li>Central E-library facility for all colleges</li><li>Voluminous library with adequate reference books, textbooks, journals, and periodicals</li><li>Well-furnished and ventilated hostel with hygienic cafeteria</li><li>Excellent transport facility</li><li>Wi-Fi campus with 20 Mbps bandwidth</li><li>Well-equipped laboratories as per norms</li><li>Campus with hostel facilities for boys (600 capacity) and girls (400 capacity) with all necessary amenities</li></ol>', '1750935660_4969209f911303d58ce2.png', '2025-06-26 11:01:00', '2025-06-26 12:44:27'),
(6, 'image', NULL, NULL, NULL, '1750942616_04c2088ee1534afe7e6c.jpg', '2025-06-26 11:09:25', '2025-06-26 12:56:56'),
(8, 'content', 'Vibrant Student Life', 'wc ', '<ol style=\"color: rgb(33, 37, 41); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px;\"><li>Emphasis on sports and personality development</li><li>Cultural Fiesta every year in Jan-Feb under the banner Brahmotsav</li><li>Huge playground and gymnasium facilities for students</li><li>Central amphitheatre</li></ol>', '1750941924_702bf01d313769f03715.jpg', '2025-06-26 12:45:24', '2025-06-26 12:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `womens_cell`
--

CREATE TABLE `womens_cell` (
  `id` int(11) NOT NULL,
  `section_type` enum('hero','member','pdf') NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `womens_cell`
--

INSERT INTO `womens_cell` (`id`, `section_type`, `title`, `subtitle`, `name`, `designation`, `contact`, `image`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'hero', 'Welcome to Brahma Valley B Ed College', 'apply now', NULL, NULL, NULL, '1751021384_793c884f101f25be0d1d.webp', NULL, '2025-06-27 10:49:44', '2025-06-27 10:49:53'),
(2, 'member', NULL, NULL, 'Dr. Anita Bhaskar Thorat', 'Principal', NULL, '1751021567_974f97f727d46601d7c5.jpg', NULL, '2025-06-27 10:52:47', '2025-06-28 07:36:36'),
(4, 'member', NULL, NULL, 'Dr. Rabab Akil Bhagat', 'IQAC Coordinator', NULL, '1751021665_0a3c3d20a64b6e8ab272.webp', NULL, '2025-06-27 10:54:25', '2025-06-28 07:36:59'),
(6, 'pdf', NULL, NULL, NULL, NULL, NULL, NULL, '1751021877_4382852aa1a566c16d0d.pdf', '2025-06-27 10:57:05', '2025-06-27 10:57:57'),
(7, 'member', NULL, NULL, 'Prof. Kavita Jayprakash Kadam', 'Woman Teacher', NULL, '1751023244_2cd9b39feb5784285558.webp', NULL, '2025-06-27 11:20:44', '2025-06-28 07:37:16'),
(8, 'member', NULL, NULL, 'Dr. Vidyadevi Bhila Bagul', 'Teacher Representative', NULL, '1751023252_7fbf8ec9e01e75c001f9.jpg', NULL, '2025-06-27 11:20:52', '2025-06-28 07:37:32'),
(9, 'member', NULL, NULL, 'Dr. Vidyadevi Bhila Bagul', 'Teacher Representative', NULL, '1751023276_f7e89cab4e92128bde21.webp', NULL, '2025-06-27 11:21:16', '2025-06-28 07:37:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_content`
--
ALTER TABLE `about_us_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_info`
--
ALTER TABLE `admission_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anti_ragging_cell`
--
ALTER TABLE `anti_ragging_cell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_practices`
--
ALTER TABLE `best_practices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_director_desk`
--
ALTER TABLE `campus_director_desk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `code_of_conduct`
--
ALTER TABLE `code_of_conduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_page`
--
ALTER TABLE `contact_us_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divyang_cell`
--
ALTER TABLE `divyang_cell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equal_opportunity`
--
ALTER TABLE `equal_opportunity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_testimonial`
--
ALTER TABLE `faq_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_secretary_desk`
--
ALTER TABLE `general_secretary_desk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grievance_cell_content`
--
ALTER TABLE `grievance_cell_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grievance_redressal_cell`
--
ALTER TABLE `grievance_redressal_cell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_sections`
--
ALTER TABLE `hero_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infrastructure`
--
ALTER TABLE `infrastructure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infrastructure_page`
--
ALTER TABLE `infrastructure_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iqac_page`
--
ALTER TABLE `iqac_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_nep_2020`
--
ALTER TABLE `library_nep_2020`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `naac_documents`
--
ALTER TABLE `naac_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placement_cell_content`
--
ALTER TABLE `placement_cell_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `president_desk`
--
ALTER TABLE `president_desk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `principal_desk`
--
ALTER TABLE `principal_desk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `right_to_information`
--
ALTER TABLE `right_to_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_council`
--
ALTER TABLE `student_council`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_development_committee`
--
ALTER TABLE `student_development_committee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaching_faculty_page`
--
ALTER TABLE `teaching_faculty_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `vision_mission_page`
--
ALTER TABLE `vision_mission_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_join_bvce`
--
ALTER TABLE `why_join_bvce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `womens_cell`
--
ALTER TABLE `womens_cell`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `about_us_content`
--
ALTER TABLE `about_us_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admission_info`
--
ALTER TABLE `admission_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `anti_ragging_cell`
--
ALTER TABLE `anti_ragging_cell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `best_practices`
--
ALTER TABLE `best_practices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `campus_director_desk`
--
ALTER TABLE `campus_director_desk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `code_of_conduct`
--
ALTER TABLE `code_of_conduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us_page`
--
ALTER TABLE `contact_us_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `divyang_cell`
--
ALTER TABLE `divyang_cell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `equal_opportunity`
--
ALTER TABLE `equal_opportunity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faq_testimonial`
--
ALTER TABLE `faq_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `general_secretary_desk`
--
ALTER TABLE `general_secretary_desk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `grievance_cell_content`
--
ALTER TABLE `grievance_cell_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `grievance_redressal_cell`
--
ALTER TABLE `grievance_redressal_cell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hero_sections`
--
ALTER TABLE `hero_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `infrastructure`
--
ALTER TABLE `infrastructure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `infrastructure_page`
--
ALTER TABLE `infrastructure_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `iqac_page`
--
ALTER TABLE `iqac_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `library_nep_2020`
--
ALTER TABLE `library_nep_2020`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `naac_documents`
--
ALTER TABLE `naac_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `placement_cell_content`
--
ALTER TABLE `placement_cell_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `president_desk`
--
ALTER TABLE `president_desk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `principal_desk`
--
ALTER TABLE `principal_desk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `right_to_information`
--
ALTER TABLE `right_to_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_council`
--
ALTER TABLE `student_council`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_development_committee`
--
ALTER TABLE `student_development_committee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teaching_faculty_page`
--
ALTER TABLE `teaching_faculty_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vision_mission_page`
--
ALTER TABLE `vision_mission_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `why_join_bvce`
--
ALTER TABLE `why_join_bvce`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `womens_cell`
--
ALTER TABLE `womens_cell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
