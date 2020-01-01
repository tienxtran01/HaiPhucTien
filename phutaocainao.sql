-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 01, 2020 lúc 04:16 AM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phutaocainao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cmmphuc`
--

CREATE TABLE `cmmphuc` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cmmphuc`
--

INSERT INTO `cmmphuc` (`id`, `username`, `email`, `password`) VALUES
(62, '123', '123@gmail.com', '202cb962ac59075b964b'),
(63, '123', '123@gmail.com', '202cb962ac59075b964b'),
(64, '123', '123@gmail.com', '202cb962ac59075b964b'),
(65, '123', '123@gmail.com', '202cb962ac59075b964b'),
(67, 'tien', '123@gmail.com', '202cb962ac59075b964b'),
(68, 'tien', '123@gmail.com', '202cb962ac59075b964b'),
(69, 'phuc', '123@gmail.com', '202cb962ac59075b964b'),
(72, '123', '123@gmail.com', '123'),
(75, '123', '123@gmail.com', '202cb962ac59075b964b'),
(76, '123', '123@gmail.com', '202cb962ac59075b964b');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cmmphuc`
--
ALTER TABLE `cmmphuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cmmphuc`
--
ALTER TABLE `cmmphuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
