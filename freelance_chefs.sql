-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2020 at 04:57 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelance chefs`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `Bidder Name` varchar(40) NOT NULL,
  `Bid ID` int(11) NOT NULL,
  `Bid Status` varchar(8) NOT NULL,
  `Date` date NOT NULL,
  `Price` int(11) NOT NULL,
  `Rank` int(100) NOT NULL,
  `Approved By` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`Bidder Name`, `Bid ID`, `Bid Status`, `Date`, `Price`, `Rank`, `Approved By`) VALUES
('Oliver Ramsay', 1001, 'Winning', '2020-03-23', 12, 1, 'Ellen, Peter, Tom and 24 others.'),
('Oliver Ramsay', 1002, 'Losing', '2020-11-11', 68, 4, 'Alex and Joseph'),
('Oliver Ramsay', 1003, 'Losing', '2020-09-10', 42, 34, 'Felix and Kiara'),
('Oliver Ramsay', 1004, 'Losing', '2020-12-03', 22, 98, 'Max'),
('Oliver Ramsay', 1005, 'Winning', '2020-07-11', 36, 6, 'John, Samantha, Courtney and 11 others.');

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

CREATE TABLE `chef` (
  `Name` varchar(40) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Specialty` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`Name`, `Username`, `User_ID`, `Phone`, `Email`, `Address`, `Specialty`) VALUES
('Gordon Ramsay', 'oli1234', 18341010, 173455677, 'ramsay22@gmail.com', 'NE Sacramanto Street, Portland, Oregon, United States', 'Grill chef, Sushi chef, Bengali Chef and fry chef');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reviews`
--

CREATE TABLE `customer_reviews` (
  `Rating` varchar(10) NOT NULL,
  `Comment` varchar(200) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_reviews`
--

INSERT INTO `customer_reviews` (`Rating`, `Comment`, `UserID`) VALUES
('4.9/5', 'safa2303         : the most professional chef I have ever came acrossed.', 1),
('4.7/5', 'samin2089      : best cook ever!!!', 2),
('4.3/5', 'zobayda7766  : an amazing chef', 3),
('4.0/5', 'abid3747         : all the dishes were mouth watering.', 4),
('3.7/5', 'sanjida4321    : late delivery.', 5),
('3.2/5', 'raquib2306     : the grilled chicken I ordered was a bit raw.', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`Bid ID`);

--
-- Indexes for table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chef`
--
ALTER TABLE `chef`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18341011;

--
-- AUTO_INCREMENT for table `customer_reviews`
--
ALTER TABLE `customer_reviews`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
