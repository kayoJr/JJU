-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 12, 2019 at 11:49 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expat_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `expat_contract`
--

CREATE TABLE `expat_contract` (
  `userid` int(11) NOT NULL,
  `yexpjig` int(11) DEFAULT NULL,
  `fcsdate` datetime DEFAULT NULL,
  `fcedate` datetime DEFAULT NULL,
  `ccsdate` datetime DEFAULT NULL,
  `ccedate` datetime DEFAULT NULL,
  `desig` varchar(20) DEFAULT NULL,
  `basic` int(4) DEFAULT NULL,
  `hra` int(3) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expat_contract`
--

INSERT INTO `expat_contract` (`userid`, `yexpjig`, `fcsdate`, `fcedate`, `ccsdate`, `ccedate`, `desig`, `basic`, `hra`, `file`, `created_date`) VALUES
(3, 5, '2014-09-01 00:00:00', '2016-07-31 00:00:00', '2018-09-01 00:00:00', '2020-07-31 00:00:00', 'Associate Professor', 2200, 275, 'uploads/degree/3jagancv.pdf', '2019-01-29 10:49:15'),
(2, 1, '2017-10-11 00:00:00', '2019-07-31 00:00:00', '2017-10-11 00:00:00', '2019-07-31 00:00:00', 'Senior Lecturer', 2000, 275, 'uploads/degree/2abp.pdf', '2019-01-29 10:34:24'),
(4, 3, '2016-09-20 00:00:00', '2018-07-31 00:00:00', '2018-08-01 00:00:00', '2020-07-31 00:00:00', 'Assistant Professor', 2000, 275, 'uploads/degree/default.jpg', '2019-01-29 11:03:15'),
(5, 6, '2013-10-21 00:00:00', '2015-07-31 00:00:00', '2017-09-01 00:00:00', '2019-07-31 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/5ressume udhaya Kumar ME.pdf', '2019-01-29 11:19:14'),
(6, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-09-11 00:00:00', '2019-07-31 00:00:00', 'Senior Lecturer', 2000, 275, 'uploads/degree/6CVnContract.pdf', '2019-01-29 11:24:07'),
(7, 4, '2014-11-14 00:00:00', '2016-07-31 00:00:00', '2018-10-01 00:00:00', '2020-07-31 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/7cv.pdf', '2019-01-29 11:27:20'),
(8, 4, '2014-12-14 00:00:00', '2016-07-31 00:00:00', '2018-08-01 00:00:00', '2020-07-31 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/8New Document 35.pdf', '2019-01-29 11:30:13'),
(9, 5, '2014-02-01 00:00:00', '2015-07-31 00:00:00', '2017-09-20 00:00:00', '2019-07-31 00:00:00', 'Senior Lecturer', 2000, 275, 'uploads/degree/9Contrct_compressed.pdf', '2019-01-29 11:32:57'),
(10, 2, '2016-09-20 00:00:00', '2018-07-31 00:00:00', '2019-08-01 00:00:00', '2019-08-01 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/10PRABHAKAR.pdf', '2019-01-29 11:35:04'),
(11, 4, '2015-11-04 00:00:00', '2017-07-31 00:00:00', '2017-09-20 00:00:00', '2019-07-31 00:00:00', 'Senior Lecturer', 2000, 275, 'uploads/degree/default.jpg', '2019-01-29 11:37:13'),
(12, 2, '2017-10-21 00:00:00', '2019-07-31 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Assistant Professor', 2000, 275, 'uploads/degree/12resume_contract.pdf', '2019-01-29 11:41:13'),
(13, 3, '2016-09-20 00:00:00', '2018-07-31 00:00:00', '2018-08-01 00:00:00', '2020-07-31 00:00:00', 'Assistant Professor', 2000, 275, 'uploads/degree/13Binder2.pdf', '2019-01-29 12:13:42'),
(14, 5, '2014-11-15 00:00:00', '2016-07-31 00:00:00', '2018-08-01 00:00:00', '2020-07-31 00:00:00', 'Assistant Professor', 2000, 275, 'uploads/degree/14CONTRACT.pdf', '2019-01-29 12:17:06'),
(15, 4, '2015-11-04 00:00:00', '2017-07-31 00:00:00', '2017-08-01 00:00:00', '2019-07-31 00:00:00', 'Professor', 3000, 275, 'uploads/degree/15Binder1.pdf', '2019-01-29 12:19:42'),
(16, 8, '2011-11-27 00:00:00', '2013-07-31 00:00:00', '2017-09-20 00:00:00', '2019-07-31 00:00:00', 'Professor', 2500, 275, 'uploads/degree/16palani sir.pdf', '2019-01-29 12:21:40'),
(17, 4, '2015-11-05 00:00:00', '2017-07-31 00:00:00', '2017-09-20 00:00:00', '2019-07-31 00:00:00', 'Assistant Professor', 2000, 275, 'uploads/degree/default.jpg', '2019-01-29 12:23:26'),
(18, 2, '2017-10-11 00:00:00', '2019-07-31 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/18cv+contract.pdf', '2019-01-29 12:25:01'),
(19, 3, '2016-08-20 00:00:00', '2018-07-31 00:00:00', '2018-08-01 00:00:00', '2020-07-31 00:00:00', 'Assistant Professor', 2000, 275, 'uploads/degree/default.jpg', '2019-01-29 12:26:39'),
(20, 6, '2014-02-18 00:00:00', '2015-07-31 00:00:00', '2017-09-01 00:00:00', '2017-07-31 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/default.jpg', '2019-01-29 12:28:37'),
(21, 2, '2017-09-01 00:00:00', '2019-07-31 00:00:00', '2017-09-01 00:00:00', '2019-07-31 00:00:00', 'Associate Professor', 2200, 275, 'uploads/degree/default.jpg', '2019-01-29 13:58:38'),
(22, 0, '2018-08-01 00:00:00', '2020-07-31 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Associate Professor', 2200, 275, 'uploads/degree/22cv 1-.pdf', '2019-01-29 14:00:50'),
(23, 1, '2017-10-11 00:00:00', '2019-07-31 00:00:00', '2017-10-11 00:00:00', '2019-07-31 00:00:00', 'Assistant Professor', 2000, 275, 'uploads/degree/23ilovepdf_merged.pdf', '2019-01-29 14:03:28'),
(24, 4, '2014-12-07 00:00:00', '2016-07-31 00:00:00', '2018-08-01 00:00:00', '2020-07-31 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/24Contract_CV.pdf', '2019-01-29 14:05:14'),
(25, 5, '2014-10-01 00:00:00', '2016-07-31 00:00:00', '2018-08-01 00:00:00', '2020-07-31 00:00:00', 'Lecturer', 2000, 0, 'uploads/degree/25shahnaz resume_new 2018.pdf', '2019-01-29 14:06:59'),
(26, 7, '2012-10-01 00:00:00', '2014-07-31 00:00:00', '2018-08-01 00:00:00', '2020-07-31 00:00:00', 'Assistant Professor', 2000, 275, 'uploads/degree/26rafee contract.pdf', '2019-01-29 14:08:40'),
(27, 4, '2014-11-15 00:00:00', '2016-07-31 00:00:00', '2018-08-01 00:00:00', '2018-07-31 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/27RESUMECONTRACT.pdf', '2019-01-29 14:10:24'),
(28, 7, '2012-10-02 00:00:00', '2014-07-31 00:00:00', '2018-08-01 00:00:00', '2020-07-31 00:00:00', 'Senior Lecturer', 2000, 275, 'uploads/degree/28CV and Contract Copy - P. Rameswara Anand.pdf', '2019-01-29 14:12:20'),
(29, 3, '2016-09-20 00:00:00', '2018-07-31 00:00:00', '2018-08-01 00:00:00', '2020-07-31 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/default.jpg', '2019-01-29 14:14:04'),
(30, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 'uploads/degree/default.jpg', '2019-01-29 14:15:43'),
(31, 5, '2014-11-08 00:00:00', '2016-07-31 00:00:00', '2018-08-01 00:00:00', '2020-07-31 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/default.jpg', '2019-01-29 14:17:25'),
(32, 1, '2017-10-11 00:00:00', '2019-07-31 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Lecturer', 1800, 275, 'uploads/degree/32Cv Plus Contract letter.pdf', '2019-01-29 14:19:19'),
(33, 1, '2018-12-01 00:00:00', '2019-07-31 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Professor', 0, 0, 'uploads/degree/33DR KATTA CV.docx_1_.pdf', '2019-01-29 14:20:49'),
(34, 7, '2012-10-02 00:00:00', '2014-08-31 00:00:00', '2018-08-01 00:00:00', '2020-07-31 00:00:00', 'Senior Lecturer', 2000, 275, 'uploads/degree/34contract.pdf', '2019-01-29 14:22:20'),
(35, 1, '2017-10-11 00:00:00', '2019-07-31 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/35d-converted.pdf', '2019-01-29 14:23:51'),
(36, 2, '2017-04-09 00:00:00', '2019-07-31 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Lecturer', 2000, 0, 'uploads/degree/36pushpa rega.pdf', '2019-01-29 14:28:06'),
(37, 0, '2017-09-13 00:00:00', '2019-07-31 00:00:00', '2017-09-13 00:00:00', '2019-07-31 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/37Binder1(revised contract + cv).pdf', '2019-01-29 14:29:34'),
(38, 1, '2017-11-07 00:00:00', '2019-07-31 00:00:00', '2017-11-07 00:00:00', '2019-07-31 00:00:00', 'Professor', 2500, 275, 'uploads/degree/38Prof. G Y Sagar.docx.pdf', '2019-01-29 14:31:19'),
(39, 4, '2014-11-15 00:00:00', '2016-07-31 00:00:00', '2018-08-01 00:00:00', '2020-07-31 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/39CV & Contract.pdf', '2019-01-29 14:32:56'),
(40, 4, '2015-11-04 00:00:00', '2017-07-31 00:00:00', '2018-11-01 00:00:00', '2019-07-31 00:00:00', 'Assistant Professor', 2000, 275, 'uploads/degree/40Binder2.pdf', '2019-01-29 14:34:23'),
(41, 2, '2016-11-29 00:00:00', '2018-07-31 00:00:00', '2018-08-01 00:00:00', '2020-07-31 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/41CV n Contract.pdf', '2019-01-29 14:35:47'),
(42, 1, '2017-11-02 00:00:00', '2019-07-31 00:00:00', '2017-11-02 00:00:00', '2019-07-31 00:00:00', 'Lecturer', 2000, 0, 'uploads/degree/42CVnContractAzna.pdf', '2019-01-29 14:37:15'),
(43, 2, '2016-09-20 00:00:00', '2018-08-31 00:00:00', '2018-09-01 00:00:00', '2021-08-31 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/431 (6 files merged).pdf', '2019-01-29 14:38:38'),
(44, 3, '2016-09-20 00:00:00', '2018-07-31 00:00:00', '2019-07-01 00:00:00', '2020-07-31 00:00:00', 'Associate Professor', 2500, 275, 'uploads/degree/44C V& CONTRACT.pdf', '2019-01-29 14:39:59'),
(45, 4, '2014-11-15 00:00:00', '2016-07-31 00:00:00', '2018-08-01 00:00:00', '2020-07-31 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/45New Doc 2019-04-03 12.31.38.pdf', '2019-01-29 14:41:30'),
(46, 1, '2017-10-11 00:00:00', '2019-02-28 00:00:00', '2019-03-01 00:00:00', '2019-07-31 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/46CV and contarct.pdf', '2019-01-29 14:43:07'),
(47, 0, '2018-12-15 00:00:00', '2020-07-31 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Lecturer', 2000, 0, 'uploads/degree/47CV PLUS CONTRACT.pdf', '2019-01-29 14:44:22'),
(48, 1, '2017-12-17 00:00:00', '2019-07-23 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/48Resume & CC.pdf', '2019-01-29 14:46:37'),
(49, 1, '2017-09-23 00:00:00', '2019-07-31 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Lecturer', 2000, 0, 'uploads/degree/49Alekya Resume & CC.pdf', '2019-01-29 14:48:13'),
(50, 1, '2017-10-11 00:00:00', '2019-07-31 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Assistant Professor', 2000, 275, 'uploads/degree/default.jpg', '2019-01-29 14:49:29'),
(51, 1, '2018-06-01 00:00:00', '2020-07-30 00:00:00', '2018-06-01 00:00:00', '2020-07-30 00:00:00', 'Professor', 2225, 275, 'uploads/degree/default.jpg', '2019-03-25 19:26:00'),
(52, 4, '2014-11-15 00:00:00', '2016-07-31 00:00:00', '2018-08-01 00:00:00', '2020-07-31 00:00:00', 'Professor', 2500, 250, 'uploads/degree/52contract.pdf', '2019-03-25 19:26:54'),
(53, 1, '2017-10-11 00:00:00', '2019-07-31 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/53jpg2pdf.pdf', '2019-03-25 19:27:52'),
(54, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 'uploads/degree/default.jpg', '2019-03-25 19:28:36'),
(55, 0, '2019-03-01 00:00:00', '2020-07-31 00:00:00', '2019-03-01 00:00:00', '2020-07-31 00:00:00', 'Associate Professor', 2200, 275, 'uploads/degree/55Binder2.pdf', '2019-03-25 19:29:23'),
(56, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 'uploads/degree/default.jpg', '2019-03-25 19:30:03'),
(57, 0, '2019-03-18 00:00:00', '2020-07-31 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Assistant Professor', 2000, 275, 'uploads/degree/57CV & Contract.pdf', '2019-03-25 19:30:38'),
(58, 0, '2019-04-10 00:00:00', '2020-07-31 00:00:00', '2019-04-10 00:00:00', '2020-07-31 00:00:00', 'Associate Professor', 2200, 275, 'uploads/degree/58New Doc 26.pdf', '2019-03-25 19:31:08'),
(59, 0, '2019-03-01 00:00:00', '2020-07-31 00:00:00', '2019-03-01 00:00:00', '2020-07-31 00:00:00', 'Assistant Professor', 2000, 275, 'uploads/degree/default.jpg', '2019-03-26 17:15:28'),
(60, 4, '2014-11-15 00:00:00', '2016-07-31 00:00:00', '2018-08-01 00:00:00', '2020-07-31 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/60kv resume.pdf', '2019-04-01 19:55:32'),
(61, 2, '2016-09-20 00:00:00', '2018-07-31 00:00:00', '2018-08-01 00:00:00', '2020-07-31 00:00:00', 'Lecturer', 2000, 275, 'uploads/degree/61Contract & Resume.pdf', '2019-04-04 20:03:38'),
(62, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0, 'uploads/degree/default.jpg', '2019-04-08 13:13:24'),
(64, 0, '2019-05-31 00:00:00', '2020-07-31 00:00:00', '2019-05-31 00:00:00', '2020-07-31 00:00:00', 'Associate Professor', 2200, 275, 'uploads/degree/default.jpg', '2019-06-04 10:14:26'),
(65, 0, '2019-09-01 00:00:00', '2021-07-31 00:00:00', '2019-09-01 00:00:00', '2021-07-31 00:00:00', 'Assistant Professor', 2000, 275, 'uploads/degree/default.jpg', '2019-06-28 17:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `expat_departments`
--

CREATE TABLE `expat_departments` (
  `deptid` int(11) NOT NULL,
  `dname` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expat_departments`
--

INSERT INTO `expat_departments` (`deptid`, `dname`, `created_date`) VALUES
(1, 'Civil Engineering', '2018-12-17 13:04:49'),
(2, 'Construction Technology and Management', '2018-12-17 13:04:49'),
(3, 'Electrical and Computer Engineering', '2018-12-17 13:04:49'),
(4, 'Hydraulic and Water Resource Engineering', '2018-12-17 13:04:49'),
(5, 'Mechanical  Engineering', '2018-12-17 13:04:49'),
(6, 'Surveying Engineering', '2018-12-17 13:04:49'),
(7, 'Water Resource and Irrigation Engineering', '2018-12-17 13:04:49'),
(8, 'Computer Science', '2018-12-17 13:04:49'),
(9, 'Information Technology', '2018-12-17 13:04:49'),
(10, 'Software Engineering', '2018-12-17 13:04:49'),
(11, 'Accounting and Finance', '2018-12-17 13:04:49'),
(12, 'Biology', '2018-12-17 13:04:49'),
(13, 'Chemistry', '2018-12-17 13:04:49'),
(14, 'Geology', '2018-12-17 13:04:49'),
(15, 'Mathematics', '2018-12-17 13:04:49'),
(16, 'Physics', '2018-12-17 13:04:49'),
(17, 'Statistics', '2018-12-17 13:04:49'),
(18, 'Medical Laboratory Science', '2018-12-17 13:04:49'),
(19, 'Public Health', '2018-12-17 13:04:49'),
(20, 'Midwifery', '2018-12-17 13:04:49'),
(21, 'Nursing', '2018-12-17 13:04:49'),
(22, 'Veternary Medicine ', '2018-12-17 13:04:49'),
(23, 'Animal and Range Science', '2018-12-17 13:04:49'),
(24, 'Dryland Crop Science', '2018-12-17 13:04:49'),
(25, 'Food Science  and Nutrition', '2018-12-17 13:04:49'),
(26, 'Natural  Resource Management', '2018-12-17 13:04:49'),
(27, 'Rural Development and Agricultural  Extension', '2018-12-17 13:04:49'),
(28, 'Management', '2018-12-17 13:04:49'),
(29, 'Economics', '2018-12-17 13:04:49'),
(30, 'Public adminstration and Development Management', '2018-12-17 13:04:49'),
(31, 'Law', '2018-12-17 13:04:49'),
(32, 'Ethiopian Language and Literature Studies (Amharic)', '2018-12-17 13:04:49'),
(33, 'Arabic Language And Communications', '2018-12-17 13:04:49'),
(34, 'English Language And Literature', '2018-12-17 13:04:49'),
(35, 'Geography and Environmental Studies', '2018-12-17 13:04:49'),
(36, 'History And Heritage Management', '2018-12-17 13:04:49'),
(37, 'Journalism And Communication', '2018-12-17 13:04:49'),
(38, 'Political Science And International Relation', '2018-12-17 13:04:49'),
(39, 'Sociology', '2018-12-17 13:04:49'),
(40, 'Somali Language And Literature', '2018-12-17 13:04:49'),
(41, 'Psychology', '2018-12-17 13:04:49'),
(42, 'Early Childhood Care and Education', '2018-12-17 13:04:49'),
(43, 'Educational Planning and Management', '2018-12-17 13:04:49'),
(44, 'Masters of Public Health', '2018-12-17 13:04:49'),
(45, 'Masters Of Business Administration', '2018-12-17 13:04:49'),
(46, 'MA in Pastoral Economics Development', '2018-12-17 13:04:49'),
(47, 'MA in Disaster and Risk Management', '2018-12-17 13:04:49'),
(48, 'MA in Educational  Leadership', '2018-12-17 13:04:49'),
(49, 'MA in Early Childhood Care and Education', '2018-12-17 13:04:49'),
(50, 'MSc in OHTID', '2018-12-17 13:04:49'),
(51, 'Arabic Language and Literature', '2018-12-17 13:04:49'),
(52, 'Social Work', '2018-12-17 13:04:49'),
(53, 'Pre-engineering', '2018-12-17 13:04:49'),
(54, 'Special Needs and Inclusive Education', '2018-12-17 13:04:49'),
(55, 'ICT', '2018-12-17 13:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `expat_depend`
--

CREATE TABLE `expat_depend` (
  `depid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `depname` varchar(45) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `passno` char(30) DEFAULT NULL,
  `pexp` datetime DEFAULT NULL,
  `rpno` char(30) DEFAULT NULL,
  `rpexp` datetime DEFAULT NULL,
  `relation` char(10) DEFAULT NULL,
  `isemp` char(10) DEFAULT NULL,
  `filepath` varchar(100) DEFAULT NULL,
  `nation` char(20) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expat_depend`
--

INSERT INTO `expat_depend` (`depid`, `userid`, `depname`, `gender`, `dob`, `age`, `passno`, `pexp`, `rpno`, `rpexp`, `relation`, `isemp`, `filepath`, `nation`, `created_date`) VALUES
(1, 2, 'Ashwin', 'M', '2011-12-06 00:00:00', 8, 'H1328D78', '2011-02-22 00:00:00', '232DED3', '2019-03-22 00:00:00', 'Son', 'No', '', 'India', '2019-03-25 15:20:26'),
(2, 39, 'S. Rekha Rani', 'F', '1990-06-19 00:00:00', 29, 'N1861426', '2025-08-04 00:00:00', 'T10347441', '2019-07-13 00:00:00', 'Wife', 'No', '', 'India', '2019-03-26 09:56:28'),
(3, 39, 'S.Humshika', 'F', '2015-06-19 00:00:00', 4, 'N2283158', '2015-08-13 00:00:00', 'T10347443', '2019-07-13 00:00:00', 'Daughter', 'No', '', 'India', '2019-03-26 09:58:42'),
(4, 5, 'Pushpa Rega Ganesan', 'F', '1991-06-22 00:00:00', 28, 'L9135149', '2024-04-30 00:00:00', 'TI0364031', '2020-01-10 00:00:00', 'Wife', 'Yes', '', 'India', '2019-03-26 10:47:19'),
(5, 36, 'Udhaya Kumar.K', 'M', '1986-04-07 00:00:00', 33, 'R8142825', '2027-07-05 00:00:00', 'TI0364025', '2020-01-10 00:00:00', 'Husband', 'Yes', '', 'India', '2019-03-26 11:30:17'),
(6, 46, 'Rabiya Fathima', 'F', '1998-07-30 00:00:00', 21, 'S6257472', '2028-08-30 00:00:00', 'TI', '2019-07-31 00:00:00', 'Wife', 'No', '', 'India', '2019-03-27 15:42:31'),
(7, 7, 'Grinne Joseph Walter Yozheda', 'F', '0000-00-00 00:00:00', 49, 'M6006373', '2025-02-01 00:00:00', 'TI440136', '2019-12-05 00:00:00', 'Wife', 'No', '', 'India', '2019-03-27 18:34:57'),
(8, 12, 'SWAGATIKA MAHAPATRA', 'F', '1991-04-25 00:00:00', 28, 'Z4328498', '2027-10-31 00:00:00', 'TI0387339', '2019-07-31 00:00:00', 'Wife', 'No', '', 'India', '2019-03-27 23:17:48'),
(9, 32, 'RAJESHWARI DEVENTHIRAN', 'F', '1989-10-02 00:00:00', 30, 'Z4310369', '2027-08-06 00:00:00', 'TI0389895', '2019-05-25 00:00:00', 'Wife', 'Yes', '', 'India', '2019-03-28 14:21:56'),
(10, 32, 'MITHUN DEVARAJ', 'M', '2017-11-11 00:00:00', 2, 'R9114571', '2023-02-22 00:00:00', 'TI0389897', '2019-05-25 00:00:00', 'Son', 'No', '', 'India', '2019-03-28 14:24:02'),
(11, 26, 'Sarra Kauser', 'F', '2006-04-10 00:00:00', 13, 'N1840139', '2020-08-11 00:00:00', 'T10347431', '2019-07-13 00:00:00', 'Daughter', 'No', '', 'India', '2019-03-28 17:29:34'),
(12, 26, 'Sana Nazneen', 'F', '2011-12-03 00:00:00', 8, 'R1613493', '2022-07-24 00:00:00', 'T10347433', '2019-07-13 00:00:00', 'Daughter', 'No', '', 'India', '2019-03-28 17:31:29'),
(13, 47, 'DEVENTHIRAN KRISHNAN', 'M', '1988-01-04 00:00:00', 31, 'N4923661', '2025-12-09 00:00:00', 'TI0363785', '2020-01-10 00:00:00', 'Husband', 'Yes', '', 'India', '2019-03-28 18:14:24'),
(14, 48, 'Alekya Rani Y.', 'F', '1987-02-14 00:00:00', 32, 'R0917417', '2016-12-26 00:00:00', 'TI0380595', '2019-12-13 00:00:00', 'Wife', 'Yes', '', 'India', '2019-03-29 11:27:26'),
(15, 49, 'Suresh P.', 'M', '1984-07-08 00:00:00', 35, 'R0917416', '2026-12-25 00:00:00', 'TI0380599', '2019-12-13 00:00:00', 'Husband', 'Yes', '', 'India', '2019-03-29 13:56:58'),
(16, 49, 'Navisha Suresh', 'F', '2016-03-28 00:00:00', 3, 'P4331467', '2021-09-05 00:00:00', 'TI0382783', '2019-12-13 00:00:00', 'Daughter', 'No', '', 'India', '2019-03-29 13:58:26'),
(17, 49, 'Vara Laxmi Y.', 'F', '1960-03-01 00:00:00', 59, 'R3130274', '2027-10-09 00:00:00', 'TI0382784', '2019-12-13 00:00:00', 'Other', 'No', '', 'India', '2019-03-29 14:00:00'),
(18, 41, 'Azna Ahammed', 'F', '1989-10-06 00:00:00', 30, '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', 'Wife', 'Yes', '', 'India', '2019-03-29 14:06:04'),
(19, 41, 'Ishal Rahman', 'F', '2013-09-12 00:00:00', 6, '0', '0000-00-00 00:00:00', '0', '0000-00-00 00:00:00', 'Daughter', 'No', '', 'India', '2019-03-29 14:07:02'),
(20, 42, 'Ishal Rahman Tharammal', 'F', '2013-09-12 00:00:00', 6, 'P4919196', '2021-11-17 00:00:00', 'TI0346403', '2019-07-05 00:00:00', 'Daughter', 'No', '', 'India', '2019-03-29 14:26:49'),
(21, 48, 'Rtkriti Radya', 'F', '2018-02-05 00:00:00', 1, 'S5830520', '2023-02-27 00:00:00', 'TI0382748', '2019-12-13 00:00:00', 'Daughter', 'No', '', 'India', '2019-03-29 14:47:39'),
(22, 29, 'SUNDARRAJ ANANDAKUMAR', 'M', '1977-08-08 00:00:00', 42, 'T0768619', '2028-02-07 00:00:00', 'TI0347426', '2019-07-13 00:00:00', 'Husband', 'No', '', 'India', '2019-03-29 21:36:36'),
(23, 4, 'Ponnada Kusuma Kumari', 'F', '1980-07-01 00:00:00', 39, 'L4040142', '0000-00-00 00:00:00', 'NIL', '0000-00-00 00:00:00', 'Wife', 'No', '', 'India', '2019-04-01 14:36:29'),
(24, 4, 'Ponnada Sasikanth', 'M', '2004-02-23 00:00:00', 15, 'S5307428', '2022-02-22 00:00:00', 'NIL', '0000-00-00 00:00:00', 'Son', 'No', '', 'India', '2019-04-01 14:37:41'),
(25, 4, 'Ponnada Saikiran', 'M', '2010-07-21 00:00:00', 9, 'S5307416', '2023-10-04 00:00:00', 'NIL', '0000-00-00 00:00:00', 'Son', 'No', '', 'India', '2019-04-01 14:38:45'),
(26, 60, 'Lakshmi Katumala', 'F', '1986-12-19 00:00:00', 33, 'M3589836', '2024-11-17 00:00:00', 'TI0347447', '2019-07-13 00:00:00', 'Wife', 'No', '', 'India', '2019-04-17 20:16:49'),
(27, 61, 'Bapathu Venkataratnam', 'F', '1994-05-15 00:00:00', 25, 'N8448148', '2026-05-11 00:00:00', 'TI0274479', '2018-10-19 00:00:00', 'Wife', 'No', '', 'India', '2019-04-18 08:40:54'),
(28, 19, 'K Madhavi Latha', 'F', '1980-06-16 00:00:00', 39, 'L6503955', '2023-11-28 00:00:00', 'TI0370392', '2019-11-07 00:00:00', 'Wife', 'No', '', 'India', '2019-05-31 14:17:18'),
(29, 19, 'K Nikhil', 'M', '2005-03-03 00:00:00', 14, 'P4471484', '2021-09-07 00:00:00', 'TI0370393', '0000-00-00 00:00:00', 'Son', 'No', '', 'India', '2019-05-31 14:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `expat_edudet`
--

CREATE TABLE `expat_edudet` (
  `userid` int(11) NOT NULL,
  `deg_name` varchar(50) DEFAULT NULL,
  `inst_name` varchar(50) DEFAULT NULL,
  `year_pass` char(5) DEFAULT NULL,
  `degree` char(10) DEFAULT NULL,
  `cert_path` varchar(500) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expat_edudet`
--

INSERT INTO `expat_edudet` (`userid`, `deg_name`, `inst_name`, `year_pass`, `degree`, `cert_path`, `created_date`) VALUES
(5, 'M.E in Environmental Engineering', 'ANNA UNIVERSITY/ ANNA UNIVERSITY DEPARTMENT TIRUNE', '2011', 'Master', 'uploads/degree/5ME CERT.jpg', '2019-01-29 11:19:14'),
(6, 'M.Tech in Information Technology', 'Sathyabama University', '2009', 'Master', 'uploads/degree/6PG_Certificate_compressed.jpg', '2019-01-29 11:24:07'),
(4, 'PhD in Economics', 'ANDHRA UNIVERSITY', '2011', 'PhD', 'uploads/degree/4ph.d (2).jpg', '2019-01-29 11:03:15'),
(3, 'PhD in HRM', 'BERHAMPUR UNIVERSITY', '2011', 'PhD', 'uploads/degree/3IMG-20190401-WA0002.jpg', '2019-01-29 10:49:15'),
(2, 'M.Tech in Computer Science', 'GITAM UNIVERSITY', '2012', 'Master', 'uploads/degree/2Document 5_3.jpg', '2019-01-29 10:34:24'),
(7, 'Masters in Software Systems', 'Bharathiar University', '2010', 'Master', 'uploads/degree/7degree certi.jpg', '2019-01-29 11:27:20'),
(8, 'M. Tech in Hydraulics & Water Resources Engineerin', 'NATIONAL INSTITUTE OF TECHNOLOGY (NIT)', '2014', 'Master', 'uploads/degree/8ME DEGREE.jpg', '2019-01-29 11:30:13'),
(9, 'M.Sc in Electronics', 'Bharathidasan University', '2003', 'Master', 'uploads/degree/9IMG-20170615-WA0002.jpg', '2019-01-29 11:32:57'),
(10, 'M.Tech in Remote  Sensing', 'Anna University, Chennai', '2013', 'Master', 'uploads/degree/10pg.PNG', '2019-01-29 11:35:04'),
(11, 'M.E construction management', 'coimbatore Institute of Technology', '2013', 'Master', 'uploads/degree/11Screenshot_20190402-161741__01.jpg', '2019-01-29 11:37:13'),
(12, 'PhD in Computer Science & Engineering', 'KIIT UNIVERSITY', '2017', 'PhD', 'uploads/degree/12CERTIFICATE_PHD.jpg', '2019-01-29 11:41:13'),
(13, 'PHD', 'GANDHIGRAM RURAL INSTITUTE', '2014', 'PhD', 'uploads/degree/13DEGREE.jpg', '2019-01-29 12:13:42'),
(14, 'ME in IC Engineering', 'ANNA UNIVERSITY', '2013', 'Master', 'uploads/degree/141554181378375[1].jpg', '2019-01-29 12:17:06'),
(15, 'DOCTOR IN MEDICINE', 'UNIVERSITY OF DELHI', '1993', 'Doctor', 'uploads/degree/15DEGREE.jpg', '2019-01-29 12:19:42'),
(16, '', '', '', '', 'uploads/degree/default.jpg', '2019-01-29 12:21:40'),
(17, 'Ph.D in  Commerce and Business Management', 'Kakatiya University, Warangal. Telangana State. In', '2014', 'PhD', 'uploads/degree/17New Doc 2019-03-28 19.17.52.jpg', '2019-01-29 12:23:26'),
(18, 'M.E in STRUCTURAL ENGINEERING', 'ANDHRA UNIVERSITY', '2016', 'Master', 'uploads/degree/18tV2gUKKdLP1UCQWb8R9dNe17.jpg', '2019-01-29 12:25:01'),
(19, 'Ph.D in pharmaceutical sciences', 'JAIPUR NATIONAL UNIVERSITY', '2016', 'PhD', 'uploads/degree/19siva-phd.jpg', '2019-01-29 12:26:39'),
(20, 'M.E in Civil Engineering', 'OSMANIA UNIVERSITY', '2013', 'Master', 'uploads/degree/20RAKESH.jpg', '2019-01-29 12:28:37'),
(21, 'PhD in Education', 'Andhra University', '2009', 'PhD', 'uploads/degree/default.jpg', '2019-01-29 13:58:38'),
(22, 'P.hD', 'sv university', '2008', 'PhD', 'uploads/degree/22phd.jpg', '2019-01-29 14:00:50'),
(23, 'Master of Laws', 'Andhra University', '2003', 'Master', 'uploads/degree/23Document 21_2.jpg', '2019-01-29 14:03:28'),
(24, 'M.Tech in Computer Science and Engineering', 'JNTU', '2010', 'Master', 'uploads/degree/24M.Tech OD.JPG', '2019-01-29 14:05:14'),
(25, 'M.S. in Electronics and Communication Engineering', 'JNTU Hyderabad,India', '2014', 'Master', 'uploads/degree/25shahnaz od.jpg', '2019-01-29 14:06:59'),
(26, 'M.Tech in Electrical & Electronics Engineering', 'JNTU,Anantapur,AP,India', '2007', 'Master', 'uploads/degree/26rafee od.jpg', '2019-01-29 14:08:40'),
(27, 'M.E Structural Engineering', 'Andhra University', '2012', 'Master', 'uploads/degree/274. OD.jpg', '2019-01-29 14:10:24'),
(28, 'M.Tech in Computer Science', 'Acharya Nagarjuna University', '2010', 'Master', 'uploads/degree/28MTech ANAND.jpg', '2019-01-29 14:12:20'),
(29, 'M.Tech in GIS Application', 'Bharathidasan University', '2007', 'Master', 'uploads/degree/29m.tech.jpg', '2019-01-29 14:14:04'),
(30, '', '', '', '', 'uploads/degree/default.jpg', '2019-01-29 14:15:43'),
(31, 'M.TECH in Power Systems control and automation', 'JNTU', '2010', 'Master', 'uploads/degree/31mahesh_MATSERSJJU.jpg', '2019-01-29 14:17:25'),
(32, 'M.E in Geomatics', 'Anna University', '2013', 'Master', 'uploads/degree/32DEVENTHIRAN K M.E.jpg', '2019-01-29 14:19:19'),
(33, 'Management', 'Andhra Univerisity', '2010', 'PhD', 'uploads/degree/33PHD.jpg', '2019-01-29 14:20:49'),
(34, 'M.Tech in systems & signal processing', 'JNTUCEH', '2008', 'Master', 'uploads/degree/34M.TECH.jpg', '2019-01-29 14:22:20'),
(35, 'Master of laws(Llm)', 'KALINGA INSTITUTE OF INDUSTRIAL TECHNOLOGY', '2017', 'Master', 'uploads/degree/35IMG_0455.JPG', '2019-01-29 14:23:51'),
(36, 'M.E in Computer Science and Engineering', 'ANNA UNIVERSITY/ Syed Ammal Engineering College', '2014', 'Master', 'uploads/degree/361553587112731.jpg', '2019-01-29 14:28:06'),
(37, 'M.Tech in Computer Science & Engineering', 'Amity University', '2015', 'Master', 'uploads/degree/37Mtech JPEG.jpg', '2019-01-29 14:29:34'),
(38, 'Ph. D in Applied Statistics (OR & SQC)', 'Sri Krishnadevaraya University', '2007', 'PhD', 'uploads/degree/385. PHD.jpg', '2019-01-29 14:31:19'),
(39, 'M.Tech in Software Engineering', 'J.N.T.U Hyderabad', '2010', 'Master', 'uploads/degree/39M.Tech OD.jpg', '2019-01-29 14:32:56'),
(40, 'PHD', 'ALIGARH MUSLIM UNIVERSITY', '2002', 'PhD', 'uploads/degree/40degree.jpg', '2019-01-29 14:34:23'),
(41, 'M.Tech in Computer Science', 'VNIT', '2010', 'Master', 'uploads/degree/41IMG_20190416_191551_334.jpg', '2019-01-29 14:35:47'),
(42, 'Bachelor in Dental Surgery', 'Kerala University', '2014', 'Doctor', 'uploads/degree/42IMG_20190416_192259_149.jpg', '2019-01-29 14:37:15'),
(43, 'M.Tech in Mechanical Engineering', 'INDIAN INSTITUTE OF TECHNOLOGY GUWAHATI IITG', '2014', 'Master', 'uploads/degree/43M Tech OD.jpg', '2019-01-29 14:38:38'),
(44, 'M.D IN HUMAN ANATOMY', 'TAMILNADU DR.M.G.R. MEDICAL UNIVERSITY', '2011', 'Doctor', 'uploads/degree/440_PG Certificate.jpg', '2019-01-29 14:39:59'),
(45, 'M.E in Mechanical engineering', 'University of Madras', '2000', 'Master', 'uploads/degree/45M.E  Degree.jpg', '2019-01-29 14:41:30'),
(46, 'M-tech in civil Engineering', 'visveswaraya technological university , karnataka,', '2014', 'Master', 'uploads/degree/466 M-tech__degree_certificate-1.jpg', '2019-01-29 14:43:07'),
(47, 'M.Sc in Mathematics', 'University of Madras', '2012', 'Master', 'uploads/degree/47Rajeshwari.jpg', '2019-01-29 14:44:22'),
(48, 'Ph.D in Mechanical Engineering', 'Himalayan University', '2017', 'PhD', 'uploads/degree/48psuresh.jpg', '2019-01-29 14:46:37'),
(49, 'M.Tech in Computer Science', 'JNTUH', '2013', 'Master', 'uploads/degree/49New Doc 2019-03-29 10.37.14_10.jpg', '2019-01-29 14:48:13'),
(50, 'PhD in  Biotechnology', 'SUNRISE', '2015', 'PhD', 'uploads/degree/default.jpg', '2019-01-29 14:49:29'),
(51, 'PhD in Educational Philosophy', 'University of Minnesota', '2016', 'PhD', 'uploads/degree/default.jpg', '2019-03-25 19:26:00'),
(52, 'PhD in Agricultural Economics', 'Texas A&M University', '2004', 'PhD', 'uploads/degree/52Dr.ArekerePhD_AgEcon.jpg', '2019-03-25 19:26:54'),
(53, 'Maters in Engineering', 'indian inst of tech', '2014', 'Master', 'uploads/degree/53C-1.png', '2019-03-25 19:27:52'),
(54, '', '', '', '', 'uploads/degree/default.jpg', '2019-03-25 19:28:36'),
(55, 'PhD Urban & Regional Planning / GIS', 'OSMANIA UNIVERSITY', '2010', 'PhD', 'uploads/degree/55DEGREE.jpg', '2019-03-25 19:29:23'),
(56, 'PhD in Bio Chemistry', 'University of Madras', '2010', 'PhD', 'uploads/degree/56PHD CERTIFICATE.JPG', '2019-03-25 19:30:03'),
(57, 'Ph.D., in Microbiology', 'University of Madras', '2010', 'PhD', 'uploads/degree/57PhD-certificate.jpg', '2019-03-25 19:30:38'),
(58, 'PhD in Biochemistry', 'University of Madras', '2007', 'PhD', 'uploads/degree/58PhD certificate MEA Attested_1.jpg', '2019-03-25 19:31:08'),
(59, 'PHD', 'magadh university', '2010', 'PhD', 'uploads/degree/59DEGREE.jpg', '2019-03-26 17:15:28'),
(60, 'M.Tech in Power Systems and Power Electronics', 'Nagarjuna University', '2007', 'Master', 'uploads/degree/602017-11-11_022257.png', '2019-04-01 19:55:32'),
(61, 'M.TECH IN Software Engineering', 'Jawaharlal Nehru Technological University Hyderaba', '2011', 'Master', 'uploads/degree/61MTECH OD.jpg', '2019-04-04 20:03:38'),
(62, '', '', '', '', 'uploads/degree/default.jpg', '2019-04-08 13:13:24'),
(64, 'Ph.D in Social Work', 'Bharathiyar University', '2013', 'PhD', 'uploads/degree/64degreesenthil.jpg', '2019-06-04 10:14:26'),
(65, 'PhD in Mathematics', 'University of Allahabad', '2013', 'PhD', 'uploads/degree/65gaddam.jpg', '2019-06-28 17:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `expat_emergency`
--

CREATE TABLE `expat_emergency` (
  `userid` int(11) NOT NULL,
  `emer_name1` varchar(50) DEFAULT NULL,
  `emer_ph1` varchar(20) DEFAULT NULL,
  `emer_email1` char(50) DEFAULT NULL,
  `emer_name2` varchar(50) DEFAULT NULL,
  `emer_ph2` varchar(20) DEFAULT NULL,
  `emer_email2` char(50) DEFAULT NULL,
  `blood_grp` char(20) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expat_emergency`
--

INSERT INTO `expat_emergency` (`userid`, `emer_name1`, `emer_ph1`, `emer_email1`, `emer_name2`, `emer_ph2`, `emer_email2`, `blood_grp`, `created_date`) VALUES
(2, 'lucky', '+919492486495', 'lucky.bureddi@gmail.com', 'joji ratnam', '+918125404852', 'pradeep.peter97@gmail.com', 'B+', '2019-01-29 10:34:24'),
(3, 'Abhishek', '08985888279', 'jagan.yadavilli@gmail.com', 'Mrs.Y.V.Padmaja', '08985888279', '', 'O-', '2019-01-29 10:49:15'),
(4, 'kusuma kumari', '+919491853852', 'kusumakumari1980@gmail.com', 'subramanyam', '+919966241010', 'sunrayindia@gmail.com', 'AB+', '2019-01-29 11:03:15'),
(5, 'S.Kumaresan', '+919487742044', 'pushparega994@gmail.com', 'Ganesan', '+919442564921', 'pushparega994@gmail.com', 'O+', '2019-01-29 11:19:14'),
(6, 'Sevvel Arasi Ponsuresh', '+91-9791397119', 'arasimca@gmail.com', 'Mr. Manoharan', '+91-8012727411', '', 'B+', '2019-01-29 11:24:07'),
(7, 'Yozheda', '0930306874', 'grinnewalter3@gmail.com', 'Anbarasu', '0915093836', 'anbarasudhandabani@gmail.com', 'O+', '2019-01-29 11:27:20'),
(8, 'SHYLAJA S', '+919487385490', 'selvarobin318@gmail.com', 'VINU S', '7639632878', 'selvarobin318@gmail.com', 'AB+', '2019-01-29 11:30:13'),
(9, 'Saravanan S', '+919962244098', 'its4saravanan@gmail.com', 'Kanimozhi R', '+918675032149', 'ritish2008@gmail.com', 'O+', '2019-01-29 11:32:57'),
(10, 'PRABHAKAR K S', '0984576519', 'prabha.ks1989@gmail.com', '', '', '', 'A+', '2019-01-29 11:35:04'),
(11, 'Ponnusamy', '+919443577558', 'ponnusamygod@gmail.com', 'prabhakar', '+919486633822', 'prabhakarks@gmail.com', 'B+', '2019-01-29 11:37:13'),
(12, 'SWAGATIKA MAHAPATRA', '+251-0902072724', 'rianyrin13@gmail.com', 'AMITANSHU NAYAK', '+251-0904243703', 'nayakamitanshu93@gmail.com', 'O+', '2019-01-29 11:41:13'),
(13, 'JAYATI', '+919862031943', 'JB42@YAHOO.COM', 'SUBIR BHATTACHARJI', '+913473268042', '', 'O+', '2019-01-29 12:13:42'),
(14, 'RAJESWARI', '+919092722860', '', 'THANGAVELLAMMAL', '+919943050400', '', 'O+', '2019-01-29 12:17:06'),
(15, 'Dr. AMIT LATHWAL', '+91 9350481550', 'amit.lathwal@yahoo.co.in', 'Dr. SHEFALI LATHWAL', 'Dr. SHEFALI LATHWAL', '+91 8396050430', 'B+', '2019-01-29 12:19:42'),
(16, 'Nisha Mary Joseph', '0921252792', 'nisha_pharma@yahoo.com', '', '', '', 'O+', '2019-01-29 12:21:40'),
(17, 'Swathi. Ch', '+919989933980', 'chilukaswathi90@gmail.com', 'T. Peter', '+919182131982', '', 'B+', '2019-01-29 12:23:26'),
(18, 'villuri jagath adinarayana swamy', '+919246671117', 'jagathv369@gmail.com', 'kandregula yaswanth', '+919491321111', 'Yashwanthsrinivas@ymail.com', 'O+', '2019-01-29 12:25:01'),
(19, 'H. Venkataraman', '+91 9640477457', 'sivasankar_prasad@rediffmail.com', '', '', '', 'B+', '2019-01-29 12:26:39'),
(20, 'RAMESH BANTU', '9490363912', '', '', '', '', 'O+', '2019-01-29 12:28:37'),
(21, 'Peddi Raju', '+919441493749', 'drbabu1975@gmail.com', '', '', '', 'B+', '2019-01-29 13:58:38'),
(22, 'R. obula reddy', '0091-9440425653', 'NO', 'Prof. Bhanu', '0091-9441663633', '---', 'A+', '2019-01-29 14:00:50'),
(23, 'Rama', '+919396363575', 'tonta.ramanamurthy@gmail.com', '', '', '', 'O+', '2019-01-29 14:03:28'),
(24, 'G Prabhakar Raju', '+91 9396825203', 'sgpraju@gmail.com', 'G Uma Rani', '+91 9396357906', 'umarajug@gmail.com', 'O+', '2019-01-29 14:05:14'),
(25, 'S. Mastan Vali', '+919989764654', '', 'S. Mohammed Shahid', '+918951296870', 'mdshahid06@gmail.com', 'O+', '2019-01-29 14:06:59'),
(26, 'S.Mastan vali', '+919989764654', '', 'S.Mohammad Shahid', '+918951296970', 'mdshahid06@gmail.com', 'B+', '2019-01-29 14:08:40'),
(27, 'Poshita Lakshmi', '+919849568984', 'lakshmi.ssy@gmail.com', '', '', '', 'O+', '2019-01-29 14:10:24'),
(28, 'P. S. Prakasha Rao', '+91 9849616335', 'pranand12@gmail.com', 'P.  Vijayasree', '+91 9949631991', 'http://facebook.com/kanchibotlasravan', 'O+', '2019-01-29 14:12:20'),
(29, 'S.NAGARATHINAM', '0984576536', 'rs.rathna@gmail.com', '', '+91 8973684475', '', 'O+', '2019-01-29 14:14:04'),
(30, '', '', '', '', '', '', '', '2019-01-29 14:15:43'),
(31, 'LOKESH', '+919908036627', 'mahesh9setti@yahoo.com', '', '', '', 'O+', '2019-01-29 14:17:25'),
(32, 'RAJESHWARI DEVENTHIRAN', '+919500051412', 'rajeshwarikarunakaran@gmail.com', 'TAMILARASAN KRISHNAN', '+919952955894', 'tamilarasan3005@gmail.com', 'B+', '2019-01-29 14:19:19'),
(33, 'T.Sheba Ratna Manjari', '+919603563023', 'sheba.ravindra@gmail.com', 'K. Pronnoy Prakash', '+91 81425 85005', '', 'B+', '2019-01-29 14:20:49'),
(34, 'M.Nandakumari', '+919493124503', 'nandakumari.ar@gmail.com', 'K.Rajaiah', '+919502807928', 'xxx', 'O+', '2019-01-29 14:22:20'),
(35, 'Mr. Banchhanidhi Dash', '0904253188', 'banchhanist@gmail.com', '', '', '', 'O+', '2019-01-29 14:23:51'),
(36, 'Mr. Ganesan', '+919442564921', 'udhayakorp@gmail.com', 'Arun Vinoth', '+919750627126', 'udhayakorp@gmail.com', 'B+', '2019-01-29 14:28:06'),
(37, 'PRAVEEN KUMAR SHUKLA', '+251911228514', 'PRAVEEN.PANAFRICA@GMAIL.COM', 'SHRI R. D. SHUKLA', '+919654536292', 'naveenkumarshukla@gmail.com', 'O+', '2019-01-29 14:29:34'),
(38, 'Ms. G. Dhatri', '+91 8790407158', 'nusagar@gmail.com', 'Dr. G. V. R. Sagar', '+91 9492943273', 'nusagar@gmail.com', 'B+', '2019-01-29 14:31:19'),
(39, 'S.Rajulu', '+919493270674', 'srinivaskumar2u@gmail.com', 'S.Padmaja', '+919154686943', 'srinivaskumar2u@gmail.com', 'B+', '2019-01-29 14:32:56'),
(40, 'Md.Shamim Akhter', '+919733168742', 'perways1@rediffmail.com', 'Mobin Ashraf', '+919450253702', '', 'B+', '2019-01-29 14:34:23'),
(41, 'Basheer Tharammal', '+919847597167', 'ahammed.pazna@gmail.com', 'Ahammed Kutty', '+919037534762', 'ahammed.pazna@gmail.com', 'O+', '2019-01-29 14:35:47'),
(42, 'Ahammed Kutty', '+919037534762', 'mujeebrahman1984@gmail.com', 'Basheer', '+919847597167', 'mujeebrahman1984@gmail.com', 'A+', '2019-01-29 14:37:15'),
(43, 'Satya', '0987148266', 'satyajigjiga2016@gmail.com', 'Satya', '9040376797', 'satyaiitg2012@gmail.com', 'B+', '2019-01-29 14:38:38'),
(44, 'HEMALATHA', '91-9942382444', 'mgovindarajan29031973@gmail.com', 'surya', '9942382333', 'govind29031973@gmail.com', 'AB-', '2019-01-29 14:39:59'),
(45, 'Govinda Rajan Manivasagam', '00251984576520', 'dr.mgovindarajan@yahoo.co.in', 'Seepuram srinivas kumar', '00251946429813', 'srinivaskumar4u@gmail.com', 'O+', '2019-01-29 14:41:30'),
(46, 'Deventhiram', '+251904241414', '', 'Mohammed bilal khan', '+918105881747', '', 'B+', '2019-01-29 14:43:07'),
(47, 'DEVENTHIRAN KRISHNAN', '+919840970972', 'virudev.deva68@gmail.com', 'TAMILARASAN KRISHNAN', '+919952955894', 'tamilarasan3005@gmail.com', 'B+', '2019-01-29 14:44:22'),
(48, 'Narayana P.', '+919866692663', 'suripasupuleti032016@gmail.com', 'Krishnaveni P.', '+919963967555', 'suripasupuleti032016@gmail.com', 'AB+', '2019-01-29 14:46:37'),
(49, 'Narayana P.', '+919866692663', 'suripasupuleti032016@gmail.com', 'Krishnaveni P.', '+919963967555', 'suripasupuleti032016@gmail.com', 'B+', '2019-01-29 14:48:13'),
(50, 'MUTYAM GOPIKRISHNA', '+919493781513', '', '', '', '', 'A+', '2019-01-29 14:49:29'),
(51, 'Kadir', '+251946055872', '', '', '', '', 'B+', '2019-03-25 19:26:00'),
(52, 'Asha Rao', '001-979-575-9450', 'asha@bio.tamu.edu', 'Abhimanyu Arekere', '001-979-599-6682', 'abhi.arekere@gmail.com', 'A+', '2019-03-25 19:26:54'),
(53, 'Mr. Murugesh', '9648272371', '', 'Mr Murugesh', '+919648272371', '', 'A+', '2019-03-25 19:27:52'),
(54, '', '', '', '', '', '', '', '2019-03-25 19:28:36'),
(55, 'KURMA PADMAJA', '+918897601954', 'KURMAPADMA1@GMAIL.COM', '', '', '', 'O+', '2019-03-25 19:29:23'),
(56, 'farhana jabeen', '+919600146586', 'farhanajabeen78@gmail.com', 'TAHIR HUSSAIN', '+919042196586', 'farhanajabeen78@gmail.com', 'O+', '2019-03-25 19:30:03'),
(57, 'Sathya V', '+919443600999', 'vsathyabeece@gmail.com', 'Selvaraju P', '+919443375806', 'deepanselvalatha99@gmail.com', 'B+', '2019-03-25 19:30:38'),
(58, 'Mrs.S.Narmatha', '+918940620819', 'narmatha.senthilkumar@gmail.com', 'Mr.R.Asokan', '+919842450976', '75mekala@gmail.com', 'A+', '2019-03-25 19:31:08'),
(59, 'chandra karan reddy', '+918106868623', 'chandrakaranreddy.patlolla1@gmail.com', 'Athma Charan Reddy', '+919866249968', '', 'B+', '2019-03-26 17:15:28'),
(60, 'K.devadas', '+919985287287', 'kvkrishnarao.lskh1234@gmail.com', 'K.varalskshmi', '+919985287287', 'kvkrishnarao.lskh1234@gmail.com', 'B+', '2019-04-01 19:55:32'),
(61, 'Mule Pappi Reddy', '9704345060', '', 'Bapathu venkataRatnam', '9160486828', 'ratnam.bapathu@gmail.com', 'AB+', '2019-04-04 20:03:38'),
(62, '', '', '', '', '', '', '', '2019-04-08 13:13:24'),
(64, 'V. Deva Sena', '09443063746', '', '', '', '', 'A+', '2019-06-04 10:14:26'),
(65, 'neerja reddy', '9440508025', '', '', '', '', 'O+', '2019-06-28 17:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `expat_emptax`
--

CREATE TABLE `expat_emptax` (
  `userid` int(11) NOT NULL,
  `rep_dept1` varchar(50) DEFAULT NULL,
  `rep_head1` varchar(50) DEFAULT NULL,
  `rep_ph1` char(20) DEFAULT NULL,
  `rep_dept2` varchar(50) DEFAULT NULL,
  `rep_head2` varchar(50) DEFAULT NULL,
  `rep_ph2` char(20) DEFAULT NULL,
  `bank_acno` varchar(20) DEFAULT NULL,
  `bank_name` varchar(50) DEFAULT NULL,
  `taxable` char(10) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expat_emptax`
--

INSERT INTO `expat_emptax` (`userid`, `rep_dept1`, `rep_head1`, `rep_ph1`, `rep_dept2`, `rep_head2`, `rep_ph2`, `bank_acno`, `bank_name`, `taxable`, `created_date`) VALUES
(3, 'Management', 'Mr.Abdiselam', '+251910701560', 'Management', '', '', '1000179668886', 'CBE', 'Yes', '2019-01-29 10:49:15'),
(4, 'Economics', 'mohumed', '+251912062816', 'Economics', 'Dr Abinet', '+251911783192', '1000180878401', 'commercial bank of ethiopia', 'Yes', '2019-01-29 11:03:15'),
(5, 'Water Resource and Irrigation Engineering', 'Ismail Mahamud', '+251915228265', 'Water Resource and Irrigation Engineering', '', '', '1000066365267', 'CBE', 'Yes', '2019-01-29 11:19:14'),
(2, 'Software Engineering', 'Abdi', '0915067350', 'ICT', 'Jamaal Aydrus', '0915051427', '1000222482268', 'CBE', 'No', '2019-01-29 10:34:24'),
(6, 'Information Technology', 'Mr.Zinabu Abadi', '+251-917563168', 'Information Technology', '', '', '1000031673538', 'Commercial Bank of Ethiopia', 'No', '2019-01-29 11:24:07'),
(7, 'Software Engineering', 'Abdul Aziz', '0915067350', 'Computer Science', 'Abdul Aziz', '0915067350', '1000138791107', 'Commercial Bank of Ethiopa', 'Yes', '2019-01-29 11:27:20'),
(8, 'Hydraulic and Water Resource Engineering', 'NAVIYUM MOHAMMED', '0920174071', 'Hydraulic and Water Resource Engineering', 'KINDE ZEWDIE', '', '100010261521', 'JJU BRANCH', 'Yes', '2019-01-29 11:30:13'),
(9, 'Electrical and Computer Engineering', 'Samuel Hagos', '+251915095456', 'Electrical and Computer Engineering', 'Habteab G/Selese', '+251912874184', '1000071872247', 'Commercial Bank of Ethiopia', 'Yes', '2019-01-29 11:32:57'),
(10, 'Surveying Engineering', 'Endalkachew', '+251912288966', 'Surveying Engineering', 'Endalkachew', '+251912288966', '100181010529', 'CBE', 'Yes', '2019-01-29 11:35:04'),
(11, 'Construction Technology and Management', 'HENOCK NIGATTU', '+251916828584', 'Construction Technology and Management', 'OMER', '+251912444645', '100014349321', 'COMMERCIAL BANK OF ETHIOPIA', 'Yes', '2019-01-29 11:37:13'),
(12, 'Computer Science', 'JAMEL', '090915051427', 'Computer Science', '', '', '1000224011273', 'CBE', 'No', '2019-01-29 11:41:13'),
(13, 'Rural Development and Agricultural  Extension', 'MUKHTAR', '0915058575', '', '', '', '1000181145459', 'COMMERCIAL BANK OF ETHIOPIA', 'Yes', '2019-01-29 12:13:42'),
(14, 'Mechanical  Engineering', 'ABDIRAHMAN', '+251920124026', 'Mechanical  Engineering', 'BINIAM', '+251920061068', '1000100225248', 'COMMERCIAL BANK OF ETHIOPIA', 'Yes', '2019-01-29 12:17:06'),
(15, 'Public Health', 'Mr. Abdilahi MPH Coordinator', '+251 912874310', 'Public Health', 'Mr. Mukhtar Vice- Dean', '+251 961266810', '1000143492471', 'COMMERCIAL BANK OF ETHIOPIA', 'Yes', '2019-01-29 12:19:42'),
(16, 'Nursing', 'Faud', '0913876893', 'Nursing', 'Faud', '', '1000091157188', 'CBE', 'Yes', '2019-01-29 12:21:40'),
(17, 'Masters Of Business Administration', 'Abdisalem', '0910701560', 'Management', '', '', '1000143493095', 'Commercial Bank of Ethiopia', 'Yes', '2019-01-29 12:23:26'),
(18, 'Civil Engineering', 'mustafe harun', '0937472219', 'Civil Engineering', '', '', '1000222488293', 'commercial bank of ethiopia', 'No', '2019-01-29 12:25:01'),
(19, 'Masters of Public Health', 'Ramadan', '0915468383', '', '', '', '1000181022338', 'CBE', 'Yes', '2019-01-29 12:26:39'),
(20, 'Construction Technology and Management', 'HANOCK', '0916828584', 'Construction Technology and Management', '', '', '10000011214', 'commercial bank of ethiopia', 'Yes', '2019-01-29 12:28:37'),
(21, 'Educational Planning and Management', 'Jama Abdi', '0920439667', '', '', '', '1000181015113', 'CBE', 'Yes', '2019-01-29 13:58:38'),
(22, 'Geography and Environmental Studies', 'SEYUM DEMISSE', '0912004401', 'Geography and Environmental Studies', 'SEYUM DEMISSE', '', '1000034886087', 'DASHEN BANK', 'No', '2019-01-29 14:00:50'),
(23, 'Law', 'Salahaddin', '0920039012', '', '', '', '1000222478859', 'CBE', 'No', '2019-01-29 14:03:28'),
(24, 'Software Engineering', 'Mr. Abdi Aziz', '+251 929063435', 'Software Engineering', '+251 929063435', '', '1000101323823', 'CBE', 'Yes', '2019-01-29 14:05:14'),
(25, 'Electrical and Computer Engineering', 'Mr Samuel Hagos', '+251915095456', 'Electrical and Computer Engineering', 'Mr Habtie', '+251912874184', '1000096245355', 'Commercial Bank of Ethiopia', 'Yes', '2019-01-29 14:06:59'),
(26, 'Electrical and Computer Engineering', 'Mr Samuel Hagos', '+251915095456', 'Electrical and Computer Engineering', 'Mr. Habtie', '+251912874184', '1000032165757', 'Commercial Bank of Ethiopia', 'Yes', '2019-01-29 14:08:40'),
(27, 'Civil Engineering', 'Mustafe Harun', '+251937472219', 'Civil Engineering', 'Kaleb Getachew', '+251915748589', '0', 'CBE', 'Yes', '2019-01-29 14:10:24'),
(28, 'Computer Science', 'Jamal', '0915051427', '', '', '', '1000031673047', 'Commercial Bank of Ethiopia', 'Yes', '2019-01-29 14:12:20'),
(29, 'Geography and Environmental Studies', 'Seyome', '+251 912004401', '', '', '', '1000181028673', 'Commercial Bank of Ethiopia', 'Yes', '2019-01-29 14:14:04'),
(30, '', '', '', '', '', '', '', '', '', '2019-01-29 14:15:43'),
(31, 'Electrical and Computer Engineering', 'samuel hagos', '0915095456', 'Electrical and Computer Engineering', '', '', '1000100229513', 'commercial bank of ethiopia', 'Yes', '2019-01-29 14:17:25'),
(32, 'Surveying Engineering', 'ENDALKACHEW.Y', '+251912288966', 'Surveying Engineering', 'ENDALKACHEW.Y', '+251912288966', '1000222481857', 'CBE', 'No', '2019-01-29 14:19:19'),
(33, 'Accounting and Finance', 'Fizru', '+251 91 337 2022', 'Accounting and Finance', 'Fizru', '+251 91 337 2022', '1000222476813', 'Commercial Bank of Ethiopia', 'No', '2019-01-29 14:20:49'),
(34, 'Electrical and Computer Engineering', 'samuel', '0915095456', 'Electrical and Computer Engineering', 'haftam', '0912874148', '1000031673368', 'CBE', 'Yes', '2019-01-29 14:22:20'),
(35, 'Law', 'Mr. Salahdin Toufick', '0920039012', 'Law', 'Mrs. Neima Abrar', '0947731142', '1000222487939', 'Commercial bank of Ethiopia', 'No', '2019-01-29 14:23:51'),
(36, 'Software Engineering', 'Abdiaziz', '+251915067350', 'Software Engineering', '', '', '1000204166122', 'CBE', 'No', '2019-01-29 14:28:06'),
(37, 'Computer Science', 'JAMAAL AYDRUS OMER', '+251915051427', 'ICT', 'AKRAM MAHAMUD', '+251913520003', '1000220212495', 'COMMERCIAL BANK OF ETHIOPIA', 'No', '2019-01-29 14:29:34'),
(38, 'Statistics', 'Abul  Fata', '0910045927', 'Statistics', 'Abdur rahaman', '0913117925', '1000213674319', 'CBE', 'No', '2019-01-29 14:31:19'),
(39, 'Computer Science', 'Jamal', '0915051427', 'Computer Science', 'Jamal', '0915051427', '1000100228878', 'Commercial Bank of Ethiopia', 'Yes', '2019-01-29 14:32:56'),
(40, 'Accounting and Finance', 'Mr.Fajru', '+251913372022', 'Accounting and Finance', '', '', '1000143492668', 'COMMERCIAL BANK OF ETHIOPIA', 'Yes', '2019-01-29 14:34:23'),
(41, 'Computer Science', 'Ahamed Abdi', '+251915220034', 'Computer Science', '', '', '0', 'CBE', 'Yes', '2019-01-29 14:35:47'),
(42, 'Medical Laboratory Science', 'Dr.Ahammed', '0912644750', 'Medical Laboratory Science', '', '', '0', 'CBE', 'No', '2019-01-29 14:37:15'),
(43, 'Mechanical  Engineering', 'Rehman', '0920124026', 'Mechanical  Engineering', 'Rehman', '0920124026', '1000181011428', 'CBE', 'Yes', '2019-01-29 14:38:38'),
(44, 'Midwifery', 'WORKENEH', '0913230265', 'Midwifery', 'WORKENEH', '0913230265', '1000181011018', 'COMMERCIAL BANK OF ETHIOPIA', 'Yes', '2019-01-29 14:39:59'),
(45, 'Mechanical  Engineering', 'Mr. ABDIR RAHMAN', '00251920124026', 'Mechanical  Engineering', '', '', '1000100224678', 'COMMERCIAL BANK OF ETHIOPIA', 'Yes', '2019-01-29 14:41:30'),
(46, 'Civil Engineering', 'Mustafa mohammed', '+251915649605', 'Civil Engineering', 'Naseeb musa Mohammed', '+251910190373', '1000222479111', 'commercial bankof ethiopia jigjiga branch', 'No', '2019-01-29 14:43:07'),
(47, 'Mathematics', 'TEDROS', '+251911979143', 'Mathematics', 'TEDROS', '+251911979143', '1000270413448', 'CBE', 'No', '2019-01-29 14:44:22'),
(48, 'Mechanical  Engineering', 'Mohammed Mussa', '0915625489', 'Mechanical  Engineering', 'Abdi Reham Kemal', '0920124026', '10000222082254', 'CBE', 'No', '2019-01-29 14:46:37'),
(49, 'Software Engineering', 'Mohamed Hassen', '0915214103', 'Software Engineering', 'Mohamed Abdi', '0915067350', '10000222086969', 'CBE', 'No', '2019-01-29 14:48:13'),
(50, 'Animal and Range Science', 'Abdi Abdilahi', '0937543562', '', '', '', '1000222485804', 'commercial Bank of Ethiopia', 'No', '2019-01-29 14:49:29'),
(51, 'Early Childhood Care and Education', 'Dr.Yigzaw', '0912060095', '', '', '', '1000234556472', 'CBE', 'No', '2019-03-25 19:26:00'),
(52, 'Economics', 'Mohammed Badel', '0915077402', 'Rural Development and Agricultural  Extension', 'No Idea', '', 'Will not furnish thi', 'Will not furnish this', 'Yes', '2019-03-25 19:26:54'),
(53, 'Water Resource and Irrigation Engineering', 'Mr. Ismael', '915228265', 'Water Resource and Irrigation Engineering', 'Mr Mulugeta Shume', '918290754', '1000142731316', 'CBE', 'No', '2019-03-25 19:27:52'),
(54, '', '', '', '', '', '', '', '', '', '2019-03-25 19:28:36'),
(55, 'Geography and Environmental Studies', 'SUYOM', '0912004401', 'Geography and Environmental Studies', '', '', '1000277680894', 'COMMERCIAL BANK OF ETHIOPIA', 'No', '2019-03-25 19:29:23'),
(56, 'Public Health', 'Dr Anwer', '0911998417', 'Public Health', 'Workinae', '0913230265', '1000275484788', 'CBE JIGJIGA', 'No', '2019-03-25 19:30:03'),
(57, 'Food Science  and Nutrition', 'Mr. Natnael Tadesse', '+251913426049', 'Food Science  and Nutrition', '+251915238030', '+251915000033', '1000278321669', 'CBE, Jijiga', 'No', '2019-03-25 19:30:38'),
(58, 'Public Health', 'Dr.Eyob', '+251912048529', 'Public Health', 'Dr.Workeney', '+251913230265', '1000280767704', 'Commercial Bank of Ethiopia', 'No', '2019-03-25 19:31:08'),
(59, 'Accounting and Finance', 'FIZRU', '+251913372022', 'Accounting and Finance', '', '', '1000278716965', 'COMMERCIAL BANK OF ETHIOPIA', 'No', '2019-03-26 17:15:28'),
(60, 'Electrical and Computer Engineering', 'Samuel Hagos', '0915095456', 'Electrical and Computer Engineering', 'Samuel Hagos', '0915095456', '1000100229335', 'Commercial Bank of Ethiopia', 'Yes', '2019-04-01 19:55:32'),
(61, 'Software Engineering', 'abdiaziz abdiwahab', '0915067350', 'Software Engineering', 'hussein abdilahi', '0912405088', '1000181009822', 'Commerical Bank of ethiopia', 'Yes', '2019-04-04 20:03:38'),
(62, '', '', '', '', '', '', '', '', '', '2019-04-08 13:13:24'),
(64, 'Social Work', 'Mr.Wollelo', '0910163609', '', '', '', '1000285064008', 'CBE', 'No', '2019-06-04 10:14:26'),
(65, 'Mathematics', 'Tedrus', '0911979143', '', '', '', 'nil', 'CBE', 'No', '2019-06-28 17:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `expat_immig`
--

CREATE TABLE `expat_immig` (
  `userid` int(11) NOT NULL,
  `passportno` varchar(20) DEFAULT NULL,
  `passidate` datetime DEFAULT NULL,
  `passedate` datetime DEFAULT NULL,
  `rpno` varchar(20) DEFAULT NULL,
  `rpidate` datetime DEFAULT NULL,
  `rpedate` datetime DEFAULT NULL,
  `wpno` varchar(20) DEFAULT NULL,
  `wpidate` datetime DEFAULT NULL,
  `wpedate` datetime DEFAULT NULL,
  `filepath` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expat_immig`
--

INSERT INTO `expat_immig` (`userid`, `passportno`, `passidate`, `passedate`, `rpno`, `rpidate`, `rpedate`, `wpno`, `wpidate`, `wpedate`, `filepath`, `created_date`) VALUES
(3, 'K5111681', '2012-06-18 00:00:00', '2022-06-17 00:00:00', 'TI0348215', '2018-07-20 00:00:00', '2019-07-17 00:00:00', 'JAGAN', '2018-07-19 00:00:00', '2019-07-17 00:00:00', 'uploads/degree/3jagan.pdf', '2019-01-29 10:49:15'),
(2, 'S3804316', '2018-07-23 00:00:00', '2028-07-22 00:00:00', 'TI0385082', '2018-11-26 00:00:00', '2019-11-07 00:00:00', 'EMR101268', '2018-11-22 00:00:00', '2019-11-07 00:00:00', 'uploads/degree/2jpg2pdf.pdf', '2019-01-29 10:34:24'),
(4, 'K8338589', '2012-09-24 00:00:00', '2022-09-23 00:00:00', 'TI0348212', '2018-07-20 00:00:00', '2019-07-17 00:00:00', 'EM97278', '2018-12-07 00:00:00', '2019-12-07 00:00:00', 'uploads/degree/4brao.pdf', '2019-01-29 11:03:15'),
(5, 'R8142825', '2017-07-06 00:00:00', '2027-07-05 00:00:00', 'TI0364025', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'EMR102567', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/5jju uk rp.pdf', '2019-01-29 11:19:14'),
(6, 'K6274205', '2012-08-06 00:00:00', '2022-08-05 00:00:00', 'TI0364029', '2019-01-22 00:00:00', '2019-01-10 00:00:00', 'EMR102578', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/6ImmigrationDetails.pdf', '2019-01-29 11:24:07'),
(7, 'L9964184', '2014-06-30 00:00:00', '2024-06-29 00:00:00', 'TI440136', '2019-01-24 00:00:00', '2020-01-09 00:00:00', 'EWR102568', '2019-01-17 00:00:00', '2020-01-09 00:00:00', 'uploads/degree/7New Doc 2019-03-27 18.18.51.pdf', '2019-01-29 11:27:20'),
(8, 'M3795571', '2014-11-24 00:00:00', '2024-11-23 00:00:00', 'TI0363968', '2019-01-23 00:00:00', '0020-01-10 00:00:00', 'EMR102551', '2019-01-10 00:00:00', '2019-01-17 00:00:00', 'uploads/degree/8RP.pdf', '2019-01-29 11:30:13'),
(9, 'S2839979', '2018-07-26 00:00:00', '2028-07-25 00:00:00', 'TI0363798', '2019-01-22 00:00:00', '2020-01-10 00:00:00', '102550', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/9passport res wp.pdf', '2019-01-29 11:32:57'),
(10, 'J6946900', '2011-08-08 00:00:00', '2021-08-07 00:00:00', 'TI0364030', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'EMN102579', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/default.jpg', '2019-01-29 11:35:04'),
(11, 'M5172649', '2015-01-02 00:00:00', '2025-01-01 00:00:00', 'TI0364026', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'EMR102570', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/11PASSPORT SAME PAGE.pdf', '2019-01-29 11:37:13'),
(12, 'Z4280111', '2017-09-06 00:00:00', '2027-09-05 00:00:00', 'TI0363799', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'EMM102SSS', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/12passport_rp_wp.pdf', '2019-01-29 11:41:13'),
(13, 'M8747022', '2015-04-23 00:00:00', '2025-04-22 00:00:00', 'TI0363776', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'EMR102537', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/13Binder1.pdf', '2019-01-29 12:13:42'),
(14, 'M2643027', '2014-10-01 00:00:00', '2014-09-30 00:00:00', 'TI0363796', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'EMR102566', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/14PASS.pdf', '2019-01-29 12:17:06'),
(15, 'N0009933', '2015-07-02 00:00:00', '2025-07-01 00:00:00', 'TI0363786', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'EMR102536', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/15Binder2.pdf', '2019-01-29 12:19:42'),
(16, 'M3643193', '2014-11-19 00:00:00', '2024-11-18 00:00:00', 'TI0363782', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'FMM102552', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/16RP palani sir.pdf', '2019-01-29 12:21:40'),
(17, 'M9761955', '2015-06-11 00:00:00', '2025-06-10 00:00:00', 'TI0385015', '2018-11-26 00:00:00', '2019-11-07 00:00:00', 'EMR101197', '2018-11-21 00:00:00', '2019-11-07 00:00:00', 'uploads/degree/17Immigration files.pdf', '2019-01-29 12:23:26'),
(18, 'R2031177', '2017-05-26 00:00:00', '2027-05-25 00:00:00', 'TI0385014', '2018-11-26 00:00:00', '2019-11-07 00:00:00', '101199', '2018-11-21 00:00:00', '2019-11-07 00:00:00', 'uploads/degree/181111111.pdf', '2019-01-29 12:25:01'),
(19, 'J7156285', '2011-07-27 00:00:00', '2021-07-26 00:00:00', 'TI0365011', '0018-11-26 00:00:00', '2019-11-07 00:00:00', 'EMR101224', '2018-11-21 00:00:00', '2019-11-07 00:00:00', 'uploads/degree/19Document 27.pdf', '2019-01-29 12:26:39'),
(20, 'L5383622', '2014-01-16 00:00:00', '2024-01-15 00:00:00', 'TI0381802', '2018-12-20 00:00:00', '2019-12-17 00:00:00', 'EMR102087', '2018-12-19 00:00:00', '2017-12-17 00:00:00', 'uploads/degree/20DOCUMENTSRAKESH.pdf', '2019-01-29 12:28:37'),
(21, 'S2640308', '2018-07-11 00:00:00', '2028-07-10 00:00:00', 'TI0342041', '2018-11-25 00:00:00', '2019-11-20 00:00:00', 'EMR101200', '2018-11-21 00:00:00', '2019-11-07 00:00:00', 'uploads/degree/default.jpg', '2019-01-29 13:58:38'),
(22, 'S4703654', '2018-02-02 00:00:00', '2028-02-01 00:00:00', 'T10344329', '2018-06-22 00:00:00', '2019-06-21 00:00:00', '--------------------', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'uploads/degree/22RP PDF.pdf', '2019-01-29 14:00:50'),
(23, 'R3004092', '2017-08-28 00:00:00', '2027-08-27 00:00:00', 'TI0385005', '2018-11-26 00:00:00', '2019-11-07 00:00:00', 'EMR101217', '2018-11-21 00:00:00', '2019-11-07 00:00:00', 'uploads/degree/23partha-immig.pdf', '2019-01-29 14:03:28'),
(24, 'Z2935885', '2014-08-16 00:00:00', '2024-08-15 00:00:00', 'TI0363788', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'EMR102580', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/24Passport_RP_Work  Permit.pdf', '2019-01-29 14:05:14'),
(25, 'M 1070122', '2014-08-16 00:00:00', '2024-08-15 00:00:00', 'T10363790', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'EMR 102562', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/25shahnaz rp.pdf', '2019-01-29 14:06:59'),
(26, 'S 3401466', '2018-08-07 00:00:00', '2028-08-06 00:00:00', 'T10363971', '2019-01-23 00:00:00', '2020-01-10 00:00:00', 'EMR102563', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/26rafee workpermit.pdf', '2019-01-29 14:08:40'),
(27, 'XXX', '2013-03-12 00:00:00', '2023-03-11 00:00:00', 'TI0363797', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'EMR102569', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/27PASSRPWP.pdf', '2019-01-29 14:10:24'),
(28, 'P3564275', '2016-10-08 00:00:00', '2026-08-09 00:00:00', 'TI0363787', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'EMR102577', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/28RP-PP-WP.pdf', '2019-01-29 14:12:20'),
(29, 'H8933124', '2011-04-20 00:00:00', '2021-04-19 00:00:00', 'TI0364028', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'EMR102564', '2019-01-17 00:00:00', '2019-01-10 00:00:00', 'uploads/degree/29contract&resume.pdf', '2019-01-29 14:14:04'),
(30, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'uploads/degree/default.jpg', '2019-01-29 14:15:43'),
(31, 'R2783465', '2017-07-10 00:00:00', '2027-07-09 00:00:00', 'TI0363795', '2019-01-22 00:00:00', '2018-01-10 00:00:00', 'EMR102547', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/31DOCUMENTS.pdf', '2019-01-29 14:17:25'),
(32, 'N4923661', '2015-12-10 00:00:00', '2025-12-09 00:00:00', 'TI0363785', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'EMR102572', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/32Deventhiran.pdf', '2019-01-29 14:19:19'),
(33, 'K 9442662', '2013-02-14 00:00:00', '2023-02-13 00:00:00', 'T10385013', '2018-11-26 00:00:00', '2019-11-07 00:00:00', 'EMR 101215', '2018-11-21 00:00:00', '2019-11-07 00:00:00', 'uploads/degree/33Dr. Katta PWR.pdf', '2019-01-29 14:20:49'),
(34, 'R2068915', '2017-09-07 00:00:00', '2027-09-06 00:00:00', 'TI0363800', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'EMR 102576', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/34pp.pdf', '2019-01-29 14:22:20'),
(35, 'Z3766015', '2017-08-22 00:00:00', '2027-08-21 00:00:00', 'TI0363791', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'EMR102540', '2019-02-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/35document-converted.pdf', '2019-01-29 14:23:51'),
(36, 'L9135149', '2014-02-01 00:00:00', '2024-04-30 00:00:00', 'TI0364031', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'EMR102561', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/36jju rek rp.pdf', '2019-01-29 14:28:06'),
(37, 'H7592090', '2009-10-07 00:00:00', '2019-10-06 00:00:00', 'TI0363793', '2019-01-22 00:00:00', '2019-10-06 00:00:00', 'EMR102535', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/37Binder( passport, rp, wp).pdf', '2019-01-29 14:29:34'),
(38, 'R5419275', '2017-04-18 00:00:00', '2027-04-17 00:00:00', 'TI0385004', '2018-11-26 00:00:00', '2019-11-07 00:00:00', 'EMR10', '2018-11-21 00:00:00', '2019-11-07 00:00:00', 'uploads/degree/38Dr. G Y Sagar.jpg.pdf', '2019-01-29 14:31:19'),
(39, 'N0751649', '2015-07-07 00:00:00', '2025-06-07 00:00:00', 'T10364024', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'EMR102565', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/39RP,WP.pdf', '2019-01-29 14:32:56'),
(40, 'L1815043', '2013-06-18 00:00:00', '2023-06-17 00:00:00', ':TI0364027', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'EMR102539', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/40Binder3.pdf', '2019-01-29 14:34:23'),
(41, 'K', '2019-04-01 00:00:00', '2019-04-15 00:00:00', 'TI0363775', '2019-01-22 00:00:00', '2020-01-10 00:00:00', '102543', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/41Immigr.pdf', '2019-01-29 14:35:47'),
(42, 'P4025883', '2016-10-14 00:00:00', '2026-10-13 00:00:00', 'TI0366975', '2019-02-08 00:00:00', '2019-12-04 00:00:00', '102953', '2019-02-04 00:00:00', '2019-12-04 00:00:00', 'uploads/degree/42Immigration.pdf', '2019-01-29 14:37:15'),
(43, 'L9802732', '2014-07-25 00:00:00', '2024-07-24 00:00:00', 'TI0348209', '2018-07-20 00:00:00', '2019-07-18 00:00:00', '97280', '2018-07-19 00:00:00', '2019-07-18 00:00:00', 'uploads/degree/43RP WP Passport.pdf', '2019-01-29 14:38:38'),
(44, 'Z 2749166', '2014-03-19 00:00:00', '2024-03-18 00:00:00', 'TI0363784', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'EMRID2573', '2019-01-17 00:00:00', '2020-01-01 00:00:00', 'uploads/degree/44PASSPORT RP WP.pdf', '2019-01-29 14:39:59'),
(45, 'M2743647', '2014-10-09 00:00:00', '2024-10-08 00:00:00', 'TI0363794', '2019-01-22 00:00:00', '2020-01-10 00:00:00', 'FMR102574', '2019-01-10 00:00:00', '2020-01-17 00:00:00', 'uploads/degree/45New Doc 2019-04-03 12.02.24.pdf', '2019-01-29 14:41:30'),
(46, 'P7073867', '2017-01-05 00:00:00', '2027-01-04 00:00:00', 'TI0363783', '2019-01-22 00:00:00', '2020-01-10 00:00:00', '102546', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/46passport , Rp and Work P.pdf', '2019-01-29 14:43:07'),
(47, 'Z4310369', '2017-08-07 00:00:00', '2027-08-06 00:00:00', 'TI0389895', '2018-10-04 00:00:00', '2019-05-25 00:00:00', 'NA', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'uploads/degree/47PASSPORT RP.pdf', '2019-01-29 14:44:22'),
(48, 'R0917416', '2016-12-26 00:00:00', '2026-12-25 00:00:00', 'TI0380599', '2018-12-18 00:00:00', '2019-12-13 00:00:00', 'EMR 101975', '2018-12-17 00:00:00', '2019-12-13 00:00:00', 'uploads/degree/48Passport,RP and WP.pdf', '2019-01-29 14:46:37'),
(49, 'R0917416', '2016-12-26 00:00:00', '2026-12-25 00:00:00', 'TI0380595', '2018-12-18 00:00:00', '2019-12-13 00:00:00', 'EMR101965', '2018-12-17 00:00:00', '2019-12-13 00:00:00', 'uploads/degree/49Passport,RP & WP.pdf', '2019-01-29 14:48:13'),
(50, 'R4552829', '2017-09-22 00:00:00', '2027-09-21 00:00:00', 'TI0385010', '2018-11-26 00:00:00', '2019-11-07 00:00:00', 'EMR101221', '2018-11-21 00:00:00', '2019-11-07 00:00:00', 'uploads/degree/default.jpg', '2019-01-29 14:49:29'),
(51, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'uploads/degree/default.jpg', '2019-03-25 19:26:00'),
(52, 'WILL NOT PROVIDE THI', '2019-01-02 00:00:00', '2019-01-01 00:00:00', 'XXXX', '2019-01-01 00:00:00', '2019-01-01 00:00:00', 'XXXXX', '2019-12-31 00:00:00', '2020-07-31 00:00:00', 'uploads/degree/52work permit.pdf', '2019-03-25 19:26:54'),
(53, 'XXXXXXXXXX', '2015-09-22 00:00:00', '2024-09-21 00:00:00', 'TI0363792', '2019-01-22 00:00:00', '2020-01-10 00:00:00', '102571', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/53im_jpg2pdf.pdf', '2019-03-25 19:27:52'),
(54, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'uploads/degree/default.jpg', '2019-03-25 19:28:36'),
(55, 'N1419576', '2015-09-11 00:00:00', '2025-09-10 00:00:00', 'TI0368181', '2019-03-12 00:00:00', '2020-02-28 00:00:00', 'EMR103539', '2019-03-12 00:00:00', '2020-02-28 00:00:00', 'uploads/degree/55Binder2.pdf', '2019-03-25 19:29:23'),
(56, 'T3537548', '2019-03-20 00:00:00', '2029-03-19 00:00:00', 'T10350844', '2018-09-20 00:00:00', '2019-04-15 00:00:00', 'EMR104110', '2019-04-12 00:00:00', '2020-04-06 00:00:00', 'uploads/degree/56Immigration_details[1].pdf', '2019-03-25 19:30:03'),
(57, 'J0913101', '2011-09-16 00:00:00', '2021-09-15 00:00:00', 'TI0384504', '2018-11-21 00:00:00', '2019-07-31 00:00:00', 'NOT YET', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'uploads/degree/57Passport & RP.pdf', '2019-03-25 19:30:38'),
(58, 'M4292749', '2014-12-08 00:00:00', '2024-12-07 00:00:00', 'TI0348228', '2018-07-20 00:00:00', '2019-07-16 00:00:00', 'EMR104560', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'uploads/degree/58Senthilkumar Passport New page01 & 02.pdf', '2019-03-25 19:31:08'),
(59, 'J0510072', '2010-03-10 00:00:00', '2020-03-09 00:00:00', 'TI0391985', '2018-11-07 00:00:00', '2019-10-22 00:00:00', 'EMR1020000', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'uploads/degree/59Binder1.pdf', '2019-03-26 17:15:28'),
(60, 'M2696742', '2014-10-09 00:00:00', '2024-10-08 00:00:00', 'TI0363899', '2019-01-24 00:00:00', '2020-01-10 00:00:00', 'EMR102549', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/60k.pdf', '2019-04-01 19:55:32'),
(61, 'M2265967', '2014-09-16 00:00:00', '2024-09-10 00:00:00', 'TI0364084', '2019-01-25 00:00:00', '2020-01-10 00:00:00', 'EM102542', '2019-01-17 00:00:00', '2020-01-10 00:00:00', 'uploads/degree/61Passport,RP and WP.pdf', '2019-04-04 20:03:38'),
(62, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'uploads/degree/default.jpg', '2019-04-08 13:13:24'),
(64, 'L2167765', '2013-08-05 00:00:00', '2023-04-08 00:00:00', 'TI0388456', '2018-11-02 00:00:00', '2019-11-04 00:00:00', 'NIL', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'uploads/degree/default.jpg', '2019-06-04 10:14:26'),
(65, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'uploads/degree/default.jpg', '2019-06-28 17:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `expat_orgdet`
--

CREATE TABLE `expat_orgdet` (
  `orgid` int(11) NOT NULL,
  `org_name` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `no_emp` int(11) DEFAULT NULL,
  `org_ph` varchar(15) DEFAULT NULL,
  `org_email` varchar(40) DEFAULT NULL,
  `org_address` varchar(100) DEFAULT NULL,
  `org_fax` varchar(20) DEFAULT NULL,
  `org_regno` varchar(40) DEFAULT NULL,
  `org_taxid` varchar(20) DEFAULT NULL,
  `country` varchar(10) DEFAULT NULL,
  `recstatus` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `entry_by` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expat_orgdet`
--

INSERT INTO `expat_orgdet` (`orgid`, `org_name`, `description`, `no_emp`, `org_ph`, `org_email`, `org_address`, `org_fax`, `org_regno`, `org_taxid`, `country`, `recstatus`, `created_date`, `entry_by`) VALUES
(1, 'JJU-Academic Program Development & Promotion Directorate', 'Developing new Academic programs, Review of current programs and staff development.Responsible for promoting employees based on their performance', 0, '', '', 'Jigjiga, Somali region ethiopia', '+251 455343746', '', '', 'Ethiopia', 1, '2018-05-20 17:41:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `expat_personal`
--

CREATE TABLE `expat_personal` (
  `userid` int(11) NOT NULL,
  `isd_ph` varchar(15) DEFAULT NULL,
  `whatsapp` varchar(15) DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `prof_email` varchar(50) DEFAULT NULL,
  `marital_stat` char(10) DEFAULT NULL,
  `nation` char(20) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expat_personal`
--

INSERT INTO `expat_personal` (`userid`, `isd_ph`, `whatsapp`, `dob`, `prof_email`, `marital_stat`, `nation`, `created_date`) VALUES
(7, '+91', '9677188654', '1988-03-23 00:00:00', 'phdvij@gmail.com', 'Yes', 'India', '2019-01-29 11:27:20'),
(8, '+251943009125', '+919159232483', '1990-05-20 00:00:00', 'selvarobin318@gmail.com', 'No', 'India', '2019-01-29 11:30:13'),
(6, '+91-9486665575', '+91-9486665575', '1984-07-30 00:00:00', 'ponsuresh.techie@gmail.com', 'Yes', 'India', '2019-01-29 11:24:07'),
(4, '+251932319328', '+919491853852', '1975-03-02 00:00:00', 'pnraao@jju.edu.et', 'Yes', 'India', '2019-01-29 11:03:15'),
(5, '+917418530006', '+251933585924', '1986-04-07 00:00:00', 'udhayakorp@gmail.com', 'Yes', 'India', '2019-01-29 11:19:14'),
(3, '+918985888279', '+251925633657', '1967-03-01 00:00:00', 'yjrao@jju.edu.et', 'Yes', 'India', '2019-01-29 10:49:15'),
(2, '+918763462709', '+918763462709', '1982-08-28 00:00:00', 'abpradeep@jju.edu.et', 'Yes', 'India', '2019-01-29 10:34:24'),
(9, '+918675032149', '+251915093836', '1981-06-07 00:00:00', 'anbarasudhandapani@gmail.com', 'Yes', 'India', '2019-01-29 11:32:57'),
(10, '+919486633822', '+91946633822', '1989-08-06 00:00:00', 'prabha.ks1989@gmail.com', 'No', 'India', '2019-01-29 11:35:04'),
(11, '04222435893', '+919944179988', '1989-04-03 00:00:00', 'vittalinox@gmail.com', 'Yes', 'India', '2019-01-29 11:37:13'),
(12, '+251-0904253188', '+91-7608842328', '1984-05-05 00:00:00', 'banchhanist@gmail.com', 'Yes', 'India', '2019-01-29 11:41:13'),
(13, '+251984576531', '+251904242630', '1970-05-09 00:00:00', 'sarathi979@rediffmail.com', 'Yes', 'India', '2019-01-29 12:13:42'),
(14, '+919962994813', '+251935984670', '1976-05-14 00:00:00', '1976.sundar@gmail.com', 'Yes', 'India', '2019-01-29 12:17:06'),
(15, '+917579134050', '+917579134050', '1947-11-10 00:00:00', 'LATHWALOP@GMAIL.COM', 'Yes', 'India', '2019-01-29 12:19:42'),
(16, '0914740523', '', '1973-07-07 00:00:00', 'palanibu@gmail.com', 'Yes', 'India', '2019-01-29 12:21:40'),
(17, '+919849075942', '+919849075942', '1975-07-30 00:00:00', 'chks28@yahoo.com', 'Yes', 'India', '2019-01-29 12:23:26'),
(18, '+916356336666', '+916356336666', '1994-07-15 00:00:00', 'jagathswamy66@gmail.com', 'No', 'India', '2019-01-29 12:25:01'),
(19, '+91984576537', '+918121281934', '1975-02-03 00:00:00', 'sivasankar_prasad@rediffmail.com', 'Yes', 'India', '2019-01-29 12:26:39'),
(20, '9652813040', '9652813040', '1983-06-09 00:00:00', 'banturakesh035@gmail.com', 'No', 'India', '2019-01-29 12:28:37'),
(21, '+919441575277', '+251984576538', '1975-05-01 00:00:00', 'drbabu1975@gmail.com', 'Yes', 'India', '2019-01-29 13:58:38'),
(22, '0091-9440425653', '', '1969-01-08 00:00:00', 'uttamrreddy@yahoomail.com', 'No', 'India', '2019-01-29 14:00:50'),
(23, '+919391284855', '+919391284855', '1966-03-20 00:00:00', 'tonta.ramanamurthy@gmail.com', 'Yes', 'India', '2019-01-29 14:03:28'),
(24, '+91 9396825203', '+91 9396825203', '1976-11-08 00:00:00', 'sgpraju@jju.edu.et', 'Yes', 'India', '2019-01-29 14:05:14'),
(25, '+251919364226', '+919701931997', '1981-03-09 00:00:00', 'shahnaz1981fat@gmail.com', 'Yes', 'India', '2019-01-29 14:06:59'),
(26, '+2519364226', '+919701931997', '1980-07-02 00:00:00', 'mdrafee1980@gmail.com', 'Yes', 'India', '2019-01-29 14:08:40'),
(27, '+919959688688', '+251935984568', '1988-12-04 00:00:00', 'shanmukhay@gmail.com', 'No', 'India', '2019-01-29 14:10:24'),
(28, '+91 08772287640', '+91 9121379551', '1970-03-08 00:00:00', 'pranand12@gmail.com', 'No', 'India', '2019-01-29 14:12:20'),
(29, '+91 8973684475', '+91 8973684475', '1982-05-30 00:00:00', 'rs.rathna@gmail.com', 'Yes', 'India', '2019-01-29 14:14:04'),
(30, '', '', '0000-00-00 00:00:00', '', '', '', '2019-01-29 14:15:43'),
(31, '9290629899', '9290629899', '1985-09-27 00:00:00', 'mahe.219@gmail.com', 'No', 'India', '2019-01-29 14:17:25'),
(32, '+919840970972', '+919698804377', '1988-01-04 00:00:00', 'virudev.deva68@gmail.com', 'Yes', 'India', '2019-01-29 14:19:19'),
(33, '+91 90595 10733', '+91 90595 10733', '1964-07-01 00:00:00', 'ravindra_katta@yahoo.com', 'Yes', 'India', '2019-01-29 14:20:49'),
(34, '+918019539476', '+918019539476', '1979-04-06 00:00:00', 'purush.mtech@jju.edu.et', 'Yes', 'India', '2019-01-29 14:22:20'),
(35, '0904243703', '9778871496', '1994-08-01 00:00:00', 'nayakamitanshu93@gmail.com', 'No', 'India', '2019-01-29 14:23:51'),
(36, '+7418530006', '+251983557942', '1991-06-22 00:00:00', 'pushparega994@gmail.com', 'Yes', 'India', '2019-01-29 14:28:06'),
(37, '9911421201', '9911421201', '1984-03-09 00:00:00', 'nkshukla@jju.edu.et', 'Yes', 'India', '2019-01-29 14:29:34'),
(38, '+91 9014340008', '+91 9014340008', '1975-03-06 00:00:00', 'gysagar@jju.edu.et', 'Yes', 'India', '2019-01-29 14:31:19'),
(39, '+917993462416', '+917993462416', '1984-04-30 00:00:00', 'srinivaskumar4u@jju.edu.et', 'Yes', 'India', '2019-01-29 14:32:56'),
(40, '+917310509091', '+917310509091', '1970-01-01 03:00:00', 'perway1@rediffmail.com', 'Yes', 'India', '2019-01-29 14:34:23'),
(41, '+251967002693', '+919766912558', '1985-03-08 00:00:00', 'mujeebrahmn1984@gmail.com', 'Yes', 'India', '2019-01-29 14:35:47'),
(42, '+251944251686', '+919995606275', '1989-10-06 00:00:00', 'ahammed.pazna@gmail.com', 'Yes', 'India', '2019-01-29 14:37:15'),
(43, '9040376797', '9040376797', '1988-05-25 00:00:00', 'satyajigjiga2016@gmail.com', 'Yes', 'India', '2019-01-29 14:38:38'),
(44, '91-9942259929', '91-9942259929', '1973-03-29 00:00:00', 'dr.mgovindarajan@yahoo.in', 'Yes', 'India', '2019-01-29 14:39:59'),
(45, '00919245143289', '00919245143289', '1977-06-06 00:00:00', 'anbumani2@yahoo.co.in', 'Yes', 'India', '2019-01-29 14:41:30'),
(46, '', '', '1991-12-07 00:00:00', 'bhai.idrees@gmail.com', 'Yes', 'India', '2019-01-29 14:43:07'),
(47, '+919500051412', '+919500051412', '1989-10-02 00:00:00', 'rajeshwarikarunakaran@gmail.com', 'Yes', 'India', '2019-01-29 14:44:22'),
(48, '+919963980110', '+919963980110', '1984-07-08 00:00:00', 'suripasupuleti11@gmail.com', 'Yes', 'India', '2019-01-29 14:46:37'),
(49, '+919652046911', '+919652046911', '1987-02-14 00:00:00', 'alekya.rani14@gmail.com', 'Yes', 'India', '2019-01-29 14:48:13'),
(50, '+919493781513', '+919493781513', '1983-06-20 00:00:00', 'arao_thotas@yahoo.com', 'Yes', 'India', '2019-01-29 14:49:29'),
(51, '+6129860024', '+251908998596', '1987-09-15 00:00:00', 'yonis.hashim@jju.edu.et', 'Yes', 'Ethiopia', '2019-03-25 19:26:00'),
(52, '251908999842', '9199282742', '1966-05-07 00:00:00', 'arekere@gmail.com', 'Yes', 'India', '2019-03-25 19:26:54'),
(53, '+919648272371', '----', '1984-01-04 00:00:00', 'stethorsh@gmail.com', 'No', 'India', '2019-03-25 19:27:52'),
(54, '', '', '0000-00-00 00:00:00', '', '', '', '2019-03-25 19:28:36'),
(55, '+918897601954', '', '1963-12-01 00:00:00', 'kurmasatyam@jju.edu.et', 'Yes', 'India', '2019-03-25 19:29:23'),
(56, '+919042196586', '+251929229580', '1972-06-01 00:00:00', 'mailkalandar@gmail.com', 'Yes', 'India', '2019-03-25 19:30:03'),
(57, '+919042277730', '+919042277730', '1981-05-25 00:00:00', 'pskmicro@gmail.com', 'Yes', 'India', '2019-03-25 19:30:38'),
(58, '0991662727', '', '1976-01-01 00:00:00', 'senthilkumarsubramanian@jju.edu.et', 'Yes', 'India', '2019-03-25 19:31:08'),
(59, '+919949354920', '0945440052', '1966-08-04 00:00:00', 'patlollaakr@gmail.com', 'Yes', 'India', '2019-03-26 17:15:28'),
(60, '+919515839852', '+919515839852', '1982-06-15 00:00:00', 'kvkrishnarao.lskh1234@jju.edu.et', 'Yes', 'India', '2019-04-01 19:55:32'),
(61, '+251 984576534', '7680829318', '1988-07-16 00:00:00', 'ramakrishna.chanti@gmail.com', 'Yes', 'India', '2019-04-04 20:03:38'),
(62, '', '', '0000-00-00 00:00:00', '', '', '', '2019-04-08 13:13:24'),
(64, '+917708195940', '+917708195940', '1969-05-18 00:00:00', 'senthilapsk@gmail.com', 'Yes', 'India', '2019-06-04 10:14:26'),
(65, '+919394075834', '+919394075834', '1973-06-16 00:00:00', 'gvreddy16673@gmail.com', 'Yes', 'India', '2019-06-28 17:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `expat_role`
--

CREATE TABLE `expat_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(1000) DEFAULT NULL,
  `recstatus` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expat_role`
--

INSERT INTO `expat_role` (`role_id`, `role_name`, `recstatus`, `created_date`) VALUES
(1, 'Apo', 1, '2018-05-15 17:12:30'),
(2, 'Expat', 1, '2018-05-15 17:49:56'),
(3, 'Local', 1, '2019-01-02 09:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `expat_users`
--

CREATE TABLE `expat_users` (
  `userid` int(11) NOT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `passwrd` varchar(50) DEFAULT NULL,
  `fname` varchar(40) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  `recstatus` int(11) DEFAULT NULL,
  `logstatus` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `expatid` varchar(20) DEFAULT NULL,
  `photo` varchar(500) NOT NULL,
  `squest` varchar(50) NOT NULL,
  `sanswer` varchar(50) NOT NULL,
  `gender` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expat_users`
--

INSERT INTO `expat_users` (`userid`, `uname`, `passwrd`, `fname`, `phone`, `email`, `user_type`, `recstatus`, `logstatus`, `created_date`, `expatid`, `photo`, `squest`, `sanswer`, `gender`) VALUES
(4, 'JJU/EXPAT/4', '978a77d7ee984c06bb685602105a8583', 'Dr. Partha Sarathi Bhattachajee', '0984576531', 'sarathi979@rediffmail.com', 'Local', 1, '2019-04-10 19:26:53', '2019-01-29 11:03:15', 'JJU/EXPAT/4', 'uploads/4Screenshot_20190129-110111.jpg', 'PWD', '1982', 'M'),
(5, 'JJU/EXPAT/5', 'a57c726403d9a2f79d172261e04571ed', 'Mr. Udhaya Kymar K', '0933585924', 'udhayakorp@gmail.com', 'Expat', 1, '2019-04-09 19:23:31', '2019-01-29 11:19:14', 'JJU/EXPAT/5', 'uploads/51509296478090.jpg', 'PWD', '1982', 'M'),
(6, 'JJU/EXPAT/6', '977874ca29e92e11223064711ad4ae8e', 'Mr. Ponsuresh Manoharan', '0905481538', 'ponsuresh.techie@gmail.com', 'Expat', 1, '2019-03-26 14:12:21', '2019-01-29 11:24:07', 'JJU/EXPAT/6', 'uploads/6Ponsuresh.m.jpg', 'PWD', '1982', 'M'),
(7, 'JJU/EXPAT/7', '5a2b0def5502d174662e575bd88c9955', 'Mr. Joseph Vijay Arputharaj', '0946430236', 'phdvij@gmail.com', 'Expat', 1, '2019-04-12 09:12:05', '2019-01-29 11:27:20', 'JJU/EXPAT/7', 'uploads/7vijay arputharaj.jpg', 'PWD', '1982', 'M'),
(1, 'apo', '9044065317ab6accfd3722fed33d1f00', 'Dr. Elliyas', '904243771', 'apo@jju.edu.et', 'Apo', 1, '2019-11-11 14:23:13', '2018-05-20 17:41:41', 'NULL', 'uploads/1dean.png', 'PWD', '1982', 'M'),
(8, 'JJU/EXPAT/8', '8d20832cd41f4e31c23c626325625839', 'Mr. Rabin Selvaraj', '0943009125', 'selvarobin318@gmail.com', 'Expat', 1, '2019-04-23 13:50:55', '2019-01-29 11:30:13', 'JJU/EXPAT/8', 'uploads/8Robin Photo (2).jpg', 'PWD', '1982', 'M'),
(3, 'JJU/EXPAT/3', '00db7f7fe183085d08ec7e22f5d30388', 'Dr. Partha Sarathi Bhattachajee', '0984576531', 'sarathi979@rediffmail.com', '.\\./.\\./.\\./.\\./.\\./.\\./etc/passwd', 1, '2019-04-09 17:20:51', '2019-01-29 10:49:15', 'JJU/EXPAT/3', 'uploads/3p4.jpg', 'PWD', '1982', 'M'),
(2, 'JJU/EXPAT/2', '4297f44b13955235245b2497399d7a93', 'Mr. A B Pradeep Kumar', '0904243771', 'pradeep.peter97@gmail.com', 'Expat', 1, '2019-10-19 19:30:05', '2019-01-29 10:34:24', 'JJU/EXPAT/2', 'uploads/2abpradeep.jpg', 'PWD', '1982', 'M'),
(9, 'JJU/EXPAT/9', '39f74467395750928c761b3fc635ab96', 'Mr. Dhandapani Anbarasu', '0915093836', 'anbarasudhandapani@gmail.com', 'Expat', 1, '2019-04-17 22:42:23', '2019-01-29 11:32:57', 'JJU/EXPAT/9', 'uploads/9anbarasu.jpg', 'PWD', '1982', 'M'),
(10, 'JJU/EXPAT/10', 'febfe1200b5de5d7b3b8fd7b1aca267a', 'Mr. Prabhakar K S', '0984576519', 'prabha.ks1989@gmail.com', 'Expat', 1, '2019-04-24 21:17:55', '2019-01-29 11:35:04', 'JJU/EXPAT/10', 'uploads/10Prabhakar.jpg', 'PWD', '1982', 'M'),
(11, 'JJU/EXPAT/11', 'bd825b8bf295ccc24d660441c1754e13', 'Mr. Vittal Kumar Ponnusamy', '0973036289', 'vittalinbox@gmail.com', 'Expat', 1, '2019-04-24 14:07:45', '2019-01-29 11:37:13', 'JJU/EXPAT/11', 'uploads/11Vittalkumar.jpg', 'PWD', '1982', 'M'),
(12, 'JJU/EXPAT/12', '839fe89562fd027b4f5899035b633b0a', 'Dr. Banchhanidhi dash', '0904253188', 'banchhanist@gmail.com', 'Expat', 1, '2019-04-09 21:28:34', '2019-01-29 11:41:13', 'JJU/EXPAT/12', 'uploads/12Banchhanidhi Dash.jpg', 'PWD', '1982', 'M'),
(13, 'JJU/EXPAT/13', '99f5b11253684a86e04c100c9a151748', 'Dr. Partha Sarathi Bhattachajee', '0984576531', 'sarathi979@rediffmail.com', 'Expat', 1, '2019-03-27 18:48:53', '2019-01-29 12:13:42', 'JJU/EXPAT/13', 'uploads/13Partha Sarathi.jpg', 'PWD', '1982', 'M'),
(14, 'JJU/EXPAT/14', 'c6cbe0e59362a4436d7f9281931a3319', 'Mr. Thalaisamy Shanmuga Sundaram', '0935984670', '1978.sundar@gmail.cim', 'Expat', 1, '2019-04-02 08:00:21', '2019-01-29 12:17:06', 'JJU/EXPAT/14', 'uploads/14Shanmugu Sundaram.jpg', 'PWD', '1982', 'M'),
(15, 'JJU/EXPAT/15', 'dc0e3e714151dd5f5dbfdcff23c9e403', 'Dr. Om Parkash Lathwal', '0973036292', 'Lathwalop@rediffmail.com', 'Expat', 1, '2019-04-02 19:31:48', '2019-01-29 12:19:42', 'JJU/EXPAT/15', 'uploads/15Lathwal Om Parkash.jpg', 'PWD', '1982', 'M'),
(16, 'JJU/EXPAT/16', 'cdb00283be449c9b17285fceb95646f3', 'Dr. S Palani', '0914740523', 'palanibupalanibu@yahoo.co.in', 'Expat', 1, '2019-04-02 14:47:46', '2019-01-29 12:21:40', 'JJU/EXPAT/16', 'uploads/16Palani.jpg', 'PWD', '1982', 'M'),
(17, 'JJU/EXPAT/17', 'f93f36d1cce1b2152c5733de9f9cfbd0', 'Dr. Karunaker Chiluka', '0973036288', 'chiluka_karunaker@yahoo.com', 'Expat', 1, '2019-07-31 11:31:07', '2019-01-29 12:23:26', 'JJU/EXPAT/17', 'uploads/17Karunaker Chiluka.jpg', 'PWD', '1982', 'M'),
(18, 'JJU/EXPAT/18', 'c0737d33b162368d562f7b5907e19acc', 'Mr. Villuri Jagath Adinarayana Swamy', '0904241662', 'jagathswamy66@gmail.com', 'Expat', 1, '2019-05-07 14:29:45', '2019-01-29 12:25:01', 'JJU/EXPAT/18', 'uploads/18Jagath.jpg', 'PWD', '1982', 'M'),
(19, 'JJU/EXPAT/19', 'dc757e18085a040a9329f8209196a45b', 'Dr. Kanala Siva Sankara Prasad', '0984576537', 'knlsivasankaraprasad@gmail.com', 'Expat', 1, '2019-05-31 13:36:30', '2019-01-29 12:26:39', 'JJU/EXPAT/19', 'uploads/19Siva SANKARA.jpg', 'PWD', '1982', 'M'),
(20, 'JJU/EXPAT/20', 'b34ad630c8576318218966f397698b9f', 'Mr. Bantu Rakesh', '0938541898', 'banturakesh035@gmail.com', 'Expat', 1, '2019-04-02 08:34:35', '2019-01-29 12:28:37', 'JJU/EXPAT/20', 'uploads/20BANTU Rakesh.jpg', 'PWD', '1982', 'M'),
(21, 'JJU/EXPAT/21', 'c2df9b4625212c566dead085642bc7cb', 'Dr. Pechetty S V R Babu', '0984576538', 'drbabu1975@gmail.com', 'Expat', 1, '2019-05-11 12:13:52', '2019-01-29 13:58:38', 'JJU/EXPAT/21', 'uploads/21Pechetty.jpg', 'PWD', '1982', 'M'),
(22, 'JJU/EXPAT/22', '16fac9a5985e2a7c37a9a6aeb52262dc', 'Dr. Ramireddy Uttama Reddy', '0919241464', 'drreddyhu@gmail.com', 'Expat', 1, '2019-05-05 15:09:36', '2019-01-29 14:00:50', 'JJU/EXPAT/22', 'uploads/22DSC_0129 (399 x 600) 1 (299 x 450)-3.jpg', 'PWD', '1982', 'M'),
(23, 'JJU/EXPAT/23', '6db801f25a120a7742c80325006c60c5', 'Mr. Tonta Ramana Murthy', '0904243704', 'tonta.ramanamurthy@gmail.com', 'Expat', 1, '2019-04-05 12:11:45', '2019-01-29 14:03:28', 'JJU/EXPAT/23', 'uploads/23Tonta Ramana.jpg', 'PWD', '1982', 'M'),
(24, 'JJU/EXPAT/24', '7b58f1b36ff959c4cfa35f65049021f4', 'Mr. Gadhiraju Prabhakar Raju', '0929256520', 'sgpraju@gmail.com', 'Expat', 1, '2019-03-28 17:54:00', '2019-01-29 14:05:14', 'JJU/EXPAT/24', 'uploads/24G P Raju3.jpg', 'PWD', '1982', 'M'),
(25, 'JJU/EXPAT/25', '3d24ed3eb2818c10aed4992eaed43b91', 'Ms. Shahnaz Fatima', '0919364226', 'shahnaz1981fat@gmail.com', 'Expat', 1, '2019-03-29 18:59:33', '2019-01-29 14:06:59', 'JJU/EXPAT/25', 'uploads/25Shahnaz Fatima.jpg', 'PWD', '1982', 'F'),
(26, 'JJU/EXPAT/26', 'e39654452aea031d8666760f6f5cd8a9', 'Mr. Mohammad Rafee Shaik', '0919364226', 'mdrafee1980@gmail.com', 'Expat', 1, '2019-04-02 18:40:56', '2019-01-29 14:08:40', 'JJU/EXPAT/26', 'uploads/26rafee pic.JPG', 'PWD', '1982', 'M'),
(27, 'JJU/EXPAT/27', '3477762e232724b64c7c7daa45904b34', 'Mr. Shanmukha Yarlagadda', '0935984568', 'shanmukhay@gmail.com', 'Expat', 1, '2019-04-24 19:13:35', '2019-01-29 14:10:24', 'JJU/EXPAT/27', 'uploads/27Shanmukha Yarlagadda.jpg', 'PWD', '1982', 'M'),
(28, 'JJU/EXPAT/28', '742726b56a034c5d2d1543ddf6492adf', 'Mr. P Rameswara Anand', '0937554978', 'pranand12@gmail.com', 'Expat', 1, '2019-04-02 11:40:29', '2019-01-29 14:12:20', 'JJU/EXPAT/28', 'uploads/28Rameswara.jpg', 'PWD', '1982', 'M'),
(29, 'JJU/EXPAT/29', '89534213383a6a5b0eca4ad7c3b082c4', 'MS. S Nagarathinam', '0984576536', 'rs.rathna@gmail.com', 'Expat', 1, '2019-04-16 13:52:29', '2019-01-29 14:14:04', 'JJU/EXPAT/29', 'uploads/291.jpg', 'PWD', '1982', 'F'),
(30, 'JJU/EXPAT/30', '87199cc4e06664262c2b454ae9f8f58f', 'Mr. Vanadi Vinay Kumar', '0929400061', 'vinay.vannadi@gmail.com', 'Expat', 1, '2019-01-29 14:15:53', '2019-01-29 14:15:43', 'JJU/EXPAT/30', 'uploads/30Vinay kumar.jpg', 'PWD', '1982', 'M'),
(31, 'JJU/EXPAT/31', 'f87b089bd40cca132335d1643970f2f4', 'Mr. Kesamsetti Maheswara Rao', '0984574222', 'mahe.219@gmail.com', 'Expat', 1, '2019-04-11 11:34:38', '2019-01-29 14:17:25', 'JJU/EXPAT/31', 'uploads/31Maheswara Rao.jpg', 'PWD', '1982', 'M'),
(32, 'JJU/EXPAT/32', '6de9fc4404d58df9ce9015695eaf8f16', 'Mr. Krishnan Deventhiran', '0904241414', 'virudev.deva68@gmail.com', 'Expat', 1, '2019-03-31 07:51:58', '2019-01-29 14:19:19', 'JJU/EXPAT/32', 'uploads/32deva photo.jpg', 'PWD', '1982', 'M'),
(33, 'JJU/EXPAT/33', '0b5df9331732902918f7f1b2885de66e', 'Dr. Katta Ravindra', '0933595174', 'ravindra_katta@yahoo.com', 'Expat', 1, '2019-04-03 15:04:57', '2019-01-29 14:20:49', 'JJU/EXPAT/33', 'uploads/33Katta Ravindra.jpg', 'PWD', '1982', 'M'),
(34, 'JJU/EXPAT/34', '4917cbfc8b9b29986e5df6b52cdb2ac7', 'Mr. Kashaveni Purushotham', '0933452961', 'purush.mtech@gmail.com', 'Expat', 1, '2019-04-13 17:53:55', '2019-01-29 14:22:20', 'JJU/EXPAT/34', 'uploads/34photo.jpg', 'PWD', '1982', 'M'),
(35, 'JJU/EXPAT/35', '9c18e3c492165a8b3a29ff53aff162da', 'Mr. Amitanshu Nayak', '0904243703', 'nayakamitanshu93@gmail.com', 'Expat', 1, '2019-04-03 20:19:42', '2019-01-29 14:23:51', 'JJU/EXPAT/35', 'uploads/35Amitanshu Nayak.jpg', 'PWD', '1982', 'M'),
(36, 'JJU/EXPAT/36', '6aaf3a796eba91ca8dd1309d28139b3a', 'Ms. Pushpa Rega Ganesan', '0983557942', 'pushparega994@gmail.com', 'Expat', 1, '2019-04-09 19:48:36', '2019-01-29 14:28:06', 'JJU/EXPAT/36', 'uploads/36Pushpa Rega Ganesan.jpg', 'PWD', '1982', 'F'),
(37, 'JJU/EXPAT/37', '090ffa2f75ece38b055053ef6213afcf', 'Mr. Naveen Kumar Shukla', '0930795553', 'naveenkumarshukla@gmail.com', 'Expat', 1, '2019-03-31 15:14:28', '2019-01-29 14:29:34', 'JJU/EXPAT/37', 'uploads/37Naveen Shukla.jpg', 'PWD', '1982', 'M'),
(38, 'JJU/EXPAT/38', '39aa1bb45b28ca93da69de5a16523ad7', 'Dr. Gavini Yogananda Sagar', '0925627667', 'gysagar@gmail.com', 'Expat', 1, '2019-03-29 17:33:55', '2019-01-29 14:31:19', 'JJU/EXPAT/38', 'uploads/3849422.jpg', 'PWD', '1982', 'M'),
(39, 'JJU/EXPAT/39', '1151acde8d6e66de40e98fa95961a343', 'Mr. Seepuram Srinivas Kumar', '0946429813', 'srinivaskumar4u@gmail.com', 'Expat', 1, '2019-04-11 11:50:30', '2019-01-29 14:32:56', 'JJU/EXPAT/39', 'uploads/39Srinivas Kumar.jpg', 'PWD', '1982', 'M'),
(40, 'JJU/EXPAT/40', 'd341a5b5fdd2e6eaf7869bb8ed5fd083', 'Dr. Perways Alam', '0973036291', 'perways1@rediffmail.com', 'Expat', 1, '2019-04-10 13:57:49', '2019-01-29 14:34:23', 'JJU/EXPAT/40', 'uploads/40Perways Alam.jpg', 'PWD', '1982', 'M'),
(41, 'JJU/EXPAT/41', '21b72c0b7adc5c7b4a50ffcb90d92dd6', 'Mr. Mujeeb Rahaman', '0967002693', 'mujeebrahman1984@gmail.com', 'Expat', 1, '2019-04-16 19:12:40', '2019-01-29 14:35:47', 'JJU/EXPAT/41', 'uploads/41Mujeeb Rahaman.jpg', 'PWD', '1982', 'M'),
(42, 'JJU/EXPAT/42', '21b72c0b7adc5c7b4a50ffcb90d92dd6', 'Dr. Azna Ahammed', '0944251686', 'ahammed.pazna@gmail.com', 'Expat', 1, '2019-04-16 19:19:01', '2019-01-29 14:37:15', 'JJU/EXPAT/42', 'uploads/42azna.jpg', 'PWD', '1982', 'F'),
(43, 'JJU/EXPAT/43', 'd68e6250a2ca39315f4b14b8785db93b', 'Mr. Satyanarayana Kumbha', '0987148266', 'satyajigjiga2016@gmail.com', 'Expat', 1, '2019-03-27 09:55:58', '2019-01-29 14:38:38', 'JJU/EXPAT/43', 'uploads/43Satya.jpg', 'PWD', '1982', 'M'),
(44, 'JJU/EXPAT/44', '903217c6399fae133a82ceea0d541002', 'Dr. Govinda Rajan Manivasagam', '0984576520', 'dr.mgovindarajan@yahoo.in.co', 'Expat', 1, '2019-04-03 14:23:31', '2019-01-29 14:39:59', 'JJU/EXPAT/44', 'uploads/44dr. Govinda.jpg', 'PWD', '1982', 'M'),
(45, 'JJU/EXPAT/45', '94630a915b810f6c8c0f5c985ac091ca', 'Mr. Kandasamy venkatachalam', '0947654326', 'anbumani2@yahoo.co.in', 'Expat', 1, '2019-04-03 08:57:29', '2019-01-29 14:41:30', 'JJU/EXPAT/45', 'uploads/45k.venkatachalam.jpg', 'PWD', '1982', 'M'),
(46, 'JJU/EXPAT/46', 'dd7df027b5fdc269597442b77e1ebacf', 'Mr. Mohammed Idres Khan', '0904241400', 'bhai.idrees@gmail.com', 'Expat', 1, '2019-03-27 15:38:40', '2019-01-29 14:43:07', 'JJU/EXPAT/46', 'uploads/46mohammed idrees.jpg', 'PWD', '1982', 'M'),
(47, 'JJU/EXPAT/47', 'd867f5167c5fd7a13e6973e057a3303a', 'Mrs. Rajeshwari Deventhiran', '0953554522', 'rajeshwarikarunakaran@gmail.com', 'Expat', 1, '2019-03-28 18:18:40', '2019-01-29 14:44:22', 'JJU/EXPAT/47', 'uploads/47IMG_20190126_105759.jpg', 'PWD', '1982', 'F'),
(48, 'JJU/EXPAT/48', 'f2b26e4327364afe9b71dd7a5f5f72d4', 'Mr. Suresh P', '0936533533', 'suripasupuleti11@gmail.com', 'Expat', 1, '2019-04-09 18:45:31', '2019-01-29 14:46:37', 'JJU/EXPAT/48', 'uploads/48suresh.jpg', 'PWD', '1982', 'M'),
(49, 'JJU/EXPAT/49', 'f2b26e4327364afe9b71dd7a5f5f72d4', 'Mrs. Yerra Readdy Alekya Rani', '0963980110', 'alekyarani214@gmail.com', 'Expat', 1, '2019-04-09 18:47:41', '2019-01-29 14:48:13', 'JJU/EXPAT/49', 'uploads/49Alekya rani.jpg', 'PWD', '1982', 'F'),
(50, 'JJU/EXPAT/50', '03f95c173a0473cb190d6463dc681f89', 'Dr. Thota Apparao', '0904241399', 'arao_thotas@yahoo.com', 'Expat', 1, '2019-05-03 18:03:44', '2019-01-29 14:49:29', 'JJU/EXPAT/50', 'uploads/50IMG_20190126_104131.jpg', 'PWD', '1982', 'M'),
(51, 'JJU/EXPAT/51', 'aa68d5bf4598e1a6e3975f7d8b23e990', 'Dr. Hashim Fuad Yonis', '0908998596', 'yonishashim2@gmail.com', 'Expat', 1, '2019-05-13 10:15:17', '2019-03-25 19:26:00', 'JJU/EXPAT/51', 'uploads/51Dr Hashim.jpg', 'PWD', '1982', 'M'),
(52, 'JJU/EXPAT/52', '81596063cc0bc66047a078e0b3b628c7', 'Dr. Arekere Marigowda Dhananjaya', '0947602939', 'arekere@gmail.com', 'Expat', 1, '2019-04-23 14:00:53', '2019-03-25 19:26:54', 'JJU/EXPAT/52', 'uploads/52prof Arekere.jpg', 'PWD', '1982', 'M'),
(53, 'JJU/EXPAT/53', '4ff19136bd8b5b4fe0c802ce3649b0ce', 'Harish Murugesh', '0904052312', 'stethorsh@gmail.com', 'Expat', 1, '2019-04-23 10:21:24', '2019-03-25 19:27:52', 'JJU/EXPAT/53', 'uploads/53Dr Harish.jpg', 'PWD', '1982', 'M'),
(54, 'JJU/EXPAT/54', '5543a1ee801a61d4d983ebfe09719535', 'Meiraneh Abdallah Okiye', '0944159516', 'jokiye@gmail.com', 'Expat', 1, '2019-04-09 22:50:52', '2019-03-25 19:28:36', 'JJU/EXPAT/54', 'uploads/545_Okiye.jpg', 'PWD', '1982', 'M'),
(55, 'JJU/EXPAT/55', 'e2ef47fb03820ddefe3400c4b4df03a6', 'Dr. Kurma Sathyanarayana', '0918260646', 'kurmasatyam@gmail.com', 'Expat', 1, '2019-03-28 10:58:38', '2019-03-25 19:29:23', 'JJU/EXPAT/55', 'uploads/55Satyanarayana.jpg', 'PWD', '1982', 'M'),
(56, 'JJU/EXPAT/56', '475cc7d5e5821dff6c1e79b514aeed4e', 'Dr. Ameer Kalandar', '0929229580', 'mailkalandar@gmail.com', 'Expat', 1, '2019-04-23 13:58:01', '2019-03-25 19:30:03', 'JJU/EXPAT/56', 'uploads/56Dr Kalander.jpg', 'PWD', '1982', 'M'),
(57, 'JJU/EXPAT/57', '445905e4332eb2702b2797644aba71ec', 'Dr. Selvakumar Palaniappan', '0920168944', 'pskmicro@gmail.com', 'Expat', 1, '2019-04-24 17:11:24', '2019-03-25 19:30:38', 'JJU/EXPAT/57', 'uploads/57Dr Selvakumar.jpg', 'PWD', '1982', 'M'),
(58, 'JJU/EXPAT/58', '5334aa426178dc248dc1228d835ee08f', 'Dr. Senthilkumar Subramanian', '0991662727', 'senthilkumarsubramanian@jju.edu.et', 'Expat', 1, '2019-05-31 00:37:34', '2019-03-25 19:31:08', 'JJU/EXPAT/58', 'uploads/58Dr Senthilkumar.jpg', 'PWD', '1982', 'M'),
(59, 'JJU/EXPAT/59', '96259d1b28441746984d31fd21a4625e', 'Dr. Patlolla Athma Karan Reddy', '0945440052', 'patlollaakr@gmail.com', 'Expat', 1, '2019-03-30 10:38:29', '2019-03-26 17:15:28', 'JJU/EXPAT/59', 'uploads/59Dr Patlolla Athma.jpg', 'PWD', '1982', 'M'),
(60, 'JJU/EXPAT/60', '827ccb0eea8a706c4c34a16891f84e7b', 'K.V.Krishna Rao', '0984580463', 'lakshmikrishna.99@gmail.com', 'Expat', 1, '2019-04-17 19:48:07', '2019-04-01 19:55:32', 'JJU/EXPAT/60', 'uploads/60krish.k.jpg', 'PWD', '1982', 'M'),
(61, 'JJU/EXPAT/61', '55d390bb9c792bfc51259ecb73e5b081', 'Mule Ramakrishna Reddy', '0984576534', 'ramakrishna.chanti@gmail.com', 'Expat', 1, '2019-04-18 08:36:40', '2019-04-04 20:03:38', 'JJU/EXPAT/61', 'uploads/61Document 27_2_1.jpg', 'PWD', '1982', 'M'),
(63, 'Local', '4297f44b13955235245b2497399d7a93', 'Local', '123123', 'guest@gmail.com', 'Local', 0, '2019-04-11 09:45:12', '2019-04-08 13:13:24', 'JJU/EXPAT/62', 'uploads/profile.png', 'PWD', '1982', 'M'),
(64, 'JJU/EXPAT/62', '9f1c1f44b008054f6396fa8d9508222a', 'Dr.A.P.Senthil Kumar', '0946748875', 'senthilapsk@gmail.com', 'Expat', 1, '2019-06-04 10:17:25', '2019-06-04 10:14:26', 'JJU/EXPAT/64', 'uploads/64photo.jpg', 'PWD', '1982', 'M'),
(62, 'JJU/EXPAT/64', 'efa93248046761e0d3c169b17a41f9ca', 'Arichandran Ramachandran', '0912692969', 'Arichandrangct@gmail.com', 'Expat', 1, '2019-10-23 17:44:21', '2019-10-19 15:50:38', 'JJU/EXPAT/66', 'uploads/profile.png', 'PWD', '1982', 'M'),
(65, 'JJU/EXPAT/63', '6dabc09914bec92a24267e28067fe845', 'Dr.Gaddam Venkat Reddy', '938903296', 'gvreddy16673@gmail.com', 'Expat', 1, '2019-06-28 18:02:46', '2019-06-28 17:25:17', 'JJU/EXPAT/65', 'uploads/65IMG_20190628_174402~2.jpg', 'PWD', '1982', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `web_categories`
--

CREATE TABLE `web_categories` (
  `catid` int(11) NOT NULL,
  `cat_name` varchar(1000) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `cat_type` varchar(100) DEFAULT NULL,
  `recstatus` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `main_catid` int(10) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_categories`
--

INSERT INTO `web_categories` (`catid`, `cat_name`, `description`, `cat_type`, `recstatus`, `created_date`, `main_catid`) VALUES
(1, 'Clubs News', 'NIL', 'Updates', 1, '2018-05-15 17:23:46', 1),
(2, 'Department News', 'NIL', 'Updates', 1, '2018-05-15 17:36:04', 1),
(3, 'University News', 'NIL', 'Updates', 1, '2018-05-15 17:48:56', 1),
(4, 'Recent Events', 'NIL', 'Updates', 1, '2018-05-15 18:41:03', 2),
(5, 'ICT Job Notification', 'NIL', 'Updates', 1, '2018-06-04 14:57:40', 3);

-- --------------------------------------------------------

--
-- Table structure for table `web_galleryinfo`
--

CREATE TABLE `web_galleryinfo` (
  `galid` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `pic` varchar(1000) DEFAULT NULL,
  `recstatus` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_galleryinfo`
--

INSERT INTO `web_galleryinfo` (`galid`, `title`, `pic`, `recstatus`, `created_date`) VALUES
(1, 'GRADUATION DAY GALLERY', 'gallery/col1/*.*', 1, '2018-05-15 17:23:46'),
(2, 'EVENTS GALLERY', 'gallery/col2/*.*', 1, '2018-05-15 17:23:46'),
(3, 'NEWS GALLERY', 'gallery/col3/*.*', 1, '2018-05-15 17:23:46');

-- --------------------------------------------------------

--
-- Table structure for table `web_info`
--

CREATE TABLE `web_info` (
  `infoid` int(11) NOT NULL,
  `infono` varchar(50) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `catid` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `story` varchar(5000) DEFAULT NULL,
  `pic` varchar(1000) DEFAULT NULL,
  `tabhtml` varchar(1000) DEFAULT NULL,
  `recstatus` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `exp_date` datetime DEFAULT NULL,
  `assigned_to` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_info`
--

INSERT INTO `web_info` (`infoid`, `infono`, `userid`, `catid`, `title`, `story`, `pic`, `tabhtml`, `recstatus`, `created_date`, `exp_date`, `assigned_to`) VALUES
(2, 'JJUINF2', 1, 4, 'ICT Application Development center launched OIS - Online Information System', 'We ICT ADC has launched OIS ( Online Information System ). Which is an University Single sign on application using which staff and student can access many modules like\r\nHelpDesk, Feedback System,Cafe System and so on with one single username and password', 'uploads/2image-02-full.jpg', 'NIL', 0, '2018-05-17 10:23:29', '2018-05-17 10:23:29', 0),
(6, 'JJUINF6', 1, 3, 'ICT Application Development center  SOP ( Standard Operating Procedure )', 'ICT Application Development Center has some set of rules and regulations to host the software in the university Data Center. Any individual should follow the following :', 'uploads/6ict-sop.jpg', 'NIL', 0, '2018-05-25 14:29:32', '2018-05-25 14:29:32', 0),
(7, 'JJUINF7', 2, 3, 'Jigjiga One Health Initiative consolidation workshop held', 'With a sparse population, the ESRS is the second largest region of Ethiopia. The majority of its population is pastoralist, moves seasonally with their livestock in search of grazing areas and water.\r\n\r\nTheir mobile life style is confronted with poor access to social services, notably for the provision of human and animal healthcare, which is strongly highlighted by the poor regional health indicators. The Federal government of Ethiopia makes a huge effort in strengthening access and quality education. Jigjiga University is the key university in the eastern part of the nation with its center of excellence in pastoralism education, research and community services.\r\n\r\nThe Jigjiga One Health Initiative project is a 10 years (2015-2025) research and development program, funded by the Swiss government (includes Swiss Tropical Public Health Institute in Basel, Armaur Hansen Research Institute and Jigjiga University).\r\n\r\nThe goal of JOHI is to contribute towards the wellbeing, livelihood secu', 'uploads/7jju1.jpg', 'NIL', 0, '2018-05-30 09:08:12', '2018-05-30 09:08:12', 0),
(9, 'JJUINF9', 2, 3, 'US Ambassador to Ethiopia H.E. Mr. Michael Raynor and Somali Rgional State President H.E Mr. Mustafe', 'Today, JJU community has been warmly welcoming the US Ambassador to Ethiopia H.E. Mr. Michael Raynor and Somali Rgional State President H.E Mr. Mustafe Omer.  On the Occasion of arrival to JJU, They were welcomed by Mr. Elias Oumer, Acting President of JJU and Mr Salah Hussen, ADVP of the University, the university top management body, staffs and the students of the university.', 'assets/images/tmpnewspic.jpg', 'NIL', 0, '2018-11-28 00:12:56', '2018-11-28 00:12:56', 0),
(8, 'JJUINF8', 3, 5, 'New ICT Vacancies', 'Vacancy Announcement (posted for 2nd time)                          \r\nJigjiga University is seeking 8 suitable candidates to ICT Directorate at job titles bellow vacant  posted. <br><strong><a href=\'https://www.dropbox.com/s/vtivm4vhmjkpztt/urgent%20vacancy%20announcement.docx?dl=0\'>: ATTACHMENT :</a></strong>', 'assets/images/tmpnewspic.jpg', 'NIL', 0, '2018-06-08 10:43:31', '2018-06-08 10:43:31', 0),
(10, 'JJUINF10', 3, 3, 'Academic Promotion for faculty', 'The Jigjiga University has promoted 10 local faculty from lecturer to Asst. Professor and 1 indian expat from Asst. Professor to Asso. Professor this month.', 'assets/images/tmpnewspic.jpg', 'NIL', 0, '2019-02-03 11:00:12', '2019-02-03 11:00:12', 0),
(11, 'JJUINF11', 8, 4, 'MoU between Complutence University of Madrid and JJU', 'Today JJU made a MoU with Two Spanish OMF surgery and Pathology  of Complutence university of Madrid in President Office .\r\nThis MoU will enable Shuldan Sheikh Hasen Yabari Hospital (Referal Hospital -JJU ) to utilise the Spanish doctors for Oral and Maxillofacial surgery activities and also helps the local doctors to get on the job training and guest lectures from the experts.\r\nThis MoU will be in force for the next three years and subject to revision of modification by mutual agreement at annual review meeting.\r\nMoU was exchanged between Mr.Elias Oumer Ibrahim (President) and OMF surgery and Pathology team Of Complutence university and Mr.Salh Hussein(ADVP), Dr.Abdiruf Hassan(ARVP) Dr.Abdulahi Hussein (CEO of SSHY Referal Hospital),Mr/Tingirtu Tekele(Director-International Relations Officer) Dr.P.N.Rao(Academic&Research Affairs -International Relations Office) Mr.Ahmed Arab Director(APDPD) were present in the program', 'assets/images/tmpnewspic.jpg', 'NIL', 0, '2019-02-15 13:42:47', '2019-02-15 13:42:47', 0),
(12, 'JJUINF12', 1, 3, 'ICT launched a portal for APDPDD Directorate', 'ICT launched a portal for APDPDD Directorate recently to maintain all the expats details by various categories. This portal helps the office to find out expats based on their names, departments, specialization, experience, by degree level and also by contract expiry dates', 'uploads/12p2.jpg', 'NIL', 0, '2019-04-17 12:03:10', '2019-04-17 12:03:10', 0),
(13, 'JJUINF13', 1, 3, 'ICT launched a portal for IRO', 'ICT launched a portal for International Relationship Office recently. using this portal they update the website with latest MOU\'s and partnerships held.', 'uploads/13p1.jpg', 'NIL', 0, '2019-04-17 12:06:43', '2019-04-17 12:06:43', 0),
(14, 'JJUINF14', 1, 3, 'MOU with Ethiopian Foreign Relations & Strategic Studies Institute(EFRSSI)', 'At the end of Jigjiga Migration Series III Conference on  Conflict, Internally Displaced Peoples(IDPs) and the Search for Durable Solutions in Ethiopia, Jigjiga University signed MOU with Ethiopian Foreign Relations & Strategic Studies Institute(EFRSSI) to maintain collaborative efforts of EFRSSI and JJU in Research, Institutional Capacity Building, Inspiration Speeches, Lectures and Seminars and the like. \r\nJigJiga University is very thankful to EFRSSI at the Federal Ministry of Peace, UNHCR, ICRC and Pro Development Network for their great contribution to the success of the conference!!!', 'uploads/14n1.jpg', 'NIL', 0, '2019-06-09 17:27:50', '2019-06-09 17:27:50', 0),
(15, 'JJUINF15', 1, 4, 'In Conversation with Felix Horne', 'Felix Horne, senior Ethiopian and Eritrea researcher for Human Rights Watch will reflect on his researching experience of human rights in the Somali Region. Please join us on Wednesday 10:00 AM in the morning at JJU New Administration Building.', 'uploads/15n1.jpg', 'NIL', 0, '2019-06-09 17:33:18', '2019-06-09 17:33:18', 0),
(16, 'JJUINF16', 1, 3, 'In an official trip to Turkey,', 'In an official trip to Turkey, Jigjiga University President Office Director, Mr.Kadar Mohamoud and the Academic Vice President Office Director, Mr.Abdirahman Mektel managed to build partnership with more than six universities and organizations in Istanbul. Partnership areas include health and medical assistance, staff exchange, student exchange, scholarship and capacity building. \r\nJigjiga University will continue to partner with world renowned universities and institutions for a better excellence!!', 'uploads/16n1.jpg', 'NIL', 0, '2019-06-09 17:35:52', '2019-06-09 17:35:52', 0),
(17, 'JJUINF17', 1, 4, 'Jigjiga University, in collaboration with USAID and Somali regional State', 'Jigjiga University, in collaboration with USAID and Somali regional State, organized a consultative workshop on the following three major topics:\r\n1) Durable solutions for IDPs\r\n2) The future of pastoralism \r\n3) Private sector growth in Somali region \r\nBesides of Jigjiga University senior management and academic staff, representatives from GOs, NGOs and UN agencies attended the workshop. Following the end of the workshop, the president of Jigjiga University, Mr.Elias Oumer, along with higher officials of the University had a meeting with the USAID delegate and the Somali Regional State Humanitarian Coordinator, Dr.Tajudin. During this meeting, all parties reached consensus on the importance of involving Jigjiga University in Humanitarian project development and implementation activities in the Somali regional state. \r\nThe president of the University highlighted that now is the time for all humanitarian actors to check what worked well and did not instead of repeating the same approach', 'uploads/17n1.jpg', 'NIL', 0, '2019-06-09 17:37:49', '2019-06-09 17:37:49', 0),
(18, 'JJUINF18', 1, 4, 'Jigjiga University in collaboration with the Swiss Tropical and Public Health Institute', 'Jigjiga University in collaboration with the Swiss Tropical and Public Health Institute Armauer Hansen Research Institute (AHRI) has finalized the establishment of a world-class quality Medical Laboratory', 'uploads/18n1.jpg', 'NIL', 0, '2019-06-09 17:39:57', '2019-06-09 17:39:57', 0),
(19, 'JJUINF19', 1, 3, 'Jigjiga University in collaboration with Spanish OMF surgery', 'Jigjiga University in collaboration with Spanish OMF surgery and Pathology of Complutence University of Madrid are providing Oral and Maxillofacial surgery for local communities at Shultan Sheikh Hasen Yabari Hospital (Referal Hospital -JJU ). \r\nJaamacada Jigjiga oo lakaashaneysa dhakhaatir kasocota Jaamacada Madrid ee dalka Spain aya Qaliin bilaash ah oo todobaad soconaya usameyneysa bulshada degaanka. Waxeyna kusameyneysa Hosbitaalka weyn ee Jaamacada Jigjiga ee Sultan Sheikh Xasan Yabare \r\náŒ…áŒáŒ…áŒ‹ á‹©áŠ’á‰¨áˆ­áˆ²á‰² áŠ¨áˆ›á‹µáˆªá‹µ á‹©áŠ’á‰¨áˆ­áˆ²á‰² áŒ‹áˆ­ á‰ áˆ˜á‰°á‰£á‰ áˆ­ áˆˆáŠ­áˆáˆ‰ áˆ…á‰¥áˆ¨á‰°áˆ°á‰¥ áŠáƒ á‹¨á‰€á‹¶ áˆ…áŠ­áˆáŠ“ áŠ áŒˆáˆáŒáˆŽá‰µ á‰ áˆ˜áˆµáŒ á‰µ áˆˆá‹­ á‹­áŒˆáŠ›áˆ', 'uploads/19n1.jpg', 'NIL', 0, '2019-06-09 17:41:11', '2019-06-09 17:41:11', 0),
(20, 'JJUINF20', 1, 4, 'Today JJU made MoU with Two Spanish OMF surgery and Pathology', 'Today JJU made MoU with Two Spanish OMF surgery and Pathology of Complutence University of Madrid in President Office\r\nThis MoU will enable Jigjiga University Sultan Sheikh Hasen Yabare Referal Hospital to utilise the spanish doctors for Oral and Maxillofacial sugery activities.\r\nThe MoU will be in force for the next three years and subject to revision of modification by mutual agreement at annual review meeting.\r\nMoU was exchanged between Mr.Elias Oumer Ibrahim (President) and OMF sugery and Pathology team Of Complutence university and Mr.Salah Hussein(ADVP), Dr.Abdiruf Hassan(ARVP) Dr.Abdulahi Hussein (CEO of SSHY Referal Hospital),Mr/Tingirtu Tekele(Director-International Relations Officer) Dr.P.N.Rao(Academic&Research Affairs -International Relations Office) Mr.Ahmed Arab (APDPD) were present in the program.', 'uploads/20n1.jpg', 'NIL', 0, '2019-06-09 17:42:47', '2019-06-09 17:42:47', 0),
(23, 'JJUINF23', 2, 3, 'Jigjiga University, FDRE Ministry of Innovation and Technology, and Somali Regional State signed a t', 'Jigjiga University, FDRE Ministry of Innovation and Technology, and Somali Regional State signed a tripartite agreement to launch a livestock transformation project (LTP). The project will transform cattle milk production from scarce to surplus and improve the livelihood of pastoralists and agro-pastoralists in Somali Regional State in three areas. Livestock transformation project (LTP) focuses on cattle breed, feed and healthcare improvement; as well as enhancing cattle husbandry practices and milk market value chains. The Institute of Pastoral and Agro-pastoral Studies (IPADS), JJU will coordinate the overall implementation of the livestock transformation project (LTP).', 'uploads/23agg.jpg', 'NIL', 0, '2019-07-16 22:53:16', '2019-07-16 22:53:16', 0),
(22, 'JJUINF22', 2, 3, 'THE APPROACH WHICH STOPPED THE FIRE, A BENCHMARK FOR ETHIOPIAN HIGHER INSTITUTIONS', 'According to the definition of fire in Merriam-Webster dictionary, fire is not only the light and the heat and especially the flame produced by burning but it is also used to express depth of feeling. Of all the age stages humans go through, they possess their deepest feelings or emotions when they are in their youth age. Many sources acknowledge that this deep feeling of youth had a great contribution to the transition of power the Federal Democratic Republic of Ethiopia made in the year 2010 EC. However, the fire which made the change of power possible through different movements become a great challenge for Ethiopian Higher Institutions when they have accepted first year students in the academic year of 2011EC, and Jigjiga University is not an exception in this case. \r\nBecause of the ethnic conflicts which were happening throughout Ethiopia, the hate speeches which were flooding in the social media and the anti-peace elements who instigate the youth for violence, the youth with all', 'uploads/22mus.jpg', 'NIL', 0, '2019-07-08 23:22:36', '2019-07-08 23:22:36', 0),
(24, 'JJUINF24', 2, 3, '1st Annual Conference on â€œResearch and Community Service of Jigjiga University: Achievements, Chal', '1st Annual Conference on â€œResearch and Community Service of Jigjiga University: Achievements, Challenges and Way-Forwardâ€ July 16-17, 2019 started today at Universityâ€™s meeting hall. Colleges and Institutes presented and demonstrated their work. The conference focuses on future JJU research and community service projects, taking into account progress made so far and challenges met. During the opening session of the conference, higher delegation officials from FDRE Ministry of Innovation and Technology, his Excellency Dr. Enginer Getahun Mekuria (Minister) and his Excellency Jemal Bakar (Deputy Minister) were participated.', 'assets/images/tmpnewspic.jpg', 'NIL', 0, '2019-07-16 22:56:23', '2019-07-16 22:56:23', 0),
(25, 'JJUINF25', 9, 3, 'Digital literacy', 'JIGJIGA University 	\r\nDigital literacy training report \r\nIntroduction\r\nDigital Literacy as a Community Service\r\nDigital literacy is important because we live in a tech-dependent world. The internet, search engines, email programs, blogs, and online videos have all contributed to our expanding knowledge and capabilities. Digital literacy is the ability of the community to use information and communication technologies (ICT) to find, evaluate, create, and communicate information. This requires the community to have both cognitive and technical skills. Digital literacy will help in bridging the digital divide within the community. Creating better national connectivity through various government development initiatives is one of the major requirements for digital literacy.  In addition to utilizing the existing connectivity, basic computer skills and high-level cognitive skills for finding, evaluating, ethically using, creating, and sharing information are required for digitally inclusive', 'uploads/25kkkkkk.jpg', 'NIL', 0, '2019-09-08 10:58:57', '2019-09-08 10:58:57', 0),
(27, 'JJUINF27', 10, 4, 'Jigjiga University Signs MOU with Dexis Consulting Group to Implement a Project that Promotes  Religious and Ethnic Tolerance in Ethiopia', 'Jigjiga University( represented by Dr.Abdi Ahmed, acting president of the univesity)has signed MOU with Dexis Consulting Group(based in Washington and represented by Bronwen Morrison, Senior Director of the project) to partner in the implementation of a project that promotes religious and ethnic tolerance in Ethiopia. Jimma University is also the partner of the project for the pilot period of the project where it\'s implementation is only limited to Somali and Oromia regional States. The goal of the project is to identify and counter dangerous speech on social media within both regions.\r\nJigjiga University will serve as a resource partner to the Dexis team in implementation of a successful program. Jigjiga University will support Dexis in hosting a successful program research platform, support quarterly meeting of the working group on dangerous speech and help facilitate the creation of peace messaging to build tolerance within and across ethnic and religious cleavages in Ethiopia.\r\nDexis will provide technical assistance and capacity building on the Universities\' IT platform utilized to identify dangerous speech within the social media landscape to a select group of certain number of students and the department heads from Journalism and Communications department and school of Computer Science. Moreover, Dexis will provide technical assistance and capacity building with the student working group to develop and disseminate counter dangerous speech messages through social mesia channels.\r\nJigjiga University will continue to partner with organizations and Institutions that will contribute to the peace and development of Ethiopia.', 'uploads/profile.png', 'NIL', 1, '2019-10-12 12:30:22', '2019-10-12 12:30:22', 0),
(28, 'JJUINF28', 10, 3, 'Ethiopian Higher Education Law School Deans\' Consortium  Meets at Jigjiga University', 'Members of Ethiopian Higher Education Law School Deanâ€™s Consortium had two-days meeting at Jigjiga University to discuss on Legal education reform program. During the meeting, a total of thirty participants discussed on curriculum revision, administration of exit exam for law students and externship.\r\nThe meeting was jointly organized by Jigjiga University (through its school of Law) and Federal Research and Training Institute for Justice and Law. The chairperson of the institute, Mr.Abeba Assefa, thanks Jigjiga University for hosting the meeting in a very short notice. Mr. Abeba has also mentioned that the Federal Research and Training Institute for Justice and Law has recently taken the role of Legal education reform program from Higher Education Strategic Center and the institute he leads will strive to make a difference in the sector. Mr.Abdirahman Mektel, director of the academic vice president office at Jigjiga University, on his behalf has encouraged the consortium to focus on country level improvements on Justice and national integrity.', 'uploads/profile.png', 'NIL', 1, '2019-10-12 13:20:04', '2019-10-12 13:20:04', 0),
(29, 'JJUINF29', 1, 3, 'Update on Presidential Election -2019 ', 'Based on directive on selection and appointment of leaders and managers in higher education institutes in ethiopia. kindly go through the attachments linked below', 'uploads/p1.jpg', 'NIL', 1, '2019-10-31 15:52:23', '2019-10-24 15:52:23', 0),
(30, 'JJUINF30', 10, 1, 'New club has been started in jigjiga university', 'kjfjvfdkjvjkfdvkjfvnkfnvnfkvnkfjnvknfnvkjfvkfkv\r\nfjkjvnkjfnvkjnnvkjvkkvnkfvkfkvkfjvkj <br><strong><a href=\'http://www.google.com\'>: ATTACHMENT :</a></strong>', 'uploads/30car2.jpg', 'NIL', 0, '2019-11-11 15:37:48', '2019-11-11 15:37:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `web_lostgoods`
--

CREATE TABLE `web_lostgoods` (
  `lostid` int(11) NOT NULL,
  `lostno` varchar(50) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `iteminfo` varchar(1000) DEFAULT NULL,
  `pic` varchar(1000) DEFAULT NULL,
  `remarks` varchar(1000) DEFAULT NULL,
  `feedback` varchar(1000) DEFAULT NULL,
  `fbdate` datetime DEFAULT NULL,
  `solved_date` datetime DEFAULT NULL,
  `recstatus` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `assigned_to` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `web_lost_interaction`
--

CREATE TABLE `web_lost_interaction` (
  `intid` int(11) NOT NULL,
  `lostid` int(11) DEFAULT NULL,
  `message` varchar(5000) DEFAULT NULL,
  `message_by` int(11) DEFAULT NULL,
  `msg_reply` varchar(5000) DEFAULT NULL,
  `msg_to` int(11) DEFAULT NULL,
  `msg_date` datetime DEFAULT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `recstatus` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `web_lost_link`
--

CREATE TABLE `web_lost_link` (
  `linkid` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `lostid` int(11) DEFAULT NULL,
  `descr` varchar(100) DEFAULT NULL,
  `recstatus` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `web_main_categories`
--

CREATE TABLE `web_main_categories` (
  `main_catid` int(11) NOT NULL,
  `main_cat_name` varchar(1000) DEFAULT NULL,
  `recstatus` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_main_categories`
--

INSERT INTO `web_main_categories` (`main_catid`, `main_cat_name`, `recstatus`, `created_date`) VALUES
(1, 'News', 1, '2018-05-15 17:12:30'),
(2, 'Events', 1, '2018-05-15 17:49:56'),
(3, 'Jobs', 1, '2018-06-04 14:57:24');

-- --------------------------------------------------------

--
-- Table structure for table `web_slideinfo`
--

CREATE TABLE `web_slideinfo` (
  `slideid` int(11) NOT NULL,
  `slide_title` varchar(500) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `pic` varchar(1000) DEFAULT NULL,
  `recstatus` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_slideinfo`
--

INSERT INTO `web_slideinfo` (`slideid`, `slide_title`, `description`, `pic`, `recstatus`, `created_date`) VALUES
(1, 'NIL', 'NIL', '', 1, '2018-05-17 10:23:29'),
(2, 'Three out of five national best practices from JJU', 'FDRE Ministry of Education revealed that five best practices are selected from all universities, out of which three are from Jigjiga University.', 'slides/nivo/2.jpg', 1, '2018-05-17 10:23:29'),
(3, 'Well spaced classroom buildings', 'Jigjiga university is equipped with spacious and best class rooms and laboratories.', '', 1, '2018-05-17 10:23:29'),
(4, 'Jigjiga University Library', 'Providing sources of information,necessary for faculty members, students and staff, as well as local community.', '', 1, '2018-05-17 10:23:29'),
(5, 'ddd dddddd dfeee', '', '', 1, '2018-05-17 10:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `web_test`
--

CREATE TABLE `web_test` (
  `hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_test`
--

INSERT INTO `web_test` (`hash`) VALUES
('e10adc3949ba59abbe56e057f20f883e'),
('123456');

-- --------------------------------------------------------

--
-- Table structure for table `web_users`
--

CREATE TABLE `web_users` (
  `userid` int(11) NOT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `passwrd` varchar(50) DEFAULT NULL,
  `fname` varchar(40) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  `recstatus` int(11) DEFAULT NULL,
  `logstatus` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `descr` varchar(20) DEFAULT NULL,
  `photo` varchar(500) NOT NULL,
  `squest` varchar(50) NOT NULL,
  `sanswer` varchar(50) NOT NULL,
  `gender` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_users`
--

INSERT INTO `web_users` (`userid`, `uname`, `passwrd`, `fname`, `phone`, `email`, `user_type`, `recstatus`, `logstatus`, `created_date`, `descr`, `photo`, `squest`, `sanswer`, `gender`) VALUES
(1, 'webmaster', 'd0656b8c2126925d1cff92637ffb492a', 'Pradeep', '904243771', 'abpradeep@jju.edu.et', 'Webmaster', 1, '2019-11-11 14:24:26', '0000-00-00 00:00:00', 'NIL', 'uploads/1deep.jpg', 'PIN', 'NIL', 'M'),
(2, 'webadmin', '9044065317ab6accfd3722fed33d1f00', 'Jemal Ali', '911804641', 'info@jju.edu.et', 'Webadmin', 0, '2019-11-07 23:21:16', '0000-00-00 00:00:00', 'NIL', 'uploads/2s200_jemal.ali.jpg', 'PIN', 'NIL', 'M'),
(3, 'apo', '9044065317ab6accfd3722fed33d1f00', 'Dr. Elyas Abdulahi', '913076588', 'apo@jju.edu.et', 'Webdir', 1, '2019-11-11 14:23:44', '0000-00-00 00:00:00', 'NIL', 'assets/images/profile.png', 'PIN', 'NIL', 'M'),
(4, 'guest', '0192023a7bbd73250516f069df18b500', 'Guest', '123456789', 'guest@gmail.com', 'Guest', 0, '2019-10-24 14:42:31', '0000-00-00 00:00:00', 'NIL', 'assets/images/profile.png', 'PIN', 'NIL', 'M'),
(10, 'Kemal', 'f6a4438f6221fd3f50ad82d58aab267b', 'kemal hashi', '0915330781', 'tomohay51@gmail.com', 'Webadmin', 1, '2019-11-12 14:49:03', '2019-04-16 14:21:56', 'NIL', 'uploads/10kemal.jpg', 'PIN', 'NIL', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `web_vhub`
--

CREATE TABLE `web_vhub` (
  `vid` int(11) NOT NULL,
  `vtitle` varchar(100) DEFAULT NULL,
  `vpath` varchar(1000) DEFAULT NULL,
  `recstatus` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_vhub`
--

INSERT INTO `web_vhub` (`vid`, `vtitle`, `vpath`, `recstatus`, `created_date`) VALUES
(1, 'JJU', '1', 0, '2019-11-04 16:13:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expat_contract`
--
ALTER TABLE `expat_contract`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `expat_departments`
--
ALTER TABLE `expat_departments`
  ADD PRIMARY KEY (`deptid`);

--
-- Indexes for table `expat_depend`
--
ALTER TABLE `expat_depend`
  ADD PRIMARY KEY (`depid`);

--
-- Indexes for table `expat_edudet`
--
ALTER TABLE `expat_edudet`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `expat_emergency`
--
ALTER TABLE `expat_emergency`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `expat_emptax`
--
ALTER TABLE `expat_emptax`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `expat_immig`
--
ALTER TABLE `expat_immig`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `expat_orgdet`
--
ALTER TABLE `expat_orgdet`
  ADD PRIMARY KEY (`orgid`);

--
-- Indexes for table `expat_personal`
--
ALTER TABLE `expat_personal`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `expat_role`
--
ALTER TABLE `expat_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `expat_users`
--
ALTER TABLE `expat_users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `web_categories`
--
ALTER TABLE `web_categories`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `web_galleryinfo`
--
ALTER TABLE `web_galleryinfo`
  ADD PRIMARY KEY (`galid`);

--
-- Indexes for table `web_info`
--
ALTER TABLE `web_info`
  ADD PRIMARY KEY (`infoid`);

--
-- Indexes for table `web_lostgoods`
--
ALTER TABLE `web_lostgoods`
  ADD PRIMARY KEY (`lostid`);

--
-- Indexes for table `web_lost_interaction`
--
ALTER TABLE `web_lost_interaction`
  ADD PRIMARY KEY (`intid`);

--
-- Indexes for table `web_lost_link`
--
ALTER TABLE `web_lost_link`
  ADD PRIMARY KEY (`linkid`);

--
-- Indexes for table `web_main_categories`
--
ALTER TABLE `web_main_categories`
  ADD PRIMARY KEY (`main_catid`);

--
-- Indexes for table `web_slideinfo`
--
ALTER TABLE `web_slideinfo`
  ADD PRIMARY KEY (`slideid`);

--
-- Indexes for table `web_users`
--
ALTER TABLE `web_users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `web_vhub`
--
ALTER TABLE `web_vhub`
  ADD PRIMARY KEY (`vid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
