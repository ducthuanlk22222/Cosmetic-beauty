-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 15, 2021 at 03:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Ban ngày'),
(2, 'Ban đêm 4'),
(3, 'Body2'),
(5, 'Chân'),
(6, 'Mặt'),
(7, 'Tóc');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` varchar(12) NOT NULL,
  `name_customer` varchar(300) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
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
('ID1101121001', 'Phong', '0987654321', '105/200 Phong Lạc, Phường 13, Quận 9', 'kimphongdo1104@gmail.com', 'CALL ME OK BRO!!!', 1, 280000, '2021-11-10 01:40:56'),
('ID1101121002', 'Phong Đô', '0987654321', '105/200 Phong Lạc, Phường 13, Quận 9', 'kimphongdo1104@gmail.com', 'NICE', 1, 1520000, '2021-11-10 16:06:42'),
('ID1111121001', 'Phong Đô', '0123456789', '105/200 Phong Lạc, Phường 13, Quận 9', 'phong1104@gmail.com', 'FUCK YOU!!!', 1, 2680000, '2021-11-10 23:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order` varchar(12) NOT NULL,
  `id_product` varchar(500) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id_order`, `id_product`, `quantity`, `price`) VALUES
('ID1101121001', 'BDT2021-5', 1, 280000),
('ID1101121002', 'BDT2021-0', 1, 320000),
('ID1101121002', 'BDT2021-2', 4, 1200000),
('ID1111121001', 'BDT2021-2', 8, 2400000),
('ID1111121001', 'BDT2021-5', 1, 280000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) NOT NULL DEFAULT 0,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idcate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `description`, `idcate`) VALUES
(53, 'Bóp', 123, '117307847_618082782415880_315425520041952913_n.jpg', ' Da', 1),
(54, 'Sửa rửa mặt 1', 123123123, '', 'SVR 1', 7),
(55, 'Cạo lông 1', 123123123, '105550295_566154437401433_726175763509778310_n.png', 'chân 1', 7),
(56, '56', 56, 'CN19B_Background buổi sinh hoạt chi Đoàn.png', '56', 5),
(57, '123123', 123123123, '241336609_1014564562731586_1300142037076308507_n.jpg', ' 123123', 5),
(58, '123123', 123123123, '247082599_909292013044687_7891358537815596201_n.jpg', ' 123123123', 7),
(59, '111123123', 2147483647, '241545757_1214625612373499_8553105355706862344_n.jpg', ' 123123123', 7),
(60, 'demo', 1231, '', 'không ảnh ', 5),
(61, '333333', 33333, '117307847_618082782415880_315425520041952913_n.jpg', ' 33333', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` varchar(500) NOT NULL,
  `name` varchar(300) CHARACTER SET utf8 NOT NULL,
  `price` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `id_cate` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `name`, `price`, `img`, `date_created`, `id_cate`, `description`) VALUES
('BDT2021-0', 'STEAMING FACE CREAM', 320000, 'steaming face cream.jpg', '2021-11-07 15:43:38', 'TYPE-3', 'abc'),
('BDT2021-1', 'SUN PROTECTION LOTION', 230000, 'sun protection lotion.jpg', '2021-11-07 15:44:21', 'TYPE-3', 'def'),
('BDT2021-2', 'WHITENING FACE CREAM', 300000, 'whitening face cream.jpg', '2021-11-08 15:24:04', 'TYPE-3', 'abnd'),
('BDT2021-3', 'ALCOHOL FREE TONER', 240000, 'ALCOHOL FREE TONER.jpg', '2021-11-08 15:27:00', 'TYPE-2', 'bas'),
('BDT2021-4', 'ANTI ACNE', 290000, 'anti acne.jpg', '2021-11-08 15:30:00', 'TYPE-3', 'gbh'),
('BDT2021-5', 'PERFUME SEED', 280000, 'perfume seed.jpg', '2021-11-08 15:30:52', 'TYPE-3', 'hhht'),
('BDT2021-6', 'STEAMING BODY', 250000, 'steaming body.jpg', '2021-11-08 20:52:21', 'TYPE-3', 'gggg'),
('BDT2021-7', 'WHITENING BODY CREAM', 360000, 'whitening body cream.jpg', '2021-11-08 20:53:58', 'TYPE-3', 'body'),
('BDT2021-8', 'JEJU VITAMIN SEAWATER MINERAL MIST', 270000, 'jeju vitamin seawater mineral mist.jpg', '2021-11-08 20:54:33', 'TYPE-3', 'body 2'),
('CLF2021-0', 'V-RIGHT NEW TONE CLEANSING FOAM', 310000, 'v-right new tone cleansing foam.jpg', '2021-11-07 15:31:32', 'TYPE-1', 'ghi'),
('FCT2021-0', 'MOAZ LIPSTICK', 180000, 'moaz lipstick.jpg', '2021-11-07 15:32:37', 'TYPE-2', 'ljk'),
('FCT2021-1', 'NATURAL CLEANSING OIL', 260000, 'natural cleansing oil.jpg', '2021-11-07 15:37:38', 'TYPE-1', 'opr'),
('FCT2021-2', 'PREMIUM NEGIN SAFFRON MASK', 310000, 'premium negin saffron mask.jpg', '2021-11-07 15:41:13', 'TYPE-1', 'stu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_Sanpham_danhMuc` (`idcate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `lk_Sanpham_danhMuc` FOREIGN KEY (`idcate`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
