-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 06:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_rate` float NOT NULL,
  `product_statue` text NOT NULL,
  `src1` varchar(255) NOT NULL,
  `src2` varchar(255) NOT NULL,
  `src3` varchar(255) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_rate`, `product_statue`, `src1`, `src2`, `src3`, `type`) VALUES
(1, 'Adidas_duramo', 300, 5, 'available', 'images/shose/Adidas_duramo1.jpg', 'images/shose/Adidas_duramo2.jpg', 'images/shose/Adidas_duramo3.jpg', 'shose'),
(2, 'Air Jordan 7 Retro SE', 200, 4, 'not available', 'images/shose/Air Jordan 7 Retro SE1.webp', 'images/shose/Air Jordan 7 Retro SE2.webp', 'images/shose/Air Jordan 7 Retro SE3.webp', 'shose'),
(3, 'Air_Jordan_1_Elevate_High', 250, 5, 'available', 'images/shose/Air_Jordan_1_Elevate_High1.webp', 'images/shose/Air_Jordan_1_Elevate_High2.webp', 'images/shose/Air_Jordan_1_Elevate_High3.webp', 'shose'),
(4, 'air_jordan_lemon', 150, 4, 'not available', 'images/shose/air_jordan_lemon1.webp', 'images/shose/air_jordan_lemon2.webp', 'images/shose/air_jordan_lemon3.webp', 'shose'),
(5, 'air_jordan_women', 200, 3, 'available', 'images/shose/air_jordan_women1.webp', 'images/shose/air_jordan_women2.webp', 'images/shose/air_jordan_women3.webp', 'shose'),
(6, 'jordan_max', 100, 4, 'not available', 'images/shose/jordan_max1.webp', 'images/shose/jordan_max2.webp', 'images/shose/jordan_max3.webp', 'shose'),
(7, 'Nike_Air_Force', 500, 5, 'available', 'images/shose/Nike_Air_Force1.webp', 'images/shose/Nike_Air_Force2.webp', 'images/shose/Nike_Air_Force3.webp', 'shose'),
(8, 'TESTA_white', 300, 4, 'not available', 'images/shose/TESTA_white1.jpg', 'images/shose/TESTA_white2.jpg', 'images/shose/TESTA_white3.jpg', 'shose'),
(9, 'alahly', 50, 4.5, 'available', 'images/t_shirt/alahly1.webp', 'images/t_shirt/alahly2.webp', '', 't shirt'),
(10, 'American_Eagle', 100, 5, 'not available', 'images/t_shirt/American_Eagle1.jpg', 'images/t_shirt/American_Eagle2.jpg', 'images/t_shirt/American_Eagle3.jpg', 't shirt'),
(11, 'Attack', 150, 4.5, 'available', 'images/t_shirt/Attack1.jpg', 'images/t_shirt/Attack2.jpg', 'images/t_shirt/Attack3.jpg', 't shirt'),
(12, 'BAM', 60, 3.5, 'not available', 'images/t_shirt/BAM1.jpg', 'images/t_shirt/BAM2.jpg', 'images/t_shirt/BAM3.jpg', 't shirt'),
(13, 'Jordan_Sport_Jam', 90, 4.5, 'available', 'images/t_shirt/Jordan_Sport_Jam1.webp', 'images/t_shirt/Jordan_Sport_Jam2.webp', 'images/t_shirt/Jordan_Sport_Jam3.webp', 't shirt'),
(14, 'Knight', 150, 5, 'not available', 'images/t_shirt/Knight1.jpg', 'images/t_shirt/Knight2.jpg', 'images/t_shirt/Knight3.jpg', 't shirt'),
(15, 'Ravin', 80, 3.5, 'available', 'images/t_shirt/Ravin1.jpg', 'images/t_shirt/Ravin2.jpg', 'images/t_shirt/Ravin3.jpg', 't shirt'),
(16, 'Spider', 300, 5, 'not available', 'images/t_shirt/Spider1.jpg', 'images/t_shirt/Spider2.jpg', 'images/t_shirt/Spider3.jpg', 't shirt'),
(17, 'Analog_Watch', 1500, 4.5, 'available', 'images/watch/Analog_Watch1.jpg', 'images/watch/Analog_Watch2.jpg', '', 'watch'),
(18, 'Casio', 1400, 3.5, 'not available', 'images/watch/Casio1.jpg', 'images/watch/Casio2.jpg', 'images/watch/Casio3.jpg', 'watch'),
(19, 'casio_a', 1600, 4, 'available', 'images/watch/casio_a1.jpg', 'images/watch/casio_a2.jpg', 'images/watch/casio_a3.jpg', 'watch'),
(20, 'Diesel', 2000, 5, 'not available', 'images/watch/Diesel1.jpg', 'images/watch/Diesel2.jpg', '', 'watch'),
(21, 'Diesel_Watch', 1700, 3.5, 'available', 'images/watch/Diesel_Watch1.jpg', 'images/watch/Diesel_Watch2.jpg', 'images/watch/Diesel_Watch3.jpg', 'watch'),
(22, 'ESPRIT_a', 1800, 4.5, 'not available', 'images/watch/ESPRIT_a1.jpg', 'images/watch/ESPRIT_a2.jpg', 'images/watch/ESPRIT_a3.jpg', 'watch'),
(23, 'Hugo_a', 1500, 4.5, 'available', 'images/watch/Hugo_a1.jpg', 'images/watch/Hugo_a2.jpg', 'images/watch/Hugo_a3.jpg', 'watch'),
(24, 'Tommy_watch', 1200, 3.5, 'not available', 'images/watch/Tommy_watch1.jpg', 'images/watch/Tommy_watch2.jpg', '', 'watch'),
(25, 'CAESAR', 150, 5, 'available', 'images/trousers/CAESAR1.jpg', 'images/trousers/CAESAR2.jpg', 'images/trousers/CAESAR3.jpg', 'trousers'),
(26, 'Cargo', 120, 4.5, 'not available', 'images/trousers/Cargo1.jpg', 'images/trousers/Cargo2.jpg', 'images/trousers/Cargo3.jpg', 'trousers'),
(27, 'Classic', 130, 4, 'available', 'images/trousers/Classic1.jpg', 'images/trousers/Classic2.jpg', 'images/trousers/Classic3.jpg', 'trousers'),
(28, 'Jeans', 130, 4.5, 'not available', 'images/trousers/Jeans1.jpg', 'images/trousers/Jeans2.jpg', 'images/trousers/Jeans3.jpg', 'trousers'),
(29, 'Jeansa', 90, 3.5, 'available', 'images/trousers/Jeansa1.jpg', 'images/trousers/Jeansa2.jpg', 'images/trousers/Jeansa3.jpg', 'trousers'),
(30, 'Jordan_Brookly', 150, 1, 'not available', 'images/trousers/Jordan_Brookly1.webp', 'images/trousers/Jordan_Brookly2.jpeg', 'images/trousers/Jordan_Brookly3.jpeg', 'trousers'),
(31, 'Men\'s_Pants', 60, 0.5, 'available', 'images/trousers/Men\'s_Pants1.jpeg', 'images/trousers/Men\'s_Pants2.webp', 'images/trousers/Men\'s_Pants3.webp', 'trousers'),
(32, 'Nike_Club', 130, 1, 'not available', 'images/trousers/Nike_Club1.webp', 'images/trousers/Nike_Club1.jpeg', 'images/trousers/Nike_Club3.webp', 'trousers'),
(33, 'Andora', 250, 4.5, 'available', 'images/shirt/Andora1.jpg', 'images/shirt/Andora2.jpg', 'images/shirt/Andora3.jpg', 'shirt'),
(34, 'Andoraa', 150, 3.5, 'not available', 'images/shirt/Andoraa1.jpg', 'images/shirt/Andoraa2.jpg', 'images/shirt/Andoraa3.jpg', 'shirt'),
(35, 'classic_shirt', 160, 4.5, 'available', 'images/shirt/classic_shirt1.jpg', 'images/shirt/classic_shirt2.jpg', '', 'shirt'),
(36, 'Collar', 120, 3.5, 'not available', 'images/shirt/Collar1.jpg', 'images/shirt/Collar2.jpg', 'images/shirt/Collar3.jpg', 'shirt'),
(37, 'Cotton', 100, 2.5, 'available', 'images/shirt/Cotton1.jpg', 'images/shirt/Cotton2.jpg', 'images/shirt/Cotton3.jpg', 'shirt'),
(38, 'DOTT', 50, 1.5, 'not available', 'images/shirt/DOTT1.jpg', 'images/shirt/DOTT2.jpg', 'images/shirt/DOTT3.jpg', 'shirt'),
(39, 'SAUA', 50, 0, 'available', 'images/shirt/SAUA1.jpg', 'images/shirt/SAUA2.jpg', 'images/shirt/SAUA3.jpg', 'shirt'),
(40, 'Shirt', 225, 2, 'not available', 'images/shirt/Shirt1.jpg', 'images/shirt/Shirt2.jpg', 'images/shirt/Shirt3.jpg', 'shirt'),
(43, 'Red Printed T-Shirt', 200, 4, 'available', 'images/shirt/product-1.jpg', '', '', 'shirt'),
(44, 'Grey Shoes', 150, 4.5, 'not available', 'images/shose/product-5.jpg', '', '', 'shose'),
(45, 'Black Printed T-Shirt', 180, 4, 'available', 'images/shirt/product-6.jpg', '', '', 'shirt'),
(46, 'Different colors of socks', 100, 4.5, 'available', 'images/shose/product-7.jpg', '', '', 'shose'),
(47, 'Fossil Black Watch', 250, 4, 'not available', 'images/watch/product-8.jpg', '', '', 'watch'),
(48, 'Roadster black Watch', 250, 4.5, 'available', 'images/watch/product-9.jpg', '', '', 'watch'),
(49, 'Sport black shoes', 225, 3.5, 'available', 'images/shose/product-10.jpg', '', '', 'shose'),
(50, 'Casual Grey Shoes', 200, 4, 'not available', 'images/shose/product-11.jpg', '', '', 'shose');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
