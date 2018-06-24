-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2018 at 02:00 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snooker_club_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `bill_datetime` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `g_id` int(11) NOT NULL,
  `gt_id` int(11) NOT NULL,
  `g_start_datetime` datetime NOT NULL,
  `g_end_datetime` datetime NOT NULL,
  `player1_name` varchar(64) NOT NULL,
  `player2_name` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_t_price` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `game_type`
--

CREATE TABLE `game_type` (
  `gt_id` int(11) NOT NULL,
  `gt_name` varchar(64) NOT NULL,
  `gt_description` varchar(120) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game_type`
--

INSERT INTO `game_type` (`gt_id`, `gt_name`, `gt_description`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Single Snooker Game', 'Only two players are involved', '2018-06-19 19:00:00', 1, '2018-06-19 19:00:00', 1),
(2, 'Double Snooker Game', 'In which 4 players are involved', '2018-06-19 19:00:00', 1, '2018-06-19 19:00:00', 1),
(3, 'Best of three', 'Which player defeated 2 games then he will pay the bill of best of three games', '2018-06-19 19:00:00', 1, '2018-06-19 19:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1529654073),
('m130524_201442_init', 1529654266);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(64) NOT NULL,
  `p_cnic` varchar(15) NOT NULL,
  `p_age` enum('10 Years','11 Years','12 Years','13 Years','14 Years','15 Years','16 Years','17 Years','18 Years','19 Years','20 Years','21 Years','22 Years','23 Years','24 Years','25 Years','26 Years','27 Years','28 Years','29 Years','30 Years','31 Years','32 Years','33 Years','34 Years','35 Years','36 Years','37 Years','38 Years','39 Years','40 Years','41 Years','42 Years','43 Years','44 Years','45 Years','46 Years','47 Years','48 Years','49 Years','50 Years','51 Years','52 Years','53 Years','54 Years','55 Years','56 Years','57 Years','58 Years','59 Years','60 Years') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `product_purchase_price` int(11) NOT NULL,
  `product_sale_price` int(11) NOT NULL,
  `product_profit` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `t_id` int(11) NOT NULL,
  `tt_id` int(11) NOT NULL,
  `t_name` varchar(32) NOT NULL,
  `t_location` varchar(64) NOT NULL,
  `t_purchasing_date` date NOT NULL,
  `t_first_repairing_date` date NOT NULL,
  `t_sheet_change_date` date NOT NULL,
  `t_description` varchar(120) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`t_id`, `tt_id`, `t_name`, `t_location`, `t_purchasing_date`, `t_first_repairing_date`, `t_sheet_change_date`, `t_description`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 'Table no 01', 'First Row', '2018-06-20', '2018-06-20', '2018-06-20', '9 x 4 ', '2018-06-19 19:00:00', 1, '2018-06-19 19:00:00', 1),
(2, 1, 'Table no 02', 'First Row', '2018-06-20', '2018-06-20', '2018-06-20', '9 x 4 ', '2018-06-19 19:00:00', 1, '2018-06-19 19:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `table_type`
--

CREATE TABLE `table_type` (
  `tt_id` int(11) NOT NULL,
  `tt_name` varchar(24) NOT NULL,
  `tt_specification` varchar(120) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_type`
--

INSERT INTO `table_type` (`tt_id`, `tt_name`, `tt_specification`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Snooker Large Table', '9 x 4 feet', '2018-06-04 19:00:00', 1, '2018-06-04 19:00:00', 1),
(2, 'Billiard Table', '6 x 4 feet', '2018-06-04 19:00:00', 1, '2018-06-04 19:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'dexdevs', 'bXv_DmG26wBs0Fdm4ArVnvMKqqV8YWAQ', '$2y$13$zFVgHG.WqBNQp5n4Ltr2c.cJytnyfJzdkjbNMaDflnNjY1CQ3vgpW', NULL, 'admin@gmail.com', 10, 1529654275, 1529654275),
(2, 'nauman', 'p9mNRm2dg8cBrd0amsZftm9fgk8pGeTB', '$2y$13$FqNwh3MVSyZm.Kl/rYdb1.nRzLXOcfG9N4jdW9.PdwfiR16FOWfBq', NULL, 'nauman@gmail.com', 10, 1529669580, 1529669580);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `player_id` (`player_id`),
  ADD KEY `table_id` (`table_id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`g_id`),
  ADD KEY `gt_id` (`gt_id`);

--
-- Indexes for table `game_type`
--
ALTER TABLE `game_type`
  ADD PRIMARY KEY (`gt_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `tt_id` (`tt_id`);

--
-- Indexes for table `table_type`
--
ALTER TABLE `table_type`
  ADD PRIMARY KEY (`tt_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `game_type`
--
ALTER TABLE `game_type`
  MODIFY `gt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table`
--
ALTER TABLE `table`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `table_type`
--
ALTER TABLE `table_type`
  MODIFY `tt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`player_id`) REFERENCES `player` (`p_id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`table_id`) REFERENCES `table` (`t_id`);

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_2` FOREIGN KEY (`gt_id`) REFERENCES `game_type` (`gt_id`);

--
-- Constraints for table `table`
--
ALTER TABLE `table`
  ADD CONSTRAINT `table_ibfk_1` FOREIGN KEY (`tt_id`) REFERENCES `table_type` (`tt_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
