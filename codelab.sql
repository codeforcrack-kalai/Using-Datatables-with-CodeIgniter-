-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 02:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codelab`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `author` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `publisher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ID`, `name`, `price`, `author`, `rating`, `publisher`) VALUES
(1, 'Harry Potter And The Order Of The Phoenix', '10.99', 'J.K. Rowling', 9, 'Bloomsbury'),
(2, 'Harry Potter And The Goblet Of Fire', '6.99', 'J.K Rowling', 8, 'Bloomsbury'),
(3, 'Lord Of The Rings: The Fellowship Of The Ring', '8.99', 'J. R. R. Tolkien', 8, 'George Allen & Unwin'),
(4, 'Lord Of The Rings: The Two Towers', '4.55', 'J. R. R. Tolkien', 8, 'George Allen & Unwin'),
(5, 'Lord Of The Rings: The Return Of The King', '7.99', 'J. R. R. Tolkien', 9, 'George Allen & Unwin'),
(6, 'End of Watch: A Novel', '5.00', 'Stephen King', 7, 'Scribner'),
(7, 'Truly Madly Guilty', '4.55', 'Liane Moriarty', 6, 'Flatiron Books'),
(8, 'All There Was', '3.99', 'John Davidson', 3, 'Newton'),
(9, 'Mystery In The Eye', '8.44', 'E.L. Joseph', 8, 'Red Books'),
(10, 'Neo Lights', '12.99', 'George Nord', 8, 'Heltower'),
(11, 'Universe: History', '13.99', 'Albert Shoon', 4, 'Easy Books'),
(12, 'Green Earth', '7.99', 'Ashleigh Turner', 4, 'Yellowhouse'),
(13, 'Music Of The Ages', '3.83', 'James King', 3, 'Universe Co'),
(14, 'Ancient Tea', '3.99', 'Jess Red', 8, 'Yellowhouse'),
(15, '‘1’', '0.00', '‘Virat’', 0, '‘Virat’'),
(16, 'ere', '0.00', 'er', 0, 'wer'),
(17, 'ere', '0.00', 'er', 0, 'wer'),
(18, 'Virat', '13.00', 'RCB', 0, '23'),
(19, 'Virat', '13.00', 'RCB', 0, '23'),
(20, 'werser', '0.00', 'rewr', 0, 'werwer'),
(21, '', '0.00', '', 0, ''),
(22, 'dfgdf', '0.00', 'fgdfg', 0, 'dfgdfg'),
(23, 'dfgdf', '0.00', 'fgdfg', 0, 'dfgdfg'),
(24, 'dfs', '0.00', 'fsdf', 0, 'sdfs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
