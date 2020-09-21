-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 12:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(11) NOT NULL,
  `password` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` double NOT NULL,
  `joined_on` date NOT NULL,
  `MID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `password`, `first_name`, `last_name`, `phone_number`, `email`, `position`, `salary`, `joined_on`, `MID`) VALUES
(18218, 'ACQUARIUS1', 'MAHMUD', 'ISLAM', '01711234489', 'mahmud19@gmail.com', 'MANAGER', 20000, '2020-01-01', NULL),
(18219, 'SAGITARIUS', 'SABBIR', 'AHMED', '01511534782', 'sabbir@gmail.com', 'REGISTER', 15000, '2020-01-05', 18218),
(18220, 'OPHIUCHUS9', 'FOYSAL', 'HAQUE', '01915238459', 'foysal@gmail.com', 'REGISTER', 13500, '2020-01-19', 18218),
(18221, 'LIBRALEO12', 'NUSRAT', 'JABIN', '01671339424', 'nusrat@gmail.com', 'REGISTER', 12000, '2020-02-01', 18218),
(18222, 'LIBERTY459', 'HILLOL', 'AHAMED', '01815234195', 'hillol@gmail.com', 'REGISTER', 13000, '2020-03-05', 18218);

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor`
--

CREATE TABLE `blood_donor` (
  `DID` int(10) UNSIGNED NOT NULL,
  `User_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `sex` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `corona_recovery` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_donated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_donor`
--

INSERT INTO `blood_donor` (`DID`, `User_name`, `password`, `first_name`, `last_name`, `birth_date`, `sex`, `blood_group`, `phone_number`, `email`, `address`, `corona_recovery`, `last_donated`) VALUES
(1, 'sharukh007', 'iamscared', 'Sharukh', 'Fardin', '1997-08-28', 'male', 'A+', '01734983482', 'sharukhfardin1234@gm', 'Banasree', 'no', '2019-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `blood_information`
--

CREATE TABLE `blood_information` (
  `bloodcode` int(10) UNSIGNED NOT NULL,
  `blood_group` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blood_seeker`
--

CREATE TABLE `blood_seeker` (
  `SID` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `sex` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_seeker`
--

INSERT INTO `blood_seeker` (`SID`, `user_name`, `password`, `first_name`, `last_name`, `birth_date`, `sex`, `phone_number`, `email`, `address`) VALUES
(1, 'abir121', 'iamscared', 'Abir', 'Ahmed', '1998-07-18', 'male', '01724678321', 'abir.rahman@gmail.com', 'Gulshan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`),
  ADD KEY `MID` (`MID`);

--
-- Indexes for table `blood_donor`
--
ALTER TABLE `blood_donor`
  ADD PRIMARY KEY (`DID`),
  ADD UNIQUE KEY `User_name` (`User_name`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `blood_information`
--
ALTER TABLE `blood_information`
  ADD PRIMARY KEY (`bloodcode`);

--
-- Indexes for table `blood_seeker`
--
ALTER TABLE `blood_seeker`
  ADD PRIMARY KEY (`SID`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_donor`
--
ALTER TABLE `blood_donor`
  MODIFY `DID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blood_seeker`
--
ALTER TABLE `blood_seeker`
  MODIFY `SID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`MID`) REFERENCES `admin` (`AID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
