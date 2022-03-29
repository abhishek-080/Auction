-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 02:21 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bidding`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `contact` varchar(20) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `cpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fname`, `email`, `uname`, `contact`, `password`, `cpassword`) VALUES
(10, 'admin', 'admin@gmail.com', 'admin', '1111111', '$2y$10$/OGqrK.MlkMJJjILS6oFee3tpil8IoYXhWAYOGrRmOzvaCPr0eEmm', '$2y$10$w0HRq6TT12GRZotCU9Uh0e2pOZwl3XYlrSF2zEC7XUT'),
(11, 'abhishek', 'abhishek@gmail.com', 'abhishek8', '987277277', '$2y$10$dK9MVudcbdagOlAYCwHSousDNpyl05mZE13Dlq.PN3fFM./jtyzPO', '$2y$10$UjOzWEEOSCFDBC9qx7drPOGV4rMxSMUU/1MPZSSN3Op');

-- --------------------------------------------------------

--
-- Table structure for table `bidre`
--

CREATE TABLE `bidre` (
  `id` int(11) NOT NULL,
  `bidprice` int(20) NOT NULL,
  `u_id` int(20) NOT NULL,
  `pid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidre`
--

INSERT INTO `bidre` (`id`, `bidprice`, `u_id`, `pid`) VALUES
(1, 0, 0, 0),
(2, 1212, 0, 0),
(3, 1212, 10, 0),
(4, 3333, 10, 7),
(5, 565655, 10, 7),
(6, 6666, 10, 42),
(7, 8888, 10, 45),
(8, 7777, 10, 32),
(9, 1222121, 10, 35),
(10, 3333, 10, 42),
(11, 111111, 10, 42),
(12, 26565656, 10, 42),
(13, 9999, 11, 45),
(14, 11111111, 10, 7),
(15, 2147483647, 10, 7),
(16, 300000, 10, 35),
(17, 100000, 10, 35),
(18, 500000, 10, 35),
(19, 44444445, 10, 35),
(20, 55555555, 10, 35),
(21, 666666666, 10, 35),
(22, 3333333, 10, 23);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `contact` int(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `fname`, `email`, `uname`, `contact`, `password`, `cpassword`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 2147483647, '$2y$10$khljWMK3M8IGFQjjea8TFON.oJGEHa8ezya9XbrT6/U', '$2y$10$OZJGajgXGxl37Mkm6nWTpe4eZPEC7/fDvxOt5Kct0cq'),
(2, 'ram', 'ram@gmail.com', 'ram1122', 1515151, '$2y$10$oh4o/J0H2v8YPOw8ODRKGOVcsgY/lL.5gaYvJRmX4KF', '$2y$10$DY9C8Z.CwM8lrFmG6vPGx.yx.8ueuNBD8tn4kUXINiL'),
(3, 'abhi', 'abhi22@gmail.com', 'abhi', 1111, '$2y$10$KN38ABbiT6I2HHPp8mVG4uxZkFR1fR0GCSRa6fdp8S8', '$2y$10$bqsa4LLBhW4mgBt0/toqkunX7MkxTwH6v0bKF899geD'),
(4, 'Prabin', 'prabin@gmail.com', 'prabin12', 987654321, '$2y$10$dC3aV0HWqjGTVz12r/0n9uBd.or3CU6wBlvkeYW8/cH', '$2y$10$Gl1sgWgFJf02C41d7.OmB.oOwntO1AuuJtLLIxjBpbf');

-- --------------------------------------------------------

--
-- Table structure for table `cl_addl`
--

CREATE TABLE `cl_addl` (
  `id` int(5) NOT NULL,
  `category` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `start` int(20) NOT NULL,
  `actual` int(20) NOT NULL,
  `sdate` date NOT NULL,
  `stime` time(6) NOT NULL,
  `edate` date NOT NULL,
  `etime` time(6) NOT NULL,
  `u_id` int(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `duration` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cl_addl`
--

INSERT INTO `cl_addl` (`id`, `category`, `name`, `description`, `image`, `start`, `actual`, `sdate`, `stime`, `edate`, `etime`, `u_id`, `status`, `duration`) VALUES
(7, 'Furniture', 'table', ' dsdsdsdsds', '62309e0a6efdf5.10403365.jpg', 1111, 1212121, '1111-11-11', '11:11:00.000000', '1111-11-11', '14:22:00.000000', 0, '', ''),
(9, 'Musical instruments', '111', ' dsdsd', '62309e9f9d6768.89934909.jpg', 332, 333, '2022-03-23', '19:57:00.000000', '2022-03-22', '19:58:00.000000', 0, '', ''),
(10, 'Jewelery', 'jeweleryyyyy', ' fdfdfdfdfddf', '6230a6eaeee0e2.16888314.jpg', 12121, 12121, '2121-12-21', '00:12:00.000000', '1212-12-12', '00:12:00.000000', 0, '', ''),
(11, 'Vehicles', 'suzuki car', ' fsfsfdfdfdfdf', '6230a7b0617679.45241479.jpg', 1212, 222322, '1111-11-11', '12:11:00.000000', '1211-12-12', '23:21:00.000000', 0, '', ''),
(12, 'Electronics', 'speaker', ' soeajererere', '6230a8c93995c3.38786588.jpg', 12121, 1111, '1111-11-11', '00:12:00.000000', '1212-12-12', '11:22:00.000000', 0, '', ''),
(13, 'Vehicles', 'fz 150', ' dsdsdsdsdsdsdsdsd', '62318a8b7e3055.90382850.jpg', 122222, 199999, '2112-11-21', '00:12:00.000000', '1222-12-12', '14:22:00.000000', 0, 'approved', ''),
(21, 'Furniture', 'Dining Table', ' Dining Table', '62367381ab7be4.73789379.jpg', 14000, 18000, '2022-03-27', '06:08:00.000000', '2022-03-29', '06:11:00.000000', 10, 'approved', ''),
(22, 'Vehicles', 'Avenger Bike', ' Avenger bike on sale', '623673bcc08a41.10093837.jpg', 12121, 111111, '2022-03-29', '11:07:00.000000', '2022-03-27', '09:07:00.000000', 10, 'approved', ''),
(23, 'Electronics', 'Speaker', ' Speaker on sale', '623673f53e00b2.84691840.jpg', 14444, 16666, '2022-03-27', '11:08:00.000000', '2022-04-06', '06:13:00.000000', 10, 'approved', ''),
(24, 'Vehicles', 'Suzuki Car', 'Car on Ssale', '623674315f32a6.03485175.jpg', 111111, 1111111, '2022-03-20', '06:10:00.000000', '2022-03-27', '06:13:00.000000', 10, 'approved', ''),
(25, 'Furniture', 'dining table', ' 2nd hand dining table. Yesma Khana khaney ho yo sarai ramro xa', '6236b00e8ecd81.55312209.jpg', 1000, 3000, '2022-03-20', '11:00:00.000000', '2022-03-25', '22:24:00.000000', 11, 'pending', ''),
(26, 'Electronics', 'Samsung galaxy note 10', ' Samsung galaxy note 10', '6236b1c565e524.30873081.jpg', 60000, 100000, '2022-03-20', '10:31:00.000000', '2022-03-25', '22:31:00.000000', 11, 'pending', ''),
(27, 'Musical instruments', 'flute', ' flute is a musical instrument', '6236b212b8d4e3.16005766.jpg', 1000, 3000, '2022-03-20', '10:32:00.000000', '2022-03-24', '22:33:00.000000', 11, 'pending', ''),
(28, 'Books', 'the Alchemist', 'A world famous book about a shepheard', '6236b278268675.39632068.jpg', 200, 500, '2022-03-20', '10:34:00.000000', '2022-03-23', '22:34:00.000000', 11, 'pending', ''),
(29, 'Vehicles', 'Jeep Compas', ' It a SUV', '6236b2d5bb8358.96935312.jpg', 7000000, 9000000, '2022-03-20', '10:36:00.000000', '2022-03-26', '22:36:00.000000', 11, 'pending', ''),
(30, 'Beauty', 'Niacinamide serum', ' The Ordinary Niacinamide  Serum ', '6236b315e0e330.34259368.jpg', 1500, 1900, '2022-03-20', '10:37:00.000000', '2022-03-29', '10:37:00.000000', 11, 'pending', ''),
(31, 'Jwellery', 'Necklace', ' Diamond Necklace made with gold', '6236b365dc1392.39204094.jpg', 400000, 600000, '2022-03-20', '10:38:00.000000', '2022-03-30', '22:38:00.000000', 11, 'pending', ''),
(32, 'others', 'Helmet', ' Bike helmet', '6236b3a536ec83.75210813.jpg', 3000, 5000, '2022-03-20', '10:39:00.000000', '2022-03-31', '22:39:00.000000', 11, 'pending', ''),
(33, 'Vehicles', 'Speaker', ' Speaker', '6236bfd5e58c12.76749714.jpg', 9000, 15000, '2022-03-21', '11:34:00.000000', '2022-03-27', '11:35:00.000000', 11, 'pending', ''),
(34, 'Toys', 'Speaker', ' aaaaaaaaaa', '6236c07c536431.92361008.jpg', 1111, 13000, '2022-03-27', '11:38:00.000000', '2022-03-21', '11:37:00.000000', 11, 'pending', ''),
(35, 'Books', 'Car', ' car car', '6236c0d58f46e7.22662486.jpg', 20000, 22000, '2022-03-14', '11:39:00.000000', '2022-03-25', '11:41:00.000000', 11, 'approved', ''),
(36, 'Musical instruments', 'Guitar', ' GUITAR GUITAR', '623c5674b3fa95.21508886.jpg', 15000, 17000, '2022-03-31', '18:15:00.000000', '2022-04-07', '17:20:00.000000', 10, 'approved', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(20) NOT NULL,
  `u_id` int(20) NOT NULL,
  `pid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `u_id`, `pid`) VALUES
(1, 10, 7),
(2, 10, 45),
(3, 10, 30),
(4, 10, 42),
(5, 10, 7),
(6, 10, 7),
(7, 10, 7),
(8, 10, 7),
(9, 10, 24),
(10, 10, 26),
(11, 10, 7),
(12, 11, 45),
(13, 10, 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bidre`
--
ALTER TABLE `bidre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cl_addl`
--
ALTER TABLE `cl_addl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bidre`
--
ALTER TABLE `bidre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cl_addl`
--
ALTER TABLE `cl_addl`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
