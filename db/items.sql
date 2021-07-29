-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 06:49 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tekweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(100) NOT NULL,
  `name` varchar(1222) NOT NULL,
  `price` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Negeri Para Bedebah', 85000),
(2, 'Ubur-ubur Lembur', 60000),
(3, 'Bumi', 90000),
(4, 'Harry Potter Deathly Hallows', 75000),
(5, 'Harry Potter - And The Goblet of Fire', 100000),
(6, 'Fantastic Beasts - The Crimes of Grindelwold', 200000),
(7, 'Seri Kuliah Ringkas : Elektronika Dasar', 95000),
(8, 'Bank Soal Saintek Utbk Sbmptn 2022', 140000),
(9, 'Teori Dan Aplikasi Teknik Listrik', 92000),
(10, 'Mekanika Tanah 1 Konsep Dasar Dan Pengukuran Laboratorium', 75000),
(11, 'Distribusi Daya Listrik, Teori Dan Praktik', 50000),
(12, 'Hidroponik & Vertikultura', 80000),
(13, 'Naruto Vol 2', 20000),
(14, 'Naruto Vol 1', 20000),
(15, 'Naruto Vol 3', 20000),
(16, 'Naruto Vol 4', 20000),
(17, 'Naruto Vol 5', 20000),
(18, 'Naruto Vol 6', 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
