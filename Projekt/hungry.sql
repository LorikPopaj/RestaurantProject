-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 10:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hungry`
--

-- --------------------------------------------------------

--
-- Table structure for table `cocktails`
--

CREATE TABLE `cocktails` (
  `ID` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cocktails`
--

INSERT INTO `cocktails` (`ID`, `img`, `title`, `description`) VALUES
(6, 'img/cocktail1.jpg', 'Mango Cocktail', 'Special ingredients'),
(7, 'img/cocktail2.jpg', 'Passion Fruit', 'Passion Fruit with special ingredients'),
(8, 'img/cocktail3.jpg', 'Pineapple Cocktail', 'Pineapple Cocktail with special ingredients');

-- --------------------------------------------------------

--
-- Table structure for table `img_columns`
--

CREATE TABLE `img_columns` (
  `ID` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img_columns`
--

INSERT INTO `img_columns` (`ID`, `img`, `title`, `description`) VALUES
(18, 'img/chicken.jpg', 'Chicken', 'Spicy Chicken with seasonal vegetables'),
(19, 'img/clams.jpg', 'Clams', 'Delicious Clams with perfect texture'),
(20, 'img/calamari.jpg', 'Calamari', 'Best sea food in town, you will ever taste'),
(21, 'img/pasta.jpg', 'Pasta', 'Different sauces and delicious vegetables'),
(22, 'img/pizza.jpg', 'Pizza', 'Traditional Margarita, peperoni, four season'),
(23, 'img/steak.jpg', 'Steak', 'Juicy rare, medium, well-done stake'),
(24, 'img/spaghetti.jpg', 'Spaghetti', 'Home made Spaghetti with vegetables'),
(25, 'img/clams.jpg', 'Clams', 'Delicious Clams with perfect texture');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `name`, `tel`, `message`, `address`) VALUES
(2, 'lorik', '1231', 'asasfas', 'Gjon Serreqi'),
(3, 'Bardhi', '12312222', 'asasfas', 'asfasf'),
(4, 'edona', '12312222', 'asasfas', 'asfasfasf'),
(5, 'Lorik Popaj', '12312222', 'asasfas', 'asfasfasf'),
(6, 'Lorik Popaj', '12312222', 'asasfas', 'Gjon Serreqi'),
(7, 'lorik', '1231', 'asasfas', 'Gjon Serreqi'),
(8, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `ID` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`ID`, `img`) VALUES
(22, 'img/oferta1.jpg'),
(23, 'img/oferta2.jpg'),
(25, 'img/oferta3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'regular_user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `fname`, `username`, `email`, `pass`, `role`) VALUES
(1, 'Oltion Gashi', 'OltionG', 'gashioltion@gmail.com', 'test', 'admin'),
(2, 'Lorik Popaj', 'Lorik Popaj', 'lp@gmail.com', 'lptest', 'admin'),
(78, 'Diellza Dushi', 'DiellzaD', 'diellza@gmail.com', '1234', 'admin'),
(80, 'Diellza Dushi', 'DiellzaD', 'diellza@gmail.com', 'Diellza123!', 'regular_user'),
(81, 'Rroni Popaj', 'RroniP', 'rroni@gmail.com', 'Rroni123!', 'regular_user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cocktails`
--
ALTER TABLE `cocktails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `img_columns`
--
ALTER TABLE `img_columns`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cocktails`
--
ALTER TABLE `cocktails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `img_columns`
--
ALTER TABLE `img_columns`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
