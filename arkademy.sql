/*
Navicat MySQL Data Transfer

Source Server         : 11
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : arkademy

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-05-25 17:58:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for programmer
-- ----------------------------
DROP TABLE IF EXISTS `programmer`;
CREATE TABLE `programmer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `skill` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of programmer
-- ----------------------------
INSERT INTO `programmer` VALUES ('1', 'Rafly Lesmana Putra', 'c++,jquery,phyton,django,rails,R');

-- ----------------------------
-- Table structure for skill
-- ----------------------------
DROP TABLE IF EXISTS `skill`;
CREATE TABLE `skill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of skill
-- ----------------------------
INSERT INTO `skill` VALUES ('4', 'aaa', '1');

-- ----------------------------
-- View structure for viewskill
-- ----------------------------
DROP VIEW IF EXISTS `viewskill`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost`  VIEW `viewskill` AS SELECT
skill.user_id,
programmer.nama,
skill.`name`
FROM
programmer
INNER JOIN skill ON skill.user_id = programmer.id ;
