-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.6.17 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Export de la structure de table soccerapp. calendar
CREATE TABLE IF NOT EXISTS `calendar` (
  `id_calendar` int(11) NOT NULL AUTO_INCREMENT,
  `team` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `nbmatches` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_calendar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- L'exportation de données n'était pas sélectionnée.


-- Export de la structure de table soccerapp. match_detail
CREATE TABLE IF NOT EXISTS `match_detail` (
  `id_match` int(11) NOT NULL AUTO_INCREMENT,
  `id_calendar` int(11) NOT NULL DEFAULT '0',
  `team_1` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `score_team_1` int(11) NOT NULL DEFAULT '0',
  `team_2` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `score_team_2` int(11) NOT NULL DEFAULT '0',
  `date` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id_match`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- L'exportation de données n'était pas sélectionnée.


-- Export de la structure de table soccerapp. player
CREATE TABLE IF NOT EXISTS `player` (
  `id_player` int(11) NOT NULL AUTO_INCREMENT,
  `id_team` int(11) NOT NULL DEFAULT '0',
  `id_match` int(11) NOT NULL DEFAULT '0',
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `shots` int(11) DEFAULT NULL,
  `goals` int(11) DEFAULT NULL,
  `assists` int(11) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_player`),
  KEY `id_team` (`id_team`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- L'exportation de données n'était pas sélectionnée.


-- Export de la structure de table soccerapp. team
CREATE TABLE IF NOT EXISTS `team` (
  `id_team` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `nbplayers` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_team`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- L'exportation de données n'était pas sélectionnée.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
