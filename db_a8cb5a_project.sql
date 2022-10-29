-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql8001.site4now.net
-- Tiempo de generación: 28-10-2022 a las 22:55:53
-- Versión del servidor: 8.0.28
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_a8cb5a_project`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` int NOT NULL,
  `nombre_paciente` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int NOT NULL,
  `dir` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha_cita` date NOT NULL,
  `hora_cita` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_cita`, `nombre_paciente`, `correo`, `telefono`, `dir`, `fecha_cita`, `hora_cita`) VALUES
(1, 'Marvin', 'jerezmarvin@gmail.com ', 59452512, 'Sector 1, Torre 3, Apartamento 2D, Condominio Las Vistas, Santa Catarina Pinula\r\nTorre 3, Apartamento 2D', '2022-10-05', '21:06:00'),
(2, 'Marvin', 'marvinjerez.mj@gmail.com ', 59452512, 'Sector 1, Torre 3, Apartamento 2D, Condominio Las Vistas, Santa Catarina Pinula\r\nTorre 3, Apartamento 2D', '2022-10-28', '21:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ex_paciente`
--

CREATE TABLE `ex_paciente` (
  `id_paciente` int NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `edad` int DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `telefono` int DEFAULT NULL,
  `tipo_sangre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `ex_paciente`
--

INSERT INTO `ex_paciente` (`id_paciente`, `nombre`, `apellido`, `correo`, `fecha_nacimiento`, `edad`, `genero`, `telefono`, `tipo_sangre`) VALUES
(1, 'Marvin', 'Jerez', 'marvinjerez.mj@gmail.com', '2001-01-02', 21, 'Masculino', 59452512, 'A+'),
(2, 'Marvin', 'Jerez', 'marvinjerez.mj@gmail.com', '2022-09-27', 1, 'Masculino', 59452512, 'A+'),
(54, 'Marvin', 'Jerez', 'jerezmarvin@gmail.com', '2012-01-31', 21, 'Masculino', 59452512, 'A-'),
(1211, 'Marvin', 'Jerez', 'marvinjerez.mj@gmail.com', '2022-09-30', 1, 'Masculino', 59452512, 'A+'),
(3434, 'Marvin', 'Jerez', 'jerezmarvin@gmail.com', '2012-01-31', 21, 'Masculino', 59452512, 'A-'),
(3435, 'Marvin', 'Jerez', 'jerezmarvin@gmail.com', '2022-10-13', 1, 'Masculino', 59452512, 'A+'),
(3436, 'Axel ', 'Daniel', 'acastro@safgroup.net', '2022-09-16', 37, 'Masculino', 45869311, 'A-'),
(3437, 'Marvin', 'Jerez', 'jerezmarvin@gmail.com', '2001-01-02', 21, 'Masculino', 59452512, 'O-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `farmacia`
--

CREATE TABLE `farmacia` (
  `id_medicamento` int NOT NULL,
  `nombre_medica` varchar(45) DEFAULT NULL,
  `medida` varchar(45) DEFAULT NULL,
  `precio` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `farmacia`
--

INSERT INTO `farmacia` (`id_medicamento`, `nombre_medica`, `medida`, `precio`) VALUES
(1, 'Caja de 3 condones Scudo', 'XL', '50'),
(2, 'Tabcin Gripe y Tos', '100 miligramos, 1 blister', '45'),
(3, 'Panadol Ultra', '220 miligramos Blister (6 pastillas)', '50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_medica`
--

CREATE TABLE `ficha_medica` (
  `id_fichamed` int NOT NULL,
  `fecha_visita` date DEFAULT NULL,
  `motivo_visita` varchar(45) DEFAULT NULL,
  `nombre_med` varchar(45) DEFAULT NULL,
  `nombre_paciente` varchar(45) DEFAULT NULL,
  `examenes_reali` varchar(100) DEFAULT NULL,
  `resul_examenes` varchar(100) DEFAULT NULL,
  `diagnostico` varchar(100) DEFAULT NULL,
  `nom_medicamento` varchar(45) DEFAULT NULL,
  `tiempo_apli` varchar(45) DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `ficha_medica`
--

INSERT INTO `ficha_medica` (`id_fichamed`, `fecha_visita`, `motivo_visita`, `nombre_med`, `nombre_paciente`, `examenes_reali`, `resul_examenes`, `diagnostico`, `nom_medicamento`, `tiempo_apli`, `observaciones`) VALUES
(1, '2022-10-28', 'Sintomas Covid', 'Mario Regil', 'Marvin Jerez', 'Hematología completa y PCR', 'PCR negativa, Hematología normal', 'Paciente Sano', 'N/A', 'N/A', 'Sobrepreso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id_medico` int NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `especialidad` varchar(45) DEFAULT NULL,
  `telefono` int DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int NOT NULL,
  `rol` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`) VALUES
(1, 'admin'),
(2, 'standar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL,
  `id_rol` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `usuario`, `contraseña`, `id_rol`) VALUES
(6, 'adminmj', '1234', 1),
(7, 'super_admin', '12345678', 1),
(8, 'claura', 'Luara1248', 2),
(9, 'Gaby', '12345', 1),
(10, 'Jorge', '12345', 2),
(11, 'USER', '12345678', NULL),
(12, 'mjadmin', '12481248', 1),
(13, 'standar', '12345', 2),
(14, 'david', '12345', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`);

--
-- Indices de la tabla `ex_paciente`
--
ALTER TABLE `ex_paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indices de la tabla `farmacia`
--
ALTER TABLE `farmacia`
  ADD PRIMARY KEY (`id_medicamento`);

--
-- Indices de la tabla `ficha_medica`
--
ALTER TABLE `ficha_medica`
  ADD PRIMARY KEY (`id_fichamed`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id_medico`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `users_ibfk_1` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ex_paciente`
--
ALTER TABLE `ex_paciente`
  MODIFY `id_paciente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3438;

--
-- AUTO_INCREMENT de la tabla `farmacia`
--
ALTER TABLE `farmacia`
  MODIFY `id_medicamento` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ficha_medica`
--
ALTER TABLE `ficha_medica`
  MODIFY `id_fichamed` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `id_medico` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
