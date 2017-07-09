/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.7.11 : Database - aps-pi2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE `sortmylife`;

/*Table structure for table `book` */

DROP TABLE IF EXISTS `book`;

CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `rating` smallint(6) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `year` smallint(6) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `book` */

insert  into `book`(`id`,`title`,`rating`,`author`,`description`,`image`,`year`,`created_at`,`updated_at`) values (1,'Admirável Mundo Novo',5,'Aldous Huxley','Admirável Mundo Novo (Brave New World na versão original em língua inglesa) é um romance distópico escrito por Aldous Huxley e publicado em 1932 que narra um hipotético futuro onde as pessoas são pré-condicionadas biologicamente e condicionadas psicologicamente a viverem em harmonia com as leis e regras sociais, dentro de uma sociedade organizada por castas.','https://amnprojeto.files.wordpress.com/2011/11/aldous.jpg',1932,'2017-07-03 16:07:41','2017-07-03 16:07:41');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
