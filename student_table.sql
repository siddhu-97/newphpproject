-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 02:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 1,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`id`, `name`, `email`, `password`, `contact`, `comment`, `image`, `status`, `date`) VALUES
(12, 'bhupendraa singh rana paratapqq', 'rhl@mail.com', 'SF$%dg', '5666565656', 'chak de pattee rana singh jai ho', 'MOOSEE WALA 2.jfif', 0, '2024-03-13 06:58:48.724419'),
(13, 'harshit', 'har@mail.com', 'SFrt$%', '5656545453', '', 'MOOSEE WALA 2.jfif', 0, '2024-03-13 06:59:46.784337'),
(19, 'karishmaa kumarii', 'karishma@mail.com', 'KA@@ma', '7073110860', 'karishma here', 'MOOSEE WALA 2.jfif', 0, '2024-03-13 10:25:57.420198'),
(20, 'siddhu', 'sid@mail.com', '$2y$10$TazuuIDDX5m/zCvjZdFHyOWDhC2vUsEm0xItN/KZDUo', '6565556655', '', 'MOOSEE WALA 2.jfif', 0, '2024-03-13 13:31:34.508606'),
(21, 'siddd', 'sidddddddd@mail.com', '$2y$10$MmY1Qz543Ba/FfqlrhY9hOvQrvezo4cTM53AMA84PRq', '6567567545', '', 'MOOSEE WALA 2.jfif', 0, '2024-03-13 13:35:37.236420'),
(22, 'rahulll', 'sidddd@mail.com', '$2y$10$ny68SztiAtYSvsRm8r39Ne9igFxFOjBwsi.zYP5L8RW', '5675675656', '', 'MOOSEE WALA 2.jfif', 0, '2024-03-13 13:36:11.603019'),
(23, 'HARSHIT chaupti', 'rahul@mail.com', '$2y$10$HshMWvl9Yph841UL9va.BOmTPADMEnsAdfLeNWvBv.f', '2147483648', '', 'MOOSE WALA 3.jfif', 0, '2024-03-14 10:32:23.691707');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
