-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2020 a las 20:31:11
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `salmonesaustral`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centers`
--

CREATE TABLE `centers` (
  `idcenter` int(10) UNSIGNED NOT NULL,
  `namecenter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emergencyphone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `boss` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `assistant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `centers`
--

INSERT INTO `centers` (`idcenter`, `namecenter`, `emergencyphone`, `boss`, `assistant`, `created_at`, `updated_at`) VALUES
(1, 'Pichagua', '93456789', 'Daniel Dávila', 'Juan Pérez', '2020-09-29 17:57:08', '2020-09-29 17:57:08'),
(2, 'Santiago', '12345678', 'María Dugarte', 'Luis Shakespeare', '2020-09-29 17:57:08', '2020-09-29 17:57:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faultrecords`
--

CREATE TABLE `faultrecords` (
  `idfault` int(10) UNSIGNED NOT NULL,
  `faultdate` date NOT NULL,
  `faulthour` time NOT NULL,
  `fault` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enddate` date NOT NULL,
  `endhour` time NOT NULL,
  `titlerecord` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `solution` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `faultactive` int(11) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `faultrecords`
--

INSERT INTO `faultrecords` (`idfault`, `faultdate`, `faulthour`, `fault`, `enddate`, `endhour`, `titlerecord`, `solution`, `faultactive`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2020-09-29', '13:57:10', 'Falla Operacional 1', '2020-09-29', '13:57:10', 'Falla Operacional 1', 'Solución Falla Operacional 1', 1, 1, '2020-09-29 17:57:10', '2020-09-29 17:57:10'),
(2, '2020-09-29', '13:57:11', 'Falla Operacional 2', '2020-09-29', '13:57:11', 'Falla Operacional 2', 'Solución Falla Operacional 2', 1, 1, '2020-09-29 17:57:11', '2020-09-29 17:57:11'),
(3, '2020-09-29', '13:57:11', 'Falla Operacional 3', '2020-09-29', '13:57:11', 'Falla Operacional 3', 'Solución Falla Operacional 3', 0, 1, '2020-09-29 17:57:11', '2020-09-29 17:57:11'),
(4, '2020-09-29', '13:57:11', 'Falla Operacional 4', '2020-09-29', '13:57:11', 'Falla Operacional 4', 'Solución Falla Operacional 4', 0, 1, '2020-09-29 17:57:11', '2020-09-29 17:57:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maritimerecords`
--

CREATE TABLE `maritimerecords` (
  `idmarinerecord` int(10) UNSIGNED NOT NULL,
  `turn` enum('Diurno','Nocturno') COLLATE utf8_unicode_ci NOT NULL,
  `datemarine` date NOT NULL,
  `landfallhour` time NOT NULL,
  `sailhour` time NOT NULL,
  `marineevent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `marineactive` int(11) NOT NULL DEFAULT '1',
  `center_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `maritimerecords`
--

INSERT INTO `maritimerecords` (`idmarinerecord`, `turn`, `datemarine`, `landfallhour`, `sailhour`, `marineevent`, `marineactive`, `center_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Diurno', '2020-09-29', '13:57:10', '13:57:10', 'Evento Marino 1', 0, 1, 1, '2020-09-29 17:57:10', '2020-09-29 17:57:10'),
(2, 'Nocturno', '2020-09-29', '13:57:10', '13:57:10', 'Evento Marino 2', 1, 1, 1, '2020-09-29 17:57:10', '2020-09-29 17:57:10'),
(3, 'Diurno', '2020-09-29', '13:57:10', '13:57:10', 'Evento Marino 3', 1, 2, 1, '2020-09-29 17:57:10', '2020-09-29 17:57:10'),
(4, 'Diurno', '2020-09-29', '13:57:10', '13:57:10', 'Evento Marino 4', 0, 2, 1, '2020-09-29 17:57:10', '2020-09-29 17:57:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_01_15_105324_create_roles_table', 1),
('2015_01_15_114412_create_role_user_table', 1),
('2015_01_26_115212_create_permissions_table', 1),
('2015_01_26_115523_create_permission_role_table', 1),
('2015_02_09_132439_create_permission_user_table', 1),
('2020_09_27_221044_create_centers_table', 1),
('2020_09_27_221130_create_plants_table', 1),
('2020_09_27_221154_create_maritimerecords_table', 1),
('2020_09_27_221215_create_plantrecords_table', 1),
('2020_09_27_221233_create_faultrecords_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'crear.usuarios', 'Permiso Para Crear Usuario', '2020-09-29 17:57:01', '2020-09-29 17:57:01'),
(2, 'eliminar.usuarios', 'Permiso Para Eliminar Usuario', '2020-09-29 17:57:02', '2020-09-29 17:57:02'),
(3, 'ver.usuarios', 'Permiso Para Ver Usuario', '2020-09-29 17:57:02', '2020-09-29 17:57:02'),
(4, 'modificar.usuarios', 'Permiso Para Modificar Usuario', '2020-09-29 17:57:02', '2020-09-29 17:57:02'),
(5, 'crear.perfiles', 'Permiso Para Crear Perfiles', '2020-09-29 17:57:02', '2020-09-29 17:57:02'),
(6, 'eliminar.perfiles', 'Permiso Para Eliminar Perfiles', '2020-09-29 17:57:02', '2020-09-29 17:57:02'),
(7, 'ver.perfiles', 'Permiso Para Ver perfiles', '2020-09-29 17:57:02', '2020-09-29 17:57:02'),
(8, 'modificar.perfiles', 'Permiso para Modificar perfiles', '2020-09-29 17:57:02', '2020-09-29 17:57:02'),
(9, 'crear.permisos', 'Para Crear perfiles', '2020-09-29 17:57:02', '2020-09-29 17:57:02'),
(10, 'eliminar.permisos', 'Para Eliminar Perfiles', '2020-09-29 17:57:02', '2020-09-29 17:57:02'),
(11, 'ver.permisos', 'Para Ver Perfiles', '2020-09-29 17:57:02', '2020-09-29 17:57:02'),
(12, 'modificar.permisos', 'Para Modificar Perfiles', '2020-09-29 17:57:02', '2020-09-29 17:57:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-09-29 17:57:05', '2020-09-29 17:57:05'),
(2, 2, 1, '2020-09-29 17:57:05', '2020-09-29 17:57:05'),
(3, 3, 1, '2020-09-29 17:57:05', '2020-09-29 17:57:05'),
(4, 4, 1, '2020-09-29 17:57:06', '2020-09-29 17:57:06'),
(5, 5, 1, '2020-09-29 17:57:06', '2020-09-29 17:57:06'),
(6, 6, 1, '2020-09-29 17:57:06', '2020-09-29 17:57:06'),
(7, 7, 1, '2020-09-29 17:57:06', '2020-09-29 17:57:06'),
(8, 8, 1, '2020-09-29 17:57:06', '2020-09-29 17:57:06'),
(9, 9, 1, '2020-09-29 17:57:06', '2020-09-29 17:57:06'),
(10, 10, 1, '2020-09-29 17:57:06', '2020-09-29 17:57:06'),
(11, 11, 1, '2020-09-29 17:57:06', '2020-09-29 17:57:06'),
(12, 12, 1, '2020-09-29 17:57:06', '2020-09-29 17:57:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `permission_user`
--

INSERT INTO `permission_user` (`id`, `permission_id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2020-09-29 17:57:06', '2020-09-29 17:57:06'),
(2, 2, 1, 1, '2020-09-29 17:57:06', '2020-09-29 17:57:06'),
(3, 3, 1, 1, '2020-09-29 17:57:06', '2020-09-29 17:57:06'),
(4, 4, 1, 1, '2020-09-29 17:57:07', '2020-09-29 17:57:07'),
(5, 5, 1, 1, '2020-09-29 17:57:07', '2020-09-29 17:57:07'),
(6, 6, 1, 1, '2020-09-29 17:57:07', '2020-09-29 17:57:07'),
(7, 7, 1, 1, '2020-09-29 17:57:07', '2020-09-29 17:57:07'),
(8, 8, 1, 1, '2020-09-29 17:57:07', '2020-09-29 17:57:07'),
(9, 9, 1, 1, '2020-09-29 17:57:07', '2020-09-29 17:57:07'),
(10, 10, 1, 1, '2020-09-29 17:57:07', '2020-09-29 17:57:07'),
(11, 11, 1, 1, '2020-09-29 17:57:07', '2020-09-29 17:57:07'),
(12, 12, 1, 1, '2020-09-29 17:57:07', '2020-09-29 17:57:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantrecords`
--

CREATE TABLE `plantrecords` (
  `idplantrecord` int(10) UNSIGNED NOT NULL,
  `titlerecord` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateplant` date NOT NULL,
  `planthour` time NOT NULL,
  `plantevente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `actionsevent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `plantactive` int(11) NOT NULL DEFAULT '1',
  `plant_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `plantrecords`
--

INSERT INTO `plantrecords` (`idplantrecord`, `titlerecord`, `dateplant`, `planthour`, `plantevente`, `actionsevent`, `plantactive`, `plant_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Registro de Planta 1', '2020-09-29', '13:57:08', 'Evento de Planta 1', 'Acciones de Planta 1', 0, 1, 1, '2020-09-29 17:57:08', '2020-09-29 17:57:08'),
(2, 'Registro de Planta 2', '2020-09-29', '13:57:09', 'Evento de Planta 2', 'Acciones de Planta 2', 1, 2, 1, '2020-09-29 17:57:09', '2020-09-29 17:57:09'),
(3, 'Registro de Planta 3', '2020-09-29', '13:57:09', 'Evento de Planta 3', 'Acciones de Planta 3', 1, 1, 1, '2020-09-29 17:57:09', '2020-09-29 17:57:09'),
(4, 'Registro de Planta 4', '2020-09-29', '13:57:09', 'Evento de Planta 4', 'Acciones de Planta 4', 0, 1, 1, '2020-09-29 17:57:09', '2020-09-29 17:57:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plants`
--

CREATE TABLE `plants` (
  `idplant` int(10) UNSIGNED NOT NULL,
  `nameplant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `plants`
--

INSERT INTO `plants` (`idplant`, `nameplant`, `created_at`, `updated_at`) VALUES
(1, 'Chamiza', '2020-09-29 17:57:07', '2020-09-29 17:57:07'),
(2, 'Quintoa', '2020-09-29 17:57:07', '2020-09-29 17:57:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `slug`, `description`, `level`, `created_at`, `updated_at`) VALUES
(1, 'root', 'Usuario Super Administrador', 1, '2020-09-29 17:57:02', '2020-09-29 17:57:02'),
(2, 'admin', 'Usuario Administrador', 2, '2020-09-29 17:57:02', '2020-09-29 17:57:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-09-29 17:57:04', '2020-09-29 17:57:04'),
(2, 2, 2, '2020-09-29 17:57:05', '2020-09-29 17:57:05'),
(3, 1, 3, '2020-09-29 17:57:05', '2020-09-29 17:57:05'),
(4, 1, 4, '2020-09-29 17:57:05', '2020-09-29 17:57:05'),
(5, 2, 5, '2020-09-29 17:57:05', '2020-09-29 17:57:05'),
(6, 2, 6, '2020-09-29 17:57:05', '2020-09-29 17:57:05'),
(7, 2, 7, '2020-09-29 17:57:05', '2020-09-29 17:57:05'),
(8, 2, 8, '2020-09-29 17:57:05', '2020-09-29 17:57:05'),
(9, 2, 9, '2020-09-29 17:57:05', '2020-09-29 17:57:05'),
(10, 2, 10, '2020-09-29 17:57:05', '2020-09-29 17:57:05'),
(11, 2, 11, '2020-09-29 17:57:05', '2020-09-29 17:57:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `fechainicio` date DEFAULT NULL,
  `fechafin` date DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `foto`, `login`, `email`, `password`, `activo`, `fechainicio`, `fechafin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Salmones Austral', 'avatar04.png', 'Salmones Austral CTO', 'administrador@salmonesaustral.net', '$2y$10$JdNQDmwvKajtdXjJzcq.n.FTIvLJaTOwSnMqrohiyoXXNmQUpYf7u', 1, '2020-09-29', '2021-03-29', 'kLYxHzVva6MnmtMfto8l6z5RnWAHKddiR0mU6WTPx3e6yzW3C9CS9inQHYvuDu3A63RG3jh7jnu89gzw8hMvdrxxO0IQOsBSkNba', '2020-09-29 17:57:02', '2020-09-29 17:57:02'),
(2, 'María Morales', 'avatar04.png', 'Salmones Austral EDIT', 'editor@salmonesaustral.net', '$2y$10$ih7TBgaxdMIAVVtnZoiFoeX3Cu/fXV7xAWeJYOSQXhcdkhAmiHtea', 1, '2020-09-29', '2021-03-29', 'eIavTqEQLfBIRqVbnlNGlnS5MQ5NQ8dNPGdxqHbguVw3p1phz7fer3YiGisjhfnGIvSApJ0UBpUn1z6NNsq6QM4ZuNW1aAJAPuy0', '2020-09-29 17:57:03', '2020-09-29 17:57:03'),
(3, 'Luis Espinoza', 'avatar04.png', 'Root 1', 'espinozalj@salmonesaustral.net', '$2y$10$N.O2wvLVHuN4musugjfuIuuUTIn7RkBUsIvtS9lAf7MG/KMlKliQq', 1, '2020-09-29', '2021-03-29', '1FXrEAnFUS4xZ3ag4tIGPg2uhXcbEgUrMs9b3VEDsU1XxfufxUfM5mZByuE07Rs2zE4UzUnsSEB9WBz4T7cIxcyZUm4r5riczArD', '2020-09-29 17:57:03', '2020-09-29 17:57:03'),
(4, 'Leidy Espinoza', 'avatar04.png', 'Root 2', 'espinozalb@salmonesaustral.net', '$2y$10$I5../aXHNh/wnhzgnJAnreYrSA8hEwGEaR0V8PN0771y0JKfan7be', 1, '2020-09-29', '2021-03-29', '0oSwuReUlAlKfDuwyz9E6Gfk4wGYa7xGq0HDDAuOv2Go18uAPPRmUeEvTPzdGX7lQWEtWqU0gyplI86AggFgJLKxP3TyPOdbv0cG', '2020-09-29 17:57:03', '2020-09-29 17:57:03'),
(5, 'Itala Espinoza', 'avatar04.png', 'Admin 1', 'espinozai@salmonesaustral.net', '$2y$10$qkxTL6PGcfI//H99wqCEpuLTcBGngygR0x42mxD6SQFwHKm8aFBx2', 1, '2020-09-29', '2021-03-29', 'kyBGpWmE4gRRTR5TP7N0FeW7N8kCWxKpjLEnxJfQvUUcwsIkDeWninFzVJQbBqfJezY3jCyycGUMKIcL53gEPm390D6xnp4cvVuK', '2020-09-29 17:57:03', '2020-09-29 17:57:03'),
(6, 'Jose Espinoza', 'avatar04.png', 'Admin 2', 'espinozaj@salmonesaustral.net', '$2y$10$07vwiCjkT7G8wwZQTifhsO7tRo5cKcWYfspy/tsvKvb3GOI2juJ9W', 1, '2020-09-29', '2021-03-29', 'RmVU8zZGOc4al2wNaZqJyE7iHuLpEyx4pkonJ3RZII0ESgIUK5XCSIKDeT13rL9j2RPYtobrOQCOePx6ckfkk4jmbLHr0bgDbCe3', '2020-09-29 17:57:03', '2020-09-29 17:57:03'),
(7, 'Leidy Alvarado', 'avatar04.png', 'Admin 3', 'alvaradol@salmonesaustral.net', '$2y$10$XIupg8202zaxYb9bUvP24uO2CrbyMIGMS1hEbgTKMlTmo13dTXK5y', 1, '2020-09-29', '2021-03-29', 'Etue3pmklzVw5l3R0hgP95h6sHYcIpiDpCnwwtsxA70PAsMFEGhyRV8QOj0qdonMHBoSzCzN1FE0q3TrrgX5QZdEGOj38DtofWin', '2020-09-29 17:57:04', '2020-09-29 17:57:04'),
(8, 'Luis Alvarado', 'avatar04.png', 'Admin 4', 'alvaradolj@salmonesaustral.net', '$2y$10$w0aVXMyomyVV637SRjCGDOuHCC5mVnMAvOH1AkNPwzuOgRgjxASb6', 1, '2020-09-29', '2021-03-29', 'DwGO1x8JCozLUHW9Q7pIJrEGzNEZLzo8iqzaX6FLzM4lWmUtjk6OT8YD3hmmPZiZQ6HA8Rg6omsluulpoOOgpqfuzxTOQcaYvSN8', '2020-09-29 17:57:04', '2020-09-29 17:57:04'),
(9, 'Itala Alvarado', 'avatar04.png', 'Admin 5', 'alvaradoi@salmonesaustral.net', '$2y$10$z11grzTr06Yid2LNQ34v.unnFQvziGJgFMy5vCzbTFb6nJ.BFhnRq', 1, '2020-09-29', '2021-03-29', 'ckWATam6Fu0pbkqOvgOy2fwMfO2Cy7OtSWv0MMTucpr3Qn061Crbh21NhqO928HCU3pBAYR74MjDHl31OsXNiK9UsEIXm419DbE3', '2020-09-29 17:57:04', '2020-09-29 17:57:04'),
(10, 'Luis Pulido', 'avatar04.png', 'Admin 6', 'pulidol@salmonesaustral.net', '$2y$10$OcDGqxOACLqxxAcoaVSwbO7iiVoM9Oax1KFzUwDErts2NuCOWxZyW', 1, '2020-09-29', '2021-03-29', 'VZn1NNBWWdVDRasDYDvjl0UonNluOBAMxXXRBqlxGHbmEJWN04ZWdU8qJe37VeFR21l2ttFfR1XYGlEcglh89ClhDxNpe0DbXDZl', '2020-09-29 17:57:04', '2020-09-29 17:57:04'),
(11, 'Jose Pulido', 'avatar04.png', 'Admin 7', 'pulidoj@salmonesaustral.net', '$2y$10$KogSu7n5TgYfuO3HLvd48eTxbgjiUyz2mhNBcwnTRTRC8SULZ8zem', 1, '2020-09-29', '2021-03-29', 'osSzqFbGTPrmuVsFdDefCDdaokhSdhPL2qqY2xkmpCV7aEFRRYQM0ePP884nuVo7zHJCOte22NNSp6aMG4g3748I9N9F0JyPZmzU', '2020-09-29 17:57:04', '2020-09-29 17:57:04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`idcenter`);

--
-- Indices de la tabla `faultrecords`
--
ALTER TABLE `faultrecords`
  ADD PRIMARY KEY (`idfault`),
  ADD KEY `faultrecords_user_id_index` (`user_id`);

--
-- Indices de la tabla `maritimerecords`
--
ALTER TABLE `maritimerecords`
  ADD PRIMARY KEY (`idmarinerecord`),
  ADD KEY `maritimerecords_center_id_index` (`center_id`),
  ADD KEY `maritimerecords_user_id_index` (`user_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indices de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_role_id_index` (`role_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `plantrecords`
--
ALTER TABLE `plantrecords`
  ADD PRIMARY KEY (`idplantrecord`),
  ADD KEY `plantrecords_plant_id_index` (`plant_id`),
  ADD KEY `plantrecords_user_id_index` (`user_id`);

--
-- Indices de la tabla `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`idplant`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_login_unique` (`login`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `centers`
--
ALTER TABLE `centers`
  MODIFY `idcenter` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `faultrecords`
--
ALTER TABLE `faultrecords`
  MODIFY `idfault` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `maritimerecords`
--
ALTER TABLE `maritimerecords`
  MODIFY `idmarinerecord` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `plantrecords`
--
ALTER TABLE `plantrecords`
  MODIFY `idplantrecord` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `plants`
--
ALTER TABLE `plants`
  MODIFY `idplant` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `faultrecords`
--
ALTER TABLE `faultrecords`
  ADD CONSTRAINT `faultrecords_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `maritimerecords`
--
ALTER TABLE `maritimerecords`
  ADD CONSTRAINT `maritimerecords_center_id_foreign` FOREIGN KEY (`center_id`) REFERENCES `centers` (`idcenter`) ON DELETE CASCADE,
  ADD CONSTRAINT `maritimerecords_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `plantrecords`
--
ALTER TABLE `plantrecords`
  ADD CONSTRAINT `plantrecords_plant_id_foreign` FOREIGN KEY (`plant_id`) REFERENCES `plants` (`idplant`) ON DELETE CASCADE,
  ADD CONSTRAINT `plantrecords_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
