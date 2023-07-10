-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 10 juil. 2023 à 16:31
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
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `companies`
--

INSERT INTO `companies` (`id`, `type_id`, `name`, `country`, `tva`, `created_at`, `updated_at`) VALUES
(1, 1, 'ABC Corporation', 'Pays A', '123456789', '2023-07-10', '2023-07-10'),
(2, 2, 'XYZ Industries', 'Pays B', '987654321', '2023-07-10', '2023-07-10'),
(3, 1, 'Acme Inc.', 'Pays C', '456789123', '2023-07-10', '2023-07-10'),
(4, 3, 'GlobalTech', 'Pays D', '789123456', '2023-07-10', '2023-07-10'),
(5, 2, 'Innovative Solutions', 'Pays E', '321654987', '2023-07-10', '2023-07-10'),
(6, 1, 'TechCo', 'Pays F', '654789321', '2023-07-10', '2023-07-10'),
(7, 3, 'International Trade', 'Pays G', '159753486', '2023-07-10', '2023-07-10'),
(8, 2, 'Sunshine Enterprises', 'Pays H', '753951852', '2023-07-10', '2023-07-10'),
(9, 1, 'Globex Corporation', 'Pays I', '246813579', '2023-07-10', '2023-07-10'),
(10, 3, 'United Services', 'Pays J', '874596321', '2023-07-10', '2023-07-10'),
(11, 2, 'Advanced Technologies', 'Pays K', '369852147', '2023-07-10', '2023-07-10'),
(12, 1, 'Dynamic Solutions', 'Pays L', '951753624', '2023-07-10', '2023-07-10'),
(13, 3, 'MegaCorp', 'Pays M', '258963147', '2023-07-10', '2023-07-10'),
(14, 2, 'Infinite Innovations', 'Pays N', '147852369', '2023-07-10', '2023-07-10'),
(15, 1, 'Eagle Enterprises', 'Pays O', '369258147', '2023-07-10', '2023-07-10'),
(16, 3, 'Global Industries', 'Pays P', '753159486', '2023-07-10', '2023-07-10'),
(17, 2, 'Future Solutions', 'Pays Q', '852741963', '2023-07-10', '2023-07-10'),
(18, 1, 'Tech Solutions', 'Pays R', '963852741', '2023-07-10', '2023-07-10'),
(19, 3, 'Worldwide Trade', 'Pays S', '741852963', '2023-07-10', '2023-07-10'),
(20, 2, 'Smart Industries', 'Pays T', '852963741', '2023-07-10', '2023-07-10'),
(21, 1, 'Swift Enterprises', 'Pays U', '963741852', '2023-07-10', '2023-07-10'),
(22, 3, 'Prime Corporation', 'Pays V', '741963852', '2023-07-10', '2023-07-10'),
(23, 2, 'Tech Innovators', 'Pays W', '963147852', '2023-07-10', '2023-07-10'),
(24, 1, 'Global Solutions', 'Pays X', '369741852', '2023-07-10', '2023-07-10'),
(25, 3, 'Pro Services', 'Pays Y', '852369741', '2023-07-10', '2023-07-10'),
(26, 2, 'Alpha Enterprises', 'Pays Z', '741852369', '2023-07-10', '2023-07-10'),
(27, 1, 'Nexus Corporation', 'Pays A', '369741258', '2023-07-10', '2023-07-10'),
(28, 3, 'Apex Solutions', 'Pays B', '852369147', '2023-07-10', '2023-07-10'),
(29, 2, 'Bright Ideas', 'Pays C', '741258369', '2023-07-10', '2023-07-10'),
(30, 1, 'Global Trade', 'Pays D', '369147258', '2023-07-10', '2023-07-10');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `company_id`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'John', 12345, 'john@example.com', '123-456-7890', '2023-07-05', '2023-07-05'),
(2, 'Jane', 67890, 'jane@example.com', '987-654-3210', '2023-07-05', '2023-07-05'),
(3, 'Mark', 54321, 'mark@example.com', '555-123-4567', '2023-07-05', '2023-07-05'),
(4, 'Amy', 98765, 'amy@example.com', '999-888-7777', '2023-07-05', '2023-07-05'),
(5, 'Peter', 23456, 'peter@example.com', '111-222-3333', '2023-07-05', '2023-07-05'),
(6, 'Sarah', 87654, 'sarah@example.com', '444-555-6666', '2023-07-05', '2023-07-05'),
(7, 'Michael', 76543, 'michael@example.com', '777-888-9999', '2023-07-05', '2023-07-05'),
(8, 'Emily', 43210, 'emily@example.com', '222-333-4444', '2023-07-05', '2023-07-05'),
(9, 'David', 34567, 'david@example.com', '666-777-8888', '2023-07-05', '2023-07-05'),
(10, 'Lisa', 87654, 'lisa@example.com', '999-000-1111', '2023-07-05', '2023-07-05'),
(11, 'Robert', 24680, 'robert@example.com', '111-222-3333', '2023-07-06', '2023-07-06'),
(12, 'Sophia', 13579, 'sophia@example.com', '999-888-7777', '2023-07-06', '2023-07-06'),
(13, 'William', 86420, 'william@example.com', '555-123-4567', '2023-07-06', '2023-07-06'),
(14, 'Olivia', 97531, 'olivia@example.com', '123-456-7890', '2023-07-06', '2023-07-06'),
(15, 'James', 76890, 'james@example.com', '987-654-3210', '2023-07-06', '2023-07-06'),
(16, 'Emma', 43210, 'emma@example.com', '222-333-4444', '2023-07-06', '2023-07-06'),
(17, 'Alexander', 21975, 'alexander@example.com', '777-888-9999', '2023-07-06', '2023-07-06'),
(18, 'Isabella', 67812, 'isabella@example.com', '666-777-8888', '2023-07-06', '2023-07-06'),
(19, 'Daniel', 56789, 'daniel@example.com', '999-000-1111', '2023-07-06', '2023-07-06'),
(20, 'Oliver', 98765, 'oliver@example.com', '111-222-3333', '2023-07-06', '2023-07-06'),
(21, 'Mia', 87654, 'mia@example.com', '999-888-7777', '2023-07-06', '2023-07-06'),
(22, 'Ethan', 76543, 'ethan@example.com', '555-123-4567', '2023-07-06', '2023-07-06'),
(23, 'Ava', 65432, 'ava@example.com', '123-456-7890', '2023-07-06', '2023-07-06'),
(24, 'Noah', 54321, 'noah@example.com', '987-654-3210', '2023-07-06', '2023-07-06'),
(25, 'Charlotte', 43210, 'charlotte@example.com', '222-333-4444', '2023-07-06', '2023-07-06'),
(26, 'Liam', 32109, 'liam@example.com', '777-888-9999', '2023-07-06', '2023-07-06'),
(27, 'Sophie', 21098, 'sophie@example.com', '666-777-8888', '2023-07-06', '2023-07-06'),
(28, 'Benjamin', 10987, 'benjamin@example.com', '999-000-1111', '2023-07-06', '2023-07-06'),
(29, 'Harper', 98765, 'harper@example.com', '111-222-3333', '2023-07-06', '2023-07-06');

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `invoices`
--

INSERT INTO `invoices` (`id`, `id_company`, `created_at`, `updated_at`) VALUES
(1, 101, '2023-06-01', '2023-06-02'),
(2, 102, '2023-06-02', '2023-06-03'),
(3, 103, '2023-06-03', '2023-06-04'),
(4, 101, '2023-06-04', '2023-06-05'),
(5, 104, '2023-06-05', '2023-06-06'),
(6, 105, '2023-06-06', '2023-06-07'),
(7, 102, '2023-06-07', '2023-06-08'),
(8, 103, '2023-06-08', '2023-06-09'),
(9, 105, '2023-06-09', '2023-06-10'),
(10, 104, '2023-06-10', '2023-06-11'),
(11, 101, '2023-06-11', '2023-06-12'),
(12, 102, '2023-06-12', '2023-06-13'),
(13, 103, '2023-06-13', '2023-06-14'),
(14, 101, '2023-06-14', '2023-06-15'),
(15, 104, '2023-06-15', '2023-06-16'),
(16, 105, '2023-06-16', '2023-06-17'),
(17, 102, '2023-06-17', '2023-06-18'),
(18, 103, '2023-06-18', '2023-06-19'),
(19, 105, '2023-06-19', '2023-06-20'),
(20, 104, '2023-06-20', '2023-06-21'),
(21, 101, '2023-06-21', '2023-06-22'),
(22, 102, '2023-06-22', '2023-06-23'),
(23, 103, '2023-06-23', '2023-06-24'),
(24, 101, '2023-06-24', '2023-06-25'),
(25, 104, '2023-06-25', '2023-06-26'),
(26, 105, '2023-06-26', '2023-06-27'),
(27, 102, '2023-06-27', '2023-06-28'),
(28, 103, '2023-06-28', '2023-06-29'),
(29, 105, '2023-06-29', '2023-06-30'),
(30, 104, '2023-06-30', '2023-07-01');

-- --------------------------------------------------------

--
-- Structure de la table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
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
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
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
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
