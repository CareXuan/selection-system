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

 Date: 14/05/2020 15:49:13
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
) ENGINE = InnoDB AUTO_INCREMENT = 142 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of authority
-- ----------------------------
INSERT INTO `authority` VALUES (126, 1, 31);
INSERT INTO `authority` VALUES (127, 1, 32);
INSERT INTO `authority` VALUES (128, 1, 19);
INSERT INTO `authority` VALUES (129, 1, 21);
INSERT INTO `authority` VALUES (130, 1, 13);
INSERT INTO `authority` VALUES (131, 1, 11);
INSERT INTO `authority` VALUES (132, 1, 12);
INSERT INTO `authority` VALUES (133, 1, 4);
INSERT INTO `authority` VALUES (134, 1, 9);
INSERT INTO `authority` VALUES (135, 1, 10);
INSERT INTO `authority` VALUES (136, 1, 17);
INSERT INTO `authority` VALUES (137, 1, 18);
INSERT INTO `authority` VALUES (138, 1, 20);
INSERT INTO `authority` VALUES (139, 1, 8);
INSERT INTO `authority` VALUES (140, 1, 29);
INSERT INTO `authority` VALUES (141, 1, 30);

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
-- Table structure for class_grade
-- ----------------------------
DROP TABLE IF EXISTS `class_grade`;
CREATE TABLE `class_grade`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhuyekaoping` int(20) NULL DEFAULT NULL,
  `youxiucishu` int(20) NULL DEFAULT NULL,
  `huodongchengji` float NULL DEFAULT NULL,
  `chuqinjiancha` float NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of class_grade
-- ----------------------------

-- ----------------------------
-- Table structure for column_category
-- ----------------------------
DROP TABLE IF EXISTS `column_category`;
CREATE TABLE `column_category`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(3) NULL DEFAULT NULL COMMENT '类别',
  `year` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '学年',
  `headgrade` int(20) NULL DEFAULT NULL COMMENT '分数上限（百分比）',
  `basic` int(10) NULL DEFAULT NULL COMMENT '基础分',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of column_category
-- ----------------------------
INSERT INTO `column_category` VALUES (7, 1, '2020', 0, 0);
INSERT INTO `column_category` VALUES (8, 2, '2020', 0, 0);
INSERT INTO `column_category` VALUES (9, 1, '2020', 0, 0);

-- ----------------------------
-- Table structure for grade
-- ----------------------------
DROP TABLE IF EXISTS `grade`;
CREATE TABLE `grade`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '学院ID',
  `major_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '专业ID',
  `class_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '班级ID',
  `stu_id` int(10) NULL DEFAULT NULL COMMENT '学号',
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '姓名',
  `year` int(10) NULL DEFAULT NULL COMMENT '学年',
  `class_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '课程名称',
  `grade` float NULL DEFAULT NULL COMMENT '分数',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of grade
-- ----------------------------

-- ----------------------------
-- Table structure for grade_add
-- ----------------------------
DROP TABLE IF EXISTS `grade_add`;
CREATE TABLE `grade_add`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_number` int(10) NULL DEFAULT NULL COMMENT '学号',
  `class` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '申请类型',
  `reason` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '申请理由',
  `picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '申请图片',
  `status` tinyint(2) NULL DEFAULT NULL COMMENT '申请状态',
  `year` int(20) NULL DEFAULT NULL COMMENT '学年',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of grade_add
-- ----------------------------
INSERT INTO `grade_add` VALUES (1, 16120331, '1', '123', '/var/www/html/check_pic/QQ截图20200513091611.png', NULL, NULL);
INSERT INTO `grade_add` VALUES (2, 16120331, '1', '1231', '/var/www/html/check_pic/QQ截图20200513091611.png', 1, NULL);
INSERT INTO `grade_add` VALUES (3, 111, '1', '132', '/var/www/html/check_pic/QQ截图20200513091611.png', 0, NULL);
INSERT INTO `grade_add` VALUES (4, 111111122, '3', '123', '/var/www/html/check_pic/QQ截图20200513091611.png', 0, NULL);
INSERT INTO `grade_add` VALUES (5, 123, '1', '123', '/var/www/html/check_pic/QQ截图20200513094702.png', 0, NULL);
INSERT INTO `grade_add` VALUES (6, 161203311, '100', 'aaa', NULL, 100, 2020);
INSERT INTO `grade_add` VALUES (7, 123456, '100', 'aabb', NULL, 0, 2020);

-- ----------------------------
-- Table structure for grade_add_set
-- ----------------------------
DROP TABLE IF EXISTS `grade_add_set`;
CREATE TABLE `grade_add_set`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(3) NULL DEFAULT NULL COMMENT '加分项类型',
  `reason` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '加分项具体名称',
  `year` int(10) NULL DEFAULT NULL COMMENT '对应学年',
  `grade` float NULL DEFAULT NULL COMMENT '加分量',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of grade_add_set
-- ----------------------------
INSERT INTO `grade_add_set` VALUES (1, 1, 'bbbb', 2020, 1.5);
INSERT INTO `grade_add_set` VALUES (2, 2, 'aaaa', 2020, 3);

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
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nav_bar
-- ----------------------------
INSERT INTO `nav_bar` VALUES (1, 0, '结果展示', '');
INSERT INTO `nav_bar` VALUES (4, 15, '导航栏管理', '/privilege-management/index');
INSERT INTO `nav_bar` VALUES (6, 0, '信息导入', '');
INSERT INTO `nav_bar` VALUES (7, 0, '加分申请', '');
INSERT INTO `nav_bar` VALUES (8, 28, '德智体评分设置', '/message-add/set');
INSERT INTO `nav_bar` VALUES (9, 15, '角色管理', '/privilege-management/role');
INSERT INTO `nav_bar` VALUES (10, 15, '用户管理', '/privilege-management/user');
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
INSERT INTO `nav_bar` VALUES (28, 0, '德智体综合测评', '');
INSERT INTO `nav_bar` VALUES (29, 28, '可申请项目设置', '/message-add/grade-add-set');
INSERT INTO `nav_bar` VALUES (30, 28, '错误减分', '/message-add/demerit');
INSERT INTO `nav_bar` VALUES (31, 1, '个人评分', '/best-class/single');
INSERT INTO `nav_bar` VALUES (32, 1, '班级评分', '/best-class/class');

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
INSERT INTO `user` VALUES (1, 'root', 'admin', 1);

SET FOREIGN_KEY_CHECKS = 1;
