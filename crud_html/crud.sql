/*
Navicat MySQL Data Transfer

Source Server         : deep
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : crud

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-12-16 15:40:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `class_id`
-- ----------------------------
DROP TABLE IF EXISTS `class_id`;
CREATE TABLE `class_id` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of class_id
-- ----------------------------
INSERT INTO `class_id` VALUES ('1', 'B.COM');
INSERT INTO `class_id` VALUES ('2', 'F.A');
INSERT INTO `class_id` VALUES ('3', 'B.A');
INSERT INTO `class_id` VALUES ('4', 'MATRIC');
INSERT INTO `class_id` VALUES ('5', 'MASTER');
INSERT INTO `class_id` VALUES ('6', 'middel');

-- ----------------------------
-- Table structure for `data`
-- ----------------------------
DROP TABLE IF EXISTS `data`;
CREATE TABLE `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `adsress` varchar(255) NOT NULL,
  `class_id` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of data
-- ----------------------------
INSERT INTO `data` VALUES ('1', 'Areeb Shaikh', '#302 Flat No 9 Karachi', '3', '2147483647');
INSERT INTO `data` VALUES ('2', 'Ahmed Alvi', '#409 Flat No 2 Karachi', '1', '2147483647');
INSERT INTO `data` VALUES ('3', 'Kamran ', '#502 Flat No 3 Karachi', '2', '2147483647');
INSERT INTO `data` VALUES ('4', 'Anwar ', '#109 Flat No 5 Lahore', '5', '2147483647');
INSERT INTO `data` VALUES ('5', 'Bilal', '#602 Flat No 6 Pindi', '4', '2147483647');
INSERT INTO `data` VALUES ('6', 'Imran ', '#302 flat no 9 karachi', '3', '6567575');
INSERT INTO `data` VALUES ('7', '', '', '', '');
INSERT INTO `data` VALUES ('8', 'Imran ', '#302 flat no 9 karachi', '5', '03112933137');
