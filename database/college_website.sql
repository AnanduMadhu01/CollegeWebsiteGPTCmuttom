-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 03:54 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(40) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `NAME`, `Email`, `PASSWORD`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `administrative_staff`
--

CREATE TABLE `administrative_staff` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `DESIGNATION` varchar(100) NOT NULL,
  `QUALIFICATION` varchar(100) NOT NULL,
  `Now` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `alimninotification`
--

CREATE TABLE `alimninotification` (
  `id` int(11) NOT NULL,
  `notifications` varchar(2000) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alimninotification`
--

INSERT INTO `alimninotification` (`id`, `notifications`, `status`) VALUES
(1, 'Notificatios will display here', 'active'),
(15, 'GPTC Muttom', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_gallery`
--

CREATE TABLE `alumni_gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni_gallery`
--

INSERT INTO `alumni_gallery` (`id`, `image`, `Branch`, `status`) VALUES
(1, 'gptcmuttom.jpg', 'mechanical', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_registration`
--

CREATE TABLE `alumni_registration` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` int(11) NOT NULL,
  `YearOfPass` int(11) NOT NULL,
  `DOB` date NOT NULL,
  `Branch` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Profession` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `After_college` varchar(2000) NOT NULL,
  `Memories` varchar(2000) NOT NULL,
  `Aproval` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `anti_ragging_committee`
--

CREATE TABLE `anti_ragging_committee` (
  `SLNO` int(11) NOT NULL,
  `NAME` varchar(40) NOT NULL,
  `ADDRESS` varchar(40) NOT NULL,
  `DESIGNATION` varchar(40) NOT NULL,
  `Now` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anti_ragging_committee`
--

INSERT INTO `anti_ragging_committee` (`SLNO`, `NAME`, `ADDRESS`, `DESIGNATION`, `Now`) VALUES
(1, 'Geetha Devi R', 'Principal', 'Chairman', 'active'),
(2, 'Sajina K. Paulose  ', 'HOD Computer Engineering', 'Convener', 'active'),
(3, 'Padmakumar K', 'HOD in  Electrical & Electronics', 'Member', 'active'),
(4, 'M Karim', ' HOD in  Mechanical ', 'Member', 'active'),
(5, 'Santhosh Kumar T G', ' HOD in Civil', 'Member', 'active'),
(6, 'Anil Kumar V J ', 'Workshop Superintendant', ' Member', 'active'),
(7, 'Pyarilal K B', 'Lecturer in Mechanical', ' Member', 'active'),
(8, ' Rinku Joseph', ' Lecturer in Electronics', 'Member', 'active'),
(9, 'Jenis T Joy  ', '(Assistant Professor in Mathematics)', 'Member', 'active'),
(10, 'Rahul C  ', 'Workshop Instructor', ' Member', 'active'),
(11, 'Byju P Babu', ' Sub Inspector of Police , Muttom Police', 'Member', 'active'),
(12, 'M P Muhammedkutty', 'PTA Vice President', 'Member', 'active'),
(13, 'Ouseppachan Charakkunnam', ' Panchayat Member (Asst)', 'Member', 'active'),
(14, 'Adv. Albert Jose ', 'Panel Lawyer , Thodupuzha Bar Associatio', ' Member', 'active'),
(15, 'Joy Kizhakkel', ' Deepika District Reporter', 'Member', 'active'),
(16, 'Sajin P S ', 'Chairman College Union', ' Member', 'active'),
(17, 'First Year Class Representatives ', 'Students', 'Member', 'active'),
(18, 'Babu John B ', ' Senior Superintendant', ' Member', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `anti_ragging_squad`
--

CREATE TABLE `anti_ragging_squad` (
  `SLNO` int(11) NOT NULL,
  `NAME` varchar(40) NOT NULL,
  `ADDRESS` varchar(40) NOT NULL,
  `DESIGNATION` varchar(40) NOT NULL,
  `Now` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anti_ragging_squad`
--

INSERT INTO `anti_ragging_squad` (`SLNO`, `NAME`, `ADDRESS`, `DESIGNATION`, `Now`) VALUES
(1, 'Prakasan P ', 'HOD in Electronics', 'Member', 'active'),
(2, 'Jose James', '  Lecturer in Computer', 'Member', 'active'),
(3, 'Sandeep R ', 'Lecturer in Mechanical', 'Member', 'active'),
(4, 'Jyothis George', ' Lecturer in Civil', 'Member', 'active'),
(5, 'Sam T . George', 'Demonstrator Mechanical', 'Member', 'active'),
(6, 'Satheeshkumar B', ' Demonstrator Computer', 'Member', 'active'),
(7, 'Shibu P.R.', ' Trade Instructor', 'Member', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `civil`
--

CREATE TABLE `civil` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `DESIGNATION` varchar(100) NOT NULL,
  `QUALIFICATION` varchar(100) NOT NULL,
  `Now` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `committee_login`
--

CREATE TABLE `committee_login` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `COMMITTEE_NAME` varchar(100) NOT NULL,
  `DESIGNATION` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `Now` varchar(40) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(40) NOT NULL,
  `DESIGNATION` varchar(40) NOT NULL,
  `QUALIFICATION` varchar(50) NOT NULL,
  `Now` varchar(40) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department_head`
--

CREATE TABLE `department_head` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `Email_ID` varchar(100) NOT NULL,
  `DEPARTMENT` varchar(40) NOT NULL,
  `DESIGNATION` varchar(100) NOT NULL,
  `QUALIFICATION` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `Now` varchar(40) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `electrical`
--

CREATE TABLE `electrical` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `DESIGNATION` varchar(100) NOT NULL,
  `QUALIFICATION` varchar(100) NOT NULL,
  `Now` varchar(40) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `DESIGNATION` varchar(100) NOT NULL,
  `QUALIFICATION` varchar(100) NOT NULL,
  `Now` varchar(40) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `Id` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Id`, `Name`, `Status`) VALUES
(1, 'APJBlock.jpg', 'active'),
(2, 'gpc2.jpg', 'active'),
(3, 'gpc4.jpg', 'active'),
(4, 'gpc5.jpg', 'active'),
(5, 'gpc6.jpg', 'active'),
(6, 'gpc7.jpg', 'active'),
(7, 'gpc10.jpg', 'active'),
(8, 'gpc13.jpg', 'active'),
(9, 'gpc14.jpg', 'active'),
(10, 'gpc15.jpg', 'active'),
(11, 'gpc16.jpg', 'active'),
(12, 'gpc17.jpg', 'active'),
(13, 'gpc18.jpg', 'active'),
(14, 'gpc19.jpg', 'active'),
(15, 'gpc31.jpg', 'active'),
(16, 'gpc32.jpeg', 'active'),
(17, 'gpc33.jpeg', 'active'),
(18, 'gpcImage1.jpg', 'active'),
(19, 'gpcimg1.jpg', 'active'),
(20, 'ncc.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `geievance_register`
--

CREATE TABLE `geievance_register` (
  `ID` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` double NOT NULL,
  `Branch` varchar(40) NOT NULL,
  `Type` varchar(40) NOT NULL,
  `RegisteardeBy` varchar(40) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Message` mediumtext NOT NULL,
  `Replay` mediumtext NOT NULL,
  `status` varchar(40) NOT NULL DEFAULT 'reply'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `DESIGNATION` varchar(100) NOT NULL,
  `QUALIFICATION` varchar(100) NOT NULL,
  `Now` varchar(40) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `greivance_redressal_committee`
--

CREATE TABLE `greivance_redressal_committee` (
  `SLNO` int(11) NOT NULL,
  `NAME` varchar(40) NOT NULL,
  `ADDRESS` varchar(40) NOT NULL,
  `DESIGNATION` varchar(40) NOT NULL,
  `Now` varchar(40) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `greivance_redressal_committee`
--

INSERT INTO `greivance_redressal_committee` (`SLNO`, `NAME`, `ADDRESS`, `DESIGNATION`, `Now`) VALUES
(1, 'Padmakumar K  ', 'HOD Electrical and Electronics Enggineer', 'Chairperson', 'active'),
(2, 'M Karim', 'HOD Mechanical Engineering', ' Member', 'active'),
(3, 'Prakasan P ', 'HOD Electronics Engineering', 'Member', 'active'),
(4, 'Dr Santhoshkumar T G ', 'HOD Civil Engineering ', 'Member', 'active'),
(5, 'Sajina K Paulose ', 'HOD Computer Engineering ', 'Member', 'active'),
(6, 'AnilKumar V J ', 'Workshop Sperintendent', 'Member', 'active'),
(7, 'Sobhana KR ', 'Instructor in Physical Education', 'Member', 'active'),
(8, 'Babu John B ', 'Senior Superintendent', 'Member', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `guidance_and_conseling_committee`
--

CREATE TABLE `guidance_and_conseling_committee` (
  `SLNO` int(11) NOT NULL,
  `NAME` varchar(40) NOT NULL,
  `ADDRESS` varchar(40) NOT NULL,
  `DESIGNATION` varchar(40) NOT NULL,
  `Now` varchar(40) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guidance_and_conseling_committee`
--

INSERT INTO `guidance_and_conseling_committee` (`SLNO`, `NAME`, `ADDRESS`, `DESIGNATION`, `Now`) VALUES
(1, 'Anuja E V', ' Assistant Prof in Chemistry', 'Convener', 'active'),
(2, 'Resmi Joseph', 'Lecturer In Computer Enginnering ', ' Member', 'active'),
(3, 'Jincy Stephen', 'Assistant Proffessor in Physics ', 'Member', 'active'),
(4, 'Mary Murphy', 'Lecturer in Computer Engineering ', 'Member', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `internal_complaints_committee`
--

CREATE TABLE `internal_complaints_committee` (
  `SLNO` int(11) NOT NULL,
  `NAME` varchar(40) NOT NULL,
  `ADDRESS` varchar(40) NOT NULL,
  `DESIGNATION` varchar(40) NOT NULL,
  `Now` varchar(40) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internal_complaints_committee`
--

INSERT INTO `internal_complaints_committee` (`SLNO`, `NAME`, `ADDRESS`, `DESIGNATION`, `Now`) VALUES
(1, 'Sajina K Paulose', ' HOD Computer Engineering ', 'Presiding Officer', 'active'),
(2, 'Jose James', 'Lecturer in Computer', '  Member', 'active'),
(3, 'Sobhana K. R', 'Instructor in Physical Education', 'Member', 'active'),
(4, 'Jyothis George ', 'Lecturer in Civil', 'Member', 'active'),
(5, 'Adv Sister Josiya', 'Advocate', 'Member', 'active'),
(6, 'Kadeeja V. B  ', 'Senior Clerk', ' Member', 'active'),
(7, 'S Rahul C', 'NSS Co Ordinator', 'Member', 'active'),
(8, 'Vijayachandran Pillai ', 'NCC Officer', 'Member', 'active'),
(9, 'Babu John B', 'Senior Superintendant ', 'Member', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `mandatory_disclosure`
--

CREATE TABLE `mandatory_disclosure` (
  `id` int(11) NOT NULL,
  `pdf` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mandatory_disclosure`
--

INSERT INTO `mandatory_disclosure` (`id`, `pdf`) VALUES
(1, 'manddis.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `mechanical`
--

CREATE TABLE `mechanical` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `DESIGNATION` varchar(100) NOT NULL,
  `QUALIFICATION` varchar(100) NOT NULL,
  `Now` varchar(40) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notifications` varchar(2000) NOT NULL,
  `Active` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notifications`, `Active`) VALUES
(2, 'Gptc muttom', 'active'),
(7, 'Welcome all', 'active'),
(9, 'latest here.....!', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `sc_st_committee`
--

CREATE TABLE `sc_st_committee` (
  `SLNO` int(11) NOT NULL,
  `NAME` varchar(40) NOT NULL,
  `ADDRESS` varchar(40) NOT NULL,
  `DESIGNATION` varchar(40) NOT NULL,
  `Now` varchar(40) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_st_committee`
--

INSERT INTO `sc_st_committee` (`SLNO`, `NAME`, `ADDRESS`, `DESIGNATION`, `Now`) VALUES
(1, 'Anilkumar V J', 'Workshop Superintendant', 'Chairperson', 'active'),
(2, 'Kaleshlal P', 'Lecturer in Mechanical Engineering', 'Member', 'active'),
(3, 'Betcy Babu ', 'Lecturer in Electrical Engineering', 'Member', 'active'),
(4, 'Reeba Merin Joseph', 'Librarian', 'Member', 'active'),
(5, 'Sajana T A', 'Tradesman Civil Engineering ', 'Member', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `administrative_staff`
--
ALTER TABLE `administrative_staff`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `alimninotification`
--
ALTER TABLE `alimninotification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni_gallery`
--
ALTER TABLE `alumni_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni_registration`
--
ALTER TABLE `alumni_registration`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `anti_ragging_committee`
--
ALTER TABLE `anti_ragging_committee`
  ADD PRIMARY KEY (`SLNO`);

--
-- Indexes for table `anti_ragging_squad`
--
ALTER TABLE `anti_ragging_squad`
  ADD PRIMARY KEY (`SLNO`);

--
-- Indexes for table `civil`
--
ALTER TABLE `civil`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `committee_login`
--
ALTER TABLE `committee_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `department_head`
--
ALTER TABLE `department_head`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `electrical`
--
ALTER TABLE `electrical`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `electronics`
--
ALTER TABLE `electronics`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `geievance_register`
--
ALTER TABLE `geievance_register`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `greivance_redressal_committee`
--
ALTER TABLE `greivance_redressal_committee`
  ADD PRIMARY KEY (`SLNO`);

--
-- Indexes for table `guidance_and_conseling_committee`
--
ALTER TABLE `guidance_and_conseling_committee`
  ADD PRIMARY KEY (`SLNO`);

--
-- Indexes for table `internal_complaints_committee`
--
ALTER TABLE `internal_complaints_committee`
  ADD PRIMARY KEY (`SLNO`);

--
-- Indexes for table `mandatory_disclosure`
--
ALTER TABLE `mandatory_disclosure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mechanical`
--
ALTER TABLE `mechanical`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sc_st_committee`
--
ALTER TABLE `sc_st_committee`
  ADD PRIMARY KEY (`SLNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `administrative_staff`
--
ALTER TABLE `administrative_staff`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alimninotification`
--
ALTER TABLE `alimninotification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `alumni_gallery`
--
ALTER TABLE `alumni_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumni_registration`
--
ALTER TABLE `alumni_registration`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `anti_ragging_committee`
--
ALTER TABLE `anti_ragging_committee`
  MODIFY `SLNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `anti_ragging_squad`
--
ALTER TABLE `anti_ragging_squad`
  MODIFY `SLNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `civil`
--
ALTER TABLE `civil`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `committee_login`
--
ALTER TABLE `committee_login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `computer`
--
ALTER TABLE `computer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department_head`
--
ALTER TABLE `department_head`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `electrical`
--
ALTER TABLE `electrical`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `electronics`
--
ALTER TABLE `electronics`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `geievance_register`
--
ALTER TABLE `geievance_register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `greivance_redressal_committee`
--
ALTER TABLE `greivance_redressal_committee`
  MODIFY `SLNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `guidance_and_conseling_committee`
--
ALTER TABLE `guidance_and_conseling_committee`
  MODIFY `SLNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `internal_complaints_committee`
--
ALTER TABLE `internal_complaints_committee`
  MODIFY `SLNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mandatory_disclosure`
--
ALTER TABLE `mandatory_disclosure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mechanical`
--
ALTER TABLE `mechanical`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sc_st_committee`
--
ALTER TABLE `sc_st_committee`
  MODIFY `SLNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
