-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 07:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `B_id` varchar(10) NOT NULL,
  `B_contact` int(10) NOT NULL,
  `B_address` varchar(50) NOT NULL,
  `M_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`B_id`, `B_contact`, `B_address`, `M_id`) VALUES
('1', 123456798, 'Address , abc', '1'),
('2', 123321, 'Mumbai', '1'),
('3', 111111, 'Delhi', '2');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbankmanager`
--

CREATE TABLE `bloodbankmanager` (
  `M_id` varchar(10) NOT NULL,
  `M_name` varchar(20) NOT NULL,
  `M_contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbankmanager`
--

INSERT INTO `bloodbankmanager` (`M_id`, `M_name`, `M_contact`) VALUES
('1', 'Manager AA', 1234567),
('2', 'Manager B', 456654111);

-- --------------------------------------------------------

--
-- Table structure for table `blooddonor`
--

CREATE TABLE `blooddonor` (
  `D_id` varchar(10) NOT NULL,
  `D_name` varchar(20) NOT NULL,
  `D_dob` date NOT NULL,
  `D_gender` varchar(6) NOT NULL,
  `D_bloodgroup` varchar(3) NOT NULL,
  `D_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blooddonor`
--

INSERT INTO `blooddonor` (`D_id`, `D_name`, `D_dob`, `D_gender`, `D_bloodgroup`, `D_address`) VALUES
('1', 'Donor A', '2000-01-01', 'Male', 'A+', 'Piplod , Surat'),
('2', 'Donor B', '2000-01-01', 'Female', 'AB+', 'PIplod'),
('3', 'Donor C', '2000-01-01', 'Male', 'O+', 'Vesu');

-- --------------------------------------------------------

--
-- Table structure for table `bloodinventory`
--

CREATE TABLE `bloodinventory` (
  `Blood_stockid` varchar(10) NOT NULL,
  `Bl_bloodgroup` varchar(3) NOT NULL,
  `Bl_cost` int(5) NOT NULL,
  `B_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodinventory`
--

INSERT INTO `bloodinventory` (`Blood_stockid`, `Bl_bloodgroup`, `Bl_cost`, `B_id`) VALUES
('1', 'A+', 10, '1'),
('2', 'AB+', 35, '1'),
('3', 'A-', 29, '1');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `H_id` varchar(10) NOT NULL,
  `M_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donates`
--

CREATE TABLE `donates` (
  `B_id` varchar(10) NOT NULL,
  `D_id` varchar(10) NOT NULL,
  `Certificate` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donorage`
--

CREATE TABLE `donorage` (
  `D_dob` date NOT NULL,
  `D_age` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donorage`
--

INSERT INTO `donorage` (`D_dob`, `D_age`) VALUES
('2000-01-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `d_contact`
--

CREATE TABLE `d_contact` (
  `D_id` varchar(10) NOT NULL,
  `D_contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `d_contact`
--

INSERT INTO `d_contact` (`D_id`, `D_contact`) VALUES
('1', 11111),
('1', 123322),
('2', 987789),
('3', 12365441);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `H_id` varchar(10) NOT NULL,
  `H_name` varchar(20) NOT NULL,
  `H_contact` int(10) NOT NULL,
  `H_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`H_id`, `H_name`, `H_contact`, `H_address`) VALUES
('1', 'Mission Hospital', 999777888, 'Athwa , Surat');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `P_id` varchar(10) NOT NULL,
  `P_name` varchar(20) NOT NULL,
  `P_dob` date NOT NULL,
  `P_gender` varchar(6) NOT NULL,
  `P_bloodgroup` varchar(3) NOT NULL,
  `P_address` varchar(50) NOT NULL,
  `H_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`P_id`, `P_name`, `P_dob`, `P_gender`, `P_bloodgroup`, `P_address`, `H_id`) VALUES
('1', 'Patient A', '2001-01-01', 'Male', 'A+', 'Dumas', '1');

-- --------------------------------------------------------

--
-- Table structure for table `patientage`
--

CREATE TABLE `patientage` (
  `P_dob` date NOT NULL,
  `P_age` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `p_contact`
--

CREATE TABLE `p_contact` (
  `P_id` varchar(10) NOT NULL,
  `P_contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_contact`
--

INSERT INTO `p_contact` (`P_id`, `P_contact`) VALUES
('1', 113322),
('1', 95876448);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`B_id`),
  ADD KEY `M_id` (`M_id`);

--
-- Indexes for table `bloodbankmanager`
--
ALTER TABLE `bloodbankmanager`
  ADD PRIMARY KEY (`M_id`);

--
-- Indexes for table `blooddonor`
--
ALTER TABLE `blooddonor`
  ADD PRIMARY KEY (`D_id`);

--
-- Indexes for table `bloodinventory`
--
ALTER TABLE `bloodinventory`
  ADD PRIMARY KEY (`Blood_stockid`),
  ADD KEY `bloodinventory_ibfk_1` (`B_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`H_id`,`M_id`),
  ADD KEY `M_id` (`M_id`);

--
-- Indexes for table `donates`
--
ALTER TABLE `donates`
  ADD PRIMARY KEY (`B_id`,`D_id`),
  ADD KEY `D_id` (`D_id`);

--
-- Indexes for table `donorage`
--
ALTER TABLE `donorage`
  ADD PRIMARY KEY (`D_dob`);

--
-- Indexes for table `d_contact`
--
ALTER TABLE `d_contact`
  ADD PRIMARY KEY (`D_id`,`D_contact`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`H_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`P_id`),
  ADD KEY `H_id` (`H_id`);

--
-- Indexes for table `patientage`
--
ALTER TABLE `patientage`
  ADD PRIMARY KEY (`P_dob`);

--
-- Indexes for table `p_contact`
--
ALTER TABLE `p_contact`
  ADD PRIMARY KEY (`P_id`,`P_contact`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD CONSTRAINT `bloodbank_ibfk_1` FOREIGN KEY (`M_id`) REFERENCES `bloodbankmanager` (`M_id`);

--
-- Constraints for table `bloodinventory`
--
ALTER TABLE `bloodinventory`
  ADD CONSTRAINT `bloodinventory_ibfk_1` FOREIGN KEY (`B_id`) REFERENCES `bloodbank` (`B_Id`);

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`H_id`) REFERENCES `hospital` (`H_id`),
  ADD CONSTRAINT `contacts_ibfk_2` FOREIGN KEY (`M_id`) REFERENCES `bloodbankmanager` (`M_id`);

--
-- Constraints for table `donates`
--
ALTER TABLE `donates`
  ADD CONSTRAINT `donates_ibfk_1` FOREIGN KEY (`B_id`) REFERENCES `bloodbank` (`B_Id`),
  ADD CONSTRAINT `donates_ibfk_2` FOREIGN KEY (`D_id`) REFERENCES `blooddonor` (`D_id`);

--
-- Constraints for table `d_contact`
--
ALTER TABLE `d_contact`
  ADD CONSTRAINT `d_contact_ibfk_1` FOREIGN KEY (`D_id`) REFERENCES `blooddonor` (`D_id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`H_id`) REFERENCES `hospital` (`H_id`);

--
-- Constraints for table `p_contact`
--
ALTER TABLE `p_contact`
  ADD CONSTRAINT `p_contact_ibfk_1` FOREIGN KEY (`P_id`) REFERENCES `patient` (`P_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
