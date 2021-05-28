-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Fev-2021 às 18:38
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS `cadastro` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(90) NOT NULL,
  `Sexo` varchar(30) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`Id`, `Nome`, `Sexo`, `Cidade`) VALUES
(19, 'Marcelo Alves Farias', 'Masculino', 'Taguatinga'),
(18, 'Severino Pereira', 'Masculino', 'Brasilia'),
(5, 'JoÃ£o Pereira da Cruz', 'Masculino', 'Tocantins'),
(26, 'Luciano PalhaÃ§o', 'Masculino', 'RS'),
(7, 'Giovanna', 'Feminino', 'Ceilandia'),
(20, 'Jovita Silva', 'Feminino', 'TO'),
(9, 'Rommis James Dio', 'Masculino', 'NY'),
(10, 'Jimmi Morrison', 'Masculino', 'Alabama'),
(11, 'Elizangela Pereira', 'Feminino', 'MA'),
(29, 'Marcelinho', 'Masculino', 'Valparaizo'),
(13, 'Maria Eduarda', 'Feminino', 'DF'),
(30, 'Paulo Henrique', 'Masculino', 'M Norte'),
(32, 'Paulinho da Forca', 'Masculino', 'SP'),
(33, 'Alessandra', 'Feminino', 'GO'),
(34, 'Jesus', 'Masculino', 'Ceu');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enquete`
--

DROP TABLE IF EXISTS `enquete`;
CREATE TABLE IF NOT EXISTS `enquete` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Voto` varchar(30) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `enquete`
--

INSERT INTO `enquete` (`Id`, `Voto`) VALUES
(1, 'Sim'),
(2, 'NÃ£o'),
(3, 'Sim'),
(4, 'Sim');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
