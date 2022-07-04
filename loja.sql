-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Jul-2022 às 17:57
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id_carrinho` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `quantidade` int(100) NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nivelAcesso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `sobrenome`, `email`, `senha`, `nivelAcesso`) VALUES
(1, 'cilmara', 'teixeira miralha', 'cilmara@gmail.com', '$2y$10$U80uK15UCQiHYIhN5cbfMem0N7piEhz3rI/ZfAJxWmdiAFrp23lp6', 2),
(3, 'Fernando', 'Medeiros', 'fernando@gmail.com', '$2y$10$C4n5opXvAr5IuJIMufNKYu8315Lz6v5OUx3DNiZkaHyS.Lvl5JlP6', 3),
(14, 'Gustavo', 'Krug', 'gusta@mail', '$2y$10$i4Lkzf5oxQg9/neAWx3TjuNx44no4TzRMPnF111jVnlJMw3.QR6ya', 3),
(15, 'Gustavo', 'Krug', 'gusta@mail', '$2y$10$iEUL/H31I9C.WkOqnc7CVujzmu0CPfLkXT8dmzSH.ibrTtcHkmc1S', 3),
(16, 'Ana', 'Soares', 'ana@gmail.com', '$2y$10$yLbzXnDdU0GmlBmtObcGcuYffGWDJCJU3VHROJFLhXKie.qyNfgiC', 3),
(17, 'Fer', 'nando', 'fer@gmail.com', '$2y$10$GelvBogQsJ96VsX5TiesyeRcjtp4CbqXA5zGWLG5CXb0eSktMPt9e', 3),
(18, 'Bernardo', 'A', 'ber@mail.com', '$2y$10$Osd/Lv/cvWAfmtN029L5iOCq3qpN.b/r8EPKRDyUPso.Xyp6Y/wPu', 3),
(19, 'Ana', 'Moura', 'ana@gmail.com', '$2y$10$n22HdluS5G7NetPZnQSGRejXRPh5ZONbSE7amhya5skoZ65S/aAc2', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivelacesso`
--

CREATE TABLE `nivelacesso` (
  `id` int(11) NOT NULL,
  `nivelAcesso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `nivelacesso`
--

INSERT INTO `nivelacesso` (`id`, `nivelAcesso`) VALUES
(2, 'Administrador'),
(3, 'cliente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `produto1` int(11) NOT NULL,
  `produto2` int(11) NOT NULL,
  `produto3` int(11) NOT NULL,
  `produto4` int(11) NOT NULL,
  `produto5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nomeproduto` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `descricao` longtext NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nomeproduto`, `preco`, `quantidade`, `descricao`, `foto`) VALUES
(14, 'Coelhinho', '90.00', 3, 'Coelhinho', 'b62d4cd08352d1e0ad0321bbf0dd991b.tmp'),
(15, 'Boneca', '150.00', 1, 'Boneca', '1744a9c842bd922fcb5102fa76b32a28.tmp'),
(16, 'Yoda', '70.00', 3, 'Yoda', 'eb345bb20d5c352d9b63857b02e5cbaa.tmp');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_carrinho`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chaveEstrangeira_nivelAcesso` (`nivelAcesso`);

--
-- Índices para tabela `nivelacesso`
--
ALTER TABLE `nivelacesso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkproduto1` (`produto1`),
  ADD KEY `fkproduto2` (`produto2`),
  ADD KEY `fkproduto3` (`produto3`),
  ADD KEY `fkproduto4` (`produto4`),
  ADD KEY `fkproduto5` (`produto5`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_carrinho` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `nivelacesso`
--
ALTER TABLE `nivelacesso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id`);

--
-- Limitadores para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `chaveEstrangeira_nivelAcesso` FOREIGN KEY (`nivelAcesso`) REFERENCES `nivelacesso` (`id`);

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fkproduto1` FOREIGN KEY (`produto1`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `fkproduto2` FOREIGN KEY (`produto2`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `fkproduto3` FOREIGN KEY (`produto3`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `fkproduto4` FOREIGN KEY (`produto4`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `fkproduto5` FOREIGN KEY (`produto5`) REFERENCES `produtos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
