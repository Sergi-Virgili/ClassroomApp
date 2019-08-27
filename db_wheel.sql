-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 22, 2019 at 10:07 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_wheel`
--

-- --------------------------------------------------------

--
-- Table structure for table `coder`
--

CREATE TABLE `coder` (
  `id_coder` int(5) NOT NULL,
  `name_coder` varchar(20) NOT NULL,
  `dead` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coder`
--

INSERT INTO `coder` (`id_coder`, `name_coder`, `dead`) VALUES
(1, 'Sergi', 0),
(2, 'Nellay', 0),
(3, 'Franco', 0),
(4, 'Carlos', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coder`
--
ALTER TABLE `coder`
  ADD PRIMARY KEY (`id_coder`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coder`
--
ALTER TABLE `coder`
  MODIFY `id_coder` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
