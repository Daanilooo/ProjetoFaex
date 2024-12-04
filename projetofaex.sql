-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Dez-2024 às 00:44
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetofaex`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `receipes`
--

CREATE TABLE `receipes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ingredient` varchar(1000) NOT NULL,
  `prepare` varchar(1000) NOT NULL,
  `timePrepare` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `receipes`
--

INSERT INTO `receipes` (`id`, `name`, `ingredient`, `prepare`, `timePrepare`) VALUES
(1, 'Bolo de chocolate', 'ovo, chocolate, fermento', 'mistura tudo', '01:00:00'),
(5, 'Macarrao ao molho branco', 'Macarrao, requeijao, leite', 'Mistura tudo', '00:30:00'),
(6, 'Feijoada', 'Feijão preto, carne de porco', 'Mistura tudo', '01:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `email`, `password`, `level`) VALUES
(1, 'Danilo', '12487142', 'danilo@gmail', '$2y$10$O/ZRTDgYNhas2dc5fjrCBeTx7rf7Ksbykh04rvAZcD1ZQjGHBmivy', 0),
(2, 'Danilo', '12487142', 'danilo@gmail', '$2y$10$O/ZRTDgYNhas2dc5fjrCBeTx7rf7Ksbykh04rvAZcD1ZQjGHBmivy', 0),
(3, 'Danilod', '121231', 'danilo@gmail.com', '$2y$10$/3YRXTYxySLurB7DUxsuTuSLfAraLDL9O4L8YNqC6QKvvIa1vjxbu', 0),
(4, 'Danilod', '121231', 'danilo@gmail.com', '$2y$10$/3YRXTYxySLurB7DUxsuTuSLfAraLDL9O4L8YNqC6QKvvIa1vjxbu', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `receipes`
--
ALTER TABLE `receipes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `receipes`
--
ALTER TABLE `receipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
