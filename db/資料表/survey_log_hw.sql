-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-01-15 14:33:25
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
-- 資料表結構 `survey_log_hw`
--

CREATE TABLE `survey_log_hw` (
  `id` int(12) UNSIGNED NOT NULL,
  `user_id` int(12) UNSIGNED NOT NULL,
  `ip` varchar(16) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `subject_id` int(12) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `survey_log_hw`
--

INSERT INTO `survey_log_hw` (`id`, `user_id`, `ip`, `subject_id`, `created_at`) VALUES
(12, 1, '', 7, '2023-01-14 14:59:32'),
(13, 1, '', 6, '2023-01-14 19:22:08'),
(14, 1, '', 1, '2023-01-14 19:25:50'),
(15, 1, '', 2, '2023-01-14 19:26:23'),
(16, 1, '', 9, '2023-01-15 01:15:26'),
(17, 1, '', 10, '2023-01-15 01:17:49'),
(18, 1, '', 1, '2023-01-15 01:23:32'),
(19, 1, '', 5, '2023-01-15 01:33:08'),
(20, 1, '', 1, '2023-01-15 01:43:20'),
(21, 1, '', 8, '2023-01-15 01:44:46'),
(22, 1, '', 12, '2023-01-15 02:10:04'),
(23, 1, '', 1, '2023-01-15 02:10:15'),
(24, 1, '', 5, '2023-01-15 02:14:33'),
(25, 1, '', 1, '2023-01-15 02:15:40'),
(26, 1, '', 1, '2023-01-15 10:02:36');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `survey_log_hw`
--
ALTER TABLE `survey_log_hw`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_log_hw`
--
ALTER TABLE `survey_log_hw`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
