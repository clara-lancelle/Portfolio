-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 10 juil. 2022 à 06:59
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`admin_id`, `password`) VALUES
('clara9', '$2y$10$uhUvS0wwoc7bVzO6B4xGM.hRttAnjkn6j39yzrHo6XzDFwYBlDXn.');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id_comment` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `contact_email` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL,
  `content` varchar(500) NOT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `FK` (`contact_email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id_comment`, `contact_email`, `date_time`, `content`) VALUES
(1, 'lancelle.clara@hotmail.com', '2022-06-28 11:02:07', 'test'),
(2, 'lancelle.clara@hotmail.com', '2022-06-28 09:23:00', 'hey'),
(7, 'lancelle.clara@gmail.com', '2022-06-28 09:26:46', 'toto'),
(12, 'langlois.nad@gmail.fr', '2022-06-28 09:32:40', 'aa'),
(13, 'langlois.nad@gmail.fr', '2022-06-28 09:36:18', 'aa'),
(14, 'langlois.nad@gmail.fr', '2022-06-28 09:36:28', 'aa');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `email` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`email`, `firstname`, `lastname`) VALUES
('lancelle.clara@gmail.com', 'clara', 'Lancelle'),
('lancelle.clara@hotmail.com', 'clara', 'lancelle'),
('langlois.nad@gmail.fr', 'Nadine', 'Langlois');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`contact_email`) REFERENCES `contact` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
