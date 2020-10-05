-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2020 a las 03:29:13
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
(1, 'Pichagua', '93456789', 'Daniel Dávila', 'Juan Pérez', '2020-10-05 01:28:37', '2020-10-05 01:28:37'),
(2, 'Santiago', '12345678', 'María Dugarte', 'Luis Shakespeare', '2020-10-05 01:28:37', '2020-10-05 01:28:37');

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
(1, '2020-10-04', '21:28:38', 'Falla Operacional 1', '2020-10-04', '21:28:38', 'Falla Operacional 1', 'Solución Falla Operacional 1', 1, 1, '2020-10-05 01:28:38', '2020-10-05 01:28:38'),
(2, '2020-10-04', '21:28:38', 'Falla Operacional 2', '2020-10-04', '21:28:38', 'Falla Operacional 2', 'Solución Falla Operacional 2', 1, 1, '2020-10-05 01:28:38', '2020-10-05 01:28:38'),
(3, '2020-10-04', '21:28:38', 'Falla Operacional 3', '2020-10-04', '21:28:38', 'Falla Operacional 3', 'Solución Falla Operacional 3', 0, 1, '2020-10-05 01:28:38', '2020-10-05 01:28:38'),
(4, '2020-10-04', '21:28:38', 'Falla Operacional 4', '2020-10-04', '21:28:38', 'Falla Operacional 4', 'Solución Falla Operacional 4', 0, 1, '2020-10-05 01:28:38', '2020-10-05 01:28:38');

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
(1, 'Diurno', '2020-10-04', '21:28:38', '21:28:38', 'Evento Marino 1', 0, 1, 1, '2020-10-05 01:28:38', '2020-10-05 01:28:38'),
(2, 'Nocturno', '2020-10-04', '21:28:38', '21:28:38', 'Evento Marino 2', 1, 1, 1, '2020-10-05 01:28:38', '2020-10-05 01:28:38'),
(3, 'Diurno', '2020-10-04', '21:28:38', '21:28:38', 'Evento Marino 3', 1, 2, 1, '2020-10-05 01:28:38', '2020-10-05 01:28:38'),
(4, 'Diurno', '2020-10-04', '21:28:38', '21:28:38', 'Evento Marino 4', 0, 2, 1, '2020-10-05 01:28:38', '2020-10-05 01:28:38');

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
(1, 'crear.usuarios', 'Permiso Para Crear Usuario', '2020-10-05 01:28:31', '2020-10-05 01:28:31'),
(2, 'eliminar.usuarios', 'Permiso Para Eliminar Usuario', '2020-10-05 01:28:31', '2020-10-05 01:28:31'),
(3, 'ver.usuarios', 'Permiso Para Ver Usuario', '2020-10-05 01:28:31', '2020-10-05 01:28:31'),
(4, 'modificar.usuarios', 'Permiso Para Modificar Usuario', '2020-10-05 01:28:31', '2020-10-05 01:28:31'),
(5, 'crear.perfiles', 'Permiso Para Crear Perfiles', '2020-10-05 01:28:31', '2020-10-05 01:28:31'),
(6, 'eliminar.perfiles', 'Permiso Para Eliminar Perfiles', '2020-10-05 01:28:31', '2020-10-05 01:28:31'),
(7, 'ver.perfiles', 'Permiso Para Ver perfiles', '2020-10-05 01:28:31', '2020-10-05 01:28:31'),
(8, 'modificar.perfiles', 'Permiso para Modificar perfiles', '2020-10-05 01:28:31', '2020-10-05 01:28:31'),
(9, 'crear.permisos', 'Para Crear perfiles', '2020-10-05 01:28:31', '2020-10-05 01:28:31'),
(10, 'eliminar.permisos', 'Para Eliminar Perfiles', '2020-10-05 01:28:31', '2020-10-05 01:28:31'),
(11, 'ver.permisos', 'Para Ver Perfiles', '2020-10-05 01:28:31', '2020-10-05 01:28:31'),
(12, 'modificar.permisos', 'Para Modificar Perfiles', '2020-10-05 01:28:31', '2020-10-05 01:28:31');

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
(1, 1, 1, '2020-10-05 01:28:35', '2020-10-05 01:28:35'),
(2, 2, 1, '2020-10-05 01:28:35', '2020-10-05 01:28:35'),
(3, 3, 1, '2020-10-05 01:28:35', '2020-10-05 01:28:35'),
(4, 4, 1, '2020-10-05 01:28:35', '2020-10-05 01:28:35'),
(5, 5, 1, '2020-10-05 01:28:35', '2020-10-05 01:28:35'),
(6, 6, 1, '2020-10-05 01:28:35', '2020-10-05 01:28:35'),
(7, 7, 1, '2020-10-05 01:28:35', '2020-10-05 01:28:35'),
(8, 8, 1, '2020-10-05 01:28:36', '2020-10-05 01:28:36'),
(9, 9, 1, '2020-10-05 01:28:36', '2020-10-05 01:28:36'),
(10, 10, 1, '2020-10-05 01:28:36', '2020-10-05 01:28:36'),
(11, 11, 1, '2020-10-05 01:28:36', '2020-10-05 01:28:36'),
(12, 12, 1, '2020-10-05 01:28:36', '2020-10-05 01:28:36');

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
(1, 1, 1, 1, '2020-10-05 01:28:36', '2020-10-05 01:28:36'),
(2, 2, 1, 1, '2020-10-05 01:28:36', '2020-10-05 01:28:36'),
(3, 3, 1, 1, '2020-10-05 01:28:36', '2020-10-05 01:28:36'),
(4, 4, 1, 1, '2020-10-05 01:28:36', '2020-10-05 01:28:36'),
(5, 5, 1, 1, '2020-10-05 01:28:36', '2020-10-05 01:28:36'),
(6, 6, 1, 1, '2020-10-05 01:28:36', '2020-10-05 01:28:36'),
(7, 7, 1, 1, '2020-10-05 01:28:36', '2020-10-05 01:28:36'),
(8, 8, 1, 1, '2020-10-05 01:28:36', '2020-10-05 01:28:36'),
(9, 9, 1, 1, '2020-10-05 01:28:36', '2020-10-05 01:28:36'),
(10, 10, 1, 1, '2020-10-05 01:28:36', '2020-10-05 01:28:36'),
(11, 11, 1, 1, '2020-10-05 01:28:36', '2020-10-05 01:28:36'),
(12, 12, 1, 1, '2020-10-05 01:28:37', '2020-10-05 01:28:37');

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
(1, 'Registro de Planta 1', '2020-10-04', '21:28:37', 'Evento de Planta 1', 'Acciones de Planta 1', 0, 1, 1, '2020-10-05 01:28:37', '2020-10-05 01:28:37'),
(2, 'Registro de Planta 2', '2020-10-04', '21:28:38', 'Evento de Planta 2', 'Acciones de Planta 2', 1, 2, 1, '2020-10-05 01:28:38', '2020-10-05 01:28:38'),
(3, 'Registro de Planta 3', '2020-10-04', '21:28:38', 'Evento de Planta 3', 'Acciones de Planta 3', 1, 1, 1, '2020-10-05 01:28:38', '2020-10-05 01:28:38'),
(4, 'Registro de Planta 4', '2020-10-04', '21:28:38', 'Evento de Planta 4', 'Acciones de Planta 4', 0, 1, 1, '2020-10-05 01:28:38', '2020-10-05 01:28:38');

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
(1, 'Chamiza', '2020-10-05 01:28:37', '2020-10-05 01:28:37'),
(2, 'Quintoa', '2020-10-05 01:28:37', '2020-10-05 01:28:37'),
(3, 'Mérida', '2020-10-05 01:28:37', '2020-10-05 01:28:37'),
(4, 'Táchira', '2020-10-05 01:28:37', '2020-10-05 01:28:37'),
(5, 'Venecia', '2020-10-05 01:28:37', '2020-10-05 01:28:37'),
(6, 'Colombia', '2020-10-05 01:28:37', '2020-10-05 01:28:37'),
(7, 'Brasil', '2020-10-05 01:28:37', '2020-10-05 01:28:37'),
(8, 'España', '2020-10-05 01:28:37', '2020-10-05 01:28:37');

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
(1, 'root', 'Usuario Super Administrador', 1, '2020-10-05 01:28:31', '2020-10-05 01:28:31'),
(2, 'admin', 'Usuario Administrador', 2, '2020-10-05 01:28:32', '2020-10-05 01:28:32');

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
(1, 1, 1, '2020-10-05 01:28:34', '2020-10-05 01:28:34'),
(2, 2, 2, '2020-10-05 01:28:34', '2020-10-05 01:28:34'),
(3, 1, 3, '2020-10-05 01:28:34', '2020-10-05 01:28:34'),
(4, 1, 4, '2020-10-05 01:28:34', '2020-10-05 01:28:34'),
(5, 2, 5, '2020-10-05 01:28:34', '2020-10-05 01:28:34'),
(6, 2, 6, '2020-10-05 01:28:34', '2020-10-05 01:28:34'),
(7, 2, 7, '2020-10-05 01:28:35', '2020-10-05 01:28:35'),
(8, 2, 8, '2020-10-05 01:28:35', '2020-10-05 01:28:35'),
(9, 2, 9, '2020-10-05 01:28:35', '2020-10-05 01:28:35'),
(10, 2, 10, '2020-10-05 01:28:35', '2020-10-05 01:28:35'),
(11, 2, 11, '2020-10-05 01:28:35', '2020-10-05 01:28:35');

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
(1, 'Salmones Austral', 'avatar04.png', 'Salmones Austral CTO', 'administrador@salmonesaustral.net', '$2y$10$b84e/fqfWyNmD4jSYB8ojOUIGZj8KqnDFJ9JluDCrHpU9glQ74svy', 1, '2020-10-04', '2021-04-04', 'C4XG3owVLy9TKjbI7odH64g3u85MRbAEz6qDNi1xQtvYIRN9Am7e0bAKuUH8rYDuzGoTZ7xOl82trBtzfwHRduIl12Q8KsvSqkjT', '2020-10-05 01:28:32', '2020-10-05 01:28:32'),
(2, 'María Morales', 'avatar04.png', 'Salmones Austral EDIT', 'editor@salmonesaustral.net', '$2y$10$aa235LxVdz2iEoacavymDugFq0X4FmFtI8H64H12ppNoR1WdkIitu', 1, '2020-10-04', '2021-04-04', '4Sc4LNhd8RGSW330GuOwGC3NptaKqXYLWXfgE0GBcqz0x70D6VyHPUn4IF9GLex4PTFF2mBZG4WhmXlpnbKS48CpcqymcN7b7jrR', '2020-10-05 01:28:32', '2020-10-05 01:28:32'),
(3, 'Luis Espinoza', 'avatar04.png', 'Root 1', 'espinozalj@salmonesaustral.net', '$2y$10$/O70tm2/AbvjqXHqJ/qEXOEbwRov2NOIBkjvI0P3/d0j1O5XrVj5W', 1, '2020-10-04', '2021-04-04', 'ybwueTnnKqg5SXGfnVeLaUixXTSD6c2bcwcqdDyrN0dUkOxwlg6rAM8x1ABCexh5xj3tX2MWnKz5dNani34Q4K9ZvINsaCG26bDH', '2020-10-05 01:28:33', '2020-10-05 01:28:33'),
(4, 'Leidy Espinoza', 'avatar04.png', 'Root 2', 'espinozalb@salmonesaustral.net', '$2y$10$Ylv1r/JDRan.uNFuTSCo/OAKA19NfyO6D6QcL1dvND9PXkuEGjBeu', 1, '2020-10-04', '2021-04-04', 'hG7GZ3bs96tL9PuHsVmL1tEBJtih67qzkUfy3G21Xoza0yndEnQMAHAe0egsMtgokpo03z7B7jmtCFuYEHS1rPXCL5NZq6dpVBhz', '2020-10-05 01:28:33', '2020-10-05 01:28:33'),
(5, 'Itala Espinoza', 'avatar04.png', 'Admin 1', 'espinozai@salmonesaustral.net', '$2y$10$JO5UvqLUlFQsHkjEF3SpLuDg0qHymBkKLh6mY9T8wxmHvJhS2Enua', 1, '2020-10-04', '2021-04-04', 'wh28FzEsSUef0h8bSiWND3jOL0dEJqeskEv1Nt7YSQsaQjkgIbNCw623NncAQGkYlfCZIR6KO0Jzsl9HGUsm6qSkE6qhCpdudb3w', '2020-10-05 01:28:33', '2020-10-05 01:28:33'),
(6, 'Jose Espinoza', 'avatar04.png', 'Admin 2', 'espinozaj@salmonesaustral.net', '$2y$10$Kl/NU1Tozlo5El/ihGsJxOb6phybpdkiz9ay.gyLkv6PZNzRBiXq6', 1, '2020-10-04', '2021-04-04', 'L28gw04fjKEtBUvAHXRCeO55vpsieOhLe7SnAABa1odTYRX8cm5jhR7ZKeBW2EW70sG2x6b60weetEXY8temZk6ExG0NOIKGnq93', '2020-10-05 01:28:33', '2020-10-05 01:28:33'),
(7, 'Leidy Alvarado', 'avatar04.png', 'Admin 3', 'alvaradol@salmonesaustral.net', '$2y$10$sXfLD4co2WaXu8v9Z4kqhOmhKnmLyPX9jWVNnHm6V3KImAbRi/Pi6', 1, '2020-10-04', '2021-04-04', 'hPME9c185yn16teLwH1Zu27ooAud8I7KgRbWE5715DVdP8OwbHUkSvBMPwqXewKd9QxVyZs6DvTY1cPR6Wt8KW9e8123Tj4N6GBF', '2020-10-05 01:28:33', '2020-10-05 01:28:33'),
(8, 'Luis Alvarado', 'avatar04.png', 'Admin 4', 'alvaradolj@salmonesaustral.net', '$2y$10$Rb8paTwlt2NLOSB2tFd6PO28CHedVU8ZKBb3WMnQg45d8DMqJQbpu', 1, '2020-10-04', '2021-04-04', 'NyVm03PwnaQkF5boVqq5erNmll73sJ6F84i6Z1rhfoCpJXQIsAjFzGQgwJgSjslZUTWfbLdV1ZfIIV9psjivVpCivbxQjAwAJuSG', '2020-10-05 01:28:33', '2020-10-05 01:28:33'),
(9, 'Itala Alvarado', 'avatar04.png', 'Admin 5', 'alvaradoi@salmonesaustral.net', '$2y$10$fXwVqwmFUtqf/4tAp3v8eeNH0rNECCvRbpzq7Q9re9Lr/CuXEMlmi', 1, '2020-10-04', '2021-04-04', 'yW4o737lhB3kca67X72R8WFNqSjq6sI8eHs0KeErvygDTLeutSTQKGYsUFvNWO38P1nJtqG4kZd0lUr1XHoPj6klFhH0Xn0Hx6uD', '2020-10-05 01:28:34', '2020-10-05 01:28:34'),
(10, 'Luis Pulido', 'avatar04.png', 'Admin 6', 'pulidol@salmonesaustral.net', '$2y$10$x.PTnoHH8FWF0flV.qT4Mu9ckY7EDbFEMm4MYVE7P3zxLWZKupfG6', 1, '2020-10-04', '2021-04-04', 'PgnDeYrgsGfzs5UoyXyVZjvvSXm74FNAiF8d58Asuk5M0EyyV4PQs5wVteMRKQ3WCSas9bwmMLILqhQJNvbkUzTCzArfxZNJ48gB', '2020-10-05 01:28:34', '2020-10-05 01:28:34'),
(11, 'Jose Pulido', 'avatar04.png', 'Admin 7', 'pulidoj@salmonesaustral.net', '$2y$10$xCSmlcDmP0qiAAvD1/Zq9uS7jd1tBHbczJbgieRTZOOFtB9ACqDfe', 1, '2020-10-04', '2021-04-04', 'L7unsVdpqeGhkIBdJpxTO6fx6hiiJMikUJ9eZrLazFM8PSRvxhhEVu6jPlb17VF4neWsgDBuQVKv5ZZGYuHisj6qoRDSEPNIgEwT', '2020-10-05 01:28:34', '2020-10-05 01:28:34');

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
  MODIFY `idplant` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
