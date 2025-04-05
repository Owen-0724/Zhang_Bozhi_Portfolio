-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 09, 2024 at 04:56 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

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
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `topic` varchar(500) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `img` varchar(200) NOT NULL,
  `video` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `img`, `video`) VALUES
(2, 'img_zima_cover.jpg, img_zima_video.jpg, img_zima_1.jpg, img_zima_2.jpg, img_zima_3.jpg, img_zima_4.jpg', 'video_zima.mp4'),
(3, 'img_t_cover.jpg, img_t_video.jpg, img_t_1.jpg, img_t_2.jpg, img_t_3.jpg', 'video_t.mp4'),
(1, 'demo_reel.jpg', 'demo_reel.mp4'),
(4, 'img_7_cover.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_name` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `team_member` varchar(500) NOT NULL,
  `p1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cover_img` varchar(500) NOT NULL,
  `file_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `date`, `team_member`, `p1`, `p2`, `p3`, `cover_img`, `file_id`) VALUES
(2, 'Zima Rebrand', '2024.11', 'Owen', 'To restart Zima, we first sum up the reason why Zima is no longer popular in the last 90s. One of the problems is that Zima needs help with its target customer, it wants to be everything but ends up with nothing. So we decided to focus on the younger age group and provide clean and fresh beverages for them to enjoy.', 'A new product was added to the Zima family – Zima Sliver. \r\nZima Sliver is an alcoholic beverage with higher alcohol by volume and richer malt flavour. It is for customers who want an aggressive experience.', '', 'img_zima_cover.jpg', 2),
(3, 'Trident', '2024.10', 'Owen', 'This is a promotion site built for the earbud brand Trident. Trident aims to target people who enjoy music while doing workouts. They focus on the youth community and want to promote their earbuds in multiple ways.', 'A website with scrolling images, ar-object and X-rays of the earbuds has been built.', '', 'img_t_cover.jpg', 3),
(4, 'Seven', '', '', '', '', '', 'img_7_cover.jpg', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
