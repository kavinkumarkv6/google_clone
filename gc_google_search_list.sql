-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 11, 2021 at 06:20 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `google_clone`
--

-- --------------------------------------------------------

--
-- Table structure for table `gc_google_search_list`
--

CREATE TABLE `gc_google_search_list` (
  `ggsl_search_list_id` int NOT NULL,
  `ggsl_search_title` varchar(100) DEFAULT NULL,
  `ggsl_search_link` varchar(100) DEFAULT NULL,
  `ggsl_search_description` varchar(200) DEFAULT NULL,
  `ggsl_search_status` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gc_google_search_list`
--

INSERT INTO `gc_google_search_list` (`ggsl_search_list_id`, `ggsl_search_title`, `ggsl_search_link`, `ggsl_search_description`, `ggsl_search_status`) VALUES
(1, 'PHP Tutorial', 'https://www.w3schools.com/php/', 'Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ...', 'active'),
(2, 'Learn PHP Tutorial - javatpoint', 'https://www.tutorialspoint.com/php/index.htm', 'What is PHP PHP is an open-source, interpreted, and object-oriented scripting language that can be executed at the server-side. · Why use PHP PHP is a server- ...', 'active'),
(3, 'Tutorials - Flutter', 'https://flutter.dev/docs/reference/tutorials', 'Tutorials. The Flutter tutorials teach you how to use the Flutter framework to build mobile applications for iOS and Android. Choose from the following:.', 'active'),
(4, 'Flutter Tutorial - Javatpoint', 'https://www.javatpoint.com/flutter', 'Flutter Tutorial with What is Flutter, Installation, Testing, Flutter First Application, Flutter Dart Programming, Flutter Widgets, Flutter Layouts, Flutter Animation, ...', 'active'),
(5, '\r\nBlockchain Tutorial - Javatpoint', 'https://www.javatpoint.com/blockchain-tutorial', 'Blockchain Tutorial provides basic and advanced concepts of blockchain. Blockchain is a constantly growing ledger that keeps a permanent record of all the ...', 'active'),
(6, 'Blockchain Tutorial - Tutorialspoint', 'https://www.tutorialspoint.com/blockchain/index.htm', 'Blockchain Tutorial - A blockchain is a growing list of records, called blocks, which are linked using cryptography. Each block contains a cryptographic hash of ...', 'active'),
(7, '\r\n\r\nHTML Tutorial - W3Schools', 'https://www.w3schools.com/html/', 'Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java ...', 'active'),
(8, 'HTML Tutorial - Tutorialspoint', 'https://www.tutorialspoint.com/html/index.htm', 'HTML Tutorial - HTML stands for Hyper Text Markup Language, which is the most widely used language on Web to develop web pages. HTML was created by ...', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gc_google_search_list`
--
ALTER TABLE `gc_google_search_list`
  ADD PRIMARY KEY (`ggsl_search_list_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gc_google_search_list`
--
ALTER TABLE `gc_google_search_list`
  MODIFY `ggsl_search_list_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
