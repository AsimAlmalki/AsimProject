-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2026 at 05:44 PM
-- Server version: 5.7.24
-- PHP Version: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `win`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` char(50) NOT NULL,
  `lastName` char(50) NOT NULL,
  `email` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`) VALUES
(32, 'عاصم', 'المالكي', 'asim@gmail.com'),
(35, 'خالد', ' العتيبي', 'khaled.alotaibi@testmail.com'),
(36, 'فهد', 'القحطاني', 'fahad.qahtani@demo-mail.com'),
(37, 'سعد', 'الحربي', 'saad.alharbi@samplemail.net'),
(38, 'ناصر', 'الدوسري', 'nasser.dosari@mockmail.org'),
(39, 'تركي', 'المطيري', 'turki.mutairi@testuser.co'),
(40, 'عبدالله', 'الشهري', 'abdullah.shahri@fakemail.io'),
(41, 'ماجد', 'الغامدي', 'majed.ghamdi@demo-user.com'),
(42, 'راشد', 'الزهراني', 'rashid.zahrani@mailtest.dev'),
(43, 'يزيد', 'العنزي', 'yazid.enezi@projectmail.net'),
(44, 'سلطان', 'البلوي', 'sultan.balawi@testingmail.com');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
