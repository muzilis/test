/*
 Navicat MySQL Data Transfer

 Source Server         : lx
 Source Server Type    : MySQL
 Source Server Version : 50621
 Source Host           : localhost
 Source Database       : lx

 Target Server Type    : MySQL
 Target Server Version : 50621
 File Encoding         : utf-8

 Date: 03/26/2016 13:50:35 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `t_shoucang`
-- ----------------------------
DROP TABLE IF EXISTS `t_shoucang`;
CREATE TABLE `t_shoucang` (
  `shoucang_id` int(255) NOT NULL AUTO_INCREMENT,
  `movie_id` int(255) DEFAULT NULL,
  `user_email` int(255) DEFAULT NULL,
  `shoucang_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`shoucang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `t_shoucang`
-- ----------------------------
BEGIN;
INSERT INTO `t_shoucang` VALUES ('114', '91', '21', '2016-03-23 13:55:43'), ('122', '138', '25', '2016-03-25 20:50:32'), ('123', '126', '25', '2016-03-25 21:29:39'), ('124', '140', '25', '2016-03-25 21:41:31'), ('126', '157', '21', '2016-03-26 13:44:18');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
