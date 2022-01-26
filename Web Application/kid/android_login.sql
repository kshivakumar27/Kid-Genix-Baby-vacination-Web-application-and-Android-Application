-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2019 at 02:44 AM
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
-- Database: `android_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `kidinfo`
--

CREATE TABLE `kidinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kidinfo`
--

INSERT INTO `kidinfo` (`id`, `name`, `email`, `dob`, `phone`) VALUES
(1, 'sss', 'dsd@ggd.in', 'java.util.GregorianCalendar[time=1551441', '123'),
(2, 'sss', 'dsd@ggd.in', 'java.util.GregorianCalendar[time=1551441', '123'),
(4, 'dd', 'a@g.in', '10/2/2019', 'ff');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(23) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `encrypted_password` varchar(250) NOT NULL,
  `otp` int(6) NOT NULL,
  `verified` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `phone` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `name`, `email`, `encrypted_password`, `otp`, `verified`, `created_at`, `phone`) VALUES
(1, '5c4aa4e7b4a288.52335142', 'Swaroop', 'swaroopsmys@gmail.com', '$2y$10$mu0o28NH4WbrE0PD0OnU6u.T.rlnyBQrmP870GNDQswGLiUT3uqoK', 576882, 1, '2019-01-25 11:25:51', '9538786202'),
(2, '5c4adf6776e639.40198516', 'SHIVAKUMAR', 'kshivakumar7227@gmail.com', '$2y$10$7sMez7KuqKJF/tAqeABANuRLEMSVSDFYFZeqK2fNXhZ0/RzeKE7Ei', 681323, 1, '2019-01-25 15:35:27', ''),
(5, '5c8f929112ee49.24186749', 'Hii', 'swaroopsmys@yahoo.in', '$2y$10$Cx/rR9M0JyzAidOTxItrmuBO7ZRipX1fLE90Dm8TLDbR6pVjdJI..', 399961, 1, '2019-03-18 18:14:01', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kidinfo`
--
ALTER TABLE `kidinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kidinfo`
--
ALTER TABLE `kidinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
