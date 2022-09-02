-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 07:21 AM
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
-- Database: `crudoperation`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `first_name`, `last_name`, `email`, `age`, `address`, `image_path`) VALUES
(4, 'Md ', 'Asfaqur Alam', 'ahsansagor445@gmail.com', 18, 'Uattra,Dhaka,Bangladesh', 'uploads/man-avatar.jpg'),
(5, 'Md ', 'Shanto', 'ahsansagor46@gmail.com', 16, 'Uttara,Dhaka,Bangladesh', 'uploads/businessman.jpg'),
(6, 'Md ', 'Mahabub', 'admin@app.com', 25, 'Uttara,Dhaka,Bangladesh', 'uploads/pngtree.jpg'),
(7, 'Md ', 'Sohan', 'ahsansagor449@gmail.com', 25, 'Jatrabari,Dhaka,Bangladesh', 'uploads/download.png'),
(8, 'Md ', 'Sagor', 'ahsansagor46@gmail.com', 23, 'Dhaka,Bangladesh', 'uploads/img_avatar.png'),
(9, 'Md ', 'Abu Raihan', 'Swapnapaul049@gmail.com', 25, 'Uttra,Dhaka,Bangladesh', 'uploads/man-avatar.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
