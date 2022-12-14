-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 01. Dez 2022 um 01:27
-- Server-Version: 10.1.29-MariaDB
-- PHP-Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersUid` tinytext NOT NULL,
  `usersPwd` longtext NOT NULL,
  `usersEmail` tinytext NOT NULL,
  `usersName` longtext NOT NULL,
  `usersGender` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`usersId`, `usersUid`, `usersPwd`, `usersEmail`, `usersName`, `usersGender`) VALUES
(12, 'guest', '$2y$10$JI7/VrzFnjcTf9/gnAWG1eT3Uq4WcUeUZCdNgcyC7A8Zuv/9Gq5yW', 'guest@book.at', 'book guest', 'Male'),
(13, 'WolfWer?', '$2y$10$JJ9ct2Xlf7o0UDoYTDtjSejyxoDDm9jR9NC8YbM049rafNa23rWQG', 'wi21b055@technikum-wien.at', ' Wolfgang Matyus', 'Male'),
(17, 'guest1', '$2y$10$812lYvw4LaX5jh6NmPh6Be47v2YM3QYgTc1S1t9bUNVJmas.1hyz2', 'guest1@hotel.at', 'Hotel Gast', 'Male');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
