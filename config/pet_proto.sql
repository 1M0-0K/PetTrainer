/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50710
Source Host           : 127.0.0.1:3306
Source Database       : pokemon

Target Server Type    : MYSQL
Target Server Version : 50710
File Encoding         : 65001

Date: 2024-10-15 18:02:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for pet_proto
-- ----------------------------
DROP TABLE IF EXISTS `pet_proto`;
CREATE TABLE `pet_proto` (
  `vnum` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `hp` int(11) NOT NULL,
  `str` int(11) NOT NULL,
  `dex` int(11) NOT NULL,
  `magic` int(11) NOT NULL,
  `magic_prot` int(11) NOT NULL,
  `speed` int(11) NOT NULL,
  `types` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`vnum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pet_proto
-- ----------------------------
INSERT INTO `pet_proto` VALUES ('1', 'bulbasaur', '45', '49', '49', '65', '65', '45', 'grass,poison');
INSERT INTO `pet_proto` VALUES ('4', 'charmander', '39', '52', '43', '60', '50', '65', 'fire');
INSERT INTO `pet_proto` VALUES ('7', 'squirtle', '44', '48', '65', '50', '64', '43', 'water');
INSERT INTO `pet_proto` VALUES ('10', 'caterpie', '45', '30', '35', '20', '20', '45', 'bug');
INSERT INTO `pet_proto` VALUES ('13', 'weedle', '40', '35', '30', '20', '20', '50', 'bug,poison');
INSERT INTO `pet_proto` VALUES ('16', 'pidgey', '40', '45', '40', '35', '35', '56', 'normal,flying');
INSERT INTO `pet_proto` VALUES ('19', 'rattata', '30', '56', '35', '25', '35', '72', 'normal');
INSERT INTO `pet_proto` VALUES ('21', 'spearow', '40', '60', '30', '31', '31', '70', 'normal,flying');
INSERT INTO `pet_proto` VALUES ('23', 'ekans', '35', '60', '44', '40', '54', '55', 'poison');
INSERT INTO `pet_proto` VALUES ('25', 'pikachu', '35', '55', '40', '50', '50', '90', 'electric');
INSERT INTO `pet_proto` VALUES ('27', 'sandshrew', '50', '75', '85', '20', '30', '40', 'ground');
INSERT INTO `pet_proto` VALUES ('29', 'nidoran-f', '55', '47', '52', '40', '40', '41', 'poison');
INSERT INTO `pet_proto` VALUES ('32', 'nidoran-m', '46', '57', '40', '40', '40', '50', 'poison');
INSERT INTO `pet_proto` VALUES ('35', 'clefairy', '70', '45', '48', '60', '65', '35', 'fairy');
INSERT INTO `pet_proto` VALUES ('37', 'vulpix', '38', '41', '40', '50', '65', '65', 'fire');
INSERT INTO `pet_proto` VALUES ('39', 'jigglypuff', '115', '45', '20', '45', '25', '20', 'normal,fairy');
INSERT INTO `pet_proto` VALUES ('41', 'zubat', '40', '45', '35', '30', '40', '55', 'poison,flying');
INSERT INTO `pet_proto` VALUES ('43', 'oddish', '45', '50', '55', '75', '65', '30', 'grass,poison');
INSERT INTO `pet_proto` VALUES ('46', 'paras', '35', '70', '55', '45', '55', '25', 'bug,grass');
INSERT INTO `pet_proto` VALUES ('48', 'venonat', '60', '55', '50', '40', '55', '45', 'bug,poison');
INSERT INTO `pet_proto` VALUES ('50', 'diglett', '10', '55', '25', '35', '45', '95', 'ground');
INSERT INTO `pet_proto` VALUES ('52', 'meowth', '40', '45', '35', '40', '40', '90', 'normal');
INSERT INTO `pet_proto` VALUES ('54', 'psyduck', '50', '52', '48', '65', '50', '55', 'water');
INSERT INTO `pet_proto` VALUES ('56', 'mankey', '40', '80', '35', '35', '45', '70', 'fighting');
INSERT INTO `pet_proto` VALUES ('58', 'growlithe', '55', '70', '45', '70', '50', '60', 'fire');
INSERT INTO `pet_proto` VALUES ('60', 'poliwag', '40', '50', '40', '40', '40', '90', 'water');
INSERT INTO `pet_proto` VALUES ('63', 'abra', '25', '20', '15', '105', '55', '90', 'psychic');
INSERT INTO `pet_proto` VALUES ('66', 'machop', '70', '80', '50', '35', '35', '35', 'fighting');
INSERT INTO `pet_proto` VALUES ('69', 'bellsprout', '50', '75', '35', '70', '30', '40', 'grass,poison');
INSERT INTO `pet_proto` VALUES ('72', 'tentacool', '40', '40', '35', '50', '100', '70', 'water,poison');
INSERT INTO `pet_proto` VALUES ('74', 'geodude', '40', '80', '100', '30', '30', '20', 'rock,ground');
INSERT INTO `pet_proto` VALUES ('77', 'ponyta', '50', '85', '55', '65', '65', '90', 'fire');
INSERT INTO `pet_proto` VALUES ('79', 'slowpoke', '90', '65', '65', '40', '40', '15', 'water,psychic');
INSERT INTO `pet_proto` VALUES ('81', 'magnemite', '25', '35', '70', '95', '55', '45', 'electric,steel');
INSERT INTO `pet_proto` VALUES ('84', 'doduo', '35', '85', '45', '35', '35', '75', 'normal,flying');
INSERT INTO `pet_proto` VALUES ('86', 'seel', '65', '45', '55', '45', '70', '45', 'water');
INSERT INTO `pet_proto` VALUES ('88', 'grimer', '80', '80', '50', '40', '50', '25', 'poison');
INSERT INTO `pet_proto` VALUES ('90', 'shellder', '30', '65', '100', '45', '25', '40', 'water');
INSERT INTO `pet_proto` VALUES ('92', 'gastly', '30', '35', '30', '100', '35', '80', 'ghost,poison');
INSERT INTO `pet_proto` VALUES ('95', 'onix', '35', '45', '160', '30', '45', '70', 'rock,ground');
INSERT INTO `pet_proto` VALUES ('96', 'drowzee', '60', '48', '45', '43', '90', '42', 'psychic');
INSERT INTO `pet_proto` VALUES ('98', 'krabby', '30', '105', '90', '25', '25', '50', 'water');
INSERT INTO `pet_proto` VALUES ('100', 'voltorb', '40', '30', '50', '55', '55', '100', 'electric');
INSERT INTO `pet_proto` VALUES ('102', 'exeggcute', '60', '40', '80', '60', '45', '40', 'grass,psychic');
INSERT INTO `pet_proto` VALUES ('104', 'cubone', '50', '50', '95', '40', '50', '35', 'ground');
INSERT INTO `pet_proto` VALUES ('106', 'hitmonlee', '50', '120', '53', '35', '110', '87', 'fighting');
INSERT INTO `pet_proto` VALUES ('108', 'lickitung', '90', '55', '75', '60', '75', '30', 'normal');
INSERT INTO `pet_proto` VALUES ('109', 'koffing', '40', '65', '95', '60', '45', '35', 'poison');
INSERT INTO `pet_proto` VALUES ('111', 'rhyhorn', '80', '85', '95', '30', '30', '25', 'ground,rock');
INSERT INTO `pet_proto` VALUES ('113', 'chansey', '250', '5', '5', '35', '105', '50', 'normal');
INSERT INTO `pet_proto` VALUES ('114', 'tangela', '65', '55', '115', '100', '40', '60', 'grass');
INSERT INTO `pet_proto` VALUES ('116', 'horsea', '30', '40', '70', '70', '25', '60', 'water');
INSERT INTO `pet_proto` VALUES ('118', 'goldeen', '45', '67', '60', '35', '50', '63', 'water');
INSERT INTO `pet_proto` VALUES ('120', 'staryu', '30', '45', '55', '70', '55', '85', 'water');
INSERT INTO `pet_proto` VALUES ('122', 'mr-mime', '40', '45', '65', '100', '120', '90', 'psychic,fairy');
INSERT INTO `pet_proto` VALUES ('123', 'scyther', '70', '110', '80', '55', '80', '105', 'bug,flying');
INSERT INTO `pet_proto` VALUES ('124', 'jynx', '65', '50', '35', '115', '95', '95', 'ice,psychic');
INSERT INTO `pet_proto` VALUES ('125', 'electabuzz', '65', '83', '57', '95', '85', '105', 'electric');
INSERT INTO `pet_proto` VALUES ('126', 'magmar', '65', '95', '57', '100', '85', '93', 'fire');
INSERT INTO `pet_proto` VALUES ('129', 'magikarp', '20', '10', '55', '15', '20', '80', 'water');
INSERT INTO `pet_proto` VALUES ('133', 'eevee', '55', '55', '50', '45', '65', '55', 'normal');
INSERT INTO `pet_proto` VALUES ('137', 'porygon', '65', '60', '70', '85', '75', '40', 'normal');
INSERT INTO `pet_proto` VALUES ('138', 'omanyte', '35', '40', '100', '90', '55', '35', 'rock,water');
INSERT INTO `pet_proto` VALUES ('140', 'kabuto', '30', '80', '90', '55', '45', '55', 'rock,water');
INSERT INTO `pet_proto` VALUES ('143', 'snorlax', '160', '110', '65', '65', '110', '30', 'normal');
INSERT INTO `pet_proto` VALUES ('147', 'dratini', '41', '64', '45', '50', '50', '50', 'dragon');
