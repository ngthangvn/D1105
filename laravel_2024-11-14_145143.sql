-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: laravel
-- ------------------------------------------------------
-- Server version	8.0.40

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('tn22092005@gmail.com|::1','i:1;',1731480748),('tn22092005@gmail.com|::1:timer','i:1731480748;',1731480748);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `order` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Đồng hồ nam','','Danh mục đồng hồ nam',NULL,'1',NULL,'2024-11-11 06:48:50','2024-11-11 06:48:50'),(6,'Đồng hồ đôi','','Danh mục đồng hồ đôi',NULL,'3',NULL,'2024-11-13 08:31:57','2024-11-13 08:31:57');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb3_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2024_07_22_143718_create_categories_table',1),(5,'2024_07_22_143750_create_products_table',1),(6,'2024_08_02_012836_create_shoppingcart_table',1),(7,'2024_08_04_082648_create_orders_table',1),(8,'2024_08_04_083238_create_order_products_table',1),(9,'2024_08_09_034214_add_column_user_id_to_products_table',1),(10,'2024_08_13_141234_add_column_total_sold_to_products',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

--
-- Table structure for table `order_products`
--

DROP TABLE IF EXISTS `order_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_products_order_id_foreign` (`order_id`),
  KEY `order_products_product_id_foreign` (`product_id`),
  CONSTRAINT `order_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `order_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_products`
--

/*!40000 ALTER TABLE `order_products` DISABLE KEYS */;
INSERT INTO `order_products` VALUES (1,5,1,1,5250000.00,'2024-11-12 07:01:09','2024-11-12 07:01:09'),(4,8,1,1,5250000.00,'2024-11-13 03:03:53','2024-11-13 03:03:53'),(9,13,3,1,5250000.00,'2024-11-13 08:02:43','2024-11-13 08:02:43');
/*!40000 ALTER TABLE `order_products` ENABLE KEYS */;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` int NOT NULL,
  `address` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT 'Đang xử lý',
  `total_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (5,2,'Nguyễn Văn a','tn8652913@gmail.com',377519330,'Hà Nội','succest',5250000.00,'2024-11-12 07:01:09','2024-11-13 01:54:12'),(8,6,'Nguyễn văn a','tn8652913453@gmail.com',377519330,'Hà Nội','succest',5250000.00,'2024-11-13 03:03:53','2024-11-13 03:18:19'),(13,9,'Trần văn a','tn8652913ghfe@gmail.com',377519330,'Hà Nội','succest',5250000.00,'2024-11-13 08:02:43','2024-11-13 08:35:57');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `brand_id` int DEFAULT NULL COMMENT 'mã thương hiệu',
  `category_id` int DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `Description` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `stock` int DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `quantity` int DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `image` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int unsigned NOT NULL,
  `total_sold` int unsigned DEFAULT NULL,
  `sale_price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Đồng Hồ Bentley - Nam BL2333-15MTNI',NULL,1,'',NULL,'Đồng hồ Casio AE-1200WHD-1AVDF có vỏ kim loại được phủ bạc tinh tế, kim chỉ và vạch số thiết kế thanh mảnh trên nền hoa văn hình trái tim trẻ trung, kết hợp dây đeo bằng chất liệu kim loại.',NULL,5250000,NULL,'1',30,NULL,NULL,'https://www.watchstore.vn/images/products/2024/06/03/large/bl2333-15mtni-1_bentley_1717387807.webp','2024-11-11 06:52:02','2024-11-12 01:51:32',1,NULL,7500000.00),(2,'Đồng Hồ Bentley - Nam BL2333-15MKWI',NULL,1,'',NULL,'Mẫu đồng hồ nam Casio A158WA-1DF với kiểu dáng vuông huyền thoại, mặt số điện tử hiện thị nhiều chức năng tiện ích cho người dùng, vỏ máy cùng dây đeo kim loại màu bạc tạo nên sự chắc chắn mạnh mẽ.',NULL,5250000,NULL,'1',30,NULL,NULL,'https://www.watchstore.vn/images/products/2024/05/27/large/bl2333-15mkwi-1_bentley_1716792373.webp','2024-11-11 06:55:46','2024-11-12 01:53:01',1,NULL,7500000.00),(3,'Đồng Hồ Bentley - Nam BL1839-152MWBB',NULL,1,'',NULL,'Đồng hồ nam Casio MTP-1370D-1A1VDF thanh lịch với kiểu dáng nam tính mặt đồng hồ nền đen cùng chữ số vạch trắng, vỏ máy cùng dây đeo kim loại bạc sang trọng, kèm thêm 1 lịch ngày và 1 lịch thứ.',NULL,5250000,NULL,'1',10,NULL,NULL,'https://www.watchstore.vn/images/products/others/2024/large/bl1839-152mwbb-1-1662942544-1254591246-1712583926.webp','2024-11-11 06:59:07','2024-11-12 01:54:25',1,NULL,7500000.00),(4,'Đồng Hồ Casio - Nữ LTP-V300D-4AUDF',NULL,2,'',NULL,'Đồng hồ Casio LRW-200H-4B2VDF có vỏ và dây đeo bằng cao su màu hồng quyến rũ, nền số màu trắng trang nhã cùng chữ số được làm nhiều màu sắc.',NULL,1398000,NULL,'1',20,NULL,NULL,'https://www.watchstore.vn/images/products/others/2024/large/ltp-v300d-4audf-1712555063.webp','2024-11-12 01:21:01','2024-11-12 01:59:47',1,NULL,1865000.00),(5,'Đồng Hồ Tissot - Nữ T108.208.22.117.01',NULL,2,'',NULL,'Đồng hồ Casio AE-1200WHD-1AVDF có vỏ kim loại được phủ bạc tinh tế, kim chỉ và vạch số thiết kế thanh mảnh trên nền hoa văn hình trái tim trẻ trung, kết hợp dây đeo bằng chất liệu kim loại.',NULL,9900000,NULL,'1',25,NULL,NULL,'https://www.watchstore.vn/images/products/others/2024/large/t108-208-22-117-01-1-1676703560059-1712582061.webp','2024-11-12 01:22:51','2024-11-12 02:01:48',1,NULL,20000000.00),(6,'Đồng Hồ Tissot - Nữ T099.207.11.113.00',NULL,2,'',NULL,'Đồng hồ Casio LA670WA-7DF có kiểu dáng cổ điển, dây đeo kim loại phủ bạc độc đáo, mang đến sự đơn giản thanh lịch dành cho phái nữ.',NULL,10800000,NULL,'1',27,NULL,NULL,'https://www.watchstore.vn/images/products/others/2024/large/t099-13025429-1832979904-1712582424.webp','2024-11-12 01:24:34','2024-11-12 02:02:58',1,NULL,12500000.00),(7,'Đồng Hồ Olym Pianus - Nam OP990-45ADGS-T',NULL,1,'',NULL,'Đồng hồ Casio AE-1200WHD-1AVDF có vỏ kim loại được phủ bạc tinh tế, kim chỉ và vạch số thiết kế thanh mảnh trên nền hoa văn hình trái tim trẻ trung, kết hợp dây đeo bằng chất liệu kim loại.',NULL,6300000,NULL,'1',3,NULL,NULL,'https://www.watchstore.vn/images/products/others/2024/large/op990-45adgs-t-0-1670561145714-1712586772.webp','2024-11-12 01:32:25','2024-11-12 01:32:25',1,NULL,9000000.00),(8,'Đồng Hồ Tissot - Nam T099.429.11.038.00',NULL,1,'',NULL,'Đồng hồ nam Casio MTP-1370D-1A1VDF thanh lịch với kiểu dáng nam tính mặt đồng hồ nền đen cùng chữ số vạch trắng, vỏ máy cùng dây đeo kim loại bạc sang trọng, kèm thêm 1 lịch ngày và 1 lịch thứ.',NULL,13000000,NULL,'1',40,NULL,NULL,'https://www.watchstore.vn/images/products/others/2024/large/t099-429-11-038-00-1-1657079694916-1712571521.webp','2024-11-12 01:34:17','2024-11-12 01:34:17',1,NULL,23000000.00),(9,'Đồng Hồ Omega - Nam 210.30.42.20.01.001',NULL,1,'',NULL,'Đồng hồ Casio LRW-200H-4B2VDF có vỏ và dây đeo bằng cao su màu hồng quyến rũ, nền số màu trắng trang nhã cùng chữ số được làm nhiều màu sắc.',NULL,12600000,NULL,'1',35,NULL,NULL,'https://www.watchstore.vn/images/products/others/2024/large/210-1286546013-753031890-1712589148.webp','2024-11-12 01:36:27','2024-11-12 01:36:27',1,NULL,14200000.00),(10,'Đồng Hồ Olym Pianus - Nam OP89322GSR-N',NULL,1,'',NULL,'Đồng hồ nam Casio MTP-1370D-1A1VDF thanh lịch với kiểu dáng nam tính mặt đồng hồ nền đen cùng chữ số vạch trắng, vỏ máy cùng dây đeo kim loại bạc sang trọng, kèm thêm 1 lịch ngày và 1 lịch thứ.',NULL,3950000,NULL,'1',15,NULL,NULL,'https://www.watchstore.vn/images/products/others/2024/large/op89322gsr-n-1-745300805-432747559-1712670229.webp','2024-11-12 01:37:57','2024-11-12 01:37:57',1,NULL,4740000.00),(11,'Đồng Hồ Bentley - Nam BL1831-25MKWD',NULL,1,'',NULL,'Đồng hồ nam Casio MTP-1370D-1A1VDF thanh lịch với kiểu dáng nam tính mặt đồng hồ nền đen cùng chữ số vạch trắng, vỏ máy cùng dây đeo kim loại bạc sang trọng, kèm thêm 1 lịch ngày và 1 lịch thứ.',NULL,5418000,NULL,'1',18,NULL,NULL,'https://www.watchstore.vn/images/products/others/2024/large/bl1831-25mkwd-1-1662695988648-1712585398.webp','2024-11-12 01:39:12','2024-11-12 01:50:09',1,NULL,7740000.00),(12,'Đồng Hồ Carnival - Nam 8113G-VT-DCS-T',NULL,1,'',NULL,'Đồng hồ nam Casio MTP-1370D-1A1VDF thanh lịch với kiểu dáng nam tính mặt đồng hồ nền đen cùng chữ số vạch trắng, vỏ máy cùng dây đeo kim loại bạc sang trọng, kèm thêm 1 lịch ngày và 1 lịch thứ.',NULL,3801000,NULL,'1',37,NULL,NULL,'https://www.watchstore.vn/images/products/others/2024/large/8113g-vt-dcs-t-1-213290406-1626795257-1712667500.webp','2024-11-12 01:40:51','2024-11-12 01:40:51',1,NULL,5430000.00),(13,'Đồng Hồ Casio - Nữ LTP-V006L-4BUDF',NULL,2,'',NULL,'Đồng hồ Casio LA670WA-7DF có kiểu dáng cổ điển, dây đeo kim loại phủ bạc độc đáo, mang đến sự đơn giản thanh lịch dành cho phái nữ.',NULL,642000,NULL,'1',NULL,NULL,NULL,'https://www.watchstore.vn/images/products/others/2024/large/ltp-v006l-4budf-1-1210488598-1537295250-1712555034.webp','2024-11-12 23:55:58','2024-11-12 23:55:58',1,NULL,856000.00),(14,'Đồng Hồ Daniel Wellington - Nữ DW00100186',NULL,2,'',NULL,'Đồng hồ Casio LA670WA-7DF có kiểu dáng cổ điển, dây đeo kim loại phủ bạc độc đáo, mang đến sự đơn giản thanh lịch dành cho phái nữ.',NULL,3636000,NULL,'1',NULL,NULL,NULL,'https://www.watchstore.vn/images/products/others/2024/large/99999-866972910-2468046-1712665602.webp','2024-11-12 23:57:37','2024-11-12 23:57:37',1,NULL,4278000.00),(18,'Đồng Hồ',NULL,2,'',NULL,'đẹp',NULL,7160000,NULL,'1',NULL,NULL,NULL,'https://www.watchstore.vn/images/products/others/2024/large/op990-45adgs-gl-t-1-1308159693-1054341034-1712584842.webp','2024-11-13 08:33:20','2024-11-13 08:33:51',1,NULL,8800000.00);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb3_unicode_ci,
  `payload` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('6xrnZsNuxH3p2wS5phab9JnXMPDT0QxcjmdNdb8j',12,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoieFVuVnpkaWpzdlI5Ylg5VlZraGNtTnZpWndMUFc1ZE1HNjRwc3h3NSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6MzAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEyO3M6NDoiY2FydCI7YToxOntzOjc6ImRlZmF1bHQiO086Mjk6IklsbHVtaW5hdGVcU3VwcG9ydFxDb2xsZWN0aW9uIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6MzI6IjdjMDQwOTU2NDg0NGVmYmUzYjg0NzZkNjI3ZGE3MmRkIjtPOjMyOiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbSI6OTp7czo1OiJyb3dJZCI7czozMjoiN2MwNDA5NTY0ODQ0ZWZiZTNiODQ3NmQ2MjdkYTcyZGQiO3M6MjoiaWQiO2k6MTtzOjM6InF0eSI7aToxO3M6NDoibmFtZSI7czo0MDoixJDhu5NuZyBI4buTIEJlbnRsZXkgLSBOYW0gQkwyMzMzLTE1TVROSSI7czo1OiJwcmljZSI7ZDo1MjUwMDAwO3M6Nzoib3B0aW9ucyI7TzozOToiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW1PcHRpb25zIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6NToiaW1hZ2UiO3M6OTg6Imh0dHBzOi8vd3d3LndhdGNoc3RvcmUudm4vaW1hZ2VzL3Byb2R1Y3RzLzIwMjQvMDYvMDMvbGFyZ2UvYmwyMzMzLTE1bXRuaS0xX2JlbnRsZXlfMTcxNzM4NzgwNy53ZWJwIjt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO31zOjQ5OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AYXNzb2NpYXRlZE1vZGVsIjtOO3M6NDE6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQB0YXhSYXRlIjtpOjA7czo0MToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGlzU2F2ZWQiO2I6MDt9fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9fX0=',1731511872),('sVNSxDXjy1HQydPi9YYqYoos6raf2OY169g1nzCy',1,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoieDRLQ2xzR3pPbmFwQnVVWEtLVXBxeGx0WGppczlLVGRoRFl3aGtVMyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM3OiJodHRwOi8vbG9jYWxob3N0OjMwMDAvYWRtaW4vdXNlci9saXN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9',1731511262),('zQwb7RuHRHvkomI0ZoDHZ0V9FwkWuavOIEyPcZvh',1,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiazBiekkwSnNYYnZxYnNWc1JNa04zT1NiTkVySjhuVzVXQnFzeEozeCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM4OiJodHRwOi8vbG9jYWxob3N0OjMwMDAvYWRtaW4vb3JkZXIvbGlzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==',1731512159);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

--
-- Table structure for table `shoppingcart`
--

DROP TABLE IF EXISTS `shoppingcart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`identifier`,`instance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoppingcart`
--

/*!40000 ALTER TABLE `shoppingcart` DISABLE KEYS */;
/*!40000 ALTER TABLE `shoppingcart` ENABLE KEYS */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `role` bigint DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Thắng Nguyễn','tn8652913@gmail.com',NULL,'$2y$12$HMjJtkhC7UzpWN6xXFXkPu4NzYBv/yaA6syzbk2uXEi9eSZ2cZrIe',1,'oGbTfsRZRlDNIIB2Q4TEXyNKRRaZifbVm5PAePKJo4AslrkvLvq38YONtQiL','2024-11-11 06:47:52','2024-11-11 06:47:52'),(2,'Nguyễn van a','tn86529136735667@gmail.com',NULL,'$2y$12$1fEIFPWQSv8NWSCO5wdete80.n1kj5Zkf4jt9qgmN3ySbe8q8J1mO',NULL,'mzwYOCs6LezY61eQ0H5NtqKq5wH3iRTHw8eUuOeCTaNkcfilhQKa6WZ8Rfyy','2024-11-12 02:05:43','2024-11-12 02:05:43'),(6,'Nguyễn văn a','nguyenvana@gmail.com',NULL,'$2y$12$HFMRNhU6XF7Z7n3PlZRwMessnRqNvnwBKbx8L6MwQkqDJxsuLX6Nu',NULL,NULL,'2024-11-13 03:02:49','2024-11-13 03:02:49'),(8,'Nguyen an','dgagadk@gmail.com',NULL,'$2y$12$LXwO9Ggu4jgIgVbpK0p7.eHLWn7HDFldRU7rwbWtFfKUAmLN7OrCq',NULL,NULL,'2024-11-13 03:17:35','2024-11-13 07:44:44'),(9,'Trần văn a','tranvan@gmail.com',NULL,'$2y$12$zqonjWfUpbe5ILYcq7KZZ.zZD0Aidpg4Qh8M7ytfAcRz/NsAVT3jy',NULL,NULL,'2024-11-13 08:00:17','2024-11-13 08:00:17'),(13,'Nguyễn văn f','vanbgahgd@gmail.com',NULL,'$2y$12$NpJGVc08Ap7UsbO.SkDVp.OcgNTPQ3OxvsHs94hsSwZ9sleHXURsy',NULL,NULL,'2024-11-13 08:35:06','2024-11-13 08:35:30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

--
-- Dumping routines for database 'laravel'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-14 14:51:48
