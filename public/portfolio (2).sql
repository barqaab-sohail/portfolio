-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2025 at 01:54 PM
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

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(17, 'test4', 'sohail.afzal@barqaab.com', 'test', 'test', '2025-02-25 07:28:28', '2025-02-25 07:28:28'),
(18, 'te', 'sohail.afzal@barqaab.com', 'te', 'te', '2025-02-25 08:19:29', '2025-02-25 08:19:29'),
(19, 'Muhammad Saleem', 'sohail.afzal@barqaab.com', 'test', 'What is Lorem Ipsum?\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but', '2025-02-25 08:21:46', '2025-02-25 08:21:46'),
(20, 'test4', 'sohail.afzal@barqaab.com', 'test', 'What is Lorem Ipsum?\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2025-02-25 08:22:26', '2025-02-25 08:22:26');

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `portfolio_id`, `degree_name`, `duration`, `placement`, `institution`, `education_intro`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 'BS Information Technology', '2016 - 2018', 1, 'Virtual University of Pakistan', '<p>The <strong>BS Information Technology (BSIT)</strong> program is a <strong>16-year education degree</strong> designed to provide students with a <strong>comprehensive foundation</strong> in <strong>computer science, software development, networking, database management, and cybersecurity</strong>. It emphasizes a <strong>balanced approach</strong> to <strong>theoretical knowledge and practical skills</strong>, preparing graduates for diverse careers in <strong>IT management, software engineering, web development, and system administration</strong>.&nbsp;</p><p><strong>Core subjects</strong> include:&nbsp;</p><ul><li>Programming</li><li>Data Structures</li><li>Database Systems</li><li>Web Development</li><li>Cloud Computing</li><li>Cybersecurity</li><li>IT Project Management</li></ul><p><br></p>', 1, '2025-02-24 01:59:12', '2025-02-24 02:02:14'),
(4, 2, 'B.Sc Computer Science', '2014-2016', 2, 'Virtual University of Pakistan', '<p>A <strong>Bachelor of Science (B.Sc.) in Computer Science</strong> is a 14 years degree that provides students with a strong foundation in computing, programming, and problem-solving. The curriculum typically includes subjects such as data structures, algorithms, database management, operating systems, artificial intelligence, cybersecurity, and software development. Students also gain practical experience through coding projects, internships, and research opportunities. The degree equips graduates with the skills needed for careers in software engineering, web development, data science, IT consulting, and more. With the growing demand for technology professionals, a B.Sc. in Computer Science opens doors to diverse job opportunities in industries such as finance, healthcare, education, and entertainment. Many graduates also choose to pursue higher studies, such as an M.Sc. or certifications, to specialize further in their field.&nbsp;</p>', 1, '2025-02-24 02:03:04', '2025-02-24 02:03:04');

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `portfolio_id`, `firm`, `position`, `duration`, `placement`, `responsibility`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 'BARQAAB Consulting Services', 'IT Coordinator', '2014 - todate', 1, '<p>Responsible for managing and maintaining an organization\'s IT systems, ensuring smooth and efficient operations. Oversee network security, troubleshoot technical issues, and provide support to employees regarding hardware, software, and network-related concerns. Additionally, coordinate with vendors for system upgrades, software installations, and procurement of IT equipment. I also play a key role in implementing cybersecurity measures, managing data backups, and ensuring compliance with IT policies. Assist in training staff on new technologies and best practices, helping to improve overall productivity. Effective communication, problem-solving skills, and a proactive approach are essential for successfully handling the dynamic challenges of this role.</p>', 1, '2025-02-24 02:07:03', '2025-02-24 02:07:03'),
(4, 2, 'Pakistan Telecommunication Company Limited', 'HR & Admin Executive', '1995 - 2014', 2, '<p>An HR and Admin Executive is responsible for managing human resources and administrative functions to ensure the smooth operation of an organization. Their duties include recruiting, onboarding, and training employees, as well as maintaining employee records and handling payroll and benefits administration. They oversee workplace policies, ensure compliance with labor laws, and address employee concerns to foster a positive work environment. Additionally, they manage office administration tasks such as coordinating meetings, handling correspondence, maintaining office supplies, and ensuring a well-organized workplace. They also play a key role in developing and implementing HR policies, performance management, and employee engagement initiatives. Strong organizational, communication, and problem-solving skills are essential for success in this role.</p>', 1, '2025-02-24 02:08:20', '2025-02-24 02:09:43');

--
-- Dumping data for table `experts`
--

INSERT INTO `experts` (`id`, `portfolio_id`, `name`, `placement`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 'Web Application Developer', 2, 1, '2025-02-24 00:21:25', '2025-02-24 00:21:25'),
(4, 2, 'Android Application Developer', 1, 0, '2025-02-24 00:21:37', '2025-02-24 00:22:16');

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `date_of_birth`, `phone`, `city`, `email`, `introduction`, `created_at`, `updated_at`) VALUES
(2, 'Sohail Afzal', '1976-06-06', '00923454145910', 'Lahore, Pakistan', 'sohail.afzal@barqaab.com', '<p>More than 10 years of experience in design and development of Web Applications. Well versed experience in design of database, backend and frontend.&nbsp;</p>', '2025-02-24 00:09:12', '2025-02-24 02:25:16');

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `portfolio_id`, `project_category_id`, `short_name`, `placement`, `project_intro`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Human Resource Management System', 1, '<p>HRMS is a comprehensive web application which includes Employee Complete Information like, Employee Personal Detail, Transfer &amp;Posting Detail, Promotion Detail, Educational Detail, Experience Detail and Employee Personal File.&nbsp; Important alters automatic email to HR manager for information like CNIC Expiry, Contract Expiry and Management related HR Reporting&nbsp;</p>', 1, '2025-02-25 23:13:14', '2025-02-25 23:13:14'),
(2, 2, 2, 'Asset Management System ', 2, '<p>&nbsp;Asset Management System is a web application, which main purpose is to keep track of the equipment and inventory vital to the day-to-day operation of the company.&nbsp;</p>', 1, '2025-02-25 23:13:56', '2025-02-25 23:13:56'),
(3, 2, 1, 'Project Management System ', 3, '<p>&nbsp;The purpose of Project Management System (PMS) is to foresee the risks and challenges that could derail the completion of a project. It applies proven methodologies and tools to plan, control, and monitor people, processes, and other components needed to make project a success.&nbsp;</p>', 1, '2025-02-25 23:14:22', '2025-02-25 23:14:22'),
(4, 2, 2, 'Management Information System ', 4, '<p>&nbsp;A Management Information System (MIS) is a structured system that collects, processes, and analyzes a company\'s data to support agile, informed, and strategic decision-making. It enhances business efficiency by leveraging technology to solve problems and optimize operations.&nbsp;</p>', 1, '2025-02-25 23:15:33', '2025-02-25 23:15:33'),
(5, 2, 1, 'Leave Management System ', 5, '<p>A Leave Management System (LMS) is a web-based solution that automates the process of managing employee leave requests, approvals, and tracking. It ensures a seamless workflow, reduces administrative workload, and enhances transparency in leave policies.&nbsp; The system allows employees to submit leave requests online, specifying the type of leave, duration, and reason. Managers receive automated notifications for approval or rejection, ensuring a smooth and transparent process.&nbsp;</p>', 1, '2025-02-25 23:15:57', '2025-02-25 23:15:57');

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `name`) VALUES
(1, 'Web Application'),
(2, 'Android Application');

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`id`, `project_id`, `client`, `project_date`, `project_url`, `heading`, `introduction`, `created_at`, `updated_at`) VALUES
(1, 2, 'BARQAAB Consult Services', '2019-02-01', NULL, 'Asset Management System (AMS)', '<p>The Asset Management System is a comprehensive web-based application designed to efficiently track, manage, and optimize equipment and inventory critical to the company\'s operations. It enables seamless asset identification through QR code generation and scanning, allowing quick and accurate tracking. Users can assign assets to employees, departments, or locations, ensuring clear accountability. Additionally, the system provides monitoring of asset availability, status, and location, enhancing visibility and control. By streamlining asset management processes, it improves operational efficiency, reduces losses, and maximizes resource utilization.&nbsp;</p>', '2025-02-25 23:49:55', '2025-02-25 23:49:55'),
(2, 3, 'BARQAAB Consulting Services ', '2019-06-06', NULL, 'Project Management System (PMS)', '<p>The Project Management System (PMS) is designed to proactively identify and mitigate risks and challenges that may impact project completion. It provides real-time monitoring of task progress, project timelines, and resource utilization. The system enables tracking of budget and expense status, and actual work completed against the total allocated budget. Additionally, it helps identify bottlenecks that may cause project delays, ensuring better decision-making and improved project efficiency&nbsp;</p>', '2025-02-25 23:50:46', '2025-02-25 23:50:46'),
(3, 4, 'BARQAAB Consulting Services ', '2020-11-01', NULL, 'Web and Android Based Management Information System (MIS)', '<p>A Management Information System (MIS) is a structured system that collects, processes, and analyzes a company\'s data to support agile, informed, and strategic decision-making. It enhances business efficiency by leveraging technology to solve problems and optimize operations.&nbsp;</p>', '2025-02-25 23:52:47', '2025-02-25 23:52:47'),
(4, 5, 'BARQAAB Consulting Services', '2021-05-02', NULL, 'Based Leave Management System (LMS)', '<p>A Leave Management System (LMS) is a web-based solution that automates the process of managing employee leave requests, approvals, and tracking. It ensures a seamless workflow, reduces administrative workload, and enhances transparency in leave policies.&nbsp; The system allows employees to submit leave requests online, specifying the type of leave, duration, and reason. Managers receive automated notifications for approval or rejection, ensuring a smooth and transparent process.&nbsp;</p>', '2025-02-25 23:53:55', '2025-02-25 23:53:55'),
(5, 1, 'BARQAAB Consulting Services ', '2018-02-02', NULL, 'Human Resource Management System (HRMS)', '<p>HRMS is a comprehensive web application that manages complete employee information, including personal details, transfer and posting records, promotions, educational background, work experience, and personal files. Additionally, it features automated email alerts to notify the HR manager about important updates such as CNIC expiry, contract expiry, and HR-related management reports&nbsp;</p>', '2025-02-26 00:35:42', '2025-02-26 00:35:42');

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id`, `project_detail_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 5, 'project/01JN0BTWM0XWB18H3SMQM9D612.jpg', '2025-02-26 00:31:52', '2025-02-26 00:36:01'),
(2, 3, 'project/01JN0BVDKAV0R420A1PZZMJVE1.JPG', '2025-02-26 00:32:09', '2025-02-26 00:32:09');

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `portfolio_id`, `level`, `placement`, `remarks`, `status`, `created_at`, `updated_at`) VALUES
(7, 'PHP', 2, 85, 1, '<p>I am expert in PHP</p>', 1, '2025-02-24 00:12:46', '2025-02-24 00:12:46'),
(8, 'HTML', 2, 100, 2, '<p>I am expert in HTML</p>', 1, '2025-02-24 00:13:18', '2025-02-24 00:16:36'),
(9, 'JavaScript', 2, 80, 3, '<p>I am expert in JavaScript</p>', 1, '2025-02-24 00:13:51', '2025-02-24 00:13:51'),
(10, 'CSS', 2, 80, 4, '<p>I am expert in CSS</p>', 1, '2025-02-24 00:14:21', '2025-02-24 00:14:21');

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `portfolio_id`, `name`, `duration`, `institution`, `introduction`, `placement`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Cloud Native Developer', '2020 - 2021', 'Presidential Institute of Artificial Intelligence & Computing', '<p>The Cloud Native Developer course at the Presidential Institute of Artificial Intelligence&nbsp; Computing is designed to equip learners with the skills required to develop, deploy, and manage modern cloud-based applications. This comprehensive program covers key concepts such as containerization, microservices architecture, Kubernetes, DevOps practices, serverless computing, and cloud security. Participants will gain hands-on experience with leading cloud platforms and tools, enabling them to build scalable, resilient, and efficient applications. Whether you\\\'re an aspiring developer or an IT professional looking to enhance your expertise, this course provides the knowledge and practical experience needed to excel in the fast-evolving world of cloud-native development.&nbsp;</p>', 1, 1, '2025-02-24 02:12:35', '2025-02-24 02:12:35'),
(2, 2, 'Network Defence & Cyber Operations', '2019 - 2020', 'National Cyber Training Program', '<p>The Network Defence Cyber Operations Training under the National Cyber Training Program is designed to equip individuals with advanced skills in cybersecurity, threat detection, and defense strategies. This comprehensive course covers network security, ethical hacking, penetration testing, incident response, digital forensics, and cyber threat intelligence. Participants will gain hands-on experience using industry-standard tools and techniques to protect critical systems from cyber threats. The program is ideal for IT professionals, security analysts, and aspiring cybersecurity specialists who aim to strengthen their expertise in proactive defense, risk mitigation, and cyber operations. Join this training to become a skilled cybersecurity professional and safeguard digital infrastructures in an evolving threat landscape.&nbsp;</p>', 2, 1, '2025-02-24 02:14:55', '2025-02-24 02:14:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
