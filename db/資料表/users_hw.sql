-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-01-16 21:26:45
-- 伺服器版本： 10.4.25-MariaDB
-- PHP 版本： 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `opinion`
--

-- --------------------------------------------------------

--
-- 資料表結構 `users_hw`
--

CREATE TABLE `users_hw` (
  `id` int(12) NOT NULL,
  `acc` varchar(16) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pw` varchar(16) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(12) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `creaded_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `users_hw`
--

INSERT INTO `users_hw` (`id`, `acc`, `pw`, `name`, `email`, `creaded_at`, `last_login`) VALUES
(1, 'moksha', '1111', 'Yang', 'hollo@world.com', '2022-12-24 17:23:49', '2023-01-16 14:56:36'),
(2, 'alice_liu0204', '123', 'alice', 'alice@hotmail.com', '2022-12-25 03:12:30', '2023-01-16 14:57:02'),
(3, 'meow_lee', '123', '564', 'meme@gmail.com', '2022-12-25 03:12:30', '2023-01-16 15:58:59'),
(4, 'liu0406', '123', 'betty', '0406@gmail.com', '2022-12-25 03:12:30', '2023-01-16 15:59:13'),
(5, 'osho_1118', '123', 'catherine', 'osho@gmail.com', '2022-12-25 03:12:30', '2023-01-16 15:59:36'),
(6, 'venus_lu0704', '123', 'venus', 'venus@gmail.com', '2022-12-25 03:12:30', '2023-01-16 16:00:55'),
(7, 'treea0812', '123', 'sophie', 'last@gmail.com', '2022-12-25 03:12:30', '2023-01-16 16:01:15'),
(8, 'moksha_yang', '1234', '測試者1 2', 'dullstar.yang@gamil.com', '2022-12-25 07:44:23', '2023-01-15 11:50:45'),
(9, 'bacon', '1234', 'aaa', 'aa@aa', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(10, 'egg', '1234', 'aaa', 'bb@bb', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(11, 'apple', '1234', 'aaa', 'apple@aa', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(12, 'pineapple', '1234', 'aaa', 'pineapple@aa', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(13, 'banana', '1234', 'aaa', 'banana@aa', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(14, 'papaya', '1234', 'aaa', 'papaya@aa', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(15, 'grape', '1234', 'aaa', 'grape@aa', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(16, 'strawberry', '1234', 'aaa', 'strawberry@aa', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(17, 'kiwi', '1234', 'aaa', 'kiwi@aa', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(18, 'litchi', '1234', 'aaa', 'litchi@aa', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(19, 'mandarine', '1234', 'aaa', 'mandarine@aa', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(20, 'cherry', '1234', 'aaa', 'cherry@aa', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(21, 'peach', '1234', 'aaa', 'peach@aa', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(22, 'cranberry', '1234', 'aaa', 'cranberry@aa', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(23, 'mango', '1234', 'aaa', 'mango@aa', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(24, 'guava', '1234', 'aaa', 'guava@aaa', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(25, 'onion', '1234', 'aaa', 'onion@aa', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(26, 'carrot', '1234', 'aaa', 'carrot@aa', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(27, 'spinach', '1234sp', 'spinach', 'spinach@aa', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(28, 'garlic', '1234', 'aaa', 'garlic@aa', '2023-01-16 15:56:26', '2023-01-16 15:56:26'),
(29, 'sos812', 'sp88', '亞斯納', 'dull_start@gmail.com', '2023-01-16 16:03:45', '2023-01-16 16:03:45'),
(30, 'musick', 'musick', 'musick', 'musick_yang@gamil.com', '2023-01-16 16:03:45', '2023-01-16 16:03:45'),
(31, 'happy', 'happy0812', '孫悟空', 'haha_0812@gmail.com', '2023-01-16 16:03:45', '2023-01-16 16:03:45');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `users_hw`
--
ALTER TABLE `users_hw`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users_hw`
--
ALTER TABLE `users_hw`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
