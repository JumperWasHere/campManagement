-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 11:53 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `coursedetails`
--

CREATE TABLE `coursedetails` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(300) NOT NULL,
  `coursecode` varchar(30) NOT NULL,
  `exam_date` date NOT NULL,
  `exam_location` varchar(300) NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursedetails`
--

INSERT INTO `coursedetails` (`course_id`, `course_name`, `coursecode`, `exam_date`, `exam_location`, `created_by`, `modified_by`, `modified_date`) VALUES
(22, 'MOTIVATIONAL CAMP', 'Port Dickson', '2019-11-07', 'aaaaaa', 0, 0, '0000-00-00'),
(26, 'CLUB CAMP', 'Klang', '2019-11-07', 'aaaa', 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(5) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `name`, `pass`) VALUES
(1012, 'ram', '1234'),
(1013, 'ram', '1234'),
(1014, 'aa', '1234'),
(1015, 'aa', '1234'),
(1016, 'aa', '1234'),
(1017, '', ''),
(1018, 'atiamatrawi@gmail.com', '1234'),
(1019, '', ''),
(1020, 'atiabaik@gmail.com', '1234'),
(1021, 'atiabaik@gmail.com', ''),
(1022, 'atia@gmail.com', '1234'),
(1023, 'atiabaik1@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `parentdetail`
--

CREATE TABLE `parentdetail` (
  `id` int(5) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `phoneno` varchar(10) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `street_name` varchar(500) DEFAULT NULL,
  `state` varchar(500) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `ic_number` varchar(20) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parentdetail`
--

INSERT INTO `parentdetail` (`id`, `firstname`, `lastname`, `phoneno`, `name`, `street_name`, `state`, `city`, `postcode`, `ic_number`, `pass`) VALUES
(1003, 'Syed', 'Zaquan', '0139901824', 'syedzaquan@gmail.com', 'Titiwangsa', 'Kuala Lumpur', 'Kuala Lumpur', '54000', '950113115357', '12345'),
(1004, 'Tuan', 'Zahidah', '0199249337', 'tuanzahidah@gmail.com', 'Jalan Lumut', 'Kuala Lumpur', 'Kuala Lumpur', '54000', '660714115617', '12345'),
(1005, 'atia', 'mat rawi', '0112195174', 'muhammadhzwan@gmail.com', 'No.2A Jalan SP 1/3 Seri Pristana', 'Selangor', 'Sungai Buloh', '47000', '960409115224', '12345'),
(1006, 'atia', 'mat rawi', '0112195174', 'atiamatrawi@gmail.com', 'No.2A Jalan SP 1/3 Seri Pristana', 'Selangor', 'Sungai Buloh', '47000', '1234567899', '12345'),
(1007, 'aaa', 'Mat Rawi', '12345', 's@gmail.com', '2ss', 'TERENGGANU', 'JERTEHa', '22000', '1234', '1234'),
(1008, 'aaa', 'Mat Rawi', '12345a', 'musa@gmail.com', '2ss', 'TERENGGANU', 'JERTEHa', '22000', '1234', '1234'),
(1009, 'ass', 'Mat Rawi', '12345', 'atia@gmail.com', '2ss', 'malaysia', 'JERTEHa', '22000', '1234', '1234'),
(1010, 'sasf', 'Mat Rawi', '12345', 'atiabaik@gmail.com', '2ss', 'TERENGGANU', 'JERTEHa', '22000', '1234', '1234'),
(1011, 'aaa', 'Mat Rawi', '12345', 'ram', '2ss', 'TERENGGANU', 'JERTEH', '22000', '1234', '1234'),
(1012, 'aaa', 'Mat Rawi', '12345', 'ram', '2ss', 'TERENGGANU', 'JERTEHa', '22000', '1234', '1234'),
(1013, 'atia', 'helmi', '', '', '', '', '', '', '', ''),
(1014, 'sf', 'mat rawi', '12345', 'aa', '2ss', 'TERENGGANU', 'JERTEHa', '22000', '1234', '1234'),
(1015, 'sf', 'mat rawi', '12345', 'aa', '2ss', 'TERENGGANU', 'JERTEHa', '22000', '1234', '1234'),
(1016, 'sf', 'mat rawi', '12345', 'aa', '2ss', 'TERENGGANU', 'JERTEHa', '22000', '1234', '1234'),
(1017, '', '', '', '', '', '', '', '', '', ''),
(1018, 'ATIA', 'MAT RAWI', '0115502622', 'atiamatrawi@gmail.com', '1/27', 'TERENGGANU', 'JERTEH', '22000', '9660409115224', '1234'),
(1019, '', '', '', '', '', '', '', '', '', ''),
(1020, 'NOOR', 'HANAN', '111026789', 'atiabaik@gmail.com', 'SETAPAK', 'malaysia', 'SETAPAK', '22000', '9660409115224', '1234'),
(1021, 'atia', 'Mat Rawi', '111026789', 'atiabaik@gmail.com', 'aa, aa', 'malaysia', 'aa', '22000', '9660409115224', ''),
(1022, 'A', 'A', '111026789', 'atiabaik@gmail.com', '3293', 'malaysia', 'aa', '22000', '12', '1234'),
(1023, 'atia', 'Mat Rawi', '1026789', 'atiabaik1@gmail.com', 'aa, aa', 'malaysia', 'aa', '22000', '12', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `paymentId` int(11) NOT NULL,
  `parentsId` int(11) NOT NULL,
  `paymentType` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `paymentValue` float NOT NULL,
  `paymentDate` datetime NOT NULL,
  `firstName` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `lastName` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `contact` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `paymentSlip` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `paymentApproved` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`paymentId`, `parentsId`, `paymentType`, `paymentValue`, `paymentDate`, `firstName`, `lastName`, `contact`, `email`, `paymentSlip`, `paymentApproved`) VALUES
(3, 1, 'registration', 100, '2019-10-31 00:00:00', 'ATIA', 'MAT RAWI', '1234567', 'atiamatrawi@gmail.com', 'screenshot.png', 1),
(4, 1, 'donation', 100, '2019-10-31 00:00:00', 'ATIA', 'MAT RAWI', '1234567', 'atiamatrawi@gmail.com', 'screenshot.png', 1),
(5, 1018, 'registration', 100, '2019-10-31 00:00:00', 'ATIA', 'MAT RAWI', '1234567', 'atiamatrawi@gmail.com', '45373_147351345294649_7537947_n-234x369.jpg', 1),
(7, 1018, 'donation', 150, '2019-10-31 00:00:00', 'ATIA', 'MAT RAWI', '1234567', 'atiamatrawi@gmail.com', 'secondyear-698x465.jpg', 1),
(9, 1018, 'donation', 50, '2019-10-31 00:00:00', 'atia', 'Mat Rawi', '1026789', 'atiabaik@gmail.com', 'Resume Hazwan(1).pdf', 0),
(10, 1020, 'registration', 100, '2019-10-31 00:00:00', 'A', 'A', '111026789', 'atiabaik@gmail.com', 'Project Card ATIA- A4 Size Laminated.pptx', 1),
(11, 1020, 'donation', 100, '2019-10-31 00:00:00', 'atia', 'Mat Rawi', '1026789', 'atiabaik@gmail.com', 'Project Card ATIA- A4 Size Laminated.pptx', 1),
(12, 1018, 'donation', 100, '2019-11-30 00:00:00', 'atia', 'Mat Rawi', '1026789', 'atiabaik@gmail.com', 'kimi.pdf', 0),
(13, 1022, 'registration', 100, '2019-11-30 00:00:00', 'atia', 'Mat Rawi', '1026789', 'atiabaik@gmail.com', 'petronas form.pdf', 1),
(14, 1018, 'donation', 100, '2019-11-30 00:00:00', 'atia', 'Mat Rawi', '1026789', 'atiabaik@gmail.com', 'thanks-for-watching-animation-1.gif', 1),
(15, 1018, 'monthly', 50, '2019-11-30 00:00:00', 'atia', 'Mat Rawi', '1026789', 'atiabaik@gmail.com', 'Tadika Muhammadi Preschool System Chapter 3 (plagiarism).pdf', 0),
(16, 1018, 'donation', 100, '2019-11-30 00:00:00', 'atia', 'Mat Rawi', '1026789', 'atiabaik@gmail.com', 'Gambar Passport.JPG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentId` int(15) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `fatherName` varchar(50) NOT NULL,
  `motherName` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `permanentAddress` varchar(150) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentId`, `firstName`, `lastName`, `fatherName`, `motherName`, `birthdate`, `gender`, `dept`, `permanentAddress`, `phone`, `email`) VALUES
(1014, 'abdullah', 'helmi', 'Musa', 'Fatimah', '2001-12-04', 'MALE', '6 years', ' Besut terengganu', '01119305910', 'musa@gmail.com'),
(1015, 'atia', 'mat rawi', 'mat rawi', 'Fatimah', '2000-08-08', 'FEMALE', '6 years', 'ewrtyui', '1234567', 'ali@gmail.com'),
(1016, 'nurul', 'farah', 'said', 'Fatimah', '2000-05-09', 'MALE', '5 years', 'wertyui', '98765432187654', 'ali@gmail.com'),
(1017, 'abdullah', 'MUNAWIR', 'said', 'shahida', '2019-10-23', 'MALE', '5 years', ' 2ss  22000  JERTEHa  TERENGGANU', '12345', 'ram@gmail.com'),
(1018, 'abdullah', 'helmi', 'mat rawi', 'shahida', '2001-01-01', 'MALE', '5 years', ' 1/27  22000  JERTEH  TERENGGANU', '0115502622', 'atiamatrawi@gmail.com'),
(1019, 'HELMI', 'AHMAD', 'Musa', 'INA', '2005-12-03', 'FEMALE', '5 years', ' SETAPAK  22000  SETAPAK  malaysia', '111026789', 'atiabaik@gmail.com'),
(1021, 'Farhana', 'Najwa', 'musa', 'atia Mat Rawi', '2000-01-11', 'FEMALE', '6 years', ' SETAPAK  22000  SETAPAK  malaysia', '111026789', 'atiabaik@gmail.com'),
(1022, 'noor', 'atia', 'mat rawi', 'atia Mat Rawi', '2000-01-01', 'atia Mat R', '5 years', 'aa, aa', '1026789', 'atiabaik@gmail.com'),
(1023, 'Abdullah', 'Helmi', 'mat rawi', 'atia Mat Rawi', '2000-01-01', 'MALE', '5 years', 'aa, aa', '1026789', 'atiabaik@gmail.com'),
(1024, 'Afifa', 'hanan', 'AHMAD', 'atia Mat Rawi', '2000-11-13', 'FEMALE', '6 years', ' 1/27  22000  JERTEH  TERENGGANU', '0115502622', 'atiamatrawi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetail`
--

CREATE TABLE `studentdetail` (
  `studentId` int(15) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `fatherName` varchar(50) NOT NULL,
  `motherName` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dept` varchar(15) NOT NULL,
  `permanentAddress` varchar(150) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdetail`
--

INSERT INTO `studentdetail` (`studentId`, `firstName`, `lastName`, `fatherName`, `motherName`, `birthdate`, `gender`, `dept`, `permanentAddress`, `phone`, `email`, `id`) VALUES
(1014, 'abdullah', 'helmi', 'Musa', 'Fatimah', '2001-12-04', 'MALE', '6 years', ' Besut terengganu', '01119305910', 'musa@gmail.com', 0),
(1015, 'atia', 'mat rawi', 'mat rawi', 'Fatimah', '2000-08-08', 'FEMALE', '6 years', 'ewrtyui', '1234567', 'ali@gmail.com', 0),
(1016, 'nurul', 'farah', 'said', 'Fatimah', '2000-05-09', 'MALE', '5 years', 'wertyui', '98765432187654', 'ali@gmail.com', 0),
(1017, 'atia', 'mat rawi', 'AHMAD', 'laila', '2000-01-01', 'MALE', '5 years', ' 2ss  22000  JERTEHa  TERENGGANU', '12345', 'ram@gmail.com', 1013),
(1026, 'HELMI', 'AHMAD', 'Musa', 'INA', '2005-12-03', 'FEMALE', '5 years', ' SETAPAK  22000  SETAPAK  malaysia', '111026789', 'atiabaik@gmail.com', 1020),
(1027, 'Farhana', 'Najwa', 'mat rawi', 'shahida', '2001-02-01', 'FEMALE', '6 years', ' 1/27  22000  JERTEH  TERENGGANU', '0115502622', 'atiamatrawi@gmail.com', 1018),
(1029, 'noor', 'atia', 'mat rawi', 'atia Mat Rawi', '2000-01-01', 'atia Mat R', '5 years', 'aa, aa', '1026789', 'atiabaik@gmail.com', 1022),
(1030, 'Abdullah', 'Helmi', 'mat rawi', 'atia Mat Rawi', '2000-01-01', 'MALE', '5 years', 'aa, aa', '1026789', 'atiabaik@gmail.com', 1018),
(1031, 'Afifa', 'hanan', 'AHMAD', 'atia Mat Rawi', '2000-11-13', 'FEMALE', '6 years', ' 1/27  22000  JERTEH  TERENGGANU', '0115502622', 'atiamatrawi@gmail.com', 1018);

-- --------------------------------------------------------

--
-- Table structure for table `tblposts`
--

CREATE TABLE `tblposts` (
  `id` int(11) NOT NULL,
  `PostTitle` longtext DEFAULT NULL,
  `PostDetails` longtext CHARACTER SET utf8 DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Is_Active` int(1) DEFAULT NULL,
  `PostUrl` mediumtext DEFAULT NULL,
  `PostImage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposts`
--

INSERT INTO `tblposts` (`id`, `PostTitle`, `PostDetails`, `PostingDate`, `UpdationDate`, `Is_Active`, `PostUrl`, `PostImage`) VALUES
(16, 'TADIKA MUHAMMADI SPORT DAY !', 'WOW! What an exciting and fun time was had by TADIKA MUHAMMADI in their Early Years’ Sports Day. All the children arrived in their brightly coloured red, green, blue, yellow, orange, white clothes representing their teams. They all sat excited under the gazebos ready for their big chance to show off some of the skills that they have practised this term.', '2019-08-06 10:05:01', NULL, 1, 'TADIKA-MUHAMMADI-SPORT-DAY-!', 'cd4eeead21be9941ac8f27fdb334b960.jpg'),
(18, 'MERDEKA CELEBRATION DAY', 'Happy Independence Day, Malaysia!\r\n\r\nSharing some of the photos of our kids, captured during our recent talent competition â€“ Alif Ceria Kids Got Talent 2016, held at the Auditorium Kompleks Kejiranan Presint 16 on 24 August 2016.\r\n\r\n69 kids from all four centres took part in this event, competing in 6 categories â€“ Reading, Hafazan, Storytelling, Poetry Recital, Singing and Show & Tell, under the theme of MERDEKA! Well done kids.!!', '2019-10-22 05:47:13', NULL, 1, 'MERDEKA-CELEBRATION-DAY', 'd2fa1a0875b69063c995a6a733d8b3d2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `teacherIC` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `pass`, `teacherIC`) VALUES
(1, 'atia', '123', 123),
(2, 'Atia', '1234', 124);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timetableId` int(10) NOT NULL,
  `id` bigint(12) NOT NULL,
  `year` varchar(30) NOT NULL,
  `day` varchar(30) NOT NULL,
  `slot1` varchar(20) NOT NULL,
  `slot2` varchar(20) NOT NULL,
  `slot3` varchar(20) NOT NULL,
  `slot4` varchar(20) NOT NULL,
  `slot5` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timetableId`, `id`, `year`, `day`, `slot1`, `slot2`, `slot3`, `slot4`, `slot5`) VALUES
(3, 0, '5 years', 'Monday', 'BAHASA MELAYU', 'ENGLISH', 'PENDIDIKAN SOSIAL', 'BAHASA MELAYU', ''),
(4, 0, '5 years', 'Monday', 'BAHASA MELAYU', 'ENGLISH', 'PENDIDIKAN SOSIAL', 'BAHASA MELAYU', ''),
(5, 0, '5 years', 'Tuesday', 'MATEMATIK', 'PENDIDIKAN SOSIAL', 'REHAT', 'PENDIDIKAN SOSIAL', 'REHAT'),
(6, 0, '6 years', 'Monday', 'REHAT', 'MATEMATIK', 'BAHASA MELAYU', 'MATEMATIK', 'BAHASA MELAYU'),
(7, 0, 'Class 6', 'Saturday', 'REHAT', 'MATEMATIK', 'BAHASA MELAYU', 'MATEMATIK', 'BAHASA MELAYU'),
(8, 0, '6 years', 'Tuesday', 'BAHASA MELAYU', 'BAHASA MELAYU', 'REHAT', 'MATEMATIK', 'MATEMATIK'),
(9, 0, 'Class 6', 'Tuesday', 'BAHASA MELAYU', 'MATEMATIK', 'MATEMATIK', 'MATEMATIK', 'MATEMATIK'),
(10, 0, 'Class 6', 'Monday', 'BAHASA MELAYU', 'BAHASA MELAYU', 'BAHASA MELAYU', 'BAHASA MELAYU', 'BAHASA MELAYU'),
(11, 0, '6 years', 'Monday', 'BAHASA MELAYU', 'BAHASA MELAYU', 'BAHASA MELAYU', 'BAHASA MELAYU', 'BAHASA MELAYU'),
(12, 2, '5 years', 'Friday', 'BAHASA MELAYU', 'BAHASA MELAYU', 'REHAT', 'BAHASA MELAYU', 'BAHASA MELAYU'),
(13, 2, '5 years', 'Wednesday', 'MATEMATIK', 'MATEMATIK', 'REHAT', 'MATEMATIK', 'MATEMATIK'),
(14, 2, '5 years', 'Thursday', 'MATEMATIK', 'MATEMATIK', 'REHAT', 'MATEMATIK', 'MATEMATIK'),
(15, 2, '6 years', 'Monday', 'MATEMATIK', 'ENGLISH', 'PENDIDIKAN SOSIAL', 'ENGLISH', 'ENGLISH'),
(16, 2, '6 years', 'Monday', 'MATEMATIK', 'ENGLISH', 'PENDIDIKAN SOSIAL', 'ENGLISH', 'ENGLISH'),
(17, 2, '6 years', 'Tuesday', 'BAHASA MELAYU', 'BAHASA MELAYU', 'BAHASA MELAYU', 'BAHASA MELAYU', 'BAHASA MELAYU'),
(18, 2, '6 years', 'Tuesday', 'BAHASA MELAYU', 'BAHASA MELAYU', 'REHAT', 'BAHASA MELAYU', 'BAHASA MELAYU'),
(19, 2, '5 years', 'Tuesday', 'BAHASA MELAYU', 'MATEMATIK', 'REHAT', 'PENDIDIKAN SOSIAL', 'ENGLISH'),
(20, 2, '6 years', 'Wednesday', 'ENGLISH', 'ENGLISH', 'REHAT', 'MATEMATIK', 'MATEMATIK'),
(21, 2, '6 years', 'Monday', 'ENGLISH', 'ENGLISH', 'REHAT', 'ENGLISH', 'ENGLISH'),
(22, 2, '6 years', 'Monday', 'ENGLISH', 'ENGLISH', 'REHAT', 'ENGLISH', 'ENGLISH'),
(23, 2, '5 years', 'Monday', 'BAHASA MELAYU', 'BAHASA MELAYU', 'REHAT', 'BAHASA MELAYU', 'BAHASA MELAYU'),
(24, 2, '6 years', 'Monday', 'BAHASA MELAYU', 'MATEMATIK', 'REHAT', 'MATEMATIK', 'MATEMATIK'),
(25, 2, '6 years', 'Thursday', 'BAHASA MELAYU', 'BAHASA MELAYU', 'REHAT', 'ENGLISH', 'ENGLISH'),
(26, 2, '6 years', 'Friday', 'PENDIDIKAN SOSIAL', 'PENDIDIKAN SOSIAL', 'REHAT', 'MATEMATIK', 'MATEMATIK'),
(27, 2, '6 years', 'Tuesday', 'BAHASA MELAYU', 'BAHASA MELAYU', 'REHAT', 'PENDIDIKAN SOSIAL', 'PENDIDIKAN SOSIAL'),
(28, 2, 'Class 6', 'Monday', 'BAHASA MELAYU', 'BAHASA MELAYU', 'REHAT', 'MATEMATIK', 'MATEMATIK'),
(29, 2, 'Class 5', 'Monday', 'MATEMATIK', 'MATEMATIK', 'REHAT', 'ENGLISH', 'ENGLISH'),
(30, 2, 'Class 5', 'Tuesday', 'PENDIDIKAN SOSIAL', 'PENDIDIKAN SOSIAL', 'REHAT', 'BAHASA MELAYU', 'BAHASA MELAYU'),
(31, 2, 'Class 5', 'Wednesday', 'ENGLISH', 'ENGLISH', 'REHAT', 'MATEMATIK', 'MATEMATIK'),
(32, 2, 'Class 5', 'Thursday', 'PENDIDIKAN SOSIAL', 'PENDIDIKAN SOSIAL', 'REHAT', 'BAHASA MELAYU', 'BAHASA MELAYU'),
(33, 2, 'Class 5', 'Friday', 'BAHASA MELAYU', 'BAHASA MELAYU', 'REHAT', 'PENDIDIKAN SOSIAL', 'ENGLISH'),
(34, 2, '6 years', 'Monday', 'PENDIDIKAN SOSIAL', 'PENDIDIKAN SOSIAL', 'REHAT', 'BAHASA MELAYU', 'BAHASA MELAYU'),
(35, 2, '6 years', 'Monday', 'ENGLISH', 'PENDIDIKAN SOSIAL', 'REHAT', 'PENDIDIKAN SOSIAL', 'PENDIDIKAN SOSIAL'),
(36, 0, '6 years', 'Thursday', 'BAHASA MELAYU', 'BAHASA MELAYU', 'REHAT', 'MATEMATIK', 'MATEMATIK'),
(37, 0, '6 years', 'Wednesday', 'ENGLISH', 'ENGLISH', 'REHAT', 'PENDIDIKAN SOSIAL', 'PENDIDIKAN SOSIAL'),
(38, 0, '6 years', 'Friday', 'PENDIDIKAN SOSIAL', 'PENDIDIKAN SOSIAL', 'REHAT', 'ENGLISH', 'ENGLISH'),
(39, 0, '6 years', 'Monday', 'ENGLISH', 'ENGLISH', 'REHAT', 'MATEMATIK', 'MATEMATIK'),
(40, 0, '5 years', 'Monday', 'ENGLISH', 'ENGLISH', 'REHAT', 'MATEMATIK', 'MATEMATIK'),
(41, 0, '5 years', 'Wednesday', 'PENDIDIKAN SOSIAL', 'PENDIDIKAN SOSIAL', 'REHAT', 'MATEMATIK', 'MATEMATIK'),
(42, 0, '5 years', 'Thursday', 'PENDIDIKAN SOSIAL', 'PENDIDIKAN SOSIAL', 'REHAT', 'BAHASA MELAYU', 'BAHASA MELAYU'),
(43, 0, '5 years', 'Friday', 'ENGLISH', 'ENGLISH', 'REHAT', 'MATEMATIK', 'MATEMATIK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursedetails`
--
ALTER TABLE `coursedetails`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_parentdetail` (`id`) USING BTREE;

--
-- Indexes for table `parentdetail`
--
ALTER TABLE `parentdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`paymentId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentId`);

--
-- Indexes for table `studentdetail`
--
ALTER TABLE `studentdetail`
  ADD PRIMARY KEY (`studentId`);

--
-- Indexes for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetableId`),
  ADD KEY `icLecturer` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coursedetails`
--
ALTER TABLE `coursedetails`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1024;

--
-- AUTO_INCREMENT for table `parentdetail`
--
ALTER TABLE `parentdetail`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1024;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `paymentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1025;

--
-- AUTO_INCREMENT for table `studentdetail`
--
ALTER TABLE `studentdetail`
  MODIFY `studentId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1032;

--
-- AUTO_INCREMENT for table `tblposts`
--
ALTER TABLE `tblposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timetableId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
