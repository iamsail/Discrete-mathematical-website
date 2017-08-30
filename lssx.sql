/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : lssx

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-08-30 13:45:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `contents` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `lastdate` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for reply
-- ----------------------------
DROP TABLE IF EXISTS `reply`;
CREATE TABLE `reply` (
  `m_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `lastdate` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `contents` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `m_id` (`m_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` int(30) DEFAULT NULL,
  `phone` smallint(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user_copy
-- ----------------------------
DROP TABLE IF EXISTS `user_copy`;
CREATE TABLE `user_copy` (
  `username` varchar(255) NOT NULL,
  `password` int(30) DEFAULT NULL,
  `phone` smallint(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user_copy_copy
-- ----------------------------
DROP TABLE IF EXISTS `user_copy_copy`;
CREATE TABLE `user_copy_copy` (
  `username` varchar(255) NOT NULL,
  `password` int(30) DEFAULT NULL,
  `phone` smallint(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for zjjs
-- ----------------------------
DROP TABLE IF EXISTS `zjjs`;
CREATE TABLE `zjjs` (
  `id` int(11) NOT NULL,
  `name` char(15) NOT NULL,
  `position` char(20) NOT NULL,
  `intr` text,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
