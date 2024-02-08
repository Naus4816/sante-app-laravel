-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : jeu. 08 fév. 2024 à 19:11
-- Version du serveur : 5.7.44
-- Version de PHP : 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sante-db`
--

-- --------------------------------------------------------

--
-- Structure de la table `actes_sante`
--

CREATE TABLE `actes_sante` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `prix` decimal(8,2) NOT NULL,
  `pays_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actes_sante`
--

INSERT INTO `actes_sante` (`id`, `nom`, `description`, `prix`, `pays_id`, `created_at`, `updated_at`) VALUES
(1, 'Dents', 'Couronne', 100.00, 184, NULL, '2024-02-07 21:42:14'),
(7, 'Greffe', 'Greffe de cheveux', 2000.00, 184, '2024-02-07 17:10:34', '2024-02-07 17:20:24'),
(9, 'Greffe', 'Greffe de cheveux', 8572.00, 148, NULL, NULL),
(10, 'Greffe', 'Greffe de cheveux', 3223.00, 56, NULL, NULL),
(11, 'Greffe ', 'Greffe de cheveux', 6792.00, 179, NULL, NULL),
(12, 'Greffe', 'Greffe de cheveux', 1560.00, 186, NULL, NULL),
(13, 'Ablation', 'Masectomie', 5052.00, 63, NULL, NULL),
(14, 'Ablation', 'Masectomie', 2598.00, 68, NULL, NULL),
(15, 'Ablation', 'Masectomie', 3720.00, 141, NULL, NULL),
(16, 'Ablation', 'Masectomie', 5573.00, 56, NULL, NULL),
(17, 'Ablation', 'Masectomie', 2263.00, 179, NULL, NULL),
(18, 'Ablation', 'Masectomie', 2263.00, 179, NULL, NULL),
(19, 'Ablation', 'Masectomie', 3000.00, 186, NULL, NULL),
(20, 'Cardiologie', 'Pontage coronarien\r\n', 25800.00, 63, NULL, NULL),
(21, 'Cardiologie', 'Pontage coronarien', 11520.00, 80, NULL, NULL),
(22, 'Cardiologie', 'Pontage coronarien', 6198.00, 91, NULL, NULL),
(23, 'Cardiologie', 'Pontage coronarien', 12060.00, 103, NULL, NULL),
(24, 'Cardiologie', 'Pontage coronarien', 7200.00, 141, NULL, NULL),
(25, 'Cardiologie', 'Pontage coronarien', 7311.00, 186, NULL, NULL),
(26, 'Cardiologie', 'Angioplastie', 4412.00, 49, NULL, NULL),
(28, 'Cardiologie', 'Angioplastie', 4600.00, 80, NULL, NULL),
(29, 'Cardiologie', 'Angioplastie', 8489.00, 87, NULL, NULL),
(30, 'Cardiologie', 'Angioplastie', 965.00, 91, NULL, NULL),
(31, 'Cardiologie', 'Angioplastie', 6229.00, 107, NULL, NULL),
(32, 'Cardiologie', 'Angioplastie', 1190.00, 141, NULL, NULL),
(33, 'Cardiologie', 'Angioplastie', 5819.00, 56, NULL, NULL),
(34, 'Cardiologie', 'Angioplastie', 972.00, 186, NULL, NULL),
(35, 'Cardiologie', 'Angioplastie', 8061.00, 53, NULL, NULL),
(36, 'Cardiologie', 'Echocardiogramme', 35.00, 98, NULL, NULL),
(37, 'Cardiologie', 'Echocardiogramme', 156.00, 77, NULL, NULL),
(38, 'Dents', 'Apectomie', 144.00, 47, NULL, NULL),
(39, 'Dents', 'Apectomie', 370.00, 52, NULL, NULL),
(40, 'Dents', 'Apectomie', 276.00, 111, NULL, NULL),
(41, 'Dents', 'Apectomie', 164.00, 120, NULL, NULL),
(42, 'Dents', 'Apectomie', 433.00, 140, NULL, NULL),
(43, 'Dents', 'Apectomie', 147.00, 149, NULL, NULL),
(44, 'Dents', 'Apectomie', 156.00, 162, NULL, NULL),
(45, 'Dents', 'Apectomie', 158.00, 166, NULL, NULL),
(46, 'Dents', 'Apectomie', 59.00, 193, NULL, NULL),
(47, 'Dents', 'Bridge de 12 unités', 3840.00, 3, NULL, NULL),
(48, 'Dents', 'Bridge de 12 unités', 9000.00, 142, NULL, NULL),
(49, 'Dents', 'Couronne', 586.00, 19, NULL, NULL),
(50, 'Dents', 'Couronne', 278.00, 30, NULL, NULL),
(51, 'Dents', 'Couronne', 384.00, 39, NULL, NULL),
(52, 'Dents', 'Couronne', 444.00, 5, NULL, NULL),
(53, 'Dents', 'Couronne', 228.00, 105, NULL, NULL),
(54, 'Dents', 'Couronne', 150.00, 188, NULL, NULL),
(55, 'Chirurgie élective', 'Chirurgie du canal carpien', 2045.00, 150, NULL, NULL),
(56, 'Chirurgie élective', 'Chirurgie du canal carpien', 3838.00, 59, NULL, NULL),
(57, 'Greffe', 'Greffe du foie', 50226.00, 66, NULL, NULL),
(58, 'Chirurgie elective', 'Chirurgie de l\'épaule', 8101.00, 59, NULL, NULL),
(59, 'Chirurgie élective', 'Chirurgie de l\'épaule', 6056.00, 150, NULL, NULL),
(60, 'Chirurgie élective', 'Switch duodénal', 5330.00, 115, NULL, NULL),
(61, 'Greffe', 'Greffe de la cornée', 6786.00, 130, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `deplacements`
--

CREATE TABLE `deplacements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pays_id` bigint(20) UNSIGNED NOT NULL,
  `pays_id2` bigint(20) UNSIGNED NOT NULL,
  `empreinte_co2` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `deplacements`
--

INSERT INTO `deplacements` (`id`, `user_id`, `pays_id`, `pays_id2`, `empreinte_co2`, `created_at`, `updated_at`) VALUES
(3, 89, 59, 10, 1930.95, '2024-02-08 10:55:53', '2024-02-08 10:55:53'),
(4, 89, 59, 102, 1547.51, '2024-02-08 11:11:16', '2024-02-08 11:11:16'),
(5, 89, 59, 22, 2875.87, '2024-02-08 11:24:06', '2024-02-08 11:24:06');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_29_055723_add_is_admin_to_users_table', 1),
(6, '2024_01_02_112218_create_pays_table', 1),
(7, '2024_01_02_112222_create_recommandations_table', 1),
(8, '2024_01_02_112226_create_deplacements_table', 1),
(9, '2024_01_03_060156_create_actes_sante_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_anglais` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `nom`, `nom_anglais`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', 'Afghanistan', NULL, '2024-02-01 20:17:10'),
(2, 'Afrique du sud', 'South Africa', NULL, '2024-02-07 21:34:02'),
(3, 'Albanie', 'Albania', NULL, NULL),
(4, 'Algérie', 'Algeria', NULL, NULL),
(5, 'Allemagne', 'Germany', NULL, NULL),
(6, 'Andorre', 'Andorra', NULL, NULL),
(7, 'Angola', 'Angola', NULL, NULL),
(8, 'Antigua-et-Barbuda', 'Antigua and Barbuda', NULL, NULL),
(9, 'Arabie Saoudite', 'Saudi Arabia', NULL, NULL),
(10, 'Argentine', 'Argentina', NULL, NULL),
(11, 'Arménie', 'Armenia', NULL, NULL),
(12, 'Australie', 'Australia', NULL, NULL),
(13, 'Autriche', 'Austria', NULL, NULL),
(14, 'Azerbaïdjan', 'Azerbaijan', NULL, NULL),
(15, 'Bahamas', 'Bahamas', NULL, NULL),
(16, 'Bahreïn', 'Bahrain', NULL, NULL),
(17, 'Bangladesh', 'Bangladesh', NULL, NULL),
(18, 'Barbade', 'Barbados', NULL, NULL),
(19, 'Belgique', 'Belgium', NULL, NULL),
(20, 'Belize', 'Belize', NULL, NULL),
(21, 'Bénin', 'Benin', NULL, NULL),
(22, 'Bhoutan', 'Bhutan', NULL, NULL),
(23, 'Biélorussie', 'Belarus', NULL, NULL),
(24, 'Birmanie', 'Myanmar', NULL, NULL),
(25, 'Bolivie', 'Bolivia', NULL, NULL),
(26, 'Bosnie-Herzégovine', 'Bosnia and Herzegovina', NULL, NULL),
(27, 'Botswana', 'Botswana', NULL, NULL),
(28, 'Brésil', 'Brazil', NULL, NULL),
(29, 'Brunei', 'Brunei', NULL, NULL),
(30, 'Bulgarie', 'Bulgaria', NULL, NULL),
(31, 'Burkina Faso', 'Burkina Faso', NULL, NULL),
(32, 'Burundi', 'Burundi', NULL, NULL),
(33, 'Cambodge', 'Cambodia', NULL, NULL),
(34, 'Cameroun', 'Cameroon', NULL, NULL),
(35, 'Canada', 'Canada', NULL, NULL),
(36, 'Cap-Vert', 'Cape Verde', NULL, NULL),
(37, 'Chili', 'Chile', NULL, NULL),
(38, 'Chine', 'China', NULL, NULL),
(39, 'Chypre', 'Cyprus', NULL, NULL),
(40, 'Colombie', 'Colombia', NULL, NULL),
(41, 'Comores', 'Comoros', NULL, NULL),
(42, 'Congo', 'Congo', NULL, NULL),
(43, 'Corée du Nord', 'North Korea', NULL, NULL),
(44, 'Corée du Sud', 'South Korea', NULL, NULL),
(45, 'Costa Rica', 'Costa Rica', NULL, NULL),
(46, 'Côte d\'Ivoire', 'Ivory Coast', NULL, NULL),
(47, 'Croatie', 'Croatia', NULL, NULL),
(48, 'Cuba', 'Cuba', NULL, NULL),
(49, 'Danemark', 'Denmark', NULL, NULL),
(50, 'Djibouti', 'Djibouti', NULL, NULL),
(51, 'Dominique', 'Dominica', NULL, NULL),
(52, 'Égypte', 'Egypt', NULL, NULL),
(53, 'Émirats Arabes Unis', 'United Arab Emirates', NULL, NULL),
(54, 'Équateur', 'Ecuador', NULL, NULL),
(55, 'Érythrée', 'Eritrea', NULL, NULL),
(56, 'Espagne', 'Spain', NULL, NULL),
(57, 'Estonie', 'Estonia', NULL, NULL),
(58, 'Eswatini', 'Eswatini', NULL, NULL),
(59, 'États-Unis d\'Amérique', 'United States of America', NULL, NULL),
(60, 'Éthiopie', 'Ethiopia', NULL, NULL),
(61, 'Fidji', 'Fiji', NULL, NULL),
(62, 'Finlande', 'Finland', NULL, NULL),
(63, 'France', 'France', NULL, NULL),
(64, 'Gabon', 'Gabon', NULL, NULL),
(65, 'Gambie', 'Gambia', NULL, NULL),
(66, 'Géorgie', 'Georgia', NULL, NULL),
(67, 'Ghana', 'Ghana', NULL, NULL),
(68, 'Grèce', 'Greece', NULL, NULL),
(69, 'Grenade', 'Grenada', NULL, NULL),
(70, 'Guatemala', 'Guatemala', NULL, NULL),
(71, 'Guinée', 'Guinea', NULL, NULL),
(72, 'Guinée-Bissau', 'Guinea-Bissau', NULL, NULL),
(73, 'Guinée équatoriale', 'Equatorial Guinea', NULL, NULL),
(74, 'Guyana', 'Guyana', NULL, NULL),
(75, 'Haïti', 'Haiti', NULL, NULL),
(76, 'Honduras', 'Honduras', NULL, NULL),
(77, 'Hongrie', 'Hungary', NULL, NULL),
(78, 'Îles Marshall', 'Marshall Islands', NULL, NULL),
(79, 'Îles Salomon', 'Solomon Islands', NULL, NULL),
(80, 'Inde', 'India', NULL, NULL),
(81, 'Indonésie', 'Indonesia', NULL, NULL),
(82, 'Irak', 'Iraq', NULL, NULL),
(83, 'Iran', 'Iran', NULL, NULL),
(84, 'Irlande', 'Ireland', NULL, NULL),
(85, 'Islande', 'Iceland', NULL, NULL),
(86, 'Palestine', 'Palestine', NULL, NULL),
(87, 'Italie', 'Italy', NULL, NULL),
(88, 'Jamaïque', 'Jamaica', NULL, NULL),
(89, 'Japon', 'Japan', NULL, NULL),
(90, 'Jordanie', 'Jordan', NULL, NULL),
(91, 'Kazakhstan', 'Kazakhstan', NULL, NULL),
(92, 'Kenya', 'Kenya', NULL, NULL),
(93, 'Kirghizistan', 'Kyrgyzstan', NULL, NULL),
(94, 'Kiribati', 'Kiribati', NULL, NULL),
(95, 'Koweït', 'Kuwait', NULL, NULL),
(96, 'Laos', 'Laos', NULL, NULL),
(97, 'Lesotho', 'Lesotho', NULL, NULL),
(98, 'Lettonie', 'Latvia', NULL, NULL),
(99, 'Liban', 'Lebanon', NULL, NULL),
(100, 'Libéria', 'Liberia', NULL, NULL),
(101, 'Libye', 'Libya', NULL, NULL),
(102, 'Liechtenstein', 'Liechtenstein', NULL, NULL),
(103, 'Lituanie', 'Lithuania', NULL, NULL),
(104, 'Luxembourg', 'Luxembourg', NULL, NULL),
(105, 'Macédoine du Nord', 'North Macedonia', NULL, NULL),
(106, 'Madagascar', 'Madagascar', NULL, NULL),
(107, 'Malaisie', 'Malaysia', NULL, NULL),
(108, 'Malawi', 'Malawi', NULL, NULL),
(109, 'Maldives', 'Maldives', NULL, NULL),
(110, 'Mali', 'Mali', NULL, NULL),
(111, 'Malte', 'Malta', NULL, NULL),
(112, 'Maroc', 'Morocco', NULL, NULL),
(113, 'Maurice', 'Mauritius', NULL, NULL),
(114, 'Mauritanie', 'Mauritania', NULL, NULL),
(115, 'Mexique', 'Mexico', NULL, NULL),
(116, 'États fédérés de Micronésie', 'Federal States of Micronesia', NULL, NULL),
(117, 'Moldavie', 'Moldova', NULL, NULL),
(118, 'Monaco', 'Monaco', NULL, NULL),
(119, 'Mongolie', 'Mongolia', NULL, NULL),
(120, 'Monténégro', 'Montenegro', NULL, NULL),
(121, 'Mozambique', 'Mozambique', NULL, NULL),
(122, 'Namibie', 'Namibia', NULL, NULL),
(123, 'Nauru', 'Nauru', NULL, NULL),
(124, 'Népal', 'Nepal', NULL, NULL),
(125, 'Nicaragua', 'Nicaragua', NULL, NULL),
(126, 'Niger', 'Niger', NULL, NULL),
(127, 'Nigeria', 'Nigeria', NULL, NULL),
(128, 'Norvège', 'Norway', NULL, NULL),
(129, 'Nouvelle-Zélande', 'New Zealand', NULL, NULL),
(130, 'Oman', 'Oman', NULL, NULL),
(131, 'Ouganda', 'Uganda', NULL, NULL),
(132, 'Ouzbékistan', 'Uzbekistan', NULL, NULL),
(133, 'Pakistan', 'Pakistan', NULL, NULL),
(134, 'Palaos', 'Palau', NULL, NULL),
(135, 'Panama', 'Panama', NULL, NULL),
(136, 'Papouasie-Nouvelle-Guinée', 'Papua New Guinea', NULL, NULL),
(137, 'Paraguay', 'Paraguay', NULL, NULL),
(138, 'Pays-Bas', 'Netherlands', NULL, NULL),
(139, 'Pérou', 'Peru', NULL, NULL),
(140, 'Philippines', 'Philippines', NULL, NULL),
(141, 'Pologne', 'Poland', NULL, NULL),
(142, 'Portugal', 'Portugal', NULL, NULL),
(143, 'Qatar', 'Qatar', NULL, NULL),
(144, 'République Centrafricaine', 'Central African Republic', NULL, NULL),
(145, 'République Dominicaine', 'Dominican Republic', NULL, NULL),
(146, 'République Démocratique du Congo', 'Democratic Republic of the Congo', NULL, NULL),
(147, 'République du Congo', 'Republic of the Congo', NULL, NULL),
(148, 'République Tchèque', 'Czech Republic', NULL, NULL),
(149, 'Roumanie', 'Romania', NULL, NULL),
(150, 'Royaume-Uni', 'United Kingdom', NULL, NULL),
(151, 'Russie', 'Russia', NULL, NULL),
(152, 'Rwanda', 'Rwanda', NULL, NULL),
(153, 'Saint-Christophe-et-Niévès', 'Saint Kitts and Nevis', NULL, NULL),
(154, 'Saint-Marin', 'San Marino', NULL, NULL),
(155, 'Saint-Vincent-et-les-Grenadines', 'Saint Vincent and the Grenadines', NULL, NULL),
(156, 'Sainte-Lucie', 'Saint Lucia', NULL, NULL),
(157, 'Salomon', 'Solomon Islands', NULL, NULL),
(158, 'Salvador', 'El Salvador', NULL, NULL),
(159, 'Samoa', 'Samoa', NULL, NULL),
(160, 'Sao Tomé-et-Principe', 'Sao Tome and Principe', NULL, NULL),
(161, 'Sénégal', 'Senegal', NULL, NULL),
(162, 'Serbie', 'Serbia', NULL, NULL),
(163, 'Seychelles', 'Seychelles', NULL, NULL),
(164, 'Sierra Leone', 'Sierra Leone', NULL, NULL),
(165, 'Singapour', 'Singapore', NULL, NULL),
(166, 'Slovaquie', 'Slovakia', NULL, NULL),
(167, 'Slovénie', 'Slovenia', NULL, NULL),
(168, 'Somalie', 'Somalia', NULL, NULL),
(169, 'Soudan', 'Sudan', NULL, NULL),
(170, 'Soudan du Sud', 'South Sudan', NULL, NULL),
(171, 'Sri Lanka', 'Sri Lanka', NULL, NULL),
(172, 'Suède', 'Sweden', NULL, NULL),
(173, 'Suisse', 'Switzerland', NULL, NULL),
(174, 'Suriname', 'Suriname', NULL, NULL),
(175, 'Syrie', 'Syria', NULL, NULL),
(176, 'Tadjikistan', 'Tajikistan', NULL, NULL),
(177, 'Tanzanie', 'Tanzania', NULL, NULL),
(178, 'Tchad', 'Chad', NULL, NULL),
(179, 'Thaïlande', 'Thailand', NULL, NULL),
(180, 'Timor oriental', 'East Timor', NULL, NULL),
(181, 'Togo', 'Togo', NULL, NULL),
(182, 'Tonga', 'Tonga', NULL, NULL),
(183, 'Trinité-et-Tobago', 'Trinidad and Tobago', NULL, NULL),
(184, 'Tunisie', 'Tunisia', NULL, NULL),
(185, 'Turkménistan', 'Turkmenistan', NULL, NULL),
(186, 'Turquie', 'Turkey', NULL, NULL),
(187, 'Tuvalu', 'Tuvalu', NULL, NULL),
(188, 'Ukraine', 'Ukraine', NULL, NULL),
(189, 'Uruguay', 'Uruguay', NULL, NULL),
(190, 'Vanuatu', 'Vanuatu', NULL, NULL),
(191, 'Vatican', 'Vatican City', NULL, NULL),
(192, 'Venezuela', 'Venezuela', NULL, NULL),
(193, 'Vietnam', 'Vietnam', NULL, NULL),
(194, 'Yémen', 'Yemen', NULL, NULL),
(195, 'Zambie', 'Zambia', '2024-01-29 13:14:53', '2024-01-29 13:15:35'),
(196, 'Zimbabwe', 'Zimbabwe', '2024-02-07 21:32:35', '2024-02-07 21:32:35');

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recommandations`
--

CREATE TABLE `recommandations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays_id` bigint(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `recommandations`
--

INSERT INTO `recommandations` (`id`, `contenu`, `pays_id`, `created_at`, `updated_at`) VALUES
(6, 'Vérifier son visa', 184, '2024-02-07 21:38:09', '2024-02-07 21:38:09');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `verification_code` int(5) DEFAULT NULL,
  `reset_code` int(5) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `verification_code`, `reset_code`, `password`, `created_at`, `updated_at`, `is_admin`) VALUES
(17, 'Rayane Jerbi', 'jerbiray@yahoo.fr', NULL, NULL, NULL, '$2y$10$pTemU8RqgeniiAn1ZVcD7eMQQCrSvrpX7x/zd148UKI7YZkljnvPu', '2024-01-26 08:45:19', '2024-02-07 21:36:42', 0),
(18, 'Nael', 'nael.ouasti@ece.fr', NULL, NULL, NULL, '$2y$10$h6vrZdO2LRJ3pHspXavcIey18S.PWo.O.fNy/Hn6fdJcXGNsA9Qb.', '2024-01-26 10:21:10', '2024-01-26 10:21:10', 0),
(20, 'Nael', 'nael.ouasti@ece.com', NULL, NULL, NULL, '$2y$10$RPcCyk0xYjYhSEDI9sCD7uDLLEgvIeT/FmkVHJMvvuKriHeEbIsRO', '2024-01-26 10:21:36', '2024-01-26 10:21:36', 0),
(77, 'Nael', 'nael.ouasti@edu.ece.fr', '2024-01-30 13:09:06', NULL, NULL, '$2y$10$zaHlrJW63lW2JWGb4VrlauIEWynf3c5qTeLZyoPEIrHZHUlJAp1fK', '2024-01-30 12:55:56', '2024-01-30 13:09:06', 0),
(89, 'Naus', 'naus4816@gmail.com', '2024-01-30 13:08:54', NULL, NULL, '$2y$10$XQXO0hFhykPGzrjLxLidMejPAUdIPvBNbCZer5MLlgTjuaCfuib3O', '2024-02-07 21:09:37', '2024-02-07 21:09:37', 0),
(94, 'Nael Ouasti', 'nael.ouasti@orange.fr', '2024-02-07 23:21:24', NULL, NULL, '$2y$10$zMaddpayttJGB/CuFeSa9ueREzXPPg1y9DO3bT72DTAi5vKss015u', '2024-02-07 23:10:15', '2024-02-07 23:52:38', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actes_sante`
--
ALTER TABLE `actes_sante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actes_sante_pays_id_foreign` (`pays_id`);

--
-- Index pour la table `deplacements`
--
ALTER TABLE `deplacements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deplacements_user_id_foreign` (`user_id`),
  ADD KEY `deplacements_pays_id_foreign` (`pays_id`),
  ADD KEY `deplacements_pays_id2_foreign` (`pays_id2`) USING BTREE;

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `recommandations`
--
ALTER TABLE `recommandations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recommandations_pays_id_foreign` (`pays_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actes_sante`
--
ALTER TABLE `actes_sante`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT pour la table `deplacements`
--
ALTER TABLE `deplacements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recommandations`
--
ALTER TABLE `recommandations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actes_sante`
--
ALTER TABLE `actes_sante`
  ADD CONSTRAINT `actes_sante_pays_id_foreign` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`);

--
-- Contraintes pour la table `deplacements`
--
ALTER TABLE `deplacements`
  ADD CONSTRAINT `deplacements_pays_id2_foreign` FOREIGN KEY (`pays_id2`) REFERENCES `pays` (`id`),
  ADD CONSTRAINT `deplacements_pays_id_foreign` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`),
  ADD CONSTRAINT `deplacements_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `recommandations`
--
ALTER TABLE `recommandations`
  ADD CONSTRAINT `recommandations_pays_id_foreign` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
