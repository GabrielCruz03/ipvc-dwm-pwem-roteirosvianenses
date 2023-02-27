-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Nov-2022 às 12:32
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `roteirosvianenses`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id_imagem` int(12) NOT NULL,
  `imagem` longblob NOT NULL,
  `nome_imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos`
--

CREATE TABLE `pontos` (
  `id_ponto` int(12) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos_imagens`
--

CREATE TABLE `pontos_imagens` (
  `id_ponto` int(12) NOT NULL,
  `id_imagem` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `roteiro`
--

CREATE TABLE `roteiro` (
  `id_roteiro` int(12) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `roteiro_imagem`
--

CREATE TABLE `roteiro_imagem` (
  `id_roteiro` int(12) NOT NULL,
  `id_imagem` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `roteiro_pontos`
--

CREATE TABLE `roteiro_pontos` (
  `id_roteiro` int(12) NOT NULL,
  `id_ponto` int(12) NOT NULL,
  `ordem` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `num_tel` varchar(15) DEFAULT NULL,
  `password` varchar(64) NOT NULL,
  `user_type` text NOT NULL DEFAULT 'user',
  `code` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`ID`, `name`, `email`, `num_tel`, `password`, `user_type`, `code`) VALUES
(50, 'afonso', 'afonsob@ipvc.pt', '213913123', 'afonso1', 'user', '351'),
(51, 'admin', 'admin@mail.pt', '111111111', 'admin', 'user', '351');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id_imagem`);

--
-- Índices para tabela `pontos`
--
ALTER TABLE `pontos`
  ADD PRIMARY KEY (`id_ponto`);

--
-- Índices para tabela `pontos_imagens`
--
ALTER TABLE `pontos_imagens`
  ADD PRIMARY KEY (`id_ponto`,`id_imagem`),
  ADD KEY `ponto_imagem_FK1` (`id_imagem`);

--
-- Índices para tabela `roteiro`
--
ALTER TABLE `roteiro`
  ADD PRIMARY KEY (`id_roteiro`);

--
-- Índices para tabela `roteiro_imagem`
--
ALTER TABLE `roteiro_imagem`
  ADD PRIMARY KEY (`id_roteiro`,`id_imagem`),
  ADD KEY `roteiro_imagem_FK2` (`id_imagem`);

--
-- Índices para tabela `roteiro_pontos`
--
ALTER TABLE `roteiro_pontos`
  ADD PRIMARY KEY (`id_roteiro`,`id_ponto`),
  ADD KEY `roteiro_ponto_FK2` (`id_ponto`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id_imagem` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT de tabela `pontos`
--
ALTER TABLE `pontos`
  MODIFY `id_ponto` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `roteiro`
--
ALTER TABLE `roteiro`
  MODIFY `id_roteiro` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pontos_imagens`
--
ALTER TABLE `pontos_imagens`
  ADD CONSTRAINT `ponto_imagem_FK1` FOREIGN KEY (`id_imagem`) REFERENCES `imagens` (`id_imagem`),
  ADD CONSTRAINT `ponto_imagem_FK2` FOREIGN KEY (`id_ponto`) REFERENCES `pontos` (`id_ponto`);

--
-- Limitadores para a tabela `roteiro_imagem`
--
ALTER TABLE `roteiro_imagem`
  ADD CONSTRAINT `roteiro_imagem_FK1` FOREIGN KEY (`id_roteiro`) REFERENCES `roteiro` (`id_roteiro`),
  ADD CONSTRAINT `roteiro_imagem_FK2` FOREIGN KEY (`id_imagem`) REFERENCES `imagens` (`id_imagem`);

--
-- Limitadores para a tabela `roteiro_pontos`
--
ALTER TABLE `roteiro_pontos`
  ADD CONSTRAINT `roteiro_ponto_FK1` FOREIGN KEY (`id_roteiro`) REFERENCES `roteiro` (`id_roteiro`),
  ADD CONSTRAINT `roteiro_ponto_FK2` FOREIGN KEY (`id_ponto`) REFERENCES `pontos` (`id_ponto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
