-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2018 at 07:44 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `amounts`
--

CREATE TABLE `amounts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amounts`
--

INSERT INTO `amounts` (`id`, `user_id`, `post_id`, `comment_id`, `amount`, `total`, `updated_at`, `created_at`) VALUES
(1, 12, NULL, NULL, 100, 100, '2018-11-10 13:28:03', '2018-11-10 13:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `account_title` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Category'),
(2, 'Category1'),
(3, 'Category3'),
(4, 'category4'),
(5, 'Category5');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `expiry` timestamp NULL DEFAULT NULL,
  `number` varchar(255) NOT NULL,
  `status` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `title`, `expiry`, `number`, `status`, `created_at`, `updated_at`, `price`) VALUES
(1, 'test', '2018-11-07 19:00:00', 'QCABNI12029777ABDRY091', 1, '2018-11-06 08:41:16', '2018-11-10 18:13:23', 100),
(2, 'test', '2018-11-07 19:00:00', 'QCABNI12069090ABDRY097', 1, '2018-11-06 08:41:16', '2018-11-10 18:16:01', 100),
(3, 'test', '2018-11-07 19:00:00', 'QCABNI12002140ABDRY099', 1, '2018-11-06 08:41:17', '2018-11-10 18:18:26', 100),
(4, 'test', '2018-11-07 19:00:00', 'QCABNI12050414ABDRY095', 1, '2018-11-06 08:41:17', '2018-11-10 18:19:55', 100),
(5, 'test', '2018-11-07 19:00:00', 'QCABNI12033622ABDRY096', 1, '2018-11-06 08:41:17', '2018-11-10 18:21:08', 100),
(6, 'test', '2018-11-07 19:00:00', 'QCABNI12052947ABDRY093', 0, '2018-11-06 08:41:17', '2018-11-06 08:41:17', 100),
(7, 'test', '2018-11-07 19:00:00', 'QCABNI12007422ABDRY095', 1, '2018-11-06 08:41:17', '2018-11-10 18:28:02', 100),
(8, 'test', '2018-11-07 19:00:00', 'QCABNI12062492ABDRY090', 0, '2018-11-06 08:41:17', '2018-11-06 08:41:17', 100),
(9, 'test', '2018-11-07 19:00:00', 'QCABNI12040362ABDRY092', 0, '2018-11-06 08:41:17', '2018-11-06 08:41:17', 100),
(10, 'test', '2018-11-07 19:00:00', 'QCABNI12021532ABDRY097', 0, '2018-11-06 08:41:17', '2018-11-06 08:41:17', 100),
(11, 'test', '2018-11-07 19:00:00', 'QCABNI12029777ABDRY091', 1, '2018-11-06 08:48:01', '2018-11-10 18:14:30', 100),
(12, 'test', '2018-11-07 19:00:00', 'QCABNI12069090ABDRY097', 1, '2018-11-06 08:48:01', '2018-11-10 18:17:24', 100),
(13, 'test', '2018-11-07 19:00:00', 'QCABNI12002140ABDRY099', 0, '2018-11-06 08:48:01', '2018-11-06 08:48:01', 100),
(14, 'test', '2018-11-07 19:00:00', 'QCABNI12050414ABDRY095', 0, '2018-11-06 08:48:01', '2018-11-06 08:48:01', 100),
(15, 'test', '2018-11-07 19:00:00', 'QCABNI12033622ABDRY096', 0, '2018-11-06 08:48:01', '2018-11-06 08:48:01', 100),
(16, 'test', '2018-11-07 19:00:00', 'QCABNI12052947ABDRY093', 0, '2018-11-06 08:48:01', '2018-11-06 08:48:01', 100),
(17, 'test', '2018-11-07 19:00:00', 'QCABNI12007422ABDRY095', 1, '2018-11-06 08:48:01', '2018-11-10 18:28:03', 100),
(18, 'test', '2018-11-07 19:00:00', 'QCABNI12062492ABDRY090', 0, '2018-11-06 08:48:01', '2018-11-06 08:48:01', 100),
(19, 'test', '2018-11-07 19:00:00', 'QCABNI12040362ABDRY092', 0, '2018-11-06 08:48:01', '2018-11-06 08:48:01', 100),
(20, 'test', '2018-11-07 19:00:00', 'QCABNI12021532ABDRY097', 0, '2018-11-06 08:48:01', '2018-11-06 08:48:01', 100);

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `ip` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`) VALUES
(1, 'Main'),
(2, 'Trending');

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

CREATE TABLE `menu_item` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `priority` int(11) DEFAULT NULL,
  `menus_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`id`, `categories_id`, `priority`, `menus_id`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2),
(3, 4, 3, 1),
(4, 5, 4, 1),
(5, 3, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `is_deleted` int(2) DEFAULT NULL,
  `is_featured` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `users_id`, `title`, `description`, `featured_image`, `is_deleted`, `is_featured`, `created_at`, `updated_at`, `status`) VALUES
(1, 5, 'test', '<p>adfasvcsdc<img src=\"/photos/5/screenshot-localhost-8000-2018.11.01-22-01-51.png\" alt=\"\" /></p>', '1541487159screenshot-localhost-8000-2018.11.01-17-17-41.png', 0, 0, '2018-11-06 06:52:39', '2018-11-06 11:58:42', 0),
(2, 5, 'csvsca', '<p>vaxvasdvasdvasv</p>', '1541488334screenshot-localhost-8000-2018.11.01-22-01-51.png', NULL, 0, '2018-11-06 07:12:14', '2018-11-06 12:12:14', 0),
(3, 5, 'fasdfasfasdfs', '<p>asfasfasfasdfasdfasfasfas</p>', '1541488388screenshot-localhost-8000-2018.11.01-22-01-51.png', NULL, 0, '2018-11-06 07:13:08', '2018-11-06 12:13:08', 0),
(4, 5, 'fasfasfasfasf', '<p>fasfasfasdfasdfasdf</p>', '1541488532screenshot-localhost-8000-2018.11.01-17-17-41.png', 0, 0, '2018-11-06 07:15:32', '2018-11-06 12:15:32', 0),
(5, 5, 'sdcasdfasfsd', '<p>afasdfasdfasfs<strong>afasfasdfasfasdf</strong></p>', '1541496002screenshot-localhost-8000-2018.11.01-17-17-41.png', 0, 0, '2018-11-06 09:20:02', '2018-11-06 14:20:02', 0),
(6, 5, 'sdcasdfasfsd', '<p>afasdfasdfasfs<strong>afasfasdfasfasdf</strong></p>', '1541496266screenshot-localhost-8000-2018.11.01-17-17-41.png', 0, 0, '2018-11-06 09:24:26', '2018-11-06 14:24:26', 0),
(7, 5, 'sdcasdfasfsd', '<p>afasdfasdfasfs<strong>afasfasdfasfasdf</strong></p>', '1541496294screenshot-localhost-8000-2018.11.01-17-17-41.png', 0, 0, '2018-11-06 09:24:54', '2018-11-06 14:24:54', 0),
(8, 5, 'sdcasdfasfsd', '<p>afasdfasdfasfs<strong>afasfasdfasfasdf</strong></p>', '1541496298screenshot-localhost-8000-2018.11.01-17-17-41.png', 0, 0, '2018-11-06 09:24:58', '2018-11-06 14:24:58', 0),
(9, 5, 'afdfasdfasdf', '<p>asfasdfasdfasdf</p>', '1541496338screenshot-localhost-8000-2018.11.01-17-17-41.png', 0, 0, '2018-11-06 09:25:38', '2018-11-06 14:25:38', 0),
(10, 5, 'aasfgasdfasdfasdfasfasfas', '<p>fasfasfasfasdfasdfasdf</p>', '1541496426screenshot-localhost-8000-2018.11.01-17-17-41.png', 0, 0, '2018-11-06 09:27:06', '2018-11-06 14:27:06', 0),
(11, 5, 'adfsdfasfasdfasdfas', '<p>fasdfasfasfasf<strong>asfasfasdfasdf</strong>asfs<strong>fasfasdf</strong></p>', '1541496704screenshot-localhost-8000-2018.11.01-17-17-41.png', 0, 0, '2018-11-06 09:31:44', '2018-11-06 14:31:44', 0),
(12, 5, 'adfsdfasfasdfasdfas', '<p>fasdfasfasfasf<strong>asfasfasdfasdf</strong>asfs<strong>fasfasdf</strong></p>', '1541496731screenshot-localhost-8000-2018.11.01-17-17-41.png', 0, 0, '2018-11-06 09:32:11', '2018-11-06 14:32:11', 0),
(13, 1, 'asdasdadasd', '<p>asdasdasdas</p>', '1541621185atif image.jpg', 0, 0, '2018-11-07 20:06:25', '2018-11-08 01:06:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts_categories`
--

CREATE TABLE `posts_categories` (
  `id` int(11) NOT NULL,
  `posts_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts_categories`
--

INSERT INTO `posts_categories` (`id`, `posts_id`, `categories_id`) VALUES
(1, 12, 1),
(2, 12, 2),
(3, 13, 1),
(4, 13, 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts_comment`
--

CREATE TABLE `posts_comment` (
  `id` int(11) NOT NULL,
  `posts_id` int(11) NOT NULL,
  `comment` text,
  `status` int(11) NOT NULL DEFAULT '0',
  `users_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts_comment`
--

INSERT INTO `posts_comment` (`id`, `posts_id`, `comment`, `status`, `users_id`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'asdasdasd', 1, 1, NULL, '2018-11-08 16:44:49', '2018-11-08 17:57:14'),
(2, 1, 'asdasd', 0, 1, NULL, '2018-11-08 17:01:46', '2018-11-08 17:01:46'),
(3, 1, 'asdasdas a asd adas asda', 1, 1, NULL, '2018-11-08 17:03:00', '2018-11-08 17:57:18'),
(4, 1, 'asdasdasdasdasdasd', 0, 1, NULL, '2018-11-08 17:51:14', '2018-11-08 17:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `posts_image`
--

CREATE TABLE `posts_image` (
  `id` int(11) NOT NULL,
  `posts_id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `isread` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `referral` int(11) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role` int(2) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `qualification`, `referral`, `username`, `password`, `email`, `address`, `status`, `created_at`, `updated_at`, `role`, `remember_token`) VALUES
(1, 'johan', 'vick', '1221215123', 'test qualification', NULL, 'johan', '$2y$10$9ZAJkfaYLv3FbnIp7ISaxeJmE1qAmiSikW0y49K4AHMso6HfFX5mi', 'johan@mail.com', '$2y$10$9ZAJkfaYLv3FbnIp7ISaxeJmE1qAmiSikW0y49K4AHMso6HfFX5mi', 1, '2018-10-27 13:59:10', '2018-11-10 17:36:18', 1, 'yMLHXFPlP28nhYwrct9OPHr90g1sEkbxqlm0IISjAuNdjiuIyWAKecaeES69'),
(5, 'Super', 'Admin', '03234895898', 'Bscs', 2, 'jd@gmail.com', '$2y$10$9ZAJkfaYLv3FbnIp7ISaxeJmE1qAmiSikW0y49K4AHMso6HfFX5mi', 'aliraza4958990@gmail.com', 'Home', 1, '2018-11-05 00:50:26', '2018-11-08 15:03:40', 2, 'l8EhlkoptEM2EhJy2IlRTaAO9d8jPaGpgw07BdF9eRrmwEyfvt6ExOqUWjBk'),
(7, 'Amir', 'khan', '064612as56d', 'abscs', 123, 'amirkhan', NULL, 'amirkhan@gmail.com', 'honeweiorew', 1, '2018-11-05 04:14:17', '2018-11-05 09:21:35', 2, NULL),
(8, 'saeed', 'sheikh', '0315681', 'Bscs', 3, 'saeedsheikh', '$2y$10$lnazZgPldMly1Mr5pXVfk.EDA/Vb8.b2.RPMhxlQEYXyTt8DfspZK', 'saeed@gmail.com', 'honeweiorew', 1, '2018-11-05 04:45:46', '2018-11-05 04:45:46', 2, NULL),
(9, 'Atif', 'malik', '123456', 'qwewq', NULL, '12121212121212', '$2y$10$vjBRL92Zd0RFuy1NbVzD8ehDKjb6SqQq5Sdh1NSn/GLdqPepEnGJy', 'atif_slack@technologicalinc.com', 'asdasd, asdas', 1, '2018-11-10 13:18:26', '2018-11-10 13:18:26', 2, NULL),
(10, 'Atif', 'malik', '123456', '12345', NULL, '1232sadasd', '$2y$10$2.6/1CGoKT0eA6OIT0GQN.o1bdelWurS1Y60ge2n9uwP.7lYOOhwG', 'atif_slack@technologicalinc.com', 'asdasd, asdas', 1, '2018-11-10 13:19:55', '2018-11-10 13:19:55', 2, NULL),
(11, 'Atif', 'malik', '123456', '1231', NULL, 'johan@mail.com', '$2y$10$o4uhz6Ed56xsZFu79Gm/Me91b3YUjoOZVpxD8cgTlz9u40pyk6p6O', 'atif_slack@technoloasdasdgicalinc.com', 'asdasd, asdas', 1, '2018-11-10 13:21:08', '2018-11-10 13:21:08', 2, NULL),
(12, 'admin', 'admin', '123456', 'admin', NULL, 'admin', '$2y$10$9ZAJkfaYLv3FbnIp7ISaxeJmE1qAmiSikW0y49K4AHMso6HfFX5mi', 'admin@gmail.com', '123456', 1, '2018-11-10 13:28:03', '2018-11-10 18:34:36', 1, '3qcKXf07dd94iHWk7x28Lj63pIt8engH9pMJeuqHE5JVFM3JXjvfdjUlQGIM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amounts`
--
ALTER TABLE `amounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_id` (`categories_id`),
  ADD KEY `menus_id` (`menus_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `posts_categories`
--
ALTER TABLE `posts_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_id` (`posts_id`),
  ADD KEY `categories_id` (`categories_id`);

--
-- Indexes for table `posts_comment`
--
ALTER TABLE `posts_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_id` (`posts_id`,`users_id`);

--
-- Indexes for table `posts_image`
--
ALTER TABLE `posts_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_id` (`posts_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
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
-- AUTO_INCREMENT for table `amounts`
--
ALTER TABLE `amounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `posts_categories`
--
ALTER TABLE `posts_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts_comment`
--
ALTER TABLE `posts_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts_image`
--
ALTER TABLE `posts_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
