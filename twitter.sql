-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Jul-2019 às 23:14
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twitter`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `twitts`
--

CREATE TABLE `twitts` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `twitt` varchar(140) COLLATE utf8_unicode_ci NOT NULL,
  `data` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `twitts`
--

INSERT INTO `twitts` (`id`, `id_usuario`, `twitt`, `data`) VALUES
(19, 30, 'óla eu sou a maria', '2019-07-01 19:50:08'),
(23, 30, 'boa noite', '2019-07-01 20:22:08'),
(29, 33, 'ola eu sou a ana', '2019-07-03 17:59:20'),
(32, 33, 'bom noite', '2019-07-03 18:01:47'),
(33, 33, 'oiii', '2019-07-03 18:01:56'),
(40, 1, 'oi', '2019-07-03 18:08:40'),
(45, 32, 'oi', '2019-07-08 11:00:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(30, 'maria', 'maria@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(32, 'caique', 'kaiquemello3@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(33, 'ana', 'ana@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_seguidores`
--

CREATE TABLE `usuarios_seguidores` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_usuario_seguindo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios_seguidores`
--

INSERT INTO `usuarios_seguidores` (`id`, `id_usuario`, `id_usuario_seguindo`) VALUES
(11, 32, 33),
(12, 30, 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `twitts`
--
ALTER TABLE `twitts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios_seguidores`
--
ALTER TABLE `usuarios_seguidores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `twitts`
--
ALTER TABLE `twitts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `usuarios_seguidores`
--
ALTER TABLE `usuarios_seguidores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
