-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 08 Mars 2016 à 23:56
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `courselandv2`
--

-- --------------------------------------------------------

--
-- Structure de la table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id_course` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_course`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `course`
--

INSERT INTO `course` (`id_course`, `name`) VALUES
(1, 'Le fonctionnement des sites web'),
(2, 'Les sites statiques et dynamiques'),
(3, 'html et css'),
(4, 'derivee'),
(5, 'ensemble'),
(6, 'physique quantique'),
(7, 'principe incertitude'),
(8, 'tableau periodique'),
(9, 'chimie nucleaire');

-- --------------------------------------------------------

--
-- Structure de la table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `id_purchase` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  PRIMARY KEY (`id_purchase`),
  KEY `id_user` (`id_user`),
  KEY `id_course` (`id_course`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(16) NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `solde` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
