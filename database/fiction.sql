-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 02:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fiction`
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
  `fiction_id` varchar(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `fiction_id`, `name`, `phone`) VALUES
('AT0002', 'F10002', 'Zhan Qi Shao t', '0630188317'),
('AT0003', 'F10003', 'จางอวิ๋น', '0630188318'),
('AT0004', 'F10004', 'จางอวิ๋น', '0630188319'),
('AT0005', 'F10005', 'ชิงชิงเตอโยวหราน', '0630177311'),
('AT0006', 'F10006', 'Moka', '0630177312'),
('AT0007', 'F10007', 'JittiRain', '0630177313'),
('AT0008', 'F10008', 'Chiffon_cake', '0630188314'),
('AT0009', 'F10009', 'เซียวเซียงตงเอ๋อร์', '0630188315');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name_category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name_category`, `image`) VALUES
(1, 'นิยายรัก', 'นิยายรัก1.jpg'),
(2, 'นิยายแฟนตาซี', 'แฟนตาซี1.jpg'),
(3, 'Boy love', 'boylove.jfif'),
(4, 'สยองขวัญ', 'สยองขวัญ.jfif'),
(5, 'นักสืบ', 'นักสืบ.jpg'),
(6, 'ผจญภัย', 'ภจญภัย1.jpg'),
(7, 'Girl love', 'girl love.jpg'),
(8, 'กำลังภายใน', 'กำลังภายใน1.jpg');

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
('F10002', 2, 'หงส์ล่มบัลลังก์ เล่ม 2', 200, ' หญิงสาวจากยุคปัจจุบันผู้มีพลังพิเศษในการ \'คืนสภาพสิ่งของ\' เมื่อข้ามภพมายังยุคโบราณกลับต้องมาแทนที่คนตาย สวมรอยเป็นคุณหนูตระกูลไถผู้เป็นที่เกลียดชังจากพี่น้องร่วมตระกูล ทั้งยังได้พานพบกับ ', '2021-09-29', 'ตัวอย่างหงส์ล่มบัลลังก์ เล่ม 2.pdf'),
('F10003', 2, 'ราชาแห่งราชัน เล่ม 1', 180, 'ในโลกอนาคตซึ่งการเล่นเกมออนไลน์เป็นการเล่นในโลกเสมือนจริง เฉินเฟิง ชายหนุ่มผู้ตกงานเพราะสภาพทางสังคมบีบบังคับ ได้ฆ่าเวลาด้วยการเข้าไปเล่นเกมออนไลน์ที่กำลังฮิต ราชาแห่งราชัน...', '2021-09-29', 'ราชาแห่งราชัน เล่ม 1.pdf'),
('F10004', 2, 'ราชาแห่งราชัน เล่ม 2', 120, 'จากภารกิจแรกของผู้บวงสรวงแห่งวิหารเวทมนตร์ สู่ภารกิจที่สอง ตามหาลูกชายผู้หายสาบสูญของหัวหน้าหมู่บ้านอิวะ ซึ่งต้องเข้าไปในหุบเขามรณะ?สถานที่ที่อันตรายและน่ากลัวที่สุดในเกม ?ราชาแห่งราชัน? สถานที่ซึ่งแม้แต่ผู้เล่นยอดฝีมือที่ได้อาชีพแล้วยังต้องรวมกลุ่มกันเป็นกลุ่มใหญ่เข้าไป จึงจะรอดชีวิตออกมาได้ แล้วมือใหม่อ่อนหัดอย่างเฉินเฟิงที่ได้แต่จับกลุ่มกับวิหารจันทราเทพที่ระดับแค่ ๓๐ เท่ากันล่ะ จะทำอย่างไร ?', '2021-09-28', 'ราชาแห่งราชัน เล่ม 2.pdf'),
('F10005', 2, 'ลวงเล่ห์ร้ายชายาร้อยพิษ เล่ม1', 199, ' คุณชายสี่แห่งตระกูลชิวผู้เป็นที่เกลียดชังผู้ถูกขับไล่ไสส่งให้ออกไปเผชิญความโหดร้ายของโลกภายนอกตั้งแต่เยาว์วัย ด้วยคำทำนายที่ว่าบุตรีคนที่สี่ของตระกูลจะนำความหายนะมาสู่ตระกูลและบ้านเมือง จึงเป็นเหตุให้นางจำต้องปกปิดความจริงเพื่อหลบเลี่ยงมิให้ถูกสังหารหรือถูกขายไปเป็นนางคณิกาหลวง', '2021-09-29', 'ตัวอย่างลวงเล่ห์ร้ายชายาร้อยพิษ เล่ม1.pdf'),
('F10006', 2, 'เล่ม1พันธนาการรัก คู่ชะตาสามภพ', 20000, 'ชีวิตในชาติก่อนต้องจบลงอย่างน่าอนาถเพียงเพราะตกบันไดก็โชคร้ายมากพอแล้ว วิญญาณดาราสาวพราวเสน่ห์อย่างเธอยังต้องมาติดอยู่ในร่างหลิงอวี้จื้อ คุณหนูใหญ่จวนเสนาบดีผู้ใสซื่อทว่าโง่เขลาที่พ่อไม่แลแม่ไม่รัก ถูกวางยาพิษร้ายเตรียมนับถอยหลังรอวันตาย มิหนำซ้ำยังมีคู่หมั้นที่ไม่เคยเห็นหน้าค่าตาพ่วงมาให้เป็นพันธะอีก', '2021-10-03', 'ตัวอย่างเล่ม1พันธนาการรัก คู่ชะตาสามภพ.pdf'),
('F10007', 3, 'ทฤษฎีจีบเธอ', 250, 'ชีวิตในชาติก่อนต้องจบลงอย่างน่าอนาถเพียงเพราะตกบันไดก็โชคร้ายมากพอแล้ว วิญญาณดาราสาวพราวเสน่ห์อย่างเธอยังต้องมาติดอยู่ในร่างหลิงอวี้จื้อ คุณหนูใหญ่จวนเสนาบดีผู้ใสซื่อทว่าโง่เขลาที่พ่อไม่แลแม่ไม่รัก ถูกวางยาพิษร้ายเตรียมนับถอยหลังรอวันตาย มิหนำซ้ำยังมีคู่หมั้นที่ไม่เคยเห็นหน้าค่าตาพ่วงมาให้เป็นพันธะอีก', '2021-10-04', 'ตัวอย่างทฤษฎีจีบเธอ.pdf'),
('F10008', 3, 'แทนทัพ', 200, 'นี่ไม่ใช่เรื่องผีปีศาจ ไม่ใช่ตำนานคนทรงเจ้า', '2021-10-04', 'ตัวอย่างแทนทัพ.pdf'),
('F10009', 6, 'ลิขิตรักข้ามภพ 1-178 end_หมอหมื่นลี้', 200, 'เพราะความฝันอยากเปิดร้านอาหาร \'กู้เหิง\' จึงมาเป็นเพื่อนนอน  เพราะต้องดูแลบริษัทและรับความกดดันมากมายหลายทาง \'ฉินเยี่ยนเหล่ย\' จึงได้รับความทรมานจากโรคนอนไม่หลับ  ทันทีที่ได้พบชายหนุ่มผู้มีอาชีพเพื่อนนอนตรงหน้า จากที่คิดปฏิเสธในคราแรก เขากลับรีบถามอีกฝ่ายไปทันทีว่า ‘นาย หนึ่งคืนราคาเท่าไร’', '2021-10-04', 'ลิขิตรักข้ามภพ 1-178 end_หมอหมื่นลี้.pdf'),
('F20001', 1, 'ตัวอย่างแผนรักลวงใจ', 120, 'หนิงซี หญิงสาวผู้ถูกน้องสาววางแผนร้ายอย่างไม่ยอมเลิกรา ทำให้ความฝันของเธอต้องพังทลายลง แผนรักลวงใจ แปลไทย เธอหลงกลให้กับแผนกลั่นแกล้งของน้องสาว จนบังเอิญได้ไปช่วยเด็กคนหนึ่งที่น่ารักนุ่มนิ่มราวกับซาลาเปาน้อยเอาไว้', '2021-10-10', 'ตัวอย่างแผนรักลวงใจ 01.pdf');

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
('A06', 'เล่ม1พันธนาการรัก คู่ชะตาสามภพ', 'F10006', 'เล่ม1พันธนาการรัก คู่ชะตาสามภพ.jpeg'),
('A07', 'ทฤษฎีจีบเทอ', 'F10007', 'ทฤษฎีจีบเธอ.jpg'),
('A08', 'ตัวอย่างแทนทัพ', 'F10008', 'แทนทัพ .gif'),
('A09', 'ลิขิตรักข้ามภพ 1-178 end_หมอหมื่นลี้', 'F10009', 'ลิขิตรักข้ามภพ 1-178 end_หมอหมื่นลี้.jpg');

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
('FT1006', 'F10006', 'เล่ม1พันธนาการรัก คู่ชะตาสามภพ .pdf'),
('FT1007', 'F10007', 'ทฤษฎีจีบเธอ.pdf'),
('FT1008', 'F10008', 'แทนทัพ.pdf'),
('FT1009', 'F10009', 'ลิขิตรักข้ามภพ 1-178 end_หมอหมื่นลี้.pdf');

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
(1, 'chom@gmail.com', 'chompu', '16336863337919.jpeg', '0000-00-00', 'user  ', 'user', '2021-10-02 04:20:12', 'member'),
(2, 'admin@gmail.com', 'kanokwan1234', '123.jpg', '2021-10-02', 'admin', 'admin', '2021-10-02 04:45:14', 'admin'),
(3, 'user1@gmail.com', 'user2', '16336977835812.jpg', '0000-00-00', 'user2 ', 'user1', '2021-10-10 01:03:51', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `d_id` int(10) NOT NULL,
  `o_id` int(11) NOT NULL,
  `fiction_id` varchar(6) CHARACTER SET utf8 NOT NULL,
  `d_qty` int(11) NOT NULL,
  `d_subtotal` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`d_id`, `o_id`, `fiction_id`, `d_qty`, `d_subtotal`) VALUES
(1, 1, 'F10001', 1, 150),
(2, 1, 'F10002', 1, 200),
(3, 1, 'F10003', 1, 180),
(4, 1, 'F10004', 1, 120),
(5, 1, 'F10005', 1, 199),
(6, 2, 'F10001', 1, 150),
(7, 2, 'F10002', 1, 200),
(8, 2, 'F10003', 1, 180),
(9, 2, 'F10004', 1, 120),
(10, 2, 'F10005', 1, 199),
(11, 2, 'F10006', 1, 20000),
(12, 3, 'F10001', 1, 150),
(13, 3, 'F10002', 1, 200),
(14, 3, 'F10003', 1, 180),
(15, 3, 'F10004', 1, 120),
(16, 3, 'F10005', 1, 199),
(17, 3, 'F10006', 1, 20000),
(18, 3, 'F10007', 1, 250),
(19, 4, 'F10003', 1, 180),
(20, 4, 'F10009', 1, 200),
(21, 5, 'F10002', 1, 200),
(22, 5, 'F10005', 1, 199),
(23, 5, 'F10006', 1, 20000),
(24, 5, 'F10007', 1, 250),
(25, 6, 'F10002', 1, 200);

-- --------------------------------------------------------

--
-- Table structure for table `order_head`
--

CREATE TABLE `order_head` (
  `o_id` int(10) NOT NULL,
  `id` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `o_dttm` datetime NOT NULL,
  `o_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `o_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `o_total` float NOT NULL,
  `o_status` int(1) NOT NULL COMMENT '''สถานะ 1 รอชำระเงิน 2 รอยืนยัน 3ชำระเงินแล้ว  4 ยกเลิก''',
  `o_slip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'อัพโหลด สลิป',
  `o_slip_date` date DEFAULT NULL COMMENT 'วันที่อัพสลิป',
  `o_slip_total` float(10,2) NOT NULL DEFAULT 0.00
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_head`
--

INSERT INTO `order_head` (`o_id`, `id`, `o_dttm`, `o_name`, `o_email`, `o_total`, `o_status`, `o_slip`, `o_slip_date`, `o_slip_total`) VALUES
(1, '1', '2021-10-09 16:55:19', 'chompu', 'chom@gmail.com', 849, 1, '', '0000-00-00', 0.00),
(2, '1', '2021-10-09 17:48:27', 'chompu', 'chom@gmail.com', 20849, 1, '', '0000-00-00', 0.00),
(3, '1', '2021-10-09 17:56:05', 'chompu', 'chom@gmail.com', 21099, 1, '', '0000-00-00', 0.00),
(4, '1', '2021-10-10 07:23:29', 'chompu', 'chom@gmail.com', 380, 1, '', '0000-00-00', 0.00),
(5, '1', '2021-10-10 16:33:23', 'chompu', 'chom@gmail.com', 20649, 1, '', '0000-00-00', 0.00),
(6, '3', '2021-10-10 18:40:12', 'user2', 'user1@gmail.com', 200, 1, '', '0000-00-00', 0.00);

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
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `order_head`
--
ALTER TABLE `order_head`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
