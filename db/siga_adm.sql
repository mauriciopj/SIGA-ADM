-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 27-Jan-2020 às 11:17
-- Versão do servidor: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siga_adm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aacc`
--

CREATE TABLE `aacc` (
  `id` int(11) NOT NULL,
  `titulo` varchar(120) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(200) COLLATE utf8_bin NOT NULL,
  `tipo` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `aacc`
--

INSERT INTO `aacc` (`id`, `titulo`, `descricao`, `tipo`) VALUES
(1, 'CONHECENDO O LATÉX (BATE PAPO TECNOLÓGICO)', 'Certificamos que Maurício Pereira de Jesus participou da palestra ministrada pelo professor Adriano Antunes Prates.', '2 horas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `certificados`
--

CREATE TABLE `certificados` (
  `id` int(11) NOT NULL,
  `tamanho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `certificados`
--

INSERT INTO `certificados` (`id`, `tamanho`) VALUES
(1, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tcc`
--

CREATE TABLE `tcc` (
  `id` int(11) NOT NULL,
  `tema` varchar(120) NOT NULL,
  `titulo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tcc`
--

INSERT INTO `tcc` (`id`, `tema`, `titulo`) VALUES
(1, 'Gestão de Atividades de Cursos Superiores', 'Sistema de Gestão de Atividades para o curso de Bacharelado em Administração');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aacc`
--
ALTER TABLE `aacc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificados`
--
ALTER TABLE `certificados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tcc`
--
ALTER TABLE `tcc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aacc`
--
ALTER TABLE `aacc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tcc`
--
ALTER TABLE `tcc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
