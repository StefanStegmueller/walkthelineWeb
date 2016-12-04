-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 04. Dez 2016 um 15:55
-- Server-Version: 10.1.16-MariaDB
-- PHP-Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `pathfinder`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `captures`
--

CREATE TABLE `captures` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `roi_height` int(11) NOT NULL COMMENT 'Width of the region of interest in pixel',
  `roi_position` int(11) NOT NULL COMMENT 'Position of the region of itnerest (distance between the left edge of the photo and the left edge of the roi in pixel)',
  `path_position` int(11) NOT NULL,
  `path_width` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `captures`
--

INSERT INTO `captures` (`id`, `date`, `roi_height`, `roi_position`, `path_position`, `path_width`) VALUES
(1, '2016-11-25 22:50:45', 254, 34, 100, 32),
(2, '2016-11-25 22:50:49', 254, 34, 100, 32),
(3, '2016-11-25 22:50:52', 254, 34, 100, 32);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `captures`
--
ALTER TABLE `captures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `captures`
--
ALTER TABLE `captures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
