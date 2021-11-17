-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 09:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosmetic-beauty`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
('1', 'MẶT'),
('2', 'BODY-TYPE'),
('3', 'CLEANING-TYPE'),
('4', 'CHỐNG NẮNG'),
('5', 'TẨY DA CHẾT');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` varchar(12) NOT NULL,
  `name_customer` varchar(100) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `note` text NOT NULL,
  `order_type` int(1) NOT NULL,
  `order_price` int(11) NOT NULL,
  `date_order` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `name_customer`, `phone_number`, `address`, `email`, `note`, `order_type`, `order_price`, `date_order`) VALUES
('ID1171121002', 'minh tai', '0908773057', 'sdasdsad', 'conian2505@gmail.com', 'ádsdsaddadasdasdasdsa', 1, 1280000, '2021-11-16 23:34:53'),
('ID1171121003', 'minh tai', '0908773057', 'sdasdsad', '1951120134@sv.ut.edu.vn', 'sdasdasdasdasdadasdada', 1, 720000, '2021-11-17 14:05:49'),
('ID1171121004', 'minh tai', '0908773057', 'sdasdsad', 'conian2505@gmail.com', 'ádasdsd', 1, 230000, '2021-11-17 14:18:34'),
('ID1171121005', 'minh tai', '0908773057', 'sdasdsad', '1951120134@sv.ut.edu.vn', 'sdasdasdasd', 1, 230000, '2021-11-17 14:24:39'),
('ID1171121006', 'minh tai', '0908773057', 'sdasdsad', 'conian2505@gmail.com', 'sdasdasdad', 1, 230000, '2021-11-17 14:34:20');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order` varchar(12) NOT NULL,
  `id_product` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id_order`, `id_product`, `quantity`, `price`) VALUES
('ID1171121002', 'BDT2021-0', 4, 1280000),
('ID1171121003', 'BDT2021-8', 1, 320000),
('ID1171121003', 'CNT2021-1', 1, 400000),
('ID1171121004', 'BDT2021-1', 1, 230000),
('ID1171121005', 'BDT2021-1', 1, 230000),
('ID1171121006', 'BDT2021-1', 1, 230000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` varchar(50) NOT NULL,
  `name` varchar(300) NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `id_cate` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `name`, `price`, `image`, `date_created`, `id_cate`, `description`) VALUES
('BDT2021-0', 'STEAMING FACE CREAM', 320000, 'steaming face cream.jpg', '2021-11-16 23:03:52', '2', ' RETINOL ANTI-AGING HAND CREAM – Younger Looking Hands Won’t Give Away Your Real Age; Exfoliates to Reduce Fine Lines, Uneven Tone & Texture'),
('BDT2021-1', 'SUN PROTECTION LOTION', 230000, 'sun protection lotion.jpg', '2021-11-16 23:37:17', '2', 'RETINOL ANTI-AGING HAND CREAM – Younger Looking Hands Won’t Give Away Your Real Age; Exfoliates to Reduce Fine Lines, Uneven Tone & Texture'),
('BDT2021-2', 'WHITENING FACE CREAM', 300000, 'whitening face cream.jpg', '2021-11-17 01:21:50', '1', 'RETINOL ANTI-AGING HAND CREAM – Younger Looking Hands Won’t Give Away Your Real Age; Exfoliates to Reduce Fine Lines, Uneven Tone & Texture '),
('BDT2021-4', 'ANTI ACNE', 400000, 'anti acne.jpg', '2021-11-17 01:48:58', '2', 'RETINOL ANTI-AGING HAND CREAM – Younger Looking Hands Won’t Give Away Your Real Age; Exfoliates to Reduce Fine Lines, Uneven Tone & Texture '),
('BDT2021-5', 'PERFUME SEED', 250000, 'perfume seed.jpg', '2021-11-17 01:51:32', '2', 'RETINOL ANTI-AGING HAND CREAM – Younger Looking Hands Won’t Give Away Your Real Age; Exfoliates to Reduce Fine Lines, Uneven Tone & Texture '),
('BDT2021-6', 'STEAMING BODY', 250000, 'steaming body.jpg', '2021-11-17 01:56:11', '2', ' RETINOL ANTI-AGING HAND CREAM – Younger Looking Hands Won’t Give Away Your Real Age; Exfoliates to Reduce Fine Lines, Uneven Tone & Texture'),
('BDT2021-7', 'WHITENING BODY CREAM', 350000, 'whitening body cream.jpg', '2021-11-17 01:57:40', '2', ' RETINOL ANTI-AGING HAND CREAM – Younger Looking Hands Won’t Give Away Your Real Age; Exfoliates to Reduce Fine Lines, Uneven Tone & Texture'),
('BDT2021-8', 'JEJU VITAMIN SEAWATER MINERAL MIST', 320000, 'jeju vitamin seawater mineral mist.jpg', '2021-11-17 01:58:21', '2', 'RETINOL ANTI-AGING HAND CREAM – Younger Looking Hands Won’t Give Away Your Real Age; Exfoliates to Reduce Fine Lines, Uneven Tone & Texture'),
('CNT2021-0', 'natural cleansing oil', 320000, 'natural cleansing oil.jpg', '2021-11-17 02:05:54', '3', ' RETINOL ANTI-AGING HAND CREAM – Younger Looking Hands Won’t Give Away Your Real Age; Exfoliates to Reduce Fine Lines, Uneven Tone & Texture'),
('CNT2021-1', 'v-right new tone cleansing foam', 400000, 'v-right new tone cleansing foam.jpg', '2021-11-17 02:07:36', '3', ' RETINOL ANTI-AGING HAND CREAM – Younger Looking Hands Won’t Give Away Your Real Age; Exfoliates to Reduce Fine Lines, Uneven Tone & Texture'),
('CNT2021-2', 'anti acne-type-2', 320000, 'anti acne.jpg', '2021-11-17 02:08:47', '3', ' RETINOL ANTI-AGING HAND CREAM – Younger Looking Hands Won’t Give Away Your Real Age; Exfoliates to Reduce Fine Lines, Uneven Tone & Texture'),
('FCT2021-0', 'MOAZ LIPSTICK', 250000, 'moaz lipstick.jpg', '2021-11-17 01:59:14', '1', ' RETINOL ANTI-AGING HAND CREAM – Younger Looking Hands Won’t Give Away Your Real Age; Exfoliates to Reduce Fine Lines, Uneven Tone & Texture'),
('FCT2021-2', 'PREMIUM NEGIN SAFFRON MASK', 320000, 'premium negin saffron mask.jpg', '2021-11-17 01:59:57', '1', ' RETINOL ANTI-AGING HAND CREAM – Younger Looking Hands Won’t Give Away Your Real Age; Exfoliates to Reduce Fine Lines, Uneven Tone & Texture'),
('FCT2021-3', 'ECGC Depuffing Eye Serum', 150000, 'Untitled-1.png', '2021-11-17 02:00:55', '1', 'A concentrated serum with high-solubility caffeine and green tea cathechin to visibly reduce eye-contour pigmentation and puffiness.Skin Type: Normal, Dry, Combination, and Oily Skincare Concerns: Dark Circles, Puffiness '),
('FCT2021-4', 'ECGC Depuffing Eye Serum-type 1', 320000, 'ALCOHOL FREE TONER.jpg', '2021-11-17 02:03:39', '1', ' RETINOL ANTI-AGING HAND CREAM – Younger Looking Hands Won’t Give Away Your Real Age; Exfoliates to Reduce Fine Lines, Uneven Tone & Texture'),
('FCT2021-5', 'PREMIUM NEGIN SAFFRON MASK-type1', 400000, 'Untitled-3.png', '2021-11-17 13:20:00', '1', ' What it is: A concentrated, two percent alpha arbutin serum to help reduce the appearance of hyperpigmentation and dark spots. Skin Type: Normal Skincare Concerns: Dullness, Uneven Texture, and Dark Spots');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `LK_SanPham_DanhMuc` (`id_cate`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `LK_order_detail` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`),
  ADD CONSTRAINT `LK_product_detail` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `LK_SanPham_DanhMuc` FOREIGN KEY (`id_cate`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
