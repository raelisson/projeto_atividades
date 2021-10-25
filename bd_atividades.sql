-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Out-2021 às 14:43
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
-- Banco de dados: `bd_atividades`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_alunos`
--

CREATE TABLE `tb_alunos` (
  `id_alunos` int(11) NOT NULL,
  `alu_matricula` varchar(256) NOT NULL,
  `alu_nome` varchar(256) NOT NULL,
  `alu_senha` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_alunos`
--

INSERT INTO `tb_alunos` (`id_alunos`, `alu_matricula`, `alu_nome`, `alu_senha`) VALUES
(1, '123456', 'Raelisson Wagner', 'rw123456'),
(2, '654321', 'João Teste', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cad_atividades`
--

CREATE TABLE `tb_cad_atividades` (
  `id_cad_atividades` int(11) NOT NULL,
  `id_alunos` int(11) NOT NULL,
  `at_nome_atividade` varchar(256) NOT NULL,
  `at_tipo_atividade` varchar(256) NOT NULL,
  `at_carga_hora` int(10) NOT NULL,
  `at_certificado` varchar(256) NOT NULL,
  `at_status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_cad_atividades`
--

INSERT INTO `tb_cad_atividades` (`id_cad_atividades`, `id_alunos`, `at_nome_atividade`, `at_tipo_atividade`, `at_carga_hora`, `at_certificado`, `at_status`) VALUES
(18, 1, 'Como falar em público', 'Curso de extensão', 4, 'Teste Certificado.pdf', 'ok'),
(19, 1, 'Curso de Verão - enfermagem', 'Curso de extensão', 8, 'Teste Certificado.pdf', 'ok'),
(20, 2, 'Curso Direito', 'Graduação', 20, 'Teste Certificado.pdf', 'ok'),
(21, 2, 'Como falar em público', 'Palestra', 4, 'Teste Certificado.pdf', 'ok'),
(22, 2, 'Curso de Verão - enfermagem', 'Curso de extensão', 12, 'Teste Certificado.pdf', 'ok'),
(23, 1, 'Curso Direito', 'Graduação', 30, 'Teste Certificado.pdf', 'ok');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  ADD PRIMARY KEY (`id_alunos`);

--
-- Índices para tabela `tb_cad_atividades`
--
ALTER TABLE `tb_cad_atividades`
  ADD PRIMARY KEY (`id_cad_atividades`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  MODIFY `id_alunos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_cad_atividades`
--
ALTER TABLE `tb_cad_atividades`
  MODIFY `id_cad_atividades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
