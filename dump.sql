-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Jul-2017 às 04:33
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sortmylife`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `rating` smallint(6) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `year` smallint(6) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `book`
--

INSERT INTO `book` (`id`, `title`, `rating`, `author`, `description`, `image`, `year`, `created_at`, `updated_at`) VALUES
(1, 'Admirável Mundo Novo', 5, 'Aldous Huxley', 'Admirável Mundo Novo (Brave New World na versão original em língua inglesa) é um romance distópico escrito por Aldous Huxley e publicado em 1932 que narra um hipotético futuro onde as pessoas são pré-condicionadas biologicamente e condicionadas psicologicamente a viverem em harmonia com as leis e regras sociais, dentro de uma sociedade organizada por castas.', 'https://amnprojeto.files.wordpress.com/2011/11/aldous.jpg', 1932, '2017-07-03 16:07:41', '2017-07-03 19:07:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `rating` smallint(6) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `year` smallint(6) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `movie`
--

INSERT INTO `movie` (`id`, `title`, `rating`, `author`, `description`, `image`, `year`, `created_at`, `updated_at`) VALUES
(1, 'O Poderoso Chefão', 5, 'Francis Ford Coppola', 'A saga conta a história de uma família mafiosa que luta para estabelecer sua supremacia na América depois da Segunda Guerra. Uma tentativa de assassinato deixa Vito Corleone incapacitado e força os filhos Michael e Sonny a assumirem os negócios.', 'https://images-na.ssl-images-amazon.com/images/M/MV5BZTRmNjQ1ZDYtNDgzMy00OGE0LWE4N2YtNTkzNWQ5ZDhlNGJmL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_UY268_CR3,0,182,268_AL_.jpg', 1972, '2017-07-09 23:07:41', '2017-07-09 19:07:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `serie`
--

CREATE TABLE IF NOT EXISTS `serie` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `rating` smallint(6) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `year` smallint(6) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `serie`
--

INSERT INTO `serie` (`id`, `title`, `rating`, `author`, `description`, `image`, `year`, `created_at`, `updated_at`) VALUES
(1, 'Stranger Things', 5, 'Matt Duffer', 'A série se passa na década de 1980, e é altamente tematizada pelos elementos culturais da época, com uma trilha sonora toda remetente aos marcantes sintetizadores da época e inúmeras referências a obras de Steven Spielberg,[2] John Carpenter[3] e Stephen King,[4] considerados as grandes inspirações dos Irmãos Duffer para a realização do projeto.[5] Na trama, um garoto desaparece misteriosamente na pequena cidade de Hawkins, Indiana, e faz seus amigos partirem por sua busca, que no caminho encontram uma estranha menina com poderes telecinéticos.', 'https://upload.wikimedia.org/wikipedia/commons/3/38/Stranger_Things_logo.png', 2016, '2017-07-09 23:07:41', '2017-07-09 22:07:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

