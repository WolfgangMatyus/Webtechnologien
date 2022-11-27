-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 27. Nov 2022 um 23:06
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
(1, 'adf', '$2y$10$dq21hII2O9/xQlgUH1bcwOPrV4.lG664z0qewK9jpFY3F96wFSBZ2', '', '', ''),
(2, 'kul', '$2y$10$puANUm0HB/3zM.LJUZ.w2eLYmDEQrZPy9Jf8OH7Ikn3uTsJQGF73O', 'kul@pet.at', 'kul pet', ''),
(3, 'lena', '$2y$10$q35VqxTkrrJ6sxi0H2mmu.IT/CUJZnjl8hvtYkAJKZeSx9DA49oKe', 'lena@coufal.at', 'lena coufal', ''),
(4, 'mal', '$2y$10$pO3sCqqTABikEW8A3oBkruoX27Tislznclqb.0EAxmS7MYP3dpRYS', 'mal@so.at', 'so', 'option3'),
(5, 'kat', '$2y$10$Q1AEl6WXOtO5o9RpXbBCderJIxhoPiaMJKZ1KkuvYaYvtQN3k7cN6', 'kat@arin.at', 'arin', 'option2'),
(6, 'hu', '$2y$10$XEN5fGwZKAZ.fySZy8I/1u5oCc/WlHpGbQYNlVZZDmBOimf8oX6La', 'hu@hu.at', 'huhu', 'Female'),
(7, 'klo', '$2y$10$qz0TSMo75pcGNVsFaKe4dOY9NXELwifGGu0p7JABcHag4nblsudoK', 'buerste@klo.at', 'bürste', 'Other'),
(8, 'woif', '$2y$10$h7pEPAkz83wJdpaK50bgkeLYIk.Xc/An9hbxBXdKlBKxscIXQF0YO', 'wo@hin.com', 'wolfi', 'Male'),
(9, 'ui', '$2y$10$kQ6EZxNdBA.b0hiSUqnIGOgBhFcfDmJP1HcMoyQuOhzr2XhOumGkq', 'ui@ui.at', 'uiui', 'Male'),
(10, 'av', '$2y$10$v/jFuwdb/qajXNnjSlM1z.KuaYsA9v3jUw3PSBZsCHtPiPeqFF/iG', 'dsaf@kl.at', 'adsf', 'Female');

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
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
