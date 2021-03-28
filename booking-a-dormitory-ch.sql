-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 03, 2021 at 03:17 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking-a-dormitory-ch`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accessory_in_room`
--

CREATE TABLE `tbl_accessory_in_room` (
  `ac_d_id` int(11) NOT NULL COMMENT 'ไอดี เครื่องอำนวยความสะดวกของหอพัก',
  `ac_d_air` int(11) NOT NULL DEFAULT 0 COMMENT 'เครื่องปรับอากาศ',
  `ac_d_fan` int(11) NOT NULL DEFAULT 0 COMMENT 'พัดลม',
  `ac_d_water_heater` int(11) NOT NULL DEFAULT 0 COMMENT 'เครื่องปรับน้ำอุ่น',
  `ac_d_furniture` int(11) NOT NULL DEFAULT 0 COMMENT 'เฟอร์นิเจอร์ ตู้ เตียง',
  `ac_d_truevision` int(11) NOT NULL DEFAULT 0 COMMENT 'ทรูวิชัน',
  `ac_d_cable_satellite_tv` int(11) NOT NULL DEFAULT 0 COMMENT 'เคเบิลทีวี / ดาวเทียม',
  `ac_d_phone_direct` int(11) NOT NULL DEFAULT 0 COMMENT 'โทรศัพท์สายตรง',
  `ac_d_wifi` int(11) NOT NULL DEFAULT 0 COMMENT 'อินเตอร์เน็ตไร้สาย ( WIFI ) ในห้องพัก',
  `ac_d_pets` int(11) NOT NULL DEFAULT 0 COMMENT 'เลี้ยงสัตว์เลี้ยง',
  `ac_d_moking` int(11) NOT NULL DEFAULT 0 COMMENT 'ที่สูบบุหรี่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='สิ่งอำนวนความสะดวกหอพักภายในห้อง';

--
-- Dumping data for table `tbl_accessory_in_room`
--

INSERT INTO `tbl_accessory_in_room` (`ac_d_id`, `ac_d_air`, `ac_d_fan`, `ac_d_water_heater`, `ac_d_furniture`, `ac_d_truevision`, `ac_d_cable_satellite_tv`, `ac_d_phone_direct`, `ac_d_wifi`, `ac_d_pets`, `ac_d_moking`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0),
(3, 1, 0, 0, 2, 0, 1, 0, 0, 0, 0),
(4, 1, 1, 0, 0, 1, 0, 0, 1, 1, 1),
(8, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0),
(11, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0),
(12, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1),
(13, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0),
(14, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0),
(15, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0),
(16, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accessory_out_room`
--

CREATE TABLE `tbl_accessory_out_room` (
  `ac_d_o_id` int(11) NOT NULL COMMENT 'ไอดีสิ่งอำนวยความสะดวก ในอาคาร',
  `ac_d_o_parking` int(11) NOT NULL DEFAULT 0 COMMENT 'ที่จอดรถ',
  `ac_d_o_elevator` int(11) NOT NULL COMMENT 'ลิฟท์',
  `ac_d_o_internet_cafe` int(11) NOT NULL COMMENT 'มีร้านอินเตอร์เน็ตภายในอาคาร',
  `ac_d_o_keycard` int(11) NOT NULL COMMENT 'มีระบบรักษาความปลอดภัย (keycard)',
  `ac_d_o_cctv` int(11) NOT NULL COMMENT 'กล้องวงจรปิด (CCTV)',
  `ac_d_o_swimming_pool` int(11) NOT NULL COMMENT 'สระว่ายน้ำ',
  `ac_d_o_fitness` int(11) NOT NULL COMMENT 'โรงยิม / ฟิตเนส',
  `ac_d_o_laundry_shop` int(11) NOT NULL COMMENT 'ร้านซัก-รีด / มีบริการเครื่องซักผ้า',
  `ac_d_o_beauty_salon` int(11) NOT NULL COMMENT 'ร้านทำผม-เสริมสวย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='สิ่งอำนวยความสะดวก ในอาคาร';

--
-- Dumping data for table `tbl_accessory_out_room`
--

INSERT INTO `tbl_accessory_out_room` (`ac_d_o_id`, `ac_d_o_parking`, `ac_d_o_elevator`, `ac_d_o_internet_cafe`, `ac_d_o_keycard`, `ac_d_o_cctv`, `ac_d_o_swimming_pool`, `ac_d_o_fitness`, `ac_d_o_laundry_shop`, `ac_d_o_beauty_salon`) VALUES
(6, 1, 0, 0, 0, 1, 0, 0, 0, 1),
(9, 1, 0, 0, 0, 1, 0, 0, 0, 1),
(14, 0, 0, 0, 0, 1, 0, 0, 0, 0),
(17, 0, 0, 0, 1, 0, 1, 0, 1, 1),
(18, 1, 0, 1, 0, 0, 1, 0, 1, 0),
(19, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(20, 0, 1, 1, 1, 0, 1, 0, 0, 0),
(21, 1, 1, 0, 0, 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `a_email` varchar(100) NOT NULL COMMENT 'อีเมลผู้ใช้งาน',
  `a_name` varchar(100) NOT NULL COMMENT 'ชื่อเเอดมิน',
  `a_password` text NOT NULL COMMENT 'รหัสผ่านแอดมิน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางผู้ดูเเลระบบ';

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`a_email`, `a_name`, `a_password`) VALUES
('admin@gmail.com', 'admin', 'e6e061838856bf47e1de730719fb2609');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookings`
--

CREATE TABLE `tbl_bookings` (
  `bk_id` int(11) NOT NULL COMMENT 'ไอดีการจอง',
  `bk_date` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'วันเวลาการจอง',
  `dt_id` int(11) NOT NULL COMMENT 'ไอดีหอพัก',
  `u_id` int(11) NOT NULL COMMENT 'ไอดีผู้จองหอพัก',
  `st_id` int(11) NOT NULL DEFAULT 1 COMMENT 'สถานะการจอง',
  `bk_c_name` varchar(100) NOT NULL COMMENT 'ชื่อผู้จอง',
  `bk_orther` text NOT NULL COMMENT 'รายละเอียดการจองเพิ่มเติม',
  `bk_slip` text NOT NULL COMMENT 'สลิปโอนเงิน',
  `bk_c_tel` varchar(20) NOT NULL COMMENT 'เบอร์โทรศัพท์ผู้จอง',
  `bk_c_email` varchar(100) NOT NULL COMMENT 'อีเมลผู้จอง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางการจองหอพัก';

--
-- Dumping data for table `tbl_bookings`
--

INSERT INTO `tbl_bookings` (`bk_id`, `bk_date`, `dt_id`, `u_id`, `st_id`, `bk_c_name`, `bk_orther`, `bk_slip`, `bk_c_tel`, `bk_c_email`) VALUES
(14, '2021-03-01 14:04:32', 35, 24, 2, 'admin', 's', '603c920024402feaa8c3ec3b9be26b34201bc44ae347c1.jpeg', '0857539375', 'admin@gmail.com'),
(17, '2021-03-01 14:06:18', 35, 24, 2, 'admin', '', '603c926a0955666a6bd52ccf9bf93c6220f08bfc7d6441.jpeg', '0857539375', 'admin@gmail.com'),
(18, '2021-03-01 15:31:48', 35, 24, 1, 'admin', 'assssssssssssssssssssssssssss', '603ca6746bdfdd955e8d85691105f39aeb181e0c79298golang-icon.png', '0857539375', 'admin@gmail.com'),
(19, '2021-03-01 15:33:50', 37, 24, 1, 'asssssssssssss', '', '603ca6ee5067201510d3ef41495e69409c59c053c3dfa72392613_133924427961044_4001461810950569984_o.jpg', '0857539375', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dormitory`
--

CREATE TABLE `tbl_dormitory` (
  `dt_id` int(11) NOT NULL COMMENT 'ไอดีหอพัก',
  `dt_name` varchar(200) NOT NULL COMMENT 'ชื่อหอพัก',
  `dt_detail` text NOT NULL COMMENT 'รายละเอียดหอพัก',
  `dt_image1` text NOT NULL COMMENT 'ชื่อรูปภาพที่ 1',
  `dt_image2` text NOT NULL COMMENT 'ชื่อรูปภาพที่ 2',
  `dt_image3` text NOT NULL COMMENT 'ชื่อรูปภาพที่ 3',
  `dt_price` float NOT NULL COMMENT 'ราคาหอพัก',
  `dtp_id` int(11) NOT NULL COMMENT 'ไอดีประเภทหอพัก',
  `dl_id` int(11) NOT NULL COMMENT 'ไอดีตำเเหน่องหอพัก หรือฝั่งที่อยู่ของหอพัก',
  `do_id` int(11) NOT NULL COMMENT 'ไอดีเจ้ของหอพัก',
  `dt_insurance` float NOT NULL COMMENT 'ค่าประกันหอพัก',
  `dt_deposit` float NOT NULL COMMENT 'ค่ามัดจำหอ',
  `dt_title` text NOT NULL COMMENT 'รายละเอียดเบื้องต้น ที่เเสดงหน้าเเรก',
  `dt_orther` text NOT NULL COMMENT 'รายละเอียดเพิ่มเติม',
  `ac_d_id` int(11) NOT NULL COMMENT 'ไอดี เครื่องอำนวยความสะดวกของหอพัก',
  `ac_d_o_id` int(11) NOT NULL COMMENT 'ไอดีสิ่งอำนวยความสะดวก ในอาคาร',
  `dt_electricity_cost` float NOT NULL DEFAULT 0 COMMENT 'ค่าไฟฟ้า',
  `dt_water_cost` float NOT NULL DEFAULT 0 COMMENT 'ค่าน้ำ',
  `dt_orther_cost` float NOT NULL DEFAULT 0 COMMENT 'ค่าบริการอื่นๆ',
  `dt_internet_cost` float NOT NULL DEFAULT 0 COMMENT 'ค่าอินเตอร์เน็ต',
  `dt_count_room` int(11) NOT NULL DEFAULT 0 COMMENT 'จำนวนห้องที่ว่าง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางหอพัก';

--
-- Dumping data for table `tbl_dormitory`
--

INSERT INTO `tbl_dormitory` (`dt_id`, `dt_name`, `dt_detail`, `dt_image1`, `dt_image2`, `dt_image3`, `dt_price`, `dtp_id`, `dl_id`, `do_id`, `dt_insurance`, `dt_deposit`, `dt_title`, `dt_orther`, `ac_d_id`, `ac_d_o_id`, `dt_electricity_cost`, `dt_water_cost`, `dt_orther_cost`, `dt_internet_cost`, `dt_count_room`) VALUES
(35, 'a', 'rrrrrrrrrrrrrrr', '603b3b9e4e0bbef0339107f8a1ede9cca49fcc384ba01download.jfif', '603b3b9e4e0b6ef0339107f8a1ede9cca49fcc384ba01CocwlHCVIAIA9Ad.jfif', '603b3b9e4e0bdef0339107f8a1ede9cca49fcc384ba01CocwlHCVIAIA9Ad.jfif', 2, 2, 2, 28, 5, 5, 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrerrert', 'sethrth', 11, 17, 5, 56, 2, 0, 6),
(36, 'b', 'ghjjjjjjjjjj', '603b396d0ccfaab0b66b535b22c89b185f20cee0d4226CocwlHCVIAIA9Ad.jfif', '603b396d0ccf5ab0b66b535b22c89b185f20cee0d4226CocwlHCVIAIA9Ad.jfif', '603b396d0ccfcab0b66b535b22c89b185f20cee0d4226golang-icon.png', 5666, 2, 3, 29, 65, 666, 'bกกกกกกกกกก', 'erttttttttttttt', 13, 18, 8, 6, 7, 5, 3),
(37, 'c', 'seeggggggggggggggggggggg', '603b2eebbbcf359668441c3b806ba4bb4c4593137e440l2jgqa97.png', '603b2eebbbcee59668441c3b806ba4bb4c4593137e440download.jfif', '603b2eebbbcf459668441c3b806ba4bb4c4593137e440golang-icon.png', 3, 2, 2, 30, 8633, 33, 'syuiopp', 'hhhhhhhhhhhhhhhhhhhh', 12, 19, 0, 0, 0, 0, 4),
(38, 'd', 'gh', '603b37c57ee5f1024px-MySQL.ff87215b43fd7292af172e2a5d9b844217262571.png', '603b37c57ee5aCocwlHCVIAIA9Ad.jfif', '603b37c57ee622.png', 6, 2, 3, 31, 45699, 9, 'ghhh', 'gh', 14, 20, 42, 55, -1, 5, 5),
(39, 'h', 'ett', '603b3804381b8download.jfif', '603b3804381b1CocwlHCVIAIA9Ad.jfif', '603b3804381baCocwlHCVIAIA9Ad.jfif', 55, 2, 3, 32, 96, 555, 'ar', 't', 15, 21, 6, 6, 78, 9, 5),
(40, 'd', 'ert', '603b704d35e827c48fb6be8588ee1b78c3ae512ddd304CocwlHCVIAIA9Ad.jfif', '603b704d35e7e7c48fb6be8588ee1b78c3ae512ddd304CocwlHCVIAIA9Ad.jfif', '603b704d35e837c48fb6be8588ee1b78c3ae512ddd304qrcode_localhost.png', 5, 1, 3, 0, 5, 5, 'rwh', 'ert', 16, 0, 5, 5, 4, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dormitory_locations`
--

CREATE TABLE `tbl_dormitory_locations` (
  `dl_id` int(11) NOT NULL COMMENT 'ไอดีตำเเหน่งของหอพัก',
  `dl_name` varchar(200) NOT NULL COMMENT 'ชื่อฝั่ง หรือตำเเหน่งที่อยู๋ของหอพัก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางตำเเหน่ง หรือ ฝั่งของหอพัก';

--
-- Dumping data for table `tbl_dormitory_locations`
--

INSERT INTO `tbl_dormitory_locations` (`dl_id`, `dl_name`) VALUES
(1, 'ฝั่งหน้ามอ'),
(2, 'ฝั่งขามเรียง'),
(3, 'ฝั่งขอนยาง'),
(4, 'ในเมือง');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dormitory_owner`
--

CREATE TABLE `tbl_dormitory_owner` (
  `do_email` varchar(100) NOT NULL COMMENT 'ชื่อผู้ใช้งานของเจ้าของหอ',
  `do_password` text NOT NULL COMMENT 'รหัสผ่านของเจ้าของหอพัก',
  `do_fullname` varchar(200) NOT NULL COMMENT 'ชื่อ-นามสกุลเจ้าของหอพัก',
  `do_tel` varchar(50) NOT NULL COMMENT 'เบอร์โทรศัพท์เจ้าของหอพัก',
  `do_id` int(11) NOT NULL COMMENT 'ไอดีเจ้าของหอพัก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางข้อมูลเจ้าของหอพัก';

--
-- Dumping data for table `tbl_dormitory_owner`
--

INSERT INTO `tbl_dormitory_owner` (`do_email`, `do_password`, `do_fullname`, `do_tel`, `do_id`) VALUES
('', '', 'ยังไม่เพิ่ม', '', 0),
('a@gmail.com', '7f8199312f2c0cf56ef85ad625be6aaa', 'yuo p', '06110331025', 28),
('b@gmail.com', '762f44c342a9580748ef0cfaa527adf5', 'b nnm', '0611033102sgdfg', 29),
('c@gmail.com', 'f420f9a33a71707fa9eb832051073452', 'c  ppooi', '0611033102', 30),
('d@gmail.com', '73b8264d99e52830dbf11df4395a0c24', 'd', '06110331025', 31),
('h@gmail.com', '8fee646aae6f8e5bf07243dd9b54d289', 'h', '0611033102', 32);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dormitory_type`
--

CREATE TABLE `tbl_dormitory_type` (
  `dtp_id` int(11) NOT NULL COMMENT 'ไอประเภทหอพัก',
  `dtp_name` varchar(200) NOT NULL COMMENT 'ชื่อประเภทหอพัก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางประเภทหอพักก';

--
-- Dumping data for table `tbl_dormitory_type`
--

INSERT INTO `tbl_dormitory_type` (`dtp_id`, `dtp_name`) VALUES
(1, 'หอพักชาย'),
(2, 'หอพักหญิง');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `st_id` int(11) NOT NULL COMMENT 'ไอดีสถานะการจองห้องพัก',
  `st_name` varchar(100) NOT NULL COMMENT 'ชื่อสถานะ , รายละเอียด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`st_id`, `st_name`) VALUES
(1, 'รอการตรวจสอบจากเจ้าของหอ'),
(2, 'ยืนยันการชำเงินเเล้ว');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `u_id` int(11) NOT NULL COMMENT 'ไอดีผู้ใช้งาน',
  `u_name` varchar(200) NOT NULL COMMENT 'ชื่อผู้ใช้งาน',
  `u_email` varchar(100) NOT NULL COMMENT 'ชื่อการเข้าระบบของผู้ใช้',
  `u_password` text NOT NULL COMMENT 'รหัสผ่านผู้ใช้งาน',
  `u_tel` varchar(20) NOT NULL COMMENT 'เบอร์โทรศัพท์ผู้ใช้งาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางผู้ใช้งาน';

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`u_id`, `u_name`, `u_email`, `u_password`, `u_tel`) VALUES
(19, 'a5', 'add@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '0857539375'),
(20, 'a', 'ad@', '1', ''),
(21, 'root', 'root@gmail.com', 'ff9830c42660c1dd1942844f8069b74a', '0857539375'),
(24, 'admin', 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609', '0857539375'),
(25, 'a', 'a@gmail.com', '7f8199312f2c0cf56ef85ad625be6aaa', '0857539375');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accessory_in_room`
--
ALTER TABLE `tbl_accessory_in_room`
  ADD PRIMARY KEY (`ac_d_id`);

--
-- Indexes for table `tbl_accessory_out_room`
--
ALTER TABLE `tbl_accessory_out_room`
  ADD PRIMARY KEY (`ac_d_o_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`a_email`);

--
-- Indexes for table `tbl_bookings`
--
ALTER TABLE `tbl_bookings`
  ADD PRIMARY KEY (`bk_id`);

--
-- Indexes for table `tbl_dormitory`
--
ALTER TABLE `tbl_dormitory`
  ADD PRIMARY KEY (`dt_id`);

--
-- Indexes for table `tbl_dormitory_locations`
--
ALTER TABLE `tbl_dormitory_locations`
  ADD PRIMARY KEY (`dl_id`);

--
-- Indexes for table `tbl_dormitory_owner`
--
ALTER TABLE `tbl_dormitory_owner`
  ADD PRIMARY KEY (`do_id`),
  ADD UNIQUE KEY `do_username` (`do_email`);

--
-- Indexes for table `tbl_dormitory_type`
--
ALTER TABLE `tbl_dormitory_type`
  ADD PRIMARY KEY (`dtp_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_email` (`u_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accessory_in_room`
--
ALTER TABLE `tbl_accessory_in_room`
  MODIFY `ac_d_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดี เครื่องอำนวยความสะดวกของหอพัก', AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_accessory_out_room`
--
ALTER TABLE `tbl_accessory_out_room`
  MODIFY `ac_d_o_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีสิ่งอำนวยความสะดวก ในอาคาร', AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_bookings`
--
ALTER TABLE `tbl_bookings`
  MODIFY `bk_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีการจอง', AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_dormitory`
--
ALTER TABLE `tbl_dormitory`
  MODIFY `dt_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีหอพัก', AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_dormitory_locations`
--
ALTER TABLE `tbl_dormitory_locations`
  MODIFY `dl_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีตำเเหน่งของหอพัก', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_dormitory_owner`
--
ALTER TABLE `tbl_dormitory_owner`
  MODIFY `do_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีเจ้าของหอพัก', AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_dormitory_type`
--
ALTER TABLE `tbl_dormitory_type`
  MODIFY `dtp_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอประเภทหอพัก', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีสถานะการจองห้องพัก', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีผู้ใช้งาน', AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


ALTER TABLE `tbl_dormitory_owner` ADD `do_account_number` VARCHAR(75) NULL DEFAULT NULL COMMENT 'เลขที่บัญชี เเละธนาคาร' AFTER `do_id`, ADD `do_pompay` VARCHAR(75) NULL DEFAULT NULL COMMENT 'พร้อมเพย์' AFTER `do_account_number`;


ALTER TABLE `tbl_bookings` ADD `bk_total` INT NOT NULL COMMENT 'ราคารวม' AFTER `bk_c_email`;
