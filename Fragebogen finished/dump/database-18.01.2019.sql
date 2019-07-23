-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Erstellungszeit: 18. Jan 2019 um 15:02
-- Server-Version: 5.6.38
-- PHP-Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `fragebogen`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fragebogen`
--

CREATE TABLE `fragebogen` (
  `uid` int(11) NOT NULL,
  `Skischule` varchar(255) NOT NULL,
  `Namen` varchar(255) NOT NULL,
  `Datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Erreichbarkeit` int(11) NOT NULL,
  `Support` int(11) NOT NULL,
  `Beratung` int(11) NOT NULL,
  `Loesungskompetenz` int(11) NOT NULL,
  `WsSports` int(11) NOT NULL,
  `Onlineshop` int(11) NOT NULL,
  `WsSportsMobil` int(11) NOT NULL,
  `Numbirds` int(11) NOT NULL,
  `KundenportalMySports` int(11) NOT NULL,
  `Website` int(11) NOT NULL,
  `Bedienerfreundlichkeit` int(11) NOT NULL,
  `Kommentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `fragebogen`
--
ALTER TABLE `fragebogen`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `fragebogen`
--
ALTER TABLE `fragebogen`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
