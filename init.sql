-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2008 at 08:42 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

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
(14, 'mohit123', 'stars of india', '2017-05-25', '2008-08-21 10:23:10', 'mumbai', 'maharastra', '100 USD', 'new mumbai, boxoffice studio', 'done'),
(15, 'nehal1', 'stars of india', '2017-05-25', '2008-08-21 11:12:24', 'mumbai', 'maharastra', '100 USD', 'new mumbai, boxoffice studio', 'done'),
(16, 'nehal1', 'stars of india', '2017-05-25', '2008-08-22 12:39:22', 'mumbai', 'maharastra', '100 USD', 'new mumbai, boxoffice studio', 'done'),
(17, 'nehal1', 'stars of india', '2017-05-25', '2008-08-22 12:47:09', 'mumbai', 'maharastra', '100 USD', 'new mumbai, boxoffice studio', 'done'),
(18, 'nehal1', '', '0000-00-00', '2008-08-22 12:48:12', '', '', '', '', 'done'),
(19, 'nehal1', 'stars of india', '2017-12-14', '2008-08-22 12:52:15', 'jaipur', 'rajasthan', '1000 USD', 'pinck city, boxoffice studio', 'done'),
(20, 'nehal1', 'dance of india', '2017-12-14', '2008-08-22 12:55:33', 'jaipur', 'rajasthan', '1000 USD', 'pinck city, boxoffice studio', 'done'),
(21, 'nehal1', 'dance india', '2017-08-02', '2008-08-21 11:27:56', 'pune', 'maharastra', '500 USD', 'bandra, boxoffice studio', 'done'),
(22, 'nehal1', 'india ideal', '2017-10-05', '2008-08-21 11:28:21', 'nagpur', 'maharastra', '200 USD', 'seeta bardi, boxoffice studio', 'done'),
(23, 'nehal1', 'india ideal', '2017-10-05', '2008-08-21 10:13:55', 'nagpur', 'maharastra', '200 USD', 'seeta bardi, boxoffice studio', 'done'),
(24, 'mohit12', 'dance india', '2017-08-02', '2008-08-21 10:40:50', 'pune', 'maharastra', '500 USD', 'bandra, boxoffice studio', 'done'),
(25, 'nehal1', 'stars of india', '2017-05-25', '2008-08-21 11:09:51', 'mumbai', 'maharastra', '100 USD', 'new mumbai, boxoffice studio', 'done'),
(26, 'nehal1', 'stars of india', '2017-05-25', '2008-08-21 11:18:17', 'mumbai', 'maharastra', '100 USD', 'new mumbai, boxoffice studio', 'done'),
(27, 'nehal1', 'india ideal', '2017-10-05', '2008-08-21 09:36:18', 'nagpur', 'maharastra', '200 USD', 'seeta bardi, boxoffice studio', 'done'),
(28, 'sdvmohit', 'stars of india', '2017-05-25', '2008-08-21 09:40:58', 'mumbai', 'maharastra', '100 USD', 'new mumbai, boxoffice studio', 'done');

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
('sdvmohit', 'NULL', 'sdvmohit,9975897920boxoffice_login_secure', 0),
('swmmohit', 'NULL', '', 0),
('pipople', 'NULL', '', 0),
('nehalu', 'NULL', '', 0),
('akshok12', 'NULL', '', 0),
('svmasko', 'NULL', '', 0),
('mjkhhh', 'NULL', '', 0),
('mohitrajai', 'NULL', 'mohitrajai,9420836319boxoffice_login_secure', 0),
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
('mhoit', 'NULL', 'mhoit,9325112536boxoffice_login_secure', 0),
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
('nehal123', 'NULL', 'nehal123,7774599965boxoffice_login_secure', 0),
('nehal123', 'NULL', 'nehal123,7774599965boxoffice_login_secure', 0),
('mhghh', 'mhghh,9325112531boxoffice_signin_identification_secure', '', 0),
('mohik', 'mohik,9325112546boxoffice_signin_identification_secure', '', 0),
('nehal123', 'NULL', 'nehal123,7774599965boxoffice_login_secure', 0),
('nehal123', 'NULL', 'nehal123,7774599965boxoffice_login_secure', 0),
('nehal123', 'NULL', 'nehal123,7774599965boxoffice_login_secure', 0),
('nehal123', 'NULL', 'nehal123,7774599965boxoffice_login_secure', 0),
('nehal123', 'NULL', 'nehal123,7774599965boxoffice_login_secure', 0),
('nehal123', 'NULL', 'nehal123,7774599965boxoffice_login_secure', 0),
('nehal123', 'NULL', 'nehal123,7774599965boxoffice_login_secure', 0),
('nehal123', 'NULL', 'nehal123,7774599965boxoffice_login_secure', 0),
('nehal123', 'NULL', 'nehal123,7774599965boxoffice_login_secure', 0),
('nehal12345', 'nehal12345,9325112597boxoffice_signin_identification_secure', '', 0),
('nehal123', 'NULL', 'nehal123,7774599965boxoffice_login_secure', 0),
('nehal123', 'NULL', 'nehal123,7774599965boxoffice_login_secure', 0),
('nehal123', 'NULL', 'nehal123,7774599965boxoffice_login_secure', 0),
('nehal123', 'NULL', 'nehal123,7774599965boxoffice_login_secure', 0),
('nehal12', 'nehal12,9325112577boxoffice_signin_identification_secure', '', 0),
('nehal1', 'NULL', 'nehal1,9325112539boxoffice_login_secure', 0),
('rohit123', 'NULL', 'rohit123,9852144522boxoffice_login_secure', 0),
('ssss123', 'ssss123,3625112536boxoffice_signin_identification_secure', '', 0),
('ssss12', 'ssss12,2512364785boxoffice_signin_identification_secure', '', 0),
('gcf1111', 'gcf1111,9325112457boxoffice_signin_identification_secure', '', 0),
('www123', 'www123,9325114477boxoffice_signin_identification_secure', '', 0),
('mohitkin', 'mohitkin,9420836320boxoffice_signin_identification_secure', '', 0),
('asdasd', 'asdasd,9325115863boxoffice_signin_identification_secure', '', 0),
('ssss1234', 'NULL', 'ssss1234,9420836324boxoffice_login_secure', 0),
('hgjkhjgk', 'NULL', 'hgjkhjgk,2545789612boxoffice_login_secure', 0),
('sdfdsf', 'sdfdsf,9325117845boxoffice_signin_identification_secure', '', 0),
('sadxasd', 'NULL', 'sadxasd,9325112538boxoffice_login_secure', 0),
('mohit12', 'NULL', 'mohit12,9325112436boxoffice_login_secure', 0),
('sadasd', 'sadasd,4443332221boxoffice_signin_identification_secure', '', 0),
('eerwer', 'eerwer,9325112456boxoffice_signin_identification_secure', '', 0),
('fghgfhh', 'fghgfhh,1245778545boxoffice_signin_identification_secure', '', 0),
('fghfghfgh', 'fghfghfgh,9325117696boxoffice_signin_identification_secure', '', 0),
('fdsfsdfd', 'fdsfsdfd,9325116674boxoffice_signin_identification_secure', '', 0),
('er4tdrft', 'er4tdrft,9312224124boxoffice_signin_identification_secure', '', 0),
('dsfdsf', 'NULL', 'dsfdsf,1245789632boxoffice_login_secure', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=286 ;

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
(214, 'post1', 'nehal1', 'KING', 'SINGH', 'sds', '', '2008-08-22 12:24:09'),
(215, 'post1', 'nehal1', 'KING', 'SINGH', 'sdfdsf', '', '2008-08-21 10:27:18'),
(216, 'post1', 'nehal1', 'KING', 'SINGH', 'gnnbgfhnf', '', '2008-08-21 10:28:09'),
(217, 'post1', 'nehal1', 'KING', 'SINGH', 'fgfdg', '', '2008-08-21 10:28:14'),
(218, 'post1', 'nehal1', 'KING', 'SINGH', 'dfsdf', '', '2008-08-21 10:37:53'),
(219, 'post1', 'nehal1', 'KING', 'SINGH', 'klkjl', '', '2008-08-21 08:37:43'),
(220, 'post1', 'nehal1', 'KING', 'SINGH', 'ikui', '', '2008-08-21 08:52:49'),
(221, 'post2', 'nehal1', 'KING', 'SINGH', 'i am the king of the world no one can fight with me becuase i love my self', '', '0000-00-00 00:00:00'),
(222, '', '', '', '', '', '', '2008-08-19 00:00:00'),
(223, 'post2', 'nehal1', 'KING', 'SINGH', 'ASNJDKASJDKJASKDJKASLJDKLASJUHDKHBANSJKDHGJASBDJHNAGBSJHDBHASJDGHJASBDHJAGSDHGAHSDGHAS', '', '2008-08-27 00:00:00'),
(224, 'post2', 'nehal1', 'KING', 'SINGH', 'fghfgh', '', '2008-08-21 11:12:44'),
(225, 'post2', 'nehal1', 'KING', 'SINGH', 'fghfghfghfgh', '', '2008-08-21 11:12:52'),
(226, 'post2', 'nehal1', 'KING', 'SINGH', 'fghfghfghfghgfhfgh', '', '2008-08-21 11:12:57'),
(227, 'post2', 'nehal1', 'KING', 'SINGH', 'fdgdfgf', '', '2008-08-21 11:14:27'),
(228, 'post2', 'nehal1', 'KING', 'SINGH', 'gfdgfg', '', '2008-08-21 11:14:32'),
(229, 'post2', 'nehal1', 'KING', 'SINGH', 'fghgfh', '', '2008-08-21 11:16:39'),
(230, 'post2', 'nehal1', 'KING', 'SINGH', 'hgjghj', '', '2008-08-21 11:18:23'),
(231, 'post2', 'nehal1', 'KING', 'SINGH', 'hjhgj', '', '2008-08-21 11:18:26'),
(232, 'post2', 'nehal1', 'KING', 'SINGH', 'sdfsdf', '', '2008-08-21 11:19:56'),
(233, 'post2', 'nehal1', 'KING', 'SINGH', 'sdfsdfaa', '', '2008-08-21 11:20:13'),
(234, 'post2', 'nehal1', 'KING', 'SINGH', 'sadasd', '', '2008-08-21 11:20:16'),
(235, 'post2', 'nehal1', 'KING', 'SINGH', 'sdas', '', '2008-08-21 11:20:19'),
(236, 'post2', 'nehal1', 'KING', 'SINGH', 'hgjhgjghjhgj', '', '2008-08-21 11:41:28'),
(237, 'post2', 'nehal1', 'KING', 'SINGH', 'ADARAK LSAN', '', '2008-08-26 00:00:00'),
(238, 'post2', 'nehal1', 'KING', 'SINGH', 'mohit is king', '', '2008-08-27 00:00:00'),
(239, 'post3', 'nehal1', 'KING', 'SINGH', 'fghfgh', '', '2008-08-22 12:02:33'),
(240, 'post3', 'nehal1', 'KING', 'SINGH', 'gfhfgh', '', '2008-08-22 12:02:41'),
(241, 'post3', 'nehal1', 'KING', 'SINGH', 'gfhfgh', '', '2008-08-22 12:02:44'),
(242, 'post3', 'nehal1', 'KING', 'SINGH', 'gfhfghfghfgh', '', '2008-08-22 12:02:46'),
(243, 'post3', 'nehal1', 'KING', 'SINGH', 'gfhfghfghfgh', '', '2008-08-22 12:02:46'),
(244, 'post3', 'nehal1', 'KING', 'SINGH', 'mohit', '', '2008-08-22 12:12:54'),
(245, 'post3', 'nehal1', 'KING', 'SINGH', 'vghgfh', '', '2008-08-22 12:12:59'),
(246, 'post1', 'nehal1', 'KING', 'SINGH', 'fdgdfg', '', '2008-08-22 12:23:12'),
(247, 'post1', 'nehal1', 'KING', 'SINGH', 'fdgdfg', '', '2008-08-22 12:23:36'),
(248, 'post2', 'nehal1', 'KING', 'SINGH', 'fgh', '', '2008-08-22 12:24:07'),
(249, 'post2', 'nehal1', 'KING', 'SINGH', 'fgdfgfdgdfg', '', '2008-08-22 12:24:24'),
(250, 'post3', 'nehal1', 'KING', 'SINGH', 'fgdfg', '', '2008-08-22 12:25:15'),
(251, 'post3', 'nehal1', 'KING', 'SINGH', 'gdfg', '', '2008-08-22 12:25:19'),
(252, 'post3', 'nehal1', 'KING', 'SINGH', 'fdgfg', '', '2008-08-22 12:25:21'),
(253, 'post1', 'nehal1', 'KING', 'SINGH', 'sdf', '', '2008-08-22 12:27:53'),
(254, 'post2', 'nehal1', 'KING', 'SINGH', 'hjkhjk', '', '2008-08-22 12:33:57'),
(255, 'post2', 'nehal1', 'KING', 'SINGH', 'hhh', '', '2008-08-22 12:34:00'),
(256, 'post1', 'nehal1', 'KING', 'SINGH', 'dfgdg', '', '2008-08-21 09:23:37'),
(257, 'post2', 'nehal1', 'KING', 'SINGH', 'ghfghfghdcdd', '', '2008-08-21 09:24:39'),
(258, 'post2', 'nehal1', 'KING', 'SINGH', 'dgfg', '', '2008-08-21 09:24:52'),
(259, 'post3', 'nehal1', 'KING', 'SINGH', 'dfgdfg', '', '2008-08-21 09:25:20'),
(260, 'post3', 'nehal1', 'KING', 'SINGH', 'df', '', '2008-08-21 09:25:25'),
(261, 'post1', 'nehal1', 'KING', 'SINGH', 'dgfg', '', '2008-08-21 09:52:51'),
(262, 'post2', 'nehal1', 'KING', 'SINGH', 'dfgdfgdf', '', '2008-08-21 09:53:20'),
(263, 'post2', 'nehal1', 'KING', 'SINGH', 'fgdfg', '', '2008-08-21 09:53:22'),
(264, 'post2', 'nehal1', 'KING', 'SINGH', 'dfgdfg', '', '2008-08-21 09:53:25'),
(265, 'post3', 'nehal1', 'KING', 'SINGH', 'dfgdfgdfg', '', '2008-08-21 09:53:42'),
(266, 'post3', 'nehal1', 'KING', 'SINGH', 'fghfgh', '', '2008-08-21 09:54:47'),
(267, 'post3', 'nehal1', 'KING', 'SINGH', 'fdh', '', '2008-08-21 09:54:49'),
(268, 'post2', 'nehal1', 'KING', 'SINGH', 'dfg', '', '2008-08-21 09:54:58'),
(269, 'post1', 'nehal1', 'KING', 'SINGH', 'fgdg', '', '2008-08-21 09:55:04'),
(270, 'post1', 'nehal1', 'KING', 'SINGH', 'xcgdfg', '', '2008-08-21 09:40:00'),
(271, 'post2', 'nehal1', 'KING', 'SINGH', 'fdfsds', '', '2008-08-21 09:40:16'),
(272, 'post3', 'nehal1', 'KING', 'SINGH', 'dfssdfff', '', '2008-08-21 09:40:49'),
(273, 'post2', 'nehal1', 'KING', 'SINGH', 'fdg', '', '2008-08-21 09:41:33'),
(274, 'post3', 'nehal1', 'KING', 'SINGH', 'dfgdf', '', '2008-08-21 09:41:42'),
(275, 'post1', 'nehal1', 'KING', 'SINGH', 'dfdsfsdf', '', '2008-08-21 09:06:02'),
(276, 'post2', 'nehal1', 'KING', 'SINGH', 'gfhfghfghfghfgh', '', '2008-08-21 09:07:04'),
(277, 'post3', 'nehal1', 'KING', 'SINGH', 'aaaaaaaaaaaaaaaaaaaa', '', '2008-08-21 09:07:55'),
(278, 'post3', 'nehal1', 'KING', 'SINGH', 'dfdf', '', '2008-08-21 09:08:04'),
(279, 'post1', 'nehal1', 'KING', 'SINGH', 'i am king', '', '2008-08-21 08:49:15'),
(280, 'post1', 'mohit123', 'mohit', 'swami', 'dfgdfg', '', '2008-08-21 08:51:29'),
(281, 'post2', 'nehal1', 'KING', 'SINGH', 'fghfgh', '', '2008-08-21 08:53:09'),
(282, 'post3', 'mohit123', 'mohit', 'swami', 'fhfg', '', '2008-08-21 08:53:44'),
(283, 'post1', 'nehal1', 'KING', 'SINGH', 'fgh', '', '2008-08-21 10:07:29'),
(284, 'post2', 'nehal1', 'KING', 'SINGH', 'hfdf', '', '2008-08-21 10:07:52'),
(285, 'post3', 'nehal1', 'KING', 'SINGH', 'fg', '', '2008-08-21 10:08:23');

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
('post1', '108', '92', '52', '2017-03-22 03:45:47'),
('post2', '128', '228', '25', '2008-08-13 00:00:00'),
('post3', '258', '165', '46', '2008-08-26 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=325 ;

--
-- Dumping data for table `post_liking`
--

INSERT INTO `post_liking` (`id`, `post_name`, `uname`, `fname`, `lname`, `date`) VALUES
(315, 'post1', 'mohit123', 'mohit', 'swami', '2008-08-21 08:51:49'),
(316, 'post2', 'mohit123', 'mohit', 'swami', '2008-08-21 08:53:25'),
(317, 'post3', 'mohit123', 'mohit', 'swami', '2008-08-21 08:53:33'),
(324, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:08:31');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

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
(18, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-22 12:22:10', 'twitter'),
(19, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:31:33', 'facebook'),
(20, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:31:37', 'twitter'),
(21, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:33:00', 'facebook'),
(22, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:33:02', 'twitter'),
(23, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:34:14', 'google'),
(24, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:34:17', 'whatsapp'),
(25, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:37:40', 'facebook'),
(26, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:37:44', 'google'),
(27, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:39:45', 'twitter'),
(28, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 08:52:54', 'twitter'),
(29, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 11:24:55', 'facebook'),
(30, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 11:25:01', 'twitter'),
(31, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 11:25:25', 'twitter'),
(32, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 11:36:50', 'facebook'),
(33, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-21 11:38:40', 'twitter'),
(34, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-21 11:39:30', 'twitter'),
(35, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-21 11:39:33', 'facebook'),
(36, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-21 11:39:37', 'whatsapp'),
(37, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-21 11:39:57', 'facebook'),
(38, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-21 11:40:00', 'whatsapp'),
(39, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-28 00:00:00', 'facebook'),
(40, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-21 11:48:02', 'twitter'),
(41, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-22 12:20:31', 'facebook'),
(42, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-22 12:23:16', 'facebook'),
(43, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-22 12:24:56', 'google'),
(44, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-22 12:25:01', 'twitter'),
(45, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-22 12:25:36', 'facebook'),
(46, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-22 12:25:40', 'google'),
(47, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-22 12:25:43', 'whatsapp'),
(48, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:24:13', 'google'),
(49, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:24:19', 'google'),
(50, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:24:55', 'facebook'),
(51, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:25:02', 'whatsapp'),
(52, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:25:50', 'facebook'),
(53, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:25:53', 'google'),
(54, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:52:57', 'google'),
(55, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:53:28', 'twitter'),
(56, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:54:52', 'twitter'),
(57, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:40:05', 'twitter'),
(58, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:40:18', 'twitter'),
(59, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:40:58', 'google'),
(60, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:41:00', 'google'),
(61, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:41:01', 'whatsapp'),
(62, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:14:01', 'facebook'),
(63, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:14:04', 'twitter'),
(64, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:06:08', 'facebook'),
(65, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:06:11', 'google'),
(66, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:07:33', 'twitter'),
(67, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:07:37', 'google'),
(68, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:07:38', 'whatsapp'),
(69, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:08:31', 'facebook'),
(70, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:08:32', 'twitter'),
(71, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:08:33', 'google'),
(72, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:08:34', 'whatsapp'),
(73, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:08:35', 'whatsapp'),
(74, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:08:35', 'whatsapp'),
(75, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:08:36', 'whatsapp'),
(76, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:08:36', 'whatsapp'),
(77, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:08:36', 'whatsapp'),
(78, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 08:49:48', 'twitter'),
(79, 'post1', 'mohit123', 'mohit', 'swami', '2008-08-21 08:51:37', 'google'),
(80, 'post2', 'mohit123', 'mohit', 'swami', '2008-08-21 08:52:41', 'twitter'),
(81, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 08:54:10', 'whatsapp'),
(82, 'post3', 'mohit123', 'mohit', 'swami', '2008-08-21 08:54:29', 'google'),
(83, 'post1', 'mohit123', 'mohit', 'swami', '2008-08-21 08:54:45', 'google'),
(84, 'post3', 'mohit123', 'mohit', 'swami', '2008-08-21 08:55:06', 'whatsapp'),
(85, 'post3', 'mohit123', 'mohit', 'swami', '2008-08-21 08:55:24', 'facebook'),
(86, 'post3', 'mohit123', 'mohit', 'swami', '2008-08-21 08:58:22', 'twitter'),
(87, 'post2', 'mohit123', 'mohit', 'swami', '2008-08-21 08:59:06', 'google'),
(88, 'post1', 'mohit123', 'mohit', 'swami', '2008-08-21 08:59:12', 'whatsapp'),
(89, 'post1', 'mohit123', 'mohit', 'swami', '2008-08-21 08:59:17', 'facebook'),
(90, 'post2', 'mohit123', 'mohit', 'swami', '2008-08-21 08:59:21', 'facebook'),
(91, 'post2', 'mohit123', 'mohit', 'swami', '2008-08-21 08:59:22', 'facebook'),
(92, 'post2', 'mohit123', 'mohit', 'swami', '2008-08-21 08:59:23', 'facebook'),
(93, 'post2', 'mohit123', 'mohit', 'swami', '2008-08-21 08:59:23', 'facebook'),
(94, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:01:41', 'facebook'),
(95, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:01:47', 'twitter'),
(96, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:01:51', 'facebook'),
(97, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:01:56', 'facebook'),
(98, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 09:01:57', 'facebook'),
(99, 'post3', 'mohit123', 'mohit', 'swami', '2008-08-21 09:02:18', 'twitter'),
(100, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:05:40', 'facebook'),
(101, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:07:09', 'facebook'),
(102, 'post1', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:07:17', 'twitter'),
(103, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:08:02', 'facebook'),
(104, 'post3', 'nehal1', 'KING', 'SINGH', '2008-08-21 10:08:05', 'twitter'),
(105, 'post2', 'nehal1', 'KING', 'SINGH', '2008-08-21 08:34:56', 'facebook');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=145 ;

--
-- Dumping data for table `user_profile_data`
--

INSERT INTO `user_profile_data` (`fname`, `id`, `lname`, `uname`, `email`, `password`, `gender`, `dob`, `address_line`, `pincode`, `country`, `state`, `city`, `mobile_number`, `tanc`, `nname`, `shcool`, `j_college`, `education`, `lang`, `cwork`, `religion`, `rstatus`, `about`, `ac_status`, `acc_date`) VALUES
('nehal', 48, 'ansari', 'nehal123', 'nehal@gmail.com', 'Nehallove@123', 'male', '2013-01-04', 'hiwri nagar,pl no 216,', '440008', 'india', 'punjab', 'lodiyana', '7774599964', 'accepted', '', '', '', '', '', '', 'hindu', 'married', '', 'activate', '2008-08-21 10:14:41'),
('nehal', 49, 'ansari', 'sdvmohit', 'mohitswami167@gmail.com', 'Mohit@123', 'male', '2010-08-12', 'hiwri nagar,near power house,,,,,,,,,,', '440008', 'india', 'rajasthan', 'jodhpur', '9975897920', 'accepted', 'mohitmohitmohitmohitmohitmohi', 'mohitmohitmohitmohitmohitmohitmohitmohitmoitmohit', 'mohitmohitmohitmohitmohitmohitmohitmohitmhitmohit', 'mohitmohitmohitmohitmohitmohitmohitmhitmoitmohit', 'mohitmohitmohitmohitmohitmohi', 'mohitmohitmohitmohitmohitmohi', 'chrisan', 'married', 'mohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmo\r\nhitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohit\r\nmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmo\r\nhitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohit\r\nmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmo\r\nhitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmohitmitmohitmohitmohitmo\r\nhmohitmohitmohi', 'activate', '2008-08-21 10:23:26'),
('moh', 50, 'king', 'swmmohit', 'nehal@gmail.com', 'Mohit@123', 'male', '1999-02-20', 'hiwri nagar,wwww', '440008', 'usa', 'gokil', 'dsfjk', '9975897920', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:31:44'),
('nehal', 51, 'ansari', 'pipople', 'nehal@gmail.com', 'Mohit@123', 'male', '2015-02-04', 'santnami nagar,dfg', '440008', 'usa', 'royal', 'dfffd', '9975897920', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:41:29'),
('moh', 52, 'swa', 'nehalu', 'm.swami28@yahoo.com', 'Mohit@123', 'male', '2013-04-06', 'hifdgdf,gdfgdf', '440005', 'india', 'punjab', 'lodiyana', '9325112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:48:36'),
('ashok', 53, 'swami', 'akshok12', 'nehal@gmail.com', 'Mohit@123', 'male', '1993-10-08', 'hiwri nagar,near power house', '440008', 'india', 'rajasthan', 'jaisalmer', '9975897920', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 09:37:32'),
('ashok', 54, 'swami', 'svmasko', 'nehal@gmail.com', 'Mohit@123', 'male', '1998-12-20', 'hiwri nagar,hhhh', '440008', 'india', 'punjab', 'lodiyana', '9975897920', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 09:41:10'),
('moh', 55, 'sss', 'mjkhhh', 'nehal@gmail.com', 'Mohit@123', 'male', '2014-06-06', 'hiwri nagar,near power house', '440008', 'india', 'rajasthan', 'jodhpur', '9975897920', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 09:42:58'),
('mohit', 56, 'swami', 'mohitrajai', 'nehal@gmail.co', 'Mohit@123', 'male', '1997-02-11', 'hiwri nagar,near power house,,,,', '440008', 'india', 'maharastra', 'nagpur', '9420836319', 'accepted', 'gopal,lal', '', 'adarsh sanskar j. college', 'b.e (computer engineering 2015-2017)', 'hindi,eglish,marathi,marwadi', 'web developer', 'hindu', 'unmarried', 'i am a cool boy .', 'activate', '2008-08-21 09:58:17'),
('isteyak', 57, 'sheikh', 'isteyak123', 'isteyak@gmail.com', 'Mohit@123', 'male', '1998-08-22', 'panthan nagar,house no 1245', '440003', 'india', 'maharastra', 'nagpur', '9767353806', 'accepted', 'bandi,sundi', 'saroj high shcool', 'v.m.v college', 'b.a (suryodaya college)', 'hindi,bihari,english,marthi', 'accountent', 'sl', 'unmarried', 'i am a coll boy,i\r\nhave not i this\r\njsdajflkm msdn\r\nsmnsnnmksjjas\r\naskjdkasjik\r\nasdla;s.', 'unactivate', '2008-08-21 10:29:05'),
('hemant', 58, 'sinha', 'hemant12', 'hemant@gmail.com', 'Hemant@123', 'male', '1997-05-08', 'bharat wada pardi,pt.no 12', '440020', 'india', 'maharastra', 'nagpur', '8445575860', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:06:38'),
('hemant', 59, 'sinha', 'hemant123', 'hemant@gmail.com', 'Hemant@123', 'male', '1997-05-08', 'bharat wada pardi,pt.no 12', '440020', 'india', 'maharastra', 'nagpur', '8445575860', 'accepted', 'golu', 'umiyasankar shcool', 'adarsh sanskar j. college', 'b.sc (sindhu mahavidalaya)', 'hindi,bihari,english,marthi', 'accountent', 'sl', 'unmarried', 'i am hent sinha i am\r\na cool boy.', 'unactivate', '2008-08-21 11:16:01'),
('payal', 60, 'sharma', 'payal123', 'pyal@gmail.com', 'Payal@123', 'female', '1998-02-20', 'civil line,near power house', '440000', 'india', 'rajasthan', 'jaisalmer', '9325112536', 'accepted', 'pay', 'royal public shcool', 'royal j. college', 'mbbs (dadasaheb medical college)', 'hindi,eglish,marathi,marwadi', '', 'hindu', 'married', 'i am a cool gril who\r\nis a gril.', 'unactivate', '2008-08-21 11:28:09'),
('jaiverr', 61, 'swami', 'jai123', 'jai@gmail.com', 'Mohit@123', 'male', '2017-01-01', 'hiwri nagar,pt.no 12', '440009', 'india', 'punjab', 'lodiyana', '9975897920', 'accepted', 'sfdsdfsd', 'saroj high shcool', 'adarsh sanskar j. college', 'b.a (suryodaya college)', 'hindi,eglish,marathi,marwadi', 'accountent', 'hindu', 'married', 'safsafsafasfsafsaf', 'unactivate', '2008-08-21 11:13:24'),
('jaiverr', 62, 'swami', 'jaiking', 'kinf@gmail.com', 'Jailove@123', 'male', '2017-02-01', 'mudi badi,pt.no 12', '300123', 'usa', 'gokil', 'dsfjk', '9420863614', 'accepted', 'jai,king,sur', 'saroj high s', 'adarsh sanskar j.', 'b.a (suryodaya co', 'hindi,eglish,marat', 'accounten', 'chrisan', 'married', 'i am a cool boy,i am\r\nnot afiated this is\r\nweb developement\r\npage.', 'activate', '2008-08-21 11:17:05'),
('king', 63, 'khan', 'khan123', 'khan@gmail.com', 'Khana@123', 'male', '2011-03-06', ',', '440004', 'india', 'rajasthan', 'jaipur', '9325112536', 'accepted', 'sasd', 'sads', 'dsfsdf', 'fsdfsdf', 'sdfsdfdddddddddddddd', 'dfd', 'hindu', '', 'sdfsdfsdfsd', 'activate', '2008-08-21 10:31:56'),
('mohit', 64, 'swami', 'ms123', 'mohit@yahoo.com', 'Mohit@123', 'male', '1997-02-11', 'pt.no 593,hiwri nagar , near power house', '440008', 'india', 'maharastra', 'nagpur', '9420836319', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 09:57:13'),
('vivek', 65, 'tondare', 'vivek123', 'vivek@gmai.COM', 'Klove@123', 'male', '2011-05-15', 'hhhhhhhhhh,', '440008', 'india', 'maharastra', 'nagpur', '9325112536', 'accepted', '', '', '', '', '', '', 'hindu', 'married', 'sadfsdfsdfs', 'activate', '2008-08-21 09:39:43'),
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
('KING', 105, 'SINGH', 'nehal123', 'nehal@gmail.com', 'Mohit@123', 'male', '2017-03-04', 'hiwri nagar,pl no 216,', '440008', 'india', 'punjab', 'lodiyana', '7774599964', 'accepted', '', '', '', '', '', '', 'hindu', 'married', '', 'activate', '2008-08-21 11:16:33'),
('KING', 106, 'SINGH', 'nehal123', 'nehal@gmail.com', 'Mohit@123', 'male', '1998-01-19', 'hiwri nagar,pl no 216,', '440008', 'india', 'punjab', 'lodiyana', '7774599964', 'accepted', '', '', '', '', '', '', 'hindu', 'married', '', 'activate', '2008-08-21 11:18:36'),
('KING', 107, 'SINGH', 'mhghh', 'sinha@gmail.cl', 'Mohit@123', 'male', '0000-00-00', 'hiqwridss,', '440008', 'india', 'punjab', 'lodiyana', '9325112531', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:19:40'),
('KING', 108, 'SINGH', 'mohik', 'sinha@gmil.com', 'Mohit@123', 'male', '2017-01-01', 'hiqwridss,', '440008', 'usa', 'gokil', 'mokhj', '9325112546', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 11:21:01'),
('KING', 109, 'SINGH', 'nehal123', 'nehal@gmail.com', 'Mohit@123', 'male', '2017-02-01', 'hiwri nagar,pl no 216,', '440008', 'india', 'punjab', 'lodiyana', '7774599964', 'accepted', '', '', '', '', '', '', 'hindu', 'married', '', 'activate', '2008-08-21 09:58:04'),
('KING', 110, 'SINGH', 'nehal123', 'nehal@gmail.com', 'Mohit@123', 'male', '2017-07-01', 'hiwri nagar,pl no 216,', '440008', 'india', 'punjab', 'lodiyana', '7774599964', 'accepted', '', '', '', '', '', '', 'hindu', 'married', '', 'activate', '2008-08-21 10:01:29'),
('KING', 111, 'SINGH', 'nehal123', 'nehal@gmail.com', 'Mohit@123', 'male', '2017-02-01', 'hiwri nagar,pl no 216,', '440008', 'india', 'punjab', 'lodiyana', '7774599964', 'accepted', '', '', '', '', '', '', 'hindu', 'married', '', 'activate', '2008-08-21 10:06:42'),
('KING', 112, 'SINGH', 'nehal123', 'nehal@gmail.com', 'Mohit@123', 'male', '2017-10-01', 'hiwri nagar,pl no 216,', '440008', 'india', 'punjab', 'lodiyana', '7774599964', 'accepted', '', '', '', '', '', '', 'hindu', 'married', '', 'activate', '2008-08-21 10:08:56'),
('KING', 113, 'SINGH', 'nehal123', 'nehal@gmail.com', 'Mohit@123', 'male', '2017-02-01', 'hiwri nagar,pl no 216,', '440008', 'india', 'punjab', 'lodiyana', '7774599964', 'accepted', '', '', '', '', '', '', 'hindu', 'married', '', 'activate', '2008-08-21 10:15:50'),
('KING', 114, 'SINGH', 'nehal123', 'nehal@gmail.com', 'Mohit@123', 'male', '2017-03-01', 'hiwri nagar,pl no 216,', '440008', 'india', 'punjab', 'lodiyana', '7774599964', 'accepted', '', '', '', '', '', '', 'hindu', 'married', '', 'activate', '2008-08-21 10:21:41'),
('KING', 115, 'SINGH', 'nehal123', 'nehal@gmail.com', 'Mohit@123', 'male', '2017-05-01', 'hiwri nagar,pl no 216,', '440008', 'india', 'punjab', 'lodiyana', '7774599964', 'accepted', '', '', '', '', '', '', 'hindu', 'married', '', 'activate', '2008-08-21 10:23:32'),
('KING', 116, 'SINGH', 'nehal123', 'nehal@gmail.com', 'Mohit@123', 'male', '2017-07-01', 'hiwri nagar,pl no 216,', '440008', 'india', 'punjab', 'lodiyana', '7774599964', 'accepted', '', '', '', '', '', '', 'hindu', 'married', '', 'activate', '2008-08-21 10:26:13'),
('KING', 117, 'SINGH', 'nehal123', 'nehal@gmail.com', 'Mohit@123', 'male', '2017-11-01', 'hiwri nagar,pl no 216,', '440008', 'india', 'punjab', 'lodiyana', '7774599964', 'accepted', '', '', '', '', '', '', 'hindu', 'married', '', 'activate', '2008-08-21 10:31:48'),
('KING', 118, 'SINGH', 'nehal12345', 'sinha@gmail.cok', 'Mohit@123', 'male', '1998-02-20', 'hiqwridss,', '440008', 'russia', 'solud', 'ewq', '9325112597', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:41:30'),
('KING', 119, 'SINGH', 'nehal123', 'nehal@gmail.com', 'Mohit@123', 'male', '2017-03-01', 'hiwri nagar,pl no 216,', '440008', 'india', 'punjab', 'lodiyana', '7774599964', 'accepted', '', '', '', '', '', '', 'hindu', 'married', '', 'activate', '2008-08-21 10:48:22'),
('KING', 120, 'SINGH', 'nehal123', 'nehal@gmail.com', 'Mohit@123', '', '2017-09-01', 'hiwri nagar,pl no 216,', '440008', 'india', 'punjab', 'lodiyana', '7774599964', 'accepted', '', '', '', '', '', '', 'hindu', 'married', '', 'activate', '2008-08-21 10:49:59'),
('KING', 121, 'SINGH', 'nehal123', 'nehal@gmail.com', 'Mohit@123', 'male', '2017-11-01', 'hiwri nagar,pl no 216,', '440008', 'india', 'punjab', 'lodiyana', '7774599964', 'accepted', '', '', '', '', '', '', 'hindu', 'married', '', 'activate', '2008-08-21 10:50:42'),
('KING', 122, 'SINGH', 'nehal123', 'nehal@gmail.com', 'Mohit@123', 'male', '2017-02-01', 'hiwri nagar,pl no 216,', '440008', 'india', 'punjab', 'lodiyana', '7774599964', 'accepted', '', '', '', '', '', '', 'hindu', 'married', '', 'activate', '2008-08-21 09:35:31'),
('KING', 123, 'SINGH', 'nehal12', 'sinha@gmail.cox', 'Mohit@123', 'male', '2017-03-01', 'hiqwridss,', '440008', 'india', 'maharastra', 'mumbai', '9325112577', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 09:52:12'),
('KING', 124, 'SINGH', 'nehal1', 'kingis@mohit.co', 'Qqqqq@123', 'male', '2017-05-01', 'hiqwridss,,,,,,,,,,,,,,', '440008', 'india', 'maharastra', 'nagpur', '9325112539', 'accepted', 'mohitmohitmohitmohitmohitmohi', 'mohitmohitmohitmohitmohitmohitmohitmohitmohitmoht', 'mohitmohitmohitmohitmohitmohitmohitmohitmohitohit', 'mohitmohitmohitmohitmohitmohitmohitmohitmoitmohit', 'mohitmohitmohitmohitmohitmohi', 'mohitmohitmohitmohitmohitmohi', 'hindu', 'married', '', 'activate', '2008-08-21 10:14:28'),
('rohit', 125, 'gupta', 'rohit123', 'rohit@gmail.com', 'Mohit@123', 'male', '2017-02-01', 'pardi road,mahal', '440099', 'india', 'maharastra', 'mumbai', '9852144522', 'accepted', 'rahul', 'saroj high shcool', 'jr deep coolege', 'b.e pol', 'hindi ,gujrati', 'babu', 'hindu', 'married', 'i am a cooll boy\r\nwhich is going to\r\nshcool and we are\r\nhere you', 'unactivate', '2008-08-21 09:39:58'),
('mohit', 126, 'sss', 'ssss123', 'sss@gmail.com', 'Mohit@123', 'male', '2014-02-03', 'sdfsd,sdfdsf', '440008', 'canda', 'hoityo', 'sdfsd', '3625112536', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:19:57'),
('mohit123', 127, 'swaa', 'ssss12', 'nehalsd@gmail.com', 'Mohit@123', 'male', '2017-05-01', 'dsfgdf,dfgdfg', '440099', 'india', 'maharastra', 'nagpur', '2512364785', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:21:31'),
('KING', 128, 'SINGH', 'gcf1111', 'sinhxxxa@gmail.com', 'Mohit@123', 'male', '2017-12-01', 'hiqwridss,ghfgh', '440055', 'usa', 'fetch', 'calighjt', '9325112457', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-22 12:06:33'),
('KING', 129, 'SINGH', 'www123', 'sinxxxha@gmail.com', 'Mohit@123', 'male', '2017-11-01', 'hiqwridss,afsadf', '440055', 'canda', 'pipo', 'ikuyjk', '9325114477', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-22 12:11:06'),
('mohit', 130, 'swami', 'mohitkin', 'mohit@yahoo.cc', 'Mohit@123', 'male', '1997-02-11', 'pl.no 576,hiwri nagar', '440008', 'india', 'maharastra', 'nagpur', '9420836320', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-22 12:22:16'),
('asdf', 131, 'sadas', 'asdasd', 'aaa@h.co', 'Mohit@123', 'male', '2017-12-01', 'dsfsf,dsfds', '440011', 'usa', 'gokil', 'mokhj', '9325115863', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:20:21'),
('rahu', 132, 'sss', 'ssss1234', 'mohit@dfsd.con', 'Mohit@123', 'male', '2017-03-01', 'fghfgh,fdghfh', '440004', 'india', 'maharastra', 'nagpur', '9420836324', 'accepted', '', '', '', '', '', '', 'hindu', 'married', '', 'unactivate', '2008-08-21 10:30:52'),
('vjhgkh', 133, 'hgjkhj', 'hgjkhjgk', 'nehal1@dthg.gj', 'Mohit@123', 'male', '1999-01-19', 'fghfgh,ghfh', '440008', 'india', 'maharastra', 'nagpur', '2545789612', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activate', '2008-08-21 10:35:32'),
('dfdszfz', 134, 'dsfdf', 'sdfdsf', 'nehal@ded.vv', 'Mohit@123', 'male', '2017-02-01', 'sdff,sdf', '440008', 'india', 'maharastra', 'nagpur', '9325117845', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-22 02:46:59'),
('szdcxas', 135, 'sxdasx', 'sadxasd', 'sd@d.vv', 'Mohit@123', 'male', '2017-04-01', 'ghyfghfghf,', '440008', 'india', 'maharastra', 'mumbai', '9325112538', 'accepted', '', '', '', '', '', '', 'hindu', 'married', 'kjl;njkljkljkljk', 'activate', '2008-08-21 10:49:39'),
('fdsfsdf', 136, 'vcxv', 'mohit12', 'mohit@dfs.dhb', 'Mohit@123', 'female', '2017-01-01', 'dfsfdcvcvcb dfgdfg,fgdfgdf fdgdfgdfg', '44000845', 'india', 'maharastra', 'nagpur', '9325112436', 'accepted', 'rohit', 'RAJENDRA HIGH SHCOLL', 'sfsdddsdfsdfs', 'dsfsdfs', 'dfsdf', 'sdfsdf', 'chrisan', 'married', 'am the king of america', 'activate', '2008-08-21 10:07:35'),
('asdas', 137, 'sadasd', 'sadasd', 'mohit@gmail.co', 'Mohit@123', 'female', '2017-12-01', 'dsfsdf,', '454554455', 'usa', 'fetch', 'king', '4443332221', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-22 12:04:05'),
('efwee', 138, 'ewfew', 'eerwer', 'mohit@szfds.com', 'Mohit@123', 'male', '2017-12-01', 'hgvkhjk,vkhjgjhk', '440008', 'russia', 'solud', 'ewq', '9325112456', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 09:57:48'),
('gfhfgg', 139, 'fhfgh', 'fghgfhh', 'sdf@xdg.cvc', 'Mohit@123', 'male', '2017-10-01', 'dfgdg,', '440008', 'india', 'maharastra', 'nagpur', '1245778545', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:11:52'),
('gfhfgh', 140, 'fghfgh', 'fghfghfgh', 'dsadf@zdxfsd.ghf', 'Mohit@123', 'male', '2017-12-01', 'dfgdfg,', '440008', 'india', 'maharastra', 'nagpur', '9325117696', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:23:46'),
('fsdfs', 141, 'dfsdf', 'fdsfsdfd', 'dfds@sad.bbb', 'Mohit@123', 'male', '2017-12-01', 'fgdgdf,', '440008', 'russia', 'lodd', 'lyana', '9325116674', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:35:29'),
('fghfdh', 142, 'hfgh', 'er4tdrft', 'Mofgk@ASd.xx', 'Mohit@123', 'male', '2017-12-01', 'fxgdfg,', '440008', 'india', 'maharastra', 'nagpur', '9312224124', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'unactivate', '2008-08-21 10:47:51'),
('dfvdsf', 143, 'sdfsdf', 'dsfdsf', 'dsfsd@df.cvc', 'Mohit@123', 'male', '2017-11-01', 'dfgdfg,', '440008', 'russia', 'solud', 'ewq', '1245789632', 'accepted', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'activate', '2008-08-21 09:54:41'),
('mohit', 144, 'swami', 'mohitrajai', 'mohit167@gmail.com', 'mohit@123', 'm', '1997-02-11', 'pt.no 593 hiwri nagar', '440008', 'india', 'maharashtra', 'nagpur', '9420836319', 'y', 'gopal,lal', 'saroj high shcool', 'adarsh sanskar college oif science', 'b.e(computer engineering)', 'hindi,english,marwadi,marathi', 'web developer', 'hindu', 'um', 'i am a cool boy', 'activate', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
