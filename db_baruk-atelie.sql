-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jun-2021 às 21:45
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_baruk-atelie`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_agenda-cliente`
--

CREATE TABLE `tb_agenda-cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_agenda-cliente`
--

INSERT INTO `tb_agenda-cliente` (`id`, `nome`, `telefone`, `data`, `hora`) VALUES
(1, '', '', '0000-00-00', '00:00:00'),
(2, '', '', '0000-00-00', '00:00:00'),
(3, '', '', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro-cliente`
--

CREATE TABLE `tb_cadastro-cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` int(8) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_cadastro-cliente`
--

INSERT INTO `tb_cadastro-cliente` (`id`, `nome`, `senha`, `email`) VALUES
(10, '', 0, ''),
(11, '', 0, ''),
(12, '', 0, ''),
(13, 'ana', 0, ''),
(14, 'ana', 0, ''),
(15, '', 0, ''),
(16, 'Juliana', 0, ''),
(17, 'Juliana', 0, ''),
(18, 'Juliana', 0, ''),
(19, 'Juliana', 0, ''),
(20, 'Juliana', 0, ''),
(21, 'Juliana', 0, ''),
(22, 'Juliana', 0, ''),
(23, 'Juliana', 0, ''),
(24, 'maria', 0, ''),
(25, 'juliana', 0, ''),
(26, 'mariana', 0, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_agenda-cliente`
--
ALTER TABLE `tb_agenda-cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_cadastro-cliente`
--
ALTER TABLE `tb_cadastro-cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_agenda-cliente`
--
ALTER TABLE `tb_agenda-cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_cadastro-cliente`
--
ALTER TABLE `tb_cadastro-cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
