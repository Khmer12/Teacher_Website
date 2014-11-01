/*
Navicat MySQL Data Transfer

Source Server         : LessonManagement
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : teacher

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2014-11-01 19:42:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbadvertise
-- ----------------------------
DROP TABLE IF EXISTS `tbadvertise`;
CREATE TABLE `tbadvertise` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_name` varchar(50) NOT NULL,
  `ad_image` varchar(100) NOT NULL,
  `ad_link` varchar(100) NOT NULL,
  `ad_cust_name` varchar(50) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for tbcategory
-- ----------------------------
DROP TABLE IF EXISTS `tbcategory`;
CREATE TABLE `tbcategory` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  `cat_description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for tbpost
-- ----------------------------
DROP TABLE IF EXISTS `tbpost`;
CREATE TABLE `tbpost` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_title` varchar(50) NOT NULL,
  `post_date` date NOT NULL,
  `post_content` text NOT NULL,
  `post_image` varchar(150) DEFAULT NULL,
  `post_type` int(11) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `cat_id` (`cat_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tbpost_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `tbcategory` (`cat_id`),
  CONSTRAINT `tbpost_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbuser` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for tbuser
-- ----------------------------
DROP TABLE IF EXISTS `tbuser`;
CREATE TABLE `tbuser` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_pwd` varchar(50) NOT NULL,
  `user_position` varchar(50) NOT NULL,
  `usre_email` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
