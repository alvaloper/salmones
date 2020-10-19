-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2020 a las 14:37:20
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
(1, 'Angosta', '976697113', '--', '--', '2020-10-14 12:33:52', '2020-10-14 12:33:52'),
(2, 'Errazuriz', '976697113', 'Gastón Díaz', 'David Niñes', '2020-10-14 12:33:53', '2020-10-14 12:33:53'),
(3, 'Pichagua', '942057959', 'Ricardo Tielle', '--', '2020-10-14 12:33:53', '2020-10-14 12:33:53');

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
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `faultrecords`
--

INSERT INTO `faultrecords` (`idfault`, `faultdate`, `faulthour`, `fault`, `enddate`, `endhour`, `solution`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2020-10-14', '08:33:55', 'Centro de Cultivo Errazuriz no emite señal de vídeo', '2020-10-14', '08:33:55', 'No se detalla', 1, '2020-10-14 12:33:55', '2020-10-14 12:33:55'),
(2, '2020-10-14', '08:33:55', 'Centro de Cultivo Errazuriz no emite señal de vídeo', '2020-10-14', '08:33:55', 'No se detalla', 2, '2020-10-14 12:33:55', '2020-10-14 12:33:55'),
(3, '2020-10-14', '08:33:55', 'Caída de señal del DVR Exterior', '2020-10-14', '08:33:55', 'No se detalla', 3, '2020-10-14 12:33:55', '2020-10-14 12:33:55'),
(4, '2020-10-14', '08:33:55', 'Señal intermitente Planta Quellón', '2020-10-14', '08:33:55', 'No se detalla', 1, '2020-10-14 12:33:55', '2020-10-14 12:33:55'),
(5, '2020-10-14', '08:33:55', 'Se pierde visualización de las cámaras exterior planta', '2020-10-14', '08:33:55', 'No se detalla', 2, '2020-10-14 12:33:55', '2020-10-14 12:33:55'),
(6, '2020-10-14', '08:33:55', 'Se pierde visualización del DVR de Bodega de Operaciones', '2020-10-14', '08:33:55', 'No se detalla', 3, '2020-10-14 12:33:55', '2020-10-14 12:33:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maritimerecords`
--

CREATE TABLE `maritimerecords` (
  `idmarinerecord` int(10) UNSIGNED NOT NULL,
  `turn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datemarine` date NOT NULL,
  `landfallhour` time NOT NULL,
  `sailhour` time NOT NULL,
  `marineevent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `center_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `maritimerecords`
--

INSERT INTO `maritimerecords` (`idmarinerecord`, `turn`, `datemarine`, `landfallhour`, `sailhour`, `marineevent`, `center_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Diurno', '2020-10-14', '08:33:54', '08:33:54', 'Panga Queullin I, inicia salida  con personal  desde el Pontón', 3, 2, '2020-10-14 12:33:54', '2020-10-14 12:33:54'),
(2, 'Diurno', '2020-10-14', '08:33:54', '08:33:54', 'Panga Queullin I, ingreso de personal al módulo', 3, 2, '2020-10-14 12:33:54', '2020-10-14 12:33:54'),
(3, 'Diurno', '2020-10-14', '08:33:54', '08:33:54', 'Panga Queullin I, se ubica en la plataforma para proceder al retiro de materiales dirigiéndose al módulo', 3, 2, '2020-10-14 12:33:54', '2020-10-14 12:33:54'),
(4, 'Diurno', '2020-10-14', '08:33:54', '08:33:54', 'Se visualiza cuatro personas realizando recorrido por el módulo', 3, 2, '2020-10-14 12:33:54', '2020-10-14 12:33:54'),
(5, 'Diurno', '2020-10-14', '08:33:54', '08:33:54', 'Panga Queullin I, ingreso de una persona al Pontón', 3, 2, '2020-10-14 12:33:54', '2020-10-14 12:33:54'),
(6, 'Nocturno', '2020-10-14', '08:33:54', '08:33:54', 'Panga Queullin I se dirige a Pontón con personal de seguridad.', 3, 3, '2020-10-14 12:33:54', '2020-10-14 12:33:54'),
(7, 'Nocturno', '2020-10-14', '08:33:54', '08:33:54', 'Se detecta Foco Perko en movimiento y fotoperiodo encendido.', 3, 3, '2020-10-14 12:33:54', '2020-10-14 12:33:54'),
(8, 'Diurno', '2020-10-14', '08:33:54', '08:33:54', 'Embarcacion Viento Sur (lancha Blanca) se ubica con  ingreso de materiales "soporte pajarero"', 2, 2, '2020-10-14 12:33:54', '2020-10-14 12:33:54'),
(9, 'Diurno', '2020-10-14', '08:33:54', '08:33:54', 'Lancha Cagua con traslado de personal a la base el rosario', 2, 2, '2020-10-14 12:33:54', '2020-10-14 12:33:54'),
(10, 'Diurno', '2020-10-14', '08:33:54', '08:33:54', 'Se visualiza el bote Trauco en Ensilaje', 2, 2, '2020-10-14 12:33:54', '2020-10-14 12:33:54'),
(11, 'Diurno', '2020-10-14', '08:33:54', '08:33:54', 'Embarcacion Viento Sur', 2, 2, '2020-10-14 12:33:54', '2020-10-14 12:33:54'),
(12, 'Diurno', '2020-10-14', '08:33:54', '08:33:54', 'Panga Queullin I, ingreso de una persona al Pontón', 2, 2, '2020-10-14 12:33:54', '2020-10-14 12:33:54'),
(13, 'Nocturno', '2020-10-14', '08:33:55', '08:33:55', 'Puerto cerrado, Inicio de jornada con muy mal clima, limitando la operatividad de la misma.', 2, 3, '2020-10-14 12:33:55', '2020-10-14 12:33:55');

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
(1, 'crear.usuarios', 'Permiso Para Crear Usuario', '2020-10-14 12:33:49', '2020-10-14 12:33:49'),
(2, 'eliminar.usuarios', 'Permiso Para Eliminar Usuario', '2020-10-14 12:33:49', '2020-10-14 12:33:49'),
(3, 'ver.usuarios', 'Permiso Para Ver Usuario', '2020-10-14 12:33:49', '2020-10-14 12:33:49'),
(4, 'modificar.usuarios', 'Permiso Para Modificar Usuario', '2020-10-14 12:33:49', '2020-10-14 12:33:49'),
(5, 'crear.perfiles', 'Permiso Para Crear Perfiles', '2020-10-14 12:33:49', '2020-10-14 12:33:49'),
(6, 'eliminar.perfiles', 'Permiso Para Eliminar Perfiles', '2020-10-14 12:33:49', '2020-10-14 12:33:49'),
(7, 'ver.perfiles', 'Permiso Para Ver perfiles', '2020-10-14 12:33:49', '2020-10-14 12:33:49'),
(8, 'modificar.perfiles', 'Permiso para Modificar perfiles', '2020-10-14 12:33:49', '2020-10-14 12:33:49'),
(9, 'crear.permisos', 'Para Crear perfiles', '2020-10-14 12:33:49', '2020-10-14 12:33:49'),
(10, 'eliminar.permisos', 'Para Eliminar Perfiles', '2020-10-14 12:33:49', '2020-10-14 12:33:49'),
(11, 'ver.permisos', 'Para Ver Perfiles', '2020-10-14 12:33:49', '2020-10-14 12:33:49'),
(12, 'modificar.permisos', 'Para Modificar Perfiles', '2020-10-14 12:33:49', '2020-10-14 12:33:49');

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
(1, 1, 1, '2020-10-14 12:33:51', '2020-10-14 12:33:51'),
(2, 2, 1, '2020-10-14 12:33:51', '2020-10-14 12:33:51'),
(3, 3, 1, '2020-10-14 12:33:51', '2020-10-14 12:33:51'),
(4, 4, 1, '2020-10-14 12:33:51', '2020-10-14 12:33:51'),
(5, 5, 1, '2020-10-14 12:33:51', '2020-10-14 12:33:51'),
(6, 6, 1, '2020-10-14 12:33:51', '2020-10-14 12:33:51'),
(7, 7, 1, '2020-10-14 12:33:51', '2020-10-14 12:33:51'),
(8, 8, 1, '2020-10-14 12:33:51', '2020-10-14 12:33:51'),
(9, 9, 1, '2020-10-14 12:33:51', '2020-10-14 12:33:51'),
(10, 10, 1, '2020-10-14 12:33:51', '2020-10-14 12:33:51'),
(11, 11, 1, '2020-10-14 12:33:51', '2020-10-14 12:33:51'),
(12, 12, 1, '2020-10-14 12:33:51', '2020-10-14 12:33:51');

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
(1, 1, 1, 1, '2020-10-14 12:33:52', '2020-10-14 12:33:52'),
(2, 2, 1, 1, '2020-10-14 12:33:52', '2020-10-14 12:33:52'),
(3, 3, 1, 1, '2020-10-14 12:33:52', '2020-10-14 12:33:52'),
(4, 4, 1, 1, '2020-10-14 12:33:52', '2020-10-14 12:33:52'),
(5, 5, 1, 1, '2020-10-14 12:33:52', '2020-10-14 12:33:52'),
(6, 6, 1, 1, '2020-10-14 12:33:52', '2020-10-14 12:33:52'),
(7, 7, 1, 1, '2020-10-14 12:33:52', '2020-10-14 12:33:52'),
(8, 8, 1, 1, '2020-10-14 12:33:52', '2020-10-14 12:33:52'),
(9, 9, 1, 1, '2020-10-14 12:33:52', '2020-10-14 12:33:52'),
(10, 10, 1, 1, '2020-10-14 12:33:52', '2020-10-14 12:33:52'),
(11, 11, 1, 1, '2020-10-14 12:33:52', '2020-10-14 12:33:52'),
(12, 12, 1, 1, '2020-10-14 12:33:52', '2020-10-14 12:33:52');

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
(1, 'Carga en Anden 3', '2020-10-14', '08:33:53', 'Se mantuvo visualizada dicha maniobra no encontrando observaciones', 'No se detallan', 1, 2, '2020-10-14 12:33:53', '2020-10-14 12:33:53'),
(2, 'Descarga de materia Prima (1ra. Batea)', '2020-10-14', '08:33:53', 'Se mantuvo visualizada dicha maniobra no encontrando observaciones', 'No se detallan', 1, 2, '2020-10-14 12:33:53', '2020-10-14 12:33:53'),
(3, 'Carga en Andenes (Anden 2)', '2020-10-14', '08:33:53', 'Se mantuvo visualizada dicha maniobra no encontrando observaciones', 'No se detallan', 1, 2, '2020-10-14 12:33:53', '2020-10-14 12:33:53'),
(4, 'Personal realiza lavado de piso de  patio', '2020-10-14', '08:33:54', 'Se mantuvo visualizada dicha maniobra no encontrando observaciones', 'No se detallan', 1, 2, '2020-10-14 12:33:54', '2020-10-14 12:33:54'),
(5, 'Inicio de carga en Andenes (Anden 2 y Anden 3)', '2020-10-14', '08:33:54', 'Se mantuvo visualizada dicha maniobra no encontrando observaciones', 'No se detallan', 2, 2, '2020-10-14 12:33:54', '2020-10-14 12:33:54'),
(6, 'Descarga de materia Prima (1ra. Batea)', '2020-10-14', '08:33:54', 'Se mantuvo visualizada dicha maniobra no encontrando observaciones', 'No se detallan', 2, 2, '2020-10-14 12:33:54', '2020-10-14 12:33:54'),
(7, 'Descarga  de Bins en Patio', '2020-10-14', '08:33:54', 'Se mantuvo visualizada dicha maniobra no encontrando observaciones', 'No se detallan', 2, 2, '2020-10-14 12:33:54', '2020-10-14 12:33:54'),
(8, 'Descarga de materia Prima (3ra. Batea)', '2020-10-14', '08:33:54', 'Se mantuvo visualizada dicha maniobra no encontrando observaciones', 'No se detallan', 2, 2, '2020-10-14 12:33:54', '2020-10-14 12:33:54');

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
(1, 'Chamiza', '2020-10-14 12:33:52', '2020-10-14 12:33:52'),
(2, 'Quellón', '2020-10-14 12:33:52', '2020-10-14 12:33:52');

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
(1, 'root', 'Usuario Super Administrador', 1, '2020-10-14 12:33:49', '2020-10-14 12:33:49'),
(2, 'admin', 'Usuario Administrador', 2, '2020-10-14 12:33:50', '2020-10-14 12:33:50');

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
(1, 1, 1, '2020-10-14 12:33:50', '2020-10-14 12:33:50'),
(2, 2, 2, '2020-10-14 12:33:51', '2020-10-14 12:33:51'),
(3, 2, 3, '2020-10-14 12:33:51', '2020-10-14 12:33:51');

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
(1, 'Administrador', 'SalmonesAustral', 'administrador@salmonesaustral.net', '$2y$10$eiBLPVijW/ABWjmSe/YL/eVw0Vp.oyg0zOEATSTLqZDK6xObdNbrq', 'Ta8IgH4E0AkpRnLMuSnzYCyD2dhrUr43oyNg1PPNjCFi9CHNipbLlxXcjfbF', '2020-10-14 12:33:50', '2020-10-14 12:36:30'),
(2, 'María', 'Vásquez', 'mvasquez@salmonesaustral.net', '$2y$10$mJY84tzlnAtzpRz9TWgtkObp0TPKYJJcTksD0e.QIDrNpiHWOm.2O', 'Iamx0xn0m9mbzVejmDGARHDtaltxMQGH1EDpij5Y6PeRCcTAsCHMosega7ekCxif5EbALWl4w4PlCGKNajj92gadmQ6DxrYVUiFQ', '2020-10-14 12:33:50', '2020-10-14 12:33:50'),
(3, 'David', 'Cárdenas', 'dcardenas@salmonesaustral.net', '$2y$10$kdLtVvng0F/IW3T8VVEzaeCN/A07LPoSW1wRFqN1mUSpL3wcUJ1.O', '7P2LaDJtQFzycEZoLbeuXpgWKiai7JFRUFnnBLmS9vHwS17ygmbT6HcWV4INE2tRN2vRglsGd4DkTZvYiR8weng3ILHwiSKKcu6U', '2020-10-14 12:33:50', '2020-10-14 12:33:50');

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
  MODIFY `idmarinerecord` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
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
