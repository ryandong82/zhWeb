# Host: localhost  (Version: 5.5.40)
# Date: 2015-06-04 10:01:22
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

#
# Data for table "teacher_group"
#

/*!40000 ALTER TABLE `teacher_group` DISABLE KEYS */;
INSERT INTO `teacher_group` VALUES (1,'经济学家',NULL),(2,'经营管理类',NULL),(3,'投融资与财务管理类',NULL),(4,'组织与人力资源',NULL),(5,'国学•历史•人文',NULL),(11,'中层管理技能',NULL);
/*!40000 ALTER TABLE `teacher_group` ENABLE KEYS */;
