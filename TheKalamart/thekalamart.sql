-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 04:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thekalamart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(15) NOT NULL,
  `product_id` int(20) NOT NULL,
  `user_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`) VALUES
(0, 21, 3),
(0, 3, 3),
(0, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `product_price` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `product_image` varchar(255) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'explosion box1', '2000', 'img/handmade/e1.jpg'),
(2, 'explosion box2', '1500', 'img/handmade/e2.jpeg'),
(3, 'explosion box3', '1500', 'img/handmade/e3.jpeg'),
(4, 'card1', '450', 'img/handmade/c1.jpeg'),
(5, 'card2', '450', 'img/handmade/c2.jpeg'),
(6, 'card3', '450', 'img/handmade/c3.jpeg'),
(7, 'album1', '2000', 'img/handmade/a1.jpeg'),
(8, 'album2', '1500', 'img/handmade/a2.jpg'),
(9, 'album3', '1500', 'img/handmade/a3.jpg'),
(10, 'wooden album1', '2000', 'img/handmade/w1.jpeg'),
(11, 'wooden album2', '2000', 'img/handmade/w2.jpeg'),
(12, 'wooden-album3', '1000', 'img/handmade/w3.jpeg'),
(13, 'envelop album1', '450', 'img/handmade/en1.jpeg'),
(14, 'envelop album2', '550', 'img/handmade/en2.jpeg'),
(15, 'envelop album3', '450', 'img/handmade/en3.jpeg'),
(16, 'scrapbook1', '1500', 'img/handmade/s1.jpeg'),
(17, 'scrapbook2', '1000', 'img/handmade/s2.jpeg'),
(18, 'sceapbook3', '2000', 'img/handmade/s3.jpeg'),
(19, 'Printed t-shirt', '850', 'img\\personalized\\t1.jpg'),
(20, 't-shirt', '2000', 'img/personalized/t2.jpg'),
(21, 'printedt-shirt', '850', 'img/personalized/t3.jpg'),
(22, 'Wooden Keychain', '150', 'img/personalized/key1.jpg'),
(23, 'Keychain', '150', 'img/personalized/key2.jpg'),
(24, 'Keychain', '150', 'img/personalized/key3.jpg'),
(25, 'Photo Frame', '850', 'img/personalized/frame1.jpg'),
(26, 'Photo Frame', '350', 'img/personalized/frame2.jpg'),
(27, 'Photo Frame', '850', 'img/personalized/frame3.jpg'),
(28, 'Brown-Diaries', '850', 'img/personalized/brown-diaries1.jpg'),
(29, 'Brown-Diaries', '850', 'img/personalized/brown-diaries2.jpg'),
(30, 'Brown-Diaries', '850', 'img/personalized/brown-diaries3.jpg'),
(31, 'Large-Bag', '850', 'img/personalized/travel1.jpg'),
(32, 'Bag', '850', 'img/personalized/travel2.jpg'),
(33, 'Bottle', '850', 'img/personalized/travel3.jpg'),
(34, 'Printed-Diaries', '850', 'img/personalized/diaries1.jpg'),
(35, 'Diary', '550', 'img/personalized/diaries2.jpg'),
(36, 'Diary', '350', 'img/personalized/diaries3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(6) NOT NULL,
  `user_name` char(30) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `Email_Id` varchar(30) DEFAULT NULL,
  `password` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  `Address` varchar(70) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `user_name`, `phone_no`, `Email_Id`, `password`, `Address`, `reg_date`) VALUES
(1, 'varshs', 2147483647, 'varsha@gmail.com', '12345', 'digha', '2020-09-17 16:37:43'),
(2, 'vasant', 2147483647, 'vasant@gmail.com', 'asdfgh', 'airoli', '2020-09-17 17:07:25'),
(3, 'tejal', 2147483647, 'tejal@gmail.com', '123456', 'airoli', '2020-09-17 17:16:16'),
(4, 'snehal', 2147483647, 'snehal@gmail.com', '12345', 'Roha', '2020-09-18 14:04:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
