-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-10-31 13:08:35
-- 服务器版本： 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cz`
--

-- --------------------------------------------------------

--
-- 表的结构 `cz_activity`
--

CREATE TABLE `cz_activity` (
  `a_id` smallint(6) UNSIGNED NOT NULL COMMENT '活动编号',
  `m_id` smallint(6) UNSIGNED NOT NULL COMMENT '创建人编号',
  `a_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '活动名称',
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '邀请码',
  `num` smallint(6) UNSIGNED NOT NULL COMMENT '已参加总人数',
  `sta_name` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `sta_tel` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `sta_photo` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `sta_sex` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `sta_email` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='活动';

--
-- 转存表中的数据 `cz_activity`
--

INSERT INTO `cz_activity` (`a_id`, `m_id`, `a_name`, `code`, `num`, `sta_name`, `sta_tel`, `sta_photo`, `sta_sex`, `sta_email`, `time`) VALUES
(1, 11, '同学聚会', '1123', 4, 0, 0, 0, 0, 0, '2016-10-28 14:57:34'),
(7, 11, 'aaa', '711104', 3, 1, 1, 1, 0, 0, '2016-10-30 10:13:25'),
(8, 11, 'aaa', '811769', 2, 1, 1, 1, 0, 0, '2016-10-30 10:13:43'),
(15, 11, 'aaa', '151182', 2, 1, 1, 1, 1, 0, '2016-10-30 15:43:02'),
(16, 11, 'aaa', '161178', 0, 1, 0, 1, 0, 0, '2016-10-30 15:43:08');

-- --------------------------------------------------------

--
-- 表的结构 `cz_attend`
--

CREATE TABLE `cz_attend` (
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `a_id` smallint(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='用户-活动联系表';

--
-- 转存表中的数据 `cz_attend`
--

INSERT INTO `cz_attend` (`tel`, `a_id`) VALUES
('10086', 1),
('123456', 1),
('12345678901', 1),
('18840830882', 1),
('10086', 7),
('123456', 7),
('13986451816', 7),
('10086', 8),
('13986451816', 8),
('13986451816', 15),
('18840830882', 15);

-- --------------------------------------------------------

--
-- 表的结构 `cz_manager`
--

CREATE TABLE `cz_manager` (
  `m_id` smallint(6) UNSIGNED NOT NULL COMMENT '帐号',
  `m_password` varchar(63) COLLATE utf8_unicode_ci NOT NULL COMMENT '密码',
  `m_name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT AS `姓名`
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='管理员';

--
-- 转存表中的数据 `cz_manager`
--

INSERT INTO `cz_manager` (`m_id`, `m_password`, `m_name`) VALUES
(11, 'qilixiang2004', 'cz'),
(12, '123456', 'NANA');

-- --------------------------------------------------------

--
-- 表的结构 `cz_user`
--

CREATE TABLE `cz_user` (
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '帐号手机号',
  `u_password` varchar(63) COLLATE utf8_unicode_ci NOT NULL COMMENT '密码',
  `u_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '姓名',
  `photo` varchar(127) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT AS `照片`,
  `sex` tinyint(1) DEFAULT NULL COMMENT AS `性别`,
  `email` varchar(127) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT AS `邮箱`
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='用户';

--
-- 转存表中的数据 `cz_user`
--

INSERT INTO `cz_user` (`tel`, `u_password`, `u_name`, `photo`, `sex`, `email`) VALUES
('10086', '123456', 'nana', NULL, NULL, NULL),
('123456', '123456', 'cc', NULL, NULL, NULL),
('12345678901', '123456', 'aaa', '12345678901IMG_0095.JPG', 0, '243906076@qq.com'),
('13986451816', 'qilixiang2004', 'cz', 'picture01.jpg', 1, '243906076@qq.com'),
('18840830882', 'zhimakaimen', 'HAHAHA', 'photo222.jpg', 0, '23193819@dlut.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cz_activity`
--
ALTER TABLE `cz_activity`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `m_id` (`m_id`);

--
-- Indexes for table `cz_attend`
--
ALTER TABLE `cz_attend`
  ADD PRIMARY KEY (`tel`,`a_id`),
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `cz_manager`
--
ALTER TABLE `cz_manager`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `cz_user`
--
ALTER TABLE `cz_user`
  ADD PRIMARY KEY (`tel`),
  ADD UNIQUE KEY `photo` (`photo`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `cz_activity`
--
ALTER TABLE `cz_activity`
  MODIFY `a_id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '活动编号', AUTO_INCREMENT=17;
--
-- 使用表AUTO_INCREMENT `cz_manager`
--
ALTER TABLE `cz_manager`
  MODIFY `m_id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '帐号', AUTO_INCREMENT=13;
--
-- 限制导出的表
--

--
-- 限制表 `cz_activity`
--
ALTER TABLE `cz_activity`
  ADD CONSTRAINT `cz_activity_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `cz_manager` (`m_id`);

--
-- 限制表 `cz_attend`
--
ALTER TABLE `cz_attend`
  ADD CONSTRAINT `cz_attend_ibfk_1` FOREIGN KEY (`tel`) REFERENCES `cz_user` (`tel`),
  ADD CONSTRAINT `cz_attend_ibfk_2` FOREIGN KEY (`a_id`) REFERENCES `cz_activity` (`a_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
