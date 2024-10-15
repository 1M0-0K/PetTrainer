/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50710
Source Host           : 127.0.0.1:3306
Source Database       : pokemon

Target Server Type    : MYSQL
Target Server Version : 50710
File Encoding         : 65001

Date: 2024-10-15 18:02:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(24) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nickname` varchar(24) NOT NULL,
  `email` varchar(64) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `first_login` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
