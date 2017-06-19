/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : thinkphp-article

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2017-01-16 09:02:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ipass_story`
-- ----------------------------
DROP TABLE IF EXISTS `ipass_story`;
CREATE TABLE `ipass_story` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8,
  `img` text,
  `content` text CHARACTER SET utf8,
  `intro` text CHARACTER SET utf8,
  `time` date DEFAULT NULL,
  `view` int(11) DEFAULT '0',
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ipass_story
-- ----------------------------
INSERT INTO `ipass_story` VALUES ('5', '第一条测试文章', 'Upload/2017-01-12/5876f05908d18.jpg', 'hahaha,  here  is content', 'hahaha,this is intro							', '2017-01-11', '36', '1');
INSERT INTO `ipass_story` VALUES ('7', '哈哈', 'Upload/2017-01-11/5876427712560.jpg', null, '卡卡卡', '2017-01-11', '24', '2');
INSERT INTO `ipass_story` VALUES ('8', '第二条测试文章', 'Upload/2017-01-12/5876f11032a6c.jpg', '这是中文的&lt;h2&gt;nana&lt;/h2&gt;', '嗯，这里是中文的简介', '2017-01-12', '24', '1');

-- ----------------------------
-- Table structure for `ipass_storybanner`
-- ----------------------------
DROP TABLE IF EXISTS `ipass_storybanner`;
CREATE TABLE `ipass_storybanner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` text,
  `intro` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ipass_storybanner
-- ----------------------------
INSERT INTO `ipass_storybanner` VALUES ('1', 'Upload/2017-01-12/5876e0247dae1.jpg', 'banner1');
INSERT INTO `ipass_storybanner` VALUES ('2', 'Upload/2017-01-12/5876e185243ed.jpg', 'banner2');
INSERT INTO `ipass_storybanner` VALUES ('3', 'Upload/2017-01-12/5876e19b488f4.jpg', 'banner3');
