-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-01-15 14:34:43
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

--
-- 傾印資料表的資料 `survey_options_hw`
--

INSERT INTO `survey_options_hw` (`id`, `subject_id`, `opt`, `vote`, `creaded_at`, `updated_at`) VALUES
(1, 1, '企鵝', 3, '2023-01-08 14:47:42', '2023-01-12 13:06:04'),
(2, 1, '北極熊', 15, '2023-01-08 14:47:42', '2023-01-12 13:06:04'),
(4, 4, '小可愛', 0, '2023-01-08 14:59:40', '2023-01-08 14:59:40'),
(5, 4, '家人', 0, '2023-01-08 14:59:40', '2023-01-08 14:59:40'),
(6, 1, '海洋生物', 5, '2023-01-12 13:01:51', '2023-01-12 13:06:04'),
(7, 1, '其它', 0, '2023-01-12 13:01:51', '2023-01-12 13:06:04'),
(8, 5, '先隨便選', 2, '2023-01-12 15:20:32', '2023-01-12 15:20:32'),
(9, 5, '看看結果', 2, '2023-01-12 15:20:32', '2023-01-12 15:20:32'),
(10, 6, '世外桃源', 0, '2023-01-14 03:37:40', '2023-01-14 03:37:40'),
(11, 6, '好山好水', 1, '2023-01-14 03:38:19', '2023-01-14 03:38:19'),
(12, 6, '天使眼淚', 0, '2023-01-14 03:38:19', '2023-01-14 03:38:19'),
(13, 6, '一攤死湖', 0, '2023-01-14 03:38:19', '2023-01-14 03:38:19'),
(14, 7, '80', 0, '2023-01-14 03:40:45', '2023-01-14 03:40:45'),
(15, 7, '60', 1, '2023-01-14 03:40:45', '2023-01-14 03:40:45'),
(16, 7, '50', 0, '2023-01-14 03:40:45', '2023-01-14 03:40:45'),
(17, 7, '40', 1, '2023-01-14 03:40:45', '2023-01-14 03:40:45'),
(18, 8, '不知道', 1, '2023-01-14 03:41:15', '2023-01-14 03:41:15'),
(19, 8, '夢裡', 2, '2023-01-14 03:41:15', '2023-01-14 03:41:15'),
(20, 9, 'wifi', 0, '2023-01-14 03:42:15', '2023-01-14 03:42:15'),
(21, 9, 'city', 2, '2023-01-14 03:42:15', '2023-01-14 03:42:15'),
(22, 9, 'night', 0, '2023-01-14 03:42:15', '2023-01-14 03:42:15'),
(23, 10, '啥 ?', 0, '2023-01-14 18:48:28', '2023-01-14 18:48:28'),
(24, 10, '啥東東 ?', 1, '2023-01-14 18:48:28', '2023-01-14 18:48:28'),
(25, 11, '1', 0, '2023-01-15 01:35:48', '2023-01-15 01:35:48'),
(26, 11, '2', 0, '2023-01-15 01:35:48', '2023-01-15 01:35:48'),
(27, 11, '3', 0, '2023-01-15 01:35:48', '2023-01-15 01:35:48'),
(28, 11, '4', 0, '2023-01-15 01:35:48', '2023-01-15 01:35:48'),
(29, 12, 'aadsfsd', 0, '2023-01-15 01:37:39', '2023-01-15 01:37:39'),
(30, 12, 'fsdf', 1, '2023-01-15 01:37:39', '2023-01-15 01:37:39'),
(31, 12, 'fsf', 0, '2023-01-15 01:37:39', '2023-01-15 01:37:39'),
(32, 12, 'fsda', 0, '2023-01-15 01:37:39', '2023-01-15 01:37:39'),
(33, 6, '當然要', 0, '2023-01-15 03:31:53', '2023-01-15 03:31:53');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `survey_options_hw`
--
ALTER TABLE `survey_options_hw`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_options_hw`
--
ALTER TABLE `survey_options_hw`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
