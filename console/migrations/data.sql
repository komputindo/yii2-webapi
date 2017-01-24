/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : yii_api

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-01-24 10:53:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for employee
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=210 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of employee
-- ----------------------------
INSERT INTO `employee` VALUES ('1', 'Jayda Douglas', 'britchie@yahoo.com', '1983-12-18', 'images/3c6bb1a0f9559dc5f35b5c4ff0af62a1.jpg', '1448838415', null);
INSERT INTO `employee` VALUES ('2', 'Arne Cummings', 'bulah.christiansen@barrows.com', '1976-06-03', 'images/7aa5030f593d9fdbaf83928477581342.jpg', '1448838422', null);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '_gbg48ouBl689xm2B2God_f63TsXkkjt', '$2y$13$mqIqd83aQgJd8tp1yXr8p.C.7okSfqPQK93D4CICqvsR3AdGtzGFO', null, 'mgafur@ymail.com', '10', '1464843075', '1464843075');
INSERT INTO `user` VALUES ('2', 'alam', 'Z1K7GrzKNPf05muXlY_24OH6N2QEtspg', '$2y$13$II.MaMEsblUGgpgJOXxoHuHSkgj/lwFxy/GZTzfymiKEMXA25Nj56', null, 'alam@ymail.com', '10', '1464843118', '1468277161');
INSERT INTO `user` VALUES ('3', 'jumadil', 'GVx9vau__nuE7FjohdiQESpaqzY53zxS', '$2y$13$o.Mu1D/0SN8Q7MtQlbWbKexmaaksBEukoE8NJ2X/HqSaLD4R3uCUu', null, 'jumadil@yahoo.com', '10', '1464843154', '1464843154');
INSERT INTO `user` VALUES ('4', 'hajrah', 'VUbgGbBme_DkqRb5SAME010zTxNXvr7R', '$2y$13$ZrS1Re3Wp0CHzG.jkExNj.RVsLOgEgsSR1FB7bbfkkS6hil6biebO', null, 'hajrah@yahoo.com', '10', '1464843321', '1464843321');
INSERT INTO `user` VALUES ('5', 'kadir', 'tmY8YH9xCaGfYveNpRzwws7S7-9L6wqB', '$2y$13$wbAmSczBOGnysy5rgrGtbeurOlkEytD1xWAEu/Nsmj1qMko6qyz4W', null, 'kadir@yahoo.com', '10', '1464843346', '1464843346');
INSERT INTO `user` VALUES ('6', 'kasran', 'M7o5H5yU38zn_AW1Tyl1V_kLFI8jgjAf', '$2y$13$cR0PEshcPb/H/9rF6rdFMufLHx0R8C0tvZF15MbzslWlo7eC.Y47K', null, 'kasran@yahoo.com', '10', '1464843366', '1475800352');
INSERT INTO `user` VALUES ('7', 'kartini', 'SpO-99v3XSQOTAISC4owBIGIbFzHBu4P', '$2y$13$iQBHb5v3bmFp/rStCi9VR.KxEH0L3Vp2HWxs8qEh.Vrl.XYSc/h1K', null, 'kartini@yahoo.com', '10', '1464843386', '1464843386');
INSERT INTO `user` VALUES ('8', 'husni', 'dnYqWIjcAEW6YlwGmsh6_gvdvkd9qwIZ', '$2y$13$tuJld5/HMMgYQPTxMmymrOIivoF7YXEMDebZBVymOkBY7sc6kvUuy', null, 'husni@yahoo.com', '10', '1464843410', '1464843410');
INSERT INTO `user` VALUES ('9', 'hasim', '-T6JzUp7Gj-ykgtA9ejEqCWgzomRyKys', '$2y$13$SWc9N9w4SPP7HQ/Vr3yXe.26oilvZY6WRlQX2r3pBsEqL2qvZIzzG', null, 'hasim@yahoo.com', '10', '1464843471', '1464843471');
INSERT INTO `user` VALUES ('10', 'arman', 'n2Ad2nNC9KVlgFCBjzmPnsW79L6rMq3O', '$2y$13$FjNNMFHqda7wjYljvEJmL.o82U5LJwaAfvkNvHZE2iUU9tCQXYtVe', null, 'mgafur@ymail4.com', '10', '1475800193', '1475800367');
INSERT INTO `user` VALUES ('11', '', '', '', null, '', '10', '1484460307', '1484460307');
