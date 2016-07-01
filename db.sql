-- phpMyAdmin SQL Dump
-- version 4.0.10.12
-- http://www.phpmyadmin.net
--
-- Хост: uano00.mysql.ukraine.com.ua
-- Час створення: Лип 01 2016 р., 17:40
-- Версія сервера: 5.6.27-75.0-log
-- Версія PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `uano00_offers`
--

-- --------------------------------------------------------

--
-- Структура таблиці `moders`
--

CREATE TABLE IF NOT EXISTS `moders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Дамп даних таблиці `moders`
--

INSERT INTO `moders` (`id`, `login`, `password`) VALUES
(1, 'moderator', '7695ee241c80292e28b84e83af381ac1');

-- --------------------------------------------------------

--
-- Структура таблиці `offers`
--

CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `site` varchar(30) DEFAULT NULL,
  `offer` text NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=44 ;

--
-- Дамп даних таблиці `offers`
--

INSERT INTO `offers` (`id`, `name`, `email`, `site`, `offer`, `time`) VALUES
(32, 'аоапоо', 'алапрлпрл', 'праларлпрл', 'плрлпрл', 1467381533),
(36, 'оаапоо', 'апвопопо', 'апвоваап', 'аповапоапо', 1467383128),
(37, 'Імя', 'поаво', 'оапопоапо', 'аоаоапо', 1467383388),
(38, 'тест)', 'Email)', 'site)', 'пропозиція)', 1467383607),
(39, 'вовоапо', 'апаповапо', 'апопоапопо', 'апоапоаповапоапо', 1467383833),
(40, 'арлаплапрлр', 'прлпрллалпрлпрл', 'прлрлпрлпрл', 'прлпрлплаплпр', 1467383851),
(41, 'пвоопо', 'апопооп', 'апооапоап', 'оапоапоапоапо', 1467383872),
(42, 'рллрлпрлпрллпрл', 'вопапоаоапоапоорор', 'прлпрлплапрлрлпрл', 'апооапоапоапапо', 1467383900),
(43, 'варварвар', 'варварварвар', 'варварварвар', 'ваірваріваірвар', 1467383918);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
