-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 10:27 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_presentation_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE `solusi` (
  `id` int(11) NOT NULL,
  `idtopikdetail` int(3) NOT NULL,
  `judul` varchar(10) NOT NULL,
  `sebelum` varchar(30) NOT NULL,
  `sesudah` varchar(30) NOT NULL,
  `keybenefit` varchar(30) NOT NULL,
  `materi` varchar(30) NOT NULL,
  `process` varchar(30) NOT NULL,
  `video` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`id`, `idtopikdetail`, `judul`, `sebelum`, `sesudah`, `keybenefit`, `materi`, `process`, `video`) VALUES
(1, 1, 'solusi1_1', '', '', '', '', '', ''),
(2, 2, 'solusi2_1', '', '', '', '', '', ''),
(3, 3, 'solusi1_2', '', '', '', '', '', ''),
(4, 4, 'solusi1_3', '', '', '', '', '', ''),
(5, 5, 'solusi2_2', '', '', '', '', '', ''),
(6, 6, 'solusi2_3', '', '', '', '', '', ''),
(7, 7, 'solusi2_4', '', '', '', '', '', ''),
(8, 8, 'solusi2_5', '', '', '', '', '', ''),
(9, 9, 'solusi2_6', '', '', '', '', '', ''),
(10, 10, 'solusi2_7', '', '', '', '', '', ''),
(11, 11, 'solusi2_8', '', '', '', '', '', ''),
(12, 12, 'solusi2_9', '', '', '', '', '', ''),
(13, 13, 'solusi2_10', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE `topik` (
  `id` int(3) NOT NULL,
  `judul` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`id`, `judul`, `deskripsi`, `image`) VALUES
(1, 'JAVIL', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'javil.gif'),
(2, 'SEMV', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque', 'semv.gif');

-- --------------------------------------------------------

--
-- Table structure for table `topik_detail`
--

CREATE TABLE `topik_detail` (
  `id` int(3) NOT NULL,
  `idtopik` int(3) NOT NULL,
  `judul` varchar(10) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topik_detail`
--

INSERT INTO `topik_detail` (`id`, `idtopik`, `judul`, `image`) VALUES
(1, 1, 'solusi1_1', 'sol11.jpg'),
(2, 2, 'solusi2_1', 'sol21.jpg'),
(3, 1, 'solusi1_2', 'sol12.jpg'),
(4, 1, 'solusi1_3', 'sol13.jpg'),
(5, 2, 'solusi2_2', 'sol22.jpg'),
(6, 2, 'solusi2_3', 'sol23.jpg'),
(7, 2, 'solusi2_4', 'sol24.jpg'),
(8, 2, 'solusi2_5', 'sol25.jpg'),
(9, 2, 'solusi2_6', 'sol26.jpg'),
(10, 2, 'solusi2_7', 'sol27.jpg'),
(11, 2, 'solusi2_8', 'sol28.jpg'),
(12, 2, 'solusi2_9', 'sol29.jpg'),
(13, 2, 'solusi2_10', 'sol210.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idtopikdetail` (`idtopikdetail`),
  ADD KEY `judul` (`judul`);

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topik_detail`
--
ALTER TABLE `topik_detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `judultopik` (`judul`),
  ADD KEY `topikid` (`idtopik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `topik_detail`
--
ALTER TABLE `topik_detail`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `solusi`
--
ALTER TABLE `solusi`
  ADD CONSTRAINT `solusi_ibfk_1` FOREIGN KEY (`idtopikdetail`) REFERENCES `topik_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `solusi_ibfk_2` FOREIGN KEY (`judul`) REFERENCES `topik_detail` (`judul`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `topik_detail`
--
ALTER TABLE `topik_detail`
  ADD CONSTRAINT `topik_detail_ibfk_1` FOREIGN KEY (`idtopik`) REFERENCES `topik` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
