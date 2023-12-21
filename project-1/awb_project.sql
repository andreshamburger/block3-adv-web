-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 03, 2023 at 10:04 PM
-- Server version: 10.3.38-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 8.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awb_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `breeds`
--

CREATE TABLE `breeds` (
  `breeds_id` int(11) NOT NULL,
  `breeds_name` varchar(255) NOT NULL,
  `breeds_is_mixed` tinyint(1) NOT NULL,
  `breeds_price` decimal(10,2) NOT NULL,
  `species_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `breeds`
--

INSERT INTO `breeds` (`breeds_id`, `breeds_name`, `breeds_is_mixed`, `breeds_price`, `species_id`) VALUES
(3, 'siamese', 0, 210.00, 1),
(4, 'russian blue', 1, 200.00, 1),
(5, 'golden retriever', 1, 160.00, 2),
(6, 'husky', 0, 900.00, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `pets_id` int(11) NOT NULL,
  `pets_name` varchar(255) NOT NULL,
  `pets_age` int(11) NOT NULL,
  `pets_gender` varchar(255) NOT NULL,
  `pets_neutered` tinyint(1) NOT NULL,
  `pets_price` decimal(10,2) NOT NULL,
  `species_id` int(11) NOT NULL,
  `breeds_id` int(11) NOT NULL,
  `toys_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`pets_id`, `pets_name`, `pets_age`, `pets_gender`, `pets_neutered`, `pets_price`, `species_id`, `breeds_id`, `toys_id`) VALUES
(1, 'eli', 2, 'female', 1, 999.00, 1, 4, 2),
(2, 'pelusa', 2, 'male', 0, 320.00, 1, 3, 1),
(3, 'sussy', 10, 'female', 0, 160.00, 2, 5, 1),
(4, 'taffy', 6, 'male', 1, 420.00, 2, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `species`
--

CREATE TABLE `species` (
  `species_id` int(11) NOT NULL,
  `species_name` varchar(255) NOT NULL,
  `species_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `species`
--

INSERT INTO `species` (`species_id`, `species_name`, `species_price`) VALUES
(1, 'cat', 250.00),
(2, 'dog', 210.00);

-- --------------------------------------------------------

--
-- Table structure for table `toys`
--

CREATE TABLE `toys` (
  `toys_id` int(11) NOT NULL,
  `toys_name` varchar(255) NOT NULL,
  `toys_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `toys`
--

INSERT INTO `toys` (`toys_id`, `toys_name`, `toys_price`) VALUES
(1, 'frisbee', 30.00),
(2, 'tennis ball', 20.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breeds`
--
ALTER TABLE `breeds`
  ADD PRIMARY KEY (`breeds_id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`pets_id`),
  ADD KEY `species_id` (`species_id`),
  ADD KEY `breeds_id` (`breeds_id`),
  ADD KEY `toys_id` (`toys_id`);

--
-- Indexes for table `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`species_id`);

--
-- Indexes for table `toys`
--
ALTER TABLE `toys`
  ADD PRIMARY KEY (`toys_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breeds`
--
ALTER TABLE `breeds`
  MODIFY `breeds_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `pets_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `species`
--
ALTER TABLE `species`
  MODIFY `species_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `toys`
--
ALTER TABLE `toys`
  MODIFY `toys_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `breeds_id` FOREIGN KEY (`breeds_id`) REFERENCES `breeds` (`breeds_id`),
  ADD CONSTRAINT `species_id` FOREIGN KEY (`species_id`) REFERENCES `species` (`species_id`),
  ADD CONSTRAINT `toys_id` FOREIGN KEY (`toys_id`) REFERENCES `toys` (`toys_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
