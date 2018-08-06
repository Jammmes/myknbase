-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 05 2018 г., 20:56
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mykndb`
--
CREATE DATABASE IF NOT EXISTS `mykndb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `mykndb`;

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `changed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `created_at`, `changed_at`, `status`, `user_id`) VALUES
(1, 'Настройка phpunit и composer', 'Давайте установим PHPUnit в нашей системе:\r\n\r\nЗагрузите его: PHPUnit распространяется в PHAR(PHp ARhive) файле. Скачать можно здесь.\r\nДобавьте путь к нему в системную переменную $PATH: после скачивания PHAR файла, убедитесь, что он является запускаемым (executable) и путь, где он находится, прописан в системной переменной $PATH. Т.о. вы сможете запускать его из любого места.\r\nЕсли вы работаете на Unix-подобной системе, то это вы можете сделать следующими командами:\r\n\r\n$ wget https://phar.phpunit.de/phpunit.phar\r\n$ chmod +x phpunit.phar\r\n$ sudo mv phpunit.phar /usr/local/bin/phpunit\r\nЕсли вы сделали всё верно, то вы сможете увидеть версию установленного PHPUnit, набрав в вашем терминале команду:\r\n\r\n$ phpunit --version', '2018-08-02 16:25:13', '2018-08-03 16:14:18', 2, 1),
(2, 'Подключение jquery', 'текстстатьитекстстатьи текст', '2018-08-02 16:32:33', '2018-08-03 16:14:47', 1, 1),
(3, 'Как сделать singleton', 'private static $_instance = null;\r\n\r\n    private $DB;\r\n\r\n    /**\r\n     * Функция возвращает ссылку на единственный экземпляр класса\r\n     *\r\n     * @return Db\r\n     */\r\n    public static function getInstance(){\r\n        if(self::$_instance == null)\r\n        {\r\n            self::$_instance = new DB();\r\n        }\r\n        return self::$_instance;\r\n    }\r\n\r\n    // Защита от создания второго экземпляра класса\r\n    private function __construct(){}\r\n    private function __sleep(){}\r\n    private function __wakeup(){}\r\n    private function __clone(){}', '2018-08-03 08:19:16', '2018-08-03 16:15:31', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `link_images`
--

DROP TABLE IF EXISTS `link_images`;
CREATE TABLE IF NOT EXISTS `link_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `link_tags`
--

DROP TABLE IF EXISTS `link_tags`;
CREATE TABLE IF NOT EXISTS `link_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `link_tags`
--

INSERT INTO `link_tags` (`id`, `tag_id`, `article_id`) VALUES
(1, 3, 1),
(2, 2, 2),
(3, 5, 1),
(4, 4, 1),
(5, 6, 3),
(6, 3, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id`, `title`) VALUES
(1, '?'),
(2, '!'),
(3, '0');

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `title`, `user_id`) VALUES
(1, 'js', 1),
(2, 'jquery', 1),
(3, 'php', 1),
(4, 'phpunit', 1),
(5, 'composer', 1),
(6, 'singleton', 1),
(7, 'ajax', 1),
(8, 'git', 1),
(9, 'gulp', 1),
(10, '.htaccess', 1),
(11, 'рекурсия', 1),
(12, 'подключение_классов', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `role`, `comment`) VALUES
(1, 'bob', 'bob', 1, 'first user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
