-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-11-2024 a las 18:35:09
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admisiones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `usuario_id` int(50) NOT NULL,
  `tipo_documento` varchar(50) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `telefono` int(50) NOT NULL,
  `fecha_cita` date NOT NULL,
  `especialidad` varchar(50) NOT NULL,
  `valor_consulta` int(11) NOT NULL,
  `regimen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `usuario_id`, `tipo_documento`, `nombre_usuario`, `telefono`, `fecha_cita`, `especialidad`, `valor_consulta`, `regimen`) VALUES
(5, 134456554, 'RC', 'NEYMAR JR', 344556655, '2024-11-15', 'Nefrologia', 80000, 'contributivo'),
(6, 112233445, 'TI', 'MATIAS SANTOYO', 333445566, '2024-11-02', 'Medicina_Familiar', 25000, 'contributivo'),
(7, 333333, 'RC', 'MARIANITA GONZALEZ', 304567789, '2024-11-23', 'Urologia', 80000, 'subsidiado'),
(8, 114677896, 'TI', 'DANIEL HERRERA', 324456554, '2024-11-02', 'Urologia', 80000, 'contributivo'),
(9, 32445654, 'CC', 'OCTAVIO VERGARA', 322445665, '2024-11-02', 'Odontologia', 15000, 'subsidiado'),
(10, 1123455432, 'RC', 'MARIO GALVIS', 322443543, '2024-12-07', 'Cirugia_General', 70000, 'contributivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaborador`
--

CREATE TABLE `colaborador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`id`, `nombre`) VALUES
(1, 'Medicina_General'),
(2, 'Medicina_Familiar'),
(3, 'Cardiologia'),
(4, 'Nefrologia'),
(5, 'Urologia'),
(6, 'Ginecologia'),
(7, 'Odontologia'),
(8, 'Cirugia_General');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `documento` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo_documento` varchar(50) NOT NULL,
  `telefono` int(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`documento`, `nombre`, `tipo_documento`, `telefono`, `fecha_nacimiento`) VALUES
(333333, 'MARIANITA GONZALEZ', 'RC', 304567789, '2024-10-29'),
(32445654, 'OCTAVIO VERGARA', 'CC', 322445665, '2024-11-05'),
(112233445, 'MATIAS SANTOYO', 'TI', 333445566, '2024-11-09'),
(114677896, 'DANIEL HERRERA', 'TI', 324456554, '2024-11-03'),
(134456554, 'NEYMAR JR', 'RC', 344556655, '2024-11-07'),
(1123455432, 'MARIO GALVIS', 'RC', 322443543, '2024-11-08'),
(1143168963, 'ANDRES SANTOYO', 'CC', 322222222, '1999-04-29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `colaborador`
--
ALTER TABLE `colaborador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `colaborador`
--
ALTER TABLE `colaborador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`documento`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
