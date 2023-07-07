-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 05 juil. 2023 à 10:35
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
-- Base de données : `cogip`
--

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `tva` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Déchargement des données de la table `companies`
--

INSERT INTO companies (id, type_id, name, country, tva, created_at, updated_at)
VALUES
(1, 1, 'Company A', 'France', 'FR123456789', '2023-07-07 10:00:00', '2023-07-07 10:00:00'),
(2, 2, 'Company B', 'Germany', 'DE987654321', '2023-07-07 11:00:00', '2023-07-07 11:00:00'),
(3, 1, 'Company C', 'United States', 'US246813579', '2023-07-07 12:00:00', '2023-07-07 12:00:00'),
(4, 3, 'Company D', 'Canada', 'CA135792468', '2023-07-07 13:00:00', '2023-07-07 13:00:00'),
(5, 2, 'Company E', 'Australia', 'AU987654321', '2023-07-07 14:00:00', '2023-07-07 14:00:00'),
(6, 1, 'Company F', 'Spain', 'ES123456789', '2023-07-07 15:00:00', '2023-07-07 15:00:00'),
(7, 2, 'Company G', 'Italy', 'IT987654321', '2023-07-07 16:00:00', '2023-07-07 16:00:00'),
(8, 3, 'Company H', 'Brazil', 'BR135792468', '2023-07-07 17:00:00', '2023-07-07 17:00:00'),
(9, 1, 'Company I', 'United Kingdom', 'UK123456789', '2023-07-07 18:00:00', '2023-07-07 18:00:00'),
(10, 2, 'Company J', 'Netherlands', 'NL987654321', '2023-07-07 19:00:00', '2023-07-07 19:00:00');

--
-- Structure de la table `contacts`
--

-- --------------------------------------------------------

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO contacts (id, name, company_id, email, phone, created_at, updated_at) VALUES
(1, 'John', 12345, 'john@example.com', '123-456-7890', '2023-07-05 10:04:31', '2023-07-05 10:04:31'),
(2, 'Jane', 67890, 'jane@example.com', '987-654-3210', '2023-07-05 10:04:31', '2023-07-05 10:04:31'),
(3, 'Mark', 54321, 'mark@example.com', '555-123-4567', '2023-07-05 10:04:31', '2023-07-05 10:04:31'),
(4, 'Amy', 98765, 'amy@example.com', '999-888-7777', '2023-07-05 10:04:31', '2023-07-05 10:04:31'),
(5, 'Peter', 23456, 'peter@example.com', '111-222-3333', '2023-07-05 10:04:31', '2023-07-05 10:04:31'),
(6, 'Sarah', 87654, 'sarah@example.com', '444-555-6666', '2023-07-05 10:04:31', '2023-07-05 10:04:31'),
(7, 'Michael', 76543, 'michael@example.com', '777-888-9999', '2023-07-05 10:04:31', '2023-07-05 10:04:31'),
(8, 'Emily', 43210, 'emily@example.com', '222-333-4444', '2023-07-05 10:04:31', '2023-07-05 10:04:31'),
(9, 'David', 34567, 'david@example.com', '666-777-8888', '2023-07-05 10:04:31', '2023-07-05 10:04:31'),
(10, 'Lisa', 87654, 'lisa@example.com', '999-000-1111', '2023-07-05 10:04:31', '2023-07-05 10:04:31');

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `invoices`
--

INSERT INTO `invoices` (`id`, `id_company`, `created_at`, `updated_at`) VALUES
(1, 101, '2023-06-01 10:00:00', '2023-06-02 14:30:00'),
(2, 102, '2023-06-02 09:15:00', '2023-06-03 11:45:00'),
(3, 103, '2023-06-03 12:30:00', '2023-06-04 16:00:00'),
(4, 101, '2023-06-04 11:00:00', '2023-06-05 15:30:00'),
(5, 104, '2023-06-05 14:45:00', '2023-06-06 18:15:00'),
(6, 105, '2023-06-06 16:30:00', '2023-06-07 20:00:00'),
(7, 102, '2023-06-07 13:15:00', '2023-06-08 17:45:00'),
(8, 103, '2023-06-08 10:30:00', '2023-06-09 14:00:00'),
(9, 105, '2023-06-09 15:45:00', '2023-06-10 19:15:00'),
(10, 104, '2023-06-10 11:30:00', '2023-06-11 15:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles_permission`
--

CREATE TABLE `roles_permission` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `permission_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles_permission`
--
ALTER TABLE `roles_permission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_id` (`permission_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles_permission`
--
ALTER TABLE `roles_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `roles_permission`
--
ALTER TABLE `roles_permission`
  ADD CONSTRAINT `roles_permission_ibfk_1` FOREIGN KEY (`permission_id`) REFERENCES `permission` (`id`),
  ADD CONSTRAINT `roles_permission_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
