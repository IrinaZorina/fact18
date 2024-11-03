-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.2
-- Время создания: Ноя 03 2024 г., 11:58
-- Версия сервера: 8.2.0
-- Версия PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Auth`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Auth`
--

CREATE TABLE `Auth` (
  `Login` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Auth`
--

INSERT INTO `Auth` (`Login`, `Password`) VALUES
('Bober', '0000'),
('Bober', '0000'),
('Antony', '0000'),
('Lobster', '$2y$10$A39d6vvMMCjk6jOBlTCxL.BzwrEJvbpFPafrgAaKgAGbDrasC/xai'),
('L1', '$2y$10$jLwV2YK4lZVQ4Z60FhaEpuw.MVkaxhCEp6fRbDyQwC7Vxm3BUjuTe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
