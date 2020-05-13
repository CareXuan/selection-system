/*
 Navicat Premium Data Transfer

 Source Server         : tulin_test
 Source Server Type    : MySQL
 Source Server Version : 50728
 Source Host           : localhost:3306
 Source Schema         : salary

 Target Server Type    : MySQL
 Target Server Version : 50728
 File Encoding         : 65001

 Date: 07/05/2020 11:35:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for qbweb_charts
-- ----------------------------
DROP TABLE IF EXISTS `qbweb_charts`;
CREATE TABLE `qbweb_charts`  (
  `ID` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `chart_config` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '',
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of qbweb_charts
-- ----------------------------
INSERT INTO `qbweb_charts` VALUES ('1', '{\"color\": [\"#C0362E\",\"#2F4554\",\"#61A0A8\",\"#D48265\",\"#91C7AE\",\"#749F83\",\"#CA8622\",\"#BDA29A\",\"#6E7074\",\"#546570\"],\"series\": [{\"type\": \"pie\",\"radius\": \"70%\",\"center\": [\"50%\",\"50%\"],\"data\": [],\"animation\": true,\"label\": {\"fontSize\": 16,\"formatter\": \"{b}/{c}\n{d}%\"},\"emphasis\": {\"itemStyle\": {\"shadowBlur\": 10,\"shadowOffsetX\": 0,\"shadowColor\": \"rgba(0, 0, 0, 0.5)\"}}}]}');
INSERT INTO `qbweb_charts` VALUES ('2', '{\"color\":[\"#C0362E\",\"#2F4554\",\"#61A0A8\",\"#D48265\",\"#91C7AE\",\"#749F83\",\"#CA8622\",\"#BDA29A\",\"#6E7074\",\"#546570\"],\"legend\":{\"selectedMode\":false,\"orient\":\"horizontal\",\"top\":10,\"left\":30,\"itemGap\":30,\"textStyle\":{\"color\":\"auto\",\"fontSize\":16},\"data\":[]},\"series\":[{\"type\":\"pie\",\"radius\":\"70%\",\"center\":[\"50%\",\"50%\"],\"data\":[],\"animation\":true,\"label\":{\"fontSize\":16,\"formatter\":\"({d}%)\"},\"emphasis\":{\"itemStyle\":{\"shadowBlur\":10,\"shadowOffsetX\":0,\"shadowColor\":\"rgba(0,0,0,0.5)\"}}}]}');
INSERT INTO `qbweb_charts` VALUES ('3', '{\"xAxis\":{\"type\":\"category\",\"data\":[],\"axisLine\":{\"show\":true,\"lineStyle\":{\"color\":\"#fff\"}},\"axisTick\":{\"show\":false},\"axisLabel\":{\"color\":\"#fff\",\"fontSize\":16},\"splitLine\":{\"show\":false}},\"yAxis\":{\"type\":\"value\",\"axisLine\":{\"show\":false},\"axisTick\":{\"show\":false},\"axisLabel\":{\"show\":false},\"splitLine\":{\"show\":false}},\"label\":{\"show\":true,\"position\":\"top\",\"fontSize\":16,\"fontWeight\":\"bold\"},\"itemStyle\":{\"barBorderRadius\":[3,3,0,0]},\"showBackground\":false,\"barWidth\":50,\"animation\":true,\"series\":[{\"data\":[],\"type\":\"bar\",\"showBackground\":false,\"itemStyle\":{\"color\":\"#2370E8\"}}]}');
INSERT INTO `qbweb_charts` VALUES ('4', '{\"color\":[\"#8FC0AB\",\"#76999D\",\"#EB7E53\"],\"legend\":{\"selectedMode\":false,\"orient\":\"horizontal\",\"top\":0,\"left\":0,\"itemGap\":30,\"textStyle\":{\"color\":\"auto\",\"fontSize\":16},\"data\":[]},\"barWidth\":70,\"xAxis\":{\"type\":\"category\",\"data\":[],\"axisLine\":{\"show\":true,\"lineStyle\":{\"color\":\"#fff\"}},\"axisLabel\":{\"color\":\"#fff\",\"fontSize\":16}},\"yAxis\":{\"type\":\"value\",\"axisLine\":{\"show\":false},\"axisTick\":{\"show\":false},\"axisLabel\":{\"show\":false},\"splitLine\":{\"show\":false}},\"series\":[]}');

-- ----------------------------
-- Table structure for qbweb_dynamic_form
-- ----------------------------
DROP TABLE IF EXISTS `qbweb_dynamic_form`;
CREATE TABLE `qbweb_dynamic_form`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `chinese` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of qbweb_dynamic_form
-- ----------------------------
INSERT INTO `qbweb_dynamic_form` VALUES (2, 'bumen.xml', '部门', '[{\"field\":\"sfzs\",\"condition\":0,\"con_val\":2,\"custom_cond\":\"\",\"dynamic_fields\":[{\"field\":[\"bumen.xml\",\"teshubumen\"],\"hidden\":\"false\",\"required\":\"false\",\"readonly\":\"false\",\"message\":\"必填\"}],\"Son_Table\":[]}]');

-- ----------------------------
-- Table structure for qbweb_extreport
-- ----------------------------
DROP TABLE IF EXISTS `qbweb_extreport`;
CREATE TABLE `qbweb_extreport`  (
  `ID` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `biaoti` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  `lianjie` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  `juese` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  `zhuangtai` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  `paixu` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of qbweb_extreport
-- ----------------------------

-- ----------------------------
-- Table structure for qbweb_helplog
-- ----------------------------
DROP TABLE IF EXISTS `qbweb_helplog`;
CREATE TABLE `qbweb_helplog`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `helpid` int(11) NULL DEFAULT NULL,
  `userid` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of qbweb_helplog
-- ----------------------------

-- ----------------------------
-- Table structure for qbweb_lanmucache
-- ----------------------------
DROP TABLE IF EXISTS `qbweb_lanmucache`;
CREATE TABLE `qbweb_lanmucache`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `lanmuleibie` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `txtContent` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `txtOption` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of qbweb_lanmucache
-- ----------------------------

-- ----------------------------
-- Table structure for qbweb_lockdata
-- ----------------------------
DROP TABLE IF EXISTS `qbweb_lockdata`;
CREATE TABLE `qbweb_lockdata`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `module` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `data_index` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `xml_folder` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of qbweb_lockdata
-- ----------------------------

-- ----------------------------
-- Table structure for qbweb_modulecache
-- ----------------------------
DROP TABLE IF EXISTS `qbweb_modulecache`;
CREATE TABLE `qbweb_modulecache`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `strXML` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  `strType` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  `txtContent` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `strTable` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  `txtLanguage` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of qbweb_modulecache
-- ----------------------------

-- ----------------------------
-- Table structure for qbweb_moduleconfig
-- ----------------------------
DROP TABLE IF EXISTS `qbweb_moduleconfig`;
CREATE TABLE `qbweb_moduleconfig`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `strType` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '',
  `txtConfig` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `intLanmuID` int(10) NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of qbweb_moduleconfig
-- ----------------------------

-- ----------------------------
-- Table structure for qbweb_notification_log
-- ----------------------------
DROP TABLE IF EXISTS `qbweb_notification_log`;
CREATE TABLE `qbweb_notification_log`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL COMMENT '消息类型',
  `status` tinyint(4) NOT NULL COMMENT '推送状态',
  `target_key` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '推送依据',
  `push_date` datetime(0) NOT NULL COMMENT '推送时间',
  `company` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '公司',
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '消息内容',
  `user_json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '用户信息',
  `data_json` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '数据信息',
  `fail_msg` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '失败信息',
  `Customer_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `status`(`status`) USING BTREE,
  INDEX `type`(`type`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of qbweb_notification_log
-- ----------------------------
