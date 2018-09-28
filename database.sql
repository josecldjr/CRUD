-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Set-2018 às 03:58
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crud`
--
CREATE DATABASE IF NOT EXISTS `db_crud` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_crud`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_people`
--

CREATE TABLE `tb_people` (
  `id` int(11) NOT NULL,
  `creationTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `cellphone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_people`
--

INSERT INTO `tb_people` (`id`, `creationTime`, `lastUpdate`, `deleted`, `name`, `mail`, `telephone`, `cellphone`, `address`, `tag`) VALUES
(1, '2018-09-26 21:08:25', '2018-09-28 01:54:08', 1, 'João almeida', 'joaoalmeida@gmai.com', '3136327489', '31999478954', 'Rua das rosas, 18 - Bairro Botafogo', '0'),
(2, '2018-09-26 21:08:25', '2018-09-28 01:39:21', 0, 'Maria Helena', 'mari1223@hotmail.com', '3134569878', '31992456877', 'Rua Funcionários, 179 - Centro', '0'),
(27, '2018-09-28 01:40:49', '0000-00-00 00:00:00', 0, 'Henrique de Assis', 'hassis@hotmail.com', '', '', 'Rua imaginária', 'Funcionário'),
(28, '2018-09-28 01:41:13', '2018-09-28 01:42:46', 1, '', '', '', '', '', ''),
(29, '2018-09-28 01:42:58', '2018-09-28 01:55:50', 1, '', '', '', '', '', ''),
(30, '2018-09-28 01:43:59', '0000-00-00 00:00:00', 0, 'CI_fastStart', 'yen', '13213', '123213', '', ''),
(31, '2018-09-28 01:51:42', '2018-09-28 01:55:54', 1, '', '', '', '', '', ''),
(32, '2018-09-28 01:54:15', '2018-09-28 01:55:55', 1, '', '', '', '', '', ''),
(33, '2018-09-28 01:54:36', '2018-09-28 01:55:57', 1, '', '', '', '', '', ''),
(34, '2018-09-28 01:55:23', '2018-09-28 01:55:58', 1, '', '', '', '', '', ''),
(35, '2018-09-28 01:56:02', '2018-09-28 01:57:45', 1, '', '', '', '', '', ''),
(36, '2018-09-28 01:56:36', '2018-09-28 01:57:42', 1, 'aaaa', '', '', '', '', ''),
(37, '2018-09-28 01:57:34', '0000-00-00 00:00:00', 0, 'aaa', 'sdasd', '13213', '3213', '213123', 'Cliente');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_people`
--
ALTER TABLE `tb_people`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_people`
--
ALTER TABLE `tb_people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
