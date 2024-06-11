-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 18-Jul-2021 às 19:10
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alternativas`
--

DROP TABLE IF EXISTS `alternativas`;
CREATE TABLE IF NOT EXISTS `alternativas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `resposta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pergunta_id` int NOT NULL,
  `val_resposta` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `alternativas`
--

INSERT INTO `alternativas` (`id`, `resposta`, `pergunta_id`, `val_resposta`) VALUES
(1, 'Alternativa 1', 1, 2),
(2, 'Alternativa 2', 1, 2),
(3, 'Alternativa 3', 1, 1),
(4, 'Alternativa 4', 1, 2),
(5, 'Alternativa 1', 2, 1),
(6, 'Alternativa 2', 2, 2),
(7, 'Alternativa 3', 2, 2),
(8, 'Alternativa 4', 2, 2),
(9, 'Alternativa 5', 2, 2),
(10, 'Verdadeiro', 3, 2),
(11, 'Falso', 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

DROP TABLE IF EXISTS `perguntas`;
CREATE TABLE IF NOT EXISTS `perguntas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `questao` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`id`, `questao`) VALUES
(1, 'Pergunta 1'),
(2, 'Pergunta 2'),
(3, 'Pergunta 3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
