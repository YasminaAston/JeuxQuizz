-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 27 jan. 2021 à 10:36
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet2`
--

-- --------------------------------------------------------

--
-- Structure de la table `Admin`
--

CREATE TABLE `Admin` (
  `id_admin` int(15) NOT NULL,
  `email` int(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `id_role` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Category`
--

CREATE TABLE `Category` (
  `id_category` int(15) NOT NULL,
  `type_category` varchar(100) NOT NULL,
  `id_question` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Difficulte`
--

CREATE TABLE `Difficulte` (
  `id_difficulte` int(15) NOT NULL,
  `easy` int(2) NOT NULL,
  `medium` int(2) NOT NULL,
  `difficulte` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Question`
--

CREATE TABLE `Question` (
  `id_question` int(15) NOT NULL,
  `question_question` varchar(100) NOT NULL,
  `id_reponse` int(15) NOT NULL,
  `correcte_reponse` varchar(100) NOT NULL,
  `id_difficulte` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Quizz`
--

CREATE TABLE `Quizz` (
  `id_quizz` int(15) NOT NULL,
  `question_quizz` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Quizz_Reponse_User`
--

CREATE TABLE `Quizz_Reponse_User` (
  `id_quizz_reponse` int(15) NOT NULL,
  `id_quizz` int(15) NOT NULL,
  `id_reponse` int(15) NOT NULL,
  `is_correcte` tinyint(1) NOT NULL,
  `id_user_reponse` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Reponse`
--

CREATE TABLE `Reponse` (
  `id_reponse` int(15) NOT NULL,
  `reponse_reponse` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Role`
--

CREATE TABLE `Role` (
  `id_role` int(15) NOT NULL,
  `name_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Score`
--

CREATE TABLE `Score` (
  `id_score` int(15) NOT NULL,
  `score` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `Id_user` int(15) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `id_role` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `User_Reponse`
--

CREATE TABLE `User_Reponse` (
  `id_user_reponse` int(15) NOT NULL,
  `reponse_user` varchar(100) NOT NULL,
  `id_user` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_role` (`id_role`);

--
-- Index pour la table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id_category`),
  ADD KEY `question` (`id_question`),
  ADD KEY `id_question` (`id_question`);

--
-- Index pour la table `Difficulte`
--
ALTER TABLE `Difficulte`
  ADD PRIMARY KEY (`id_difficulte`);

--
-- Index pour la table `Question`
--
ALTER TABLE `Question`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `reponse_question` (`id_reponse`),
  ADD KEY `id_difficulte` (`id_difficulte`);

--
-- Index pour la table `Quizz`
--
ALTER TABLE `Quizz`
  ADD PRIMARY KEY (`id_quizz`),
  ADD KEY `question_quizz` (`question_quizz`);

--
-- Index pour la table `Quizz_Reponse_User`
--
ALTER TABLE `Quizz_Reponse_User`
  ADD PRIMARY KEY (`id_quizz_reponse`),
  ADD KEY `id_quizz` (`id_quizz`),
  ADD KEY `id_reponse` (`id_reponse`),
  ADD KEY `is_correcte` (`is_correcte`),
  ADD KEY `id_user_reponse` (`id_user_reponse`);

--
-- Index pour la table `Reponse`
--
ALTER TABLE `Reponse`
  ADD PRIMARY KEY (`id_reponse`);

--
-- Index pour la table `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `Score`
--
ALTER TABLE `Score`
  ADD PRIMARY KEY (`id_score`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`Id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- Index pour la table `User_Reponse`
--
ALTER TABLE `User_Reponse`
  ADD PRIMARY KEY (`id_user_reponse`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Category`
--
ALTER TABLE `Category`
  MODIFY `id_category` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Difficulte`
--
ALTER TABLE `Difficulte`
  MODIFY `id_difficulte` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Question`
--
ALTER TABLE `Question`
  MODIFY `id_question` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Quizz`
--
ALTER TABLE `Quizz`
  MODIFY `id_quizz` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Quizz_Reponse_User`
--
ALTER TABLE `Quizz_Reponse_User`
  MODIFY `id_quizz_reponse` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Reponse`
--
ALTER TABLE `Reponse`
  MODIFY `id_reponse` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Role`
--
ALTER TABLE `Role`
  MODIFY `id_role` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Score`
--
ALTER TABLE `Score`
  MODIFY `id_score` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `Id_user` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `User_Reponse`
--
ALTER TABLE `User_Reponse`
  MODIFY `id_user_reponse` int(15) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Admin`
--
ALTER TABLE `Admin`
  ADD CONSTRAINT `Admin_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `Role` (`id_role`);

--
-- Contraintes pour la table `Category`
--
ALTER TABLE `Category`
  ADD CONSTRAINT `Category_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `Question` (`id_question`);

--
-- Contraintes pour la table `Question`
--
ALTER TABLE `Question`
  ADD CONSTRAINT `Question_ibfk_1` FOREIGN KEY (`id_reponse`) REFERENCES `Reponse` (`id_reponse`),
  ADD CONSTRAINT `Question_ibfk_2` FOREIGN KEY (`id_difficulte`) REFERENCES `Difficulte` (`id_difficulte`);

--
-- Contraintes pour la table `Quizz_Reponse_User`
--
ALTER TABLE `Quizz_Reponse_User`
  ADD CONSTRAINT `Quizz_Reponse_User_ibfk_1` FOREIGN KEY (`id_quizz`) REFERENCES `Quizz` (`id_quizz`),
  ADD CONSTRAINT `Quizz_Reponse_User_ibfk_2` FOREIGN KEY (`id_reponse`) REFERENCES `Reponse` (`id_reponse`),
  ADD CONSTRAINT `Quizz_Reponse_User_ibfk_3` FOREIGN KEY (`id_user_reponse`) REFERENCES `User_Reponse` (`id_user_reponse`);

--
-- Contraintes pour la table `User`
--
ALTER TABLE `User`
  ADD CONSTRAINT `User_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `Role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
