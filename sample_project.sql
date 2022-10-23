-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2022 lúc 04:21 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sample_project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Đồng hồ đeo tay'),
(2, 'Máy tính xách tay'),
(3, 'Máy ảnh'),
(4, 'Điện thoại'),
(5, 'Nước hoa'),
(6, 'Nữ trang'),
(7, 'Nón thời trang'),
(8, 'Túi xách du lịch');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `commodity_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date_comment` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `content`, `commodity_id`, `customer_id`, `date_comment`) VALUES
(42, 'chat đi long', 6, 10, '2022-09-25'),
(43, 'long nó chat', 3, 11, '2022-09-25'),
(44, 'chat đi long', 7, 12, '2022-09-25'),
(45, 'chat đi long', 7, 13, '2022-09-25'),
(47, 'rèđfdfdf', 7, 2, '2022-09-25'),
(48, 'rèđfdfdf', 7, 1, '2022-09-25'),
(49, 'rèđfdfdf', 7, 1, '2022-09-25'),
(51, 'fdsgdfgfg', 2, 8, '2022-10-01'),
(52, 'bmhbmbnm', 8, 1, '2022-10-01'),
(54, 'ffgfdsgsfdg', 8, 10, '2022-10-02'),
(55, 'ffgfdsgsfdg', 8, 12, '2022-10-02'),
(56, 'ffgfdsgsfdg', 8, 13, '2022-10-02'),
(57, 'ffgfdsgsfdg', 8, 1, '2022-10-02'),
(58, 'ffgfdsgsfdg', 8, 6, '2022-10-02'),
(59, 'dsádfdsfdfdfdfdfdf', 8, 14, '2022-10-02'),
(61, 'alo', 8, 15, '2022-10-02'),
(62, 'long nó chat', 8, 17, '2022-10-02'),
(63, 'long nó chat', 8, 11, '2022-10-02'),
(64, 'long nó chat', 8, 5, '2022-10-03'),
(65, 'long nó chat', 8, 5, '2022-10-03'),
(66, 'long nó chat', 8, 5, '2022-10-03'),
(67, 'long nó chat', 8, 1, '2022-10-03'),
(68, 'alô', 8, 1, '2022-10-03'),
(69, 'alô', 8, 1, '2022-10-03'),
(70, 'dsfdfdsf', 8, 1, '2022-10-03'),
(71, 'dsfdfdsf', 8, 1, '2022-10-03'),
(72, 'alô alô', 8, 1, '2022-10-03'),
(73, 'fg', 8, 1, '2022-10-03'),
(74, 'fg', 8, 1, '2022-10-03'),
(75, 'fg', 8, 1, '2022-10-03'),
(76, 'hellô', 8, 1, '2022-10-03'),
(77, 'a', 8, 1, '2022-10-03'),
(78, 'long bình luận', 18, 1, '2022-10-07'),
(79, 'hello', 18, 1, '2022-10-08'),
(80, 'long nó chat', 21, 1, '2022-10-08'),
(81, 'hàng tốt vl', 20, 1, '2022-10-08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `commodities`
--

CREATE TABLE `commodities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `sell` int(11) DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `date_add` date NOT NULL,
  `description` text DEFAULT NULL,
  `special` tinyint(1) NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `commodities`
--

INSERT INTO `commodities` (`id`, `name`, `price`, `sell`, `image`, `date_add`, `description`, `special`, `view`, `category_id`) VALUES
(18, 'iPhone 13 Pro Max 128GB ', 14000000.00, 10000000, '633be8393958bip14.png', '2022-10-03', '', 1, 7, 4),
(19, 'IPhone 14', 30000000.00, 25000000, '633c6033e93fbslide4.jpg', '2022-10-05', '', 0, 3, 4),
(20, 'IPhone 14', 30000000.00, 25000000, '633be948c94fdip14.png', '2022-10-05', '', 0, 7, 4),
(21, 'iphone 5', 4000000.00, 0, '633bea1c90447flycam.png', '2022-10-05', '', 0, 13, 4),
(31, 'Laptop Dell Inspiron 5557 Core i5- 6200U - Ram 4G - SSD 128G - VGA Nvidia 930M- 2G - Màn 15.6', 12000000.00, 10000000, '633c61fe6859f278_laptophitech_vn_dell_n5557__3_.jpg', '2022-10-05', '', 1, 46, 2),
(35, 'iphoen', 1.00, 3, '6354f4fbb652f', '0000-00-00', '', 1, 0, 27);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `kich_hoat` bit(1) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `vai_tro` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `password`, `name`, `kich_hoat`, `avatar`, `email`, `vai_tro`) VALUES
(21, '123456789', 'long', b'1', '634d6f22e5b72ao-phong-mixi-den-300x400.jpg', 'long@gmail.com', b'1'),
(22, '123456789', 'long', b'1', '634d6f40794f7ao-phong-mixi-trang-300x400.jpg', 'long111@cxv.com', b'0'),
(23, '123456789', 'long', b'1', '634d6f60b5311ao-phong-mixi-trang-300x400.jpg', 'long2122@gmail.com', b'1'),
(24, '123456789', 'long12121', b'1', '634d706d32c19ao-phong-mixi-den-300x400.jpg', 'longhoang@gmail.com', b'0'),
(25, '123456789', 'long hoàng đình', b'0', 'user.png', 'admin@gmail.com', b'0'),
(26, '12345678', 'long hoàng đình', b'0', 'user.png', 'admin1213@gmail.com', b'0'),
(27, '123456789', 'Pasta ', b'1', 'user.png', 'hoanglonggg356@gmail.com', b'1'),
(28, '123456789', 'long', b'0', 'user.png', 'admin123@gmail.com', b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name_receiver` varchar(50) NOT NULL,
  `phone_receiver` char(20) NOT NULL,
  `address_receiver` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `name_receiver`, `phone_receiver`, `address_receiver`, `status`, `created_at`, `total_price`) VALUES
(39, 1, 'long 1343434', '123453434', 'hà nội3343343', 1, '2022-10-09 03:46:45', 34000000),
(40, 1, 'hoàng long', '124344', 'fgfgf hà tring', 1, '2022-10-09 04:13:40', 26000000),
(41, 1, 'long 1', '12345', 'hà nội', 1, '2022-10-09 03:47:48', 4000000),
(42, 1, 'long 1', '', '', 1, '2022-10-09 04:12:32', 16000000),
(43, 21, 'long', '124344', 'hà nội', 1, '2022-10-23 07:43:21', 34000000),
(44, 21, 'long', 'hoàng đình', 'kdfd', 2, '2022-10-23 07:56:53', 16000000),
(45, 21, 'long', '124344', 'thanh hóa', 1, '2022-10-23 07:56:49', 128000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_product`
--

CREATE TABLE `order_product` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_product`
--

INSERT INTO `order_product` (`order_id`, `product_id`, `quantity`) VALUES
(40, 18, 1),
(40, 31, 1),
(41, 21, 1),
(42, 21, 1),
(42, 31, 1),
(43, 20, 1),
(43, 21, 1),
(44, 21, 4),
(45, 20, 4),
(45, 21, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commodity_id` (`commodity_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `commodities`
--
ALTER TABLE `commodities`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `commodities`
--
ALTER TABLE `commodities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`commodity_id`) REFERENCES `commodities` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
