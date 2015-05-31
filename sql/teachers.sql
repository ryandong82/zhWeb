# Host: localhost  (Version: 5.5.40)
# Date: 2015-05-31 20:09:50
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
  `teacher_photo` int(11) DEFAULT NULL,
  `order_num` float DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `visible` int(11) DEFAULT NULL,
  `content` text,
  `show_in_intro` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
