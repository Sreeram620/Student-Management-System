-- MySQL dump 10.13  Distrib 8.0.43, for Win64 (x86_64)
--
-- Host: localhost    Database: student_management
-- ------------------------------------------------------
-- Server version	8.0.43

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `add_student`
--

DROP TABLE IF EXISTS `add_student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `add_student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `std_name` varchar(255) DEFAULT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `roll_no` varchar(20) DEFAULT NULL,
  `depart` varchar(30) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `attendance` varchar(5) DEFAULT NULL,
  `teacher_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teacher_id` (`teacher_id`),
  CONSTRAINT `add_student_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `user_details` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `add_student`
--

LOCK TABLES `add_student` WRITE;
/*!40000 ALTER TABLE `add_student` DISABLE KEYS */;
INSERT INTO `add_student` VALUES (5,'Vasam Manoj','Vasam Shenker','24XX1A0556','cse','6300412926','2007-04-21','89%',1),(6,'Guguloth Shekar','Guguloth  papya','24XX1A0524','cse','9014146933','2005-10-18','95%',1),(7,'Mohammed Munaf','Mohammed Babumiya','24XX1A0540','cse','8688837883','2006-02-03','86.7%',1),(8,'Thatikonda Sreeram','Thatikonda Bikshapathi','24XX1A0553','cse','6300412926','2005-10-07','91.2%',1);
/*!40000 ALTER TABLE `add_student` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-11-01 14:32:52
