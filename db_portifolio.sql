-- MariaDB dump 10.19  Distrib 10.11.7-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u557098807_db_portifolio
-- ------------------------------------------------------
-- Server version	10.11.7-MariaDB-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_admin`
--

DROP TABLE IF EXISTS `tb_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_admin` (
  `cd_admin` int(11) NOT NULL AUTO_INCREMENT,
  `cd_senha` text NOT NULL,
  `ds_sobre_mim` text NOT NULL,
  `ds_tecnologias` text NOT NULL,
  `cd_caminho_curriculo` varchar(200) NOT NULL,
  `cd_caminho_pfp` varchar(200) NOT NULL,
  `lk_github` varchar(100) NOT NULL,
  `lk_linkedin` varchar(100) NOT NULL,
  PRIMARY KEY (`cd_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_admin`
--

/*!40000 ALTER TABLE `tb_admin` DISABLE KEYS */;
INSERT INTO `tb_admin` VALUES
(1,'$2y$10$aW8pcb.5l.IycvhQ.8BUDe6ll.VWk083PSbsp20ObFOfYdKDwLerK','    Estudante de programação e tecnologia da informação, atualmente aprimorando habilidades técnicas no curso Técnico de Desenvolvimento de Sistemas na ETEC e Técnico de Informática no Instituto de Tecnologia de Jacareí. Meu objetivo principal é contribuir para aplicações que façam a diferença, com foco em aplicações web.',' <p>\n   Tenho conhecimento nas seguintes tecnologias: \n</p>\n\n<ul>\n    <li>HTML5</li>\n    <li>CSS3</li>\n    <li>JavaScript</li>\n    <li>PHP 8.2</li>\n    <li>Python 3</li>\n    <li>MySql</li>\n    <li>Padrão MVC</li>\n    <li>Gt e GitHub</li>\n</ul>     ','assets/personal/CV Lucas Leme.pdf','assets/personal/PFP.jfif','https://github.com/lemelinha','https://br.linkedin.com/in/lucas-leme-49a3a0238');
/*!40000 ALTER TABLE `tb_admin` ENABLE KEYS */;

--
-- Table structure for table `tb_imagem`
--

DROP TABLE IF EXISTS `tb_imagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_imagem` (
  `cd_imagem` int(11) NOT NULL AUTO_INCREMENT,
  `nm_caminho` varchar(200) NOT NULL,
  PRIMARY KEY (`cd_imagem`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_imagem`
--

/*!40000 ALTER TABLE `tb_imagem` DISABLE KEYS */;
INSERT INTO `tb_imagem` VALUES
(1,'assets/images/carousel1/image1.png'),
(2,'assets/images/carousel1/image2.png'),
(3,'assets/images/carousel2/image1.png'),
(4,'assets/images/carousel2/image2.png'),
(5,'assets/images/carousel2/image3.png'),
(6,'assets/images/carousel2/image4.png'),
(7,'assets/images/carousel3/image1.png'),
(8,'assets/images/carousel3/image2.png'),
(9,'assets/images/carousel3/image3.png'),
(10,'assets/images/carousel4/image1.png'),
(11,'assets/images/carousel4/image2.png'),
(12,'assets/images/carousel4/image3.png'),
(13,'assets/images/carousel5/image1.png'),
(14,'assets/images/carousel5/image2.png'),
(15,'assets/images/carousel5/image3.png'),
(16,'assets/images/carousel6/image1.png'),
(17,'assets/images/carousel6/image2.png'),
(18,'assets/images/carousel6/image3.png'),
(19,'assets/images/carousel7/image1.png'),
(20,'assets/images/carousel7/image2.png'),
(21,'assets/images/carousel7/image3.png');
/*!40000 ALTER TABLE `tb_imagem` ENABLE KEYS */;

--
-- Table structure for table `tb_imagem_tb_projeto`
--

DROP TABLE IF EXISTS `tb_imagem_tb_projeto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_imagem_tb_projeto` (
  `id_imagem` int(11) NOT NULL,
  `id_projeto` int(11) NOT NULL,
  PRIMARY KEY (`id_imagem`,`id_projeto`),
  KEY `fk_tb_imagem_has_tb_projeto_tb_projeto1_idx` (`id_projeto`),
  KEY `fk_tb_imagem_has_tb_projeto_tb_imagem_idx` (`id_imagem`),
  CONSTRAINT `fk_tb_imagem_has_tb_projeto_tb_imagem` FOREIGN KEY (`id_imagem`) REFERENCES `tb_imagem` (`cd_imagem`),
  CONSTRAINT `fk_tb_imagem_has_tb_projeto_tb_projeto1` FOREIGN KEY (`id_projeto`) REFERENCES `tb_projeto` (`cd_projeto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_imagem_tb_projeto`
--

/*!40000 ALTER TABLE `tb_imagem_tb_projeto` DISABLE KEYS */;
INSERT INTO `tb_imagem_tb_projeto` VALUES
(1,1),
(2,1),
(3,2),
(4,2),
(5,2),
(6,2),
(7,3),
(8,3),
(9,3),
(10,4),
(11,4),
(12,4),
(13,5),
(14,5),
(15,5),
(16,6),
(17,6),
(18,6),
(19,7),
(20,7),
(21,7);
/*!40000 ALTER TABLE `tb_imagem_tb_projeto` ENABLE KEYS */;

--
-- Table structure for table `tb_projeto`
--

DROP TABLE IF EXISTS `tb_projeto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_projeto` (
  `cd_projeto` int(11) NOT NULL AUTO_INCREMENT,
  `nm_projeto` varchar(70) NOT NULL,
  `ds_projeto` longtext NOT NULL,
  `lk_github` varchar(100) DEFAULT NULL,
  `lk_expo` varchar(100) DEFAULT NULL,
  `lk_online` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cd_projeto`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_projeto`
--

/*!40000 ALTER TABLE `tb_projeto` DISABLE KEYS */;
INSERT INTO `tb_projeto` VALUES
(1,'Boletim de Menções','Um projeto feito em sala com intuito de aprendizagem na ferramenta React Native do JavaScript, onde apresenta os alunos presentes dentro de um hashmap e suas informações. O nome do aluno muda de cor dependendo da menção dele.\r\n\r\n<div>\r\n   <ul>\r\n      <h3>Elementos aprendidos</h3>\r\n      <li>FlatList\r\n      <li>useEffect\r\n   </ul>\r\n   <ul>\r\n      <h3>Elementos Utilizados</h3>\r\n      <li>FlatList\r\n      <li>useEffect\r\n      <li>useState\r\n      <li>TouchableOpacity\r\n      <li>Text\r\n      <li>View\r\n      <li>StyleSheet\r\n   </ul>\r\n</div>',NULL,'https://snack.expo.dev/@lemelinha/d0f8ba',NULL),
(2,'CineFlix','Um projeto feito em aula com a ferramenta React Native. Com intuito de apresentar seriados e filmes que, quando clicado, é direcionado para um tela apresentando sua sinópse.\r\n\r\n<div>\r\n   <ul>\r\n      <h3>Elementos aprendidos</h3>\r\n      <li>Dimensions\r\n      <li>ScrollView\r\n   </ul>\r\n   <ul>\r\n      <h3>Elementos Utilizados</h3>\r\n      <li>Dimensions\r\n      <li>ScrollView\r\n      <li>useState\r\n      <li>TouchableOpacity\r\n      <li>Image\r\n      <li>Text\r\n      <li>View\r\n      <li>StyleSheet\r\n   </ul>\r\n</div>','','https://snack.expo.dev/@lemelinha/atividade-2024-03-01?platform=web',''),
(3,'Currículo online','Um protótipo mobile de um currículo usando React Native. Junto a isso, um modelo de login, sem acesso ao banco de dados, para autorizar a vizualização do currículo (login: \'teste\', senha: \'123\')\n\n<div>\n   <ul>\n      <h3>Elementos aprendidos</h3>\n      <li>Lógica de sistema de login\n      <li>Surgimento de informações através de botões\n   </ul>\n   <ul>\n      <h3>Elementos Utilizados</h3>\n      <li>TextInput\n      <li>useState\n      <li>Image\n      <li>Dimensions\n      <li>TouchableOpacity\n      <li>Text\n      <li>View\n      <li>StyleSheet\n   </ul>\n</div>',NULL,'https://snack.expo.dev/@lemelinha/prova-15_03_2024',NULL),
(4,'Documentação','Um projeto para aprender a usar o elemento TextInput do React Native. Nele, você insere suas informações e, ao clicar no botão, um aviso é exibido mostrando as informações inseridas.\r\n\r\n<div>\r\n   <ul>\r\n      <h3>Elementos aprendidos</h3>\r\n      <li>Inserção de múltiplas informações\r\n      <li>Exibição das informações inseridas\r\n   </ul>\r\n   <ul>\r\n      <h3>Elementos utilizados</h3>\r\n      <li>useState\r\n      <li>TouchableOpacity\r\n      <li>TextInput\r\n      <li>Text\r\n      <li>StyleSheet\r\n   </ul>\r\n</div>',NULL,'https://snack.expo.dev/@lemelinha/aula-pratica-23_02',NULL),
(5,'Conversor de temperaturas','Um mini projeto em React Native onde o usuário insere uma temperatura em graus Celsius e converte para Fahrenheit\r\n\r\n<div>\r\n   <ul>\r\n      <h3>Elementos aprendidos</h3>\r\n      <li>useState\r\n      <li>TextInput\r\n      <li>TouchableOpacity\r\n   </ul>\r\n   <ul>\r\n      <h3>Elementos utilizados</h3>\r\n      <li>useState\r\n      <li>TouchableOpacity\r\n      <li>TextInput\r\n      <li>Text\r\n      <li>StyleSheet\r\n   </ul>\r\n</div>',NULL,'https://snack.expo.dev/@lemelinha/aula-pratica-22_02',NULL),
(6,'Lista de produtos','Um projeto para utilizar a lógica de filtros com react native. Possuindo 4 filtros, a lista de produtos se altera de forma dinâmica dependendo dos valores inseridos pelo usuário\n\n<div>\n  <ul>\n    <h3>Tecnologias Aprendidas</h3>\n    <li>Lógica de filtro\n    <li>FlatList\n  </ul>\n  <ul>\n    <h3>Tecnologias Utilizadas</h3>\n    <li>UseState\n    <li>FlatList\n    <li>TextInput\n    <li>Text\n    <li>Image\n    <li>View\n  </ul>\n</div>',NULL,'https://snack.expo.dev/@lemelinha/aula-pratica-2024-04-18',NULL),
(7,'Átomo','Um projeto para o aprendizado de uma nova tecnologia, Natigator, do React Native. Ele possibilitou a navagação entre telas sem o uso do useState\r\n\r\n<div>\r\n  <ul>\r\n    <h3>Tecnologias Aprendidas</h3>\r\n    <li>Navigator\r\n    <li>Stack\r\n  </ul>\r\n  <ul>\r\n    <h3>Tecnologias Utilizadas</h3>\r\n    <li>Navigator\r\n    <li>Stack\r\n    <li>TouchableOpacity\r\n    <li>Text\r\n    <li>Image\r\n    <li>View\r\n    <li>ScrollView\r\n  </ul>\r\n</div>',NULL,'https://snack.expo.dev/@lemelinha/trabalho01navegacaodetelas?platform=web',NULL);
/*!40000 ALTER TABLE `tb_projeto` ENABLE KEYS */;

--
-- Dumping routines for database 'u557098807_db_portifolio'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-11 20:23:05
