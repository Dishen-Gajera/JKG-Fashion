-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2024 at 01:33 PM
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
-- Database: `cloths_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `price` bigint(20) NOT NULL,
  `qut` bigint(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`product_id`, `product_name`, `price`, `qut`, `gender`, `category`, `size`, `image`) VALUES
(1, 'Lovender T-Shirt', 800, 27, 'male', 't-Shirt', 'large', '../img/nike sporst ware.jpg'),
(5, 'Black Desire T-Shirt', 200, 20, 'male', 't-shirt', 'medium', '../img/nike icon.jpg'),
(8, 'Black Shirt ', 750, 3, 'female', 'shirt', 'medium', '../img/w.shirt.jpg'),
(14, 'Golden Lion T-Shirt', 400, 20, 'male', 't-Shirt', 'large', '../img/download.jpg'),
(15, 'Frenchy Shirt', 499, 60, 'male', 'shirt', 'large', '../img/images.jpg'),
(16, 'Formal Purple Shirt', 399, 23, 'male', 'shirt', 'medium', '../img/smiley-middle-age-man-posing_23-2151842269.jpg'),
(17, 'Lather Shirt', 699, 18, 'male', 'shirt', 'xl', '../img/download (1).jpg'),
(18, 'Fit Black Pant', 299, 18, 'male', 'pant', 'large', '../img/download (2).jpg'),
(19, 'Loos Night Pant', 699, 30, 'male', 'pant', 'large', '../img/download (3).jpg'),
(20, 'Grey Long Pant', 699, 20, 'male', 'pant', 'xl', '../img/images (1).jpg'),
(21, 'Denim Fastrack Jacket', 999, 19, 'male', 'jacket', 'large', '../img/images (2).jpg'),
(22, 'D & G  Lather Jacket', 899, 19, 'male', 'jacket', 'large', '../img/images (3).jpg'),
(23, 'White Denim Jacket', 1199, 19, 'male', 'jacket', 'xl', '../img/images (4).jpg'),
(24, 'Blue Simple T-Shirt', 299, 30, 'female', 't-Shirt', 'medium', '../img/download (4).jpg'),
(26, 'Black light T-Shirt', 399, 20, 'female', 't-Shirt', 'medium', '../img/download (5).jpg'),
(27, 'White Tight T-Shirt', 349, 20, 'female', 't-Shirt', 'medium', '../img/young-black-woman-with-curly-hair-white-shirt-jeans-stands-against-white-background_759095-13048.jpg'),
(29, 'White Winter Jacket', 699, 20, 'female', 'jacket', 'large', '../img/download (7).jpg'),
(30, 'Color Like Jacket', 699, 20, 'female', 'jacket', 'xl', '../img/download (8).jpg'),
(31, 'Black Hot Jacket', 999, 18, 'female', 'jacket', 'large', '../img/images (6).jpg'),
(32, 'White Formal Shirt', 349, 18, 'female', 'shirt', 'large', '../img/s-kfwshirt021-kicky-original-imag5nfnkmm3jf29.jpg'),
(33, 'Blue Half Sleve Shirt', 699, 20, 'female', 'shirt', 'medium', '../img/images (7).jpg'),
(34, 'Wedding Women Dress', 1299, 20, 'female', 'dress', 'xxl', '../img/happy-sexy-beautiful-bride-brunette-girl-white-wedding-dress-with-hairstyle-bright-makeup-white-13966 (1).jpg'),
(35, 'Simple Light Dress', 1299, 20, 'female', 'dress', 'xxxl', '../img/images (8).jpg'),
(36, 'Panjabi Fashion Dress', 1399, 20, 'female', 'dress', 'large', '../img/images (9).jpg'),
(37, 'Flat Plat Leggihines', 599, 30, 'female', 'legghines', 'large', '../img/download (9).jpg'),
(38, 'White Tight Legghines', 569, 30, 'female', 'legghines', 'large', '../img/images (10).jpg'),
(39, 'Blue Short Legghines', 699, 30, 'female', 'legghines', 'xl', '../img/download (10).jpg'),
(42, 'Light Black Crop-Top', 699, 30, 'female', 'crop-top', 'large', '../img/9d10535f-1b91-4c71-9bb7-fe14ab8f5d8f_11189980-xlgnm400x400.jpg'),
(43, 'Light-Blue Crop-Top', 899, 60, 'female', 'crop-top', 'xxl', '../img/616Ufm3iJTL._SY550_.jpg'),
(44, 'Red Fashion Crop-Top', 699, 40, 'female', 'crop-top', 'xl', '../img/images (11).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(20) NOT NULL,
  `name` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `password`) VALUES
(1, 'dishen', '6844'),
(2, 'dishen', '6844');

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `buyer_id` int(11) NOT NULL,
  `buyer_name` varchar(200) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `b_address` varchar(100) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`buyer_id`, `buyer_name`, `mobileno`, `b_address`, `status`) VALUES
(46, 'dishen', 8849792324, 'Near Post Office Bajarangpur, Jamnager 361130', 1),
(47, 'dishen', 8849792324, 'Near Shiv Hostel,Munjka RAJKOT,36005', 0),
(48, 'dishen', 8849792324, 'near saurashtra university,rajkot,36006', 1),
(49, 'Raj', 9979054300, 'Trikon bag Rajkot,36002', 2),
(50, 'Darshil', 8849260559, 'Near Ap Patel Hostel,Indira circul,Rajkot,361130', 1),
(51, 'Darshil', 8849260559, 'Near Ap Patel Hostel,Indira circul,Rajkot,361130', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cancel_orders`
--

CREATE TABLE `cancel_orders` (
  `canc_id` int(11) NOT NULL,
  `sr_number` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `canc_name` varchar(200) NOT NULL,
  `canc_price` bigint(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `qut` int(11) NOT NULL,
  `total` bigint(20) NOT NULL,
  `pay_mode` varchar(200) NOT NULL,
  `order_time` date NOT NULL,
  `canc_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cancel_orders`
--

INSERT INTO `cancel_orders` (`canc_id`, `sr_number`, `order_id`, `canc_name`, `canc_price`, `gender`, `size`, `qut`, `total`, `pay_mode`, `order_time`, `canc_time`) VALUES
(18, 5, 51, 'Black Desire T-Shirt', 200, 'male', 'medium', 1, 200, 'cod', '2024-10-09', '2024-10-09'),
(19, 8, 51, 'Black Shirt ', 750, 'female', 'medium', 1, 750, 'cod', '2024-10-09', '2024-10-09'),
(20, 16, 49, 'Formal Purple Shirt', 399, 'male', 'medium', 1, 399, 'cod', '2024-10-09', '2024-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_orders`
--

CREATE TABLE `confirm_orders` (
  `conf_id` int(11) NOT NULL,
  `sr_number` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `conf_name` varchar(200) NOT NULL,
  `conf_price` bigint(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `qut` int(11) NOT NULL,
  `total` bigint(20) NOT NULL,
  `pay_mode` varchar(20) NOT NULL,
  `order_time` date NOT NULL,
  `conf_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `confirm_orders`
--

INSERT INTO `confirm_orders` (`conf_id`, `sr_number`, `order_id`, `conf_name`, `conf_price`, `gender`, `size`, `qut`, `total`, `pay_mode`, `order_time`, `conf_time`) VALUES
(37, 31, 46, 'Black Hot Jacket', 999, 'female', 'large', 2, 1998, 'cod', '2024-10-08', '2024-10-08'),
(38, 17, 46, 'Lather Shirt', 699, 'male', 'xl', 2, 1398, 'cod', '2024-10-08', '2024-10-08'),
(39, 8, 48, 'Black Shirt ', 750, 'female', 'medium', 2, 1500, 'cod', '2024-10-08', '2024-10-09'),
(40, 32, 48, 'White Formal Shirt', 349, 'female', 'large', 2, 698, 'cod', '2024-10-08', '2024-10-09'),
(41, 18, 48, 'Fit Black Pant', 299, 'male', 'large', 2, 598, 'cod', '2024-10-08', '2024-10-09'),
(42, 21, 50, 'Denim Fastrack Jacket', 999, 'male', 'large', 1, 999, 'cod', '2024-10-09', '2024-10-09'),
(43, 22, 50, 'D & G  Lather Jacket', 899, 'male', 'large', 1, 899, 'cod', '2024-10-09', '2024-10-09'),
(44, 23, 50, 'White Denim Jacket', 1199, 'male', 'xl', 1, 1199, 'cod', '2024-10-09', '2024-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `number` bigint(10) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `number`, `feedback`) VALUES
(9, 'Raj', 9979054300, 'Your Site is so good it provide better cloth compair to other site '),
(10, 'Darshil', 8849260559, 'I can buy every time some cloth from this site .'),
(11, 'Darshil', 9979054300, 'Your service is greater then amazon in cloth side'),
(12, 'Ankur', 9849260559, 'Your Support System is very Good'),
(14, 'Jaydev', 9658620354, 'I can buy every time some cloth from this site ,it\'s provide very good service then other site.'),
(15, 'Rutvik', 9972536541, 'Your clotyh quality is much better,it\'s provide very good service then other site.'),
(17, 'Jeet', 6355080380, 'Your Site provide me more than 10 cloth but it all can look like new.'),
(18, 'Jay', 6436080380, 'Your Site provide me all type of cloth in cheap price'),
(19, 'Sumit', 9979063580, 'Your Site provide me high brand clothes in less cost and help me to save my money.'),
(21, 'dishen', 8849792324, 'this is best site\r\n\r\n'),
(22, 'dishen', 8849792324, 'AJSHAJDHLAWKJ\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `sr_number` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(200) NOT NULL,
  `prod_price` bigint(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `prod_qut` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `pay_mode` varchar(40) NOT NULL,
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`sr_number`, `prod_id`, `prod_name`, `prod_price`, `gender`, `size`, `prod_qut`, `total`, `pay_mode`, `date`) VALUES
(1, 47, 'Lovender T-Shirt', 800, 'male', 'large', 1, 800, 'cod', '2024-10-08'),
(30, 47, 'Color Like Jacket', 699, 'female', 'xl', 1, 699, 'cod', '2024-10-08'),
(5, 47, 'Black Desire T-Shirt', 200, 'male', 'medium', 1, 200, 'cod', '2024-10-08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `number` bigint(10) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `number`, `password`) VALUES
(3, 'dishen', 8849792324, '10'),
(4, 'Raj', 9979054300, '20'),
(5, 'Darshil', 8849260559, '6844'),
(6, 'Jaydev', 9904260559, '2023'),
(7, 'Ankur', 2683241689, '2024'),
(8, 'Jay', 6355080380, '106844'),
(9, 'Rutvik', 2663521326, '30'),
(10, 'Sumit', 6824536922, '6040'),
(11, 'Ashish', 6589322625, '30'),
(12, 'Harshit', 9978060540, '9897'),
(13, 'Jeet', 9234568878, '4060');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`buyer_id`);

--
-- Indexes for table `cancel_orders`
--
ALTER TABLE `cancel_orders`
  ADD PRIMARY KEY (`canc_id`);

--
-- Indexes for table `confirm_orders`
--
ALTER TABLE `confirm_orders`
  ADD PRIMARY KEY (`conf_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `buyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `cancel_orders`
--
ALTER TABLE `cancel_orders`
  MODIFY `canc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `confirm_orders`
--
ALTER TABLE `confirm_orders`
  MODIFY `conf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
