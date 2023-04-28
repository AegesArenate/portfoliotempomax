-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 28 avr. 2023 à 02:27
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfoliomaxtempo`
--

-- --------------------------------------------------------

--
-- Structure de la table `form`
--

CREATE TABLE `form` (
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `form`
--

INSERT INTO `form` (`email`, `username`, `subject`, `message`) VALUES
('admin@admin.fr', 'Admin', 'Admin rules', 'I want to become bigger'),
('jfqjif@fzfij.com', 'Jjj', 'fzefjz', 'zfzqfvz');

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

CREATE TABLE `presentation` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `presentation`
--

INSERT INTO `presentation` (`id`, `username`, `picture`, `description`) VALUES
(5, 'Maxence', 'img/Maxence.png', 'Maxence Senetaire, 20 ans en première année à Guardia CyberSecurity School, possédant deux titres professionnels en informatique.'),
(7, 'Mes objectifs', 'img/finlande.jpg', 'Je rêve de vivre en finlande mettant à profit mes compétences de réseau pour une banque tout en restant chez moi.'),
(8, 'Un métier', 'img/banque.jpg', 'Protéger une banque, s\'occuper du réseau et manager une équipe. ');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description1` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `parallax` varchar(255) NOT NULL,
  `description2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `title`, `description1`, `picture`, `parallax`, `description2`) VALUES
(3, 'Projet 1 - Communication Interpersonnelle', 'Comment améliorer l’aisance orale des différents apprenants pour qu’ils puissent se sentir à l’aise lors de leur grand oral ?', 'img/3.jpg', 'img/1.jpg', 'Parler aisément en public, il saura soutenir et faire ressortir les différents points positifs de son éloquence. Il saura répondre aux questions et défendre son point de vue si il est mis en cause.\r\n'),
(4, 'Projet 2 - Création d\'un réseau entreprise', 'Création d’un réseau d’entreprise séparé en plusieurs zones et mise en place de différents services \r\ninternes et externes.\r\nDans ce projet nous allons mettre en place un réseau informatique pour une entreprise en utilisant \r\nune architecture qui sépare les réseaux en différentes zones distinctes. Cette approche est souvent \r\nutilisée pour améliorer la sécurité des communications au sein de l\'entreprise.\r\nUne fois la structure du réseau mise en place, plusieurs services seront installés dans les différentes \r\nzones pour simuler un environnement d’entreprise complet.\r\nL’installation de ces différents services permettra de tester et de valider la configuration du réseau et \r\nde s’assurer que les communications entre les différentes zones soient fonctionnelles et sécurisées.', 'img/6.jpg', 'img/4.jpg', 'Quels sont les avantages et les enjeux de la création d\'un réseau d\'entreprise séparé en différentes \r\nzones réseaux ? Quels sont les différents services qui peuvent être mis en place dans les différentes \r\nzones ?\r\n\r\nCréer un réseau d’entreprise séparé en plusieurs zones réseaux, sécuriser les communications entre \r\nles différentes zones réseaux, exposer des services internes (par exemple un serveur WEB). Configurer \r\ndes services réseaux tel que : serveur DHCP, DNS.'),
(5, 'Projet 3 - Initiation à l\'algorithmique avec Python', 'Première Semaine : Vous allez découvrir le pseudo-code, nous allons créer ensemble  différents algorithmes sur LARP et sur papier pour que vous compreniez comment  créer des structures conditionnelles, comment penser un logiciel et à terme,  comment penser un jeu. Vous devrez à la fin de la première semaine être capable de  créer un algorithme reprenant le jeu du Pierre Feuille Ciseau \r\nDeuxième semaine : Maintenant que vous maîtrisez le pseudo-code et l’algorithme,  nous allons voir ensemble comment fonctionne le Python, nous allons reprendre nos  pseudo-code et nous allons le translater en Python, vous allez donc reprendre votre  projet de Pierre feuille ciseau, Vous allez donc développer votre premier jeu en  Python. Mais pas que ! Ce développement devrait vous prendre une petite poignée  d’heures, vous allez ensuite créer le jeu du morpion, vous allez donc créer l’algorithme  et le développer en python.', 'img/4.jpg', 'img/12.jpg', 'A l’issue du projet, l’étudiant sera capable de : \r\n● Comprendre les attentes de la pédagogie par projet. \r\n● Connaître les bonnes pratiques de développement. \r\n● Comprendre les principes de base de l’algorithmique. \r\n● Rédiger des algorithmes de base.\r\n● Dérouler des algorithmes sur papier.');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `is_admin`) VALUES
(2, 'admin', 'admin@admin.fr', '$2y$10$y2Ghn6PoyYqkI7SrpYUHQ.TM/3zwwkOTjpZnhZT6jhzt0326UcS6G', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `presentation`
--
ALTER TABLE `presentation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `presentation`
--
ALTER TABLE `presentation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
