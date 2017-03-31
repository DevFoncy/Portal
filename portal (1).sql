-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 07:54 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `ID_usuario` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contra` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `correo` varchar(30) NOT NULL,
  `codigo` int(11) DEFAULT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`ID_usuario`, `usuario`, `contra`, `nombre`, `apellido`, `correo`, `codigo`, `cargo`, `fecha_inicio`) VALUES
(10, 'Foncy', '123', 'Steve James Foncy', 'Arias Arias', 'steveariasarias@hotmail.com', 14200005, 'bolsista', '2016-07-01'),
(11, 'Alegre', '1234567', 'Angel Eduardo', 'Alegre Quispe', '', 1420002, 'coordinador', '2016-01-01'),
(12, '123', '1234567', 'steve james foncy', 'Arias Arias', 'hola@hotmail.com', 14200001, 'bolsista', '1111-11-11'),
(14, '123', '1234567', 'steve james foncy', 'Arias Arias', 'hola1@hotmail.com', 14200001, 'bolsista', '1111-11-11'),
(15, '123', '1234567', 'foncy', 'arias arias ', 'holi@hotmail.com', 14200001, 'bolsista', '1111-11-11'),
(16, 'aaaaaa', '1234567', 'foncy', 'arias arias ', 'hola@hotmail.es', 14200046, 'bolsista', '1111-11-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
