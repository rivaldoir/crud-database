-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2025 at 01:18 PM
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
-- Database: `crud_menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `harga` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `nama_menu`, `deskripsi`, `foto`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Monster Energy Green Blend', 'Get the full, raw power of Monster without the compromise! Monster Absolutely Zero delivers the potent, signature Monster energy blend with zero sugar and zero calories. The intense visual of the reptilian eye reinforces the untamed, focused energy you\'ll receive.', 'menu/oi25DTFKDVD2e9okdvHIzh2e4NKBWvEVuUnxoyCl.jpg', 799999.00, '2025-11-13 22:55:40', '2025-11-13 23:21:09'),
(2, 'Monster Energy Blend', 'Step into the shadows with Mountain Dew Black Label, a sophisticated and dark take on the classic Dew flavor. This is a craft soda experience with a mysterious, rich taste and a subtle, stimulating lift. The rising black goo symbolizes the intensity and depth of the flavor profile.', 'menu/EwWMO4pOESdF651bXFGJKQ6QxzwaoEabgu36skak.jpg', 599999.00, '2025-11-13 23:30:52', '2025-11-13 23:37:25'),
(3, 'Monster Energy Black Series', 'Unleash the Ultra Beast and escape to your own island paradise! Monster Ultra Paradise delivers a lush, kiwi-lime, and cucumber blend of flavor with zero sugar. This is the ultimate guilt-free ticket to a state of sustained, clean energy, making every moment feel like a tropical getaway.', 'menu/0wU1NczkTiHCOO87kn0K43ZP8ATHa9yBc1AvDsFU.jpg', 899999.00, '2025-11-13 23:39:36', '2025-11-13 23:39:36'),
(4, 'Monster Energy Absolute', 'This is where the legend began. Monster Energy Original delivers the iconic, powerful blend of Taurine and Ginseng, giving you the massive kick needed to stay in the game. The visual of the dripping green claw and fire symbolizes the potent, almost supernatural energy you get in every can.', 'menu/N7BZZeOgdghD5GObdzOgT6AifqxPXZtS70nBz7z8.jpg', 599999.00, '2025-11-13 23:39:52', '2025-11-13 23:39:52'),
(5, 'Monster Energy Snakey', 'Dare to taste the danger? This striking variant of Monster combines the brand\'s legendary power with the sleek, focused intensity of a viper. Wrapped in the cold embrace of the snake, this drink delivers a sharp, sustained energy that will keep your focus razor-sharp and your energy venomously potent.', 'menu/929zUWnHlufIM5k7wPfB9w8MUO67ipsFqHuSHlpX.jpg', 799999.00, '2025-11-13 23:40:10', '2025-11-13 23:40:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
