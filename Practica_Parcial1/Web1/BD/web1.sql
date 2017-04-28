-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2017 a las 16:24:57
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concesionaria`
--

CREATE TABLE `concesionaria` (
  `Numero` int(10) NOT NULL,
  `Nombre` varchar(30) COLLATE utf16_spanish2_ci NOT NULL,
  `Domicilio` varchar(30) COLLATE utf16_spanish2_ci NOT NULL,
  `Localidad` varchar(30) COLLATE utf16_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

--
-- Volcado de datos para la tabla `concesionaria`
--

INSERT INTO `concesionaria` (`Numero`, `Nombre`, `Domicilio`, `Localidad`) VALUES
(1, 'OrganizacionSur', 'Hipólito Yrigoyen 3119', 'Avellaneda'),
(2, 'Taraborelli', 'Córdoba 366', 'Capital'),
(3, 'Dietrich', 'Cerrito 1591', 'Capital');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `pNumero` int(10) NOT NULL,
  `pMarca` varchar(30) COLLATE utf16_spanish2_ci NOT NULL,
  `Precio` float NOT NULL,
  `Tipo` varchar(30) COLLATE utf16_spanish2_ci NOT NULL,
  `Modelo` varchar(30) COLLATE utf16_spanish2_ci NOT NULL,
  `Año` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`pNumero`, `pMarca`, `Precio`, `Tipo`, `Modelo`, `Año`) VALUES
(1, 'Ford', 140000, 'Utilitario', 'Saveiro', 2011),
(2, 'Volkswagen', 130000, 'Sport', 'GOLF', 2017),
(3, 'Renault', 8000, 'Familiar', 'KANGOO', 2009);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `concesionaria`
--
ALTER TABLE `concesionaria`
  ADD PRIMARY KEY (`Numero`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`pNumero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `concesionaria`
--
ALTER TABLE `concesionaria`
  MODIFY `Numero` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `pNumero` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
