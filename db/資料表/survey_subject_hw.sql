-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-01-15 14:35:06
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
  MODIFY `id` int(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
