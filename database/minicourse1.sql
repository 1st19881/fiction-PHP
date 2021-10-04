-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 11:47 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minicourse1`
--

-- --------------------------------------------------------

--
-- Table structure for table `acount_list`
--

CREATE TABLE `acount_list` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_total` varchar(50) NOT NULL,
  `a_price` varchar(50) NOT NULL,
  `a_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acount_list`
--

INSERT INTO `acount_list` (`a_id`, `a_name`, `a_total`, `a_price`, `a_date`) VALUES
(1, 'ยอดขายขนม', '50', '1500', '2021-09-20'),
(3, 'ยอดขายขนม2', '500', '250000', '2021-09-20'),
(4, 'ยอดขายขนม', '150', '2000', '2021-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` varchar(6) NOT NULL,
  `thai_name` varchar(255) NOT NULL,
  `english_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name_category`) VALUES
(1, 'นิยายรัก'),
(2, 'นิยายแฟนตาซี');

-- --------------------------------------------------------

--
-- Table structure for table `fiction`
--

CREATE TABLE `fiction` (
  `fiction_id` varchar(10) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name_fiction` varchar(255) NOT NULL,
  `price_fiction` int(4) NOT NULL,
  `synopsis` longtext NOT NULL,
  `release_date` date NOT NULL,
  `example` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fiction`
--

INSERT INTO `fiction` (`fiction_id`, `category_id`, `name_fiction`, `price_fiction`, `synopsis`, `release_date`, `example`) VALUES
('F10001', 2, 'หงส์ล่มบัลลังก์ เล่ม 1', 150, 'ไท่สื่อหลัน หญิงสาวจากยุคปัจจุบันผู้มีพลังพิเศษในการ ‘คืนสภาพสิ่งของ’ เมื่อข้ามภพมายังยุคโบราณกลับต้องมาแทนที่คนตาย สวมรอยเป็นคุณหนูตระกูลไถผู้เป็นที่เกลียดชังจากพี่น้องร่วมตระกูล ทั้งยังได้พานพบกับ หรงฉู่ คุณชายสูงศักดิ์ผู้เป็นที่เลื่องลือว่ามีรูปโฉมงดงามเหนือผู้คน ดั่งโชคชะตาขีดลิขิต เพียงแรกพบประสบพักตร์นางกลับดึงดูดความสนใจของเขาไปจนหมด… หากแต่ ‘คุณชายเจ้าสำอาง’ เช่นเขาจะปราบพยศ ‘ม้าดีดกะโหลก’ เช่นนางได้โดยง่ายอย่างนั้นหรือ!', '2021-09-29', 'ตัวอย่างหงส์ล่มบัลลังก์ เล่ม 1.pdf'),
('F10002', 1, 'หงส์ล่มบัลลังก์ เล่ม 2', 200, ' หญิงสาวจากยุคปัจจุบันผู้มีพลังพิเศษในการ \'คืนสภาพสิ่งของ\' เมื่อข้ามภพมายังยุคโบราณกลับต้องมาแทนที่คนตาย สวมรอยเป็นคุณหนูตระกูลไถผู้เป็นที่เกลียดชังจากพี่น้องร่วมตระกูล ทั้งยังได้พานพบกับ ', '2021-09-29', 'ตัวอย่างหงส์ล่มบัลลังก์ เล่ม 2.pdf'),
('F10003', 2, 'ราชาแห่งราชัน เล่ม 1', 180, 'ในโลกอนาคตซึ่งการเล่นเกมออนไลน์เป็นการเล่นในโลกเสมือนจริง เฉินเฟิง ชายหนุ่มผู้ตกงานเพราะสภาพทางสังคมบีบบังคับ ได้ฆ่าเวลาด้วยการเข้าไปเล่นเกมออนไลน์ที่กำลังฮิต ราชาแห่งราชัน...', '2021-09-29', 'ราชาแห่งราชัน เล่ม 1.pdf'),
('F10004', 1, 'ราชาแห่งราชัน เล่ม 2', 120, 'จากภารกิจแรกของผู้บวงสรวงแห่งวิหารเวทมนตร์ สู่ภารกิจที่สอง ตามหาลูกชายผู้หายสาบสูญของหัวหน้าหมู่บ้านอิวะ ซึ่งต้องเข้าไปในหุบเขามรณะ?สถานที่ที่อันตรายและน่ากลัวที่สุดในเกม ?ราชาแห่งราชัน? สถานที่ซึ่งแม้แต่ผู้เล่นยอดฝีมือที่ได้อาชีพแล้วยังต้องรวมกลุ่มกันเป็นกลุ่มใหญ่เข้าไป จึงจะรอดชีวิตออกมาได้ แล้วมือใหม่อ่อนหัดอย่างเฉินเฟิงที่ได้แต่จับกลุ่มกับวิหารจันทราเทพที่ระดับแค่ ๓๐ เท่ากันล่ะ จะทำอย่างไร ?', '2021-09-28', 'ราชาแห่งราชัน เล่ม 2.pdf'),
('F10005', 2, 'ลวงเล่ห์ร้ายชายาร้อยพิษ เล่ม1', 199, ' คุณชายสี่แห่งตระกูลชิวผู้เป็นที่เกลียดชังผู้ถูกขับไล่ไสส่งให้ออกไปเผชิญความโหดร้ายของโลกภายนอกตั้งแต่เยาว์วัย ด้วยคำทำนายที่ว่าบุตรีคนที่สี่ของตระกูลจะนำความหายนะมาสู่ตระกูลและบ้านเมือง จึงเป็นเหตุให้นางจำต้องปกปิดความจริงเพื่อหลบเลี่ยงมิให้ถูกสังหารหรือถูกขายไปเป็นนางคณิกาหลวง', '2021-09-29', 'ตัวอย่างลวงเล่ห์ร้ายชายาร้อยพิษ เล่ม1.pdf'),
('F10006', 2, 'ชายาหยุดเย้าข้าเสียทีเถิด เล่ม2 ', 20000, 'ชีวิตในชาติก่อนต้องจบลงอย่างน่าอนาถเพียงเพราะตกบันไดก็โชคร้ายมากพอแล้ว วิญญาณดาราสาวพราวเสน่ห์อย่างเธอยังต้องมาติดอยู่ในร่างหลิงอวี้จื้อ คุณหนูใหญ่จวนเสนาบดีผู้ใสซื่อทว่าโง่เขลาที่พ่อไม่แลแม่ไม่รัก ถูกวางยาพิษร้ายเตรียมนับถอยหลังรอวันตาย มิหนำซ้ำยังมีคู่หมั้นที่ไม่เคยเห็นหน้าค่าตาพ่วงมาให้เป็นพันธะอีก', '2021-10-03', 'ตัวอย่างใส่รักป้ายสี.pdf'),
('F10007', 2, 'ชมพุ่เล่ม3', 250, 'ชีวิตในชาติก่อนต้องจบลงอย่างน่าอนาถเพียงเพราะตกบันไดก็โชคร้ายมากพอแล้ว วิญญาณดาราสาวพราวเสน่ห์อย่างเธอยังต้องมาติดอยู่ในร่างหลิงอวี้จื้อ คุณหนูใหญ่จวนเสนาบดีผู้ใสซื่อทว่าโง่เขลาที่พ่อไม่แลแม่ไม่รัก ถูกวางยาพิษร้ายเตรียมนับถอยหลังรอวันตาย มิหนำซ้ำยังมีคู่หมั้นที่ไม่เคยเห็นหน้าค่าตาพ่วงมาให้เป็นพันธะอีก', '2021-10-04', 'ตัวอย่างทฤษฎีจีบเธอ.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `figure_fiction`
--

CREATE TABLE `figure_fiction` (
  `figure_id` varchar(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fiction_id` varchar(6) NOT NULL,
  `fg_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `figure_fiction`
--

INSERT INTO `figure_fiction` (`figure_id`, `name`, `fiction_id`, `fg_address`) VALUES
('A01', 'หงส์ล่มบัลลังก์ เล่ม 1', 'F10001', 'หงส์ล่มบัลลังก์ เล่ม 1.jfif'),
('A02', 'หงส์ล่มบัลลังก์ เล่ม ', 'F10002', 'หงส์ล่มบัลลังก์ เล่ม 2.jfif'),
('A03', 'ราชาแห่งราชัน เล่ม 1.jpg', 'F10003', 'ราชาแห่งราชัน เล่ม 1.jpg'),
('A04', 'ราชาแห่งราชัน เล่ม 2', 'F10004', 'ราชาแห่งราชัน เล่ม 2.jpg'),
('A05', 'ลวงเล่ห์ร้ายชายาร้อยพิษ เล่ม1', 'F10005', 'ลวงเล่ห์ร้ายชายาร้อยพิษ เล่ม1.jpg'),
('A06', 'ccc', 'F10006', '16313355967839.jpg'),
('A07', 'ccc', 'F10007', '16327309759475.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `file_fiction`
--

CREATE TABLE `file_fiction` (
  `id_file` varchar(6) NOT NULL,
  `fiction_id` varchar(6) NOT NULL,
  `file_pdf` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `file_fiction`
--

INSERT INTO `file_fiction` (`id_file`, `fiction_id`, `file_pdf`) VALUES
('FT1001', 'F10001', 'หงส์ล่มบัลลังก์ เล่ม 1.pdf'),
('FT1002', 'F10002', 'หงส์ล่มบัลลังก์ เล่ม 2.pdf'),
('FT1003', 'F10003', 'ราชาแห่งราชัน เล่ม 1.pdf'),
('FT1004', 'F10004', 'ราชาแห่งราชัน เล่ม 2.pdf'),
('FT1005', 'F10005', 'ลวงเล่ห์ร้ายชายาร้อยพิษ เล่ม1.pdf'),
('FT1006', 'F10006', 'หนึ่งคืนราคาเท่าไหร่ เล่ม 1.pdf'),
('FT1007', 'F10007', 'บทที่ 3 ปรับแก้ นางสาวกนกวรรณ ภูมิลา 6140200475.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `has_an_author`
--

CREATE TABLE `has_an_author` (
  `author_id` varchar(6) NOT NULL,
  `fiction_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'avatar.png',
  `birthday` date NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `crated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `member_lavel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `email`, `name`, `image`, `birthday`, `username`, `password`, `crated_at`, `member_lavel`) VALUES
(1, 'chom@gmail.com', 'chompu', 'avatar.png', '2021-10-31', 'user', 'user', '2021-10-02 04:20:12', 'member'),
(2, 'admin@gmail.com', 'kanokwan', 'avatar.png', '2021-10-02', 'admin', 'admin', '2021-10-02 04:45:14', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `d_id` int(10) NOT NULL,
  `o_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `d_qty` int(11) NOT NULL,
  `d_subtotal` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`d_id`, `o_id`, `p_id`, `d_qty`, `d_subtotal`) VALUES
(1, 1, 27, 10, 350),
(2, 2, 24, 20, 600),
(3, 3, 24, 2, 60),
(4, 3, 26, 2, 60),
(5, 3, 27, 2, 70),
(6, 4, 27, 10, 350),
(7, 5, 28, 1, 45),
(8, 5, 27, 1, 35),
(9, 5, 26, 1, 30),
(10, 5, 24, 1, 30),
(11, 6, 24, 20, 600),
(12, 6, 27, 50, 1750),
(13, 6, 28, 50, 2250),
(14, 7, 28, 5, 225),
(15, 7, 27, 5, 175),
(16, 7, 26, 5, 150),
(17, 8, 28, 45, 2025),
(18, 8, 27, 45, 1575),
(19, 8, 26, 95, 2850),
(20, 9, 28, 5, 225),
(21, 9, 27, 5, 175),
(22, 9, 26, 5, 150),
(23, 9, 24, 5, 150),
(24, 10, 28, 5, 225),
(25, 10, 27, 5, 175),
(26, 10, 26, 5, 150),
(27, 10, 24, 5, 150),
(28, 11, 28, 10, 450),
(29, 11, 27, 10, 350),
(30, 11, 26, 10, 300),
(31, 11, 24, 10, 300),
(32, 12, 28, 1, 45),
(33, 12, 27, 1, 35),
(34, 12, 26, 1, 30),
(35, 12, 24, 1, 30),
(36, 13, 28, 10, 450),
(37, 13, 27, 10, 350),
(38, 13, 26, 10, 300),
(39, 14, 28, 1, 45),
(40, 14, 27, 1, 35),
(41, 14, 26, 69, 2070),
(42, 14, 24, 1, 30),
(43, 15, 27, 6, 210),
(44, 15, 24, 6, 180);

-- --------------------------------------------------------

--
-- Table structure for table `order_head`
--

CREATE TABLE `order_head` (
  `o_id` int(10) NOT NULL,
  `member_id` int(11) NOT NULL,
  `o_dttm` datetime NOT NULL,
  `o_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `o_addr` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `o_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `o_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `o_total` float NOT NULL,
  `o_status` int(1) NOT NULL COMMENT '''สถานะ 1 รอชำระเงิน 2 รอยืนยัน 3ชำระเงินแล้ว  4 ยกเลิก''',
  `o_slip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'อัพโหลด สลิป',
  `o_slip_date` date DEFAULT NULL COMMENT 'วันที่อัพสลิป',
  `o_slip_total` float(10,2) NOT NULL DEFAULT 0.00,
  `status_accept` int(1) DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_head`
--

INSERT INTO `order_head` (`o_id`, `member_id`, `o_dttm`, `o_name`, `o_addr`, `o_email`, `o_phone`, `o_total`, `o_status`, `o_slip`, `o_slip_date`, `o_slip_total`, `status_accept`, `note`) VALUES
(1, 3, '2021-02-27 02:00:23', 'replay', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 350, 3, 'slip202342372220210916_022236.jpg', '2021-09-16', 350.00, 2, ''),
(2, 3, '2021-09-16 02:00:54', 'replay', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 600, 4, 'slip158682259120210916_020114.jpg', '2021-09-16', 600.00, 4, ''),
(3, 3, '2021-09-16 02:21:52', 'พัชริดา', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 190, 1, '', '0000-00-00', 0.00, 1, '55555'),
(4, 3, '2021-06-23 02:22:13', 'replay', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 350, 1, '', '0000-00-00', 0.00, 1, ''),
(5, 3, '2021-09-16 04:36:41', 'replay', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 140, 3, 'slip107952678620210916_043720.jpg', '2021-09-16', 140.00, 2, ''),
(6, 3, '2021-09-16 14:40:35', 'พัชริดา', '29/11 สกลนคร 47000', 'ddd@gmail.com', '0951838978', 4600, 1, '', '0000-00-00', 0.00, 1, 'รับออเดอร์ พน  เย้นๆ ค่ะ'),
(7, 3, '2019-12-19 01:50:57', 'replay', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 550, 3, 'slip169748268420210918_015117.jpg', '2021-09-18', 550.00, 2, ''),
(8, 3, '2018-08-16 01:56:08', 'replay', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 6450, 3, 'slip156142379120210918_015632.jpg', '2021-09-18', 6450.00, 2, ''),
(9, 3, '2021-09-19 23:53:14', 'น้องเตย', '91/123 สกลนคร  47000', 'ddd@gmail.com', '0951838978', 700, 3, 'slip155727432920210919_235347.jpg', '2021-09-19', 700.00, 2, 'รับวันนี้ 4 โมงเย็นจ้า '),
(10, 5, '2021-09-20 01:12:51', 'พัชริดา เตย', '45/11 สกลนคร 47000', 'user1234@gmail.com', '091858888888', 700, 3, 'slip184014466020210920_011302.jpg', '2021-09-20', 700.00, 3, 'หวานน้อยจ่า'),
(11, 3, '2021-09-20 23:26:04', 'replay123456789', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 1400, 3, 'slip40118752120210920_232626.jpg', '2021-09-20', 1400.00, 2, '5555555555555555555'),
(12, 3, '2021-09-23 20:58:58', 'replay123456789', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 140, 3, 'slip185420575220210923_205942.jpg', '2021-09-23', 140.00, 3, ''),
(13, 3, '2021-09-23 22:10:40', '555555555555555', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 1100, 4, 'slip130109841520210923_221356.png', '2021-09-23', 1100.00, 4, ''),
(14, 3, '2021-09-23 22:15:59', '555555555555555', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 2180, 3, 'slip77559614320210923_221655.jpg', '2021-09-23', 2180.00, 2, 'รับวันนี้เย็นๆๆๆ'),
(15, 3, '2021-10-02 10:06:25', '555555555555555', '28/11 นครพนม 48000', 'ddd@gmail.com', '0951838978', 390, 3, 'slip200879424620211002_100713.jpg', '2021-10-02', 390.00, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` varchar(2) NOT NULL,
  `payment_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pdf_file`
--

CREATE TABLE `pdf_file` (
  `pdf` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pdf_file`
--

INSERT INTO `pdf_file` (`pdf`) VALUES
('สัญญาเบิกเงิน.pdf'),
('สัญญาเบิกเงิน.pdf'),
('1499900296006-ใบเบิกเงิน.pdf'),
('6140200475.pptx'),
('6140200475.pptx');

-- --------------------------------------------------------

--
-- Table structure for table `problemtopic`
--

CREATE TABLE `problemtopic` (
  `problem_id` varchar(6) NOT NULL,
  `problem_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `problem_reporting`
--

CREATE TABLE `problem_reporting` (
  `pbm_id` varchar(6) NOT NULL,
  `date_problem` date NOT NULL,
  `time_problem` time NOT NULL,
  `date_answer` date NOT NULL,
  `time_answer` time NOT NULL,
  `rp_reports` varchar(255) NOT NULL,
  `reports` mediumtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `problem_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receipt_id` varchar(6) NOT NULL,
  `receipt_date` date NOT NULL,
  `time` time NOT NULL,
  `picture` varchar(255) NOT NULL,
  `confirm_payment` varchar(1) NOT NULL,
  `payment_id` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `sales_data` varchar(6) NOT NULL,
  `price` int(4) NOT NULL,
  `date_time` date NOT NULL,
  `sales_time` time NOT NULL,
  `rating` float NOT NULL,
  `reviews` varchar(255) NOT NULL,
  `fiction_id` varchar(6) NOT NULL,
  `username` varchar(255) NOT NULL,
  `receipt_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `with_category`
--

CREATE TABLE `with_category` (
  `category_id` varchar(6) NOT NULL,
  `fiction_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acount_list`
--
ALTER TABLE `acount_list`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `fiction`
--
ALTER TABLE `fiction`
  ADD PRIMARY KEY (`fiction_id`);

--
-- Indexes for table `figure_fiction`
--
ALTER TABLE `figure_fiction`
  ADD PRIMARY KEY (`figure_id`),
  ADD KEY `FK_figure_fiction_fiction` (`fiction_id`);

--
-- Indexes for table `file_fiction`
--
ALTER TABLE `file_fiction`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `Fk_file_fiction_fiction` (`fiction_id`);

--
-- Indexes for table `has_an_author`
--
ALTER TABLE `has_an_author`
  ADD PRIMARY KEY (`author_id`),
  ADD KEY `FK_ has_an_author_fiction` (`fiction_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `order_head`
--
ALTER TABLE `order_head`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `problemtopic`
--
ALTER TABLE `problemtopic`
  ADD PRIMARY KEY (`problem_id`);

--
-- Indexes for table `problem_reporting`
--
ALTER TABLE `problem_reporting`
  ADD PRIMARY KEY (`pbm_id`),
  ADD KEY `FK_problem_reporting_problemtopic` (`problem_id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receipt_id`),
  ADD KEY `FK_receipt_payment` (`payment_id`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`sales_data`),
  ADD KEY `FK_ sell_receipt` (`receipt_id`),
  ADD KEY `FK_ sell_fiction` (`fiction_id`);

--
-- Indexes for table `with_category`
--
ALTER TABLE `with_category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `FK_with_category_fiction` (`fiction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acount_list`
--
ALTER TABLE `acount_list`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `order_head`
--
ALTER TABLE `order_head`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `figure_fiction`
--
ALTER TABLE `figure_fiction`
  ADD CONSTRAINT `FK_figure_fiction_fiction` FOREIGN KEY (`fiction_id`) REFERENCES `fiction` (`fiction_id`);

--
-- Constraints for table `file_fiction`
--
ALTER TABLE `file_fiction`
  ADD CONSTRAINT `Fk_file_fiction_fiction` FOREIGN KEY (`fiction_id`) REFERENCES `fiction` (`fiction_id`);

--
-- Constraints for table `has_an_author`
--
ALTER TABLE `has_an_author`
  ADD CONSTRAINT `FK_ has_an_author_author` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `FK_ has_an_author_fiction` FOREIGN KEY (`fiction_id`) REFERENCES `fiction` (`fiction_id`);

--
-- Constraints for table `problem_reporting`
--
ALTER TABLE `problem_reporting`
  ADD CONSTRAINT `FK_problem_reporting_problemtopic` FOREIGN KEY (`problem_id`) REFERENCES `problemtopic` (`problem_id`);

--
-- Constraints for table `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `FK_receipt_payment` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`);

--
-- Constraints for table `sell`
--
ALTER TABLE `sell`
  ADD CONSTRAINT `FK_ sell_fiction` FOREIGN KEY (`fiction_id`) REFERENCES `fiction` (`fiction_id`),
  ADD CONSTRAINT `FK_ sell_receipt` FOREIGN KEY (`receipt_id`) REFERENCES `receipt` (`receipt_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
