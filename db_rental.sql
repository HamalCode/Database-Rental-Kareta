-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 11:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_kareta`
--

CREATE TABLE `t_kareta` (
  `id_kareta` char(4) NOT NULL,
  `nrn_kareta` char(50) NOT NULL,
  `inc_kareta` char(50) NOT NULL,
  `obs_kareta` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kareta`
--

INSERT INTO `t_kareta` (`id_kareta`, `nrn_kareta`, `inc_kareta`, `obs_kareta`) VALUES
('1', 'Prado GM', 'PR', 'Diak'),
('2', 'Avanza', 'AV', 'Diak'),
('3', 'Mikrolet', 'Mk', 'Diak'),
('4', 'Hilux', 'Hl', 'Diak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_kareta`
--
ALTER TABLE `t_kareta`
  ADD PRIMARY KEY (`id_kareta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
