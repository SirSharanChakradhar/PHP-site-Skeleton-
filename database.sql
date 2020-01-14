-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 01:28 AM
-- Server version: 5.7.17
-- PHP Version: 7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guestnventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `gi_kitting`
--

CREATE TABLE `gi_kitting` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `page` varchar(200) DEFAULT NULL,
  `sort_order` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gi_kitting`
--

INSERT INTO `gi_kitting` (`id`, `title`, `parent_id`, `page`, `sort_order`) VALUES
(1, '<i class=\"fad fa-brain\"></i>&nbsp;MASTER DATA', NULL, 'master.php', 1),
(2, '<i class=\"fad fa-file-code\"></i>&nbsp;SIGN UP', 3, 'signup.php', 1),
(3, '<i class=\"fad fa-browser\"></i>&nbsp;GENERAL', NULL, 'general.php', 1),
(4, '<i class=\"fad fa-alicorn\"></i>&nbsp;LOGIN', 3, 'login.php', 1),
(5, '<i class=\"fad fa-plus\"></i>&nbsp;CREATION', 1, 'creation.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `gi_kitting`
--
ALTER TABLE `kitting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gi_kitting`
--
ALTER TABLE `kitting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
