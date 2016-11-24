-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: lojavirtual
-- ------------------------------------------------------
-- Server version	5.7.11-log

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
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` text,
  `idDepartamento` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCategoria`),
  KEY `fk_categoria_departamento_idx` (`idDepartamento`),
  CONSTRAINT `fk_categoria_departamento` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`idDepartamento`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Salto','Sapatos femininos cadastrados automaticamente',1),(2,'Rasteirinha','Sapatos femininos cadastrados automaticamente',1),(3,'Scarpin','Sapatos femininos cadastrados automaticamente',1),(4,'Plataforma','Sapatos femininos cadastrados automaticamente',1),(5,'Meia pata','Sapatos femininos cadastrados automaticamente',1),(6,'Tênis','Sapatos femininos cadastrados automaticamente',1),(7,'Tênis','Sapatos masculinos cadastrados automaticamente',2),(8,'Coturno','Sapatos masculinos cadastrados automaticamente',2),(9,'Mocassin','Sapatos masculinos cadastrados automaticamente',2),(10,'Sapato Social','Sapatos masculinos cadastrados automaticamente',2),(11,'Sandália','Sapatos masculinos cadastrados automaticamente',2),(12,'Bota','Sapatos masculinos cadastrados automaticamente',2),(13,'Sapato Casual','Sapatos masculinos cadastrados automaticamente',2),(14,'Sapatênis','Sapatos masculinos cadastrados automaticamente',2),(15,'Chinelo','Sapatos juvenis cadastrados automaticamente',3),(16,'Bota','Sapatos juvenis cadastrados automaticamente',3),(17,'Sandália','Sapatos juvenis cadastrados automaticamente',3),(18,'Sapatilha','Sapatos juvenis cadastrados automaticamente',3),(19,'Sapato','Sapatos juvenis cadastrados automaticamente',3),(20,'Tênis','Sapatos juvenis cadastrados automaticamente',3);
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-21 14:03:22
