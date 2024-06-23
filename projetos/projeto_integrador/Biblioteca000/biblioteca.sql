-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/06/2024 às 15:50
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

CREATE TABLE `livro` (
  `ID_Livro` int(11) NOT NULL,
  `Nome` varchar(255) DEFAULT NULL,
  `Autor` varchar(255) DEFAULT NULL,
  `ISBN` int(11) DEFAULT NULL,
  `Editora` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`ID_Livro`, `Nome`, `Autor`, `ISBN`, `Editora`) VALUES
(2, 'sim', 'eu', 32346426, 'minha');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro_usuario`
--

CREATE TABLE `livro_usuario` (
  `ID_Livro_Usuario` int(11) NOT NULL,
  `ID_Livro` int(11) DEFAULT NULL,
  `ID_User` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID_User` int(11) NOT NULL,
  `Nome` varchar(255) DEFAULT NULL,
  `Senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`ID_Livro`);

--
-- Índices de tabela `livro_usuario`
--
ALTER TABLE `livro_usuario`
  ADD PRIMARY KEY (`ID_Livro_Usuario`),
  ADD KEY `ID_Livro` (`ID_Livro`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `ID_Livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `livro_usuario`
--
ALTER TABLE `livro_usuario`
  MODIFY `ID_Livro_Usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `livro_usuario`
--
ALTER TABLE `livro_usuario`
  ADD CONSTRAINT `livro_usuario_ibfk_1` FOREIGN KEY (`ID_Livro`) REFERENCES `livro` (`ID_Livro`),
  ADD CONSTRAINT `livro_usuario_ibfk_2` FOREIGN KEY (`ID_User`) REFERENCES `usuario` (`ID_User`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
