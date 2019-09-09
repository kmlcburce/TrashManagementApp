-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2019 at 05:43 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamao_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary_form`
--

CREATE TABLE `beneficiary_form` (
  `bf_id` int(8) NOT NULL,
  `bf_product_amount` int(8) NOT NULL,
  `bf_date_ordered` date NOT NULL,
  `u_id` int(8) NOT NULL,
  `in_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donor_form`
--

CREATE TABLE `donor_form` (
  `df_id` int(11) NOT NULL,
  `u_id` int(8) NOT NULL,
  `in_id` int(8) NOT NULL,
  `ig_id` int(12) NOT NULL,
  `df_import_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_given`
--

CREATE TABLE `item_given` (
  `ig_id` int(12) NOT NULL,
  `df_id` int(12) NOT NULL,
  `ig_category` text NOT NULL,
  `ig_other` text NOT NULL,
  `ig_quantity` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_list`
--

CREATE TABLE `item_list` (
  `il_id` int(11) NOT NULL,
  `il_name` varchar(255) NOT NULL,
  `il_category` enum('Noodles','Canned Goods','Canned Drinks','Bottled Water') NOT NULL,
  `il_exp_date` date NOT NULL,
  `i_total_quantity` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_list`
--

INSERT INTO `item_list` (`il_id`, `il_name`, `il_category`, `il_exp_date`, `i_total_quantity`) VALUES
(1, 'Homie Chicken Noodles', 'Noodles', '2019-11-08', 0),
(2, 'Lucky Me! Pancit Canton - Calamansi', 'Noodles', '2019-12-12', 0),
(3, 'Carne Norte Corned Beef', 'Canned Goods', '2020-04-22', 0),
(4, 'Del Monte Canned Pineapple Juice', 'Canned Drinks', '2020-05-28', 0),
(5, 'Lucky Me! Beef Noodles', 'Noodles', '2020-07-22', 0),
(6, 'Nature Spring Bottled Water', '', '2020-09-29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `item_needed`
--

CREATE TABLE `item_needed` (
  `in_id` int(8) NOT NULL,
  `il_id` int(8) NOT NULL,
  `in_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `u_id` int(11) NOT NULL,
  `u_fname` char(255) NOT NULL,
  `u_lname` char(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_city` enum('Carcar City','Cebu City','Danao City','Lapu-Lapu City','Mandaue City','Minglanilia Cebu','Naga Cebu','Talisay City','Toledo City') NOT NULL,
  `u_type` enum('admin','donor','beneficiary','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`u_id`, `u_fname`, `u_lname`, `u_email`, `u_password`, `u_city`, `u_type`) VALUES
(1, 'John', 'Doe', 'johnd@gmail.com', '1234', 'Cebu City', 'donor'),
(2, 'Jane', 'Doe', 'janed@gmail.com', '1234', 'Danao City', 'beneficiary'),
(3, 'Jonathan', 'Joestar', 'jojo@gmail.com', '1234', 'Talisay City', 'beneficiary'),
(4, 'Jonathan', 'Jepstien', 'jojep@gmail.com', '1234', 'Carcar City', 'beneficiary'),
(5, 'Rick', 'Mundy', 'rickmundy@gmail.com', '4321', 'Carcar City', 'beneficiary'),
(6, 'Harry', 'Potter', 'harryp@hotmail.com', '4321', 'Carcar City', 'beneficiary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beneficiary_form`
--
ALTER TABLE `beneficiary_form`
  ADD PRIMARY KEY (`bf_id`),
  ADD UNIQUE KEY `u_id` (`u_id`),
  ADD UNIQUE KEY `in_id` (`in_id`);

--
-- Indexes for table `donor_form`
--
ALTER TABLE `donor_form`
  ADD PRIMARY KEY (`df_id`),
  ADD UNIQUE KEY `u_id` (`u_id`),
  ADD UNIQUE KEY `in_id` (`in_id`),
  ADD UNIQUE KEY `ig_id` (`ig_id`);

--
-- Indexes for table `item_given`
--
ALTER TABLE `item_given`
  ADD PRIMARY KEY (`ig_id`),
  ADD UNIQUE KEY `df_id` (`df_id`);

--
-- Indexes for table `item_list`
--
ALTER TABLE `item_list`
  ADD PRIMARY KEY (`il_id`);

--
-- Indexes for table `item_needed`
--
ALTER TABLE `item_needed`
  ADD PRIMARY KEY (`in_id`),
  ADD UNIQUE KEY `i_id` (`il_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beneficiary_form`
--
ALTER TABLE `beneficiary_form`
  MODIFY `bf_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor_form`
--
ALTER TABLE `donor_form`
  MODIFY `df_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_given`
--
ALTER TABLE `item_given`
  MODIFY `ig_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_list`
--
ALTER TABLE `item_list`
  MODIFY `il_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `item_needed`
--
ALTER TABLE `item_needed`
  MODIFY `in_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beneficiary_form`
--
ALTER TABLE `beneficiary_form`
  ADD CONSTRAINT `beneficiary_form_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_table` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
