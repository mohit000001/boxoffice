-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2008 at 09:03 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `boxoffice`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_histroy`
--

CREATE TABLE IF NOT EXISTS `event_histroy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` text NOT NULL,
  `event_name` text NOT NULL,
  `event_date` date NOT NULL,
  `apply_date` datetime NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `fee` text NOT NULL,
  `event_place` text NOT NULL,
  `pay_status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `event_histroy`
--

INSERT INTO `event_histroy` (`id`, `uname`, `event_name`, `event_date`, `apply_date`, `city`, `state`, `fee`, `event_place`, `pay_status`) VALUES
(1, 'vivek123', '', '0000-00-00', '0000-00-00 00:00:00', '', '', '', '', ''),
(2, 'vivek123', 'stars of india', '0000-00-00', '0000-00-00 00:00:00', '', '', '', '', ''),
(3, 'vivek123', 'stars of india', '2017-12-14', '2008-08-21 11:48:52', '', '', '', '', ''),
(4, 'vivek123', 'stars of india', '2017-12-14', '2008-08-21 11:54:28', 'jaipur', 'rajasthan', '', '', ''),
(5, 'vivek123', 'stars of india', '2017-12-14', '2008-08-21 11:55:02', 'jaipur', 'rajasthan', '1000 USD', '', ''),
(6, 'vivek123', 'stars of india', '2017-12-14', '2008-08-21 11:55:54', 'jaipur', 'rajasthan', '1000 USD', 'pinck city, boxoffice studio', ''),
(7, 'vivek123', 'stars of india', '2017-12-14', '2008-08-21 11:57:00', 'jaipur', 'rajasthan', '1000 USD', 'pinck city, boxoffice studio', 'done'),
(8, 'jaiking', 'india ideal', '2017-10-05', '2008-08-22 12:04:47', 'nagpur', 'maharastra', '200 USD', 'seeta bardi, boxoffice studio', 'done'),
(9, 'jaiking', 'dance india', '2017-08-02', '2008-08-22 12:36:35', 'pune', 'maharastra', '500 USD', 'bandra, boxoffice studio', 'done'),
(10, 'vivek123', '', '0000-00-00', '2008-08-22 01:39:58', '', '', '', '', 'done'),
(11, 'vivek123', 'india ideal', '2017-10-05', '2008-08-22 01:40:44', 'nagpur', 'maharastra', '200 USD', 'seeta bardi, boxoffice studio', 'done'),
(12, 'dfgfdhgf', 'india ideal', '2017-10-05', '2008-08-21 11:28:48', 'nagpur', 'maharastra', '200 USD', 'seeta bardi, boxoffice studio', 'done'),
(13, 'nehal123', 'stars of india', '2017-12-14', '2008-08-22 01:30:12', 'jaipur', 'rajasthan', '1000 USD', 'pinck city, boxoffice studio', 'done'),
(14, 'mohit123', 'stars of india', '2017-05-25', '2008-08-21 10:23:10', 'mumbai', 'maharastra', '100 USD', 'new mumbai, boxoffice studio', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `login_system`
--

CREATE TABLE IF NOT EXISTS `login_system` (
  `uname` text NOT NULL,
  `signin` text NOT NULL,
  `login` text NOT NULL,
  `login_devices` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_system`
--

INSERT INTO `login_system` (`uname`, `signin`, `login`, `login_devices`) VALUES
('nehal123', 'NULL', 'nehal123,7774599965boxoffice_login_secure', 0),
('sdvmohit', 'NULL', '', 0),
('swmmohit', 'NULL', '', 0),
('pipople', 'NULL', '', 0),
('nehalu', 'NULL', '', 0),
('akshok12', 'NULL', '', 0),
('svmasko', 'NULL', '', 0),
('mjkhhh', 'NULL', '', 0),
('mohitrajai', 'NULL', 'NULL', 0),
('isteyak123', 'NULL', 'isteyak123,9767353806boxoffice_login_secure', 0),
('hemant12', 'hemant12,8445575860boxoffice_signin_identification_secure', '', 0),
('hemant123', 'NULL', '', 0),
('payal123', 'NULL', '', 0),
('jai123', 'NULL', 'jai123,9975897920boxoffice_login_secure', 0),
('jaiking', 'NULL', 'jaiking,9420863614boxoffice_login_secure', 0),
('khan123', 'NULL', 'khan123,9325112536boxoffice_login_secure', 0),
('ms123', 'ms123,9420836319boxoffice_signin_identification_secure', '', 0),
('vivek123', 'NULL', 'vivek123,9325112536boxoffice_login_secure', 0),
('mohit123', 'NULL', 'mohit123,9325425212boxoffice_login_secure', 0),
('mohit123', 'NULL', 'mohit123,9325425212boxoffice_login_secure', 0),
('dfgfdhgf', 'NULL', 'dfgfdhgf,9325425212boxoffice_login_secure', 0),
('mohit123', 'NULL', 'mohit123,9325425212boxoffice_login_secure', 0),
('mohit123', 'NULL', 'mohit123,9325425212boxoffice_login_secure', 0),
('mohit1234', 'mohit1234,9325112352boxoffice_signin_identification_secure', '', 0),
('mohit123', 'NULL', 'mohit123,9325425212boxoffice_login_secure', 0),
('mohit123', 'NULL', 'mohit123,9325425212boxoffice_login_secure', 0),
('mohit123', 'NULL', 'mohit123,9325425212boxoffice_login_secure', 0),
('mohit123', 'NULL', 'mohit123,9325425212boxoffice_login_secure', 0),
('mohit123', 'NULL', 'mohit123,9325425212boxoffice_login_secure', 0),
('mhoit', 'mhoit,9325112536boxoffice_signin_identification_secure', '', 0),
('mohit123', 'NULL', 'mohit123,9325425212boxoffice_login_secure', 0),
('mohit123', 'NULL', 'mohit123,9325425212boxoffice_login_secure', 0),
('mohit12343', 'mohit12343,9325112536boxoffice_signin_identification_secure', '', 0),
('mohit124', 'mohit124,9325112536boxoffice_signin_identification_secure', '', 0),
('mohitking', 'mohitking,9325112536boxoffice_signin_identification_secure', '', 0),
('mohitsolid', 'mohitsolid,9325112536boxoffice_signin_identification_secure', '', 0),
('mohitsoli', 'mohitsoli,9325112536boxoffice_signin_identification_secure', '', 0),
('mohit123', 'NULL', 'mohit123,9325425212boxoffice_login_secure', 0),
('mohit123', 'NULL', 'mohit123,9325425212boxoffice_login_secure', 0),
('mohit999', 'mohit999,9325112536boxoffice_signin_identification_secure', '', 0),
('mohit1235', 'mohit1235,9325112536boxoffice_signin_identification_secure', '', 0),
('mohit1232', 'mohit1232,9325112536boxoffice_signin_identification_secure', '', 0),
('mohitjh', 'mohitjh,9325112536boxoffice_signin_identification_secure', '', 0),
('mohitj', 'mohitj,9325112536boxoffice_signin_identification_secure', '', 0),
('mohit', 'mohit,9325112536boxoffice_signin_identification_secure', '', 0),
('mohitkg', 'mohitkg,9325112536boxoffice_signin_identification_secure', '', 0),
('mohiter', 'mohiter,9325112536boxoffice_signin_identification_secure', '', 0),
('mgggg', 'mgggg,9325112536boxoffice_signin_identification_secure', '', 0),
('mohddd', 'mohddd,9325112536boxoffice_signin_identification_secure', '', 0),
('mohdd', 'mohdd,9325112536boxoffice_signin_identification_secure', '', 0),
('mohit1', 'mohit1,9325112536boxoffice_signin_identification_secure', '', 0),
('mohik', 'mohik,9325112536boxoffice_signin_identification_secure', '', 0),
('mohitkkk', 'mohitkkk,9325112536boxoffice_signin_identification_secure', '', 0),
('mohitkk', 'mohitkk,9325112536boxoffice_signin_identification_secure', '', 0),
('ghfggfhfgh', 'ghfggfhfgh,9325112536boxoffice_signin_identification_secure', '', 0),
('hgjgghj', 'hgjgghj,9325112536boxoffice_signin_identification_secure', '', 0),
('molkjii', 'molkjii,9325112536boxoffice_signin_identification_secure', '', 0),
('nehal123', 'nehal123,9325112534boxoffice_signin_identification_secure', '', 0),
('nehal123', 'nehal123,9325112532boxoffice_signin_identification_secure', '', 0),
('mhghh', 'mhghh,9325112531boxoffice_signin_identification_secure', '', 0),
('mohik', 'mohik,9325112546boxoffice_signin_identification_secure', '', 0),
('nehal123', 'nehal123,9325112533boxoffice_signin_identification_secure', '', 0),
('nehal123', 'nehal123,9172336972boxoffice_signin_identification_secure', '', 0),
('nehal123', 'nehal123,9325112535boxoffice_signin_identification_secure', '', 0),
('nehal123', 'nehal123,9325112530boxoffice_signin_identification_secure', '', 0),
('nehal123', 'nehal123,9325112539boxoffice_signin_identification_secure', '', 0),
('nehal123', 'nehal123,9325112540boxoffice_signin_identification_secure', '', 0),
('nehal123', 'nehal123,9325112547boxoffice_signin_identification_secure', '', 0),
('nehal123', 'nehal123,9325112541boxoffice_signin_identification_secure', '', 0),
('nehal123', 'nehal123,9325112578boxoffice_signin_identification_secure', '', 0),
('nehal12345', 'nehal12345,9325112597boxoffice_signin_identification_secure', '', 0),
('nehal123', 'nehal123,9325112550boxoffice_signin_identification_secure', '', 0),
('nehal123', 'nehal123,9325112549boxoffice_signin_identification_secure', '', 0),
('nehal123', 'nehal123,9325112544boxoffice_signin_identification_secure', '', 0),
('nehal123', 'nehal123,9325112548boxoffice_signin_identification_secure', '', 0),
('nehal12', 'nehal12,9325112577boxoffice_signin_identification_secure', '', 0),
('nehal1', 'NULL', 'nehal1,2578964562boxoffice_login_secure', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_data`
--

CREATE TABLE IF NOT EXISTS `post_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_name` text NOT NULL,
  `uname` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `comment` text NOT NULL,
  `likes` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=215 ;

--
-- Dumping data for table `post_data`
--

INSERT INTO `post_data` (`id`, `post_name`, `uname`, `fname`, `lname`, `comment`, `likes`, `date`) VALUES
(3, 'post1', 'jaiking', 'jaiveer', 'swami', 'its dont good i can see ', '1', '2017-03-25 21:45:47'),
(4, 'post1', 'nehal123', 'nehal ', 'ansari', 'assome. ', '10', '2017-03-24 04:45:47'),
(133, 'post1', 'mohit123', 'mohit', 'swami', 'fsdfsdf', '', '2008-08-21 09:55:46'),
(135, 'post1', 'mohit123', 'mohit', 'swami', 'fghfg', '', '2008-08-21 08:35:03'),
(140, 'post1', 'mohit123', 'mohit', 'swami', 'mohiyt', '', '2008-08-21 08:41:24'),
(142, 'post1', 'mohit123', 'mohit', 'swami', 'vvvvvv', '', '2008-08-21 08:47:57'),
(143, 'post1', 'mohit123', 'mohit', 'swami', 'ooooooo', '', '2008-08-21 08:49:56'),
(146, 'post1', 'mohit123', 'mohit', 'swami', 'jok;lk;', '', '2008-08-21 08:53:04'),
(147, 'post1', 'mohit123', 'mohit', 'swami', 'ggggggggg', '', '2008-08-21 08:57:52'),
(148, 'post1', 'vivek123', 'vivek', 'tondare', 'jhgghj', '', '2008-08-21 08:58:46'),
(149, 'post1', 'vivek123', 'vivek', 'tondare', 'jhgghj', '', '2008-08-21 08:58:50'),
(150, 'post1', 'mohit123', 'mohit', 'swami', 'llllllll', '', '2008-08-21 09:33:23'),
(151, 'post1', 'vivek123', 'vivek', 'tondare', 'qqqqq', '', '2008-08-21 09:33:39'),
(152, 'post1', 'mohit123', 'mohit', 'swami', 'ccccccc', '', '2008-08-21 09:36:25'),
(153, 'post1', 'vivek123', 'vivek', 'tondare', 'fdsfd', '', '2008-08-21 09:39:11'),
(154, 'post1', 'vivek123', 'vivek', 'tondare', 'vccccc', '', '2008-08-21 09:40:40'),
(155, 'post1', 'mohit123', 'mohit', 'swami', 'mohhhhhhhh', '', '2008-08-21 09:40:54'),
(156, 'post1', 'mohit123', 'mohit', 'swami', 'uuuuuu', '', '2008-08-21 09:41:27'),
(157, 'post1', 'mohit123', 'mohit', 'swami', 'iiiiii', '', '2008-08-21 09:43:02'),
(158, 'post1', 'vivek123', 'vivek', 'tondare', 'jkhgk', '', '2008-08-21 09:43:10'),
(159, 'post1', 'vivek123', 'vivek', 'tondare', 'jkhgkhjkhjk', '', '2008-08-21 09:44:34'),
(160, 'post1', 'vivek123', 'vivek', 'tondare', 'yuiyui', '', '2008-08-21 09:44:48'),
(161, 'post1', 'mohit123', 'mohit', 'swami', 'gfjgh', '', '2008-08-21 09:45:09'),
(162, 'post1', 'vivek123', 'vivek', 'tondare', 'gjuyjuyu77777', '', '2008-08-21 09:45:23'),
(163, 'post1', 'vivek123', 'vivek', 'tondare', 'gjgfffff', '', '2008-08-21 09:45:36'),
(164, 'post1', 'vivek123', 'vivek', 'tondare', 'hgjgh', '', '2008-08-21 10:22:24'),
(165, 'post1', 'vivek123', 'vivek', 'tondare', 'mohiyyyfffff', '', '2008-08-21 10:22:38'),
(166, 'post1', 'mohit123', 'mohit', 'swami', 'gjhvj', '', '2008-08-21 10:23:00'),
(167, 'post1', 'vivek123', 'vivek', 'tondare', '<a href="mohit.html">home</a>', '', '2008-08-21 10:29:15'),
(168, 'post1', 'vivek123', 'vivek', 'tondare', 'https://www.google.com', '', '2008-08-21 10:29:42'),
(169, 'post1', 'vivek123', 'vivek', 'tondare', 'fgbfdg', '', '2008-08-21 10:50:29'),
(170, 'post1', 'vivek123', 'vivek', 'tondare', '&lt;a&gt;sad&lt;/a&gt;', '', '2008-08-21 10:50:41'),
(171, 'post1', 'vivek123', 'vivek', 'tondare', 'dvgdfv', '', '2008-08-21 10:52:12'),
(172, 'post1', 'vivek123', 'vivek', 'tondare', '', '', '2008-08-21 10:52:18'),
(173, 'post1', 'vivek123', 'vivek', 'tondare', 'sadasd', '', '2008-08-21 10:53:18'),
(174, 'post1', 'vivek123', 'vivek', 'tondare', '', '', '2008-08-21 10:53:24'),
(175, 'post1', 'vivek123', 'vivek', 'tondare', '&lt;a&gt;sdas&lt;/a&gt;', '', '2008-08-21 10:54:41'),
(176, 'post1', 'mohit123', 'mohit', 'swami', 'wwww', '', '2008-08-21 10:54:54'),
(177, 'post1', 'vivek123', 'vivek', 'tondare', 'dsfsdf', '', '2008-08-21 10:55:03'),
(178, 'post1', 'vivek123', 'vivek', 'tondare', 'hgfhfg', '', '2008-08-21 09:16:21'),
(179, 'post1', 'mohit123', 'mohit', 'swami', 'n', '', '2008-08-21 10:15:34'),
(180, 'post1', 'mohit123', 'mohit', 'swami', 'njjjj', '', '2008-08-21 08:41:55'),
(181, 'post1', 'mohit123', 'mohit', 'swami', 'dddd', '', '2008-08-21 08:41:59'),
(182, 'post1', 'nehal1', 'KING', 'SINGH', 'mohit is king', '', '2008-08-21 08:42:26'),
(183, 'post1', '', '', '', 'nmklkj', '', '2008-08-21 09:20:18'),
(184, 'post1', '', '', '', 'mohit', '', '2008-08-21 09:48:28'),
(185, 'post1', '', '', '', 'king is king', '', '2008-08-21 09:49:42'),
(186, 'post1', '', '', '', 'dfgfd', '', '2008-08-21 09:50:45'),
(187, 'post1', 'nehal1', 'KING', 'SINGH', 'fdgdfg', '', '2008-08-21 09:54:22'),
(188, 'post1', 'nehal1', 'KING', 'SINGH', 'hgjghj', '', '2008-08-21 10:14:45'),
(189, 'post1', 'nehal1', 'KING', 'SINGH', 'vghn', '', '2008-08-21 08:40:47'),
(190, 'post1', 'nehal1', 'KING', 'SINGH', 'chgf', '', '2008-08-21 08:50:27'),
(191, 'post1', 'nehal1', 'KING', 'SINGH', 'cbgfqqqqqqqqqqqqq', '', '2008-08-21 08:50:46'),
(192, 'post1', 'nehal1', 'KING', 'SINGH', 'FG', '', '2008-08-21 10:04:43'),
(193, 'post1', 'nehal1', 'KING', 'SINGH', 'hbj', '', '2008-08-21 10:33:39'),
(194, 'post1', 'nehal1', 'KING', 'SINGH', 'fds', '', '2008-08-21 10:42:55'),
(195, 'post1', 'nehal1', 'KING', 'SINGH', 'sdfsd', '', '2008-08-21 10:43:06'),
(196, 'post1', 'nehal1', 'KING', 'SINGH', 'hgjgh', '', '2008-08-21 11:50:10'),
(197, 'post1', 'nehal1', 'KING', 'SINGH', 'gfhfg', '', '2008-08-21 11:50:15'),
(198, 'post1', 'nehal1', 'KING', 'SINGH', 'dfsfs', '', '2008-08-21 09:54:28'),
(199, 'post1', 'nehal1', 'KING', 'SINGH', 'jhgjgh', '', '2008-08-21 10:40:25'),
(200, 'post1', 'nehal1', 'KING', 'SINGH', 'gggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', '', '2008-08-21 10:40:57'),
(201, 'post1', 'nehal1', 'KING', 'SINGH', 'efedsf', '', '2008-08-21 10:46:00'),
(202, 'post1', 'nehal1', 'KING', 'SINGH', 'fgdg', '', '2008-08-21 10:59:33'),
(203, 'post1', 'nehal1', 'KING', 'SINGH', 'mohit is m mohit is m mohit is m mohit is m mohit is m mohit is m mohit is m mohit is m mohit is m mohit is m mohit is m mohit is m mohit is m mohit is m mohit is m mohit is m', '', '2008-08-21 11:00:33'),
(204, 'post1', 'nehal1', 'KING', 'SINGH', 'dsfdsfdsf', '', '2008-08-21 11:01:16'),
(205, 'post1', 'nehal1', 'KING', 'SINGH', 'dsadasd', '', '2008-08-21 11:01:22'),
(206, 'post1', 'nehal1', 'KING', 'SINGH', 'fdgdfgfdg', '', '2008-08-21 11:02:17'),
(207, 'post1', 'nehal1', 'KING', 'SINGH', 'dgffg', '', '2008-08-21 11:02:22'),
(208, 'post1', 'mohit123', 'mohit', 'swami', 'gfdgdfgdfg', '', '2008-08-21 11:11:50'),
(209, 'post1', 'nehal1', 'KING', 'SINGH', 'dsadasd', '', '2008-08-21 11:25:36'),
(210, 'post1', 'nehal1', 'KING', 'SINGH', 'hjghjhj', '', '2008-08-21 11:30:08'),
(211, 'post1', 'nehal1', 'KING', 'SINGH', 'uytuy', '', '2008-08-21 11:31:49'),
(212, 'post1', 'nehal1', 'KING', 'SINGH', 'mhhhh', '', '2008-08-21 11:34:42'),
(213, 'post1', 'nehal1', 'KING', 'SINGH', 'gjhjhgj', '', '2008-08-22 12:21:25'),
(214, 'post1', 'nehal1', 'KING', 'SINGH', 'sds', '', '2008-08-22 12:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `post_details`
--

CREATE TABLE IF NOT EXISTS `post_details` (
  `post_name` text NOT NULL,
  `likes` text NOT NULL,
  `comments` text NOT NULL,
  `shares` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_details`
--

INSERT INTO `post_details` (`post_name`, `likes`, `comments`, `shares`, `date`) VALUES
('post1', '109', '75', '23', '2017-03-22 03:45:47'),
('post2', '136', '200', '35', '2008-08-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `post_liking`
--

CREATE TABLE IF NOT EXISTS `post_liking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_name` text,
  `uname` text,
  `fname` text,
  `lname` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=221 ;

--
-- Dumping data for table `post_liking`
--

INSERT INTO `post_liking` (`id`, `post_name`, `uname`, `fname`, `lname`, `date`) VALUES
(94, 'post1', 'mohit123', 'mohit', 'swami', '2008-08-21 11:11:25'),
(218, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-22 02:51:57'),
(220, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-22 02:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `post_sharing`
--

CREATE TABLE IF NOT EXISTS `post_sharing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_name` text,
  `uname` text,
  `fname` text,
  `lname` text,
  `date` datetime DEFAULT NULL,
  `distination` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `post_sharing`
--

INSERT INTO `post_sharing` (`id`, `post_name`, `uname`, `fname`, `lname`, `date`, `distination`) VALUES
(1, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:11:36', 'whatsapp'),
(2, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:12:15', 'twitter'),
(3, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:21:46', 'facebook'),
(4, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:23:10', 'whatsapp'),
(5, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:23:16', 'google'),
(6, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:23:20', 'twitter'),
(7, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:23:22', 'facebook'),
(8, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:29:38', 'facebook'),
(9, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:54:33', 'twitter'),
(10, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:18:27', 'whatsapp'),
(11, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:41:13', 'facebook'),
(12, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:41:16', 'twitter'),
(13, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:41:19', 'whatsapp'),
(14, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:41:23', 'whatsapp'),
(15, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:41:27', 'google'),
(16, 'post1', 'mohit123', 'mohit', 'swami', '2008-08-21 11:11:30', 'facebook'),
(17, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-22 12:22:07', 'facebook'),
(18, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-22 12:22:10', 'twitter');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile_data`
--

CREATE TABLE IF NOT EXISTS `user_profile_data` (
  `fname` text,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lname` text,
  `uname` text,
  `email` text,
  `password` text,
  `gender` text,
  `dob` date DEFAULT NULL,
  `address_line` text,
  `pincode` text,
  `country` text,
  `state` text,
  `city` text,
  `mobile_number` text,
  `tanc` text,
  `nname` text,
  `shcool` text,
  `j_college` text,
  `education` text,
  `lang` text,
  `cwork` text,
  `religion` text,
  `rstatus` text,
  `about` text,
  `ac_status` text,
  `acc_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--
-- Dumping data for table `user_profile_data`
--

INSERT INTO `user_profile_data` (`fname`, `id`, `lname`, `uname`, `email`, `password`, `gender`, `dob`, `address_line`, `pincode`, `country`, `state`, `city`, `mobile_number`, `tanc`, `nname`, `shcool`, `j_college`, `education`, `lang`, `cwork`, `religion`, `rstatus`, `about`, `ac_status`, `acc_date`) VALUES
('nehal', 48, 'ansari', 'nehal123', 'nehal@gmail.com', 'Nehallove@123', 'male', '2013-01-04', 'hiwri nagar,pl no 216', '440008', 'india', 'punjab', 'lodiyana', '7774599965', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:14:41'),
('nehal', 49, 'ansari', 'sdvmohit', 'nehal@gmail.com', 'Mohit@123', 'male', '2010-08-12', 'hiwri nagar,near power house', '440008', 'india', 'rajasthan', 'jodhpur', '9975897920', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:23:26'),
('moh', 50, 'king', 'swmmohit', 'nehal@gmail.com', 'Mohit@123', 'male', '1999-02-20', 'hiwri nagar,wwww', '440008', 'usa', 'gokil', 'dsfjk', '9975897920', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:31:44'),
('nehal', 51, 'ansari', 'pipople', 'nehal@gmail.com', 'Mohit@123', 'male', '2015-02-04', 'santnami nagar,dfg', '440008', 'usa', 'royal', 'dfffd', '9975897920', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:41:29'),
('moh', 52, 'swa', 'nehalu', 'm.swami28@yahoo.com', 'Mohit@123', 'male', '2013-04-06', 'hifdgdf,gdfgdf', '440005', 'india', 'punjab', 'lodiyana', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:48:36'),
('ashok', 53, 'swami', 'akshok12', 'nehal@gmail.com', 'Mohit@123', 'male', '1993-10-08', 'hiwri nagar,near power house', '440008', 'india', 'rajasthan', 'jaisalmer', '9975897920', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 09:37:32'),
('ashok', 54, 'swami', 'svmasko', 'nehal@gmail.com', 'Mohit@123', 'male', '1998-12-20', 'hiwri nagar,hhhh', '440008', 'india', 'punjab', 'lodiyana', '9975897920', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 09:41:10'),
('moh', 55, 'sss', 'mjkhhh', 'nehal@gmail.com', 'Mohit@123', 'male', '2014-06-06', 'hiwri nagar,near power house', '440008', 'india', 'rajasthan', 'jodhpur', '9975897920', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 09:42:58'),
('mohit', 56, 'swami', 'mohitrajai', 'mohit@gmail.com', 'Mohit@123', 'male', '1997-02-11', 'hiwri nagar,near power house', '440008', 'india', 'maharastra', 'nagpur', '9420836319', 'accepted', 'gopal,lal', '', 'adarsh sanskar j. college', 'b.e (computer engineering 2015-2017)', 'hindi,eglish,marathi,marwadi', 'web developer', 'hindu', 'unmarried', 'i am a cool boy .', 'unactivate', '2008-08-21 09:58:17'),
('isteyak', 57, 'sheikh', 'isteyak123', 'isteyak@gmail.com', 'Mohit@123', 'male', '1998-08-22', 'panthan nagar,house no 1245', '440003', 'india', 'maharastra', 'nagpur', '9767353806', 'accepted', 'bandi,sundi', 'saroj high shcool', 'v.m.v college', 'b.a (suryodaya college)', 'hindi,bihari,english,marthi', 'accountent', 'sl', 'unmarried', 'i am a coll boy,i\r\nhave not i this\r\njsdajflkm msdn\r\nsmnsnnmksjjas\r\naskjdkasjik\r\nasdla;s.', 'unactivate', '2008-08-21 10:29:05'),
('hemant', 58, 'sinha', 'hemant12', 'hemant@gmail.com', 'Hemant@123', 'male', '1997-05-08', 'bharat wada pardi,pt.no 12', '440020', 'india', 'maharastra', 'nagpur', '8445575860', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:06:38'),
('hemant', 59, 'sinha', 'hemant123', 'hemant@gmail.com', 'Hemant@123', 'male', '1997-05-08', 'bharat wada pardi,pt.no 12', '440020', 'india', 'maharastra', 'nagpur', '8445575860', 'accepted', 'golu', 'umiyasankar shcool', 'adarsh sanskar j. college', 'b.sc (sindhu mahavidalaya)', 'hindi,bihari,english,marthi', 'accountent', 'sl', 'unmarried', 'i am hent sinha i am\r\na cool boy.', 'unactivate', '2008-08-21 11:16:01'),
('payal', 60, 'sharma', 'payal123', 'pyal@gmail.com', 'Payal@123', 'female', '1998-02-20', 'civil line,near power house', '440000', 'india', 'rajasthan', 'jaisalmer', '9325112536', 'accepted', 'pay', 'royal public shcool', 'royal j. college', 'mbbs (dadasaheb medical college)', 'hindi,eglish,marathi,marwadi', '', 'hindu', 'married', 'i am a cool gril who\r\nis a gril.', 'unactivate', '2008-08-21 11:28:09'),
('jaiverr', 61, 'swami', 'jai123', 'jai@gmail.com', 'Mohit@123', 'male', '2017-01-01', 'hiwri nagar,pt.no 12', '440009', 'india', 'punjab', 'lodiyana', '9975897920', 'accepted', 'sfdsdfsd', 'saroj high shcool', 'adarsh sanskar j. college', 'b.a (suryodaya college)', 'hindi,eglish,marathi,marwadi', 'accountent', 'hindu', 'married', 'safsafsafasfsafsaf', 'unactivate', '2008-08-21 11:13:24'),
('jaiverr', 62, 'swami', 'jaiking', 'kinf@gmail.com', 'Jailove@123', 'male', '2017-02-01', 'mudi badi,pt.no 12', '300123', 'usa', 'gokil', 'dsfjk', '9420863614', 'accepted', 'jai,king,sur', 'saroj high s', 'adarsh sanskar j.', 'b.a (suryodaya co', 'hindi,eglish,marat', 'accounten', 'chrisan', 'married', 'i am a cool boy,i am\r\nnot afiated this is\r\nweb developement\r\npage.', 'activate', '2008-08-21 11:17:05'),
('king', 63, 'khan', 'khan123', 'khan@gmail.com', 'Khana@123', 'male', '2011-03-06', ',', '440004', 'india', 'rajasthan', 'jaipur', '9325112536', 'accepted', 'sasd', 'sads', 'dsfsdf', 'fsdfsdf', 'sdfsdfdddddddddddddd', 'dfd', 'hindu', '', 'sdfsdfsdfsd', 'activate', '2008-08-21 10:31:56'),
('mohit', 64, 'swami', 'ms123', 'mohit@yahoo.com', 'Mohit@123', 'male', '1997-02-11', 'pt.no 593,hiwri nagar , near power house', '440008', 'india', 'maharastra', 'nagpur', '9420836319', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 09:57:13'),
('vivek', 65, 'tondare', 'vivek123', 'vivek@gmai.COM', 'Mohit@123', 'male', '2011-05-15', 'hhhhhhhhhh,', '440008', 'india', 'maharastra', 'nagpur', '9325112536', 'accepted', '', '', '', '', '', '', 'hindu', 'married', 'sadfsdfsdfs', 'activate', '2008-08-21 09:39:43'),
('mohit', 66, 'swami', 'mohit123', 'mohit@gmail.com', 'Mohit@123', 'male', '1998-12-20', 'fdsdfdsf,sdfdsf', '44444', 'india', 'select state', 'calighjt', '9325425212', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activate', '2008-08-21 10:17:52'),
('mohit', 67, 'swami', 'mohit123', 'mohit@gmail.com', 'Mohit@123', 'male', '2017-02-01', 'ghvgvh,fghfg', '44444', 'russia', 'solud', 'ewq', '9325425212', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activate', '2008-08-21 10:24:27'),
('fdgdfg', 68, 'dfgdf', 'dfgfdhgf', 'mohit@gmail.com', 'Mohit@123', 'male', '2016-01-03', 'fhgfgh,fghfgh,', '44444', 'usa', 'fetch', 'king', '9325425212', 'accepted', '', '', '', '', '', '', 'chrisan', '', 'dfgdfgdfg', 'activate', '2008-08-21 10:30:57'),
('king', 69, 'swami', 'mohit123', 'mohit@gmial.com', 'Mohit@123', 'male', '1998-01-20', 'sfsdf,sdfsdf', '440008', 'india', 'maharastra', 'nagpur', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activate', '2008-08-21 10:54:54'),
('mohit', 70, 'shigj', 'mohit123', 'mhoit@gmail.com', 'Mohit@123', 'male', '1998-12-19', 'fds,sdf', '440008', 'india', 'maharastra', 'nagpur', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activate', '2008-08-21 11:13:53'),
('mohit', 71, 'swa', 'mohit1234', 'mohit@gmail.com', 'Mohit@123', 'male', '2013-05-10', 'sdfsf,sdfsdf', '440008', 'india', 'maharastra', 'nagpur', '9325112352', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 09:54:14'),
('mohit', 72, 'swa', 'mohit123', 'mohit@gmail.com', 'Mohit@123', 'male', '2017-01-20', 'sdfsedfs,edfewsdf', '440008', 'india', 'punjab', 'amritsar', '9325112352', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activate', '2008-08-21 09:55:33'),
('mohit', 73, 'swa', 'mohit123', 'mohit@gmail.com', 'Mohit@123', 'male', '1998-01-20', 'dfsdf,sdfsdf', '440008', 'india', 'maharastra', 'nagpur', '9325112352', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activate', '2008-08-21 09:58:31'),
('mohit', 74, 'swa', 'mohit123', 'mohit@gmail.com', 'Mohit@123', 'male', '2015-03-04', 'sdfgdg,fdgdf', '440008', 'india', 'maharastra', 'nagpur', '9325112352', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activate', '2008-08-21 10:07:02'),
('mohit', 75, 'swa', 'mohit123', 'mohit@gmail.com', 'Mohit@123', 'male', '2014-04-06', 'sssasdas,asds', '440008', 'india', 'maharastra', 'nagpur', '9325112352', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activate', '2008-08-21 10:09:00'),
('rohti', 76, 'tarware', 'mohit123', 'mohit@gmail.com', 'Mohit@123', 'male', '1998-01-19', 'dfdg,sdfsd', '440008', 'india', 'maharastra', 'mumbai', '9323112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activate', '2008-08-21 10:19:27'),
('KING', 77, 'SINGH', 'mhoit', 'sinha@gmail.com', 'Mohit@123', 'male', '2017-02-01', 'hiqwridss,', '440008', 'usa', 'fetch', 'calighjt', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:28:42'),
('KING', 78, 'SINGH', 'mohit123', 'sinha@gmail.com', 'Mohit@123', 'male', '2017-01-01', 'hiqwridss,', '440008', 'india', 'maharastra', 'nagpur', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activate', '2008-08-21 10:29:44'),
('KING', 79, 'SINGH', 'mohit123', 'sinha@gmail.com', 'Mohit@123', 'male', '2017-02-01', 'hiqwridss,', '440008', 'usa', 'gokil', 'dsfjk', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activate', '2008-08-21 10:01:56'),
('KING', 80, 'SINGH', 'mohit12343', 'sinha@gmail.com', 'Mohit@123', 'male', '2015-02-04', 'hiqwridss,', '440008', 'india', 'maharastra', 'nagpur', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:02:49'),
('KING', 81, 'SINGH', 'mohit124', 'sinha@gmail.com', 'Mohit@123', 'male', '2017-02-01', 'hiqwridss,', '440008', 'usa', 'fetch', 'king', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:47:35'),
('KING', 82, 'SINGH', 'mohitking', 'sinha@gmail.com', 'Mohit@123', 'male', '2015-02-04', 'hiqwridss,', '440008', 'india', 'maharastra', 'mumbai', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:49:09'),
('KING', 83, 'SINGH', 'mohitsolid', 'sinha@gmail.com', 'Mohit@123', 'male', '1999-12-20', 'hiqwridss,', '440008', 'india', 'maharastra', 'nagpur', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:50:28'),
('KING', 84, 'SINGH', 'mohitsoli', 'sinha@gmail.com', 'Mohit@123', 'male', '2017-03-20', 'hiqwridss,', '440008', 'usa', 'fetch', 'king', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:52:21'),
('KING', 85, 'SINGH', 'mohit123', 'sinh@gmail.com', 'Mohit@123', 'male', '2017-05-01', 'hiqwridss,', '440008', 'india', 'punjab', 'chandighar', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activate', '2008-08-21 11:00:29'),
('KING', 86, 'SINGH', 'mohit123', 'sinha@mail.com', 'Mohit@123', 'male', '2013-04-06', 'hiqwridss,', '440008', 'india', 'maharastra', 'mumbai', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activate', '2008-08-21 11:01:21'),
('KING', 87, 'SINGH', 'mohit999', 'sinha@gmail.com', 'Mohit@123', 'male', '2017-03-07', 'hiqwridss,', '440008', 'india', 'maharastra', 'nagpur', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:12:37'),
('KING', 88, 'SINGH', 'mohit1235', 'sinha@gmail.com', 'Mohit@123', 'male', '2017-05-06', 'hiqwridss,', '440008', 'india', 'maharastra', 'nagpur', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:14:04'),
('KING', 89, 'SINGH', 'mohit1232', 'sinha@gmail.com', 'Mohit@123', 'male', '2017-03-20', 'hiqwridss,', '440008', 'india', 'punjab', 'lodiyana', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:16:36'),
('KING', 90, 'SINGH', 'mohitjh', 'sinha@gmail.com', 'Mohit@123', 'male', '2017-02-05', 'hiqwridss,', '440008', 'india', 'maharastra', 'nagpur', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:18:13'),
('KING', 91, 'SINGH', 'mohitj', 'sinha@gmail.com', 'Mohit@123', 'male', '2017-03-04', 'hiqwridss,', '440008', 'india', 'maharastra', 'nagpur', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:19:56'),
('KING', 92, 'SINGH', 'mohit', 'sinha@gmail.com', 'Mohit@123', 'male', '2011-03-06', 'hiqwridss,', '440008', 'canda', 'hell', 'eda', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:20:42'),
('KING', 93, 'SINGH', 'mohitkg', 'sinha@gmail.com', 'Mohit@123', 'male', '2012-06-07', 'hiqwridss,', '440008', 'usa', 'gokil', 'mgdtf', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:40:05'),
('KING', 94, 'SINGH', 'mohiter', 'sinha@gmail.co', 'Mohit@123', 'male', '2017-04-04', 'hiqwridss,', '440008', 'usa', 'fetch', 'king', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:41:25'),
('KING', 95, 'SINGH', 'mgggg', 'sinha@gmail.com', 'Mohit@123', 'male', '2017-04-04', 'hiqwridss,', '440008', 'india', 'maharastra', 'nagpur', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:43:10'),
('KING', 96, 'SINGH', 'mohddd', 'sinha@gmail.com', 'Mohit@123', 'male', '2017-03-20', 'hiqwridss,', '440008', 'india', 'maharastra', 'nagpur', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:44:22'),
('KING', 97, 'SINGH', 'mohdd', 'sinha@gmail.co', 'Mohit@123', 'male', '2012-03-03', 'hiqwridss,', '440008', 'usa', 'fetch', 'calighjt', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:46:20'),
('KING', 98, 'SINGH', 'mohit1', 'sinha@gmail.co', 'Mohit@123', 'male', '2017-12-01', 'hiqwridss,sdfsd', '440008', 'usa', 'gokil', 'mokhj', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:52:40'),
('KING', 99, 'SINGH', 'mohik', 'sinha@gmail.co', 'Mohit@123', 'male', '2017-04-03', 'hiqwridss,', '440008', 'india', 'rajasthan', 'jodhpur', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:56:43'),
('KING', 100, 'SINGH', 'mohitkkk', 'sinha@gmail.co', 'Mohit@123', 'male', '2014-04-06', 'hiqwridss,', '440008', 'usa', 'fetch', 'calighjt', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-22 12:03:21'),
('KING', 101, 'SINGH', 'mohitkk', 'sinha@gmail.co', 'Mohit@123', 'male', '2017-02-01', 'hiqwridss,', '440008', 'india', 'maharastra', 'nagpur', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 09:36:28'),
('KING', 102, 'SINGH', 'ghfggfhfgh', 'sinha@gmail.com', 'Mohit@123', 'male', '2017-03-01', 'hiqwridss,', '440008', 'usa', 'gokil', 'mokhj', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 09:40:17'),
('KING', 103, 'SINGH', 'hgjgghj', 'sinha@gmail.co', 'Mohit@123', 'male', '2017-02-01', 'hiqwridss,', '440008', 'india', 'maharastra', 'nagpur', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 09:41:26'),
('KING', 104, 'SINGH', 'molkjii', 'sinha@gmail.co', 'Mohit@123', 'male', '2017-02-04', 'hiqwridss,', '440008', 'india', 'punjab', 'lodiyana', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:31:01'),
('KING', 105, 'SINGH', 'nehal123', 'sinha@gma.com', 'Mohit@123', 'male', '2017-03-04', 'hiqwridss,', '440008', 'india', 'maharastra', 'nagpur', '9325112534', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:16:33'),
('KING', 106, 'SINGH', 'nehal123', 'sinha@gmai.co', 'Mohit@123', 'male', '1998-01-19', 'hiqwridss,', '440008', 'india', 'maharastra', 'mumbai', '9325112532', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:18:36'),
('KING', 107, 'SINGH', 'mhghh', 'sinha@gmail.cl', 'Mohit@123', 'male', '0000-00-00', 'hiqwridss,', '440008', 'india', 'punjab', 'lodiyana', '9325112531', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:19:40'),
('KING', 108, 'SINGH', 'mohik', 'sinha@gmil.com', 'Mohit@123', 'male', '2017-01-01', 'hiqwridss,', '440008', 'usa', 'gokil', 'mokhj', '9325112546', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:21:01'),
('KING', 109, 'SINGH', 'nehal123', 'sinha@gmail.col', 'Mohit@123', 'male', '2017-02-01', 'hiqwridss,', '440008', 'india', 'maharastra', 'nagpur', '9325112533', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 09:58:04'),
('KING', 110, 'SINGH', 'nehal123', 'sinha@gmail.coj', 'Mohit@123', 'male', '2017-07-01', 'hiqwridss,', '440008', 'india', 'maharastra', 'nagpur', '9172336972', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:01:29'),
('KING', 111, 'SINGH', 'nehal123', 'sinha@gmail.coi', 'Mohit@123', 'male', '2017-02-01', 'hiqwridss,', '440008', 'india', 'maharastra', 'nagpur', '9325112535', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:06:42'),
('KING', 112, 'SINGH', 'nehal123', 'sinha@gmail.coy', 'Mohit@123', 'male', '2017-10-01', 'hiqwridss,', '440008', 'india', 'maharastra', 'nagpur', '9325112530', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:08:56'),
('KING', 113, 'SINGH', 'nehal123', 'sinha@gmail.coo', 'Mohit@123', 'male', '2017-02-01', 'hiqwridss,', '440008', 'india', 'maharastra', 'mumbai', '9325112539', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:15:50'),
('KING', 114, 'SINGH', 'nehal123', 'sinha@gmail.cop', 'Mohit@123', 'male', '2017-03-01', 'hiqwridss,', '440008', 'india', 'maharastra', 'nagpur', '9325112540', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:21:41'),
('KING', 115, 'SINGH', 'nehal123', 'sinha@gmail.cou', 'Mohit@123', 'male', '2017-05-01', 'hiqwridss,', '440008', 'usa', 'royal', 'wew', '9325112547', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:23:32'),
('KING', 116, 'SINGH', 'nehal123', 'sinha@gmail.cor', 'Mohit@123', 'male', '2017-07-01', 'hiqwridss,', '440008', 'usa', 'gokil', 'mokhj', '9325112541', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:26:13'),
('KING', 117, 'SINGH', 'nehal123', 'sinha@gmail.cot', 'Mohit@123', 'male', '2017-11-01', 'hiqwridss,', '440008', 'usa', 'fetch', 'calighjt', '9325112578', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:31:48'),
('KING', 118, 'SINGH', 'nehal12345', 'sinha@gmail.cok', 'Mohit@123', 'male', '1998-02-20', 'hiqwridss,', '440008', 'russia', 'solud', 'ewq', '9325112597', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:41:30'),
('KING', 119, 'SINGH', 'nehal123', 'sinha@gmail.coq', 'Mohit@123', 'male', '2017-03-01', 'hiqwridss,', '440008', 'india', 'punjab', 'amritsar', '9325112550', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:48:22'),
('KING', 120, 'SINGH', 'nehal123', 'sinha@gmail.cov', 'Mohit@123', '', '2017-09-01', 'hiqwridss,', '440008', 'india', 'punjab', 'lodiyana', '9325112549', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:49:59'),
('KING', 121, 'SINGH', 'nehal123', 'sinha@gmail.coe', 'Mohit@123', 'male', '2017-11-01', 'hiqwridss,', '440008', 'russia', 'lodd', 'lyana', '9325112544', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:50:42'),
('KING', 122, 'SINGH', 'nehal123', 'sinha@gmail.coa', 'Mohit@123', 'male', '2017-02-01', 'hiqwridss,', '440008', 'russia', 'solud', 'mum', '9325112548', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 09:35:31'),
('KING', 123, 'SINGH', 'nehal12', 'sinha@gmail.cox', 'Mohit@123', 'male', '2017-03-01', 'hiqwridss,', '440008', 'india', 'maharastra', 'mumbai', '9325112577', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 09:52:12'),
('KING', 124, 'SINGH', 'nehal1', 'kingis@mohit.com', 'Mohit@123', 'male', '2017-05-01', 'hiqwridss,,,,,,', '440008', 'india', 'punjab', 'amritsar', '2578964562', 'accepted', '', '', '', '', '', '', '', '', '', 'activate', '2008-08-21 10:14:28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
