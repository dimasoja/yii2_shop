CREATE DATABASE IF NOT EXISTS `yii2_shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `yii2_shop`;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) unsigned NOT NULL,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `parent_id`, `title`, `description`, `keywords`) VALUES
(1, 0, 'Curabitur sapien', NULL, NULL),
(2, 0, 'Dignissim purus', NULL, NULL),
(3, 0, 'Ultrices id du',NULL, NULL),
(4, 0, 'Cras iacaus rhone', NULL, NULL),
(5, 0, 'Tempus pretium', NULL, NULL),
(6, 0, 'Dignissim neque', NULL, NULL),
(7, 0, 'Ornared id aliquet', NULL, NULL),
(8, 0, 'Commodo sit', NULL, NULL),
(9, 0, 'Urna ac tortor sr', NULL, NULL),
(10, 0, 'Ornared id aliquet', NULL, NULL),
(11, 0, 'Eget nisi laoreet', NULL, NULL),
(12, 0, 'Faciisis ornare', NULL, NULL),
(13, 0, 'Contact us', NULL, NULL),
(14, 1, 'Cute Kittens', NULL, NULL),
(15, 1, 'Strange Stuff', NULL, NULL),
(16, 1, 'Automatic Fails', NULL, NULL),
(17, 2, 'Cute Kittens1', NULL, NULL),
(18, 2, 'Strange Stuff1', NULL, NULL),
(19, 2, 'Automatic Fails1', NULL, NULL),
(20, 3, 'Cute Kittens2', NULL, NULL),
(21, 3, 'Strange Stuff2', NULL, NULL),
(22, 3, 'Automatic Fails2', NULL, NULL);


--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
