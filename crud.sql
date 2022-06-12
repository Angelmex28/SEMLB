-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2021 a las 00:18:16
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id` int(11) NOT NULL,
  `id_usuario` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_evaluacion` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `calificacion` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `observacion` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombres` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellidos` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `grado` varchar(5) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `seccion` varchar(2) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id`, `id_usuario`, `id_evaluacion`, `calificacion`, `observacion`, `nombres`, `apellidos`, `grado`, `seccion`) VALUES
(12, '64', '2', 'A', 'exelente', 'Alexis', 'Andrade', '4', 'A'),
(13, '66', '2', 'd', 'malisimo', 'Valeria', 'Duque', '4', 'A'),
(14, '64', '3', 'e', 'mediooo', 'Alexis', 'Andrade', '4', 'A'),
(15, '66', '3', 'a', 'bien\r\n', 'Valeria', 'Duque', '4', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciones`
--

CREATE TABLE `evaluaciones` (
  `id` int(255) NOT NULL,
  `id_profesor` int(255) NOT NULL,
  `nombres_profesor` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellidos_profesor` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `creado` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta1` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta2` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `pregunta3` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `pregunta4` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `pregunta5` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta6` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta7` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta8` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta9` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta10` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta11` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta12` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta13` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta14` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta15` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta16` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta17` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta18` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta19` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta20` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cierre` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `publico` varchar(2) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `grado` varchar(2) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `seccion` varchar(2) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `evaluaciones`
--

INSERT INTO `evaluaciones` (`id`, `id_profesor`, `nombres_profesor`, `apellidos_profesor`, `creado`, `pregunta1`, `pregunta2`, `pregunta3`, `pregunta4`, `pregunta5`, `pregunta6`, `pregunta7`, `pregunta8`, `pregunta9`, `pregunta10`, `pregunta11`, `pregunta12`, `pregunta13`, `pregunta14`, `pregunta15`, `pregunta16`, `pregunta17`, `pregunta18`, `pregunta19`, `pregunta20`, `cierre`, `publico`, `descripcion`, `grado`, `seccion`) VALUES
(2, 59, 'docente', 'docente', '1/11/2021', 'aaaa', 'bbbb', 'ccc', 'dddd', 'eee', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '10/11/2021', '1', 'prueba de matematica\r\n', '4', 'a'),
(3, 59, 'docente', 'docente', '1/11/2021', 'venezuela', 'prr', 'eeuu', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '10/11/2021', '1', 'geografia', '4', 'a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `id` int(200) NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_estudiante` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `id_evaluacion` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `respuesta1` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `respuesta2` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `respuesta3` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `respuesta4` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `respuesta5` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `respuesta6` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `respuesta7` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `respuesta8` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `respuesta9` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `respuesta10` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `respuesta11` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `respuesta12` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `respuesta13` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `respuesta14` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `respuesta15` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `respuesta16` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `respuesta17` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `respuesta18` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `respuesta19` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `respuesta20` varchar(500) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `grado` varchar(2) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `seccion` varchar(2) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`id`, `nombres`, `apellidos`, `id_estudiante`, `id_evaluacion`, `fecha`, `respuesta1`, `respuesta2`, `respuesta3`, `respuesta4`, `respuesta5`, `respuesta6`, `respuesta7`, `respuesta8`, `respuesta9`, `respuesta10`, `respuesta11`, `respuesta12`, `respuesta13`, `respuesta14`, `respuesta15`, `respuesta16`, `respuesta17`, `respuesta18`, `respuesta19`, `respuesta20`, `grado`, `seccion`) VALUES
(14, 'Alexis', 'Andrade', '64', '2', '2021-11-29', 'aaaaaaaaaaaaaa', 'aaaaaaaaa', 'aaaaaaaaa', 'aaaaaaaaaaaaaaaa', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4', 'A'),
(15, 'Valeria', 'Duque', '66', '2', '2021-11-29', 'bbb', 'ccc', 'd', 'g', 'g', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4', 'A'),
(16, 'Alexis', 'Andrade', '64', '3', '2021-11-29', 'latinoamerica', 'puerto rico', 'estados unidos', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4', 'A'),
(17, 'Valeria', 'Duque', '66', '3', '2021-11-29', 'latinoameria', 'puerto rico', 'estados unidos', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(200) NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rol` int(2) NOT NULL,
  `grado` varchar(2) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `seccion` varchar(2) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `clave`, `rol`, `grado`, `seccion`) VALUES
(2, 'Director', 'Director', 'admin', 1, '', ''),
(59, 'Docente', 'Docente', 'Docente', 2, '0', '0'),
(61, 'Estudiante1', 'Estudiante1', '123', 3, '4', 'a'),
(64, 'Alexis', 'Andrade', 'Alexis', 3, '4', 'A'),
(65, 'Freider', 'Bustamante', 'Freider', 3, '4', 'A'),
(66, 'Valeria', 'Duque', 'Valeria', 3, '4', 'A'),
(67, 'Sofia', 'Duque', 'Sofia', 3, '4', 'A'),
(68, 'Kevin', 'Duque', 'Kevin', 3, '4', 'A'),
(70, 'Aranza', 'Florez', 'Aranza', 3, '4', 'A'),
(71, 'Jeannys', 'Gamboa', 'Jeannys', 3, '4', 'A'),
(72, 'Breinyer', 'GarcÃ­a', 'Breinyer', 3, '4', 'A'),
(73, 'Yosser', 'Guerrero', 'Yosser', 3, '4', 'A'),
(74, 'Marian', 'HernÃ¡ndez', 'Marian', 3, '4', 'A'),
(75, 'Andres', 'HernÃ¡ndez', 'Andres', 3, '4', 'A'),
(76, 'Jesus', 'Marquez', 'Jesus', 3, '4', 'A'),
(77, 'Branyerlith', 'MÃ©ndez', 'Branyerlith', 3, '4', 'A'),
(78, 'Yanesky', 'Moreira', 'Yanesky', 3, '4', 'A'),
(79, 'Shaneyla', 'NuÃ±ez', 'Shaneyla', 3, '4', 'A'),
(80, 'Darwin', 'Oliveros', 'Darwin', 3, '4', 'A'),
(81, 'Jonaiker', 'OmaÃ±a', 'Jonaiker', 3, '4', 'A'),
(82, 'Maykol', 'PÃ©rez', 'Maykol', 3, '4', 'A'),
(83, 'Juan', 'Pico', 'Juan', 3, '4', 'A'),
(84, 'Briannys', 'Prato', 'Briannys', 3, '4', 'A'),
(85, 'Kevin David', 'RincÃ³n', 'KevinDavid', 3, '4', 'A'),
(86, 'Rosbely', 'Rivera', 'Rosbely', 3, '4', 'A'),
(87, 'Isabela', 'Rujano', 'Isabela', 3, '4', 'A'),
(88, 'Yeliser', 'Solano', 'Yeliser', 3, '4', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
