-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: allaboutpet
-- ------------------------------------------------------
-- Server version	10.4.21-MariaDB

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
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'regi','12345');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
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
-- Table structure for table `konsultasi_dokters`
--

DROP TABLE IF EXISTS `konsultasi_dokters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `konsultasi_dokters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_hewan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keluhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil_konsultasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `konsultasi_dokters`
--

LOCK TABLES `konsultasi_dokters` WRITE;
/*!40000 ALTER TABLE `konsultasi_dokters` DISABLE KEYS */;
INSERT INTO `konsultasi_dokters` VALUES (9,'jkjjknkj','s,lds;lf;lasmf;lsa','ldsnflsdnfldknf','sadmfs;lmf;lsmf;lm;a','sfgfhgf hg gfhgh fghgfhfhf'),(11,'es;lmf;ldsmf;dlsmfs','dm fas fl afal;fms;','fs;lms;ldfm;lsdmfl;sd','ds;lmf;ldsmfl;dsmg;lfsmg;','defsdsdf sfds sf sfds sdfdsf sdf fsdfdsfsd'),(12,'hirzi fakhrin','lombok','Monyet','akndlkasndsnklsdnf','Masih Dalam Proses Jawaban Dari Dokter'),(13,'marlina hartono','lasdafmlsknflskd','Anjing','sklfnlsdknflkasnfklanf','fghfdh gh fghgfh fghfgh fgh'),(14,'Fransiska Sharoonsdfsdfsfds','sfdfsdffsfsdfdf','fsdffdsfsfsfdsfgdfgfdgf','dfgfdgdsfsewrewdf','Masih Dalam Proses Jawaban Dari Dokter'),(15,'ksdjnflksdnfldnfdsf','sdfdsfsdfdsfsfsfsf','sdfdsfsdfsdfdsfsd','dsfsdfdsgfgdf','Masih Dalam Proses Jawaban Dari Dokter'),(16,'fdsfsdfdsfdfsg','gfdgfdgf','dfgdfghdfghf','fghghgfg','Masih Dalam Proses Jawaban Dari Dokter'),(17,'Fransiska Sharoon esgegfdgdfg','dgdfgfgfgdgdfg','dfgfdgdgdfgdgfdg','dfgdfgdgdfgdfg','sfdsfdgfdg gdf gdfgfd fg g gdf gfd gfd'),(18,'Alexander Graham Bell','New York','Anjing','pilek','cdse sfsd fdsfds d sdfdfdsf sf sfs'),(19,'Fransiska','JKT','Beruk','diasidnsaifondskfjds','setrtret rt rtytry try tryrt yrt'),(23,'dgdfg','fdgdfgd','dgdfggdg','fhgfhfgh','Masih Dalam Proses Jawaban Dari Dokter, Tunggu dalam 10 - 25 menit kedepan'),(27,'fffffff','gfhgfhfgh','nvnvhjv','khghfhgfghf uguigui iugiugkj','Masih Dalam Proses Jawaban Dari Dokter, Tunggu dalam 10 - 25 menit kedepan'),(28,'Asbath Fadil','Purwokerto','Kucing','Diare','Masih Dalam Proses Jawaban Dari Dokter, Tunggu dalam 10 - 25 menit kedepan');
/*!40000 ALTER TABLE `konsultasi_dokters` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2019_08_19_000000_create_failed_jobs_table',1),(3,'2022_01_20_155254_create_pemesanan_kliniks_table',1),(4,'2022_01_20_155745_create_konsultasi_dokters_table',1),(5,'2022_01_20_161026_create_admins_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pemesanan_kliniks`
--

DROP TABLE IF EXISTS `pemesanan_kliniks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pemesanan_kliniks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_hewan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_hewan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_klinik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_klinik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_boking` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pemesanan_kliniks`
--

LOCK TABLES `pemesanan_kliniks` WRITE;
/*!40000 ALTER TABLE `pemesanan_kliniks` DISABLE KEYS */;
INSERT INTO `pemesanan_kliniks` VALUES (2,'Regi apriandi','SDSANDANDFSLNF','dsandaskldnsl','dsnfdskjfnskdjfn','Klinik Amanah','ruko summarecon, sudirman trade center, purwokerto timur nomer no 56',719),(4,'xvgvfdgdfgfdg','fdgdfgdfgdfd','gfdgdgfdgdgdg','dfgdfgdgdfgdf','Vira Medika Clinic','ruko mall pwt super mall, purwokerto tengah no 987',85390),(5,'Fransiska Sharoonsdsfsd','sdf','fsdfdgdg','fenwlkewnflwen','Vira Medika Clinic','ruko mall pwt super mall, purwokerto tengah no 987',30042),(6,'ddddddddddd','dddddd','ddddd','dddddd','Klinik Jayanti','jalan geriliya, purwokerto selatan no 90',20436),(7,'eeeeeeeeeeeee','eee','eeee','eeee','Klinik Amanah','ruko summarecon, sudirman trade center, purwokerto timur nomer no 56',83207),(8,'Triyas Sono','BKL','Pacet','Hafid','Klinik bunda mulia','ruko perumahan adiyaksa, purwokerto utara no 12',84629),(9,'Hafid','Neraka','Iblis','Dajdal','Klinik bunda mulia','ruko perumahan adiyaksa, purwokerto utara no 12',7604),(10,'fdgfd','fsddfg','dffdg','fdgdgfd','Klinik Amanah','ruko summarecon, sudirman trade center, purwokerto timur no 56',40968),(11,'sdfs','fdsfdsf','sffds','sdffs','Klinik Amanah','ruko summarecon, sudirman trade center, purwokerto timur no 56',94886),(12,'ewrwere','werwer','rewrew','gdfgfdg','Klinik Pratama','ruko mall purwokerto super block, purwokerto tengah no 32 ',42724),(13,'kndskj','sdfndskj','dskjfbsjkdfd','sjkfbdsjkfb','Klinik Jayanti','jalan geriliya, purwokerto selatan no 90',65213),(14,'lulu','kebasen','kucing','ciko','Vira Medika Clinic','ruko mall pwt super mall, purwokerto tengah no 987',65793),(15,'Asbath','Purwokerto','Kucing','Jacky','Klinik Jayanti','jalan geriliya, purwokerto selatan no 90',43916);
/*!40000 ALTER TABLE `pemesanan_kliniks` ENABLE KEYS */;
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'allaboutpet'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-23 23:54:05
