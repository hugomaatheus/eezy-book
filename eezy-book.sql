-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 09/02/2019 às 14:21
-- Versão do servidor: 5.7.25-0ubuntu0.18.10.2
-- Versão do PHP: 7.2.14-1+ubuntu18.10.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eezy-book`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `author` varchar(30) DEFAULT NULL,
  `category` varchar(50) NOT NULL,
  `markedPage` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `category`, `markedPage`, `status`, `user_id`) VALUES
(5, 'O Mal Estar da Sociedadee', 'Segmund Freud', 'PsicanÃ¡lise', 100, 'lendo', 2),
(6, 'O Mal Estar da Sociedade', 'Segmund Freud', 'PsicanÃ¡lise', 22, 'lendo', 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `mangas`
--

CREATE TABLE `mangas` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `markedPage` int(11) NOT NULL,
  `markedT` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `mangas`
--

INSERT INTO `mangas` (`id`, `name`, `author`, `category`, `markedPage`, `markedT`, `status`, `user_id`) VALUES
(3, 'One Piece', 'Eiichiro Oda', 'Shounen', 22, 2, 'lendo', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'hugo', 'email', '123'),
(2, 'Hugo Matheus', 'hugo_matheus11@hotmail.com', '123'),
(3, 'Hugo Matheus', 'hugo_matheus11@hotmail.com', '123456'),
(4, 'hbg', 'hbg@gmail.com', '123'),
(5, 'Hugo Matheus Freire de Lima', 'hugomatheus650@gmail.com', '1'),
(6, 'Hugo Matheus Freire de Lima', 'hugomatheusgmail.com', '123'),
(7, 'Hugo Matheuss', 'hugo_matheus11@hotmail.com', '1234'),
(8, '1asdsf', 'hugomatheus650@gmail.comdasda', '12'),
(9, 'Hugo Matheus', 'hugo_matheus11@hotmail.com111111', '1234'),
(10, 'hbg123', 'hug@gmail.com', '123'),
(11, 'avc', 'abc@g', '123');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Índices de tabela `mangas`
--
ALTER TABLE `mangas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de tabela `mangas`
--
ALTER TABLE `mangas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
