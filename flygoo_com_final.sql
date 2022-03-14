-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 14 mars 2022 à 14:23
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `flygoo.com`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `adminname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'manager', 'manager123');

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `id_res` int(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `departure` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `date` date DEFAULT NULL,
  `id_flight` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `booking`
--

INSERT INTO `booking` (`id`, `id_res`, `firstname`, `lastname`, `age`, `departure`, `destination`, `date`, `id_flight`, `id_user`) VALUES
(161, 1, 'red', 'Santiago', 3, 'marakch', 'london', '2022-02-09', 3, 4),
(162, 1, 'red', 'Santiago', 3, 'london', 'marakch', '2022-02-28', 3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `flight`
--

CREATE TABLE `flight` (
  `id` int(10) NOT NULL,
  `departure` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `direction_type` enum('round-trip','one-way') NOT NULL,
  `depart_date` date NOT NULL,
  `return_date` date DEFAULT NULL,
  `seats` int(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `flight`
--

INSERT INTO `flight` (`id`, `departure`, `destination`, `direction_type`, `depart_date`, `return_date`, `seats`, `price`) VALUES
(3, 'marakch', 'london', 'round-trip', '2022-02-09', '2022-02-28', 15, 7800),
(22, 'kar', 'koln', 'round-trip', '2022-02-06', '2022-03-06', 1, 28),
(63, 'Rerum animi officia', 'Pariatur Irure aliq', 'one-way', '2008-01-09', '1982-03-02', 45, 558);

-- --------------------------------------------------------

--
-- Structure de la table `passenger`
--

CREATE TABLE `passenger` (
  `id` int(11) NOT NULL,
  `idreservation` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `age`, `username`, `password`) VALUES
(4, 'reda', 'bensaltana', 20, 'redy', 'hi'),
(5, 'abdel', 'abdel', 9, 'abdo', 'pass'),
(6, 'reda', 'bensaltana', 18, 'bens', 'bens');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `if j foreigner` (`id_flight`),
  ADD KEY `if u reservation` (`id_user`);

--
-- Index pour la table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`id`),
  ADD KEY `if k foreigner` (`idreservation`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT pour la table `flight`
--
ALTER TABLE `flight`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT pour la table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `if j foreigner` FOREIGN KEY (`id_flight`) REFERENCES `flight` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `if u reservation` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `passenger`
--
ALTER TABLE `passenger`
  ADD CONSTRAINT `if k foreigner` FOREIGN KEY (`idreservation`) REFERENCES `booking` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
