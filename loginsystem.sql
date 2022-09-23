-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Set-2022 às 23:51
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loginsystem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE `eventos` (
  `titulo` varchar(200) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `imagem` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`titulo`, `descricao`, `imagem`) VALUES
('Algorithm 2023', ' 10 a 12 de fevereiro', 'https://www.showmetech.com.br/wp-content/uploads/2021/12/algorithm-conference-2021.jpg'),
('Mobile World Congress', ' 28 de fevereiro a 3 de março', 'https://www.showmetech.com.br/wp-content/uploads/2021/12/mwc19-recap-featured-1024x673.jpg'),
('evento exemplo', ' descricao exemplo', 'https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/Reuters_Direct_Media/BrazilOnlineReportTechnologyNews/tagreuters.com2022binary_LYNXMPEI880TA-FILEDIMAGE.jpg?w=350&h=195&crop=1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos2`
--

CREATE TABLE `eventos2` (
  `id` int(11) NOT NULL,
  `image` longblob NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `desscricao` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `titulo` varchar(300) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `imagem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`titulo`, `descricao`, `imagem`) VALUES
('Atualização do Windows 11', ' A atualização, que está disponível gratuitamente para usuários atuais do Windows 11, foi lançada hoje em mais de 190 países.', 'https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2022/09/hypatia-h_099c9460f194b61112002e513ce20b89-h_e8028811e6fcce6b3a4bd6de1c56d68a.jpg?w=350&h=195&crop=1'),
('Cientista criam algoritmo para medir oxigênio', ' A técnica considerada “simples” envolve voluntários colocando o dedo sobre a câmera e o flash de um celular, que, por sua vez, utilizou um algoritmo de aprendizado', 'https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2022/09/Low-Res_SpO2smartphone003.JPG.png?w=350&h=195&crop=1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `PES_ID` int(11) NOT NULL,
  `PES_IMG` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'Brendow', 'brendowcaval@gmail.com', '06964dce9addb1c5cb5d6e3d9838f733', '2022-09-05 00:25:10'),
(2, 'Matheus', 'matheus@gmail.com', '08c65701402d5d2ff7e47b2285b14ee7', '2022-09-05 16:18:56'),
(3, 'Matheus', 'matheus@gmail.com', '08c65701402d5d2ff7e47b2285b14ee7', '2022-09-05 16:20:14'),
(4, 'ff', '', 'd41d8cd98f00b204e9800998ecf8427e', '2022-09-05 16:20:49'),
(5, 'exemplo', 'exemplo@gmail.com', 'd7a84628c025d30f7b2c52c958767e76', '2022-09-21 17:02:42'),
(6, 'brendowcavalcante', 'brendow.c@yahoo.com', '4607e782c4d86fd5364d7e4508bb10d9', '2022-09-22 23:56:30');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `eventos2`
--
ALTER TABLE `eventos2`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`PES_ID`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `eventos2`
--
ALTER TABLE `eventos2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `PES_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
