/*
 Navicat Premium Data Transfer

 Source Server         : mysql8-root@192.168.194.135
 Source Server Type    : MySQL
 Source Server Version : 80404 (8.4.4)
 Source Host           : 192.168.194.135:13306
 Source Schema         : usg

 Target Server Type    : MySQL
 Target Server Version : 80404 (8.4.4)
 File Encoding         : 65001

 Date: 13/01/2026 06:17:51
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for contact_messages
-- ----------------------------
DROP TABLE IF EXISTS `contact_messages`;
CREATE TABLE `contact_messages`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `ip_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nationality` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `enquiry_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `is_read` tinyint NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contact_messages
-- ----------------------------
INSERT INTO `contact_messages` VALUES (1, 'test1441@yopmail.com', '192.168.194.1', 'nananana', 'ya', 'na', '15001443', 'Australia', NULL, 0, '2026-01-12 13:50:05', '2026-01-12 13:50:05');
INSERT INTO `contact_messages` VALUES (2, 'test1441@yopmail.com', '192.168.194.1', 'Who is the one needs help?', 'ya', 'na', '15001443', 'Australia', NULL, 0, '2026-01-12 13:52:16', '2026-01-12 13:52:16');
INSERT INTO `contact_messages` VALUES (3, 'test1441@yopmail.com', '192.168.194.1', 'nahahana', 'ya', 'na', NULL, NULL, NULL, 0, '2026-01-12 13:53:51', '2026-01-12 13:53:51');
INSERT INTO `contact_messages` VALUES (4, 'test1441@yopmail.com', '192.168.194.1', 'nanananana', 'ya', 'na', NULL, NULL, NULL, 0, '2026-01-12 13:54:27', '2026-01-12 13:54:27');
INSERT INTO `contact_messages` VALUES (5, 'test1441@yopmail.com', '192.168.194.1', 'nananana', NULL, NULL, NULL, NULL, NULL, 0, '2026-01-12 13:55:06', '2026-01-12 13:55:06');
INSERT INTO `contact_messages` VALUES (6, 'test1441@yopmail.com', '192.168.194.1', 'nananana', NULL, NULL, NULL, NULL, NULL, 0, '2026-01-12 13:55:22', '2026-01-12 13:55:22');
INSERT INTO `contact_messages` VALUES (7, 'test1441@yopmail.com', '192.168.194.1', 'okokokok', NULL, NULL, NULL, NULL, NULL, 0, '2026-01-12 14:03:39', '2026-01-12 14:03:39');
INSERT INTO `contact_messages` VALUES (8, 'test1441@yopmail.com', '192.168.194.1', '娜娜娜娜nana', NULL, NULL, NULL, NULL, NULL, 0, '2026-01-12 14:11:25', '2026-01-12 14:11:25');
INSERT INTO `contact_messages` VALUES (9, 'test1441@yopmail.com', '192.168.194.1', 'nnononono', NULL, NULL, NULL, NULL, NULL, 0, '2026-01-12 14:13:58', '2026-01-12 14:13:58');
INSERT INTO `contact_messages` VALUES (10, 'test1441@yopmail.com', '192.168.194.1', 'nanananana', NULL, NULL, NULL, NULL, NULL, 0, '2026-01-12 14:22:00', '2026-01-12 14:22:00');
INSERT INTO `contact_messages` VALUES (11, 'test1441@yopmail.com', '192.168.194.1', 'nanananana', NULL, NULL, NULL, NULL, NULL, 0, '2026-01-12 14:24:24', '2026-01-12 14:24:24');
INSERT INTO `contact_messages` VALUES (12, 'test1441@yopmail.com', '192.168.194.1', 'nanananana', NULL, NULL, NULL, NULL, NULL, 0, '2026-01-12 14:28:11', '2026-01-12 14:28:11');
INSERT INTO `contact_messages` VALUES (13, 'test1441@yopmail.com', '192.168.194.1', 'nanananana', NULL, NULL, NULL, NULL, NULL, 0, '2026-01-12 14:28:38', '2026-01-12 14:28:38');
INSERT INTO `contact_messages` VALUES (14, 'test1441@yopmail.com', '192.168.194.1', 'nanananana', NULL, NULL, NULL, NULL, NULL, 0, '2026-01-12 14:30:06', '2026-01-12 14:30:06');
INSERT INTO `contact_messages` VALUES (15, 'test1441@yopmail.com', '192.168.194.1', 'nanananana', NULL, NULL, NULL, NULL, NULL, 0, '2026-01-12 14:30:37', '2026-01-12 14:30:37');
INSERT INTO `contact_messages` VALUES (16, 'test1441@yopmail.com', '192.168.194.1', 'nanananana', NULL, NULL, NULL, NULL, NULL, 0, '2026-01-12 14:38:02', '2026-01-12 14:38:02');
INSERT INTO `contact_messages` VALUES (17, 'test1441@yopmail.com', '192.168.194.1', 'nanananana', NULL, NULL, NULL, NULL, NULL, 0, '2026-01-12 14:43:22', '2026-01-12 14:43:22');
INSERT INTO `contact_messages` VALUES (18, 'test1441@yopmail.com', '192.168.194.1', 'nanananana', NULL, NULL, NULL, NULL, NULL, 0, '2026-01-12 14:46:11', '2026-01-12 14:46:11');
INSERT INTO `contact_messages` VALUES (19, 'test1441@yopmail.com', '192.168.194.1', '哈哈哈哈haha', NULL, NULL, NULL, NULL, NULL, 0, '2026-01-12 14:53:22', '2026-01-12 14:53:22');
INSERT INTO `contact_messages` VALUES (20, 'test1441@yopmail.com', '192.168.194.1', 'hahahahaha', NULL, NULL, NULL, NULL, NULL, 0, '2026-01-12 14:53:45', '2026-01-12 14:53:45');
INSERT INTO `contact_messages` VALUES (21, 'test1441@yopmail.com', '192.168.194.1', 'hahahaha', NULL, NULL, NULL, NULL, NULL, 0, '2026-01-12 14:55:25', '2026-01-12 14:55:25');
INSERT INTO `contact_messages` VALUES (22, 'test1441@yopmail.com', '192.168.194.1', 'hahahaha', NULL, NULL, NULL, NULL, NULL, 0, '2026-01-12 14:57:01', '2026-01-12 14:57:01');
INSERT INTO `contact_messages` VALUES (23, 'test1441@yopmail.com', '192.168.194.1', 'hahahaha', NULL, NULL, NULL, NULL, NULL, 0, '2026-01-12 14:57:18', '2026-01-12 14:57:18');

SET FOREIGN_KEY_CHECKS = 1;
