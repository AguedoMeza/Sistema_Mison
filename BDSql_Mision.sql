/*
Navicat MySQL Data Transfer

Source Server         : MySQL_Local
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : supsys

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-07-26 10:40:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for almacenistas
-- ----------------------------
DROP TABLE IF EXISTS `almacenistas`;
CREATE TABLE `almacenistas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `ap_paterno` text,
  `ap_materno` text,
  `id_sucursal` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  `nombre_usuario` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of almacenistas
-- ----------------------------
INSERT INTO `almacenistas` VALUES ('1', 'Jorge', 'Ibarra', 'Gonzalez', '4', '2017-06-15', '11:06:25', '1', '1', null);
INSERT INTO `almacenistas` VALUES ('2', 'Alondra', 'Lazcano', 'Mata', '3', '2017-06-14', '05:06:08', '1', '1', null);
INSERT INTO `almacenistas` VALUES ('3', 'Jorge Luis', 'Yado', 'Martinez', '2', '2017-06-14', '06:06:05', '1', '1', null);
INSERT INTO `almacenistas` VALUES ('4', '', '', '', '0', '2017-06-20', '01:06:35', '1', '1', '');
INSERT INTO `almacenistas` VALUES ('5', 'jose', 'serna ', 'meza', '3', '2017-06-20', '01:06:53', '1', '1', 'joseserna ');
INSERT INTO `almacenistas` VALUES ('6', 'jose aguedo', 'serna', 'meza', '3', '2017-06-20', '02:06:27', '1', '1', '');
INSERT INTO `almacenistas` VALUES ('7', 'jose aguedo', 'serna', 'meza', '2', '2017-06-20', '02:06:25', '1', '1', '');
INSERT INTO `almacenistas` VALUES ('8', 'jose aguedo', 'serna', 'meza', '2', '2017-06-20', '02:06:27', '1', '1', '');
INSERT INTO `almacenistas` VALUES ('9', 'jose aguedo', 'serna', 'meza', '4', '2017-06-20', '02:06:46', '1', '1', '');
INSERT INTO `almacenistas` VALUES ('10', '', 'serna', 'meza', '2', '2017-06-20', '02:06:56', '1', '1', 'jose aguedo');
INSERT INTO `almacenistas` VALUES ('11', '', 'serna', 'meza', '3', '2017-06-20', '02:06:36', '1', '1', '');
INSERT INTO `almacenistas` VALUES ('12', 'jose aguedo', 'serna', 'meza', '2', '2017-06-20', '02:06:07', '1', '1', 'jose aguedo');
INSERT INTO `almacenistas` VALUES ('13', 'jose aguedo', 'serna', 'meza', '2', '2017-06-20', '02:06:01', '1', '1', 'jose');
INSERT INTO `almacenistas` VALUES ('14', '', '', '', '0', '2017-06-20', '02:06:58', '1', '1', '');
INSERT INTO `almacenistas` VALUES ('15', 'jose aguedo', 'serna', 'meza', '2', '2017-06-20', '02:06:03', '1', '1', 'jose');
INSERT INTO `almacenistas` VALUES ('16', 'jose aguedo', 'serna', 'meza', '2', '2017-06-20', '03:06:21', '1', '1', 'A');
INSERT INTO `almacenistas` VALUES ('17', 'jose aguedo', 'serna', 'meza', '2', '2017-06-20', '03:06:45', '1', '1', 'jose');
INSERT INTO `almacenistas` VALUES ('18', 'jose aguedo', 'serna', 'meza', '2', '2017-06-20', '03:06:04', '1', '1', 'joseserna');
INSERT INTO `almacenistas` VALUES ('19', 'jose alberto', 'villarreal', 'garcia', '3', '2017-06-20', '03:06:37', '1', '1', 'josevillarreal');
INSERT INTO `almacenistas` VALUES ('20', 'jose alberto', 'serna ', 'garcia', '3', '2017-06-20', '03:06:40', '1', '1', 'joseserna ');
INSERT INTO `almacenistas` VALUES ('21', 'jose aguedo', 'villarreal', 'garcia', '2', '2017-06-20', '03:06:30', '1', '1', 'josevillarreal');
INSERT INTO `almacenistas` VALUES ('22', 'luis enrique', 'leal', 'isla', '2', '2017-06-20', '03:06:24', '1', '1', 'luisleal');
INSERT INTO `almacenistas` VALUES ('23', 'luis angel ', 'aguirre', 'treviño', '2', '2017-06-20', '03:06:38', '1', '1', 'luisaguirre');
INSERT INTO `almacenistas` VALUES ('24', 'luis angel ', 'aguirre', 'treviño', '2', '2017-06-20', '03:06:55', '1', '1', 'luisaguirre');
INSERT INTO `almacenistas` VALUES ('25', 'luis angel ', 'aguirre', 'treviño', '2', '2017-06-20', '03:06:51', '1', '1', 'luisaguirre');
INSERT INTO `almacenistas` VALUES ('26', 'luis angel ', 'aguirre', 'treviño', '2', '2017-06-20', '03:06:58', '1', '1', 'luisaguirre');
INSERT INTO `almacenistas` VALUES ('27', 'jose alberto', 'villarreal', 'isla', '2', '2017-06-20', '03:06:42', '1', '1', 'josevillarreal');
INSERT INTO `almacenistas` VALUES ('28', 'jose alberto', 'villarreal', 'garcia', '3', '2017-06-20', '03:06:28', '1', '1', 'josevillarreal');
INSERT INTO `almacenistas` VALUES ('29', 'jose alberto', 'villarreal', 'treviño', '3', '2017-06-20', '03:06:25', '1', '1', 'josevillarreal');
INSERT INTO `almacenistas` VALUES ('30', 'luis angel ', 'serna ', 'isla', '3', '2017-06-20', '04:06:00', '1', '1', 'luisserna ');
INSERT INTO `almacenistas` VALUES ('31', 'luis angel ', 'aguirre', 'treviño', '2', '2017-06-20', '04:06:02', '1', '1', null);

-- ----------------------------
-- Table structure for compradores
-- ----------------------------
DROP TABLE IF EXISTS `compradores`;
CREATE TABLE `compradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `ap_paterno` text,
  `ap_materno` text,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of compradores
-- ----------------------------
INSERT INTO `compradores` VALUES ('1', 'Alondra', 'Lazcano', 'Mata', '2017-06-14', '06:06:47', '1', '1');

-- ----------------------------
-- Table structure for departamentos
-- ----------------------------
DROP TABLE IF EXISTS `departamentos`;
CREATE TABLE `departamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave_depto` text,
  `departamento` text,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of departamentos
-- ----------------------------
INSERT INTO `departamentos` VALUES ('1', '2', 'Ab. Com. Exentos (21)', '0000-00-00', '00:00:00', '1', '1');
INSERT INTO `departamentos` VALUES ('2', '3', 'Ab. No Com. Gravados (23)', '2017-06-06', '12:02:19', '1', '1');
INSERT INTO `departamentos` VALUES ('3', '4', 'Ferreteria (33)', '2017-06-12', '11:04:46', '1', '1');
INSERT INTO `departamentos` VALUES ('4', '5', 'Libros y Revistas (54)', '2017-06-12', '11:05:13', '1', '1');
INSERT INTO `departamentos` VALUES ('5', '6', 'ZX-Panaderia Gravada (6)', '2017-06-12', '11:24:57', '1', '1');
INSERT INTO `departamentos` VALUES ('6', '7', 'Jugeteria (34)', '2017-06-12', '11:37:06', '1', '1');

-- ----------------------------
-- Table structure for descuentos
-- ----------------------------
DROP TABLE IF EXISTS `descuentos`;
CREATE TABLE `descuentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descuentos` text,
  `detalle` text,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of descuentos
-- ----------------------------
INSERT INTO `descuentos` VALUES ('1', 'Descuento por no devoluciÃ³n', 'Descuento por no devoluciÃ³n.', '2017-05-30', '12:39:36', '1', '1');
INSERT INTO `descuentos` VALUES ('2', 'Descuento por pronto Pago', 'Descuento por pronto Pago', '2017-05-29', '02:19:21', '1', '1');
INSERT INTO `descuentos` VALUES ('3', 'Descuento en LÃ­nea', 'Descuento en LÃ­nea', '2017-05-29', '02:19:47', '1', '1');
INSERT INTO `descuentos` VALUES ('4', 'Descuento ', 'Descuento', '2017-06-12', '11:06:36', '1', '1');

-- ----------------------------
-- Table structure for detalle_descuento
-- ----------------------------
DROP TABLE IF EXISTS `detalle_descuento`;
CREATE TABLE `detalle_descuento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_descuento` int(11) DEFAULT NULL,
  `descuento` text,
  `detalle` text,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of detalle_descuento
-- ----------------------------
INSERT INTO `detalle_descuento` VALUES ('1', '2', '2', '23%', '165222', '2017-06-06', '13:06:32', '1', '1');
INSERT INTO `detalle_descuento` VALUES ('2', '1', '2', '45%', '12ssd', '2017-06-06', '13:06:26', '1', '1');
INSERT INTO `detalle_descuento` VALUES ('3', '10', '2', '5%', 'LÃCTEOS', '2017-06-12', '10:06:36', '1', '1');
INSERT INTO `detalle_descuento` VALUES ('4', '11', '4', '4%, 6%', '12345', '2017-06-12', '11:06:03', '1', '1');

-- ----------------------------
-- Table structure for detalle_perfil
-- ----------------------------
DROP TABLE IF EXISTS `detalle_perfil`;
CREATE TABLE `detalle_perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_perfil` int(11) NOT NULL,
  `id_modulo` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `activo` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of detalle_perfil
-- ----------------------------
INSERT INTO `detalle_perfil` VALUES ('1', '1', '1', '2016-12-31', '00:00:12', '1', '1');
INSERT INTO `detalle_perfil` VALUES ('3', '1', '3', '2016-12-31', '00:00:10', '1', '1');
INSERT INTO `detalle_perfil` VALUES ('4', '1', '4', '2016-12-31', '00:00:09', '1', '1');
INSERT INTO `detalle_perfil` VALUES ('5', '1', '5', '2016-12-31', '00:00:11', '1', '1');
INSERT INTO `detalle_perfil` VALUES ('6', '2', '5', '2016-12-31', '00:00:08', '1', '1');
INSERT INTO `detalle_perfil` VALUES ('7', '1', '6', '2016-12-31', '00:00:18', '1', '1');
INSERT INTO `detalle_perfil` VALUES ('8', '2', '6', '2016-12-31', '00:00:15', '1', '1');
INSERT INTO `detalle_perfil` VALUES ('9', '1', '8', '2017-01-10', '12:20:08', '1', '1');
INSERT INTO `detalle_perfil` VALUES ('10', '1', '7', '2017-01-11', '19:01:22', '1', '1');
INSERT INTO `detalle_perfil` VALUES ('11', '1', '9', '2017-01-11', '19:01:11', '1', '1');
INSERT INTO `detalle_perfil` VALUES ('12', '1', '10', '2017-01-17', '09:01:19', '1', '1');
INSERT INTO `detalle_perfil` VALUES ('13', '3', '10', '2017-01-17', '09:01:37', '1', '1');
INSERT INTO `detalle_perfil` VALUES ('14', '3', '6', '2017-01-17', '09:01:10', '1', '1');
INSERT INTO `detalle_perfil` VALUES ('15', '1', '11', '2017-05-12', '10:05:30', '1', '1');
INSERT INTO `detalle_perfil` VALUES ('16', '1', '12', '2017-05-17', '12:05:06', '1', '1');
INSERT INTO `detalle_perfil` VALUES ('17', '1', '13', '2017-05-29', '13:05:28', '1', '1');
INSERT INTO `detalle_perfil` VALUES ('18', '1', '14', '2017-06-14', '12:06:58', '1', '1');
INSERT INTO `detalle_perfil` VALUES ('19', '1', '15', '2017-06-14', '18:06:54', '1', '1');
INSERT INTO `detalle_perfil` VALUES ('20', '1', '16', '2017-06-15', '12:06:36', '1', '1');

-- ----------------------------
-- Table structure for familia
-- ----------------------------
DROP TABLE IF EXISTS `familia`;
CREATE TABLE `familia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave_familia` text,
  `familia` text,
  `id_departamento` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of familia
-- ----------------------------
INSERT INTO `familia` VALUES ('1', '200', 'Embutidos', '2', '2017-05-12', '11:16:43', '1', '1');
INSERT INTO `familia` VALUES ('2', '200', 'Embutidos', '2', '2017-05-12', '11:45:05', '1', '1');
INSERT INTO `familia` VALUES ('3', '257', 'Pap. Hig. Faci.', '4', '2017-05-12', '11:47:58', '1', '1');

-- ----------------------------
-- Table structure for modulos
-- ----------------------------
DROP TABLE IF EXISTS `modulos`;
CREATE TABLE `modulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `nombre_carpeta` text NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `activo` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modulos
-- ----------------------------
INSERT INTO `modulos` VALUES ('1', 'Usuarios', 'usuarios', 'Mï¿½dulo que permite la gestiï¿½n de usuarios', '2017-05-29', '02:05:43', '1', '1');
INSERT INTO `modulos` VALUES ('2', 'Departamentos', 'departamentos', 'Mï¿½dulo que permite la administraciï¿½n de los diferentes departamentos', '2017-05-11', '01:05:08', '1', '1');
INSERT INTO `modulos` VALUES ('3', 'Proveedores', 'proveedores', 'Módulo que permite administrar los diferentes proveedores de la empresa', '2016-12-31', '00:00:34', '1', '1');
INSERT INTO `modulos` VALUES ('4', 'Sucursales', 'sucursales', 'Módulo que permite administrar las sucursales de la empresa', '2016-12-31', '00:00:13', '1', '1');
INSERT INTO `modulos` VALUES ('5', 'Orden de Compra', 'orden_compra', 'Módulo que permite al comprador generar la orden de compra de producto a recibir', '2016-12-31', '00:00:24', '1', '1');
INSERT INTO `modulos` VALUES ('6', 'Inicio', 'inicio', 'Página principal del sistema', '2016-12-31', '00:00:16', '1', '1');
INSERT INTO `modulos` VALUES ('7', 'Módulos', 'modulos', 'Módulo que permite la administración de los diferentes módulos que intervienen en el sistema', '2017-01-09', '04:13:41', '1', '0');
INSERT INTO `modulos` VALUES ('8', 'Perfil', 'perfil', 'Módulo que administra los diferentes perfiles que interactúan con el sistema', '2017-01-10', '12:19:21', '1', '1');
INSERT INTO `modulos` VALUES ('9', 'Detalle de perfil', 'detalle_perfil', 'Detalle de perfil', '2017-01-11', '07:13:52', '1', '1');
INSERT INTO `modulos` VALUES ('10', 'Liberar Orden', 'liberar_orden', 'Mï¿½dulo que permite liberar las ï¿½rdenes de compra cuando el producto es recibido por el almacenista', '2017-05-17', '12:05:50', '1', '1');
INSERT INTO `modulos` VALUES ('11', 'Familia', 'familia', 'MÃ³dulo que permite administrar las diferentes familias dependiendo su departamento', '2017-05-12', '10:27:52', '1', '1');
INSERT INTO `modulos` VALUES ('12', 'Detalle Descuentos', 'detalle_descuentos', 'MÃ³dulo que permite seleccionar el tipo de descuento y especificar cuanto es el descuento', '2017-05-29', '02:05:59', '1', '1');
INSERT INTO `modulos` VALUES ('13', 'Descuentos', 'descuentos', 'alta descuentos', '2017-05-29', '02:05:16', '1', '1');
INSERT INTO `modulos` VALUES ('14', 'Almacenistas', 'almacenistas', 'MÃ³dulo para dar de alta los almacenistas', '2017-06-14', '12:12:24', '1', '1');
INSERT INTO `modulos` VALUES ('15', 'Compradores', 'compradores', 'MÃ³dulo que permite la administraciÃ³n de los compradores', '2017-06-14', '06:20:40', '1', '1');
INSERT INTO `modulos` VALUES ('16', 'Cambiar ContraseÃ±a', 'cambiar_password', 'MÃ³dulo que permite a los usuarios cambiar contraseÃ±a', '2017-06-15', '12:07:27', '1', '1');

-- ----------------------------
-- Table structure for orden_compra
-- ----------------------------
DROP TABLE IF EXISTS `orden_compra`;
CREATE TABLE `orden_compra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_sucursal` int(11) DEFAULT NULL,
  `cantidad` text,
  `fecha_llegada` date DEFAULT NULL,
  `recibido` int(11) NOT NULL,
  `completo` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `activo` int(1) DEFAULT NULL,
  `usuario` int(255) DEFAULT NULL,
  `prueba` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=178 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orden_compra
-- ----------------------------

-- ----------------------------
-- Table structure for perfil
-- ----------------------------
DROP TABLE IF EXISTS `perfil`;
CREATE TABLE `perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `activo` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of perfil
-- ----------------------------
INSERT INTO `perfil` VALUES ('1', 'Administrador', 'Tipo de usuario que tiene acceso completo al sistema SupSys', '2016-12-31', '00:00:12', '1', '1');
INSERT INTO `perfil` VALUES ('2', 'Comprador', 'Tipo de usuario que solo puede realizar órdenes de compra', '2016-12-31', '00:00:12', '1', '1');
INSERT INTO `perfil` VALUES ('3', 'Almacenista', 'Tipo de usuario que solo puede liberar las órdenes de compra', '2016-12-31', '00:00:12', '1', '1');
INSERT INTO `perfil` VALUES ('4', 'Capturista', 'Perfil de captura de dato', '2017-01-09', '04:35:38', '1', '0');

-- ----------------------------
-- Table structure for proveedores
-- ----------------------------
DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_proveedor` int(11) DEFAULT NULL,
  `proveedor` text,
  `nombre_vendedor` text,
  `nombre_supervisor` text,
  `tel_empresa` text,
  `cel_vendedor` text,
  `cel_supervisor` text,
  `correo_vendedor` text,
  `correo_supervisor` text,
  `plazo_pago` text,
  `cambios` text,
  `promociones` text,
  `promotoria` text,
  `periodo_visita` text,
  `flete` text,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proveedores
-- ----------------------------
INSERT INTO `proveedores` VALUES ('1', '101256', 'Nestle', 'Pedro Rocha Flores', 'JosÃ© Otero Hernandez', '8351003526', '8325002023', '8396200023', 'pedro@gmail.com', 'J.otero@outlook.com', '10', '1', 'se negocÃ­a', 'si', '14', 'si', '2017-06-14', '12:06:34', '1', '1');
INSERT INTO `proveedores` VALUES ('2', '0', 'Q', 'Q', 'Q', 'Q', 'Q', 'Q', 'ej@example.com', 'ej2@gmail.com', '3', '1', 'no', 'si', '23', 'si', '2017-06-22', '02:52:35', '0', '0');

-- ----------------------------
-- Table structure for proveedor_comprador
-- ----------------------------
DROP TABLE IF EXISTS `proveedor_comprador`;
CREATE TABLE `proveedor_comprador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proveedor` int(11) DEFAULT NULL,
  `id_comprador` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proveedor_comprador
-- ----------------------------
INSERT INTO `proveedor_comprador` VALUES ('1', '1', '2', '2017-06-14', '12:06:34', '1', '1');
INSERT INTO `proveedor_comprador` VALUES ('2', '1', '5', '2017-06-14', '12:06:34', '1', '1');
INSERT INTO `proveedor_comprador` VALUES ('3', '2', '2', '2017-06-16', '10:06:38', '1', '1');

-- ----------------------------
-- Table structure for proveedor_departamento
-- ----------------------------
DROP TABLE IF EXISTS `proveedor_departamento`;
CREATE TABLE `proveedor_departamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proveedor` int(11) DEFAULT NULL,
  `id_departamento` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of proveedor_departamento
-- ----------------------------
INSERT INTO `proveedor_departamento` VALUES ('1', '1', '1', '2017-06-14', '12:06:34', '1', '1');
INSERT INTO `proveedor_departamento` VALUES ('2', '1', '4', '2017-06-14', '12:06:34', '1', '1');

-- ----------------------------
-- Table structure for sucursales
-- ----------------------------
DROP TABLE IF EXISTS `sucursales`;
CREATE TABLE `sucursales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `direccion` text,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucursales
-- ----------------------------
INSERT INTO `sucursales` VALUES ('1', 'Arboledas', 'Arboledas del Valle', '2017-06-12', '11:06:45', '1', '1');
INSERT INTO `sucursales` VALUES ('2', 'Diaz Ordaz', 'Av. Diaz Ordï¿½z Esq. con Pablo Salce, Linares, NL. Mex.', '2017-06-12', '11:06:50', '1', '1');
INSERT INTO `sucursales` VALUES ('3', 'Villegas', 'Col. VIllegas', '2017-01-17', '12:20:53', '1', '1');
INSERT INTO `sucursales` VALUES ('4', 'Allende', 'Col. Centro', '2017-01-17', '12:01:49', '1', '1');

-- ----------------------------
-- Table structure for tipo_proveedor
-- ----------------------------
DROP TABLE IF EXISTS `tipo_proveedor`;
CREATE TABLE `tipo_proveedor` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `activo` int(2) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tipo_proveedor
-- ----------------------------
INSERT INTO `tipo_proveedor` VALUES ('1', 'Zapatería', 'Zapatería', 'Proveedor de zapatos', '2017-05-11', '09:06:32', '0', '1');
INSERT INTO `tipo_proveedor` VALUES ('2', 'Frutas y Verduras', 'Perecederos', 'Proveedor de Platanos', '2017-05-11', '12:37:25', '0', '1');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` text NOT NULL,
  `nombre_completo` text NOT NULL,
  `pass` text NOT NULL,
  `perfil` text NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `activo` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'jvillarreal', 'Josue Villarreal Alvarado', '25f9e794323b453885f5181f1b624d0b', '1', '2016-12-06', '12:15:30', '1', '1');
INSERT INTO `usuarios` VALUES ('2', 'ivillarreal', 'Itonio Alvarado', '9634ff84d46e34d435aded7a7dee470a', '2', '2016-12-31', '09:05:03', '1', '1');
INSERT INTO `usuarios` VALUES ('3', 'usuario', 'nombre usuario', '25f9e794323b453885f5181f1b624d0b', '3', '2017-01-16', '01:29:57', '1', '1');
INSERT INTO `usuarios` VALUES ('4', 'villarreal', 'VIllarreal Alvarado', 'c4f0f080c3f5992b3a4c03d04ace51a2', '1', '2017-01-17', '09:41:13', '1', '1');
INSERT INTO `usuarios` VALUES ('5', 'Alondra', 'Alondra Lazcano Mata', '827ccb0eea8a706c4c34a16891f84e7b', '2', '2017-05-23', '11:27:19', '1', '1');
INSERT INTO `usuarios` VALUES ('6', 'joseserna ', 'serna ', '', '', '0000-00-00', '00:00:00', '0', '0');
INSERT INTO `usuarios` VALUES ('7', 'josevillarreal', 'jose aguedovillarrealgarcia', '', '', '0000-00-00', '00:00:00', '0', '0');
INSERT INTO `usuarios` VALUES ('8', 'luisleal', 'luis enrique leal isla', '', '', '0000-00-00', '00:00:00', '0', '0');
INSERT INTO `usuarios` VALUES ('9', 'luisaguirre', 'luis angel  aguirre treviño', '12345', '', '0000-00-00', '00:00:00', '0', '0');
INSERT INTO `usuarios` VALUES ('10', 'josevillarreal', 'jose alberto villarreal isla', '12345', '', '2017-06-20', '03:06:42', '0', '0');
INSERT INTO `usuarios` VALUES ('11', 'josevillarreal', 'jose alberto villarreal garcia', '12345', '', '2017-06-20', '03:06:28', '1', '0');
INSERT INTO `usuarios` VALUES ('12', 'josevillarreal', 'jose alberto villarreal treviño', '12345', '', '2017-06-20', '03:06:25', '1', '1');
INSERT INTO `usuarios` VALUES ('13', 'luisserna ', 'luis angel  serna  isla', '12345', '1', '2017-06-20', '04:06:00', '1', '1');
INSERT INTO `usuarios` VALUES ('14', 'luisaguirre', 'luis angel  aguirre treviño', '12345', '1', '2017-06-20', '04:06:02', '1', '1');
