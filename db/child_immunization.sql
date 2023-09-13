-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2022 at 01:48 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `child_immunization`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_Id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_registered` date NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_Id`, `firstname`, `middlename`, `lastname`, `suffix`, `gender`, `dob`, `age`, `address`, `email`, `contact`, `password`, `image`, `date_registered`, `user_type`) VALUES
(1, 'Admin', 'Admin', 'Admin', '', 'Male', '2022-04-06', 23, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'admin@gmail.com', '09359428963', '21232f297a57a5a743894a0e4a801fc3', 'art-hauntington-jzY0KRJopEI-unsplash.jpg', '2022-04-17', 'Admin'),
(2, 'Erwinfdsfsfdsfds', 'Cabag', 'Son', '', 'Male', '2022-09-01', 3, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sonerwin1ss2@gmail.com', '9359428963', '1aabac6d068eef6a7bad3fdf50a05cc8', '4297150.jpg', '2022-09-08', 'Admin'),
(3, 'Duterte', 'fd', 'fds', '', 'Male', '2022-09-11', 1, 'Purok Sandfsdfd Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'fdsffds2@gmail.com', '09359428963', '594f803b380a41396ed63dca39503542', 'ali-pazani-9uaNYCqjDLw-unsplash.jpg', '2022-09-11', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
`sched_Id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `sched_date` varchar(255) NOT NULL,
  `sched_time` varchar(255) NOT NULL,
  `sched_status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sched_Id`, `user_Id`, `sched_date`, `sched_time`, `sched_status`) VALUES
(6, 58, '2022-09-09', '21:09', 'Pending'),
(7, 59, '2022-09-14', '18:16', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_Id` int(11) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_middlename` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'user.png',
  `mothers_name` varchar(255) NOT NULL,
  `mothers_address` varchar(255) NOT NULL,
  `mothers_number` varchar(255) NOT NULL,
  `fathers_name` varchar(255) NOT NULL,
  `fathers_address` varchar(255) NOT NULL,
  `fathers_number` varchar(255) NOT NULL,
  `birthplace_hospital_address` varchar(255) NOT NULL,
  `medications` varchar(255) NOT NULL,
  `allergies` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `verification_code` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `date_registered` date NOT NULL,
  `year` varchar(255) NOT NULL,
  `archival` varchar(255) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_Id`, `user_firstname`, `user_middlename`, `user_lastname`, `user_suffix`, `gender`, `dob`, `age`, `address`, `email`, `contact`, `password`, `image`, `mothers_name`, `mothers_address`, `mothers_number`, `fathers_name`, `fathers_address`, `fathers_number`, `birthplace_hospital_address`, `medications`, `allergies`, `attachment`, `verification_code`, `user_status`, `date_registered`, `year`, `archival`) VALUES
(46, 'Ralphw', 'Cabag', 'Son', '', 'Male', '2022-09-14', 23, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'cruzralph7fd7@gmail.com', '9359428963', '21232f297a57a5a743894a0e4a801fc3', '306374748_621341849427682_4237172589164831559_n.jpg', 'fds', '09359428963', 'fds', 'fds', '09359428963', 'fdsfds', 'fds', '432', '4322343', '', '433454', 'Confirmed', '2022-09-11', '2016', 'No'),
(59, 'Erwin', 'Cabag', 'Son', '', 'Male', '2022-09-14', 12, 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'sonerwin12@gmail.com', '9359428963', '21232f297a57a5a743894a0e4a801fc3', 'user.png', 'dfsgs', 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '09359428963', 'dsgdf', 'gdgdfg', '43242', 'fgdfgd', 'gdgfd', 'dgdsgdgdf', '6207ad7e34af5.jpg', '146652', 'Confirmed', '2022-09-26', '2022', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `user_vaccine_record`
--

CREATE TABLE IF NOT EXISTS `user_vaccine_record` (
`user_record_vaccine_Id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `vaccine_Id` int(11) NOT NULL,
  `pagkapanganak` varchar(100) NOT NULL DEFAULT 'N/A',
  `1_month` varchar(100) NOT NULL DEFAULT 'N/A',
  `2_month` varchar(100) NOT NULL DEFAULT 'N/A',
  `3_month` varchar(100) NOT NULL DEFAULT 'N/A',
  `9_month` varchar(100) NOT NULL DEFAULT 'N/A',
  `1_year` varchar(100) NOT NULL DEFAULT 'N/A'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `user_vaccine_record`
--

INSERT INTO `user_vaccine_record` (`user_record_vaccine_Id`, `user_Id`, `vaccine_Id`, `pagkapanganak`, `1_month`, `2_month`, `3_month`, `9_month`, `1_year`) VALUES
(18, 59, 2, 'N/A', 'Done', 'N/A', 'N/A', 'N/A', 'N/A'),
(19, 59, 3, 'N/A', 'N/A', 'Done', 'N/A', 'N/A', 'N/A'),
(21, 59, 4, 'N/A', 'Done', 'N/A', 'Done', 'N/A', 'N/A'),
(22, 59, 5, 'N/A', 'N/A', 'Done', 'N/A', 'N/A', 'N/A'),
(23, 59, 7, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'Done'),
(24, 59, 6, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'Done'),
(25, 59, 8, 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE IF NOT EXISTS `vaccine` (
`vaccine_Id` int(11) NOT NULL,
  `Vaccine` varchar(100) NOT NULL,
  `sakit_na_maiwasan` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`vaccine_Id`, `Vaccine`, `sakit_na_maiwasan`) VALUES
(2, 'BSG', 'Tuberkulosis'),
(3, 'Hepatitis B', 'Hepatitis B'),
(4, 'Pentavalent Vaccine (DPT-Hep B- HB)', 'Dipterya, Tetano, Hepa B, Pertussis, Pulmonia, Meningitis'),
(5, 'Oral Polio Vaccine (OPV)', 'Polio'),
(6, 'Inactivated Polio Vaccine (IPV)', 'Polio'),
(7, 'Pneumococcal Conjugate Vaccine (PCV)', 'Pulmonya, Meningitis'),
(8, 'Measles, Mumps, Rubella (MMR)', 'Tigdas, Beke, German Measles');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_Id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
 ADD PRIMARY KEY (`sched_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_Id`);

--
-- Indexes for table `user_vaccine_record`
--
ALTER TABLE `user_vaccine_record`
 ADD PRIMARY KEY (`user_record_vaccine_Id`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
 ADD PRIMARY KEY (`vaccine_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
MODIFY `sched_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `user_vaccine_record`
--
ALTER TABLE `user_vaccine_record`
MODIFY `user_record_vaccine_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
MODIFY `vaccine_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
