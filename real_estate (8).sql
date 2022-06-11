-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 11, 2022 at 07:26 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmps`
--

DROP TABLE IF EXISTS `cmps`;
CREATE TABLE IF NOT EXISTS `cmps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rent_id` int(11) DEFAULT NULL,
  `cmp` varchar(200) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rent_id` (`rent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmps`
--

INSERT INTO `cmps` (`id`, `rent_id`, `cmp`, `user_id`) VALUES
(4, NULL, 'Prelepo', 'admin'),
(5, 28, 'Lep stan', 'admin'),
(6, 28, 'Jos lepsi', 'admin'),
(7, NULL, 'Prelep stan', 'admin'),
(8, NULL, 'Prelep stan', 'admin'),
(9, 28, 'Prelep stan', 'admin'),
(10, 28, 'Pacovi u stanu', 'admin'),
(11, 28, 'Pacovi u stanu', 'admin'),
(12, 28, 'Pacovi u stanu', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `room_rental_registrations`
--

DROP TABLE IF EXISTS `room_rental_registrations`;
CREATE TABLE IF NOT EXISTS `room_rental_registrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternat_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deposit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plot_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rooms` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accommodation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacant` int(1) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(10) DEFAULT NULL,
  `approved` tinyint(1) DEFAULT '0',
  `own` tinyint(1) DEFAULT NULL,
  `purpose` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacant_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `room_rental_registrations_mobile_unique` (`mobile`),
  UNIQUE KEY `room_rental_registrations_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_rental_registrations`
--

INSERT INTO `room_rental_registrations` (`id`, `fullname`, `mobile`, `alternat_mobile`, `email`, `country`, `state`, `city`, `landmark`, `rent`, `deposit`, `plot_number`, `rooms`, `address`, `accommodation`, `description`, `image`, `vacant`, `updated_at`, `user_id`, `approved`, `own`, `purpose`, `created_at`, `vacant_user`) VALUES
(27, 'Julio', '0532570751', '0532570757', 'mousepad@gmail.com', 'Belgium', 'California', 'Barcelona', 'View', '250', '120', '124', '1RK', 'Shelby Drive 1', 'Garage', 'Best kitchen', 'uploads/yehleen-gaffney-raxI_EcyfGw-unsplash.jpg', 0, '2022-06-11 16:59:38', 13, 1, 0, NULL, '2022-28-05', 13),
(28, 'Milos', '0676539679', '0676539679', 'tvojmejl@gmail.com', 'Palestine', 'Texas', 'Jerusalem', 'Jesus', '250', '250', '213', '2BHK', 'Two Drive Door', 'Garage', 'Desc', 'uploads/loewe-technology-azMs02-lAFk-unsplash.jpg', 1, '2022-06-11 17:09:26', 12, NULL, 0, NULL, '2022-10-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_rental_registrations_apartment`
--

DROP TABLE IF EXISTS `room_rental_registrations_apartment`;
CREATE TABLE IF NOT EXISTS `room_rental_registrations_apartment` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternat_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deposit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plot_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ap_number_of_plats` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rooms` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purpose` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accommodation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacant` int(1) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(10) DEFAULT NULL,
  `approved` tinyint(4) NOT NULL DEFAULT '0',
  `own` tinyint(1) DEFAULT NULL,
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacant_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_rental_registrations_apartment`
--

INSERT INTO `room_rental_registrations_apartment` (`id`, `fullname`, `mobile`, `alternat_mobile`, `email`, `country`, `state`, `city`, `landmark`, `rent`, `deposit`, `plot_number`, `ap_number_of_plats`, `rooms`, `floor`, `purpose`, `area`, `address`, `accommodation`, `description`, `image`, `vacant`, `updated_at`, `user_id`, `approved`, `own`, `created_at`, `vacant_user`) VALUES
(11, 'Shrek', '0694251672', NULL, 'sample@gmail.com', 'France', 'Texas', 'Subotica', 'Napoleon', '225', '150', '221', '1', '3BHK', '2nd', 'Residential', 'Bronx', 'Dark Lane 221', 'Garage', 'Frat House', 'uploads/kara-eads-L7EwHkq1B2s-unsplash.jpg', 0, '2022-06-11 17:02:28', 13, 1, 1, '2022-28-05', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_mobile_unique` (`mobile`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `mobile`, `username`, `email`, `password`, `updated_at`, `role`, `status`, `created_at`, `image`) VALUES
(1, 'dadmin', '555-123-4567', 'admin', 'name@example.com', 'd00f5d5217896fb7fd601412cb890830', NULL, 'admin', 1, NULL, ''),
(2, 'Will Williams', '1111110111', 'williams', 'will@mail.com', 'password123', '2018-02-08 06:53:53', 'user', 1, '2018-02-08 07:53:53', NULL),
(12, 'student', '43645623224', 'student', 'miloslol@gmail.com', 'ad6a280417a0f533d8b670c61667e1a0', '2022-05-20 10:22:01', 'user', 1, '2022-05-20 12:22:01', 'uploads/EyhOZjpXEAIhGDE.jpg'),
(13, 'Deez', '0421667042', 'korisnik', 'pismo@gpismo.com', '5116f16d3399fcb6571f571d79f35f41', '2022-05-28 20:26:07', 'user', 1, '2022-05-28', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
