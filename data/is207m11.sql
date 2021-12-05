-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 03:01 PM
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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `Id` int(11) NOT NULL,
  `ImgUrl` text NOT NULL,
  `IsAvatar` int(1) NOT NULL,
  `UserId` int(21) NOT NULL,
  `StoreId` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`Id`, `ImgUrl`, `IsAvatar`, `UserId`, `StoreId`) VALUES
(1, 'IMG-61a8175c70acc9.41297053.jpg', 1, 174, 0),
(2, 'IMG-61a81af5bc5f00.57670413.jpg', 1, 174, 0),
(3, 'IMG-61a822139de016.71252339.png', 1, 174, 0),
(4, 'IMG-61a8b186773a36.57287201.jpg', 1, 176, 0),
(5, 'IMG-61a8b973e39289.44800371.jpg', 1, 176, 0);

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `Id` int(21) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `ParentId` int(21) NOT NULL,
  `Icon` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`Id`, `Name`, `ParentId`, `Icon`, `Description`) VALUES
(1, 'Trái cây', 0, '', ''),
(2, 'Đặc sản vùng miền', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `productimgs`
--

CREATE TABLE `productimgs` (
  `Id` int(11) NOT NULL,
  `StoreId` int(21) NOT NULL,
  `ImgUrl` varchar(255) NOT NULL,
  `IsMainProductImg` int(1) NOT NULL,
  `ProductId` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productimgs`
--

INSERT INTO `productimgs` (`Id`, `StoreId`, `ImgUrl`, `IsMainProductImg`, `ProductId`) VALUES
(76, 29, 'IMG-61ab465a20fef0.88117662.jpg', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(21) NOT NULL,
  `ProductStatusId` int(21) NOT NULL,
  `ProductUnitId` int(11) NOT NULL,
  `ProductUnitName` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `DatePublic` timestamp NOT NULL DEFAULT current_timestamp(),
  `VendorId` int(21) NOT NULL,
  `StoreName` varchar(255) NOT NULL,
  `StoreId` int(21) NOT NULL,
  `ProductCategoryId` int(21) NOT NULL,
  `ProductCategory` varchar(255) NOT NULL,
  `Img` varchar(255) NOT NULL,
  `Tags` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `ProductStatusId`, `ProductUnitId`, `ProductUnitName`, `Description`, `Name`, `Price`, `DatePublic`, `VendorId`, `StoreName`, `StoreId`, `ProductCategoryId`, `ProductCategory`, `Img`, `Tags`) VALUES
(5, 0, 1, 'Kg', 'rất min', 'Củ cải bột ngọt', 123000, '2021-12-04 03:37:15', 174, 'Sầu Riêng mình Tôi', 29, 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `productunits`
--

CREATE TABLE `productunits` (
  `Id` int(11) NOT NULL,
  `UnitName` varchar(21) NOT NULL,
  `ParentId` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productunits`
--

INSERT INTO `productunits` (`Id`, `UnitName`, `ParentId`) VALUES
(1, 'Kg', 0);

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
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `Id` int(11) NOT NULL,
  `Avatar` varchar(255) NOT NULL DEFAULT 'img/UserAvatar.png',
  `FullName` varchar(255) NOT NULL,
  `Gender` smallint(1) NOT NULL,
  `DOB` date NOT NULL,
  `UserId` int(21) NOT NULL,
  `Balance` float NOT NULL,
  `CreateStoreAt` datetime NOT NULL DEFAULT current_timestamp(),
  `StoreName` varchar(255) NOT NULL,
  `CMND` int(12) NOT NULL,
  `IdentifiedImg` varchar(255) NOT NULL,
  `Info` varchar(255) NOT NULL,
  `StoreStatus` int(1) NOT NULL,
  `StoreAdress` varchar(255) NOT NULL,
  `StorePhone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`Id`, `Avatar`, `FullName`, `Gender`, `DOB`, `UserId`, `Balance`, `CreateStoreAt`, `StoreName`, `CMND`, `IdentifiedImg`, `Info`, `StoreStatus`, `StoreAdress`, `StorePhone`) VALUES
(29, 'img/UserAvatar.png', 'Nhi huynh', 0, '2021-12-30', 174, 0, '2021-12-04 10:09:38', 'Sầu Riêng mình Tôi', 123456789, '', 'Sầu Riêng mình Tôi bán sầu riêng', 0, 'ấp 3', 888250764);

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `Id` int(11) NOT NULL,
  `RoleId` int(1) NOT NULL,
  `UserId` int(21) NOT NULL,
  `RoleName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`Id`, `RoleId`, `UserId`, `RoleName`) VALUES
(1, 1, 175, 'Admin'),
(2, 2, 174, 'Provider'),
(3, 3, 175, 'User');

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
  `StoreId` int(21) NOT NULL DEFAULT 0,
  `StoreName` varchar(255) NOT NULL,
  `Gender` int(1) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `CreateAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `IsBanned` int(1) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `IsSeller` tinyint(1) NOT NULL,
  `EmailVerified` enum('yes','no','','') NOT NULL,
  `StatusActive` tinyint(10) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Avatar` varchar(255) NOT NULL,
  `DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `UserName`, `Password`, `Email`, `UserRoleId`, `StoreId`, `StoreName`, `Gender`, `Phone`, `CreateAt`, `IsBanned`, `Address`, `IsSeller`, `EmailVerified`, `StatusActive`, `FullName`, `Avatar`, `DOB`) VALUES
(174, 'provider', '$2y$10$2mN2.FzLeSX2O870xxFJmu2EKsXJJiEzEs8ALUVjILN18FBmy8e0q', 'nhoxnhilove0010@gmail.com', 2, 174, '', 0, '', '2021-12-04 03:09:38', 0, '', 0, 'no', 0, '', '', NULL),
(175, 'admin', '$2y$10$n8DX/fKVop5kEiyxxEIRqurh7TO3iWDxCohuf3IvPzW5H4fkefg.q', 'nhoxnhilove0011@gmail.com', 1, 1, '', 0, '', '2021-12-02 13:13:50', 0, '', 0, 'no', 0, '', '', NULL),
(176, 'user', '$2y$10$Q4RxPVr2mycrAIGtanCDp.pMRr81hPdfrLfanxvGkVfcM.kgdXwLe', 'nhoxnhilove0012@gmail.com', 3, 0, '', 0, '', '2021-12-02 14:22:14', 0, '', 0, 'no', 0, '', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `productimgs`
--
ALTER TABLE `productimgs`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `StoreId` (`StoreId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ProductCategoryId` (`ProductCategoryId`),
  ADD KEY `StoreId` (`StoreId`),
  ADD KEY `VendorId` (`VendorId`),
  ADD KEY `ProductUnitId` (`ProductUnitId`);

--
-- Indexes for table `productunits`
--
ALTER TABLE `productunits`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserRoleId` (`UserRoleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `Id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `productimgs`
--
ALTER TABLE `productimgs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `productunits`
--
ALTER TABLE `productunits`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`Id`);

--
-- Constraints for table `productimgs`
--
ALTER TABLE `productimgs`
  ADD CONSTRAINT `productimgs_ibfk_1` FOREIGN KEY (`StoreId`) REFERENCES `stores` (`Id`),
  ADD CONSTRAINT `productimgs_ibfk_2` FOREIGN KEY (`ProductId`) REFERENCES `products` (`Id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`ProductCategoryId`) REFERENCES `productcategory` (`Id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`StoreId`) REFERENCES `stores` (`Id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`VendorId`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `products_ibfk_4` FOREIGN KEY (`ProductUnitId`) REFERENCES `productunits` (`Id`);

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`Id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`UserRoleId`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
