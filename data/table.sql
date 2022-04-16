-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2020 at 12:24 AM
-- Server version: 5.7.31-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `juniorfr_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `goldoon_tbl`
--

CREATE TABLE `goldoon_tbl` (
  `id` int(255) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `olaviat` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goldoon_tbl`
--

INSERT INTO `goldoon_tbl` (`id`, `img`, `olaviat`) VALUES
(1, 'https://archive.org/download/001_20201016/001.png', 6),
(2, 'https://archive.org/download/001_20201016/002.png', 5),
(58, 'https://therightsofnature.org/wp-content/uploads/2018/01/turkey-3048299_1920-1366x550.jpg', 11),
(59, 'https://scx2.b-cdn.net/gfx/news/hires/2019/2-nature.jpg', 1),
(57, 'https://scx2.b-cdn.net/gfx/news/hires/2019/2-nature.jpg', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goldoon_tbl`
--
ALTER TABLE `goldoon_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goldoon_tbl`
--
ALTER TABLE `goldoon_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;