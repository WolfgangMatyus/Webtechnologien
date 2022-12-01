-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 27. Nov 2022 um 23:09
-- Server-Version: 10.4.25-MariaDB
-- PHP-Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `phpproject01`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `reservations`
--

CREATE TABLE `reservations` (
  `reservationsId` int(11) NOT NULL,
  `reservationsArrival` date NOT NULL,
  `reservationsDeparture` date NOT NULL,
  `reservationsBreakfast` varchar(255) NOT NULL,
  `reservationsParking` varchar(255) NOT NULL,
  `reservationsPet` varchar(255) NOT NULL,
  `reservationsStatus` varchar(255) NOT NULL,
  `reservationsUid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `reservations`
--

INSERT INTO `reservations` (`reservationsId`, `reservationsArrival`, `reservationsDeparture`, `reservationsBreakfast`, `reservationsParking`, `reservationsPet`, `reservationsStatus`, `reservationsUid`) VALUES
(1, '2022-11-17', '2022-11-19', 'yes', 'no', '', '', ''),
(2, '2022-11-02', '2022-11-26', 'yes', 'no', 'Doggo', 'new', ''),
(3, '2022-11-10', '2022-11-25', 'no', 'yes', 'Elephant', 'new', '');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservationsId`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservationsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
