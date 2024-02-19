-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 06 fév. 2024 à 22:19
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `freakitforum`
--
CREATE DATABASE IF NOT EXISTS `freakitforum` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `freakitforum`;

-- --------------------------------------------------------

--
-- Structure de la table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_topic` int NOT NULL,
  `id_auteur` int NOT NULL,
  `reponse` text NOT NULL,
  `banner` varchar(256) NOT NULL,
  `pseudo_auteur` text NOT NULL,
  `date_publication` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `answers`
--

INSERT INTO `answers` (`id`, `id_topic`, `id_auteur`, `reponse`, `banner`, `pseudo_auteur`, `date_publication`) VALUES
(1, 1, 3, 'Bonjour oui tu peux trouver dans une boutique situé à Clémenceau  ;-)\r\n', 'jolie_fleur', 'Ana47', '06/02/2024 22:53:52'),
(2, 3, 2, 'super je vais m&#039;inscrire j&#039;ai hâte  :)', 'the_World', 'silvere', '06/02/2024 22:56:08'),
(3, 1, 2, 'super je te remercie pour ton aide ', 'the_World', 'silvere', '06/02/2024 22:56:50');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cat` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `cat`) VALUES
(4, 'Halloween'),
(5, 'Cosplay'),
(6, 'jeux'),
(7, 'Concours'),
(8, 'Infos');

-- --------------------------------------------------------

--
-- Structure de la table `topic`
--

DROP TABLE IF EXISTS `topic`;
CREATE TABLE IF NOT EXISTS `topic` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sujet` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `banner` varchar(256) NOT NULL,
  `id_auteur` int NOT NULL,
  `pseudo_auteur` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_publication` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `close` tinyint(1) NOT NULL DEFAULT '1',
  `id_cat` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_cat` (`id_cat`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `topic`
--

INSERT INTO `topic` (`id`, `title`, `sujet`, `banner`, `id_auteur`, `pseudo_auteur`, `date_publication`, `close`, `id_cat`) VALUES
(1, 'costume ', 'Des costumes de vampire qui connait ? :)', 'the_World', 2, 'silvere', '06/02/2024 22:51:10', 1, 4),
(2, 'Besoin d&#039;accessoire ', 'Bonjour qui connait une boutique où acheter des accessoires pour costume d&#039;anime', 'the_World', 2, 'silvere', '06/02/2024 22:52:26', 2, 5),
(3, 'cosplayland 2022', 'Les insciptions pour la cosplayland 2022 ont déjà débuter vous inscrire ici https://www.google.com/ :)', 'jolie_fleur', 3, 'Ana47', '06/02/2024 22:55:20', 1, 7);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(44) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(44) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `passwords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `birthday` date NOT NULL,
  `banner` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT '1',
  `roles` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `email`, `passwords`, `birthday`, `banner`, `statut`, `roles`) VALUES
(1, 'admin', 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2022-10-23', 'I&#039;m admin', 1, 'admin'),
(2, 'silvere', 'silvereurtel@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1999-12-23', 'the_World', 1, 'user'),
(3, 'Ana47', 'anast@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2002-07-25', 'jolie_fleur', 1, 'user'),
(4, 'rogust01', 'rogust@yahoo.fr', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1994-09-23', 'Rockbaby', 1, 'user'),
(5, 'jeniflower', 'jeni@outlook.fr', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1999-06-12', 'sweetlife', 1, 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
