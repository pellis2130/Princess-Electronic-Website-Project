-- phpMyAdmin SQL Dump

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: sdc310_ellis

-- ----------------------------
-- PRODUCTS TABLE
-- ----------------------------
CREATE TABLE `products` (
  `ProductNo` int(11) NOT NULL,
  `ProductId` varchar(10) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductDescription` varchar(150) DEFAULT NULL,
  `ProductCost` decimal(6,2) DEFAULT NULL
);

INSERT INTO `products` VALUES
(0,'P06','Mouse','Wireless optical mouse',29.99),
(1,'P01','Laptop','High performance laptop',899.99),
(2,'P02','Keyboard','RGB Mechanical keyboard',89.99),
(4,'P04','Monitor','160 FPS 24 inch display',179.99),
(5,'P05','Headset','Wireless Gaming headset',129.99);

ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductNo`);

-- ----------------------------
-- USERS TABLE
-- ----------------------------
CREATE TABLE `users` (
  `UserNo` int(11) NOT NULL,
  `UserId` varchar(15) NOT NULL,
  `LName` varchar(25) NOT NULL,
  `FName` varchar(25) NOT NULL
);

INSERT INTO `users` VALUES
(1,'U01','Ellis-Updated','Princess'),
(3,'U03','Rowning','Lindsey'),
(4,'U04','Daniels','Laila'),
(5,'U05','Denson','Gabriel');

ALTER TABLE `users`
  ADD PRIMARY KEY (`UserNo`);

COMMIT;
