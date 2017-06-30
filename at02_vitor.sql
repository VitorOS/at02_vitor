-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Jun-2017 às 22:14
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `at02_vitor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `Nome` varchar(65) NOT NULL,
  `Sobre Nome` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id_user`, `Nome`, `Sobre Nome`) VALUES
(1, 'Rogerio Lucio', 'da Silva');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_login`
--

CREATE TABLE `user_login` (
  `id_login` int(3) NOT NULL,
  `email` varchar(44) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `id_user` int(3) NOT NULL,
  `password` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user_login`
--

INSERT INTO `user_login` (`id_login`, `email`, `cpf`, `id_user`, `password`) VALUES
(1, 'rogerioluciodasilva@hotmail.com', '453.314.198-60', 1, 'b46c1de1c914eca2dd439388b8422638');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_doc`
--

CREATE TABLE `usuario_doc` (
  `id_doc` int(11) NOT NULL,
  `nome_doc` varchar(55) NOT NULL,
  `id_usuario` varchar(55) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `cpf_cadastro` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario_doc`
--

INSERT INTO `usuario_doc` (`id_doc`, `nome_doc`, `id_usuario`, `data_cadastro`, `cpf_cadastro`) VALUES
(1, 'dev.txt', '1', '0000-00-00 00:00:00', '  453.314.198-60 '),
(2, 'dev.txt', '1', '0000-00-00 00:00:00', '  453.314.198-60 '),
(3, 'dev.txt', '1', '0000-00-00 00:00:00', '  453.314.198-60 '),
(4, 'dev.txt', '1', '2017-06-25 21:32:19', '  453.314.198-60 '),
(5, 'dev.txt', '1', '2017-06-25 21:32:25', '  453.314.198-60 '),
(6, 'envio-vazio.txt', '1', '2017-06-25 21:59:39', '  453.314.198-62');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `usuario_doc`
--
ALTER TABLE `usuario_doc`
  ADD PRIMARY KEY (`id_doc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id_login` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuario_doc`
--
ALTER TABLE `usuario_doc`
  MODIFY `id_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
