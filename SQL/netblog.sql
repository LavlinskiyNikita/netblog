-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 16 2023 г., 14:36
-- Версия сервера: 5.7.39
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `netblog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(100) NOT NULL,
  `photo` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id__user` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `photo`, `title`, `description`, `date`, `id__user`) VALUES
(2, 'uploads/postPhoto/1676369733ss_62ba7742bcb15442d123a07c6c5c9a69517054d3.1920x1080.jpg', 'blua', 'gfdgf', '14.14.2023', '31'),
(10, 'uploads/postPhoto/1676546854', 'hfgdhg', 'fghfgh', '16.16.2023', '28'),
(11, 'uploads/postPhoto/1676546861xmpQimhp4MFlwpYtsNcUVa_pHMwoPFdmZaFglrLXwjw.jpg', 'dfgfdafdhdrf', 'hfdhfdahds', '16.16.2023', '28'),
(12, 'uploads/postPhoto/1676546894forest.jpg', 'wertretytyru', 'vbdfcsfghdsajfgadjngadfnm33235341467413', '16.16.2023', '28');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `nikname` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pesonal_sait` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `nikname`, `email`, `password`, `avatar`, `description`, `pesonal_sait`) VALUES
(27, 'popchiktwertsdgdsgsdretertrwerewrfdg', 'nikitalav21lin@gmail.com', 'de75daa73f5916ffad0bb0a1c4a8df0b', 'uploads/1674580904little girl demon _20220404_203422_177.png', 'HElloy', 'https://www.youtube.com/watch?v=Rp9_qNkR1z0'),
(28, 'nikitos', 'tester@test.com', '098f6bcd4621d373cade4e832627b4f6', 'uploads/avatar/1676151958ss_62ba7742bcb15442d123a07c6c5c9a69517054d3.1920x1080.jpg', 'глеб топfdhfdtatrhtrhsdfgdsfgsnsfgndfgfdgfdhdfahfdhsdfdsfs frerwgdhh fdghfdwerwer', ''),
(31, 'popik', 'popik@pop.com', 'de75daa73f5916ffad0bb0a1c4a8df0b', 'uploads/avatar/1676141098wp8985514.jpg', '', 'https://www.youtube.com/watch?v=Rp9_qNkR1z0'),
(32, 'nik', 'nikitos@nikitaka.com', '7058a063883b01e687b03aa901492ab2', 'uploads/avatar/1675465734IMG_20221109_205029.jpg', 'xzgnfxfnxfgnfgx', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
