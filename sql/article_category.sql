# Host: localhost  (Version: 5.5.40-log)
# Date: 2015-06-11 08:29:56
# Generator: MySQL-Front 5.3  (Build 4.120)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "article_category"
#

DROP TABLE IF EXISTS `article_category`;
CREATE TABLE `article_category` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(255) NOT NULL DEFAULT '',
  `order_no` float unsigned DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "article_category"
#

/*!40000 ALTER TABLE `article_category` DISABLE KEYS */;
INSERT INTO `article_category` VALUES (1,'笑话',NULL),(2,'百科',NULL),(3,'前任是逗逼',NULL);
/*!40000 ALTER TABLE `article_category` ENABLE KEYS */;
