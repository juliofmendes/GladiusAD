-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 18-Out-2017 às 00:17
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
-- Estrutura da tabela `Config`
--

CREATE TABLE `Config` (
  `id` int(11) NOT NULL,
  `reg_Code` varchar(5) NOT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Config`
--

INSERT INTO `Config` (`id`, `reg_Code`) VALUES
(1, 'AA001');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Invocatio`
--

CREATE TABLE `Config` (
  `data` int(11) NOT NULL,
  `gad_Password` varchar(20) NOT NULL,
  `text_Msn` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Config`
--

INSERT INTO `Config` (`id`, `reg_Code`, `gad_Password`, `text_Msn`) VALUES
(1, 'CAPUT AQUILAE', 'O MISTÉRIO É O IMPREVISTO QUE PERMITE À MINHA ALMA SAIR DA RELATIVIDADE DO PEQUENO E PERCEBER A GRANDEZA DO ABSOLUTO.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `User`
--

CREATE TABLE `User` (
  `user_key` int(4) UNSIGNED NOT NULL COMMENT 'Unica',
  `ID` varchar(10) NOT NULL COMMENT 'Code de ID',
  `Level` int(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT '0 a 7 p MSG',
  `Status` tinyint(1) NOT NULL COMMENT 'Ativo',
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela Usuários';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Config`
--
ALTER TABLE `Config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Invocatio`
--
ALTER TABLE `Invocatio`
  ADD PRIMARY KEY (`data`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`user_key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Config`
--
ALTER TABLE `Config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;--

-- AUTO_INCREMENT for table `Invocatio`
--
ALTER TABLE `Invocatio`
  MODIFY `data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `user_key` int(4) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Unica';COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
