/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50710
Source Host           : 127.0.0.1:3306
Source Database       : pokemon

Target Server Type    : MYSQL
Target Server Version : 50710
File Encoding         : 65001

Date: 2024-10-15 18:02:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for loadout
-- ----------------------------
DROP TABLE IF EXISTS `loadout`;
CREATE TABLE `loadout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `name` varchar(24) NOT NULL,
  `pos` int(11) DEFAULT NULL,
  `pet1` int(11) DEFAULT NULL,
  `pet2` int(11) DEFAULT NULL,
  `pet3` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
