-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2023 lúc 08:13 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `databa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietthucdon`
--

CREATE TABLE `chitietthucdon` (
  `buoi_thuc_don` varchar(20) NOT NULL,
  `ma_mon_an` varchar(10) NOT NULL,
  `ten_mon_an` varchar(50) NOT NULL,
  `hinh_anh` varchar(50) NOT NULL,
  `gia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsachthucdon`
--

CREATE TABLE `danhsachthucdon` (
  `ma_thuc_don` int(11) NOT NULL,
  `chi_tiet_thuc_don` varchar(10) NOT NULL,
  `ngay_bat_dau` date NOT NULL,
  `ngay_ket_thuc` date NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvientapdoan`
--

CREATE TABLE `nhanvientapdoan` (
  `ma_nhan_vien` varchar(10) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dia_chi` varchar(50) NOT NULL,
  `so_dien_thoai` int(10) NOT NULL,
  `chuc_vu` varchar(50) NOT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvientapdoan`
--

INSERT INTO `nhanvientapdoan` (`ma_nhan_vien`, `ho_ten`, `email`, `dia_chi`, `so_dien_thoai`, `chuc_vu`, `password`) VALUES
('AT56', 'Lê Anh Tài', NULL, '12 Nguyễn Văn Bảo, Gò Vấp, tp HCM', 126465746, 'Nhân viên DE', 123789),
('HP78', 'Hồ Viết Phúc', NULL, '12 Nguyễn Văn Bảo, Gò Vấp, tp HCM', 124647679, 'Nhân viên CS', 987321),
('LT12', 'Lê Thị Thanh Trúc', NULL, '12 Nguyễn Văn Bảo, Gò Vấp, tp HCM', 295378785, 'Đầu bếp', 654321),
('MT89', 'Nguyễn Trần Minh Thuận', NULL, '12 Nguyễn Văn Bảo, Gò Vấp, tp HCM', 125873988, 'Nhân viên IT', 987654),
('TT88', 'Nguyễn Thị Ánh Tuyết', NULL, '12 Nguyễn Văn Bảo, Gò Vấp, tp HCM', 123456789, 'Quản lý bếp', 123456),
('VT46', 'Lê Văn Túc', NULL, '12 Nguyễn Văn Bảo, Gò Vấp, tp HCM', 553698353, 'Nhân viên phục vụ', 456789);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieuan`
--

CREATE TABLE `phieuan` (
  `ma_phieu_an` int(10) NOT NULL,
  `ma_nhan_vien` varchar(10) NOT NULL,
  `ngay` date NOT NULL,
  `trang_thai` varchar(50) NOT NULL DEFAULT '0 1 2',
  `nhan_xet` varchar(255) DEFAULT NULL,
  `tong_tien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phieuan`
--

INSERT INTO `phieuan` (`ma_phieu_an`, `ma_nhan_vien`, `ngay`, `trang_thai`, `nhan_xet`, `tong_tien`) VALUES
(1, 'AT56', '2023-10-16', '1 ', NULL, 100000),
(2, 'HP78', '2023-11-08', '2', NULL, 200000),
(3, 'LT12', '2023-11-01', '0', NULL, 100000),
(4, 'MT89', '2023-10-31', '1 ', NULL, 200000),
(5, 'TT88', '2023-10-26', '1', NULL, 100000),
(6, 'VT46', '2023-11-02', '2', NULL, 200000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ma_mon_an` varchar(10) NOT NULL,
  `ten_mon_an` varchar(50) NOT NULL,
  `thanh_phan` varchar(200) NOT NULL,
  `mo_ta` varchar(200) DEFAULT NULL,
  `hinh_anh` varchar(50) NOT NULL,
  `gia` double NOT NULL,
  `phan_loai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ma_mon_an`, `ten_mon_an`, `thanh_phan`, `mo_ta`, `hinh_anh`, `gia`, `phan_loai`) VALUES
('A1', 'Gà chiên nước mắm', '150g gà, 20g hành tím, 5g tỏi\r\n', NULL, 'A1.jpg', 20000, 'Món chiên'),
('A10', 'Cá trứng chiên xù', '120g cá trứng, 120g bột chiên giòn, 1 quả trứng\r\n', NULL, 'A10.jpg', 20000, 'Món chiên'),
('A11', 'Tôm rang', '150g tôm, 10 hành tây, 10g tỏi, 5g ớt\r\n', NULL, 'A11.jpg', 20000, 'Món chiên'),
('A12', 'Sườn heo chiên sốt nước mắm', '120g sườn heo, 10 hành tây, 10g tỏi\r\n', NULL, 'A12.jpg', 20000, 'Món chiên'),
('A13', 'Đậu hũ sốt thịt bằm', '100g thịt heo xay, 100g đậu hũ non, 1 quả trứng gà, 1 củ hành tím, 10g ngò rí, 10g ớt xay\r\n', NULL, 'A13.jpg', 20000, 'Món chiên'),
('A14', 'Cá thu sốt cà chua', '100g cá thu, 1 quả cà chua, 5g tỏi, 5g ớt sừng, 5g ngò rí, 5g thì là, 2g hành lá\r\n', NULL, 'A14.jpg', 20000, 'Món chiên'),
('A15', 'Trứng cuộn rau củ', '1 quả trứng, 40g thịt xay, 50g hành tây, 50g cà rốt, 50g bí ngòi, 10g hành lá\r\n', NULL, 'A15.jpg', 15000, 'Món chiên'),
('A2', 'Ba rọi chiên giòn', '150g ba rọi, 150g bột chiên giòn, 1 quả trứng \r\n', NULL, 'A2.jpg', 20000, 'Món chiên'),
('A3', 'Trứng  chiên', '1 quả trứng, 5g hành lá\r\n', NULL, 'A3.jpg', 15000, 'Món chiên'),
('A4', 'Cá chiên xả ớt', '150g cá, 5g ớt, 5g sả\r\n', NULL, 'A4.jpg', 20000, 'Món chiên'),
('A5', 'Cánh gà chiên giòn', '120g cánh gà, 120g bột chiên giòn, 1 quả trứng \r\n', NULL, 'A5.jpg', 20000, 'Món chiên'),
('A6', 'Mực chiên tỏi ớt', '150g mực, 5g bột bắp, 10g tỏi, 5g hành lá, 5g ớt \r\n', NULL, 'A6.jpg', 20000, 'Món chiên'),
('A7', 'Đậu hũ chiên tẩm hành', '200g đậu hũ, 10 hành tây, 10g tỏi\r\n', NULL, 'A7.jpg', 15000, 'Món chiên'),
('A8', 'Chả cá chiên nước mắm', '100g chả cá, 10g tỏi, 10g hành tím\r\n', NULL, 'A8.jpg', 20000, 'Món chiên'),
('A9', 'Đậu hũ chiên sả ớt', '200g đậu hũ, 10 hành tây, 10g tỏi,5g sả, 5g ớt\r\n', NULL, 'A9.jpg', 15000, 'Món chiên'),
('B1', 'Gỏi sụn rong biển', '50g nấm bào ngư xám, 50g nấm đùi gà 50g, ớt chuông vàng 1 quả, ớt sừng không cay 2 quả, tắc 3 quả, 10g đậu phộng rang, 10g rau húng lủi \r\n', NULL, 'B1.jpg', 15000, 'Món rau'),
('B10', 'Salad bắp cải tím sốt mayonnaise', '100g bắp cải tím, 100g bắp cải trắng, 1 củ cà rốt, 1 củ hành tây tím\r\n', NULL, 'B10.jpg', 10000, 'Món rau'),
('B11', 'Salad đậu que', '', NULL, 'B11.jpg', 5000, 'Món rau'),
('B12', 'Salad mực chua ngọt', '100g mực, 1 quả cà chua, 30g củ hành tây, 5g húng lủi, 10g húng quế, 30g cà rốt, 5g tỏi\r\n', NULL, 'B12.jpg', 15000, 'Món rau'),
('B13', 'Gỏi rau muống', '100g rau muống, 50g đậu phộng, 2 quả chanh, 5g tỏi\r\n', NULL, 'B13.jpg', 10000, 'Món rau'),
('B14', 'Gỏi ngó sen tôm thịt', '40g tôm sú, 30g thịt ba chỉ, 100g ngó sen, 40g cà rốt, 40g hành tây, 20g cần tây, 20g đậu phộng, 2 quả chanh, 10 g ngò rí, 20g rau răm \r\n', NULL, 'B14.jpg', 20000, 'Món rau'),
('B15', 'Gỏi rau lang thịt bò', '50g thịt bò mềm, 100g rau khoai, 30g lạc, 2 củ hành, 1 củ tỏi, 1 trái ớt, 4 trái quất, 1 trái chanh\r\n', NULL, 'B15.jpg', 20000, 'Món rau'),
('B2', 'Rau củ luộc', '20g búp súp lơ xanh, 20g củ cà rốt, 20g củ cải trắng \r\n', NULL, 'B2.jpg', 10000, 'Món rau'),
('B3', 'Rau cải luộc', '100g cải xanh\r\n', NULL, 'B3.jpg', 5000, 'Món rau'),
('B4', 'Rau muống luộc', '100g cải muống\r\n', NULL, 'B4.jpg', 5000, 'Món rau'),
('B5', 'Bắp cải luộc', '100g bắp cải\r\n', NULL, 'B5.jpg', 5000, 'Món rau'),
('B6', 'Salad dầu giấm', '50g cây xà lách, 1 quả cà chua, 50g củ hành tây, 1/2 trái dưa leo, 1 trái ớt, 1 củ tỏi, 10g ngò rí\r\n', NULL, 'B6.jpg', 10000, 'Món rau'),
('B7', 'Salad rau củ ức gà', '1/2 trái dưa leo, 1 quả cà chua, 1/4 củ hành tây, 1/2 trái bơ, 50g ức gà nướng, 1 trái chanh\r\n', NULL, 'B7.jpg', 15000, 'Món rau'),
('B8', 'Salad rau củ trứng luộc', '1 quả trứng, 1/4 củ cà rốt, 1/2 quả ớt chuông đỏ, 1/2 trái bơ, 2 củ hành tím\r\n', NULL, 'B8.jpg', 15000, 'Món rau'),
('B9', 'Salad bắp cải tím trộn dầu giấm', '100g bắp cải tím, 100g thịt ba roi, 1/2 quả táo, 1 củ cà rốt\r\n', NULL, 'B9.jpg', 15000, 'Món rau'),
('C1', 'Cải thìa xào tôm', '150g tôm, 150g cải thìa, 20g hành tím, 5g tỏi\r\n', NULL, 'C1.jpg', 20000, 'Món xào'),
('C10', 'Sườn xào chua ngọt', '200g sườn heo, 20g hành tím, 5g tỏi\r\n', NULL, 'C10.jpg', 20000, 'Món xào'),
('C11', 'Măng xào thịt heo', '200 g măng (thái lát mỏng), 150g thịt, 20g hành tím, 5g tỏi\r\n', NULL, 'C11.jpg', 20000, 'Món xào'),
('C12', 'Bò xào củ sắn', '150g bò, 100 củ sắn, 20g hành tím, 5g tỏi\r\n', NULL, 'C12.jpg', 20000, 'Món xào'),
('C13', 'Đậu hũ xào bông cải', '200 đậu hũ, 150g bông cải, 20g hành tím, 5g tỏi\r\n', NULL, 'C13.jpg', 15000, 'Món xào'),
('C14', 'Lòng gà xào mướp', '150g lòng gà, 120g mướp, 20g hành tím, 5g tỏi\r\n', NULL, 'C14.jpg', 20000, 'Món xào'),
('C15', 'Thịt xào bông cải', '150g thịt, 120g bông cải, 20g hành tím, 5g tỏi\r\n', NULL, 'C15.jpg', 20000, 'Món xào'),
('C2', 'Đậu que xào thịt', '150g đậu que, 150g thịt, 20g hành tím, 5g tỏi\r\n', NULL, 'C2.jpg', 20000, 'Món xào'),
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
('D8', 'Canh chua chay', '50g me chua, 50g giá, 20g bạc hà, 1 quả cà chua, 50g quả thơm, 50g đậu hũ, 5g ngò gai, 1 quả ớt\r\n', NULL, 'D8.jpg', 10000, 'Món canh'),
('D9', 'Canh chua cá lóc', '100g cá lóc, 10g đậu bắp, 5g me chua, 10g giá, 20g bạc hà, 1 quả cà chua, 50g quả thơm, 5g ngò gai, 1 quả ớt\r\n', NULL, 'D9.jpg', 15000, 'Món canh'),
('E1', 'Nước suối ', 'NULL', NULL, 'E1.jpg', 5000, 'Nước'),
('E10', 'Trà đá', 'NULL\r\n', NULL, 'E10.jpg', 5000, 'Nước'),
('E11', 'Trà sữa', 'NULL\r\n', NULL, 'E11.jpg', 10000, 'Nước'),
('E12', '7up', 'NULL\r\n', NULL, 'E12.jpg', 5000, 'Nước'),
('E13', 'Red bull', 'NULL\r\n', NULL, 'E13.jpg', 10000, 'Nước'),
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
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ma_nhan_vien` varchar(10) NOT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`ma_nhan_vien`, `password`) VALUES
('AT56', 123789),
('HP78', 987321),
('LT12', 654321),
('MT89', 987654),
('TT88', 123456),
('VT46', 456789);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietthucdon`
--
ALTER TABLE `chitietthucdon`
  ADD UNIQUE KEY `ma_mon_an` (`ma_mon_an`),
  ADD KEY `sanpham` (`ma_mon_an`,`ten_mon_an`,`hinh_anh`,`gia`);

--
-- Chỉ mục cho bảng `danhsachthucdon`
--
ALTER TABLE `danhsachthucdon`
  ADD PRIMARY KEY (`ma_thuc_don`);

--
-- Chỉ mục cho bảng `nhanvientapdoan`
--
ALTER TABLE `nhanvientapdoan`
  ADD PRIMARY KEY (`ma_nhan_vien`);

--
-- Chỉ mục cho bảng `phieuan`
--
ALTER TABLE `phieuan`
  ADD PRIMARY KEY (`ma_phieu_an`),
  ADD KEY `ma_nhan_vien` (`ma_nhan_vien`),
  ADD KEY `ma_nhan_vien_2` (`ma_nhan_vien`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ma_mon_an`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD KEY `nhanvientapdoan` (`ma_nhan_vien`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhsachthucdon`
--
ALTER TABLE `danhsachthucdon`
  MODIFY `ma_thuc_don` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phieuan`
--
ALTER TABLE `phieuan`
  MODIFY `ma_phieu_an` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietthucdon`
--
ALTER TABLE `chitietthucdon`
  ADD CONSTRAINT `chitietthucdon_ibfk_1` FOREIGN KEY (`ma_mon_an`) REFERENCES `sanpham` (`ma_mon_an`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phieuan`
--
ALTER TABLE `phieuan`
  ADD CONSTRAINT `phieuan_ibfk_1` FOREIGN KEY (`ma_nhan_vien`) REFERENCES `nhanvientapdoan` (`ma_nhan_vien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`ma_nhan_vien`) REFERENCES `nhanvientapdoan` (`ma_nhan_vien`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
