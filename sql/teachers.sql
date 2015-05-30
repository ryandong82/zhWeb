# Host: localhost  (Version: 5.5.40)
# Date: 2015-05-31 02:17:39
# Generator: MySQL-Front 5.3  (Build 4.120)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "teachers"
#

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE `teachers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(10) NOT NULL,
  `teacher_descript` varchar(300) DEFAULT '',
  `teacher_photo` varchar(16) DEFAULT NULL,
  `order_num` float DEFAULT NULL,
  `create_date` float DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `visible` int(11) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "teachers"
#

/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` VALUES (1,'吉姆·罗杰斯','吉姆·罗杰斯(Jim Rogers)国际著名的投资家和金融学教授。他与巴菲特、索罗斯并称为全球三大金融巨头，被称为“华尔街神话”。',NULL,NULL,NULL,1,1,NULL),(3,'钱文忠','复旦大学历史学系教授，中国文化书院导师，华东师范大学东方文化研究中心研究员，北京电影学院客座教授，季羡林研究所副所长，北京大学《儒藏》精华编编纂委员会委员。',NULL,NULL,NULL,1,NULL,NULL);
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
