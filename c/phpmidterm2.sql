-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-04-14 05:52:12
-- 伺服器版本: 10.1.10-MariaDB
-- PHP 版本： 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `phpmidterm`
--

-- --------------------------------------------------------

--
-- 資料表結構 `phpmidterm2`
--

CREATE TABLE `phpmidterm2` (
  `name` int(11) NOT NULL,
  `url` text NOT NULL,
  `shorturl` text NOT NULL,
  `click` int(11) NOT NULL,
  `uploadtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `phpmidterm2`
--

INSERT INTO `phpmidterm2` (`name`, `url`, `shorturl`, `click`, `uploadtime`) VALUES
(4, 'http://blog.changyy.org/2011/07/php-tinyurl-api.html', 'http://tinyurl.com/m7mblod', 1, '2016-04-14 11:43:50'),
(50, 'https://software.intel.com/zh-cn/blogs/2011/11/04/php-4', 'http://tinyurl.com/zf4ll4a', 1, '2016-04-14 11:50:08');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `phpmidterm2`
--
ALTER TABLE `phpmidterm2`
  ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
