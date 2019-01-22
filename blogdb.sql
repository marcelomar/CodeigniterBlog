-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2019 at 10:04 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`) VALUES
(1, 'Sport'),
(2, 'Business'),
(3, 'politic');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `posts_id` int(11) NOT NULL,
  `category_id` varchar(220) NOT NULL,
  `title` varchar(220) NOT NULL,
  `body` varchar(220) NOT NULL,
  `slug` varchar(220) NOT NULL,
  `post_image` varchar(220) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`posts_id`, `category_id`, `title`, `body`, `slug`, `post_image`, `date`) VALUES
(9, '1', 'La communaute comorienne', '<p>So in this tutorial we have focused on one of the topic of codeigniter which might have beneficial for&nbsp;</p>\r\n', '9', 'avatar2.png', '2017-01-09 08:09:40'),
(10, '2', 'La communaute comorienne', '<p>Thus far we have only been dealing with errors. It&rsquo;s time to repopulate the form field with the submitted data. CodeIgniter offers several helper functions that permit you to do this. The one you will use most c', '', 'user-bg.png', '2017-01-10 09:58:52'),
(11, '2', 'Nouvel an du reforme', '<p>Thus far we have only been dealing with errors. It&rsquo;s time to repopulate the form field with the submitted data. CodeIgniter offers several helper functions that permit you to do this. The one you will use most c', '11', 'saturation.png', '2017-01-10 09:59:36'),
(12, '2', 'Tu quittes la maison pour aller au travail.', '<p>Multimillionnaire, je me l&egrave;ve a 4h du matin pour prier Allah&nbsp;<br />\r\nMasha&#39;Allah qu&#39;Allah nous guide tous vers le droit chemin.&nbsp;Friendship Anniversary with the sage gentle Prof. to be. Glad wi', '', 'noimage.jpg', '2017-01-12 15:53:34'),
(13, '2', 'Bootstrap Collapse home page', '<p>So in this tutorial we have focused on one of the topic of codeigniter which might have beneficial for you to understand it&rsquo;s complete functionality&nbsp;Multimillionnaire, je me l&egrave;ve a 4h du matin pour p', '13', 'home.jpg', '2017-01-18 17:57:49'),
(15, '3', 'this is a post', '<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;This is a short description. Lorem ', '', 'logo.jpg', '2018-04-10 06:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `register_id` int(11) NOT NULL,
  `fname` varchar(220) NOT NULL,
  `lname` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `password` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Marcel', 'Omar', 'elhapapa@gmail.com', 'elhapapa11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`posts_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`register_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `posts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
