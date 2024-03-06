-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 03:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consumables_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `organization` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `phone`, `organization`) VALUES
(1, 'First User', 'user1', '$2y$10$x78OaoWIywuaANS.3r.ZkuH5C8FhiGgX8WdUPqsw1xLy0YcHZsVOu', 'firstuser@gmail.com', 9999999999, 'try'),
(2, 'Shubhan', 'shubhan', '$2y$10$JwUBqkfxE7Ri5pq3sUovkemX0RBxDRzoe6HQWYHoCgxtvFiN9kV0S', 'shubhan.tuteja13@gmail.com', 8826020395, 'simtrak'),
(11, 'soham', 'soham', '$2y$10$xl.QF0CTVBZFQJ8SNQhESObuRDU4A0yibYsYT8JiOeKaloUPsuGY6', 'soham@gmail.com', 9988776655, 'simtrak'),
(12, 'user', 'user', '$2y$10$R0Utpou8IxzUvcul0uj3FuzWfhiRNZqMJzHnuv/H8CYcZcsu9IcKe', 'user@gmail.com', 9988776655, 'try'),
(17, 'user 2', 'user2', '$2y$10$8vKhGH0r/oWrZWmg1sgAbuqoXpSRvndStrDIZhbQ6qAXfZChfVrW2', 'user2@gmail.com', 9999888877, 'try');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
