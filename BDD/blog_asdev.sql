-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 05 sep. 2018 à 10:23
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  'blog_asdev'
--

-- --------------------------------------------------------

--
-- Structure de la table 'comment'
--

DROP TABLE IF EXISTS comment;
CREATE TABLE IF NOT EXISTS comment (
  IdCom int(11) NOT NULL AUTO_INCREMENT,
  Content varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  CreationDate date NOT NULL,
  Status varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  UserId int(11) NOT NULL,
  PostId int(11) NOT NULL,
  PRIMARY KEY (IdCom),
  KEY 'user_comment_fk' (UserId),
  KEY 'post_comment_fk' (PostId)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table 'comment'
--

INSERT INTO comment (IdCom, Content, CreationDate, Status, UserId, PostId) VALUES
(1, 'Yes ! bon courage dude !', '2018-07-29', '1', 1, 1),
(2, 'c\'est déjà pas mal comme ça ! bon courage pour la suite', '2018-07-29', '1', 2, 1),
(5, 'C\'est bon là tu tiens le truc !', '2018-09-03', '1', 1, 2),
(4, 'Je viens de regarder et ça à beaucoup évolué !\r\nContinue comme ça tu tiens le bon bout !', '2018-09-02', '1', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table 'post'
--

DROP TABLE IF EXISTS post;
CREATE TABLE IF NOT EXISTS post (
  PostId int(11) NOT NULL AUTO_INCREMENT,
  Title varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  Head text COLLATE utf8_unicode_ci NOT NULL,
  Image varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  Content mediumtext COLLATE utf8_unicode_ci NOT NULL,
  LastModif date NOT NULL,
  CreatDate date NOT NULL,
  UserId int(11) NOT NULL,
  PRIMARY KEY (PostId),
  KEY 'user_post_fk' (UserId)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table 'post'
--

INSERT INTO post (PostId, Title, Head, Image, Content, LastModif, CreatDate, UserId) VALUES
(1, 'Bienvenue sur ce blog', 'Ce blog est mon tout premier !', 'https://image.noelshack.com/fichiers/2018/30/7/1532873947-success-kido.png', 'Bienvenue sur ce blog, mon tout premier blog, créé dans le cadre de ma formation OpenClassroom.<br />\r\n Ici tout est codé par mes soins. Surtout faites moi part de vos impressions dans les commentaires :) !<br />\r\n A bientôt.', '2018-09-03', '2018-07-29', 1),
(2, 'Ca avance !', 'Et ça avance bien !', 'https://i.imgflip.com/2glnkk.jpg', 'Le site est quasiment terminé, et je pense avoir fait beaucoup de progrès grâce à ce projet.\r\nRendez-vous dans quelques jours quand le site sera vraiment terminé.\r\n\r\nEn attendant : Cheers !', '2018-08-26', '2018-08-26', 1),
(5, 'On est prêt !', 'Le site part en ligne !', 'https://image.noelshack.com/fichiers/2018/36/3/1536140900-carl-sagan-mind-blown-e1476180767148.jpg', 'Ca y est ! tout est prêt et le site va pouvoir partir en ligne.<br />\r\nChers internautes, sachez que ça aura été dur ! mais qu\'on y est finalement parvenu XD !', '2018-09-05', '2018-09-05', 1);

-- --------------------------------------------------------

--
-- Structure de la table 'user'
--

DROP TABLE IF EXISTS user;
CREATE TABLE IF NOT EXISTS user (
  UserId int(11) NOT NULL AUTO_INCREMENT,
  Name varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  FirstName varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  Username varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  Mail varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  Rights int(11) NOT NULL,
  Password varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (UserId)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table 'user'
--

INSERT INTO user (UserId, Name, FirstName, Username, Mail, Rights, Password) VALUES
(2, 'Billon', 'Pierre', 'Bamba_triste', 'bamba_triste@gmail.com', 2, 'Bamba_Triste_76'),
(1, 'SARRAIL', 'Aurèle', 'Xan51', 'aurele.sarrail@gmail.com', 1, '$2y$10$pXSIq17Yzd9LF24Y2G6GFei1mg3VSJCgrKAb30dv81fRAUxVdNPC.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
