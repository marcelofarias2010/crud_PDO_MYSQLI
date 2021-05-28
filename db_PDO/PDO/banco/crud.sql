-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 28-Maio-2021 às 09:20
-- Versão do servidor: 5.7.21-log
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(90) NOT NULL,
  `Sexo` varchar(30) NOT NULL,
  `Cidade` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`Id`, `Nome`, `Sexo`, `Cidade`) VALUES
(39, 'Maria Luiza', 'Feminino', 'Samambaia'),
(44, 'Jaqueline Farias', 'Feminino', 'Ocidental'),
(41, 'Severino de Jesus', 'Masculino', 'Tocantins'),
(42, 'Josenildo Pereira Maromba', 'Masculino', 'Arachá'),
(7, 'Giovanna Pereira Farias', 'Feminino', 'Ceilandia'),
(38, 'Marcelo Alves Farias', 'Masculino', 'Brasília'),
(11, 'Elizangela Pereira', 'Feminino', 'MA'),
(13, 'Maria Eduarda', 'Feminino', 'DF'),
(43, 'Weber Rocha', 'Masculino', 'Sobradinho'),
(45, 'Francisco Alexandre', 'Masculino', 'Guará');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enquete`
--

CREATE TABLE `enquete` (
  `Id` int(11) NOT NULL,
  `Voto` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `enquete`
--

INSERT INTO `enquete` (`Id`, `Voto`) VALUES
(1, 'Sim'),
(2, 'NÃ£o'),
(3, 'Sim'),
(4, 'Sim'),
(5, 'Sim'),
(6, 'Sim'),
(7, 'Não'),
(8, 'Não'),
(9, 'Não'),
(10, 'Não'),
(11, 'Sim'),
(12, 'Sim'),
(13, 'Não'),
(14, 'Sim'),
(15, 'Sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `permissao` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `usuario`, `senha`, `permissao`) VALUES
(1, 'Marcelo Farias', 'roolon.rock@gmail.com', '123456', '1'),
(2, 'Francisco de Assis', 'fra@gmail.com', '123456', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `enquete`
--
ALTER TABLE `enquete`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `enquete`
--
ALTER TABLE `enquete`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
