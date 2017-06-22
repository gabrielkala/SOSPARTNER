-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 15 Juin 2017 à 15:38
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `boom`
--

-- --------------------------------------------------------

--
-- Structure de la table `friends_relationships`
--

CREATE TABLE `friends_relationships` (
  `user_id1` int(11) NOT NULL DEFAULT '0',
  `user_id2` int(11) NOT NULL DEFAULT '0',
  `status` enum('0','1','2') DEFAULT '0',
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `friends_relationships`
--

INSERT INTO `friends_relationships` (`user_id1`, `user_id2`, `status`, `created_at`) VALUES
(17, 20, '1', '2016-06-06 03:15:19'),
(17, 49, '0', NULL),
(17, 53, '1', NULL),
(18, 19, '1', '2016-06-07 02:56:32'),
(19, 20, '0', '2016-06-07 01:30:33'),
(20, 25, '0', '2016-06-06 23:20:57'),
(20, 26, '1', '2016-06-08 12:14:47'),
(20, 53, '0', NULL),
(24, 24, '2', '2016-06-06 16:35:33'),
(25, 25, '2', '2016-06-06 16:43:03'),
(26, 26, '2', '2016-06-08 12:08:50'),
(27, 27, '2', '2016-08-08 01:32:35'),
(29, 29, '2', '2016-08-08 01:57:54'),
(32, 32, '2', NULL),
(33, 32, '1', NULL),
(33, 33, '2', NULL),
(34, 34, '2', NULL),
(36, 36, '2', NULL),
(37, 37, '2', NULL),
(38, 38, '2', NULL),
(39, 39, '2', NULL),
(40, 20, '0', NULL),
(40, 40, '2', NULL),
(43, 43, '2', NULL),
(44, 44, '2', NULL),
(45, 45, '2', NULL),
(46, 17, '1', NULL),
(46, 46, '2', NULL),
(47, 47, '2', NULL),
(48, 17, '1', NULL),
(48, 48, '2', NULL),
(49, 49, '2', NULL),
(51, 51, '2', NULL),
(52, 52, '2', NULL),
(53, 29, '0', NULL),
(53, 53, '2', NULL),
(54, 17, '1', NULL),
(54, 54, '2', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `inbox`
--

CREATE TABLE `inbox` (
  `user_one` int(11) NOT NULL,
  `user_two` int(11) NOT NULL,
  `hash` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `inbox`
--

INSERT INTO `inbox` (`user_one`, `user_two`, `hash`) VALUES
(17, 39, 21608),
(17, 20, 9200),
(20, 45, 21035),
(20, 29, 24571),
(20, 44, 2072),
(20, 53, 29297),
(20, 22, 9565);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `group_hash` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `group_hash`, `from_id`, `message`) VALUES
(8, 7341, 17, 'Salut ! '),
(9, 21608, 17, 'Tu vas bien ?'),
(10, 9200, 17, 'Salut '),
(11, 21035, 20, 'salut '),
(12, 24571, 20, 'salut '),
(13, 2072, 20, 'Hey ! Ã§a te dit une partie de foot dimanche ?'),
(14, 29297, 20, 'salut Albert '),
(15, 9565, 20, 'salut '),
(16, 21035, 45, 'salut '),
(17, 21035, 45, 'salut '),
(18, 21035, 45, 'Tu vas bien ?'),
(19, 21035, 45, 'hey '),
(20, 21035, 45, 'hey '),
(21, 21035, 45, 'hey '),
(22, 21035, 45, 'hey '),
(23, 21035, 45, 'hey '),
(24, 21035, 45, 'hey '),
(25, 21035, 45, 'hey '),
(26, 21035, 45, 'hey '),
(27, 21035, 45, 'hey '),
(28, 21035, 45, 'hey '),
(29, 9200, 20, 'salut '),
(30, 9200, 20, 'salut '),
(31, 9200, 20, 'tu vas bien ?'),
(32, 9200, 20, 'salut '),
(33, 9200, 20, 'tu vas bien ?'),
(34, 9200, 20, 'tu vas bien ?'),
(35, 9200, 20, 'tu vas bien ?'),
(36, 9200, 20, 'tu vas bien ?'),
(37, 9200, 20, 'tu vas bien ?'),
(38, 9200, 20, 'tu vas bien ?'),
(39, 9200, 20, 'tu vas bien ?'),
(40, 9200, 20, 'salut '),
(41, 9200, 20, 'salut '),
(42, 9200, 20, 'salut'),
(43, 9200, 20, 'salut'),
(44, 9200, 20, 'encule'),
(45, 9200, 20, 'encule'),
(46, 9200, 20, 'encule'),
(47, 9200, 20, 'encule'),
(48, 9200, 20, 'encule'),
(49, 9200, 20, 'un message\r\n'),
(50, 9200, 20, 'en cache'),
(51, 9200, 20, 'en cache'),
(52, 9200, 20, 'une fois'),
(53, 9200, 20, 'une fois'),
(54, 9200, 20, 'ok'),
(55, 21608, 17, 'salut '),
(56, 9200, 17, 'salut'),
(57, 9200, 20, 'comment tu vas ?'),
(58, 9200, 17, 'salut');

-- --------------------------------------------------------

--
-- Structure de la table `microposts`
--

CREATE TABLE `microposts` (
  `id` int(11) NOT NULL,
  `content` text,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `microposts`
--

INSERT INTO `microposts` (`id`, `content`, `user_id`, `created_at`) VALUES
(1, 'Bonjour A  tous !', 17, '2016-06-04 19:00:40'),
(3, 'Hey !', 20, '2016-06-05 22:01:47'),
(5, 'qui est chaud pour une partie de foot?', 17, '2016-06-06 11:25:54'),
(6, 'yooo', 25, '2016-06-06 16:44:12'),
(7, 'qui est disponible pour une partie de foot le samedi aprÃ¨s midi?', 26, '2016-06-08 12:11:48'),
(9, 'Bonjour je m\'appelle Mounia', 45, '2017-01-02 16:42:27'),
(10, 'J\'aime le sport', 45, '2017-01-02 16:43:15'),
(11, 'Je suis disponible pour une partie de Tennis samedi Ã  16h Ã  Ballard', 17, '2017-03-02 10:32:05'),
(12, 'Hey ! Qui est disponible pour une partie de foot ?', 54, '2017-04-03 17:23:42');

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `seen` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `notifications`
--

INSERT INTO `notifications` (`id`, `subject_id`, `name`, `user_id`, `created_at`, `seen`) VALUES
(1, 54, 'friend_request_sent', 17, '2017-03-30 17:22:31', '1'),
(2, 17, 'friend_request_sent', 54, '2017-03-31 17:07:23', '1'),
(3, 54, 'friend_request_sent', 17, '2017-04-03 17:04:49', '1'),
(4, 17, 'friend_request_sent', 54, '2017-04-03 21:20:21', '1'),
(5, 54, 'friend_request_sent', 17, '2017-04-03 21:21:04', '1'),
(6, 53, 'friend_request_sent', 17, '2017-04-03 22:45:32', '1'),
(7, 17, 'friend_request_sent', 53, '2017-04-03 22:47:05', '1'),
(8, 53, 'friend_request_sent', 17, '2017-04-05 16:50:54', '1'),
(9, 53, 'friend_request_sent', 17, '2017-04-05 16:55:53', '1'),
(10, 53, 'friend_request_sent', 17, '2017-04-05 16:56:01', '1'),
(11, 53, 'friend_request_sent', 17, '2017-04-05 16:56:03', '1'),
(12, 53, 'friend_request_sent', 17, '2017-04-05 16:56:05', '1'),
(13, 53, 'friend_request_sent', 17, '2017-04-05 16:56:07', '1'),
(14, 53, 'friend_request_sent', 17, '2017-04-12 17:04:14', '1'),
(15, 29, 'friend_request_sent', 53, '2017-04-12 17:08:25', '0'),
(16, 44, 'friend_request_sent', 20, '2017-04-19 19:42:32', NULL),
(17, 53, 'friend_request_sent', 20, '2017-04-19 19:45:57', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `active` enum('0','1') DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `sex` enum('H','F') DEFAULT NULL,
  `code_postal` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `disponible` enum('0','1') DEFAULT '0',
  `bio` text,
  `jour` enum('lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche') DEFAULT NULL,
  `sport` enum('badminton','tennis','squash','handball','basket','foot','volley','judo','golf') DEFAULT NULL,
  `disponibilite` set('8h-10h','10h-12h','12h-14h','14h-16h','16h-18h','18h-20h','20h-22h') DEFAULT NULL,
  `niveau` enum('debutant','amateur','competiteur','professionnel') DEFAULT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `pseudo`, `email`, `password`, `active`, `created_at`, `ville`, `adresse`, `sex`, `code_postal`, `telephone`, `disponible`, `bio`, `jour`, `sport`, `disponibilite`, `niveau`, `avatar`) VALUES
(17, 'Kala', 'gaby', 'gaby@gamil.com', '$2y$10$zRf7kCWLYrUa75WjcsOn.O2Z1eKB7Uo/2nY5.6mtuwXCOhZVn.eNO', '1', '2016-06-03 02:48:15', 'Le Raincy', 'Le Raincy', 'H', '93340', '0758462579', '1', '    Amoureux du tennis.', 'lundi', 'badminton', '8h-10h', '', ''),
(18, 'Da Costa', 'Stanii', 'stanley@yahoo.fr', '$2y$10$zHLCUA3qvV06Vtgs4scMG.OWvrVDT/jgU/dwTtyyYI59/vRxSXM4u', '1', '2016-06-03 02:59:29', 'MÃ©ziÃ¨res sur Seine', '1 allÃ©e des vergets', 'H', '78600', '0696361278', '1', ' beau gosse, champion de boxe', 'lundi', 'badminton', '', 'debutant', ''),
(19, 'Kollo', 'Jean', 'kollo@gmail.com', '$2y$10$4eyRUSnVaEEeZxpZBIWUeuGO8Zm.OgWPJVVlteBPKa.Y3veK49tQu', '1', '2016-06-03 03:01:48', 'Antony', 'Antony', 'H', '92560', '0789362421', '1', ' Jeune sportif, 25 ans en France. 42 en Afrique', 'lundi', 'badminton', '8h-10h', '', ''),
(20, 'Sangare', 'Ely', 'elygangare@yahoo.fr', '$2y$10$u/peoxRQ/GzuFF3d2EunsOh1j3lUXGbNA2a4eb3l2xPyuYg3rxXB.', '1', '2016-06-03 03:03:57', 'Morsang sur Orge', 'Morsang sur Orge', 'H', '91425', '0632962384', '1', '  amateur de foot', 'mercredi', 'foot', '14h-16h', 'professionnel', ''),
(21, 'Truchot', 'Pierre', 'truchot@yahoo.fr', '$2y$10$FWfSPjZg5mh7G9rMFemU0OBGuDhyRqIjGG3aNWGq3obSEeqb8/6J2', '1', '2016-06-03 10:01:13', 'Marseille', '32 Avenue de dijon', 'F', '750235', '0684256974', '1', 'J\'aime le volley !', 'vendredi', 'volley', '16h-18h', '', ''),
(22, 'Mahamat', 'Nasser', 'nasser@gmail.com', '$2y$10$B0XUDUCCnaUizXMaK2KU/.Wfk.JZ2gMRyDos1bRzktzzQqbgs4346', '1', '2016-06-04 16:06:02', 'Sevran', 'Sevran', 'F', '93350', '0636528961', '1', 'j\'aime le foot', 'lundi', 'badminton', '8h-10h', 'competiteur', ''),
(23, 'fhgeriogh', 'irehioehg', 'jul@gmail.com', '$2y$10$YEJ.mXDJYceHYc6.QK6hPOZDWb3U9a9Z.XXUXbaL/SK0R17swXm4K', '0', '2016-06-06 16:33:59', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(24, 'eufgzefy', 'fhreeuirg', 'jsul@gmail.com', '$2y$10$dkY4OHkOC/nGNT78ut/Wi.aCrFlHtuhMNB6cQ6DJWYPDT9uUf23qi', '1', '2016-06-06 16:35:21', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(25, 'Gabriel NKALA', 'gabriel', 'rolland.alexis1992@gmail.com', '$2y$10$oYKgRZexDz7fWSbM3sYYMeemxpyd75swViQPWEdVC0kvhAeDUDdjq', '1', '2016-06-06 16:42:41', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(26, 'Mansour', 'Man', 'mahamatmansour@gmail.com', '$2y$10$fTCmN9mMDPkEB6K3fymemeO05cxUwso5ILPP5IYKgQVtNpluQjRDa', '1', '2016-06-08 12:08:42', 'Paris', '25 Avenue des Champs ElysÃ©e', 'H', '75008', '0639541263', '1', ' J\'aime le foot', 'samedi', 'foot', '16h-18h', 'professionnel', ''),
(27, 'Boukoulou', 'prisca', 'prisca@yahoo.fr', '$2y$10$gAsHDnC2TNEcGsTtX4FlRObACqcCXseh089z98yS7xaWYjsciPjUS', '1', '2016-08-08 01:29:46', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(28, 'boussa', 'princia', 'princia@gmail.com', '$2y$10$lJcCBsV2eT9Q98Dlxu7t8OjyfC6Qd1HLfzjMo1XxwEQZUlNGNtRqO', '0', '2016-08-08 01:52:36', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(29, 'EBVOUNDI', 'amelie', 'amelie@gmail.com', '$2y$10$B9gDKPSWUsj2YC4FhOvOJOV0OdkX1akRo3peXbinAXi6kcNtH1UMS', '1', '2016-08-08 01:57:48', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(30, 'Sarkosy', 'Hollande', 'hollande@yahoo.fr', '$2y$10$DlHEydEJZHNtWtpCNiwcR.rdCVKgiCfxGQCBa4Pb1fzmpylRmMDDC', '0', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(31, 'jean', 'cope', 'cope@yahoo.fr', '$2y$10$Yn9NU5n6nqGrGCreXGylGuiRVZ8p97o9wiGjnRIUaSJVyBI.IxIDe', '0', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(32, 'blablabla', 'blablacar', 'bla@gmail.fr', '$2y$10$66BO1DxORev.Sm5PJVsXHujYxXI3d0Ih/uwyEWiaW0G/FcB3sh3e2', '1', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(33, 'Franck', 'Eric', 'eric@yahoo.fr', '$2y$10$qcAqT6q2m51zW/HuZpc/9u8dwHhKgpiiGz.j2ou8ePsOTal5q7aRi', '1', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(34, 'Alain', 'Juppe', 'alain@gmail.fr', '$2y$10$Rq4qWZK9pLzV1IxXmv/60OF4nvvxNvdz0FlxJENLboU4x4ovV88QG', '1', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(35, 'joslin', 'safrano', 'safrano@yahoo.fr', '$2y$10$VAMJcNaXwgJC9KI4sG1LO.LRMc5G0Q9K.12zT8xScXmnwxaebIZ1W', '0', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(36, 'philipe', 'traineau', 'phi@yahoo.fr', '$2y$10$dHb8EQDnOuaZokC2U9KUeu9LQA4Z.lVCGOOsewVtpaD1H4rWUzzXy', '1', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(37, 'nasta', 'anasta', 'anasta@gmail.fr', '$2y$10$cxF/9Cmpqs9miFiZsrCY6O2HxCPfrQsQH.3qDkE0f3Zy5BaHRag3y', '1', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(38, 'Obama', 'Barack', 'obama@gmail.com', '$2y$10$.l.trlmfMiwryS/YiWE2suL5jWV4VHebzBVHIkQBLx3BnxQ8hZUwy', '1', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(39, 'Yacouba', 'Traore', 'traore@gmail.fr', '$2y$10$jISvgB5FcsHXGdklGP8yie3oL3tJyqbn7D73UU3h8S4QBVD4vA/IW', '1', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(40, 'stan', 'da costa', 'costa@yahoo.fr', '$2y$10$8AohhBgI7at0JvQai3gcEu2Y77hEedVfO.JXZZSC965H1QOgJXbZ.', '1', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(41, 'Tati', 'tati12', 'tati@yahoo.fr', '$2y$10$FbOSADCLorhFIfYZxntlsOQs.oXNUTkPor8k6/aXeo2wqTIVhUWjq', '0', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(42, 'toto', 'toto10', 'toto@gmail.com', '$2y$10$K/HvJNH.W6a2MWErI0K5WONhglEfCK0Sc5z9pTf/ueLdy8Iq8LCHa', '0', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(43, 'martin', 'martin10', 'martin@gmail.fr', '$2y$10$jscxjjikYXN5Os1xNbUceOxbekTVzl5wQuqFM8Nw9G0txXJws3Icy', '1', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(44, 'Tarek', 'Tamarek', 'tamarek@yahoo.fr', '$2y$10$ThDjyVIzz4jb1nho4VA8zeMS/qcnI2.a9/JDxIvEj8d8sr5intOUu', '1', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(45, 'Mounia', 'Lyaf', 'mounia@yahoo.fr', '$2y$10$WGeQS56.uRkGbJ.rNRhlf.5Cagon/njQtb3or4B25OECtCJfhTATC', '1', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(46, 'Tohio', 'Armel', 'armel@yahoo.fr', '$2y$10$AAcBhIcg/j4ecUQvHJSUdev1s5uTHFxhOZv/EouHT.BNcpZ3oOWIi', '1', NULL, 'Boulogne Bilancourt', '65 allÃ©e nicolas carnot', 'H', '92100', '0607020308', '0', ' Je suis un mec sympa', 'samedi', 'judo', '8h-10h', 'amateur', ''),
(47, 'Dylan', 'Marcel', 'marcel@gmail.com', '$2y$10$Cgd68sfCtLroM6P2gnsVuOO.VkZu3YWo9r1dXEIOkfKDPm.Cmay4i', '1', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(48, 'yannis', 'yan12', 'yan@gmail.com', '$2y$10$ktMZ.Kh0M1RvyBqeQauAButTwdPa80B5cnohw7gYl6YQ4iFbZV84S', '1', NULL, 'Marseille', 'Paris', 'H', '', '', '1', ' Fan de basket', 'samedi', 'basket', '18h-20h', 'amateur', ''),
(49, 'Depraz', 'Clement', 'clement@gmail.com', '$2y$10$O.Kj/I0vJuAoCULnCECHTuRw0Xd289jNZpKLjdoiyo6CG/GEmFPH2', '1', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(50, 'Leroy', 'Bastien', 'bastien@gmail.com', '$2y$10$NfEBBHz8CXlFyd2kiceI8et1yB.aiEbEQLkIffYTy0LnvR.nwe8k.', '0', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(51, 'Kala', 'Elvis', 'elvis@gmail.com', '$2y$10$r7xooc71CuCZo6Z00ktRQ./YATpZ8c3IM240P2SdJp8ynbESPmbkC', '1', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(52, 'Amel', 'Vincent', 'vincent@gmail.com', '$2y$10$IaP/q58wZNcr0z12c21xgOHSAJ5AxPfeKuComqDxiWJgo5KsqzZJq', '1', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(53, 'Biossi', 'Albert', 'albert@gmail.com', '$2y$10$JwOzxht6LIL5aF9XurJ/Oeco022s4iPDNBxIxCd5GD7QVhnpejHk6', '1', NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, ''),
(54, 'Ugo', 'ugo12', 'ugo@gmail.com', '$2y$10$AhZ2pyT7yZbklIyAQoIA7esVAMAPPsJfRTsdv/c.jhijlJKwWk6ai', '1', NULL, 'Lausanne', 'Lausanne', 'H', '885', '0545635', '0', ' j\'aime le tennis', 'samedi', 'tennis', '18h-20h', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `visites_jour`
--

CREATE TABLE `visites_jour` (
  `id` int(11) NOT NULL,
  `visites` mediumint(9) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `friends_relationships`
--
ALTER TABLE `friends_relationships`
  ADD PRIMARY KEY (`user_id1`,`user_id2`),
  ADD KEY `user_id2` (`user_id2`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `microposts`
--
ALTER TABLE `microposts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT pour la table `microposts`
--
ALTER TABLE `microposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `friends_relationships`
--
ALTER TABLE `friends_relationships`
  ADD CONSTRAINT `friends_relationships_ibfk_1` FOREIGN KEY (`user_id1`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `friends_relationships_ibfk_2` FOREIGN KEY (`user_id2`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `microposts`
--
ALTER TABLE `microposts`
  ADD CONSTRAINT `microposts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
