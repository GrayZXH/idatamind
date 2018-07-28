-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?07 �?28 �?10:07
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `idatamind`
--

-- --------------------------------------------------------

--
-- 表的结构 `channel`
--

CREATE TABLE IF NOT EXISTS `channel` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `code` char(10) DEFAULT NULL COMMENT '渠道编码',
  `cname` varchar(50) DEFAULT NULL COMMENT '渠道名称',
  `status` varchar(50) DEFAULT NULL COMMENT '状态',
  `cgroup` varchar(50) DEFAULT NULL COMMENT '组',
  `store` varchar(50) DEFAULT NULL COMMENT '店铺ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- 转存表中的数据 `channel`
--

INSERT INTO `channel` (`id`, `code`, `cname`, `status`, `cgroup`, `store`) VALUES
(2, 'J1', '微博', '可用', '推广', '成都'),
(3, 'J6', '搜狗', '可用', '推广', '成都'),
(4, 'J83', '抖音', '可用', '推广', '成都'),
(5, 'J82', '抖音', '可用', '推广', '成都'),
(6, 'J31', '广点通', '可用', '推广', '成都'),
(7, 'J32', '广点通', '可用', '推广', '成都'),
(8, 'J42', '百度竞价', '可用', '推广', '成都'),
(9, 'J2', '朋友圈', '可用', '推广', '成都'),
(10, 'J24', '朋友圈', '可用', '推广', '成都'),
(11, 'J51', '大众点评', '可用', '推广', '成都'),
(12, 'J53', '114', '可用', '推广', '成都'),
(13, 'J52', '婚礼纪', '可用', '推广', '成都'),
(14, 'J56', '糯米', '可用', '推广', '成都'),
(17, 'J47', '信息流', '可用', '推广', '成都'),
(18, 'J43', '百度', '可用', '推广', '成都'),
(19, 'J4', '官网', '可用', '推广', '成都'),
(20, 'J41', '官网', '可用', '推广', '成都'),
(21, 'J81', '抖音', '可用', '推广', '成都'),
(22, 'J34', '广点通', '可用', '推广', '眉山'),
(23, 'J27', '朋友圈', '可用', '推广', '眉山'),
(24, 'J58', '114', '可用', '推广', '眉山'),
(25, 'J45', '百度', '可用', '推广', '眉山'),
(26, 'J85', '抖音', '可用', '推广', '眉山'),
(27, 'J29', '广点通', '可用', '推广', '眉山'),
(28, 'J36', '广点通', '可用', '推广', '眉山'),
(29, 'J88', '抖音', '可用', '推广', '眉山'),
(30, 'J33', '广点通', '可用', '推广', '雅安'),
(31, 'J26', '朋友圈', '可用', '推广', '雅安'),
(32, 'J84', '抖音', '可用', '推广', '雅安'),
(33, 'J44', '百度', '可用', '推广', '雅安'),
(34, 'J28', '微信', '可用', '推广', '雅安'),
(35, 'J35', '广点通', '可用', '推广', '雅安'),
(36, 'J87', '抖音', '可用', '推广', '雅安');

-- --------------------------------------------------------

--
-- 表的结构 `channelowner`
--

CREATE TABLE IF NOT EXISTS `channelowner` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(9) unsigned NOT NULL COMMENT '所属用户',
  `code` varchar(1000) NOT NULL COMMENT '渠道编码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `channelowner`
--

INSERT INTO `channelowner` (`id`, `uid`, `code`) VALUES
(1, 3, 'J2');

-- --------------------------------------------------------

--
-- 表的结构 `custom`
--

CREATE TABLE IF NOT EXISTS `custom` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(9) unsigned DEFAULT NULL COMMENT '渠道ID',
  `code` char(10) DEFAULT NULL COMMENT '渠道编码',
  `cname` varchar(50) DEFAULT NULL COMMENT '渠道名称',
  `date` date NOT NULL COMMENT '进店日期',
  `num` smallint(4) unsigned DEFAULT NULL COMMENT '进店人数',
  `updatauser` int(9) unsigned NOT NULL COMMENT '修改人',
  `updatatime` datetime NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `expenditure`
--

CREATE TABLE IF NOT EXISTS `expenditure` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(9) unsigned NOT NULL,
  `code` char(10) NOT NULL,
  `cname` varchar(50) DEFAULT NULL,
  `updatauser` int(9) unsigned NOT NULL,
  `updatatime` datetime DEFAULT NULL,
  `expenditure` int(9) DEFAULT NULL,
  `date` date NOT NULL COMMENT '日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `goal`
--

CREATE TABLE IF NOT EXISTS `goal` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(9) unsigned DEFAULT NULL COMMENT '用户名',
  `yx` int(9) unsigned DEFAULT NULL COMMENT '天有效目标',
  `hq` int(9) unsigned DEFAULT NULL COMMENT '天获取目标',
  `dd` int(9) unsigned DEFAULT NULL COMMENT '天订单目标',
  `ddje` int(9) unsigned DEFAULT NULL COMMENT '天订单金额目标',
  `bday` date NOT NULL COMMENT '目标开始日期',
  `eday` date NOT NULL COMMENT '目标结束日期',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '计划状态',
  `store` smallint(4) unsigned NOT NULL DEFAULT '1' COMMENT '店铺ID',
  `num` int(9) unsigned NOT NULL DEFAULT '1' COMMENT '计划编号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(9) unsigned NOT NULL COMMENT '渠道ID',
  `code` char(10) NOT NULL COMMENT '渠道编号',
  `cname` varchar(50) DEFAULT NULL COMMENT '渠道名称',
  `date` date NOT NULL COMMENT '订单日期',
  `updatatime` datetime NOT NULL,
  `updatauser` int(9) NOT NULL,
  `ordersize` smallint(4) unsigned DEFAULT NULL COMMENT '订单量',
  `orderamount` int(9) unsigned DEFAULT NULL COMMENT '订单金额',
  `store` smallint(4) unsigned NOT NULL DEFAULT '1' COMMENT '店铺ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `selectoptions`
--

CREATE TABLE IF NOT EXISTS `selectoptions` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `user_group` varchar(50) DEFAULT NULL,
  `user_role` varchar(50) DEFAULT NULL,
  `user_status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `selectoptions`
--

INSERT INTO `selectoptions` (`id`, `user_group`, `user_role`, `user_status`) VALUES
(1, '总店', NULL, NULL),
(2, '眉山', NULL, NULL),
(3, '雅安', NULL, NULL),
(4, '未分组', NULL, NULL),
(5, NULL, '超级管理员', NULL),
(6, NULL, '管理员', NULL),
(7, NULL, '推广', NULL),
(8, NULL, '普通员工', NULL),
(9, NULL, NULL, '可用'),
(10, NULL, NULL, '禁用');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `ugroup` varchar(50) NOT NULL DEFAULT '默认分组' COMMENT '用户组',
  `status` varchar(20) NOT NULL DEFAULT '可用',
  `phone` varchar(20) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL COMMENT '角色',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `username`, `ugroup`, `status`, `phone`, `role`) VALUES
(1, 'rayzxh@163.com', '123456', 'Ray', '未分组', '可用', NULL, '超级管理员'),
(2, '937349996@qq.com', '1234566666789.', 'zxh', '总店', '可用', NULL, '推广'),
(3, NULL, '123', '周光怡', '总店', '可用', NULL, '推广'),
(4, NULL, '123', '叶文斌', '总店', '可用', NULL, '推广'),
(5, NULL, '123', '文豪', '总店', '可用', NULL, '推广'),
(6, NULL, '123', '孙增飞', '总店', '可用', NULL, '推广'),
(7, NULL, '123', '文红春', '总店', '可用', NULL, '推广'),
(8, NULL, '123', '郭峰', '总店', '可用', NULL, '推广'),
(9, NULL, '123', '李韩', '总店', '可用', NULL, '推广'),
(10, NULL, '123', '胥兰', '总店', '可用', NULL, '推广'),
(11, NULL, '123', '刘吟', '未分组', '可用', NULL, '管理员'),
(12, NULL, '123', 'JFR', '未分组', '可用', NULL, '管理员');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
