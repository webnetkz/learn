-- MySQL dump 10.14  Distrib 5.5.60-MariaDB, for Linux (x86_64)
--
-- Host: srv-pleskdb28.ps.kz    Database: webnetkz_mysql
-- ------------------------------------------------------
-- Server version	5.5.60-MariaDB

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
-- Current Database: `webnetkz_mysql`
--


--
-- Table structure for table `create_sql`
--

DROP TABLE IF EXISTS `create_sql`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `create_sql` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(2000) NOT NULL,
  `code` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `create_sql`
--

LOCK TABLES `create_sql` WRITE;
/*!40000 ALTER TABLE `create_sql` DISABLE KEYS */;
INSERT INTO `create_sql` VALUES (1,'Создание нового пользователя и установкой пароля','CREATE USER \'<span class=\"c\">nameNewUser</span>\'@\'<span class=\"c\">localhost\'</span> IDENTIFIED BY \'<span class=\"c\">passwordNewUser</span>\';'),(2,'Создание новой базы данных и установка кодировок','CREATE DATABASE <span class=\"c\">nameDatabase</span> CHARACTER SET <span class=\"c\">utf8</span> COLLATE <span class=\"c\">utf8_general_ci</span>;'),(3,'Создать таблицу с первичным ключем','CREATE TABLE <span class=\"c\">nameNewTable</span>(<br>-><span class=\"c\">id</span> INT UNSIGNED NOT NULL AUTO_INCREMENT,<br>-><span class=\"c\">name</span> CHAR(255) NOT NULL,<br>-><span class=\"c\">pass</span> VARCHAR(8000) NOT NULL,<br>->PRIMARY KEY (<span class=\"c\">id</span>)<br>->);'),(4,'Создание файла дампа базы данных в терменале <span class=\"n\">bash</span>','mysqldump -u<span class=\"c\">NameUser</span> -p<span class=\"c\">PasswordUser</span> <span class=\"c\">NameDataBase</span> > <span class=\"c\">fileName</span>'),(5,'1','1'),(6,'mmmmыафыаыфвафы','mmmm12312ываыва'),(7,'1231221321312','22222'),(8,'mmmmm','232');
/*!40000 ALTER TABLE `create_sql` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `delete_sql`
--

DROP TABLE IF EXISTS `delete_sql`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `delete_sql` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(2000) NOT NULL,
  `code` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `delete_sql`
--

LOCK TABLES `delete_sql` WRITE;
/*!40000 ALTER TABLE `delete_sql` DISABLE KEYS */;
INSERT INTO `delete_sql` VALUES (1,'Очистить таблицу с обнулением счетчиков','TRUNCASE TABLE <span class=\"c\">tableName</span>;'),(2,'Удалить базу данных','DROP DATABASE <span class=\"c\">nameDatabase</span>;'),(3,'Удалить таблицу','DROP TABLE <span class=\"c\">nameTable</span>;'),(4,'Удалить строку','DLETE FROM <spna class=\"c\">nameTable</spna> WHERE <span class=\"c\">nameColumn</span> LIKE \'%<span class=\"c\">tamplate</span>%\';');
/*!40000 ALTER TABLE `delete_sql` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `read_sql`
--

DROP TABLE IF EXISTS `read_sql`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `read_sql` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(2000) NOT NULL,
  `code` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `read_sql`
--

LOCK TABLES `read_sql` WRITE;
/*!40000 ALTER TABLE `read_sql` DISABLE KEYS */;
INSERT INTO `read_sql` VALUES (1,'Выбрать все колонки из таблицы','SELECT <span class=\"c\">*</span> FROM <span class=\"c\">nameTable</span>;'),(2,'Просмотр всех баз данных','SHOW DATABASES;'),(3,'Просмотр всех таблиц выбранной базы данных','SHOW TABLES;'),(4,'Просмотр структуры таблицы','DESC <span class=\"c\">nameTable</span>;'),(5,'Выбрать базу данных','USE <span class=\"c\">nameDatabase</span>;'),(6,'none','none');
/*!40000 ALTER TABLE `read_sql` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `update_sql`
--

DROP TABLE IF EXISTS `update_sql`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `update_sql` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(2000) NOT NULL,
  `code` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `update_sql`
--

LOCK TABLES `update_sql` WRITE;
/*!40000 ALTER TABLE `update_sql` DISABLE KEYS */;
INSERT INTO `update_sql` VALUES (1,'Назначение неограниченных прав доступа пользователю, эта команда создает пользователя если он отсутствует','GRANT ALL PRIVILEGES <span class=\"c\">* . *</span> TO \'<span class=\"c\">nameUser</span>\'@\'<span class=\"c\">localhost\'</span>;'),(2,'Обновить права доступа к базам данных','FLUSH PRIVILEGES;'),(3,'Обновить значение ячейки','UPDATE <span class=\"c\">nameTable</span> SET nameColumn = \'<span class=\"c\">Data</span>\' WHERE <span class=\"c\">id = 43</span>;'),(4,'Переименовать таблицу','RENAME TABLE <span class=\"c\">oldNameTable</span> TO <span class=\"c\">newNameTable</span>;<br>\r\nALTER TABLE <span class=\"c\">nameTable</span> RENAME <span class=\"c\">newNameTable</span>;'),(5,'Изменение пароля','SET PASSWORD FOR \'<span class=\"c\">nameUser</span>\'@\'<span class=\"c\">localhost</span>\' = PASSWORD(\'<span class=\"c\">newPasswordForUser</span>\');'),(6,'Вставить данные в таблицу','INSERT INTO <span class=\"c\">nameTable</span> (<span class=\"c\">nameColumn</span>)<br>->VALUES (\'<span class=\"c\">dataForLine1</span>\'),<br>->(\'<span class=\"c\">dataForLine2</span>\');'),(7,'Переименовать и изменить тип данных колонки','ALTER TABLE <span class=\"c\">nameTable</span> CHANGE <span class=\"c\">oldNameColumn</span> <span class=\"c\">newNameColumn</span> TINYINT(255) DEFAULT \'<span class=\"n\">43</span>\';'),(8,'Восстановить базу данных из дампа','mysql -u<span class=\"c\">NameUser</span> -p<span class=\"c\">PasswordUser</span> -f <span class=\"c\">mydb</span> < <span class=\"c\">fileName</span>.sql'),(9,'Модификация колонки','ALTER TABLE <span class=\"c\">NameTable</span> MODIFY <span class=\"c\">nameColumn</span> INT NOT NULL;'),(10,'Удалить колонку','ALTER TABLE <span class=\"c\">NameTable</span> DROP <span class=\"c\">nameColumn</span>;'),(11,'Переименовать таблицу','RENAME TABLE <span class=\"c\">oldNameTable</span> TO <span class=\"c\">newNameTable</span>;'),(12,'Переименовать таблицу','RENAME TABLE <span class=\"c\">oldNameTable</span> TO <span class=\"c\">newNameTable</span>;'),(13,'Переименовать таблицу','RENAME TABLE <span class=\"c\">oldNameTable</span> TO <span class=\"c\">newNameTable</span>;');
/*!40000 ALTER TABLE `update_sql` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-13 21:31:09

