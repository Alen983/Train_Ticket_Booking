-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 05:58 PM
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
-- Database: `train`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservations_list`
--

CREATE TABLE `reservations_list` (
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `seat_type` varchar(3) NOT NULL,
  `fare_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations_list`
--

INSERT INTO `reservations_list` (`first_name`, `last_name`, `seat_type`, `fare_amount`) VALUES
('john', 'thomas', 'eco', 100),
('gg', 'hdd', 'eco', 30),
('hello', 'hi', 'fir', 200),
('arnol', 'ashok', 'fir', 400),
('boris', 'quack', 'eco', 350);

-- --------------------------------------------------------

--
-- Table structure for table `train_schedule`
--

CREATE TABLE `train_schedule` (
  `train_id` int(15) NOT NULL,
  `train_no` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `time_schedule` time NOT NULL,
  `train_name` varchar(25) NOT NULL,
  `origin` varchar(25) NOT NULL,
  `destination` varchar(25) NOT NULL,
  `class` int(5) NOT NULL,
  `first_class_fare` float NOT NULL,
  `economy_fare` float NOT NULL,
  `status` bit(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train_schedule`
--

INSERT INTO `train_schedule` (`train_id`, `train_no`, `date`, `time_schedule`, `train_name`, `origin`, `destination`, `class`, `first_class_fare`, `economy_fare`, `status`) VALUES
(1, 'T0001', '2023-03-14', '14:05:00', 'Palakad', 'Palakad', 'Kochi', 1, 200, 100, b'01'),
(2, 'T0002', '2023-03-17', '16:30:00', 'Paruvi', 'Chengannur', 'Thiruvalla', 2, 150, 50, b'01'),
(3, 'T0003', '2023-04-20', '18:45:00', 'Peruna', 'Changanassery', 'Kannur', 3, 100, 30, b'00'),
(4, 'T0004', '2023-04-22', '20:10:00', 'Delhi Express', 'Delhi', 'Trivandrum', 1, 400, 350, b'01'),
(5, 'T0005', '2023-05-23', '22:07:00', 'Kerala Express', 'Trivandrum', 'Kochi', 2, 150, 100, b'01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(2, 'ss', 'd@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2023-01-22 21:43:33'),
(8, 'ss', 'igymyjevyxawegipjd@kvhrs.com', '25f9e794323b453885f5181f1b624d0b', '2023-01-22 22:44:55'),
(9, 'gg', 'd@gmail.com', '73c18c59a39b18382081ec00bb456d43', '2023-01-22 22:45:52'),
(10, 'Arnold', 'a@yahoo.com', 'c582dec943ff7b743aa0691df291cea6', '2023-01-22 23:05:32'),
(11, 'Arnold', 'a@yahoo.com', 'c582dec943ff7b743aa0691df291cea6', '2023-01-23 20:42:42'),
(12, 'ss', 'meenuton@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '2023-01-31 16:05:33'),
(13, 'ss', 'a@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '2023-03-07 08:11:24'),
(14, 'Arnold', 'arnold@gmail.com', '813e464ca595add50785f459f5db43d6', '2023-03-07 08:14:09'),
(15, 'johnson', 'john@gmail.com', '79ab945544e5bc017a2317b6146ed3aa', '2023-03-07 17:51:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
