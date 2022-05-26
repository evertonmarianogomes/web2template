-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.3.34-MariaDB-0ubuntu0.20.04.1 - Ubuntu 20.04
-- OS do Servidor:               debian-linux-gnu
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_template
CREATE DATABASE IF NOT EXISTS `db_template` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_template`;

-- Copiando estrutura para tabela db_template.visitorCounter
CREATE TABLE IF NOT EXISTS `visitorCounter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `route` varchar(25) NOT NULL,
  `hitCounter` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela db_template.visitorCounter: ~1 rows (aproximadamente)
DELETE FROM `visitorCounter`;
/*!40000 ALTER TABLE `visitorCounter` DISABLE KEYS */;
INSERT INTO `visitorCounter` (`id`, `route`, `hitCounter`, `created_at`, `updated_at`) VALUES
	(6, 'app.homepage', 18, '2022-05-26 02:31:23', '2022-05-26 02:38:05');
/*!40000 ALTER TABLE `visitorCounter` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
