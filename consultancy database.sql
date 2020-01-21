-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 01:21 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consultancy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `n_id` varchar(20) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `pmdc` varchar(20) NOT NULL,
  `c_address` varchar(20) NOT NULL,
  `specialisation` varchar(20) NOT NULL,
  `c_timing` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `email`, `n_id`, `qualification`, `pmdc`, `c_address`, `specialisation`, `c_timing`, `username`, `password`) VALUES
(1, 'ashiq', 'ashiq@gmail.com', '14', 'mbbs', '156', 'muralimukk', 'psychology', '10-4', 'ashiq', 'ashiq123');

-- --------------------------------------------------------

--
-- Table structure for table `doctorappointment`
--

CREATE TABLE `doctorappointment` (
  `id` int(11) NOT NULL,
  `doctor_id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `specialisation` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `fromtime` varchar(20) NOT NULL,
  `totime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorappointment`
--

INSERT INTO `doctorappointment` (`id`, `doctor_id`, `name`, `specialisation`, `date`, `fromtime`, `totime`) VALUES
(1, '1', 'ashiq', 'cardiac', '2020-01-19', '04:01', '05:00');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `n_id` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `gender`, `email`, `n_id`, `username`, `password`) VALUES
(2, 'nikhil', 'male', 'nikhil@gmail.com', '12', 'nikhil', 'nikhil123');

-- --------------------------------------------------------

--
-- Table structure for table `patientappointment`
--

CREATE TABLE `patientappointment` (
  `id` int(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `speciality` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `fromtime` varchar(20) NOT NULL,
  `totime` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientappointment`
--

INSERT INTO `patientappointment` (`id`, `pname`, `speciality`, `name`, `date`, `fromtime`, `totime`, `status`) VALUES
(1, 'nikhil', 'cardiac', 'ashiq', '2020-01-17', '05:06', '10:03', 'approved'),
(14, 'nikhil', 'psychology', 'ashiq', '2020-01-09', '05:01', '06:02', 'pending'),
(15, 'nikhil', 'psychology', 'ashiq', '2020-01-02', '04:03', '05:05', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorappointment`
--
ALTER TABLE `doctorappointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientappointment`
--
ALTER TABLE `patientappointment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctorappointment`
--
ALTER TABLE `doctorappointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patientappointment`
--
ALTER TABLE `patientappointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
