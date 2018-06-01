-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 07 2015 г., 13:59
-- Версия сервера: 5.6.21
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `userlitdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`id` int(7) NOT NULL,
  `msg_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `msg_email` varchar(80) CHARACTER SET utf8 NOT NULL,
  `msg_subject` varchar(50) CHARACTER SET utf8 NOT NULL,
  `msg_message` mediumtext CHARACTER SET utf8 NOT NULL,
  `msg_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `msg_name`, `msg_email`, `msg_subject`, `msg_message`, `msg_date`) VALUES
(61, 'талгат', 'talgat@gmail.com', 'тема', '      сооююю', '2015-05-07');

-- --------------------------------------------------------

--
-- Структура таблицы `usertbl`
--

CREATE TABLE IF NOT EXISTS `usertbl` (
  `full_name` text NOT NULL,
  ` email` varchar(70) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

CREATE TABLE IF NOT EXISTS `zakaz` (
  `name` text NOT NULL,
  `number` int(11) NOT NULL,
  `adres` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `zakaz`
--

INSERT INTO `zakaz` (`name`, `number`, `adres`, `message`) VALUES
('jk;l'';''lh', 555, 'hc ', 'hjkl;');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
MODIFY `id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
