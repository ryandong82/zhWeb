# Host: localhost  (Version: 5.5.40)
# Date: 2015-05-31 20:10:01
# Generator: MySQL-Front 5.3  (Build 4.120)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "teacher_group"
#

DROP TABLE IF EXISTS `teacher_group`;
CREATE TABLE `teacher_group` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) NOT NULL DEFAULT '',
  `group_orderno` float DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "teacher_group"
#

/*!40000 ALTER TABLE `teacher_group` DISABLE KEYS */;
INSERT INTO `teacher_group` VALUES (1,'私董会',NULL),(2,'投资家',NULL),(3,'聚娴女性',NULL),(4,'国学智慧',NULL),(5,'后EMBA高端项目',NULL);
/*!40000 ALTER TABLE `teacher_group` ENABLE KEYS */;
