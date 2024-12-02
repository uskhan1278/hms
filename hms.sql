-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 10:43 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_doctors`
--

CREATE TABLE `add_doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` bigint(10) NOT NULL,
  `unique_id` varchar(50) NOT NULL,
  `speciality_id` varchar(50) NOT NULL,
  `age` int(10) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `consultency_fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_doctors`
--

INSERT INTO `add_doctors` (`id`, `name`, `number`, `unique_id`, `speciality_id`, `age`, `qualification`, `address`, `image`, `consultency_fee`) VALUES
(1, 'Dr. Mukesh Jain', 9058316684, 'do_62', '1', 45, 'MD,MBBS', 'Saharanpur', 'team-3.jpg', 2000),
(2, 'Dr. Sneha Patil', 7894563210, 'do_69', '2', 30, 'MD,MBBS', 'Saharanpur', 'team-1.jpg', 1500),
(3, 'Dr. Mohd Javed', 7654327893, 'do_63', '7', 26, 'M.B.B.S', 'Delhi', 'javed photo.jpg', 2500),
(4, 'Dr. Mohd Zaid', 9867453254, 'do_64', '2', 34, 'M.B.B.S', 'New Delhi', 'PHOTO.jpg', 2000),
(5, 'Dr. Mohd Naved', 9867346248, 'do_65', '3', 36, 'MD, M.B.B.S', 'Delhi', 'a4.jpg', 1500),
(6, 'Dr. Snshika Singn', 9067542793, 'do_66', '4', 36, 'M.B.B.S', 'New Delhi', 'a6.jpg', 1500),
(7, 'Dr. Ram Kumar', 9086381935, 'do_67', '6', 34, 'MD, M.B.B.S', 'Ghana Khandi', 'a1.jpg', 1700),
(8, 'Dr. Kunal', 9065483921, 'do_68', '1', 29, 'MD, M.B.B.S', 'Delhi', 'a2.jpg', 1000),
(10, 'Dr. Puja kumar', 9074382940, 'do_70', '12', 26, 'M.B.B.S', 'Saharanpur', 'a8.jpg', 1000),
(11, 'Dr. Saziya khan', 9064833752, 'do_71', '5', 34, 'MD, M.B.B.S', 'New Delhi', 'a6.jpg', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `add_doc_speciality`
--

CREATE TABLE `add_doc_speciality` (
  `speciality_id` int(11) NOT NULL,
  `add_doc_speciality` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_doc_speciality`
--

INSERT INTO `add_doc_speciality` (`speciality_id`, `add_doc_speciality`) VALUES
(1, 'Allergist'),
(2, 'Anesthesiologist'),
(3, 'Cardiologist'),
(4, 'Dermatologist'),
(5, 'Endocrinologist'),
(6, 'Gastroenterologist'),
(7, 'Neurologist'),
(8, 'Pathologist'),
(9, 'Plastic Surgeons'),
(10, 'Radiologist'),
(11, 'Fobia'),
(12, 'Heart');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `book_appointment`
--

CREATE TABLE `book_appointment` (
  `id` bigint(20) NOT NULL,
  `unique_id` varchar(10) NOT NULL,
  `profile_email` varchar(50) NOT NULL,
  `datetime` varchar(20) NOT NULL,
  `patient_name` varchar(50) NOT NULL,
  `patient_email` varchar(50) NOT NULL,
  `patient_number` bigint(10) NOT NULL,
  `patient_age` int(50) NOT NULL,
  `patient_address` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_appointment`
--

INSERT INTO `book_appointment` (`id`, `unique_id`, `profile_email`, `datetime`, `patient_name`, `patient_email`, `patient_number`, `patient_age`, `patient_address`, `status`, `time_stamp`) VALUES
(4, 'do_68', 'sohan@gmail.com', '2024-06-07', 'Sohan kumar', 'sohan@gmail.com', 9086381935, 36, 'Saharanpur', 1, '2024-06-06 20:13:59'),
(5, 'do_63', 'sohan@gmail.com', '2024-06-14', 'Mohd Zaid', 'zaid007@gmail.com', 9034675432, 29, 'Saharanpur', 0, '2024-06-06 20:18:46');

-- --------------------------------------------------------

--
-- Table structure for table `patient_login`
--

CREATE TABLE `patient_login` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_login`
--

INSERT INTO `patient_login` (`id`, `name`, `email`, `pass`, `mobile`, `address`) VALUES
(1, 'Gaurav Bhatnagar', 'gsnova007@gmail.com', '1234567890', '1234567890', 'Gangoh'),
(2, 'Mohd Javed', 'mhjaved5@gmail.com', '1234567890', '9758756411', 'Ghana Khandi'),
(3, 'Sohan Kumar', 'sohan@gmail.com', '1234567890', '9064710527', 'Saharanpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_doctors`
--
ALTER TABLE `add_doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_doc_speciality`
--
ALTER TABLE `add_doc_speciality`
  ADD PRIMARY KEY (`speciality_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_appointment`
--
ALTER TABLE `book_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_login`
--
ALTER TABLE `patient_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_doctors`
--
ALTER TABLE `add_doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `add_doc_speciality`
--
ALTER TABLE `add_doc_speciality`
  MODIFY `speciality_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_appointment`
--
ALTER TABLE `book_appointment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient_login`
--
ALTER TABLE `patient_login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
