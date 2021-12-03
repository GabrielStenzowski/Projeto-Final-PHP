-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2021 às 18:56
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojaperifericos_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento_tb`
--

CREATE TABLE `equipamento_tb` (
  `id_equipamento` int(11) NOT NULL,
  `modelo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `equipamento_tb`
--

INSERT INTO `equipamento_tb` (`id_equipamento`, `modelo`, `valor`, `quantidade`) VALUES
(12, 'viper mini', 250, 100),
(13, 'deathadder', 170, 30),
(14, 'viper ultimate', 1000, 40),
(15, 'naga', 100000, 2000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_tb`
--

CREATE TABLE `usuarios_tb` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios_tb`
--

INSERT INTO `usuarios_tb` (`id_usuario`, `usuario`, `senha`) VALUES
(1, 'admin', 'admin@123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `equipamento_tb`
--
ALTER TABLE `equipamento_tb`
  ADD PRIMARY KEY (`id_equipamento`);

--
-- Índices para tabela `usuarios_tb`
--
ALTER TABLE `usuarios_tb`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `equipamento_tb`
--
ALTER TABLE `equipamento_tb`
  MODIFY `id_equipamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuarios_tb`
--
ALTER TABLE `usuarios_tb`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
