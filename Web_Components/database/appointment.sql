-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2021 at 04:41 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_email_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hospital_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hospital_address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `hospital_contact_no` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `hospital_logo` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_email_address`, `admin_password`, `admin_name`, `hospital_name`, `hospital_address`, `hospital_contact_no`, `hospital_logo`) VALUES
(1, 'johnsmith@gmail.com', 'password', 'John smith', 'john hopkins hospital', 'Accra Gctu', '741287410', '../images/631862499.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_table`
--

CREATE TABLE `appointment_table` (
  `appointment_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_schedule_id` int(11) NOT NULL,
  `appointment_number` int(11) NOT NULL,
  `reason_for_appointment` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `appointment_time` time NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `patient_come_into_hospital` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `doctor_comment` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appointment_table`
--

INSERT INTO `appointment_table` (`appointment_id`, `doctor_id`, `patient_id`, `doctor_schedule_id`, `appointment_number`, `reason_for_appointment`, `appointment_time`, `status`, `patient_come_into_hospital`, `doctor_comment`) VALUES
(3, 1, 3, 2, 1000, 'Pain in Stomach', '09:00:00', 'Cancel', 'No', ''),
(4, 1, 3, 2, 1001, 'Pain in stomach', '09:00:00', 'Cancel', 'No', ''),
(5, 1, 4, 2, 1002, 'For Delivery', '09:30:00', 'Completed', 'Yes', 'She gave birth to boy baby.'),
(6, 5, 3, 7, 1003, 'Fever and cold.', '18:00:00', 'In Process', 'Yes', ''),
(7, 6, 5, 13, 1004, 'Pain in Stomach.', '15:30:00', 'Completed', 'Yes', 'Acidity Problem. '),
(8, 1, 8, 10, 1005, 'child delivery', '12:00:00', 'Completed', 'Yes', 'he gave birth to boy baby.'),
(9, 5, 9, 4, 1006, 'Fever and cold.', '12:00:00', 'Booked', 'No', ''),
(10, 6, 11, 14, 1007, 'Pain in Stomach.', '12:00:00', 'Booked', 'No', ''),
(11, 7, 10, 7, 1008, 'child delivery', '12:00:00', 'Booked', 'No', ''),
(12, 10, 2, 9, 1009, 'Pain in Stomach.', '12:00:00', 'Booked', 'No', ''),
(13, 11, 5, 8, 1010, 'cancer', '12:00:00', 'Booked', 'No', ''),
(14, 12, 12, 13, 1011, 'child delivery', '12:00:00', 'Booked', 'No', ''),
(15, 11, 10, 8, 1012, 'tests', '09:40:00', 'Booked', 'No', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_schedule_table`
--

CREATE TABLE `doctor_schedule_table` (
  `doctor_schedule_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `doctor_schedule_date` date NOT NULL,
  `doctor_schedule_day` enum('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday') COLLATE utf8_unicode_ci NOT NULL,
  `doctor_schedule_start_time` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_schedule_end_time` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `average_consulting_time` int(5) NOT NULL,
  `doctor_schedule_status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctor_schedule_table`
--

INSERT INTO `doctor_schedule_table` (`doctor_schedule_id`, `doctor_id`, `doctor_schedule_date`, `doctor_schedule_day`, `doctor_schedule_start_time`, `doctor_schedule_end_time`, `average_consulting_time`, `doctor_schedule_status`) VALUES
(2, 1, '2021-09-14', 'Friday', '09:00', '17:00', 75, 'Active'),
(3, 2, '2021-09-27', 'Monday', '09:00', '12:00', 15, 'Active'),
(4, 5, '2021-09-29', 'Tuesday', '10:00', '14:00', 10, 'Active'),
(5, 3, '2021-09-29', 'Wednesday', '13:00', '17:00', 20, 'Active'),
(6, 4, '2021-09-30', 'Thursday', '15:00', '18:00', 5, 'Active'),
(7, 7, '2021-09-29', 'Wednesday', '18:00', '20:00', 10, 'Active'),
(8, 11, '2021-10-02', 'Saturday', '09:30', '12:30', 10, 'Active'),
(9, 10, '2021-10-02', 'Saturday', '11:00', '15:00', 10, 'Active'),
(10, 1, '2021-09-30', 'Thursday', '12:00', '15:00', 75, 'Active'),
(11, 2, '2021-10-06', 'Wednesday', '14:00', '17:00', 15, 'Active'),
(12, 3, '2021-10-06', 'Wednesday', '16:00', '20:00', 10, 'Active'),
(13, 12, '2021-10-07', 'Thursday', '15:30', '18:30', 10, 'Active'),
(14, 6, '2021-10-03', 'Sunday', '10:00', '13:30', 10, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_table`
--

CREATE TABLE `doctor_table` (
  `doctor_id` int(11) NOT NULL,
  `doctor_email_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_profile_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_phone_no` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `doctor_date_of_birth` date NOT NULL,
  `doctor_degree` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_expert_in` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `doctor_status` enum('Active','Inactive') COLLATE utf8_unicode_ci NOT NULL,
  `doctor_added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctor_table`
--

INSERT INTO `doctor_table` (`doctor_id`, `doctor_email_address`, `doctor_password`, `doctor_name`, `doctor_profile_image`, `doctor_phone_no`, `doctor_address`, `doctor_date_of_birth`, `doctor_degree`, `doctor_expert_in`, `doctor_status`, `doctor_added_on`) VALUES
(1, '', 'password', 'Dr. Peter Parker', '../images/2034685438.jpg', '7539518520', 'tarkwa ghana', '1985-10-29', 'MBBS MS', 'Surgery', 'Active', '2021-09-05 17:04:59'),
(2, 'adambrodly@gmail.com', 'password', 'Dr. Adam Broudly', '../images/21336.jpg', '753852963', 'tarkwa ghana', '1982-08-10', 'MBBS MD(Cardiac)', 'Cardiolology', 'Active', '2021-09-04 10:05:31'),
(3, 'sophia.parker@gmail.com', 'password', 'Dr. Sophia Parker', '../images/13838.jpg', '7417417410', 'tarkwa ghana', '1989-04-03', 'MBBS', 'Gynacolology', 'Active', '2021-09-01 15:05:02'),
(4, 'williampeterson@gmail.com', 'password', 'Dr. William Peterson', '../images/9498.jpg', '8523698520', 'tarkwa ghana', '1984-06-11', 'MBBS MD', 'Neurolology', 'Active', '2021-09-01 15:08:24'),
(5, 'Nita@gmail.com', 'password', 'Dr. Nita Ahuja', '../assets/img/Doctors/thumbnails/1.jpg\n', '8523698520', 'tarkwa ghana', '1984-06-11', 'MBBS MD', 'Surgery', 'Active', '2021-09-01 15:08:24'),
(6, 'Catherine@gmail.com', 'password', 'Dr. Catherine Alonzo', '../assets/img/Doctors/thumbnails/2.jpg\n', '8523698520', 'tarkwa ghana', '1984-06-11', 'MBBS MD', 'Urology', 'Active', '2021-09-01 15:08:24'),
(7, 'root@gmail.com', 'password', 'Root', '../images/1631527752.png', '+233248321494', 'tarkwa ghana', '1991-09-12', 'PHD', 'head', 'Active', '2021-09-13 10:09:12'),
(8, 'Joachim@gmail.com', 'password', 'Dr. Joachim Baehring', '../assets/img/Doctors/thumbnails/3.jpg\n', '8523698520', 'tarkwa ghana', '1984-06-11', 'MBBS MD', 'Neurology', 'Active', '2021-09-01 15:08:24'),
(10, 'Richard@gmail.com', 'password', 'Dr. Richard Antaya', '../assets/img/Doctors/thumbnails/4.jpg\n', '8523698520', 'tarkwa ghana', '1984-06-11', 'MBBS MD', 'Dermatology', 'Active', '2021-09-01 15:08:24'),
(11, 'PAUL@gmail.com', 'password', 'Dr. PAUL BERNSTEIN', '../assets/img/Doctors/thumbnails/5.jpg\n', '8523698520', 'tarkwa ghana', '1984-06-11', 'MBBS MD', 'Dermatology', 'Active', '2021-09-01 15:08:24'),
(12, 'Robert@gmail.com', 'password', 'Dr. Robert Bona', '../assets/img/Doctors/thumbnails/6.jpg\n', '8523698520', 'tarkwa ghana', '1984-06-11', 'MBBS MD', 'Nephrology', 'Active', '2021-09-01 15:08:24');

-- --------------------------------------------------------

--
-- Table structure for table `patient_table`
--

CREATE TABLE `patient_table` (
  `patient_id` int(11) NOT NULL,
  `patient_email_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `patient_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `patient_first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `patient_last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `patient_date_of_birth` date NOT NULL,
  `patient_gender` enum('Male','Female','Other') COLLATE utf8_unicode_ci NOT NULL,
  `patient_address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `patient_phone_no` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `patient_maritial_status` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `patient_added_on` datetime NOT NULL,
  `patient_verification_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email_verify` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patient_table`
--

INSERT INTO `patient_table` (`patient_id`, `patient_email_address`, `patient_password`, `patient_first_name`, `patient_last_name`, `patient_date_of_birth`, `patient_gender`, `patient_address`, `patient_phone_no`, `patient_maritial_status`, `patient_added_on`, `patient_verification_code`, `email_verify`) VALUES
(3, 'jacobmartin@gmail.com', 'password', 'Jacob', 'Martin', '2021-02-26', 'Male', 'Green view, 1025, NYC', '85745635210', 'Single', '2021-02-18 16:34:55', 'b1f3f8409f7687072adb1f1b7c22d4b0', 'Yes'),
(4, 'oliviabaker@gmail.com', 'password', 'Olivia', 'Baker', '2001-04-05', 'Female', 'Diamond street, 115, NYC', '7539518520', 'Married', '2021-02-19 18:28:23', '8902e16ef62a556a8e271c9930068fea', 'Yes'),
(5, 'web-tutorial@programmer.net', 'password', 'Amber', 'Anderson', '1995-07-25', 'Female', '2083 Cameron Road Buffalo, NY 14202', '75394511442', 'Single', '2021-02-23 17:50:06', '1909d59e254ab7e433d92f014d82ba3d', 'Yes'),
(8, 'frimponge@uni.coventry.ac.uk', '2dra-TVhyP2U48b', 'Emmanuel', 'Asante', '1999-07-25', 'Male', 'box 10 tarkwa ghana', '+233248321494', 'Single', '2021-09-12 13:26:48', 'd498a8c489bddd812e31eab5490bf400', 'Yes'),
(9, 'jacob@gmail.com', 'password', 'Jacob', 'Martin', '2021-02-26', 'Male', 'Accra', '85745635210', 'Single', '2021-02-18 16:34:55', 'b1f3f8409f7687052gfb1f1b7c22d4b0', 'Yes'),
(10, 'olbaker@gmail.com', 'password', 'Olivia', 'Baker', '2001-04-05', 'Female', 'Diamond Accra', '7539518520', 'Married', '2021-02-19 18:28:23', '8902e16ef62a556a8e252vb930068fea', 'Yes'),
(11, 'web-tutorial@prog.net', 'password', 'Amber', 'Anderson', '1995-07-25', 'Female', 'Accra', '75394511442', 'Single', '2021-02-23 17:50:06', '1909d59e2574cve433d92f014d82ba3d', 'Yes'),
(12, 'frimponge@emsil.com', 'password', 'Emmanuel', 'Asante', '1999-07-25', 'Male', 'box 10 tarkwa ghana', '+233248321494', 'Single', '2021-09-12 13:26:48', 'd498a8c489bddd812e325de5490bf400', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment_table`
--
ALTER TABLE `appointment_table`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `doctor_schedule_table`
--
ALTER TABLE `doctor_schedule_table`
  ADD PRIMARY KEY (`doctor_schedule_id`);

--
-- Indexes for table `doctor_table`
--
ALTER TABLE `doctor_table`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `patient_table`
--
ALTER TABLE `patient_table`
  ADD PRIMARY KEY (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `appointment_table`
--
ALTER TABLE `appointment_table`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `doctor_schedule_table`
--
ALTER TABLE `doctor_schedule_table`
  MODIFY `doctor_schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctor_table`
--
ALTER TABLE `doctor_table`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patient_table`
--
ALTER TABLE `patient_table`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
