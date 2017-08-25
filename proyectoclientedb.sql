/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : proyectoclientedb

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-08-25 09:48:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cliente
-- ----------------------------
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `nit` int(55) NOT NULL,
  `nombre` varchar(77) CHARACTER SET utf8 NOT NULL,
  `apellido` varchar(77) CHARACTER SET utf8 NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `ocupacion` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cliente
-- ----------------------------

-- ----------------------------
-- Procedure structure for sp_insertarPC_Cliente
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_insertarPC_Cliente`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertarPC_Cliente`(IN pIDCLIENTE INT,IN pNIT NVARCHAR(55),IN pNOMBRE NVARCHAR(77),IN pAPELLIDO NVARCHAR(77),IN pTELEFONO INT)
BEGIN
	INSERT INTO CLIENTE VALUES(pIDCLIENTE,pNIT,pNOMBRE,pAPELLIDO,pTELEFONO);
END
;;
DELIMITER ;
