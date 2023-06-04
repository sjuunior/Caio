-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/06/2023 às 19:09
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
-- Banco de dados: `caio`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carro`
--

CREATE TABLE `carro` (
  `idcarro` int(11) NOT NULL,
  `anocarro` int(4) NOT NULL,
  `valorcarro` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cesta`
--

CREATE TABLE `cesta` (
  `idcesta` int(11) NOT NULL,
  `anocesta` int(4) NOT NULL,
  `valorcesta` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `dolar`
--

CREATE TABLE `dolar` (
  `iddolar` int(11) NOT NULL,
  `anodolar` int(4) NOT NULL,
  `valordolar` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `gasolina`
--

CREATE TABLE `gasolina` (
  `idgasolina` int(11) NOT NULL,
  `anogasolina` int(4) NOT NULL,
  `valorgasolina` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pib`
--

CREATE TABLE `pib` (
  `idpib` int(11) NOT NULL,
  `anopib` int(4) NOT NULL,
  `valorpib` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `processador`
--

CREATE TABLE `processador` (
  `idprocessador` int(11) NOT NULL,
  `anoprocessador` int(4) NOT NULL,
  `valorprocessador` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`idcarro`);

--
-- Índices de tabela `cesta`
--
ALTER TABLE `cesta`
  ADD PRIMARY KEY (`idcesta`);

--
-- Índices de tabela `dolar`
--
ALTER TABLE `dolar`
  ADD PRIMARY KEY (`iddolar`);

--
-- Índices de tabela `gasolina`
--
ALTER TABLE `gasolina`
  ADD PRIMARY KEY (`idgasolina`);

--
-- Índices de tabela `pib`
--
ALTER TABLE `pib`
  ADD PRIMARY KEY (`idpib`);

--
-- Índices de tabela `processador`
--
ALTER TABLE `processador`
  ADD PRIMARY KEY (`idprocessador`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carro`
--
ALTER TABLE `carro`
  MODIFY `idcarro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cesta`
--
ALTER TABLE `cesta`
  MODIFY `idcesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `dolar`
--
ALTER TABLE `dolar`
  MODIFY `iddolar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `gasolina`
--
ALTER TABLE `gasolina`
  MODIFY `idgasolina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `pib`
--
ALTER TABLE `pib`
  MODIFY `idpib` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `processador`
--
ALTER TABLE `processador`
  MODIFY `idprocessador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
