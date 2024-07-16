-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2024 at 08:29 AM
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
-- Database: `php_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, ' Arsalan ', 'arslanamjad4444@gmail.com', ' asfdsadfsadf sad svfdg ', ' sdfsadf  ', NULL, NULL),
(21, ' sadfsd ', ' sfsadfsdf ', ' adsfsadf ', ' 32432432 ', NULL, NULL),
(9, ' sadf ', ' sdaf ', ' asdfsadf ', ' 4545401561 ', NULL, NULL),
(11, ' DeXent Gaming ツ ', ' fdsgfdg ', ' Asdfgh ', ' fdg ', NULL, NULL),
(13, ' dfsgsfgf ', ' fdsgfdvfgfg ', ' dsfgfddfg ', ' fdsgdsfg ', NULL, NULL),
(14, 'saafdsfds', 'sadfsdcdsavcs', 'sadfdsacsadcdsv', 'sadfdcdsf', NULL, NULL),
(15, 'saafdsfds', 'sadfsdcdsavcs', 'sadfdsacsadcdsv', 'sadfdcdsf', NULL, NULL),
(16, 'asdfxscvbfdsgh', 'fghfdbzfd@fgdsfgfgv', 'fgafdgfgvd vgjn bbjrh', '011240142540', NULL, NULL),
(17, 'asdfxscvbfdsgh', 'fghfdbzfd@fgdsfgfgv', 'fgafdgfgvd vgjn bbjrh', '011240142540', NULL, NULL),
(18, ' dfdsf ', ' sdfdsfs ', ' dsfdsf ', ' 4545401560 ', NULL, NULL),
(19, ' adsfdsafdsaf ', 'sadfsadfsadf', ' dsafsadfsa', ' 4545401560 ', NULL, NULL),
(20, ' fdasf ', ' sadfsd@dfg ', ' dsfgdfbgfb ', ' 4352345324 ', NULL, NULL),
(22, ' fgsfdgsfdgds ', ' asfdsaf@sdfedsf ', ' dfadsfsad ', ' 5465435 ', NULL, NULL),
(23, ' dsafsadfsad ', ' dsfdsa@sgfddsgfv ', ' ewartewadv ', ' 54635465434 ', NULL, NULL),
(24, ' adsfdsaf ', ' asdfsadfsad@xdsf ', ' sdagfdsagdagv ', ' 85474367544 ', NULL, NULL),
(25, ' adsf ', ' asdfsadf ', ' sdafsadf ', ' 4545401561 ', NULL, NULL),
(26, ' fdgdsafgs ', ' sadfsvcdsaf ', ' asdfscdsaf ', ' 543433 ', NULL, NULL),
(27, ' asdsadsad ', ' dvafds vfda ', ' asdfdsavc ', ' 54365433 ', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
