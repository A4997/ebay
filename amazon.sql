-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 11:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amazon`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brandid` int(11) NOT NULL,
  `brandname` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brandid`, `brandname`) VALUES
(1, 'Samsung'),
(2, 'Lenovo');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catid` int(11) NOT NULL,
  `catname` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catid`, `catname`) VALUES
(1, 'Smart Phone'),
(2, 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `cityid` int(11) NOT NULL,
  `cityname` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cityid`, `cityname`) VALUES
(1, 'Cairo'),
(2, 'Alex'),
(3, 'Hurghada'),
(4, 'Aswan'),
(5, 'Suhag');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cid` int(11) NOT NULL COMMENT 'Customer ID',
  `cname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cphone` varchar(12) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Customer Phone',
  `caddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cemail` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ccityid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cid`, `cname`, `cphone`, `caddress`, `cemail`, `ccityid`) VALUES
(2, 'Bassam Ashraf', '01023456789', 'El-Dokki', 'bassam@yahoo.com', 1),
(6, 'Hassan Ali', '01234567', 'Semoha', 'hassan@gmail.com', 2),
(7, 'Khalid Hassan', '0111234567', 'El-Dokki', 'khalid@yahoo.com', 1),
(10, 'Mostafa Hamdy', '010215487', 'El-Maadi', 'mostafa@gmail.com', 1),
(11, 'Mahmoud Hassan', '0233113311', 'El-Maadi', 'mahmoud@gmail.com', 1),
(14, 'Hazem Ali Mohamed', '0121234567', 'El-Maadi', 'hazem@gmail.com', 1),
(15, 'Hany Ahmed', '0101234567', 'Miami', 'hany@yahoo.com', 1),
(18, 'Aya Ashraf', '01143670419', 'EL-Dokki', 'a@gmail.com', 1),
(19, 'Alaa Ashraf', '01023456789', 'El-Haram', 'alaaa@yahoo.com', 1),
(20, 'Nour Karim', '011448941284', 'EL-Mohandseen', 'n@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoiceproducts`
--

CREATE TABLE `invoiceproducts` (
  `ipid` int(11) NOT NULL COMMENT 'InvoiceProduct ID',
  `invid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pprice` float NOT NULL,
  `pquantity` int(11) NOT NULL,
  `ptotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `invid` int(11) NOT NULL,
  `invdate` date NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `modelid` int(11) NOT NULL,
  `modelname` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`modelid`, `modelname`) VALUES
(1, 'Plus'),
(2, 'Max');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `pname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pstock` int(11) NOT NULL,
  `pcolor` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pcost` float NOT NULL,
  `pprice` float NOT NULL,
  `catid` int(11) NOT NULL,
  `modelid` int(11) NOT NULL,
  `brandid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pstock`, `pcolor`, `pcost`, `pprice`, `catid`, `modelid`, `brandid`) VALUES
(3, 'Device 2', 5, 'blue', 50000, 60000, 1, 1, 1),
(4, 'Device 3', 6, 'green', 25000, 25550, 2, 2, 2),
(5, 'Device 5 ', 1, 'yellow', 45600, 45800, 1, 2, 1),
(6, 'Device 6', 2, 'Black', 2550, 2800, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brandid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`cityid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `ccityid` (`ccityid`);

--
-- Indexes for table `invoiceproducts`
--
ALTER TABLE `invoiceproducts`
  ADD PRIMARY KEY (`ipid`),
  ADD KEY `invid` (`invid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`modelid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `catid` (`catid`,`modelid`,`brandid`),
  ADD KEY `brandid` (`brandid`),
  ADD KEY `modelid` (`modelid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brandid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `cityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Customer ID', AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `invoiceproducts`
--
ALTER TABLE `invoiceproducts`
  MODIFY `ipid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'InvoiceProduct ID';

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `modelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`ccityid`) REFERENCES `cities` (`cityid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoiceproducts`
--
ALTER TABLE `invoiceproducts`
  ADD CONSTRAINT `invoiceproducts_ibfk_1` FOREIGN KEY (`invid`) REFERENCES `invoices` (`invid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoiceproducts_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `products` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customers` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brandid`) REFERENCES `brands` (`brandid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`catid`) REFERENCES `categories` (`catid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`modelid`) REFERENCES `models` (`modelid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
