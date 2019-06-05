-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 05 2019 г., 06:05
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
-- Структура таблицы `instagram`
--

CREATE TABLE `instagram` (
  `id` int(11) NOT NULL,
  `name` varchar(355) NOT NULL,
  `nickname` varchar(355) NOT NULL,
  `email` varchar(355) NOT NULL,
  `password` varchar(355) NOT NULL,
  `ava` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `instagram`
--

INSERT INTO `instagram` (`id`, `name`, `nickname`, `email`, `password`, `ava`) VALUES
(1, 'Джордж Вашингтон', 'Washim', 'speslyjk2002@gmail.com', '123', 'images/trash.gif'),
(2, 'Носик Анастасия', 'Nastya', 'mail@mail.ru', '123', 'images/arryabkina.jpg'),
(3, 'Farcry: New Dawn', 'frey', 'aihal1337@gmail.com', 'sdf', 'images/macake.jpg'),
(20, 'Anna Argylova', 'ArRyabkina', 'speslyjk2002@gmail.com', '1234', 'images/arryabkina.jpg'),
(22, 'making_cakes', 'macake', 'anyaargylova2002@gmail.com', 'cake', 'images/macake.jpg'),
(30, 'Far Cry ', 'sadf', 'speslyjk2002@gmail.com', 'sdf', ''),
(31, 'Far Cry ', 'sadf', 'mail@mail.ru', 'sdf', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `instagram`
--
ALTER TABLE `instagram`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `instagram`
--
ALTER TABLE `instagram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
