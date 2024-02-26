-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2024 at 08:35 AM
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
-- Database: `aliyan`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `salaryInc` (`e_id` INT, `e_salary` INT)   BEGIN
UPDATE faculty SET salary = salary + e_salary WHERE id = e_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `salInc` (`e_id` INT, `e_inc` INT)   BEGIN
UPDATE faculty SET salary =  salary + e_inc WHERE id = e_id ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `salInc1` (`e_id_start` INT, `e_id_end` INT, `e_inc` INT)   BEGIN
IF e_inc>0 then
BEGIN
UPDATE faculty SET salary = salary + e_inc WHERE id BETWEEN e_id_start AND e_id_end ;
END;
ELSE
SELECT "you can't enter negative amount";
END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `salInc2` (`e_id_start` INT, `e_id_end` INT, `e_inc` INT)   BEGIN
IF e_inc>0 then
BEGIN
UPDATE faculty SET salary = salary + e_inc WHERE id BETWEEN e_id_start AND e_id_end ;
END;
ELSE
SELECT "you can't enter negative amount";
END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'apple'),
(2, 'samsung'),
(3, 'sogo');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `des` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `des`) VALUES
(1, 'mobiles', 'abc'),
(2, 'laptops', 'hello'),
(3, 'watches', 'hello abc');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL,
  `h_pay` int(11) NOT NULL,
  `y_pay` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `salary`, `department`, `h_pay`, `y_pay`, `datetime`) VALUES
(1, 'Sir Mujahid', 100000, 'Mathematics', 200, 416000, '0000-00-00 00:00:00'),
(2, 'Sir Alvi', 100000, 'Chemistry', 300, 624000, '0000-00-00 00:00:00'),
(3, 'Sir Shabbir', 120000, 'Mathematics', 500, 1040000, '2023-12-29 07:46:33'),
(4, 'Sir hamza', 80000, 'Chemistry', 0, 0, '0000-00-00 00:00:00'),
(5, 'sohial', 55000, 'admin', 0, 0, '0000-00-00 00:00:00'),
(6, 'Sir Alvi', 100000, 'chemistry', 200, 416000, '0000-00-00 00:00:00'),
(7, 'rafay', 70000, 'faculty', 300, 624000, '0000-00-00 00:00:00'),
(8, 'aqsa', 78000, 'faculty', 600, 1248000, '2023-12-29 07:46:16');

--
-- Triggers `faculty`
--
DELIMITER $$
CREATE TRIGGER `CHANGEPAY` BEFORE INSERT ON `faculty` FOR EACH ROW BEGIN
set new.y_pay = new.h_pay*2080;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `CHANGEyearly_pay` BEFORE UPDATE ON `faculty` FOR EACH ROW BEGIN
set new.y_pay = new.h_pay*2080;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `CHAngeTime` BEFORE UPDATE ON `faculty` FOR EACH ROW BEGIN
set new.datetime= CURRENT_TIMESTAMP;

END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
