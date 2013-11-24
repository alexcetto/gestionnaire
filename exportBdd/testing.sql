-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 24 Novembre 2013 à 17:07
-- Version du serveur: 5.6.14
-- Version de PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `testing`
--

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(64) NOT NULL,
  `page` int(11) DEFAULT NULL,
  `room` varchar(4) NOT NULL,
  `attending` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `company`
--

INSERT INTO `company` (`id`, `state`, `name`, `page`, `room`, `attending`) VALUES
(1, 1, 'Company 1', 1, '101', 1),
(2, 1, 'Company 2', 2, '101', 0),
(3, 0, 'ChangÃ©', 2, '104', 1),
(4, 1, 'Entreprise 3', 2, '102', 1),
(6, 0, 'Nomdel''entreprise', NULL, '104', 1),
(7, 1, 'entreprise', NULL, '104', 1),
(8, 0, 'Entreprise changÃ©e', NULL, '103', 1);

-- --------------------------------------------------------

--
-- Structure de la table `countvisitors`
--

CREATE TABLE IF NOT EXISTS `countvisitors` (
  `counter` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `name` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `rooms`
--

INSERT INTO `rooms` (`name`) VALUES
('101'),
('102'),
('104'),
('103');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pass` varchar(32) NOT NULL,
  `login` varchar(32) NOT NULL,
  `status` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `pass`, `login`, `status`) VALUES
(1, 'youpi', 'admin', 'admin'),
(2, 'youpo', 'mod1', 'mod');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
