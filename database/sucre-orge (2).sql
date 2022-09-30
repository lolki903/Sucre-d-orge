-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : database:3306
-- Généré le : jeu. 29 sep. 2022 à 07:38
-- Version du serveur : 8.0.30
-- Version de PHP : 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sucre-orge`
--

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

CREATE TABLE `status` (
  `id` int NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `status`
--

INSERT INTO `status` (`id`, `type`) VALUES
(1, 'EN COURS'),
(2, 'REFUSÉ'),
(3, 'VALIDÉ');

-- --------------------------------------------------------

--
-- Structure de la table `trades`
--

CREATE TABLE `trades` (
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `message` varchar(180) NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `lastname`, `firstname`, `email`, `password`, `type`) VALUES
(1, 'A', 'A', 'A@my-digital-school.org', 'b42b6566930723d8ae89ccdce2cf99814100ee90ac42046c976652b635cc2ba444b995b02cdc50578e701ebaf6be9170b3d0447f643c6740e00f36540b9bdffc', 1),
(2, 'samy', 'kebli', 'samy-samy@my-digital-school.org', '549326536e0efa575479a79b450cb52c16869d12a994201615ac9b777284f70d23686facc3e0a1db185eca9aae010c525f7bbb4e1f6205d6500f45a62e21353b', 0),
(3, 'JULES', 'JULES', 'JULES@my-digital-school.org', '277c20257940ee1191340cb8f0326e97a0d883e20b6a5513f9b05800e624fe600febd9692a3b7016b1e102c90ba4c1ee2465ed7e4de3c3660cd9d304ad7e7b91', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
