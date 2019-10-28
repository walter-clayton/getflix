-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 24, 2019 at 10:24 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=237 DEFAULT CHARSET=latin1;

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
(236, '', '', '24-10-2019 Ã  \'10:10\'');

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
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `pseudo`, `password`, `date_subscribed`) VALUES
(1, '', '', '2019-10-23'),
(2, 'walter', '', '2019-10-23'),
(3, 'walter', '', '2019-10-23'),
(4, 'walter', '', '2019-10-23'),
(5, 'walter', '', '2019-10-23'),
(6, 'walter', '', '2019-10-23'),
(7, 'walt', '', '2019-10-23'),
(8, 'yo', '', '2019-10-23'),
(9, 'yo', '', '2019-10-23'),
(10, 'walt', '', '2019-10-23'),
(11, 'walt', '', '2019-10-23'),
(12, 'walt', '', '2019-10-23'),
(13, '', '', '2019-10-23'),
(14, 'walt', '', '2019-10-23'),
(15, 'walt', '', '2019-10-23'),
(16, 'walt', '', '2019-10-23'),
(17, 'walt', '', '2019-10-23'),
(18, 'walt', '', '2019-10-23'),
(19, '', '', '2019-10-23'),
(20, '', '', '2019-10-23'),
(21, '', '', '2019-10-23'),
(22, '', '', '2019-10-23'),
(23, '', '$2y$10$MDFsMVykcIfQavEnO4xxwOSRUr4SvmWIe1nPw570kYYM6CJZybgN.', '2019-10-23'),
(24, '', '$2y$10$k98fVSsfnm8jHBR3DkaJJ.oBHZLXFEP0.myT.E7sncuTlS7rTVSFi', '2019-10-23'),
(25, 'walterClayton', '$2y$10$jR.8JgCzIUdYFAxS5MMz5ubmGMZAyPvs6.grEy4C645mim7a6aWEC', '2019-10-23'),
(26, 'walterClayton', '$2y$10$wb9dY1SPUlwK.yHmr2mnde21u6LbPi8kpjcKCIJ/x2lglRn4YS8Q6', '2019-10-23'),
(27, 'walterClayton', '$2y$10$8ONuhhvF9uYRnlrPvp/IJ.GAwKK2If83GHIOqWBQBXH69u3nDUprm', '2019-10-23'),
(28, 'walter', '$2y$10$N6rX9kU3V7UuYlxyvgimV.fn7Zw7481TSOAc58x3ZJrULlayFuqSG', '2019-10-24'),
(29, 'clayton', '$2y$10$u7wmDvAFs.wXT8uP3c9e/ugaRYUloSAAMe/3p93WzUmPCW0RhlQWW', '2019-10-24'),
(30, 'clayton', '$2y$10$wOoXATf54njeXvTO3PumbOHgIwYxk5Ayeu6/JIbVTsFxmHpng8xSa', '2019-10-24'),
(31, 'clayton', '$2y$10$kQWsl5q/wg6mSkecJx9QYeUO2BwJWLA0A0i0NhL.RbZKUhKWhR63y', '2019-10-24'),
(32, 'clayton', '$2y$10$QW3BjDLkIZvc20yYCBEtP.dW3XldM8Gs3yo6DMpyzGQ4xpgiCnr7.', '2019-10-24'),
(33, 'clayton', '$2y$10$vILMNsDLYiC2B5lS.G/MauTb7tql6xRGkBtTkVYofEjPRBeSp03L.', '2019-10-24'),
(34, 'clayton', '$2y$10$4VOiC6.bmSr6vQKVs.2iaOKP2vCfb2MTuDE04j/jtMKx615ZoXcky', '2019-10-24'),
(35, 'walter', '$2y$10$4bToMgRph1EUAEXNikJ1He9cWbXC6iucdmoYYQ8KnUvJfqH.j9Day', '2019-10-24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
