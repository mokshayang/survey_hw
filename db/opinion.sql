-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-01-15 14:31:59
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
  `creaded_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `admin_hw`
--

INSERT INTO `admin_hw` (`id`, `acc`, `pw`, `creaded_at`) VALUES
(1, 'admin', '12345678', '2022-12-24 17:28:55'),
(2, 'sos812', '123', '2023-01-15 07:41:04'),
(3, 'mack', '1234', '2023-01-15 09:18:57'),
(5, 'book', '1234', '2023-01-15 09:20:33'),
(6, 'work', '123', '2023-01-15 09:22:32'),
(7, 'bbc', '123', '2023-01-15 11:42:59');

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

--
-- 傾印資料表的資料 `survey_subject_hw`
--

INSERT INTO `survey_subject_hw` (`id`, `img`, `subject`, `type`, `acive`, `level`, `vote`, `created_at`, `updated_at`) VALUES
(1, '2023-01-08 10-47-22.jpg', '喜歡哪一種動物 ?', 'image/jpeg', 1, 0, 23, '2023-01-08 14:47:22', '2023-01-12 13:06:04'),
(4, '2023-01-08 10-58-43.jpg', '卯咪', 'image/jpeg', 1, 1, 0, '2023-01-08 14:58:43', '2023-01-08 14:59:40'),
(5, '2023-01-12 11-19-55.jpg', '要做測試', 'image/jpeg', 1, 0, 4, '2023-01-12 15:19:55', '2023-01-12 15:20:32'),
(6, '2023-01-14 11-36-46.jpg', '嘉明湖  aka ??', 'image/jpeg', 1, 1, 1, '2023-01-14 03:36:46', '2023-01-14 03:37:40'),
(7, '2023-01-14 11-40-19.jpg', '幾度 ?', 'image/jpeg', 1, 1, 2, '2023-01-14 03:40:19', '2023-01-14 03:40:45'),
(8, '2023-01-14 11-40-56.jpg', '在哪', 'image/jpeg', 1, 0, 3, '2023-01-14 03:40:56', '2023-01-14 03:41:15'),
(9, '2023-01-14 11-41-42.jpg', 'code  ? ', 'image/jpeg', 1, 1, 2, '2023-01-14 03:41:42', '2023-01-14 03:42:15'),
(10, '2023-01-15 02-48-07.jpg', '啥 ?', 'image/jpeg', 1, 0, 1, '2023-01-14 18:48:07', '2023-01-14 18:48:28'),
(11, '2023-01-15 09-35-28.jpg', '雲海', 'image/jpeg', 1, 1, 0, '2023-01-15 01:35:28', '2023-01-15 01:35:48'),
(12, '2023-01-15 09-37-25.jpg', 'asdsfsadfsdfsfd', 'image/jpeg', 1, 0, 1, '2023-01-15 01:37:25', '2023-01-15 01:37:39');

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
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_log_hw`
--
ALTER TABLE `survey_log_hw`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_options_hw`
--
ALTER TABLE `survey_options_hw`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_subject_hw`
--
ALTER TABLE `survey_subject_hw`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users_hw`
--
ALTER TABLE `users_hw`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
