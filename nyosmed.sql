-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 11:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nyosmed`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `password_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `email`, `password`, `password_text`) VALUES
(1, 'Saya Admin', 'nyosmed@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `block_list`
--

CREATE TABLE `block_list` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blocked_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`, `created_at`) VALUES
(41, 14, 2, 'test', '2022-01-21 11:26:41'),
(42, 15, 1, 'halo', '2022-01-27 17:34:47'),
(43, 20, 1, 'hai ini komentar', '2022-01-27 19:42:16'),
(44, 16, 5, 'wah bagus', '2022-01-27 19:43:37');

-- --------------------------------------------------------

--
-- Table structure for table `follow_list`
--

CREATE TABLE `follow_list` (
  `id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `follow_list`
--

INSERT INTO `follow_list` (`id`, `follower_id`, `user_id`) VALUES
(46, 3, 1),
(52, 1, 3),
(54, 1, 2),
(55, 5, 1),
(56, 5, 2),
(57, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `user_id`) VALUES
(1, 7, 1),
(12, 5, 1),
(14, 8, 1),
(23, 11, 1),
(24, 18, 1),
(25, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `msg` text NOT NULL,
  `read_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from_user_id`, `to_user_id`, `msg`, `read_status`, `created_at`) VALUES
(12, 2, 1, 'haloo', 1, '2022-01-21 11:27:51'),
(13, 1, 2, 'test', 1, '2022-01-21 16:18:20'),
(14, 1, 2, 'bacot', 1, '2022-01-21 17:37:22'),
(15, 1, 2, 'test anjc', 1, '2022-01-21 17:38:41'),
(16, 2, 1, 'gk ramah blok', 1, '2022-01-21 17:38:49'),
(17, 1, 2, 'bct blok', 0, '2022-01-21 17:38:59'),
(18, 1, 5, 'halo', 1, '2022-01-27 19:40:19'),
(19, 5, 1, 'halo juga', 0, '2022-01-27 19:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `from_user_id` int(11) NOT NULL,
  `read_status` int(11) NOT NULL,
  `post_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `to_user_id`, `message`, `created_at`, `from_user_id`, `read_status`, `post_id`) VALUES
(1, 3, 'commented on your post', '2022-01-05 15:55:36', 1, 1, '7'),
(2, 3, 'liked your post !', '2022-01-05 15:55:36', 1, 1, '8'),
(3, 3, 'commented on your post', '2022-01-05 15:55:36', 1, 1, '8'),
(4, 3, 'commented on your post', '2022-01-05 15:55:36', 1, 1, '8'),
(5, 3, 'blocked you', '2022-01-05 22:48:13', 1, 1, '0'),
(6, 3, 'Unblocked you !', '2022-01-05 22:48:13', 1, 1, '0'),
(7, 3, 'blocked you', '2022-01-05 22:48:13', 1, 1, '0'),
(8, 3, 'Unblocked you !', '2022-01-05 22:49:09', 1, 1, '0'),
(9, 3, 'Mulai mengikutimu !', '2022-01-05 22:49:09', 1, 1, '0'),
(10, 1, 'Mulai mengikutimu !', '2022-01-05 22:48:59', 3, 1, '0'),
(11, 3, 'Berhenti mengikutimu !', '2022-01-07 12:15:27', 1, 0, '0'),
(12, 3, 'Mulai mengikutimu !', '2022-01-07 12:15:32', 1, 0, '0'),
(13, 1, 'blocked you', '2022-01-21 16:05:02', 2, 1, '0'),
(14, 1, 'Unblocked you !', '2022-01-21 16:05:02', 2, 1, '0'),
(15, 1, 'blocked you', '2022-01-21 16:05:02', 2, 1, '0'),
(16, 1, 'Unblocked you !', '2022-01-21 16:05:02', 2, 1, '0'),
(17, 1, 'blocked you', '2022-01-21 16:05:02', 2, 1, '0'),
(18, 3, 'blocked you', '2022-01-21 11:24:32', 2, 0, '0'),
(19, 3, 'Unblocked you !', '2022-01-21 11:24:40', 2, 0, '0'),
(20, 1, 'Unblocked you !', '2022-01-21 16:05:02', 2, 1, '0'),
(21, 1, 'blocked you', '2022-01-21 16:05:02', 2, 1, '0'),
(22, 1, 'Unblocked you !', '2022-01-21 16:05:02', 2, 1, '0'),
(23, 1, 'blocked you', '2022-01-21 16:05:02', 2, 1, '0'),
(24, 1, 'Unblocked you !', '2022-01-21 16:05:02', 2, 1, '0'),
(25, 1, 'Mulai mengikutimu !', '2022-01-21 16:05:02', 2, 1, '0'),
(26, 3, 'Mulai mengikutimu !', '2022-01-21 11:28:09', 2, 0, '0'),
(27, 1, 'blocked you', '2022-01-21 16:05:02', 2, 1, '0'),
(28, 1, 'Unblocked you !', '2022-01-21 16:05:02', 2, 1, '0'),
(29, 1, 'Mulai mengikutimu !', '2022-01-21 16:05:02', 2, 1, '0'),
(30, 2, 'Mulai mengikutimu !', '2022-01-21 16:55:28', 1, 1, '0'),
(31, 3, 'Berhenti mengikutimu !', '2022-01-21 16:55:42', 2, 0, '0'),
(32, 3, 'Berhenti mengikutimu !', '2022-01-21 18:45:20', 1, 0, '0'),
(33, 3, 'Mulai mengikutimu !', '2022-01-21 18:45:26', 1, 0, '0'),
(34, 2, 'Berhenti mengikutimu !', '2022-01-22 23:02:24', 1, 1, '0'),
(35, 2, 'Mulai mengikutimu !', '2022-01-22 23:02:24', 1, 1, '0'),
(36, 2, 'menyukai postinganmu !', '2022-01-27 17:34:26', 1, 0, '18'),
(37, 2, 'commented on your post', '2022-01-27 17:34:47', 1, 0, '15'),
(38, 2, 'Berhenti mengikutimu !', '2022-01-27 17:35:15', 1, 0, '0'),
(39, 2, 'blocked you', '2022-01-27 17:35:31', 1, 0, '0'),
(40, 2, 'Unblocked you !', '2022-01-27 17:35:36', 1, 0, '0'),
(41, 2, 'Mulai mengikutimu !', '2022-01-27 17:37:58', 1, 0, '0'),
(42, 1, 'Mulai mengikutimu !', '2022-01-27 19:38:40', 5, 1, '0'),
(43, 2, 'Mulai mengikutimu !', '2022-01-27 19:37:15', 5, 0, '0'),
(44, 5, 'Mulai mengikutimu !', '2022-01-27 19:39:28', 1, 1, '0'),
(45, 5, 'menyukai postinganmu !', '2022-01-27 19:42:48', 1, 1, '20'),
(46, 5, 'commented on your post', '2022-01-27 19:42:48', 1, 1, '20'),
(47, 4, 'commented on your post', '2022-01-27 19:43:37', 5, 0, '16');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_img` text NOT NULL,
  `post_text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `post_img`, `post_text`, `created_at`) VALUES
(5, 1, '1640786846a9Exnj20_700w_0.jpg', 'HAI CANTIK!!', '2021-12-29 14:07:26'),
(7, 3, '164086729561cc9499a610d.jpg', 'oeyyyy', '2021-12-30 12:28:15'),
(8, 3, '164086930620211230_014749.png', 'qwedwqdq', '2021-12-30 13:01:46'),
(9, 1, '1641421094phone-frame9.png', 'Mangtaps!!!', '2022-01-05 22:18:14'),
(10, 1, '1641421540pngwing.com (2) (1).png', 'wewew', '2022-01-05 22:25:40'),
(11, 1, '1641422519Open Donation - Semeru 16-9.jpg', 'open donation', '2022-01-05 22:41:59'),
(12, 1, '1641569544macos-big-sur-1280x720-dark-wwdc-2020-22655.jpg', 'tampan', '2022-01-07 15:32:24'),
(14, 2, '1642764395ca5e148e-e242-4a0a-a92a-c3dec73fce8e.jpg', 'test', '2022-01-21 11:26:35'),
(15, 2, '1642764419271950264_4563003233812451_4096570742313378017_n.jpg', 'bleee', '2022-01-21 11:26:59'),
(16, 4, '1642852459wallpaperflare.com_wallpaper.jpg', 'ingfo kompetisi radeon', '2022-01-22 11:54:19'),
(17, 4, '1642856515wallpaperflare.com_wallpaper (3).jpg', 'very much <3', '2022-01-22 13:01:55'),
(18, 2, '1642856584activitydiagra_formatif_apsi.png', 'test', '2022-01-22 13:03:04'),
(19, 1, '16433050430c5e38f8-5c74-4b42-9449-7e6b90e85972.jpg', 'ini wireframe kita', '2022-01-27 17:37:23'),
(20, 5, '16433124927cc7c254-c75c-43aa-b458-6204d3214545.jpg', 'halo ini rancangan project prototype aplikasi ku', '2022-01-27 19:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `gender` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` text NOT NULL,
  `profile_pic` text NOT NULL DEFAULT 'default_profile.jpg',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL,
  `ac_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `email`, `username`, `password`, `profile_pic`, `created_at`, `update_at`, `ac_status`) VALUES
(1, 'test', 'test', 2, 'afterdusk55@gmail.com', 'mengcoba', '098f6bcd4621d373cade4e832627b4f6', '1640784137a9Exnj20_700w_0.jpg', '2022-01-21 18:29:06', NULL, 1),
(2, 'kentang', 'kentang', 2, 'rizkyananta75@gmail.com', 'kentang', 'ba2eb2e37ccb545b35cc92f21dbe2dbf', '1640701489pexels-scott-webb-532563.jpg', '2021-12-28 14:24:49', NULL, 1),
(3, 'hola', 'hola', 2, 'hola@gmail.com', 'hola', '4d186321c1a7f0f354b297e8914ab240', 'default_profile.jpg', '2022-01-27 17:41:45', NULL, 2),
(4, 'ini', 'Organisasi', 2, 'organisasi@gmail.com', 'organisasi', '202cb962ac59075b964b07152d234b70', 'default_profile.jpg', '2022-01-22 12:44:55', NULL, 4),
(5, 'demo', 'test', 1, 'flickbyte22@gmail.com', 'demo', '81dc9bdb52d04dc20036dbd8313ed055', 'default_profile.jpg', '2022-01-27 19:46:53', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `block_list`
--
ALTER TABLE `block_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow_list`
--
ALTER TABLE `follow_list`
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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `block_list`
--
ALTER TABLE `block_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `follow_list`
--
ALTER TABLE `follow_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
