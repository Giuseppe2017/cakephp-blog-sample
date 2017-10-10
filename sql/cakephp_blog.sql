-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2017 at 07:34 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.6.31-6+ubuntu14.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cakephp_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmarks`
--

CREATE TABLE IF NOT EXISTS `bookmarks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` text,
  `url` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_key` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bookmarks_tags`
--

CREATE TABLE IF NOT EXISTS `bookmarks_tags` (
  `bookmark_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`bookmark_id`,`tag_id`),
  KEY `tag_key` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `titleSlug` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `tags` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `title`, `titleSlug`, `content`, `tags`, `author`, `created`, `modified`) VALUES
(1, 'The SpiderMAV does whatever a spider can, spins a web, any size', 'the-spidermav-does-whatever-a-spider-can-spins-a-web-any-size', 'Researchers at the Imperial College London’s Aerial Robotics Laboratory have created the SpiderMAV – a robot that stabilizes itself by shooting out multiple strands of rope that can stick to magnetic surfaces. The drone, which is a standard quadcopter, has a built-in rope gun that blasts out little connectors. The drone then pulls against the ropes, stabilizing itself in flight.\r\n\r\nThe leader researcher, Mirko Kovac, equates the drone with Darwin’s bark spider, an arachnid that can shoot a web “25 meters” in any direction.\r\n\r\nThe system can help keep a drone in place even in heavy winds as simulated by fan crosswinds. This is just a proof of concept so the magnets don’t have variable strength nor are the cables particularly resilient. However, you could imagine this sort of system being used to manage communications in a time of crisis or maintain surveillance in heavy weather. The researchers presented their findings in Vancouver. Their paper is called “SpiderMAV: Perching and Stabilizing Micro Aerial Vehicles with Bio-inspired Tensile Anchoring Systems,” by K. Zhang, P. Chermprayong, T. M. Alhinai, R. Siddall, and M. Kovac from Imperial College London.', 'London,spider,web,size', 'John Biggs (@johnbiggs)', '2017-10-10 10:41:31', '2017-10-10 10:41:31'),
(2, 'A chat with the creators of Arduino', 'a-chat-with-the-creators-of-arduino', 'On this week’s Technotopia I talked to Massimo Banzi and Fabio Violante, the co-creators of Arduino. This pair of Italian artists saw their little single-board computers as a gateway to high-tech art but they’ve essentially created a world in which anyone – from an 11-year-old hacker to a huge corporation – can make amazing hardware in a few hours.\r\n\r\nThe pair recently returned to full-time control after a stint that placed high-tech exec Frederico Musto at the head of Arduino AG. Musto recently stepped down, allowing Banzi and Violante to return.\r\n\r\nIn this podcast we talk about Arduino’s artistic roots and what the pair expect to see in the future.\r\n\r\nTechnotopia is a podcast about a better future by John Biggs. You can subscribe in Stitcher or iTunes and download the MP3 here.', 'Tech,Chat,Arduino', 'John Biggs (@johnbiggs)', '2017-10-10 12:18:01', '2017-10-10 12:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'Test', '$2y$10$xKQX/lsUhA45omBTs24ueOVv4dMduFEOE6DEZzvr6ngcvHkH4JZSm', 'admin', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
