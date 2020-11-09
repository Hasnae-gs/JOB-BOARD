-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 09, 2020 at 07:39 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trav`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidats`
--

DROP TABLE IF EXISTS `candidats`;
CREATE TABLE IF NOT EXISTS `candidats` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `civilite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ddn` date NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_handicape` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tele` int(11) NOT NULL,
  `mobilite_geographique` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `competences_informatiques` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CV` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lettre_motivation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domaine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `candidats_email_unique` (`email`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidats`
--

INSERT INTO `candidats` (`id`, `name`, `email`, `password`, `is_super`, `remember_token`, `created_at`, `updated_at`, `prenom`, `civilite`, `cin`, `ddn`, `adresse`, `ville`, `region`, `type_handicape`, `tele`, `mobilite_geographique`, `competences_informatiques`, `photo`, `CV`, `lettre_motivation`, `description`, `nad`, `domaine`) VALUES
(7, 'user2', 'user2@gmail.com', '$2y$10$AYzLUcJQY.reNj9NSD0a8O6oI607lCRTVb4Tthp.KzNp/kikV9Jnu', 0, NULL, '2020-11-09 14:32:46', '2020-11-09 14:32:46', 'user2', 'marocain', 'AB785412', '2003-04-02', 'bd. la resistance, lot. ElWahda, Grand Casablanca', 'Casablanca', 'Casablanca-Settat', 'handicap Psychique', 528240290, 'nationale', 'Word', '/candidat/1604935966.jpg', '/candidat/1604935966.pdf', '/candidat/1604935966.pdf', 'Cette mission représente, à mes yeux, une réelle opportunité de progression personnelle', 'Entre 1 et 3 ans d\'expérience', 'Economie'),
(8, 'user3', 'user3@gmail.com', '$2y$10$vMYDvJ9w7/1K0u5PKdAjAOXtnYfawg1HdqobJ.NIIcnSEoAoZz0M6', 0, NULL, '2020-11-09 14:35:17', '2020-11-09 14:35:17', 'user3', 'marocain', 'ZE789654', '1987-11-01', 'Q.I. Bensouda, lot Wafae 70/71', 'fes', 'Fes-Meknes', 'handicap moteur', 674056211, 'nationale', 'Excel', '/candidat/1604936117.jpg', '/candidat/1604936117.pdf', '/candidat/1604936117.pdf', 'Je suis vivement intéressé par ce travail', 'Entre 1 et 3 ans d\'expérience', 'Management'),
(6, 'User1', 'user1@gmail.com', '$2y$10$.H9qghw2ahr0ag0Kdy32t.lsHjKTRHVtHuAebkHX9dweg9g0ttQ6q', 0, NULL, '2020-11-09 14:30:27', '2020-11-09 14:30:27', 'User1', 'marocain', 'AB123654', '1996-12-31', 'bd. la resistance, lot. ElWahda, Fes', 'Fes', 'Fes-Meknes', 'handicap visuel', 528240290, 'régionale', 'SQL', '/candidat/1604935827.jpg', '/candidat/1604935827.pdf', '/candidat/1604935827.pdf', 'M\'impliquer dans cette fonction correspond tout à fait à mes attentes', 'Debutant', 'Informatique');

-- --------------------------------------------------------

--
-- Table structure for table `demandes`
--

DROP TABLE IF EXISTS `demandes`;
CREATE TABLE IF NOT EXISTS `demandes` (
  `id_demande` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_offre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_candidat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'en_cours',
  PRIMARY KEY (`id_demande`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demandes`
--

INSERT INTO `demandes` (`id_demande`, `created_at`, `updated_at`, `id_offre`, `id_candidat`, `etat`) VALUES
(1, NULL, NULL, '2', '4', 'Confirmé'),
(2, NULL, NULL, '1', '2', 'en_cours'),
(3, NULL, NULL, '1', '4', 'Confirmé'),
(4, NULL, NULL, '1', '2', 'Annulé'),
(5, '2020-11-06 20:38:54', '2020-11-06 20:38:54', '2', '4', 'en_cours'),
(6, '2020-11-09 14:40:38', '2020-11-09 14:40:38', '12', '7', 'en_cours');

-- --------------------------------------------------------

--
-- Table structure for table `employeurs`
--

DROP TABLE IF EXISTS `employeurs`;
CREATE TABLE IF NOT EXISTS `employeurs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `identifiant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raison_sosial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_entreprise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secteur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `effectif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tele` int(11) NOT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poste` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordonnees` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbr_handicap` int(11) NOT NULL,
  `politique` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accessibilite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `employeurs_email_unique` (`email`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employeurs`
--

INSERT INTO `employeurs` (`id`, `name`, `prenom`, `email`, `password`, `is_super`, `remember_token`, `created_at`, `updated_at`, `identifiant`, `raison_sosial`, `type_entreprise`, `secteur`, `effectif`, `ville`, `tele`, `site`, `poste`, `coordonnees`, `logo`, `description`, `nbr_handicap`, `politique`, `accessibilite`) VALUES
(19, 'Nom2', 'Prenom2', 'NOM2@gmail.com', '$2y$10$SL9Gj1gU681WA7ETwLN/oetyd.gzRKWs6Z32gFDQ2dXxVVKBOxZJ6', 0, NULL, '2020-11-09 14:38:27', '2020-11-09 14:38:27', 'nom2', 'SARL', 'SARL', 'Qualité & Finance', '5', 'Marrakech', 528241446, 'http://corndog.io/', 'Comptable', '78965', '/images/1604936307.jpg', 'Description', 5, 'politique', 'accessiblite'),
(18, 'NOM1', 'PRENOM1', 'NOM1@gmail.com', '$2y$10$xMd9ImLPmcxkZLfBotkTK.eFRITHpFJVgU5wXfr0ifLe9ljQ/OwqC', 0, NULL, '2020-11-09 14:08:15', '2020-11-09 14:08:15', 'NOM1', 'SAS', 'type d\'entreprise', 'Informatique', '10', 'Fes', 655585962, 'https://theuselessweb.com/', 'RESPONSABLE RH', '1223654', '/images/1604934494.jpg', 'description', 10, 'politique', 'accessibilite');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE IF NOT EXISTS `experiences` (
  `id_experience` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_candidat` int(11) NOT NULL,
  `date` date NOT NULL,
  `poste` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_contrat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domaine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entreprise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_experience`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formations`
--

DROP TABLE IF EXISTS `formations`;
CREATE TABLE IF NOT EXISTS `formations` (
  `id_formation` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_candidat` int(11) NOT NULL,
  `date` date NOT NULL,
  `intitule` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `niveau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etablissement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_formation`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `langues`
--

DROP TABLE IF EXISTS `langues`;
CREATE TABLE IF NOT EXISTS `langues` (
  `id_langue` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_candidat` int(11) NOT NULL,
  `Langue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `niveau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_langue`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_12_071643_create_offres_table', 1),
(5, '2020_08_12_071806_create_projets_table', 1),
(6, '2020_08_12_071827_create_notifications_table', 1),
(7, '2020_08_12_071849_create_demandes_table', 1),
(8, '2020_08_12_074040_create_formations_table', 1),
(9, '2020_08_12_074125_create_experiences_table', 1),
(10, '2020_08_12_074951_create_langues_table', 1),
(11, '2020_08_19_073007_create_candidats_table', 1),
(12, '2020_08_19_073028_create_employeurs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id_notification` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id-condidat` int(11) NOT NULL,
  `id-employeur` int(11) NOT NULL,
  `contenu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_notification`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offres`
--

DROP TABLE IF EXISTS `offres`;
CREATE TABLE IF NOT EXISTS `offres` (
  `id_offre` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_employeur` int(11) NOT NULL,
  `nref` int(11) NOT NULL,
  `date_depot` date NOT NULL,
  `descriptif_poste` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `niveau_etude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domaine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `niveau_experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `competence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `langue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poste_cadre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_contrat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debut_mission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `procedure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_offre`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offres`
--

INSERT INTO `offres` (`id_offre`, `created_at`, `updated_at`, `id_employeur`, `nref`, `date_depot`, `descriptif_poste`, `niveau_etude`, `domaine`, `niveau_experience`, `competence`, `qualite`, `langue`, `adresse`, `ville`, `poste_cadre`, `type_contrat`, `debut_mission`, `procedure`, `region`) VALUES
(12, '2020-11-09 14:26:06', '2020-11-09 14:26:06', 18, 22354, '2020-11-06', 'Secrétaire', 'Bac+2', 'Qualité & Finance', 'Entre 1 et 3ans', 'Word, Excel ...', 'qualité', 'Francais', 'bd Ambassadeur Ben Aicha, 4°et. appt.23 Roche, Rabat', 'rabat', 'Sercretariat', 'CDD(Contrat à durée déterminée)', '2020-11-04', 'procedure', 'Rabat-Salé-Kenitra'),
(11, '2020-11-09 14:25:12', '2020-11-09 14:25:12', 18, 17896, '2020-11-01', 'FullStack develloper', 'Bac+5', 'Informatique', 'Entre 3 et 5 ans', 'Laravel , Vue Js ...', 'qualité', 'anglais', 'bd Ambassadeur Ben Aicha, 4°et. appt.23 Roche, Grand Casablanca', 'Casablanca', 'Ingénieur informatique', 'CDI(Contrat à durée indéterminée)', '2020-11-15', 'procedure', 'Casablanca-Settat');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projets`
--

DROP TABLE IF EXISTS `projets`;
CREATE TABLE IF NOT EXISTS `projets` (
  `id_projet` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_candidat` int(11) NOT NULL,
  `intitule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domaine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localisation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` int(11) NOT NULL,
  `motivation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delai_realisation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_projet`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING HASH
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
