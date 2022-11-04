-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 12:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `membership`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamember`
--

CREATE TABLE `datamember` (
  `id` int(11) NOT NULL,
  `profile` varchar(50) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nomor` varchar(25) NOT NULL,
  `umur` int(5) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `kelamin` varchar(15) NOT NULL,
  `tier` varchar(15) NOT NULL,
  `durasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datamember`
--

INSERT INTO `datamember` (`id`, `profile`, `nama`, `nomor`, `umur`, `alamat`, `kelamin`, `tier`, `durasi`) VALUES
(1, 'arabian.png', 'arabian', '12', 12, '122', 'Laki-Laki', 'Bronze', '2022-11-03'),
(2, 'bobi.png', 'bobi', '23', 34, '222', 'Perempuan', 'Bronze', '2022-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'naf', '$2y$10$YioTfzRxtAM9vVHcowx63OePqRYtUjuJgnXVYz1PZ9t5YJIpB5gui'),
(4, 'hadieee', '$2y$10$uhmMNXLfesN7vtmrvqkkmuSPpMKtnHRV9h0e9KGKfVFHYZqAIdNs.'),
(5, 'Ardi', '$2y$10$/XQH/4lp7Qz8qMTixOLkXOgDrjFoX38kCiN3ARgjC.lJkAa34Uw3S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamember`
--
ALTER TABLE `datamember`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
