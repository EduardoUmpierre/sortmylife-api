/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.7.11 : Database - sortmylife
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `book` */

insert  into `book`(`id`,`title`,`rating`,`author`,`description`,`image`,`year`,`created_at`,`updated_at`) values (1,'Admirável Mundo Novo',5,'Aldous Huxley','Admirável Mundo Novo (Brave New World na versão original em língua inglesa) é um romance distópico escrito por Aldous Huxley e publicado em 1932 que narra um hipotético futuro onde as pessoas são pré-condicionadas biologicamente e condicionadas psicologicamente a viverem em harmonia com as leis e regras sociais, dentro de uma sociedade organizada por castas.','https://amnprojeto.files.wordpress.com/2011/11/aldous.jpg',1932,'2017-07-03 16:07:41','2017-07-03 16:07:41');
insert  into `book`(`id`,`title`,`rating`,`author`,`description`,`image`,`year`,`created_at`,`updated_at`) values (3,'O Mundo de Sofia',5,'Jostein Gaarder','O Mundo de Sofia (Sofies verden em norueguês) é um romance escrito por Jostein Gaarder, publicado em 1991. O livro foi escrito originalmente em norueguês, mas já foi traduzido para mais de 60 línguas, teve sua primeira edição em português em 1995, que atualmente encontra-se em sua 32ª reimpressão.','https://images.livrariasaraiva.com.br/imagemnet/imagem.aspx/?pro_id=346501&qld=90&l=430&a=-1',1991,'2017-07-10 11:44:40','2017-07-10 11:44:42');
insert  into `book`(`id`,`title`,`rating`,`author`,`description`,`image`,`year`,`created_at`,`updated_at`) values (5,'Jogador Nº 1',5,'Ernest Cline','Ready Player One foi o primeiro livro escrito por Ernest Cline. O livro é um romance com uma temática futurista.Foi lançado originalmente em 16 de agosto de 2011 pela Random House.','https://upload.wikimedia.org/wikipedia/commons/6/6b/Jogador-numero-1-capa.jpg',2011,'2017-07-10 12:19:33','2017-07-10 12:19:33');

/*Table structure for table `movie` */

DROP TABLE IF EXISTS `movie`;

CREATE TABLE `movie` (
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `movie` */

insert  into `movie`(`id`,`title`,`rating`,`author`,`description`,`image`,`year`,`created_at`,`updated_at`) values (3,'O Fabuloso Destino de Amélie Poulain',5,'Jean-Pierre Jeunet','Amélie é uma jovem do interior que se muda para Paris e logo começa a trabalhar em um café. Num belo dia, ela encontra uma caixinha dentro de seu apartamento e decide procurar o dono. A partir daí, sua perspectiva de vida muda radicalmente.','https://upload.wikimedia.org/wikipedia/pt/thumb/a/a0/Le_fabuleux_destin_d%27Am%C3%A9lie_Poulain.jpg/200px-Le_fabuleux_destin_d%27Am%C3%A9lie_Poulain.jpg',2001,'2017-07-10 14:55:48','2017-07-10 14:55:48');

/*Table structure for table `serie` */

DROP TABLE IF EXISTS `serie`;

CREATE TABLE `serie` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `rating` smallint(6) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `year` smallint(6) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `serie` */

insert  into `serie`(`id`,`title`,`rating`,`author`,`description`,`image`,`year`,`created_at`,`updated_at`) values (1,'Stranger Things',5,'Matt Duffer','A série se passa na década de 1980, e é altamente tematizada pelos elementos culturais da época, com uma trilha sonora toda remetente aos marcantes sintetizadores da época e inúmeras referências a obras de Steven Spielberg,[2] John Carpenter[3] e Stephen King,[4] considerados as grandes inspirações dos Irmãos Duffer para a realização do projeto.[5] Na trama, um garoto desaparece misteriosamente na pequena cidade de Hawkins, Indiana, e faz seus amigos partirem por sua busca, que no caminho encontram uma estranha menina com poderes telecinéticos.','https://upload.wikimedia.org/wikipedia/commons/3/38/Stranger_Things_logo.png',2016,'2017-07-09 23:07:41','2017-07-09 22:07:41');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`name`,`username`,`email`,`role`,`password`,`created_at`,`updated_at`) values (1,'Eduardo','dudu','eduardo@gmail.com','role_user','$2y$10$1QVCm3cXgNCA/jIg1WfXKuq/UfSgA9zYfADiNw09MP/Uiq.fBKUu.','2017-07-17 15:06:29','2017-07-17 15:06:29');
insert  into `user`(`id`,`name`,`username`,`email`,`role`,`password`,`created_at`,`updated_at`) values (6,'Eduardo Pieretti Umpierre','eduardo','eduardoumpierre@hotmail.com','role_user','$2y$10$QyURVvKXQwwD2eywxFZlb.ciK1i9Gx/ktBADc0HSHeThrWILWBsMy','2017-07-17 16:59:50','2017-07-17 16:59:50');

/*Table structure for table `user_book_favorite` */

DROP TABLE IF EXISTS `user_book_favorite`;

CREATE TABLE `user_book_favorite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_book` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_favorite_user` (`id_user`),
  KEY `user_favorite_book` (`id_book`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `user_book_favorite` */

insert  into `user_book_favorite`(`id`,`id_user`,`id_book`,`created_at`,`updated_at`) values (3,1,1,'2017-07-17 18:08:22','2017-07-17 18:08:22');
insert  into `user_book_favorite`(`id`,`id_user`,`id_book`,`created_at`,`updated_at`) values (4,1,3,'2017-07-17 18:17:21','2017-07-17 18:17:21');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
