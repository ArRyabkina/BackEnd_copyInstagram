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
-- Структура таблицы `insta_lenta`
--

CREATE TABLE `insta_lenta` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(355) NOT NULL,
  `main_text` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `insta_lenta`
--

INSERT INTO `insta_lenta` (`id`, `user_id`, `image`, `main_text`) VALUES
(1, 1, 'images/12.jpg', 'Совсем недавно я приобрела такую вещь )))))))))))))'),
(2, 20, 'images/12.jpg', 'Этот текст является рандомным'),
(5, 20, 'images/2.jpg', '123'),
(7, 20, 'images/UZjvBretEpU.jpg', 'Hello everyone'),
(8, 1, 'images/20181230_142139.jpg', 'Good morning everyone. Have a delicious breakfast'),
(9, 20, 'images/10.jpg', 'lol'),
(10, 2, 'images/screenshot.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tempora, cum sed saepe sint labore assumenda dignissimos obcaecati quidem, quaerat cumque dolor ad molestias eveniet repellendus perspiciatis nihil! Dolorum, odio.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `insta_lenta`
--
ALTER TABLE `insta_lenta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `insta_lenta`
--
ALTER TABLE `insta_lenta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
