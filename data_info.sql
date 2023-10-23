-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 08:38 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `sno` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `comment2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`sno`, `user`, `comment2`) VALUES
(1000, 'KOGO', 'yeaah, konkani differs from place to place'),
(1000, 'Nevil', 'yeaaah bro '),
(1000, 'user1', 'yeah that\'s true'),
(1000, 'Anish', 'we will look into it'),
(1001, 'Nevil', 'Namaskar and Hai don\'t go along i guess'),
(1001, 'Nisha', 'yeah evn i guess so'),
(1002, 'Nisha', 'i agree on that');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE `history` (
  `username` varchar(50) NOT NULL,
  `Eng` varchar(500) NOT NULL,
  `Kon` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`username`, `Eng`, `Kon`) VALUES
('Chris', 'hai', 'hai'),
('Chris', 'Nevil', 'Nevil'),
('user1', 'where are you?', 'thumi kai asath ?'),
('Nisha', 'how are you', 'thumi kaeshe asath'),
('Nisha', 'How do you do', 'koosoň (or kashnee ) āsāi '),
('Nisha', 'What are you doing?', 'thumi kaalee karn asath ?'),
('KOGO', 'i decided to write code', 'hanve boroovnkk kanun nerdhar kele'),
('KOGO', 'i decided to write the final code', 'hanve kanun akair boroovnkk nerdhar kele'),
('KOGO', 'final code', 'akair kanun'),
('KOGO', 'finally', 'kadel'),
('KOGO', 'i decided to write final code', 'hanve akair kanun boroovnkk nerdhar kele'),
('KOGO', 'you eat banana', 'thumi banana kha');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `Role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `username`, `password`, `Role`) VALUES
('aloy@gmail.com', 'Aloy', 'aloy123', 0),
('dsouza11anish@gmail.com', 'Anish', 'Rupert', 1),
('Anish29@gmail.com', 'Anish29', 'D Souza', 1),
('ChrisVas@gmail.com', 'Chris', 'Vas', 1),
('Kogoixe@gmail.com', 'KOGO', 'Kogo123', 0),
('nevilserrao@gamil.conm', 'Nevil', 'Serrao', 0),
('Nisha@gmail.com', 'Nisha', 'Nisha123', 0),
('user1@gamil.com', 'user1', 'user123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `new_words`
--

DROP TABLE IF EXISTS `new_words`;
CREATE TABLE `new_words` (
  `sno` int(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `eng` varchar(100) NOT NULL,
  `kon` varchar(100) NOT NULL,
  `comment1` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_words`
--

INSERT INTO `new_words` (`sno`, `username`, `eng`, `kon`, `comment1`) VALUES
(1000, 'KOGO', 'What', 'Kasale', 'We say it as kasale not kale'),
(1001, 'KOGO', 'Hai', 'Namaskar', 'word for greetings'),
(1002, 'KOGO', 'Mad', 'piso', 'there was no word for mad'),
(1003, 'Nisha', 'one', 'ek', 'no word for one');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `new_words`
--
ALTER TABLE `new_words`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_words`
--
ALTER TABLE `new_words`
  MODIFY `sno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
