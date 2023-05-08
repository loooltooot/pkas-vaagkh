-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 08 2023 г., 19:11
-- Версия сервера: 10.4.26-MariaDB
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pkas`
--

-- --------------------------------------------------------

--
-- Структура таблицы `access_levels`
--

CREATE TABLE `access_levels` (
  `id` int(11) NOT NULL,
  `title` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissons` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `access_levels`
--

INSERT INTO `access_levels` (`id`, `title`, `permissons`) VALUES
(1, 'admin', 'all');

-- --------------------------------------------------------

--
-- Структура таблицы `aplly`
--

CREATE TABLE `aplly` (
  `id` int(11) NOT NULL,
  `surname` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronim` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `files` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `full_name` int(11) NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ur_lico` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` date NOT NULL,
  `files` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `time`, `files`) VALUES
(1, 'Диктант победы', 'В Пензенском колледже архитектуры и строительства 27 апреля студенты написали Диктант Победы. Преподаватели Татьяна Телегина, Наталья Шарова, Александра Мурунова и Галина Онтикова организовали студентов на написание Диктанта и приобщили их к участию в данной акции.<br>Диктант Победы является очень важным мероприятием. Он посвящен не только проверке уровня знаний военной истории нашей страны. Главная цель Диктанта Победы – объединение всех граждан России. Наше благополучие во многом зависит от того, насколько мы едины, уважаем ли свои исторические корни и доверяем ли друг другу. Диктант Победы призван мотивировать всех участников к этому.<br>Диктант прошел в 24 государствах, включая Россию. В нем приняли участие более 150 тысяч человек в возрасте от 9 до 90 лет. После этого было принято решение о ежегодном проведении Диктанта Победы.<br>Это стало традицией в нашем колледже!<br>#ПКАСДиктантПобеды', '2023-04-27', '1_1.png&1_2.png'),
(2, 'ПОСЕТИЛИ ЗАВОД - “ПЕНЗТЯЖПРОМАРТУРА”', '26 апреля студенты групп 22ОСТ15 и 22ОСТ16 специальности “Сварочное производство” посетили завод Пензтяжпромарматура, на котором им провели экскурсию по разным цехам от производства заготовок до покраски готовой продукции. <br>Студентам было интересно узнать о своем направлении, видах сварки на производстве, прохождении практики и дальнейшей работе на предприятии.', '2023-04-27', '2_1.png&2_2.png'),
(3, 'ЧЕРНОБЛЬ - НАША БОЛЬ', 'В общежитии Пензенского колледжа архитектуры и строительства (Собинова, 7 ж), в рамках патриотического направления воспитательной работы прошел информационный час «Чернобыль – наша боль».<br>Мероприятие подготовлено советом общежития при активном участии ведущего библиотекаря Ольги Пчелинцевой и воспитателя Ларисы Симаковой. Информационный час посвящен 37–й годовщине со дня ликвидации последствий аварии на Чернобыльской АЭС.<br>Целью мероприятия было ознакомление обучающихся с историей чернобыльской трагедии, с подвигом, совершенным ликвидаторами аварии, формирование гражданской ответственности и патриотизма у участников мероприятия, на примере человеческого подвига, а также осмысления причин и последствий Чернобыльской аварии.<br>26 апреля 1986 года произошла страшнейшая катастрофа в истории человечества. И хотя прошло уже 37 лет, этот день заставляет нас задумываться о возможных последствиях деятельности человека, о нашем неоплатном долге перед теми, кто, рискуя собственной жизнью спас мир от радиоактивной катастрофы.<br>Итог Чернобыльской трагедии печален: радиоактивному заражению в той или иной степени подверглись территории Украины, Белоруссии, России, так как Чернобыльская атомная электростанция находилась недалеко от места пересечения границ трех стран. Впервые в истории человечества промышленная авария достигла такого масштаба, что ее последствия можно найти в любой точке Земли.<br>Презентация позволила наглядно продемонстрировать масштабы экологической катастрофы 1986 года, глубоко и ярко осветить экологические проблемы после аварии на ЧАЭС. Информация, полученная на мероприятии углубила экологическую грамотность студентов.', '2023-04-27', '3_1.png&3_2.png'),
(4, 'ВСЕ ПРОФЕССИИ ВАЖНЫ', 'Студенты Пензенского колледжа архитектуры и строительства Движения первых в рамках участия в акции \"Всё профессии важны\" встретились с инспектором ПДН Анастасией Сун-Чан-Сян. <br>Она рассказала студентам о профилактике правонарушений. Встреча прошла с участием студентов Движения первых ПКАС групп 22ОА12 и 22ОА17.<br>#ДвижениеПервых58<br>#ДвижениеПервыхПКАС<br>#ПрофессииПервых', '2023-04-29', '4_1.png&4_2.png');

-- --------------------------------------------------------

--
-- Структура таблицы `psychologist`
--

CREATE TABLE `psychologist` (
  `id` int(11) NOT NULL,
  `surname` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronim` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `access_level`) VALUES
(1, 'admin', '$2y$10$6NOs3ZHlLBq1IYvwmt0OIuaEPwOAcgwns.NZrdwHMY1Zrj0fVOU.m', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `access_levels`
--
ALTER TABLE `access_levels`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `aplly`
--
ALTER TABLE `aplly`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`full_name`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `psychologist`
--
ALTER TABLE `psychologist`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `access_level` (`access_level`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `access_levels`
--
ALTER TABLE `access_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `aplly`
--
ALTER TABLE `aplly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `full_name` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `psychologist`
--
ALTER TABLE `psychologist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`access_level`) REFERENCES `access_levels` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
