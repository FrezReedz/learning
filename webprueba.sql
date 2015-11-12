-- Adminer 4.2.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `webprueba`;
CREATE DATABASE `webprueba` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `webprueba`;

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `cp` int(5) NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `nick` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `correo`, `cp`, `pass`, `nick`) VALUES
(16,	'FERNANDO',	'\r\n			GARCíA CREMADES',	'UNYAEMA@GMAIL.COM',	30564,	'ccbd8b806f6b1217bb8b1bbd580752d4abe9d119',	'YGGIB'),
(17,	'LIONEL ANDRES',	'\r\n			MESSI',	'MESSI@FCBARCELONA.CAT',	28080,	'26cc549f2e05dfc04f478405bd9ed30368508796',	'D10S'),
(18,	'MONICA',	'\r\n			BELUCCI',	'MONI@GMAIL.COM',	11112,	'2c9866370fb9085d5b8f64c21be09ac2aac676f4',	'BELUCCI69'),
(19,	'AUSTIN',	'\r\n			POWERS',	'MOJO@YAHOO.COM',	5234,	'efe6772ca21068305d4f122b4ffd442bc9ef5a9e',	'POWAH'),
(20,	'ISAAC',	'\r\n			NEWTON',	'ERISAAC@HOTMAIL.COM',	1324,	'd5d00ddc77180095dc24130859e666c99fa91460',	'NEWTON-APPLE'),
(21,	'ALBERT',	'\r\n			EINSTEIN',	'ALBERTITO@YAHOO.ES',	22222,	'44c46013e5b18d7f374c5f53fa3ed86e3d12ffc0',	'MC2'),
(22,	'NIKOLA',	'\r\n			TESLA',	'RAYITO@GMAIL.COM',	11211,	'f72cbf16c6e15e1eda9207cdc451ff933ef816bd',	'SHOOK');

-- 2015-11-12 01:00:26
