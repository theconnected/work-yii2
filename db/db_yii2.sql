CREATE DATABASE  IF NOT EXISTS `yii2` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `yii2`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: yii2
-- ------------------------------------------------------
-- Server version	5.6.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `book_orders`
--

DROP TABLE IF EXISTS `book_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `item_order` int(11) DEFAULT NULL,
  `isactive` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_orders`
--

LOCK TABLES `book_orders` WRITE;
/*!40000 ALTER TABLE `book_orders` DISABLE KEYS */;
INSERT INTO `book_orders` VALUES (1,1,1,3,'2017-06-29 20:00:00',3,NULL,NULL,NULL,NULL),(2,2,2,1,'2017-06-29 20:00:00',1,NULL,NULL,NULL,NULL),(3,2,2,2,'2017-06-29 20:00:00',2,NULL,NULL,NULL,NULL),(4,3,1,1,'2017-06-29 20:00:00',1,NULL,NULL,NULL,NULL),(5,3,1,1,'2017-06-29 20:00:00',1,NULL,NULL,NULL,NULL),(6,1,1,1,'2017-06-29 20:00:00',1,NULL,NULL,NULL,NULL),(7,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,2,1,NULL,'2017-06-29 09:58:38',NULL,NULL,NULL,NULL,NULL),(11,2,1,NULL,'2017-06-29 10:03:46',NULL,NULL,NULL,NULL,NULL),(12,15,1,NULL,'2017-06-29 10:13:52',NULL,NULL,NULL,NULL,NULL),(13,5,1,NULL,'2017-06-29 10:14:27',1,NULL,NULL,NULL,NULL),(14,2,1,NULL,'2017-06-29 11:12:58',1,NULL,NULL,NULL,NULL),(15,4,1,1,'2017-06-29 11:13:46',1,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `book_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `detail` text,
  `price` decimal(18,2) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `item_order` int(11) DEFAULT NULL,
  `isactive` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'Photoshop888','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',100.00,2,'324.png','2017-06-28 22:25:06',NULL,NULL,NULL,NULL,NULL),(2,'Facebook & Twitter','Facebook & Twitter\r\nสอนการใช้งานเบื้องต้น',150.00,1,'324.png','2017-06-28 22:25:06',NULL,'2017-06-29 07:58:49',1,NULL,NULL),(3,'Access 2007','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',200.00,1,'324.png','2017-06-28 22:25:06',NULL,NULL,NULL,NULL,NULL),(4,'PHP OOP','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',100.00,2,'324.png','2017-06-28 22:25:06',NULL,NULL,NULL,NULL,NULL),(5,'JAVA','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',230.00,2,'324.png','2017-06-28 22:25:06',NULL,NULL,NULL,NULL,NULL),(6,'แต่งภาพ ด้วย rightroom','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',300.00,2,'324.png','2017-06-28 22:25:06',NULL,NULL,NULL,NULL,NULL),(7,'PES PRO','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',400.00,3,'234.jpeg','2017-06-28 22:25:06',NULL,NULL,NULL,NULL,NULL),(8,'SVN Basic','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',500.00,3,'3423.jpeg','2017-06-28 22:28:08',NULL,NULL,NULL,NULL,NULL),(9,'Vue Js','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',180.00,1,'2342.jpeg','2017-06-28 22:59:59',NULL,NULL,NULL,NULL,NULL),(10,'Node Js','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',300.00,1,'333.jpeg','2017-06-28 23:00:26',NULL,NULL,NULL,NULL,NULL),(11,'เทพ Coding','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',100.00,2,'test.gif','2017-06-29 01:59:18',NULL,NULL,NULL,NULL,NULL),(12,'324','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',199.00,2,'324.png',NULL,NULL,NULL,NULL,NULL,NULL),(13,'Windows Server','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',230.00,3,'234.jpeg','2017-06-28 22:25:06',NULL,NULL,NULL,NULL,NULL),(14,'MS SQL ','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',220.00,3,'3423.jpeg','2017-06-28 22:28:08',NULL,NULL,NULL,NULL,NULL),(15,'MVC ','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',140.00,1,'2342.jpeg','2017-06-28 22:59:59',NULL,NULL,NULL,NULL,NULL),(16,'Aungula Js','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',300.00,1,'333.jpeg','2017-06-28 23:00:26',NULL,NULL,NULL,NULL,NULL),(17,'Strut Framwork','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',250.00,2,'test.gif','2017-06-29 01:59:18',NULL,NULL,NULL,NULL,NULL),(18,'Inonic','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',200.00,2,'324.png',NULL,NULL,NULL,NULL,NULL,NULL),(19,'Google Api','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',200.00,3,'234.jpeg','2017-06-28 22:25:06',NULL,NULL,NULL,NULL,NULL),(20,'รวยด้วย Socail','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',190.00,3,'3423.jpeg','2017-06-28 22:28:08',NULL,NULL,NULL,NULL,NULL),(21,'SQL เบื้องต้น','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',190.00,1,'2342.jpeg','2017-06-28 22:59:59',NULL,NULL,NULL,NULL,NULL),(22,'Laravel 5','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',160.00,1,'333.jpeg','2017-06-28 23:00:26',NULL,NULL,NULL,NULL,NULL),(23,'NET Core','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',140.00,2,'test.gif','2017-06-29 01:59:18',NULL,NULL,NULL,NULL,NULL),(24,'ASP.NET','เพลิดเพลินไปกับเรื่องราวมิตรภาพที่แสนมหัศจรรย์ของเจ้าหญิงเมโลดี้และผองเพื่อน ในรูปแบบสมุดระบายสีพร้อมเกมแสนสนุก และประดิษฐ์ต่างหูกับมงกุฎเจ้าหญิง มาสนุกกับเสียงเพลงไปกับเจ้าหญิงเมโลดี้เพียงสแกนคิวอาร์โค้ดที่ปกหนังสือ \"เจ้าหญิงมหัศจรรย์ Miracle Princess มหัศจรรย์แห่งเสียงเพลง\" ส่งเสริมความฉลาดทางด้านสติปัญญา ความฉลาดทางด้านอารมณ์ และความฉลาดทางด้านความคิดริเริ่มสร้างสรรค์',150.00,1,'324.png','2017-06-29 02:45:16',1,NULL,NULL,NULL,NULL),(27,'rrr','rrr',333.00,1,'rrr.jpeg','2017-06-29 11:50:18',1,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `item_order` int(11) DEFAULT NULL,
  `isactive` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'คอมพิวเตอร์',NULL,NULL,NULL,NULL,NULL,1,'Y'),(2,'ถ่ายภาพ',NULL,NULL,NULL,NULL,NULL,2,'Y'),(3,'เกมและบันเทิง',NULL,NULL,NULL,NULL,NULL,3,'Y');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m000000_000000_base',1498577433),('m130524_201442_init',1498577437);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'webmaster','iH45wHuw8fwhUifBih6N6d7-VYH9rBaG','$2y$13$PM95GyqrH5khDkzEyPV3muENKcsWGBAw.F.dUQ3bGN/gFCkEy8rYm',NULL,'nawin.tor.cs@gmail.com',10,1498580366,1498580366);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-29 11:55:28
