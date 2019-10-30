-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 30, 2019 at 10:57 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_comment` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=240 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`id`, `pseudo`, `message`, `date_comment`) VALUES
(223, 'Hamza', 'Sakuuut', '23-10-2019 Ã  \'16:09\''),
(224, 'Naruto', 'Wooow j\'ai adorÃ© ce film :D', '23-10-2019 Ã  \'16:09\''),
(225, 'SasukÃ©', 'J\'ai grave pleurÃ© ma vie Ã  la fin :\'(', '23-10-2019 Ã  \'16:09\''),
(226, 'SasukÃ©', 'J\'ai grave pleurÃ© ma vie Ã  la fin :\'(', '23-10-2019 Ã  \'16:10\''),
(227, '', '', '23-10-2019 Ã  \'16:10\''),
(228, '', '', '23-10-2019 Ã  \'16:10\''),
(229, 'Mouad', 'Saluuuut', '23-10-2019 Ã  \'16:30\''),
(230, 'Mouad', 'Saluuuut', '23-10-2019 Ã  \'16:32\''),
(231, 'mouad', 'salut', '24-10-2019 Ã  \'10:41\''),
(232, 'mouad', 'salut', '24-10-2019 Ã  \'10:49\''),
(233, 'zaxca', 'sdf', '24-10-2019 Ã  \'9:40\''),
(234, '', '', '24-10-2019 Ã  \'10:10\''),
(235, 'haha', 'lol', '24-10-2019 Ã  \'10:10\''),
(236, '', '', '24-10-2019 Ã  \'10:10\''),
(237, 'zaxca', 'sdf', '24-10-2019 Ã  \'12:14\''),
(238, 'aaa', 'aaa', '2019-10-28 12:12:58'),
(239, 'dfsdf', 'sdfsdf', '2019-10-29 22:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `synopsis` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `link video` int(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_subscribed` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `pseudo`, `password`, `date_subscribed`) VALUES
(124, 'a', '$2y$10$AaeXwVEJIuzwOOSsVom5tOxyXDDO7TkumNchOLK9gfvql9Le7MhKi', '2019-10-30'),
(123, 'hamza', '$2y$10$bleDFYsGGCopDInYsP4MYO.411nmNfyIy5peggcToIN5fXMuKH1vi', '2019-10-29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
