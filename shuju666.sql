-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `shuju666` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `shuju666`;

DROP TABLE IF EXISTS `pan_admin`;
CREATE TABLE `pan_admin` (
  `aid` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `aname` varchar(20) NOT NULL DEFAULT '' COMMENT 'admin username',
  `apwd` varchar(40) NOT NULL DEFAULT '' COMMENT 'admin pass',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `pan_cards`;
CREATE TABLE `pan_cards` (
  `cno` varchar(20) NOT NULL,
  `ckeys` varchar(40) NOT NULL,
  `cvalue` int(4) unsigned NOT NULL,
  `cstatus` int(1) unsigned NOT NULL DEFAULT '0',
  `ctime` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `pan_feedback`;
CREATE TABLE `pan_feedback` (
  `pfid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pf_username` char(100) NOT NULL,
  `pf_content` text NOT NULL,
  `pf_time` varchar(25) NOT NULL,
  PRIMARY KEY (`pfid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `pan_invite`;
CREATE TABLE `pan_invite` (
  `pin` int(7) unsigned NOT NULL AUTO_INCREMENT,
  `uemail` char(40) NOT NULL,
  `pi_code` char(10) NOT NULL,
  `pi_count` char(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `pan_logs`;
CREATE TABLE `pan_logs` (
  `plid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `plword` varchar(50) NOT NULL,
  `plstatus` int(1) unsigned NOT NULL DEFAULT '0',
  `pltime` varchar(30) NOT NULL,
  PRIMARY KEY (`plid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `pan_submit`;
CREATE TABLE `pan_submit` (
  `suid` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'submit id',
  `suname` varchar(100) NOT NULL DEFAULT '' COMMENT 'submit name',
  `sulink` varchar(100) NOT NULL COMMENT 'submit link',
  `suemail` varchar(50) NOT NULL COMMENT 'submit code',
  `sutime` varchar(30) NOT NULL DEFAULT '0' COMMENT 'submit time',
  `suverify` int(1) unsigned NOT NULL DEFAULT '0' COMMENT 'submit isverify',
  PRIMARY KEY (`suid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `pan_user`;
CREATE TABLE `pan_user` (
  `uid` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'user id',
  `uname` varchar(20) NOT NULL DEFAULT '' COMMENT 'user name',
  `upwd` varchar(40) NOT NULL DEFAULT '' COMMENT 'user pass',
  `usalt` varchar(20) NOT NULL DEFAULT '' COMMENT 'salt of user pass',
  `uemail` varchar(60) NOT NULL DEFAULT '' COMMENT 'user email',
  `uregcity` varchar(30) NOT NULL DEFAULT '' COMMENT 'user reg city',
  `uregtime` varchar(30) NOT NULL DEFAULT '0' COMMENT 'user reg time',
  `urank` int(6) unsigned NOT NULL DEFAULT '0' COMMENT 'user rank',
  `uvip` int(1) unsigned NOT NULL DEFAULT '0' COMMENT 'user is vip',
  PRIMARY KEY (`uid`),
  KEY `user_usize` (`uvip`),
  KEY `user_uname` (`uname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- 2017-09-21 15:51:57
