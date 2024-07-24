-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: spk_ayam
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `gejala`
--

DROP TABLE IF EXISTS `gejala`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gejala` (
  `id_gejala` int NOT NULL AUTO_INCREMENT,
  `gejala` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_gejala`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gejala`
--

LOCK TABLES `gejala` WRITE;
/*!40000 ALTER TABLE `gejala` DISABLE KEYS */;
INSERT INTO `gejala` VALUES (1,'Apakah anda mengalami gatal-gatal parah terutama pada malam hari'),(2,'Apakah terdapat terowongan pada bagian luka'),(3,'Apakah ditemukannya tungau pada bagian tubuh anda / barang-barang yang anda digunakan  seperti tempat tidur, handuk '),(4,'Apakah anda tinggal di tempat yang padat penghuni seperti pesantren/panti asuhan/penjara atau tempat padat penghuni lainnya'),(5,'Apakah terdapat bentolan atau lepuhan pada kulit anda, terutama di area lipatan kulit seperti sela jari, pergelangan tangan, dan siku'),(6,'Apakah anda perinteraksi dengan orang yang terkena penyakit skabies'),(7,'Apakah anda pernah berinteraksi dengan hewa yang terkena penyakit skabies'),(8,'apakah terdapat ruam berwarna kemerahan dan berbentuk seperti jerawat pada bagian tubuh anda');
/*!40000 ALTER TABLE `gejala` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penyakit`
--

DROP TABLE IF EXISTS `penyakit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `penyakit` (
  `id_penyakit` int NOT NULL AUTO_INCREMENT,
  `penyakit` varchar(100) NOT NULL,
  PRIMARY KEY (`id_penyakit`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penyakit`
--

LOCK TABLES `penyakit` WRITE;
/*!40000 ALTER TABLE `penyakit` DISABLE KEYS */;
INSERT INTO `penyakit` VALUES (1,'Scabies pada anak-anak'),(2,'Scabies pada orang dewasa'),(3,'Scabies pada orang bersih'),(4,'Scabies yang ditularkan hewan');
/*!40000 ALTER TABLE `penyakit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relasi`
--

DROP TABLE IF EXISTS `relasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `relasi` (
  `id_relasi` int NOT NULL AUTO_INCREMENT,
  `id_gejala` int DEFAULT NULL,
  `id_penyakit` int DEFAULT NULL,
  PRIMARY KEY (`id_relasi`),
  KEY `id_gejala` (`id_gejala`),
  KEY `id_penyakit` (`id_penyakit`),
  CONSTRAINT `relasi_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`),
  CONSTRAINT `relasi_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relasi`
--

LOCK TABLES `relasi` WRITE;
/*!40000 ALTER TABLE `relasi` DISABLE KEYS */;
INSERT INTO `relasi` VALUES (1,1,1),(2,2,1),(3,3,1),(4,4,1),(5,5,1),(6,6,2),(7,7,4),(8,8,3);
/*!40000 ALTER TABLE `relasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solusi`
--

DROP TABLE IF EXISTS `solusi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `solusi` (
  `id_solusi` int NOT NULL AUTO_INCREMENT,
  `id_penyakit` int NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `solusi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_solusi`),
  KEY `id_penyakit` (`id_penyakit`),
  CONSTRAINT `solusi_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solusi`
--

LOCK TABLES `solusi` WRITE;
/*!40000 ALTER TABLE `solusi` DISABLE KEYS */;
INSERT INTO `solusi` VALUES (1,1,'1.	Menjaga kebersihan linkungan seperti tempat tidur.\r\n2.	Mencuci pakaian dengan ari hangat.\r\n3.	Menjemur pakaian dibawah sinar matahari langung.\r\n4.	Tidak bertukar pakaian dengan orang yang terkena penyakit skabies.\r\n','1.	Pengolesan salep anti tungau atau parasit berupa salep benzyl benzoate atau skabimite yang dioleskan keseluruh tubuh. 2.	memium obat anti gatal dan anti biotik  dengan kadar tertentu. 3.	pengobatan skabies dilakukan secara berkolompo(keluarga).'),(2,2,'1.	Menjaga kebersihan linkungan.\r\n2.	Mencuci pakaian dengan ari hangat.\r\n3.	Menjemur pakaian dibawah sinar matahari langung.\r\n4.	Tidak bertukar pakaian dengan orang yang terkena penyakit skabies.\r\n','1.	Pengolesan salep anti tungau atau parasit berupa salep benzyl benzoate atau skabimite yang dioleskan keseluruh tubuh.  2.	memium obat anti gatal dan anti biotik  dengan kadar tertentu. 3.	pengobatan skabies dilakukan secara berkolompo(keluarga).'),(3,3,'1.	Menjaga kebersihan linkungan.\r\n2.	Mencuci pakaian dengan ari hangat.\r\n3.	Menjemur pakaian dibawah sinar matahari langung.\r\n4.	Menghindari kontak langsung dengan orang yang terkena penyakit skabies.\r\n','1.	Pengolesan salep anti tungau atau parasit berupa salep benzyl benzoate atau skabimite yang dioleskan keseluruh tubuh.  2.	memium obat anti gatal dan anti biotik  dengan kadar tertentu. 3.	pengobatan skabies dilakukan secara berkolompo(keluarga).'),(4,4,'1.	Menjaga kebersihan linkungan.\r\n2.	Mencuci pakaian dengan ari hangat.\r\n3.	Menjemur pakaian dibawah sinar matahari langung.\r\n4.	Tidak asal memegang hewan sebelum memastikan kebersihannya.','1.	Pengolesan salep anti tungau berupa salep benzyl benzoate atau skabimite yang dioleskan keseluruh tubuh. 2.	memium obat anti gatal dan anti biotik  dengan kadar tertentu. 3. Menghindari  hewan yang terkena penyakit skabies');
/*!40000 ALTER TABLE `solusi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `role` int NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,0,'admin','admin@gmail.com','Tabanan','2020-04-17','$2y$10$k4ImyyNLiSn/aZqhP0gzWu08AxaIiGrZel.NCyKptbjqFGOe2HY3C'),(14,1,'maul','hasmul074@gmail.com','pancalang','2000-07-02','$2y$10$pktMaIeNoAXpgengZpr.BufXfOE3qWfCmHB9mCv7IxtI47yEE1//.'),(16,2,'Dr. Yenny sabrini','Sabriniyenny@yahoo.com','Ruko perumahan taman akasia blok R5a-R3 jalan serpong-parung, kab. bogor','1987-04-12','$2y$10$nAUD1rjbutqYizsaMQCo3.mOj73sru/xDtHX2gaVkJ8L0H.ZKYG9q');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'spk_ayam'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-24 21:44:31
