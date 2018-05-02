-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 02-Maio-2018 às 20:48
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5504268_dbcombufacil`
--
CREATE DATABASE IF NOT EXISTS `id5504268_dbcombufacil` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id5504268_dbcombufacil`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbCombustivelDisponivel`
--

CREATE TABLE `tbCombustivelDisponivel` (
  `idCombustivelDisponivel` int(10) UNSIGNED NOT NULL,
  `idOpcaoCombustivel` int(10) UNSIGNED NOT NULL,
  `idPosto` int(10) UNSIGNED NOT NULL,
  `cdPrecoCombustivel` double(8,2) NOT NULL,
  `cdAvaliacao` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbOpcaoCombustivel`
--

CREATE TABLE `tbOpcaoCombustivel` (
  `idCombustivel` int(10) UNSIGNED NOT NULL,
  `comOpcaoCombustivel` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbPoliticaAcesso`
--

CREATE TABLE `tbPoliticaAcesso` (
  `idPoliticaAcesso` int(10) UNSIGNED NOT NULL,
  `paTipoUsuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbPostoAbastecimento`
--

CREATE TABLE `tbPostoAbastecimento` (
  `idPostoAbastecimento` int(10) UNSIGNED NOT NULL,
  `posCnpj` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `posEndereco` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `posBairro` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `posNumero` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `posCep` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `posBadeira` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idLocalMaps` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbTituloPosto`
--

CREATE TABLE `tbTituloPosto` (
  `idTituloPosto` int(10) UNSIGNED NOT NULL,
  `idPosto` int(10) UNSIGNED NOT NULL,
  `idUsuario` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbUsuario`
--

CREATE TABLE `tbUsuario` (
  `idUsuario` int(10) UNSIGNED NOT NULL,
  `idPoliticaAcesso` int(10) UNSIGNED DEFAULT NULL,
  `usuNome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `usuSobrenome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `usuEmail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuCpf` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `usuSenha` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbVenda`
--

CREATE TABLE `tbVenda` (
  `idVenda` int(10) UNSIGNED NOT NULL,
  `idPosto` int(10) UNSIGNED NOT NULL,
  `idUsuario` int(10) UNSIGNED NOT NULL,
  `venDataHora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbCombustivelDisponivel`
--
ALTER TABLE `tbCombustivelDisponivel`
  ADD PRIMARY KEY (`idCombustivelDisponivel`),
  ADD KEY `idOpcaoCombustivel` (`idOpcaoCombustivel`),
  ADD KEY `idPosto` (`idPosto`);

--
-- Indexes for table `tbOpcaoCombustivel`
--
ALTER TABLE `tbOpcaoCombustivel`
  ADD PRIMARY KEY (`idCombustivel`);

--
-- Indexes for table `tbPoliticaAcesso`
--
ALTER TABLE `tbPoliticaAcesso`
  ADD PRIMARY KEY (`idPoliticaAcesso`);

--
-- Indexes for table `tbPostoAbastecimento`
--
ALTER TABLE `tbPostoAbastecimento`
  ADD PRIMARY KEY (`idPostoAbastecimento`);

--
-- Indexes for table `tbTituloPosto`
--
ALTER TABLE `tbTituloPosto`
  ADD PRIMARY KEY (`idTituloPosto`),
  ADD KEY `idPosto` (`idPosto`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indexes for table `tbUsuario`
--
ALTER TABLE `tbUsuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idPoliticaAcesso` (`idPoliticaAcesso`);

--
-- Indexes for table `tbVenda`
--
ALTER TABLE `tbVenda`
  ADD PRIMARY KEY (`idVenda`),
  ADD KEY `idPosto` (`idPosto`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbCombustivelDisponivel`
--
ALTER TABLE `tbCombustivelDisponivel`
  MODIFY `idCombustivelDisponivel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbOpcaoCombustivel`
--
ALTER TABLE `tbOpcaoCombustivel`
  MODIFY `idCombustivel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbPoliticaAcesso`
--
ALTER TABLE `tbPoliticaAcesso`
  MODIFY `idPoliticaAcesso` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbPostoAbastecimento`
--
ALTER TABLE `tbPostoAbastecimento`
  MODIFY `idPostoAbastecimento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbTituloPosto`
--
ALTER TABLE `tbTituloPosto`
  MODIFY `idTituloPosto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbUsuario`
--
ALTER TABLE `tbUsuario`
  MODIFY `idUsuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbVenda`
--
ALTER TABLE `tbVenda`
  MODIFY `idVenda` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tbCombustivelDisponivel`
--
ALTER TABLE `tbCombustivelDisponivel`
  ADD CONSTRAINT `tbCombustivelDisponivel_ibfk_1` FOREIGN KEY (`idOpcaoCombustivel`) REFERENCES `tbOpcaoCombustivel` (`idCombustivel`),
  ADD CONSTRAINT `tbCombustivelDisponivel_ibfk_2` FOREIGN KEY (`idPosto`) REFERENCES `tbPostoAbastecimento` (`idPostoAbastecimento`);

--
-- Limitadores para a tabela `tbTituloPosto`
--
ALTER TABLE `tbTituloPosto`
  ADD CONSTRAINT `tbTituloPosto_ibfk_1` FOREIGN KEY (`idPosto`) REFERENCES `tbPostoAbastecimento` (`idPostoAbastecimento`),
  ADD CONSTRAINT `tbTituloPosto_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbUsuario` (`idUsuario`);

--
-- Limitadores para a tabela `tbUsuario`
--
ALTER TABLE `tbUsuario`
  ADD CONSTRAINT `tbUsuario_ibfk_1` FOREIGN KEY (`idPoliticaAcesso`) REFERENCES `tbPoliticaAcesso` (`idPoliticaAcesso`);

--
-- Limitadores para a tabela `tbVenda`
--
ALTER TABLE `tbVenda`
  ADD CONSTRAINT `tbVenda_ibfk_1` FOREIGN KEY (`idPosto`) REFERENCES `tbPostoAbastecimento` (`idPostoAbastecimento`),
  ADD CONSTRAINT `tbVenda_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbUsuario` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
