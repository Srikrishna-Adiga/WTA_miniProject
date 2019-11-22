-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 04:12 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bikerentalsk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`) VALUES
(1, 'admin', 'Bike&Roll');

-- --------------------------------------------------------

--
-- Table structure for table `bikes`
--

CREATE TABLE `bikes` (
  `bid` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bikes`
--

INSERT INTO `bikes` (`bid`, `name`, `rate`) VALUES
(1, 'KTM', 10),
(2, 'royal_enfield', 10),
(3, 'r15', 10),
(4, 'pulsar220', 10),
(5, 'gixxer', 7),
(6, 'gsx', 7),
(7, 'fz', 7),
(8, 'unicorn', 7),
(9, 'dio', 5),
(10, 'vespa', 5),
(11, 'activa', 5),
(12, 'access', 5);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `uid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `uname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`uid`, `bid`, `uname`) VALUES
(16, 1, 'Srikrishna Adiga'),
(16, 1, 'Srikrishna Adiga'),
(16, 2, 'Srikrishna Adiga'),
(16, 3, 'Srikrishna Adiga'),
(16, 4, 'Srikrishna Adiga'),
(16, 5, 'Srikrishna Adiga'),
(16, 6, 'Srikrishna Adiga'),
(16, 9, 'Srikrishna Adiga'),
(16, 10, 'Srikrishna Adiga'),
(16, 11, 'Srikrishna Adiga'),
(16, 12, 'Srikrishna Adiga'),
(16, 5, 'Srikrishna Adiga'),
(16, 1, 'Srikrishna Adiga');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `PhNo` int(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FullName`, `PhNo`, `Email`, `Password`) VALUES
(16, 'Srikrishna Adiga', 2147483647, 'skashrith@gmail.com', '$2y$10$6/WLjHUFERtE9iespdNcj.yNoAkTPtP9esq.iDwFPTKkPUHXHXrg2'),
(17, 'Prajwal', 2147483647, 'prajwalrambr@gmail.com', '$2y$10$440cDnOMaRFpR8l43EyMZ.w9jQb1APoziiCAYyuOSME9Hs75VUkmG'),
(18, 'Shashi', 2147483647, 'shashi@gmail.com', '$2y$10$8nKMHcP2cVYpoxJINGAt6uzTx.DyLh8OIdHc4eyD32TvajxEHQP7y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bikes`
--
ALTER TABLE `bikes`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bikes`
--
ALTER TABLE `bikes`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
