-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2025 at 02:29 PM
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
