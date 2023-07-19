-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 18 juil. 2023 à 13:01
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
(2, 1, 'XYZ Industries', 'Pays B', '987654321', '2023-07-10', '2023-07-10'),
(3, 1, 'Acme Inc.', 'Pays C', '456789123', '2023-07-10', '2023-07-10'),
(4, 1, 'GlobalTech', 'Pays D', '789123456', '2023-07-10', '2023-07-10'),
(5, 2, 'Innovative Solutions', 'Pays E', '321654987', '2023-07-10', '2023-07-10'),
(6, 1, 'TechCo', 'Pays F', '654789321', '2023-07-10', '2023-07-10'),
(7, 1, 'International Trade', 'Pays G', '159753486', '2023-07-10', '2023-07-10'),
(8, 2, 'Sunshine Enterprises', 'Pays H', '753951852', '2023-07-10', '2023-07-10'),
(9, 1, 'Globex Corporation', 'Pays I', '246813579', '2023-07-10', '2023-07-10'),
(10, 1, 'United Services', 'Pays J', '874596321', '2023-07-10', '2023-07-10'),
(11, 2, 'Advanced Technologies', 'Pays K', '369852147', '2023-07-10', '2023-07-10'),
(12, 1, 'Dynamic Solutions', 'Pays L', '951753624', '2023-07-10', '2023-07-10'),
(13, 1, 'MegaCorp', 'Pays M', '258963147', '2023-07-10', '2023-07-10'),
(14, 2, 'Infinite Innovations', 'Pays N', '147852369', '2023-07-10', '2023-07-10'),
(15, 1, 'Eagle Enterprises', 'Pays O', '369258147', '2023-07-10', '2023-07-10'),
(16, 1, 'Global Industries', 'Pays P', '753159486', '2023-07-10', '2023-07-10'),
(17, 2, 'Future Solutions', 'Pays Q', '852741963', '2023-07-10', '2023-07-10'),
(18, 1, 'Tech Solutions', 'Pays R', '963852741', '2023-07-10', '2023-07-10'),
(19, 1, 'Worldwide Trade', 'Pays S', '741852963', '2023-07-10', '2023-07-10'),
(20, 2, 'Smart Industries', 'Pays T', '852963741', '2023-07-10', '2023-07-10'),
(21, 1, 'Swift Enterprises', 'Pays U', '963741852', '2023-07-10', '2023-07-10'),
(22, 1, 'Prime Corporation', 'Pays V', '741963852', '2023-07-10', '2023-07-10'),
(23, 2, 'Tech Innovators', 'Pays W', '963147852', '2023-07-10', '2023-07-10'),
(24, 1, 'Global Solutions', 'Pays X', '369741852', '2023-07-10', '2023-07-10'),
(25, 1, 'Pro Services', 'Pays Y', '852369741', '2023-07-10', '2023-07-10'),
(26, 2, 'Alpha Enterprises', 'Pays Z', '741852369', '2023-07-10', '2023-07-10'),
(27, 1, 'Nexus Corporation', 'Pays A', '369741258', '2023-07-10', '2023-07-10'),
(28, 1, 'Apex Solutions', 'Pays B', '852369147', '2023-07-10', '2023-07-10'),
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
(1, 'John', 1, 'john@example.com', '123-456-7890', '2023-07-05', '2023-07-05'),
(2, 'Jane', 2, 'jane@example.com', '987-654-3210', '2023-07-05', '2023-07-05'),
(3, 'Mark', 3, 'mark@example.com', '555-123-4567', '2023-07-05', '2023-07-05'),
(4, 'Amy', 4, 'amy@example.com', '999-888-7777', '2023-07-05', '2023-07-05'),
(5, 'Peter', 5, 'peter@example.com', '111-222-3333', '2023-07-05', '2023-07-05'),
(6, 'Sarah', 6, 'sarah@example.com', '444-555-6666', '2023-07-05', '2023-07-05'),
(7, 'Michael', 7, 'michael@example.com', '777-888-9999', '2023-07-05', '2023-07-05'),
(8, 'Emily', 8, 'emily@example.com', '222-333-4444', '2023-07-05', '2023-07-05'),
(9, 'David', 9, 'david@example.com', '666-777-8888', '2023-07-05', '2023-07-05'),
(10, 'Lisa', 10, 'lisa@example.com', '999-000-1111', '2023-07-05', '2023-07-05'),
(11, 'Robert', 11, 'robert@example.com', '111-222-3333', '2023-07-06', '2023-07-06'),
(12, 'Sophia', 12, 'sophia@example.com', '999-888-7777', '2023-07-06', '2023-07-06'),
(13, 'William', 13, 'william@example.com', '555-123-4567', '2023-07-06', '2023-07-06'),
(14, 'Olivia', 14, 'olivia@example.com', '123-456-7890', '2023-07-06', '2023-07-06'),
(15, 'James', 15, 'james@example.com', '987-654-3210', '2023-07-06', '2023-07-06'),
(16, 'Emma', 16, 'emma@example.com', '222-333-4444', '2023-07-06', '2023-07-06'),
(17, 'Alexander', 17, 'alexander@example.com', '777-888-9999', '2023-07-06', '2023-07-06'),
(18, 'Isabella', 18, 'isabella@example.com', '666-777-8888', '2023-07-06', '2023-07-06'),
(19, 'Daniel', 19, 'daniel@example.com', '999-000-1111', '2023-07-06', '2023-07-06'),
(20, 'Oliver', 20, 'oliver@example.com', '111-222-3333', '2023-07-06', '2023-07-06'),
(21, 'Mia', 21, 'mia@example.com', '999-888-7777', '2023-07-06', '2023-07-06'),
(22, 'Ethan', 22, 'ethan@example.com', '555-123-4567', '2023-07-06', '2023-07-06'),
(23, 'Ava', 23, 'ava@example.com', '123-456-7890', '2023-07-06', '2023-07-06'),
(24, 'Noah', 24, 'noah@example.com', '987-654-3210', '2023-07-06', '2023-07-06'),
(25, 'Charlotte', 25, 'charlotte@example.com', '222-333-4444', '2023-07-06', '2023-07-06'),
(26, 'Liam', 26, 'liam@example.com', '777-888-9999', '2023-07-06', '2023-07-06'),
(27, 'Sophie', 27, 'sophie@example.com', '666-777-8888', '2023-07-06', '2023-07-06'),
(28, 'Benjamin', 28, 'benjamin@example.com', '999-000-1111', '2023-07-06', '2023-07-06'),
(29, 'Harper', 29, 'harper@example.com', '111-222-3333', '2023-07-06', '2023-07-06'),
(30, 'Jocelyne', 30, 'jocelyne@example.com', '121-232-3433', '2023-07-06', '2023-07-06');

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `invoices`
--

INSERT INTO `invoices` (`id`, `id_company`, `created_at`, `updated_at`, `name`) VALUES
(1, 1, '2023-06-01', '2023-06-02', 'INV20230001'),
(2, 2, '2023-06-02', '2023-06-03', 'INV20230002'),
(3, 3, '2023-06-03', '2023-06-04', 'INV20230003'),
(4, 1, '2023-06-04', '2023-06-05', 'INV20230004'),
(5, 3, '2023-06-05', '2023-06-06', 'INV20230005'),
(6, 1, '2023-06-06', '2023-06-07', 'INV20230006'),
(7, 2, '2023-06-07', '2023-06-08', 'INV20230007'),
(8, 3, '2023-06-08', '2023-06-09', 'INV20230008'),
(9, 3, '2023-06-09', '2023-06-10', 'INV20230009'),
(10, 2, '2023-06-10', '2023-06-11', 'INV20230010'),
(11, 1, '2023-06-11', '2023-06-12', 'INV20230011'),
(12, 2, '2023-06-12', '2023-06-13', 'INV20230012'),
(13, 3, '2023-06-13', '2023-06-14', 'INV20230013'),
(14, 1, '2023-06-14', '2023-06-15', 'INV20230014'),
(15, 3, '2023-06-15', '2023-06-16', 'INV20230015'),
(16, 3, '2023-06-16', '2023-06-17', 'INV20230016'),
(17, 2, '2023-06-17', '2023-06-18', 'INV20230017'),
(18, 3, '2023-06-18', '2023-06-19', 'INV20230018'),
(19, 2, '2023-06-19', '2023-06-20', 'INV20230019'),
(20, 3, '2023-06-20', '2023-06-21', 'INV20230020'),
(21, 1, '2023-06-21', '2023-06-22', 'INV20230021'),
(22, 2, '2023-06-22', '2023-06-23', 'INV20230022'),
(23, 3, '2023-06-23', '2023-06-24', 'INV20230023'),
(24, 1, '2023-06-24', '2023-06-25', 'INV20230024'),
(25, 3, '2023-06-25', '2023-06-26', 'INV20230025'),
(26, 1, '2023-06-26', '2023-06-27', 'INV20230026'),
(27, 2, '2023-06-27', '2023-06-28', 'INV20230027'),
(28, 3, '2023-06-28', '2023-06-29', 'INV20230028'),
(29, 3, '2023-06-29', '2023-06-30', 'INV20230029'),
(30, 2, '2023-06-30', '2023-07-01', 'INV20230030');


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

--
-- Déchargement des données de la table `permission`
--

INSERT INTO `permission` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Permission1', '2023-07-10', '2023-07-10'),
(2, 'Permission2', '2023-07-10', '2023-07-10');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT 'user',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'user', '2023-07-10', '2023-07-10'),
(2, 'admin', '2023-07-10', '2023-07-10');

-- --------------------------------------------------------

--
-- Structure de la table `roles_permission`
--

CREATE TABLE `roles_permission` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `permission_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `roles_permission`
--

INSERT INTO `roles_permission` (`id`, `role_id`, `permission_id`) VALUES
(1, 1, 1),
(2, 2, 2);

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

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'user', '2023-07-10', '2023-07-10'),
(2, 'admin', '2023-07-10', '2023-07-10');

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
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role_id`, `first_name`, `last_name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 'John', 'Doe', 'john@example.com', 'password1', '2023-07-10', '2023-07-10'),
(2, 2, 'Jane', 'Smith', 'jane@example.com', 'password2', '2023-07-10', '2023-07-10');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT pour la table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `roles_permission`
--
ALTER TABLE `roles_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
