-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 02:02 PM
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
-- Database: `disha`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookhistory`
--

CREATE TABLE `bookhistory` (
  `ID` int(11) NOT NULL,
  `Book` varchar(50) DEFAULT NULL,
  `UserName` varchar(255) NOT NULL,
  `returned` int(1) DEFAULT 0,
  `DateTaken` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookhistory`
--

INSERT INTO `bookhistory` (`ID`, `Book`, `UserName`, `returned`, `DateTaken`) VALUES
(17, 'Family Man', 'c4', 0, '2024-04-28 11:47:20'),
(18, 'Family Man', 'c4', 0, '2024-04-28 11:47:48'),
(19, 'The God of Small Things', 'c1', 0, '2024-04-28 11:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ID` int(11) NOT NULL,
  `BookName` varchar(255) NOT NULL,
  `Auther` varchar(255) NOT NULL,
  `available` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ID`, `BookName`, `Auther`, `available`) VALUES
(1, 'The Palace of Illusions', 'Chitra Banerjee Divakaruni', 0),
(3, 'The God of Small Things', 'Arundhati Roy', 1),
(4, 'Family Man', 'Durjoy Datta and Avantika Ghosh', 1),
(5, 'The White Tiger', 'Aravind Adiga', 0),
(6, 'Train to Pakistan', 'Khushwant Singh', 0),
(7, 'Impossibly Indian', 'Anuja Chauhan', 0),
(8, 'The Vegetarian', 'Han Kang (translated by Deborah Smith)', 0),
(9, 'A Suitable Boy', 'Vikram Seth', 0),
(10, 'Munnu: A Season of Tyranny', 'Shekhar Kapur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Pass` varchar(255) DEFAULT NULL,
  `Authenticated` int(11) DEFAULT NULL,
  `Is_Active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `UserName`, `Pass`, `Authenticated`, `Is_Active`) VALUES
(1, 's1', 'abcdef', 1, 0),
(2, 's2', 'uvwxyz', 1, 0),
(3, 's3', 'uvwxyz2', 1, 0),
(4, 'c1', '111111', 0, 1),
(5, 'c2', '222222', 0, 0),
(6, 'c3', '333333', 0, 0),
(8, 'c4', '444444', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookhistory`
--
ALTER TABLE `bookhistory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookhistory`
--
ALTER TABLE `bookhistory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
