-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Abr-2019 às 21:38
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventdivulgation`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE `evento` (
  `usuario` varchar(20) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `descricao` text NOT NULL,
  `file` text NOT NULL,
  `opcao` varchar(30) NOT NULL,
  `preco` double(6,2) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `horario` varchar(40) NOT NULL,
  `data` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`usuario`, `nome`, `descricao`, `file`, `opcao`, `preco`, `cidade`, `endereco`, `horario`, `data`) VALUES
('xsrdandanx', 'Festa dos Friends', 'Festa para se conhecer novos amigos', '../posts/2019.03.20-23.47.51.jpg', 'GrÃ¡tis', 0.00, 'Cajazeiras', 'PrÃ³ximo ao Jardim oasis', '05:00 PM', 'Mar 21, 2019'),
('xsrdandanx', 'Show de Humor', 'Show de Humor com Whindersson Nunes', '../posts/2019.03.20-23.58.26.jpg', 'Pago', 50.00, 'Cajazeiras', 'Rua Tal , Centro', '09:59 PM', 'Mar 30, 2019'),
('xsrdandanx', 'dasdadasd', 'dasdadad', '../posts/2019.03.30-11.58.12.jpg', 'GrÃ¡tis', 0.00, 'IcÃ³', 'CearÃ¡', '06:58 AM', 'Mar 31, 2019'),
('xsrdandanx', 'Carnaval', 'Tururu', '../posts/2019.04.01-10.31.08.jpg', 'GrÃ¡tis', 0.00, 'Cajazeiras', 'Rua Tal , Centro', '05:30 AM', 'Apr 27, 2019');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(20) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `perfil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `sobrenome`, `cidade`, `estado`, `email`, `username`, `senha`, `perfil`) VALUES
('Daniel', 'Dantas', 'Ipaumirim', 'CearÃƒÂƒÃ‚ÂƒÃƒÂ‚Ã‚Âƒ', 'daniel.dantas.ip18@gmail.com', 'xsrdandanx', '654123', '../perfis/2019.04.02-09.56.54.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
  ADD KEY `fk_usuario` (`usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
