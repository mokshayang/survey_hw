-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-01-16 21:26:40
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

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `survey_subject_hw`
--
ALTER TABLE `survey_subject_hw`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `survey_subject_hw`
--
ALTER TABLE `survey_subject_hw`
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
