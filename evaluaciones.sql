-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2023 a las 03:05:24
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `evaluaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `courses`
--

INSERT INTO `courses` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Matemática\r\n', '2023-10-23 06:27:05', NULL),
(2, 'Ingles', '2023-10-29 22:57:21', NULL),
(3, 'Comunicación', '2023-10-29 22:57:21', NULL),
(4, 'Persona Social', '2023-10-29 22:57:21', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `positions`
--

INSERT INTO `positions` (`id`, `profile_id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 1, 'Coordinador Secundaria', '2023-10-21 16:29:03', '2023-10-30 00:07:21'),
(2, 1, 'Coordinador Primaria', '2023-10-21 16:29:03', '2023-10-30 00:07:28'),
(4, 2, 'Primaria', '2023-10-23 02:48:51', '2023-10-23 06:15:48'),
(5, 2, 'Secundaria', '2023-10-23 02:48:51', '2023-10-23 06:15:49'),
(6, 3, 'Director', '2023-10-23 02:49:42', '2023-10-23 06:15:54'),
(11, 1, 'Apoyo Primaria', '2023-10-23 02:49:42', '2023-10-23 06:15:54'),
(12, 1, 'Apoyo Secundaria', '2023-10-23 02:49:42', '2023-10-23 06:15:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profiles`
--

INSERT INTO `profiles` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Evaluador', '2023-10-21 16:19:16', NULL),
(2, 'Docente', '2023-10-31 00:56:30', '2023-10-31 00:56:30'),
(3, 'Admin', '2023-10-21 16:30:18', '2023-10-21 16:30:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `qualifications`
--

CREATE TABLE `qualifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `evaluador_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `qualifications`
--

INSERT INTO `qualifications` (`id`, `user_id`, `evaluador_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 5, '2023-10-31 00:43:35', '2023-10-31 00:43:35', NULL),
(2, 6, 5, '2023-10-31 00:43:56', '2023-10-31 00:43:56', NULL),
(3, 7, 2, '2023-10-31 00:46:01', '2023-10-31 00:46:01', NULL),
(4, 4, 2, '2023-10-31 00:46:37', '2023-10-31 00:46:37', NULL),
(5, 8, 2, '2023-10-31 00:46:58', '2023-10-31 00:46:58', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `qualifications_questions`
--

CREATE TABLE `qualifications_questions` (
  `id` int(11) NOT NULL,
  `qualification_id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `puntaje` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `qualifications_questions`
--

INSERT INTO `qualifications_questions` (`id`, `qualification_id`, `question`, `puntaje`, `created_at`, `updated_at`) VALUES
(1, 1, 'CONOCIMIENTO Y DOMINIO DEL TEMA', 15, '2023-10-31 00:43:35', '2023-10-31 00:43:35'),
(2, 1, 'HABILIDADES PEDAGÓGICAS', 15, '2023-10-31 00:43:35', '2023-10-31 00:43:35'),
(3, 1, 'GESTIÓN DEL AULA', 20, '2023-10-31 00:43:35', '2023-10-31 00:43:35'),
(4, 1, 'EVALUACIÓN Y RETROALIMENTACIÓN', 20, '2023-10-31 00:43:35', '2023-10-31 00:43:35'),
(5, 1, 'PUNTUALIDAD EN LOS HORARIOS', 10, '2023-10-31 00:43:35', '2023-10-31 00:43:35'),
(6, 1, 'RELACIONES INTERPERSONALES', 15, '2023-10-31 00:43:35', '2023-10-31 00:43:35'),
(7, 2, 'CONOCIMIENTO Y DOMINIO DEL TEMA', 15, '2023-10-31 00:43:56', '2023-10-31 00:43:56'),
(8, 2, 'HABILIDADES PEDAGÓGICAS', 15, '2023-10-31 00:43:56', '2023-10-31 00:43:56'),
(9, 2, 'GESTIÓN DEL AULA', 20, '2023-10-31 00:43:56', '2023-10-31 00:43:56'),
(10, 2, 'EVALUACIÓN Y RETROALIMENTACIÓN', 10, '2023-10-31 00:43:57', '2023-10-31 00:43:57'),
(11, 2, 'PUNTUALIDAD EN LOS HORARIOS', 15, '2023-10-31 00:43:57', '2023-10-31 00:43:57'),
(12, 2, 'RELACIONES INTERPERSONALES', 20, '2023-10-31 00:43:57', '2023-10-31 00:43:57'),
(13, 3, 'CONOCIMIENTO Y DOMINIO DEL TEMA', 10, '2023-10-31 00:46:01', '2023-10-31 00:46:01'),
(14, 3, 'HABILIDADES PEDAGÓGICAS', 20, '2023-10-31 00:46:01', '2023-10-31 00:46:01'),
(15, 3, 'GESTIÓN DEL AULA', 15, '2023-10-31 00:46:01', '2023-10-31 00:46:01'),
(16, 3, 'EVALUACIÓN Y RETROALIMENTACIÓN', 15, '2023-10-31 00:46:01', '2023-10-31 00:46:01'),
(17, 3, 'PUNTUALIDAD EN LOS HORARIOS', 20, '2023-10-31 00:46:01', '2023-10-31 00:46:01'),
(18, 3, 'RELACIONES INTERPERSONALES', 15, '2023-10-31 00:46:01', '2023-10-31 00:46:01'),
(19, 4, 'CONOCIMIENTO Y DOMINIO DEL TEMA', 15, '2023-10-31 00:46:37', '2023-10-31 00:46:37'),
(20, 4, 'HABILIDADES PEDAGÓGICAS', 20, '2023-10-31 00:46:37', '2023-10-31 00:46:37'),
(21, 4, 'GESTIÓN DEL AULA', 10, '2023-10-31 00:46:37', '2023-10-31 00:46:37'),
(22, 4, 'EVALUACIÓN Y RETROALIMENTACIÓN', 15, '2023-10-31 00:46:37', '2023-10-31 00:46:37'),
(23, 4, 'PUNTUALIDAD EN LOS HORARIOS', 20, '2023-10-31 00:46:37', '2023-10-31 00:46:37'),
(24, 4, 'RELACIONES INTERPERSONALES', 15, '2023-10-31 00:46:37', '2023-10-31 00:46:37'),
(25, 5, 'CONOCIMIENTO Y DOMINIO DEL TEMA', 10, '2023-10-31 00:46:58', '2023-10-31 00:46:58'),
(26, 5, 'HABILIDADES PEDAGÓGICAS', 15, '2023-10-31 00:46:58', '2023-10-31 00:46:58'),
(27, 5, 'GESTIÓN DEL AULA', 10, '2023-10-31 00:46:58', '2023-10-31 00:46:58'),
(28, 5, 'EVALUACIÓN Y RETROALIMENTACIÓN', 15, '2023-10-31 00:46:58', '2023-10-31 00:46:58'),
(29, 5, 'PUNTUALIDAD EN LOS HORARIOS', 20, '2023-10-31 00:46:58', '2023-10-31 00:46:58'),
(30, 5, 'RELACIONES INTERPERSONALES', 15, '2023-10-31 00:46:58', '2023-10-31 00:46:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(4, 'CONOCIMIENTO Y DOMINIO DEL TEMA', '2023-10-22 14:50:28', '2023-10-22 14:50:28'),
(5, 'HABILIDADES PEDAGÓGICAS', '2023-10-22 14:51:07', '2023-10-22 14:51:07'),
(6, 'GESTIÓN DEL AULA', '2023-10-22 14:52:48', '2023-10-22 14:52:48'),
(7, 'EVALUACIÓN Y RETROALIMENTACIÓN', '2023-10-22 14:53:53', '2023-10-22 14:53:53'),
(8, 'PUNTUALIDAD EN LOS HORARIOS', '2023-10-22 15:34:01', '2023-10-22 15:34:01'),
(9, 'RELACIONES INTERPERSONALES', '2023-10-22 15:45:57', '2023-10-22 15:50:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `position_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `nombres` varchar(500) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `profile_id`, `position_id`, `course_id`, `nombres`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 6, NULL, 'Admin', 'admin@gmail.com', '$2y$10$QZFHI0iJFyBppQR16zQiNuOKsR3HA7hUbGC0m/Ij6y7RW2zp1unVC', '2023-10-21 16:31:02', '2023-10-29 23:15:27', NULL),
(2, 1, 2, NULL, 'Diego Simon Samaniego', 'diego@gmail.com', '$2y$10$sFumggrGRUpTjjF2BZgBgeFBnGA2rNJGN6NBOhQXhnpPmf0SczHba', '2023-10-21 17:10:51', '2023-10-23 06:30:21', NULL),
(3, 2, 4, 2, 'Emerson Navarro Fernández', 'emerson@gmail.com', '$2y$10$BAjJ1O3O1R1GjJV6pn8Lte4P1E3CUaL125m5Je5qUs1Y89/6TvP5u', '2023-10-23 06:33:13', '2023-10-30 00:17:43', NULL),
(4, 2, 5, 1, 'Pablo Contreras Ramírez', 'pablo@gmail.com', '$2y$10$6wOyFTt7tWquGeMkAmO49uwvtWQDO22C2xxieCp06Aho8g7oOIMQC', '2023-10-25 23:59:28', '2023-10-29 01:18:09', NULL),
(5, 1, 1, NULL, 'Carmen Ramírez Fernández', 'carmen@gmail.com', '$2y$10$.G0pI5DyyJORWupYd4HdYOXrHEouBgD8fkKr1laCa.7dYL4PInKlC', '2023-10-29 01:00:18', '2023-10-29 01:00:18', NULL),
(6, 2, 4, 1, 'Eduardo Castro Martínez', 'eduardo@gmail.com', '$2y$10$6IhVk5O6ivKTYEBpAOPOIONDVU1g6GHVQ1s9Ar3ys8RKJbC0JUaVm', '2023-10-29 01:04:59', '2023-10-29 01:04:59', NULL),
(7, 2, 5, 4, 'Carlos Hernández Mejía', 'carlos@gmail.com', '$2y$10$3lFF37jkkRsgxUTEy4z6We3u2O1mFn9uG1u/nxIAKq5GW8RwEXlIy', '2023-10-29 01:23:24', '2023-10-30 00:17:53', NULL),
(8, 2, 5, 3, 'Andrea Silva Vásquez', 'andrea@gmail.com', '$2y$10$qgXhjBqnpO3j5QXR.WFaA.Xb8Y0LScnrrP1e2OmUs/28pj8E9B/qK', '2023-10-29 02:01:21', '2023-10-30 00:18:06', NULL),
(9, 1, 2, NULL, 'Raúl	Morales Morales', 'raul@gmail.com', '$2y$10$JeoDbg8k5y5m..UZB0WWru.D6sMIImJLpGZpiD6C662bpuIrpHNKS', '2023-10-29 02:03:09', '2023-10-29 02:43:23', '2023-10-29 02:43:23'),
(10, 1, 11, NULL, 'Lucia Benítez Castro', 'lucia@gmail.com', '$2y$10$FLedLnW9BLIFr3aQd7NO2Oc0u0LUIrEwntULEJ2V7hOU/gA1puupy', '2023-10-29 02:40:55', '2023-10-30 00:19:03', NULL),
(11, 1, 12, NULL, 'Javier Baca Reyes', 'javier@gmail.com', '$2y$10$.CfnBOntzRhgppO49CNI3eV/RIVDrUp8QbTlGs5Sk3iNUtsYiXt8e', '2023-10-29 02:42:04', '2023-10-30 00:18:46', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_id` (`profile_id`);

--
-- Indices de la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `evaluador_id` (`evaluador_id`);

--
-- Indices de la tabla `qualifications_questions`
--
ALTER TABLE `qualifications_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qualification_id` (`qualification_id`);

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perfil_id` (`profile_id`),
  ADD KEY `position_id` (`position_id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `qualifications_questions`
--
ALTER TABLE `qualifications_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `positions`
--
ALTER TABLE `positions`
  ADD CONSTRAINT `positions_ibfk_1` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`);

--
-- Filtros para la tabla `qualifications`
--
ALTER TABLE `qualifications`
  ADD CONSTRAINT `qualifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `qualifications_ibfk_2` FOREIGN KEY (`evaluador_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `qualifications_questions`
--
ALTER TABLE `qualifications_questions`
  ADD CONSTRAINT `qualifications_questions_ibfk_1` FOREIGN KEY (`qualification_id`) REFERENCES `qualifications` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`),
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
