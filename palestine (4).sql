-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 09:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `palestine`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookpackge`
--

CREATE TABLE `bookpackge` (
  `autopackge` int(11) NOT NULL,
  `idmem` int(10) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookpackge`
--

INSERT INTO `bookpackge` (`autopackge`, `idmem`, `code`) VALUES
(58, 1224025400, 5),
(59, 1224025400, 1),
(60, 1224025400, 4);

-- --------------------------------------------------------

--
-- Table structure for table `dalel`
--

CREATE TABLE `dalel` (
  `idd` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `salary` int(50) NOT NULL,
  `languge` varchar(256) NOT NULL,
  `phone` int(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `photo` text NOT NULL,
  `bd` date NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dalel`
--

INSERT INTO `dalel` (`idd`, `fname`, `lname`, `salary`, `languge`, `phone`, `city`, `photo`, `bd`, `password`) VALUES
(1, 'Ahmad', 'abood', 5000, 'English', 1234567890, 'New York', 'ahmad.png', '1990-01-01', '1234'),
(2, 'mohammad', 'rami', 6000, 'Spanish', 2147483647, 'Los Angeles', 'mohammad.png', '1995-02-14', '5678'),
(3, 'ali', 'saleem', 7000, 'French', 2147483647, 'Paris', 'ali.jpg', '1985-03-15', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` bigint(12) NOT NULL,
  `Photo` varchar(1042) NOT NULL,
  `idmem` int(10) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `city` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`name`, `password`, `Email`, `Phone`, `Photo`, `idmem`, `user_type`, `city`) VALUES
('abood', '123654', 'abooood.1662004@gmail.com', 599754433, 'abood.png', 1224025400, 'user', ''),
('ahmad', '12345', 'ahmad@gmail.com', 599754433, 'ahmad.png', 599754433, 'user', ''),
('Areej', '123654', 'Areej@gmail.com', 599754433, 'Areej.png', 1202587400, 'admin', ''),
('Baraa', 'c12hh', 'baraa.2242002@gmail.com', 599754433, 'baraa.png', 1202816900, 'admin', ''),
('tala', '123', 'Tala@Gmail.Com', 599754433, 'oing.png', 1202817733, 'user', '');

-- --------------------------------------------------------

--
-- Table structure for table `tourpackage`
--

CREATE TABLE `tourpackage` (
  `code` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'cultural',
  `city` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `info` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tourpackage`
--

INSERT INTO `tourpackage` (`code`, `name`, `type`, `city`, `price`, `info`, `photo`) VALUES
(1, 'Bani N’aim ', 'cultural', 'jerusalem', 300, 'Walking Distance: Approximately 7 km\r\nWalking Time: Approximately 2 hours', 'bani.jpg'),
(2, 'Hassasa ', 'cultural', 'Bethlehem', 500, 'Walking Distance: Approximately 22 km\nWalking Time: Approximately 5 – 8 hours\nDifficulty: Moderate', 'HASSASA.jpg'),
(3, 'Ain Samia ', 'cultural', 'Jericho', 500, 'Walking Distance: Approximately 11 km\r\nWalking Time: Approximately 4 – 5 hours\r\nDifficulty: Difficult', 'samia.jpg'),
(4, ' Haifa Sore ', 'Fun', 'Haifa', 115, 'Port pickup and drop-off\r\nProfessional driver-guide\r\nTransport by air-conditioned minivan\r\nViator\'s worry-free guarantee', 'Haifasore.jpg'),
(5, 'Alquds Sore', 'cultural', 'jerusalem', 125, 'experience palestine\'s historic sites then explore a bustling Arab bazaar', 'jerosalem.jpg'),
(6, 'old city', 'Full', 'Nablus', 300, 'this is nice place to see', 'login.jpg'),
(7, 'ibrahime', 'cultural', 'hepron', 200, 'nice place to visit', 'login.jpg'),
(8, 'al qalt', 'Half', 'jereco', 200, 'hapy', 'home-slide-3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookpackge`
--
ALTER TABLE `bookpackge`
  ADD PRIMARY KEY (`autopackge`),
  ADD KEY `bookpackge_ibfk_1` (`code`);

--
-- Indexes for table `dalel`
--
ALTER TABLE `dalel`
  ADD PRIMARY KEY (`idd`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Email`,`idmem`);

--
-- Indexes for table `tourpackage`
--
ALTER TABLE `tourpackage`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookpackge`
--
ALTER TABLE `bookpackge`
  MODIFY `autopackge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tourpackage`
--
ALTER TABLE `tourpackage`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookpackge`
--
ALTER TABLE `bookpackge`
  ADD CONSTRAINT `bookpackge_ibfk_1` FOREIGN KEY (`code`) REFERENCES `tourpackage` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
