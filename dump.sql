-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: sayti.uz
-- ------------------------------------------------------
-- Server version	5.7.27

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
-- Table structure for table `abdualiym_cms_article_categories`
--

DROP TABLE IF EXISTS `abdualiym_cms_article_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `abdualiym_cms_article_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_0` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_0` text COLLATE utf8_unicode_ci,
  `description_1` text COLLATE utf8_unicode_ci,
  `description_2` text COLLATE utf8_unicode_ci,
  `description_3` text COLLATE utf8_unicode_ci,
  `created_at` int(11) unsigned NOT NULL,
  `updated_at` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `index-abdualiym_cms_article_categories-slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abdualiym_cms_article_categories`
--

LOCK TABLES `abdualiym_cms_article_categories` WRITE;
/*!40000 ALTER TABLE `abdualiym_cms_article_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `abdualiym_cms_article_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `abdualiym_cms_articles`
--

DROP TABLE IF EXISTS `abdualiym_cms_articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `abdualiym_cms_articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title_0` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_0` mediumtext COLLATE utf8_unicode_ci,
  `content_1` mediumtext COLLATE utf8_unicode_ci,
  `content_2` mediumtext COLLATE utf8_unicode_ci,
  `content_3` mediumtext COLLATE utf8_unicode_ci,
  `date` int(11) unsigned DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(3) NOT NULL,
  `created_at` int(11) unsigned NOT NULL,
  `updated_at` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  UNIQUE KEY `index-abdualiym_cms_articles-slug` (`slug`),
  KEY `index-abdualiym_cms_articles-status` (`status`),
  KEY `index-abdualiym_cms_articles-category_id` (`category_id`),
  CONSTRAINT `fkey-abdualiym_cms_articles-category_id` FOREIGN KEY (`category_id`) REFERENCES `abdualiym_cms_article_categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abdualiym_cms_articles`
--

LOCK TABLES `abdualiym_cms_articles` WRITE;
/*!40000 ALTER TABLE `abdualiym_cms_articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `abdualiym_cms_articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `abdualiym_cms_menu`
--

DROP TABLE IF EXISTS `abdualiym_cms_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `abdualiym_cms_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `title_0` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` tinyint(3) NOT NULL,
  `type_helper` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort` int(11) NOT NULL DEFAULT '1',
  `created_at` int(11) unsigned NOT NULL,
  `updated_at` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abdualiym_cms_menu`
--

LOCK TABLES `abdualiym_cms_menu` WRITE;
/*!40000 ALTER TABLE `abdualiym_cms_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `abdualiym_cms_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `abdualiym_cms_pages`
--

DROP TABLE IF EXISTS `abdualiym_cms_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `abdualiym_cms_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_0` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_0` mediumtext COLLATE utf8_unicode_ci,
  `content_1` mediumtext COLLATE utf8_unicode_ci,
  `content_2` mediumtext COLLATE utf8_unicode_ci,
  `content_3` mediumtext COLLATE utf8_unicode_ci,
  `created_at` int(11) unsigned NOT NULL,
  `updated_at` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `index-abdualiym_cms_pages-slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abdualiym_cms_pages`
--

LOCK TABLES `abdualiym_cms_pages` WRITE;
/*!40000 ALTER TABLE `abdualiym_cms_pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `abdualiym_cms_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_phone` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `status` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Shamsiddin Toshmirzaev','sh.toshmirzaev@gmail.com','fgnhfnghc',1572969624,NULL),(2,'Ali Valiyev','a.valiyev@hotmail.com','dfnhvncghngchnghvnm',1572969640,NULL);
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m000000_000000_base',1572969441),('m130524_201442_init',1572969444),('m190124_110200_add_verification_token_column_to_user_table',1572969444),('m191004_071012_create_pages_table',1573124773),('m191004_071721_create_article_categories_table',1573124773),('m191004_071728_create_articles_table',1573124773),('m191004_072253_create_menu_table',1573124773),('m191102_144656_create_contacts_table',1572969444),('m191102_150624_create_sites_table',1572969444),('m191102_150922_create_tags_table',1572969444),('m191102_151032_create_tags_and_sites_table',1572969444),('m191105_143909_add_column_to_tags_and_sites_table',1572969444);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sites`
--

DROP TABLE IF EXISTS `sites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `is_taxis` tinyint(1) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `parsed_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sites`
--

LOCK TABLES `sites` WRITE;
/*!40000 ALTER TABLE `sites` DISABLE KEYS */;
INSERT INTO `sites` VALUES (1,'First','Screenshot from 2019-09-23 17-11-35.png',NULL,1000,1,1572969527,1572969527,NULL,NULL,NULL),(2,'Second','Screenshot from 2019-09-30 08-35-02.png',NULL,120,1,1572969549,1572969549,NULL,NULL,NULL),(3,'Third','Screenshot from 2019-09-30 08-34-09.png',NULL,233,0,1572969567,1572969567,NULL,NULL,NULL),(4,'Third','Screenshot from 2019-09-30 08-34-09.png',NULL,233,0,1572969568,1572969568,NULL,NULL,NULL),(5,' dfgfddfdfg','Screenshot from 2019-09-25 17-01-30.png',NULL,16515,1,1573269496,1573269496,NULL,NULL,NULL),(6,'xxzgg','Screenshot from 2019-09-30 08-34-09.png',NULL,5656,0,1573269528,1573269528,NULL,NULL,NULL);
/*!40000 ALTER TABLE `sites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'E-Commerce'),(2,'Personal'),(3,'Entertainment'),(4,'Brochure'),(5,'Business');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags_and_sites`
--

DROP TABLE IF EXISTS `tags_and_sites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags_and_sites` (
  `tag_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  KEY `idx-tags_id` (`tag_id`),
  KEY `idx-sites_id` (`site_id`),
  CONSTRAINT `fkey-sites_id` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fkey-tags_id` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags_and_sites`
--

LOCK TABLES `tags_and_sites` WRITE;
/*!40000 ALTER TABLE `tags_and_sites` DISABLE KEYS */;
INSERT INTO `tags_and_sites` VALUES (1,1,NULL),(2,1,NULL),(5,1,NULL),(3,2,NULL),(4,4,NULL);
/*!40000 ALTER TABLE `tags_and_sites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`),
  KEY `idx-user-status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','k9mxnNLy8nbcrRzJufsIPVdGWfAt8x9o','$2y$13$nQ64rKdpIX80xQyY3YxiS.61fAPw2JkH7bTbRKXR19JQ0.tMNnx42',NULL,'a.abdualiym@gmail.com',10,1572969444,1572969444,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-09  6:56:40
