-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-01-16 21:26:19
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

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin_hw`
--
ALTER TABLE `admin_hw`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin_hw`
--
ALTER TABLE `admin_hw`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
