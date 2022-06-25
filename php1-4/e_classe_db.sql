-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 14 fév. 2022 à 22:18
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e_classe_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE `comptes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comptes`
--

INSERT INTO `comptes` (`id`, `name`, `email`, `password`) VALUES
(1, 'azeddine maslouh', 'azeddine@email.com', 'azeddine1234'),
(2, 'yasser', 'yasser@email.com', 'yasser1234');

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `langage` varchar(11) NOT NULL,
  `duree` varchar(11) NOT NULL,
  `prix` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `courses`
--

INSERT INTO `courses` (`id`, `langage`, `duree`, `prix`) VALUES
(2, 'CSS', '1ans', '1000dh'),
(4, 'Bootstrap', '2 mois', '500dh'),
(5, 'HTML', '5 MOI', '2000DH'),
(6, 'php', '5mois', '200DH'),
(7, 'sql', '1 semain', '100dh'),
(8, 'json', '2 semain', '100dh');

-- --------------------------------------------------------

--
-- Structure de la table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `payment_schedule` varchar(200) NOT NULL,
  `bill_number` int(200) NOT NULL,
  `amount_paid` varchar(155) NOT NULL,
  `balance_amount` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `payment_details`
--

INSERT INTO `payment_details` (`id`, `name`, `payment_schedule`, `bill_number`, `amount_paid`, `balance_amount`, `date`) VALUES
(1, 'karthi', 'first', 12223, '100,000', '500,000', '2022-01-05'),
(2, 'karthi', 'first', 12223, '100,000', '500,000', '2022-01-05'),
(3, 'karthi', 'first', 12223, '100,000', '500,000', '2022-01-05'),
(4, 'karthi', 'first', 12223, '100,000', '500,000', '2022-01-05'),
(5, 'salim', 'aaa', 76, '1000', '400', '2022-02-09'),
(8, 'anas', 'ahmad', 186, '2700', '400', '2022-02-01');

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `enroll_number` int(11) NOT NULL,
  `date_of_admission` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `enroll_number`, `date_of_admission`) VALUES
(2, 'azeddine', 'azed@email.com', 62107920, 132, '2022-02-15'),
(3, 'maslouh', 'maine@gmail.com', 62107920, 37, '2022-02-16'),
(4, 'dounia', 'ddine@gmail.com', 62107920, 4111, '2022-02-10'),
(5, 'salim', 'salim@email.com', 62107920, 13456789, '2022-02-15'),
(6, 'salman', 'salim@email.com', 62107920, 876543, '2022-02-07'),
(7, 'anas', 'ana@email.com', 62107920, 9876543, '2022-02-21'),
(8, 'ahmad', 'ahmad@email.com', 62107920, 987654, '2022-02-01'),
(9, 'tahas', 'taha@email.com', 62107920, 12345678, '2022-02-02');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comptes`
--
ALTER TABLE `comptes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
