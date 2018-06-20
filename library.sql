-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2017 at 02:38 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_name` text NOT NULL,
  `authors_name` text NOT NULL,
  `publish_date` date NOT NULL,
  `shelf_no` int(11) NOT NULL,
  `book_category` text NOT NULL,
  `no_of_copies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `authors_name`, `publish_date`, `shelf_no`, `book_category`, `no_of_copies`) VALUES
(1, 'Harry Potter', 'JK Rowling', '1995-07-26', 2, 'Fantasy', 5),
(2, 'Game of Thrones', 'G.R.R Martin', '1996-08-01', 4, 'Fantasy', 2),
(4, 'Harry Potter and the Goblet of Fire', 'JK Rowling', '2000-07-08', 5, 'Fantasy', 4);

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_books`
--

CREATE TABLE `borrowed_books` (
  `borrowed_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_name` text NOT NULL,
  `user_nid` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `borrow_date` date NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowed_books`
--

INSERT INTO `borrowed_books` (`borrowed_id`, `book_id`, `book_name`, `user_nid`, `user_name`, `borrow_date`, `return_date`) VALUES
(70, 1, 'Harry Potter', 123, 'Lushan', '2017-08-03', '2017-08-10'),
(71, 2, 'Game of Thrones', 123, 'Lushan', '2017-08-03', '2017-08-10'),
(72, 2, 'Game of Thrones', 123, 'Lushan', '2017-08-03', '2017-08-10'),
(73, 4, 'Harry Potter and the Goblet of Fire', 100101, 'Shafayet', '2017-08-03', '2017-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` int(11) NOT NULL,
  `category_shelf_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `NID` int(11) NOT NULL,
  `Phone_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `email`, `password`, `NID`, `Phone_no`) VALUES
(3, 'Fahim Chy', 'fahim@gmail.com', '$2y$10$BPAe30R7TDUaWbcVUGgL6OcWFlGV1bWGiPpJhkOhHqEd/u04DU1/G', 0, 0),
(4, 'Lushan', 'lsn@gmail.com', '$2y$10$mNqte5mZvzmb897D.qtZoOCOKpP1HwLNQ8JLD5nUcjDixS3dCV.Be', 123, 12334),
(5, 'admin', 'admin@gmail.com', 'admin', 222, 1234),
(6, 'Shafayet', 'shafayet@gmai.com', '$2y$10$aByVWwo4xY2hvjRnMVi6PuexoOMbDfSFmCyMRqVRRwPIXwZ4Cxmqq', 100101, 3234453);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `NID` text NOT NULL,
  `Phone_no` int(11) NOT NULL,
  `User_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `NID`, `Phone_no`, `User_type`) VALUES
(1, '', '', 0, ''),
(2, '', '', 0, ''),
(3, 'Fahim', '100', 123123, 'Admin'),
(4, 'Shafayet', '101', 324244, 'Admin'),
(5, 'Shafayet', '101', 324244, 'Admin'),
(6, 'Shafayet', '101', 324244, 'Admin'),
(7, 'Shafayet', '101', 324244, 'Admin'),
(8, 'Shafayet', '101', 324244, 'Admin'),
(9, 'Shafayet', '101', 324244, 'Admin'),
(10, 'Shafayet', '101', 324244, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  ADD PRIMARY KEY (`borrowed_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  MODIFY `borrowed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
