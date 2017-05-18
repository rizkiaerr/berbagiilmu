/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : dbphp7

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-04-20 06:25:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for modal
-- ----------------------------
DROP TABLE IF EXISTS `modal`;
CREATE TABLE `modal` (
  `modal_id` int(11) NOT NULL AUTO_INCREMENT,
  `modal_name` varchar(255) DEFAULT NULL,
  `description` text,
  `date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`modal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of modal
-- ----------------------------
INSERT INTO `modal` VALUES ('10', 'Aguzrybudy', 'Web Developer in Alterxalter.com, and owner blog aguzrybudy.blogspot.co.id ', '2016-04-19 21:22:06');
INSERT INTO `modal` VALUES ('11', 'Ilmu yang tidak diamalkan', 'Ilmu yang tidak diamalkan bagai pohon yang tak berbuah', '2016-04-19 21:26:23');
INSERT INTO `modal` VALUES ('12', 'Berterima kasih pada allah', 'Berterima kasih pada allah yang telah memberikan ilmu pengetahuan kepada kita', '2016-04-19 21:41:22');
