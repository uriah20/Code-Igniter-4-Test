-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 08:22 AM
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
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Madaline', 'Gaylord', 'imurphy@example.com', 'cb6e85eb8006f607cf157d2169505375799a0f97', '1987-02-02 03:41:10', '2011-06-02 03:33:35'),
(2, 'Herman', 'Stroman', 'merle.williamson@example.net', '3a55b3b320806e67356aeeef8132d2c28b97d081', '1980-02-02 01:42:30', '1993-07-17 09:19:40'),
(3, 'Parker', 'Kshlerin', 'margarete.von@example.org', '2ff435ea7d97e61b8d27da80d68dac1a5aa09429', '1995-09-03 19:10:44', '1990-05-09 23:32:16'),
(4, 'Gunner', 'Bergnaum', 'rjenkins@example.net', 'dc304a963f65b8b1d3c2e9783c7c4dc0a9a9b319', '1998-10-10 05:44:43', '1985-11-08 21:12:23'),
(5, 'Darrin', 'Collier', 'brooke.kreiger@example.org', '357b923458bee161654e15cb1bb183d575b70a98', '2010-06-09 22:31:58', '2022-07-29 21:07:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
