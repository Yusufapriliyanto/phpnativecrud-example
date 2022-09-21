-- Adminer 4.8.1 MySQL 8.0.27 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `phpnativecrud`;
USE `phpnativecrud`;

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `username` varchar(512) DEFAULT NULL,
  `password` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `admin` (`username`, `password`) VALUES
('admin',	'e10adc3949ba59abbe56e057f20f883e');

DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `nama` varchar(512) DEFAULT NULL,
  `noid` int NOT NULL AUTO_INCREMENT,
  `nohp` bigint DEFAULT NULL,
  `email` varchar(2048) DEFAULT NULL,
  `alamat` varchar(8192) DEFAULT NULL,
  PRIMARY KEY (`noid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- 2022-09-02 08:33:51
