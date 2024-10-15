/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50710
Source Host           : 127.0.0.1:3306
Source Database       : pokemon

Target Server Type    : MYSQL
Target Server Version : 50710
File Encoding         : 65001

Date: 2024-10-15 18:02:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for pet
-- ----------------------------
DROP TABLE IF EXISTS `pet`;
CREATE TABLE `pet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `vnum` int(11) NOT NULL,
  `nickname` varchar(24) NOT NULL,
  `exp` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1010 DEFAULT CHARSET=utf8;
