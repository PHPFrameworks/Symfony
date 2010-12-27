-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.49-1ubuntu8.1


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema symfony
--

CREATE DATABASE IF NOT EXISTS symfony;
USE symfony;

--
-- Definition of table `symfony`.`blog_comment`
--

DROP TABLE IF EXISTS `symfony`.`blog_comment`;
CREATE TABLE  `symfony`.`blog_comment` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `entry_id` bigint(20) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `entry_id_idx` (`entry_id`),
  CONSTRAINT `blog_comment_entry_id_blog_entry_id` FOREIGN KEY (`entry_id`) REFERENCES `blog_entry` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symfony`.`blog_comment`
--

/*!40000 ALTER TABLE `blog_comment` DISABLE KEYS */;
LOCK TABLES `blog_comment` WRITE;
INSERT INTO `symfony`.`blog_comment` VALUES  (1,1,'SHIZZLE');
UNLOCK TABLES;
/*!40000 ALTER TABLE `blog_comment` ENABLE KEYS */;


--
-- Definition of table `symfony`.`blog_entry`
--

DROP TABLE IF EXISTS `symfony`.`blog_entry`;
CREATE TABLE  `symfony`.`blog_entry` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symfony`.`blog_entry`
--

/*!40000 ALTER TABLE `blog_entry` DISABLE KEYS */;
LOCK TABLES `blog_entry` WRITE;
INSERT INTO `symfony`.`blog_entry` VALUES  (1,'Test','Blubb'),
 (2,'fd','fdg'),
 (3,'fdg','fdg');
UNLOCK TABLES;
/*!40000 ALTER TABLE `blog_entry` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
