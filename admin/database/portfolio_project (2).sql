-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 23, 2024 at 02:57 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `profession` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `freelance` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `profession`, `birthday`, `website`, `phone`, `city`, `age`, `degree`, `email`, `freelance`, `description`, `img`, `status`, `created_at`, `updated_at`) VALUES
(3, 'nytuwihadi@mailinator.com', 'zycahewaw@mailinator.com', 'mupopaciw@mailinator.com', '+1 (442) 833-3393', 'fejunyxo@mailinator.com', 'niziwa@mailinator.com', 'byciqyt@mailinator.com', 'figeg@mailinator.com', 'unavailable', 'Dolorem repellendus', 'third-1712577752.jpg', 1, '2024-04-14 14:52:34', '2024-04-14 14:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `location` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE IF NOT EXISTS `details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `category`, `client`, `date`, `url`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mason Sykes', 'Clare Short', 'Caldwell Stuart', 'Lionel Colon', 'Arden Tucker', 1, '2024-04-17 10:40:06', '2024-04-17 10:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `id` int NOT NULL AUTO_INCREMENT,
  `major` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `major`, `date`, `college`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Courtney Lang', 'Erasmus Woods', 'Raphael Patton', 'Sed optio laborum ', 1, '2024-04-10 12:52:37', '2024-04-10 12:52:37'),
(2, 'George Spears', 'Claudia Forbes', 'Ariana Farley', 'Et eligendi delectus', 1, '2024-04-12 14:22:51', '2024-04-12 14:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

DROP TABLE IF EXISTS `experience`;
CREATE TABLE IF NOT EXISTS `experience` (
  `id` int NOT NULL AUTO_INCREMENT,
  `profession` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `profession`, `date`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Castor Sanders', 'Hollee Salazar', 'Odessa White', 1, '2024-04-10 13:15:26', '2024-04-10 13:15:26'),
(2, 'Iliana Justice', '2023', 'Rosalyn Summers', 1, '2024-04-12 14:32:22', '2024-04-12 14:32:22'),
(3, 'Iliana Justice', '2023', 'Rosalyn Summers', 1, '2024-04-12 14:44:30', '2024-04-12 14:44:30');

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

DROP TABLE IF EXISTS `facts`;
CREATE TABLE IF NOT EXISTS `facts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `number` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `creaed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `number`, `title`, `status`, `creaed_at`, `updated_at`) VALUES
(1, '222', 'Hunter Fletcher', 1, '2024-04-12 10:41:23', '2024-04-12 10:41:23'),
(2, '304', 'Neil Johnson', 1, '2024-04-12 10:41:30', '2024-04-12 10:41:30'),
(3, '941', 'Myles Delgado', 1, '2024-04-12 10:41:33', '2024-04-12 10:41:33'),
(4, '979', 'Faith Johnson', 1, '2024-04-12 10:41:35', '2024-04-12 10:41:35'),
(5, '539', 'Winter Luna', 1, '2024-04-12 10:41:38', '2024-04-12 10:41:38'),
(6, '566', 'Riley Kim', 1, '2024-04-12 10:41:41', '2024-04-12 10:41:41'),
(7, '566', 'Riley Kim', 1, '2024-04-12 10:51:03', '2024-04-12 10:51:03');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `title`, `img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'first', 'first-1712576505.jpg', 1, '2024-04-08 11:41:45', '2024-04-08 11:41:45'),
(2, 'second', 'second-1712577737.jpg', 1, '2024-04-08 12:02:17', '2024-04-08 12:02:17'),
(3, 'third', 'third-1712577752.jpg', 1, '2024-04-08 12:02:32', '2024-04-08 12:02:32'),
(4, 'forth', 'forth-1712577765.jpg', 1, '2024-04-08 12:02:45', '2024-04-08 12:02:45');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

DROP TABLE IF EXISTS `forms`;
CREATE TABLE IF NOT EXISTS `forms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

DROP TABLE IF EXISTS `homes`;
CREATE TABLE IF NOT EXISTS `homes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `name`, `title`, `img`, `status`, `created_at`, `updated_at`) VALUES
(2, 'hyyy', 'everyone', 'second-1712577737.jpg', 1, '2024-04-09 06:14:48', '2024-04-09 06:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `appi` varchar(255) NOT NULL,
  `appii` varchar(255) NOT NULL,
  `appiii` varchar(255) NOT NULL,
  `webi` varchar(255) NOT NULL,
  `webii` varchar(255) NOT NULL,
  `webiii` varchar(255) NOT NULL,
  `cardi` varchar(255) NOT NULL,
  `cardii` varchar(255) NOT NULL,
  `cardiii` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Brooke Miller', 'Inga Rivers', 'Colt Sellers', 1, '2024-04-12 15:25:36', '2024-04-12 15:25:36'),
(2, 'Brooke Miller', 'Inga Rivers', 'Colt Sellers', 1, '2024-04-12 15:27:24', '2024-04-12 15:27:24'),
(3, 'Alea Kirby', 'Haviva Hunter', 'Uma Campos', 1, '2024-04-12 15:34:12', '2024-04-12 15:34:12'),
(4, 'Kyra Knapp', 'Gwendolyn Diaz', 'Gray Neal', 1, '2024-04-12 15:34:19', '2024-04-12 15:34:19'),
(5, 'Ariana Wynn', 'Kato Hammond', 'Ulla Hendricks', 1, '2024-04-12 15:34:25', '2024-04-12 15:34:25'),
(6, 'Cassady Thompson', 'Patricia Clemons', 'Abraham Solis', 1, '2024-04-12 15:34:30', '2024-04-12 15:34:30'),
(7, 'Kirsten Conway', 'Lunea Tucker', 'Prescott Wood', 1, '2024-04-12 15:34:38', '2024-04-12 15:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `site_configs`
--

DROP TABLE IF EXISTS `site_configs`;
CREATE TABLE IF NOT EXISTS `site_configs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `site_key` varchar(255) NOT NULL,
  `site_value` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `site_configs`
--

INSERT INTO `site_configs` (`id`, `site_key`, `site_value`, `created_at`, `updated_at`) VALUES
(3, 'location', 'pokhara', '2024-04-18 10:51:51', '2024-04-18 10:51:51'),
(4, 'phone', '981000000', '2024-04-18 10:52:04', '2024-04-18 10:52:04'),
(6, 'map', 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11279.818927170747!2d84.09262774388434!3d28.11967718711623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1713457813333!5m2!1sen!2snp\" width=\"600\" height=\"450\" style=\"border:0;\" allowfulls', '2024-04-18 16:32:35', '2024-04-18 16:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int NOT NULL AUTO_INCREMENT,
  `language` varchar(255) NOT NULL,
  `percent` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `language`, `percent`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Orson Cash', '7', 1, '2024-04-12 10:21:58', '2024-04-12 10:21:58'),
(2, 'Isabelle Bush', '84', 1, '2024-04-12 10:22:03', '2024-04-12 10:22:03'),
(3, 'Candace Flowers', '66', 1, '2024-04-12 10:22:06', '2024-04-12 10:22:06'),
(4, 'Luke Acosta', '92', 1, '2024-04-12 10:22:09', '2024-04-12 10:22:09'),
(5, 'Nicholas Garner', '50', 1, '2024-04-12 10:22:11', '2024-04-12 10:22:11'),
(6, 'Drew Poole', '66', 1, '2024-04-12 10:22:14', '2024-04-12 10:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `sumary`
--

DROP TABLE IF EXISTS `sumary`;
CREATE TABLE IF NOT EXISTS `sumary` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sumary`
--

INSERT INTO `sumary` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Macey Wade', 'Repellendus Est eum', 1, '2024-04-10 12:31:11', '2024-04-10 12:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` text NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `img`, `name`, `position`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'third-1712577752.jpg', 'Burton Valencia', 'Irene Dodson', 'Ad rerum nemo conseq', 1, '2024-04-12 11:18:44', '2024-04-12 11:18:44'),
(2, 'third-1712577752.jpg', 'Burton Valencia', 'Irene Dodson', 'Ad rerum nemo conseq', 1, '2024-04-12 11:37:06', '2024-04-12 11:37:06'),
(3, 'third-1712577752.jpg', 'Burton Valencia', 'Irene Dodson', 'Ad rerum nemo conseq', 1, '2024-04-12 11:37:17', '2024-04-12 11:37:17'),
(4, 'first-1712576505.jpg', 'Macy Wilkinson', 'Elton Sampson', 'Dicta nemo ut perspi', 1, '2024-04-12 11:37:32', '2024-04-12 11:37:32'),
(5, 'third-1712577752.jpg', 'Burton Valencia', 'Irene Dodson', 'Ad rerum nemo conseq', 1, '2024-04-12 11:37:49', '2024-04-12 11:37:49'),
(6, 'third-1712577752.jpg', 'Burton Valencia', 'Irene Dodson', 'Ad rerum nemo conseq', 1, '2024-04-23 06:17:27', '2024-04-23 06:17:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(11, 'hello@mail.com', 'hello@mail.com', '$2y$10$8FfyVuYFD10Nu7g/3s3UeuRATwYWqsfjcxKRX5ppL8Yc9RI7dO51.', 1, '2024-04-21 14:27:23', '2024-04-21 14:27:23'),
(10, 'admin@gmail.com', 'admin@gmail.com', '$2y$10$p.01WT2abUanwQCUnBYgBeNQsGbEiN5TdlpVw0IIUm.eE63KHNCnS', 1, '2024-04-21 14:22:20', '2024-04-21 14:22:20'),
(8, 'hell@mail.com', 'hell@mail.com', '$2y$10$7K5U8aAPngU.wkG49p2NR.9oFfCG66BcT6X3wvewQsq1088.vVj82', 1, '2024-04-18 16:09:25', '2024-04-18 16:09:25'),
(7, 'abc@mail.com', 'abc@mail.com', '12345', 1, '2024-04-18 16:01:43', '2024-04-18 16:01:43'),
(9, 'xyz@mail.com', 'xyz@mail.com', 'abcdef', 1, '2024-04-21 14:19:43', '2024-04-21 14:19:43');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
