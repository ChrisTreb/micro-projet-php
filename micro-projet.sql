-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 11 avr. 2020 à 10:34
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `micro-projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `avatar` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `nom`, `prenom`, `message`, `avatar`, `date`) VALUES
(1, 'Doe', 'John', 'Superbes photos, beau travail l&#39;ami!', 'https://www.tekoway.com/wp-content/uploads/2018/12/John-Doe.jpg', '2020-03-21 13:56:58'),
(2, 'Dylan', 'Bob', 'Nice!', 'https://www.rollingstone.fr/RS-WP-magazine/wp-content/uploads/2017/02/bob-dylan.jpg', '2020-03-21 16:54:29'),
(3, 'Face', 'Troll', 'Lololololololololo lololololOOOOO!', 'https://i.ebayimg.com/images/g/Dv0AAOSwl9BWL6v9/s-l300.jpg', '2020-03-26 12:44:05'),
(4, 'Risitas', 'El', 'Hahaha hiihihi hoohoho!', 'https://image.noelshack.com/fichiers/2017/13/1490831623-serieu.png', '2020-03-26 12:45:05'),
(5, 'Molloy', 'Kirstin ', 'Kinda weird...', 'images/user.png', '2020-03-21 13:56:58'),
(6, 'Brazier', 'Ghislaine', 'Magnifique travail ;)', 'https://d.wattpad.com/story_parts/350857879/images/14940130e11b37c5178341257270.jpg', '2020-03-21 14:05:51'),
(7, 'Chose', 'Machin', 'test', 'https://cdn-s-www.estrepublicain.fr/images/32EAFB03-E6A6-4F45-9115-ACE66663AF47/NW_detail_M/title-1576680650.jpg', '2020-03-26 13:15:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
