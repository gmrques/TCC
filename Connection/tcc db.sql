-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jun-2023 às 04:29
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `article`
--

CREATE TABLE `article` (
  `ID_ARTICLE` int(11) NOT NULL,
  `Title_article` varchar(255) NOT NULL,
  `Content_article` text NOT NULL,
  `date_article` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `gastronomy`
--

CREATE TABLE `gastronomy` (
  `TITLE_RECIPE` varchar(255) NOT NULL,
  `INGREDIENTS` text NOT NULL,
  `STEP_BY_STEP` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `roadmap`
--

CREATE TABLE `roadmap` (
  `ID_ROADMAP` int(11) NOT NULL,
  `DESTINATION` varchar(255) NOT NULL,
  `DURATION` varchar(255) NOT NULL,
  `ROADMAP` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `FULL_NAME` varchar(255) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`ID`, `EMAIL`, `FULL_NAME`, `USERNAME`, `PASSWORD`) VALUES
(1, 'gabbm9233@gmail.com', 'Galvao', 'gmrques', '$2y$10$HISRZpKWFeKSM3HIjiwumuiswHwiL/BiJP49erJ5MLktj46NT59LO'),
(2, 'gabbm923@gmail.com', 'Gabriel Calvo', 'gmrques2', '$2y$10$Y5OEwsBXt/vDNyRZxB/8.uOYvWwJwoppVNQ6j4TPjaKGYVseXJKFm'),
(3, 'teste@gmai.com', 'galvaooo', 'Gab galvao', '$2y$10$TcAqlE7Pie5Kq50W7Bwuf.gHwbOJ5z/B.M66w.BFU.15QlkWuVcp2'),
(4, 'gabgalvao@gmail.com', 'gabgalvao', 'gabbgalvao', '$2y$10$jPu3gMaxSeEEu3X.sdlmIOdMgwzsMrRo2HWSFVI1HxQH5WzLJKPuO'),
(5, 'galvaoteste22@gmail.com', 'Galvao teste junior', 'galvaoteste22', '$2y$10$0evhzMMXKRcFcQHmBBpNPeUzgtIjz8Y.lGJ7AAhsuBZWhm5rjrx6u'),
(6, 'teste22jr@gmail.com', 'teste junior', 'tstjr22', '$2y$10$R6XkFYRNoAcyc0xVqVQcbufsHo94jlDg.K2SwhlvFpqjyjeHSRoCG');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ID_ARTICLE`);

--
-- Índices para tabela `roadmap`
--
ALTER TABLE `roadmap`
  ADD PRIMARY KEY (`ID_ROADMAP`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `article`
--
ALTER TABLE `article`
  MODIFY `ID_ARTICLE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `roadmap`
--
ALTER TABLE `roadmap`
  MODIFY `ID_ROADMAP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
