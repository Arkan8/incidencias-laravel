-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-02-2020 a las 12:28:37
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basedatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

DROP TABLE IF EXISTS `incidencias`;
CREATE TABLE IF NOT EXISTS `incidencias` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(12) NOT NULL,
  `asunto` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `fechacreacion` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `aula` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_usuario_2` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`id`, `id_usuario`, `asunto`, `descripcion`, `fechacreacion`, `tipo`, `aula`) VALUES
(1, 1, 'Ordenadores', 'Se han averiado unos ordenadores por humedad', '27-02-2020', 'Urgente', '23'),
(2, 2, 'Pantallas', 'Se ha accidentado un alumno contra una pantalla', '27-02-2020', 'Urgente', '12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accion` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `asunto` varchar(255) NOT NULL,
  `mensaje` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `departamento` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `email`, `rol`, `departamento`, `updated_at`, `created_at`, `remember_token`) VALUES
(1, 'adri', '1234abcd', 'adri@adri.com', 'Profesor', 'Informatica', '0000-00-00 00:00:00', '0000-00-00 00:00:00', ''),
(2, 'pepe', '$2y$10$xzk8E736vt3eKtdxrH1yGe0.aLaWmBVO.GtL6LCqSwk4vRmWNXvq.', 'pepe@gmail.com', 'Profesor', 'administracion', '2020-02-26 16:01:24', '2020-02-26 16:01:24', 'Cov5Q6luoFUO7NJaslflI9L5svGcmZbq0scUGYBHcGYWd6XA4Y9Fg7Le55Yd'),
(3, 'manolo', '$2y$10$gdybRBcjbZlhBsSIFWEqhup7L.IaN52YI.0mSiBdIiuRSb9rJqOXG', 'manolo@gmail.com', 'Profesor', 'administracion', '2020-02-27 00:35:17', '2020-02-27 00:35:17', '1vWCfBZVZTFow5a456HbvLOtSQTtUBaeGcT695MkDlm0qCC4ybP0oUdfyabs');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD CONSTRAINT `incidencias_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
