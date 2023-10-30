-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/10/2023 às 14:58
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sislogin`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_livros`
--

CREATE TABLE `cadastro_livros` (
  `id` int(11) NOT NULL,
  `imagem` blob DEFAULT NULL,
  `nome_livro` varchar(255) DEFAULT NULL,
  `isbn` varchar(13) DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `edicao` varchar(50) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `data_lancamento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro_livros`
--

INSERT INTO `cadastro_livros` (`id`, `imagem`, `nome_livro`, `isbn`, `categoria`, `edicao`, `autor`, `data_lancamento`) VALUES
(5, 0x2e2f494d47436f6d6f2066617a657220616d69676f73206520696e666c75656e6369617220706573736f61732e6a7067, 'Como fazer amigos e influenciar pessoas', '978-85-431-08', 'desenvolvimento pessoal', '9-°edição', 'Dale Carnegie', '0000-00-00'),
(6, 0x2e2f494d476d656e7465206d696c696f6e617269612e6a7067, 'Os segredos da mente milionária', '85-7542-239-1', 'finanças,desenvolvimento pessoal', '9-°edição', 'T.Harv Eker', '0000-00-00'),
(7, 0x2e2f494d475041495249434f5f706169706f6272652e6a7067, 'PAI RICO pai pobre', '978-85-508-01', 'finanças,desenvolvimento pessoal', '9-°edição', 'Robert Kiyosaki e Sharon Lechter.', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_users`
--

CREATE TABLE `cadastro_users` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro_users`
--

INSERT INTO `cadastro_users` (`id`, `nome`, `sobrenome`, `email`, `telefone`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(21, 'Henrique', 'Mauricio Magnus', 'henriquemauriciomagnus@gmail.com', '(48) 99857-3100');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `usuario` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `senha` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tipo` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`, `tipo`, `data`) VALUES
(1, 'Admin', 'adminbiblio@gmail.com', 'Admin', 'admin', '1', '0000-00-00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro_livros`
--
ALTER TABLE `cadastro_livros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cadastro_users`
--
ALTER TABLE `cadastro_users`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_livros`
--
ALTER TABLE `cadastro_livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `cadastro_users`
--
ALTER TABLE `cadastro_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
