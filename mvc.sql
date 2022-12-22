-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 12:17 AM
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
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `content` text NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `content`, `qty`) VALUES
(1, 'Samsung', 5000, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"\r\n\r\n\"\"', 40),
(2, 'Oppo', 2000, 'Ut dictum mi id diam dapibus semper. Curabitur nec tincidunt tortor, sagittis dapibus arcu. Phasellus bibendum a eros quis posuere. Cras vel eros erat. Ut vel orci et enim pellentesque aliquam. Pellentesque quis tortor semper, congue erat at, condimentum justo. Vivamus facilisis volutpat felis sit amet condimentum. Quisque varius nunc eu felis euismod, vitae posuere risus posuere. Vestibulum non rhoncus ipsum, eget semper nulla. Cras ultrices, purus fringilla lobortis gravida, enim turpis ullamcorper ante, ac ultrices purus purus lacinia sapien. Suspendisse sed euismod nulla. Nullam et purus ac enim laoreet euismod.\r\n\r\n\"\"\"\"\"\"\"\"', 30),
(3, 'Nokia', 1000, 'Sed mollis vel nunc id consequat. Donec magna mi, ultrices vitae efficitur vitae, sollicitudin vitae felis. Vivamus sed urna bibendum ex tincidunt tristique. Phasellus mi odio, vulputate id tortor imperdiet, pharetra porta tortor. Etiam in dui at lorem consequat condimentum et convallis velit. Nulla sit amet velit et purus iaculis imperdiet. Mauris auctor venenatis sem, sed viverra est dictum sed. Mauris egestas arcu sit amet ultricies suscipit. Sed vitae ornare ligula. Etiam non enim in nunc tincidunt mattis eget quis tortor. Proin fringilla ut nunc vel finibus.\r\n\r\n', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
