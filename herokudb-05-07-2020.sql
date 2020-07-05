-- MySQL dump 10.13  Distrib 5.7.30, for Linux (x86_64)
--
-- Host: us-cdbr-east-05.cleardb.net    Database: heroku_64cfd6ea6b47efc
-- ------------------------------------------------------
-- Server version	5.5.62-log

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
-- Table structure for table `activations`
--

DROP TABLE IF EXISTS `activations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=331 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activations`
--

LOCK TABLES `activations` WRITE;
/*!40000 ALTER TABLE `activations` DISABLE KEYS */;
INSERT INTO `activations` VALUES (1,1,'hyvoMaVRpuSaMVxTSfHaVbtC3ihxBNmf',1,'2020-06-27 16:35:46','2020-06-27 16:35:46','2020-06-27 16:35:46'),(11,11,'PVrFGqUuKP8gIfwLXGUYxB2x6TBxdLkM',1,'2020-06-27 16:35:46','2020-06-27 16:35:46','2020-06-27 16:35:46'),(21,21,'dxsjMwqaSQvx8hitF61eJYmoxE6nH0eD',1,'2020-06-27 16:35:46','2020-06-27 16:35:46','2020-06-27 16:35:46'),(31,31,'65zLinSHHGc6fMLQ0BSpk6pMdNNkKZXq',1,'2020-06-27 16:35:47','2020-06-27 16:35:46','2020-06-27 16:35:47'),(81,101,'irlFcltyxxROqvfi0WaOyL9ktf0XFjXR',1,'2020-07-03 08:30:34','2020-07-03 08:30:34','2020-07-03 08:30:34'),(91,111,'EFUyB1ip61V562aOXfz2HFUcQZNsVX0f',1,'2020-07-03 08:34:27','2020-07-03 08:34:27','2020-07-03 08:34:27'),(101,121,'GGEszVl1dIyGHRvfxAUh5PSSnlCrjc7c',1,'2020-07-03 10:39:31','2020-07-03 10:39:31','2020-07-03 10:39:31'),(111,131,'ZijsnuQPFvuieh8GKYapK5BZRn8oMYh7',1,'2020-07-03 10:42:10','2020-07-03 10:42:10','2020-07-03 10:42:10'),(121,141,'DVEK62B2oqqn8sPlOhQedY1Pq66ZbNqi',1,'2020-07-04 07:22:11','2020-07-04 07:22:11','2020-07-04 07:22:11'),(131,151,'EULNUw8Dck0gFzcYlcavP9T0N7ijM3I6',1,'2020-07-04 07:26:34','2020-07-04 07:26:34','2020-07-04 07:26:34'),(141,161,'pxoVAHQUpgEZD8OE6pUpKd3xFL39JFvb',1,'2020-07-04 07:30:20','2020-07-04 07:30:20','2020-07-04 07:30:20'),(151,171,'Bv7L7yJOxKuDxF5Xw1Ti2Kks6HLi1iwQ',1,'2020-07-04 07:32:06','2020-07-04 07:32:06','2020-07-04 07:32:06'),(161,181,'UXYne8TDJZ0Yh3xf1XwFxRSHcJUQSpAG',1,'2020-07-04 07:33:36','2020-07-04 07:33:36','2020-07-04 07:33:36'),(171,191,'qlUqoQn65CPn7T0A48Bf6oioMRTexNF1',1,'2020-07-04 07:35:24','2020-07-04 07:35:24','2020-07-04 07:35:24'),(181,201,'HNlmAeLLkVgE8dhKBeIcEoPPTiqvQmxS',1,'2020-07-04 07:36:42','2020-07-04 07:36:42','2020-07-04 07:36:42'),(191,211,'octP0owSsnlwaKzOokpbyRERLOzlqdxj',1,'2020-07-04 07:38:02','2020-07-04 07:38:02','2020-07-04 07:38:02'),(201,221,'VeopmhxCHwpF4CE5wa8kLRPvQXJ3LT8p',1,'2020-07-04 07:47:15','2020-07-04 07:47:15','2020-07-04 07:47:15'),(211,231,'xLozHySkdUEFj1cOnh0G1RecuEiiy8dV',1,'2020-07-04 07:49:18','2020-07-04 07:49:18','2020-07-04 07:49:18'),(221,241,'aHENpZya9DoeTHa8Af8OsuudekBSSGoe',1,'2020-07-04 07:51:09','2020-07-04 07:51:09','2020-07-04 07:51:09'),(231,251,'7yL5dZLWXyKiAe7J6EmR9LaIWHNv1V9g',1,'2020-07-04 07:52:36','2020-07-04 07:52:36','2020-07-04 07:52:36'),(241,261,'fAEku5caxP3sOu0Qc03YDVzXYDjZvGDp',1,'2020-07-04 07:54:33','2020-07-04 07:54:33','2020-07-04 07:54:33'),(251,271,'KID6PbARAqmzutlEtexAtCGfem4NeFvh',1,'2020-07-04 07:55:38','2020-07-04 07:55:38','2020-07-04 07:55:38'),(261,281,'p9TYhyhrQeLqCsikiKuBKaJHalA2HD4A',1,'2020-07-04 07:56:40','2020-07-04 07:56:40','2020-07-04 07:56:40'),(271,291,'iR4cZJvZLkcysLBkbVWjxOXvgpavISNP',1,'2020-07-04 07:57:47','2020-07-04 07:57:47','2020-07-04 07:57:47'),(281,301,'NVaok2pdFVXjuOwCF2IxkN96se4fyTXh',1,'2020-07-04 07:59:00','2020-07-04 07:59:00','2020-07-04 07:59:00'),(291,311,'2aIqyz2LcdngZj6J0zzDqzqPC5fWmIj4',1,'2020-07-04 08:00:10','2020-07-04 08:00:10','2020-07-04 08:00:10'),(301,321,'yjuhD3hSQMxU34xxQrdxmDbY6yqOdPlj',1,'2020-07-04 08:01:25','2020-07-04 08:01:25','2020-07-04 08:01:25'),(311,331,'HiNFkudByApODjClFcK0ld6Gf1eN6MZ5',1,'2020-07-05 08:39:35','2020-07-05 08:39:35','2020-07-05 08:39:35'),(321,341,'ZGxVcPSr3xyf5rVrLevP3EPRnyg84wUB',1,'2020-07-05 08:47:01','2020-07-05 08:47:01','2020-07-05 08:47:01');
/*!40000 ALTER TABLE `activations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` bigint(20) unsigned NOT NULL,
  `question_type_id` bigint(20) unsigned NOT NULL,
  `sub_category_id` bigint(20) unsigned DEFAULT NULL,
  `survey_type_id` bigint(20) unsigned DEFAULT NULL,
  `program_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reference_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `answers_question_id_foreign` (`question_id`),
  KEY `answers_question_type_id_foreign` (`question_type_id`),
  KEY `answers_sub_category_id_foreign` (`sub_category_id`),
  KEY `answers_survey_type_id_foreign` (`survey_type_id`),
  KEY `answers_program_id_foreign` (`program_id`),
  CONSTRAINT `answers_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`),
  CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`),
  CONSTRAINT `answers_question_type_id_foreign` FOREIGN KEY (`question_type_id`) REFERENCES `question_types` (`id`),
  CONSTRAINT `answers_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `subcategories` (`id`),
  CONSTRAINT `answers_survey_type_id_foreign` FOREIGN KEY (`survey_type_id`) REFERENCES `survey_types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=361 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES (1,'Community Radio station',1131,31,31,201,21,'2020-07-04 16:24:15','2020-07-04 16:24:15','baa6300f-a25a-4492-8e0b-158cae09d71a'),(11,'DAMBAM',1141,31,31,201,21,'2020-07-04 16:24:15','2020-07-04 16:24:15','baa6300f-a25a-4492-8e0b-158cae09d71a'),(21,'Bauchi town',1151,11,31,201,21,'2020-07-04 16:24:15','2020-07-04 16:24:15','baa6300f-a25a-4492-8e0b-158cae09d71a'),(31,'Morning',1161,11,31,201,21,'2020-07-04 16:24:15','2020-07-04 16:24:15','baa6300f-a25a-4492-8e0b-158cae09d71a'),(41,'ffrfgg',1171,61,31,201,21,'2020-07-04 16:24:15','2020-07-04 16:24:15','baa6300f-a25a-4492-8e0b-158cae09d71a'),(51,'88888',1181,61,31,201,21,'2020-07-04 16:24:15','2020-07-04 16:24:15','baa6300f-a25a-4492-8e0b-158cae09d71a'),(61,'55555',1191,1,31,201,21,'2020-07-04 16:24:15','2020-07-04 16:24:15','baa6300f-a25a-4492-8e0b-158cae09d71a'),(71,'ffvvv',1201,61,31,201,21,'2020-07-04 16:24:15','2020-07-04 16:24:15','baa6300f-a25a-4492-8e0b-158cae09d71a'),(81,'55888',1211,61,31,201,21,'2020-07-04 16:24:15','2020-07-04 16:24:15','baa6300f-a25a-4492-8e0b-158cae09d71a'),(91,'Yes',1221,11,31,201,21,'2020-07-04 16:24:15','2020-07-04 16:24:15','baa6300f-a25a-4492-8e0b-158cae09d71a'),(101,'5555',1231,61,31,201,21,'2020-07-04 16:24:15','2020-07-04 16:24:15','baa6300f-a25a-4492-8e0b-158cae09d71a'),(111,'85555',1241,1,31,201,21,'2020-07-04 16:24:15','2020-07-04 16:24:15','baa6300f-a25a-4492-8e0b-158cae09d71a'),(121,'Community Radio station',1131,31,31,201,21,'2020-07-04 16:26:49','2020-07-04 16:26:49','6b30ed61-862c-42be-8f1b-24994f07e942'),(131,'DAMBAM',1141,31,31,201,21,'2020-07-04 16:26:49','2020-07-04 16:26:49','6b30ed61-862c-42be-8f1b-24994f07e942'),(141,'Bauchi town',1151,11,31,201,21,'2020-07-04 16:26:49','2020-07-04 16:26:49','6b30ed61-862c-42be-8f1b-24994f07e942'),(151,'Morning',1161,11,31,201,21,'2020-07-04 16:26:49','2020-07-04 16:26:49','6b30ed61-862c-42be-8f1b-24994f07e942'),(161,'efgghh',1171,61,31,201,21,'2020-07-04 16:26:49','2020-07-04 16:26:49','6b30ed61-862c-42be-8f1b-24994f07e942'),(171,'5555',1181,61,31,201,21,'2020-07-04 16:26:49','2020-07-04 16:26:49','6b30ed61-862c-42be-8f1b-24994f07e942'),(181,'8885',1191,1,31,201,21,'2020-07-04 16:26:49','2020-07-04 16:26:49','6b30ed61-862c-42be-8f1b-24994f07e942'),(191,'ccccf',1201,61,31,201,21,'2020-07-04 16:26:49','2020-07-04 16:26:49','6b30ed61-862c-42be-8f1b-24994f07e942'),(201,'85555',1211,61,31,201,21,'2020-07-04 16:26:49','2020-07-04 16:26:49','6b30ed61-862c-42be-8f1b-24994f07e942'),(211,'Yes',1221,11,31,201,21,'2020-07-04 16:26:49','2020-07-04 16:26:49','6b30ed61-862c-42be-8f1b-24994f07e942'),(221,'88888',1231,61,31,201,21,'2020-07-04 16:26:49','2020-07-04 16:26:49','6b30ed61-862c-42be-8f1b-24994f07e942'),(231,'8888',1241,1,31,201,21,'2020-07-04 16:26:49','2020-07-04 16:26:49','6b30ed61-862c-42be-8f1b-24994f07e942'),(241,'Community Radio station',1131,31,31,201,21,'2020-07-04 18:17:37','2020-07-04 18:17:37','f8fdc209-9be5-4529-8729-d4937f1a88dd'),(251,'DARAZO',1141,31,31,201,21,'2020-07-04 18:17:37','2020-07-04 18:17:37','f8fdc209-9be5-4529-8729-d4937f1a88dd'),(261,'Bauchi town',1151,11,31,201,21,'2020-07-04 18:17:37','2020-07-04 18:17:37','f8fdc209-9be5-4529-8729-d4937f1a88dd'),(271,'Evening',1161,11,31,201,21,'2020-07-04 18:17:37','2020-07-04 18:17:37','f8fdc209-9be5-4529-8729-d4937f1a88dd'),(281,'ghuu',1171,61,31,201,21,'2020-07-04 18:17:37','2020-07-04 18:17:37','f8fdc209-9be5-4529-8729-d4937f1a88dd'),(291,'2',1181,61,31,201,21,'2020-07-04 18:17:37','2020-07-04 18:17:37','f8fdc209-9be5-4529-8729-d4937f1a88dd'),(301,'gghhh',1191,1,31,201,21,'2020-07-04 18:17:37','2020-07-04 18:17:37','f8fdc209-9be5-4529-8729-d4937f1a88dd'),(311,'hhjjji',1201,61,31,201,21,'2020-07-04 18:17:37','2020-07-04 18:17:37','f8fdc209-9be5-4529-8729-d4937f1a88dd'),(321,'2',1211,61,31,201,21,'2020-07-04 18:17:37','2020-07-04 18:17:37','f8fdc209-9be5-4529-8729-d4937f1a88dd'),(331,'Yes',1221,11,31,201,21,'2020-07-04 18:17:37','2020-07-04 18:17:37','f8fdc209-9be5-4529-8729-d4937f1a88dd'),(341,'2',1231,61,31,201,21,'2020-07-04 18:17:37','2020-07-04 18:17:37','f8fdc209-9be5-4529-8729-d4937f1a88dd'),(351,'ttghjjjjjjh',1241,1,31,201,21,'2020-07-04 18:17:37','2020-07-04 18:17:37','f8fdc209-9be5-4529-8729-d4937f1a88dd');
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Nutrition','Nutrition','nutrition',1,NULL,NULL),(11,'Wash','Wash','wash',1,NULL,NULL),(21,'Education','Education','education',1,NULL,NULL),(31,'Health','Health','health',1,NULL,'2020-07-02 22:49:23');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deliveries`
--

DROP TABLE IF EXISTS `deliveries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deliveries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `logistics_id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `quantity_recieved` int(11) NOT NULL,
  `quantity_damaged` int(11) NOT NULL,
  `reciever` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deliveries`
--

LOCK TABLES `deliveries` WRITE;
/*!40000 ALTER TABLE `deliveries` DISABLE KEYS */;
/*!40000 ALTER TABLE `deliveries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forms`
--

DROP TABLE IF EXISTS `forms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_id` bigint(20) unsigned DEFAULT NULL,
  `sub_category_id` bigint(20) unsigned DEFAULT NULL,
  `survey_type_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `forms_slug_unique` (`slug`),
  KEY `forms_program_id_foreign` (`program_id`),
  KEY `forms_sub_category_id_foreign` (`sub_category_id`),
  KEY `forms_survey_type_id_foreign` (`survey_type_id`),
  CONSTRAINT `forms_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`),
  CONSTRAINT `forms_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `subcategories` (`id`),
  CONSTRAINT `forms_survey_type_id_foreign` FOREIGN KEY (`survey_type_id`) REFERENCES `survey_types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forms`
--

LOCK TABLES `forms` WRITE;
/*!40000 ALTER TABLE `forms` DISABLE KEYS */;
/*!40000 ALTER TABLE `forms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lgas`
--

DROP TABLE IF EXISTS `lgas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lgas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `state_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lgas_state_id_foreign` (`state_id`),
  CONSTRAINT `lgas_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lgas`
--

LOCK TABLES `lgas` WRITE;
/*!40000 ALTER TABLE `lgas` DISABLE KEYS */;
/*!40000 ALTER TABLE `lgas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logins`
--

DROP TABLE IF EXISTS `logins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logins`
--

LOCK TABLES `logins` WRITE;
/*!40000 ALTER TABLE `logins` DISABLE KEYS */;
/*!40000 ALTER TABLE `logins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metrics`
--

DROP TABLE IF EXISTS `metrics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metrics` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `metrics_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metrics`
--

LOCK TABLES `metrics` WRITE;
/*!40000 ALTER TABLE `metrics` DISABLE KEYS */;
/*!40000 ALTER TABLE `metrics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=311 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_07_02_230147_migration_cartalyst_sentinel',1),(11,'2016_06_01_000001_create_oauth_auth_codes_table',1),(21,'2016_06_01_000002_create_oauth_access_tokens_table',1),(31,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),(41,'2016_06_01_000004_create_oauth_clients_table',1),(51,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),(61,'2019_08_19_000000_create_failed_jobs_table',1),(71,'2020_06_15_132634_create_logins_table',1),(81,'2020_06_16_064357_create_categories_table',1),(91,'2020_06_16_093113_create_products_table',1),(101,'2020_06_16_145426_create_states_table',1),(111,'2020_06_17_112758_create_partners_table',1),(121,'2020_06_17_123443_create_transactions_table',1),(131,'2020_06_18_121101_create_deliveries_table',1),(141,'2020_06_18_141642_create_lgas_table',1),(151,'2020_06_19_210102_create_stocks_table',1),(161,'2020_06_20_004345_create_vendors_table',1),(171,'2020_06_22_140731_create_programs_table',1),(181,'2020_06_22_141813_create_metrics_table',1),(191,'2020_06_22_142658_create_surveys_table',1),(201,'2020_06_22_150616_create_question_types_table',1),(211,'2020_06_22_151508_create_responses_table',1),(221,'2020_06_23_103056_create_subcategories_table',1),(231,'2020_06_23_103739_create_survey_types_table',1),(241,'2020_06_23_104117_create_forms_table',1),(251,'2020_06_23_104531_create_submissions_table',1),(261,'2020_06_26_125220_create_questions_table',1),(271,'2020_06_26_204918_create_options_table',1),(281,'2020_06_27_104524_create_answers_table',1),(291,'2020_06_29_233847_create_sms_table',2),(301,'2020_07_04_151207_add_reference_id_answers_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_access_tokens`
--

LOCK TABLES `oauth_access_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
INSERT INTO `oauth_access_tokens` VALUES ('012b1d21913fbf2f6891ed7106bff409e58084aeec0d23fa30833102aadfe1b33bae884df202118c',11,61,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-27 17:13:18','2020-06-27 17:13:18','2020-06-28 17:13:17'),('03ab15d4130955c147308060af52b9deac3f11b876d3d78806e26e7450a14efd19819b3e15f0b120',11,821,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-01 15:21:13','2020-07-01 15:21:13','2020-07-02 15:21:13'),('058bce31f0476e4f8b80ef7824123baa7a86026d9547208abf872a252a36eaab99dfe2339f8b7f9b',121,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 15:17:22','2020-07-03 15:17:22','2020-07-04 15:17:22'),('0ba6c910509ecc8d2fa0d0065a9fb4292a32c93f458667289dc2205477524f151e7ab9f0320fe38a',11,581,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-28 17:48:10','2020-06-28 17:48:10','2020-06-29 17:48:10'),('0d9d0e3c012150b1f2d05200d1039e3054aee206f79ab29a91a2650d063c06299cf7c4e917239e72',11,821,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-01 12:48:57','2020-07-01 12:48:57','2020-07-02 12:48:56'),('1173000298e6a2ebfe3f118bfe770b1dc8a11110d95577ffaaee99a53c9e535ad16d6b36208280c5',131,1161,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 06:23:09','2020-07-04 06:23:09','2020-07-05 06:23:09'),('131913c9a9afc7684423f45c038160f0b82fe721dd017ee3d737b19553851fa91bf382f88ebfb3ed',121,1241,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 15:42:31','2020-07-04 15:42:31','2020-07-05 15:42:31'),('131a00d20e753a8f0a5b81543cf6b02446144636abb67692d7dc2b7a1ec979be8c997ecc923b0ecf',11,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 15:08:58','2020-07-03 15:08:58','2020-07-04 15:08:58'),('167fc13ddbd6b73ea787579b441c5f2132f27d537d8e0f84f533fc27a5fa04c0dfc575ddc7584996',121,1321,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 21:10:03','2020-07-04 21:10:03','2020-07-05 21:10:03'),('182e9f53497d9848f1af07b892782c1b1c1a9802152e76f549380ec27004d841ddb681700432fa94',11,61,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-27 17:59:14','2020-06-27 17:59:14','2020-06-28 17:59:14'),('19e857809e86250b16f55a243716367c2e87bcdc08bb1df2ee525af9d949bcd7668c973583200075',11,821,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-01 08:53:15','2020-07-01 08:53:15','2020-07-02 08:53:15'),('19f9efade0f0081e6ec8a511809fabf6df6077d376585e0aeff3191d0100f85ac4c34748b2f772e3',11,821,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-01 14:48:09','2020-07-01 14:48:09','2020-07-02 14:48:09'),('1c32bb4411e638a16f609a922689df832769599294f5bb9cd1ee7c99fab8ee1a0ee39b3bb4a65305',121,1321,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 21:09:37','2020-07-04 21:09:37','2020-07-05 21:09:37'),('1efc23e559bf0812cdd321c9daa1bff046c3f6249df73a590e33ad9aa3c8ab49df8c156c281d15f3',11,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 11:36:36','2020-07-03 11:36:36','2020-07-04 11:36:36'),('25fabaf94c48faec447e962190a6fe23f84712abdda7326a5a45ae07058acae1a18dc667852fce96',11,61,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-27 19:21:00','2020-06-27 19:21:00','2020-06-28 19:20:59'),('27f4b5f1c997b915503835c75f7172bd6e1c79a5660f76f76ec3ea86cf8f9672d13cbdba1d62abb3',171,1321,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-05 08:23:04','2020-07-05 08:23:04','2020-07-06 08:23:03'),('27fd7f649001570764f3688c06656b79e218b698b54ed17ed6a1902d39ea4cba97612b87abe313cd',11,621,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-29 14:13:13','2020-06-29 14:13:13','2020-06-30 14:13:12'),('2a65ca0f02a6e4114d94da5ce3b965f9db3b23b1bd16e3b756ff5f994a345e3a8935768e31d70f73',11,741,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-30 10:32:27','2020-06-30 10:32:27','2020-07-01 10:32:25'),('2a6c45b6f0f1bd8314020e26add54ee25880a99b8e0a25c5537ef48f2b2b322bad4324d6a5cc472e',121,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 14:48:26','2020-07-03 14:48:26','2020-07-04 14:48:26'),('2d86957aa5d2756a8c25d5e60b25a34dac53048b8558d690782c7e7c55696fc8a1d2bf6c6dd4575d',11,1161,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 03:23:20','2020-07-04 03:23:20','2020-07-05 03:23:20'),('300133e817b66f52885ef9cb4f8e25bd24928ed9eb15b4d8c5eaf9aa905a564cf5abe13110238074',11,21,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-27 16:36:53','2020-06-27 16:36:53','2020-06-28 16:36:53'),('3164b1fd4ed6efb69d8a86ea10e924287d3e2bbb01fb4bd9b39a095310b3028160ad1216d6acc947',11,661,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-29 20:49:32','2020-06-29 20:49:32','2020-06-30 20:49:31'),('3446bb6fb21c4bfdd448f1857e7e307203357a25a1fc64565970d10b463519ef6d5822aa0faf3825',11,821,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-01 09:24:33','2020-07-01 09:24:33','2020-07-02 09:24:32'),('3d0b64e8f6cc60ab4c97fa79430f4a316670f44c17d5d2345f0ff6665086186e983972435626f854',11,1161,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 13:23:54','2020-07-04 13:23:54','2020-07-05 13:23:54'),('3d3cad1642c4eaf77b0d0008a99b382da538aaf86c50499f0b5e2c2b26acc574136cd44ec40093a1',11,941,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-02 17:21:20','2020-07-02 17:21:20','2020-07-03 17:21:20'),('43bcd64a02de45611052dd1e5203ba1f0b099ae5f2772bbc4fcb17199179090b56350632fd9e9847',331,1321,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-05 08:40:19','2020-07-05 08:40:19','2020-07-06 08:40:19'),('443923766227150dce8174ac67807fcae80ea2bbdccd22d9472cded53662d05f7e27081905aa6e09',121,1161,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 15:00:56','2020-07-04 15:00:56','2020-07-05 15:00:56'),('46dac38425cb71be851a2b21e17d2fc3df9846973e3c2f23dbf8e3858f276a22cd10e7d2a0ccb308',11,1161,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 13:12:56','2020-07-04 13:12:56','2020-07-05 13:12:56'),('474e4f97077d0ebd469987b812959fefeec2148f23fc18cee114da908fdf7bbb481067b07bc6d91c',121,1321,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 22:07:18','2020-07-04 22:07:18','2020-07-05 22:07:17'),('479efe1a4fe23cc8e82d70d6474de2e90b3f23188f2243518c2d1cbac52317301eab80cecf038e4d',11,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 15:13:55','2020-07-03 15:13:55','2020-07-04 15:13:55'),('4dee9d5e59329db057a3560ae1f78fbf2a2b6745553ce4248f502733bd00c2c3ab176fa98c6910f7',331,1321,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-05 08:43:20','2020-07-05 08:43:20','2020-07-06 08:43:20'),('4e496d696dd9e4fda570562eaa11fb8902b0c544736cedccfe002fa09358b9cf61fa280cba195ce2',11,901,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-02 11:15:33','2020-07-02 11:15:33','2020-07-03 11:15:33'),('56f3176cec018ec83a7cc7f37c6d9a8f8909f5cc782a252f25048c73f97597404bb4ea01bc378d16',121,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 10:42:43','2020-07-03 10:42:43','2020-07-04 10:42:43'),('5781876fbe63691aec0571e0216ec272327b63b9c444f4decb8e80f023fe7e900d52566a61319e13',11,1161,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 12:56:38','2020-07-04 12:56:38','2020-07-05 12:56:37'),('583f1a7a4e34b53b81c7b4baeb35e3ecbf1736fa60c503d3d845dfde7e30ee76b8fd33cdfca36253',11,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 09:46:51','2020-07-03 09:46:51','2020-07-04 09:46:51'),('5903aceeb64bff8fb7fef68a07174cb513f5446627de49e07968c18ebceea29333c29f910530497b',11,901,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-02 14:54:17','2020-07-02 14:54:17','2020-07-03 14:54:17'),('5c795bc79e411f86d25629b4e48881c127828041ca6473d89a2f8cdbb23f3e529c8015bffcfa4b40',11,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 08:45:21','2020-07-03 08:45:21','2020-07-04 08:45:21'),('5d7402e578eae0da2afad55805e4f82bc2d05587637b8efc84a9a62e0773b847bd253d205a50e7fc',11,61,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-27 17:31:55','2020-06-27 17:31:55','2020-06-28 17:31:55'),('5e348b744a62a9c6597547aaf478cb88af50c56079f054681bc521878cc82284e3f633b86d2b2fde',11,61,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-27 17:35:49','2020-06-27 17:35:49','2020-06-28 17:35:49'),('62b09e25bb2601a11a28cc616bd1bba9070dec18da633d5f1e3c0ec09034ff1893a2398ded6c7b66',11,581,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-28 19:00:26','2020-06-28 19:00:26','2020-06-29 19:00:26'),('64a853128039044214befeb4f637afd23534bcd93844d95ecfbd568bf431c478f765c7e33c9a9c5d',11,941,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-02 17:27:55','2020-07-02 17:27:55','2020-07-03 17:27:54'),('6554e4281d58baa60d5a784a286366ce8f3f65ea3f64f5a302c9a2507076a39cc5a42c1ec94a4829',121,1161,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 14:28:42','2020-07-04 14:28:42','2020-07-05 14:28:42'),('67327b539ce30a5596b2cb5d40173c2e7bbb6bc91b43496e9308f3507971c36b6674a84255e63b34',11,741,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-30 11:37:43','2020-06-30 11:37:43','2020-07-01 11:37:43'),('694e8575fca079d821feb0266293904f19e598db0a1aeef6723265aee4f8e53656e04a8308d63059',11,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 11:38:08','2020-07-03 11:38:08','2020-07-04 11:38:08'),('6953573c4ce6946cf87d1938bbdfaa34ab2fd05acc28bb143ef17e47dcc8ae905bbd7c09d0dfbac6',11,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 08:37:55','2020-07-03 08:37:55','2020-07-04 08:37:55'),('6cba87a4542e95371cac6cf9de6b5777ad34565fcaace0a2b2ca33a4fe94c64e8d2253ce69be5826',11,821,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-01 07:42:11','2020-07-01 07:42:11','2020-07-02 07:42:11'),('6edf71c4240e021e482121bc27152bb96d66494e31041abaf99510fbe94a826a7d6da085e8ceab30',11,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 15:52:39','2020-07-03 15:52:39','2020-07-04 15:52:38'),('79728986b0093912a5ba215e7810fe871f0ef4a190c4c0d8b48e5e703561530422b22222d2415f63',11,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 15:33:50','2020-07-03 15:33:50','2020-07-04 15:33:50'),('7dd9b9664c9aa3b7f40d9c655065e5540213daea379001b249e594fca3ff5b95413260addeb440b0',11,621,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-29 16:21:47','2020-06-29 16:21:47','2020-06-30 16:21:46'),('7e8d221961bc2a4dbe54523ae884b6a870be9fb39121a56cfd8c2a7225475c17fa1a83b7d599c904',11,1161,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 13:16:53','2020-07-04 13:16:53','2020-07-05 13:16:53'),('7ee83f00da987549274093ac3dca9938e822de945349c6b98a6895954e0888e316301bedb2b0aa28',11,621,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-29 14:22:58','2020-06-29 14:22:58','2020-06-30 14:22:58'),('8406726ef2f130d474e7bb4dbd08c9e212e2e85eed1a55d055add25ef3af8779ef157c4c36e110bb',11,1161,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 12:25:39','2020-07-04 12:25:39','2020-07-05 12:25:39'),('84850d2d61f65fde3ded5b93b78d2309b5239e13ea2fb61d4a2dbb88be39fff2dc2a4cc79bbe0079',11,1321,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-05 10:07:25','2020-07-05 10:07:25','2020-07-06 10:07:25'),('84e38b2a06c82b00cff59ecf7ce502621432769c01b3fece37ead5e1b687a9ac9b98d22d9138fd7e',11,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 10:58:09','2020-07-03 10:58:09','2020-07-04 10:58:08'),('894bb27e77d912e602965448dc5c2b4ab301a763181b67b7d0a96dd7d313d513968b003873c1a761',11,821,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-01 16:48:38','2020-07-01 16:48:38','2020-07-02 16:48:37'),('89b466467c3de9c662250265cbfe4a8997a86aae4a747cefa03eb55b58f1178c7dcd55d168415468',11,1281,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 17:43:13','2020-07-04 17:43:13','2020-07-05 17:43:12'),('8abc0a64c3f72e5d28834b84b796cce75fef68ef7974fe303ad4c9d5d7bf3b655a5ba9d3dfaaefed',11,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 14:27:42','2020-07-03 14:27:42','2020-07-04 14:27:42'),('90363c21a91a136cc286d85a4f3a5de4a3b2f98607b810aa5036a8f0c2ac4d755f2e065f0f8bdd11',121,1161,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 15:12:13','2020-07-04 15:12:13','2020-07-05 15:12:13'),('92812495fb2f4f489b246353cbbe54c977884a3b284d1380f70038aaa47c7607393b547ac326082a',11,21,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-27 16:36:41','2020-06-27 16:36:41','2020-06-28 16:36:40'),('954b2a403bdae76c262c8c5c8cc9669e5d4984142d85e22890f9ba3f6806be221247fb6dad160f5f',11,621,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-29 15:18:34','2020-06-29 15:18:34','2020-06-30 15:18:34'),('9b4c9a55c0163ef65a2f03005951e67d2fa60bd7936a5763e1cf1904ced2bd59d674601b58cc7802',11,621,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-29 16:44:16','2020-06-29 16:44:16','2020-06-30 16:44:15'),('9c961bc5a75d1a79d0c0af4fede47c8ff6326dec744c2667cb2b439eabcca8b0d046dde8aa54c2d7',11,741,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-30 09:43:46','2020-06-30 09:43:46','2020-07-01 09:43:46'),('a1230411bcbf2a7528931640e01edc10bae3dc32264ec137c1d29882e641894d231b3bf6cc124959',151,1321,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-05 09:01:34','2020-07-05 09:01:34','2020-07-06 09:01:34'),('a47111021e026022d74b3a4caec940143d16109d46092019830fa36d2c6a0b58fbbe208207d1e9a4',11,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 09:16:34','2020-07-03 09:16:34','2020-07-04 09:16:33'),('a5080634ef82e3f7f9dc2b59c27e4487513d60733d15505bce6eea5ad178d3fae7525d442ace86ad',11,741,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-30 10:52:36','2020-06-30 10:52:36','2020-07-01 10:52:36'),('a84e56718d12cabf236afa2a1125d09268ad49e523d49659aec87baba7cccc3aa6ff4f730a5ba00a',341,1321,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-05 09:46:54','2020-07-05 09:46:54','2020-07-06 09:46:54'),('aa4b9b4ffd634ef861a3fc7ed4c209ae7edcfcb2570a1edbbf369dc2b916b7ac1667f47bcff83b6e',11,1321,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-05 09:52:08','2020-07-05 09:52:08','2020-07-06 09:52:08'),('ae5895b810fc5300b5e071c6c1dbcfee28f1d97eca81f8bfda9723bcacd3937b00cf78e1bc49848d',11,61,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-27 17:33:08','2020-06-27 17:33:08','2020-06-28 17:33:07'),('af2408b9a2df256578ef0bb99660b71be23304817e203223b7f19c429f1938055d099d70a7b1af7f',121,1321,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-05 05:23:02','2020-07-05 05:23:02','2020-07-06 05:23:02'),('b169128f702451b370bab2d3c45c871f2b0721f7ce92fc1ee566f5c960bfc6be3ffc9914f66b40d3',11,61,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-27 17:40:22','2020-06-27 17:40:22','2020-06-28 17:40:22'),('b4f588b3785ca6abb258d7dc1b2ac603131798c47430381cf96accfe9ccc31915fd33a26447b6717',11,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 08:33:56','2020-07-03 08:33:56','2020-07-04 08:33:56'),('b95bbc6da4c4eb099aa84b6cbc02648fbb7016061657dbad00d18523063459e8894105382c23b3bc',11,821,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-01 07:23:57','2020-07-01 07:23:57','2020-07-02 07:23:57'),('bb98cf6b74d24fc0a9a6f48f420a785c9088d52ba7481f44ab3b271db6b40462696e0b98ae25981f',11,21,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-27 16:47:06','2020-06-27 16:47:06','2020-06-28 16:47:06'),('befbacc99768f258e964f14300d783ad377888239df94a83b8b6b475ada0cbb706fad7fe75f8ee93',121,1161,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 15:14:18','2020-07-04 15:14:18','2020-07-05 15:14:18'),('ca400898e13838e486f4f4d301c3e55fd9d5e326e8d10de7cf955e4aba1c304fcdfaebe807439de6',11,1281,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 18:02:56','2020-07-04 18:02:56','2020-07-05 18:02:56'),('cd72f0419313137f9d0f1f83fa3dfcc4121aaf9da8c2f7041460cf01502d126eeb53f40a97ee569c',11,261,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-28 12:04:26','2020-06-28 12:04:26','2020-06-29 12:04:25'),('ce162908add3e3ec66d6e5a9339bbaee736bd15c9fc243b9ccec8248111fdb39d0b67999100fefec',11,1241,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 16:20:50','2020-07-04 16:20:50','2020-07-05 16:20:50'),('cfe28bb3f10443e27e5f0a45ee1355685af6faea786315d9bf30556460b77292b15cb0d74f6ecc98',11,901,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-02 11:15:02','2020-07-02 11:15:02','2020-07-03 11:15:02'),('d0d7b0cde2a1315e05d716227bdc4086745de7f2801f1ff269b045d77c39af9d632f07f539b627da',121,1161,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 15:23:43','2020-07-04 15:23:43','2020-07-05 15:23:43'),('d4b32bc97d99f6a34f6d958d396f4d94e33e5d78a41ee4f9f8f0babbebf311755f2bff7f27d600ed',11,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 15:22:41','2020-07-03 15:22:41','2020-07-04 15:22:41'),('d4e186655c8ae8aeee6454801257b4c886198ead3cdbcf2c399e3271d71393dab1daf14bd4402626',11,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 17:08:10','2020-07-03 17:08:10','2020-07-04 17:08:09'),('d62d8bd4f89f677785e4a655fac0ece48c258024c3faeeec145fc362549be76f1063fb61cbc7b18d',11,581,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-06-28 15:25:15','2020-06-28 15:25:15','2020-06-29 15:25:14'),('d66e4b03b0c499812d2d336f027cf26fe35e7f259b85c8a1fb159fbdc98bd73741688fc5792d21dd',11,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 10:30:09','2020-07-03 10:30:09','2020-07-04 10:30:09'),('d9faf7d029c3f3ea07c252a87ef0607bb8d9f8810ba5a2629c5ea578ea9b5274e81b4c90179b755a',11,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 15:06:22','2020-07-03 15:06:22','2020-07-04 15:06:22'),('dad0cbfcbddbe67d1d984f13d0ae0a1ab3c94fc3fcb73cdb7f3430df4a6523bcb670f96f0184a3a9',11,941,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-02 18:03:12','2020-07-02 18:03:12','2020-07-03 18:03:11'),('dbde73c7a3c3195d37b5e04b2cb7d81ce61f7609935434622465acca4147fa15a2989d6c78c5034c',131,1161,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 13:09:57','2020-07-04 13:09:57','2020-07-05 13:09:57'),('e4b8c944b37da7454c8a62715258939021e278b25b9d1223e9c19e2497c2732a15d64c0f79d81d2b',11,821,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-01 10:02:17','2020-07-01 10:02:17','2020-07-02 10:02:16'),('e852e996fd0799d38e15bb12834c843200c86939b1f69518622f32720e8d32d40bacc11027ce56d8',11,941,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-02 16:08:17','2020-07-02 16:08:17','2020-07-03 16:08:16'),('e864c59df1d22b3b7c72893de1f57854e287624e5d274494b3fe2c64f1652b6de069e811ede7e110',131,1161,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-04 06:25:52','2020-07-04 06:25:52','2020-07-05 06:25:52'),('f1179eb02595f058871bc544baf9ffdb0ae68af70a75c6bea60768793e33852f5f06f1693965759e',11,821,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-01 08:57:34','2020-07-01 08:57:34','2020-07-02 08:57:34'),('f3be171728acf8e75e47169f4e7e97de2599142570dbabb1008b58eac7a4f55e08cbf6d22f8f48fc',11,1121,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-03 11:11:09','2020-07-03 11:11:09','2020-07-04 11:11:08'),('fadeb759f8d0f06590f14779681b635ac56eddcf40baf232b95665436fbf2538f7db4e7749a25323',341,1321,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-05 08:47:48','2020-07-05 08:47:48','2020-07-06 08:47:48'),('fc1a843dbfafe117f69069035433f2cf4ade826e08252878e28da5ec4ed6634a1b24c9972eb317c4',171,1321,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-05 08:21:36','2020-07-05 08:21:36','2020-07-06 08:21:36'),('fd1c93bf3703bd13b5775f700414a0f4a420dda81488b045cea6209d1fcad613aa151436bf153017',11,941,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-02 18:36:55','2020-07-02 18:36:55','2020-07-03 18:36:55'),('fd3903365c2f117950ce5b65017b5d8450f6584d392094bafcf0317bfde44dcaeb3c726c37fd2c5e',11,821,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-01 17:47:40','2020-07-01 17:47:40','2020-07-02 17:47:40'),('fdbd6e1e91726e364bfeecbe89d8882baa3dbd6826413f49bd6da334084462f2d7d738eb420d21c7',131,1321,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-05 09:58:30','2020-07-05 09:58:30','2020-07-06 09:58:29'),('fed4b74e82fcb34a05967d0a35c8cb6d7696f5a78c84a5c1e21005a4211bead772d8095c8151c04a',121,1321,'71H4FfzAIliHzmrWxSvPhL8V3JKkcZouHRcoewJQ','[]',0,'2020-07-05 08:03:12','2020-07-05 08:03:12','2020-07-06 08:03:12');
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_auth_codes`
--

LOCK TABLES `oauth_auth_codes` WRITE;
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1341 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_clients`
--

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
INSERT INTO `oauth_clients` VALUES (1,NULL,'UNICEF Personal Access Client','lxzIUGspI4VWwOg7J7LLNxnZreqtM09GSFf3XScR',NULL,'http://localhost',1,0,0,'2020-06-27 16:36:18','2020-06-27 16:36:18'),(11,NULL,'UNICEF Password Grant Client','cLKvBDGGiDbG0TloVeQ7Y7ZlzC8ghLOtRmgLIHdR','users','http://localhost',0,1,0,'2020-06-27 16:36:18','2020-06-27 16:36:18'),(21,NULL,'UNICEF Personal Access Client','sRpVziH0mujG6fOyRBX4EIVpeFHBz967Xs6vGSAk',NULL,'http://localhost',1,0,0,'2020-06-27 16:36:36','2020-06-27 16:36:36'),(31,NULL,'UNICEF Password Grant Client','Yic9YiAIkCTFpWOvKbqvvCOCYidRacygihfCd9hU','users','http://localhost',0,1,0,'2020-06-27 16:36:36','2020-06-27 16:36:36'),(41,NULL,'UNICEF Personal Access Client','bUwd2fmK2qdGcXtvmtTlO4JJ4VgWkK15r4c8bU7E',NULL,'http://localhost',1,0,0,'2020-06-27 17:08:13','2020-06-27 17:08:13'),(51,NULL,'UNICEF Password Grant Client','xjIKa1hb7BTQ829mZzoJyy4JT205fcJt6tNfDrUc','users','http://localhost',0,1,0,'2020-06-27 17:08:13','2020-06-27 17:08:13'),(61,NULL,'UNICEF Personal Access Client','4M5qR9OjZepL1LEKhAF6tD7tcNUfn3p3QXQpaMbI',NULL,'http://localhost',1,0,0,'2020-06-27 17:08:32','2020-06-27 17:08:32'),(71,NULL,'UNICEF Password Grant Client','MfkDTHTW0VbrclWK6uhmkPQ0gWN2xnLi9OvH0uhV','users','http://localhost',0,1,0,'2020-06-27 17:08:32','2020-06-27 17:08:32'),(81,NULL,'UNICEF Personal Access Client','JOkeTFtnqVVsIukm4AQ2XnarzyIrUxpx5JmIng3B',NULL,'http://localhost',1,0,0,'2020-06-27 21:01:27','2020-06-27 21:01:27'),(91,NULL,'UNICEF Password Grant Client','tTj9QKkdtpY1ECpCwf5GDTlTEFBIxDwMaKgPxIPz','users','http://localhost',0,1,0,'2020-06-27 21:01:27','2020-06-27 21:01:27'),(101,NULL,'UNICEF Personal Access Client','VDI21Pglp30o2gE3U0SSIEsBvrJpoR0nWvS9zMAE',NULL,'http://localhost',1,0,0,'2020-06-27 21:02:49','2020-06-27 21:02:49'),(111,NULL,'UNICEF Password Grant Client','KUH6WbqVywduvTKbwZ5it5Ve0Noy2omUM2I0sslJ','users','http://localhost',0,1,0,'2020-06-27 21:02:49','2020-06-27 21:02:49'),(121,NULL,'UNICEF Personal Access Client','6LeCMH2xzGvswe5UXlk54PvrfQ2zrZVQRDVhFqr9',NULL,'http://localhost',1,0,0,'2020-06-27 23:43:57','2020-06-27 23:43:57'),(131,NULL,'UNICEF Password Grant Client','xbkddzWsdBDZgtO8dHHqqRGNM42oCc2U6XiM4sr7','users','http://localhost',0,1,0,'2020-06-27 23:43:57','2020-06-27 23:43:57'),(141,NULL,'UNICEF Personal Access Client','X7lABX2mJlmjOX4qd8Eo0B7iTFOD8tzWeu7pqbOj',NULL,'http://localhost',1,0,0,'2020-06-27 23:44:19','2020-06-27 23:44:19'),(151,NULL,'UNICEF Password Grant Client','fl81Vg2bSso41Ug2c1HNfrXeIxrhSZYvihDibVMj','users','http://localhost',0,1,0,'2020-06-27 23:44:19','2020-06-27 23:44:19'),(161,NULL,'UNICEF Personal Access Client','Ouffd1wXURfy9wa2sBwLXOehDPGRGvjkNbgupJcS',NULL,'http://localhost',1,0,0,'2020-06-27 23:47:19','2020-06-27 23:47:19'),(171,NULL,'UNICEF Password Grant Client','B0CSXobs1laWaPVymk6CBfv8yxwJ9zkFeH0QOC5l','users','http://localhost',0,1,0,'2020-06-27 23:47:19','2020-06-27 23:47:19'),(181,NULL,'UNICEF Personal Access Client','adFWKN6lBv9wk72ZTbSDUtmWfYkt4OIZCjSmvWH7',NULL,'http://localhost',1,0,0,'2020-06-27 23:48:03','2020-06-27 23:48:03'),(191,NULL,'UNICEF Password Grant Client','Y46xbOyQTGkTF11sUEE14BPKV6ZINyC55Tn4vytT','users','http://localhost',0,1,0,'2020-06-27 23:48:03','2020-06-27 23:48:03'),(201,NULL,'UNICEF Personal Access Client','7QH2TTpFQemsIfCp4E8Emys80156ZeakRBYfyApj',NULL,'http://localhost',1,0,0,'2020-06-27 23:51:35','2020-06-27 23:51:35'),(211,NULL,'UNICEF Password Grant Client','J1B6CIw2EiS5uzx96Ot5rA4AxCLUzAogClp2QnOw','users','http://localhost',0,1,0,'2020-06-27 23:51:35','2020-06-27 23:51:35'),(221,NULL,'UNICEF Personal Access Client','znASRMY5SkWcsmd9KhxjvrW15Q8FmnYLqUgtYmf1',NULL,'http://localhost',1,0,0,'2020-06-27 23:51:57','2020-06-27 23:51:57'),(231,NULL,'UNICEF Password Grant Client','J6wiHjcXS2oZMnTX69ktAlJwWnxwsf2gJKn9jaFl','users','http://localhost',0,1,0,'2020-06-27 23:51:57','2020-06-27 23:51:57'),(241,NULL,'UNICEF Personal Access Client','ZqHZWcIKQr1iEjQvJpE7NDd24Wf0OK08oX3L4kEn',NULL,'http://localhost',1,0,0,'2020-06-27 23:54:44','2020-06-27 23:54:44'),(251,NULL,'UNICEF Password Grant Client','z6364MqZnvpHL0nxu9Y4lCeGbHZHJtTH6qp26WfF','users','http://localhost',0,1,0,'2020-06-27 23:54:44','2020-06-27 23:54:44'),(261,NULL,'UNICEF Personal Access Client','6FgNek2Qpk5h0Yv9ktX6Scwg12H54sFNwxqsd4nz',NULL,'http://localhost',1,0,0,'2020-06-27 23:55:04','2020-06-27 23:55:04'),(271,NULL,'UNICEF Password Grant Client','tYOSgJpTnKfnhORLYWq6w9uAvwHyqUImkGQkCYJX','users','http://localhost',0,1,0,'2020-06-27 23:55:04','2020-06-27 23:55:04'),(281,NULL,'UNICEF Personal Access Client','sgyx9PkVdoHoxxyYeytwD9jxNY82nMz8fzwZOAVn',NULL,'http://localhost',1,0,0,'2020-06-28 12:44:53','2020-06-28 12:44:53'),(291,NULL,'UNICEF Password Grant Client','kPKvGviVC5arrrZw6Y09M7ReLF1AetOxZYAZPHNr','users','http://localhost',0,1,0,'2020-06-28 12:44:53','2020-06-28 12:44:53'),(301,NULL,'UNICEF Personal Access Client','S22kPJBgap8KjQY0youjC7HL5wOhI1SRRHhflPqp',NULL,'http://localhost',1,0,0,'2020-06-28 12:45:32','2020-06-28 12:45:32'),(311,NULL,'UNICEF Password Grant Client','HIfanN1grkTuGLAaby0Mgpc6K8kx9PGr6bInpkzr','users','http://localhost',0,1,0,'2020-06-28 12:45:32','2020-06-28 12:45:32'),(321,NULL,'UNICEF Personal Access Client','Un62gxJkOyROqQudX4KrZOvmS7tefSvO0NT9djp3',NULL,'http://localhost',1,0,0,'2020-06-28 12:57:07','2020-06-28 12:57:07'),(331,NULL,'UNICEF Password Grant Client','Ayi711SShC0yrGmXwcKPbOVXhGvG6OXxGRSAo4dp','users','http://localhost',0,1,0,'2020-06-28 12:57:07','2020-06-28 12:57:07'),(341,NULL,'UNICEF Personal Access Client','4mQxuFGuwL64MRHKsEujU1FxThNjvAOkyz7B9tmO',NULL,'http://localhost',1,0,0,'2020-06-28 12:57:31','2020-06-28 12:57:31'),(351,NULL,'UNICEF Password Grant Client','swJm8uYtxE4jZDvyv5R5Y5PT5VeyyZvj8kb9ubfa','users','http://localhost',0,1,0,'2020-06-28 12:57:31','2020-06-28 12:57:31'),(361,NULL,'UNICEF Personal Access Client','UgJg87uqZTstGrIVBKirHR4zSZs5d4uEVfhiB9EA',NULL,'http://localhost',1,0,0,'2020-06-28 13:12:27','2020-06-28 13:12:27'),(371,NULL,'UNICEF Password Grant Client','gFXJzETRudNaQ3xYQB3BidpNqf5EdWHTriT120m3','users','http://localhost',0,1,0,'2020-06-28 13:12:27','2020-06-28 13:12:27'),(381,NULL,'UNICEF Personal Access Client','epSW3nlqoFFeDxt65vnt5KTcdiGfqBv4LQV98cvM',NULL,'http://localhost',1,0,0,'2020-06-28 13:12:46','2020-06-28 13:12:46'),(391,NULL,'UNICEF Password Grant Client','rPFKiIM4g9QGjjpczHNc1BGBhG9LMCgjhxxgSJfZ','users','http://localhost',0,1,0,'2020-06-28 13:12:47','2020-06-28 13:12:47'),(401,NULL,'UNICEF Personal Access Client','6nQ1CAejMbBEMT1Yzbe0SBgYnRdprv6XDIbH8leX',NULL,'http://localhost',1,0,0,'2020-06-28 13:23:07','2020-06-28 13:23:07'),(411,NULL,'UNICEF Password Grant Client','hxxVvJuxy4XtOh7R0CL9fbO0EJOCjJABMiqcX8lR','users','http://localhost',0,1,0,'2020-06-28 13:23:07','2020-06-28 13:23:07'),(421,NULL,'UNICEF Personal Access Client','vssmEvqX4MrzA6HMOQ0OznMVTpiqBtJejRp6f61o',NULL,'http://localhost',1,0,0,'2020-06-28 13:23:41','2020-06-28 13:23:41'),(431,NULL,'UNICEF Password Grant Client','HbqzFbqV74B4ONSgqOz7V2GLLZCpTnnvbOBEk7FP','users','http://localhost',0,1,0,'2020-06-28 13:23:43','2020-06-28 13:23:43'),(441,NULL,'UNICEF Personal Access Client','AD5w5NK52DGaHiXdhOukjCWGuVa0TUXJ0fZCpqnO',NULL,'http://localhost',1,0,0,'2020-06-28 13:32:33','2020-06-28 13:32:33'),(451,NULL,'UNICEF Password Grant Client','dPF93V8tYd1bvmxU0kg4h2Eq1vxVJeQnmxnnbVh0','users','http://localhost',0,1,0,'2020-06-28 13:32:33','2020-06-28 13:32:33'),(461,NULL,'UNICEF Personal Access Client','gnrSirIngKY0x3MtABVQDsjUVBBuwrhs4UVF9tgz',NULL,'http://localhost',1,0,0,'2020-06-28 13:32:54','2020-06-28 13:32:54'),(471,NULL,'UNICEF Password Grant Client','7dqWPBPVfvLArKvQh2PoZqrJ0FEQCdVoYDXJu9aO','users','http://localhost',0,1,0,'2020-06-28 13:32:54','2020-06-28 13:32:54'),(481,NULL,'UNICEF Personal Access Client','sqcLYgMjmXkcrCCmePCPvQbQVibd6MEvzUjWgxbR',NULL,'http://localhost',1,0,0,'2020-06-28 13:56:52','2020-06-28 13:56:52'),(491,NULL,'UNICEF Password Grant Client','4WAydbfc1ypEZwqf7D1JwdipEiGDqXdBLGgOy80n','users','http://localhost',0,1,0,'2020-06-28 13:56:52','2020-06-28 13:56:52'),(501,NULL,'UNICEF Personal Access Client','bzW3m5ioAhif3Mcu3LkqeguMfbijLzACecg5ku6q',NULL,'http://localhost',1,0,0,'2020-06-28 13:57:10','2020-06-28 13:57:10'),(511,NULL,'UNICEF Password Grant Client','ey9E4zNdgMxSrloeNVaBN2aK4QKNii4NXUjccN14','users','http://localhost',0,1,0,'2020-06-28 13:57:11','2020-06-28 13:57:11'),(521,NULL,'UNICEF Personal Access Client','g8f4o8awBX8eaIPVF8oTDdx1dJDh3Mh4ZagRxxrj',NULL,'http://localhost',1,0,0,'2020-06-28 14:34:17','2020-06-28 14:34:17'),(531,NULL,'UNICEF Password Grant Client','dctlo98Ze4NqnMggJB7r6xBVwT5obxEH51NvBBFy','users','http://localhost',0,1,0,'2020-06-28 14:34:17','2020-06-28 14:34:17'),(541,NULL,'UNICEF Personal Access Client','gQMNFfwJ8Fd2aH8HxKfNz5qGquyQ8JZeje003WDz',NULL,'http://localhost',1,0,0,'2020-06-28 14:34:37','2020-06-28 14:34:37'),(551,NULL,'UNICEF Password Grant Client','lVqdigtxQOM1NBmOwIBT4gxIO6Nof0Def0XsJmkJ','users','http://localhost',0,1,0,'2020-06-28 14:34:37','2020-06-28 14:34:37'),(561,NULL,'UNICEF Personal Access Client','jqrTT21vhUTZmH9uqmfOkrQlSvVwjWWmcpdELFCM',NULL,'http://localhost',1,0,0,'2020-06-28 15:06:45','2020-06-28 15:06:45'),(571,NULL,'UNICEF Password Grant Client','juqIAUlzhSWroAXULzxldaOcDx8r6irR4AQh14QD','users','http://localhost',0,1,0,'2020-06-28 15:06:45','2020-06-28 15:06:45'),(581,NULL,'UNICEF Personal Access Client','eY1yordqBnTMu5dsbSBaX3rmMsQ8wXBqDKQLJZC0',NULL,'http://localhost',1,0,0,'2020-06-28 15:07:05','2020-06-28 15:07:05'),(591,NULL,'UNICEF Password Grant Client','ILnWb2pWdDx2wRX5dHGluMUdp2kY8xnEwoQVvP2b','users','http://localhost',0,1,0,'2020-06-28 15:07:05','2020-06-28 15:07:05'),(601,NULL,'UNICEF Personal Access Client','9IlmNu0ezo8w1EDAABsLusvoDeIUOL0YMGTrl9DD',NULL,'http://localhost',1,0,0,'2020-06-28 20:24:05','2020-06-28 20:24:05'),(611,NULL,'UNICEF Password Grant Client','voCJoiFUKgCBbKrldCrLSFmu7iQqpIaAdnVbd6g3','users','http://localhost',0,1,0,'2020-06-28 20:24:05','2020-06-28 20:24:05'),(621,NULL,'UNICEF Personal Access Client','AqWEycLRMOAdxG2ndVSTWeMqwwu5Yjjm42XVPj5A',NULL,'http://localhost',1,0,0,'2020-06-28 20:24:38','2020-06-28 20:24:38'),(631,NULL,'UNICEF Password Grant Client','eNrYN02jb2e3T2KRA5i46FRsmptjxH6zKIrnyzcT','users','http://localhost',0,1,0,'2020-06-28 20:24:38','2020-06-28 20:24:38'),(641,NULL,'UNICEF Personal Access Client','Vdr5wWI5BbCBRuVUAYd37U2lXjuEBRqmkp6GhYIl',NULL,'http://localhost',1,0,0,'2020-06-29 20:37:26','2020-06-29 20:37:26'),(651,NULL,'UNICEF Password Grant Client','Qyxl1EFW8kBWrfgnXSrImkrdHTS8e9VU1XX8HKFC','users','http://localhost',0,1,0,'2020-06-29 20:37:26','2020-06-29 20:37:26'),(661,NULL,'UNICEF Personal Access Client','jzHr3gfHscnVm42ujsPrT2O6VTYAE8iepYkhumX3',NULL,'http://localhost',1,0,0,'2020-06-29 20:44:12','2020-06-29 20:44:12'),(671,NULL,'UNICEF Password Grant Client','5KAbEQGUrspTzO46dLq14ACpkEbOWzNF0wiXJwgn','users','http://localhost',0,1,0,'2020-06-29 20:44:12','2020-06-29 20:44:12'),(681,NULL,'UNICEF Personal Access Client','NzsTftNq8IU68lV90vZ2jc3aTe4JsaFTsnkQV64c',NULL,'http://localhost',1,0,0,'2020-06-29 22:10:48','2020-06-29 22:10:48'),(691,NULL,'UNICEF Password Grant Client','N3VWPnpjMEIuj1JMWsQCncW1NYdu9qcPF1jtxfPc','users','http://localhost',0,1,0,'2020-06-29 22:10:48','2020-06-29 22:10:48'),(701,NULL,'UNICEF Personal Access Client','gkR6irpegMlMB6hFsvs26TElLVA2xX4G6MVRU7YO',NULL,'http://localhost',1,0,0,'2020-06-29 22:11:06','2020-06-29 22:11:06'),(711,NULL,'UNICEF Password Grant Client','pnfzoQglr89T9piFMVYWLPG0hfhWfhoxmLlW7yqH','users','http://localhost',0,1,0,'2020-06-29 22:11:06','2020-06-29 22:11:06'),(721,NULL,'UNICEF Personal Access Client','etqxrewPLpAPRPviRLlkJrYWeqoMl1tXlCYKdKV1',NULL,'http://localhost',1,0,0,'2020-06-29 23:16:54','2020-06-29 23:16:54'),(731,NULL,'UNICEF Password Grant Client','rjvXa3BfeHy92LvYUNLhB4TKuas0SdASHPyWFDyR','users','http://localhost',0,1,0,'2020-06-29 23:16:54','2020-06-29 23:16:54'),(741,NULL,'UNICEF Personal Access Client','OBatvZTNrToIouAeBIogcP7YmBuLE8ULTeba1T3Y',NULL,'http://localhost',1,0,0,'2020-06-29 23:17:16','2020-06-29 23:17:16'),(751,NULL,'UNICEF Password Grant Client','llBq7TrEDHBB27s17aVSlWbzVNxrEpvFXv4l5yrn','users','http://localhost',0,1,0,'2020-06-29 23:17:16','2020-06-29 23:17:16'),(761,NULL,'UNICEF Personal Access Client','usZF87ozlVJQd9XQLKwYmlVETNrISaIlHhVhsL6A',NULL,'http://localhost',1,0,0,'2020-06-30 13:39:45','2020-06-30 13:39:45'),(771,NULL,'UNICEF Password Grant Client','p88TwctuUPVMgo48qWcvTnmnTRa6EcaeRp3vtIce','users','http://localhost',0,1,0,'2020-06-30 13:39:45','2020-06-30 13:39:45'),(781,NULL,'UNICEF Personal Access Client','evuhCinZROjNUD0usfId2jJ6VFhn7s1uDUpd68wU',NULL,'http://localhost',1,0,0,'2020-06-30 13:40:20','2020-06-30 13:40:20'),(791,NULL,'UNICEF Password Grant Client','b7y8blO55AnUAJmsmcMv9Oh5VeaM5V9stLwyobNY','users','http://localhost',0,1,0,'2020-06-30 13:40:20','2020-06-30 13:40:20'),(801,NULL,'UNICEF Personal Access Client','6oEm6OKLEV4R1MSC35jaQvth5tLH2iFIykGvhr2E',NULL,'http://localhost',1,0,0,'2020-06-30 13:56:23','2020-06-30 13:56:23'),(811,NULL,'UNICEF Password Grant Client','dGHPT52KZZyoHrr7eFTYed4ZkyVEc1aoezjMwLAA','users','http://localhost',0,1,0,'2020-06-30 13:56:23','2020-06-30 13:56:23'),(821,NULL,'UNICEF Personal Access Client','2ip5neqcMjIfLL1mbSpcVUSpX35EyIbB1Ts0Tarw',NULL,'http://localhost',1,0,0,'2020-06-30 13:56:44','2020-06-30 13:56:44'),(831,NULL,'UNICEF Password Grant Client','LhyM2AWq1NJAJiKdX0ZuLqnU9aX9mDrRXMDMd9bF','users','http://localhost',0,1,0,'2020-06-30 13:56:44','2020-06-30 13:56:44'),(841,NULL,'UNICEF Personal Access Client','crrrG3QcjgH126IE1xcbPTwCTqikhJCjXAGbxhWP',NULL,'http://localhost',1,0,0,'2020-07-01 21:17:49','2020-07-01 21:17:49'),(851,NULL,'UNICEF Password Grant Client','VkKdy3mAhXbFCEHsx7AAPv0cDTxsjCxkpyU9D6cQ','users','http://localhost',0,1,0,'2020-07-01 21:17:49','2020-07-01 21:17:49'),(861,NULL,'UNICEF Personal Access Client','HUFsazV1agj6HvZXYcMkptgcpbH3zFCp9tWtfFOd',NULL,'http://localhost',1,0,0,'2020-07-01 21:22:49','2020-07-01 21:22:49'),(871,NULL,'UNICEF Password Grant Client','q7TPclDJ0IA5llFB4gDAHTjs86sgs2CG7P54ZCaf','users','http://localhost',0,1,0,'2020-07-01 21:22:49','2020-07-01 21:22:49'),(881,NULL,'UNICEF Personal Access Client','AunAvOr7co0PZoGswoGcpQdmQ8lEMdsGTYF3X6uX',NULL,'http://localhost',1,0,0,'2020-07-02 06:50:46','2020-07-02 06:50:46'),(891,NULL,'UNICEF Password Grant Client','H8XoWhnZsVApRmELpPfRtTnDplj1H5sv2HNfQTVx','users','http://localhost',0,1,0,'2020-07-02 06:50:46','2020-07-02 06:50:46'),(901,NULL,'UNICEF Personal Access Client','ilY66WUDQQ2Mu09heUbGhhfBJnMwoPdqjYVJ4DVA',NULL,'http://localhost',1,0,0,'2020-07-02 06:51:07','2020-07-02 06:51:07'),(911,NULL,'UNICEF Password Grant Client','3UQghRAN0LcMoJtGPVmtisNHlh8qk9zkcTGjv93p','users','http://localhost',0,1,0,'2020-07-02 06:51:07','2020-07-02 06:51:07'),(921,NULL,'UNICEF Personal Access Client','AGTSHkcaRMzvGeKWW2q9agwU1lY3Wu28rnK3iWIp',NULL,'http://localhost',1,0,0,'2020-07-02 15:33:50','2020-07-02 15:33:50'),(931,NULL,'UNICEF Password Grant Client','JXDY6iSr8NESdz4xpd2UrLPImEZSHUEtWLNUn1ki','users','http://localhost',0,1,0,'2020-07-02 15:33:50','2020-07-02 15:33:50'),(941,NULL,'UNICEF Personal Access Client','PgGZYNyI3lByeOPnsTn7JzwHEVH4MDvkxRc9GQ14',NULL,'http://localhost',1,0,0,'2020-07-02 15:34:18','2020-07-02 15:34:18'),(951,NULL,'UNICEF Password Grant Client','81vz9VBEQQhutL4uv20V4qa43svGl2TF8abSCv4G','users','http://localhost',0,1,0,'2020-07-02 15:34:18','2020-07-02 15:34:18'),(961,NULL,'UNICEF Personal Access Client','CeZiWOsS09kuFr2038kkuv9QJATj4xkQiqUcV7rx',NULL,'http://localhost',1,0,0,'2020-07-02 20:37:46','2020-07-02 20:37:46'),(971,NULL,'UNICEF Password Grant Client','XLP5x50AiOjyF6ALvrF31zPtH61h4po2gwXF05Oh','users','http://localhost',0,1,0,'2020-07-02 20:37:46','2020-07-02 20:37:46'),(981,NULL,'UNICEF Personal Access Client','5ZVf7WKMomrHlHxQqd3HQ5Dxbw4F0GB972Jpor7K',NULL,'http://localhost',1,0,0,'2020-07-02 21:12:53','2020-07-02 21:12:53'),(991,NULL,'UNICEF Password Grant Client','YERlTjZSeSt9zgXopcnWVgc52OZqSrQJor50qL91','users','http://localhost',0,1,0,'2020-07-02 21:12:53','2020-07-02 21:12:53'),(1001,NULL,'UNICEF Personal Access Client','OrnFg0yz9SDCotI8F8BfKnY0ZYBnVHpLqzQUVTuR',NULL,'http://localhost',1,0,0,'2020-07-02 21:13:14','2020-07-02 21:13:14'),(1011,NULL,'UNICEF Password Grant Client','XeBE2ESHOrMPsN93yqEcgIXRK24GqXQ72bVi9eYI','users','http://localhost',0,1,0,'2020-07-02 21:13:14','2020-07-02 21:13:14'),(1021,NULL,'UNICEF Personal Access Client','txz4YM8iwUfiFq4YE0fr2W3mMoUYN58GgHoQkr4a',NULL,'http://localhost',1,0,0,'2020-07-02 21:22:20','2020-07-02 21:22:20'),(1031,NULL,'UNICEF Password Grant Client','1KwT7oRRftYOEZsYiZD38x8rlY2EXC2CY93v5PcX','users','http://localhost',0,1,0,'2020-07-02 21:22:20','2020-07-02 21:22:20'),(1041,NULL,'UNICEF Personal Access Client','BvjEWcUx3WFPMxCOCf8IdlX9HLzw5QdTmERoMWfk',NULL,'http://localhost',1,0,0,'2020-07-02 21:22:41','2020-07-02 21:22:41'),(1051,NULL,'UNICEF Password Grant Client','zX3UcWXsWIuqmeJoG0Cq3EI2VrGGyWyP6PR0ATAU','users','http://localhost',0,1,0,'2020-07-02 21:22:41','2020-07-02 21:22:41'),(1061,NULL,'UNICEF Personal Access Client','ZTf56oOlEyAbbC4QDUVKGOWhrFnjQiwSuFGG31Kq',NULL,'http://localhost',1,0,0,'2020-07-02 21:33:44','2020-07-02 21:33:44'),(1071,NULL,'UNICEF Password Grant Client','HMhxNJpCK9n8EAUirCXXtbaP6nOeou86FPPgsPzx','users','http://localhost',0,1,0,'2020-07-02 21:33:44','2020-07-02 21:33:44'),(1081,NULL,'UNICEF Personal Access Client','1QUufubGpJWEFQsm9jGSP8FgpEENz5sXTw5iOcZt',NULL,'http://localhost',1,0,0,'2020-07-02 21:34:03','2020-07-02 21:34:03'),(1091,NULL,'UNICEF Password Grant Client','fvKK9IEifcY8jjVYDZQjKa4BfYXLhwVMRf2s8qQr','users','http://localhost',0,1,0,'2020-07-02 21:34:03','2020-07-02 21:34:03'),(1101,NULL,'UNICEF Personal Access Client','ysc4GRbrQYf9fTxfjjm6BDxhXwrKtvtGRDrPC0bw',NULL,'http://localhost',1,0,0,'2020-07-02 22:47:11','2020-07-02 22:47:11'),(1111,NULL,'UNICEF Password Grant Client','57ijaCwnT3Iqih4hu7TgERbVoOYQjJmwgOkNjAkI','users','http://localhost',0,1,0,'2020-07-02 22:47:11','2020-07-02 22:47:11'),(1121,NULL,'UNICEF Personal Access Client','pZe6b6oCfCryGg3kLf37srhq6KAXshMT8XIWkBce',NULL,'http://localhost',1,0,0,'2020-07-02 22:47:30','2020-07-02 22:47:30'),(1131,NULL,'UNICEF Password Grant Client','c8P5HTUoUhrhoZRs5Cdoqv682gKlVYmKfhArnd0B','users','http://localhost',0,1,0,'2020-07-02 22:47:30','2020-07-02 22:47:30'),(1141,NULL,'UNICEF Personal Access Client','gjHiBOwihhM1sAbzDSVV1ZJ9LpDk1fyM0GLm5ui1',NULL,'http://localhost',1,0,0,'2020-07-03 20:08:16','2020-07-03 20:08:16'),(1151,NULL,'UNICEF Password Grant Client','1pW3sKZrZKALDHM8V4uIan7j5xNCH8Nw1XWVhVUQ','users','http://localhost',0,1,0,'2020-07-03 20:08:16','2020-07-03 20:08:16'),(1161,NULL,'UNICEF Personal Access Client','Qd94IqfQt5mqsyc21YM4owpdomxxpVtmlQruSMrb',NULL,'http://localhost',1,0,0,'2020-07-03 20:08:35','2020-07-03 20:08:35'),(1171,NULL,'UNICEF Password Grant Client','sAJujMlBTXq1U8fcA75yItNp6MKpp45mNhW3yske','users','http://localhost',0,1,0,'2020-07-03 20:08:35','2020-07-03 20:08:35'),(1181,NULL,'UNICEF Personal Access Client','LmEbjgnRp15LjO6qMNKaFGyUobweNqM5uQXjwvGJ',NULL,'http://localhost',1,0,0,'2020-07-04 15:37:29','2020-07-04 15:37:29'),(1191,NULL,'UNICEF Password Grant Client','2RkhrWaoa3osJD95LNJYSBx0w8moURCvCDtNgGcZ','users','http://localhost',0,1,0,'2020-07-04 15:37:29','2020-07-04 15:37:29'),(1201,NULL,'UNICEF Personal Access Client','IRImug4nno4vgcULb6AhQox5gUnfqFVp7aFM3BSU',NULL,'http://localhost',1,0,0,'2020-07-04 15:37:50','2020-07-04 15:37:50'),(1211,NULL,'UNICEF Password Grant Client','td6TbovDULtLZRCKuUVzaAK5DdP5grtfGNFajcrA','users','http://localhost',0,1,0,'2020-07-04 15:37:50','2020-07-04 15:37:50'),(1221,NULL,'UNICEF Personal Access Client','G0QQYYK7q21GbBKa8U4hVMfvljqZ53B6Un4aC62J',NULL,'http://localhost',1,0,0,'2020-07-04 15:38:44','2020-07-04 15:38:44'),(1231,NULL,'UNICEF Password Grant Client','FwAeV2DswRiej10cpGjobtFwEgNVfwqreV7NiMGX','users','http://localhost',0,1,0,'2020-07-04 15:38:44','2020-07-04 15:38:44'),(1241,NULL,'UNICEF Personal Access Client','PG5Y6wCuIWFzATCfdNvtVLNsA50Uva0gORJGTasw',NULL,'http://localhost',1,0,0,'2020-07-04 15:39:00','2020-07-04 15:39:00'),(1251,NULL,'UNICEF Password Grant Client','j9PafaOk9TKeOCIoopGKgD3ZOmeeqJutSdUXhPB2','users','http://localhost',0,1,0,'2020-07-04 15:39:00','2020-07-04 15:39:00'),(1261,NULL,'UNICEF Personal Access Client','lTpNalLZ6SMuFu5lQ64X1CyvXgi9TulfI6Ss6pne',NULL,'http://localhost',1,0,0,'2020-07-04 17:22:36','2020-07-04 17:22:36'),(1271,NULL,'UNICEF Password Grant Client','bscb9gUWhla6GcJfkVNjGV3aTGx4bBbrofEQ0hYo','users','http://localhost',0,1,0,'2020-07-04 17:22:36','2020-07-04 17:22:36'),(1281,NULL,'UNICEF Personal Access Client','Ww2OrxXDgYqtXCLz1AjzQPrPmHwpczNxayYXrZDo',NULL,'http://localhost',1,0,0,'2020-07-04 17:22:53','2020-07-04 17:22:53'),(1291,NULL,'UNICEF Password Grant Client','3VA2Hta6Y60KLFZSC6OtO2rrcZ7npZ3VdZPS1EJU','users','http://localhost',0,1,0,'2020-07-04 17:22:53','2020-07-04 17:22:53'),(1301,NULL,'UNICEF Personal Access Client','2DnX1QEGZi3qbpa8LPkvpJm8m6LwDTXQv1NQq0iz',NULL,'http://localhost',1,0,0,'2020-07-04 20:04:16','2020-07-04 20:04:16'),(1311,NULL,'UNICEF Password Grant Client','XpvhtTyhuKCtmolPRBHuXszqAybZA1TObNR5uQ7x','users','http://localhost',0,1,0,'2020-07-04 20:04:16','2020-07-04 20:04:16'),(1321,NULL,'UNICEF Personal Access Client','zJc8Ha2hT3BxLosmSBspAGIDX9mgxmDg4QBQ0pTU',NULL,'http://localhost',1,0,0,'2020-07-04 20:04:34','2020-07-04 20:04:34'),(1331,NULL,'UNICEF Password Grant Client','mL2POdJQx7KKIVDmjjq1Ky2f2iM0pghMbEsh42Sp','users','http://localhost',0,1,0,'2020-07-04 20:04:34','2020-07-04 20:04:34');
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=671 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_personal_access_clients`
--

LOCK TABLES `oauth_personal_access_clients` WRITE;
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
INSERT INTO `oauth_personal_access_clients` VALUES (1,1,'2020-06-27 16:36:18','2020-06-27 16:36:18'),(11,21,'2020-06-27 16:36:36','2020-06-27 16:36:36'),(21,41,'2020-06-27 17:08:13','2020-06-27 17:08:13'),(31,61,'2020-06-27 17:08:32','2020-06-27 17:08:32'),(41,81,'2020-06-27 21:01:27','2020-06-27 21:01:27'),(51,101,'2020-06-27 21:02:49','2020-06-27 21:02:49'),(61,121,'2020-06-27 23:43:57','2020-06-27 23:43:57'),(71,141,'2020-06-27 23:44:19','2020-06-27 23:44:19'),(81,161,'2020-06-27 23:47:19','2020-06-27 23:47:19'),(91,181,'2020-06-27 23:48:03','2020-06-27 23:48:03'),(101,201,'2020-06-27 23:51:35','2020-06-27 23:51:35'),(111,221,'2020-06-27 23:51:57','2020-06-27 23:51:57'),(121,241,'2020-06-27 23:54:44','2020-06-27 23:54:44'),(131,261,'2020-06-27 23:55:04','2020-06-27 23:55:04'),(141,281,'2020-06-28 12:44:53','2020-06-28 12:44:53'),(151,301,'2020-06-28 12:45:32','2020-06-28 12:45:32'),(161,321,'2020-06-28 12:57:07','2020-06-28 12:57:07'),(171,341,'2020-06-28 12:57:31','2020-06-28 12:57:31'),(181,361,'2020-06-28 13:12:27','2020-06-28 13:12:27'),(191,381,'2020-06-28 13:12:47','2020-06-28 13:12:47'),(201,401,'2020-06-28 13:23:07','2020-06-28 13:23:07'),(211,421,'2020-06-28 13:23:43','2020-06-28 13:23:43'),(221,441,'2020-06-28 13:32:33','2020-06-28 13:32:33'),(231,461,'2020-06-28 13:32:54','2020-06-28 13:32:54'),(241,481,'2020-06-28 13:56:52','2020-06-28 13:56:52'),(251,501,'2020-06-28 13:57:11','2020-06-28 13:57:11'),(261,521,'2020-06-28 14:34:17','2020-06-28 14:34:17'),(271,541,'2020-06-28 14:34:37','2020-06-28 14:34:37'),(281,561,'2020-06-28 15:06:45','2020-06-28 15:06:45'),(291,581,'2020-06-28 15:07:05','2020-06-28 15:07:05'),(301,601,'2020-06-28 20:24:05','2020-06-28 20:24:05'),(311,621,'2020-06-28 20:24:38','2020-06-28 20:24:38'),(321,641,'2020-06-29 20:37:26','2020-06-29 20:37:26'),(331,661,'2020-06-29 20:44:12','2020-06-29 20:44:12'),(341,681,'2020-06-29 22:10:48','2020-06-29 22:10:48'),(351,701,'2020-06-29 22:11:06','2020-06-29 22:11:06'),(361,721,'2020-06-29 23:16:54','2020-06-29 23:16:54'),(371,741,'2020-06-29 23:17:16','2020-06-29 23:17:16'),(381,761,'2020-06-30 13:39:45','2020-06-30 13:39:45'),(391,781,'2020-06-30 13:40:20','2020-06-30 13:40:20'),(401,801,'2020-06-30 13:56:23','2020-06-30 13:56:23'),(411,821,'2020-06-30 13:56:44','2020-06-30 13:56:44'),(421,841,'2020-07-01 21:17:49','2020-07-01 21:17:49'),(431,861,'2020-07-01 21:22:49','2020-07-01 21:22:49'),(441,881,'2020-07-02 06:50:46','2020-07-02 06:50:46'),(451,901,'2020-07-02 06:51:07','2020-07-02 06:51:07'),(461,921,'2020-07-02 15:33:50','2020-07-02 15:33:50'),(471,941,'2020-07-02 15:34:18','2020-07-02 15:34:18'),(481,961,'2020-07-02 20:37:46','2020-07-02 20:37:46'),(491,981,'2020-07-02 21:12:53','2020-07-02 21:12:53'),(501,1001,'2020-07-02 21:13:14','2020-07-02 21:13:14'),(511,1021,'2020-07-02 21:22:20','2020-07-02 21:22:20'),(521,1041,'2020-07-02 21:22:41','2020-07-02 21:22:41'),(531,1061,'2020-07-02 21:33:44','2020-07-02 21:33:44'),(541,1081,'2020-07-02 21:34:03','2020-07-02 21:34:03'),(551,1101,'2020-07-02 22:47:11','2020-07-02 22:47:11'),(561,1121,'2020-07-02 22:47:30','2020-07-02 22:47:30'),(571,1141,'2020-07-03 20:08:16','2020-07-03 20:08:16'),(581,1161,'2020-07-03 20:08:35','2020-07-03 20:08:35'),(591,1181,'2020-07-04 15:37:29','2020-07-04 15:37:29'),(601,1201,'2020-07-04 15:37:50','2020-07-04 15:37:50'),(611,1221,'2020-07-04 15:38:44','2020-07-04 15:38:44'),(621,1241,'2020-07-04 15:39:00','2020-07-04 15:39:00'),(631,1261,'2020-07-04 17:22:36','2020-07-04 17:22:36'),(641,1281,'2020-07-04 17:22:53','2020-07-04 17:22:53'),(651,1301,'2020-07-04 20:04:16','2020-07-04 20:04:16'),(661,1321,'2020-07-04 20:04:34','2020-07-04 20:04:34');
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_refresh_tokens`
--

LOCK TABLES `oauth_refresh_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `options` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `option` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_id` bigint(20) unsigned NOT NULL,
  `question_type_id` bigint(20) unsigned NOT NULL,
  `sub_category_id` bigint(20) unsigned DEFAULT NULL,
  `survey_type_id` bigint(20) unsigned DEFAULT NULL,
  `program_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `options_slug_unique` (`slug`),
  KEY `options_question_id_foreign` (`question_id`),
  KEY `options_question_type_id_foreign` (`question_type_id`),
  KEY `options_sub_category_id_foreign` (`sub_category_id`),
  KEY `options_survey_type_id_foreign` (`survey_type_id`),
  KEY `options_program_id_foreign` (`program_id`),
  CONSTRAINT `options_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`),
  CONSTRAINT `options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`),
  CONSTRAINT `options_question_type_id_foreign` FOREIGN KEY (`question_type_id`) REFERENCES `question_types` (`id`),
  CONSTRAINT `options_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `subcategories` (`id`),
  CONSTRAINT `options_survey_type_id_foreign` FOREIGN KEY (`survey_type_id`) REFERENCES `survey_types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4611 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `options`
--

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` VALUES (1,'ALKALERI','select_option','alkaleri449290488',71,31,1,1,21,'2020-06-28 13:41:38','2020-06-28 13:41:38'),(11,'BAUCHI','select_option','bauchi1234610318',71,31,1,1,21,'2020-06-28 13:42:37','2020-06-28 13:42:37'),(21,'BOGORO','select_option','bogoro1033754506',71,31,1,1,21,'2020-06-28 13:43:43','2020-06-28 13:43:43'),(31,'DAMBAM','select_option','dambam2111362937',71,31,1,1,21,'2020-06-28 13:44:19','2020-06-28 13:44:19'),(41,'DARAZO','select_option','darazo1929421490',71,31,1,1,21,'2020-06-28 13:44:34','2020-06-28 13:44:34'),(51,'DASS','select_option','dass1171206445',71,31,1,1,21,'2020-06-28 13:44:54','2020-06-28 13:44:54'),(61,'GAMAWA','select_option','gamawa424367778',71,31,1,1,21,'2020-06-28 13:45:09','2020-06-28 13:45:09'),(71,'GANJUWA','select_option','ganjuwa1921510220',71,31,1,1,21,'2020-06-28 13:45:25','2020-06-28 13:45:25'),(81,'GIADE','select_option','giade1545224294',71,31,1,1,21,'2020-06-28 13:45:42','2020-06-28 13:45:42'),(91,'ITAS-GADAU','select_option','itas-gadau374072837',71,31,1,1,21,'2020-06-28 13:46:05','2020-06-28 13:46:05'),(101,'JAMAARE','select_option','jamaare717489817',71,31,1,1,21,'2020-06-28 13:46:34','2020-06-28 13:46:34'),(111,'KATAGUM','select_option','katagum1179041398',71,31,1,1,21,'2020-06-28 13:46:51','2020-06-28 13:46:51'),(121,'KIRFI','select_option','kirfi1700667556',71,31,1,1,21,'2020-06-28 13:47:26','2020-06-28 13:47:26'),(131,'MISAU','select_option','misau1852984141',71,31,1,1,21,'2020-06-28 13:48:21','2020-06-28 13:48:21'),(141,'NINGI','select_option','ningi1309603820',71,31,1,1,21,'2020-06-28 13:48:42','2020-06-28 13:48:42'),(151,'SHIRA','select_option','shira1501627860',71,31,1,1,21,'2020-06-28 13:48:56','2020-06-28 13:48:56'),(161,'SHIRA','select_option','shira1426721282',71,31,1,1,21,'2020-06-28 13:48:56','2020-06-28 13:48:56'),(171,'TAFAWA','select_option','tafawa101505819',71,31,1,1,21,'2020-06-28 13:49:09','2020-06-28 13:49:09'),(181,'TORO','select_option','toro377200009',71,31,1,1,21,'2020-06-28 13:49:35','2020-06-28 13:49:35'),(191,'WARJI','select_option','warji924149509',71,31,1,1,21,'2020-06-28 13:49:56','2020-06-28 13:49:56'),(201,'ZAKI','select_option','zaki2073882557',71,31,1,1,21,'2020-06-28 13:50:07','2020-06-28 13:50:07'),(211,'Male','single_choice','male419414673',81,11,1,1,21,'2020-06-28 13:51:43','2020-06-28 13:51:43'),(221,'Female','single_choice','female943859681',81,11,1,1,21,'2020-06-28 13:52:05','2020-06-28 13:52:05'),(231,'Home','21','home1022259453',141,21,1,11,21,'2020-06-28 15:15:20','2020-06-28 15:15:20'),(241,'Community','21','community246622148',141,21,1,11,21,'2020-06-28 15:15:57','2020-06-28 15:15:57'),(251,'Neighbors House','21','neighbors-house307371235',141,21,1,11,21,'2020-06-28 15:16:57','2020-06-28 15:16:57'),(261,'Other','21','other1977755727',141,21,1,11,21,'2020-06-28 15:17:36','2020-06-28 15:17:36'),(271,'Television','21','television1617748514',151,21,1,11,21,'2020-06-28 15:19:48','2020-06-28 15:19:48'),(281,'Radio','21','radio1299348355',151,21,1,11,21,'2020-06-28 15:20:23','2020-06-28 15:20:23'),(291,'70% and above (Excellent)','31','70%-and-above-(excellent)505429679',181,31,1,11,21,'2020-06-28 20:44:34','2020-06-28 20:44:34'),(301,'69 – 60% (Very good)','31','69-–-60%-(very-good)320021189',181,31,1,11,21,'2020-06-28 20:44:56','2020-06-28 20:44:56'),(311,'59 – 50% (Good)','31','59-–-50%-(good)662791845',181,31,1,11,21,'2020-06-28 20:45:17','2020-06-28 20:45:17'),(321,'9 – 30% (Fair)','31','9-–-30%-(fair)1548431787',181,31,1,11,21,'2020-06-28 20:45:33','2020-06-28 20:45:33'),(331,'29 – 0% (Poor)','31','29-–-0%-(poor)1667407358',181,31,1,11,21,'2020-06-28 20:46:05','2020-06-28 20:46:05'),(341,'70% and above (Excellent)','31','70%-and-above-(excellent)1633832606',201,31,1,11,21,'2020-06-28 20:48:22','2020-06-28 20:48:22'),(351,'69 – 60% (Very good)','31','69-–-60%-(very-good)1078722915',201,31,1,11,21,'2020-06-28 20:48:43','2020-06-28 20:48:43'),(361,'59 – 50% (Good)','31','59-–-50%-(good)739442373',201,31,1,11,21,'2020-06-28 20:49:00','2020-06-28 20:49:00'),(371,'49 – 30% (Fair)','31','49-–-30%-(fair)304333613',201,31,1,11,21,'2020-06-28 20:49:18','2020-06-28 20:49:18'),(381,'29 – 0% (Poor)','31','29-–-0%-(poor)1573004799',201,31,1,11,21,'2020-06-28 20:49:40','2020-06-28 20:49:40'),(391,'One week','31','one-week1030429358',211,31,1,11,21,'2020-06-28 20:51:08','2020-06-28 20:51:08'),(401,'Two weeks','31','two-weeks1073190424',211,31,1,11,21,'2020-06-28 20:51:23','2020-06-28 20:51:23'),(411,'Three weeks','31','three-weeks1728344637',211,31,1,11,21,'2020-06-28 20:51:49','2020-06-28 20:51:49'),(421,'Four weeks','31','four-weeks1148127183',211,31,1,11,21,'2020-06-28 20:52:08','2020-06-28 20:52:08'),(431,'Four weeks','31','four-weeks1483343955',211,31,1,11,21,'2020-06-28 20:52:09','2020-06-28 20:52:09'),(441,'Others','31','others828201322',211,31,1,11,21,'2020-06-28 20:52:37','2020-06-28 20:52:37'),(451,'Yes','11','yes834995124',221,11,1,11,21,'2020-06-28 20:54:33','2020-06-28 20:54:33'),(461,'No','11','no1275736509',221,11,1,11,21,'2020-06-28 20:54:43','2020-06-28 20:54:43'),(471,'English Literacy','21','english-literacy1876467464',231,21,1,21,21,'2020-06-28 20:57:18','2020-06-28 20:57:18'),(481,'Hausa Literacy','21','hausa-literacy529634542',231,21,1,21,21,'2020-06-28 20:57:37','2020-06-28 20:57:37'),(491,'Numeracy','21','numeracy805227502',231,21,1,21,21,'2020-06-28 20:57:50','2020-06-28 20:57:50'),(501,'Life skills','21','life-skills1840583407',231,21,1,21,21,'2020-06-28 20:58:47','2020-06-28 20:58:47'),(511,'Basic Sciences','21','basic-sciences659007081',231,21,1,21,21,'2020-06-28 20:59:28','2020-06-28 20:59:28'),(521,'Mathematics','21','mathematics1212102406',231,21,1,21,21,'2020-06-28 21:00:57','2020-06-28 21:00:57'),(531,'Others','21','others1452792766',231,21,1,21,21,'2020-06-28 21:01:18','2020-06-28 21:01:18'),(601,'English literacy','11','english-literacy1337831319',251,11,1,21,21,'2020-06-28 21:06:50','2020-06-28 21:06:50'),(611,'Numeracy','11','numeracy659395447',251,11,1,21,21,'2020-06-28 21:07:07','2020-06-28 21:07:07'),(621,'Hausa Literacy','11','hausa-literacy1634616513',251,11,1,21,21,'2020-06-28 21:07:29','2020-06-28 21:07:29'),(631,'Basic Sciences','11','basic-sciences202642683',251,11,1,21,21,'2020-06-28 21:07:46','2020-06-28 21:07:46'),(641,'Good','11','good483622051',261,11,1,21,21,'2020-06-28 21:09:00','2020-06-28 21:09:00'),(651,'Fair','11','fair564359309',261,11,1,21,21,'2020-06-28 21:09:12','2020-06-28 21:09:12'),(661,'Bad','11','bad1420497726',261,11,1,21,21,'2020-06-28 21:09:20','2020-06-28 21:09:20'),(671,'Good','11','good2098268509',271,11,1,21,21,'2020-06-28 21:10:23','2020-06-28 21:10:23'),(681,'Fair','11','fair612567618',271,11,1,21,21,'2020-06-28 21:10:32','2020-06-28 21:10:32'),(691,'Bad','11','bad1562057014',271,11,1,21,21,'2020-06-28 21:10:46','2020-06-28 21:10:46'),(701,'Good','11','good561474967',281,11,1,21,21,'2020-06-28 21:11:33','2020-06-28 21:11:33'),(711,'Fair','11','fair103275965',281,11,1,21,21,'2020-06-28 21:11:41','2020-06-28 21:11:41'),(721,'Bad','11','bad1733059002',281,11,1,21,21,'2020-06-28 21:11:49','2020-06-28 21:11:49'),(731,'Good','11','good1501524903',291,11,1,21,21,'2020-06-28 21:12:37','2020-06-28 21:12:37'),(741,'Fair','11','fair1461862392',291,11,1,21,21,'2020-06-28 21:12:52','2020-06-28 21:12:52'),(751,'Bad','11','bad1152549736',291,11,1,21,21,'2020-06-28 21:13:02','2020-06-28 21:13:02'),(761,'Good','11','good636267319',291,11,1,21,21,'2020-06-28 21:15:47','2020-06-28 21:15:47'),(771,'Fair','11','fair2072533576',291,11,1,21,21,'2020-06-28 21:15:58','2020-06-28 21:15:58'),(781,'Bad','11','bad212027384',291,11,1,21,21,'2020-06-28 21:16:06','2020-06-28 21:16:06'),(791,'Yes','11','yes852769814',301,11,1,21,21,'2020-06-28 21:17:10','2020-06-28 21:17:10'),(801,'No','11','no309697836',301,11,1,21,21,'2020-06-28 21:17:18','2020-06-28 21:17:18'),(811,'Yes','11','yes1819864751',311,11,1,21,21,'2020-06-28 21:18:14','2020-06-28 21:18:14'),(821,'No','11','no983599531',311,11,1,21,21,'2020-06-28 21:18:26','2020-06-28 21:18:26'),(831,'Yes','11','yes1250535070',331,11,1,31,21,'2020-06-28 21:21:22','2020-06-28 21:21:22'),(841,'No','11','no500303116',331,11,1,31,21,'2020-06-28 21:21:31','2020-06-28 21:21:31'),(851,'Bauchi Radio Corporation (BRC)','21','bauchi-radio-corporation-(brc)2096616645',341,21,1,31,21,'2020-06-28 21:22:33','2020-06-28 21:22:33'),(861,'Bauchi Television (BATV','21','bauchi-television-(batv1486946930',341,21,1,31,21,'2020-06-28 21:22:48','2020-06-28 21:22:48'),(871,'Arewa TV','21','arewa-tv2044342740',341,21,1,31,21,'2020-06-28 21:23:03','2020-06-28 21:23:03'),(881,'Globe FM','21','globe-fm319286805',341,21,1,31,21,'2020-06-28 21:23:25','2020-06-28 21:23:25'),(891,'Excellent','11','excellent715231563',351,11,1,31,21,'2020-06-28 21:24:31','2020-06-28 21:24:31'),(901,'Very good','11','very-good371176879',351,11,1,31,21,'2020-06-28 21:24:46','2020-06-28 21:24:46'),(911,'Good','11','good406860518',351,11,1,31,21,'2020-06-28 21:25:11','2020-06-28 21:25:11'),(921,'Fair','11','fair1937935915',351,11,1,31,21,'2020-06-28 21:25:24','2020-06-28 21:25:24'),(931,'Poor','11','poor52331170',351,11,1,31,21,'2020-06-28 21:25:39','2020-06-28 21:25:39'),(941,'Television','11','television1400484827',371,11,1,31,21,'2020-06-28 21:27:47','2020-06-28 21:27:47'),(951,'Radio','11','radio2144913283',371,11,1,31,21,'2020-06-28 21:28:03','2020-06-28 21:28:03'),(961,'ALKALERI','31','alkaleri81617061',441,31,11,51,21,'2020-06-28 21:37:31','2020-06-28 21:37:31'),(971,'BAUCHI','31','bauchi1722133475',441,31,11,51,21,'2020-06-28 21:37:43','2020-06-28 21:37:43'),(981,'BOGORO','31','bogoro1695961954',441,31,11,51,21,'2020-06-28 21:37:55','2020-06-28 21:37:55'),(991,'DAMBAM','31','dambam2081187910',441,31,11,51,21,'2020-06-28 21:38:10','2020-06-28 21:38:10'),(1001,'DARAZO','31','darazo1807146958',441,31,11,51,21,'2020-06-28 21:38:21','2020-06-28 21:38:21'),(1011,'DASS','31','dass1896010741',441,31,11,51,21,'2020-06-28 21:38:34','2020-06-28 21:38:34'),(1021,'GAMAWA','31','gamawa1058461139',441,31,11,51,21,'2020-06-28 21:38:45','2020-06-28 21:38:45'),(1031,'GANJUWA','31','ganjuwa191164811',441,31,11,51,21,'2020-06-28 21:38:56','2020-06-28 21:38:56'),(1041,'GIADE','31','giade1685153412',441,31,11,51,21,'2020-06-28 21:39:11','2020-06-28 21:39:11'),(1051,'ITAS-GADAU','31','itas-gadau308665393',441,31,11,51,21,'2020-06-28 21:39:31','2020-06-28 21:39:31'),(1061,'JAMAARE','31','jamaare125394468',441,31,11,51,21,'2020-06-28 21:39:47','2020-06-28 21:39:47'),(1071,'KATAGUM','31','katagum917431332',441,31,11,51,21,'2020-06-28 21:39:58','2020-06-28 21:39:58'),(1081,'KIRFI','31','kirfi840051359',441,31,11,51,21,'2020-06-28 21:40:09','2020-06-28 21:40:09'),(1091,'MISAU','31','misau1353619007',441,31,11,51,21,'2020-06-28 21:40:22','2020-06-28 21:40:22'),(1101,'NINGI','31','ningi988223092',441,31,11,51,21,'2020-06-28 21:40:32','2020-06-28 21:40:32'),(1111,'SHIRA','31','shira869601174',441,31,11,51,21,'2020-06-28 21:40:47','2020-06-28 21:40:47'),(1121,'TAFAWA','31','tafawa64940985',441,31,11,51,21,'2020-06-28 21:40:58','2020-06-28 21:40:58'),(1131,'TORO','31','toro2078335001',441,31,11,51,21,'2020-06-28 21:41:08','2020-06-28 21:41:08'),(1141,'WARJI','31','warji2050759425',441,31,11,51,21,'2020-06-28 21:41:19','2020-06-28 21:41:19'),(1151,'ZAKI','31','zaki1115660996',441,31,11,51,21,'2020-06-28 21:41:31','2020-06-28 21:41:31'),(1161,'Boy','11','boy772398190',461,11,11,51,21,'2020-06-28 21:43:16','2020-06-28 21:43:16'),(1171,'Girl','11','girl377492545',461,11,11,51,21,'2020-06-28 21:43:43','2020-06-28 21:43:43'),(1181,'Primary 1','31','primary-11843869730',481,31,11,51,21,'2020-06-28 21:45:50','2020-06-28 21:45:50'),(1191,'Primary 2','31','primary-21765094913',481,31,11,51,21,'2020-06-28 21:45:59','2020-06-28 21:45:59'),(1201,'Primary 3','31','primary-358455066',481,31,11,51,21,'2020-06-28 21:46:09','2020-06-28 21:46:09'),(1211,'Primary 4','31','primary-41327580950',481,31,11,51,21,'2020-06-28 21:46:22','2020-06-28 21:46:22'),(1221,'Primary 5','31','primary-51322571203',481,31,11,51,21,'2020-06-28 21:46:33','2020-06-28 21:46:33'),(1231,'Primary 6','31','primary-644699013',481,31,11,51,21,'2020-06-28 21:46:43','2020-06-28 21:46:43'),(1241,'Primary 6','31','primary-640350986',481,31,11,51,21,'2020-06-28 21:46:56','2020-06-28 21:46:56'),(1251,'JSS 1-3','31','jss-1-3961578761',481,31,11,51,21,'2020-06-28 21:47:11','2020-06-28 21:47:11'),(1261,'Quranic school learner','31','quranic-school-learner411314969',481,31,11,51,21,'2020-06-28 21:47:28','2020-06-28 21:47:28'),(1271,'Other','31','other212691012',481,31,11,51,21,'2020-06-28 21:47:53','2020-06-28 21:47:53'),(1281,'Yes','11','yes567240188',491,11,11,61,21,'2020-06-28 21:48:45','2020-06-28 21:48:45'),(1291,'No','11','no561676676',491,11,11,61,21,'2020-06-28 21:48:55','2020-06-28 21:48:55'),(1301,'Radio set','21','radio-set2135570057',501,21,11,61,21,'2020-06-28 21:51:21','2020-06-28 21:51:21'),(1311,'Television set','21','television-set400585545',501,21,11,61,21,'2020-06-28 21:51:35','2020-06-28 21:51:35'),(1321,'Others','21','others1062985073',501,21,11,61,21,'2020-06-28 21:51:47','2020-06-28 21:51:47'),(1331,'Yes','11','yes49790267',511,11,11,61,21,'2020-06-28 21:52:46','2020-06-28 21:52:46'),(1341,'No','11','no1400798482',511,11,11,61,21,'2020-06-28 21:52:53','2020-06-28 21:52:53'),(1351,'Home','11','home1557069888',531,11,11,61,21,'2020-06-28 21:55:51','2020-06-28 21:55:51'),(1361,'Community','11','community943835848',531,11,11,61,21,'2020-06-28 21:56:21','2020-06-28 21:56:21'),(1371,'Neighbors House','11','neighbors-house1120796828',531,11,11,61,21,'2020-06-28 21:56:51','2020-06-28 21:56:51'),(1381,'Other','11','other1111098800',531,11,11,61,21,'2020-06-28 21:57:11','2020-06-28 21:57:11'),(1391,'Television','21','television1232188121',541,21,11,61,21,'2020-06-28 21:58:50','2020-06-28 21:58:50'),(1401,'Radio','21','radio1991975365',541,21,11,61,21,'2020-06-28 21:59:10','2020-06-28 21:59:10'),(1411,'English Literacy','21','english-literacy982244264',571,21,11,71,21,'2020-06-28 22:02:07','2020-06-28 22:02:07'),(1421,'Hausa Literacy','21','hausa-literacy993242505',571,21,11,71,21,'2020-06-28 22:02:23','2020-06-28 22:02:23'),(1431,'Numeracy','21','numeracy140220458',571,21,11,71,21,'2020-06-28 22:02:45','2020-06-28 22:02:45'),(1441,'Life skills','21','life-skills2105314679',571,21,11,71,21,'2020-06-28 22:03:01','2020-06-28 22:03:01'),(1451,'Basic Sciences','21','basic-sciences322238275',571,21,11,71,21,'2020-06-28 22:03:18','2020-06-28 22:03:18'),(1461,'Mathematics','21','mathematics2121932658',571,21,11,71,21,'2020-06-28 22:03:35','2020-06-28 22:03:35'),(1471,'Others','21','others348949930',571,21,11,71,21,'2020-06-28 22:03:51','2020-06-28 22:03:51'),(1481,'Yes','11','yes1588943083',581,11,11,71,21,'2020-06-28 22:04:40','2020-06-28 22:04:40'),(1491,'A bit','11','a-bit893359024',581,11,11,71,21,'2020-06-28 22:04:50','2020-06-28 22:04:50'),(1501,'No','11','no1791213911',581,11,11,71,21,'2020-06-28 22:05:06','2020-06-28 22:05:06'),(1511,'English Literacy','21','english-literacy568769159',591,21,11,71,21,'2020-06-28 22:06:21','2020-06-28 22:06:21'),(1521,'Hausa Literacy','21','hausa-literacy76499555',591,21,11,71,21,'2020-06-28 22:06:39','2020-06-28 22:06:39'),(1531,'Numeracy','21','numeracy1123479872',591,21,11,71,21,'2020-06-28 22:06:53','2020-06-28 22:06:53'),(1541,'Life skills','21','life-skills1038111525',591,21,11,71,21,'2020-06-28 22:07:09','2020-06-28 22:07:09'),(1551,'Basic Sciences','21','basic-sciences1355294314',591,21,11,71,21,'2020-06-28 22:07:24','2020-06-28 22:07:24'),(1561,'Mathematics','21','mathematics2047338870',591,21,11,71,21,'2020-06-28 22:07:42','2020-06-28 22:07:42'),(1571,'Others','21','others1603417785',591,21,11,71,21,'2020-06-28 22:08:07','2020-06-28 22:08:07'),(1621,'Good','11','good51568110',611,11,11,71,21,'2020-06-28 22:11:29','2020-06-28 22:11:29'),(1631,'Fair','11','fair1566515969',611,11,11,71,21,'2020-06-28 22:11:36','2020-06-28 22:11:36'),(1641,'Bad','11','bad1615849801',611,11,11,71,21,'2020-06-28 22:11:46','2020-06-28 22:11:46'),(1651,'Good','11','good560922481',621,11,11,71,21,'2020-06-28 22:13:09','2020-06-28 22:13:09'),(1661,'Fair','11','fair283429662',621,11,11,71,21,'2020-06-28 22:13:22','2020-06-28 22:13:22'),(1671,'Bad','11','bad658770549',621,11,11,71,21,'2020-06-28 22:13:42','2020-06-28 22:13:42'),(1681,'Other','11','other1909662709',621,11,11,71,21,'2020-06-28 22:13:58','2020-06-28 22:13:58'),(1691,'Yes','11','yes455763318',631,11,11,81,21,'2020-06-29 05:43:20','2020-06-29 05:43:20'),(1701,'Yes','11','yes1407206334',631,11,11,81,21,'2020-06-29 05:43:28','2020-06-29 05:43:28'),(1711,'No','11','no900914204',631,11,11,81,21,'2020-06-29 05:43:36','2020-06-29 05:43:36'),(1721,'Yes','11','yes516000335',641,11,11,81,21,'2020-06-29 05:44:42','2020-06-29 05:44:42'),(1731,'No','11','no1770708839',641,11,11,81,21,'2020-06-29 05:44:56','2020-06-29 05:44:56'),(1741,'Yes','11','yes1526302712',651,11,11,81,21,'2020-06-29 05:46:47','2020-06-29 05:46:47'),(1751,'No','11','no1651656823',651,11,11,81,21,'2020-06-29 05:47:02','2020-06-29 05:47:02'),(1761,'Yes','11','yes87060598',661,11,11,81,21,'2020-06-29 05:49:19','2020-06-29 05:49:19'),(1771,'No','11','no500197057',661,11,11,81,21,'2020-06-29 05:49:38','2020-06-29 05:49:38'),(1821,'Yes','11','yes1130109608',681,11,11,81,21,'2020-06-29 05:54:56','2020-06-29 05:54:56'),(1831,'No','11','no1942533937',681,11,11,81,21,'2020-06-29 05:55:14','2020-06-29 05:55:14'),(1841,'Very useful','11','very-useful1071727791',691,11,11,91,21,'2020-06-29 05:56:28','2020-06-29 05:56:28'),(1851,'Useful','11','useful1042062838',691,11,11,91,21,'2020-06-29 05:56:51','2020-06-29 05:56:51'),(1861,'No idea','11','no-idea1690276607',691,11,11,91,21,'2020-06-29 05:57:09','2020-06-29 05:57:09'),(1871,'Yes','11','yes289439070',701,11,11,91,21,'2020-06-29 05:59:07','2020-06-29 05:59:07'),(1881,'No','11','no46459663',701,11,11,91,21,'2020-06-29 05:59:15','2020-06-29 05:59:15'),(1891,'Radio','21','radio1617685008',711,11,11,91,21,'2020-06-29 06:00:43','2020-06-29 06:00:43'),(1901,'Television','21','television1001846705',711,11,11,91,21,'2020-06-29 06:00:56','2020-06-29 06:00:56'),(1911,'Friends','21','friends532216538',711,11,11,91,21,'2020-06-29 06:01:07','2020-06-29 06:01:07'),(1921,'Teachers','21','teachers1531651802',711,11,11,91,21,'2020-06-29 06:01:19','2020-06-29 06:01:19'),(1931,'Newspaper','21','newspaper136543610',711,11,11,91,21,'2020-06-29 06:01:33','2020-06-29 06:01:33'),(1941,'Whatsapp','21','whatsapp758820050',711,11,11,91,21,'2020-06-29 06:01:50','2020-06-29 06:01:50'),(1951,'Community or SBMCs or CBMCs','21','community-or-sbmcs-or-cbmcs629883698',711,11,11,91,21,'2020-06-29 06:02:17','2020-06-29 06:02:17'),(1961,'Yes','11','yes1576392269',721,11,11,91,21,'2020-06-29 06:03:05','2020-06-29 06:03:05'),(1971,'Sometimes','11','sometimes1402135944',721,11,11,91,21,'2020-06-29 06:03:16','2020-06-29 06:03:16'),(1981,'No','11','no790702261',721,11,11,91,21,'2020-06-29 06:03:23','2020-06-29 06:03:23'),(1991,'Do you help your parents at home','11','do-you-help-your-parents-at-home1151221527',721,11,11,91,21,'2020-06-29 06:03:47','2020-06-29 06:03:47'),(2001,'Sometimes','11','sometimes1125953645',721,11,11,91,21,'2020-06-29 06:04:08','2020-06-29 06:04:08'),(2011,'No','11','no917009523',721,11,11,91,21,'2020-06-29 06:04:22','2020-06-29 06:04:22'),(2021,'Cooking','21','cooking1639902873',731,21,11,91,21,'2020-06-29 06:05:04','2020-06-29 06:05:04'),(2031,'Domestics tasks','21','domestics-tasks675201686',731,21,11,91,21,'2020-06-29 06:05:18','2020-06-29 06:05:18'),(2041,'Shopping','21','shopping1903829188',731,21,11,91,21,'2020-06-29 06:05:31','2020-06-29 06:05:31'),(2051,'Others','21','others1769876181',731,21,11,91,21,'2020-06-29 06:05:50','2020-06-29 06:05:50'),(2061,'Yes','11','yes1033695061',741,11,11,91,21,'2020-06-29 06:06:39','2020-06-29 06:06:39'),(2071,'No','11','no1169213480',741,11,11,91,21,'2020-06-29 06:06:46','2020-06-29 06:06:46'),(2081,'Stay home','21','stay-home559521180',761,21,11,91,21,'2020-06-29 06:08:00','2020-06-29 06:08:00'),(2091,'Wash my hands','21','wash-my-hands1546116770',761,21,11,91,21,'2020-06-29 06:08:12','2020-06-29 06:08:12'),(2101,'Social distancing','21','social-distancing1429152352',761,21,11,91,21,'2020-06-29 06:08:24','2020-06-29 06:08:24'),(2111,'Avoid unknown persons','21','avoid-unknown-persons2078635453',761,21,11,91,21,'2020-06-29 06:10:24','2020-06-29 06:10:24'),(2121,'Others','21','others1676510069',761,21,11,91,21,'2020-06-29 06:10:37','2020-06-29 06:10:37'),(2131,'ALKALERI','31','alkaleri1013590800',781,31,21,101,21,'2020-06-29 06:12:53','2020-06-29 06:12:53'),(2141,'BAUCHI','31','bauchi2126584690',781,31,21,101,21,'2020-06-29 06:13:06','2020-06-29 06:13:06'),(2151,'BOGORO','31','bogoro1758296924',781,31,21,101,21,'2020-06-29 06:13:17','2020-06-29 06:13:17'),(2161,'DAMBAM','31','dambam4528585',781,31,21,101,21,'2020-06-29 06:13:28','2020-06-29 06:13:28'),(2171,'DARAZO','31','darazo2079484216',781,31,21,101,21,'2020-06-29 06:13:39','2020-06-29 06:13:39'),(2181,'DASS','31','dass1869112862',781,31,21,101,21,'2020-06-29 06:13:48','2020-06-29 06:13:48'),(2191,'GAMAWA','31','gamawa1678133582',781,31,21,101,21,'2020-06-29 06:14:00','2020-06-29 06:14:00'),(2201,'GANJUWA','31','ganjuwa680175438',781,31,21,101,21,'2020-06-29 06:14:09','2020-06-29 06:14:09'),(2211,'GIADE','31','giade287627785',781,31,21,101,21,'2020-06-29 06:14:20','2020-06-29 06:14:20'),(2221,'ITAS-GADAU','31','itas-gadau193259834',781,31,21,101,21,'2020-06-29 06:14:30','2020-06-29 06:14:30'),(2231,'JAMAARE','31','jamaare1430292507',781,31,21,101,21,'2020-06-29 06:14:46','2020-06-29 06:14:46'),(2241,'KATAGUM','31','katagum216183452',781,31,21,101,21,'2020-06-29 06:14:56','2020-06-29 06:14:56'),(2251,'KIRFI','31','kirfi846461455',781,31,21,101,21,'2020-06-29 06:15:04','2020-06-29 06:15:04'),(2261,'MISAU','31','misau294492499',781,31,21,101,21,'2020-06-29 06:15:13','2020-06-29 06:15:13'),(2271,'NINGI','31','ningi1794928259',781,31,21,101,21,'2020-06-29 06:15:22','2020-06-29 06:15:22'),(2281,'SHIRA','31','shira1965982510',781,31,21,101,21,'2020-06-29 06:15:31','2020-06-29 06:15:31'),(2291,'TAFAWA','31','tafawa1964573215',781,31,21,101,21,'2020-06-29 06:15:40','2020-06-29 06:15:40'),(2301,'TORO','31','toro81878435',781,31,21,101,21,'2020-06-29 06:15:50','2020-06-29 06:15:50'),(2311,'WARJI','31','warji720405227',781,31,21,101,21,'2020-06-29 06:16:00','2020-06-29 06:16:00'),(2321,'ZAKI','31','zaki526661013',781,31,21,101,21,'2020-06-29 06:16:09','2020-06-29 06:16:09'),(2331,'Male','11','male1308077246',791,11,21,101,21,'2020-06-29 06:17:12','2020-06-29 06:17:12'),(2341,'Female','11','female27441266',791,11,21,101,21,'2020-06-29 06:17:19','2020-06-29 06:17:19'),(2351,'None','31','none1504077834',811,31,21,101,21,'2020-06-29 06:18:49','2020-06-29 06:18:49'),(2361,'Nursery','31','nursery68759754',811,31,21,101,21,'2020-06-29 06:19:05','2020-06-29 06:19:05'),(2371,'Primary','31','primary739982609',811,31,21,101,21,'2020-06-29 06:19:17','2020-06-29 06:19:17'),(2381,'Secondary School','31','secondary-school1993695190',811,31,21,101,21,'2020-06-29 06:19:32','2020-06-29 06:19:32'),(2391,'NCE','31','nce1750910472',811,31,21,101,21,'2020-06-29 06:19:44','2020-06-29 06:19:44'),(2401,'National Diploma (ND)','31','national-diploma-(nd)1573113',811,31,21,101,21,'2020-06-29 06:20:12','2020-06-29 06:20:12'),(2411,'Higher National Diploma (HND)','31','higher-national-diploma-(hnd)654704763',811,31,21,101,21,'2020-06-29 06:20:29','2020-06-29 06:20:29'),(2421,'University Degree','31','university-degree547044004',811,31,21,101,21,'2020-06-29 06:20:43','2020-06-29 06:20:43'),(2431,'Master’s degree','31','master’s-degree1218581144',811,31,21,101,21,'2020-06-29 06:20:54','2020-06-29 06:20:54'),(2441,'Ph.D','31','ph.d600903171',811,31,21,101,21,'2020-06-29 06:21:09','2020-06-29 06:21:09'),(2451,'Islamic studies','31','islamic-studies1336358712',811,31,21,101,21,'2020-06-29 06:21:42','2020-06-29 06:21:42'),(2461,'Others','31','others875651222',811,31,21,101,21,'2020-06-29 06:21:57','2020-06-29 06:21:57'),(2471,'Yes','11','yes1576179536',821,11,21,101,21,'2020-06-29 06:22:40','2020-06-29 06:22:40'),(2481,'No','11','no1611482717',821,11,21,101,21,'2020-06-29 06:22:46','2020-06-29 06:22:46'),(2491,'Radio','11','radio853158803',841,11,21,111,21,'2020-06-29 06:32:57','2020-06-29 06:32:57'),(2501,'Television','11','television682058914',841,11,21,111,21,'2020-06-29 06:33:38','2020-06-29 06:33:38'),(2511,'Both','11','both2020042972',841,11,21,111,21,'2020-06-29 06:33:50','2020-06-29 06:33:50'),(2521,'Bauchi Radio Corporation','21','bauchi-radio-corporation1422158445',851,21,21,111,21,'2020-06-29 06:34:46','2020-06-29 06:34:46'),(2531,'Community Radio station','21','community-radio-station1997740705',851,21,21,111,21,'2020-06-29 06:34:58','2020-06-29 06:34:58'),(2541,'Bauchi TV','21','bauchi-tv679543539',851,21,21,111,21,'2020-06-29 06:35:10','2020-06-29 06:35:10'),(2551,'Arewa TV','21','arewa-tv1812713080',851,21,21,111,21,'2020-06-29 06:35:24','2020-06-29 06:35:24'),(2561,'Yes','11','yes116480476',861,11,21,111,21,'2020-06-29 06:36:17','2020-06-29 06:36:17'),(2571,'No','11','no488892995',861,11,21,111,21,'2020-06-29 06:36:27','2020-06-29 06:36:27'),(2581,'Which media your child(ren) use to listen to the lessons','11','which-media-your-child(ren)-use-to-listen-to-the-lessons1587538327',871,61,21,111,21,'2020-06-29 06:37:25','2020-06-29 06:37:25'),(2591,'Radio set','11','radio-set220853226',871,61,21,111,21,'2020-06-29 06:37:39','2020-06-29 06:37:39'),(2601,'Television set','11','television-set2065498066',871,61,21,111,21,'2020-06-29 06:38:09','2020-06-29 06:38:09'),(2611,'Both','11','both1795171369',871,61,21,111,21,'2020-06-29 06:38:26','2020-06-29 06:38:26'),(2621,'Yes','11','yes1947004433',881,11,21,111,21,'2020-06-29 06:39:48','2020-06-29 06:39:48'),(2631,'No','11','no1598895783',881,11,21,111,21,'2020-06-29 06:39:54','2020-06-29 06:39:54'),(2641,'English Literacy','21','english-literacy822443489',901,21,21,121,21,'2020-06-29 12:40:00','2020-06-29 12:40:00'),(2651,'Hausa Literacy','21','hausa-literacy1563290468',901,21,21,121,21,'2020-06-29 12:40:15','2020-06-29 12:40:15'),(2661,'Numeracy','21','numeracy1113538145',901,21,21,121,21,'2020-06-29 12:40:28','2020-06-29 12:40:28'),(2671,'Life skills','21','life-skills389588175',901,21,21,121,21,'2020-06-29 12:41:03','2020-06-29 12:41:03'),(2681,'Basic Sciences','21','basic-sciences325466010',901,21,21,121,21,'2020-06-29 12:41:40','2020-06-29 12:41:40'),(2691,'Mathematics','21','mathematics1028145418',901,21,21,121,21,'2020-06-29 12:43:24','2020-06-29 12:43:24'),(2701,'Excellent','11','excellent355064272',931,11,21,121,21,'2020-06-29 13:06:20','2020-06-29 13:06:20'),(2711,'Very good','11','very-good1323835572',931,11,21,121,21,'2020-06-29 13:06:34','2020-06-29 13:06:34'),(2721,'Good','11','good587445643',931,11,21,121,21,'2020-06-29 13:06:47','2020-06-29 13:06:47'),(2731,'Fair','11','fair1939342520',931,11,21,121,21,'2020-06-29 13:07:03','2020-06-29 13:07:03'),(2741,'Poor','11','poor1086590983',931,11,21,121,21,'2020-06-29 13:07:22','2020-06-29 13:07:22'),(2751,'Excellent','11','excellent913131456',941,11,21,121,21,'2020-06-29 13:08:35','2020-06-29 13:08:35'),(2761,'Very good','11','very-good1681190714',941,11,21,121,21,'2020-06-29 13:09:01','2020-06-29 13:09:01'),(2771,'Good','11','good1793847621',941,11,21,121,21,'2020-06-29 13:09:14','2020-06-29 13:09:14'),(2781,'Fair','11','fair638383661',941,11,21,121,21,'2020-06-29 13:09:37','2020-06-29 13:09:37'),(2791,'Poor','11','poor1570190948',941,11,21,121,21,'2020-06-29 13:09:48','2020-06-29 13:09:48'),(2801,'Excellent','11','excellent1156823401',951,11,21,121,21,'2020-06-29 13:11:00','2020-06-29 13:11:00'),(2811,'Very good','11','very-good1485125366',951,11,21,121,21,'2020-06-29 13:11:08','2020-06-29 13:11:08'),(2821,'Good','11','good1708226302',951,11,21,121,21,'2020-06-29 13:11:19','2020-06-29 13:11:19'),(2831,'Fair','11','fair462382051',951,11,21,121,21,'2020-06-29 13:11:27','2020-06-29 13:11:27'),(2841,'Poor','11','poor477017164',951,11,21,121,21,'2020-06-29 13:11:37','2020-06-29 13:11:37'),(2851,'Excellent','11','excellent14583757',961,11,21,121,21,'2020-06-29 13:12:33','2020-06-29 13:12:33'),(2861,'Very good','11','very-good173443830',961,11,21,121,21,'2020-06-29 13:12:42','2020-06-29 13:12:42'),(2871,'Good','11','good209264243',961,11,21,121,21,'2020-06-29 13:13:30','2020-06-29 13:13:30'),(2881,'Fair','11','fair447394988',961,11,21,121,21,'2020-06-29 13:13:43','2020-06-29 13:13:43'),(2891,'Poor','11','poor2006888408',961,11,21,121,21,'2020-06-29 13:13:55','2020-06-29 13:13:55'),(2901,'Yes','11','yes1805297582',971,11,21,131,21,'2020-06-29 13:14:33','2020-06-29 13:14:33'),(2911,'Sometimes','11','sometimes823294690',971,11,21,131,21,'2020-06-29 13:14:50','2020-06-29 13:14:50'),(2921,'No','11','no1228092176',971,11,21,131,21,'2020-06-29 13:14:56','2020-06-29 13:14:56'),(2931,'Yes','11','yes1006795838',981,11,21,131,21,'2020-06-29 13:15:54','2020-06-29 13:15:54'),(2941,'A bit','11','a-bit362981095',981,11,21,131,21,'2020-06-29 13:16:06','2020-06-29 13:16:06'),(2951,'No','11','no286681407',981,11,21,131,21,'2020-06-29 13:16:14','2020-06-29 13:16:14'),(2961,'Yes','11','yes1203759004',991,11,21,131,21,'2020-06-29 13:17:03','2020-06-29 13:17:03'),(2971,'A bit','11','a-bit921496388',991,11,21,131,21,'2020-06-29 13:17:12','2020-06-29 13:17:12'),(2981,'No','11','no1642053277',991,11,21,131,21,'2020-06-29 13:17:17','2020-06-29 13:17:17'),(2991,'Father','11','father1557950074',1011,11,21,131,21,'2020-06-29 13:19:02','2020-06-29 13:19:02'),(3001,'Mother','11','mother682648416',1011,11,21,131,21,'2020-06-29 13:19:33','2020-06-29 13:19:33'),(3011,'Siblings','11','siblings493869629',1011,11,21,131,21,'2020-06-29 13:19:48','2020-06-29 13:19:48'),(3021,'Others','11','others798794641',1011,11,21,131,21,'2020-06-29 13:20:04','2020-06-29 13:20:04'),(3031,'Coaching','11','coaching523077315',1021,11,21,131,21,'2020-06-29 13:21:32','2020-06-29 13:21:32'),(3041,'Following with him or her','11','following-with-him-or-her1106986285',1021,11,21,131,21,'2020-06-29 13:21:52','2020-06-29 13:21:52'),(3051,'Other','11','other1867293356',1021,11,21,131,21,'2020-06-29 13:22:09','2020-06-29 13:22:09'),(3061,'Tune in the station or channel','11','tune-in-the-station-or-channel1751999404',1031,11,21,131,21,'2020-06-29 13:24:38','2020-06-29 13:24:38'),(3071,'Prompt the child(ren) for lessons time','11','prompt-the-child(ren)-for-lessons-time1533678842',1031,11,21,131,21,'2020-06-29 13:27:50','2020-06-29 13:27:50'),(3081,'Free time for child(ren) to listen and learn','11','free-time-for-child(ren)-to-listen-and-learn916782147',1031,11,21,131,21,'2020-06-29 13:28:15','2020-06-29 13:28:15'),(3091,'Provide clarification and coaching','11','provide-clarification-and-coaching1759566503',1031,11,21,131,21,'2020-06-29 13:29:00','2020-06-29 13:29:00'),(3101,'Other (specify)','51','other-(specify)1534853932',1031,11,21,131,21,'2020-06-29 13:30:24','2020-06-29 13:30:24'),(3111,'Parents','11','parents1246527708',1041,11,21,131,21,'2020-06-29 13:33:07','2020-06-29 13:33:07'),(3121,'Siblings','11','siblings1293412234',1041,11,21,131,21,'2020-06-29 13:33:32','2020-06-29 13:33:32'),(3131,'LGEA','11','lgea574479362',1041,11,21,131,21,'2020-06-29 13:33:54','2020-06-29 13:33:54'),(3141,'SUBEB','11','subeb671204549',1041,11,21,131,21,'2020-06-29 13:34:19','2020-06-29 13:34:19'),(3151,'UNICEF','11','unicef1076676866',1041,11,21,131,21,'2020-06-29 13:34:39','2020-06-29 13:34:39'),(3161,'No learning materials','11','no-learning-materials590588183',1041,11,21,131,21,'2020-06-29 13:34:55','2020-06-29 13:34:55'),(3171,'Others','11','others1676110702',1041,11,21,131,21,'2020-06-29 13:35:16','2020-06-29 13:35:16'),(3181,'Good','11','good740480604',1051,11,21,141,21,'2020-06-29 13:36:00','2020-06-29 13:36:00'),(3191,'Fair','11','fair318403381',1051,11,21,141,21,'2020-06-29 13:36:07','2020-06-29 13:36:07'),(3201,'Bad','11','bad1908748867',1051,11,21,141,21,'2020-06-29 13:36:15','2020-06-29 13:36:15'),(3211,'Yes','11','yes925686513',1061,11,21,141,21,'2020-06-29 13:37:43','2020-06-29 13:37:43'),(3221,'Sometimes','11','sometimes2104661580',1061,11,21,141,21,'2020-06-29 13:37:51','2020-06-29 13:37:51'),(3231,'No','11','no1753225015',1061,11,21,141,21,'2020-06-29 13:37:57','2020-06-29 13:37:57'),(3241,'Washing hands with clean water and soap','11','washing-hands-with-clean-water-and-soap949918183',1091,11,21,141,21,'2020-06-29 13:40:23','2020-06-29 13:40:23'),(3251,'Use of face mask','11','use-of-face-mask1025872830',1091,11,21,141,21,'2020-06-29 13:41:02','2020-06-29 13:41:02'),(3261,'Respect social distancing','11','respect-social-distancing1679961925',1091,11,21,141,21,'2020-06-29 13:41:20','2020-06-29 13:41:20'),(3271,'Stay at home','11','stay-at-home997517813',1091,11,21,141,21,'2020-06-29 13:41:40','2020-06-29 13:41:40'),(3281,'Others','11','others2012783801',1091,11,21,141,21,'2020-06-29 13:42:07','2020-06-29 13:42:07'),(3291,'Yes','11','yes1762024771',1101,11,21,141,21,'2020-06-29 13:42:46','2020-06-29 13:42:46'),(3301,'No','11','no1192151117',1101,11,21,141,21,'2020-06-29 13:42:53','2020-06-29 13:42:53'),(3311,'Radio','21','radio133824291',1111,21,21,141,21,'2020-06-29 13:44:04','2020-06-29 13:44:04'),(3321,'Television','21','television369853894',1111,21,21,141,21,'2020-06-29 13:44:18','2020-06-29 13:44:18'),(3331,'Text messages','21','text-messages202511796',1111,21,21,141,21,'2020-06-29 13:44:36','2020-06-29 13:44:36'),(3341,'WhatsApp','21','whatsapp2073768156',1111,21,21,141,21,'2020-06-29 13:44:49','2020-06-29 13:44:49'),(3351,'Social media','21','social-media2101941676',1111,21,21,141,21,'2020-06-29 13:45:02','2020-06-29 13:45:02'),(3361,'Mosque or church','21','mosque-or-church1221102485',1111,21,21,141,21,'2020-06-29 13:45:33','2020-06-29 13:45:33'),(3371,'Others','11','others1990639960',1111,21,21,141,21,'2020-06-29 13:46:48','2020-06-29 13:46:48'),(3381,'Bauchi Radio Corporation','31','bauchi-radio-corporation57215482',1131,31,31,201,21,'2020-06-29 17:05:56','2020-06-29 17:05:56'),(3391,'Community Radio station','31','community-radio-station1414131992',1131,31,31,201,21,'2020-06-29 17:06:13','2020-06-29 17:06:13'),(3401,'Bauchi TV','31','bauchi-tv1654874094',1131,31,31,201,21,'2020-06-29 17:06:29','2020-06-29 17:06:29'),(3411,'Arewa TV','31','arewa-tv101068528',1131,31,31,201,21,'2020-06-29 17:06:44','2020-06-29 17:06:44'),(3421,'Globe FM','31','globe-fm1286610269',1131,31,31,201,21,'2020-06-29 17:07:01','2020-06-29 17:07:01'),(3431,'ALKALERI','31','alkaleri1802802984',1141,31,31,201,21,'2020-06-29 17:08:00','2020-06-29 17:08:00'),(3441,'BAUCHI','31','bauchi1527219196',1141,31,31,201,21,'2020-06-29 17:08:44','2020-06-29 17:08:44'),(3451,'BOGORO','31','bogoro1659260649',1141,31,31,201,21,'2020-06-29 17:09:02','2020-06-29 17:09:02'),(3461,'DAMBAM','31','dambam151397051',1141,31,31,201,21,'2020-06-29 17:09:21','2020-06-29 17:09:21'),(3471,'DARAZO','31','darazo1206388712',1141,31,31,201,21,'2020-06-29 17:09:40','2020-06-29 17:09:40'),(3481,'DASS','31','dass1519171798',1141,31,31,201,21,'2020-06-29 17:09:52','2020-06-29 17:09:52'),(3491,'GAMAWA','31','gamawa1434622683',1141,31,31,201,21,'2020-06-29 17:10:07','2020-06-29 17:10:07'),(3501,'GANJUWA','31','ganjuwa510762727',1141,31,31,201,21,'2020-06-29 17:10:20','2020-06-29 17:10:20'),(3511,'GIADE','31','giade1541187435',1141,31,31,201,21,'2020-06-29 17:10:34','2020-06-29 17:10:34'),(3521,'ITAS-GADAU','31','itas-gadau1555826141',1141,31,31,201,21,'2020-06-29 17:10:49','2020-06-29 17:10:49'),(3531,'JAMAARE','31','jamaare1537250225',1141,31,31,201,21,'2020-06-29 17:11:08','2020-06-29 17:11:08'),(3541,'KATAGUM','31','katagum1256988865',1141,31,31,201,21,'2020-06-29 17:11:20','2020-06-29 17:11:20'),(3551,'KIRFI','31','kirfi1853784185',1141,31,31,201,21,'2020-06-29 17:11:38','2020-06-29 17:11:38'),(3561,'MISAU','31','misau913802368',1141,31,31,201,21,'2020-06-29 17:11:52','2020-06-29 17:11:52'),(3571,'NINGI','31','ningi990195560',1141,31,31,201,21,'2020-06-29 17:12:08','2020-06-29 17:12:08'),(3581,'SHIRA','31','shira2103667917',1141,31,31,201,21,'2020-06-29 17:12:22','2020-06-29 17:12:22'),(3591,'TAFAWA','31','tafawa75984551',1141,31,31,201,21,'2020-06-29 17:12:31','2020-06-29 17:12:31'),(3601,'TORO','31','toro1718219632',1141,31,31,201,21,'2020-06-29 17:12:43','2020-06-29 17:12:43'),(3611,'WARJI','31','warji205274879',1141,31,31,201,21,'2020-06-29 17:12:57','2020-06-29 17:12:57'),(3621,'ZAKI','31','zaki2105089150',1141,31,31,201,21,'2020-06-29 17:14:04','2020-06-29 17:14:04'),(3631,'Bauchi town','11','bauchi-town1866557129',1151,11,31,201,21,'2020-06-29 17:15:58','2020-06-29 17:15:58'),(3641,'LGAs','11','lgas1437445992',1151,11,31,201,21,'2020-06-29 17:16:12','2020-06-29 17:16:12'),(3651,'Wards','11','wards942286906',1151,11,31,201,21,'2020-06-29 17:16:28','2020-06-29 17:16:28'),(3661,'Communities','11','communities701691798',1151,11,31,201,21,'2020-06-29 17:16:47','2020-06-29 17:16:47'),(3671,'Morning','11','morning102910608',1161,11,31,201,21,'2020-06-29 17:17:40','2020-06-29 17:17:40'),(3681,'Afternoon','11','afternoon1504475554',1161,11,31,201,21,'2020-06-29 17:17:58','2020-06-29 17:17:58'),(3691,'Evening','11','evening622588609',1161,11,31,201,21,'2020-06-29 17:18:18','2020-06-29 17:18:18'),(3701,'Morning & Afternoon','11','morning-&-afternoon268079379',1161,11,31,201,21,'2020-06-29 17:18:32','2020-06-29 17:18:32'),(3711,'Afternoon & Evening','11','afternoon-&-evening1427646458',1161,11,31,201,21,'2020-06-29 17:18:51','2020-06-29 17:18:51'),(3721,'What are the challenges faced broadcasting the lessons','1','what-are-the-challenges-faced-broadcasting-the-lessons1417022739',1191,1,31,201,21,'2020-06-29 17:23:54','2020-06-29 17:23:54'),(3731,'Yes','11','yes486311840',1221,11,31,201,21,'2020-06-29 17:25:26','2020-06-29 17:25:26'),(3741,'No','11','no679772760',1221,11,31,201,21,'2020-06-29 17:25:33','2020-06-29 17:25:33'),(3751,'State Ministry of Education','11','state-ministry-of-education672953694',1251,11,41,151,21,'2020-06-29 17:28:48','2020-06-29 17:28:48'),(3761,'State Universal Basic Education Board','11','state-universal-basic-education-board1906244601',1251,11,41,151,21,'2020-06-29 17:29:03','2020-06-29 17:29:03'),(3771,'State Agency for Mass Education','11','state-agency-for-mass-education1706712359',1251,11,41,151,21,'2020-06-29 17:29:27','2020-06-29 17:29:27'),(3781,'Television','11','television709278154',1291,11,41,161,21,'2020-06-29 17:32:03','2020-06-29 17:32:03'),(3791,'Radio','11','radio504212334',1291,11,41,161,21,'2020-06-29 17:32:10','2020-06-29 17:32:10'),(3801,'Yes','11','yes1861318188',1301,11,41,161,21,'2020-06-29 17:32:56','2020-06-29 17:32:56'),(3811,'No','11','no1668877074',1301,11,41,161,21,'2020-06-29 17:33:01','2020-06-29 17:33:01'),(3821,'70% and above (Excellent)','11','70%-and-above-(excellent)291322275',1311,11,41,161,21,'2020-06-29 17:34:18','2020-06-29 17:34:18'),(3831,'69 – 60% (Very good)','11','69-–-60%-(very-good)2082538190',1311,11,41,161,21,'2020-06-29 17:34:32','2020-06-29 17:34:32'),(3841,'59 – 50% (Good)','11','59-–-50%-(good)849935954',1311,11,41,161,21,'2020-06-29 17:34:46','2020-06-29 17:34:46'),(3851,'49 – 30% (Fair)','11','49-–-30%-(fair)1132568325',1311,11,41,161,21,'2020-06-29 17:35:57','2020-06-29 17:35:57'),(3861,'29 – 0% (Poor)','11','29-–-0%-(poor)1494505265',1311,11,41,161,21,'2020-06-29 17:36:23','2020-06-29 17:36:23'),(3871,'70% and above (Excellent)','11','70%-and-above-(excellent)1643459152',1321,11,41,161,21,'2020-06-29 17:37:25','2020-06-29 17:37:25'),(3881,'69 – 60% (Very good)','11','69-–-60%-(very-good)1126896538',1321,11,41,161,21,'2020-06-29 17:37:59','2020-06-29 17:37:59'),(3891,'59 – 50% (Good)','11','59-–-50%-(good)71863791',1321,11,41,161,21,'2020-06-29 17:38:20','2020-06-29 17:38:20'),(3901,'49 – 30% (Fair)','11','49-–-30%-(fair)1352054186',1321,11,41,161,21,'2020-06-29 17:38:35','2020-06-29 17:38:35'),(3911,'29 – 0% (Poor)','11','29-–-0%-(poor)294796812',1321,11,41,161,21,'2020-06-29 17:38:51','2020-06-29 17:38:51'),(3921,'One week','11','one-week1473194712',1331,11,41,161,21,'2020-06-29 17:39:57','2020-06-29 17:39:57'),(3931,'Two weeks','11','two-weeks935931878',1331,11,41,161,21,'2020-06-29 17:40:11','2020-06-29 17:40:11'),(3941,'Three weeks','11','three-weeks425293397',1331,11,41,161,21,'2020-06-29 17:40:24','2020-06-29 17:40:24'),(3951,'Four weeks','11','four-weeks707517072',1331,11,41,161,21,'2020-06-29 17:40:40','2020-06-29 17:40:40'),(3961,'Others','11','others368214825',1331,11,41,161,21,'2020-06-29 17:40:56','2020-06-29 17:40:56'),(3971,'Yes','11','yes2108638123',1341,11,41,161,21,'2020-06-29 17:41:38','2020-06-29 17:41:38'),(3981,'No','11','no1362581998',1341,11,41,161,21,'2020-06-29 17:41:43','2020-06-29 17:41:43'),(3991,'English Literacy','21','english-literacy1308677328',1351,21,41,171,21,'2020-06-29 17:43:00','2020-06-29 17:43:00'),(4001,'Hausa Literacy','21','hausa-literacy436027874',1351,21,41,171,21,'2020-06-29 17:43:10','2020-06-29 17:43:10'),(4011,'Numeracy','21','numeracy625469177',1351,21,41,171,21,'2020-06-29 17:43:28','2020-06-29 17:43:28'),(4021,'Life skills','21','life-skills763197223',1351,21,41,171,21,'2020-06-29 17:43:46','2020-06-29 17:43:46'),(4031,'Basic Sciences','21','basic-sciences1044425606',1351,21,41,171,21,'2020-06-29 17:43:57','2020-06-29 17:43:57'),(4041,'Mathematics','21','mathematics1544508565',1351,21,41,171,21,'2020-06-29 17:44:09','2020-06-29 17:44:09'),(4051,'Others','21','others1810121772',1351,21,41,171,21,'2020-06-29 17:44:24','2020-06-29 17:44:24'),(4061,'What level of children are targeted by the radio or TV school lessons programmes','11','what-level-of-children-are-targeted-by-the-radio-or-tv-school-lessons-programmes183509007',1351,21,41,171,21,'2020-06-29 17:45:02','2020-06-29 17:45:02'),(4071,'Nursery','11','nursery1371594559',1351,21,41,171,21,'2020-06-29 17:45:12','2020-06-29 17:45:12'),(4081,'Primary','11','primary1399653251',1351,21,41,171,21,'2020-06-29 17:45:30','2020-06-29 17:45:30'),(4091,'Junior Secondary','11','junior-secondary763640220',1351,21,41,171,21,'2020-06-29 17:47:52','2020-06-29 17:47:52'),(4101,'Senior Secondary','11','senior-secondary799742341',1351,21,41,171,21,'2020-06-29 17:48:08','2020-06-29 17:48:08'),(4111,'Quranic school learners','11','quranic-school-learners1456478100',1351,21,41,171,21,'2020-06-29 17:48:21','2020-06-29 17:48:21'),(4121,'Other','11','other1984469613',1351,21,41,171,21,'2020-06-29 17:48:34','2020-06-29 17:48:34'),(4131,'Excellent','11','excellent1996238977',1361,11,41,171,21,'2020-06-29 17:49:21','2020-06-29 17:49:21'),(4141,'Very good','11','very-good18712046',1361,11,41,171,21,'2020-06-29 17:49:33','2020-06-29 17:49:33'),(4151,'Good','11','good1723560174',1361,11,41,171,21,'2020-06-29 17:49:49','2020-06-29 17:49:49'),(4161,'Fair','11','fair1116203905',1361,11,41,171,21,'2020-06-29 17:50:01','2020-06-29 17:50:01'),(4171,'Poor','11','poor1345474738',1361,11,41,171,21,'2020-06-29 17:50:12','2020-06-29 17:50:12'),(4181,'Excellent','11','excellent2052025620',1371,11,41,171,21,'2020-06-29 17:51:52','2020-06-29 17:51:52'),(4191,'Very good','11','very-good1008988874',1371,11,41,171,21,'2020-06-29 17:52:04','2020-06-29 17:52:04'),(4201,'Good','11','good423867274',1371,11,41,171,21,'2020-06-29 17:52:43','2020-06-29 17:52:43'),(4211,'Fair','11','fair1697115947',1371,11,41,171,21,'2020-06-29 17:52:54','2020-06-29 17:52:54'),(4221,'Poor','11','poor551093474',1371,11,41,171,21,'2020-06-29 17:53:03','2020-06-29 17:53:03'),(4231,'Yes','11','yes1336934009',1381,11,41,171,21,'2020-06-29 17:56:45','2020-06-29 17:56:45'),(4241,'No','11','no1600876359',1381,11,41,171,21,'2020-06-29 17:56:50','2020-06-29 17:56:50'),(4251,'Yes','11','yes955427883',1391,11,41,171,21,'2020-06-29 17:57:52','2020-06-29 17:57:52'),(4261,'No','11','no1921563352',1391,11,41,171,21,'2020-06-29 17:57:58','2020-06-29 17:57:58'),(4271,'Yes','11','yes1771348260',1401,11,41,171,21,'2020-06-29 17:58:58','2020-06-29 17:58:58'),(4281,'No','11','no897725782',1401,11,41,171,21,'2020-06-29 17:59:04','2020-06-29 17:59:04'),(4291,'Bauchi Radio Corporation (BRC)','11','bauchi-radio-corporation-(brc)74395762',1411,21,41,181,21,'2020-06-29 18:01:56','2020-06-29 18:01:56'),(4301,'Bauchi Television (BATV)','11','bauchi-television-(batv)255031046',1411,21,41,181,21,'2020-06-29 18:02:09','2020-06-29 18:02:09'),(4311,'Arewa TV','21','arewa-tv395693332',1411,21,41,181,21,'2020-06-29 18:02:34','2020-06-29 18:02:34'),(4321,'Globe FM','21','globe-fm267145267',1411,21,41,181,21,'2020-06-29 18:02:51','2020-06-29 18:02:51'),(4331,'Excellent','11','excellent44259301',1421,11,41,181,21,'2020-06-29 18:05:02','2020-06-29 18:05:02'),(4341,'Very good','11','very-good606938826',1421,11,41,181,21,'2020-06-29 18:05:10','2020-06-29 18:05:10'),(4351,'Good','11','good761169933',1421,11,41,181,21,'2020-06-29 18:05:17','2020-06-29 18:05:17'),(4361,'Fair','11','fair945545593',1421,11,41,181,21,'2020-06-29 18:05:45','2020-06-29 18:05:45'),(4371,'Poor','11','poor260549036',1421,11,41,181,21,'2020-06-29 18:06:00','2020-06-29 18:06:00'),(4381,'State Ministry of Education (MOE','11','state-ministry-of-education-(moe1554653',1441,11,41,191,21,'2020-06-29 18:08:02','2020-06-29 18:08:02'),(4391,'State Universal Basic Education Board (SUBEB)','11','state-universal-basic-education-board-(subeb)1726792337',1441,11,41,191,21,'2020-06-29 18:08:17','2020-06-29 18:08:17'),(4401,'State Agency for Mass Education (SAME)','11','state-agency-for-mass-education-(same)2085775430',1441,11,41,191,21,'2020-06-29 18:08:30','2020-06-29 18:08:30'),(4411,'Northern Education Initiative (NEI+)','11','northern-education-initiative-(nei+)1834789834',1441,11,41,191,21,'2020-06-29 18:08:47','2020-06-29 18:08:47'),(4421,'UNICEF','11','unicef1258333041',1441,11,41,191,21,'2020-06-29 18:08:57','2020-06-29 18:08:57'),(4431,'Bauchi Radio Corporation (BRC)','11','bauchi-radio-corporation-(brc)1533525107',1441,11,41,191,21,'2020-06-29 18:09:20','2020-06-29 18:09:20'),(4441,'Bauchi TV (BATV)','11','bauchi-tv-(batv)928146175',1441,11,41,191,21,'2020-06-29 18:09:35','2020-06-29 18:09:35'),(4451,'Others','11','others491579068',1441,11,41,191,21,'2020-06-29 18:09:49','2020-06-29 18:09:49'),(4461,'How do you ensure that the radio or TV houses air the lessons programmes on schedule','1','how-do-you-ensure-that-the-radio-or-tv-houses-air-the-lessons-programmes-on-schedule1324427460',1441,11,41,191,21,'2020-06-29 18:10:23','2020-06-29 18:10:23'),(4471,'Nursery','21','nursery421084466',1581,21,1,21,21,'2020-07-04 16:07:34','2020-07-04 16:07:34'),(4481,'Primary','21','primary777182283',1581,21,1,21,21,'2020-07-04 16:07:45','2020-07-04 16:07:45'),(4491,'Junior Secondary','21','junior-secondary429506820',1581,21,1,21,21,'2020-07-04 16:08:19','2020-07-04 16:08:19'),(4501,'Secondary School','21','secondary-school2100442631',1581,21,1,21,21,'2020-07-04 16:08:34','2020-07-04 16:08:34'),(4511,'Quranic school learners','21','quranic-school-learners656145485',1581,21,1,21,21,'2020-07-04 16:08:57','2020-07-04 16:08:57'),(4521,'Others','21','others1239515000',1581,21,1,21,21,'2020-07-04 16:09:09','2020-07-04 16:09:09'),(4531,'Good presentation of lessons','21','good-presentation-of-lessons1389103797',1591,21,11,71,21,'2020-07-04 16:14:58','2020-07-04 16:14:58'),(4541,'Lessons sequences are clear','21','lessons-sequences-are-clear933899910',1591,21,11,71,21,'2020-07-04 16:15:11','2020-07-04 16:15:11'),(4551,'Easy to understand','21','easy-to-understand1581106266',1591,21,11,71,21,'2020-07-04 16:15:23','2020-07-04 16:15:23'),(4561,'Others','21','others1008232726',1591,21,11,71,21,'2020-07-04 16:15:34','2020-07-04 16:15:34'),(4571,'Parents','21','parents1616498082',1601,21,11,81,21,'2020-07-04 16:39:44','2020-07-04 16:39:44'),(4581,'Sibling','21','sibling865704873',1601,21,11,81,21,'2020-07-04 16:39:59','2020-07-04 16:39:59'),(4591,'Friends','21','friends994027073',1601,21,11,81,21,'2020-07-04 16:40:09','2020-07-04 16:40:09'),(4601,'Other','21','other1571952050',1601,21,11,81,21,'2020-07-04 16:40:30','2020-07-04 16:40:30');
/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `partner_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `state_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `partners_email_unique` (`email`),
  UNIQUE KEY `partners_payment_email_unique` (`payment_email`),
  UNIQUE KEY `partners_telephone1_unique` (`telephone1`),
  UNIQUE KEY `partners_telephone2_unique` (`telephone2`),
  KEY `partners_user_id_foreign` (`user_id`),
  KEY `partners_state_id_foreign` (`state_id`),
  CONSTRAINT `partners_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`),
  CONSTRAINT `partners_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persistences`
--

DROP TABLE IF EXISTS `persistences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persistences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `persistences_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=1791 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persistences`
--

LOCK TABLES `persistences` WRITE;
/*!40000 ALTER TABLE `persistences` DISABLE KEYS */;
INSERT INTO `persistences` VALUES (811,1,'VWONChxIPGmsFq59v1XxnliLKbJNGwlc','2020-07-02 10:40:51','2020-07-02 10:40:51'),(821,1,'YevbeSS3trTLm1Hx2ItWWs2jByqLU43Z','2020-07-02 10:49:39','2020-07-02 10:49:39'),(901,1,'vJoRG6lLg5TwSfOLJiRWJpvS3CQQyp5n','2020-07-02 16:58:57','2020-07-02 16:58:57'),(911,1,'R9Xeg9hd4RBy7vk7OSXR5UDyOoLBu2UF','2020-07-02 17:02:28','2020-07-02 17:02:28'),(921,1,'GVQdvTEMTiggwLn1gFpuqK0lWH8uzdPs','2020-07-02 17:03:26','2020-07-02 17:03:26'),(1171,121,'OAE8K1HyQ7iQEysP1jwJxXQc0M7CijL3','2020-07-03 10:42:43','2020-07-03 10:42:43'),(1251,121,'PtZf0r05jCtYQ6U6Y2DwJZa56OMqdyzW','2020-07-03 14:48:26','2020-07-03 14:48:26'),(1291,121,'W2fS6NjyfkwchE8HaPHUbvSDpDkPck1Y','2020-07-03 15:17:22','2020-07-03 15:17:22'),(1361,131,'SwLce99I0ls1YuyJay8ORdkFlAdg2iaG','2020-07-04 06:23:09','2020-07-04 06:23:09'),(1371,131,'Ln7x83PrAOcig18wgN7SmNGLC7zM053N','2020-07-04 06:25:52','2020-07-04 06:25:52'),(1431,131,'Cd5I3COF2xfmIBNbn7VpsMRTv5bMsbso','2020-07-04 13:09:57','2020-07-04 13:09:57'),(1471,121,'JlSJxovPhQkUKGPN3kzonhOWnwBdlEe7','2020-07-04 14:28:42','2020-07-04 14:28:42'),(1481,121,'r8F9MN44smW4Fl15IcyrrRGzZsjZEubn','2020-07-04 15:00:56','2020-07-04 15:00:56'),(1491,121,'eyu6vLGgPesDdDlyLx3LcDbYAOzwOgz0','2020-07-04 15:12:13','2020-07-04 15:12:13'),(1501,121,'QQ3YA2Q3ACXWSndZhbVq6czG8Cm8n9bK','2020-07-04 15:14:18','2020-07-04 15:14:18'),(1511,121,'jjZgRHPCZpmT0WclueQTBUCHfmfikYIC','2020-07-04 15:23:43','2020-07-04 15:23:43'),(1521,121,'isaXfRPbK5KuDHqkdmHx9jhfptE8sQtz','2020-07-04 15:42:31','2020-07-04 15:42:31'),(1611,121,'8Y0YKb4fO7xHIgSD7wMoM9Plr16jxH6h','2020-07-04 21:09:37','2020-07-04 21:09:37'),(1621,121,'pO3NR2dK0nTobj3b3kUMF8ASYUYT4nQt','2020-07-04 21:10:03','2020-07-04 21:10:03'),(1631,121,'EdsCm5fZxZOFBuOLU9IZcyUO2Vlw0Owc','2020-07-04 22:07:18','2020-07-04 22:07:18'),(1641,121,'tMk7UkCoG5lTIiJUkB9H5UZcQM8Yn93s','2020-07-05 05:23:02','2020-07-05 05:23:02'),(1651,121,'JjQRcdCqVkwox2b7FspL9MOGqVUdzk9J','2020-07-05 08:03:12','2020-07-05 08:03:12'),(1661,171,'QE8o6EpkyeDtrZPGtLI1bjEJj9YgHkOj','2020-07-05 08:21:36','2020-07-05 08:21:36'),(1671,171,'p6o6M1QvoiuHtjdfbgE9fizaVbJy3sg3','2020-07-05 08:23:04','2020-07-05 08:23:04'),(1701,331,'Svg6SNU3C44qDXRhEFTOREFyWLNKKc7j','2020-07-05 08:40:19','2020-07-05 08:40:19'),(1711,331,'JoSCfJnvu9bPP3yhfGA3uB2tWO6BEUoX','2020-07-05 08:43:20','2020-07-05 08:43:20'),(1721,341,'DfaFleqJkf0tRzNwosShssm9qVUihqmh','2020-07-05 08:47:48','2020-07-05 08:47:48'),(1731,151,'ZqDbKYsNI6xjvhpL7HlYvgJDtufbMrxb','2020-07-05 09:01:34','2020-07-05 09:01:34'),(1741,11,'uKULuakvLR0qm0KScRVPeCZhYBQGNn2A','2020-07-05 09:19:23','2020-07-05 09:19:23'),(1751,341,'xJsWmzTLTtunTCu5kIh4i5pdnIqbzYD2','2020-07-05 09:46:54','2020-07-05 09:46:54'),(1761,11,'vA1WWXcapbAf2sNBCzF3qGH1jivAuGui','2020-07-05 09:52:08','2020-07-05 09:52:08'),(1771,131,'L5etvNgGFH7rIJNWhKrQu9qXQcEudueR','2020-07-05 09:58:29','2020-07-05 09:58:29'),(1781,11,'yqUZWmAA2uACyEJTyUmTl3ksnCy4PnIq','2020-07-05 10:07:25','2020-07-05 10:07:25');
/*!40000 ALTER TABLE `persistences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `material_no` int(11) NOT NULL,
  `batch_no` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,12345,432342,'Book','Vista',21,'2020-07-02 22:50:03','2020-07-02 22:50:03');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programs`
--

DROP TABLE IF EXISTS `programs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `programs_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programs`
--

LOCK TABLES `programs` WRITE;
/*!40000 ALTER TABLE `programs` DISABLE KEYS */;
INSERT INTO `programs` VALUES (1,'Nutrition',1,'nutrition','Nutrition',NULL,NULL),(11,'Wash',1,'wash','Wash',NULL,NULL),(21,'Education',1,'education','Education',NULL,NULL),(31,'Health',1,'health','Health',NULL,NULL),(41,'Logistics',1,'logistics','Logistics',NULL,NULL);
/*!40000 ALTER TABLE `programs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question_types`
--

DROP TABLE IF EXISTS `question_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `question_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_types`
--

LOCK TABLES `question_types` WRITE;
/*!40000 ALTER TABLE `question_types` DISABLE KEYS */;
INSERT INTO `question_types` VALUES (1,'Text','text','2020-06-27 16:35:47','2020-06-27 16:35:47'),(11,'Single Choice','single_choice','2020-06-27 16:35:47','2020-06-27 16:35:47'),(21,'Multi Choice','multi_choice','2020-06-27 16:35:47','2020-06-27 16:35:47'),(31,'Select Option','select_option','2020-06-27 16:35:47','2020-06-27 16:35:47'),(41,'Date','date','2020-06-27 16:35:47','2020-06-27 16:35:47'),(51,'Other','other','2020-06-27 16:35:47','2020-06-27 16:35:47'),(61,'Number','number','2020-06-28 20:35:02','2020-06-28 20:35:02');
/*!40000 ALTER TABLE `question_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `survey_type_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_type_id` bigint(20) unsigned NOT NULL,
  `program_id` bigint(20) unsigned DEFAULT NULL,
  `sub_category_id` bigint(20) unsigned DEFAULT NULL,
  `survey_type_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `questions_slug_unique` (`slug`),
  KEY `questions_question_type_id_foreign` (`question_type_id`),
  KEY `questions_program_id_foreign` (`program_id`),
  KEY `questions_sub_category_id_foreign` (`sub_category_id`),
  KEY `questions_survey_type_id_foreign` (`survey_type_id`),
  CONSTRAINT `questions_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`),
  CONSTRAINT `questions_question_type_id_foreign` FOREIGN KEY (`question_type_id`) REFERENCES `question_types` (`id`),
  CONSTRAINT `questions_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `subcategories` (`id`),
  CONSTRAINT `questions_survey_type_id_foreign` FOREIGN KEY (`survey_type_id`) REFERENCES `survey_types` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1611 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (71,'Select Option','Select Local Government','Education','Local Government','General Information','select-local-government1743650938',31,21,1,1,'2020-06-28 13:41:09','2020-06-28 13:41:09'),(81,'Single Choice','Gender of the staff','Education','Local Government','General Information','gender-of-the-staff2052167878',11,21,1,1,'2020-06-28 13:51:09','2020-06-28 13:51:09'),(91,'Text','Department or Section Name','Education','Local Government','General Information','department-or-section-name1807872061',1,21,1,1,'2020-06-28 13:52:48','2020-06-28 13:52:48'),(131,'Date','When did the airing of the home-based lessons programme start in your LGA','Education','Local Government','General Information','when-did-the-airing-of-the-home-based-lessons-programme-start-in-your-lga1248073092',41,21,1,1,'2020-06-28 15:10:03','2020-06-28 15:10:03'),(141,'Multi Choice','Where did children access the Radio and or TV','Education','Local Government','Availability','where-did-children-access-the-radio-and-or-tv1673410600',21,21,1,11,'2020-06-28 15:14:54','2020-06-28 15:14:54'),(151,'Multi Choice','Through which station did children participate','Education','Local Government','Availability','through-which-station-did-children-participate485034277',21,21,1,11,'2020-06-28 15:19:06','2020-06-28 15:19:06'),(161,'Number','How often did the children listen to Radio or watch TV aired lessons per day','Education','Local Government','Availability','how-often-did-the-children-listen-to-radio-or-watch-tv-aired-lessons-per-day439336971',61,21,1,11,'2020-06-28 20:39:24','2020-06-28 20:39:24'),(181,'Select Option','How would you rate the coverage of the radio in the LGA-communities','Education','Local Government','Availability','how-would-you-rate-the-coverage-of-the-radio-in-the-lga-communities1653473742',31,21,1,11,'2020-06-28 20:44:06','2020-06-28 20:44:06'),(201,'Select Option','How would you rate the coverage of the Television in the LGA-communities','Education','Local Government','Availability','how-would-you-rate-the-coverage-of-the-television-in-the-lga-communities1877100786',31,21,1,11,'2020-06-28 20:48:00','2020-06-28 20:48:00'),(211,'Select Option','For how many weeks now the radio or TV lessons programme have been on air','Education','Local Government','Availability','for-how-many-weeks-now-the-radio-or-tv-lessons-programme-have-been-on-air2024756346',31,21,1,11,'2020-06-28 20:50:47','2020-06-28 20:50:47'),(221,'Single Choice','Have you ever listened to the Radio and or watched TV programmes being aired','Education','Local Government','Availability','have-you-ever-listened-to-the-radio-and-or-watched-tv-programmes-being-aired93028650',11,21,1,11,'2020-06-28 20:54:14','2020-06-28 20:54:14'),(231,'Multi Choice','What subject the children listen to','Education','Local Government','Quality','what-subject-the-children-listen-to1266883250',21,21,1,21,'2020-06-28 20:56:56','2020-06-28 20:56:56'),(251,'Single Choice','What subject(s) do the children like most','Education','Local Government','Quality','what-subject(s)-do-the-children-like-most1438968990',11,21,1,21,'2020-06-28 21:06:17','2020-06-28 21:06:17'),(261,'Single Choice','How is the quality of the radio transmission sound provided to the children','Education','Local Government','Quality','how-is-the-quality-of-the-radio-transmission-sound-provided-to-the-children555247945',11,21,1,21,'2020-06-28 21:08:47','2020-06-28 21:08:47'),(271,'Single Choice','How is the quality of the TV transmission images and sound provided to the children','Education','Local Government','Quality','how-is-the-quality-of-the-tv-transmission-images-and-sound-provided-to-the-children1112802361',11,21,1,21,'2020-06-28 21:10:09','2020-06-28 21:10:09'),(281,'Single Choice','What do you think about the flow of the lesson(s) provided on TV','Education','Local Government','Quality','what-do-you-think-about-the-flow-of-the-lesson(s)-provided-on-tv860678083',11,21,1,21,'2020-06-28 21:11:14','2020-06-28 21:11:14'),(291,'Single Choice','What do you think about the flow of the lesson(s) provided on Radio','Education','Local Government','Quality','what-do-you-think-about-the-flow-of-the-lesson(s)-provided-on-radio870403260',11,21,1,21,'2020-06-28 21:12:28','2020-06-28 21:12:28'),(301,'Single Choice','Is the radio and or TV lessons programmes maintaining the pedagogic requirement','Education','Local Government','Quality','is-the-radio-and-or-tv-lessons-programmes-maintaining-the-pedagogic-requirement1608793165',11,21,1,21,'2020-06-28 21:17:01','2020-06-28 21:17:01'),(311,'Single Choice','Is the radio and or TV school lesson programmes based on the syllabus used by classroom teachers','Education','Local Government','Quality','is-the-radio-and-or-tv-school-lesson-programmes-based-on-the-syllabus-used-by-classroom-teachers83608732',11,21,1,21,'2020-06-28 21:18:04','2020-06-28 21:18:04'),(331,'Single Choice','Did the radio and or television lessons cover the subjects you expected for all grade levels in primary and Quranic schools','Education','Local Government','Usage','did-the-radio-and-or-television-lessons-cover-the-subjects-you-expected-for-all-grade-levels-in-primary-and-quranic-schools1307231246',11,21,1,31,'2020-06-28 21:20:32','2020-06-28 21:20:32'),(341,'Multi Choice','What are the stations involved in the home-based lessons programmes in your LGA','Education','Local Government','Usage','what-are-the-stations-involved-in-the-home-based-lessons-programmes-in-your-lga765317532',21,21,1,31,'2020-06-28 21:22:12','2020-06-28 21:22:12'),(351,'Single Choice','How would you rate the progress of the programme towards the targeted number of children with distance-home-based learning','Education','Local Government','Usage','how-would-you-rate-the-progress-of-the-programme-towards-the-targeted-number-of-children-with-distance-home-based-learning762754252',11,21,1,31,'2020-06-28 21:24:17','2020-06-28 21:24:17'),(361,'Text','How many radio stations and-or TV houses are involved in the transmission of the lessons','Education','Local Government','Usage','how-many-radio-stations-and-or-tv-houses-are-involved-in-the-transmission-of-the-lessons1839476109',1,21,1,31,'2020-06-28 21:26:32','2020-06-28 21:26:32'),(371,'Single Choice','What is the most used station in Bauchi State by parents or children','Education','Local Government','Usage','what-is-the-most-used-station-in-bauchi-state-by-parents-or-children895804979',11,21,1,31,'2020-06-28 21:27:30','2020-06-28 21:27:30'),(381,'Text','What is your LGEA or department role in the home-based learning programme','Education','Local Government','Feedback','what-is-your-lgea-or-department-role-in-the-home-based-learning-programme2021023201',1,21,1,41,'2020-06-28 21:28:42','2020-06-28 21:28:42'),(391,'Text','How do you ensure that the radio or TV houses air the lessons programmes on schedule','Education','Local Government','Feedback','how-do-you-ensure-that-the-radio-or-tv-houses-air-the-lessons-programmes-on-schedule1051431913',1,21,1,41,'2020-06-28 21:29:51','2020-06-28 21:29:51'),(401,'Text','What mechanism have been put in place to know if children are participating in the radio or TV lessons programmes','Education','Local Government','Feedback','what-mechanism-have-been-put-in-place-to-know-if-children-are-participating-in-the-radio-or-tv-lessons-programmes1445009709',1,21,1,41,'2020-06-28 21:32:56','2020-06-28 21:32:56'),(411,'Text','What challenges have you identified with the programme','Education','Local Government','Feedback','what-challenges-have-you-identified-with-the-programme885437976',1,21,1,41,'2020-06-28 21:34:04','2020-06-28 21:34:04'),(421,'Text','What sustainability plan do you have should in case COVID 19 continues and for the post COVID','Education','Local Government','Feedback','what-sustainability-plan-do-you-have-should-in-case-covid-19-continues-and-for-the-post-covid1486159139',1,21,1,41,'2020-06-28 21:34:46','2020-06-28 21:34:46'),(431,'Text','Make any suggestions to improve the programme','Education','Local Government','Feedback','make-any-suggestions-to-improve-the-programme115741595',1,21,1,41,'2020-06-28 21:35:46','2020-06-28 21:35:46'),(441,'Select Option','Select Local Government','Education','Children in Communities','General Information','select-local-government1647776853',31,21,11,51,'2020-06-28 21:36:41','2020-06-28 21:36:41'),(451,'Number','Enter Child\'s age','Education','Children in Communities','General Information','enter-child\'s-age1561863977',61,21,11,51,'2020-06-28 21:42:31','2020-06-28 21:42:31'),(461,'Single Choice','Gender of the child','Education','Children in Communities','General Information','gender-of-the-child2141143386',11,21,11,51,'2020-06-28 21:43:06','2020-06-28 21:43:06'),(471,'Text','Enter name of the School Attended by the Child','Education','Children in Communities','General Information','enter-name-of-the-school-attended-by-the-child103907997',1,21,11,51,'2020-06-28 21:44:26','2020-06-28 21:44:26'),(481,'Select Option','What is the child grade level before covid-19','Education','Children in Communities','General Information','what-is-the-child-grade-level-before-covid-191928753659',31,21,11,51,'2020-06-28 21:45:19','2020-06-28 21:45:19'),(491,'Single Choice','Do you have access to Radio and or TV','Education','Children in Communities','Availability','do-you-have-access-to-radio-and-or-tv393033903',11,21,11,61,'2020-06-28 21:48:36','2020-06-28 21:48:36'),(501,'Multi Choice','Which station do you have access to','Education','Children in Communities','Availability','which-station-do-you-have-access-to41757334',21,21,11,61,'2020-06-28 21:50:57','2020-06-28 21:50:57'),(511,'Single Choice','Are you aware of the ongoing home-based learning programme through Radio and TV','Education','Children in Communities','Availability','are-you-aware-of-the-ongoing-home-based-learning-programme-through-radio-and-tv350654490',11,21,11,61,'2020-06-28 21:52:38','2020-06-28 21:52:38'),(531,'Single Choice','Where did you listen to or watch the Radio and TV learning programme','Education','Children in Communities','Availability','where-did-you-listen-to-or-watch-the-radio-and-tv-learning-programme1667690341',11,21,11,61,'2020-06-28 21:55:30','2020-06-28 21:55:30'),(541,'Multi Choice','How did you join the programme','Education','Children in Communities','Availability','how-did-you-join-the-programme674403406',21,21,11,61,'2020-06-28 21:58:42','2020-06-28 21:58:42'),(551,'Date','When did you start listening the radio and or watching the TV learning programme','Education','Children in Communities','Availability','when-did-you-start-listening-the-radio-and-or-watching-the-tv-learning-programme1783089706',41,21,11,61,'2020-06-28 21:59:59','2020-06-28 21:59:59'),(561,'Number','How often did you use listen to Radio or watch TV learning programme per day','Education','Children in Communities','Availability','how-often-did-you-use-listen-to-radio-or-watch-tv-learning-programme-per-day750371188',61,21,11,61,'2020-06-28 22:00:46','2020-06-28 22:00:46'),(571,'Multi Choice','What subject(s) do you listen to or watch','Education','Children in Communities','Quality','what-subject(s)-do-you-listen-to-or-watch686314771',21,21,11,71,'2020-06-28 22:01:50','2020-06-28 22:01:50'),(581,'Single Choice','Did you understand what the presenter(s) teach for all lessons','Education','Children in Communities','Quality','did-you-understand-what-the-presenter(s)-teach-for-all-lessons1983815108',11,21,11,71,'2020-06-28 22:04:30','2020-06-28 22:04:30'),(591,'Multi Choice','What subject(s) do you like most','Education','Children in Communities','Quality','what-subject(s)-do-you-like-most204163325',21,21,11,71,'2020-06-28 22:06:02','2020-06-28 22:06:02'),(611,'Single Choice','What did you think of the way the facilitator(s) present the lesson(s)','Education','Children in Communities','Quality','what-did-you-think-of-the-way-the-facilitator(s)-present-the-lesson(s)1743097160',11,21,11,71,'2020-06-28 22:11:22','2020-06-28 22:11:22'),(621,'Single Choice','How was the quality of the radio and or TV transmission (based on the station the child uses)','Education','Children in Communities','Quality','how-was-the-quality-of-the-radio-and-or-tv-transmission-(based-on-the-station-the-child-uses)1247036633',11,21,11,71,'2020-06-28 22:12:59','2020-06-28 22:12:59'),(631,'Single Choice','Did you take notes as you listen or watched the lesson','Education','Children in Communities','Usage','did-you-take-notes-as-you-listen-or-watched-the-lesson1434150482',11,21,11,81,'2020-06-29 05:42:58','2020-06-29 05:42:58'),(641,'Single Choice','Do you still remember topics taught','Education','Children in Communities','Usage','do-you-still-remember-topics-taught1727038307',11,21,11,81,'2020-06-29 05:44:27','2020-06-29 05:44:27'),(651,'Single Choice','Do you receive homework after each lesson','Education','Children in Communities','Usage','do-you-receive-homework-after-each-lesson1527006066',11,21,11,81,'2020-06-29 05:46:35','2020-06-29 05:46:35'),(661,'Single Choice','If \"yes\" above, do you do your homework at home','Education','Children in Communities','Usage','if-\"yes\"-above,-do-you-do-your-homework-at-home219336940',11,21,11,81,'2020-06-29 05:49:06','2020-06-29 05:49:06'),(681,'Single Choice','Do you participate at any feedback session','Education','Children in Communities','Usage','do-you-participate-at-any-feedback-session1369443807',11,21,11,81,'2020-06-29 05:53:10','2020-06-29 05:53:10'),(691,'Single Choice','How do you feel about the introduction of home-based lessons through radio and TV','Education','Children in Communities','Feedback','how-do-you-feel-about-the-introduction-of-home-based-lessons-through-radio-and-tv390239418',11,21,11,91,'2020-06-29 05:56:15','2020-06-29 05:56:15'),(701,'Single Choice','Do you think the Radio and or TV lessons helped you','Education','Children in Communities','Feedback','do-you-think-the-radio-and-or-tv-lessons-helped-you1049423993',11,21,11,91,'2020-06-29 05:59:01','2020-06-29 05:59:01'),(711,'Single Choice','How did you get to know about the Radio and or TV lessons','Education','Children in Communities','Feedback','how-did-you-get-to-know-about-the-radio-and-or-tv-lessons1373898078',11,21,11,91,'2020-06-29 06:00:07','2020-06-29 06:00:07'),(721,'Single Choice','Do your parents allow you listen to or watch the learning programme','Education','Children in Communities','Feedback','do-your-parents-allow-you-listen-to-or-watch-the-learning-programme1303427056',11,21,11,91,'2020-06-29 06:02:57','2020-06-29 06:02:57'),(731,'Multi Choice','How do you help your parents','Education','Children in Communities','Feedback','how-do-you-help-your-parents447443637',21,21,11,91,'2020-06-29 06:04:53','2020-06-29 06:04:53'),(741,'Single Choice','Do you know why the government closed schools','Education','Children in Communities','Feedback','do-you-know-why-the-government-closed-schools1239985852',11,21,11,91,'2020-06-29 06:06:32','2020-06-29 06:06:32'),(751,'Text','If “Yes” to previous question, give reason','Education','Children in Communities','Feedback','if-“yes”-to-previous-question,-give-reason11806546',1,21,11,91,'2020-06-29 06:07:11','2020-06-29 06:07:11'),(761,'Multi Choice','What do you do to protect yourself from COVID-19','Education','Children in Communities','Feedback','what-do-you-do-to-protect-yourself-from-covid-191004064730',21,21,11,91,'2020-06-29 06:07:52','2020-06-29 06:07:52'),(771,'Text','What message do you have for your teacher, your friends, the government','Education','Children in Communities','Feedback','what-message-do-you-have-for-your-teacher,-your-friends,-the-government2137084799',1,21,11,91,'2020-06-29 06:11:08','2020-06-29 06:11:08'),(781,'Select Option','Select Local Government','Education','Parents-Household','General Information','select-local-government1426374835',31,21,21,101,'2020-06-29 06:11:47','2020-06-29 06:11:47'),(791,'Single Choice','Gender of the child’s parent','Education','Parents-Household','General Information','gender-of-the-child’s-parent663447281',11,21,21,101,'2020-06-29 06:17:05','2020-06-29 06:17:05'),(801,'Number','How many children do you have','Education','Parents-Household','General Information','how-many-children-do-you-have1926363522',61,21,21,101,'2020-06-29 06:17:52','2020-06-29 06:17:52'),(811,'Select Option','What is your level of educational qualification','Education','Parents-Household','General Information','what-is-your-level-of-educational-qualification897940064',31,21,21,101,'2020-06-29 06:18:34','2020-06-29 06:18:34'),(821,'Single Choice','Are all your children in school','Education','Parents-Household','General Information','are-all-your-children-in-school892572473',11,21,21,101,'2020-06-29 06:22:32','2020-06-29 06:22:32'),(831,'Number','How many of the children are at home because of COVID-19','Education','Parents-Household','General Information','how-many-of-the-children-are-at-home-because-of-covid-191658766719',61,21,21,101,'2020-06-29 06:30:52','2020-06-29 06:30:52'),(841,'Single Choice','Does the household have access to the following','Education','Parents-Household','Availability','does-the-household-have-access-to-the-following882069663',11,21,21,111,'2020-06-29 06:32:37','2020-06-29 06:32:37'),(851,'Multi Choice','What are the names of the stations available in your household','Education','Parents-Household','Availability','what-are-the-names-of-the-stations-available-in-your-household1119153072',21,21,21,111,'2020-06-29 06:34:33','2020-06-29 06:34:33'),(861,'Single Choice','Are you aware of home-based radio or television school lessons programme for school children','Education','Parents-Household','Availability','3.-are-you-aware-of-home-based-radio-or-television-school-lessons-programme-for-school-children888646859',11,21,21,111,'2020-06-29 06:36:10','2020-06-30 11:31:44'),(871,'Number','How many of your children are accessing the lessons broadcasted','Education','Parents-Household','Availability','how-many-of-your-children-are-accessing-the-lessons-broadcasted2077864149',61,21,21,111,'2020-06-29 06:37:01','2020-06-29 06:37:01'),(881,'Single Choice','Do(es) your child(ren) participate fully at the radio or television school lessons programme','Education','Parents-Household','Availability','do(es)-your-child(ren)-participate-fully-at-the-radio-or-television-school-lessons-programme823543259',11,21,21,111,'2020-06-29 06:39:40','2020-06-29 06:39:40'),(901,'Multi Choice','Which subjects do your child(ren) listen to in the lessons','Education','Parents-Household','Quality','which-subjects-do-your-child(ren)-listen-to-in-the-lessons5069222',21,21,21,121,'2020-06-29 12:39:42','2020-06-29 12:39:42'),(911,'Number','How many days in a week are lessons aired on Radio and Television','Education','Parents-Household','Quality','how-many-days-in-a-week-are-lessons-aired-on-radio-and-television1651996752',61,21,21,121,'2020-06-29 13:01:51','2020-06-29 13:01:51'),(931,'Single Choice','How would you rate the audio quality of the radio lessons','Education','Parents-Household','Quality','how-would-you-rate-the-audio-quality-of-the-radio-lessons419102711',11,21,21,121,'2020-06-29 13:06:02','2020-06-29 13:06:02'),(941,'Single Choice','How would you rate the image and sound quality of the TV lessons','Education','Parents-Household','Quality','how-would-you-rate-the-image-and-sound-quality-of-the-tv-lessons1544826899',11,21,21,121,'2020-06-29 13:08:27','2020-06-29 13:08:27'),(951,'Single Choice','What do you think about the quality of the lessons presented','Education','Parents-Household','Quality','what-do-you-think-about-the-quality-of-the-lessons-presented1792223386',11,21,21,121,'2020-06-29 13:10:52','2020-06-29 13:10:52'),(961,'Single Choice','What do you think about the flow of the lesson presented','Education','Parents-Household','Quality','what-do-you-think-about-the-flow-of-the-lesson-presented1752769780',11,21,21,121,'2020-06-29 13:12:23','2020-06-29 13:12:23'),(971,'Single Choice','Do you often listen to Radio or watch TV with your children','Education','Parents-Household','Usage','do-you-often-listen-to-radio-or-watch-tv-with-your-children963977553',11,21,21,131,'2020-06-29 13:14:22','2020-06-29 13:14:22'),(981,'Single Choice','Do you think the lessons were helpful for your child(ren)','Education','Parents-Household','Usage','do-you-think-the-lessons-were-helpful-for-your-child(ren)1284141401',11,21,21,131,'2020-06-29 13:15:46','2020-06-29 13:15:46'),(991,'Single Choice','Do(es) your child(ren) have enough time to learn','Education','Parents-Household','Usage','do(es)-your-child(ren)-have-enough-time-to-learn1151618744',11,21,21,131,'2020-06-29 13:16:53','2020-06-29 13:16:53'),(1011,'Single Choice','Who help(s) your child or children with their learning through Radio and or TV','Education','Parents-Household','Usage','who-help(s)-your-child-or-children-with-their-learning-through-radio-and-or-tv1937078672',11,21,21,131,'2020-06-29 13:18:45','2020-06-29 13:18:45'),(1021,'Single Choice','How are your child or children helped with learning through Radio and or TV','Education','Parents-Household','Usage','how-are-your-child-children-helped-with-learning-through-radio-and-or-tv1325982035',11,21,21,131,'2020-06-29 13:21:23','2020-06-30 17:46:39'),(1031,'Single Choice','How do you help your child or children with learning through the radio or television program','Education','Parents-Household','Usage','how-do-you-help-your-child-or-children-with-learning-through-the-radio-or-television-program836179481',11,21,21,131,'2020-06-29 13:23:22','2020-06-29 13:23:22'),(1041,'Single Choice','How do(es) your child(ren) get learning materials to support learning','Education','Parents-Household','Usage','how-do(es)-your-child(ren)-get-learning-materials-to-support-learning1710796468',11,21,21,131,'2020-06-29 13:32:40','2020-06-29 13:32:40'),(1051,'Single Choice','What do you think about the introduction of home-based lessons through radio and TV','Education','Parents-Household','Feedback','what-do-you-think-about-the-introduction-of-home-based-lessons-through-radio-and-tv1168277424',11,21,21,141,'2020-06-29 13:35:54','2020-06-29 13:35:54'),(1061,'Single Choice','Before the commencement of the radio or TV lessons, were you supporting your child(ren) to continue to','Education','Parents-Household','Feedback','before-the-commencement-of-the-radio-or-tv-lessons,-were-you-supporting-your-child(ren)-to-continue-to1893224707',11,21,21,141,'2020-06-29 13:37:36','2020-06-29 13:37:36'),(1071,'Text','Are there any challenges that you and your child or children have identified with the lessons','Education','Parents-Household','Feedback','are-there-any-challenges-that-you-and-your-child-or-children-have-identified-with-the-lessons1166706805',1,21,21,141,'2020-06-29 13:38:48','2020-06-29 13:38:48'),(1091,'Single Choice','How do you protect yourself and your children or family against the COVID-19','Education','Parents-Household','Feedback','how-do-you-protect-yourself-and-your-children-or-family-against-the-covid-191704323058',11,21,21,141,'2020-06-29 13:40:12','2020-06-29 13:40:12'),(1101,'Single Choice','Do you receive message on COVID 19','Education','Parents-Household','Feedback','do-you-receive-message-on-covid-191127859706',11,21,21,141,'2020-06-29 13:42:39','2020-06-29 13:42:39'),(1111,'Multi Choice','How do you receive message on COVID 19','Education','Parents-Household','Feedback','how-do-you-receive-message-on-covid-191561594698',21,21,21,141,'2020-06-29 13:43:50','2020-06-29 13:43:50'),(1121,'Text','Any suggestions for improvement of Radio and TV programmes','Education','Parents-Household','Feedback','any-suggestions-for-improvement-of-radio-and-tv-programmes1684888883',1,21,21,141,'2020-06-29 13:48:10','2020-06-29 13:48:10'),(1131,'Select Option','Name of the radio or TV station','Education','Station','Station Information','name-of-the-radio-or-tv-station943660975',31,21,31,201,'2020-06-29 17:05:13','2020-06-29 17:05:13'),(1141,'Select Option','Location of the Station','Education','Station','Station Information','location-of-the-station928153994',31,21,31,201,'2020-06-29 17:07:31','2020-06-29 17:07:31'),(1151,'Single Choice','What is the coverage of your station','Education','Station','Station Information','what-is-the-coverage-of-your-station950194001',11,21,31,201,'2020-06-29 17:15:42','2020-06-29 17:15:42'),(1161,'Single Choice','What time a day do you air the school lessons programmes','Education','Station','Station Information','what-time-a-day-do-you-air-the-school-lessons-programmes564156516',11,21,31,201,'2020-06-29 17:17:29','2020-06-29 17:17:29'),(1171,'Number','How many hours or minutes on average do you air each eposide or lesson','Education','Station','Station Information','how-many-hours-or-minutes-on-average-do-you-air-each-eposide-or-lesson913666186',61,21,31,201,'2020-06-29 17:21:10','2020-06-29 17:21:10'),(1181,'Number','How many days are episodes or lessons broadcasted per week','Education','Station','Station Information','how-many-days-are-episodes-or-lessons-broadcasted-per-week1086794975',61,21,31,201,'2020-06-29 17:22:03','2020-06-29 17:22:03'),(1191,'Text','What mechanism have been put in place to know the number of students accessing the radio or TV lessons','Education','Station','Station Information','what-mechanism-have-been-put-in-place-to-know-the-number-of-students-accessing-the-radio-or-tv-lessons535463829',1,21,31,201,'2020-06-29 17:23:13','2020-06-29 17:23:13'),(1201,'Number','How often are lessons rebroadcasted in a day','Education','Station','Station Information','how-often-are-lessons-rebroadcasted-in-a-day686894279',61,21,31,201,'2020-06-29 17:24:15','2020-06-29 17:24:15'),(1211,'Number','How often are lessons rebroadcasted in a week','Education','Station','Station Information','how-often-are-lessons-rebroadcasted-in-a-week2115663458',61,21,31,201,'2020-06-29 17:24:51','2020-06-29 17:24:51'),(1221,'Single Choice','Do you organize feedback sessions','Education','Station','Station Information','do-you-organize-feedback-sessions1743442622',11,21,31,201,'2020-06-29 17:25:18','2020-06-29 17:25:18'),(1231,'Number','If yes, how often do you organize feedback session','Education','Station','Station Information','if-yes,-how-often-do-you-organize-feedback-session1142152467',61,21,31,201,'2020-06-29 17:26:08','2020-06-29 17:26:08'),(1241,'Text','Any suggestions for improvement','Education','Station','Station Information','any-suggestions-for-improvement217425402',1,21,31,201,'2020-06-29 17:26:41','2020-06-29 17:26:41'),(1251,'Single Choice','Select Office','Education','SUBEB','General Information','select-office912074654',11,21,41,151,'2020-06-29 17:28:31','2020-06-29 17:28:31'),(1261,'Text','Department of staff','Education','SUBEB','General Information','department-of-staff1621718898',1,21,41,151,'2020-06-29 17:30:00','2020-06-29 17:30:00'),(1281,'Date','When did the airing of the home-based lessons programme start in Bauchi State','Education','SUBEB','General Information','when-did-the-airing-of-the-home-based-lessons-programme-start-in-bauchi-state795079474',41,21,41,151,'2020-06-29 17:31:06','2020-06-29 17:31:06'),(1291,'Single Choice','What is the most used station in Bauchi State by parents or children','Education','SUBEB','Availability','what-is-the-most-used-station-in-bauchi-state-by-parents-or-children2098734020',11,21,41,161,'2020-06-29 17:31:45','2020-06-29 17:31:45'),(1301,'Single Choice','Is the Radio and TV reception available in all locations (or every communities) in Bauchi','Education','SUBEB','Availability','is-the-radio-and-tv-reception-available-in-all-locations-(or-every-communities)-in-bauchi186145592',11,21,41,161,'2020-06-29 17:32:49','2020-06-29 17:32:49'),(1311,'Single Choice','How would you rate the coverage of the radio in the LGAs or communities','Education','SUBEB','Availability','how-would-you-rate-the-coverage-of-the-radio-in-the-lgas-or-communities1020582237',11,21,41,161,'2020-06-29 17:33:54','2020-06-29 17:33:54'),(1321,'Single Choice','How would you rate the coverage of the Television in the LGAs or communities','Education','SUBEB','Availability','how-would-you-rate-the-coverage-of-the-television-in-the-lgas-or-communities82572012',11,21,41,161,'2020-06-29 17:37:11','2020-06-29 17:37:11'),(1331,'Single Choice','For how many weeks now the radio or TV lessons programme have been on air','Education','SUBEB','Availability','for-how-many-weeks-now-the-radio-or-tv-lessons-programme-have-been-on-air1997598771',11,21,41,161,'2020-06-29 17:39:46','2020-06-29 17:39:46'),(1341,'Single Choice','Have you ever listened to the Radio and or watched TV programmes being aired','Education','SUBEB','Availability','have-you-ever-listened-to-the-radio-and-or-watched-tv-programmes-being-aired1257480345',11,21,41,161,'2020-06-29 17:41:31','2020-06-29 17:41:31'),(1351,'Multi Choice','What are the subjects or lesson(s) taught through the radio or TV school lessons program','Education','SUBEB','Quality','what-are-the-subjects-or-lesson(s)-taught-through-the-radio-or-tv-school-lessons-program1750465206',21,21,41,171,'2020-06-29 17:42:43','2020-06-29 17:42:43'),(1361,'Single Choice','How would you rate the quality of the radio sound provided to the children','Education','SUBEB','Quality','how-would-you-rate-the-quality-of-the-radio-sound-provided-to-the-children834933878',11,21,41,171,'2020-06-29 17:49:11','2020-06-29 17:49:11'),(1371,'Single Choice','How would you rate the quality of the TV images and sound provided to the children How would you rate the quality of the TV images and sound provided to the children','Education','SUBEB','Quality','how-would-you-rate-the-quality-of-the-tv-images-and-sound-provided-to-the-children-how-would-you-rate-the-quality-of-the-tv-images-and-sound-provided-to-the-children212207642',11,21,41,171,'2020-06-29 17:51:41','2020-06-29 17:51:41'),(1381,'Single Choice','Is the radio and or TV lessons programmes maintaining the pedagogic requirement','Education','SUBEB','Quality','is-the-radio-and-or-tv-lessons-programmes-maintaining-the-pedagogic-requirement857937234',11,21,41,171,'2020-06-29 17:56:37','2020-06-29 17:56:37'),(1391,'Single Choice','Is the radio and or TV school lessons programmes anchored or facilitated by professional teachers or educators','Education','SUBEB','Quality','is-the-radio-and-or-tv-school-lessons-programmes-anchored-or-facilitated-by-professional-teachers-or-educators1445665672',11,21,41,171,'2020-06-29 17:57:47','2020-06-29 17:57:47'),(1401,'Single Choice','Is the radio and or TV school lesson programmes based on the syllabus used by classroom teachers','Education','SUBEB','Quality','is-the-radio-and-or-tv-school-lesson-programmes-based-on-the-syllabus-used-by-classroom-teachers2140638874',11,21,41,171,'2020-06-29 17:58:50','2020-06-29 17:58:50'),(1411,'Multi Choice','What are the stations involved in the home-based lessons programmes','Education','SUBEB','Usage','what-are-the-stations-involved-in-the-home-based-lessons-programmes1265606155',21,21,41,181,'2020-06-29 18:00:57','2020-06-29 18:00:57'),(1421,'Single Choice','How would you rate the progress of the programme towards the targeted number of children with distance or home-based learning','Education','SUBEB','Usage','how-would-you-rate-the-progress-of-the-programme-towards-the-targeted-number-of-children-with-distance-or-home-based-learning1749867102',11,21,41,181,'2020-06-29 18:04:50','2020-06-29 18:04:50'),(1431,'Text','What is your office or department role in the home-based learning programme','Education','SUBEB','Feedback','what-is-your-office-or-department-role-in-the-home-based-learning-programme1336101131',1,21,41,191,'2020-06-29 18:06:40','2020-06-29 18:06:40'),(1441,'Single Choice','Who are the partners in the production of the Radio and TV learning programmes','Education','SUBEB','Feedback','who-are-the-partners-in-the-production-of-the-radio-and-tv-learning-programmes238129371',11,21,41,191,'2020-06-29 18:07:49','2020-06-29 18:07:49'),(1451,'Text','What challenges have you identified with the programme','Education','SUBEB','Feedback','what-challenges-have-you-identified-with-the-programme434649748',1,21,41,191,'2020-06-29 20:47:07','2020-06-29 20:47:07'),(1461,'Text','What sustainability plan does your office or department have should COVID 19 continues and for the post COVID 19','Education','SUBEB','Feedback','what-sustainability-plan-does-your-office-or-department-have-should-covid-19-continues-and-for-the-post-covid-19374875394',1,21,41,191,'2020-06-29 20:49:00','2020-06-29 20:49:00'),(1471,'Text','Make any suggestions to improve the programme','Education','SUBEB','Feedback','make-any-suggestions-to-improve-the-programme1689473554',1,21,41,191,'2020-06-29 20:53:02','2020-06-29 20:53:02'),(1481,'Text','Position of Staff','Education','SUBEB','General Information','position-of-staff272689224',1,21,41,151,'2020-07-03 11:27:40','2020-07-03 11:27:40'),(1491,'Text','Position of Staff','Education','Local Government','General Information','position-of-staff1839192829',1,21,1,1,'2020-07-03 11:42:19','2020-07-03 11:42:19'),(1501,'Number','how many of your children are in Nursery','Education','Parents-Household','General Information','how-many-of-your-children-are-in-nursery150714036',61,21,21,101,'2020-07-03 12:01:16','2020-07-03 12:01:16'),(1511,'Number','how many of your children are in Primary','Education','Parents-Household','General Information','how-many-of-your-children-are-in-primary1587338881',61,21,21,101,'2020-07-03 12:02:00','2020-07-03 12:02:00'),(1521,'Number','how many of your children are in Junior Secondary','Education','Parents-Household','General Information','how-many-of-your-children-are-in-junior-secondary1259215166',61,21,21,101,'2020-07-03 12:03:07','2020-07-03 12:03:07'),(1531,'Number','how many of your children are in Senior Secondary','Education','Parents-Household','General Information','how-many-of-your-children-are-in-senior-secondary705304517',61,21,21,101,'2020-07-03 12:03:44','2020-07-03 12:03:44'),(1541,'Number','how many of your children are in Quranic school learners','Education','Parents-Household','General Information','how-many-of-your-children-are-in-quranic-school-learners1976629087',61,21,21,101,'2020-07-03 12:04:29','2020-07-03 12:04:29'),(1551,'Number','how many of your children are in Other form of institutions','Education','Parents-Household','General Information','how-many-of-your-children-are-in-other-form-of-institutions88239428',61,21,21,101,'2020-07-03 12:05:29','2020-07-03 12:05:29'),(1561,'Number','How many girl(s) child or children do you have participating at the lessons','Education','Parents-Household','Availability','how-many-girls-children-do-you-have-participating-at-the-lessons1581058470',61,21,21,111,'2020-07-03 12:07:33','2020-07-03 12:15:38'),(1571,'Number','How many Boy(s) child or children do you have participating at the lessons','Education','Parents-Household','Availability','how-many-boy(s)-child-or-children-do-you-have-participating-at-the-lessons44393241',61,21,21,111,'2020-07-03 12:12:07','2020-07-03 12:12:07'),(1581,'Multi Choice','What level of children are targeted through the radio-TV program','Education','Local Government','Quality','what-level-of-children-are-targeted-through-the-radio-tv-program1839012560',21,21,1,21,'2020-07-04 16:07:10','2020-07-04 16:07:10'),(1591,'Multi Choice','Why do you like that subject','Education','Children in Communities','Quality','why-do-you-like-that-subject854164147',21,21,11,71,'2020-07-04 16:14:45','2020-07-04 16:14:45'),(1601,'Multi Choice','How do you get clarification or assistance on the lessons not understood','Education','Children in Communities','Usage','how-do-you-get-clarification-or-assistance-on-the-lessons-not-understood174305024',21,21,11,81,'2020-07-04 16:39:12','2020-07-04 16:39:12');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reminders`
--

DROP TABLE IF EXISTS `reminders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reminders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reminders`
--

LOCK TABLES `reminders` WRITE;
/*!40000 ALTER TABLE `reminders` DISABLE KEYS */;
/*!40000 ALTER TABLE `reminders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responses`
--

DROP TABLE IF EXISTS `responses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responses`
--

LOCK TABLES `responses` WRITE;
/*!40000 ALTER TABLE `responses` DISABLE KEYS */;
/*!40000 ALTER TABLE `responses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_users`
--

DROP TABLE IF EXISTS `role_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_users`
--

LOCK TABLES `role_users` WRITE;
/*!40000 ALTER TABLE `role_users` DISABLE KEYS */;
INSERT INTO `role_users` VALUES (1,1,'2020-06-27 16:35:46','2020-06-27 16:35:46'),(11,11,'2020-06-27 16:35:46','2020-06-27 16:35:46'),(21,21,'2020-06-27 16:35:46','2020-06-27 16:35:46'),(31,31,'2020-06-27 16:35:47','2020-06-27 16:35:47'),(101,21,'2020-07-03 08:30:34','2020-07-03 08:30:34'),(111,21,'2020-07-03 08:34:27','2020-07-03 08:34:27'),(121,1,'2020-07-03 10:39:31','2020-07-03 10:39:31'),(131,21,'2020-07-03 10:42:10','2020-07-03 10:42:10'),(141,21,'2020-07-04 07:22:11','2020-07-04 07:22:11'),(151,21,'2020-07-04 07:26:34','2020-07-04 07:26:34'),(161,21,'2020-07-04 07:30:20','2020-07-04 07:30:20'),(171,1,'2020-07-04 16:23:25','2020-07-04 16:23:25'),(171,21,'2020-07-04 07:32:06','2020-07-04 07:32:06'),(181,21,'2020-07-04 07:33:36','2020-07-04 07:33:36'),(191,21,'2020-07-04 07:35:24','2020-07-04 07:35:24'),(201,21,'2020-07-04 07:36:42','2020-07-04 07:36:42'),(211,21,'2020-07-04 07:38:02','2020-07-04 07:38:02'),(221,21,'2020-07-04 07:47:15','2020-07-04 07:47:15'),(231,21,'2020-07-04 07:49:18','2020-07-04 07:49:18'),(241,21,'2020-07-04 07:51:09','2020-07-04 07:51:09'),(251,21,'2020-07-04 07:52:36','2020-07-04 07:52:36'),(261,21,'2020-07-04 07:54:33','2020-07-04 07:54:33'),(271,21,'2020-07-04 07:55:38','2020-07-04 07:55:38'),(281,21,'2020-07-04 07:56:40','2020-07-04 07:56:40'),(291,21,'2020-07-04 07:57:47','2020-07-04 07:57:47'),(301,21,'2020-07-04 07:59:00','2020-07-04 07:59:00'),(311,21,'2020-07-04 08:00:10','2020-07-04 08:00:10'),(321,21,'2020-07-04 08:01:25','2020-07-04 08:01:25'),(331,21,'2020-07-05 08:39:35','2020-07-05 08:39:35'),(341,21,'2020-07-05 08:47:01','2020-07-05 08:47:01');
/*!40000 ALTER TABLE `role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'superadmin','Super Admin',NULL,'Can Create other users, perform CREATE, UPDATE, READ and DELETE on the system.',NULL,NULL),(11,'admin','Admin',NULL,'Can Create other users but not super admin, perform CREATE, UPDATE, READ and DELETE on the system.',NULL,NULL),(21,'user','User',NULL,'Can READ on the system.',NULL,NULL),(31,'partner','Partner',NULL,'Can READ on the system.',NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sms`
--

DROP TABLE IF EXISTS `sms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sms`
--

LOCK TABLES `sms` WRITE;
/*!40000 ALTER TABLE `sms` DISABLE KEYS */;
/*!40000 ALTER TABLE `sms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `states_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=362 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` VALUES (1,'Abia',NULL,NULL,NULL),(11,'Adamawa',NULL,NULL,NULL),(21,'Akwa Ibom',NULL,NULL,NULL),(31,'Anambra',NULL,NULL,NULL),(41,'Bauchi',NULL,NULL,NULL),(51,'Bayelsa',NULL,NULL,NULL),(61,'Benue',NULL,NULL,NULL),(71,'Borno',NULL,NULL,NULL),(81,'Cross River',NULL,NULL,NULL),(91,'Delta',NULL,NULL,NULL),(101,'Ebonyi',NULL,NULL,NULL),(111,'Edo',NULL,NULL,NULL),(121,'Ekiti',NULL,NULL,NULL),(131,'Enugu',NULL,NULL,NULL),(141,'Federal Capital Territory',NULL,NULL,NULL),(151,'Gombe',NULL,NULL,NULL),(161,'Imo',NULL,NULL,NULL),(171,'Jigawa',NULL,NULL,NULL),(181,'Kaduna',NULL,NULL,NULL),(191,'Kano',NULL,NULL,NULL),(201,'Katsina',NULL,NULL,NULL),(211,'Kebbi',NULL,NULL,NULL),(221,'Kogi',NULL,NULL,NULL),(231,'Kwara',NULL,NULL,NULL),(241,'Lagos',NULL,NULL,NULL),(251,'Nasarawa',NULL,NULL,NULL),(261,'Niger',NULL,NULL,NULL),(271,'Ogun',NULL,NULL,NULL),(281,'Ondo',NULL,NULL,NULL),(291,'Osun',NULL,NULL,NULL),(301,'Oyo',NULL,NULL,NULL),(311,'Plateau',NULL,NULL,NULL),(321,'Rivers',NULL,NULL,NULL),(331,'Sokoto',NULL,NULL,NULL),(341,'Taraba',NULL,NULL,NULL),(351,'Yobe',NULL,NULL,NULL),(361,'Zamfara',NULL,NULL,NULL);
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stocks`
--

DROP TABLE IF EXISTS `stocks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stocks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `quantity` int(11) NOT NULL,
  `in_stock` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stocks_product_id_foreign` (`product_id`),
  CONSTRAINT `stocks_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stocks`
--

LOCK TABLES `stocks` WRITE;
/*!40000 ALTER TABLE `stocks` DISABLE KEYS */;
INSERT INTO `stocks` VALUES (1,40000,40000,NULL,1,'2020-07-02 22:50:23','2020-07-02 22:50:23');
/*!40000 ALTER TABLE `stocks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcategories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_id` bigint(20) unsigned NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subcategories_slug_unique` (`slug`),
  KEY `subcategories_program_id_foreign` (`program_id`),
  CONSTRAINT `subcategories_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategories`
--

LOCK TABLES `subcategories` WRITE;
/*!40000 ALTER TABLE `subcategories` DISABLE KEYS */;
INSERT INTO `subcategories` VALUES (1,'Local Government',21,'local-government747730725','2020-06-27 16:38:12','2020-06-27 16:38:12'),(11,'Children in Communities',21,'children-in-communities1265012289','2020-06-27 16:38:56','2020-06-27 16:38:56'),(21,'Parents-Household',21,'parents-household1170935287','2020-06-27 16:39:43','2020-06-27 16:39:43'),(31,'Station',21,'station1659952523','2020-06-27 16:40:12','2020-06-27 16:40:12'),(41,'SUBEB',21,'subeb965408482','2020-06-27 16:40:33','2020-06-27 16:40:33');
/*!40000 ALTER TABLE `subcategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `submissions`
--

DROP TABLE IF EXISTS `submissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `submissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `response` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `form_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `submissions_user_id_foreign` (`user_id`),
  KEY `submissions_form_id_foreign` (`form_id`),
  CONSTRAINT `submissions_form_id_foreign` FOREIGN KEY (`form_id`) REFERENCES `forms` (`id`),
  CONSTRAINT `submissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `submissions`
--

LOCK TABLES `submissions` WRITE;
/*!40000 ALTER TABLE `submissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `submissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `survey_types`
--

DROP TABLE IF EXISTS `survey_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `survey_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_id` bigint(20) unsigned NOT NULL,
  `program_id` bigint(20) unsigned DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `survey_types_slug_unique` (`slug`),
  KEY `survey_types_program_id_foreign` (`program_id`),
  KEY `survey_types_sub_category_id_foreign` (`sub_category_id`),
  CONSTRAINT `survey_types_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`),
  CONSTRAINT `survey_types_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `subcategories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `survey_types`
--

LOCK TABLES `survey_types` WRITE;
/*!40000 ALTER TABLE `survey_types` DISABLE KEYS */;
INSERT INTO `survey_types` VALUES (1,'General Information',1,21,'general-information339094393','2020-06-27 16:41:19','2020-06-27 16:41:19'),(11,'Availability',1,21,'availability245839539','2020-06-27 16:41:37','2020-06-27 16:41:37'),(21,'Quality',1,21,'quality737340951','2020-06-27 16:42:18','2020-06-27 16:42:18'),(31,'Usage',1,21,'usage743971412','2020-06-27 16:42:36','2020-06-27 16:42:36'),(41,'Feedback',1,21,'feedback906223522','2020-06-27 16:42:52','2020-06-27 16:42:52'),(51,'General Information',11,21,'general-information1647248432','2020-06-27 16:46:22','2020-06-27 16:46:22'),(61,'Availability',11,21,'availability1085171130','2020-06-27 16:46:47','2020-06-27 16:46:47'),(71,'Quality',11,21,'quality134857914','2020-06-27 16:47:12','2020-06-27 16:47:12'),(81,'Usage',11,21,'usage586767366','2020-06-27 16:47:31','2020-06-27 16:47:31'),(91,'Feedback',11,21,'feedback1318806919','2020-06-27 16:48:02','2020-06-27 16:48:02'),(101,'General Information',21,21,'general-information678265062','2020-06-27 16:49:00','2020-06-27 16:49:00'),(111,'Availability',21,21,'availability1965655466','2020-06-27 16:50:10','2020-06-27 16:50:10'),(121,'Quality',21,21,'quality343966625','2020-06-27 16:51:25','2020-06-27 16:51:25'),(131,'Usage',21,21,'usage1787499984','2020-06-27 16:51:59','2020-06-27 16:51:59'),(141,'Feedback',21,21,'feedback1604715362','2020-06-27 16:53:40','2020-06-27 16:53:40'),(151,'General Information',41,21,'general-information1641369154','2020-06-27 16:54:20','2020-06-27 16:54:20'),(161,'Availability',41,21,'availability19829907','2020-06-27 16:54:50','2020-06-27 16:54:50'),(171,'Quality',41,21,'quality1661237696','2020-06-27 16:55:22','2020-06-27 16:55:22'),(181,'Usage',41,21,'usage294978323','2020-06-27 16:56:12','2020-06-27 16:56:12'),(191,'Feedback',41,21,'feedback74102144','2020-06-27 16:56:38','2020-06-27 16:56:38'),(201,'Station Information',31,21,'station-information521145476','2020-06-27 16:57:22','2020-06-27 16:57:22');
/*!40000 ALTER TABLE `survey_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surveys`
--

DROP TABLE IF EXISTS `surveys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surveys` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `program_id` bigint(20) unsigned NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `surveys_program_id_foreign` (`program_id`),
  CONSTRAINT `surveys_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surveys`
--

LOCK TABLES `surveys` WRITE;
/*!40000 ALTER TABLE `surveys` DISABLE KEYS */;
/*!40000 ALTER TABLE `surveys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `throttle`
--

DROP TABLE IF EXISTS `throttle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=421 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `throttle`
--

LOCK TABLES `throttle` WRITE;
/*!40000 ALTER TABLE `throttle` DISABLE KEYS */;
INSERT INTO `throttle` VALUES (1,NULL,'global',NULL,'2020-06-27 17:31:53','2020-06-27 17:31:53'),(11,NULL,'ip','10.9.247.118','2020-06-27 17:31:53','2020-06-27 17:31:53'),(21,NULL,'global',NULL,'2020-06-29 14:12:07','2020-06-29 14:12:07'),(31,NULL,'ip','10.69.229.167','2020-06-29 14:12:07','2020-06-29 14:12:07'),(41,NULL,'global',NULL,'2020-07-01 10:01:52','2020-07-01 10:01:52'),(51,NULL,'ip','10.47.250.44','2020-07-01 10:01:52','2020-07-01 10:01:52'),(61,NULL,'global',NULL,'2020-07-01 10:02:01','2020-07-01 10:02:01'),(71,NULL,'ip','10.47.250.44','2020-07-01 10:02:01','2020-07-01 10:02:01'),(81,NULL,'global',NULL,'2020-07-01 10:02:03','2020-07-01 10:02:03'),(91,NULL,'ip','10.47.250.44','2020-07-01 10:02:03','2020-07-01 10:02:03'),(101,NULL,'global',NULL,'2020-07-01 10:02:06','2020-07-01 10:02:06'),(111,NULL,'ip','10.47.250.44','2020-07-01 10:02:06','2020-07-01 10:02:06'),(121,NULL,'global',NULL,'2020-07-01 11:55:49','2020-07-01 11:55:49'),(131,NULL,'ip','10.67.225.150','2020-07-01 11:55:49','2020-07-01 11:55:49'),(141,NULL,'global',NULL,'2020-07-01 16:49:35','2020-07-01 16:49:35'),(151,NULL,'ip','10.69.229.158','2020-07-01 16:49:35','2020-07-01 16:49:35'),(161,NULL,'global',NULL,'2020-07-01 16:51:33','2020-07-01 16:51:33'),(171,NULL,'ip','10.69.234.207','2020-07-01 16:51:33','2020-07-01 16:51:33'),(181,NULL,'global',NULL,'2020-07-01 16:51:56','2020-07-01 16:51:56'),(191,NULL,'ip','10.63.109.106','2020-07-01 16:51:56','2020-07-01 16:51:56'),(201,NULL,'global',NULL,'2020-07-01 16:52:16','2020-07-01 16:52:16'),(211,NULL,'ip','10.45.252.73','2020-07-01 16:52:16','2020-07-01 16:52:16'),(221,NULL,'global',NULL,'2020-07-01 16:52:29','2020-07-01 16:52:29'),(231,NULL,'ip','10.45.252.73','2020-07-01 16:52:29','2020-07-01 16:52:29'),(241,NULL,'global',NULL,'2020-07-01 16:54:49','2020-07-01 16:54:49'),(251,NULL,'ip','10.69.237.10','2020-07-01 16:54:49','2020-07-01 16:54:49'),(261,NULL,'global',NULL,'2020-07-01 16:55:24','2020-07-01 16:55:24'),(271,NULL,'ip','10.45.68.6','2020-07-01 16:55:24','2020-07-01 16:55:24'),(281,NULL,'global',NULL,'2020-07-01 20:59:52','2020-07-01 20:59:52'),(291,NULL,'ip','10.79.224.171','2020-07-01 20:59:52','2020-07-01 20:59:52'),(301,NULL,'global',NULL,'2020-07-01 21:19:06','2020-07-01 21:19:06'),(311,NULL,'ip','10.65.69.10','2020-07-01 21:19:06','2020-07-01 21:19:06'),(321,NULL,'global',NULL,'2020-07-01 21:19:17','2020-07-01 21:19:17'),(331,NULL,'ip','10.65.69.10','2020-07-01 21:19:17','2020-07-01 21:19:17'),(341,NULL,'global',NULL,'2020-07-02 09:16:11','2020-07-02 09:16:11'),(351,NULL,'ip','10.63.70.171','2020-07-02 09:16:11','2020-07-02 09:16:11'),(361,NULL,'global',NULL,'2020-07-02 09:16:43','2020-07-02 09:16:43'),(371,NULL,'ip','10.51.187.17','2020-07-02 09:16:43','2020-07-02 09:16:43'),(381,NULL,'global',NULL,'2020-07-02 09:17:23','2020-07-02 09:17:23'),(391,NULL,'ip','10.51.187.17','2020-07-02 09:17:23','2020-07-02 09:17:23'),(401,NULL,'global',NULL,'2020-07-05 09:27:11','2020-07-05 09:27:11'),(411,NULL,'ip','10.73.248.58','2020-07-05 09:27:12','2020-07-05 09:27:12');
/*!40000 ALTER TABLE `throttle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `quantity_dispatched` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_telephone1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_plate_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_ref` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `delivery_status` enum('pending','delivered') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `acknowledged` tinyint(1) NOT NULL DEFAULT '0',
  `acknowledged_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_dispatched_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `partner_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transactions_transaction_ref_unique` (`transaction_ref`),
  KEY `transactions_product_id_foreign` (`product_id`),
  KEY `transactions_user_id_foreign` (`user_id`),
  KEY `transactions_partner_id_foreign` (`partner_id`),
  CONSTRAINT `transactions_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`),
  CONSTRAINT `transactions_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=351 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'superadmin@unicef.com','$2y$10$9JtwB72C3K9t/48XSKu.gebHNm066p9bOLjLo4AZ8eFcdZgAc1rZ2',NULL,'2020-07-02 17:03:26','Super','Admin','1234567890','superadmin','male',NULL,NULL,NULL,'super-admin','2020-06-27 16:35:46','2020-07-02 17:03:26'),(11,'admin@unicef.com','$2y$10$Zv9JCq9og6LMhoEkDWbMmekYtV/.9o.rG/AyUEwqWhHiH7tFssHY.',NULL,'2020-07-05 10:07:25','Admin','Admin','1234567890','admin','male',NULL,NULL,NULL,'admin','2020-06-27 16:35:46','2020-07-05 10:07:25'),(21,'user@unicef.com','$2y$10$GFvJpsJVx7XceZety3P7zeqCXKAmg2.Bi91viwgMfbM4nUhGKRaK.',NULL,NULL,'John','Snow','1234567890','guest','male',NULL,NULL,NULL,'nani-snow','2020-06-27 16:35:46','2020-06-27 16:35:46'),(31,'partner@unicef.com','$2y$10$mzCCTEiLSsM5p6.zlhMpvecZBLHmZ.BFmptvg4i78bk05b8QTMZae',NULL,NULL,'John','Snow','1234567890','partner','male',NULL,NULL,NULL,'partner-snow','2020-06-27 16:35:46','2020-06-27 16:35:46'),(101,'cybertron12k@yahoo.co.uk','$2y$10$Y076NdKpaoMzy2CY8nX17OxuAfl8FHrbBpw6nWW0VV1UiYF52S1NW',NULL,NULL,'Sunday','Dogara','+2348038832203',NULL,'male',NULL,NULL,NULL,'sunday-dogara','2020-07-03 08:30:34','2020-07-03 08:30:34'),(111,'sdogara@ixnoteservices.com','$2y$10$IrjLUrJ3VXxfuxyNN1Yq7uxGwClchXVuRN9PK9sJkN6KhwGZVzUFu',NULL,NULL,'Sunday','Dogara','+2348038832203',NULL,'male',NULL,NULL,NULL,'sunday-dogara','2020-07-03 08:34:27','2020-07-03 08:34:27'),(121,'jmabea@unicef.org','$2y$10$RmXtB/8s0dE9DRMrwy8SKuGxbDdRw/2ZltZy5HaKMEjptg5r5VDdi',NULL,'2020-07-05 08:03:12','Jacques','MABEA','+2347055455040',NULL,'male',NULL,'superadmin',NULL,'jacques-mabea','2020-07-03 10:39:31','2020-07-05 08:03:12'),(131,'mdikwa@unicef.org','$2y$10$Jdnt3aNuDxSMrHJfa1ezbeURET51zvYPNowd/Ar251WbX2qy100jm',NULL,'2020-07-05 09:58:29','Mairama','B. Dikwa','+2347064183224',NULL,'female',NULL,NULL,NULL,'mairama-b.-dikwa','2020-07-03 10:42:10','2020-07-05 09:58:29'),(141,'raiyedipe@unicef.org','$2y$10$tw3AZErpsRvTIk3XJOcztel0DJvbvDRaFIl8pBPJI67ap2BDwc2jS',NULL,NULL,'Raphael','Aiyedipe','+2347038946501',NULL,'male',NULL,NULL,NULL,'raphael-aiyedipe','2020-07-04 07:22:11','2020-07-04 07:22:11'),(151,'evan31march@gmail.com','$2y$10$pu5VRxEByYL9AKyxPCl9leLxe2IkuO.gtwTr0uup8.JFOrFX24iZW',NULL,'2020-07-05 09:01:34','Afomachukwu','Evan Okafor','+2348063474578',NULL,'male',NULL,NULL,NULL,'afomachukwu-evan-okafor','2020-07-04 07:26:34','2020-07-05 09:01:34'),(161,'aadon@unicef.org','$2y$10$b8ZcQngi8H7.g66Q1Rzvu.WPvCSZDl.9thm4IdY2m7SXd2ty8nLjG',NULL,NULL,'Armand','Adon','+2348168636317',NULL,'male',NULL,NULL,NULL,'armand-adon','2020-07-04 07:30:20','2020-07-04 07:30:20'),(171,'boloruntola@unicef.org','$2y$10$M/tVeMuYAz9x/6xwzWbyq.TsqfcRJkZrSkn2Uv.DkI8uAdrVqJb.O',NULL,'2020-07-05 08:23:04','Benedict','Oloruntola','+2348039759676',NULL,'male',NULL,'superadmin',NULL,'benedicte-oloruntola','2020-07-04 07:32:06','2020-07-05 08:23:04'),(181,'bshehu@unicef.org','$2y$10$KIAfQmK6tPKEl3kQNpKMM.48ZPmFOyKlCLltM0/67jff/S1/kBtfu',NULL,NULL,'Bashir','Shehu','+2348035350953',NULL,'male',NULL,NULL,NULL,'bashir-shehu','2020-07-04 07:33:36','2020-07-04 07:33:36'),(191,'asamaila@unicef.org','$2y$10$Cw9/78SK51YJpDmYb8K57Ou93TlTOl2zSwYsl0kwdY25FgGBJcyGy',NULL,NULL,'Adamu','Samaila','+2347031781802',NULL,'male',NULL,NULL,NULL,'adamu-samaila','2020-07-04 07:35:24','2020-07-04 07:35:24'),(201,'bpathak@unicef.org','$2y$10$JY0tGBPIAd85WFYg5pXAUO1JGvOCHl8nQ8Ttwgc/Y8ZSc0tpygnNG',NULL,NULL,'Bhanu','Pathak','+2348034023344',NULL,'male',NULL,NULL,NULL,'bhanu-pathak','2020-07-04 07:36:42','2020-07-04 07:36:42'),(211,'kkaribo@unicef.org','$2y$10$zZ98gHtgk0W7G2RLkn14OuPqkLBM2/ibQehKmWK/iXe7n2UaqDpP2',NULL,NULL,'Kiriya','Karibo','+2348036400368',NULL,'male',NULL,NULL,NULL,'kiriya-karibo','2020-07-04 07:38:02','2020-07-04 07:38:02'),(221,'shehuitas2@gmail.com','$2y$10$fjy4yvvXIBchRPnSgaLmNOXCsCZdKq9CCpcAgSyP5bZI2XbDZyRE.',NULL,NULL,'SHEHU','SHEHU','+2348067693073',NULL,'male',NULL,NULL,NULL,'shehu-shehu','2020-07-04 07:47:15','2020-07-04 07:47:15'),(231,'mayayale75@gmail.com','$2y$10$GoIq4Acoxkwq1qFuhPLRvuZrX2Yp2bQ5byGtzR96vVy8UA5gxQRZe',NULL,NULL,'Muhammad','Adamu Yayale','+2348029997555',NULL,'male',NULL,NULL,NULL,'muhammad-adamu-yayale','2020-07-04 07:49:18','2020-07-04 07:49:18'),(241,'Tabithalandi2013@gmail.com','$2y$10$hk6.oYd95Qj7q2csNo5R7Or0TFpXHIICFFWeGNHVGw5JRRo.wyi0C',NULL,NULL,'Tabitha','A. Landi','+2348083917107',NULL,'male',NULL,NULL,NULL,'tabitha-a.-landi','2020-07-04 07:51:09','2020-07-04 07:51:09'),(251,'Ladidiisa50@gmail.com','$2y$10$W8ep/xd2/F7XUUqmqe.siuHyKA9eUvVx8qg1kiW/b97LAxquFz8Ue',NULL,NULL,'Ladidi','Isah','+2348056572482',NULL,'male',NULL,NULL,NULL,'ladidi-isah','2020-07-04 07:52:36','2020-07-04 07:52:36'),(261,'jackoabdullahi@gmail.com','$2y$10$iwooA/AUyYCUUHlXMrTWZeKL3mTbRNairTMwR0hc5Y2hKamXyOs2K',NULL,NULL,'Jacko','Adbullahi','+2348051807180',NULL,'male',NULL,NULL,NULL,'jacko-adbullahi','2020-07-04 07:54:33','2020-07-04 07:54:33'),(271,'Ibrahimumar123@gmail.com','$2y$10$e10pSf6w3Z0pzVl3DQyoC.lQUcq6iJSzfJO3K34VJ3ZPWEdczjBVW',NULL,NULL,'Ibrahim','Umar II','+2348037547381',NULL,'male',NULL,NULL,NULL,'ibrahim-umar-ii','2020-07-04 07:55:38','2020-07-04 07:55:38'),(281,'shuaibumunkaila1986@gmail.com','$2y$10$.S3XA92F1t4gNA9LedYAjuxiiDhs1rWadcj0ou8bDYZJQwVSZ1VX.',NULL,NULL,'SHU\'AIBU','MUNKAILA','+2348055488679',NULL,'male',NULL,NULL,NULL,'shu\'aibu-munkaila','2020-07-04 07:56:40','2020-07-04 07:56:40'),(291,'abdulrazadabo23@gmail.com','$2y$10$g4woadQyVAewaPligQVjbu24EfKGz4aanb9MqTnw9q9lY/hWbH6pG',NULL,NULL,'ABDULRAZAK','YUSUF','+2348070641134',NULL,'male',NULL,NULL,NULL,'abdulrazak-yusuf','2020-07-04 07:57:47','2020-07-04 07:57:47'),(301,'salisualiyurafawa@gmail.com','$2y$10$f9.oJ6OVqAuSOaPD3KNRledp0vsZlp3eMLqgK91dTkh8n1W4/VC6S',NULL,NULL,'SALISU','A. RAFAWA','+2348120786791',NULL,'male',NULL,NULL,NULL,'salisu-a.-rafawa','2020-07-04 07:59:00','2020-07-04 07:59:00'),(311,'Hajarababayo2013@gmail.com','$2y$10$Qk0UYDSfBLp.08o69vvioud5Kycqz4r5CMcOssa.bb6RyhLHAOi2S',NULL,NULL,'HAJARA','BABAYO','+2347031047781',NULL,'female',NULL,NULL,NULL,'hajara-babayo','2020-07-04 08:00:10','2020-07-04 08:00:10'),(321,'mohammedabdugmw@gmail.com','$2y$10$r8GqC7yKCqF/ltZyJJ0PRuJa9KBmNWfDH8CNOPxuiyHxKxfVG1Tt6',NULL,NULL,'Muhammed','Abdu','+2347036921518',NULL,'male',NULL,NULL,NULL,'muhammed-abdu','2020-07-04 08:01:25','2020-07-04 08:01:25'),(331,'zulkifluy@gmail.com','$2y$10$34OrbKfGL8h0JsvpdYQ31emFnyxhdVzI5WJ8A9AbjVBdxQwr73RZG',NULL,'2020-07-05 08:43:20','zulkiflu','yahaya','07064295321',NULL,'male',NULL,NULL,NULL,'zulkiflu-yahaya','2020-07-05 08:39:35','2020-07-05 08:43:20'),(341,'omaralbashir4081@gmail.com','$2y$10$.aV6ihGiu3yvhYpUp5dZt.kGJUUJ9cdUvAtmMSwjRAmGtBxGiSlS.',NULL,'2020-07-05 09:46:54','Albashir','Umar','07064314081',NULL,'male',NULL,NULL,NULL,'albashir-umar','2020-07-05 08:47:01','2020-07-05 09:46:54');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vendors`
--

DROP TABLE IF EXISTS `vendors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vendors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `vendor_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plate_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vendors_vendor_id_unique` (`vendor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vendors`
--

LOCK TABLES `vendors` WRITE;
/*!40000 ALTER TABLE `vendors` DISABLE KEYS */;
/*!40000 ALTER TABLE `vendors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-05 11:10:14
