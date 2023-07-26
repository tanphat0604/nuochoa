-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 18, 2023 lúc 03:17 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `da1nuochoa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `ten_danhmuc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `ten_danhmuc`) VALUES
(2, 'LAPTOP ACER '),
(3, 'LAPTOP ASUS'),
(8, 'LAPTOP DELL'),
(9, 'LAPTOP MSI '),
(36, 'LAPTOP SAMSUNG'),
(37, 'LAPTOP NITRO'),
(38, 'LAPTOP HP'),
(39, 'LAPTOP LENOVO'),
(40, 'LAPTOP FUJITSU'),
(41, 'LAPTOP HERO'),
(42, 'LAPTOP LVN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `price` int(10) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id`, `iduser`, `idpro`, `name`, `img`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(34, 13, 17, 'MSI Nano', 'MSI_2.png', 10000000, 1, 10000000, 45),
(35, 16, 18, 'Acer Askan ', 'Acer1.png', 30000000, 1, 30000000, 46),
(36, 13, 18, 'Nước Hoa Nữ Chanel Coco Mademoiselle (Eau De Parfum)', 'nuoczz.jpg', 30000000, 1, 30000000, 47),
(37, 13, 11, 'Nước Hoa Nữ Salvatore Ferragamo Signorina', 'Salvatore.jpg', 50000000, 1, 50000000, 48),
(38, 13, 11, 'Nước Hoa Nữ Salvatore Ferragamo Signorina', 'Salvatore.jpg', 50000000, 1, 50000000, 49),
(39, 13, 18, 'Nước Hoa Nữ Chanel Coco Mademoiselle (Eau De Parfum)', 'nuoczz.jpg', 30000000, 1, 30000000, 50),
(40, 13, 17, 'Nước Hoa Nữ Chanel Chance Eau Tendre (EDP)', 'chiet.jpg', 10000000, 1, 10000000, 51),
(41, 13, 18, 'Nước Hoa Nữ Chanel Coco Mademoiselle (Eau De Parfum)', 'nuoczz.jpg', 30000000, 1, 30000000, 52);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `total` int(10) NOT NULL,
  `ngaydathang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id`, `name`, `phone`, `email`, `total`, `ngaydathang`) VALUES
(45, 'Lê Việt Nam', 355019207, 'levietnam2509@gmail.com', 10000000, '2022-04-20'),
(46, 'Nguyễn Văn Minh', 344172055, 'nguyenvanminhv11@gmail.com', 30000000, '2023-07-17'),
(47, 'nguyễn văn minh', 12345, 'nguyenvanminhv11@gmail.com', 30000000, '2023-07-18'),
(48, 'nguyễn văn minh', 12345, 'nguyenvanminhv11@gmail.com', 50000000, '2023-07-18'),
(49, 'nguyễn văn minh', 12345, 'nguyenvanminhv11@gmail.com', 50000000, '2023-07-18'),
(50, 'nguyễn văn minh', 12345, 'nguyenvanminhv11@gmail.com', 30000000, '2023-07-18'),
(51, 'nguyễn văn minh', 12345, 'nguyenvanminhv11@gmail.com', 10000000, '2023-07-18'),
(52, 'nguyễn văn minh', 12345, 'nguyenvanminhv11@gmail.com', 30000000, '2023-07-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `ten_sanpham` varchar(250) NOT NULL,
  `gia` float NOT NULL,
  `hinh` varchar(250) NOT NULL,
  `mota` longtext NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `ten_sanpham`, `gia`, `hinh`, `mota`, `id_danhmuc`) VALUES
(8, 'Nước Hoa Nữ Narciso Rodriguez Musc Noir Rose For Her 100ml', 20000000, 'narciso.jpg', 'Acer Aspire 3 A315-56-37DV(308N) (NX.HS5SV.001) : i3-1005G1 | 4GB RAM | 256GB SSD | UHD Graphics 630 | 15.6 FHD | WIN10 | Black', 2),
(10, 'Nước Hoa Nữ Tom Ford Black Orchid (Eau Der Parfum)', 40000000, 'tom ford.jpg', 'MSI Gaming Bravo 15 B5DD-265VN : R5-5600H | 8GB RAM | 512GB SSD | RX 5500M 4GB | 15.6 inch FHD | Windows 11 | Black', 9),
(11, 'Nước Hoa Nữ Salvatore Ferragamo Signorina', 50000000, 'Salvatore.jpg', 'Salvatore Signorina được ra mắt vào năm 2011, đây là một hương nước hoa mới được xây dựng dựa trên phong cách trang nhã của nước Ý, được lấy cảm hứng từ những cô gái năng động với hương thơm đặc chưng tinh tế, gọi mời và tươi tắn.', 9),
(14, 'Nước Hoa Nữ Lancome La Vie Est Belle EDP 75ml', 60000000, 'lancom.jpg', 'Hương thơm của La Vie Est Belle Eau de Toilette hé lộ sự tươi vui và bừng tỉnh của một mùa xuân sắp tới và đánh dấu sự bắt đầu của một chu kỳ tự nhiên mới. Với âm hương ngọt ngào của gourmand, nước hoa còn mang lại một cảm giác hạnh phúc cho người sử dụng.', 2),
(15, 'Yves Saint Laurent Mon Paris EDP Intensement', 50000000, 'Yves.jpg', 'YSL Mon Paris Intensement EDP được ra mắt năm 2020, thương hiệu Yves Saint Laurent đã gửi gắm tình yêu nồng nàn với nước Pháp qua thiết kế mới này. Một sản phẩm hoàn hảo dành tặng các cô gái yêu chuộng nét đẹp pha trộn giữa hiện đại và truyền thống, đầy tự tin và cũng thật kiêu sa. ', 2),
(16, 'Nước Hoa Nữ Gucci Bloom (Eau De Parfum)', 30000000, 'gucci.jpg', 'Gucci Bloom đang là chai nước hoa HOT nhất mùa đông 2017 vượt qua rất nhiều thương hiệu nước hoa khác Gucci Bloom nổi bật với mùi hoa huệ trắng kết hợp với hoa nhài đạt đến độ hoàn hảo.', 9),
(17, 'Nước Hoa Nữ Chanel Chance Eau Tendre (EDP)', 10000000, 'chiet.jpg', 'Chanel Chance Eau Tendre Eau De Parfum được cho ra mắt đầu năm 2019, với hương thơm cực kỳ nữ tính, thơm lâu hơn, mới lạ với nồng độ các thành phần tạo nên hương mạnh mẽ và sâu sắc hơn phiên bản Chance Eau Tendre EDT 2010.', 9),
(18, 'Nước Hoa Nữ Chanel Coco Mademoiselle (Eau De Parfum)', 30000000, 'nuoczz.jpg', 'Chanel Coco Mademoiselle được cho ra mắt vào năm 2001 bởi Jacques Polge. Mademoiselle là một trong những dòng nước hoa được yêu thích và bán chạy trên thế giới, vì hương thơm cổ điển hoàn hảo của nó.', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `phone` int(11) NOT NULL,
  `vaitro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `fullname`, `phone`, `vaitro`) VALUES
(13, 'minhv11', '123', 'nguyenvanminhv11@gmail.com', 'nguyễn văn minh', 12345, 'admin'),
(16, 'nvminh', 'nycTsNsp7vAVweU', 'nguyenvanminhv11@gmail.com', 'Nguyễn Văn Minh', 344172055, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idbill` (`idbill`),
  ADD KEY `idpro` (`idpro`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`idbill`) REFERENCES `hoadon` (`id`),
  ADD CONSTRAINT `giohang_ibfk_3` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
