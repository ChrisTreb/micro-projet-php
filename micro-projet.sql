-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 22 mars 2020 à 13:49
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `nom`, `prenom`, `message`, `avatar`, `date`) VALUES
(1, 'Doe', 'John', 'Superbes photos, beau travail l&#39;ami!', 'https://www.tekoway.com/wp-content/uploads/2018/12/John-Doe.jpg', '2020-03-21 14:56:58'),
(2, 'Dylan', 'Bob', 'Nice!', 'https://www.rollingstone.fr/RS-WP-magazine/wp-content/uploads/2017/02/bob-dylan.jpg', '2020-03-21 17:54:29'),
(3, 'Astier', 'Raoul', 'Trop naze tes images LOOOL, les vrais artistes c&#39;est les tunners de bagnoles!', 'https://media.gqmagazine.fr/photos/5b9913e5ee2d49001149942d/16:9/w_1920,c_limit/l___evolution_du_style_beauf_depuis_1940_1421.jpeg', '2020-03-21 15:40:20'),
(4, 'Molloy', 'Kirstin ', 'Kinda weird...', 'images/user.png', '2020-03-21 14:56:58'),
(5, 'Brazier', 'Ghislaine', 'Magnifique travail ;)', 'https://d.wattpad.com/story_parts/350857879/images/14940130e11b37c5178341257270.jpg', '2020-03-21 15:05:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
