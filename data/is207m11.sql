-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 29, 2021 lúc 04:48 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `is207m11`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `Id` int(11) NOT NULL,
  `ImgUrl` text NOT NULL,
  `IsAvatar` int(1) NOT NULL,
  `UserId` int(21) NOT NULL,
  `StoreId` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`Id`, `ImgUrl`, `IsAvatar`, `UserId`, `StoreId`) VALUES
(1, 'IMG-61a8175c70acc9.41297053.jpg', 1, 174, 0),
(2, 'IMG-61a81af5bc5f00.57670413.jpg', 1, 174, 0),
(3, 'IMG-61a822139de016.71252339.png', 1, 174, 0),
(4, 'IMG-61a8b186773a36.57287201.jpg', 1, 176, 0),
(5, 'IMG-61a8b973e39289.44800371.jpg', 1, 176, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `Id` int(21) NOT NULL,
  `OrderId` int(21) NOT NULL,
  `UserId` int(21) NOT NULL,
  `StoreId` int(21) NOT NULL,
  `StoreName` varchar(255) NOT NULL,
  `ProductId` int(21) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductImage` varchar(255) NOT NULL,
  `Price` double NOT NULL,
  `Quantity` int(21) NOT NULL,
  `Total` double NOT NULL,
  `Note` varchar(255) NOT NULL,
  `VendorConfirm` int(1) NOT NULL,
  `OrderStatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`Id`, `OrderId`, `UserId`, `StoreId`, `StoreName`, `ProductId`, `ProductName`, `ProductImage`, `Price`, `Quantity`, `Total`, `Note`, `VendorConfirm`, `OrderStatus`) VALUES
(31, 54, 176, 29, 'Sầu Riêng mình Tôi', 25, 'Quýt Đường Mọng Nước - Túi 1kg - Kiến Vàng', 'IMG-61bbf595cd8582.01347253.jpg', 12500, 1, 12500, 'Giao xớm nha', 2, 3),
(32, 54, 176, 29, 'Sầu Riêng mình Tôi', 29, 'Me Xí Muội Vui Vẻ ', 'IMG-61bdf68a4f7bc5.82033248.jpg', 13000, 2, 26000, 'Giao xớm nha, thèm chua lắm rồi', 3, 8),
(33, 54, 176, 29, 'Sầu Riêng mình Tôi', 28, 'Sầu riêng Thái - Tươi, Hái già', 'IMG-61bd9ede5dea85.67633310.jpg', 4000000, 1, 4000000, 'Bọc kỹ kẻo shiper bị đâm trúng nha//', 2, 3),
(34, 55, 176, 29, 'Sầu Riêng mình Tôi', 24, 'Sầu riêng ri6', 'IMG-61bb4aa9149f16.08259637.jpg', 125000, 2, 250000, 'hii', 2, 2),
(35, 55, 176, 29, 'Sầu Riêng mình Tôi', 29, 'Me Xí Muội Vui Vẻ ', 'IMG-61bdf68a4f7bc5.82033248.jpg', 13000, 1, 13000, 'hii', 2, 1),
(36, 0, 176, 29, 'Sầu Riêng mình Tôi', 30, 'Đậu, ngũ cốc, các loại hạt và nhân', 'IMG-61c3ea8919f631.60697513.jpg', 15000, 1, 15000, 'hihi', 3, 8),
(37, 0, 175, 29, 'Sầu Riêng mình Tôi', 25, 'Quýt Đường Mọng Nước - Túi 1kg - Kiến Vàng', 'IMG-61bbf595cd8582.01347253.jpg', 12500, 2, 25000, '', 0, 0),
(38, 56, 175, 29, 'Sầu Riêng mình Tôi', 24, 'Sầu riêng ri6', 'IMG-61bb4aa9149f16.08259637.jpg', 125000, 1, 125000, '', 0, 0),
(39, 57, 175, 29, 'Sầu Riêng mình Tôi', 25, 'Quýt Đường Mọng Nước - Túi 1kg - Kiến Vàng', 'IMG-61bbf595cd8582.01347253.jpg', 12500, 4, 50000, '', 0, 0),
(40, 57, 175, 29, 'Sầu Riêng mình Tôi', 24, 'Sầu riêng ri6', 'IMG-61bb4aa9149f16.08259637.jpg', 125000, 1, 125000, '', 0, 0),
(41, 58, 176, 29, 'Sầu Riêng mình Tôi', 24, 'Sầu riêng ri6', 'IMG-61bb4aa9149f16.08259637.jpg', 125000, 4, 500000, '', 0, 0),
(42, 58, 176, 29, 'Sầu Riêng mình Tôi', 25, 'Quýt Đường Mọng Nước - Túi 1kg - Kiến Vàng', 'IMG-61bbf595cd8582.01347253.jpg', 12500, 4, 50000, '', 0, 0),
(43, 59, 176, 29, 'Sầu Riêng mình Tôi', 29, 'Me Xí Muội Vui Vẻ ', 'IMG-61bdf68a4f7bc5.82033248.jpg', 13000, 2, 26000, 'giao sớm giùm mình nhé', 0, 0),
(44, 59, 176, 29, 'Sầu Riêng mình Tôi', 30, 'Đậu, ngũ cốc, các loại hạt và nhân', 'IMG-61c3ea8919f631.60697513.jpg', 15000, 2, 30000, 'giao sớm giùm mình nhé', 0, 0),
(45, 59, 176, 29, 'Sầu Riêng mình Tôi', 25, 'Quýt Đường Mọng Nước - Túi 1kg - Kiến Vàng', 'IMG-61bbf595cd8582.01347253.jpg', 12500, 14, 175000, 'giao sớm giùm mình nhé', 0, 0),
(46, 59, 176, 29, 'Sầu Riêng mình Tôi', 27, 'Dừa Sọ Tươi Ngon, Ngọt Nước', 'IMG-61bd996adbf419.50053739.jpg', 890000, 2, 1780000, 'giao sớm giùm mình nhé', 0, 0),
(47, 60, 176, 29, 'Sầu Riêng mình Tôi', 25, 'Quýt Đường Mọng Nước - Túi 1kg - Kiến Vàng', 'IMG-61bbf595cd8582.01347253.jpg', 12500, 2, 25000, 'giao lẹ nha', 0, 0),
(48, 60, 176, 29, 'Sầu Riêng mình Tôi', 24, 'Sầu riêng ri6', 'IMG-61bb4aa9149f16.08259637.jpg', 125000, 1, 125000, 'giao lẹ nha', 0, 0),
(49, 60, 176, 29, 'Sầu Riêng mình Tôi', 27, 'Dừa Sọ Tươi Ngon, Ngọt Nước', 'IMG-61bd996adbf419.50053739.jpg', 890000, 2, 1780000, 'giao lẹ nha', 0, 0),
(50, 60, 176, 29, 'Sầu Riêng mình Tôi', 26, 'Ổi Nữ Hoàng Giòn Ngọt, Giàu VitaminC', 'IMG-61bbf668b81c34.38054255.jpg', 35000, 1, 35000, 'giao lẹ nha', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `Id` int(21) NOT NULL,
  `UserId` int(21) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Zip` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `OrderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `MainProductName` varchar(255) NOT NULL,
  `OrderTotal` float NOT NULL,
  `OrderStatus` varchar(255) NOT NULL,
  `OrderStatusId` int(21) NOT NULL,
  `Note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`Id`, `UserId`, `FirstName`, `LastName`, `Address`, `Zip`, `City`, `Phone`, `Email`, `OrderDate`, `MainProductName`, `OrderTotal`, `OrderStatus`, `OrderStatusId`, `Note`) VALUES
(54, 176, 'Nhi', 'huynh', '307, ap 3, xa cam son', '860000', 'tien giang', '+84888250764', 'nhoxnhilove0010@gmail.com', '2021-12-21 13:57:56', 'Quýt Đường Mọng Nước - Túi 1kg - Kiến Vàng', 4038500, '0', 3, 'Giao xớm giùm mình nhe, thèm lắm rùi.'),
(55, 176, 'Nhi', 'huynh', '307, ap 3, xa cam son', '860000', 'tien giang', '+84888250764', 'nhoxnhilove0010@gmail.com', '2021-12-23 03:05:29', 'Sầu riêng ri6', 263000, '0', 2, 'hii'),
(56, 175, 'Nhi', 'huynh', '307, ap 3, xa cam son', '860000', 'tien giang', '+84888250764', 'nhoxnhilove0010@gmail.com', '2021-12-23 04:58:19', 'Sầu riêng ri6', 125000, '0', 0, ''),
(57, 175, 'Nhi', 'huynh', '307, ap 3, xa cam son', '860000', 'tien giang', '+84888250764', 'nhoxnhilove0010@gmail.com', '2021-12-23 05:00:13', 'Quýt Đường Mọng Nước - Túi 1kg - Kiến Vàng', 175000, '0', 0, ''),
(58, 176, 'Nhi', 'huynh', '307, ap 3, xa cam son', '860000', 'tien giang', '+84888250764', 'nhoxnhilove0010@gmail.com', '2021-12-23 05:01:19', 'Sầu riêng ri6', 550000, '0', 0, ''),
(59, 176, 'Nhi', 'huynh', '307, ap 3, xa cam son', '860000', 'tien giang', '+84888250764', 'nhoxnhilove0010@gmail.com', '2021-12-25 05:44:35', 'Me Xí Muội Vui Vẻ ', 2011000, '0', 0, 'giao sớm giùm mình nhé'),
(60, 176, 'Nhi', 'Huỳnh', '307, ấp 3, xã cẩm sơn', '860000', 'Cai Lậy', '+84888250764', 'quynhngocnhi6972@gmail.com', '2021-12-25 05:45:44', 'Quýt Đường Mọng Nước - Túi 1kg - Kiến Vàng', 1965000, '0', 0, 'giao lẹ nha');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderstatus`
--

CREATE TABLE `orderstatus` (
  `Id` int(21) NOT NULL,
  `OrderStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orderstatus`
--

INSERT INTO `orderstatus` (`Id`, `OrderStatus`) VALUES
(1, 'Đang chờ lấy hàng'),
(2, 'Đã lấy hàng'),
(3, 'Đang giao hàng'),
(4, 'Đã giao'),
(5, 'Chưa thanh toán'),
(6, 'Đã thanh toán'),
(7, 'Thành công'),
(8, 'Đã hủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productcategory`
--

CREATE TABLE `productcategory` (
  `Id` int(21) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `ParentId` int(21) NOT NULL,
  `Icon` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `No` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `productcategory`
--

INSERT INTO `productcategory` (`Id`, `Name`, `ParentId`, `Icon`, `Description`, `No`) VALUES
(21, 'Trái cây', 0, 'IMG-61c327cb2e5b77.77597578.png', '', 1),
(22, 'Đặc sản vùng miền', 0, 'IMG-61c3280254d972.96939825.png', '', 2),
(23, 'Rau, củ, quả và nấm', 0, 'IMG-61c328f59d7c50.68463861.png', '', 3),
(24, 'Đậu, ngũ cốc, các loại hạt và nhân', 0, 'IMG-61c32962094678.48773781.png', '', 4),
(25, 'Đồ uống', 0, 'IMG-61c32b7797e3e8.55749858.png', '', 5),
(26, 'Dược liệu', 0, 'IMG-61c32b8d482bb7.33141170.png', '', 6),
(27, 'Thực phẩm chế biến sẵn', 0, 'IMG-61c32ba0cd2d71.90468560.png', '', 7),
(28, 'Sữa, Mật - Sản phẩm từ Sữa, mật', 0, 'IMG-61c32bbdb91547.89114335.png', '', 8),
(29, 'Gia vị thực phẩm', 0, 'IMG-61c32bd1339242.44610705.png', '', 9),
(30, 'Thủy - Hải sản', 0, 'IMG-61c32be27e6c75.88699678.png', '', 10),
(31, 'Gia súc & Sản phẩm chiết xuất từ Động vật', 0, 'IMG-61c32bfa4844d8.09713374.png', '', 11),
(34, 'Chiết xuất thực vật & dầu', 0, 'IMG-61c3355e49e1f4.96442978.png', '', 12),
(35, 'Sợi thực vật & gỗ', 0, 'IMG-61c3c6a2b33812.22783085.png', '', 13),
(36, 'Thực phẩm đông lạnh', 0, 'IMG-61c3c793759f55.43108262.png', '', 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productimgs`
--

CREATE TABLE `productimgs` (
  `Id` int(11) NOT NULL,
  `StoreId` int(21) NOT NULL,
  `ImgUrl` varchar(255) NOT NULL,
  `IsMainProductImg` int(1) NOT NULL,
  `ProductId` int(21) NOT NULL,
  `CreateImageAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `productimgs`
--

INSERT INTO `productimgs` (`Id`, `StoreId`, `ImgUrl`, `IsMainProductImg`, `ProductId`, `CreateImageAt`) VALUES
(853, 29, 'IMG-61bb4aa9149f16.08259637.jpg', 1, 24, '2021-12-16 14:18:30'),
(854, 29, 'IMG-61bb4aa92f0873.36981459.jpg', 0, 24, '2021-12-16 14:18:30'),
(855, 29, 'IMG-61bb4aaa4ad508.44968258.jpg', 0, 24, '2021-12-16 14:18:30'),
(856, 29, 'IMG-61bb4aab7ea942.72205102.jpg', 0, 24, '2021-12-16 14:18:30'),
(857, 29, 'IMG-61bb4aad9a4022.17026284.jpg', 0, 24, '2021-12-16 14:18:30'),
(858, 29, 'IMG-61bbf595cd8582.01347253.jpg', 1, 25, '2021-12-17 02:28:43'),
(859, 29, 'IMG-61bbf595e82bb0.66473565.jpg', 0, 25, '2021-12-17 02:28:43'),
(860, 29, 'IMG-61bbf5ac75fa53.98274358.jpg', 0, 25, '2021-12-17 02:28:43'),
(861, 29, 'IMG-61bbf668b81c34.38054255.jpg', 1, 26, '2021-12-17 02:33:02'),
(862, 29, 'IMG-61bbf668d29c73.90852346.jpg', 0, 26, '2021-12-17 02:33:02'),
(863, 29, 'IMG-61bbf68c455029.20959106.jpg', 0, 26, '2021-12-17 02:33:02'),
(864, 29, 'IMG-61bbf68c5bab56.53314665.jpg', 0, 26, '2021-12-17 02:33:02'),
(865, 29, 'IMG-61bc0d3acd99c0.21566293.jpg', 0, 0, '2021-12-17 04:08:26'),
(866, 29, 'IMG-61bc0d3f8eb182.57131962.jpg', 0, 0, '2021-12-17 04:08:31'),
(867, 29, 'IMG-61bd996adbf419.50053739.jpg', 1, 27, '2021-12-18 08:19:35'),
(868, 29, 'IMG-61bd9971ce9d75.87123070.jpg', 0, 27, '2021-12-18 08:19:35'),
(869, 29, 'IMG-61bd9971d00b76.00398366.jpg', 0, 27, '2021-12-18 08:19:35'),
(870, 29, 'IMG-61bd9971d101c7.73691327.jpg', 0, 27, '2021-12-18 08:19:35'),
(871, 29, 'IMG-61bd997fea3e27.23676907.jpg', 0, 27, '2021-12-18 08:19:35'),
(872, 29, 'IMG-61bd9ede5dea85.67633310.jpg', 1, 28, '2021-12-18 08:42:11'),
(873, 29, 'IMG-61bd9ede5f0af3.50440912.jpg', 0, 28, '2021-12-18 08:42:11'),
(874, 29, 'IMG-61bd9ede5fea55.33276658.jpg', 0, 28, '2021-12-18 08:42:11'),
(875, 29, 'IMG-61bd9ede60edf0.36633228.jpg', 0, 28, '2021-12-18 08:42:11'),
(876, 29, 'IMG-61bd9ede6207e6.39960196.jpg', 0, 28, '2021-12-18 08:42:11'),
(877, 29, 'IMG-61bdf68a4f7bc5.82033248.jpg', 1, 29, '2021-12-18 14:56:12'),
(878, 29, 'IMG-61bdf68a6a8353.10546778.jpg', 0, 29, '2021-12-18 14:56:12'),
(879, 29, 'IMG-61bdf68a843e83.21929231.jpg', 0, 29, '2021-12-18 14:56:12'),
(880, 29, 'IMG-61bdf68a9bacc6.07709980.jpg', 0, 29, '2021-12-18 14:56:12'),
(881, 29, 'IMG-61c3e97a3b9a61.63606419.jpg', 0, 0, '2021-12-23 03:14:02'),
(882, 29, 'IMG-61c3e97a51ff83.37701938.jpg', 0, 0, '2021-12-23 03:14:02'),
(883, 29, 'IMG-61c3e97a71cda6.03934970.jpg', 0, 0, '2021-12-23 03:14:02'),
(884, 29, 'IMG-61c3e97a855014.15780270.jpg', 0, 0, '2021-12-23 03:14:02'),
(885, 29, 'IMG-61c3e97a9e3c43.36003444.jpg', 0, 0, '2021-12-23 03:14:02'),
(886, 29, 'IMG-61c3e9d61c9ce3.38408442.jpg', 1, 0, '2021-12-23 03:15:54'),
(887, 29, 'IMG-61c3e9d635ac09.19008273.jpg', 0, 0, '2021-12-23 03:15:34'),
(888, 29, 'IMG-61c3e9d64d4180.53182090.jpg', 0, 0, '2021-12-23 03:15:34'),
(889, 29, 'IMG-61c3e9d6666088.15794942.jpg', 0, 0, '2021-12-23 03:15:34'),
(890, 29, 'IMG-61c3e9d68127f6.64427032.jpg', 0, 0, '2021-12-23 03:15:34'),
(891, 29, 'IMG-61c3ea8919f631.60697513.jpg', 1, 30, '2021-12-23 03:18:44'),
(892, 179, 'IMG-61cb1dce18a1d4.64654094.jpg', 1, 0, '2021-12-28 14:23:24'),
(893, 179, 'IMG-61cb1dce1a4a44.11528020.jpg', 0, 0, '2021-12-28 14:23:10'),
(894, 179, 'IMG-61cb1e3d3f1061.62301048.jpg', 1, 0, '2021-12-28 14:25:04'),
(895, 179, 'IMG-61cb1e3d42f301.32660576.jpg', 0, 0, '2021-12-28 14:25:01'),
(896, 179, 'IMG-61cb1f50bf98f0.42840092.jpg', 1, 0, '2021-12-28 14:31:26'),
(897, 179, 'IMG-61cb1f50dceea2.93652837.jpg', 0, 0, '2021-12-28 14:29:36'),
(898, 179, 'IMG-61cb1fed1bb301.10389038.jpg', 0, 0, '2021-12-28 14:32:13'),
(899, 179, 'IMG-61cb1fed37cb12.92674455.jpg', 0, 0, '2021-12-28 14:32:13'),
(900, 179, 'IMG-61cb20e30c5c51.82363212.jpg', 0, 0, '2021-12-28 14:36:19'),
(901, 179, 'IMG-61cbc7c7536ef6.32569747.jpg', 0, 0, '2021-12-29 02:28:23'),
(902, 179, 'IMG-61cbc7c77369d1.30298404.jpg', 0, 0, '2021-12-29 02:28:23'),
(903, 179, 'IMG-61cbc83b007358.92291015.jpg', 0, 0, '2021-12-29 02:30:19'),
(904, 179, 'IMG-61cbc83b19a936.25630863.jpg', 0, 0, '2021-12-29 02:30:19'),
(905, 179, 'IMG-61cbc9b3951fb4.53082618.jpg', 0, 0, '2021-12-29 02:36:35'),
(906, 179, 'IMG-61cbc9b3ada2f7.61394035.jpg', 0, 0, '2021-12-29 02:36:35'),
(907, 179, 'IMG-61cbcb8f7a4201.79649807.jpg', 0, 0, '2021-12-29 02:44:31'),
(908, 179, 'IMG-61cbcb8f928af2.74449576.jpg', 0, 0, '2021-12-29 02:44:31'),
(909, 179, 'IMG-61cbcbb3d513a0.08183665.jpg', 0, 0, '2021-12-29 02:45:07'),
(910, 179, 'IMG-61cbcbb3ed8f62.13037059.jpg', 0, 0, '2021-12-29 02:45:07'),
(911, 179, 'IMG-61cbcc129a8473.18864850.jpg', 1, 0, '2021-12-29 02:47:06'),
(912, 179, 'IMG-61cbcc12b31f77.11472307.jpg', 0, 0, '2021-12-29 02:46:42'),
(913, 179, 'IMG-61cbcca6d22058.26829047.jpg', 0, 0, '2021-12-29 02:49:10'),
(914, 179, 'IMG-61cbcca6d3e3e3.90992773.jpg', 0, 0, '2021-12-29 02:49:10'),
(915, 179, 'IMG-61cbccbeaca006.94561882.jpg', 1, 0, '2021-12-29 02:50:19'),
(916, 179, 'IMG-61cbccbec08116.93649084.jpg', 0, 0, '2021-12-29 02:49:34'),
(917, 179, 'IMG-61cbccf9a3e0b5.63294970.jpg', 1, 0, '2021-12-29 02:51:16'),
(918, 179, 'IMG-61cbccf9b8bd80.64079021.jpg', 0, 0, '2021-12-29 02:50:33'),
(919, 179, 'IMG-61cbcd57caa4a7.27134731.jpg', 1, 0, '2021-12-29 02:54:13'),
(920, 179, 'IMG-61cbcd57e34df5.73858159.jpg', 0, 0, '2021-12-29 02:52:07'),
(921, 179, 'IMG-61cbcdea81c203.73694970.jpg', 1, 0, '2021-12-29 02:55:41'),
(922, 179, 'IMG-61cbcdea9a8fc7.88832737.jpg', 0, 0, '2021-12-29 02:54:34'),
(923, 179, 'IMG-61cbcfda809e66.91161959.jpg', 1, 0, '2021-12-29 03:03:48'),
(924, 179, 'IMG-61cbcfda99cec0.29494150.jpg', 0, 0, '2021-12-29 03:02:50'),
(925, 179, 'IMG-61cbd0217a82f7.36005460.jpg', 1, 0, '2021-12-29 03:04:52'),
(926, 179, 'IMG-61cbd021937f13.88000958.jpg', 0, 0, '2021-12-29 03:04:01'),
(927, 179, 'IMG-61cbd328ca1c93.36001457.jpg', 0, 0, '2021-12-29 03:16:56'),
(928, 179, 'IMG-61cbd328cbf286.56267026.jpg', 0, 0, '2021-12-29 03:16:56'),
(929, 179, 'IMG-61cbd328e25417.70325073.jpg', 0, 0, '2021-12-29 03:16:56'),
(930, 179, 'IMG-61cbd328f16cb1.83362767.jpg', 0, 0, '2021-12-29 03:16:56'),
(931, 179, 'IMG-61cbd33fcf0802.75943067.jpg', 1, 0, '2021-12-29 03:18:06'),
(932, 179, 'IMG-61cbd33fea4b23.04617503.jpg', 0, 0, '2021-12-29 03:17:19'),
(933, 179, 'IMG-61cbd382268596.40936016.jpg', 1, 0, '2021-12-29 03:19:21'),
(934, 179, 'IMG-61cbd3823c5f12.66369188.jpg', 0, 0, '2021-12-29 03:18:26'),
(935, 179, 'IMG-61cbd4005c0e85.86989413.jpg', 0, 0, '2021-12-29 03:20:32'),
(936, 179, 'IMG-61cbd400748517.87261204.jpg', 0, 0, '2021-12-29 03:20:32'),
(937, 179, 'IMG-61cbd60f5ee551.99116595.jpg', 0, 0, '2021-12-29 03:29:19'),
(938, 179, 'IMG-61cbd60f60acb4.15101953.jpg', 0, 0, '2021-12-29 03:29:19'),
(939, 179, 'IMG-61cbd60f7ac033.52732783.jpg', 0, 0, '2021-12-29 03:29:19'),
(940, 179, 'IMG-61cbd60f7e70b6.34038674.jpg', 0, 0, '2021-12-29 03:29:19'),
(941, 179, 'IMG-61cbd621d6cd89.21099885.jpg', 0, 0, '2021-12-29 03:29:37'),
(942, 179, 'IMG-61cbd621ee81f1.75759539.jpg', 0, 0, '2021-12-29 03:29:37'),
(943, 179, 'IMG-61cbd694a4b684.94109075.jpg', 0, 0, '2021-12-29 03:31:32'),
(944, 179, 'IMG-61cbd694bc9455.35717681.jpg', 0, 0, '2021-12-29 03:31:32'),
(945, 179, 'IMG-61cbd6e1837901.80609038.jpg', 0, 0, '2021-12-29 03:32:49'),
(946, 179, 'IMG-61cbd6e19c8965.05182791.jpg', 0, 0, '2021-12-29 03:32:49'),
(947, 179, 'IMG-61cbd73a1457c1.75963493.jpg', 1, 0, '2021-12-29 03:34:37'),
(948, 179, 'IMG-61cbd73a2fe989.12815919.jpg', 0, 0, '2021-12-29 03:34:18'),
(949, 179, 'IMG-61cbd7dbf353f5.06119698.jpg', 1, 0, '2021-12-29 03:40:35'),
(950, 179, 'IMG-61cbd7dc153ed5.73969042.jpg', 0, 0, '2021-12-29 03:37:00'),
(951, 179, 'IMG-61cbd8da4f9a03.52624024.jpg', 1, 0, '2021-12-29 03:41:30'),
(952, 179, 'IMG-61cbd8da683bb9.39428488.jpg', 0, 0, '2021-12-29 03:41:14'),
(953, 30, 'IMG-61cbd90ed12901.34989342.jpg', 1, 31, '2021-12-29 03:42:18'),
(954, 30, 'IMG-61cbd90ee7ed12.38777501.jpg', 0, 31, '2021-12-29 03:42:18'),
(955, 30, 'IMG-61cbda0bd55105.90690181.jpg', 1, 32, '2021-12-29 03:46:42'),
(956, 30, 'IMG-61cbda0bee83a3.26623892.jpg', 0, 32, '2021-12-29 03:46:42'),
(957, 30, 'IMG-61cbda0c123406.33844322.jpg', 0, 32, '2021-12-29 03:46:42'),
(958, 30, 'IMG-61cbda0c2f0fa1.37907898.jpg', 0, 32, '2021-12-29 03:46:42'),
(959, 30, 'IMG-61cbda0c437412.29980575.jpg', 0, 32, '2021-12-29 03:46:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
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
  `Tags` varchar(255) NOT NULL,
  `ProductStatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`Id`, `ProductStatusId`, `ProductUnitId`, `ProductUnitName`, `Description`, `Name`, `Price`, `DatePublic`, `VendorId`, `StoreName`, `StoreId`, `ProductCategoryId`, `ProductCategory`, `Img`, `Tags`, `ProductStatus`) VALUES
(24, 0, 1, 'Kg', 'Sầu riêng ri6 thường được nhận dạng bởi dạng bầu dục, phần đáy hẹp, vỏ quả mỏng có màu vàng xanh, được trồng nhiều tại Đồng bằng sông Cửu Long.\nCây sầu riêng ri6 trồng khoảng 3 năm thì có trái. Khi sầu riêng chín, các gai nở bung, vỏ nứt ra rất dễ trong việc tách múi. Thông thường, sầu riêng ri6 có trọng lượng dao động từ 3 - 6kg.\nBên trong sầu riêng ri6 là những múi sầu riêng cơm khô ráo, dày, vị ngọt, béo vừa phải, khi cầm không bị dính tay và tỷ lệ hạt lép lên tới 40%.', 'Sầu riêng ri6', 125000, '2021-12-16 14:18:30', 174, 'Sầu Riêng mình Tôi', 29, 1, 'Trái cây', 'IMG-61bb4aa9149f16.08259637.jpg', '', 0),
(25, 0, 1, 'Kg', 'Quýt đường Kiến Vàng dùng ăn tươi hoặc vắt nước, làm mứt, làm gỏi... đều ngon.', 'Quýt Đường Mọng Nước - Túi 1kg - Kiến Vàng', 12500, '2021-12-17 02:28:43', 174, 'Sầu Riêng mình Tôi', 29, 1, 'Trái cây', 'IMG-61bbf595cd8582.01347253.jpg', '', 1),
(26, 0, 1, 'Kg', 'Dùng ăn tươi hoặc làm nước ép ổi, sinh tố ổi, gỏi ổi, ổi lắc muối ớt...', 'Ổi Nữ Hoàng Giòn Ngọt, Giàu VitaminC', 35000, '2021-12-17 02:33:02', 174, 'Sầu Riêng mình Tôi', 29, 5, 'Đồ uống', 'IMG-61bbf668b81c34.38054255.jpg', '', 1),
(27, 0, 4, 'Yến', 'Dừa tươi gọt vỏ, không tẩy trắng, không ngâm hóa chất\nHướng dẫn sử dụng:	Dùng uống nước trực tiếp, bổ sung chất điện giải cho cơ thể hoặc chế biến thành các món ăn theo sở thích như kem dừa, rau câu trái dừa, sinh tố dừa...', 'Dừa Sọ Tươi Ngon, Ngọt Nước', 890000, '2021-12-18 08:19:35', 174, 'Sầu Riêng mình Tôi', 29, 2, 'Đặc sản vùng miền', 'IMG-61bd996adbf419.50053739.jpg', '', 1),
(28, 0, 4, 'Yến', 'Sầu riêng Thái tươi chín cây\nHướng dẫn sử dụng:	Ăn ngay khi khui hộp hoặc dùng xay sinh tố, làm bánh', 'Sầu riêng Thái - Tươi, Hái già', 4000000, '2021-12-18 08:42:11', 174, 'Sầu Riêng mình Tôi', 29, 1, 'Trái cây', 'IMG-61bd9ede5dea85.67633310.jpg', '', 0),
(29, 0, 1, 'Kg', 'Ăn ngay sau khi mở bao bì\nHướng dẫn bảo quản:	Để nơi khô ráo thoáng mát', 'Me Xí Muội Vui Vẻ ', 13000, '2021-12-18 14:56:12', 174, 'Sầu Riêng mình Tôi', 29, 7, 'Thực phẩm chế biến sẵn', 'IMG-61bdf68a4f7bc5.82033248.jpg', '', 1),
(30, 0, 1, 'Kg', 'Đậu, ngũ cốc, các loại hạt và nhân', 'Đậu, ngũ cốc, các loại hạt và nhân', 15000, '2021-12-23 03:18:44', 174, 'Sầu Riêng mình Tôi', 29, 1, 'Trái cây', 'IMG-61c3ea8919f631.60697513.jpg', '', 1),
(31, 0, 4, 'Yến', 'Cá nục Hải Thần được đánh bắt ở vùng biển Thuận An (huyện Phú Vang, tỉnh Thừa Thiên – Huế). Cá có kích thước đồng đều nhau, cụ thể, chiều dài giao động từ 12 – 14cm. Thân mình hơi tròn với 4 vây phân bố đều ở cả trên lưng và dưới bụng (2 trên, 2 dưới). Ngoài ra, việc chủ động tất cả các khâu từ thu mua, sơ chế, đóng gói…, hạn chế các khâu trung gian cũng giúp cá nục Hải Thần có độ tươi ngon hơn.', 'Cây giống - Con giống', 49000, '2021-12-29 03:42:18', 179, 'Cá cơm Vĩnh phúc', 30, 3, 'Rau, củ, quả và nấm', 'IMG-61cbd90ed12901.34989342.jpg', '', 1),
(32, 0, 1, 'Kg', 'Cá nục Hải Thần được đánh bắt ở vùng biển Thuận An (huyện Phú Vang, tỉnh Thừa Thiên – Huế). Cá có kích thước đồng đều nhau, cụ thể, chiều dài giao động từ 12 – 14cm. Thân mình hơi tròn với 4 vây phân bố đều ở cả trên lưng và dưới bụng (2 trên, 2 dưới). Ngoài ra, việc chủ động tất cả các khâu từ thu mua, sơ chế, đóng gói…, hạn chế các khâu trung gian cũng giúp cá nục Hải Thần có độ tươi ngon hơn.', 'Củ cải đường', 45000, '2021-12-29 03:46:42', 179, 'Cá cơm Vĩnh phúc', 30, 2, 'Đặc sản vùng miền', 'IMG-61cbda0bd55105.90690181.jpg', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productunits`
--

CREATE TABLE `productunits` (
  `Id` int(11) NOT NULL,
  `UnitName` varchar(21) NOT NULL,
  `ParentId` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `productunits`
--

INSERT INTO `productunits` (`Id`, `UnitName`, `ParentId`) VALUES
(1, 'Kg', 0),
(2, 'Tấn', 0),
(3, 'Tạ', 0),
(4, 'Yến', 0),
(5, 'Thùng', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(21) NOT NULL,
  `RoleName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `RoleName`) VALUES
(1, 'Admin'),
(2, 'Provider'),
(3, 'User');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stores`
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
-- Đang đổ dữ liệu cho bảng `stores`
--

INSERT INTO `stores` (`Id`, `Avatar`, `FullName`, `Gender`, `DOB`, `UserId`, `Balance`, `CreateStoreAt`, `StoreName`, `CMND`, `IdentifiedImg`, `Info`, `StoreStatus`, `StoreAdress`, `StorePhone`) VALUES
(29, 'img/UserAvatar.png', 'Nhi huynh', 0, '2021-12-30', 174, 0, '2021-12-04 10:09:38', 'Sầu Riêng mình Tôi', 123456789, '', 'Sầu Riêng mình Tôi bán sầu riêng', 0, 'Tiền Giang', 888250764),
(30, 'img/UserAvatar.png', 'Huỳnh Nhi', 1, '2021-12-08', 179, 0, '2021-12-28 21:12:24', 'Cá cơm Vĩnh phúc', 123456789, '', 'Cá nục Hải Thần được đánh bắt ở vùng biển Thuận An (huyện Phú Vang, tỉnh Thừa Thiên – Huế). Cá có kích thước đồng đều nhau, cụ thể, chiều dài giao động từ 12 – 14cm. Thân mình hơi tròn với 4 vây phân bố đều ở cả trên lưng và dưới bụng (2 trên, 2 dưới). Ng', 0, 'Sóc Trăng', 828144337);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userrole`
--

CREATE TABLE `userrole` (
  `Id` int(11) NOT NULL,
  `RoleId` int(1) NOT NULL,
  `UserId` int(21) NOT NULL,
  `RoleName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `userrole`
--

INSERT INTO `userrole` (`Id`, `RoleId`, `UserId`, `RoleName`) VALUES
(1, 1, 175, 'Admin'),
(2, 2, 174, 'Provider'),
(3, 3, 175, 'User');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`Id`, `UserName`, `Password`, `Email`, `UserRoleId`, `StoreId`, `StoreName`, `Gender`, `Phone`, `CreateAt`, `IsBanned`, `Address`, `IsSeller`, `EmailVerified`, `StatusActive`, `FullName`, `Avatar`, `DOB`) VALUES
(174, 'provider', '$2y$10$2mN2.FzLeSX2O870xxFJmu2EKsXJJiEzEs8ALUVjILN18FBmy8e0q', 'nhoxnhilove0010@gmail.com', 2, 29, '', 0, '0348106990', '2021-12-17 01:43:04', 0, 'ấp 4, xã Cẩm Sơn, huyện Cai Lậy, tỉnh Tiền Giang', 0, 'no', 0, '', '', NULL),
(175, 'admin', '$2y$10$n8DX/fKVop5kEiyxxEIRqurh7TO3iWDxCohuf3IvPzW5H4fkefg.q', 'nhoxnhilove0011@gmail.com', 1, 1, '', 0, '0888250764', '2021-12-17 01:42:46', 0, 'ấp 3, xã Cẩm Sơn, huyện Cai Lậy, tỉnh Tiền Giang', 0, 'no', 0, '', '', NULL),
(176, 'user', '$2y$10$Q4RxPVr2mycrAIGtanCDp.pMRr81hPdfrLfanxvGkVfcM.kgdXwLe', 'nhoxnhilove0012@gmail.com', 3, 0, '', 0, '0364070761', '2021-12-17 01:43:12', 0, 'ấp 5, xã Cẩm Sơn, huyện Cai Lậy, tỉnh Tiền Giang', 0, 'no', 0, '', '', NULL),
(179, 'provider1', '$2y$10$9GJe.WtRbAXQKukKh2s5xeI4Z8wVlSJiwiRkBGtrxOeRF6tteTnI6', 'Nhoxnhilove007@gmail.com', 2, 30, '', 0, '', '2021-12-29 03:40:25', 0, '', 0, 'no', 0, '', '', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vendorconfirm`
--

CREATE TABLE `vendorconfirm` (
  `Id` int(21) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vendorconfirm`
--

INSERT INTO `vendorconfirm` (`Id`, `Status`) VALUES
(1, 'Đang chờ xác nhận'),
(2, 'Đã xác nhận'),
(3, 'Đã hủy bởi cửa hàng'),
(4, 'Đã giao hàng'),
(5, 'Chưa nhận thanh toán'),
(6, 'Đã nhận thanh toán');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `productimgs`
--
ALTER TABLE `productimgs`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `StoreId` (`StoreId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ProductCategoryId` (`ProductCategoryId`),
  ADD KEY `StoreId` (`StoreId`),
  ADD KEY `VendorId` (`VendorId`),
  ADD KEY `ProductUnitId` (`ProductUnitId`);

--
-- Chỉ mục cho bảng `productunits`
--
ALTER TABLE `productunits`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`);

--
-- Chỉ mục cho bảng `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserRoleId` (`UserRoleId`);

--
-- Chỉ mục cho bảng `vendorconfirm`
--
ALTER TABLE `vendorconfirm`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `Id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `Id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `Id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `productimgs`
--
ALTER TABLE `productimgs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=960;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `productunits`
--
ALTER TABLE `productunits`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `stores`
--
ALTER TABLE `stores`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `userrole`
--
ALTER TABLE `userrole`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT cho bảng `vendorconfirm`
--
ALTER TABLE `vendorconfirm`
  MODIFY `Id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`Id`);

--
-- Các ràng buộc cho bảng `productimgs`
--
ALTER TABLE `productimgs`
  ADD CONSTRAINT `productimgs_ibfk_1` FOREIGN KEY (`StoreId`) REFERENCES `stores` (`Id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`ProductCategoryId`) REFERENCES `productcategory` (`Id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`StoreId`) REFERENCES `stores` (`Id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`VendorId`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `products_ibfk_4` FOREIGN KEY (`ProductUnitId`) REFERENCES `productunits` (`Id`);

--
-- Các ràng buộc cho bảng `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`Id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`UserRoleId`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
