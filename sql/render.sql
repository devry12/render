-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 05:30 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `render`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `level`) VALUES
(3, 'admin', 'admin@admin.com', '$2y$10$TXsN4k4ljb0Izz1qso.z6.JM41uG3MpXnMl5lwdZdYt0cHRCEvdOa', 1),
(5, 'lala', 'Lala@admin.com', '$2y$10$Ke2OYttL1zgtdwUkbSTFYufQhZIZdglVJ4P4t07y8Oc9kccaeE18q', 0),
(7, 'devry', 'devrykawiryan@gmail.com', '$2y$10$FdAFndZYmYRk.EmqHVghF.fHpcQKxaqrJ4U136hiyQZ6XjVa/jNSO', 0),
(8, 'nani', 'nani@gmail.com', '$2y$10$i2S/6k6gPSwfNZza.aV3vuKC6riopFt/bIouSRDJx6DRC4APnBfju', 0),
(9, 'dodo', 'dodo@gmail.com', '$2y$10$leOSNfesqZGFYk911GlpLeH3RIV6Jhgh0IdM9txxxcyzSFox6wEQS', 0),
(12, 'kiki', 'kiki@gmail.com', '$2y$10$lwpppC99N8QKXHRoGpXT6e8FwgzdMGZtbXd9H6mI2dgoLbRKTHv6G', 0),
(13, 'bobo', 'bobo@gmail.com', '$2y$10$XLtKx6Lk.OckOd5PNLEDUuyi.iN8dBmDSGumyctPnRfEeSwCBywJC', 0),
(14, 'lolo', 'lolo@gmail.com', '$2y$10$CNbRUDbz5Qj5TFhx6vejxOto8oKSehXYw5eLiSb/.NzVWZ3gF8vWO', 0),
(15, 'koko', 'koko@gmail.com', '$2y$10$RqLdV1bm9WUx1IwzQuOkEOizYAYsvznnm675JR8e1hxnIZdBzwnDC', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
