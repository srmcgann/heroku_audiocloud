<?php

  require('db.php');
  $sql = '

START_TRANSACTION;

-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: videodemos
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.22.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE=\'+00:00\' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE=\'NO_AUTO_VALUE_ON_ZERO\' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `audiocloudComments`
--

DROP TABLE IF EXISTS `audiocloudComments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `audiocloudComments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userID` int NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `trackID` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=197 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `audiocloudPlaylists`
--

DROP TABLE IF EXISTS `audiocloudPlaylists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `audiocloudPlaylists` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userID` int NOT NULL,
  `author` varchar(256) NOT NULL,
  `trackIDs` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audiocloudPlaylists`
--

LOCK TABLES `audiocloudPlaylists` WRITE;
/*!40000 ALTER TABLE `audiocloudPlaylists` DISABLE KEYS */;
/*!40000 ALTER TABLE `audiocloudPlaylists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audiocloudTrackViews`
--

DROP TABLE IF EXISTS `audiocloudTrackViews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `audiocloudTrackViews` (
  `decIP` bigint NOT NULL,
  `trackID` int NOT NULL,
  `time` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audiocloudTrackViews`
--

LOCK TABLES `audiocloudTrackViews` WRITE;
/*!40000 ALTER TABLE `audiocloudTrackViews` DISABLE KEYS */;
INSERT INTO `audiocloudTrackViews` VALUES (2931999763,600842,1681137809),(2931999763,600946,1681138140);
/*!40000 ALTER TABLE `audiocloudTrackViews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audiocloudTracks`
--

DROP TABLE IF EXISTS `audiocloudTracks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `audiocloudTracks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userID` int NOT NULL,
  `author` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `trackName` varchar(256) NOT NULL,
  `playlists` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `private` tinyint(1) NOT NULL,
  `description` text NOT NULL,
  `audioFile` varchar(2048) NOT NULL,
  `plays` int NOT NULL,
  `allowDownload` tinyint(1) NOT NULL DEFAULT \'0\',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=600959 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audiocloudTracks`
--

COMMIT;
';

  mysqli_multi_query($link, $sql);
  echo 'done...';
?>
