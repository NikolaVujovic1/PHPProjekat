-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 06:06 AM
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
-- Database: `teretana`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(8) NOT NULL,
  `email` varchar(80) NOT NULL,
  `lozinka` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `lozinka`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `kupovina`
--

CREATE TABLE `kupovina` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(80) NOT NULL,
  `NazivProizvoda` varchar(50) NOT NULL,
  `cena` varchar(50) NOT NULL,
  `kolicina` int(8) NOT NULL,
  `ukupnacena` int(8) NOT NULL,
  `jmbg` char(13) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kupovina`
--

INSERT INTO `kupovina` (`id`, `email`, `NazivProizvoda`, `cena`, `kolicina`, `ukupnacena`, `jmbg`, `reg_date`) VALUES
(1, 'krsticmarija@gmail.com', '', '', 123, 1234, '0123456789124', '2022-12-27 19:58:59'),
(2, 'krsticmarija@gmail.com', '', '', 123, 1234, '0123456789124', '2022-12-27 20:02:22'),
(3, 'krsticmarija@gmail.com', '', '', 123, 1234, '0123456789124', '2022-12-27 20:02:29'),
(4, 'krsticmarija@gmail.com', '', '', 123, 1234, '0123456789124', '2022-12-27 20:04:01'),
(5, 'krsticmarija@gmail.com', '', '', 123, 1234, '0123456789124', '2022-12-27 20:06:18'),
(6, 'krsticmarija@gmail.com', 'Whey Gold Standard', '5500din', 123, 1234, '0123456789124', '2022-12-27 20:06:29'),
(7, 'krsticmarija@gmail.com', 'Whey Gold Standard', '5500din', 123, 1234, '0123456789124', '2022-12-27 20:09:44'),
(8, 'krsticmarija@gmail.com', '', '', 123, 1234, '0123456789124', '2022-12-27 20:09:50'),
(9, 'krsticmarija@gmail.com', 'Whey Gold Standard', '5500din', 123, 1234, '0123456789124', '2022-12-27 20:11:53'),
(10, 'krsticmarija@gmail.com', 'Whey Gold Standard', '5500din', 123, 1234, '0123456789124', '2022-12-27 20:43:39'),
(11, 'krsticmarija@gmail.com', 'Whey Gold Standard', '5500din', 123, 1234, '0123456789124', '2022-12-27 20:44:26'),
(12, 'krsticmarija@gmail.com', 'Whey Gold Standard', '', 123, 1234, '0123456789124', '2022-12-27 20:45:45'),
(13, 'krsticmarija@gmail.com', 'Whey Gold Standard', '5500din', 123, 1234, '0123456789124', '2022-12-27 20:46:09'),
(14, 'krsticmarija@gmail.com', 'Whey Gold Standard', '5500din', 123, 1234, '0123456789124', '2022-12-27 20:47:05'),
(15, 'krsticmarija@gmail.com', 'Whey Gold Standard', '5500din', 123, 1234, '0123456789124', '2022-12-27 20:47:32'),
(16, 'krsticmarija@gmail.com', 'Whey Gold Standard', 'Array', 123, 1234, '0123456789124', '2022-12-27 20:48:07'),
(17, 'krsticmarija@gmail.com', 'Whey Gold Standard', '5500', 123, 1234, '0123456789124', '2022-12-27 20:48:16'),
(18, 'krsticmarija@gmail.com', 'Whey Gold Standard', '5500 din', 123, 1234, '0123456789124', '2022-12-27 20:51:33'),
(19, 'krsticmarija@gmail.com', 'Whey Gold Standard', '5500 din', 4, 22000, '0123456789124', '2022-12-27 21:04:36'),
(20, 'krsticmarija@gmail.com', 'Whey Gold Standard', '5500 din', 4, 22000, '0123456789124', '2022-12-27 21:09:44'),
(21, 'krsticmarija@gmail.com', 'Whey Gold Standard', '5500 din', 2, 11000, '0123456789124', '2022-12-27 21:09:58'),
(22, 'krsticmarija@gmail.com', 'Whey Gold Standard', '5500 din', 2, 11000, '0123456789124', '2022-12-27 21:35:20'),
(23, 'krsticmarija@gmail.com', 'Whey Gold Standard', '5500 din', 2, 11000, '0123456789124', '2022-12-27 21:35:41'),
(24, 'krsticmarija@gmail.com', 'Whey Gold Standard', '5500 din', 1, 5500, '0123456789124', '2022-12-27 21:36:05'),
(25, 'krsticmarija@gmail.com', 'Whey cokolada', '2400 din', 2, 4800, '0123456789124', '2022-12-27 21:40:22'),
(26, '', 'Whey Protein Complex', '2700 din', 2, 5400, '', '2022-12-28 01:57:39'),
(27, '', 'Whey vanila', '3500 din', 1, 3500, '', '2022-12-28 02:01:54'),
(28, 'vujovicnikola15@gmail.com', 'Vocni whey', '3500 din', 3, 10500, '2205200478004', '2022-12-28 04:04:18'),
(29, 'vujovicnikola15@gmail.com', 'Hydrowhey hardcore', '7000 din', 1, 7000, '2205200478004', '2022-12-28 04:07:29'),
(30, 'vujovicnikola15@gmail.com', 'Whey cokolada', '2400 din', 1, 2400, '2205200478004', '2022-12-28 04:09:26');

-- --------------------------------------------------------

--
-- Table structure for table `registracija`
--

CREATE TABLE `registracija` (
  `jmbg` char(13) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `lozinka` varchar(50) NOT NULL,
  `pol` varchar(50) NOT NULL,
  `telefon` varchar(50) NOT NULL,
  `visina` int(8) NOT NULL,
  `kilaza` int(8) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registracija`
--

INSERT INTO `registracija` (`jmbg`, `ime`, `prezime`, `email`, `lozinka`, `pol`, `telefon`, `visina`, `kilaza`, `reg_date`) VALUES
('0123456789124', 'Marija', 'Krstic', 'krsticmarija@gmail.com', 'Marija111', 'zenski', '0645767703', 176, 65, '2022-12-27 07:43:24'),
('2205200478004', 'Nikola', 'Vujovic', 'vujovicnikola15@gmail.com', 'Nikola444', 'muski', '0631254789', 178, 74, '2022-12-28 03:53:39'),
('5556897412256', 'Sladjana', 'Rakic', 'sladja@gmail.com', 'Sladjana123', 'zenski', '0698745663', 168, 60, '2022-12-28 04:59:27'),
('9876543211234', 'Nikola', 'Stankovic', 'nikolastankovic@gmail.com', 'Nikola123', 'muski', '0625867702', 185, 80, '2022-12-27 07:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

CREATE TABLE `rezervacija` (
  `id` int(8) UNSIGNED NOT NULL,
  `imeprezime` varchar(50) NOT NULL,
  `brojtelefona` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL,
  `datum` date NOT NULL,
  `vreme` time NOT NULL,
  `email` varchar(50) NOT NULL,
  `jmbg` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rezervacija`
--

INSERT INTO `rezervacija` (`id`, `imeprezime`, `brojtelefona`, `program`, `datum`, `vreme`, `email`, `jmbg`) VALUES
(2, 'Nikola Vujovic', '0645767702', 'Personalni trening', '2022-12-28', '23:33:00', 'vujovicnikola15@gmail.com', ''),
(3, 'Marija Krstic', '0655235325', 'Samostalno vezbanje', '2022-12-29', '16:33:00', 'krsticmarija@gmail.com', '0123456789124'),
(4, 'Nikola Vujovic', '0645767702', 'Personalni trening', '2022-12-28', '13:00:00', 'vujovicnikola15@gmail.com', '0123456789123'),
(5, 'Nikola Vujovic', '0631254789', 'Vodjeni trening', '2023-01-05', '09:03:00', 'vujovicnikola15@gmail.com', '2205200478004'),
(6, 'Tanja Gojkovic', '0698745663', 'Mix Aerobic', '2022-12-26', '11:02:00', 'sladja@gmail.com', '5556897412256');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kupovina`
--
ALTER TABLE `kupovina`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registracija`
--
ALTER TABLE `registracija`
  ADD PRIMARY KEY (`jmbg`);

--
-- Indexes for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kupovina`
--
ALTER TABLE `kupovina`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `rezervacija`
--
ALTER TABLE `rezervacija`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
