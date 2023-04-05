-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 04 avr. 2023 à 11:48
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chapristi`
--

-- --------------------------------------------------------

--
-- Structure de la table `catégorie`
--

CREATE TABLE `catégorie` (
  `id_catégorie` int(11) NOT NULL,
  `libellé_catégorie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `catégorie`
--

INSERT INTO `catégorie` (`id_catégorie`, `libellé_catégorie`) VALUES
(1, 'Tout'),
(2, 'Arbre à chat');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id_panier` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `quantité_panier` int(11) NOT NULL,
  `confirmation_panier` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id_panier`, `id_produit`, `id_utilisateur`, `quantité_panier`, `confirmation_panier`) VALUES
(7, 3, 1, 7, 0),
(8, 1, 1, 1, 0),
(9, 2, 1, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `personnels`
--

CREATE TABLE `personnels` (
  `id_personnel` int(11) NOT NULL,
  `nom_personnel` varchar(60) NOT NULL,
  `prenom_personnel` varchar(60) NOT NULL,
  `email_personnel` varchar(100) NOT NULL,
  `poste_personnel` varchar(100) NOT NULL,
  `photo_personnel` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personnels`
--

INSERT INTO `personnels` (`id_personnel`, `nom_personnel`, `prenom_personnel`, `email_personnel`, `poste_personnel`, `photo_personnel`) VALUES
(1, 'ihaddadene', 'wassil', 'wassil.ihaddadene@gmail.com', 'Président-directeur général', 'coughing-cat-dcbc3e50b235f7aa379.png'),
(2, 'ciapa', 'lea', 'lea.ciapa@gmail.com', 'Directrice Ressources Humaines', '4p3h78.jpg'),
(3, 'moulinet', 'baptiste', 'baptiste.moulinet@gmail.com', 'Directeur Marketing et ventes', 'e6e.jpg'),
(4, 'Salama', 'Mickael', 'Mickael.Salama@gmail.com', 'Directeur des systèmes d\'information', 'longcatsocial.png'),
(5, 'Couvreux', 'thalia', 'Thalia.Couvreux@gmail.com', 'Directrice administrative et financière', '3jb5w2.png');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(60) NOT NULL,
  `prix_produit` float NOT NULL,
  `note_produit` float NOT NULL,
  `stock_produit` int(11) NOT NULL,
  `id_catégorie` int(3) DEFAULT NULL,
  `image_produit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_produit`, `nom_produit`, `prix_produit`, `note_produit`, `stock_produit`, `id_catégorie`, `image_produit`) VALUES
(1, 'Jungle Gym Cat Tree 2.0', 250, 4.5, 0, 0, 'gym01_280x.jpg'),
(2, 'Mega Perch Cat Tree', 225, 4, 0, 0, 'megaperchcattreetowerwithtext_28.jpg'),
(3, 'Fruit Tart Cat Bed', 30, 4.2, 0, 0, 'FruitTartBednewcolor2_280x.jpg'),
(4, 'Milton\'s Cat Butt Beanie', 19.99, 4.8, 0, 0, 'miltcatbuttbeanieblackcolorspeck.jpg'),
(5, 'Luxe Cloud Cat Bed', 32, 4.1, 0, 0, 'cloudcatbedwhitebackground_360x.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `pseudo_utilisateur` varchar(30) NOT NULL,
  `email_utilisateur` varchar(80) NOT NULL,
  `mdp_utilisateur` varchar(60) NOT NULL,
  `role` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `pseudo_utilisateur`, `email_utilisateur`, `mdp_utilisateur`, `role`) VALUES
(1, 'test', 'test@gmail.com', '$2y$10$821hxyjNNs03F9dxVzhwbecCUDaR0SEBxDdhz8iq1DtDpTbUKRLfG', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `catégorie`
--
ALTER TABLE `catégorie`
  ADD PRIMARY KEY (`id_catégorie`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_panier`),
  ADD KEY `FK_produits_panier` (`id_produit`),
  ADD KEY `FK_utilisateur_panier` (`id_utilisateur`);

--
-- Index pour la table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`id_personnel`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `FK_categorie_produits` (`id_catégorie`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `catégorie`
--
ALTER TABLE `catégorie`
  MODIFY `id_catégorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id_panier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id_personnel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `FK_produits_panier` FOREIGN KEY (`id_produit`) REFERENCES `produits` (`id_produit`),
  ADD CONSTRAINT `FK_utilisateur_panier` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits` FOREIGN KEY (`id_catégorie`) REFERENCES `catégorie` (`id_catégorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
