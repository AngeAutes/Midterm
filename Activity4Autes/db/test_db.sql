-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 02:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `acts`
--

CREATE TABLE `acts` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acts`
--

INSERT INTO `acts` (`id`, `username`, `activity`, `time`) VALUES
(37, 'ADMIN', 'LogIn', '2021-05-03 19:02:27'),
(38, 'ADMIN', 'LogOut', '2021-05-03 19:28:39'),
(39, 'ADMIN', 'LogIn', '2021-05-03 19:29:13'),
(40, 'ADMIN', 'LogOut', '2021-05-03 19:29:24'),
(41, 'ADMIN', 'LogIn', '2021-05-03 20:10:07'),
(42, 'ADMIN', 'LogOut', '2021-05-03 20:10:14'),
(43, 'Ally', 'LogIn', '2021-05-03 20:13:53'),
(44, 'Ally', 'LogOut', '2021-05-03 20:14:26'),
(45, 'ADMIN', 'LogIn', '2021-05-03 20:14:44'),
(46, 'ADMIN', 'LogOut', '2021-05-03 20:15:26'),
(47, 'Ally', 'ChangePassword', '2021-05-03 20:20:08'),
(48, 'Ally', 'ChangePassword', '2021-05-03 20:24:13'),
(49, 'Ally', 'ChangePassword', '2021-05-03 20:28:03'),
(50, 'Ally', 'LogIn', '2021-05-03 20:28:41'),
(51, 'Ally', 'LogOut', '2021-05-03 20:29:18'),
(52, 'ADMIN', 'LogIn', '2021-05-03 20:29:41'),
(53, 'ADMIN', 'LogOut', '2021-05-03 20:30:12');

-- --------------------------------------------------------

--
-- Table structure for table `authent`
--

CREATE TABLE `authent` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `otp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bopols`
--

CREATE TABLE `bopols` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `otp` int(10) NOT NULL,
  `curdate` varchar(50) NOT NULL,
  `endate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bopols`
--

INSERT INTO `bopols` (`id`, `username`, `otp`, `curdate`, `endate`) VALUES
(26, 'ADMIN', 110040, '2021-05-03 16:36:07', '2021-05-03 16:41:07'),
(27, 'ADMIN', 495121, '2021-05-03 16:37:26', '2021-05-03 16:42:26'),
(28, 'ADMIN', 229890, '2021-05-03 17:13:47', '2021-05-03 17:18:47'),
(29, 'ADMIN', 599588, '2021-05-03 17:54:16', '2021-05-03 17:59:16'),
(30, 'Ally', 878405, '2021-05-03 18:01:37', '2021-05-03 18:06:37'),
(31, 'ADMIN', 185419, '2021-05-03 18:02:20', '2021-05-03 18:07:20'),
(32, 'Ally', 326515, '2021-05-03 18:07:07', '2021-05-03 18:12:07'),
(33, 'Ally', 163674, '2021-05-03 18:09:04', '2021-05-03 18:14:04'),
(34, 'Ally', 273613, '2021-05-03 18:13:41', '2021-05-03 18:18:41'),
(35, 'Ally', 608939, '2021-05-03 18:13:56', '2021-05-03 18:18:56'),
(36, 'Ally', 889556, '2021-05-03 18:14:07', '2021-05-03 18:19:07'),
(37, 'Ally', 472140, '2021-05-03 18:14:45', '2021-05-03 18:19:45'),
(38, 'Ally', 111182, '2021-05-03 18:15:00', '2021-05-03 18:20:00'),
(39, 'Ally', 851928, '2021-05-03 18:16:43', '2021-05-03 18:21:43'),
(40, 'Ally', 823660, '2021-05-03 18:16:58', '2021-05-03 18:21:58'),
(41, 'Ally', 77344, '2021-05-03 18:17:31', '2021-05-03 18:22:31'),
(42, 'Ally', 39531, '2021-05-03 18:18:11', '2021-05-03 18:23:11'),
(43, 'Ally', 569303, '2021-05-03 18:20:20', '2021-05-03 18:25:20'),
(44, 'Ally', 467892, '2021-05-03 18:22:54', '2021-05-03 18:27:54'),
(45, 'Ally', 655309, '2021-05-03 18:23:05', '2021-05-03 18:28:05'),
(46, 'Ally', 405579, '2021-05-03 18:23:24', '2021-05-03 18:28:24'),
(47, 'Ally', 881523, '2021-05-03 18:26:13', '2021-05-03 18:31:13'),
(48, 'Ally', 137509, '2021-05-03 18:26:48', '2021-05-03 18:31:48'),
(49, 'Ally', 290082, '2021-05-03 18:27:42', '2021-05-03 18:32:42'),
(50, 'Ally', 825173, '2021-05-03 18:28:04', '2021-05-03 18:33:04'),
(51, 'Ally', 12539, '2021-05-03 18:33:30', '2021-05-03 18:38:30'),
(52, 'Ally', 889227, '2021-05-03 18:38:33', '2021-05-03 18:43:33'),
(53, 'Ally', 510201, '2021-05-03 18:39:09', '2021-05-03 18:44:09'),
(54, 'Ally', 297446, '2021-05-03 18:39:32', '2021-05-03 18:44:32'),
(55, 'ADMIN', 468639, '2021-05-03 18:40:59', '2021-05-03 18:45:59'),
(56, 'ADMIN', 537681, '2021-05-03 19:29:09', '2021-05-03 19:34:09'),
(57, 'ADMIN', 148186, '2021-05-03 20:10:02', '2021-05-03 20:15:02'),
(58, 'Ally', 79338, '2021-05-03 20:13:41', '2021-05-03 20:18:41'),
(59, 'ADMIN', 376185, '2021-05-03 20:14:40', '2021-05-03 20:19:40'),
(60, 'Ally', 525781, '2021-05-03 20:24:54', '2021-05-03 20:29:54'),
(61, 'Ally', 31361, '2021-05-03 20:25:13', '2021-05-03 20:30:13'),
(62, 'Ally', 428386, '2021-05-03 20:28:34', '2021-05-03 20:33:34'),
(63, 'ADMIN', 744213, '2021-05-03 20:29:36', '2021-05-03 20:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(44, 'ADMIN', 'ADMIN', 'admin123@gmail.com'),
(49, 'Ally', 'Ally123*', 'ally@nyahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acts`
--
ALTER TABLE `acts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authent`
--
ALTER TABLE `authent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bopols`
--
ALTER TABLE `bopols`
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
-- AUTO_INCREMENT for table `acts`
--
ALTER TABLE `acts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `authent`
--
ALTER TABLE `authent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `bopols`
--
ALTER TABLE `bopols`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
