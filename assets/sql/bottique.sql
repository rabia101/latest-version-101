-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 17, 2019 at 11:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bottique`
--

-- --------------------------------------------------------

--
-- Table structure for table `bottiqueowner`
--

CREATE TABLE `bottiqueowner` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `cnic` varchar(13) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `phoneno` int(12) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bottiqueowner`
--

INSERT INTO `bottiqueowner` (`id`, `name`, `cnic`, `address`, `phoneno`, `image`) VALUES
(2, 'botique 1', '44', '544', 64, 'candidate_images/Jellyfish-jpg.jpg'),
(3, 'botique 2', '4', '5', 6, 'candidate_images/Tulips-jpg.jpg'),
(4, 'rabia', '345345', 'fgfdgdfg', 0, 'candidate_images/Penguins-jpg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `boutique_order`
--

CREATE TABLE `boutique_order` (
  `orderid` int(11) NOT NULL,
  `bo_id` int(11) DEFAULT NULL,
  `customerid` int(12) DEFAULT NULL,
  `amount` varchar(250) DEFAULT NULL,
  `date` varchar(345) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boutique_order`
--

INSERT INTO `boutique_order` (`orderid`, `bo_id`, `customerid`, `amount`, `date`, `status`) VALUES
(1, 101, 123, '20', '5', '6');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_type` enum('seller','admin') NOT NULL DEFAULT 'seller'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `image`, `user_id`, `user_type`) VALUES
(1, 'rabia ka bhalo', 'candidate_images/Hydrangeas-jpg.jpg', NULL, 'seller'),
(2, 'rsfdfgg', NULL, NULL, 'seller'),
(3, 'Lawn', NULL, 1259, 'seller'),
(4, 'Radimate', NULL, 1260, 'seller'),
(5, 'Jeans', NULL, 1259, 'seller'),
(6, 'Radimate', NULL, 1259, 'seller');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(250) DEFAULT NULL,
  `cnic` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `mobile_number` varchar(12) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(11) DEFAULT NULL,
  `image` varchar(345) DEFAULT NULL,
  `type` enum('user','seller','admin') NOT NULL DEFAULT 'user',
  `city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_name`, `cnic`, `address`, `mobile_number`, `email`, `password`, `image`, `type`, `city`) VALUES
(1253, 'rabia is beautiful', '31202-70111746-4', '189/f', '03009687669', 'rabia100789@gmail.com', '03057799830', 'candidate_images/Chrysanthemum-jpg.jpg', 'user', NULL),
(1259, 'Musawer ALi', '3120269441941', 'pak jali house, Near Shama Canima Multan Road Bahawalpur', '+92333651351', 'pakjalihouse@yahoo.com', 'admin123', '36252369.jpeg', 'seller', 'Bahawalpur'),
(1260, 'Ch Musawer', '3120269441941', 'pak jali house, Near Shama Canima Multan Road Bahawalpur', '+92333651351', 'pakjalihouse@gmail.com', 'admin123', '79c2689a332e9946ade72debd15b45eb.jpg', 'seller', 'Bahawalpur');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `name`, `password`, `email`) VALUES
(12, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `orderid` int(11) DEFAULT NULL,
  `productid` int(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `totalprice` int(11) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `orderid`, `productid`, `quantity`, `totalprice`, `image`) VALUES
(2, 21111, 34, 35, 36, 'candidate_images/Tulips-jpg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productname` varchar(250) NOT NULL,
  `bo_id` int(11) DEFAULT NULL,
  `description` varchar(250) NOT NULL,
  `Color` varchar(250) NOT NULL,
  `uniteprice` varchar(12) DEFAULT NULL,
  `catagoryid` varchar(150) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `bo_id`, `description`, `Color`, `uniteprice`, `catagoryid`, `image`) VALUES
(129, 'product 1', 3, 'JFAL', 'pink', '90', 'hif', 'candidate_images/Lighthouse-jpg.jpg'),
(130, 'twyqr', 2, 'nfnkngk', 'pink', '6584', '122', 'candidate_images/Desert-jpg.jpg'),
(131, 'gughiWH', 123, 'NKNVxlbk', 'MNKVN', '781', '658', 'candidate_images/Tulips-jpg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receiptid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `orderid` varchar(250) DEFAULT NULL,
  `due-date` varchar(250) DEFAULT NULL,
  `issudate` varchar(12) DEFAULT NULL,
  `totalamount` varchar(50) DEFAULT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`receiptid`, `customerid`, `orderid`, `due-date`, `issudate`, `totalamount`, `image`) VALUES
(8, 0, '', '', '', '', 'candidate_images/Chrysanthemum-jpg.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bottiqueowner`
--
ALTER TABLE `bottiqueowner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boutique_order`
--
ALTER TABLE `boutique_order`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receiptid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bottiqueowner`
--
ALTER TABLE `bottiqueowner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `boutique_order`
--
ALTER TABLE `boutique_order`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1261;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receiptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
