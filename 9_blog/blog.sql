-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 04 2018 г., 14:23
-- Версия сервера: 5.6.38
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
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL DEFAULT 'Аноним'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `title`, `image`, `body`, `author`) VALUES
(42, 'First article', NULL, 'Тест. Статья без картинки', 'Профессор Иван Сидоров'),
(43, 'Статья вторая', './images/43.jpg', 'Проверка добавления картинки', 'Профессор Иван Сидоров'),
(44, 'Проверяем картинку', './images/44.jpg', 'Тест', 'Lolok'),
(45, 'Лорем ипсум', './images/45.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum blandit accumsan leo. Fusce dapibus mauris id eleifend tempus. Curabitur tincidunt nunc eget elit posuere varius et ac odio. Quisque blandit est posuere, cursus nulla at, dapibus diam. Curabitur eu ante nunc. Mauris lobortis sit amet tellus sed cursus. Suspendisse elementum consequat turpis. Vivamus sed nunc metus. Nulla facilisi. Fusce finibus tortor et rutrum aliquam. Fusce mollis erat a neque vestibulum rutrum. Quisque id bibendum purus. Donec ullamcorper sem sem, eu hendrerit nisi facilisis at. In in consectetur nisl. Mauris vehicula luctus enim, id varius justo condimentum ac.\r\n\r\nProin accumsan congue nisi tempus vestibulum. Ut nec elit vitae nulla pharetra dapibus sit amet sed libero. Etiam vestibulum ut augue a feugiat. Etiam fringilla mollis est eu tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse orci massa, tempus at tincidunt ut, scelerisque ac magna. Mauris vehicula, risus non ullamcorper aliquam, arcu augue commodo velit, fermentum rhoncus quam magna in odio. Vivamus vitae sem placerat, blandit est ac, rutrum purus.', 'Аноним');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
