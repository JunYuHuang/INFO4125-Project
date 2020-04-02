-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 08:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET
  AUTOCOMMIT = 0;

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `webdevgp6`
--
-- --------------------------------------------------------
--
-- Table structure for table `customer_info`
--
CREATE TABLE `customer_info` (
  `fname` varchar(128) NOT NULL,
  `lname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phoNo` varchar(12) NOT NULL,
  `country` varchar(56) NOT NULL,
  `postalCode` varchar(6) NOT NULL,
  `street` varchar(128) NOT NULL,
  `unit` varchar(10) NOT NULL,
  `city` varchar(128) NOT NULL,
  `province` varchar(2) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `customer_info`
--
INSERT INTO
  `customer_info` (
    `fname`,
    `lname`,
    `email`,
    `phoNo`,
    `country`,
    `postalCode`,
    `street`,
    `unit`,
    `city`,
    `province`
  )
VALUES
  (
    'John',
    'Smith',
    'john.smith@example.com',
    '123-568-7890',
    'Canada',
    'V7E3P4',
    'Elm Street',
    '5100',
    'Surrey',
    'BC'
  );

-- --------------------------------------------------------
--
-- Table structure for table `inventory`
--
CREATE TABLE `inventory` (
  `pen_id` int(15) NOT NULL,
  `name` varchar(128) NOT NULL,
  `ink_color` varchar(128) NOT NULL,
  `size` varchar(7) NOT NULL DEFAULT '1.0mm',
  `price` varchar(8) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Dumping data for table `inventory`
--
INSERT INTO
  `inventory` (`pen_id`, `name`, `ink_color`, `size`, `price`)
VALUES
  (1, 'InkJoy Gel', 'Purple', '0.7mm', '2.49'),
  (2, 'InkJoy Gel', 'Green', '0.7mm', '2.49'),
  (3, 'Ballpoint Pen', 'Blue', '1.0mm', '4.99'),
  (4, 'Marker Pen', 'Black', '1.0mm', '4.99'),
  (5, 'Gel Pen', 'Black', '1.0mm', '1.99'),
  (6, 'Retractable Pen', 'Black', '0.5mm', '1.99'),
  (7, 'Stylus Pen', 'Black', '1.0mm', '14.99');

--
-- Indexes for dumped tables
--
--
-- Indexes for table `inventory`
--
ALTER TABLE
  `inventory`
ADD
  PRIMARY KEY (`pen_id`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;