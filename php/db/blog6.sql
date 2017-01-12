/*
Navicat MySQL Data Transfer

Source Server         : sword
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : blog6

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-01-11 15:32:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `blog`
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `wid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `time` date DEFAULT NULL,
  `hits` int(11) DEFAULT '0',
  `uid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog
-- ----------------------------
INSERT INTO `blog` VALUES ('1', 'so sad', '收到回复可见啊回复可见', '2017-01-10', '0', '1', '1');
INSERT INTO `blog` VALUES ('2', 'title', 'sdfsdfsdf', '2017-01-10', '0', '2', '2');
INSERT INTO `blog` VALUES ('3', 'title', '9845joidsh', '2017-01-10', '0', '3', '1');
INSERT INTO `blog` VALUES ('4', 'title', 'cxvxcb', '2017-01-10', '0', '2', '2');
INSERT INTO `blog` VALUES ('5', 'title', 'dsfsd sd', '2017-01-10', '0', '1', '3');
INSERT INTO `blog` VALUES ('6', '急急急', '林俊杰', '2017-01-11', '0', '1', '4');

-- ----------------------------
-- Table structure for `catalog`
-- ----------------------------
DROP TABLE IF EXISTS `catalog`;
CREATE TABLE `catalog` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of catalog
-- ----------------------------
INSERT INTO `catalog` VALUES ('1', '情感小说');
INSERT INTO `catalog` VALUES ('2', '玄幻散文');
INSERT INTO `catalog` VALUES ('3', '我失恋了');
INSERT INTO `catalog` VALUES ('4', '老单也失恋了');
INSERT INTO `catalog` VALUES ('5', 'fgfdg');

-- ----------------------------
-- Table structure for `fenye`
-- ----------------------------
DROP TABLE IF EXISTS `fenye`;
CREATE TABLE `fenye` (
  `fyid` int(11) NOT NULL AUTO_INCREMENT,
  `fyname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`fyid`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fenye
-- ----------------------------
INSERT INTO `fenye` VALUES ('1', 'laoshan0');
INSERT INTO `fenye` VALUES ('2', 'laoshan1');
INSERT INTO `fenye` VALUES ('3', 'laoshan2');
INSERT INTO `fenye` VALUES ('4', 'laoshan3');
INSERT INTO `fenye` VALUES ('5', 'laoshan4');
INSERT INTO `fenye` VALUES ('6', 'laoshan5');
INSERT INTO `fenye` VALUES ('7', 'laoshan6');
INSERT INTO `fenye` VALUES ('8', 'laoshan7');
INSERT INTO `fenye` VALUES ('9', 'laoshan8');
INSERT INTO `fenye` VALUES ('10', 'laoshan9');
INSERT INTO `fenye` VALUES ('11', 'laoshan10');
INSERT INTO `fenye` VALUES ('12', 'laoshan11');
INSERT INTO `fenye` VALUES ('13', 'laoshan12');
INSERT INTO `fenye` VALUES ('14', 'laoshan13');
INSERT INTO `fenye` VALUES ('15', 'laoshan14');
INSERT INTO `fenye` VALUES ('16', 'laoshan15');
INSERT INTO `fenye` VALUES ('17', 'laoshan16');
INSERT INTO `fenye` VALUES ('18', 'laoshan17');
INSERT INTO `fenye` VALUES ('19', 'laoshan18');
INSERT INTO `fenye` VALUES ('20', 'laoshan19');
INSERT INTO `fenye` VALUES ('21', 'laoshan20');
INSERT INTO `fenye` VALUES ('22', 'laoshan21');
INSERT INTO `fenye` VALUES ('23', 'laoshan22');
INSERT INTO `fenye` VALUES ('24', 'laoshan23');
INSERT INTO `fenye` VALUES ('25', 'laoshan24');
INSERT INTO `fenye` VALUES ('26', 'laoshan25');
INSERT INTO `fenye` VALUES ('27', 'laoshan26');
INSERT INTO `fenye` VALUES ('28', 'laoshan27');
INSERT INTO `fenye` VALUES ('29', 'laoshan28');
INSERT INTO `fenye` VALUES ('30', 'laoshan29');
INSERT INTO `fenye` VALUES ('31', 'laoshan30');
INSERT INTO `fenye` VALUES ('32', 'laoshan31');
INSERT INTO `fenye` VALUES ('33', 'laoshan32');
INSERT INTO `fenye` VALUES ('34', 'laoshan33');
INSERT INTO `fenye` VALUES ('35', 'laoshan34');
INSERT INTO `fenye` VALUES ('36', 'laoshan35');
INSERT INTO `fenye` VALUES ('37', 'laoshan36');
INSERT INTO `fenye` VALUES ('38', 'laoshan37');
INSERT INTO `fenye` VALUES ('39', 'laoshan38');
INSERT INTO `fenye` VALUES ('40', 'laoshan39');
INSERT INTO `fenye` VALUES ('41', 'laoshan40');
INSERT INTO `fenye` VALUES ('42', 'laoshan41');
INSERT INTO `fenye` VALUES ('43', 'laoshan42');
INSERT INTO `fenye` VALUES ('44', 'laoshan43');
INSERT INTO `fenye` VALUES ('45', 'laoshan44');
INSERT INTO `fenye` VALUES ('46', 'laoshan45');
INSERT INTO `fenye` VALUES ('47', 'laoshan46');
INSERT INTO `fenye` VALUES ('48', 'laoshan47');
INSERT INTO `fenye` VALUES ('49', 'laoshan48');
INSERT INTO `fenye` VALUES ('50', 'laoshan49');

-- ----------------------------
-- Table structure for `fy`
-- ----------------------------
DROP TABLE IF EXISTS `fy`;
CREATE TABLE `fy` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fy
-- ----------------------------
INSERT INTO `fy` VALUES ('1', 'name1');
INSERT INTO `fy` VALUES ('2', 'name2');
INSERT INTO `fy` VALUES ('3', 'name3');
INSERT INTO `fy` VALUES ('4', 'name4');
INSERT INTO `fy` VALUES ('5', 'name5');
INSERT INTO `fy` VALUES ('6', 'name6');
INSERT INTO `fy` VALUES ('7', 'name7');
INSERT INTO `fy` VALUES ('8', 'name8');
INSERT INTO `fy` VALUES ('9', 'name9');
INSERT INTO `fy` VALUES ('10', 'name10');
INSERT INTO `fy` VALUES ('11', 'name11');
INSERT INTO `fy` VALUES ('12', 'name12');
INSERT INTO `fy` VALUES ('13', 'name13');
INSERT INTO `fy` VALUES ('14', 'name14');
INSERT INTO `fy` VALUES ('15', 'name15');
INSERT INTO `fy` VALUES ('16', 'name16');
INSERT INTO `fy` VALUES ('17', 'name17');
INSERT INTO `fy` VALUES ('18', 'name18');
INSERT INTO `fy` VALUES ('19', 'name19');
INSERT INTO `fy` VALUES ('20', 'name20');
INSERT INTO `fy` VALUES ('21', 'name21');
INSERT INTO `fy` VALUES ('22', 'name22');
INSERT INTO `fy` VALUES ('23', 'name23');
INSERT INTO `fy` VALUES ('24', 'name24');
INSERT INTO `fy` VALUES ('25', 'name25');
INSERT INTO `fy` VALUES ('26', 'name26');
INSERT INTO `fy` VALUES ('27', 'name27');
INSERT INTO `fy` VALUES ('28', 'name28');
INSERT INTO `fy` VALUES ('29', 'name29');
INSERT INTO `fy` VALUES ('30', 'name30');
INSERT INTO `fy` VALUES ('31', 'name31');
INSERT INTO `fy` VALUES ('32', 'name32');
INSERT INTO `fy` VALUES ('33', 'name33');
INSERT INTO `fy` VALUES ('34', 'name34');
INSERT INTO `fy` VALUES ('35', 'name35');
INSERT INTO `fy` VALUES ('36', 'name36');
INSERT INTO `fy` VALUES ('37', 'name37');
INSERT INTO `fy` VALUES ('38', 'name38');
INSERT INTO `fy` VALUES ('39', 'name39');
INSERT INTO `fy` VALUES ('40', 'name40');
INSERT INTO `fy` VALUES ('41', 'name41');
INSERT INTO `fy` VALUES ('42', 'name42');
INSERT INTO `fy` VALUES ('43', 'name43');
INSERT INTO `fy` VALUES ('44', 'name44');
INSERT INTO `fy` VALUES ('45', 'name45');
INSERT INTO `fy` VALUES ('46', 'name46');
INSERT INTO `fy` VALUES ('47', 'name47');
INSERT INTO `fy` VALUES ('48', 'name48');
INSERT INTO `fy` VALUES ('49', 'name49');

-- ----------------------------
-- Table structure for `gf`
-- ----------------------------
DROP TABLE IF EXISTS `gf`;
CREATE TABLE `gf` (
  `gfid` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`gfid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gf
-- ----------------------------
INSERT INTO `gf` VALUES ('1', '1', '2');
INSERT INTO `gf` VALUES ('2', '1', '3');
INSERT INTO `gf` VALUES ('3', '2', '1');
INSERT INTO `gf` VALUES ('4', '2', '3');
INSERT INTO `gf` VALUES ('5', '2', '4');
INSERT INTO `gf` VALUES ('6', '3', '2');
INSERT INTO `gf` VALUES ('7', '3', '4');
INSERT INTO `gf` VALUES ('8', '3', '1');
INSERT INTO `gf` VALUES ('9', '4', '2');
INSERT INTO `gf` VALUES ('10', '4', '3');

-- ----------------------------
-- Table structure for `group1`
-- ----------------------------
DROP TABLE IF EXISTS `group1`;
CREATE TABLE `group1` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `gname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of group1
-- ----------------------------
INSERT INTO `group1` VALUES ('1', 'sword好友列表');
INSERT INTO `group1` VALUES ('2', 'laoshan好友列表');
INSERT INTO `group1` VALUES ('3', 'laoxie好友列表');
INSERT INTO `group1` VALUES ('4', 'xiaod好友列表');

-- ----------------------------
-- Table structure for `ly`
-- ----------------------------
DROP TABLE IF EXISTS `ly`;
CREATE TABLE `ly` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `lpid` int(11) DEFAULT NULL,
  `lcon` varchar(255) DEFAULT NULL,
  `time` date DEFAULT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `wid` int(11) DEFAULT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ly
-- ----------------------------
INSERT INTO `ly` VALUES ('1', '0', 'sdfsdsdf', '2017-01-11', '1', '1');
INSERT INTO `ly` VALUES ('2', '0', '7980890890', '2017-01-10', '2', '1');
INSERT INTO `ly` VALUES ('3', '1', 'vsdsdf', '2017-01-10', '2', '1');
INSERT INTO `ly` VALUES ('4', '3', 'fgdfgdf', '2017-01-11', '1', '1');

-- ----------------------------
-- Table structure for `pl`
-- ----------------------------
DROP TABLE IF EXISTS `pl`;
CREATE TABLE `pl` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pcon` varchar(255) DEFAULT NULL,
  `ptime` date DEFAULT NULL,
  `wid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pl
-- ----------------------------

-- ----------------------------
-- Table structure for `sx`
-- ----------------------------
DROP TABLE IF EXISTS `sx`;
CREATE TABLE `sx` (
  `xid` int(11) NOT NULL AUTO_INCREMENT,
  `scon` varchar(255) DEFAULT NULL,
  `stime` date DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `rid` int(11) DEFAULT NULL,
  PRIMARY KEY (`xid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sx
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'sword', '12345', null, '1');
INSERT INTO `user` VALUES ('2', 'laoshan', '12345', null, '2');
INSERT INTO `user` VALUES ('3', 'laoxie', '12345', null, '3');
INSERT INTO `user` VALUES ('4', 'xiaod', '12345', null, '4');
INSERT INTO `user` VALUES ('5', 'lisi', '12345', null, null);
