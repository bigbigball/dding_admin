# MySQL-Front 5.1  (Build 2.7)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: dingding
# ------------------------------------------------------
# Server version 5.6.19

#
# Source for table commet
#

DROP TABLE IF EXISTS `commet`;
CREATE TABLE `commet` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `opinion_id` int(11) unsigned NOT NULL DEFAULT '0',
  `owner_id` int(11) unsigned NOT NULL DEFAULT '0',
  `target_id` int(11) unsigned DEFAULT '0',
  `status` tinyint(3) DEFAULT '0',
  `content` varchar(255) NOT NULL DEFAULT '''''',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `opinion_id` (`opinion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table commet
#
LOCK TABLES `commet` WRITE;
/*!40000 ALTER TABLE `commet` DISABLE KEYS */;

/*!40000 ALTER TABLE `commet` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table opinion
#

DROP TABLE IF EXISTS `opinion`;
CREATE TABLE `opinion` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `device` varchar(64) DEFAULT '''''',
  `status` tinyint(3) unsigned DEFAULT '0',
  `pictures` varchar(255) DEFAULT '''''',
  `score` int(11) unsigned DEFAULT '0',
  `stars` int(11) DEFAULT '0',
  `view` text,
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table opinion
#
LOCK TABLES `opinion` WRITE;
/*!40000 ALTER TABLE `opinion` DISABLE KEYS */;

INSERT INTO `opinion` VALUES (1,1,'0',0,'',200,10,'<p>²»´í¹þ¹þ¹þ¹þ1</p>',0,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `opinion` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table user
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(64) DEFAULT '''''',
  `nick_name` varchar(64) DEFAULT '''''',
  `mobile` varchar(11) NOT NULL DEFAULT '''''',
  `photo` varchar(255) DEFAULT '''''',
  `brief` varchar(255) DEFAULT '''''',
  `integral` int(11) unsigned DEFAULT '0',
  `is_leader` tinyint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table user
#
LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` VALUES (1,'yzm','yzmyzm','13070168291','','³ÌÐòÔ±',10,2);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table useradmin
#

DROP TABLE IF EXISTS `useradmin`;
CREATE TABLE `useradmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Dumping data for table useradmin
#
LOCK TABLES `useradmin` WRITE;
/*!40000 ALTER TABLE `useradmin` DISABLE KEYS */;

INSERT INTO `useradmin` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `useradmin` ENABLE KEYS */;
UNLOCK TABLES;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
