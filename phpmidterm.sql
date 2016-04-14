-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-04-14 06:29:04
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
-- 資料表結構 `phpmidterm`
--

CREATE TABLE `phpmidterm` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `phpmidterm`
--

INSERT INTO `phpmidterm` (`username`, `password`, `email`, `phone`) VALUES
('1234', '1234', '1234', 1234),
('555', '555', '555', 555),
('root', '123456', '1', 1);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `phpmidterm`
--
ALTER TABLE `phpmidterm`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
