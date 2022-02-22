-- MySQL dump 10.13  Distrib 5.7.29, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: final_project
-- ------------------------------------------------------
-- Server version	5.7.33

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (2,'Admin','admin@admin.com','$2a$12$ivSzEX3gZEBv2CAs5OehJOfmLeosq1fox1anJDln/Xh17yP9rMkTi',NULL,NULL,NULL);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attendances`
--

DROP TABLE IF EXISTS `attendances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendances` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `employee_id` bigint(20) unsigned NOT NULL,
  `attendance` tinyint(4) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `attendances_employee_id_foreign` (`employee_id`),
  CONSTRAINT `attendances_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendances`
--

LOCK TABLES `attendances` WRITE;
/*!40000 ALTER TABLE `attendances` DISABLE KEYS */;
INSERT INTO `attendances` VALUES (3,4,0,'2022-01-01','januarary','2022','2022-01-01 00:35:51','2022-02-21 00:35:51'),(4,5,0,'2022-01-01','januarary','2022','2022-01-01 00:35:51','2022-02-21 00:35:51'),(5,5,1,'2022-01-02','januarary','2022','2022-01-01 00:35:51','2022-02-21 00:35:51'),(6,4,0,'2022-01-02','januarary','2022','2022-01-01 00:35:51','2022-02-21 00:35:51'),(7,4,1,'2022-01-03','januarary','2022','2022-01-01 00:35:51','2022-02-21 00:35:51'),(8,5,0,'2022-01-03','januarary','2022','2022-01-01 00:35:51','2022-02-21 00:35:51'),(9,5,1,'2022-01-04','januarary','2022','2022-01-01 00:35:51','2022-02-21 00:35:51'),(10,4,1,'2022-01-04','januarary','2022','2022-01-01 00:35:51','2022-02-21 00:35:51'),(11,4,1,'2022-02-18','february','2022','2022-02-21 00:35:51','2022-02-21 00:35:51'),(12,5,1,'2022-02-18','february','2022','2022-02-21 00:35:51','2022-02-21 00:35:51'),(13,5,0,'2022-02-19','february','2022','2022-02-21 00:35:51','2022-02-21 00:35:51'),(14,4,1,'2022-02-19','february','2022','2022-02-21 00:35:51','2022-02-21 00:35:51'),(15,4,1,'2022-02-20','february','2022','2022-02-21 00:35:51','2022-02-21 00:35:51'),(16,5,1,'2022-02-20','february','2022','2022-02-21 00:35:51','2022-02-21 00:35:51'),(17,5,1,'2022-02-21','february','2022','2022-02-21 00:35:51','2022-02-21 00:35:51'),(18,4,1,'2022-02-21','february','2022','2022-02-21 00:35:51','2022-02-21 00:35:51');
/*!40000 ALTER TABLE `attendances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_inquiries`
--

DROP TABLE IF EXISTS `contact_inquiries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_inquiries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_inquiries`
--

LOCK TABLES `contact_inquiries` WRITE;
/*!40000 ALTER TABLE `contact_inquiries` DISABLE KEYS */;
INSERT INTO `contact_inquiries` VALUES (1,'Reprehenderit omnis','nawacuj@mailinator.com','2022-02-22 05:55:23','2022-02-22 05:55:23','Non molestias dolori','Vel nobis et deserun'),(2,'Nostrum sit anim qu','redazewox@mailinator.com','2022-02-22 05:55:58','2022-02-22 05:55:58','Beatae nisi molestia','Et minus dolor ex ut'),(3,'Enim labore veritati','hytawer@mailinator.com','2022-02-22 05:56:39','2022-02-22 05:56:39','Et in excepturi fugi','Autem in amet aut i'),(4,'Pariatur Aliquid nu','xaqa@mailinator.com','2022-02-22 05:57:12','2022-02-22 05:57:12','Animi vel proident','Nihil numquam enim e');
/*!40000 ALTER TABLE `contact_inquiries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_salaries`
--

DROP TABLE IF EXISTS `employee_salaries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee_salaries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) DEFAULT NULL,
  `month` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `absents` int(11) DEFAULT NULL,
  `presents` int(11) DEFAULT NULL,
  `generated_salary` decimal(12,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deducted_salary` decimal(12,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_salaries`
--

LOCK TABLES `employee_salaries` WRITE;
/*!40000 ALTER TABLE `employee_salaries` DISABLE KEYS */;
/*!40000 ALTER TABLE `employee_salaries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `mobile` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (4,'Wafiullah','wafiullah@gmail.com','2022-02-20 13:44:58','2022-02-20 13:44:58',0,'03122687487','Wardak','Wardak','Wardak','Operation Manager','40000','/images/testimonial18.jpg','10','2022-02-24'),(5,'Muhammad Shoaib','mshoaibdev@gmail.com','2022-02-20 13:45:41','2022-02-20 13:45:41',0,'03122687487','Karachi','Karachi','Karachi','Software Engineer','100000','/images/testimonial3.jpg','6 Years','2022-02-24');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',2),(5,'2019_04_24_144756_create_attendances_table',3),(6,'2022_02_20_195149_create_admins_table',0),(7,'2022_02_20_195149_create_attendances_table',0),(8,'2022_02_20_195149_create_employees_table',0),(9,'2022_02_20_195149_create_failed_jobs_table',0),(10,'2022_02_20_195149_create_password_resets_table',0),(11,'2022_02_20_195149_create_personal_access_tokens_table',0),(12,'2022_02_20_195149_create_products_table',0),(13,'2022_02_20_195149_create_purchase_materials_table',0),(14,'2022_02_20_195149_create_suppliers_table',0),(15,'2022_02_20_195149_create_users_table',0),(16,'2022_02_20_195151_add_foreign_keys_to_attendances_table',0);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quantity` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `order_date` date NOT NULL,
  `status` enum('Pending','Delivered','Cancelled') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(12,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,'2022-02-21 00:08:10','2022-02-22 05:31:58',301,1,'2022-02-16','Cancelled',3000.00),(2,1,'2022-02-22 05:32:13','2022-02-22 05:32:13',12,2,'2022-02-16','Pending',1222.00);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
INSERT INTO `personal_access_tokens` VALUES (1,'App\\Models\\User',1,'AppToken','69870d639f9095b11ed10c5c1edbe5d071517231a14d82beb4e65a1f72d82983','[\"*\"]',NULL,'2022-01-30 02:40:29','2022-01-30 02:40:29'),(2,'App\\Models\\User',1,'AppToken','eb82a51d35e5caf53b596f42e86b670bdbb0274d6c9b9306c4f5433df265def1','[\"*\"]',NULL,'2022-01-30 02:44:21','2022-01-30 02:44:21'),(3,'App\\Models\\User',1,'AppToken','18f81a2dc7d9db08a3252893567bcb156842c99c66877ba28d269a6d3105bf83','[\"*\"]',NULL,'2022-01-30 02:46:03','2022-01-30 02:46:03'),(4,'App\\Models\\User',1,'AppToken','d29dc03f34cd6d7c0d6ca5b81287bc469d04c9909239cfba23097d9cbc4e0c35','[\"*\"]',NULL,'2022-01-30 02:46:31','2022-01-30 02:46:31'),(5,'App\\Models\\User',1,'AppToken','e2b4da85c5b59ec3655bdd20e3d21687eab04af9dba8ef016446c661d19fc9d0','[\"*\"]',NULL,'2022-01-30 02:47:26','2022-01-30 02:47:26'),(6,'App\\Models\\User',1,'AppToken','20fd5cbfb3b653e94cdb1ed1bf6505dc38a5e107b092022ce84dfa8961052431','[\"*\"]',NULL,'2022-01-30 03:14:57','2022-01-30 03:14:57'),(7,'App\\Models\\User',1,'AppToken','7ec2e5ff39800a8defbd921107612411f6691ad9b42a3c728ff39f8f7f3befe0','[\"*\"]',NULL,'2022-01-30 03:21:05','2022-01-30 03:21:05'),(8,'App\\Models\\User',1,'AppToken','0e73b4afa3ec7b55a59cb606019b4ca8a0cdb4a5ec1194ab8a4ef88a8817aa4a','[\"*\"]',NULL,'2022-01-30 03:22:19','2022-01-30 03:22:19'),(9,'App\\Models\\User',1,'AppToken','f4905c1a9148d2331f05434dcc97df49ae303bab5765cf63cf70f679dd6085d4','[\"*\"]',NULL,'2022-01-30 03:22:27','2022-01-30 03:22:27'),(10,'App\\Models\\User',1,'AppToken','8347ad089730a9777db125cdfd9f57d0254dec427aeac61250e26e8255e8669e','[\"*\"]',NULL,'2022-01-30 03:24:01','2022-01-30 03:24:01'),(11,'App\\Models\\User',3,'AppToken','f88948c0e6bc79f52bddb56d6b6a597f27a4ac59921b602ba6b881c46785327f','[\"*\"]',NULL,'2022-02-21 10:44:41','2022-02-21 10:44:41'),(12,'App\\Models\\User',3,'AppToken','bcd1f0f4203d0c560ecb1bc13290b75f27454b471798808343cc961ef19997b2','[\"*\"]','2022-02-21 11:54:18','2022-02-21 10:45:27','2022-02-21 11:54:18'),(13,'App\\Models\\User',2,'AppToken','619df246f15b678deadfd90daa9bbbed7189c5bcdc7b8de88fa03f6a3cf49e4f','[\"*\"]','2022-02-21 11:58:03','2022-02-21 11:57:54','2022-02-21 11:58:03'),(14,'App\\Models\\User',2,'AppToken','4df6b30f469299eb626b4a76a6d07764f3615be278d79be4b5598ab31d05f5ab','[\"*\"]',NULL,'2022-02-21 12:02:32','2022-02-21 12:02:32'),(15,'App\\Models\\User',1,'AppToken','2d64b0fedabe3a5aa2615d844e9c2fbb0d8484a4dbde67526a4208696692eed8','[\"*\"]',NULL,'2022-02-21 13:33:44','2022-02-21 13:33:44');
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_comments`
--

DROP TABLE IF EXISTS `product_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_comments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_comments`
--

LOCK TABLES `product_comments` WRITE;
/*!40000 ALTER TABLE `product_comments` DISABLE KEYS */;
INSERT INTO `product_comments` VALUES (1,1,'Consequatur reprehen',4,'Aute eius minima eum','2022-02-21 08:25:22','2022-02-21 08:25:22','lupuxudyl@mailinator.com'),(2,1,'Autem pariatur Cons',0,'Optio unde illo dol','2022-02-21 08:29:28','2022-02-21 08:29:28','qiqa@mailinator.com'),(3,1,'Totam in sunt quibus',0,'Quia sunt dolor hic','2022-02-21 08:29:35','2022-02-21 08:29:35','bexacezan@mailinator.com'),(4,1,'Totam in sunt quibus',3,'Quia sunt dolor hic','2022-02-21 08:29:37','2022-02-21 08:29:37','bexacezan@mailinator.com'),(5,1,'Totam in sunt quibus',5,'Quia sunt dolor hic','2022-02-21 08:29:43','2022-02-21 08:29:43','bexacezan@mailinator.com'),(6,1,'Commodi a fugiat cor',0,'Et laborum non sapie','2022-02-21 08:31:14','2022-02-21 08:31:14','hefotiz@mailinator.com'),(7,1,'Accusantium qui saep',5,'Voluptas omnis labor','2022-02-21 08:32:46','2022-02-21 08:32:46','lesy@mailinator.com'),(8,1,'shoaib',5,'testing','2022-02-21 08:33:53','2022-02-21 08:33:53','mocoti@mailinator.com'),(9,1,'Yuli Farrell1',5,'test','2022-02-21 12:04:47','2022-02-21 12:04:47','gutulusix@mailinator.com');
/*!40000 ALTER TABLE `product_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `discounted_price` double(10,2) NOT NULL,
  `description` text NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Juicy Couture Juicy Quilted',100.00,26.00,'Juicy Couture Juicy Quilted','/images/product-1.jpg',NULL,'2022-02-15 12:50:23','2022-02-15 12:50:23'),(2,'Originals Kaval Windbr',300.00,50.00,'Originals Kaval Windbr','/images/product-13.jpg',NULL,'2022-02-15 13:12:46','2022-02-15 13:12:46'),(3,'Test Product',100.00,99.00,'Test','/images/13.jpg',NULL,'2022-02-22 08:32:20','2022-02-22 08:32:20');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase_materials`
--

DROP TABLE IF EXISTS `purchase_materials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchase_materials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` decimal(12,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `supplier_id` int(11) NOT NULL,
  `total_amount` decimal(12,0) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `unit` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_date` date NOT NULL,
  `quantity` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase_materials`
--

LOCK TABLES `purchase_materials` WRITE;
/*!40000 ALTER TABLE `purchase_materials` DISABLE KEYS */;
INSERT INTO `purchase_materials` VALUES (3,'Potatoes',25,'2022-02-20 14:36:36','2022-02-20 14:45:11',1,25000,'Potatoes','Kg','2022-02-22',25);
/*!40000 ALTER TABLE `purchase_materials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suppliers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suppliers`
--

LOCK TABLES `suppliers` WRITE;
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
INSERT INTO `suppliers` VALUES (1,'Potato Supplier Ahsan',NULL,'2022-02-20 08:17:40','2022-02-20 14:25:32','Kabul Vegetable Market','0093781234567'),(2,'Debra Webster','meju@mailinator.com','2022-02-21 00:30:33','2022-02-21 00:30:33','Fugiat ut enim magn','Nihil neque magnam e');
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Nasim Allison','dedijyp@mailinator.com',NULL,'$2y$10$g7jQUKDznnQqAc6CVJQ1MuCM7v7C4z3U9pYZu.qXrK.atUs/QCIX.',NULL,'2022-02-21 00:07:25','2022-02-21 10:36:36',0),(2,'Yuli Farrell1','gutulusix@mailinator.com',NULL,'$2y$10$5SwDvji3CNEGQSfxMk4Gi.VxOrU5Rup0CK.Ao4I03hix487m4XHji',NULL,'2022-02-21 10:36:50','2022-02-21 11:58:03',0),(3,'Rhona Ferguson1121','cuhycym@mailinator.com',NULL,'$2y$10$BFZkFRz1HlGFivpwgVBaOe4nXmhOy3hCs3qo0m.uJRhqgbB7rG7M6',NULL,'2022-02-21 10:42:24','2022-02-21 11:55:53',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'final_project'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-22 23:29:52
