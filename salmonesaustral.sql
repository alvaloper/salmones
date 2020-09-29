-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2020 a las 04:56:32
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
(1, 'Pichagua', '93456789', 'Daniel Dávila', 'Juan Pérez', '2020-09-29 02:41:30', '2020-09-29 02:41:30'),
(2, 'Santiago', '12345678', 'María Dugarte', 'Luis Shakespeare', '2020-09-29 02:41:31', '2020-09-29 02:41:31');

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
(1, '2020-09-28', '22:41:32', 'Falla Operacional 1', '2020-09-28', '22:41:32', 'Falla Operacional 1', 'Solución Falla Operacional 1', 1, 1, '2020-09-29 02:41:32', '2020-09-29 02:41:32'),
(2, '2020-09-28', '22:41:32', 'Falla Operacional 2', '2020-09-28', '22:41:32', 'Falla Operacional 2', 'Solución Falla Operacional 2', 1, 1, '2020-09-29 02:41:32', '2020-09-29 02:41:32'),
(3, '2020-09-28', '22:41:32', 'Falla Operacional 3', '2020-09-28', '22:41:32', 'Falla Operacional 3', 'Solución Falla Operacional 3', 0, 1, '2020-09-29 02:41:32', '2020-09-29 02:41:32'),
(4, '2020-09-28', '22:41:32', 'Falla Operacional 4', '2020-09-28', '22:41:32', 'Falla Operacional 4', 'Solución Falla Operacional 4', 0, 1, '2020-09-29 02:41:32', '2020-09-29 02:41:32');

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
(1, 'Diurno', '2020-09-28', '22:41:31', '22:41:31', 'Evento Marino 1', 0, 1, 1, '2020-09-29 02:41:31', '2020-09-29 02:41:31'),
(2, 'Nocturno', '2020-09-28', '22:41:31', '22:41:31', 'Evento Marino 2', 1, 1, 1, '2020-09-29 02:41:31', '2020-09-29 02:41:31'),
(3, 'Diurno', '2020-09-28', '22:41:31', '22:41:31', 'Evento Marino 3', 1, 2, 1, '2020-09-29 02:41:31', '2020-09-29 02:41:31'),
(4, 'Diurno', '2020-09-28', '22:41:31', '22:41:31', 'Evento Marino 4', 0, 2, 1, '2020-09-29 02:41:31', '2020-09-29 02:41:31');

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
(1, 'crear.usuarios', 'Permiso Para Crear Usuario', '2020-09-29 02:41:26', '2020-09-29 02:41:26'),
(2, 'eliminar.usuarios', 'Permiso Para Eliminar Usuario', '2020-09-29 02:41:26', '2020-09-29 02:41:26'),
(3, 'ver.usuarios', 'Permiso Para Ver Usuario', '2020-09-29 02:41:26', '2020-09-29 02:41:26'),
(4, 'modificar.usuarios', 'Permiso Para Modificar Usuario', '2020-09-29 02:41:26', '2020-09-29 02:41:26'),
(5, 'crear.perfiles', 'Permiso Para Crear Perfiles', '2020-09-29 02:41:26', '2020-09-29 02:41:26'),
(6, 'eliminar.perfiles', 'Permiso Para Eliminar Perfiles', '2020-09-29 02:41:27', '2020-09-29 02:41:27'),
(7, 'ver.perfiles', 'Permiso Para Ver perfiles', '2020-09-29 02:41:27', '2020-09-29 02:41:27'),
(8, 'modificar.perfiles', 'Permiso para Modificar perfiles', '2020-09-29 02:41:27', '2020-09-29 02:41:27'),
(9, 'crear.permisos', 'Para Crear perfiles', '2020-09-29 02:41:27', '2020-09-29 02:41:27'),
(10, 'eliminar.permisos', 'Para Eliminar Perfiles', '2020-09-29 02:41:27', '2020-09-29 02:41:27'),
(11, 'ver.permisos', 'Para Ver Perfiles', '2020-09-29 02:41:27', '2020-09-29 02:41:27'),
(12, 'modificar.permisos', 'Para Modificar Perfiles', '2020-09-29 02:41:27', '2020-09-29 02:41:27');

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
(1, 1, 1, '2020-09-29 02:41:28', '2020-09-29 02:41:28'),
(2, 2, 1, '2020-09-29 02:41:28', '2020-09-29 02:41:28'),
(3, 3, 1, '2020-09-29 02:41:28', '2020-09-29 02:41:28'),
(4, 4, 1, '2020-09-29 02:41:28', '2020-09-29 02:41:28'),
(5, 5, 1, '2020-09-29 02:41:29', '2020-09-29 02:41:29'),
(6, 6, 1, '2020-09-29 02:41:29', '2020-09-29 02:41:29'),
(7, 7, 1, '2020-09-29 02:41:29', '2020-09-29 02:41:29'),
(8, 8, 1, '2020-09-29 02:41:29', '2020-09-29 02:41:29'),
(9, 9, 1, '2020-09-29 02:41:29', '2020-09-29 02:41:29'),
(10, 10, 1, '2020-09-29 02:41:29', '2020-09-29 02:41:29'),
(11, 11, 1, '2020-09-29 02:41:29', '2020-09-29 02:41:29'),
(12, 12, 1, '2020-09-29 02:41:29', '2020-09-29 02:41:29');

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
(1, 1, 1, 1, '2020-09-29 02:41:29', '2020-09-29 02:41:29'),
(2, 2, 1, 1, '2020-09-29 02:41:29', '2020-09-29 02:41:29'),
(3, 3, 1, 1, '2020-09-29 02:41:29', '2020-09-29 02:41:29'),
(4, 4, 1, 1, '2020-09-29 02:41:30', '2020-09-29 02:41:30'),
(5, 5, 1, 1, '2020-09-29 02:41:30', '2020-09-29 02:41:30'),
(6, 6, 1, 1, '2020-09-29 02:41:30', '2020-09-29 02:41:30'),
(7, 7, 1, 1, '2020-09-29 02:41:30', '2020-09-29 02:41:30'),
(8, 8, 1, 1, '2020-09-29 02:41:30', '2020-09-29 02:41:30'),
(9, 9, 1, 1, '2020-09-29 02:41:30', '2020-09-29 02:41:30'),
(10, 10, 1, 1, '2020-09-29 02:41:30', '2020-09-29 02:41:30'),
(11, 11, 1, 1, '2020-09-29 02:41:30', '2020-09-29 02:41:30'),
(12, 12, 1, 1, '2020-09-29 02:41:30', '2020-09-29 02:41:30');

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
(1, 'Registro de Planta 1', '2020-09-28', '22:41:31', 'Evento de Planta 1', 'Acciones de Planta 1', 0, 1, 1, '2020-09-29 02:41:31', '2020-09-29 02:41:31'),
(2, 'Registro de Planta 2', '2020-09-28', '22:41:31', 'Evento de Planta 2', 'Acciones de Planta 2', 1, 2, 1, '2020-09-29 02:41:31', '2020-09-29 02:41:31'),
(3, 'Registro de Planta 3', '2020-09-28', '22:41:31', 'Evento de Planta 3', 'Acciones de Planta 3', 1, 1, 1, '2020-09-29 02:41:31', '2020-09-29 02:41:31'),
(4, 'Registro de Planta 4', '2020-09-28', '22:41:31', 'Evento de Planta 4', 'Acciones de Planta 4', 0, 1, 1, '2020-09-29 02:41:31', '2020-09-29 02:41:31');

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
(1, 'Chamiza', '2020-09-29 02:41:30', '2020-09-29 02:41:30'),
(2, 'Quintoa', '2020-09-29 02:41:30', '2020-09-29 02:41:30');

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
(1, 'root', 'Usuario Super Administrador', 1, '2020-09-29 02:41:27', '2020-09-29 02:41:27'),
(2, 'admin', 'Usuario Administrador', 2, '2020-09-29 02:41:27', '2020-09-29 02:41:27');

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
(1, 1, 1, '2020-09-29 02:41:28', '2020-09-29 02:41:28'),
(2, 2, 2, '2020-09-29 02:41:28', '2020-09-29 02:41:28');

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
(1, 'Salmones Austral', 'avatar04.png', 'Salmones Austral CTO', 'administrador@salmonesaustral.net', '$2y$10$LTP3/ARzWaARysujJWmSouVuzpE2C/fA6Z6b2dXn.Ss3/0WlwWJJ6', 1, '2020-09-28', '2021-03-28', '38KyinQtzrJtqG24iL8kyPhPJBXbmPzh9uuRO6Yln3LpUMIIwPWxDYxxSyKa', '2020-09-29 02:41:27', '2020-09-29 02:53:35'),
(2, 'María Morales', 'avatar04.png', 'Salmones Austral EDIT', 'editor@salmonesaustral.net', '$2y$10$r7G4p1FUKGRYRY/ULQXnKeJNfTthaA/Llnz67jLeYvoYWpe6hB99e', 1, '2020-09-28', '2021-03-28', 'DLQb4zAqm0llvqFeYr1hNdOs1xvmFVZUfGwSSDXA8yHrBeZh9Xlj80Rnkqmn', '2020-09-29 02:41:28', '2020-09-29 02:54:09');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
