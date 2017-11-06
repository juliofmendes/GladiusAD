-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 03-Out-2017 às 11:31
-- Versão do servidor: 10.1.24-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `juligo_gladius`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `User`
--

CREATE TABLE `User` (
  `Key` int(4) UNSIGNED NOT NULL COMMENT 'Unica',
  `ID` varchar(10) NOT NULL COMMENT 'Code de ID',
  `Nivel` int(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT '0 a 7 p MSG',
  `Status` tinyint(1) NOT NULL COMMENT 'Ativo',
  `Nome` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Senha` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela Usuários';

--
-- Extraindo dados da tabela `User`
--

INSERT INTO `User` (`Key`, `ID`, `Nivel`, `Status`, `Nome`, `Email`, `Senha`) VALUES
(1, '001AG', 0, 0, 'Admin', 'admin@gladiusadei.com', 'admin321'),
(2, '002AG', 1, 1, 'Horus', 'horus@gladiusadei.com', 'h321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`Key`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `Key` int(4) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Unica', AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!juligo_gladius*/;
/*!juligo_dreaper*/;
/*!bdGAD321*/;
