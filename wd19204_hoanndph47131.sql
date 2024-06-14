-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 10, 2024 at 02:08 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wd19204_hoanndph47131`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

DROP TABLE IF EXISTS `binhluan`;
CREATE TABLE IF NOT EXISTS `binhluan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `noidung` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `ngaybinhluan` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idpro` (`idpro`),
  KEY `iduser` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

DROP TABLE IF EXISTS `danhmuc`;
CREATE TABLE IF NOT EXISTS `danhmuc` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `trang_thai`) VALUES
(1, 'loai 1', 1),
(2, 'đồ điện', 1),
(4, 'quần áo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT '0.00',
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mota` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `luotxem` int NOT NULL DEFAULT '0',
  `iddm` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `iddm` (`iddm`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`, `status`) VALUES
(3, 'sp1', 10.00, '199-536x354.jpg', 'mota', 10, 4, 1),
(4, 'sp 2', 10.00, '980-536x354.jpg', 'mo ta sp 2', 0, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

DROP TABLE IF EXISTS `taikhoan`;
CREATE TABLE IF NOT EXISTS `taikhoan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `role` tinyint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sp_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
