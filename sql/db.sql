-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 25, 2019 at 06:59 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `orga_formation`
--
CREATE SCHEMA IF NOT EXISTS `orga_formation` DEFAULT CHARACTER SET utf8 ;
USE `orga_formation` ;

-- --------------------------------------------------------

--
-- Table structure for table `eleve`
--

CREATE TABLE `eleve` (
  `ideleve` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `entreprise_identreprise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eleve`
--

INSERT INTO `eleve` (`ideleve`, `nom`, `prenom`, `entreprise_identreprise`) VALUES
(1, 'Esby', 'Marybelle', 1),
(2, 'Spinas', 'Bea', 1),
(3, 'Petricek', 'Thornton', 2),
(4, 'Dymidowicz', 'Lebbie', 2),
(5, 'Pettman', 'Jacquelyn', 2),
(6, 'Gubbin', 'Finn', 3),
(7, 'Standall', 'Chaddy', 4),
(8, 'Tattam', 'Candace', 5),
(9, 'Trahar', 'Jamaal', 5),
(10, 'Henderson', 'Ross', 1),
(11, 'Brood', 'Maximilien', 4),
(12, 'Dodshon', 'Aubry', 2),
(13, 'Roddan', 'Lynett', 1),
(14, 'Kells', 'Elianora', 4),
(15, 'Markel', 'Alecia', 3),
(16, 'Roll', 'Jeddy', 1),
(17, 'Wallage', 'Addie', 5),
(18, 'Skitt', 'Sebastian', 4),
(19, 'Petherick', 'Donnamarie', 5),
(20, 'Wordington', 'Pollyanna', 3);

-- --------------------------------------------------------

--
-- Table structure for table `entreprise`
--

CREATE TABLE `entreprise` (
  `identreprise` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `entreprise`
--

INSERT INTO `entreprise` (`identreprise`, `nom`) VALUES
(1, 'Credit Acceptance Corporation'),
(2, 'Axis Capital Holdings Limited'),
(3, 'Ennis, Inc.'),
(4, 'Teradata Corporation'),
(5, 'Cypress Energy Partners, L.P.');

-- --------------------------------------------------------

--
-- Table structure for table `formation`
--

CREATE TABLE `formation` (
  `idFormation` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `categorie` varchar(45) NOT NULL,
  `professeur_idprofesseur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `formation`
--

INSERT INTO `formation` (`idFormation`, `nom`, `categorie`, `professeur_idprofesseur`) VALUES
(1, 'Symfony', 'Développement web', 1),
(3, 'REACT', 'Développement web', 5);

-- --------------------------------------------------------

--
-- Table structure for table `participation`
--

CREATE TABLE `participation` (
  `note` varchar(45) DEFAULT NULL,
  `eleve_ideleve` int(11) NOT NULL,
  `session_idsession` int(11) NOT NULL,
  `idparticipation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `professeur`
--

CREATE TABLE `professeur` (
  `idprofesseur` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `professeur`
--

INSERT INTO `professeur` (`idprofesseur`, `nom`, `prenom`) VALUES
(1, 'Fraanchyonok', 'Leontine'),
(2, 'Pellingar', 'Erin'),
(3, 'Tourle', 'Gery'),
(4, 'Bidgood', 'Maryl'),
(5, 'Lundon', 'Flin');

-- --------------------------------------------------------

--
-- Table structure for table `salle`
--

CREATE TABLE `salle` (
  `idsalle` int(11) NOT NULL,
  `numero` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `idsession` int(11) NOT NULL,
  `date_debut` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  `salle_idsalle` int(11) NOT NULL,
  `professeur_idprofesseur` int(11) NOT NULL,
  `formation_idFormation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`ideleve`),
  ADD KEY `fk_eleve_entreprise1_idx` (`entreprise_identreprise`);

--
-- Indexes for table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`identreprise`);

--
-- Indexes for table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`idFormation`),
  ADD KEY `fk_formation_professeur1_idx` (`professeur_idprofesseur`);

--
-- Indexes for table `participation`
--
ALTER TABLE `participation`
  ADD PRIMARY KEY (`idparticipation`),
  ADD KEY `fk_participation_eleve1_idx` (`eleve_ideleve`),
  ADD KEY `fk_participation_session1_idx` (`session_idsession`);

--
-- Indexes for table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`idprofesseur`);

--
-- Indexes for table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`idsalle`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`idsession`),
  ADD KEY `fk_session_salle1_idx` (`salle_idsalle`),
  ADD KEY `fk_session_professeur1_idx` (`professeur_idprofesseur`),
  ADD KEY `fk_session_formation1_idx` (`formation_idFormation`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eleve`
--
ALTER TABLE `eleve`
  MODIFY `ideleve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `identreprise` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `formation`
--
ALTER TABLE `formation`
  MODIFY `idFormation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `participation`
--
ALTER TABLE `participation`
  MODIFY `idparticipation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professeur`
--
ALTER TABLE `professeur`
  MODIFY `idprofesseur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `salle`
--
ALTER TABLE `salle`
  MODIFY `idsalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `idsession` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eleve`
--
ALTER TABLE `eleve`
  ADD CONSTRAINT `fk_eleve_entreprise1` FOREIGN KEY (`entreprise_identreprise`) REFERENCES `entreprise` (`identreprise`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `fk_formation_professeur1` FOREIGN KEY (`professeur_idprofesseur`) REFERENCES `professeur` (`idprofesseur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `participation`
--
ALTER TABLE `participation`
  ADD CONSTRAINT `fk_participation_eleve1` FOREIGN KEY (`eleve_ideleve`) REFERENCES `eleve` (`ideleve`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_participation_session1` FOREIGN KEY (`session_idsession`) REFERENCES `session` (`idsession`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `fk_session_formation1` FOREIGN KEY (`formation_idFormation`) REFERENCES `formation` (`idFormation`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_session_professeur1` FOREIGN KEY (`professeur_idprofesseur`) REFERENCES `professeur` (`idprofesseur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_session_salle1` FOREIGN KEY (`salle_idsalle`) REFERENCES `salle` (`idsalle`) ON DELETE NO ACTION ON UPDATE NO ACTION;
