-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 09:18 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mychat`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_profile` varchar(255) NOT NULL,
  `user_country` text NOT NULL,
  `user_gender` text NOT NULL,
  `forgotten_answer` varchar(100) NOT NULL,
  `log_in` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_profile`, `user_country`, `user_gender`, `forgotten_answer`, `log_in`) VALUES
(4, 'Rafi', '87654321', 'rafi@gmail.com', 'images/WIN_20190530_19_14_26_Pro.jpg.3', 'USA', 'Male', 'rafi', 'Offline'),
(5, 'Sweety', '12345678', 'sweety@gmail.com', 'images/12552717_110135002702537_8587983989449163475_n.jpg.98', 'Bangladesh', 'Female', 'sumaiya', 'Offline'),
(13, 'Sumaiya', '7654321', 'sumaiya@gmail.com', 'images/img1495915209328.jpg.28', 'Bangladesh', 'Female', 'mumu', 'Offline');

-- --------------------------------------------------------

--
-- Table structure for table `users_chat`
--

CREATE TABLE `users_chat` (
  `msg_id` int(11) NOT NULL,
  `sender_username` varchar(100) NOT NULL,
  `receiver_username` varchar(100) NOT NULL,
  `msg_content` varchar(255) NOT NULL,
  `msg_status` text NOT NULL,
  `msg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_chat`
--

INSERT INTO `users_chat` (`msg_id`, `sender_username`, `receiver_username`, `msg_content`, `msg_status`, `msg_date`) VALUES
(1, 'Rafi', 'Rafi', 'hello', 'read', '2019-08-03 15:13:00'),
(2, 'Rafi', 'Tasnim', 'hello', 'read', '2019-08-03 15:13:11'),
(3, 'Rafi', 'Tasnim', 'hello', 'read', '2019-08-03 15:13:42'),
(4, 'Rafi', 'Sweety', 'hey', 'unread', '2019-08-03 15:13:54'),
(5, 'Rafi', 'Sweety', 'hey', 'unread', '2019-08-03 15:13:59'),
(6, 'Rafi', 'Sweety', 'hey', 'unread', '2019-08-03 15:14:14'),
(7, 'Rafi', 'Sweety', 'hey', 'unread', '2019-08-03 15:14:21'),
(8, 'Rafi', 'Tasnim', 'how are you', 'read', '2019-08-03 15:14:39'),
(9, 'Tasnim', 'Rafi', 'hi..', 'unread', '2019-08-03 15:30:31'),
(10, 'Tasnim', 'Rafi', 'hi..', 'unread', '2019-08-03 15:30:38'),
(11, 'Tasnim', 'Tasnim12', 'hello', 'unread', '2019-08-03 15:31:51'),
(12, 'Rafi', 'Sweety', 'hello', 'unread', '2019-08-04 07:13:41'),
(13, 'Rafi', 'Sweety', 'hello', 'unread', '2019-08-04 07:13:50'),
(14, 'Polash', 'Sweety', 'hi', 'unread', '2019-08-06 06:54:15'),
(15, 'Polash', 'Sweety', 'hi', 'unread', '2019-08-06 06:54:22'),
(16, 'Rafi', 'Mumu', 'hi', 'unread', '2019-08-06 08:25:31'),
(17, 'Rafi', 'Mumu', 'hi', 'unread', '2019-08-06 08:25:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_chat`
--
ALTER TABLE `users_chat`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users_chat`
--
ALTER TABLE `users_chat`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
