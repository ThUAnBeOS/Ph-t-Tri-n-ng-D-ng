-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2023 at 03:29 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `databa`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietnguyenlieu`
--

CREATE TABLE `chitietnguyenlieu` (
  `ma_nguyen_lieu` tinyint(4) NOT NULL,
  `ma_mon_an` varchar(10) NOT NULL,
  `so_luong` double NOT NULL,
  `thuoc_tinh_don_vi` varchar(10) NOT NULL,
  KEY `ma_nguyen_lieu` (`ma_nguyen_lieu`,`ma_mon_an`),
  KEY `ma_mon_an` (`ma_mon_an`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietnguyenlieu`
--

INSERT INTO `chitietnguyenlieu` (`ma_nguyen_lieu`, `ma_mon_an`, `so_luong`, `thuoc_tinh_don_vi`) VALUES
(1, 'A1', 150, 'g'),
(4, 'A1', 20, 'g'),
(5, 'A1', 5, 'g'),
(6, 'A2', 150, 'g'),
(7, 'A2', 150, 'g'),
(8, 'A2', 1, 'quả'),
(8, 'A3', 1, 'quả'),
(13, 'A3', 5, 'g'),
(9, 'A4', 150, 'g'),
(10, 'A4', 5, 'g'),
(11, 'A4', 5, 'g'),
(1, 'A5', 120, 'g'),
(7, 'A5', 120, 'g'),
(8, 'A5', 1, 'quả'),
(12, 'A6', 150, 'g'),
(2, 'A6', 5, 'g'),
(5, 'A6', 10, 'g'),
(13, 'A6', 5, 'g'),
(10, 'A6', 5, 'g'),
(14, 'A7', 200, 'g'),
(15, 'A7', 10, 'g'),
(5, 'A7', 10, 'g'),
(93, 'A8', 100, 'g'),
(5, 'A8', 10, 'g'),
(4, 'A8', 10, 'g'),
(14, 'A9', 200, 'g'),
(5, 'A9', 10, 'g'),
(15, 'A9', 10, 'g'),
(10, 'A9', 5, 'g'),
(11, 'A9', 5, 'g'),
(16, 'A10', 120, 'g'),
(7, 'A10', 120, 'g'),
(8, 'A10', 1, 'quả'),
(3, 'A11', 150, 'g'),
(15, 'A11', 10, 'g'),
(5, 'A11', 10, 'g'),
(10, 'A11', 5, 'g'),
(17, 'A12', 120, 'g'),
(15, 'A12', 10, 'g'),
(5, 'A12', 10, 'g'),
(18, 'A13', 100, 'g'),
(86, 'A13', 100, 'g'),
(8, 'A13', 1, 'quả'),
(4, 'A13', 50, 'g'),
(19, 'A13', 10, 'g'),
(20, 'A13', 10, 'g'),
(21, 'A14', 100, 'g'),
(22, 'A14', 1, 'quả'),
(5, 'A14', 5, 'g'),
(23, 'A14', 5, 'g'),
(19, 'A14', 5, 'g'),
(24, 'A14', 5, 'g'),
(13, 'A14', 2, 'g'),
(8, 'A15', 1, 'quả'),
(18, 'A15', 40, 'g'),
(15, 'A15', 50, 'g'),
(33, 'A15', 50, 'g'),
(25, 'A15', 50, 'g'),
(13, 'A15', 10, 'g'),
(26, 'B1', 50, 'g'),
(27, 'B1', 50, 'g'),
(28, 'B1', 1, 'quả'),
(29, 'B1', 1, 'quả'),
(30, 'B1', 3, 'quả'),
(31, 'B1', 10, 'g'),
(49, 'B1', 10, 'g'),
(32, 'B2', 20, 'g'),
(33, 'B2', 20, 'g'),
(34, 'B2', 20, 'g'),
(35, 'B3', 100, 'g'),
(36, 'B4', 100, 'g'),
(37, 'B5', 100, 'g'),
(38, 'B6', 50, 'g'),
(22, 'B6', 1, 'quả'),
(15, 'B6', 50, 'g'),
(39, 'B6', 0.5, 'quả'),
(10, 'B6', 10, 'g'),
(5, 'B6', 10, 'g'),
(19, 'B6', 10, 'g'),
(39, 'B7', 0.5, 'quả'),
(22, 'B7', 1, 'quả'),
(15, 'B7', 20, 'g'),
(40, 'B7', 0.5, 'quả'),
(41, 'B7', 50, 'g'),
(42, 'B7', 1, 'quả'),
(8, 'B8', 1, 'quả'),
(33, 'B8', 50, 'g'),
(43, 'B8', 0.5, 'quả'),
(40, 'B8', 0.5, 'quả'),
(4, 'B8', 50, 'g'),
(44, 'B9', 100, 'g'),
(51, 'B9', 100, 'g'),
(94, 'B9', 0.5, 'quả'),
(33, 'B9', 50, 'g'),
(44, 'B10', 100, 'g'),
(37, 'B10', 100, 'g'),
(45, 'B10', 50, 'g'),
(33, 'B10', 50, 'g'),
(46, 'B11', 200, 'g'),
(47, 'B11', 50, 'g'),
(12, 'B12', 100, 'g'),
(22, 'B12', 1, 'quả'),
(15, 'B12', 30, 'g'),
(95, 'B12', 5, 'g'),
(48, 'B12', 10, 'g'),
(33, 'B12', 30, 'g'),
(5, 'B12', 5, 'g'),
(36, 'B13', 100, 'g'),
(49, 'B13', 50, 'g'),
(42, 'B13', 2, 'quả'),
(5, 'B13', 5, 'g'),
(50, 'B14', 40, 'g'),
(51, 'B14', 30, 'g'),
(52, 'B14', 100, 'g'),
(33, 'B14', 40, 'g'),
(15, 'B14', 40, 'g'),
(53, 'B14', 20, 'g'),
(49, 'B14', 20, 'g'),
(42, 'B14', 2, 'quả'),
(19, 'B14', 10, 'g'),
(54, 'B14', 20, 'g'),
(55, 'B15', 50, 'g'),
(56, 'B15', 100, 'g'),
(49, 'B15', 30, 'g'),
(96, 'B15', 100, 'g'),
(5, 'B15', 10, 'g'),
(10, 'B15', 10, 'g'),
(30, 'B15', 4, 'quả'),
(42, 'B15', 1, 'quả'),
(3, 'C1', 150, 'g'),
(57, 'C1', 150, 'g'),
(4, 'C1', 20, 'g'),
(5, 'C1', 5, 'g'),
(46, 'C2', 150, 'g'),
(18, 'C2', 150, 'g'),
(4, 'C2', 20, 'g'),
(5, 'C2', 5, 'g'),
(14, 'C3', 200, 'g'),
(59, 'C3', 150, 'g'),
(4, 'C3', 20, 'g'),
(5, 'C3', 5, 'g'),
(55, 'C4', 200, 'g'),
(60, 'C4', 100, 'g'),
(4, 'C4', 20, 'g'),
(5, 'C4', 5, 'g'),
(61, 'C6', 200, 'g'),
(63, 'C6', 150, 'g'),
(4, 'C6', 20, 'g'),
(5, 'C6', 5, 'g'),
(60, 'C5', 200, 'g'),
(8, 'C5', 1, 'quả'),
(4, 'C5', 20, 'g'),
(5, 'C5', 5, 'g'),
(8, 'C7', 1, 'quả'),
(62, 'C7', 150, 'g'),
(4, 'C7', 20, 'g'),
(5, 'C7', 5, 'g'),
(41, 'C8', 150, 'g'),
(63, 'C8', 100, 'g'),
(4, 'C8', 20, 'g'),
(5, 'C8', 5, 'g'),
(12, 'C9', 150, 'g'),
(64, 'C9', 100, 'g'),
(4, 'C9', 20, 'g'),
(5, 'C9', 5, 'g'),
(17, 'C10', 200, 'g'),
(4, 'C10', 20, 'g'),
(5, 'C10', 5, 'g'),
(65, 'C11', 200, 'g'),
(97, 'C11', 150, 'g'),
(4, 'C11', 20, 'g'),
(5, 'C11', 5, 'g'),
(55, 'C12', 150, 'g'),
(66, 'C12', 100, 'g'),
(4, 'C12', 20, 'g'),
(5, 'C12', 5, 'g'),
(14, 'C13', 200, 'g'),
(67, 'C13', 150, 'g'),
(4, 'C13', 20, 'g'),
(5, 'C13', 5, 'g'),
(68, 'C14', 150, 'g'),
(69, 'C14', 120, 'g'),
(4, 'C14', 20, 'g'),
(5, 'C14', 5, 'g'),
(97, 'C15', 150, 'g'),
(67, 'C15', 120, 'g'),
(4, 'C15', 20, 'g'),
(5, 'C15', 5, 'g'),
(70, 'D1', 20, 'g'),
(18, 'D1', 30, 'g'),
(14, 'D1', 20, 'g'),
(13, 'D1', 10, 'g'),
(4, 'D1', 10, 'g'),
(35, 'D2', 100, 'g'),
(18, 'D2', 50, 'g'),
(13, 'D2', 10, 'g'),
(47, 'D2', 10, 'g'),
(4, 'D2', 10, 'g'),
(62, 'D3', 100, 'g'),
(71, 'D3', 10, 'g'),
(4, 'D3', 50, 'g'),
(13, 'D3', 10, 'g'),
(19, 'D3', 10, 'g'),
(72, 'D4', 100, 'g'),
(18, 'D4', 50, 'g'),
(13, 'D4', 10, 'g'),
(4, 'D4', 10, 'g'),
(5, 'D4', 10, 'g'),
(73, 'D5', 100, 'g'),
(74, 'D5', 30, 'g'),
(75, 'D5', 30, 'g'),
(76, 'D5', 30, 'g'),
(33, 'D5', 30, 'g'),
(13, 'D5', 10, 'g'),
(4, 'D5', 10, 'g'),
(8, 'D6', 1, 'quả'),
(22, 'D6', 1, 'quả'),
(13, 'D6', 10, 'g'),
(4, 'D6', 10, 'g'),
(77, 'D7', 100, 'g'),
(18, 'D7', 30, 'g'),
(13, 'D7', 10, 'g'),
(4, 'D7', 10, 'g'),
(98, 'D7', 10, 'g'),
(78, 'D8', 50, 'g'),
(59, 'D8', 50, 'g'),
(79, 'D8', 20, 'g'),
(22, 'D8', 1, 'quả'),
(64, 'D8', 50, 'g'),
(14, 'D8', 50, 'g'),
(98, 'D8', 5, 'g'),
(5, 'D8', 10, 'g'),
(80, 'D9', 100, 'g'),
(81, 'D9', 10, 'g'),
(78, 'D9', 5, 'g'),
(59, 'D9', 10, 'g'),
(79, 'D9', 20, 'g'),
(22, 'D9', 1, 'quả'),
(64, 'D9', 50, 'g'),
(98, 'D9', 5, 'g'),
(5, 'D9', 10, 'g'),
(82, 'D10', 100, 'g'),
(83, 'D10', 50, 'g'),
(13, 'D10', 10, 'g'),
(5, 'D10', 10, 'g'),
(18, 'D11', 50, 'g'),
(60, 'D11', 1, 'quả'),
(84, 'D11', 30, 'g'),
(13, 'D11', 10, 'g'),
(85, 'D11', 10, 'g'),
(5, 'D11', 10, 'g'),
(10, 'D11', 10, 'g'),
(19, 'D11', 10, 'g'),
(4, 'D11', 10, 'g'),
(86, 'D12', 50, 'g'),
(87, 'D12', 100, 'g'),
(88, 'D12', 20, 'g'),
(13, 'D12', 10, 'g'),
(89, 'D13', 50, 'g'),
(18, 'D13', 50, 'g'),
(4, 'D13', 20, 'g'),
(17, 'D14', 70, 'g'),
(90, 'D14', 100, 'g'),
(22, 'D14', 1, 'quả'),
(24, 'D14', 10, 'g'),
(91, 'D14', 10, 'g'),
(4, 'D14', 10, 'g'),
(37, 'D15', 100, 'g'),
(92, 'D15', 10, 'g'),
(84, 'D15', 30, 'g'),
(18, 'D15', 50, 'g'),
(33, 'D15', 10, 'g'),
(4, 'D15', 10, 'g'),
(5, 'D15', 10, 'g');

-- --------------------------------------------------------

--
-- Table structure for table `chitietphieuan`
--

CREATE TABLE `chitietphieuan` (
  `ma_phieu_an` int(10) NOT NULL,
  `buoi_phieu_an` varchar(20) NOT NULL,
  `ma_mon_an` varchar(10) NOT NULL,
  `gia_tien` double NOT NULL,
  `trang_thai_nhan_mon` enum('yes','no') NOT NULL,
  KEY `ma_phieu_an` (`ma_phieu_an`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietphieuan`
--

INSERT INTO `chitietphieuan` (`ma_phieu_an`, `buoi_phieu_an`, `ma_mon_an`, `gia_tien`, `trang_thai_nhan_mon`) VALUES
(1, 'Thứ 2', 'A1', 20000, 'no'),
(1, 'Thứ 2', 'B1', 15000, 'no'),
(1, 'Thứ 2', 'C1', 20000, 'no'),
(1, 'Thứ 2', 'D1', 15000, 'no'),
(1, 'Thứ 2', 'F1', 5000, 'no'),
(1, 'Thứ 3', 'A2', 20000, 'no'),
(1, 'Thứ 3', 'B2', 10000, 'no'),
(1, 'Thứ 3', 'C2', 20000, 'no'),
(1, 'Thứ 3', 'D2', 10000, 'no'),
(1, 'Thứ 3', 'E5', 15000, 'no'),
(5, 'Thứ 5', 'A10', 20000, 'no'),
(5, 'Thứ 5', 'B10', 10000, 'no'),
(5, 'Thứ 5', 'C10', 20000, 'no'),
(5, 'Thứ 5', 'D10', 10000, 'no'),
(5, 'Thứ 5', 'F4', 5000, 'no'),
(5, 'Thứ 6', 'A12', 20000, 'no'),
(5, 'Thứ 6', 'B12', 15000, 'no'),
(5, 'Thứ 6', 'C12', 20000, 'no'),
(5, 'Thứ 6', 'D12', 10000, 'no'),
(5, 'Thứ 6', 'F5', 5000, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `chitietthucdon`
--

CREATE TABLE `chitietthucdon` (
  `ma_chi_tiet` varchar(20) NOT NULL,
  `ma_thuc_don` int(11) NOT NULL,
  `buoi_thuc_don` varchar(20) NOT NULL,
  `so_luong_mon_an` int(11) NOT NULL,
  `ma_mon_an` varchar(10) NOT NULL,
  `hinh_anh` varchar(50) NOT NULL,
  `gia` double NOT NULL,
  UNIQUE KEY `ma_mon_an` (`ma_mon_an`),
  KEY `sanpham` (`ma_mon_an`,`hinh_anh`,`gia`),
  KEY `ma_thuc_don` (`ma_thuc_don`),
  KEY `ma_chi_tiet` (`ma_chi_tiet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietthucdon`
--

INSERT INTO `chitietthucdon` (`ma_chi_tiet`, `ma_thuc_don`, `buoi_thuc_don`, `so_luong_mon_an`, `ma_mon_an`, `hinh_anh`, `gia`) VALUES
('CTT1', 1, 'Thứ 2', 10, 'A1', 'A1.jpg', 20000),
('CTT5', 5, 'Thứ 4', 5, 'A10', 'A10.jpg', 20000),
('CTT5', 5, 'Thứ 5', 5, 'A11', 'A11.jpg', 20000),
('CTT5', 5, 'Thứ 6', 5, 'A13', 'A13.jpg', 20000),
('CTT1', 1, 'Thứ 2', 10, 'A2', 'A2.jpg', 20000),
('CTT1', 1, 'Thứ 3', 10, 'A3', 'A3.jpg', 15000),
('CTT1', 1, 'Thứ 4', 5, 'A4', 'A4.jpg', 20000),
('CTT1', 1, 'Thứ 3', 10, 'A5', 'A5.jpg', 20000),
('CTT1', 1, 'Thứ 5', 5, 'A6', 'A6.jpg', 20000),
('CTT1', 1, 'Thứ 6', 5, 'A7', 'A7.jpg', 15000),
('CTT5', 5, 'Thứ 2', 5, 'A8', 'A8.jpg', 20000),
('CTT5', 5, 'Thứ 3', 5, 'A9', 'A9.jpg', 15000),
('CTT1', 1, 'Thứ 2', 10, 'B1', 'B1.jpg', 15000),
('CTT5', 5, 'Thứ 4', 5, 'B10', 'B10.jpg', 10000),
('CTT5', 5, 'Thứ 5', 5, 'B11', 'B11.jpg', 5000),
('CTT5', 5, 'Thứ 6', 5, 'B13', 'B13.jpg', 10000),
('CTT1', 1, 'Thứ 3', 10, 'B2', 'B2.jpg', 10000),
('CTT1', 1, 'Thứ 4', 5, 'B3', 'B3.jpg', 5000),
('CTT1', 1, 'Thứ 5', 5, 'B4', 'B4.jpg', 5000),
('CTT1', 1, 'Thứ 6', 5, 'B6', 'B6.jpg', 10000),
('CTT5', 5, 'Thứ 2', 5, 'B8', 'B8.jpg', 15000),
('CTT5', 5, 'Thứ 3', 5, 'B9', 'B9.jpg', 15000),
('CTT1', 1, 'Thứ 2', 10, 'C1', 'C1.jpg', 20000),
('CTT5', 5, 'Thứ 4', 5, 'C10', 'C10.jpg', 20000),
('CTT5', 5, 'Thứ 5', 5, 'C11', 'C11.jpg', 20000),
('CTT5', 5, 'Thứ 6', 5, 'C12', 'C12.jpg', 20000),
('CTT1', 1, 'Thứ 2', 10, 'C2', 'C2.jpg', 20000),
('CTT1', 1, 'Thứ 3', 10, 'C3', 'C3.jpg', 15000),
('CTT1', 1, 'Thứ 3', 10, 'C4', 'C4.jpg', 20000),
('CTT1', 1, 'Thứ 4', 5, 'C5', 'C5.jpg', 15000),
('CTT1', 1, 'Thứ 5', 5, 'C6', 'C6.jpg', 20000),
('CTT1', 1, 'Thứ 6', 5, 'C7', 'C7.jpg', 15000),
('CTT5', 5, 'Thứ 2', 5, 'C8', 'C8.jpg', 20000),
('CTT5', 5, 'Thứ 3', 5, 'C9', 'C9.jpg', 20000),
('CTT1', 1, 'Thứ 2', 10, 'D1', 'D1.jpg', 15000),
('CTT5', 5, 'Thứ 4', 5, 'D10', 'D10.jpg', 10000),
('CTT5', 5, 'Thứ 5', 5, 'D11', 'D11.jpg', 15000),
('CTT5', 5, 'Thứ 6', 5, 'D12', 'D12.jpg', 10000),
('CTT1', 1, 'Thứ 3', 10, 'D2', 'D2.jpg', 10000),
('CTT1', 1, 'Thứ 4', 5, 'D3', 'D3.jpg', 10000),
('CTT1', 1, 'Thứ 5', 5, 'D4', 'D4.jpg', 10000),
('CTT1', 1, 'Thứ 6', 5, 'D5', 'D5.jpg', 10000),
('CTT5', 5, 'Thứ 2', 5, 'D8', 'D8.jpg', 10000),
('CTT5', 5, 'Thứ 3', 5, 'D9', 'D9.jpg', 15000),
('CTT1', 1, 'Thứ 2', 10, 'E1', 'E1.jpg', 5000),
('CTT5', 5, 'Thứ 3', 5, 'E11', 'E11.jpg', 10000),
('CTT1', 1, 'Thứ 3', 10, 'E13', 'E13.jpg', 10000),
('CTT1', 1, 'Thứ 2', 10, 'E3', 'E3.jpg', 10000),
('CTT1', 1, 'Thứ 3', 10, 'E4', 'E4.jpg', 10000),
('CTT1', 1, 'Thứ 2', 10, 'E5', 'E5.jpg', 15000),
('CTT1', 1, 'Thứ 3', 10, 'E6', 'E6.jpg', 5000),
('CTT5', 5, 'Thứ 2', 5, 'E8', 'E8.jpg', 10000),
('CTT1', 1, 'Thứ 2', 10, 'F1', 'F1.jpg', 5000),
('CTT5', 5, 'Thứ 6', 5, 'F11', 'F11.jpg', 5000),
('CTT1', 1, 'Thứ 3', 10, 'F2', 'F2.jpg', 5000),
('CTT1', 1, 'Thứ 4', 5, 'F3', 'F3.jpg', 5000),
('CTT1', 1, 'Thứ 5', 5, 'F4', 'F4.jpg', 5000),
('CTT1', 1, 'Thứ 6', 5, 'F5', 'F5.jpg', 5000),
('CTT5', 5, 'Thứ 4', 5, 'F6', 'F6.jpg', 5000),
('CTT5', 5, 'Thứ 5', 5, 'F8', 'F8.jpg', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `danhsachthucdon`
--

CREATE TABLE `danhsachthucdon` (
  `ma_thuc_don` int(11) NOT NULL auto_increment,
  `ma_chi_tiet` varchar(20) NOT NULL,
  `ngay_bat_dau` date NOT NULL,
  `ngay_ket_thuc` date NOT NULL,
  `trang_thai` varchar(11) NOT NULL default '0 1 2',
  PRIMARY KEY  (`ma_thuc_don`),
  KEY `ma_chi_tiet` (`ma_chi_tiet`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `danhsachthucdon`
--

INSERT INTO `danhsachthucdon` (`ma_thuc_don`, `ma_chi_tiet`, `ngay_bat_dau`, `ngay_ket_thuc`, `trang_thai`) VALUES
(1, 'CTT1', '2023-10-09', '2023-10-13', '0'),
(5, 'CTT5', '2023-11-06', '2023-11-17', '1');

-- --------------------------------------------------------

--
-- Table structure for table `nguyenlieu`
--

CREATE TABLE `nguyenlieu` (
  `ma_nguyen_lieu` tinyint(4) NOT NULL auto_increment,
  `ten_nguyen_lieu` varchar(50) NOT NULL,
  `gia_tien` double NOT NULL,
  PRIMARY KEY  (`ma_nguyen_lieu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=99 ;

--
-- Dumping data for table `nguyenlieu`
--

INSERT INTO `nguyenlieu` (`ma_nguyen_lieu`, `ten_nguyen_lieu`, `gia_tien`) VALUES
(1, 'Gà', 5000),
(2, 'Bột bắp', 2000),
(3, 'Tôm', 10000),
(4, 'Hành tím', 1000),
(5, 'Tỏi', 1000),
(6, 'Ba rọi', 10000),
(7, 'Bột chiên', 2000),
(8, 'Trứng gà', 4000),
(9, 'Cá', 10000),
(10, 'Ớt', 1000),
(11, 'Sả', 1000),
(12, 'Mực', 10000),
(13, 'Hành lá', 1000),
(14, 'Đậu hũ', 5000),
(15, 'Hành tây', 1000),
(16, 'Cá trứng', 10000),
(17, 'Sườn heo', 10000),
(18, 'Thịt heo xay', 10000),
(19, 'Ngò rí', 1000),
(20, 'Ớt xay', 1000),
(21, 'Cá thu', 10000),
(22, 'Cà chua', 2000),
(23, 'Ớt sừng', 5000),
(24, 'Thì là', 1000),
(25, 'Bí ngòi', 2000),
(26, 'Nấm bào ngư xám', 3000),
(27, 'Nấm đùi gà', 3000),
(28, 'Ớt chuông vàng', 3000),
(29, 'Ớt sừng không cay', 3000),
(30, 'Tắc', 1000),
(31, 'Rau húng lùi', 1000),
(32, 'Búp súp lơ xanh', 5000),
(33, 'Cà rốt', 4000),
(34, 'Củ cải trắng', 4000),
(35, 'Cải xanh', 4000),
(36, 'Rau muống', 4000),
(37, 'Bắp cải ', 4000),
(38, 'Cây xà lách', 4000),
(39, 'Dưa leo', 2000),
(40, 'Trái bơ', 4000),
(41, 'Ức gà', 4000),
(42, 'Trái chanh', 1000),
(43, 'Ớt chuông đỏ', 3000),
(44, 'Bắp cải tím', 4000),
(45, 'Hành tây tím', 1000),
(46, 'Đậu cô ve', 4000),
(47, 'Gừng', 2000),
(48, 'Húng quế', 1000),
(49, 'Đậu phộng', 1000),
(50, 'Tôm sú', 10000),
(51, 'Thịt ba chỉ ', 10000),
(52, 'Ngó sen', 4000),
(53, 'Cần tây', 2000),
(54, 'Rau răm', 1000),
(55, 'Thịt bò', 10000),
(56, 'Rau khoai', 2000),
(57, 'Cải thìa', 4000),
(59, 'Giá đỗ', 2000),
(60, 'Khổ qua', 2000),
(61, 'Mề gà', 10000),
(62, 'Bầu', 4000),
(63, 'Nấm', 3000),
(64, 'Dứa', 3000),
(65, 'Măng', 4000),
(66, 'Củ sắn', 3000),
(67, 'Bông cải', 3000),
(68, 'Lòng gà', 10000),
(69, 'Mướp', 3000),
(70, 'Rong biển nấu canh', 4000),
(71, 'Tôm khô', 4000),
(72, 'Bí đỏ', 4000),
(73, 'Xương heo', 10000),
(74, 'Củ dền', 3000),
(75, 'Su su', 3000),
(76, 'Khoai tây', 3000),
(77, 'Khoai mỡ', 3000),
(78, 'Me chua', 1000),
(79, 'Bạc hà', 2000),
(80, 'Cá lóc', 10000),
(81, 'Đậu bắp', 4000),
(82, 'Rau xà lách xoong', 4000),
(83, 'Thịt bò bằm', 10000),
(84, 'Giò sống', 5000),
(85, 'Nầm mèo', 2000),
(86, 'Đậu hũ non', 4000),
(87, 'Bông hẹ', 2000),
(88, 'Lá hẹ', 2000),
(89, 'Rau ngót', 4000),
(90, 'Cải chua', 3000),
(91, 'Hành ngò', 1000),
(92, 'Bông cải xanh', 4000),
(93, 'Chả cá', 10000),
(94, 'Quả táo', 4000),
(95, 'Húng lủi', 1000),
(96, 'Hành', 1000),
(97, 'Thịt heo', 10000),
(98, 'Ngò gai', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvientapdoan`
--

CREATE TABLE `nhanvientapdoan` (
  `ma_nhan_vien` varchar(10) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `email` varchar(50) default NULL,
  `dia_chi` varchar(50) NOT NULL,
  `so_dien_thoai` int(10) NOT NULL,
  `chuc_vu` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('admin','user') character set utf8 collate utf8_unicode_ci NOT NULL,
  `trang_thai` enum('deleted','using') NOT NULL,
  PRIMARY KEY  (`ma_nhan_vien`),
  KEY `role` (`role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvientapdoan`
--

INSERT INTO `nhanvientapdoan` (`ma_nhan_vien`, `ho_ten`, `email`, `dia_chi`, `so_dien_thoai`, `chuc_vu`, `password`, `role`, `trang_thai`) VALUES
('AT56', 'Lê Anh Tài', 'anhtai@gmail.com', '12 Nguyễn Văn Bảo, Gò Vấp, tp HCM', 126465746, 'Nhân viên DE', '202cb962ac59075b964b07152d234b70', 'user', 'using'),
('DA77', 'Nguyễn Đức Anh', 'ducanh@gmail.com', 'An Giang', 1233445677, 'Phục vụ', '202cb962ac59075b964b07152d234b70', 'user', 'deleted'),
('HP78', 'Hồ Viết Phúc', 'vietphuc@gmail.com', '12 Nguyễn Văn Bảo, Gò Vấp, tp HCM', 124647679, 'Nhân viên CS', 'e10adc3949ba59abbe56e057f20f883e', 'user', 'using'),
('LT12', 'Lê Thị Thanh Trúc', NULL, '12 Nguyễn Văn Bảo, Gò Vấp, tp HCM', 295378785, 'Đầu bếp', '81dc9bdb52d04dc20036dbd8313ed055', 'user', 'using'),
('MT89', 'Nguyễn Trần Minh Thuận', NULL, '12 Nguyễn Văn Bảo, Gò Vấp, tp HCM', 125873988, 'Nhân viên IT', 'b59c67bf196a4758191e42f76670ceba', 'admin', 'using'),
('TT88', 'Nguyễn Thị Ánh Tuyết', 'tuyet@gmail.com', '12 Nguyễn Văn Bảo, Gò Vấp, tp HCM', 1234567890, 'Quản lý', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 'using'),
('VT46', 'Lê Văn Túc', 'thuanreal2002@gmail.com', '12 Nguyễn Văn Bảo, Gò Vấp, tp HCM', 553698353, 'Phục vụ', '202cb962ac59075b964b07152d234b70', 'user', 'using');

-- --------------------------------------------------------

--
-- Table structure for table `phieuan`
--

CREATE TABLE `phieuan` (
  `ma_phieu_an` int(10) NOT NULL auto_increment,
  `ma_nhan_vien` varchar(10) NOT NULL,
  `ngay_bat_dau` date NOT NULL,
  `ngay_ket_thuc` date NOT NULL,
  `trang_thai` enum('A','B','C') NOT NULL,
  `nhan_xet` varchar(255) default NULL,
  `tong_tien_phieu_an` double NOT NULL,
  PRIMARY KEY  (`ma_phieu_an`),
  KEY `ma_nhan_vien` (`ma_nhan_vien`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `phieuan`
--

INSERT INTO `phieuan` (`ma_phieu_an`, `ma_nhan_vien`, `ngay_bat_dau`, `ngay_ket_thuc`, `trang_thai`, `nhan_xet`, `tong_tien_phieu_an`) VALUES
(1, 'AT56', '2023-10-09', '2023-10-13', 'A', NULL, 100000),
(2, 'HP78', '2023-10-16', '2023-10-20', 'B', NULL, 200000),
(3, 'LT12', '2023-10-23', '2023-10-27', 'C', NULL, 100000),
(4, 'MT89', '2023-10-30', '2023-11-03', 'A', NULL, 200000),
(5, 'TT88', '2023-10-23', '2023-10-27', 'A', NULL, 100000),
(6, 'VT46', '2023-11-06', '2023-11-10', 'B', NULL, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `ma_mon_an` varchar(10) NOT NULL,
  `ten_mon_an` varchar(50) NOT NULL,
  `thanh_phan` varchar(200) NOT NULL,
  `mo_ta` varchar(200) default NULL,
  `hinh_anh` varchar(50) NOT NULL,
  `gia` double NOT NULL,
  `phan_loai` varchar(50) NOT NULL,
  PRIMARY KEY  (`ma_mon_an`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ma_mon_an`, `ten_mon_an`, `thanh_phan`, `mo_ta`, `hinh_anh`, `gia`, `phan_loai`) VALUES
('A1', 'Gà chiên nước mắm', '150g gà, 20g hành tím, 5g tỏi\r\n', NULL, 'A1.jpg', 20000, 'Món chiên'),
('A10', 'Cá trứng chiên xù', '120g cá trứng, 120g bột chiên giòn, 1 quả trứng\r\n', NULL, 'A10.jpg', 20000, 'Món chiên'),
('A11', 'Tôm rang', '150g tôm, 10g hành tây, 10g tỏi, 5g ớt\r\n', NULL, 'A11.jpg', 20000, 'Món chiên'),
('A12', 'Sườn heo chiên sốt nước mắm', '120g sườn heo, 10g hành tây, 10g tỏi\r\n', NULL, 'A12.jpg', 20000, 'Món chiên'),
('A13', 'Đậu hũ sốt thịt bằm', '100g thịt heo xay, 100g đậu hũ non, 1 quả trứng gà, 1 củ hành tím, 10g ngò rí, 10g ớt xay\r\n', NULL, 'A13.jpg', 20000, 'Món chiên'),
('A14', 'Cá thu sốt cà chua', '100g cá thu, 1 quả cà chua, 5g tỏi, 5g ớt sừng, 5g ngò rí, 5g thì là, 2g hành lá\r\n', NULL, 'A14.jpg', 20000, 'Món chiên'),
('A15', 'Trứng cuộn rau củ', '1 quả trứng, 40g thịt heo xay, 50g hành tây, 50g cà rốt, 50g bí ngòi, 10g hành lá\r\n', NULL, 'A15.jpg', 15000, 'Món chiên'),
('A2', 'Ba rọi chiên giòn', '150g ba rọi, 150g bột chiên giòn, 1 quả trứng \r\n', NULL, 'A2.jpg', 20000, 'Món chiên'),
('A3', 'Trứng  chiên', '1 quả trứng, 5g hành lá\r\n', NULL, 'A3.jpg', 15000, 'Món chiên'),
('A4', 'Cá chiên xả ớt', '150g cá, 5g ớt, 5g sả\r\n', NULL, 'A4.jpg', 20000, 'Món chiên'),
('A5', 'Cánh gà chiên giòn', '120g cánh gà, 120g bột chiên giòn, 1 quả trứng \r\n', NULL, 'A5.jpg', 20000, 'Món chiên'),
('A6', 'Mực chiên tỏi ớt', '150g mực, 5g bột bắp, 10g tỏi, 5g hành lá, 5g ớt \r\n', NULL, 'A6.jpg', 20000, 'Món chiên'),
('A7', 'Đậu hũ chiên tẩm hành', '200g đậu hũ, 10g hành tây, 10g tỏi\r\n', NULL, 'A7.jpg', 15000, 'Món chiên'),
('A8', 'Chả cá chiên nước mắm', '100g chả cá, 10g tỏi, 10g hành tím\r\n', NULL, 'A8.jpg', 20000, 'Món chiên'),
('A9', 'Đậu hũ chiên sả ớt', '200g đậu hũ, 10 hành tây, 10g tỏi,5g sả, 5g ớt\r\n', NULL, 'A9.jpg', 15000, 'Món chiên'),
('B1', 'Gỏi sụn rong biển', '50g nấm bào ngư xám, 50g nấm đùi gà,ớt chuông vàng 1 quả, ớt sừng không cay 1 quả, tắc 3 quả, 10g đậu phộng rang, 10g rau húng lủi \r\n', NULL, 'B1.jpg', 15000, 'Món rau'),
('B10', 'Salad bắp cải tím sốt mayonnaise', '100g bắp cải tím, 100g bắp cải trắng, 1 củ cà rốt, 1 củ hành tây tím\r\n', NULL, 'B10.jpg', 10000, 'Món rau'),
('B11', 'Salad đậu que', '', NULL, 'B11.jpg', 5000, 'Món rau'),
('B12', 'Salad mực chua ngọt', '100g mực, 1 quả cà chua, 30g củ hành tây, 5g húng lủi, 10g húng quế, 30g cà rốt, 5g tỏi\r\n', NULL, 'B12.jpg', 15000, 'Món rau'),
('B13', 'Gỏi rau muống', '100g rau muống, 50g đậu phộng, 2 quả chanh, 5g tỏi\r\n', NULL, 'B13.jpg', 10000, 'Món rau'),
('B14', 'Gỏi ngó sen tôm thịt', '40g tôm sú, 30g thịt ba chỉ, 100g ngó sen, 40g cà rốt, 40g hành tây, 20g cần tây, 20g đậu phộng, 2 quả chanh, 10 g ngò rí, 20g rau răm \r\n', NULL, 'B14.jpg', 20000, 'Món rau'),
('B15', 'Gỏi rau lang thịt bò', '50g thịt bò mềm, 100g rau khoai, 30g đậu phộng, 1 củ hành tây, 1 củ tỏi, 1 trái ớt, 4 trái tắc, 1 trái chanh\r\n', NULL, 'B15.jpg', 20000, 'Món rau'),
('B2', 'Rau củ luộc', '20g búp súp lơ xanh, 20g củ cà rốt, 20g củ cải trắng \r\n', NULL, 'B2.jpg', 10000, 'Món rau'),
('B3', 'Rau cải luộc', '100g cải xanh\r\n', NULL, 'B3.jpg', 5000, 'Món rau'),
('B4', 'Rau muống luộc', '100g rau muống\r\n', NULL, 'B4.jpg', 5000, 'Món rau'),
('B5', 'Bắp cải luộc', '100g bắp cải\r\n', NULL, 'B5.jpg', 5000, 'Món rau'),
('B6', 'Salad dầu giấm', '50g cây xà lách, 1 quả cà chua, 50g củ hành tây, 1/2 trái dưa leo, 1 trái ớt, 1 củ tỏi, 10g ngò rí\r\n', NULL, 'B6.jpg', 10000, 'Món rau'),
('B7', 'Salad rau củ ức gà', '1/2 trái dưa leo, 1 quả cà chua, 1/4 củ hành tây, 1/2 trái bơ, 50g ức gà nướng, 1 trái chanh\r\n', NULL, 'B7.jpg', 15000, 'Món rau'),
('B8', 'Salad rau củ trứng luộc', '1 quả trứng, 1/4 củ cà rốt, 1/2 quả ớt chuông đỏ, 1/2 trái bơ, 2 củ hành tím\r\n', NULL, 'B8.jpg', 15000, 'Món rau'),
('B9', 'Salad bắp cải tím trộn dầu giấm', '100g bắp cải tím, 100g thịt ba chỉ, 1/2 quả táo, 1 củ cà rốt\r\n', NULL, 'B9.jpg', 15000, 'Món rau'),
('C1', 'Cải thìa xào tôm', '150g tôm, 150g cải thìa, 20g hành tím, 5g tỏi\r\n', NULL, 'C1.jpg', 20000, 'Món xào'),
('C10', 'Sườn xào chua ngọt', '200g sườn heo, 20g hành tím, 5g tỏi\r\n', NULL, 'C10.jpg', 20000, 'Món xào'),
('C11', 'Măng xào thịt heo', '200 g măng (thái lát mỏng), 150g thịt, 20g hành tím, 5g tỏi\r\n', NULL, 'C11.jpg', 20000, 'Món xào'),
('C12', 'Bò xào củ sắn', '150g bò, 100g củ sắn, 20g hành tím, 5g tỏi\r\n', NULL, 'C12.jpg', 20000, 'Món xào'),
('C13', 'Đậu hũ xào bông cải', '200 đậu hũ, 150g bông cải, 20g hành tím, 5g tỏi\r\n', NULL, 'C13.jpg', 15000, 'Món xào'),
('C14', 'Lòng gà xào mướp', '150g lòng gà, 120g mướp, 20g hành tím, 5g tỏi\r\n', NULL, 'C14.jpg', 20000, 'Món xào'),
('C15', 'Thịt xào bông cải', '150g thịt, 120g bông cải, 20g hành tím, 5g tỏi\r\n', NULL, 'C15.jpg', 20000, 'Món xào'),
('C2', 'Đậu cô ve xào thịt', '150g đậu cô ve, 150g thịt, 20g hành tím, 5g tỏi\r\n', NULL, 'C2.jpg', 20000, 'Món xào'),
('C3', 'Đậu hũ xào giá', '200 đậu hũ, 150g giá đỗ, 20g hành tím, 5g tỏi\r\n', NULL, 'C3.jpg', 15000, 'Món xào'),
('C4', 'Bò xào khổ qua', '200g thịt bò, 100g khổ qua, 20g hành tím, 5g tỏi\r\n', NULL, 'C4.jpg', 20000, 'Món xào'),
('C5', 'Khổ qua xào trứng', '200g khổ qua, 1 quả trứng, 20g hành tím, 5g tỏi\r\n', NULL, 'C5.jpg', 15000, 'Món xào'),
('C6', 'Mề gà xào nấm', '200g mề gà, 150g nấm, 20g hành tím, 5g tỏi\r\n', NULL, 'C6.jpg', 20000, 'Món xào'),
('C7', 'Trứng xào bầu', '1 quả trứng, 150g bầu, 20g hành tím, 5g tỏi\r\n', NULL, 'C7.jpg', 15000, 'Món xào'),
('C8', 'Ức gà xào nấm', '150g ức gà, 100g nấm, 20g hành tím, 5g tỏi\r\n', NULL, 'C8.jpg', 20000, 'Món xào'),
('C9', 'Mực ống xào dứa', '150g mực, 100g dứa, 20g hành tím, 5g tỏi\r\n', NULL, 'C9.jpg', 20000, 'Món xào'),
('D1', 'Canh rong biển thịt bằm', '20g rong biển nấu canh, 30g thịt heo bằm, 20g đậu hũ, 10g hành lá, 10g hành tím\r\n', NULL, 'D1.jpg', 15000, 'Món canh'),
('D10', 'Canh rau xà lách xoong thịt bò', '100g rau xà lách xoong, 50g thịt bò bằm, 10g hành lá, 10g tỏi\r\n', NULL, 'D10.jpg', 10000, 'Món canh'),
('D11', 'Canh khổ qua nhồi thịt', '50g thịt heo bằm, 1 trái khổ qua, 30g giò sống, 10g hành lá, 10g ớt, 10g tỏi, 10g nấm mèo, 10g ngò rí, 10g hành tím\r\n', NULL, 'D11.jpg', 15000, 'Món canh'),
('D12', 'Canh đậu hũ non nấu hẹ', '50g đậu hũ non, 100g bông hẹ, 20g lá hẹ, 10g hành lá\r\n', NULL, 'D12.jpg', 10000, 'Món canh'),
('D13', 'Canh rau ngót', '50g rau ngót, 50g thịt heo bằm, 20g hành tím\r\n', NULL, 'D13.jpg', 10000, 'Món canh'),
('D14', 'Canh cải chua sườn non', '70g sườn non, 100g cải chua, 1 quả cà chua, 10g thì là, 10g hành ngò, 10g hành tím\r\n', NULL, 'D14.jpg', 15000, 'Món canh'),
('D15', 'Canh bắp cải thịt viên', '100g bắp cải, 10g bông cải xanh, 30g giò sống, 50g thịt băm, 10g cà rốt, 10g hành tím, 10g tỏi\r\n', NULL, 'D15.jpg', 15000, 'Món canh'),
('D2', 'Canh rau cải ngọt', '100g rau cải, 50g thịt heo bằm, 10g hành lá, 10g gừng, 10g hành tím\r\n', NULL, 'D2.jpg', 10000, 'Món canh'),
('D3', 'Canh bầu tôm khô', '100g bầu, 10g tôm khô, 1 củ hành tím, 10g hành lá, 10g ngò rí\r\n', NULL, 'D3.jpg', 10000, 'Món canh'),
('D4', 'Canh bí đao thịt bằm', '100g bí đỏ, 50g thịt heo bằm, 10g hành lá, 10g hành tím, 10g tỏi\r\n', NULL, 'D4.jpg', 10000, 'Món canh'),
('D5', 'Canh xương hầm rau củ', '100g xương heo, 30g củ dền, 30g su su, 30g cà rốt, 30g khoai tây,  10g hành lá, 10g hành tím\r\n', NULL, 'D5.jpg', 10000, 'Món canh'),
('D6', 'Canh cà chua trứng', '1 quả trứng, 1 quả cà chua, 10g hành lá, 10g hành tím\r\n', NULL, 'D6.jpg', 10000, 'Món canh'),
('D7', 'Canh khoai mỡ thịt bằm', '100g khoai mỡ, 30g thịt heo bằm, 10g hành lá, 10g hành tím, 10g ngò gai', NULL, 'D7.jpg', 10000, 'Món canh'),
('D8', 'Canh chua chay', '50g me chua, 50g giá, 20g bạc hà, 1 quả cà chua, 50g dứa, 50g đậu hũ, 5g ngò gai, 1 quả ớt\r\n', NULL, 'D8.jpg', 10000, 'Món canh'),
('D9', 'Canh chua cá lóc', '100g cá lóc, 10g đậu bắp, 5g me chua, 10g giá, 20g bạc hà, 1 quả cà chua, 50g dứa, 5g ngò gai, 1 quả ớt\r\n', NULL, 'D9.jpg', 15000, 'Món canh'),
('E1', 'Nước suối ', 'NULL', NULL, 'E1.jpg', 5000, 'Nước'),
('E10', 'Trà đá', 'NULL\r\n', NULL, 'E10.jpg', 5000, 'Nước'),
('E11', 'Trà sữa', 'NULL\r\n', NULL, 'E11.jpg', 10000, 'Nước'),
('E12', '7up', 'NULL\r\n', NULL, 'E12.jpg', 5000, 'Nước'),
('E13', 'Red bull', 'NULL\r\n', NULL, 'E13.png', 10000, 'Nước'),
('E14', 'Trà giải nhiệt', 'NULL\r\n', NULL, 'E14.jpg', 10000, 'Nước'),
('E15', 'Nước ép dưa hấu', 'NULL\r\n', NULL, 'E15.jpg', 10000, 'Nước'),
('E2', 'Nước ép cam', 'NULL\r\n', NULL, 'E2.jpg', 10000, 'Nước'),
('E3', 'Trà chanh', 'NULL\r\n', NULL, 'E3.jpg', 10000, 'Nước'),
('E4', 'Trà tắc', 'NULL\r\n', NULL, 'E4.jpg', 10000, 'Nước'),
('E5', 'Cà phê', 'NULL\r\n', NULL, 'E5.jpg', 15000, 'Nước'),
('E6', 'Coca', 'NULL\r\n', NULL, 'E6.jpg', 5000, 'Nước'),
('E7', 'Pepsi', 'NULL\r\n', NULL, 'E7.jpg', 5000, 'Nước'),
('E8', 'Chanh dây', 'NULL\r\n', NULL, 'E8.jpg', 10000, 'Nước'),
('E9', 'Rau má', 'NULL\r\n', NULL, 'E9.jpg', 10000, 'Nước'),
('F1', 'Dưa hấu', 'NULL\r\n', NULL, 'F1.jpg', 5000, 'Trái cây'),
('F10', 'Mít', 'NULL\r\n', NULL, 'F10.jpg', 5000, 'Trái cây'),
('F11', 'Táo', 'NULL\r\n', NULL, 'F11.jpg', 5000, 'Trái cây'),
('F12', 'Lê', 'NULL\r\n', NULL, 'F12.jpg', 5000, 'Trái cây'),
('F13', 'Nho', 'NULL\r\n', NULL, 'F13.jpg', 5000, 'Trái cây'),
('F14', 'Nhãn', 'NULL\r\n', NULL, 'F14.jpg', 5000, 'Trái cây'),
('F15', 'Chôm chôm', 'NULL\r\n', NULL, 'F15.jpg', 5000, 'Trái cây'),
('F2', 'Cam', 'NULL\r\n', NULL, 'F2.jpg', 5000, 'Trái cây'),
('F3', 'Thanh long', 'NULL\r\n', NULL, 'F3.jpg', 5000, 'Trái cây'),
('F4', 'Ổi', 'NULL\r\n', NULL, 'F4.jpg', 5000, 'Trái cây'),
('F5', 'Xoài', 'NULL\r\n', NULL, 'F5.jpg', 5000, 'Trái cây'),
('F6', 'Bưởi', 'NULL\r\n', NULL, 'F6.jpg', 5000, 'Trái cây'),
('F7', 'Dứa', 'NULL\r\n', NULL, 'F7.jpg', 5000, 'Trái cây'),
('F8', 'Đu đủ', 'NULL\r\n', NULL, 'F8.jpg', 5000, 'Trái cây'),
('F9', 'Chuối', 'NULL\r\n', NULL, 'F9.jpg', 5000, 'Trái cây');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ma_nhan_vien` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  KEY `nhanvientapdoan` (`ma_nhan_vien`),
  KEY `password` (`password`),
  KEY `role` (`role`),
  KEY `role_2` (`role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`ma_nhan_vien`, `password`, `role`) VALUES
('MT89', '1111', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `ma_cong_no` tinyint(4) NOT NULL auto_increment,
  `ma_nhan_vien` varchar(10) NOT NULL,
  `ma_phieu_an` int(10) NOT NULL,
  `tong_tien_phieu_an` double NOT NULL,
  `tong_tien_cong_no` double NOT NULL,
  `ngay_thanh_toan` date NOT NULL,
  PRIMARY KEY  (`ma_cong_no`),
  KEY `ma_nhan_vien` (`ma_nhan_vien`,`ma_phieu_an`),
  KEY `ma_phieu_an` (`ma_phieu_an`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `thanhtoan`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietnguyenlieu`
--
ALTER TABLE `chitietnguyenlieu`
  ADD CONSTRAINT `chitietnguyenlieu_ibfk_1` FOREIGN KEY (`ma_nguyen_lieu`) REFERENCES `nguyenlieu` (`ma_nguyen_lieu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietnguyenlieu_ibfk_2` FOREIGN KEY (`ma_mon_an`) REFERENCES `sanpham` (`ma_mon_an`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietphieuan`
--
ALTER TABLE `chitietphieuan`
  ADD CONSTRAINT `chitietphieuan_ibfk_1` FOREIGN KEY (`ma_phieu_an`) REFERENCES `phieuan` (`ma_phieu_an`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietthucdon`
--
ALTER TABLE `chitietthucdon`
  ADD CONSTRAINT `chitietthucdon_ibfk_1` FOREIGN KEY (`ma_mon_an`) REFERENCES `sanpham` (`ma_mon_an`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietthucdon_ibfk_2` FOREIGN KEY (`ma_thuc_don`) REFERENCES `danhsachthucdon` (`ma_thuc_don`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phieuan`
--
ALTER TABLE `phieuan`
  ADD CONSTRAINT `phieuan_ibfk_1` FOREIGN KEY (`ma_nhan_vien`) REFERENCES `nhanvientapdoan` (`ma_nhan_vien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`ma_nhan_vien`) REFERENCES `nhanvientapdoan` (`ma_nhan_vien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `taikhoan_ibfk_2` FOREIGN KEY (`role`) REFERENCES `nhanvientapdoan` (`role`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD CONSTRAINT `thanhtoan_ibfk_1` FOREIGN KEY (`ma_nhan_vien`) REFERENCES `nhanvientapdoan` (`ma_nhan_vien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `thanhtoan_ibfk_2` FOREIGN KEY (`ma_phieu_an`) REFERENCES `phieuan` (`ma_phieu_an`) ON DELETE CASCADE ON UPDATE CASCADE;
