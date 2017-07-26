/*
Navicat MySQL Data Transfer

Source Server         : MySQL_Local
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : mision

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2017-01-09 18:55:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `perfil`
-- ----------------------------
DROP TABLE IF EXISTS `perfil`;
CREATE TABLE `perfil` (
  `id` int(4) NOT NULL auto_increment,
  `nombre` text,
  `descripcion` text,
  `fecha` date default NULL,
  `hora` datetime default NULL,
  `activo` int(1) default NULL,
  `usuario` int(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of perfil
-- ----------------------------
INSERT INTO `perfil` VALUES ('1', 'admin2', 'root2', '2017-01-09', '0000-00-00 00:00:00', '1', '1');
