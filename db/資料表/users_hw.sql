-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-01-15 14:35:13
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
  `id` int(12) UNSIGNED NOT NULL,
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
(1, 'mokska', '1111', 'Yang', 'abs@abasd2', '2022-12-24 17:23:49', '2023-01-14 19:08:20'),
(3, 'alice_liu0204', '123', 'alice', '', '2022-12-25 03:12:30', '2022-12-25 03:12:30'),
(4, 'meow_lee', '123', '564', '', '2022-12-25 03:12:30', '2022-12-27 08:39:54'),
(5, 'liu0406', '123', 'betty', '', '2022-12-25 03:12:30', '2022-12-25 03:12:30'),
(6, 'osho_1118', '123', 'catherine', '', '2022-12-25 03:12:30', '2022-12-25 03:12:30'),
(7, 'venus_lu0704', '123', 'venus', '', '2022-12-25 03:12:30', '2022-12-25 03:12:30'),
(9, 'treea0812', '123', 'sophie', '', '2022-12-25 03:12:30', '2022-12-25 03:12:30'),
(15, 'moksha_yang', '1234', '測試者1 2', 'dullstar.yang@gamil.com', '2022-12-25 07:44:23', '2023-01-15 11:50:45'),
(63, '1', '1', '1', '1@1', '2023-01-11 20:21:28', '2023-01-11 20:21:28'),
(64, '121221', '1111', '1', '2@2', '2023-01-11 20:23:45', '2023-01-15 06:11:33'),
(65, '1223', '1222', '212', '12@1', '2023-01-11 20:24:18', '2023-01-11 20:24:18'),
(68, '12', '3333', '212', '2@2', '2023-01-11 20:32:49', '2023-01-11 20:32:49'),
(69, '1234', '1234', '1234', '11@111', '2023-01-11 20:34:24', '2023-01-11 20:34:24'),
(71, '4444', '1234', '1234', '11@1111', '2023-01-11 20:36:02', '2023-01-11 20:36:02'),
(72, '12311', '2222', '2222', '11@1111', '2023-01-11 20:37:24', '2023-01-15 07:06:18'),
(78, 'moksha_yang', '1234', '測試者', 'dullstar.yang@gamil.com', '2023-01-15 05:53:18', '2023-01-15 05:53:18'),
(79, 'moksha_yang', '1234', '測試者', 'dullstar.yang@gamil.com', '2023-01-15 05:54:17', '2023-01-15 05:54:17'),
(81, 'e', '1211', '1', 'e@1', '2023-01-15 06:26:59', '2023-01-15 06:26:59'),
(82, 'e', '1211', '1', 'e@1', '2023-01-15 06:29:27', '2023-01-15 06:29:27'),
(83, 'd', 'ssss', '11', '3@3', '2023-01-15 06:32:49', '2023-01-15 07:05:03'),
(92, '2222', '2222', '2222', '22@222', '2023-01-15 07:05:37', '2023-01-15 07:05:37'),
(93, '123411', '1234', '1234', '12@1234', '2023-01-15 07:06:42', '2023-01-15 07:06:42'),
(95, 'abc', '1234', 'name', 'ee@ee', '2023-01-15 11:51:20', '2023-01-15 11:51:20');

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
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
