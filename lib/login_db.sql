-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 03:29 PM
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
-- Database: `pembayaran_db;`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `metode_pembayaran` varchar(50) DEFAULT NULL,
  `status` enum('Pending','Completed','Failed') DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `nama`, `email`, `tanggal`, `jumlah`, `metode_pembayaran`, `status`) VALUES
(18, 'adadad', 'klh@fjhfghf', '2024-06-13', 2147483647, 'pinjol', 'Failed'),
(19, 'adadadsasas', 'klh@fjhfghf', '2024-06-06', 2147483647, 'ovo', 'Completed'),
(20, 'ad', 'klh@fjhfghf', '2024-06-25', 2147483647, 'bank', 'Failed'),
(21, 'asasas', 'hhk@jkhjk', '2024-06-07', 2147483647, 'bank', 'Completed'),
(22, 'rizki ', 'rizki.stmik@krw', '2024-06-26', 2111111111, 'pinjol', 'Completed'),
(23, 'rizki eka saputra', 'rizki.saputra.stmik@krw.horizon.ac.id', '2024-06-14', 11111111, 'bank', 'Pending'),
(24, 'eka saputra', 'woq@mgmgm', '2024-06-14', 11111111, 'ovo', 'Pending'),
(26, 'rifky pr', 'rifkyyy@gg', '2024-06-26', 2147483647, 'pinjol', 'Completed'),
(27, 'muklis sl', 'mas@slll', '2024-06-19', 100000, 'pinjol', 'Pending'),
(28, 'udin jabi', 'jabi@udin', '2024-06-01', 22121, 'dana', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
