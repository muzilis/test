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

 Date: 03/26/2016 13:50:20 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `t_comment`
-- ----------------------------
DROP TABLE IF EXISTS `t_comment`;
CREATE TABLE `t_comment` (
  `comment_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(220) DEFAULT NULL,
  `movie_id` varchar(220) DEFAULT NULL,
  `comment_content` varchar(222) DEFAULT NULL,
  `comment_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=332 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `t_comment`
-- ----------------------------
BEGIN;
INSERT INTO `t_comment` VALUES ('303', '123@qq.com', '52', 'jhkl', '2016-03-19 13:53:01'), ('306', '11@qq.com', '62', 'sdfghg', '2016-03-19 13:55:50'), ('307', '11@qq.com', '90', 'dfgs', '2016-03-19 13:56:05'), ('310', '11@qq.com', '50', 'vcbnm,', '2016-03-21 12:59:08'), ('311', '11@qq.com', '51', 'dsfg', '2016-03-21 16:34:01'), ('312', '11@qq.com', '51', 'd', '2016-03-21 16:55:47'), ('313', '123@qq.com', '50', 'sdfg', '2016-03-21 20:32:05'), ('314', '123@qq.com', '50', 'zsd', '2016-03-21 20:42:28'), ('315', '123@qq.com', '97', 'sdaf', '2016-03-21 21:07:03'), ('316', '123@qq.com', '50', 'bf', '2016-03-22 10:17:00'), ('317', '123@qq.com', '51', ',m', '2016-03-22 11:00:46'), ('318', '123@qq.com', '50', 'saf', '2016-03-22 11:22:37'), ('319', '123@qq.com', '103', 'xcv', '2016-03-22 11:26:36'), ('321', '123@qq.com', '104', 'dsfb', '2016-03-22 13:33:41'), ('322', '123@qq.com', '111', '不错', '2016-03-22 15:12:53'), ('323', '123@qq.com', '91', 'fdgh', '2016-03-22 17:54:53'), ('324', '123@qq.com', '115', 'csdvc', '2016-03-23 14:05:46'), ('325', '123@qq.com', '93', 'good', '2016-03-23 14:06:45'), ('326', '123@qq.com', '106', '你你你', '2016-03-23 14:07:37'), ('327', '11111111@qq.com', '138', 'adfh', '2016-03-25 20:50:41'), ('328', '11111111@qq.com', '52', '瓦尔特用', '2016-03-25 21:16:25'), ('329', '11111111@qq.com', '148', 'her', '2016-03-25 21:30:29'), ('330', '11111111@qq.com', '148', '你好', '2016-03-25 21:30:36'), ('331', '123@qq.com', '148', 'dfsghjk', '2016-03-26 13:40:35');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
