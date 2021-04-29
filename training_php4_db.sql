-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 28, 2021 lúc 11:04 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `training_php4_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `name` varchar(50) NOT NULL COMMENT 'Name',
  `email` varchar(50) NOT NULL COMMENT 'Email',
  `created_date` datetime NOT NULL COMMENT 'Created Date',
  `updated_date` datetime NOT NULL COMMENT 'Updated Date',
  `password` text NOT NULL COMMENT 'Password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `created_date`, `updated_date`, `password`) VALUES
(2, 'test2', 'teest@sdfg.szxdc', '2021-04-19 11:18:26', '2021-04-23 11:49:48', 'b0baee9d279d34fa1dfd71aadb908c3f'),
(6, 'Admin2', 'tets@gmail.com', '2021-04-20 08:53:03', '2021-04-20 09:30:22', '0e7517141fb53f21ee439b355b5a1d0a'),
(7, 'test', 'test@gmail.com', '2021-04-23 11:49:02', '0000-00-00 00:00:00', '0e7517141fb53f21ee439b355b5a1d0a'),
(8, 'sdfgn', 'admindfghn@wsedf.dfg', '2021-04-27 11:09:56', '0000-00-00 00:00:00', '0e7517141fb53f21ee439b355b5a1d0a');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
