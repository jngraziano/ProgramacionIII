-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2017 a las 15:48:14
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tp_estacionamiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocheras`
--

CREATE TABLE `cocheras` (
  `ID_COCHERA` int(11) NOT NULL,
  `NRO_COCHERA` int(11) NOT NULL,
  `TIPO` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `RESERVADO` int(11) NOT NULL,
  `ESTADO_ACTUAL` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `HABILITADA` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cocheras`
--

INSERT INTO `cocheras` (`ID_COCHERA`, `NRO_COCHERA`, `TIPO`, `RESERVADO`, `ESTADO_ACTUAL`, `HABILITADA`) VALUES
(1, 1, 'NORMAL', 0, 'OCUPADA', 1),
(2, 2, 'NORMAL', 0, 'LIBRE', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacionamientos`
--

CREATE TABLE `estacionamientos` (
  `ID_ESTACIONAMIENTO` int(11) NOT NULL,
  `PISOS` int(11) NOT NULL,
  `CANT_COCHERAS` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Tabla de Estacionamientos (con pisos y cant. cocheras)';

--
-- Volcado de datos para la tabla `estacionamientos`
--

INSERT INTO `estacionamientos` (`ID_ESTACIONAMIENTO`, `PISOS`, `CANT_COCHERAS`) VALUES
(1, 3, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE `logs` (
  `ID_LOG_EMPLEADO` int(11) NOT NULL,
  `NOMBRE_EMPLEADO` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `HORA_ENTRADA` time DEFAULT NULL,
  `HORA_SALIDA` time DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `logs`
--

INSERT INTO `logs` (`ID_LOG_EMPLEADO`, `NOMBRE_EMPLEADO`, `FECHA`, `HORA_ENTRADA`, `HORA_SALIDA`) VALUES
(1, 'LEANDRO', NULL, NULL, NULL),
(2, ':nombre', NULL, NULL, NULL),
(3, 'leandro', NULL, NULL, NULL),
(4, 'leandro', NULL, NULL, NULL),
(5, 'leandro', NULL, NULL, NULL),
(6, 'leandro', '2006-06-17', NULL, NULL),
(7, 'leandro', '2006-06-17', NULL, NULL),
(8, 'leandro', '2006-06-17', NULL, NULL),
(9, 'leandro', '2017-06-06', NULL, NULL),
(10, 'leandro', '2017-06-06', '23:49:57', NULL),
(11, NULL, '2017-06-06', '23:57:02', NULL),
(12, '$(', '2017-06-06', '23:58:21', NULL),
(13, NULL, '2017-06-06', '00:04:17', NULL),
(14, 'leandro', '2017-06-06', '00:04:50', NULL),
(15, 'leandro', '2017-06-06', '00:07:01', NULL),
(16, 'leandro', '2017-06-06', '00:08:16', NULL),
(17, 'empleado', '2017-06-06', '10:56:46', NULL),
(18, 'leandro', '2017-06-06', '11:32:52', NULL),
(19, 'empleado', '2017-06-06', '11:41:39', NULL),
(20, 'undefined', '2017-06-06', '11:58:25', NULL),
(21, 'undefined', '2017-06-06', '11:58:58', NULL),
(22, 'undefined', '2017-06-06', '12:01:24', NULL),
(23, 'undefined', '2017-06-06', '12:03:15', NULL),
(24, 'undefined', '2017-06-06', '12:04:11', NULL),
(25, 'undefined', '2017-06-06', '12:04:26', NULL),
(26, 'A', '2017-06-06', '12:05:44', NULL),
(27, 'leandro', '2017-06-06', '12:18:03', NULL),
(28, 'empleado', '2017-06-06', '12:18:11', NULL),
(29, 'empleado', '2017-06-06', '14:48:48', NULL),
(30, 'leandro', '2017-06-06', '14:54:17', NULL),
(31, 'leandro', '2017-06-06', '14:55:18', NULL),
(32, 'leandro', '2017-06-06', '14:56:05', NULL),
(33, 'leandro', '2017-06-06', '14:58:15', NULL),
(34, 'leandro', '2017-06-06', '14:58:32', NULL),
(35, 'leandro', '2017-06-06', '14:59:05', NULL),
(36, 'leandro', '2017-06-06', '14:59:55', NULL),
(37, 'leandro', '2017-06-06', '14:59:57', NULL),
(38, 'empleado', '2017-06-06', '15:01:39', NULL),
(39, 'jesus', '2017-06-06', '15:46:09', NULL),
(40, 'pedro', '2017-06-06', '15:46:28', NULL),
(41, 'jesus', '2017-06-06', '15:47:31', NULL),
(42, 'jesus', '2017-06-06', '15:47:35', NULL),
(43, 'jesus', '2017-06-06', '15:48:26', NULL),
(44, 'jesus', '2017-06-06', '15:49:59', NULL),
(45, 'jesus', '2017-06-06', '15:50:00', NULL),
(46, 'jesus', '2017-06-06', '15:50:01', NULL),
(47, 'jesus', '2017-06-06', '15:50:01', NULL),
(48, 'jesus', '2017-06-06', '15:50:01', NULL),
(49, 'jesus', '2017-06-06', '15:50:04', NULL),
(50, 'jesus', '2017-06-06', '15:50:05', NULL),
(51, 'jesus', '2017-06-06', '15:50:05', NULL),
(52, 'jesus', '2017-06-06', '15:50:05', NULL),
(53, 'jesus', '2017-06-06', '15:50:05', NULL),
(54, 'jesus', '2017-06-06', '15:50:05', NULL),
(55, 'jesus', '2017-06-06', '15:50:14', NULL),
(56, 'jesus', '2017-06-06', '15:51:00', NULL),
(57, 'jesus', '2017-06-06', '15:51:41', NULL),
(58, 'jesus', '2017-06-06', '15:52:41', NULL),
(59, 'empleado1', '2017-06-06', '15:56:34', NULL),
(60, 'leandro', '2017-06-06', '16:24:13', NULL),
(61, 'empleado1', '2017-06-06', '16:24:27', NULL),
(62, 'empleado1', '2017-06-06', '16:56:21', NULL),
(63, NULL, NULL, '18:05:20', NULL),
(64, NULL, NULL, '18:07:32', NULL),
(65, NULL, NULL, '18:09:11', NULL),
(66, NULL, NULL, '18:09:16', NULL),
(67, NULL, NULL, '18:09:32', NULL),
(68, NULL, NULL, '18:10:24', NULL),
(69, NULL, NULL, '18:10:34', NULL),
(70, NULL, NULL, '18:10:35', NULL),
(71, NULL, NULL, '18:11:22', NULL),
(72, NULL, NULL, '18:11:24', NULL),
(73, 'empleado', '2017-06-06', '18:13:18', NULL),
(74, 'empleado1', '2017-06-06', '18:13:26', NULL),
(75, 'empleado1', '2017-06-06', '18:34:37', NULL),
(76, 'empleado1', '2017-06-06', '18:37:46', NULL),
(77, 'empleado1', '2017-06-06', '18:38:33', NULL),
(78, 'empleado1', '2017-06-06', '18:52:32', NULL),
(79, 'empleado1', '2017-06-06', '18:52:33', NULL),
(80, 'empleado1', '2017-06-06', '18:52:34', NULL),
(81, 'empleado1', '2017-06-06', '18:52:34', NULL),
(82, 'empleado1', '2017-06-06', '18:52:45', NULL),
(83, 'empleado1', '2017-06-06', '18:52:46', NULL),
(84, 'empleado1', '2017-06-06', '18:52:46', NULL),
(85, 'empleado1', '2017-06-06', '18:54:31', NULL),
(86, 'empleado1', '2017-06-06', '18:54:31', NULL),
(87, 'empleado', '2017-06-06', '18:54:41', NULL),
(88, 'empleado1', '2017-06-06', '18:54:48', NULL),
(89, 'empleado1', '2017-06-06', '18:58:08', NULL),
(90, 'empleado', '2017-06-06', '18:58:30', NULL),
(91, 'empleado1', '2017-06-06', '18:58:35', NULL),
(92, 'empleado1', '2017-06-06', '18:59:37', NULL),
(93, 'empleado1', '2017-06-06', '19:07:25', NULL),
(94, 'empleado1', '2017-06-06', '19:10:53', NULL),
(95, 'emeelele', '2017-06-06', '19:23:16', NULL),
(96, 'empleado1', '2017-06-06', '19:23:23', NULL),
(97, 'empleado1', '2017-06-06', '19:23:29', NULL),
(98, 'jorge', '2017-06-06', '19:44:08', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operaciones`
--

CREATE TABLE `operaciones` (
  `ID_OPERACION` int(11) NOT NULL,
  `ID_COCHERA` int(11) DEFAULT NULL,
  `PATENTE` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ID_EMPLEADO` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `HORA_INGRESO` time DEFAULT NULL,
  `HORA_SALIDA` time DEFAULT NULL,
  `CANT_HORAS` int(11) DEFAULT NULL,
  `ID_TARIFA` int(11) DEFAULT NULL,
  `IMPORTE` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `operaciones`
--

INSERT INTO `operaciones` (`ID_OPERACION`, `ID_COCHERA`, `PATENTE`, `ID_EMPLEADO`, `HORA_INGRESO`, `HORA_SALIDA`, `CANT_HORAS`, `ID_TARIFA`, `IMPORTE`) VALUES
(1, 1, '1', '2', '15:39:43', '00:00:00', 0, 1, 0),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 2, 'a', 'empleado1', '19:42:48', NULL, NULL, NULL, NULL),
(4, 2, 'a', 'jorge', '19:46:06', NULL, NULL, NULL, NULL),
(5, 2, 'a', 'jorge', '19:48:37', NULL, NULL, NULL, NULL),
(6, 2, 'a', 'jorge', '19:52:36', NULL, NULL, NULL, NULL),
(7, 2, 'a', 'jorge', '19:53:47', NULL, NULL, NULL, NULL),
(8, 2, 'a', 'jorge', '19:54:23', NULL, NULL, NULL, NULL),
(9, 2, 'a', 'jorge', '19:55:19', NULL, NULL, NULL, NULL),
(10, 2, 'a', 'jorge', '19:57:19', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pisos`
--

CREATE TABLE `pisos` (
  `ID_PISO` int(11) NOT NULL,
  `HABILITADO` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pisos`
--

INSERT INTO `pisos` (`ID_PISO`, `HABILITADO`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas`
--

CREATE TABLE `tarifas` (
  `ID_TARIFA` int(11) NOT NULL,
  `DESC_TARIFA` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `IMPORTE` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tarifas`
--

INSERT INTO `tarifas` (`ID_TARIFA`, `DESC_TARIFA`, `IMPORTE`) VALUES
(1, 'HORA', 10),
(2, '1/2 ESTADIA', 90),
(3, 'ESTADIA', 170);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_EMPLEADO` int(11) NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `TURNO` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `PASSWORD` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `TIPO` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `ESTADO` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_EMPLEADO`, `NOMBRE`, `TURNO`, `PASSWORD`, `TIPO`, `ESTADO`) VALUES
(1, 'LEANDRO', 'SIN TURNO', '1234', 'ADMIN', 'HABILITADO'),
(2, 'EMPLEADO1', 'MAÑANA', '5678', 'EMPLEADO', 'HABILITADO'),
(3, 'JORGE', 'TARDE', '0001', 'EMPLEADO', 'HABILITADO'),
(4, 'PEDRO', 'NOCHE', '1010', 'EMPLEADO', 'HABILITADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `ID_VEHICULO` int(11) NOT NULL,
  `PATENTE` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `COLOR` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `MARCA` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `ESTADO` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`ID_VEHICULO`, `PATENTE`, `COLOR`, `MARCA`, `ESTADO`) VALUES
(1, 'A', 'ROJO', 'FORD', 'HABILITADO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cocheras`
--
ALTER TABLE `cocheras`
  ADD PRIMARY KEY (`ID_COCHERA`);

--
-- Indices de la tabla `estacionamientos`
--
ALTER TABLE `estacionamientos`
  ADD PRIMARY KEY (`ID_ESTACIONAMIENTO`);

--
-- Indices de la tabla `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`ID_LOG_EMPLEADO`);

--
-- Indices de la tabla `operaciones`
--
ALTER TABLE `operaciones`
  ADD PRIMARY KEY (`ID_OPERACION`);

--
-- Indices de la tabla `pisos`
--
ALTER TABLE `pisos`
  ADD PRIMARY KEY (`ID_PISO`);

--
-- Indices de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  ADD PRIMARY KEY (`ID_TARIFA`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_EMPLEADO`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`ID_VEHICULO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cocheras`
--
ALTER TABLE `cocheras`
  MODIFY `ID_COCHERA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `estacionamientos`
--
ALTER TABLE `estacionamientos`
  MODIFY `ID_ESTACIONAMIENTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `logs`
--
ALTER TABLE `logs`
  MODIFY `ID_LOG_EMPLEADO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
--
-- AUTO_INCREMENT de la tabla `operaciones`
--
ALTER TABLE `operaciones`
  MODIFY `ID_OPERACION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `pisos`
--
ALTER TABLE `pisos`
  MODIFY `ID_PISO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tarifas`
--
ALTER TABLE `tarifas`
  MODIFY `ID_TARIFA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_EMPLEADO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `ID_VEHICULO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;