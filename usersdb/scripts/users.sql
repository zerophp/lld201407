-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.5.23 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla lld201407.cities
CREATE TABLE IF NOT EXISTS `cities` (
  `idcity` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcity`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla lld201407.cities: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` (`idcity`, `city`) VALUES
	(1, 'Lleida'),
	(2, 'Barcelona'),
	(3, 'Girona');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;


-- Volcando estructura para tabla lld201407.genders
CREATE TABLE IF NOT EXISTS `genders` (
  `idgender` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idgender`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla lld201407.genders: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `genders` DISABLE KEYS */;
/*!40000 ALTER TABLE `genders` ENABLE KEYS */;


-- Volcando estructura para tabla lld201407.languages
CREATE TABLE IF NOT EXISTS `languages` (
  `idlanguage` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idlanguage`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla lld201407.languages: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` (`idlanguage`, `language`) VALUES
	(1, 'Català'),
	(2, 'Castellano'),
	(3, 'English');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;


-- Volcando estructura para tabla lld201407.pets
CREATE TABLE IF NOT EXISTS `pets` (
  `idpet` int(11) NOT NULL AUTO_INCREMENT,
  `pet` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idpet`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla lld201407.pets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pets` DISABLE KEYS */;
INSERT INTO `pets` (`idpet`, `pet`) VALUES
	(1, 'Gato'),
	(2, 'Perro'),
	(3, 'Tigre');
/*!40000 ALTER TABLE `pets` ENABLE KEYS */;


-- Volcando estructura para tabla lld201407.users
CREATE TABLE IF NOT EXISTS `users` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `description` text,
  `photo` varchar(255) DEFAULT NULL,
  `cities_idcity` int(11) NOT NULL,
  `gender` int(11) DEFAULT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_users_cities1_idx` (`cities_idcity`),
  CONSTRAINT `fk_users_cities1` FOREIGN KEY (`cities_idcity`) REFERENCES `cities` (`idcity`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla lld201407.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Volcando estructura para tabla lld201407.users_has_languages
CREATE TABLE IF NOT EXISTS `users_has_languages` (
  `users_iduser` int(11) NOT NULL,
  `languages_idlanguage` int(11) NOT NULL,
  PRIMARY KEY (`users_iduser`,`languages_idlanguage`),
  KEY `fk_users_has_languages_languages1_idx` (`languages_idlanguage`),
  KEY `fk_users_has_languages_users1_idx` (`users_iduser`),
  CONSTRAINT `fk_users_has_languages_users1` FOREIGN KEY (`users_iduser`) REFERENCES `users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_languages_languages1` FOREIGN KEY (`languages_idlanguage`) REFERENCES `languages` (`idlanguage`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla lld201407.users_has_languages: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users_has_languages` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_has_languages` ENABLE KEYS */;


-- Volcando estructura para tabla lld201407.users_has_pets
CREATE TABLE IF NOT EXISTS `users_has_pets` (
  `users_iduser` int(11) NOT NULL,
  `pets_idpet` int(11) NOT NULL,
  PRIMARY KEY (`users_iduser`,`pets_idpet`),
  KEY `fk_users_has_pets_pets1_idx` (`pets_idpet`),
  KEY `fk_users_has_pets_users_idx` (`users_iduser`),
  CONSTRAINT `fk_users_has_pets_users` FOREIGN KEY (`users_iduser`) REFERENCES `users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_pets_pets1` FOREIGN KEY (`pets_idpet`) REFERENCES `pets` (`idpet`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla lld201407.users_has_pets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users_has_pets` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_has_pets` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
