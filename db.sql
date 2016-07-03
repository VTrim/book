-- phpMyAdmin SQL Dump
-- version 4.0.10.12
-- http://www.phpmyadmin.net
--
-- Хост: uano00.mysql.ukraine.com.ua
-- Час створення: Лип 03 2016 р., 09:19
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
  `ip` text,
  `browser` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=48 ;

--
-- Дамп даних таблиці `offers`
--

INSERT INTO `offers` (`id`, `name`, `email`, `site`, `offer`, `time`, `ip`, `browser`) VALUES
(32, 'аоапоо', 'алапрлпрл', 'праларлпрл', 'плрлпрл', 1467381533, '31.41.71.142', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36 '),
(36, 'оаапоо', 'апвопопо', 'апвоваап', 'аповапоапо', 1467383128, '31.41.71.142', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36 '),
(37, 'Імя', 'поаво', 'оапопоапо', 'аоаоапо', 1467383388, '31.41.71.142', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36 '),
(38, 'тест)', 'Email)', 'site)', 'пропозиція)', 1467383607, '31.41.71.142', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36 '),
(39, 'вовоапо', 'апаповапо', 'апопоапопо', 'апоапоаповапоапо))', 1467383833, '31.41.71.142', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36 '),
(40, 'арлаплапрлр', 'прлпрллалпрлпрл', 'прлрлпрлпрл', 'прлпрлплаплпр)))', 1467383851, '31.41.71.142', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36 '),
(41, 'пвоопо', 'апопооп', 'апооапоап', 'оапоапоапоапо', 1467383872, '31.41.71.142', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36 '),
(42, 'рллрлпрлпрллпрл', 'вопапоаоапоапоорор', 'прлпрлплапрлрлпрл', 'апооапоапоапапо', 1467383900, '31.41.71.142', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36 '),
(43, 'варварвар', 'варварварвар)', 'варварварвар', 'ваірваріваірвар', 1467383918, '31.41.71.142', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36 '),
(46, 'Віталій', 'lololo@gmail.com', 'http://tst.com', '=)=)=)))))))))) d gh dklf df df h dfdfh dfh dfh hdf h dfh df fh  dfh hf fh fh fdh fhd sdf h dfh fh fh  sdfhfh   sdfhsdfh sdfh ', 1467525034, '31.41.71.142', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36 OPR/38.0.2220.31'),
(47, 'Віт', 'vit@gmail.com', 'site', 'this is my text', 1467526642, '31.41.71.142', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36 OPR/38.0.2220.31');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
