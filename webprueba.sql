-- Adminer 4.2.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `webprueba`;
CREATE DATABASE `webprueba` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `webprueba`;

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `apellidos` varchar(100) CHARACTER SET utf8 NOT NULL,
  `correo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `cp` int(5) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nick` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `correo`, `cp`, `pass`, `nick`) VALUES
(16,	'FERNANDO',	'\r\n			GARCíA CREMADES',	'UNYAEMA@GMAIL.COM',	30564,	'ccbd8b806f6b1217bb8b1bbd580752d4abe9d119',	'YGGIB'),
(17,	'LIONEL ANDRES',	'\r\n			MESSI',	'MESSI@FCBARCELONA.CAT',	28080,	'26cc549f2e05dfc04f478405bd9ed30368508796',	'D10S');

-- 2015-11-09 11:55:47