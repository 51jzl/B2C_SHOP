/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : shop1

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-03-06 16:50:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for 51jzl_user
-- ----------------------------
DROP TABLE IF EXISTS `51jzl_user`;
CREATE TABLE `51jzl_user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `head` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fullname` varchar(20) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `province` int(11) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `zipcode` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `addressid` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `regip` varchar(100) DEFAULT NULL,
  `createdate` char(100) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of 51jzl_user
-- ----------------------------
