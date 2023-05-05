-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Fev-2023 às 13:58
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sgl`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `marca` varchar(11) NOT NULL,
  `tamanho` varchar(21) NOT NULL,
  `vidautil` float NOT NULL,
  `partnumber` int(11) NOT NULL,
  `who` varchar(20) NOT NULL,
  `location` varchar(10) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `modificado` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `marca`, `tamanho`, `vidautil`, `partnumber`, `who`, `location`, `data`, `modificado`) VALUES
(356, 'iti', '600mm x 40mm x 0.25mm', 12000, 168007800, 'Pedro Sena', 'Z1', '2022-11-22 12:49:10', '2022-11-22 12:49:10'),
(357, 'iti', '600mm x 40mm x 0.25mm', 12000, 168007800, 'Pedro Sena', 'Z2', '2022-11-22 12:50:06', '2022-11-22 12:50:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_diesaw`
--

CREATE TABLE `cadastro_diesaw` (
  `id` int(11) NOT NULL,
  `marca` varchar(11) NOT NULL,
  `tamanho` varchar(21) NOT NULL,
  `vidautil` float NOT NULL,
  `partnumber` varchar(23) NOT NULL,
  `partnumber_unico` varchar(23) NOT NULL,
  `who` varchar(20) NOT NULL,
  `location` varchar(10) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastro_diesaw`
--

INSERT INTO `cadastro_diesaw` (`id`, `marca`, `tamanho`, `vidautil`, `partnumber`, `partnumber_unico`, `who`, `location`, `data`) VALUES
(32, 'disco', '570mm x 023mm', 570, 'ZHZZ-SD4500-H1-50-A1726', 'h21042438803wr', 'Pedro Sena', 'Z1', '2023-01-03 16:14:26'),
(33, 'disco', '570mm x 023mm', 570, 'ZHZZ-SD4500-H1-50-A1726', 'h21042438803wr', 'Pedro Sena', 'Z2', '2023-01-03 16:14:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadinfo`
--

CREATE TABLE `cadinfo` (
  `id` int(11) NOT NULL,
  `lotmae` varchar(10) NOT NULL,
  `codcliente` varchar(5) NOT NULL,
  `numeroflash` varchar(1) NOT NULL,
  `tipoproduto` varchar(40) NOT NULL,
  `nomeprograma` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadinfo`
--

INSERT INTO `cadinfo` (`id`, `lotmae`, `codcliente`, `numeroflash`, `tipoproduto`, `nomeprograma`) VALUES
(18, 'A2BT004A00', 'ADTB', '2', '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526'),
(22, 'A2BT009A00', 'PHS', '4', '9011012818 MICRON BGA  PHS 132BX4', 'V3.4.1.28 R 220526'),
(24, 'A2CT004A00', 'LOT', '4', '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dailyreport`
--

CREATE TABLE `dailyreport` (
  `id` int(11) NOT NULL,
  `lotmae` varchar(10) NOT NULL,
  `codcliente` varchar(5) NOT NULL,
  `numeroflash` int(1) NOT NULL,
  `tipoproduto` varchar(50) NOT NULL,
  `nomeprograma` varchar(30) NOT NULL,
  `numerolot` varchar(10) NOT NULL,
  `checkin` datetime NOT NULL,
  `checkout` datetime NOT NULL,
  `datasaida` date NOT NULL DEFAULT current_timestamp(),
  `pc` varchar(4) NOT NULL,
  `qtd` int(1) NOT NULL,
  `aprovado` int(1) NOT NULL,
  `bin2` int(1) NOT NULL,
  `falha` int(1) NOT NULL,
  `who` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `dailyreport`
--

INSERT INTO `dailyreport` (`id`, `lotmae`, `codcliente`, `numeroflash`, `tipoproduto`, `nomeprograma`, `numerolot`, `checkin`, `checkout`, `datasaida`, `pc`, `qtd`, `aprovado`, `bin2`, `falha`, `who`) VALUES
(36, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-09 08:42:00', '2023-01-09 08:45:00', '2023-01-23', '99', 8, 8, 0, 0, 'Rafael Camurça'),
(37, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-09 08:57:00', '2023-01-09 08:59:00', '2023-01-23', '07', 8, 7, 0, 1, 'Rafael Camurça'),
(38, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-08 09:49:00', '2023-01-09 09:52:00', '2023-01-23', '01', 8, 6, 2, 0, 'Pedro Sena'),
(39, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-09 13:55:00', '2023-01-09 13:58:00', '2023-01-23', '02', 8, 8, 0, 0, 'Pedro Sena'),
(40, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-09 14:45:00', '2023-01-09 14:47:00', '2023-01-23', '12', 8, 8, 0, 0, 'Rafael Camurça'),
(41, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-09 17:16:00', '2023-01-09 17:19:00', '2023-01-22', '02', 8, 7, 0, 1, 'Rafael Camurça'),
(42, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-09 17:17:00', '2023-01-09 17:20:00', '2023-01-22', '03', 8, 6, 2, 0, 'Rafael Camurça'),
(43, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-09 17:22:00', '2023-01-09 17:25:00', '2023-01-22', '04', 8, 8, 0, 0, 'Rafael Camurça'),
(44, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-09 17:23:00', '2023-01-09 17:26:00', '2023-01-22', '99', 8, 7, 1, 0, 'Rafael Camurça'),
(45, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-10 08:30:00', '2023-01-10 08:33:00', '2023-01-22', '05', 8, 8, 0, 0, 'Rafael Camurça'),
(47, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-10 08:58:00', '2023-01-10 08:01:00', '2023-01-21', '10', 8, 8, 0, 0, 'Rafael Camurça'),
(48, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-10 08:58:00', '2023-01-10 09:02:00', '2023-01-21', '05', 8, 5, 0, 3, 'Rafael Camurça'),
(49, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-10 09:00:00', '2023-01-10 09:03:00', '2023-01-21', '05', 8, 8, 0, 0, 'Rafael Camurça'),
(50, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-07 09:58:00', '2023-01-07 10:02:00', '2023-01-21', '88', 8, 8, 0, 0, 'Rafael Camurça'),
(51, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-10 10:06:00', '2023-01-10 10:09:00', '2023-01-10', '99', 8, 6, 2, 0, 'Rafael Camurça'),
(52, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-10 11:41:00', '2023-01-10 11:41:00', '2023-01-10', '12', 8, 7, 1, 0, 'Pedro Sena'),
(53, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-10 11:41:00', '2023-01-10 11:44:00', '2023-01-10', '12', 8, 8, 0, 0, 'Pedro Sena'),
(54, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-10 11:41:00', '2023-01-10 11:44:00', '2023-01-10', '12', 8, 7, 0, 1, 'Pedro Sena'),
(55, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-10 16:00:00', '2023-01-10 16:00:00', '2023-01-10', '02', 1, 1, 0, 0, 'Rafael Camurça'),
(56, 'A2CT004A00', 'LOT', 4, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2CT004A01', '2023-01-10 16:02:00', '2023-01-10 16:04:00', '2023-01-10', '12', 8, 8, 0, 0, 'Rafael Camurça'),
(57, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-11 12:35:00', '2023-01-11 12:37:00', '2023-01-11', '06', 8, 7, 1, 0, 'Rafael Camurça'),
(58, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-11 12:36:00', '2023-01-11 12:39:00', '2023-01-11', '10', 8, 8, 0, 0, 'Rafael Camurça'),
(59, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-11 12:36:00', '2023-01-11 12:36:00', '2023-01-11', '88', 8, 8, 0, 0, 'Rafael Camurça'),
(60, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-11 12:36:00', '2023-01-11 12:38:00', '2023-01-11', '99', 8, 7, 0, 1, 'Rafael Camurça'),
(61, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-11 12:36:00', '2023-01-11 12:36:00', '2023-01-11', '11', 8, 8, 0, 0, 'Rafael Camurça'),
(62, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-11 12:37:00', '2023-01-11 12:39:00', '2023-01-11', '05', 8, 8, 0, 0, 'Rafael Camurça'),
(63, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A01', '2023-01-23 17:16:00', '2023-01-23 17:18:00', '2023-01-23', '12', 8, 8, 0, 0, 'Rafael Camurça'),
(64, 'A2BT004A00', 'ADTB', 2, '9011012818 MICRON BGA 132BX2', 'V3.4.1.28 R 220526', 'A2BT004A05', '2023-01-26 14:47:00', '2023-01-26 14:47:00', '2023-01-26', '12', 8, 6, 2, 0, 'Romulo Oliveira');

-- --------------------------------------------------------

--
-- Estrutura da tabela `editblade`
--

CREATE TABLE `editblade` (
  `id` int(11) NOT NULL,
  `idblade` int(11) NOT NULL,
  `pnccbs` int(10) NOT NULL,
  `marcablade` varchar(10) NOT NULL,
  `tamanhoblade` varchar(22) NOT NULL,
  `vidautilblade` float NOT NULL,
  `usado` float NOT NULL,
  `reason` varchar(20) NOT NULL,
  `who` varchar(20) NOT NULL,
  `modificacao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `editblade`
--

INSERT INTO `editblade` (`id`, `idblade`, `pnccbs`, `marcablade`, `tamanhoblade`, `vidautilblade`, `usado`, `reason`, `who`, `modificacao`) VALUES
(138, 356, 168008156, 'iti', '600mm x 40mm x 0.25mm', 12000, 4071, 'Used Today', 'Pedro Sena', '2022-11-22 12:57:29'),
(139, 357, 168008157, 'iti', '600mm x 40mm x 0.25mm', 12000, 4032, 'Used Today', 'Pedro Sena', '2022-11-22 12:57:54'),
(161, 356, 168008156, 'iti', '600mm x 40mm x 0.25mm', 12000, 100, 'Change Blade', 'Romulo Oliveira', '2023-02-07 10:31:50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `editblade_diesaw`
--

CREATE TABLE `editblade_diesaw` (
  `id` int(11) NOT NULL,
  `idblade` int(11) NOT NULL,
  `marcablade` varchar(20) NOT NULL,
  `partnumberunico` varchar(20) NOT NULL,
  `tamanhoblade` varchar(22) NOT NULL,
  `vidautilblade` float NOT NULL,
  `usado` float NOT NULL,
  `reason` varchar(20) NOT NULL,
  `who` varchar(20) NOT NULL,
  `modificacao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `editblade_diesaw`
--

INSERT INTO `editblade_diesaw` (`id`, `idblade`, `marcablade`, `partnumberunico`, `tamanhoblade`, `vidautilblade`, `usado`, `reason`, `who`, `modificacao`) VALUES
(186, 33, 'disco', 'h21042438803wr', '570mm x 023mm', 570, 1, 'Change Blade', 'Pedro Sena', '2023-01-09 15:11:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pogopin132`
--

CREATE TABLE `pogopin132` (
  `id` int(11) NOT NULL,
  `pogopin1` int(6) NOT NULL,
  `pogopin2` int(6) NOT NULL,
  `pogopin3` int(10) NOT NULL,
  `pogopin4` int(10) NOT NULL,
  `pogopin5` int(10) NOT NULL,
  `pogopin6` int(10) NOT NULL,
  `pogopin7` int(10) NOT NULL,
  `pogopin8` int(10) NOT NULL,
  `head1` int(10) NOT NULL,
  `head2` int(10) NOT NULL,
  `socket` int(7) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `dummy` varchar(10) NOT NULL,
  `count` varchar(10) NOT NULL,
  `goldensample` varchar(10) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `who` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pogopin132`
--

INSERT INTO `pogopin132` (`id`, `pogopin1`, `pogopin2`, `pogopin3`, `pogopin4`, `pogopin5`, `pogopin6`, `pogopin7`, `pogopin8`, `head1`, `head2`, `socket`, `reason`, `dummy`, `count`, `goldensample`, `shift`, `who`, `date`) VALUES
(97, 381343, 322478, 281653, 341379, 369734, 379533, 376213, 375643, 191997, 191723, 383720, 'A', 'OK', 'OK', 'OK', 'Comercial', 'Pedro Sena', '2022-07-22 11:30:39'),
(98, 394775, 335879, 288623, 354784, 383113, 392909, 389591, 389011, 198732, 198370, 397102, 'A', 'OK', 'OK', 'OK', 'Comercial', 'Rafael Camurça', '2022-10-04 11:45:39'),
(99, 397003, 338104, 289049, 357007, 385327, 395130, 391805, 391229, 199846, 199478, 399324, 'A', 'OK', 'OK', 'OK', 'Comercial', 'Rafael Camurça', '2022-10-20 08:50:54'),
(104, 404295, 345385, 289086, 364293, 392599, 462401, 399075, 398489, 203507, 203111, 406618, 'A', 'OK', 'OK', 'OK', 'Comercial', 'Romulo Oliveira', '2022-12-13 16:29:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pogopin272`
--

CREATE TABLE `pogopin272` (
  `id` int(11) NOT NULL,
  `pogopin1` int(6) NOT NULL,
  `pogopin2` int(6) NOT NULL,
  `pogopin3` int(6) NOT NULL,
  `pogopin4` int(6) NOT NULL,
  `pogopin5` int(6) NOT NULL,
  `pogopin6` int(6) NOT NULL,
  `pogopin7` int(6) NOT NULL,
  `pogopin8` int(6) NOT NULL,
  `head1` int(6) NOT NULL,
  `head2` int(6) NOT NULL,
  `socket` int(7) NOT NULL,
  `reason` varchar(10) NOT NULL,
  `dummy` varchar(10) NOT NULL,
  `count` varchar(10) NOT NULL,
  `goldensample` varchar(6) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `who` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pogopin272`
--

INSERT INTO `pogopin272` (`id`, `pogopin1`, `pogopin2`, `pogopin3`, `pogopin4`, `pogopin5`, `pogopin6`, `pogopin7`, `pogopin8`, `head1`, `head2`, `socket`, `reason`, `dummy`, `count`, `goldensample`, `shift`, `who`, `date`) VALUES
(23, 435042, 44150, 272733, 441050, 408921, 440811, 440012, 434065, 228047, 223880, 451927, 'A', 'OK', 'OK', 'OK', 'Comercial', 'Rafael Camurça', '2022-09-21 09:15:30'),
(24, 436668, 44150, 272733, 442670, 410540, 442419, 441627, 435673, 228876, 224697, 453573, 'A', 'OK', 'OK', 'OK', 'Comercial', 'Rafael Camurça', '2022-10-05 10:25:10'),
(25, 442982, 44150, 272733, 448953, 411213, 448737, 447919, 440201, 232069, 227850, 459919, 'A', 'OK', 'OK', 'OK', 'Comercial', 'Rafael Camurça', '2022-11-19 11:30:50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `producao_mold`
--

CREATE TABLE `producao_mold` (
  `id` int(11) NOT NULL,
  `cliente` varchar(30) NOT NULL,
  `runcard` varchar(50) NOT NULL,
  `datta` date NOT NULL,
  `porta1` varchar(10) NOT NULL,
  `porta2` varchar(10) NOT NULL,
  `porta3` varchar(10) NOT NULL,
  `porta4` varchar(10) NOT NULL,
  `substrate` varchar(20) NOT NULL,
  `unidade` varchar(10) NOT NULL,
  `compound` varchar(50) NOT NULL,
  `tot_lotes` varchar(10) NOT NULL,
  `programa_plasma` varchar(3) NOT NULL,
  `programa` varchar(50) NOT NULL,
  `observacao` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `producao_mold`
--

INSERT INTO `producao_mold` (`id`, `cliente`, `runcard`, `datta`, `porta1`, `porta2`, `porta3`, `porta4`, `substrate`, `unidade`, `compound`, `tot_lotes`, `programa_plasma`, `programa`, `observacao`) VALUES
(10, 'ADATA / S002808000K', 'A31T007A14 A A31T007A26', '2023-02-01', 'Desligado', 'Desligado', '0.63', '0.63', '0.22 / 11252400012', '12*18', '1913000054  E\"dale/ELER-8-790/Φ16/5.5g', '13 Lotes', '3', '0.63-BGA-65X240-790-16X5.5G', 'Estamos usando o plasma do setor 1K por tempo determinado. Plasma do 10k está aguardando spare parts para troca de componente. '),
(11, 'ADATA / S002808000K', 'A31T007A27 A A31T007A39', '2023-02-02', 'Desligado', 'Desligado', '0.63', '0.63', '0.22 / 11252400012', '12*18', '1913000054  E\"dale/ELER-8-790/Φ16/5.5g', '13 Lotes', '3', '0.63-BGA-65X240-790-16X5.5G', 'Estamos usando o Plasma do setor 1K. Plasma do setor 10K em manutenção.'),
(12, 'ADATA / S002808000K', 'A31T007A40 A A31T007A50', '2023-02-03', 'Desligado', 'Desligado', '0.63', '0.63', '0.22 / 11252400012', '12*18', '1913000054  E\"dale/ELER-8-790/Φ16/5.5g', '11 Lotes', '3', '0.63-BGA-65X240-790-16X5.5G', 'Estamos usando o Plasma do setor 1K. Plasma do setor 10k está em manutenção.'),
(13, 'LOT / S002811000F', 'A31T004A01 A A31T004A06', '2023-02-06', '0.80', 'Desligado', 'Desligado', 'Desligado', '0.18 / 1127220001', '14*18', '1913000079 E\"dale/ELER-8-790/16?/7.0g', '6 Lotes', '3', '0.80-790-16X7.0G', 'Estamos usando o Plasma do setor 1k. Plasma do setor 10k está em manutenção.\r\nHouve 12 strips voids. Foi removido o FR4 para teste de ENG, nos Voids aparecia o chip ao lado.'),
(14, 'BWIN / S0C0013003B', 'A31T005A01 A A31T005A08 ', '2023-02-07', 'Desligado', 'Desligado', '0.63', 'Desligado', '0.13 / 1913000140', '11.5*13', '1913000140 E&#34;dale/ELER-8-100LFD-87/16?/5.5g', '8 Lotes', '3', '063.100LFD-87-16X5.5G', 'Estamos usando o Plasma do setor 1K. Plasma setor 10k em manutenção.'),
(15, 'sem produção', 'sem produção', '2023-02-08', 'Desligado', 'Desligado', 'Desligado', 'Desligado', 'sem produção', 'sem produç', 'sem produção', '1 Lote', 'sem', 'sem produção', 'sem produção'),
(16, 'sem produção', 'sem produção', '2023-02-09', 'Desligado', 'Desligado', 'Desligado', 'Desligado', 'sem produção', 'sem produç', 'sem produção', '1 Lote', 'sem', 'sem produção', 'sem produção'),
(17, 'sem produção', 'sem produção', '2023-02-10', 'Desligado', 'Desligado', 'Desligado', 'Desligado', 'sem produção', 'sem produç', 'sem produção', '1 Lote', 'sem', 'sem produção', 'Sem pordução.'),
(18, 'Sem pordução.', 'Sem pordução.', '2023-02-13', 'Desligado', 'Desligado', 'Desligado', 'Desligado', 'Sem pordução.', 'Sem porduç', 'Sem pordução.', '1 Lote', 'Sem', 'Sem pordução.', 'Sem pordução.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `matricula` int(4) NOT NULL,
  `senha` int(4) NOT NULL,
  `sit` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nome`, `matricula`, `senha`, `sit`) VALUES
(1, 'Pedro Sena', 7350, 123456, 1),
(2, 'Rafael Camurça', 7057, 987654, 1),
(3, 'Romulo Oliveira', 1381, 123456, 1),
(4, 'Kariton Gomes', 48, 123456, 1),
(5, 'Mauricio Freitas', 3436, 123456, 1),
(6, 'Samantha Ellen', 1014, 123456, 1),
(7, 'Anderson Silva', 1268, 123456, 1),
(8, 'Rosiele Pereira', 64, 123456, 1),
(9, 'Adriano Santos', 8929, 8929, 1),
(10, 'Altino Silva', 8930, 8930, 1),
(11, 'Andrew Serrão', 6743, 6743, 1),
(12, 'Beatriz Galvão', 8931, 8931, 1),
(13, 'Dalvanice Galvão', 6847, 6847, 1),
(14, 'Debora Nunes', 6489, 6489, 1),
(15, 'Denilson Anjos', 9210, 9210, 1),
(16, 'Fernanda Alcantara', 8932, 8932, 1),
(17, 'Gilmara Calado', 58, 58, 1),
(18, 'Jefferson Souza', 8933, 8933, 1),
(19, 'Sabrina Bacelar', 6788, 6788, 1),
(20, 'Valdileia Pereira', 839, 839, 1),
(21, 'Valesca Silva', 8934, 8934, 1),
(22, 'Vanessa Brasil', 7491, 7491, 1),
(23, 'Yan Oliveira', 67, 67, 1),
(24, 'Ylonia Santos', 7358, 7358, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cadastro_diesaw`
--
ALTER TABLE `cadastro_diesaw`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cadinfo`
--
ALTER TABLE `cadinfo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `dailyreport`
--
ALTER TABLE `dailyreport`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `editblade`
--
ALTER TABLE `editblade`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `editblade_diesaw`
--
ALTER TABLE `editblade_diesaw`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pogopin132`
--
ALTER TABLE `pogopin132`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pogopin272`
--
ALTER TABLE `pogopin272`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `producao_mold`
--
ALTER TABLE `producao_mold`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=367;

--
-- AUTO_INCREMENT de tabela `cadastro_diesaw`
--
ALTER TABLE `cadastro_diesaw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `cadinfo`
--
ALTER TABLE `cadinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `dailyreport`
--
ALTER TABLE `dailyreport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de tabela `editblade`
--
ALTER TABLE `editblade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT de tabela `editblade_diesaw`
--
ALTER TABLE `editblade_diesaw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT de tabela `pogopin132`
--
ALTER TABLE `pogopin132`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de tabela `pogopin272`
--
ALTER TABLE `pogopin272`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `producao_mold`
--
ALTER TABLE `producao_mold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
