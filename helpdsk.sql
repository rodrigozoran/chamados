-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Fev-2022 às 14:44
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `helpdsk`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamados`
--

CREATE TABLE `chamados` (
  `id` int(255) NOT NULL,
  `setor` varchar(50) NOT NULL,
  `resp_setor` varchar(40) NOT NULL,
  `contato` varchar(40) NOT NULL,
  `abertura` date NOT NULL DEFAULT current_timestamp(),
  `desc_abert` varchar(250) DEFAULT NULL,
  `fechamento` date DEFAULT current_timestamp(),
  `desc_fech` varchar(250) DEFAULT NULL,
  `resp_chamado` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `chamados`
--

INSERT INTO `chamados` (`id`, `setor`, `resp_setor`, `contato`, `abertura`, `desc_abert`, `fechamento`, `desc_fech`, `resp_chamado`) VALUES
(1, 'Tesouraria', 'Carla Stock', '21 987654321', '2022-01-25', 'Internet Lenta', '2022-01-25', 'Switch reiniciado.', 'Pedro'),
(2, 'Controle Interno', 'Cláudio', '21 987456123', '2022-01-25', 'Computador não liga.', '2022-01-25', 'Troca do HD.', 'Gabriel'),
(3, 'Licitação', 'Pregoeiro', '21 27775333', '2022-01-25', 'Computador Lento', '2022-01-25', 'Backup de dados e formatação', 'Estagiário 1'),
(4, 'Tesouraria', 'Carla Stock', '21 27849301', '2022-01-25', 'Banco não abre', '2022-01-25', 'Reinstalação de módulo de segurança', 'Estagiário 4'),
(5, 'Licitação', 'Pregoeiro', '21 27775333', '2022-01-25', 'Computador Lento', '2022-01-25', 'Backup de dados e formatação', 'Estagiário 1'),
(6, 'Licitação', 'Pregoeiro', '21 27775333', '2022-01-25', 'Computador Lento', '2022-01-25', 'Backup de dados e formatação', 'Estagiário 1'),
(7, 'Licitação', 'Pregoeiro', '21 27775333', '2022-01-25', 'Computador Lento', '2022-01-25', 'Backup de dados e formatação', 'Estagiário 1'),
(8, 'Licitação', 'Pregoeiro', '21 27775333', '2022-01-25', 'Computador Lento', '2022-01-25', 'Backup de dados e formatação', 'Estagiário 1'),
(9, 'Licitação', 'Pregoeiro', '21 27775333', '2022-01-25', 'Computador Lento', '2022-01-25', 'Backup de dados e formatação', 'Estagiário 1'),
(10, 'Licitação', 'Pregoeiro', '21 27775333', '2022-01-25', 'Computador Lento', '2022-01-25', 'Backup de dados e formatação', 'Estagiário 1'),
(11, 'Licitação', 'Pregoeiro', '21 27775333', '2022-01-25', 'Computador Lento', '2022-01-25', 'Backup de dados e formatação', 'Estagiário 1'),
(25, 'Secretaria de Governo', 'Rodrigo', '21970099482', '0000-00-00', 'Formatar', '0000-00-00', 'PC Formatado', 'Henrique'),
(26, 'Secretaria de Governo', 'Rodrigo', '21970099482', '2022-01-26', 'Formatar', '0000-00-00', 'PC Formatado', 'Pedro'),
(27, 'Secretaria de Governo', 'Rodrigo', '21970099482', '2022-01-26', 'Formatar', '0000-00-00', 'PC Formatado', 'Henrique'),
(28, 'Secretaria de Urbanismo', 'Junioir', '21970099482', '2022-01-26', 'Formatar', '0000-00-00', 'PC Formatado', 'Estagiário++'),
(29, 'Secretaria de Controle Interno', 'Julio', '21970099482', '2022-01-26', 'Formatar', '0000-00-00', 'PC Formatado', 'Gabriel'),
(30, 'Secretaria de Urbanismo', 'Juan', '21970099482', '2022-01-26', 'Formatar', '0000-00-00', 'PC Formatado', 'Estagiário 1'),
(31, 'Secretaria de Fazenda', 'Maria', '21970099482', '2022-01-26', 'Formatar', '0000-00-00', 'PC Formatado', 'Estagiário++'),
(32, 'Secretaria de Obras', 'Rodrigo', '21970099482', '2022-01-26', 'Formatar', '0000-00-00', 'PC Formatado', 'Henrique'),
(33, 'Secretaria de Controle Interno', 'Julio', '21970099482', '2022-01-26', 'Formatar', '0000-00-00', 'PC Formatado', 'Henrique'),
(34, 'Secretaria de Obras', 'Rodrigo', '21970099482', '2022-01-26', 'Formatar', '0000-00-00', 'PC Formatado', 'Henrique'),
(35, 'Secretaria de Controle Interno', 'Francisco', '21970099482', '2022-01-26', 'Formatar', '0000-00-00', 'PC Formatado', 'Estagiário 1'),
(37, 'Secretaria de Fazenda', 'Rodrigo', '21970099482', '2022-01-26', 'Formatar', '0000-00-00', '', ''),
(40, '', 'Rodrigo', '21548796565', '2022-01-26', 'Formatar', '0000-00-00', '', ''),
(41, 'Secretaria de Fazenda', 'Zé Luiz', '21548796565', '2022-01-26', 'Formatar', '0000-00-00', 'PC Formatado', 'Gabriel');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `chamados`
--
ALTER TABLE `chamados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `chamados`
--
ALTER TABLE `chamados`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
