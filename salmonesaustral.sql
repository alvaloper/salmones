-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2020 a las 23:50:26
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
(1, 'Angosta', '976697113', '--', '--', '2020-10-27 22:48:00', '2020-10-27 22:48:00'),
(2, 'Errazuriz', '976697113', 'Gastón Díaz', 'David Niñes', '2020-10-27 22:48:00', '2020-10-27 22:48:00'),
(3, 'Pichagua', '942057959', 'Ricardo Tielle', '--', '2020-10-27 22:48:00', '2020-10-27 22:48:00');

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
  `solution` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `faultrecords`
--

INSERT INTO `faultrecords` (`idfault`, `faultdate`, `faulthour`, `fault`, `enddate`, `endhour`, `solution`, `file1`, `file2`, `file3`, `file4`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2020-10-27', '18:48:01', 'Centro de Cultivo Errazuriz no emite señal de vídeo', '2020-10-27', '18:48:01', 'No se detalla', 'nonpicture.jpg', 'nonpicture.jpg', 'nonpicture.jpg', 'nonpicture.jpg', 1, '2020-10-27 22:48:01', '2020-10-27 22:48:01'),
(2, '2020-10-27', '18:48:01', 'Centro de Cultivo Errazuriz no emite señal de vídeo', '2020-10-27', '18:48:01', 'No se detalla', 'nonpicture.jpg', 'nonpicture.jpg', 'nonpicture.jpg', 'nonpicture.jpg', 2, '2020-10-27 22:48:01', '2020-10-27 22:48:01'),
(3, '2020-10-27', '18:48:01', 'Caída de señal del DVR Exterior', '2020-10-27', '18:48:01', 'No se detalla', 'nonpicture.jpg', 'nonpicture.jpg', 'nonpicture.jpg', 'nonpicture.jpg', 3, '2020-10-27 22:48:01', '2020-10-27 22:48:01'),
(4, '2020-10-27', '18:48:02', 'Señal intermitente Planta Quellón', '2020-10-27', '18:48:02', 'No se detalla', 'nonpicture.jpg', 'nonpicture.jpg', 'nonpicture.jpg', 'nonpicture.jpg', 1, '2020-10-27 22:48:02', '2020-10-27 22:48:02'),
(5, '2020-10-27', '18:48:02', 'Se pierde visualización de las cámaras exterior planta', '2020-10-27', '18:48:02', 'No se detalla', 'nonpicture.jpg', 'nonpicture.jpg', 'nonpicture.jpg', 'nonpicture.jpg', 2, '2020-10-27 22:48:02', '2020-10-27 22:48:02'),
(6, '2020-10-27', '18:48:02', 'Se pierde visualización del DVR de Bodega de Operaciones', '2020-10-27', '18:48:02', 'No se detalla', 'nonpicture.jpg', 'nonpicture.jpg', 'nonpicture.jpg', 'nonpicture.jpg', 3, '2020-10-27 22:48:02', '2020-10-27 22:48:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maritimerecords`
--

CREATE TABLE `maritimerecords` (
  `idmarinerecord` int(10) UNSIGNED NOT NULL,
  `turn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datemarine` date NOT NULL,
  `landfallhour` time NOT NULL,
  `marineevent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `center_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `maritimerecords`
--

INSERT INTO `maritimerecords` (`idmarinerecord`, `turn`, `datemarine`, `landfallhour`, `marineevent`, `center_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Diurno', '2020-10-27', '18:48:01', 'Panga Queullin I, inicia salida  con personal  desde el Pontón', 3, 2, '2020-10-27 22:48:01', '2020-10-27 22:48:01'),
(2, 'Diurno', '2020-10-27', '18:48:01', 'Panga Queullin I, ingreso de personal al módulo', 3, 2, '2020-10-27 22:48:01', '2020-10-27 22:48:01'),
(3, 'Diurno', '2020-10-27', '18:48:01', 'Panga Queullin I, se ubica en la plataforma para proceder al retiro de materiales dirigiéndose al módulo', 3, 2, '2020-10-27 22:48:01', '2020-10-27 22:48:01'),
(4, 'Diurno', '2020-10-27', '18:48:01', 'Se visualiza cuatro personas realizando recorrido por el módulo', 3, 2, '2020-10-27 22:48:01', '2020-10-27 22:48:01'),
(5, 'Diurno', '2020-10-27', '18:48:01', 'Panga Queullin I, ingreso de una persona al Pontón', 3, 2, '2020-10-27 22:48:01', '2020-10-27 22:48:01'),
(6, 'Nocturno', '2020-10-27', '18:48:01', 'Panga Queullin I se dirige a Pontón con personal de seguridad.', 3, 3, '2020-10-27 22:48:01', '2020-10-27 22:48:01'),
(7, 'Nocturno', '2020-10-27', '18:48:01', 'Se detecta Foco Perko en movimiento y fotoperiodo encendido.', 3, 3, '2020-10-27 22:48:01', '2020-10-27 22:48:01'),
(8, 'Diurno', '2020-10-27', '18:48:01', 'Embarcacion Viento Sur (lancha Blanca) se ubica con  ingreso de materiales "soporte pajarero"', 2, 2, '2020-10-27 22:48:01', '2020-10-27 22:48:01'),
(9, 'Diurno', '2020-10-27', '18:48:01', 'Lancha Cagua con traslado de personal a la base el rosario', 2, 2, '2020-10-27 22:48:01', '2020-10-27 22:48:01'),
(10, 'Diurno', '2020-10-27', '18:48:01', 'Se visualiza el bote Trauco en Ensilaje', 2, 2, '2020-10-27 22:48:01', '2020-10-27 22:48:01'),
(11, 'Diurno', '2020-10-27', '18:48:01', 'Embarcacion Viento Sur', 2, 2, '2020-10-27 22:48:01', '2020-10-27 22:48:01'),
(12, 'Diurno', '2020-10-27', '18:48:01', 'Panga Queullin I, ingreso de una persona al Pontón', 2, 2, '2020-10-27 22:48:01', '2020-10-27 22:48:01'),
(13, 'Nocturno', '2020-10-27', '18:48:01', 'Puerto cerrado, Inicio de jornada con muy mal clima, limitando la operatividad de la misma.', 2, 3, '2020-10-27 22:48:01', '2020-10-27 22:48:01');

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
(1, 'crear.usuarios', 'Permiso Para Crear Usuario', '2020-10-27 22:47:54', '2020-10-27 22:47:54'),
(2, 'eliminar.usuarios', 'Permiso Para Eliminar Usuario', '2020-10-27 22:47:55', '2020-10-27 22:47:55'),
(3, 'ver.usuarios', 'Permiso Para Ver Usuario', '2020-10-27 22:47:55', '2020-10-27 22:47:55'),
(4, 'modificar.usuarios', 'Permiso Para Modificar Usuario', '2020-10-27 22:47:55', '2020-10-27 22:47:55'),
(5, 'crear.perfiles', 'Permiso Para Crear Perfiles', '2020-10-27 22:47:55', '2020-10-27 22:47:55'),
(6, 'eliminar.perfiles', 'Permiso Para Eliminar Perfiles', '2020-10-27 22:47:55', '2020-10-27 22:47:55'),
(7, 'ver.perfiles', 'Permiso Para Ver perfiles', '2020-10-27 22:47:55', '2020-10-27 22:47:55'),
(8, 'modificar.perfiles', 'Permiso para Modificar perfiles', '2020-10-27 22:47:55', '2020-10-27 22:47:55'),
(9, 'crear.permisos', 'Para Crear perfiles', '2020-10-27 22:47:55', '2020-10-27 22:47:55'),
(10, 'eliminar.permisos', 'Para Eliminar Perfiles', '2020-10-27 22:47:55', '2020-10-27 22:47:55'),
(11, 'ver.permisos', 'Para Ver Perfiles', '2020-10-27 22:47:55', '2020-10-27 22:47:55'),
(12, 'modificar.permisos', 'Para Modificar Perfiles', '2020-10-27 22:47:55', '2020-10-27 22:47:55');

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
(1, 1, 1, '2020-10-27 22:47:57', '2020-10-27 22:47:57'),
(2, 2, 1, '2020-10-27 22:47:57', '2020-10-27 22:47:57'),
(3, 3, 1, '2020-10-27 22:47:57', '2020-10-27 22:47:57'),
(4, 4, 1, '2020-10-27 22:47:57', '2020-10-27 22:47:57'),
(5, 5, 1, '2020-10-27 22:47:57', '2020-10-27 22:47:57'),
(6, 6, 1, '2020-10-27 22:47:57', '2020-10-27 22:47:57'),
(7, 7, 1, '2020-10-27 22:47:58', '2020-10-27 22:47:58'),
(8, 8, 1, '2020-10-27 22:47:58', '2020-10-27 22:47:58'),
(9, 9, 1, '2020-10-27 22:47:58', '2020-10-27 22:47:58'),
(10, 10, 1, '2020-10-27 22:47:58', '2020-10-27 22:47:58'),
(11, 11, 1, '2020-10-27 22:47:58', '2020-10-27 22:47:58'),
(12, 12, 1, '2020-10-27 22:47:58', '2020-10-27 22:47:58');

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
(1, 1, 1, 1, '2020-10-27 22:47:58', '2020-10-27 22:47:58'),
(2, 2, 1, 1, '2020-10-27 22:47:58', '2020-10-27 22:47:58'),
(3, 3, 1, 1, '2020-10-27 22:47:58', '2020-10-27 22:47:58'),
(4, 4, 1, 1, '2020-10-27 22:47:58', '2020-10-27 22:47:58'),
(5, 5, 1, 1, '2020-10-27 22:47:59', '2020-10-27 22:47:59'),
(6, 6, 1, 1, '2020-10-27 22:47:59', '2020-10-27 22:47:59'),
(7, 7, 1, 1, '2020-10-27 22:47:59', '2020-10-27 22:47:59'),
(8, 8, 1, 1, '2020-10-27 22:47:59', '2020-10-27 22:47:59'),
(9, 9, 1, 1, '2020-10-27 22:47:59', '2020-10-27 22:47:59'),
(10, 10, 1, 1, '2020-10-27 22:47:59', '2020-10-27 22:47:59'),
(11, 11, 1, 1, '2020-10-27 22:47:59', '2020-10-27 22:47:59'),
(12, 12, 1, 1, '2020-10-27 22:47:59', '2020-10-27 22:47:59');

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
  `plant_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `plantrecords`
--

INSERT INTO `plantrecords` (`idplantrecord`, `titlerecord`, `dateplant`, `planthour`, `plantevente`, `actionsevent`, `plant_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Carga en Anden 3', '2020-10-27', '18:48:00', 'Se mantuvo visualizada dicha maniobra no encontrando observaciones', 'No se detallan', 1, 2, '2020-10-27 22:48:00', '2020-10-27 22:48:00'),
(2, 'Descarga de materia Prima (1ra. Batea)', '2020-10-27', '18:48:00', 'Se mantuvo visualizada dicha maniobra no encontrando observaciones', 'No se detallan', 1, 2, '2020-10-27 22:48:00', '2020-10-27 22:48:00'),
(3, 'Carga en Andenes (Anden 2)', '2020-10-27', '18:48:00', 'Se mantuvo visualizada dicha maniobra no encontrando observaciones', 'No se detallan', 1, 2, '2020-10-27 22:48:00', '2020-10-27 22:48:00'),
(4, 'Personal realiza lavado de piso de  patio', '2020-10-27', '18:48:00', 'Se mantuvo visualizada dicha maniobra no encontrando observaciones', 'No se detallan', 1, 2, '2020-10-27 22:48:00', '2020-10-27 22:48:00'),
(5, 'Inicio de carga en Andenes (Anden 2 y Anden 3)', '2020-10-27', '18:48:00', 'Se mantuvo visualizada dicha maniobra no encontrando observaciones', 'No se detallan', 2, 2, '2020-10-27 22:48:00', '2020-10-27 22:48:00'),
(6, 'Descarga de materia Prima (1ra. Batea)', '2020-10-27', '18:48:00', 'Se mantuvo visualizada dicha maniobra no encontrando observaciones', 'No se detallan', 2, 2, '2020-10-27 22:48:00', '2020-10-27 22:48:00'),
(7, 'Descarga  de Bins en Patio', '2020-10-27', '18:48:00', 'Se mantuvo visualizada dicha maniobra no encontrando observaciones', 'No se detallan', 2, 2, '2020-10-27 22:48:00', '2020-10-27 22:48:00'),
(8, 'Descarga de materia Prima (3ra. Batea)', '2020-10-27', '18:48:00', 'Se mantuvo visualizada dicha maniobra no encontrando observaciones', 'No se detallan', 2, 2, '2020-10-27 22:48:00', '2020-10-27 22:48:00');

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
(1, 'Chamiza', '2020-10-27 22:47:59', '2020-10-27 22:47:59'),
(2, 'Quellón', '2020-10-27 22:47:59', '2020-10-27 22:47:59');

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
(1, 'root', 'Usuario Super Administrador', 1, '2020-10-27 22:47:56', '2020-10-27 22:47:56'),
(2, 'admin', 'Usuario Administrador', 2, '2020-10-27 22:47:56', '2020-10-27 22:47:56');

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
(1, 1, 1, '2020-10-27 22:47:57', '2020-10-27 22:47:57'),
(2, 2, 2, '2020-10-27 22:47:57', '2020-10-27 22:47:57'),
(3, 2, 3, '2020-10-27 22:47:57', '2020-10-27 22:47:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'De Seguridad', 'mv2020@salmonesaustral.cl', '$2y$10$.F0b1rQ7GRotzj1ZDk.VieiUyKBGjNQR2i6rUXPTbZZmJ0wQl9fUq', 'QPr6Grb5hBwQffIDrSPGCNrzFCL18NfGmUXqrB6yZC7NsI9RxTXZhlnYNg2YrSgNfavSmkwlNJF3ss86L4ufNZF71zHjCG99wzG8', '2020-10-27 22:47:56', '2020-10-27 22:47:56'),
(2, 'María', 'Vásquez', 'mvasquez@salmonesaustral.cl', '$2y$10$2xtmYL1S8Q.BWek4kmeY3ev/Ah/fvNodi9/KJ039fkkuVaD/htlnW', 'Lh77sWEYerJUWtCp8GL0D90v2lVF5kqUp2EQjXW5FwCyo7cZI7CR4uD0chSQeXwHPh8Xa64OT88z0DWN6oTKq7k1Riaqwt0CMYwG', '2020-10-27 22:47:56', '2020-10-27 22:47:56'),
(3, 'David', 'Cárdenas', 'dcardenas@salmonesaustral.cl', '$2y$10$nqhrDlLOXYnEDoGcLxjhruKYxY7UWyHKP6Yuei3HRje8owPFKfurS', 'HblbRqr1IgqKf8rfntfcJ7CPs8SmPoQRlQYbgLAIbRaoBaSDen1gXhKgX5If53EREjjHgWhydx8749du4kUypPkoAGeT5026djSi', '2020-10-27 22:47:57', '2020-10-27 22:47:57');

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `centers`
--
ALTER TABLE `centers`
  MODIFY `idcenter` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `faultrecords`
--
ALTER TABLE `faultrecords`
  MODIFY `idfault` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `maritimerecords`
--
ALTER TABLE `maritimerecords`
  MODIFY `idmarinerecord` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
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
  MODIFY `idplantrecord` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
