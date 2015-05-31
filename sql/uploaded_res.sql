# Host: localhost  (Version: 5.5.40)
# Date: 2015-05-31 20:09:37
# Generator: MySQL-Front 5.3  (Build 4.120)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "uploaded_res"
#

DROP TABLE IF EXISTS `uploaded_res`;
CREATE TABLE `uploaded_res` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL DEFAULT '',
  `create_time` datetime DEFAULT NULL,
  `mime_type` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
