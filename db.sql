-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 10:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bagisto`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(5) NOT NULL,
  `user` varchar(20) NOT NULL,
  `post` varchar(20) NOT NULL,
  `text` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user`, `post`, `text`) VALUES
(1, 'saqib_ali', '73', '000a'),
(2, 'saqib_ali', '73', '000addsa dasd asd'),
(3, 'saqib_ali', '73', 'dsadasdsa dasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `friend_requests`
--

CREATE TABLE `friend_requests` (
  `id` int(11) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `username`, `post_id`) VALUES
(33, 'akhil_reddy', 66),
(34, 'akhil_reddy', 67),
(35, 'mickey_mouse', 68),
(36, 'tom_jerry', 66),
(37, 'tom_jerry', 69),
(38, 'tom_jry', 71),
(39, 'tom_jry', 66),
(40, 'tom_jry', 72),
(41, 'akhil_reddy', 72),
(42, 'akhil_reddy', 71);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `date` datetime NOT NULL,
  `opened` varchar(3) NOT NULL,
  `viewed` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_to`, `user_from`, `body`, `date`, `opened`, `viewed`, `deleted`) VALUES
(44, 'akhil_reddy', 'akhil_reddy', 'hiiii', '2018-05-29 15:32:46', 'yes', 'no', 'no'),
(45, 'akhil_reddy', 'akhil_reddy', 'hellooo\r\n', '2018-05-30 20:53:23', 'yes', 'no', 'no'),
(46, 'mickey_mouse', 'akhil_reddy', 'hiii\r\n', '2018-05-30 20:53:52', 'yes', 'no', 'no'),
(47, 'mickey_mouse', 'akhil_reddy', 'hiii\r\n', '2018-05-30 20:57:32', 'yes', 'no', 'no'),
(48, 'mickey_mouse', 'mickey_mouse', 'hiiii', '2018-05-30 22:36:42', 'yes', 'no', 'no'),
(49, 'akhil_reddy', 'mickey_mouse', 'helooo\r\n', '2018-05-30 22:37:16', 'yes', 'no', 'no'),
(50, 'akhil_reddy', 'mickey_mouse', 'whats up bro??\r\n', '2018-05-30 22:40:00', 'yes', 'no', 'no'),
(51, 'akhil_reddy', 'akhil_reddy', 'hello', '2018-05-31 04:10:52', 'yes', 'no', 'no'),
(52, 'akhil_reddy', 'tom_jry', 'hiii akhil', '2018-05-31 05:36:19', 'yes', 'no', 'no'),
(53, 'tom_jry', 'akhil_reddy', 'hiii tom', '2018-05-31 05:37:10', 'yes', 'no', 'no'),
(54, 'tom_jry', 'akhil_reddy', 'how you doing??', '2018-05-31 05:37:22', 'yes', 'no', 'no'),
(55, 'akhil_reddy', 'tom_jry', 'good what about you da', '2018-05-31 05:37:59', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL,
  `added_by` varchar(60) NOT NULL,
  `user_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `added_by`, `user_to`, `date_added`, `user_closed`, `deleted`, `likes`) VALUES
(66, 'hello', 'akhil_reddy', 'none', '2018-05-29 14:53:43', 'no', 'no', 3),
(67, 'hello!! Good afternoon', 'mickey_mouse', 'none', '2018-05-30 15:36:27', 'no', 'no', 1),
(68, 'Hiii akhil!! what\'s up??', 'mickey_mouse', 'akhil_reddy', '2018-05-30 16:33:51', 'no', 'yes', 1),
(69, 'hiii akhil..!! whats up??', 'tom_jerry', 'akhil_reddy', '2018-05-31 04:55:53', 'no', 'yes', 1),
(70, 'hiii', 'tom_jerry', 'none', '2018-05-31 05:26:32', 'no', 'yes', 0),
(71, 'hiiii', 'tom_jry', 'none', '2018-05-31 05:34:56', 'no', 'no', 2),
(72, 'hiiii akhil whats up??', 'tom_jry', 'akhil_reddy', '2018-05-31 05:35:25', 'no', 'no', 2),
(73, 'aaasd', 'saqib_ali', 'none', '2021-06-10 10:01:57', 'no', 'no', 0),
(74, 'aaa', 'saqib_ali_1', 'none', '2021-06-21 05:59:08', 'no', 'no', 0),
(76, '', 'saqib_ali_1', 'none', '2021-06-21 06:07:56', 'no', 'no', 0),
(77, '', 'saqib_ali_1', 'none', '2021-06-21 06:08:04', 'no', 'no', 0),
(78, '', 'saqib_ali_1', 'none', '2021-06-21 06:08:07', 'no', 'no', 0),
(81, 'test post', 'akhil_reddy', '', '2021-06-22 09:52:02', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signup_date` date NOT NULL,
  `profile_pic` mediumtext NOT NULL,
  `num_posts` int(11) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `friend_array` text NOT NULL,
  `disabled` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `profile_pic`, `num_posts`, `num_likes`, `user_closed`, `friend_array`, `disabled`) VALUES
(12, 'Akhil', 'Reddy', 'akhil_reddy', 'akhilmallidi.98@gmail.com', 'ec2da3ad44ecbd2e3909224ec40ce3a3', '2018-05-29', 'assets/images/profile_pics/akhil_reddy6e2fccee03881d0690fdc3638696ea90n.jpeg', 1, 3, 'no', ',mickey_mouse,tom_jerry,tom_jry,', ''),
(13, 'Mickey', 'Mouse', 'mickey_mouse', 'mickeymouse@gmail.com', 'd04c3ce567c9025db783cccd2f8957f3', '2018-05-30', 'assets/images/profile_pics/mickey_mouse924359ce696bac0c368f1943f8031b5cn.jpeg', 2, 2, 'no', ',akhil_reddy,', ''),
(14, 'Tom', 'Jerry', 'tom_jerry', 'tomandjerry@gmail.com', '5caf72868c94f184650f43413092e82c', '2018-05-31', 'assets/images/profile_pics/defaults/head_wet_asphalt.png', 2, 1, 'yes', ',akhil_reddy,', ''),
(15, 'Tom', 'Jerry', 'tom_jry', 'tom@gmail.com', 'b17f6bd009703d6f800760d3b9222e26', '2018-05-31', 'assets/images/profile_pics/tom_jry6154f51837c8d33585e99362bd5b982fn.jpeg', 2, 4, 'no', ',akhil_reddy,', ''),
(16, 'Saqib', 'Ali', 'saqib_ali', 'user@mail.com', '0659c7992e268962384eb17fafe88364', '2021-06-09', 'assets/profile_pics/saqib_ali.jpg', 1, 0, 'no', ',', '1'),
(17, 'Saqib', 'Ali', 'saqib_ali_1', 'mpsctnpk@gmail.com', '0659c7992e268962384eb17fafe88364\r\n', '2021-06-21', 'assets/images/profile_pics/defaults/head_wet_asphalt.png', 3, 0, 'yes', ',', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_requests`
--
ALTER TABLE `friend_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `friend_requests`
--
ALTER TABLE `friend_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
