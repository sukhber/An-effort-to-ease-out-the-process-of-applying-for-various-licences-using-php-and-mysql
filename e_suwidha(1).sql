-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2017 at 06:12 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_suwidha`
--

-- --------------------------------------------------------

--
-- Table structure for table `arms licence`
--

CREATE TABLE `arms licence` (
  `DOB proof` blob NOT NULL,
  `Photo` blob NOT NULL,
  `Medical Certificate` blob NOT NULL,
  `Magistrate Certificate` blob NOT NULL,
  `Address Proof` blob NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `birth certificate`
--

CREATE TABLE `birth certificate` (
  `Parents ID` blob NOT NULL,
  `Birth Letter` blob NOT NULL,
  `Marriage Certificate` blob NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `driving renewal`
--

CREATE TABLE `driving renewal` (
  `DOB proof` blob NOT NULL,
  `Photo` blob NOT NULL,
  `Medical Certificate` blob NOT NULL,
  `Address Proof` blob NOT NULL,
  `Copy of DL` blob NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Address` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `learning`
--

CREATE TABLE `learning` (
  `DOB proof` blob NOT NULL,
  `Photo` blob NOT NULL,
  `Medical Certificate` blob NOT NULL,
  `Address Proof` blob NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `GENDER` varchar(15) NOT NULL,
  `ADDRESS` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `sno` int(11) NOT NULL,
  `aadhar_no` int(15) NOT NULL,
  `cheque_no` int(6) NOT NULL,
  `branch_code` varchar(15) NOT NULL,
  `bank_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permanent dl`
--

CREATE TABLE `permanent dl` (
  `DOB proof` blob NOT NULL,
  `Photo` blob NOT NULL,
  `Medical Certificate` blob NOT NULL,
  `Address Proof` blob NOT NULL,
  `Learning DL No` blob NOT NULL,
  `Drive Test Approval` blob NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sc`
--

CREATE TABLE `sc` (
  `sno` int(10) NOT NULL,
  `mc_patwari_report` blob NOT NULL,
  `income_proof` blob NOT NULL,
  `address_proof` blob NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `NAME` varchar(20) NOT NULL,
  `AADHAR_NO` int(15) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `CONTACT_NO` int(10) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `ADDRESS` varchar(60) NOT NULL,
  `BLOOD_GROUP` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`NAME`, `AADHAR_NO`, `PASSWORD`, `CONTACT_NO`, `DOB`, `GENDER`, `ADDRESS`, `BLOOD_GROUP`) VALUES
('gagan', 321, '1234', 56564165, '18september1996', 'on', '12131sfdsfsdfs133103', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `st`
--

CREATE TABLE `st` (
  `sno` int(10) NOT NULL,
  `mc_patwari_report` blob NOT NULL,
  `father_certificate` blob NOT NULL,
  `address_proof` blob NOT NULL,
  `dob` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `sc`
--
ALTER TABLE `sc`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`AADHAR_NO`);

--
-- Indexes for table `st`
--
ALTER TABLE `st`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sc`
--
ALTER TABLE `sc`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `st`
--
ALTER TABLE `st`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
