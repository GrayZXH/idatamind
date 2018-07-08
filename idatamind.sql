-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?07 �?08 �?10:43
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
  `cnname` varchar(50) DEFAULT NULL COMMENT '渠道名称',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '状态',
  `cgroup` smallint(3) unsigned DEFAULT NULL COMMENT '组',
  `store` smallint(4) unsigned NOT NULL DEFAULT '1' COMMENT '店铺ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cowner`
--

CREATE TABLE IF NOT EXISTS `cowner` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(9) unsigned NOT NULL COMMENT '渠道ID',
  `cname` varchar(50) NOT NULL COMMENT '渠道名称',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '1',
  `uid` int(9) unsigned DEFAULT NULL COMMENT '所属用户',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(9) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(1009) DEFAULT NULL,
  `authority` smallint(3) unsigned NOT NULL DEFAULT '1' COMMENT '权限',
  `ugroup` smallint(3) unsigned NOT NULL DEFAULT '1' COMMENT '用户组',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '1',
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `authority`, `ugroup`, `status`, `phone`) VALUES
(1, 'rayzxh@163.com', '123456', 'Ray', 1, 1, 1, NULL),
(2, '937349996@qq.com', '1234566666789.', 'zxh', 1, 1, 1, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
