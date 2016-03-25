# Host: localhost  (Version: 5.5.47)
# Date: 2016-03-25 08:04:58
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "coff_bankuai"
#

DROP TABLE IF EXISTS `coff_bankuai`;
CREATE TABLE `coff_bankuai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` mediumint(9) DEFAULT NULL COMMENT '主板块id',
  `ban_name` varchar(40) DEFAULT NULL COMMENT '板块名',
  `ban_info` text COMMENT '板块信息',
  `status` tinyint(3) DEFAULT NULL COMMENT '是否开启',
  `order` int(11) DEFAULT NULL COMMENT '排序',
  `time` varchar(100) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "coff_bankuai"
#

/*!40000 ALTER TABLE `coff_bankuai` DISABLE KEYS */;
/*!40000 ALTER TABLE `coff_bankuai` ENABLE KEYS */;
