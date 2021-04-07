-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 08:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm_form`
--

CREATE TABLE `adm_form` (
  `a_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mob_num` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `marks_10` varchar(255) NOT NULL,
  `marks_12` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adm_form`
--

INSERT INTO `adm_form` (`a_id`, `name`, `email`, `mob_num`, `f_name`, `m_name`, `marks_10`, `marks_12`, `college`, `gender`, `address`, `id`) VALUES
(2, 'Meena Kumari', 'mku@gmail.com', '76548932', 'Munna Lal', 'Meera Devi', '94', '73', 'ITM', 'Female', '339-h-45, morar,gwalior,MP', '1'),
(3, 'vikas', 'vk@gmail.com', '678647997', 'grdfc', 'gxdfgd', '80', '70', 'MITS', 'Male', '									\r\n			fdfg htht jyrjiyu s er					        ', '3'),
(4, 'Manish', 'mk@gmail.com', '76543289', 'fghdt', 'vdrrt', '80', '54', 'MITS', 'Male', 'fthfj fjhygj fjyvtuik fikvc7to gkubyo 									\r\n								        ', '2'),
(5, 'neha', 'NK@GMAIL.COM', '65437845', 'fvfs', 'gxdfgd', '80', '70', 'ITM', 'Female', 'vfdbg tgfhbg hf  hszfrdrg hedf									\r\n								        ', '4'),
(6, 'Ankita', 'ak@gmail.com', '23854397', 'grdfc', 'gxdfgd', '80', '70', 'ITM', 'Female', '									\r\n		fdgd hrrdt						        ', '5'),
(7, 'Anurag', 'an@gmail.com', '65478934', 'grdfc', 'gxdfgd', '80', '70', 'ITM', 'Female', '	ere gdfrtg hetsha awerf fe								\r\n								        ', '6'),
(8, 'Raj', 'raj@gmail.com', '455674346', 'fvfs', 'vdrrt', '80', '54', 'RJIT', 'Male', 'retf eg rserhysrt yazstg zedgt s									\r\n								        ', '7'),
(9, 'Raj', 'raj@gmail.com', '455674346', 'fvfs', 'vdrrt', '80', '54', 'RJIT', 'Male', 'retf eg rserhysrt yazstg zedgt s									\r\n								        ', '7'),
(10, 'Meena Kumari', 'mku304@gmail.com', '08427764988', 'mbnvbx', 'zxczxcz', '80', '54', 'MITS', 'Female', 'dfgvdyr yhy t5rg 4rrrtg ewa									\r\n								        ', '8');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mob_num` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `email`, `password`, `mob_num`) VALUES
(1, 'Meena Kumari', 'mku304@gmail.com', '12345', '08427764988'),
(2, 'Manish', 'nbb@gmail.ccom', '54321', '245886766'),
(3, 'vikas jain', 'vk@gmail.con', '123456', '765894567'),
(4, 'neha ', 'nk@gmail.com', '54321', '657894567'),
(5, 'Ankita', 'ak@gmail.com', '54321', '23854397'),
(6, 'Anurag', 'an@gmail.com', '54321', '65478934'),
(7, 'Raj', 'raj@gmail.com', '54321', '455674346'),
(8, 'Meena Kumari', 'mku304@gmail.com', '98765', '08427764988');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm_form`
--
ALTER TABLE `adm_form`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm_form`
--
ALTER TABLE `adm_form`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
