-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 12:49 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(30) NOT NULL,
  `admin_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_password`) VALUES
('admin@login', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `email` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone_no` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email`, `password`, `address`, `name`, `phone_no`) VALUES
('1001@gmail.com', '1234', 'adress', 'trial', '1234567890'),
('aman@gmail.com', '1241', 'indore', 'aman', '2147483647'),
('amay@gmail.com', '1231', 'indore', 'amay', '2147483647'),
('golu@golu.com', '4321', 'patna', 'golu kumar', '7856456'),
('mahak@gmail.com', 'mahak123', 'indore', 'mahak', '9109283872'),
('muskan@gmail.com', '1512', 'indore', 'muskan', '903939087'),
('name@name.c', '675', 'mokanam', 'name', '8768'),
('sandy@sandy.com', '987', 'mp', 'sandy', '76567'),
('saurav@gmail.com', '0', 'calicut', 'saurav', '9987');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `dish_name` text NOT NULL,
  `price` int(5) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `dish_name`, `price`, `description`, `quantity`) VALUES
(1, 'Paneer Tikka', 250, '', 0),
(2, 'Noodles', 180, '', 0),
(3, 'Chilli Pnaeer', 200, '', 0),
(4, 'Veg LollyPop', 150, '', 0),
(5, 'Hot & Sour Soup', 100, '', 0),
(6, 'Paneer Makhani', 250, '', 0),
(7, 'Sev Tamatar', 200, '', 0),
(8, 'Gobi Masala', 180, '', 0),
(9, 'Chana Masala', 180, '', 0),
(10, 'Kaju Paneer', 300, '', 0),
(11, 'Tandoori Roti', 20, '', 0),
(12, 'Naan', 30, '', 0),
(13, 'Porotta', 25, '', 0),
(14, 'Tawa Roti', 15, '', 0),
(15, 'Garlic Naan', 35, '', 0),
(16, 'Plain Rice', 150, '', 0),
(17, 'Biryani', 280, '', 0),
(18, 'Pyssum', 50, '', 0),
(19, 'Gulab Jamun', 50, '', 0),
(20, 'Rasmalai', 50, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `order_date` date NOT NULL,
  `quantity` int(3) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(4) NOT NULL,
  `res_date` date NOT NULL,
  `email` varchar(25) NOT NULL,
  `res_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `no_of_people` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `table_id` int(2) NOT NULL,
  `free` tinyint(1) NOT NULL,
  `occupied` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_id` (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`table_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
