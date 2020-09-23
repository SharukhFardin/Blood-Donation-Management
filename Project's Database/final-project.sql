-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 05:28 PM
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
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(11) NOT NULL,
  `password` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` double NOT NULL,
  `joined_on` date NOT NULL,
  `MID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `Hospital_code` int(5) NOT NULL,
  `Hospital_name` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `phone_number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`Hospital_code`, `Hospital_name`, `location`, `phone_number`) VALUES
(10001, 'popular medical', 'badda', '01713638502'),
(10002, 'shastho sheba', 'kurmitola', '01713533513'),
(10003, 'sunflower care', 'jigatola', '01913638572'),
(10004, 'podma medical', 'malibag', '01933638809'),
(10005, 'joruri sheba', 'mirpur', '01673838701'),
(10006, 'holy family', 'banani', '01883693509'),
(10007, 'bardem hospital', 'komlapur', '01712358679'),
(10008, 'Apolo hospital', 'boshundhora', '01553638502'),
(10009, 'south pacefic medica', 'gulshan', '01715638412'),
(10010, 'united hospital', 'nodda', '01617630502'),
(10011, 'newlife hospital', 'uttara', '01710838029'),
(10012, 'uttara care', 'uttara', '01723635507'),
(10013, 'family care', 'purbachol', '01920635800'),
(10014, 'redstar hospital', 'jatrabari', '01663639507'),
(10015, 'Ace hospital', 'panthopath', '01323645792'),
(10016, 'Ibne sina hospital', 'mogbazar', '01799465580'),
(10017, 'glory medical', 'hatirjheel', '01558296503'),
(10018, 'True Life hospital', 'baridhara', '01327634793'),
(10019, 'twin leaf hospital', 'khilgaon', '01925834490'),
(10020, 'harmony', 'shajahanpur', '01723630099'),
(10021, 'OneHealth hospital', 'wari', '01523633301'),
(10022, 'happy family', 'banasree', '01675635569'),
(10023, 'maple heart hospital', 'motijheel', '01823637705'),
(10024, 'green care', 'shajahanpur', '01923635512'),
(10025, 'goodlife hospital', 'rampura', '01725635674');

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
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `blood_information`
--
ALTER TABLE `blood_information`
  ADD PRIMARY KEY (`bloodcode`);

--
-- Indexes for table `blood_seeker`
--
ALTER TABLE `blood_seeker`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_donor`
--
ALTER TABLE `blood_donor`
  MODIFY `DID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blood_seeker`
--
ALTER TABLE `blood_seeker`
  MODIFY `SID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
