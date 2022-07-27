-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 28, 2022 at 12:11 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myecomontre`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `title`) VALUES
(1, 'Homme'),
(2, 'Femme'),
(3, 'Enfant');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(13) NOT NULL,
  `order_date` datetime NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(8,2) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `image`, `price`, `category_id`) VALUES
(1, 'Montre Classique', 'Diamètre Du Boîtier : 40 Mm Epaisseur Du Boîtier : 8 Mm Mouvement : Ronda SP - Date Heure (Quartz) Taille Du Poignet : 16 À 21 Cm Garantie : 24 Mois', 'images/homme1.jpg', '59.95', 1),
(2, 'Montre Chronobike', 'Diamètre Du Boîtier : 40 Mm Epaisseur Du Boîtier : 8 Mm Mouvement : Ronda SP - Date Heure (Quartz) Taille Du Poignet : 16 À 21 Cm Garantie : 24 Mois', 'images/homme2.jpg', '89.95', 1),
(3, 'Montre Babaga', 'Diamètre Du Boitier : 42mm Bracelet Classique En Cuir Interchangeable Mouvement Automatique Seagull Montre Garantie : 24 Mois', 'images/homme3.jpg', '110.00', 1),
(4, 'Montre Sportboy', 'Diamètre Du Boitier : 42mm Bracelet Classique En Cuir Interchangeable Mouvement Automatique Seagull Montre Garantie : 24 Mois', 'images/homme4.jpg', '154.95', 1),
(5, 'Montre Full Heat', 'Diamètre Du Boîtier : 40 Mm Epaisseur Du Boîtier : 8 Mm Mouvement : Ronda SP - Date Heure (Quartz) Taille Du Poignet : 16 À 21 Cm Garantie : 24 Mois', 'images/homme5.jpg', '210.95', 1),
(6, 'MyEco Prestige', 'Diamètre Du Boîtier : 39 Mm Épaisseur Du Boîtier : 8.3 Mm Forme Du Boîtier : Rond Mécanisme : Quartz (Ronda Swiss Parts 760) Garantie : 24 Mois', 'images/homme6.jpg', '299.95', 1),
(7, 'Montre XY', 'Diamètre Du Boitier : 42mm Bracelet Classique En Cuir Interchangeable Mouvement Ronda Swiss Parts Conçu Pour Durer Montre Garantie 24 Mois', 'images/homme7.jpg', '129.99', 1),
(8, 'Montre Noir', 'Diamètre: 39 Mm Boitier En Santal Rouge, Cadran En Santal Noir Largeur Bracelet: 20 Mm Bracelet 100% En Cuir Véritable Garantie : 24 Mois', 'images/homme8.jpg', '89.99', 1),
(9, 'Montre Classique', 'Diamètre Du Boîtier : 30 Mm Epaisseur Du Boîtier : 8,5 Mm Mouvement : Ronda Swiss P. - Heure Taille Du Poignet : 14 À 19 Cm Garantie : 24 Mois', 'images/femme1.jpg', '59.95', 2),
(10, 'Montre Mademoiselle', 'Diamètre Du Boîtier : 34 Mm Epaisseur Du Boîtier : 8 Mm Mouvement : Ronda Swiss P. Taille Du Poignet : 14 À 19 Cm Garantie : 24 Mois', 'images/femme2.jpg', '89.95', 2),
(11, 'Montre Oasis', 'Diamètre Du Boîtier : 29 Mm Epaisseur Du Boîtier : 9,5 Mm Mouvement : Ronda Swiss P. - Heure Largeur Du Bracelet : 14 Mm Garantie : 24 Mois', 'images/femme3.jpg', '110.00', 2),
(12, 'Montre Girlfriend', 'Diamètre Du Boîtier : 30 Mm Epaisseur Du Boîtier : 9 Mm Mouvement : Ronda Swiss P. - Heure Largeur Du Bracelet : 14 Mm Garantie : 24 Mois', 'images/femme4.jpg', '149.95', 2),
(13, 'Montre Jasmine', 'Diamètre Du Boîtier : 32 Mm Epaisseur Du Boîtier : 7,8 Mm Mouvement : Ronda Swiss P. - Heure Largeur Du Bracelet : 14 Mm Garantie : 24 Mois', 'images/femme5.jpg', '205.00', 2),
(14, 'MyEco Prestige', 'Diamètre Du Boîtier : 42 Mm Epaisseur Du Boîtier : 12 Mm Mouvement : Automatique Taille Du Poignet : 14 À 19 Cm Garantie : 24 Mois', 'images/femme6.jpg', '299.95', 2),
(15, 'Montre Cool', 'Diamètre Du Boîtier : 30 Mm Epaisseur Du Boîtier : 9 Mm Mouvement : Ronda Swiss P. - Heure Largeur Du Bracelet : 14 Mm Garantie : 24 Mois', 'images/femme7.jpg', '299.95', 2),
(16, 'Montre Elegance', 'Diamètre Du Boîtier : 30 Mm Epaisseur Du Boîtier : 9 Mm Mouvement : Ronda Swiss P. - Heure Largeur Du Bracelet : 14 Mm Garantie : 24 Mois', 'images/femme8.jpeg', '79.99', 2),
(17, 'Montre Gulli', 'Diamètre Du Boîtier : 35 Mm Epaisseur Du Boîtier : 8,8 Mm Mouvement : Quartz Taille Du Poignet : 24 Cm Garantie : 24 Mois', 'images/enfant1.jpg', '9.95', 3),
(18, 'Montre Babyboome', 'Diamètre Du Boîtier : 35 Mm Epaisseur Du Boîtier : 8,8 Mm Mouvement : Quartz Taille Du Poignet : 24 Cm Garantie : 24 Mois', 'images/enfant2.jpg', '14.95', 3),
(19, 'Montre Kidizoom', 'Diamètre Du Boîtier : 35 Mm Epaisseur Du Boîtier : 8,8 Mm Mouvement : Quartz Taille Du Poignet : 24 Cm Garantie : 24 Mois', 'images/enfant3.jpg', '19.95', 3),
(20, 'Montre Razmoket', 'Diamètre Du Boîtier : 35 Mm Epaisseur Du Boîtier : 8,8 Mm Mouvement : Quartz Taille Du Poignet : 24 Cm Garantie : 24 Mois', 'images/enfant4.jpg', '22.95', 3),
(21, 'Montre Navy', 'Diamètre Du Boîtier : 30 Mm Epaisseur Du Boîtier : 8,5 Mm Mouvement : Ronda Swiss P. - Heure Taille Du Poignet : 14 À 19 Cm Garantie : 24 Mois', 'images/enfant5.jpg', '34.99', 3),
(22, 'Montre Family', 'Diamètre Du Boîtier : 30 Mm Epaisseur Du Boîtier : 8,5 Mm Mouvement : Ronda Swiss P. - Heure Taille Du Poignet : 14 À 19 Cm Garantie : 24 Mois', 'images/enfant6.jpg', '25.95', 3),
(23, 'Montre Pikachu', 'Diamètre Du Boîtier : 30 Mm Epaisseur Du Boîtier : 8,5 Mm Mouvement : Ronda Swiss P. - Heure Taille Du Poignet : 14 À 19 Cm Garantie : 24 Mois', 'images/enfant7.jpg', '9.99', 3),
(24, 'Montre Navy', 'Diamètre Du Boîtier : 30 Mm Epaisseur Du Boîtier : 8,5 Mm Mouvement : Ronda Swiss P. - Heure Taille Du Poignet : 14 À 19 Cm Garantie : 24 Mois', 'images/enfant8.jpg', '9.99', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `city` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`user_id`,`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
