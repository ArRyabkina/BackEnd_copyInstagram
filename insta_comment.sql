-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 05 2019 г., 06:06
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ann_pn_17`
--

-- --------------------------------------------------------

--
-- Структура таблицы `insta_comment`
--

CREATE TABLE `insta_comment` (
  `id` int(11) NOT NULL,
  `nickname` varchar(355) NOT NULL,
  `post_id` varchar(355) NOT NULL,
  `main_text` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `insta_comment`
--

INSERT INTO `insta_comment` (`id`, `nickname`, `post_id`, `main_text`) VALUES
(7, 'Nastya<input type=', '', 'sadfa'),
(8, 'Nastya<input type=<input type=', '', 'sdfsdf'),
(9, 'Nastya<input type=', '', 'ffff'),
(10, 'Nastya<input type=', '', ''),
(11, 'Nastya<input type=', '', ''),
(12, 'Nastya<input type=', '', ''),
(13, 'Nastya<input type=', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `insta_comment`
--
ALTER TABLE `insta_comment`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
