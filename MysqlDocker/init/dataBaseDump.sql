-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2022 at 08:46 PM
-- Server version: 8.0.28-0ubuntu0.20.04.3
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
-- Database: `laptop_repair`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `ContactNo` int NOT NULL,
  `Skypeusername` varchar(100) NOT NULL,
  `appointmentFor` varchar(100) NOT NULL,
  `AppointmentDescription` varchar(1000) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Waiting` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `Name`, `Email`, `ContactNo`, `Skypeusername`, `appointmentFor`, `AppointmentDescription`, `Date`, `Time`, `Waiting`) VALUES
(1, 'dsa', 'awdaw@daw', 456485, 'jgy', 'coffee', 'eqaS', '1', '04:52', '1'),
(2, 'dsa', 'awdaw@daw', 456485, 'jgy', 'coffee', 'eqaS', '1', '04:52', '1'),
(3, 'dsa', 'awdaw@daw', 456485, 'jgy', 'coffee', 'awdawd', '1=7', '04:52', ''),
(4, 'dsa', 'awdaw@daw', 456485, 'jgy', 'Hardware', 'awdawd', 'week', '04:52', ''),
(5, 'dsa', 'awdaw@daw', 456485, 'jgy', 'Hardware', 'awdawd', '2022-12-05', '04:52', 'week'),
(6, 'dsa', 'awdaw@daw', 456485, 'jgy', 'Hardware', 'awdawd', '2022-12-05', '04:52', 'week'),
(7, 'dsa', 'awdaw@daw', 456485, 'jgy', 'Hardware', 'awdawd', '2022-12-05', '04:52', 'week'),
(8, 'dsa', 'awdaw@daw', 896, 'jgy', 'Hardware', '', '2022-12-05', '04:52', 'week'),
(9, 'dsa', 'awdaw@daw', 896, 'jgy', 'Hardware', '', '2022-12-05', '04:52', 'week'),
(10, 'dsa', 'awdaw@daw', 896, 'jgy', 'Hardware', '', '2022-12-05', '04:52', 'week'),
(11, 'dsa', 'awdaw@daw', 896, 'jgy', 'Hardware', '', '2022-12-05', '04:52', 'week'),
(12, 'dsa', 'awdaw@daw', 896, 'jgy', 'Hardware', '', '2022-12-05', '04:52', 'week'),
(13, 'adw', 'dawd@faew', 5875, 'awd', 'Hardware', 'awd', '0008-04-07', '05:48', '1'),
(14, 'awdaw', 'chraig@gmail', 5865548, 'dawd', 'Hardware', 'dawdawd', '2022-03-30', '07:08', '1'),
(15, 'awdaw', 'chraig@gmail', 5865548, 'dawd', 'Hardware', 'dawdawd', '2022-03-30', '07:08', '1'),
(16, 'awdaw', 'chraig@gmail', 5865548, '', 'Hardware', 'adw', '0658-04-20', '07:58', '1'),
(17, 'awdaw', 'chraig@gmail', 5865548, 'dawd', 'Hardware', '', '2022-04-13', '07:58', '1'),
(18, 'dawd', 'chraig@gmail', 5865548, 'awd', 'Hardware', 'dawd', '2022-04-05', '06:08', '2');

-- --------------------------------------------------------

--
-- Table structure for table `userTable`
--

CREATE TABLE `userTable` (
  `srno` int NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `category` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userTable`
--

INSERT INTO `userTable` (`srno`, `name`, `email`, `password`, `category`) VALUES
(1, 'chirag', 'awd@aw', 'adwdwa', 'User'),
(2, 'chirag', 'adawdwa@daw', 'dawdaw', 'User'),
(3, 'hari', 'hari@gmail.com', '1234', 'User'),
(4, 'goat', 'goat@mail.com', '1234', 'User'),
(5, 'dawd', 'daw@daw', '1234', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userTable`
--
ALTER TABLE `userTable`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `userTable`
--
ALTER TABLE `userTable`
  MODIFY `srno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
