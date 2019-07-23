-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 23. Jul 2019 um 08:07
-- Server-Version: 10.3.16-MariaDB
-- PHP-Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `db855337`
--
CREATE DATABASE IF NOT EXISTS `db855337` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `db855337`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fragebogen`
--

CREATE TABLE `fragebogen` (
  `UID` int(11) NOT NULL
  `Zufriedenheit` int(11) NOT NULL,
  `ErreichbarkeitSupp` int(11) NOT NULL,
  `ErreichbarkeitBerat` int(11) NOT NULL,
  `LoesungskompetenzSupp` int(11) NOT NULL,
  `LoesungskompetenzBerat` int(11) NOT NULL,
  `BedarfSchul` int(11) NOT NULL,
  `BedarfMobil` int(11) NOT NULL,
  `BedarfShop` int(11) NOT NULL,
  `BedarfWebsite` int(11) NOT NULL,
  `BedarfKunden` int(11) NOT NULL,
  `BedarfNumbirds` int(11) NOT NULL,
  `BenutzerfreundlichkeitSchul` int(11) NOT NULL,
  `BenutzerfreundlichkeitMobil` int(11) NOT NULL,
  `BenutzerfreundlichkeitShop` int(11) NOT NULL,
  `BenutzerfreundlichkeitWebsite` int(11) NOT NULL,
  `BenutzerfreundlichkeitKunden` int(11) NOT NULL,
  `BenutzerfreundlichkeitNumbirds` int(11) NOT NULL,
  `PreisLeistungSchul` int(11) NOT NULL,
  `PreisLeistungMobil` int(11) NOT NULL,
  `PreisLeistungShop` int(11) NOT NULL,
  `PreisLeistungWebsite` int(11) NOT NULL,
  `PreisLeistungKunden` int(11) NOT NULL,
  `PreisLeistungNumbirds` int(11) NOT NULL,
  `AllgZQuali` int(11) NOT NULL,
  `AllgZDesign` int(11) NOT NULL,
  `AllgZPreis` int(11) NOT NULL,
  `Gesamturteil` int(11) NOT NULL,
  `vierVerbesserung` text COLLATE utf8_bin NOT NULL,
  `fuenfVerbesserung` text COLLATE utf8_bin NOT NULL,
  `siebenVerbesserung` text COLLATE utf8_bin NOT NULL,
  `achtMeinung` text COLLATE utf8_bin NOT NULL,
  `neunWeiterempfohlen` text COLLATE utf8_bin NOT NULL,
  `zehnKommentar` text COLLATE utf8_bin NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `fragebogen`
--
ALTER TABLE `fragebogen`
  ADD PRIMARY KEY (`UID`);
--
-- Datenbank: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

