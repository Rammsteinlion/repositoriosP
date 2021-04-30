-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-04-2021 a las 03:46:51
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_tecnica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_employee`
--

DROP TABLE IF EXISTS `app_employee`;
CREATE TABLE IF NOT EXISTS `app_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text,
  `lastname` text,
  `department_id` int(11) DEFAULT '0',
  `salary` double DEFAULT '0',
  `educationlevel_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_employe_departemnt` (`department_id`),
  KEY `fk_employe_education` (`educationlevel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `app_employee`
--

INSERT INTO `app_employee` (`id`, `firstname`, `lastname`, `department_id`, `salary`, `educationlevel_id`) VALUES
(1, 'elkin', 'murillo', 1, 250000, 1),
(2, 'danilo', 'torres', 2, 1000, 2),
(3, 'danilo', 'alzate', 2, 1000, 2),
(4, 'sara', 'rojas', 2, 2500, 1),
(5, 'jose', 'ladino', 3, 2000, 1),
(6, 'marcos', 'suares', 2, 3000, 3);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `app_employee`
--
ALTER TABLE `app_employee`
  ADD CONSTRAINT `fk_employe_departemnt` FOREIGN KEY (`department_id`) REFERENCES `appx_department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_employe_education` FOREIGN KEY (`educationlevel_id`) REFERENCES `appx_educationlevel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
