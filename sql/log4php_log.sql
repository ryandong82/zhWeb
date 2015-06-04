# Host: localhost  (Version: 5.5.40)
# Date: 2015-06-04 14:45:03
# Generator: MySQL-Front 5.3  (Build 4.120)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "log4php_log"
#

DROP TABLE IF EXISTS `log4php_log`;
CREATE TABLE `log4php_log` (
  `timestamp` datetime DEFAULT NULL,
  `logger` varchar(256) DEFAULT NULL,
  `level` varchar(32) DEFAULT NULL,
  `message` varchar(4000) DEFAULT NULL,
  `thread` int(11) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `line` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
