# ************************************************************
#
# Database: test
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL,
  `email` char(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `email`, `created_at`, `updated_at`)
VALUES
	(1,'cf4c0','69ebf@aol.com',NULL,NULL),
	(2,'66755','2a053@aol.com','2017-06-23 21:23:18','2017-06-23 21:23:18'),
	(3,'cf0c5','30deb@aol.com','2017-06-23 21:23:28','2017-06-23 21:23:28'),
	(4,'cf4c0','d5fe3@aol.com','2017-06-23 21:23:28','2017-06-23 21:23:28'),
	(5,'e5762','6b335@aol.com','2017-06-23 21:23:28','2017-06-23 21:23:28'),
	(6,'d88f1','e0ecf@aol.com','2017-06-23 21:23:29','2017-06-23 21:23:29'),
	(7,'8cb86','69ebf@aol.com','2017-06-23 21:23:29','2017-06-23 21:23:29'),
	(8,'7a8e5','3aa0d@aol.com','2017-06-23 21:23:29','2017-06-23 21:23:29'),
	(9,'a9bd4','3709f@aol.com','2017-06-23 21:23:29','2017-06-23 21:23:29'),
	(10,'73da6','725d8@aol.com','2017-06-23 21:23:30','2017-06-23 21:23:30'),
	(11,'c1593','3bc61@aol.com','2017-06-23 21:23:30','2017-06-23 21:23:30'),
	(12,'c3bf2','18e38@aol.com','2017-06-23 21:23:30','2017-06-23 21:23:30'),
	(13,'27677','1fc00@aol.com','2017-06-23 21:23:30','2017-06-23 21:23:30'),
	(14,'f6651','52583@aol.com','2017-06-23 21:23:30','2017-06-23 21:23:30');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
