-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 04:52 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `Id` int(50) NOT NULL,
  `name1` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`Id`, `name1`, `email`, `comment`) VALUES
(1, '', 'rohit@gmail.com', 'Hello'),
(2, 'Pardeep', 'deep@gmail.com', 'hyyyyy');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `name1` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject1` varchar(50) NOT NULL,
  `message1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name1`, `email`, `subject1`, `message1`) VALUES
(1, '', 'sdr@gmail.com', '', ''),
(2, 'Gagan', 'gagandigitech@gmail.com', 'Leave', 'Want a leave'),
(3, 'Gagan', 'gagandigitech@gmail.com', 'Leave', 'Want a leave');

-- --------------------------------------------------------

--
-- Table structure for table `courseadd`
--

CREATE TABLE `courseadd` (
  `Id` int(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courseadd`
--

INSERT INTO `courseadd` (`Id`, `course`, `semester`) VALUES
(3, 'Btech', '6th'),
(4, 'BBA', '3rd'),
(6, 'FD', '4sem'),
(7, 'Btech', '2nd');

-- --------------------------------------------------------

--
-- Table structure for table `logintable`
--

CREATE TABLE `logintable` (
  `Id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logintable`
--

INSERT INTO `logintable` (`Id`, `username`, `password`) VALUES
(1, 'rohit@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `ftname` varchar(50) NOT NULL,
  `addres` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `ste` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `fname`, `lname`, `mname`, `ftname`, `addres`, `gender`, `ste`, `city`, `dob`, `pincode`, `course`, `emailid`) VALUES
(14, 'Mohit', 'Sharma', 'Kaur', 'Vishal', 'Goraya', 'Male', 'Punjab', 'Phagwara', '2023-08-11', '144044', 'BCA', 'mohit@gmail.com'),
(16, 'Vishal kumar', 'Kumar', 'kauri', 'Avtar ', 'Goraya', 'Male', 'Punjab 56475', 'Jalndher', '2023-07-19', '144111', 'BBA', 'vishal123@gmail.com'),
(17, 'Rohit', 'Lakha', 'kaur', 'Dhanvir Lakha', 'Goraya', 'Male', 'Punjab', 'Jalandhar', '2023-07-08', '144111', 'BCA', 'rohit@gmail.com'),
(18, 'Rohit', 'Lakha', 'Joginder Kaur', 'Dhanvir Lakha', 'Phagwara', 'Male', 'Punjab', 'Jalandhar', '2023-08-29', '144111', 'BCA', 'rohit@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `id` int(20) NOT NULL,
  `rollno` int(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`id`, `rollno`, `password`) VALUES
(1, 111, '111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courseadd`
--
ALTER TABLE `courseadd`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `logintable`
--
ALTER TABLE `logintable`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courseadd`
--
ALTER TABLE `courseadd`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logintable`
--
ALTER TABLE `logintable`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `studentlogin`
--
ALTER TABLE `studentlogin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
