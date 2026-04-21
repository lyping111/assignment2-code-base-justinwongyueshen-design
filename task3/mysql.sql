-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2026 at 10:25 AM
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
-- Database: `2_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `project2`
--

CREATE TABLE `project2` (
  `id` int(11) NOT NULL,
  `Receiving Date` date NOT NULL,
  `Tracking Number` varchar(50) NOT NULL,
  `Product Name` varchar(50) NOT NULL,
  `CBM` decimal(10,2) NOT NULL,
  `Weight` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Indexes for dumped tables
--
UPDATE `project2` SET `id` = UUID() WHERE `id` = '';

delete from `project2` where `id` is null;

alter table `project2` modify `id` varchar(30) not null;
  add column abc varchar(30) not null;

alter table `project2` drop column abc;
  drop table `project2`;
--
-- Indexes for table `project2`
--
ALTER TABLE `project2`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
