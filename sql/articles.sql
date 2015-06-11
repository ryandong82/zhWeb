# Host: localhost  (Version: 5.5.40-log)
# Date: 2015-06-11 08:30:04
# Generator: MySQL-Front 5.3  (Build 4.120)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "articles"
#

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text,
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category` int(11) unsigned DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `visible` varchar(255) DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "articles"
#

/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (3,'qeq  是我人 脸角我用','截肢','2015-06-10 22:43:08',1,NULL,'1'),(4,'qeq  是我人 脸角我用','qeq &nbsp;是我人 脸角我用qeq &nbsp;是我人 脸角我用qeq &nbsp;是我人 脸角我用qeq &nbsp;是我人 脸角我用','2015-06-10 22:43:54',1,NULL,'1'),(5,'qeq  是我人 脸角我用','qeq &nbsp;是我人 脸角我用qeq &nbsp;是我人 脸角我用qeq &nbsp;是我人 脸角我用qeq &nbsp;是我人 脸角我用','2015-06-10 22:44:43',1,NULL,'1'),(6,'截肢','革鞯','2015-06-10 22:46:31',1,NULL,'1'),(7,'革','某月','2015-06-10 22:46:58',1,NULL,'1'),(8,'fwewewfqwf','f我有人人我有我租金伤脑筋犭','2015-06-10 23:00:29',1,NULL,'1'),(9,'前作罢工有<j是q ww >','吊死钓丝disosi3是我人是就是个屌丝<div><br></div><div><i>这个不好说\'</i></div>','2015-06-10 23:03:04',0,NULL,'1'),(10,'我说你个小逼\'','jq yi 我就是工工用有人我为','2015-06-10 23:16:11',2,NULL,'1');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
