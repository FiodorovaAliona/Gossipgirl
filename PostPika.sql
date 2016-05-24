-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 23 2016 г., 10:25
-- Версия сервера: 5.5.49-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `PostPika`
--

-- --------------------------------------------------------

--
-- Структура таблицы `PostTable`
--

CREATE TABLE `PostTable` (
  `id` int(10) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `text` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `author` varchar(30) CHARACTER SET utf8 NOT NULL,
  `likes` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `PostTable`
--

INSERT INTO `PostTable` (`id`, `title`, `text`, `author`, `likes`) VALUES
(3, 'Test Post!', 'Just DO IT!', 'Igory', 2),
(4, 'Test Post 2!', 'Сон наше все, а больше ничего и не надо', 'Igor', 143),
(5, 'test3', 'dsdssdf', 'qwdq', 123),
(6, 'test4', 'fdsf', 'dsf', 12),
(7, 'test5', 'fedfsf', 'sddfdfs', 3),
(8, 'Test Post 6!', 'Igory', '', 1),
(9, 'Test Post 7!', 'Пробуем пост запрос', 'Igory', 4),
(10, 'много текста', 'ООооооооооооооооо\r\nооооооооооооооооооооооооочень много ТЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕ\r\nЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕ\r\nЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕ\r\nЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕ\r\nЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕ,\r\nда много, ЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕ\r\nЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕ\r\nЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕЕКККККККККККККК\r\nККККККККККККККККККККККККККККККККК\r\nККССССССССССССССССССССССССССССССС\r\nСССССССССССССТТТТТТААААААААААААААААААААААААААААААА\r\n', 'странный человече', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `PostTable`
--
ALTER TABLE `PostTable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `PostTable`
--
ALTER TABLE `PostTable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
