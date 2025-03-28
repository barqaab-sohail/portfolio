-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2025 at 11:13 AM
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
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1743156590),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1743156590;', 1743156590),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1743156315),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1743156315;', 1743156315);

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
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(17, 'test4', 'sohail.afzal@barqaab.com', 'test', 'test', '2025-02-25 07:28:28', '2025-02-25 07:28:28'),
(18, 'te', 'sohail.afzal@barqaab.com', 'te', 'te', '2025-02-25 08:19:29', '2025-02-25 08:19:29'),
(19, 'Muhammad Saleem', 'sohail.afzal@barqaab.com', 'test', 'What is Lorem Ipsum?\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but', '2025-02-25 08:21:46', '2025-02-25 08:21:46'),
(20, 'test4', 'sohail.afzal@barqaab.com', 'test', 'What is Lorem Ipsum?\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2025-02-25 08:22:26', '2025-02-25 08:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_id` bigint(20) UNSIGNED NOT NULL,
  `degree_name` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `placement` smallint(6) DEFAULT NULL,
  `institution` varchar(255) NOT NULL,
  `education_intro` mediumtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `portfolio_id`, `degree_name`, `duration`, `placement`, `institution`, `education_intro`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 'BS Information Technology', '2016 - 2018', 1, 'Virtual University of Pakistan', '<p>The <strong>BS Information Technology (BSIT)</strong> program is a <strong>16-year education degree</strong> designed to provide students with a <strong>comprehensive foundation</strong> in <strong>computer science, software development, networking, database management, and cybersecurity</strong>. It emphasizes a <strong>balanced approach</strong> to <strong>theoretical knowledge and practical skills</strong>, preparing graduates for diverse careers in <strong>IT management, software engineering, web development, and system administration</strong>.&nbsp;</p><p><strong>Core subjects</strong> include:&nbsp;</p><ul><li>Programming</li><li>Data Structures</li><li>Database Systems</li><li>Web Development</li><li>Cloud Computing</li><li>Cybersecurity</li><li>IT Project Management</li></ul><p><br></p>', 1, '2025-02-24 01:59:12', '2025-02-24 02:02:14'),
(4, 2, 'B.Sc Computer Science', '2014-2016', 2, 'Virtual University of Pakistan', '<p>A <strong>Bachelor of Science (B.Sc.) in Computer Science</strong> is a 14 years degree that provides students with a strong foundation in computing, programming, and problem-solving. The curriculum typically includes subjects such as data structures, algorithms, database management, operating systems, artificial intelligence, cybersecurity, and software development. Students also gain practical experience through coding projects, internships, and research opportunities. The degree equips graduates with the skills needed for careers in software engineering, web development, data science, IT consulting, and more. With the growing demand for technology professionals, a B.Sc. in Computer Science opens doors to diverse job opportunities in industries such as finance, healthcare, education, and entertainment. Many graduates also choose to pursue higher studies, such as an M.Sc. or certifications, to specialize further in their field.&nbsp;</p>', 1, '2025-02-24 02:03:04', '2025-02-24 02:03:04');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_id` bigint(20) UNSIGNED NOT NULL,
  `firm` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `placement` smallint(6) DEFAULT NULL,
  `responsibility` mediumtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `portfolio_id`, `firm`, `position`, `duration`, `placement`, `responsibility`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 'BARQAAB Consulting Services', 'IT Coordinator', '2014 - todate', 1, '<p>Responsible for managing and maintaining an organization\'s IT systems, ensuring smooth and efficient operations. Oversee network security, troubleshoot technical issues, and provide support to employees regarding hardware, software, and network-related concerns. Additionally, coordinate with vendors for system upgrades, software installations, and procurement of IT equipment. I also play a key role in implementing cybersecurity measures, managing data backups, and ensuring compliance with IT policies. Assist in training staff on new technologies and best practices, helping to improve overall productivity. Effective communication, problem-solving skills, and a proactive approach are essential for successfully handling the dynamic challenges of this role.</p>', 1, '2025-02-24 02:07:03', '2025-02-24 02:07:03'),
(4, 2, 'Pakistan Telecommunication Company Limited', 'HR & Admin Executive', '1995 - 2014', 2, '<p>An HR and Admin Executive is responsible for managing human resources and administrative functions to ensure the smooth operation of an organization. Their duties include recruiting, onboarding, and training employees, as well as maintaining employee records and handling payroll and benefits administration. They oversee workplace policies, ensure compliance with labor laws, and address employee concerns to foster a positive work environment. Additionally, they manage office administration tasks such as coordinating meetings, handling correspondence, maintaining office supplies, and ensuring a well-organized workplace. They also play a key role in developing and implementing HR policies, performance management, and employee engagement initiatives. Strong organizational, communication, and problem-solving skills are essential for success in this role.</p>', 1, '2025-02-24 02:08:20', '2025-02-24 02:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `experts`
--

CREATE TABLE `experts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `placement` smallint(6) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experts`
--

INSERT INTO `experts` (`id`, `portfolio_id`, `name`, `placement`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 'Web Application Developer', 2, 1, '2025-02-24 00:21:25', '2025-02-24 00:21:25'),
(4, 2, 'Android Application Developer', 1, 0, '2025-02-24 00:21:37', '2025-02-24 00:22:16');

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
-- Table structure for table `headings`
--

CREATE TABLE `headings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `intro` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_18_041120_create_personal_access_tokens_table', 1),
(82, '2025_02_18_100326_create_portfolios_table', 2),
(83, '2025_02_18_100339_create_skills_table', 2),
(84, '2025_02_18_100351_create_educations_table', 2),
(85, '2025_02_18_100408_create_services_table', 2),
(86, '2025_02_18_100416_create_experiences_table', 2),
(87, '2025_02_18_100429_create_testimonials_table', 2),
(88, '2025_02_18_100446_create_project_categories_table', 2),
(91, '2025_02_18_101612_create_contact_us_table', 2),
(92, '2025_02_18_101627_create_headings_table', 2),
(94, '2025_02_19_041823_create_experts_table', 2),
(95, '2025_02_23_133646_create_trainings_table', 2),
(99, '2025_02_18_100500_create_projects_table', 3),
(102, '2025_02_18_100501_create_project_details_table', 4),
(103, '2025_02_18_111014_create_project_images_table', 4),
(104, '2025_03_28_034740_add_picture_to_portfolios_table', 5);

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `introduction` mediumtext NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `date_of_birth`, `phone`, `city`, `email`, `introduction`, `picture`, `created_at`, `updated_at`) VALUES
(2, 'Sohail Afzal', '1976-06-06', '00923454145910', 'Lahore, Pakistan', 'sohail.afzal@barqaab.com', '<p>More than 10 years of experience in design and development of Web Applications. Well versed experience in design of database, backend and frontend.&nbsp;</p>', 'picture/01JQDEQZCW45E8F86BXKCKZB1Y.jpg', '2025-02-24 00:09:12', '2025-03-27 23:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_id` bigint(20) UNSIGNED NOT NULL,
  `project_category_id` bigint(20) UNSIGNED NOT NULL,
  `short_name` varchar(255) NOT NULL,
  `placement` smallint(6) DEFAULT NULL,
  `project_intro` mediumtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `portfolio_id`, `project_category_id`, `short_name`, `placement`, `project_intro`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Human Resource Management System', 1, '<p>HRMS is a comprehensive web application which includes Employee Complete Information like, Employee Personal Detail, Transfer &amp;Posting Detail, Promotion Detail, Educational Detail, Experience Detail and Employee Personal File.&nbsp; Important alters automatic email to HR manager for information like CNIC Expiry, Contract Expiry and Management related HR Reporting&nbsp;</p>', 1, '2025-02-25 23:13:14', '2025-02-25 23:13:14'),
(2, 2, 2, 'Asset Management System ', 2, '<p>&nbsp;Asset Management System is a web application, which main purpose is to keep track of the equipment and inventory vital to the day-to-day operation of the company.&nbsp;</p>', 1, '2025-02-25 23:13:56', '2025-02-25 23:13:56'),
(3, 2, 1, 'Project Management System ', 3, '<p>&nbsp;The purpose of Project Management System (PMS) is to foresee the risks and challenges that could derail the completion of a project. It applies proven methodologies and tools to plan, control, and monitor people, processes, and other components needed to make project a success.&nbsp;</p>', 1, '2025-02-25 23:14:22', '2025-02-25 23:14:22'),
(4, 2, 2, 'Management Information System ', 4, '<p>&nbsp;A Management Information System (MIS) is a structured system that collects, processes, and analyzes a company\'s data to support agile, informed, and strategic decision-making. It enhances business efficiency by leveraging technology to solve problems and optimize operations.&nbsp;</p>', 1, '2025-02-25 23:15:33', '2025-02-25 23:15:33'),
(5, 2, 1, 'Leave Management System ', 5, '<p>A Leave Management System (LMS) is a web-based solution that automates the process of managing employee leave requests, approvals, and tracking. It ensures a seamless workflow, reduces administrative workload, and enhances transparency in leave policies.&nbsp; The system allows employees to submit leave requests online, specifying the type of leave, duration, and reason. Managers receive automated notifications for approval or rejection, ensuring a smooth and transparent process.&nbsp;</p>', 1, '2025-02-25 23:15:57', '2025-02-25 23:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `name`) VALUES
(1, 'Web Application'),
(2, 'Android Application');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `client` varchar(255) NOT NULL,
  `project_date` date NOT NULL,
  `project_url` varchar(255) DEFAULT NULL,
  `heading` varchar(255) NOT NULL,
  `introduction` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`id`, `project_id`, `client`, `project_date`, `project_url`, `heading`, `introduction`, `created_at`, `updated_at`) VALUES
(1, 2, 'BARQAAB Consult Services', '2019-02-01', NULL, 'Asset Management System (AMS)', '<p>The Asset Management System is a comprehensive web-based application designed to efficiently track, manage, and optimize equipment and inventory critical to the company\'s operations. It enables seamless asset identification through QR code generation and scanning, allowing quick and accurate tracking. Users can assign assets to employees, departments, or locations, ensuring clear accountability. Additionally, the system provides monitoring of asset availability, status, and location, enhancing visibility and control. By streamlining asset management processes, it improves operational efficiency, reduces losses, and maximizes resource utilization.&nbsp;</p>', '2025-02-25 23:49:55', '2025-02-25 23:49:55'),
(2, 3, 'BARQAAB Consulting Services ', '2019-06-06', NULL, 'Project Management System (PMS)', '<p>The Project Management System (PMS) is designed to proactively identify and mitigate risks and challenges that may impact project completion. It provides real-time monitoring of task progress, project timelines, and resource utilization. The system enables tracking of budget and expense status, and actual work completed against the total allocated budget. Additionally, it helps identify bottlenecks that may cause project delays, ensuring better decision-making and improved project efficiency&nbsp;</p>', '2025-02-25 23:50:46', '2025-02-25 23:50:46'),
(3, 4, 'BARQAAB Consulting Services ', '2020-11-01', NULL, 'Web and Android Based Management Information System (MIS)', '<p>A Management Information System (MIS) is a structured system that collects, processes, and analyzes a company\'s data to support agile, informed, and strategic decision-making. It enhances business efficiency by leveraging technology to solve problems and optimize operations.&nbsp;</p>', '2025-02-25 23:52:47', '2025-02-25 23:52:47'),
(4, 5, 'BARQAAB Consulting Services', '2021-05-02', NULL, 'Based Leave Management System (LMS)', '<p>A Leave Management System (LMS) is a web-based solution that automates the process of managing employee leave requests, approvals, and tracking. It ensures a seamless workflow, reduces administrative workload, and enhances transparency in leave policies.&nbsp; The system allows employees to submit leave requests online, specifying the type of leave, duration, and reason. Managers receive automated notifications for approval or rejection, ensuring a smooth and transparent process.&nbsp;</p>', '2025-02-25 23:53:55', '2025-02-25 23:53:55'),
(5, 1, 'BARQAAB Consulting Services ', '2018-02-02', NULL, 'Human Resource Management System (HRMS)', '<p>HRMS is a comprehensive web application that manages complete employee information, including personal details, transfer and posting records, promotions, educational background, work experience, and personal files. Additionally, it features automated email alerts to notify the HR manager about important updates such as CNIC expiry, contract expiry, and HR-related management reports&nbsp;</p>', '2025-02-26 00:35:42', '2025-02-26 00:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_detail_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id`, `project_detail_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 5, 'project/01JN0BTWM0XWB18H3SMQM9D612.jpg', '2025-02-26 00:31:52', '2025-02-26 00:36:01'),
(2, 3, 'project/01JN0BVDKAV0R420A1PZZMJVE1.JPG', '2025-02-26 00:32:09', '2025-02-26 00:32:09'),
(3, 5, 'project/01JQE3KNE43CFDSH38MDNXW5ZW.jpg', '2025-03-28 05:08:52', '2025-03-28 05:08:52');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `placement` smallint(6) DEFAULT NULL,
  `intro` mediumtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('Bb5z4t2Mzdkoi5SWzvNWXGtj8J1ANdfmThW29VfX', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRWw1SUVVMFJicTI4YkMyQmg3NmVYVzlVMkRsYW0xSWVEOFRCRUdMdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiR3RWxJVklUZUlVRmhhSndVZzYwVkIuMEhqdkJiUS9KWmNEcE5ZOXdJaEw5WlpLM2NYQ1VKeSI7czo4OiJmaWxhbWVudCI7YTowOnt9fQ==', 1743135595),
('bUoe90yJdd1RuTWLsLdlEwY8b7aKkhMCtSRQruVY', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYzdTbDRNejFzMnZJeVdWZGF5SzB5Q1hycG9NaEE1YkxMYWk1M1BmYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3QvcG9ydGZvbGlvL3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1743156701),
('HxkSIUFXxWP29Ed1i1m8yl122PfxB74tbQrfXp2s', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoidTNTNFlZVFV6bzhsRXdIRUUzcVc2ZU93aHhCd1ZqZFZ0Nll4V21HNSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1743151695),
('icYdZf4J0YV1MQDhJeMImWzh8bpkv82h4oPuw653', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiSTVVbU84ank5VHl0V3FDa1dDUEtzRUhRRGxqcmlLcldscmFhazlwMSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vcHJvamVjdC1pbWFnZXMvMy9lZGl0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJHdFbElWSVRlSVVGaGFKd1VnNjBWQi4wSGp2QmJRL0paY0RwTlk5d0loTDlaWkszY1hDVUp5IjtzOjg6ImZpbGFtZW50IjthOjA6e319', 1743156542),
('QLmTBSucGHWVcPVcQblaMw5tM6RUi5BOtUqBi10w', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZFJUNW1Ha2VXOEhJejFFQzloa05kWjk2U2pScWFPTFkzMWVXNzcxMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3QvcG9ydGZvbGlvL3B1YmxpYyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1743138561);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `portfolio_id` bigint(20) UNSIGNED NOT NULL,
  `level` smallint(6) NOT NULL,
  `placement` smallint(6) DEFAULT NULL,
  `remarks` mediumtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `portfolio_id`, `level`, `placement`, `remarks`, `status`, `created_at`, `updated_at`) VALUES
(7, 'PHP', 2, 85, 1, '<p>I am expert in PHP</p>', 1, '2025-02-24 00:12:46', '2025-02-24 00:12:46'),
(8, 'HTML', 2, 100, 2, '<p>I am expert in HTML</p>', 1, '2025-02-24 00:13:18', '2025-02-24 00:16:36'),
(9, 'JavaScript', 2, 80, 3, '<p>I am expert in JavaScript</p>', 1, '2025-02-24 00:13:51', '2025-02-24 00:13:51'),
(10, 'CSS', 2, 80, 4, '<p>I am expert in CSS</p>', 1, '2025-02-24 00:14:21', '2025-02-24 00:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_id` bigint(20) UNSIGNED NOT NULL,
  `comments` mediumtext NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `placement` smallint(6) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `introduction` mediumtext NOT NULL,
  `placement` smallint(6) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `portfolio_id`, `name`, `duration`, `institution`, `introduction`, `placement`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Cloud Native Developer', '2020 - 2021', 'Presidential Institute of Artificial Intelligence & Computing', '<p>The Cloud Native Developer course at the Presidential Institute of Artificial Intelligence&nbsp; Computing is designed to equip learners with the skills required to develop, deploy, and manage modern cloud-based applications. This comprehensive program covers key concepts such as containerization, microservices architecture, Kubernetes, DevOps practices, serverless computing, and cloud security. Participants will gain hands-on experience with leading cloud platforms and tools, enabling them to build scalable, resilient, and efficient applications. Whether you\\\'re an aspiring developer or an IT professional looking to enhance your expertise, this course provides the knowledge and practical experience needed to excel in the fast-evolving world of cloud-native development.&nbsp;</p>', 1, 1, '2025-02-24 02:12:35', '2025-02-24 02:12:35'),
(2, 2, 'Network Defence & Cyber Operations', '2019 - 2020', 'National Cyber Training Program', '<p>The Network Defence Cyber Operations Training under the National Cyber Training Program is designed to equip individuals with advanced skills in cybersecurity, threat detection, and defense strategies. This comprehensive course covers network security, ethical hacking, penetration testing, incident response, digital forensics, and cyber threat intelligence. Participants will gain hands-on experience using industry-standard tools and techniques to protect critical systems from cyber threats. The program is ideal for IT professionals, security analysts, and aspiring cybersecurity specialists who aim to strengthen their expertise in proactive defense, risk mitigation, and cyber operations. Join this training to become a skilled cybersecurity professional and safeguard digital infrastructures in an evolving threat landscape.&nbsp;</p>', 2, 1, '2025-02-24 02:14:55', '2025-02-24 02:14:55');

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
(1, 'Sohail Afzal', 'sohail.afzal@barqaab.com', NULL, '$2y$12$wElIVITeIUFhaJwUg60VB.0HjvBbQ/JZcDpNY9wIhL9ZZK3cXCUJy', 'rK7IpXsMGMEob5NCZjjPTobGbUPfVEvhLfYsbwFjR2USFBA1zQSGQZtj6b6H', '2025-02-18 00:07:40', '2025-02-18 00:07:40');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `educations_portfolio_id_foreign` (`portfolio_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experiences_portfolio_id_foreign` (`portfolio_id`);

--
-- Indexes for table `experts`
--
ALTER TABLE `experts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experts_portfolio_id_foreign` (`portfolio_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `headings`
--
ALTER TABLE `headings`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_portfolio_id_foreign` (`portfolio_id`),
  ADD KEY `projects_project_category_id_foreign` (`project_category_id`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_details_project_id_foreign` (`project_id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_images_project_detail_id_foreign` (`project_detail_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_portfolio_id_foreign` (`portfolio_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skills_portfolio_id_foreign` (`portfolio_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonials_portfolio_id_foreign` (`portfolio_id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trainings_portfolio_id_foreign` (`portfolio_id`);

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
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experts`
--
ALTER TABLE `experts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `headings`
--
ALTER TABLE `headings`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `educations`
--
ALTER TABLE `educations`
  ADD CONSTRAINT `educations_portfolio_id_foreign` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolios` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_portfolio_id_foreign` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolios` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `experts`
--
ALTER TABLE `experts`
  ADD CONSTRAINT `experts_portfolio_id_foreign` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolios` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_portfolio_id_foreign` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolios` (`id`),
  ADD CONSTRAINT `projects_project_category_id_foreign` FOREIGN KEY (`project_category_id`) REFERENCES `project_categories` (`id`);

--
-- Constraints for table `project_details`
--
ALTER TABLE `project_details`
  ADD CONSTRAINT `project_details_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Constraints for table `project_images`
--
ALTER TABLE `project_images`
  ADD CONSTRAINT `project_images_project_detail_id_foreign` FOREIGN KEY (`project_detail_id`) REFERENCES `project_details` (`id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_portfolio_id_foreign` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolios` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_portfolio_id_foreign` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolios` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_portfolio_id_foreign` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolios` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trainings`
--
ALTER TABLE `trainings`
  ADD CONSTRAINT `trainings_portfolio_id_foreign` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolios` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
