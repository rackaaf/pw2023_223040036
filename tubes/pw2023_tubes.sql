-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2023 at 05:36 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2023_tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gambar` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `gambar`) VALUES
(13, 'racka', '$2y$10$OQnXCrTiynCv68hdwmtwc.dhBHPPCl7nJUWpe1KsdSrbLrfc1EicO', '64735cb01b76f.jpg'),
(16, 'admin', '$2y$10$fdbF5xpfR5lItu2tO.Nmtum5vWd6xcrvtDhoMM9XEXLgvLfrh7RCS', '647854951eb62.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi_destinasi`
--

CREATE TABLE `rekomendasi_destinasi` (
  `id` int NOT NULL,
  `tempat` varchar(40) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rekomendasi_destinasi`
--

INSERT INTO `rekomendasi_destinasi` (`id`, `tempat`, `deskripsi`, `gambar`) VALUES
(7, 'jakarta, Indonesia', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci dolorem tempora dignissimos aliquid architecto earum ea. Iusto, exercitationem quisquam. Odit, temporibus.', '6481c66c5a1fd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(9, 'raka', '$2y$10$mkSJWy9DwJQTjKSuKAEM7u3fxXacDxYaV41JOU3IqY23KBMu3NtnG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekomendasi_destinasi`
--
ALTER TABLE `rekomendasi_destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `rekomendasi_destinasi`
--
ALTER TABLE `rekomendasi_destinasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
