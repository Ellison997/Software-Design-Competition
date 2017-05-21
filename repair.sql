# SQL-Front 5.1  (Build 4.16)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: repair
# ------------------------------------------------------
# Server version 5.5.38

DROP DATABASE IF EXISTS `repair`;
CREATE DATABASE `repair` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `repair`;

#
# Source for table administrator
#

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE `administrator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(30) NOT NULL,
  `createtime` datetime DEFAULT NULL,
  `usename` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Dumping data for table administrator
#

LOCK TABLES `administrator` WRITE;
/*!40000 ALTER TABLE `administrator` DISABLE KEYS */;
INSERT INTO `administrator` VALUES (1,'1215722711','123456789','2016-09-09','ҹɫ&');
INSERT INTO `administrator` VALUES (2,'147258369','000000000','2016-09-08','');
/*!40000 ALTER TABLE `administrator` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table checkorder
#

DROP TABLE IF EXISTS `checkorder`;
CREATE TABLE `checkorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sockername` text,
  `sockerphone` text,
  `position` text,
  `time` datetime DEFAULT NULL,
  `question` text,
  `showdir` text,
  `hosty` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='定期检查信息';

#
# Dumping data for table checkorder
#

LOCK TABLES `checkorder` WRITE;
/*!40000 ALTER TABLE `checkorder` DISABLE KEYS */;
INSERT INTO `checkorder` VALUES (1,'米娜','15587752241','教学楼A A303 ','2016-08-22 20:20:10','投影仪','待解决',0);
INSERT INTO `checkorder` VALUES (7,'主管','17096832922','教学楼A A303 ','2016-08-20 06:20:21','空调','有风险',1);
INSERT INTO `checkorder` VALUES (8,'孔明','','宿舍3号楼5层','2016-10-15 23:07:09','窗户','没风险',0);
INSERT INTO `checkorder` VALUES (9,'孔明','','教学楼A102','2016-10-15 23:07:13','电灯','有风险',6);
INSERT INTO `checkorder` VALUES (10,'孔明','','教学楼F ','2016-10-15 23:07:18','风扇','有风险',0);
INSERT INTO `checkorder` VALUES (11,'孔明','','宿舍3号楼9层','2016-10-15 23:07:00','水管','没风险',0);
INSERT INTO `checkorder` VALUES (12,'孔明','','教学楼A302','2016-10-15 23:06:56','电灯','有风险',0);
/*!40000 ALTER TABLE `checkorder` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table complain
#

DROP TABLE IF EXISTS `complain`;
CREATE TABLE `complain` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '投诉',
  `sockername` text,
  `sockerphone` text,
  `username` text,
  `userphone` text,
  `time` datetime DEFAULT NULL,
  `question` text,
  `fromsource` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='投诉信息';

#
# Dumping data for table complain
#

LOCK TABLES `complain` WRITE;
/*!40000 ALTER TABLE `complain` DISABLE KEYS */;
INSERT INTO `complain` VALUES (7,'丽丽','17096832944','田春乐','17864153070','2016-10-14 10:44:53','骚扰电话','维修人员');
INSERT INTO `complain` VALUES (8,'雪花','18578969855','王敏','15963258833','2016-10-13 13:50:12','骚扰电话','维修人员');
INSERT INTO `complain` VALUES (9,'李华','17096832933','李晓明','17864153067','2016-10-13 17:37:12','骚扰电话','维修人员');
INSERT INTO `complain` VALUES (10,'孔吉','15898619588','王敏','15569358859','2016-10-13 17:52:41','骚扰电话','维修人员');
INSERT INTO `complain` VALUES (12,'丽丽','17096832944','田春乐','17864153070','2016-10-12 05:34:29','维修进度太慢，大于3天','客户');
INSERT INTO `complain` VALUES (13,'李华','17096832933','李晓明','17864153067','2016-10-13 13:50:12','维修进度太慢，大于5天','维修人员');
INSERT INTO `complain` VALUES (14,'孔明','17096832955','孙鑫','15998735962','2016-10-14 17:10:41','骚扰电话','客户');
/*!40000 ALTER TABLE `complain` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table control
#

DROP TABLE IF EXISTS `control`;
CREATE TABLE `control` (
  `name` varchar(30) NOT NULL,
  `direction` varchar(20) DEFAULT NULL,
  `arm` varchar(20) DEFAULT NULL,
  `dance` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Dumping data for table control
#

LOCK TABLES `control` WRITE;
/*!40000 ALTER TABLE `control` DISABLE KEYS */;
INSERT INTO `control` VALUES ('car02','103',NULL,NULL);
INSERT INTO `control` VALUES ('car03','103',NULL,NULL);
INSERT INTO `control` VALUES ('car04','103',NULL,NULL);
INSERT INTO `control` VALUES ('car05','103',NULL,NULL);
INSERT INTO `control` VALUES ('car06','103',NULL,NULL);
INSERT INTO `control` VALUES ('cars','106','',NULL);
/*!40000 ALTER TABLE `control` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table customer
#

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `password` text,
  `phone` text,
  `school` text,
  `job` text,
  `prestige` int(11) DEFAULT '6',
  `picture` text,
  `state` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='客户信息';

#
# Dumping data for table customer
#

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'王敏','123456','17864153068','山东商业职业技术学院','学生',6,'/Repair/Users/Start/img/IMG_20160913010434.jpg',0);
INSERT INTO `customer` VALUES (2,'孔佳','ws789','17864153022','山东商业职业技术学院','学生',6,'/Repair/Users/Start/img/IMG_20161015235236.jpg',0);
INSERT INTO `customer` VALUES (3,'栗子','123456','17864153069','山东商业职业技术学院','学生',6,'/Repair/Users/Start/img/IMG_20160906184712.jpg',0);
INSERT INTO `customer` VALUES (4,'孙鑫','123456','15998735962','山东商业职业技术学院','学生',6,'/Repair/Users/Start/img/IMG_20160906184712.jpg',0);
INSERT INTO `customer` VALUES (5,'李鹏飞','x123','17865423609','山东商业职业技术学院','学生',6,'/Repair/Users/Start/img/IMG_20160913010434.jpg',0);
INSERT INTO `customer` VALUES (6,'孔玉华','ws123','15998725631','山东商业职业技术学院','学生',6,'/Repair/Users/Start/img/IMG_20160906184712.jpg',0);
INSERT INTO `customer` VALUES (7,'宋江明','ws123','15987436946','山东商业职业技术学院','学生',6,'/Repair/Users/Start/img/IMG_20160913010434.jpg',0);
INSERT INTO `customer` VALUES (8,'田春乐','123456','17864153070','山东商业职业技术学院','学生',5,'/Repair/Users/Start/img/IMG_20161015235236.jpg',0);
INSERT INTO `customer` VALUES (9,'李晓明','123456','17864153067','山东商业职业技术学院','学生',6,'/Repair/Users/Start/img/IMG_20161015234433.jpg',0);
INSERT INTO `customer` VALUES (10,'孔华','123456','17864117692','山东商业职业技术学院','学生',6,NULL,0);
INSERT INTO `customer` VALUES (11,'田春乐','123456','15069158900','山东商业职业技术学院','学生',6,NULL,0);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table feedback
#

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `userphone` text,
  `question` text,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='反馈信息';

#
# Dumping data for table feedback
#

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (1,'栗子','17864153069','很好，如果态度好点更好了','2016-10-14 06:24:51');
INSERT INTO `feedback` VALUES (2,'王敏','15998563298','很好，如果速度再快点那就更好了','2016-09-01 06:24:51');
INSERT INTO `feedback` VALUES (3,'孙鑫','15998735962','服务不错','2016-10-13 12:24:51');
INSERT INTO `feedback` VALUES (4,'李晓明','17864153067','加快维修速度','2016-10-14 11:24:51');
INSERT INTO `feedback` VALUES (5,'王敏','17864153068','不错','2016-10-14 16:36:27');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table lukuang
#

DROP TABLE IF EXISTS `lukuang`;
CREATE TABLE `lukuang` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(50) DEFAULT NULL,
  `zhangai` varchar(50) DEFAULT NULL,
  `ludeng` varchar(30) DEFAULT NULL,
  `jiaotong` varchar(50) DEFAULT NULL,
  `wendu` varchar(20) DEFAULT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Dumping data for table lukuang
#

LOCK TABLES `lukuang` WRITE;
/*!40000 ALTER TABLE `lukuang` DISABLE KEYS */;
INSERT INTO `lukuang` VALUES (1,'G3点','鲁H 235Z1','异常','D5点','17.6℃','2016-11-02');
INSERT INTO `lukuang` VALUES (2,'C5点','鲁H 235Z1','正常','D6点','13.2℃','2016-11-06');
INSERT INTO `lukuang` VALUES (3,'B2点 ','国A 123F5','正常','E2点','20.1℃','2016-11-11');
INSERT INTO `lukuang` VALUES (4,'C3点','鲁A 353H1','正常','C4点','8.9℃','2016-11-15');
INSERT INTO `lukuang` VALUES (5,'D6点','国A 123F5','正常','G2点','15℃','2016-11-17');
/*!40000 ALTER TABLE `lukuang` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table notification
#

DROP TABLE IF EXISTS `notification`;
CREATE TABLE `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `userphone` text,
  `position` text,
  `question` text,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='通知信息';

#
# Dumping data for table notification
#

LOCK TABLES `notification` WRITE;
/*!40000 ALTER TABLE `notification` DISABLE KEYS */;
INSERT INTO `notification` VALUES (1,'孔佳','17865296230','教学楼A103','投影仪不能使用','2016-08-31 13:56:51');
INSERT INTO `notification` VALUES (9,'王敏','wed','哈哈','空间','2016-08-31 16:56:46');
INSERT INTO `notification` VALUES (10,'王敏','1526399999','f','asds','2016-08-27 17:10:26');
INSERT INTO `notification` VALUES (11,'栗子','17864153069','教学楼F206','投影仪不可以用了，还没修好','2016-09-08 13:02:18');
INSERT INTO `notification` VALUES (12,'王敏','17864153068','教学楼A301','投影仪坏了','2016-09-12 23:02:40');
INSERT INTO `notification` VALUES (13,'李晓明','17864153067','教学楼F102','多媒体设备的电脑部分','2016-10-14 18:47:59');
INSERT INTO `notification` VALUES (14,'孔玉华','15998725631','教学楼A105','投影仪','2016-10-15 00:50:43');
/*!40000 ALTER TABLE `notification` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table onlineorder
#

DROP TABLE IF EXISTS `onlineorder`;
CREATE TABLE `onlineorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `phone` text,
  `intime` datetime DEFAULT NULL,
  `outtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COMMENT='在线单信息';

#
# Dumping data for table onlineorder
#

LOCK TABLES `onlineorder` WRITE;
/*!40000 ALTER TABLE `onlineorder` DISABLE KEYS */;
INSERT INTO `onlineorder` VALUES (12,'李华','17096832933','2016-08-21 11:57:44','2016-08-21 11:57:47');
INSERT INTO `onlineorder` VALUES (13,'李华','17096832933','2016-08-23 16:02:34','2016-08-23 16:02:48');
INSERT INTO `onlineorder` VALUES (14,'丽丽','17096832944','2016-08-23 16:11:28','2016-08-23 16:11:36');
INSERT INTO `onlineorder` VALUES (15,'李华','17096832933','2016-08-23 16:17:54','2016-08-23 16:18:05');
INSERT INTO `onlineorder` VALUES (16,'雪花','2147483647','2016-08-23 16:20:12','2016-08-23 16:21:20');
INSERT INTO `onlineorder` VALUES (17,'李华','17096832933','2016-08-23 16:23:01','2016-08-23 16:23:10');
INSERT INTO `onlineorder` VALUES (18,'丽丽','17096832944','2016-08-23 16:34:53','2016-08-23 16:35:01');
INSERT INTO `onlineorder` VALUES (19,'李华','17096832933','2016-08-23 16:40:18','2016-08-23 16:40:50');
INSERT INTO `onlineorder` VALUES (20,'雪花','15589542365','2016-08-23 17:24:14','2016-08-23 17:24:32');
INSERT INTO `onlineorder` VALUES (21,'李华','17096832933','2016-08-23 17:23:27','2016-08-23 17:25:42');
INSERT INTO `onlineorder` VALUES (22,'丽丽','17096832944','2016-08-23 17:24:39','2016-08-23 17:26:10');
INSERT INTO `onlineorder` VALUES (23,'李华','17096832933','2016-08-23 17:41:02','2016-08-23 17:44:48');
INSERT INTO `onlineorder` VALUES (24,'雪花','15589542365','2016-08-24 21:36:26','2016-08-24 22:36:36');
INSERT INTO `onlineorder` VALUES (25,'李华','17096832933','2016-08-24 22:36:38','2016-08-24 23:05:09');
INSERT INTO `onlineorder` VALUES (26,'丽丽','17096832944','2016-08-27 09:32:28','2016-08-27 09:47:18');
INSERT INTO `onlineorder` VALUES (27,'丽丽','17096832944','2016-08-30 09:36:10','2016-08-30 09:36:49');
INSERT INTO `onlineorder` VALUES (28,'德芙','','2016-09-02 10:07:26','2016-09-02 10:09:26');
INSERT INTO `onlineorder` VALUES (29,'雨雨','','2016-09-12 21:39:52','2016-09-12 22:04:19');
INSERT INTO `onlineorder` VALUES (30,'雨雨','','2016-09-14 16:00:57','2016-09-14 16:03:29');
INSERT INTO `onlineorder` VALUES (31,'孔红飞','','2016-11-18 13:27:50','2016-11-18 13:28:35');
/*!40000 ALTER TABLE `onlineorder` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table screen_order
#

DROP TABLE IF EXISTS `screen_order`;
CREATE TABLE `screen_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `userphone` text,
  `sockername` text,
  `sockerphone` text,
  `question` text,
  `position` text,
  `positionlocation` text,
  `time` datetime DEFAULT NULL,
  `static` text,
  `picture` text,
  `type` text,
  `completetime` datetime DEFAULT NULL,
  `racetime` datetime DEFAULT NULL,
  `appraise` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8 COMMENT='现场单信息';

#
# Dumping data for table screen_order
#

LOCK TABLES `screen_order` WRITE;
/*!40000 ALTER TABLE `screen_order` DISABLE KEYS */;
INSERT INTO `screen_order` VALUES (12,'田春乐','17864153070','丽丽','17096832944','地板','珠江大道靠近国家农产品现代物流工程技术研究中心','珠江大道靠近国家农产品现代物流工程技术研究中心','2016-10-14 11:22:11','已接单','/Repair/Users/img/IMG_20160906151500.jpg','教室地板','2016-10-14 11:24:55','2016-10-14 14:24:55','很好很好');
INSERT INTO `screen_order` VALUES (48,'王敏','17864153068','张峰','15998732941','窗户','A103','山东省 济南市 历城区 山东商业职业技术学院','2016-08-25 10:37:53','已解决','/Repair/Users/img/IMG_20160825204714.jpg','教室风扇','2016-08-26 21:18:47','2016-08-26 17:52:32','好评吧  嘿嘿。');
INSERT INTO `screen_order` VALUES (49,'田春乐','17864153070','','','投影仪','F102','山东省 济南市 历城区 珠江大道靠近国家农产品现代物流工程技术研究中心','2016-08-25 10:47:21','未接单','/Repair/Users/img/IMG_20160825224716.jpg','投影仪',NULL,NULL,'');
INSERT INTO `screen_order` VALUES (50,'孔佳','16398756395','德芙','155225','玻璃','三层','山东省 济南市 历城区 珠江大道靠近国家农产品现代物流工程技术研究中心','2016-08-25 10:48:11','已接单','/Repair/Users/img/IMG_20160825224812.jpg','投影仪','2016-08-16 01:52:12','2016-08-23 01:52:16','挺好的');
INSERT INTO `screen_order` VALUES (51,'李晓明','17869853052','李华','17096832933','门','一层','山东省 济南市 历城区 珠江大道靠近国家农产品现代物流工程技术研究中心','2016-08-25 10:59:50','已解决','/Repair/Users/img/IMG_20160825225947.jpg','教室风扇','2016-08-31 01:52:31','2016-08-29 01:52:38','好评');
INSERT INTO `screen_order` VALUES (52,'田春乐','17864153070','丽丽','17096832944','鼠标','珠江大道靠近国家农产品现代物流工程技术研究中心',':山东省济南市历下区会展路靠近济南国际会展中心D区','2016-09-06 03:15:17','已解决','/Repair/Users/img/IMG_20160906151500.jpg','教学楼灯设备','2016-09-08 19:00:00','2016-09-07 18:58:17','很好 ，服务很贴心');
INSERT INTO `screen_order` VALUES (53,'李晓明','17864153067','李华','17096832933','电瓶车','珠江大道靠近国家农产品现代物流工程技术研究中心',':山东省济南市历下区会展路靠近济南国际会展中心D区','2016-09-06 03:28:14','已接单','/Repair/Users/img/IMG_20160906152813.jpg','教室玻璃','2016-09-09 19:00:00','2016-09-12 23:06:03','服务很好');
INSERT INTO `screen_order` VALUES (54,'孔佳','17864153022','德芙','155225','没气了','三楼 303',':山东省济南市历城区锦江路靠近山东商业职业技术学院实训中心','2016-09-08 11:36:26','已解决','/Repair/Users/img/IMG_20160908113625.jpg','水管','2016-09-08 11:44:38','2016-09-06 11:44:13','很好，表现不错');
INSERT INTO `screen_order` VALUES (57,'田春乐','17864153070','丽丽','17096832944','键盘','一楼 厕所',':山东省济南市历城区锦江路靠近山东商业职业技术学院实训中心','2016-09-08 01:11:11','已接单','/Repair/Users/img/IMG_20160908131017.jpg','办公室设备','2016-09-11 14:24:55','2016-09-12 22:19:33','不错不错');
INSERT INTO `screen_order` VALUES (58,'李晓明','17864153067','','','电脑','教学楼A301',':山东省济南市历城区莱茵河路靠近文颖楼','2016-09-12 10:17:11','未接单','/Repair/Users/img/IMG_20160912221658.jpg','教室玻璃',NULL,NULL,'');
INSERT INTO `screen_order` VALUES (59,'孔佳','17869853052','丽江','17863542030','门','一层','山东省 济南市 历城区 珠江大道靠近国家农产品现代物流工程技术研究中心','2016-09-11 14:22:42','已解决','/Repair/Users/img/IMG_20160825225947.jpg','教室风扇','2016-09-14 14:23:09','2016-09-13 14:23:15','中评');
INSERT INTO `screen_order` VALUES (60,'李晓明','17864153067','李华','17096832933','窗户','珠江大道靠近国家农产品现代物流工程技术研究中心','山东省 济南市 历城区 山东商业职业技术学院','2016-09-02 14:24:10','已解决','/Repair/Users/img/IMG_20160825204714.jpg','教室风扇','2016-09-14 14:24:55','2016-09-12 14:25:00','速度很快，服务很好');
INSERT INTO `screen_order` VALUES (61,'田春乐','17864153070','丽丽','17096832944','玻璃','F102','山东省 济南市 历城区 珠江大道靠近国家农产品现代物流工程技术研究中心','2016-09-12 14:26:29','已接单','/Repair/Users/img/IMG_20160825224812.jpg','投影仪','2016-09-13 14:26:59','2016-09-14 14:27:03','速度很快，哈哈');
INSERT INTO `screen_order` VALUES (62,'李晓明','17864153067','','','大门','f302',':山东省济南市历城区长江大道靠近山东商业职业技术学院-教学楼F','2016-10-14 01:42:43','未接单','/Repair/Users/img/IMG_20161014134240.jpg','办公室设备',NULL,NULL,'');
INSERT INTO `screen_order` VALUES (63,'李晓明','17864153067','','','窗户','东面',':山东省济南市历下区会展路靠近济南国际会展中心D区','2016-10-14 04:38:41','未接单','/Repair/Users/img/IMG_20161014163835.jpg','宿舍水管',NULL,NULL,'');
INSERT INTO `screen_order` VALUES (64,'李晓明','17864153067','李华','17096832933','板凳','  路东的',':山东省济南市历下区开拓路靠近中国建设银行(济南未来城支行)','2016-10-14 06:27:12','已接单','/Repair/Users/img/IMG_20161014182656.jpg','宿舍水管','2016-09-14 14:23:09','2016-09-24 14:23:09','很好很好');
INSERT INTO `screen_order` VALUES (65,'田春乐','17864153070','丽丽','17096832944','桌子','河东',':山东省济南市历城区世纪大道靠近三江源牛肉拉面(凤岐路)','2016-10-14 06:37:15','已接单','/Repair/Users/img/IMG_20161014183706.jpg','宿舍水管','2016-10-12 09:23:09','2016-10-14 14:23:09','不错');
INSERT INTO `screen_order` VALUES (66,'田春乐','17864153070',NULL,NULL,'','水管坏了',':山东省济南市历城区莱茵河路靠近文颖楼','2016-10-14 11:39:29','未接单','/Repair/Users/img/IMG_20161014233913.jpg','宿舍水管',NULL,NULL,NULL);
INSERT INTO `screen_order` VALUES (67,'王敏','17864153068',NULL,NULL,'','',':山东省济南市历城区信江路靠近文颖楼','2016-10-15 12:25:30','未接单','/Repair/Users/img/IMG_20161015002523.jpg','宿舍水管',NULL,NULL,NULL);
INSERT INTO `screen_order` VALUES (68,'田春乐','17864153070',NULL,NULL,'','',':山东省济南市历城区长江大道靠近文颖楼','2016-10-15 12:41:57','未接单','/Repair/Users/img/IMG_20161015004150.jpg','宿舍水管',NULL,NULL,NULL);
INSERT INTO `screen_order` VALUES (69,'孔玉华','15998725631',NULL,NULL,'','',':山东省济南市历城区长江大道靠近文颖楼','2016-10-15 12:47:39','未接单','/Repair/Users/img/IMG_20161015004735.jpg','宿舍水管',NULL,NULL,NULL);
INSERT INTO `screen_order` VALUES (70,'栗子','17864153069','丽丽','17096832944','','',':山东省济南市历城区彩龙路靠近爱尚蛋糕(彩龙路)','2016-10-15 10:14:47','已接单','/Repair/Users/img/IMG_20161015221431.jpg','教室多媒体',NULL,'2016-10-15 10:15:09',NULL);
INSERT INTO `screen_order` VALUES (71,'栗子','17864153069',NULL,NULL,'','',':山东省济南市历城区锦江路靠近山东商业职业技术学院实训中心','2016-11-17 08:10:51','未接单','/Repair/Users/img/IMG_20161117201024.jpg','宿舍水管',NULL,NULL,NULL);
INSERT INTO `screen_order` VALUES (72,'栗子','17864153069',NULL,NULL,'','',':山东省济南市历城区锦江路靠近山东商业职业技术学院实训中心','2016-11-17 08:14:15','未接单','/Repair/Users/img/IMG_20161117201357.jpg','宿舍水管',NULL,NULL,NULL);
INSERT INTO `screen_order` VALUES (73,'栗子','17864153069',NULL,NULL,'','',':山东省济南市历城区运河路靠近山东商业职业技术学院-教学楼F','2016-11-18 12:20:08','未接单','/Repair/Users/img/IMG_20161118121956.jpg','其它',NULL,NULL,NULL);
INSERT INTO `screen_order` VALUES (74,'栗子','17864153069',NULL,NULL,'','',':山东省济南市历城区运河路靠近山东商业职业技术学院-教学楼F','2016-11-18 01:29:06','未接单','/Repair/Users/img/IMG_20161118132902.jpg','其它',NULL,NULL,NULL);
INSERT INTO `screen_order` VALUES (75,'栗子','17864153069',NULL,NULL,'','',':山东省济南市历下区舜华路靠近中国联通山东省分公司','2016-11-19 09:53:01','未接单','/Repair/Users/img/IMG_20161119095233.jpg','宿舍水管',NULL,NULL,NULL);
INSERT INTO `screen_order` VALUES (76,'栗子','17864153069',NULL,NULL,'','',':山东省济南市历下区舜华路靠近中国联通山东省分公司','2016-11-19 11:28:59','未接单','/Repair/Users/img/IMG_20161119112854.jpg','宿舍水管',NULL,NULL,NULL);
/*!40000 ALTER TABLE `screen_order` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table servicer
#

DROP TABLE IF EXISTS `servicer`;
CREATE TABLE `servicer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `password` text,
  `phonenumber` text NOT NULL,
  `job` text,
  `school` text,
  `picture` text,
  `state` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=86 DEFAULT CHARSET=utf8 COMMENT='服务人员信息';

#
# Dumping data for table servicer
#

LOCK TABLES `servicer` WRITE;
/*!40000 ALTER TABLE `servicer` DISABLE KEYS */;
INSERT INTO `servicer` VALUES (1,'达芙妮','fggfh222','15380812447','维修员','山东商业职业技术学院','/Repair/Users/img/IMG_20160825224716.jpg',0);
INSERT INTO `servicer` VALUES (2,'黎明','369852','17864153060','主管','山东商业职业技术学院','/Repair/Users/img/IMG_20160825224716.jpg',0);
INSERT INTO `servicer` VALUES (68,'李明','rhh','1583655883','主管','山东商业职业技术学院','/Repair/Users/img/IMG_20160825224716.jpg',0);
INSERT INTO `servicer` VALUES (69,'孔红飞','123456','17096832911','主管','山东商业职业技术学院','/Repair/Socket/Start/img/IMG_20161014125351.jpg',0);
INSERT INTO `servicer` VALUES (70,'高旭','123456','17096832922','主管','山东商业职业技术学院','/Repair/Socket/Start/img/IMG_20161014223339.jpg',0);
INSERT INTO `servicer` VALUES (78,'韦帅','123456','17864153069','主管','山东商业职业技术学院','/Repair/Users/img/',0);
INSERT INTO `servicer` VALUES (79,'丽丽','123456','17096832944','维修员','山东商业职业技术学院','/Repair/Socket/Start/img/IMG_20161015214400.jpg',0);
INSERT INTO `servicer` VALUES (80,'孔明','123456','17096832955','维修员','山东商业职业技术学院','/Repair/Socket/Start/img/IMG_20161015230613.jpg',0);
INSERT INTO `servicer` VALUES (81,'刘秋波','123456','17864117931','维修员','山东商业职业技术学院','/Repair/Users/img/',0);
INSERT INTO `servicer` VALUES (83,'李华','123456','17096832933','维修员','山东商业职业技术学院','/Repair/Socket/Start/img/IMG_20161015232637.jpg',0);
INSERT INTO `servicer` VALUES (84,'雨雨','2fgukjhug','17865423690','维修员','山东商业职业技术学院','/Repair/Socket/Start/img/IMG_20160912230713.jpg',0);
INSERT INTO `servicer` VALUES (85,'孔文','5ffds','155225','维修员','山东商业职业技术学院','/Repair/Users/img/IMG_20160825224716.jpg',0);
/*!40000 ALTER TABLE `servicer` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table urgenyorder
#

DROP TABLE IF EXISTS `urgenyorder`;
CREATE TABLE `urgenyorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `userphone` text,
  `servename` text,
  `servephone` text,
  `position` text,
  `type` text,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COMMENT='紧急单信息';

#
# Dumping data for table urgenyorder
#

LOCK TABLES `urgenyorder` WRITE;
/*!40000 ALTER TABLE `urgenyorder` DISABLE KEYS */;
INSERT INTO `urgenyorder` VALUES (7,'李晓明','17864153067','李华','17096832933','教学楼A102','网络','2016-10-14 23:47:26');
INSERT INTO `urgenyorder` VALUES (8,'李晓明','17864153067','李华','17096832933','教学楼F103','网络','2016-08-27 23:47:30');
INSERT INTO `urgenyorder` VALUES (19,'孔佳','17864153022','孔红飞','17096832911','教学楼 ','水管','2016-09-02 10:12:05');
INSERT INTO `urgenyorder` VALUES (20,'田春乐','17864153070','丽丽','17096832944','办公楼 ','水管','2016-10-13 15:44:56');
INSERT INTO `urgenyorder` VALUES (21,'栗子','17864153069','高旭','17096832922','教学楼A ','教学楼水管','2016-09-12 22:22:52');
INSERT INTO `urgenyorder` VALUES (22,'田春乐','17864153070','丽丽','17096832944','教学楼 ','宿舍水管','2016-10-14 22:24:41');
INSERT INTO `urgenyorder` VALUES (23,'孔佳','17864153069','高旭','17096832922','办公室','玻璃','2016-10-13 09:18:26');
INSERT INTO `urgenyorder` VALUES (24,'田春乐','17864153070','丽丽','17096832944','教学楼','水管','2016-10-13 09:49:31');
INSERT INTO `urgenyorder` VALUES (25,'李晓明','17864153067','李华','17096832933','教学楼','水管','2016-09-12 09:52:30');
INSERT INTO `urgenyorder` VALUES (26,'田春乐','17864153070','丽丽','17096832944','教学楼B','厕所水管','2016-10-14 09:53:57');
INSERT INTO `urgenyorder` VALUES (27,'韦帅','17864153069','孔红飞','17096832911','教学楼B ','教室玻璃','2016-10-14 13:44:46');
INSERT INTO `urgenyorder` VALUES (28,'栗子','17864153069','李华','17096832933','教学楼A 一层','教学楼厕所','2016-11-17 19:57:08');
INSERT INTO `urgenyorder` VALUES (29,'栗子','17864153069','李华','17096832933','教学楼A 一层','教学楼厕所','2016-11-17 19:59:25');
/*!40000 ALTER TABLE `urgenyorder` ENABLE KEYS */;
UNLOCK TABLES;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
