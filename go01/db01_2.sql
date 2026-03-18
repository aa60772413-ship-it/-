-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2026-03-18 17:36:11
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db01_2`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ad`
--

CREATE TABLE `ad` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `sh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ad`
--

INSERT INTO `ad` (`id`, `text`, `sh`) VALUES
(1, 'SSSSSSSSSS', 0),
(2, 'ㄎㄎㄎㄎㄎ', 0),
(3, 'EEEEEEEEEEE', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `bottom`
--

CREATE TABLE `bottom` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bottom`
--

INSERT INTO `bottom` (`id`, `text`) VALUES
(1, '我的葉偉317');

-- --------------------------------------------------------

--
-- 資料表結構 `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `sh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `image`
--

INSERT INTO `image` (`id`, `img`, `sh`) VALUES
(1, '01D01.jpg', 1),
(2, '01D01.jpg', 1),
(3, '01D01.jpg', 1),
(4, '01D03.jpg', 1),
(5, '01D10.jpg', 1),
(6, '01C05.gif', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `mem`
--

CREATE TABLE `mem` (
  `id` int(11) NOT NULL,
  `acc` text NOT NULL,
  `pw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `mem`
--

INSERT INTO `mem` (`id`, `acc`, `pw`) VALUES
(1, 'admin', '1234'),
(2, 'a607724133', 'SSSSSS'),
(3, 'test', '5678');

-- --------------------------------------------------------

--
-- 資料表結構 `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `href` text NOT NULL,
  `sh` int(11) NOT NULL,
  `main_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `menu`
--

INSERT INTO `menu` (`id`, `text`, `href`, `sh`, `main_id`) VALUES
(1, 'adminA', '1234', 0, 4),
(2, 'a607724133', 'SSSSSS', 0, 4),
(3, 'test', '5678', 0, 4),
(4, '管理登入', 'back.php?do=title', 1, 0),
(5, '網站首頁', 'index.php', 1, 0),
(7, 'DD', 'DD', 1, 0),
(8, 'DD', 'DDDD', 0, 7),
(9, 'adminA', 'D', 0, 5);

-- --------------------------------------------------------

--
-- 資料表結構 `mvim`
--

CREATE TABLE `mvim` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `sh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `mvim`
--

INSERT INTO `mvim` (`id`, `img`, `sh`) VALUES
(1, '01C04.gif', 1),
(2, '01C01.gif', 1),
(3, '01C03.gif', 1),
(4, '01C02.gif', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `sh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`id`, `text`, `sh`) VALUES
(1, 'SSSSSSSSSSDDDDDDDDDDDDDDDDDDDDDD', 1),
(2, 'ㄎㄎㄎㄎㄎ', 1),
(3, 'EEEEEEEEEEE', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `title`
--

CREATE TABLE `title` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `text` text NOT NULL,
  `sh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `title`
--

INSERT INTO `title` (`id`, `img`, `text`, `sh`) VALUES
(1, '01B03.jpg', 'SSSSSdd', 1),
(2, '01B03.jpg', 'DDDDDD', 0),
(3, '01B02.jpg', 'AAA', 0),
(5, '01B04.jpg', 'DDDDDDD', 0),
(13, '01B02.jpg', 'DDDDD', 0),
(16, '01B01.jpg', 'DDD', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `total`
--

CREATE TABLE `total` (
  `id` int(11) NOT NULL,
  `text` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `total`
--

INSERT INTO `total` (`id`, `text`) VALUES
(1, 786);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bottom`
--
ALTER TABLE `bottom`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `mem`
--
ALTER TABLE `mem`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `mvim`
--
ALTER TABLE `mvim`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bottom`
--
ALTER TABLE `bottom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `mem`
--
ALTER TABLE `mem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `mvim`
--
ALTER TABLE `mvim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `title`
--
ALTER TABLE `title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `total`
--
ALTER TABLE `total`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
