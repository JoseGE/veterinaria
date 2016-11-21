-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.7.14


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema mascotas
--

CREATE DATABASE IF NOT EXISTS mascotas;
USE mascotas;

--
-- Definition of table `mascota`
--

DROP TABLE IF EXISTS `mascota`;
CREATE TABLE `mascota` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nacimiento` date NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `raza` varchar(45) NOT NULL,
  `peso` decimal(13,2) NOT NULL,
  `color` varchar(45) NOT NULL,
  `comentario` text NOT NULL,
  `foto` enum('S','N') NOT NULL DEFAULT 'N',
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mascota`
--

/*!40000 ALTER TABLE `mascota` DISABLE KEYS */;
INSERT INTO `mascota` (`id`,`nacimiento`,`tipo`,`raza`,`peso`,`color`,`comentario`,`foto`,`nombre`) VALUES 
 (1,'2016-11-16','perro','Bull Dog','3000.00','Negro','lo mejor','S','Poncho'),
 (2,'2016-11-10','perro','Pura','13.00','rosa','asdfasdf','S','Matis'),
 (3,'2016-11-09','perro','asdfasdf','3432.00','asdfas','asdfasdf','S','asdfasdf'),
 (4,'0000-00-00','perro','asdfasdf','2.00','asdfasd','asdfasd','N','asdaasdf'),
 (5,'2016-11-17','perro','asdfasdf','34234.00','asdfasdf','asdfasdf','S','asdfasdf');
/*!40000 ALTER TABLE `mascota` ENABLE KEYS */;


--
-- Definition of table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`,`usuario`,`clave`,`email`) VALUES 
 (3,'jose','12321','j-e_1997@hotmail.es'),
 (4,'pero','82c050f579f4fce2263089cd47f9995e','cr.i.tianperez@hotmail.com');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
