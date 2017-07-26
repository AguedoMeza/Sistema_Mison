/*
Navicat MySQL Data Transfer

Source Server         : prueba
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : prueba

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2017-01-09 12:40:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for modulos
-- ----------------------------
DROP TABLE IF EXISTS `modulos`;
CREATE TABLE `modulos` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(255) default NULL,
  `nombre_carpeta` varchar(255) default NULL,
  `descripcion` varchar(255) default NULL,
  `fecha` varchar(255) default NULL,
  `hora` varchar(255) default NULL,
  `activo` int(11) default NULL,
  `usuario` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modulos
-- ----------------------------
INSERT INTO `modulos` VALUES ('2', 'Tipo proveedor', 'tipo_proveedor', 'proveedoressss', '2017-01-06', '01:17:59', '1', '1');
INSERT INTO `modulos` VALUES ('3', 'Usuarios', 'usuarios', 'usuarios', '2017-01-06', '01:18:16', '1', '1');
