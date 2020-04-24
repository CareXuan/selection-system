/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50729
 Source Host           : localhost:3306
 Source Schema         : xuan

 Target Server Type    : MySQL
 Target Server Version : 50729
 File Encoding         : 65001

 Date: 24/04/2020 13:41:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for authority
-- ----------------------------
DROP TABLE IF EXISTS `authority`;
CREATE TABLE `authority`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `nav_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 49 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of authority
-- ----------------------------
INSERT INTO `authority` VALUES (35, 1, 2);
INSERT INTO `authority` VALUES (36, 1, 5);
INSERT INTO `authority` VALUES (37, 1, 4);
INSERT INTO `authority` VALUES (38, 1, 9);
INSERT INTO `authority` VALUES (39, 1, 10);
INSERT INTO `authority` VALUES (40, 1, 8);
INSERT INTO `authority` VALUES (41, 1, 19);
INSERT INTO `authority` VALUES (42, 1, 21);
INSERT INTO `authority` VALUES (43, 1, 13);
INSERT INTO `authority` VALUES (44, 1, 11);
INSERT INTO `authority` VALUES (45, 1, 12);
INSERT INTO `authority` VALUES (46, 1, 17);
INSERT INTO `authority` VALUES (47, 1, 18);
INSERT INTO `authority` VALUES (48, 1, 20);

-- ----------------------------
-- Table structure for bedroom
-- ----------------------------
DROP TABLE IF EXISTS `bedroom`;
CREATE TABLE `bedroom`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bedroom_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `bedroom_belong` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `bedroom_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bedroom
-- ----------------------------

-- ----------------------------
-- Table structure for best_class_necessary
-- ----------------------------
DROP TABLE IF EXISTS `best_class_necessary`;
CREATE TABLE `best_class_necessary`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` int(10) NOT NULL COMMENT '班级号',
  `grade` int(4) NOT NULL COMMENT '年级',
  `major` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '专业名称',
  `avg_grade` float NOT NULL DEFAULT 0 COMMENT '班级平均学分绩点',
  `error_cnt` int(5) NOT NULL DEFAULT 0 COMMENT '学籍处理数',
  `warning_cnt` int(5) NOT NULL DEFAULT 0 COMMENT '纪律处分数',
  `homepage_status` int(3) NOT NULL DEFAULT 0 COMMENT '班级主页情况',
  `homepage_good_cnt` int(5) NOT NULL COMMENT '班级主页优秀数',
  `super_avg_grade` float NOT NULL DEFAULT 0 COMMENT '党员、班级干部平均绩点',
  `bedroom_status` int(3) NOT NULL DEFAULT 0 COMMENT '寝室卫生检查情况',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of best_class_necessary
-- ----------------------------
INSERT INTO `best_class_necessary` VALUES (1, 1603, 2016, '软件工程', 3.01, 1, 1, 2, 3, 3.31, 1);
INSERT INTO `best_class_necessary` VALUES (2, 1602, 2016, '软件工程', 3.02, 2, 2, 1, 2, 3.29, 2);
INSERT INTO `best_class_necessary` VALUES (3, 1701, 2017, '计算机技术与科学', 3.03, 3, 3, 3, 1, 3.33, 3);

-- ----------------------------
-- Table structure for class
-- ----------------------------
DROP TABLE IF EXISTS `class`;
CREATE TABLE `class`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `college_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `college_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `major_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `major_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `class_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `class_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of class
-- ----------------------------
INSERT INTO `class` VALUES (1, 'aa', 'J', 'bb', 'G', 'cc', 'H');

-- ----------------------------
-- Table structure for grade
-- ----------------------------
DROP TABLE IF EXISTS `grade`;
CREATE TABLE `grade`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` int(11) NULL DEFAULT NULL,
  `class` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `basic` int(10) NOT NULL,
  `status` tinyint(5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of grade
-- ----------------------------
INSERT INTO `grade` VALUES (1, 161203311, '软工1603', '刘懿萱', 10, 1);

-- ----------------------------
-- Table structure for grade_add
-- ----------------------------
DROP TABLE IF EXISTS `grade_add`;
CREATE TABLE `grade_add`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_number` int(10) NULL DEFAULT NULL,
  `class` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `reason` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status` tinyint(2) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of grade_add
-- ----------------------------

-- ----------------------------
-- Table structure for nav_bar
-- ----------------------------
DROP TABLE IF EXISTS `nav_bar`;
CREATE TABLE `nav_bar`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL COMMENT '父级id',
  `nav_bar_name` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '导航栏名称',
  `href` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'url链接',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nav_bar
-- ----------------------------
INSERT INTO `nav_bar` VALUES (1, 0, '最佳班级评选', '');
INSERT INTO `nav_bar` VALUES (2, 1, '最佳班级', '/best-class/ranking');
INSERT INTO `nav_bar` VALUES (3, 0, '权限管理', '');
INSERT INTO `nav_bar` VALUES (4, 3, '导航栏管理', '/privilege-management/index');
INSERT INTO `nav_bar` VALUES (5, 1, '必要条件', '/best-class/necessary');
INSERT INTO `nav_bar` VALUES (6, 0, '信息导入', '');
INSERT INTO `nav_bar` VALUES (7, 0, '加分申请', '');
INSERT INTO `nav_bar` VALUES (8, 6, '德育分数', '/message-add/character');
INSERT INTO `nav_bar` VALUES (9, 3, '角色管理', '/privilege-management/role');
INSERT INTO `nav_bar` VALUES (10, 3, '用户管理', '/privilege-management/user');
INSERT INTO `nav_bar` VALUES (11, 14, '未审核申请', '/add-check/unaudited');
INSERT INTO `nav_bar` VALUES (12, 14, '已审核申请', '/add-check/audited');
INSERT INTO `nav_bar` VALUES (13, 7, '加分申请', '/add-apply/character');
INSERT INTO `nav_bar` VALUES (14, 0, '审核申请', '');
INSERT INTO `nav_bar` VALUES (15, 0, '系统管理', '');
INSERT INTO `nav_bar` VALUES (17, 15, '学生信息管理', '/system-management/student-admin');
INSERT INTO `nav_bar` VALUES (18, 15, '班级信息管理', '/system-management/class-admin');
INSERT INTO `nav_bar` VALUES (19, 6, '学生信息', '/message-add/student');
INSERT INTO `nav_bar` VALUES (20, 15, '班级干部管理', '/system-management/cadre-admin');
INSERT INTO `nav_bar` VALUES (21, 6, '班级信息', '/message-add/class');

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '角色名',
  `role_status` int(3) NOT NULL DEFAULT 0 COMMENT '角色状态',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES (1, '管理员', 1);
INSERT INTO `role` VALUES (2, '录入员', 1);

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `stu_id` int(20) NULL DEFAULT NULL,
  `stu_sex` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `stu_class` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `stu_year` int(5) NULL DEFAULT NULL,
  `phone_number` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `work` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `class` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `bedroom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES (1, 'aaa', 131202, '男', '本科', 2016, '15942018176', '班长', '软件工程1603', 'C7-401');
INSERT INTO `student` VALUES (2, 'bbb', 131203, '女', '研究生', 2017, '13143152041', '团支书', '软件工程1602', 'C6-301');
INSERT INTO `student` VALUES (3, 'ccc', 131205, '男', '研究生', 2018, '64123412424', '', '软件工程1604', 'C5-303');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'aaa', '123', 1);

SET FOREIGN_KEY_CHECKS = 1;
