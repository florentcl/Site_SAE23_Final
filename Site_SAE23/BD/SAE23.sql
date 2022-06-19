-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 17 Juin 2022 à 19:08
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database :  `SAE23`
--

-- --------------------------------------------------------
DROP DATABASE IF EXISTS `SAE23`;
CREATE DATABASE IF NOT EXISTS `SAE23`;
USE SAE23;

--
-- Table structure `ADMINISTRATION`
--

CREATE TABLE IF NOT EXISTS `ADMINISTRATION` (
  `LOGIN` varchar(15) NOT NULL,
  `PASSWD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- table content `ADMINISTRATION`
--

INSERT INTO `ADMINISTRATION` (`LOGIN`, `PASSWD`) VALUES
('admin', 'passroot');

-- --------------------------------------------------------

--
-- Table structure `BATIMENT`
--

CREATE TABLE IF NOT EXISTS `BATIMENT` (
  `BAT_ID` varchar(15) NOT NULL,
  `BAT_NOM` varchar(15) NOT NULL,
  `GEST_NOM` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table Content `BATIMENT`
--

INSERT INTO `BATIMENT` (`BAT_ID`, `BAT_NOM`, `GEST_NOM`) VALUES
('1', 'RT', 'GEST_RT'),
('2', 'INFO', 'GEST_INFO');

-- --------------------------------------------------------

--
-- Table structure `CAPTEUR`
--

CREATE TABLE IF NOT EXISTS `CAPTEUR` (
`CAPT_ID` int(5) NOT NULL,
  `CAPT_NOM` varchar(15) NOT NULL,
  `CAPT_TYPE` varchar(15) NOT NULL,
  `BAT_NOM` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Table Content `CAPTEUR`
--

INSERT INTO `CAPTEUR` (`CAPT_ID`, `CAPT_NOM`, `CAPT_TYPE`, `BAT_NOM`) VALUES
(2, 'TE208', 'temperature', 'RT'),
(3, 'TE104', 'temperature', 'RT'),
(4, 'CE208', 'co2', 'RT'),
(5, 'CE104', 'co2', 'RT'),
(6, 'TB103', 'temperature', 'INFO'),
(8, 'TB204', 'temperature', 'INFO'),
(9, 'CB103', 'co2', 'INFO'),
(10, 'CB204', 'co2', 'INFO');

-- --------------------------------------------------------

--
-- Table structure `GESTIONNAIRE`
--

CREATE TABLE IF NOT EXISTS `GESTIONNAIRE` (
  `GEST_NOM` varchar(15) NOT NULL,
  `LOGIN` varchar(15) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table content `GESTIONNAIRE`
--

INSERT INTO `GESTIONNAIRE` (`GEST_NOM`, `LOGIN`, `PASSWORD`) VALUES
('GEST_INFO', 'info', 'etud'),
('GEST_RT', 'rt', 'etud');

-- --------------------------------------------------------

--
-- Table structure `MESURE`
--

CREATE TABLE IF NOT EXISTS `MESURE` (
`MES_ID` int(5) NOT NULL,
  `MES_VAL` varchar(30) NOT NULL,
  `MES_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CAPT_NOM` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1212 ;

--
-- Table content `MESURE`
--

INSERT INTO `MESURE` (`MES_ID`, `MES_VAL`, `MES_DATE`, `CAPT_NOM`) VALUES
(1149, '362', '2022-06-13 06:26:22', 'CE104'),
(1150, '25', '2022-06-13 06:26:24', 'TB103'),
(1151, '744', '2022-06-13 06:26:26', 'CB103'),
--
-- Indexes for exported tables
--

--
-- Index for the table `ADMINISTRATION`
--
ALTER TABLE `ADMINISTRATION`
 ADD UNIQUE KEY `LOGIN` (`LOGIN`), ADD UNIQUE KEY `PASSWD` (`PASSWD`);

--
-- Index for the table `BATIMENT`
--
ALTER TABLE `BATIMENT`
 ADD PRIMARY KEY (`BAT_ID`), ADD UNIQUE KEY `BAT_NOM` (`BAT_NOM`), ADD UNIQUE KEY `ADMIN_NOM` (`GEST_NOM`);

--
-- Index for the table `CAPTEUR`
--
ALTER TABLE `CAPTEUR`
 ADD PRIMARY KEY (`CAPT_ID`), ADD UNIQUE KEY `CAPT_NOM` (`CAPT_NOM`), ADD KEY `CAPTEUR_ibfk_1` (`BAT_NOM`);

--
-- Index for the table `GESTIONNAIRE`
--
ALTER TABLE `GESTIONNAIRE`
 ADD PRIMARY KEY (`GEST_NOM`);

--
-- Index for the table `MESURE`
--
ALTER TABLE `MESURE`
 ADD PRIMARY KEY (`MES_ID`), ADD KEY `MESURE_ibfk_1` (`CAPT_NOM`);

--
-- AUTO_INCREMENT for exported tables
--

--
-- AUTO_INCREMENT for the table `CAPTEUR`
--
ALTER TABLE `CAPTEUR`
MODIFY `CAPT_ID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for the table `MESURE`
--
ALTER TABLE `MESURE`
MODIFY `MES_ID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1212;

-- Constraints for the table `CAPTEUR`
--
ALTER TABLE `CAPTEUR`
ADD CONSTRAINT `CAPTEUR_ibfk_1` FOREIGN KEY (`BAT_NOM`) REFERENCES `BATIMENT` (`BAT_NOM`) ON DELETE CASCADE;

--
-- Constraints for the table `MESURE`
--
ALTER TABLE `MESURE`
ADD CONSTRAINT `MESURE_ibfk_1` FOREIGN KEY (`CAPT_NOM`) REFERENCES `CAPTEUR` (`CAPT_NOM`) ON DELETE CASCADE;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
