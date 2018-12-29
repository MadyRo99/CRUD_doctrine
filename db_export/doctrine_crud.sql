-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2018 at 11:53 PM
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
  `uid_articles` int(11) NOT NULL,
  `uid_user` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id_articles`, `uid_articles`, `uid_user`, `title`, `category`, `text`, `tags`, `created`, `modified`) VALUES
(1, 662415, 963295, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 1, 'Mauris eu semper risus, sed vestibulum tellus. Curabitur auctor nulla eget sem dignissim, ac semper turpis gravida. Praesent vitae dui et sapien scelerisque interdum vulputate a sem. Donec rutrum metus ut enim dapibus dictum. Donec sed imperdiet orci. Phasellus in eros mattis, feugiat purus sit amet, lobortis dui. Nullam lectus nulla, venenatis a ipsum ac, vehicula sollicitudin sapien. Ut convallis ante ultricies, blandit ante sagittis, pharetra odio. Pellentesque accumsan augue a dolor egestas luctus. Proin feugiat interdum congue. Proin finibus non ipsum eget ornare. Fusce est diam, aliquet quis auctor ut, elementum in augue. Vivamus a sapien id tortor scelerisque pulvinar. Proin in metus suscipit, placerat nunc a, pharetra lectus. Proin sagittis mauris eu eros fermentum tincidunt. Integer eget venenatis lacus.', 'lorem, ipsum, dolor, amet', '2018-12-29 23:51:48', '2018-12-29 23:51:48');

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
  `uid_users` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT '0-INITIAL; 1-APPROVED',
  `type` int(11) NOT NULL COMMENT '0-USER; 1-ADMINISTRATOR',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `uid_users`, `name`, `username`, `email`, `password`, `status`, `type`, `created`, `last_login`) VALUES
(1, 963295, 'Madalin', 'MadyRo', 'madalindanescu99@gmail.com', '51abb9636078defbf888d8457a7c76f85c8f114c', '0', 0, '2018-12-29 23:50:27', '2018-12-29 23:52:05');

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
  ADD UNIQUE KEY `UNIQ_1483A5E9C319A984` (`uid_users`),
  ADD UNIQUE KEY `UNIQ_1483A5E9F85E0677` (`username`),
  ADD UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_articles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
