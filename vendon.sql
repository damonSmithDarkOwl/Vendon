-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 07, 2021 at 06:02 PM
-- Server version: 8.0.20
-- PHP Version: 7.3.14-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `damon_private`
--

-- --------------------------------------------------------

--
-- Table structure for table `vendon`
--

CREATE TABLE `vendon` (
  `idof` int NOT NULL,
  `test` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `choice1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `choice2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `choice3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vendon`
--

INSERT INTO `vendon` (`idof`, `test`, `question`, `choice1`, `choice2`, `choice3`, `answer`) VALUES
(1, 'animation', 'What year did the Oscar (Best Animated Feature) winner \"Shrek\" come out in?', '2000', '2002', '2003', '2001'),
(2, 'animation', 'What was the name of the bee in \"Bee Movie\"?', 'Berry', 'Barnie', NULL, 'Barry'),
(3, 'animation', 'Was the sad character from \"Inside Out\" grey?', 'Yes', NULL, NULL, 'No'),
(4, 'maths', '9*2?', NULL, '11', NULL, '18'),
(5, 'maths', '5*3-2?', NULL, NULL, '5', '13'),
(6, 'maths', '2+2?', NULL, '2', '3', '4'),
(7, 'maths', '5/2*4?', NULL, '100', '8.4', '10'),
(8, 'maths', '(60-38)/2?', NULL, '24', '41', '11'),
(9, 'sports', 'Who, surprisingly, left Barcelona to join PSG?', 'Ronaldo', NULL, 'Ramos', 'Messi'),
(10, 'sports', 'Who was named the NBA final MVP?', 'Lebron James', 'Justin Jackson', NULL, 'Giannis Antetokounmpo'),
(11, 'sports', 'Did the 2020 Olympics happen in the year 2020?', NULL, 'Yes', NULL, 'No'),
(12, 'sports', 'What is the most dominant sport in Latvia?', 'BMX/Voleyball', 'Football/Basketball', 'Volleyball/Floorball', 'Basketball/Hockey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vendon`
--
ALTER TABLE `vendon`
  ADD PRIMARY KEY (`idof`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vendon`
--
ALTER TABLE `vendon`
  MODIFY `idof` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
