-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 22 2017 г., 09:23
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `proforientationdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `id_university`
--

CREATE TABLE `id_university` (
  `user_id` bigint(20) NOT NULL,
  `ID_university` int(10) NOT NULL,
  `University_name` varchar(50) NOT NULL,
  `University_describtion` varchar(225) NOT NULL,
  `Profession_code` int(6) NOT NULL,
  `University_type` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Структура таблицы `profession_code`
--

CREATE TABLE `profession_code` (
  `Profession_code` int(6) NOT NULL,
  `Name_profession` varchar(50) NOT NULL,
  `Profession_describtion` varchar(225) NOT NULL,
  `University_for_profession` varchar(50) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Дамп данных таблицы `profession_code`
--

INSERT INTO `profession_code` (`Profession_code`, `Name_profession`, `Profession_describtion`, `University_for_profession`, `author_id`) VALUES
(14, 'asd', 'qwe', 'asd', 0),
(15, 'asd', 'qwe', 'zxc', 3),
(16, 'asd', 'eqw', 'zxc', 3),
(17, 'gergf', 'qwe', 'zxcr', 3),
(18, 'asd', 'qeq', 'zxc', 4),
(20, 'vkjv', 'kujvkjv', 'kjvjv', 6),
(21, 'kjv', 'jkyfvkj', 'ufukl', 6),
(22, 'kuvku', 'ukgfukg', 'ikugfiku', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `full_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `login`, `password`, `full_name`, `email`) VALUES
(1, 'Nurzhan', 'kek', 'Nurzhan', 'aksjd@asd.ru'),
(2, 'saya@gmail.com', '12345', 'saya', 'saya@gmail.com'),
(3, 'Nurzhan27', 'kek', 'Nurzhan', 'CHGFJ'),
(4, 'Nurzhan2727', '654', 'lkjn', 'oijb'),
(5, 'Nurzhan14', '123', 'lyglhv', 'Safdsad'),
(6, 'Dias', '123', 'Kaldybek', 'Dias@gmail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `id_university`
--
ALTER TABLE `id_university`
  ADD PRIMARY KEY (`ID_university`);

--
-- Индексы таблицы `profession_code`
--
ALTER TABLE `profession_code`
  ADD PRIMARY KEY (`Profession_code`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `id_university`
--
ALTER TABLE `id_university`
  MODIFY `ID_university` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `profession_code`
--
ALTER TABLE `profession_code`
  MODIFY `Profession_code` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
