-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-01-16 21:24:59
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
  `id` int(12) NOT NULL,
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
(3, 'mack', '123', '2023-01-16 14:50:36'),
(4, 'adolf', '123', '2023-01-16 14:53:39'),
(5, 'alvin', '123', '2023-01-16 14:53:46'),
(6, 'devin', '123', '2023-01-16 14:53:54'),
(7, 'scarlett', '123', '2023-01-16 14:50:20'),
(8, 'azami', '123', '2023-01-16 14:50:20'),
(9, 'luna', '123', '2023-01-16 14:50:20'),
(10, 'alanna', '123', '2023-01-16 14:50:20'),
(11, 'riley', '123', '2023-01-16 14:56:07'),
(12, 'doris', '123', '2023-01-16 15:30:55');

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
(26, 1, '', 1, '2023-01-15 10:02:36'),
(27, 1, '', 1, '2023-01-15 16:52:58'),
(28, 1, '', 0, '2023-01-15 17:10:41'),
(29, 1, '', 1, '2023-01-15 17:53:37'),
(30, 1, '', 4, '2023-01-16 17:23:11'),
(31, 1, '', 34, '2023-01-16 19:43:20');

-- --------------------------------------------------------

--
-- 資料表結構 `survey_options_hw`
--

CREATE TABLE `survey_options_hw` (
  `id` int(12) NOT NULL,
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
(2, 1, '北極熊', 18, '2023-01-08 14:47:42', '2023-01-12 13:06:04'),
(3, 4, '萌萌小天使', 812, '2023-01-08 14:59:40', '2023-01-16 17:25:45'),
(4, 4, '家人', 41, '2023-01-08 14:59:40', '2023-01-16 17:24:26'),
(5, 1, '海洋生物', 7, '2023-01-12 13:01:51', '2023-01-12 13:06:04'),
(6, 1, '其它', 0, '2023-01-12 13:01:51', '2023-01-12 13:06:04'),
(7, 5, '先隨便選', 2, '2023-01-12 15:20:32', '2023-01-12 15:20:32'),
(8, 5, '看看結果', 2, '2023-01-12 15:20:32', '2023-01-12 15:20:32'),
(9, 6, '世外桃源', 16, '2023-01-14 03:37:40', '2023-01-16 19:43:45'),
(10, 6, '好山好水', 22, '2023-01-14 03:38:19', '2023-01-16 19:43:51'),
(11, 6, '天使眼淚', 94, '2023-01-14 03:38:19', '2023-01-16 19:44:01'),
(13, 7, '溫暖', 8, '2023-01-14 03:40:45', '2023-01-16 17:17:12'),
(14, 7, '剛下完大雨', 5, '2023-01-14 03:40:45', '2023-01-16 17:17:28'),
(15, 7, '就是那道光 ?', 3, '2023-01-14 03:40:45', '2023-01-16 17:17:33'),
(17, 8, '不知道', 44, '2023-01-14 03:41:15', '2023-01-16 19:45:31'),
(18, 8, '夢裡', 24, '2023-01-14 03:41:15', '2023-01-16 19:45:46'),
(19, 9, 'PHP', 120, '2023-01-14 03:42:15', '2023-01-16 19:48:19'),
(20, 9, 'Javascript', 20, '2023-01-14 03:42:15', '2023-01-16 19:48:25'),
(21, 9, 'Python', 100, '2023-01-14 03:42:15', '2023-01-16 19:48:31'),
(24, 11, '想飛', 104, '2023-01-15 01:35:48', '2023-01-16 17:18:24'),
(25, 11, '很冷', 12, '2023-01-15 01:35:48', '2023-01-16 17:18:45'),
(26, 11, '清新的空氣', 84, '2023-01-15 01:35:48', '2023-01-16 17:18:41'),
(31, 26, '民眾黨', 280, '2023-01-15 15:40:33', '2023-01-16 19:56:57'),
(36, 5, '220有問題', 0, '2023-01-15 16:29:10', '2023-01-15 16:29:10'),
(39, 4, '滿滿幸福感', 174, '2023-01-16 16:07:32', '2023-01-16 17:24:10'),
(40, 8, '這我家', 134, '2023-01-16 16:13:26', '2023-01-16 19:47:03'),
(41, 9, '都喜歡 !!', 40, '2023-01-16 16:16:21', '2023-01-16 19:50:58'),
(42, 26, '國民黨', 180, '2023-01-16 16:20:21', '2023-01-16 19:57:13'),
(43, 26, '時代力量', 100, '2023-01-16 16:20:21', '2023-01-16 19:57:33'),
(44, 34, '拿槍的人', 10, '2023-01-16 16:46:43', '2023-01-16 19:50:14'),
(45, 34, '怪怪的安全帽', 20, '2023-01-16 16:46:43', '2023-01-16 19:49:54'),
(46, 34, '有披風', 2, '2023-01-16 16:46:43', '2023-01-16 19:50:18'),
(47, 34, '機器人', 88, '2023-01-16 16:46:43', '2023-01-16 19:50:02'),
(48, 51, '正義', 11, '2023-01-16 16:57:18', '2023-01-16 17:19:30'),
(49, 51, '邪惡', 46, '2023-01-16 16:57:18', '2023-01-16 17:19:38'),
(50, 51, '第三方', 23, '2023-01-16 16:57:18', '2023-01-16 17:19:54'),
(60, 26, '民進黨', 220, '2023-01-16 19:53:15', '2023-01-16 19:57:27'),
(61, 26, '其他', 100, '2023-01-16 19:53:15', '2023-01-16 19:54:54');

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
(1, '2023-01-08 10-47-22.jpg', '喜歡哪一種動物 ?', 'image/jpeg', 1, 0, 28, '2023-01-08 14:47:22', '2023-01-12 13:06:04'),
(4, '2023-01-08 10-58-43.jpg', '卯咪', 'image/jpeg', 1, 1, 1027, '2023-01-08 14:58:43', '2023-01-16 17:24:49'),
(5, '2023-01-12 11-19-55.jpg', '要做測試', 'image/jpeg', 1, 0, 4, '2023-01-12 15:19:55', '2023-01-12 15:20:32'),
(6, '2023-01-14 11-36-46.jpg', '嘉明湖  aka ??', 'image/jpeg', 1, 0, 132, '2023-01-14 03:36:46', '2023-01-16 19:44:18'),
(7, '2023-01-14 11-40-19.jpg', '圖示的環境 ?', 'image/jpeg', 1, 1, 16, '2023-01-14 03:40:19', '2023-01-16 17:15:50'),
(8, '2023-01-14 11-40-56.jpg', '你覺得在哪 ', 'image/jpeg', 1, 127, 202, '2023-01-14 03:40:56', '2023-01-16 19:46:46'),
(9, '2023-01-14 11-41-42.jpg', '喜歡哪種code  ? ', 'image/jpeg', 1, 0, 280, '2023-01-14 03:41:42', '2023-01-16 19:51:11'),
(11, '2023-01-15 09-35-28.jpg', '雲海', 'image/jpeg', 1, 1, 200, '2023-01-15 01:35:28', '2023-01-16 17:18:12'),
(26, '2023-01-15 11-40-27.png', '選舉到  支持 ?', 'image/png', 1, 0, 880, '2023-01-15 15:40:27', '2023-01-16 19:55:34'),
(34, '2023-01-17 12-27-47.jpg', '他是誰 ?', 'image/jpeg', 1, 0, 120, '2023-01-16 16:27:47', '2023-01-16 19:48:47'),
(51, '2023-01-17 12-54-43.jpg', '鬥羅大陸哪一方?', 'image/jpeg', 1, 1, 80, '2023-01-16 16:54:43', '2023-01-16 17:20:03');

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_log_hw`
--
ALTER TABLE `survey_log_hw`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_options_hw`
--
ALTER TABLE `survey_options_hw`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_subject_hw`
--
ALTER TABLE `survey_subject_hw`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users_hw`
--
ALTER TABLE `users_hw`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
