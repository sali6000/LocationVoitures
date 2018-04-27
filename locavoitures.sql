-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 27 avr. 2018 à 17:56
-- Version du serveur :  5.7.19
-- Version de PHP :  7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `locavoitures`
--

DELIMITER $$
--
-- Procédures
--
DROP PROCEDURE IF EXISTS `activateCar`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `activateCar` (IN `carID` INT(255))  update voitures 
set actif = 1 
where voitureID = carID and actif = 0$$

DROP PROCEDURE IF EXISTS `activateUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `activateUser` (IN `userId` VARCHAR(255) CHARSET utf8)  update utilisateurs 
set actif = 1 
where utilisateur = userId and actif = 0$$

DROP PROCEDURE IF EXISTS `createCar`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `createCar` (IN `p_voitureID` INT(11), IN `p_marque` VARCHAR(255), IN `p_modele` VARCHAR(255), IN `p_couleur` VARCHAR(255), IN `p_date_location` INT(11), IN `p_date_retour` INT(11), IN `p_actif` INT(1))  NO SQL
INSERT INTO voitures (voitureID, marque, modele, couleur, date_location, date_retour, actif)
    VALUES (p_voitureID, p_marque, p_modele, p_couleur, p_date_location, p_date_retour, p_actif)$$

DROP PROCEDURE IF EXISTS `createUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `createUser` (IN `p_utilisateur` VARCHAR(255), IN `p_code` VARCHAR(255), IN `p_nom` VARCHAR(255), IN `p_prenom` VARCHAR(255), IN `p_admin` INT(11), IN `p_actif` INT(1))  NO SQL
INSERT INTO utilisateurs (utilisateur, code, nom, prenom, admin, actif)
    VALUES (p_utilisateur, p_code, p_nom, p_prenom, p_admin, p_actif)$$

DROP PROCEDURE IF EXISTS `deactivateCar`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deactivateCar` (IN `carID` INT(255))  update voitures
set actif = 0
where voitureID = carID and actif = 1$$

DROP PROCEDURE IF EXISTS `deactivateUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `deactivateUser` (IN `userId` VARCHAR(255) CHARSET utf8)  update utilisateurs
set actif = 0
where utilisateur = userId and actif = 1$$

DROP PROCEDURE IF EXISTS `updateCar`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateCar` (IN `p_voitureID` INT(11), IN `p_marque` VARCHAR(255), IN `p_modele` VARCHAR(255), IN `p_couleur` VARCHAR(255), IN `p_date_location` INT(11), IN `p_date_retour` INT(11))  NO SQL
update voitures 
set marque = p_marque,
    modele = p_modele,
    couleur = p_couleur,
    date_location = p_date_location,
    date_retour = p_date_retour
where voitureID = p_voitureID$$

DROP PROCEDURE IF EXISTS `updateUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUser` (IN `p_utilisateur` VARCHAR(255), IN `p_code` VARCHAR(255), IN `p_nom` VARCHAR(255), IN `p_prenom` VARCHAR(255), IN `p_admin` INT(11), IN `p_actif` INT(1))  NO SQL
update utilisateurs 
set utilisateur = p_utilisateur,
	code = p_code,
    nom = p_nom,
    prenom = p_prenom,
    admin = p_admin,
    actif = p_actif
where utilisateur = p_utilisateur$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `utilisateur` varchar(255) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `actif` int(1) DEFAULT NULL,
  PRIMARY KEY (`utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`utilisateur`, `code`, `nom`, `prenom`, `admin`, `actif`) VALUES
('amevdv', 'amee', 'Van dev', 'Ameliaaa2', 0, 0),
('chuckNorris', 'cN1234', 'Nourriss', 'Chouc', 1, 1),
('colinehab', 'habarya', 'habaryz', 'couline', 1, 0),
('coucou', 'coucou', 'coucou', 'coucou', 1, 0),
('coucouc', 'couc', 'couc', 'couc', 0, 1),
('coucour', 'sdisdjisdji', 'hello', 'sjjisji', 1, 0),
('coucoutet', 'dhudsuh', 'couc', 'couu', 1, 0),
('dianar', 'diana', 'diana', 'renaud', 1, 0),
('dijsidjij', 'dsijsij', 'ijdqijdqijdq', 'dqijijdqij', 0, 1),
('eloyclaes', 'eloy', 'claes', 'eloy', 1, 0),
('fan', 'sdjjisdji', 'fan', 'fan', 1, 0),
('hello', 'hello', 'c2', 'hello', 1, 1),
('helloyou', 'jdjds', 'test', 'tess', 1, 1),
('ijdwijwdijijF', 'SIJSIJIJS', 'FIJIJDSIJDS', 'sfijdsij', 1, 1),
('isudhhuisd', 'suihdsuhh', 'sduihdhsui', 'sdsihuui', 1, 0),
('jijsdijds', 'ssd', 'ijdsijdsijdsij', 'shujid', 0, 1),
('kirilso', 'sorokin', 'sorokin', 'kiril', 1, 0),
('kjdfjfji', 'csijdsidsij', 'fiijsjifsji', 'sijjisijs', 0, 1),
('mill', 'jdjdj', 'igotthejuice', 'meek', 1, 0),
('naf', 'eeueu', 'naf', 'nad', 0, 0),
('popup', 'popup', 'popup', 'popup', 0, 0),
('samih', 'testz', 'samiha', 'alkeilania', 1, 0),
('SamihExamen', 'Samih', 'Alke', 'Samih', 1, 1),
('sdsoo', 'ssdijdji', 'salutoti', 'oddsok', 1, 1),
('siusdhsdiu', 'dsuihdshuds', 'dshuuhds', 'husdhuds', 0, 0),
('snns', 'coucou', 'nad', 'nafd', 0, 1),
('test', 'test', 'test', 'test', 1, 0),
('testou', 'testou', 'testou', 'testou', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `voitures`
--

DROP TABLE IF EXISTS `voitures`;
CREATE TABLE IF NOT EXISTS `voitures` (
  `voitureID` int(11) NOT NULL,
  `marque` varchar(255) DEFAULT NULL,
  `modele` varchar(255) DEFAULT NULL,
  `couleur` varchar(255) DEFAULT NULL,
  `date_location` int(11) DEFAULT NULL,
  `date_retour` int(11) DEFAULT NULL,
  `actif` int(1) DEFAULT NULL,
  PRIMARY KEY (`voitureID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `voitures`
--

INSERT INTO `voitures` (`voitureID`, `marque`, `modele`, `couleur`, `date_location`, `date_retour`, `actif`) VALUES
(1, 'BMW', 'Série 3', 'Verte', 20160627, 20160710, 1),
(2, 'Porsche', 'Macan', 'Noir', 20150504, 20150610, 0),
(3, 'BMW', 'Série 3', 'Noire', 20160215, 20160330, 1),
(4, 'Tesla', 'Model S', 'Grise', 20160627, 20160629, 1),
(10, 'Ferrari', '430', 'Rouge', 20160510, 20160710, 1),
(15, 'Lamborghini', 'Murcielago', 'Jaune', 20160610, 20160720, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
