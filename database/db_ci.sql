-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 03:26 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mejor`
--

CREATE TABLE `mejor` (
  `mejor_id` int(11) NOT NULL,
  `major_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `part_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mejor`
--

INSERT INTO `mejor` (`mejor_id`, `major_name`, `part_id`) VALUES
(1, 'AA', 1),
(2, 'BB', 1);

-- --------------------------------------------------------

--
-- Table structure for table `part`
--

CREATE TABLE `part` (
  `part_id` int(11) NOT NULL,
  `part_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `part`
--

INSERT INTO `part` (`part_id`, `part_name`) VALUES
(1, 'สาขาวิชา A'),
(2, 'สาขาวิชา B');

-- --------------------------------------------------------

--
-- Table structure for table `personal_group`
--

CREATE TABLE `personal_group` (
  `personalgroup_id` int(11) NOT NULL,
  `personel_id` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personal_group`
--

INSERT INTO `personal_group` (`personalgroup_id`, `personel_id`, `group_id`) VALUES
(1, '3670700004172', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personel_degree`
--

CREATE TABLE `personel_degree` (
  `degree_id` int(11) NOT NULL,
  `degree_namethai` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `degree_nameen` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personel_degree`
--

INSERT INTO `personel_degree` (`degree_id`, `degree_namethai`, `degree_nameen`) VALUES
(1, 'ปริญญาตรี', 'Bachelor'),
(2, 'ปริญญาโท', 'Master\'s'),
(3, 'ปริญญาเอก', 'Doctorate');

-- --------------------------------------------------------

--
-- Table structure for table `personel_division`
--

CREATE TABLE `personel_division` (
  `division_id` int(11) NOT NULL,
  `division_name` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `division_type` int(11) DEFAULT '1' COMMENT '1 วิชาการ 2 บริการ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personel_division`
--

INSERT INTO `personel_division` (`division_id`, `division_name`, `division_type`) VALUES
(1, 'ผู้บริหารคณะ', 1),
(2, 'อาจารย์', 1),
(3, 'เจ้าหน้าที่บริหารทั่วไป', 1),
(4, 'นักวิชาการโสตทัศนศึกษา', 1),
(5, 'นักวิชาการพัสดุ', 1),
(6, 'นักวิชาการเงินและบัญชี', 1),
(7, 'นักวิเคราะห์นโยบายและแผน', 1),
(8, 'นักวิชาการศึกษา', 1),
(9, 'นักวิชาการคอมพิวเตอร์', 1),
(10, 'คนขับรถ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personel_education`
--

CREATE TABLE `personel_education` (
  `education_id` int(11) NOT NULL,
  `degree_id` int(11) DEFAULT NULL,
  `personel_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `education_couse` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `education_year` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `education_placename` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personel_education`
--

INSERT INTO `personel_education` (`education_id`, `degree_id`, `personel_id`, `education_couse`, `education_year`, `education_placename`, `no`) VALUES
(1, 1, '3670700004172', 'ddd', '2550', 'มอ พะเยา', 1),
(3, 1, '3670700004172', 'xxxxx', '2017', 'dddddddddd', 1),
(4, 1, '3670700004172', 'sddd', '2017', 'sddd', 1),
(5, 1, '3670700004172', 'dff', '2017', 'ddf', 1),
(6, 1, '3670700004172', 'dfff', '2017', 'ddf', 1),
(7, 1, '3670700004172', 'xdd', '0', 'ass', 1),
(8, 3, '3670700004173', 'กอภร', '2560', 'มพะเยา', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personel_info`
--

CREATE TABLE `personel_info` (
  `personel_id` int(15) NOT NULL,
  `title_id` int(11) DEFAULT NULL,
  `personel_gender` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personel_fname_th` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personel_fname_en` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personel_lname_th` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personel_lname_en` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL,
  `positionacademic_id` int(11) DEFAULT NULL,
  `positionmanagement_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `personel_tel` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pesonel_tel_in` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personel_mail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personel_hompage` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personel_pic` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personel_record_status` char(1) COLLATE utf8_unicode_ci DEFAULT 'T',
  `personel_date` date DEFAULT NULL,
  `personel_last_user` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `personel_username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mejor_id` int(11) DEFAULT NULL,
  `personel_workdate` date DEFAULT NULL,
  `personel_containdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personel_info`
--

INSERT INTO `personel_info` (`personel_id`, `title_id`, `personel_gender`, `personel_fname_th`, `personel_fname_en`, `personel_lname_th`, `personel_lname_en`, `type_id`, `division_id`, `positionacademic_id`, `positionmanagement_id`, `room_id`, `personel_tel`, `pesonel_tel_in`, `personel_mail`, `personel_hompage`, `personel_pic`, `personel_record_status`, `personel_date`, `personel_last_user`, `personel_username`, `mejor_id`, `personel_workdate`, `personel_containdate`) VALUES
(1, 1, 'M', 'ธิตินนท์', 'thitinon', 'มณีธรรม', 'maneetume', 1, 2, 1, 1, 1, '0807933755', '2358', 'thitinon.ma@up.ac.th', '', NULL, 'T', '2017-05-06', NULL, 'thitinon.ma', 1, NULL, NULL),
(2, 1, 'M', 'อารีย์', 'thi', 'มณีจันทร์', 'manee', 1, 2, 2, 2, 1, '0804933755', '2359', 'thitinon.ma@up.ac.th', '', NULL, 'T', '2017-05-05', NULL, '', 1, NULL, NULL),
(3, 2, NULL, 'ทดสอบ', NULL, 'ทดสอบนามสกุล', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'T', NULL, NULL, NULL, 2, NULL, NULL),
(4, 1, NULL, 'ธิตินนท์5', NULL, 'มณีธรรม3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'T', NULL, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personel_meeting`
--

CREATE TABLE `personel_meeting` (
  `meeting_id` int(11) NOT NULL,
  `personel_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meeting_type_id` int(11) DEFAULT NULL,
  `meeting_subject` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meetting_begindate` date DEFAULT NULL,
  `meeting_enddate` date DEFAULT NULL,
  `meeting_file` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meeting_by` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meeting_place` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meeting_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personel_meeting_type`
--

CREATE TABLE `personel_meeting_type` (
  `meeting_type_id` int(11) NOT NULL,
  `meeting_type_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personel_part`
--

CREATE TABLE `personel_part` (
  `part_id` int(11) NOT NULL,
  `part_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `part_type` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personel_part`
--

INSERT INTO `personel_part` (`part_id`, `part_name`, `part_type`) VALUES
(1, 'สำนักงานคณะ', 1),
(2, 'สาขาวิชา A', 2),
(3, 'สาขาวิชา B', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personel_positionacademic`
--

CREATE TABLE `personel_positionacademic` (
  `positionacademic_id` int(11) NOT NULL,
  `positionacademic_nameth` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `positionacademic_nameen` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personel_positionacademic`
--

INSERT INTO `personel_positionacademic` (`positionacademic_id`, `positionacademic_nameth`, `positionacademic_nameen`) VALUES
(1, 'ศาสตราจารย์', NULL),
(2, 'รองศาสตราจารย์', NULL),
(3, 'ผู้ช่วยศาสตราจารย์', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personel_positionmanagement`
--

CREATE TABLE `personel_positionmanagement` (
  `positionmanagement_id` int(11) NOT NULL,
  `positionmanagement_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personel_positionmanagement`
--

INSERT INTO `personel_positionmanagement` (`positionmanagement_id`, `positionmanagement_name`) VALUES
(1, 'ไม่มีตำแหน่งบริหาร'),
(2, 'คณบดี'),
(3, 'ผู้ช่วยคณบดี'),
(4, 'รองคณบดีฝ่ายวิจัย'),
(5, 'รองคณบดีฝ่ายวิชาการ'),
(6, 'รองคณบดีฝ่ายบริหาร'),
(7, 'รองคณบดีฝ่ายกิจการนิสิต'),
(8, 'หัวหน้าสาขา'),
(9, 'รักษาการแทนหัวหน้าสาขา');

-- --------------------------------------------------------

--
-- Table structure for table `personel_room`
--

CREATE TABLE `personel_room` (
  `room_id` int(11) NOT NULL,
  `room_nameth` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `room_nameeng` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personel_room`
--

INSERT INTO `personel_room` (`room_id`, `room_nameth`, `room_nameeng`) VALUES
(1, 'A 101', NULL),
(2, 'A 102', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personel_status`
--

CREATE TABLE `personel_status` (
  `personelstatus_id` int(11) NOT NULL,
  `personelstatus_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personel_status`
--

INSERT INTO `personel_status` (`personelstatus_id`, `personelstatus_name`) VALUES
(1, 'ปฏิบัติงาน'),
(2, 'ลาศึกษาต่อ'),
(3, 'ลาออก');

-- --------------------------------------------------------

--
-- Table structure for table `personel_title`
--

CREATE TABLE `personel_title` (
  `title_id` int(11) NOT NULL,
  `title_nameth` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_nameen` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_type` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personel_title`
--

INSERT INTO `personel_title` (`title_id`, `title_nameth`, `title_nameen`, `title_type`) VALUES
(1, 'นาย', NULL, 2),
(2, 'นางสาว', NULL, 2),
(3, 'นาง', NULL, 2),
(4, 'ดร.', NULL, 1),
(5, 'ศาสตราจารย์', NULL, 1),
(6, 'ผู้ช่วยศาสตราจารย์', NULL, 1),
(7, 'รองศาสตราจารย์', NULL, 1),
(8, 'ศ.ดร.', NULL, 1),
(9, 'ผศ.ดร.', NULL, 1),
(10, 'รศ.ดร.', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personel_type`
--

CREATE TABLE `personel_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personel_type`
--

INSERT INTO `personel_type` (`type_id`, `type_name`) VALUES
(1, 'พนักงานมหาวิทยาลัย'),
(2, 'พนักงานราชการ'),
(3, 'พนักงานมหาวิทยาลัย พ1'),
(4, 'ลูกจ้าง');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mejor`
--
ALTER TABLE `mejor`
  ADD PRIMARY KEY (`mejor_id`);

--
-- Indexes for table `part`
--
ALTER TABLE `part`
  ADD PRIMARY KEY (`part_id`);

--
-- Indexes for table `personal_group`
--
ALTER TABLE `personal_group`
  ADD PRIMARY KEY (`personalgroup_id`);

--
-- Indexes for table `personel_degree`
--
ALTER TABLE `personel_degree`
  ADD PRIMARY KEY (`degree_id`);

--
-- Indexes for table `personel_division`
--
ALTER TABLE `personel_division`
  ADD PRIMARY KEY (`division_id`);

--
-- Indexes for table `personel_education`
--
ALTER TABLE `personel_education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `personel_info`
--
ALTER TABLE `personel_info`
  ADD PRIMARY KEY (`personel_id`);

--
-- Indexes for table `personel_meeting`
--
ALTER TABLE `personel_meeting`
  ADD PRIMARY KEY (`meeting_id`);

--
-- Indexes for table `personel_meeting_type`
--
ALTER TABLE `personel_meeting_type`
  ADD PRIMARY KEY (`meeting_type_id`);

--
-- Indexes for table `personel_part`
--
ALTER TABLE `personel_part`
  ADD PRIMARY KEY (`part_id`);

--
-- Indexes for table `personel_positionacademic`
--
ALTER TABLE `personel_positionacademic`
  ADD PRIMARY KEY (`positionacademic_id`);

--
-- Indexes for table `personel_positionmanagement`
--
ALTER TABLE `personel_positionmanagement`
  ADD PRIMARY KEY (`positionmanagement_id`);

--
-- Indexes for table `personel_room`
--
ALTER TABLE `personel_room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `personel_status`
--
ALTER TABLE `personel_status`
  ADD PRIMARY KEY (`personelstatus_id`);

--
-- Indexes for table `personel_title`
--
ALTER TABLE `personel_title`
  ADD PRIMARY KEY (`title_id`);

--
-- Indexes for table `personel_type`
--
ALTER TABLE `personel_type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mejor`
--
ALTER TABLE `mejor`
  MODIFY `mejor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `part`
--
ALTER TABLE `part`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `personal_group`
--
ALTER TABLE `personal_group`
  MODIFY `personalgroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `personel_degree`
--
ALTER TABLE `personel_degree`
  MODIFY `degree_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `personel_division`
--
ALTER TABLE `personel_division`
  MODIFY `division_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `personel_education`
--
ALTER TABLE `personel_education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `personel_info`
--
ALTER TABLE `personel_info`
  MODIFY `personel_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `personel_meeting`
--
ALTER TABLE `personel_meeting`
  MODIFY `meeting_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `personel_meeting_type`
--
ALTER TABLE `personel_meeting_type`
  MODIFY `meeting_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `personel_part`
--
ALTER TABLE `personel_part`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `personel_positionacademic`
--
ALTER TABLE `personel_positionacademic`
  MODIFY `positionacademic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `personel_positionmanagement`
--
ALTER TABLE `personel_positionmanagement`
  MODIFY `positionmanagement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `personel_room`
--
ALTER TABLE `personel_room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `personel_status`
--
ALTER TABLE `personel_status`
  MODIFY `personelstatus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `personel_title`
--
ALTER TABLE `personel_title`
  MODIFY `title_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `personel_type`
--
ALTER TABLE `personel_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
