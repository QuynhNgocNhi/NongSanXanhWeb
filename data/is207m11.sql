-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 04:56 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `is207m11`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(21) NOT NULL,
  `ProductStatusId` int(21) NOT NULL,
  `ProductUnits` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `DatePublic` timestamp NOT NULL DEFAULT current_timestamp(),
  `VendorId` int(21) NOT NULL,
  `ProductCategoryId` int(21) NOT NULL,
  `ProductCategory` varchar(255) NOT NULL,
  `Img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(21) NOT NULL,
  `RoleName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `RoleName`) VALUES
(1, 'Admin'),
(2, 'Provider'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `Id` int(11) NOT NULL,
  `RoleId` int(1) NOT NULL,
  `UserId` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `UserRoleId` int(1) DEFAULT 3,
  `Gender` int(1) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `CreateAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `IsBanned` int(1) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `IsSeller` tinyint(1) NOT NULL,
  `EmailVerified` enum('yes','no','','') NOT NULL,
  `StatusActive` tinyint(10) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `UserName`, `Password`, `Email`, `UserRoleId`, `Gender`, `Phone`, `CreateAt`, `IsBanned`, `Address`, `IsSeller`, `EmailVerified`, `StatusActive`, `FullName`, `Avatar`) VALUES
(51, 'provider', 'provider', 'quynhngocnhi6972@gmail.com', 2, 0, '', '2021-11-26 03:18:04', 0, '', 0, 'no', 0, '', ''),
(52, 'user', 'user', 'quynhngocnhi6972@gmail.com', 3, 0, '', '2021-11-26 03:17:54', 0, '', 0, 'no', 0, '', ''),
(55, 'admin', '$2y$10$S9QdVz0eWtRW3.dQiVPpZu1e6keJaA5GVk0jzRx297xlpazeW93rG', '', 1, 0, '', '2021-11-26 03:10:16', 0, '', 0, '', 0, '', ''),
(56, 'admin', 'admin', '', 1, 0, '', '2021-11-26 03:15:46', 0, '', 0, '', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(21) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
