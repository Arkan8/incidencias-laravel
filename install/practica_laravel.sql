-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 25-02-2020 a las 01:49:33
-- Versión del servidor: 5.7.28
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
-- Base de datos: `practica_laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cf`
--

DROP TABLE IF EXISTS `cf`;
CREATE TABLE IF NOT EXISTS `cf` (
  `codcf` int(12) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `codfamprof` int(12) NOT NULL,
  PRIMARY KEY (`codcf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `famprof`
--

DROP TABLE IF EXISTS `famprof`;
CREATE TABLE IF NOT EXISTS `famprof` (
  `codfamprof` int(12) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  PRIMARY KEY (`codfamprof`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
CREATE TABLE IF NOT EXISTS `mensajes` (
  `titulo` varchar(255) NOT NULL,
  `contenido` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `nif` int(9) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido1` varchar(255) NOT NULL,
  `apellido2` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `perfil` varchar(255) NOT NULL,
  `fijo` int(9) NOT NULL,
  `movil` int(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `departamento` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `blog` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `formacion` varchar(500) NOT NULL,
  PRIMARY KEY (`nif`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
