-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 08. Okt 2018 um 19:30
-- Server-Version: 10.1.35-MariaDB
-- PHP-Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `restaurant`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `anmeldedaten`
--

CREATE TABLE `anmeldedaten` (
  `MitarbeiterNr` int(11) NOT NULL,
  `Benutzername` varchar(255) NOT NULL,
  `Passwort` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `anmeldedaten`
--

INSERT INTO `anmeldedaten` (`MitarbeiterNr`, `Benutzername`, `Passwort`) VALUES
(1, 'Max.Müller', 'Test123'),
(2, 'Sabine.Schmidt', 'Test456');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bestellung`
--

CREATE TABLE `bestellung` (
  `BestellNr` int(11) NOT NULL,
  `TischNr` int(11) NOT NULL,
  `SpeiseNr` int(11) NOT NULL,
  `MitarbeiterNr` int(11) NOT NULL,
  `bestellteMenge` int(11) NOT NULL,
  `Bestellzeitpunkt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `bestellung`
--

INSERT INTO `bestellung` (`BestellNr`, `TischNr`, `SpeiseNr`, `MitarbeiterNr`, `bestellteMenge`, `Bestellzeitpunkt`) VALUES
(2, 1, 12, 1, 1, '2018-10-04 08:19:04'),
(3, 1, 11, 1, 3, '2018-10-04 08:19:04'),
(4, 1, 6, 1, 1, '2018-10-07 19:09:05'),
(5, 1, 11, 1, 1, '2018-10-07 19:09:05'),
(6, 1, 4, 1, 1, '2018-10-08 12:52:55');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kunde`
--

CREATE TABLE `kunde` (
  `GastNr` int(11) NOT NULL,
  `TischNr` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Nachname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `kunde`
--

INSERT INTO `kunde` (`GastNr`, `TischNr`, `Name`, `Nachname`) VALUES
(1, 1, 'Linus', 'Rothe'),
(2, 1, 'Anton', 'Zinn'),
(3, 1, 'Christina', 'Behm'),
(4, 1, 'Thomas', 'Müller');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mitarbeiter`
--

CREATE TABLE `mitarbeiter` (
  `MitarbeiterNr` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Nachname` varchar(255) NOT NULL,
  `Alter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `mitarbeiter`
--

INSERT INTO `mitarbeiter` (`MitarbeiterNr`, `Name`, `Nachname`, `Alter`) VALUES
(1, 'Max', 'Müller', 30),
(2, 'Sabine', 'Schmidt', 25);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `speise`
--

CREATE TABLE `speise` (
  `SpeiseNr` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Speiseart` varchar(255) NOT NULL,
  `Zubereitungszeit` time NOT NULL,
  `Preis` double(6,2) NOT NULL,
  `verfügbareMenge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `speise`
--

INSERT INTO `speise` (`SpeiseNr`, `Name`, `Speiseart`, `Zubereitungszeit`, `Preis`, `verfügbareMenge`) VALUES
(1, 'Minz-Spinat mit Ziegenfrischkäsecreme', 'Vorspeise', '00:05:00', 4.90, 20),
(2, 'Exotische Tomatensuppe mit Garnelenspießen', 'Vorspeise', '00:04:00', 5.50, 25),
(3, 'Spargel-Schinken mit einer feinen Käsesauce', 'Vorspeise', '00:06:00', 4.90, 20),
(4, 'Entenkeule mit Knödeln und Rotkraut', 'Hauptspeise', '00:10:00', 9.50, 20),
(5, 'Rindergulasch mit Butterspätzle', 'Hauptspeise', '00:10:00', 8.90, 15),
(6, 'Schnitzel nach Wiener Art mit Pommes und Jägersauce', 'Hauptspeise', '00:12:00', 9.50, 10),
(7, 'Schweinefilet mit Zucchini in Gorgonzola-Sahne-Sauce', 'Hauptspeise', '00:12:00', 8.90, 20),
(8, 'Vanillepudding mit zartem Schokoguss', 'Nachspeise', '00:08:00', 4.90, 10),
(9, 'Pfannkuchenstreifen mit Quitten-Rosinen-Kompott', 'Nachspeise', '00:08:00', 5.20, 15),
(10, 'Käsekuchen mit hausgemachter Erdbeermarmelade', 'Nachspeise', '00:10:00', 4.90, 10),
(11, 'Coca Cola 0,5L', 'Getränk', '00:02:00', 3.50, 10),
(12, 'Bier vom Fass 0,5L', 'Getränk', '00:02:00', 4.00, 10),
(13, 'Flasche Tafelwasser 0,75L', 'Getränk', '00:02:00', 3.50, 10),
(14, 'Orangensaft 0,4L', 'Getränk', '00:04:00', 3.80, 10),
(15, 'Hamburger mit Rindfleisch und Pommes', 'Hauptspeise', '00:15:00', 10.90, 15),
(16, 'Pancake mit Ahornsirup und Puderzucker', 'Nachspeise', '00:05:00', 5.80, 15),
(17, 'Burrito mit frischen Bohnen, Salatstreifen und Sahne', 'Hauptspeise', '00:15:00', 8.50, 10),
(18, 'Gebratener Lachs mit Feldsalat, Rispentomaten und Pilzen', 'Hauptspeise', '00:12:00', 9.90, 10),
(19, 'Spaghetti mit hausgemachter Bolognese-Sauce', 'Hauptspeise', '00:10:00', 7.90, 20),
(20, 'Zarter hausgemachter Schokokuchen', 'Nachspeise', '00:08:00', 5.50, 15),
(21, 'Schoko-Biscuit mit Sahne und frischen Heidelbeeren', 'Nachspeise', '00:06:00', 5.80, 10),
(22, 'Pikante Hackfleischwürstchen im Speckmantel', 'Vorspeise', '00:04:00', 5.90, 15);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tisch`
--

CREATE TABLE `tisch` (
  `TischNr` int(11) NOT NULL,
  `SessionPasswort` varchar(255) NOT NULL,
  `Größe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `tisch`
--

INSERT INTO `tisch` (`TischNr`, `SessionPasswort`, `Größe`) VALUES
(1, 'test', 4),
(2, 'test', 4),
(3, 'test', 6),
(4, 'test', 6),
(5, 'test', 2),
(6, 'test', 2);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `anmeldedaten`
--
ALTER TABLE `anmeldedaten`
  ADD KEY `Mitarbeiter-Nr` (`MitarbeiterNr`);

--
-- Indizes für die Tabelle `bestellung`
--
ALTER TABLE `bestellung`
  ADD PRIMARY KEY (`BestellNr`),
  ADD KEY `Mitarbeiter-Nr` (`MitarbeiterNr`),
  ADD KEY `Speise-Nr` (`SpeiseNr`),
  ADD KEY `Tisch-Nr` (`TischNr`);

--
-- Indizes für die Tabelle `kunde`
--
ALTER TABLE `kunde`
  ADD PRIMARY KEY (`GastNr`),
  ADD KEY `Tisch-Nr` (`TischNr`);

--
-- Indizes für die Tabelle `mitarbeiter`
--
ALTER TABLE `mitarbeiter`
  ADD PRIMARY KEY (`MitarbeiterNr`);

--
-- Indizes für die Tabelle `speise`
--
ALTER TABLE `speise`
  ADD PRIMARY KEY (`SpeiseNr`);

--
-- Indizes für die Tabelle `tisch`
--
ALTER TABLE `tisch`
  ADD PRIMARY KEY (`TischNr`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `bestellung`
--
ALTER TABLE `bestellung`
  MODIFY `BestellNr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `kunde`
--
ALTER TABLE `kunde`
  MODIFY `GastNr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `mitarbeiter`
--
ALTER TABLE `mitarbeiter`
  MODIFY `MitarbeiterNr` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `speise`
--
ALTER TABLE `speise`
  MODIFY `SpeiseNr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT für Tabelle `tisch`
--
ALTER TABLE `tisch`
  MODIFY `TischNr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `anmeldedaten`
--
ALTER TABLE `anmeldedaten`
  ADD CONSTRAINT `anmeldedaten_ibfk_1` FOREIGN KEY (`MitarbeiterNr`) REFERENCES `mitarbeiter` (`MitarbeiterNr`);

--
-- Constraints der Tabelle `bestellung`
--
ALTER TABLE `bestellung`
  ADD CONSTRAINT `bestellung_ibfk_1` FOREIGN KEY (`MitarbeiterNr`) REFERENCES `mitarbeiter` (`MitarbeiterNr`),
  ADD CONSTRAINT `bestellung_ibfk_2` FOREIGN KEY (`SpeiseNr`) REFERENCES `speise` (`SpeiseNr`),
  ADD CONSTRAINT `bestellung_ibfk_3` FOREIGN KEY (`TischNr`) REFERENCES `tisch` (`TischNr`);

--
-- Constraints der Tabelle `kunde`
--
ALTER TABLE `kunde`
  ADD CONSTRAINT `kunde_ibfk_1` FOREIGN KEY (`TischNr`) REFERENCES `tisch` (`TischNr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
