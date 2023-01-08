-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-01-08 15:13:12
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
-- 資料表結構 `admin_hw`
--

CREATE TABLE `admin_hw` (
  `id` int(12) UNSIGNED NOT NULL,
  `acc` varchar(16) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pw` varchar(16) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(12) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `creaded_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `admin_hw`
--

INSERT INTO `admin_hw` (`id`, `acc`, `pw`, `name`, `creaded_at`) VALUES
(1, 'admin', '12345678', 'manager', '2022-12-24 17:28:55');

-- --------------------------------------------------------

--
-- 資料表結構 `survey_log_hw`
--

CREATE TABLE `survey_log_hw` (
  `id` int(12) UNSIGNED NOT NULL,
  `user_id` int(12) UNSIGNED NOT NULL,
  `ip` varchar(16) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `subject_id` int(12) UNSIGNED NOT NULL,
  `option_id` int(12) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `survey_options_hw`
--

CREATE TABLE `survey_options_hw` (
  `id` int(12) UNSIGNED NOT NULL,
  `subject_id` int(12) UNSIGNED NOT NULL,
  `opt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `vote` int(12) UNSIGNED NOT NULL,
  `creaded_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `survey_subject_hw`
--

CREATE TABLE `survey_subject_hw` (
  `id` int(12) UNSIGNED NOT NULL,
  `img` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `acive` tinyint(1) NOT NULL,
  `level` tinyint(1) NOT NULL,
  `vote` int(12) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

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
(1, 'mokska', '123', 'Yang', '', '2022-12-24 17:23:49', '2022-12-24 17:23:49'),
(2, 'sos812', '123', '亞斯納', '', '2022-12-24 18:13:35', '2022-12-24 18:13:35'),
(3, 'alice_liu0204', '123', 'alice', '', '2022-12-25 03:12:30', '2022-12-25 03:12:30'),
(4, 'meow_lee', '123', '564', '', '2022-12-25 03:12:30', '2022-12-27 08:39:54'),
(5, 'liu0406', '123', 'betty', '', '2022-12-25 03:12:30', '2022-12-25 03:12:30'),
(6, 'osho_1118', '123', 'catherine', '', '2022-12-25 03:12:30', '2022-12-25 03:12:30'),
(7, 'venus_lu0704', '123', 'venus', '', '2022-12-25 03:12:30', '2022-12-25 03:12:30'),
(8, 'diana_1229', '123', 'elsa', '', '2022-12-25 03:12:30', '2022-12-25 03:12:30'),
(9, 'treea0812', '123', 'sophie', '', '2022-12-25 03:12:30', '2022-12-25 03:12:30'),
(10, 'susan_1202', '123', 'susan', '', '2022-12-25 03:12:30', '2022-12-25 03:12:30'),
(11, 'apple0508', '123', 'wendy', '', '2022-12-25 03:12:30', '2022-12-25 03:12:30'),
(12, 'Aletheia_0614', '123', 'judy', '', '2022-12-25 03:12:30', '2022-12-25 03:12:30'),
(15, 'moksha_yang', '1234', '測試者', 'dullstar.yang@gamil.com', '2022-12-25 07:44:23', '2022-12-25 07:44:23'),
(19, '', '123', '', '', '2022-12-27 08:39:08', '2022-12-27 08:39:08'),
(20, '', '123', '564', '', '2022-12-27 08:39:26', '2022-12-27 08:39:26');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin_hw`
--
ALTER TABLE `admin_hw`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `survey_log_hw`
--
ALTER TABLE `survey_log_hw`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `survey_options_hw`
--
ALTER TABLE `survey_options_hw`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `survey_subject_hw`
--
ALTER TABLE `survey_subject_hw`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users_hw`
--
ALTER TABLE `users_hw`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin_hw`
--
ALTER TABLE `admin_hw`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_log_hw`
--
ALTER TABLE `survey_log_hw`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_options_hw`
--
ALTER TABLE `survey_options_hw`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_subject_hw`
--
ALTER TABLE `survey_subject_hw`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users_hw`
--
ALTER TABLE `users_hw`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
