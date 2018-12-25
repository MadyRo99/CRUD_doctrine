-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 11:30 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctrine_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id_articles` int(11) NOT NULL,
  `uid_articles` int(11) DEFAULT NULL,
  `uid_user` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id_articles`, `uid_articles`, `uid_user`, `title`, `category`, `text`, `tags`, `created`, `modified`) VALUES
(11, NULL, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 1, 'In luctus tellus volutpat, volutpat libero eu, semper arcu. Integer id mattis tortor. Donec pulvinar eros vel nisi eleifend, id ornare nunc viverra. Proin sed suscipit nibh. Mauris vitae purus in diam gravida consectetur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur id dui urna. Morbi et suscipit orci, eu elementum felis. Nam ac bibendum felis. Maecenas eu tristique erat. Integer congue, libero venenatis luctus sodales, erat nibh vulputate ligula, eget accumsan nunc nulla ac lacus. Donec ornare ipsum non enim pellentesque consequat. Sed ultricies placerat orci, quis aliquam tortor euismod id. Nullam pretium dapibus sapien, sit amet vulputate odio consequat a. Duis non ipsum ultricies, consequat quam nec, vulputate tortor. Morbi est mauris, lobortis et aliquam a, volutpat vitae est.', 'integer, neque, justo', '2018-12-25 23:08:37', '2018-12-25 23:08:37'),
(12, NULL, 1, 'Phasellus ipsum metus, ullamcorper a efficitur eget, pretium a nisl', 4, 'Integer ornare, ipsum vel fermentum dignissim, nisi ligula hendrerit urna, rhoncus mollis massa leo nec augue. Nunc consequat scelerisque eros, eget posuere diam dictum id. Nullam dapibus tempor lacus ac cursus. Maecenas facilisis sapien quis lacus scelerisque, et viverra dui pharetra. Aenean laoreet risus in iaculis varius. Aliquam sagittis pellentesque justo, eget ultricies diam. Pellentesque molestie lectus eu posuere fringilla.', 'laoreet, risus, varius', '2018-12-25 23:11:53', '2018-12-25 23:11:53'),
(13, NULL, 2, 'Quisque convallis vehicula ante, eget hendrerit dui ullamcorper vel', 3, 'Etiam condimentum sed arcu a gravida. Maecenas id mi venenatis, dignissim justo at, sollicitudin sem. Ut aliquet metus eu nunc commodo ultricies. Suspendisse consectetur congue velit eget euismod. Integer varius, sapien consectetur hendrerit aliquet, justo justo hendrerit nibh, non ultrices justo urna nec sem. Nullam nec velit porttitor, viverra nulla at, convallis odio. Mauris sed pretium augue. Nam lacus nisi, convallis pharetra ultrices ultricies, placerat sit amet sapien. Quisque sodales pellentesque velit non pellentesque. Praesent lobortis pretium metus vel vehicula. Donec a massa vel tortor sollicitudin placerat. Sed eget consectetur ex. Donec varius enim vel sapien gravida, eu iaculis augue finibus. Aliquam nec hendrerit lectus, in fermentum nisl. Aenean ut purus nec leo feugiat elementum. Suspendisse risus urna, blandit eu dapibus nec, condimentum a lacus.', 'purus, elementum, risus, urna, blandit', '2018-12-25 23:28:52', '2018-12-25 23:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_categories` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `count_articles` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_categories`, `name`, `count_articles`) VALUES
(1, 'Politic', NULL),
(2, 'IT', NULL),
(3, 'Sport', NULL),
(4, 'Monden', NULL),
(5, 'Stiri', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `uid_users` int(11) DEFAULT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '0-INITIAL; 1-APPROVED',
  `type` int(11) DEFAULT NULL COMMENT '0-USER; 1-ADMINISTRATOR',
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `uid_users`, `name`, `username`, `email`, `password`, `status`, `type`, `created`, `last_login`) VALUES
(1, NULL, 'Mady', 'madyro', 'mady@gmail.com', 'deaf74062a3b2a8d007c189b93953a6ccca1c87b', '0', 0, '2018-12-24 23:28:31', NULL),
(2, NULL, 'Mady', 'madyxd', 'madyyy@gmail.com', 'deaf74062a3b2a8d007c189b93953a6ccca1c87b', '0', 0, '2018-12-25 19:06:16', NULL),
(3, NULL, 'Marius', 'mariusRO', 'marius@gmail.com', 'deaf74062a3b2a8d007c189b93953a6ccca1c87b', '0', 0, '2018-12-25 20:00:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_articles`),
  ADD UNIQUE KEY `UNIQ_BFDD316843BD5C9A` (`uid_articles`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`),
  ADD UNIQUE KEY `UNIQ_3AF346685E237E06` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `UNIQ_1483A5E9F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`),
  ADD UNIQUE KEY `UNIQ_1483A5E9C319A984` (`uid_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_articles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
