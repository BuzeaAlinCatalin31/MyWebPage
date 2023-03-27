-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 03:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime_list`
--

CREATE TABLE `anime_list` (
  `id` int(11) NOT NULL,
  `animeName` varchar(50) NOT NULL,
  `tier` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anime_list`
--

INSERT INTO `anime_list` (`id`, `animeName`, `tier`) VALUES
(3, 'Death Note', 'A'),
(5, 'Bocchi the Rock', 'A'),
(7, 'Dororo', 'A'),
(8, 'Gintama', 'S'),
(9, 'Food Wars', 'S'),
(10, 'Haikyuu!', 'S'),
(11, 'Horimiya', 'A'),
(12, 'Anohana', 'A'),
(26, 'Attack on Titan', 'S'),
(27, 'Vinland Saga', 'A'),
(28, 'Demon Slayer', 'A'),
(29, 'My Teen Romantic Comedy', 'A'),
(30, 'One Piece', 'A'),
(31, 'My Dress-Up Darling', 'A'),
(32, 'Fire Force', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime_list`
--
ALTER TABLE `anime_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime_list`
--
ALTER TABLE `anime_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
