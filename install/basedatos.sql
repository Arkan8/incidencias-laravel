-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 03-03-2020 a las 22:51:03
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
-- Estructura de tabla para la tabla `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE IF NOT EXISTS `activity_log` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` int(11) DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'default', 'updated', 2, 'App\\User', 2, 'App\\User', '[]', '2020-02-29 19:30:59', '2020-02-29 19:30:59'),
(2, 'default', 'created', 7, 'App\\User', NULL, NULL, '[]', '2020-02-29 19:31:17', '2020-02-29 19:31:17'),
(3, 'default', 'updated', 7, 'App\\User', 7, 'App\\User', '[]', '2020-02-29 19:42:46', '2020-02-29 19:42:46'),
(4, 'default', 'created', 8, 'App\\User', NULL, NULL, '[]', '2020-02-29 19:43:07', '2020-02-29 19:43:07'),
(5, 'default', 'updated', 7, 'App\\User', 7, 'App\\User', '[]', '2020-03-01 18:57:51', '2020-03-01 18:57:51'),
(6, 'default', 'updated', 2, 'App\\User', 2, 'App\\User', '[]', '2020-03-01 21:10:40', '2020-03-01 21:10:40'),
(7, 'default', 'updated', 7, 'App\\User', 7, 'App\\User', '[]', '2020-03-01 21:12:28', '2020-03-01 21:12:28'),
(8, 'default', 'updated', 2, 'App\\User', 2, 'App\\User', '[]', '2020-03-01 21:21:22', '2020-03-01 21:21:22'),
(9, 'default', 'updated', 2, 'App\\User', 2, 'App\\User', '[]', '2020-03-01 21:25:25', '2020-03-01 21:25:25'),
(10, 'default', 'updated', 7, 'App\\User', 7, 'App\\User', '[]', '2020-03-01 21:25:55', '2020-03-01 21:25:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inbox`
--

DROP TABLE IF EXISTS `inbox`;
CREATE TABLE IF NOT EXISTS `inbox` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `asunto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inbox`
--

INSERT INTO `inbox` (`id`, `user_id`, `asunto`, `mensaje`, `created_at`, `updated_at`) VALUES
(1, 2, 'Saludos', 'Este es un mensaje de prueba. Buenas tardes', NULL, NULL),
(2, 2, 'Buenas noches', 'Este es un segundo mensaje de prueba. Saludos', NULL, NULL),
(3, 7, 'Hola carmelito', '<p>Le hablo para acordar el contrato de alquiler del vientre de su mujer</p>', NULL, NULL),
(4, 7, 'Que pasa carmelito', '<p>Que crack eres tio, eres un mostro</p>', NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`id`, `id_usuario`, `asunto`, `descripcion`, `fechacreacion`, `tipo`, `aula`) VALUES
(5, 2, 'Enemigo', 'kjhdksjhakj', '2020-02-28 14:06:53', 'urgente', '21'),
(6, 2, 'Que pasa', 'Compañeros', '2020-02-28 14:07:01', 'leve', '11'),
(7, 2, 'Loma', 'iyeiqwuyeqwiuy', '2020-02-28 16:08:55', 'urgente', '27'),
(9, 2, 'vsdcdvfsc', 'wqewqeqeq', '2020-02-29 15:23:08', 'leve', '21');

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
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2020_02_29_202124_create_activity_log_table', 2),
(3, '2020_03_01_193208_create_inbox_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('adrianromerot88@gmail.com', '$2y$10$jI76XfT5.bYj7tlvHlWg6OBekSVcEjKMWcpnt2kKXK4JTBVxqd8um', '2020-02-29 12:42:51');

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
  `remember_token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `email`, `rol`, `departamento`, `updated_at`, `created_at`, `remember_token`) VALUES
(2, 'pepito', '$2y$10$xzk8E736vt3eKtdxrH1yGe0.aLaWmBVO.GtL6LCqSwk4vRmWNXvq.', 'pepe@gmail.com', 'Administrador', 'informatica', '2020-02-26 16:01:24', '2020-02-26 16:01:24', 'BCIlRdBcp0ASDAJBeGZeKhx4hVSkIZoDBB5FWWtXw8fhQicrFvrUDGX4UDoy'),
(6, 'adri', '$2y$10$7NMSkmILecKtEFk8x.EjrOvK7iTVcCe3W6dtzJve9SvKWKikwnOUK', 'adrianromerot88@gmail.com', 'Profesor', 'administracion', '2020-02-29 11:30:40', '2020-02-29 11:30:40', 'Nxik9RQjIv55vTDhERkEtRnHhyzbC77KLZmoky4BOlNElBeLogxBGH7JrpId'),
(7, 'carmelo', '$2y$10$SIONw1vJ2vfO2XcI8ZTJeOIRXoGhFlbDQaPmzldtlXSDysbAiXNjq', 'carmelo@gmail.com', 'Profesor', 'administracion', '2020-02-29 19:31:17', '2020-02-29 19:31:17', 'JcogOog5JDPn8sYTXJx5W9mEjB7piph4gM3Hz71uCVEm7h1W3BFCS0i1rY6A'),
(8, 'juanete', '$2y$10$tBi2RAMAmZ6kmxecd1Zpnu2x4agkYfbCIsV1ahXJ./h95/33WbAAm', 'juanito@gmail.com', 'Profesor', 'turismo', '2020-02-29 19:43:07', '2020-02-29 19:43:07', NULL);

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
