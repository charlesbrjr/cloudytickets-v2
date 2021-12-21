-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Dez-2021 às 20:40
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
-- Banco de dados: `cloudyticket`
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
(1, 'Show da Lana Del Rey', 40);

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
(1, 1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`) VALUES
(1, 'Amanda', 'amanda@gmail.com', '23456'),
(2, 'Raissa', 'raissacn@gmail.com', '23542'),
(3, 'Charles', 'charles@hotmail.com', '34567'),
(4, 'shayane ', 'shayane@gmail.com', '12345'),
(5, 'jose', 'jose@gmail.com', '78906'),
(6, 'Gabriel', 'gabriel@hotmail.com.br', '45678'),
(7, 'Pedro', 'pedro@yahoo.com', '567432'),
(8, 'Bruno', 'bruno@gmail.com', '23451'),
(9, 'Flavia', 'flavia@gmail.com', '876301232'),
(10, 'Alessandra', 'ale@gmail.com', '7463905034'),
(11, 'Emanuel', 'emanuel@hotmail.com', '3258203489'),
(12, 'Jose', 'jose@hotmail.com', '634756754674567'),
(13, 'pedro', 'pedro@hotmail.com', '3242354235'),
(14, 'Ian', 'ian@hotmail.com', '23452345234'),
(15, 'paulo', 'paulovc@gmail.com', '98740957'),
(16, 'matheus', 'mateus@gmail.com', '876543'),
(17, 'Caio ', 'caio@hotmail.com', '23876594823'),
(18, 'George', 'george@hotmail.com', '6245647546'),
(19, 'Rodrigo', 'ogitdornyc@gmail.com', '24253254'),
(20, 'João Victor', 'joaovictor@gmail.com', '4352645739856348754'),
(21, 'Felipe', 'fla@gmail.com', '2352345423'),
(22, 'Lucas Barbosa', 'lubquinhas@gmail.com', '264236543');

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
  ADD KEY `FK_INGRESSO_2` (`FK_EVENTOS_id_evento`),
  ADD KEY `FK_INGRESSO_3` (`FK_USUARIO_id_usuario`);

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
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `ingresso`
--
ALTER TABLE `ingresso`
  MODIFY `id_ingresso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `ingresso`
--
ALTER TABLE `ingresso`
  ADD CONSTRAINT `FK_INGRESSO_2` FOREIGN KEY (`FK_EVENTOS_id_evento`) REFERENCES `eventos` (`id_evento`),
  ADD CONSTRAINT `FK_INGRESSO_3` FOREIGN KEY (`FK_USUARIO_id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
