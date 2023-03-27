-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 10:00 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `users_test`
--

CREATE TABLE `users_test` (
  `id` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPass` varchar(50) NOT NULL,
  `hashedPass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_test`
--

INSERT INTO `users_test` (`id`, `userName`, `userEmail`, `userPass`, `hashedPass`) VALUES
(1, 'user1', 'user1@email.ro', 'pass1', NULL),
(2, 'user2', 'user2@email.com', 'pass2', NULL),
(3, 'user3', 'user3@server.ro', 'pass3', NULL),
(4, 'user4', 'user4@email.com', 'pass4', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_test`
--
ALTER TABLE `users_test`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userName` (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_test`
--
ALTER TABLE `users_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
