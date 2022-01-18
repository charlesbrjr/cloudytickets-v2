-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jan-2022 às 15:31
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ticketcloudy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `atracao` varchar(50) DEFAULT NULL,
  `qtd_ingresso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`id_evento`, `atracao`, `qtd_ingresso`) VALUES
(1, 'Show da Lana Del Rey', 250),
(2, 'Festa do Povo Animado', 100),
(3, 'Teatro House of Gucci', 200),
(4, 'Peça Memórias Póstumas de Brás Cubas', 50),
(5, 'Show da Lady Gaga', 250);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingresso`
--

CREATE TABLE `ingresso` (
  `id_ingresso` int(11) NOT NULL,
  `FK_EVENTOS_id_evento` int(11) DEFAULT NULL,
  `FK_USUARIO_id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ingresso`
--

INSERT INTO `ingresso` (`id_ingresso`, `FK_EVENTOS_id_evento`, `FK_USUARIO_id_usuario`) VALUES
(1, 1, 1),
(2, 2, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(120) NOT NULL,
  `arquivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `arquivo`) VALUES
(1, 'Charles', 'charles@hotmail.com', 'a5410ee37744c574ba5790034ea08f79', ''),
(2, 'Sergio', 'sergio@gmail.com', '3bffa4ebdf4874e506c2b12405796aa5', ''),
(3, 'Vanusa', 'vanusa@gmail.com', '845f18eea198bc4a7a26605a0615ad21', ''),
(4, 'Maria', 'maria@gmail.com', '263bce650e68ab4e23f28263760b9fa5', ''),
(5, 'Shayane ', 'shayane@gmail.com', 'e346cc3b31cb4348453fb43b46dfca94', ''),
(6, NULL, NULL, '', 'e1d356f7d49b19cf75307b3663abbca0.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Índices para tabela `ingresso`
--
ALTER TABLE `ingresso`
  ADD PRIMARY KEY (`id_ingresso`),
  ADD KEY `FK_EVENTOS_id_evento` (`FK_EVENTOS_id_evento`),
  ADD KEY `FK_USUARIO_id_usuario` (`FK_USUARIO_id_usuario`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `ingresso`
--
ALTER TABLE `ingresso`
  MODIFY `id_ingresso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `ingresso`
--
ALTER TABLE `ingresso`
  ADD CONSTRAINT `ingresso_ibfk_1` FOREIGN KEY (`FK_EVENTOS_id_evento`) REFERENCES `eventos` (`id_evento`),
  ADD CONSTRAINT `ingresso_ibfk_2` FOREIGN KEY (`FK_USUARIO_id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
