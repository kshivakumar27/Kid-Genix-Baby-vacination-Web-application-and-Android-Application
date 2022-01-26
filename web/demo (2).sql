-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 03:36 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `email` varchar(20) NOT NULL,
  `hid` int(11) NOT NULL,
  `date` varchar(40) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`email`, `hid`, `date`, `id`) VALUES
('swaroopsmys@gmail.co', 1, '27/03/2018', 1),
('swaroopsmys@gmail.co', 2, '27/03/2018', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cnt`
--

CREATE TABLE `cnt` (
  `id` int(11) NOT NULL,
  `count` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cnt`
--

INSERT INTO `cnt` (`id`, `count`) VALUES
(1, 'sss'),
(2, 'abv');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pin` bigint(20) NOT NULL,
  `ph` varchar(20) NOT NULL,
  `address` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `name`, `email`, `pin`, `ph`, `address`) VALUES
(1, 'Apollo BGS', 'swaroopsmys@gmail.co', 570023, '0821 256 8888', 'Adichunchanagiri Road, Kuvempu Nagara, M'),
(2, 'Columbia Asia', 'swaroopsmys@gmail.com', 570015, '0821 398 9896', 'No. 85-86, Bangalore-Mysore Ring Road Junction, Bannimantapa \'A\' Layout, Siddiqui Nagar, Mandi Mohalla, Siddique Nagar, Bannimantap, Mysuru, Karnataka 570015');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `faname` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `pno` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(240) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `med` varchar(240) NOT NULL,
  `subject` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `fname`, `lname`, `mname`, `faname`, `dob`, `gender`, `pno`, `email`, `address`, `city`, `state`, `pin`, `med`, `subject`) VALUES
(5, 'Swaroop', 'S', 'Padma', 'Surendra', '04/03/1998', 'male', '9538786202', 'swaroopsmys@gmail.co', '#662, 3rd cross, 2nd main, Byraveshwara Nagar', 'Mysore', 'KARNATAKA', '570016', 'ewf', 'sdf'),
(6, 'Supriya', 'S', 'Padma', 'Surendra', '11-08-1956', 'Female', '9538150764', 'swaroopsmys@gmail.co', '# 165/2, 6th Floor, Kalyani Magnum Doraisani Palya, Bannerghatta Road, Krishnaraju Layout, Amalodbhavi Nagar', 'BENGALURU', 'Panduranga Nagar', '560076', 'dv', 'dvf');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `bday` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `email`, `bday`) VALUES
(2, 'Columbia Asia', 'swaroopsmys@yahoo.in', '2018-10-01'),
(3, 'Swaroop S', 'swaroopsmys@gmail.com', '2018-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date`) VALUES
(1, 'Swaroop S', 'swaroopsmys@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-10-20 06:28:10'),
(5, 'Rahul Prasad', 'rahulprasad778121@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-10-31 13:55:56'),
(10, 'Swaroop Padma S', 'swaroopsmys@yahoo.in', '202cb962ac59075b964b07152d234b70', '2018-11-12 10:01:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cnt`
--
ALTER TABLE `cnt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cnt`
--
ALTER TABLE `cnt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
