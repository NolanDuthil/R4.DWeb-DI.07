-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql
-- Généré le : ven. 29 mars 2024 à 08:57
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lego_store`
--

-- --------------------------------------------------------

--
-- Structure de la table `brick`
--

CREATE TABLE `brick` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collection_id_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `brick`
--

INSERT INTO `brick` (`id`, `name`, `price`, `image`, `collection_id_id`) VALUES
(1, 'Mini upper', 1.45, '6460998.jpg', 1),
(2, 'Mini head', 0.26, '6446937.jpg', 1),
(3, 'Turtle', 4.02, '6440966.jpg', 2);

-- --------------------------------------------------------

--
-- Structure de la table `brick_collection`
--

CREATE TABLE `brick_collection` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `brick_collection`
--

INSERT INTO `brick_collection` (`id`, `name`) VALUES
(1, 'Figurines'),
(2, 'Nature'),
(3, 'Meubles');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240306094253', '2024-03-06 09:44:49', 125),
('DoctrineMigrations\\Version20240313090340', '2024-03-13 09:04:06', 156),
('DoctrineMigrations\\Version20240313093451', '2024-03-13 09:35:02', 180),
('DoctrineMigrations\\Version20240313095503', '2024-03-13 09:56:06', 130),
('DoctrineMigrations\\Version20240329075329', '2024-03-29 07:56:37', 147),
('DoctrineMigrations\\Version20240329082602', '2024-03-29 08:26:52', 127),
('DoctrineMigrations\\Version20240329082819', '2024-03-29 08:32:23', 135);

-- --------------------------------------------------------

--
-- Structure de la table `lego`
--

CREATE TABLE `lego` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `pieces` int NOT NULL,
  `box_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lego_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collection_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `lego`
--

INSERT INTO `lego` (`id`, `name`, `description`, `price`, `pieces`, `box_image`, `lego_image`, `collection_id`) VALUES
(12, 'La coccinelle Volkwagen', 'Construis une réplique LEGO® Creator Expert de l\'automobile la plus populaire au monde. Ce magnifique modèle LEGO est plein de détails authentiques qui capturent le charme et la personnalité de la voiture, notamment un coloris bleu ciel, des ailes arrondies, des jantes blanches avec des enjoliveurs caractéristiques, des phares ronds et des clignotants montés sur les ailes.', 94.99, 1167, 'LEGO_10252_Box.png', 'LEGO_10252_Main.jpg', 2),
(13, 'La voiture rapide', 'Prends la route avec cette splendide voiture de sport, avec des coloris jaune, blanc et noir, un énorme aileron, des jantes élégantes avec des pneus profil bas, un capot qui s\'ouvre et un moteur détaillé. Ouvre les portes ciseaux, mets-toi au volant, ouvre le toit et profite du soleil !', 19.99, 222, 'LEGO_31046_Box.png', 'LEGO_31046_Main.jpg', 1),
(14, 'Les aventures sur l\'île', 'Trouve une carte dans une bouteille et aventure-toi vers une île tropicale lointaine à bord de l’hydravion avec ses flotteurs d’atte rrissage et ses coloris jaune vif, blanc et bleu foncé. Charge le compartiment à marchandises, ouvre le cockpit et monte à bord, puis fais tourner l\'énorme hélice et envole-toi dans les airs. Utilise tes talents de pilote pour localiser l\'île \'', 29.99, 359, 'LEGO_31064_Box.png', 'LEGO_31064_Main.jpg', 1),
(15, 'Le robot explorateur', 'Impressionne tes amis avec ce modèle génial ! Ce robot explorateur comprend des coloris bleu, noir et gris, des yeux vert vif, des chenilles qui fonctionnent, une tête et un corps qui tournent, et des bras mobiles avec des pinces et un projecteur qui fonctionnent. ', 19.99, 205, 'LEGO_31062_Box.png', 'LEGO_31062_Main.jpg', 1),
(16, 'La maison de ville', 'Monte les marches vers la porte bleue de cette charmante maison à trois étages. Tu découvriras à l’intérieur de nombreuses fonctions, notamment un salon confortable avec une télé à écran plat et un canapé, plus une chambre avec une cheminée et une cuisine détaillée. Prends l\'escalier vers le deuxième étage et tu trouveras une chambre confortable.', 54.99, 566, 'LEGO_31065_Box.png', 'LEGO_31065_Main.jpg', 1),
(17, 'Poe\'s X-Wing Fighter', 'Lutte contre les forces du Premier Ordre avec le X-Wing Fighter de Poe. Ce starfighter personnalisé est plein de fonctions, avec notamment 4 fusils à ressorts, 2 fusils à tenons, un train d\'atterrissage rétractable, des ailes qui s\'ouvrent, un cockpit qui s\'ouvre avec de la place pour une figurine, et de la place derrière pour le droïde astromech BB-8.', 89.99, 717, 'LEGO_75102_Box.png', 'LEGO_75102_Main.jpg', 3),
(18, 'Millenium Falcon', 'Ce nouveau modèle LEGO® Star Wars Millennium Falcon est le plus grand et le plus détaillé jamais conçu. En réalité, avec ses 7 500 pièces, c’est tout simplement l’un des plus grands modèles LEGO ! Cette fantastique version LEGO de l’inoubliable cargo Corellien de Han Solo présente les moindres détails dont rêvent tous les fans de Star Wars, quel que soit leur âge.', 799.99, 7541, 'LEGO_75192_Box.jpg', 'LEGO_75192_Main.png', 3);

-- --------------------------------------------------------

--
-- Structure de la table `lego_collection`
--

CREATE TABLE `lego_collection` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `lego_collection`
--

INSERT INTO `lego_collection` (`id`, `name`) VALUES
(1, 'Creator'),
(2, 'Creator Expert'),
(3, 'Star Wars'),
(4, 'Harry Potter');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `brick`
--
ALTER TABLE `brick`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `brick_collection`
--
ALTER TABLE `brick_collection`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `lego`
--
ALTER TABLE `lego`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E9191FC5514956FD` (`collection_id`);

--
-- Index pour la table `lego_collection`
--
ALTER TABLE `lego_collection`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `brick`
--
ALTER TABLE `brick`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `brick_collection`
--
ALTER TABLE `brick_collection`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `lego`
--
ALTER TABLE `lego`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `lego_collection`
--
ALTER TABLE `lego_collection`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `lego`
--
ALTER TABLE `lego`
  ADD CONSTRAINT `FK_E9191FC5514956FD` FOREIGN KEY (`collection_id`) REFERENCES `lego_collection` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
