-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2018 a las 03:29:26
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empleostics`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `busquedas`
--

CREATE TABLE `busquedas` (
  `idBusqueda` int(11) NOT NULL,
  `idRubro` int(11) NOT NULL,
  `empresa` varchar(150) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `descripcion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `busquedas`
--

INSERT INTO `busquedas` (`idBusqueda`, `idRubro`, `empresa`, `titulo`, `descripcion`) VALUES
(1, 1, 'Ticers', 'Se busca Técnico  ', 'Se busca tecnico para mantenimiento de base de datos'),
(2, 3, 'Lian y asociados', 'Puesto de Abogado Orientado a Comercio', 'Firma busca abogado orientado a leyes comerciales.-'),
(3, 4, 'Stilo', 'Stilo contrata estilistas', 'Se solicitan estilistas (F/M) con experiencia'),
(4, 2, 'Clinicas Moreno', 'Consultorio de pediatria disponible', 'Clinicas Moreno busca pediatras para consultorio de pediatria prenatal'),
(5, 5, 'Exppo', 'Ingeniero Civil experimentado', 'Se busca ingeniero experimentado como consultor de grupo'),
(6, 6, 'Plomeros Para Ud.', 'Plomero Patentado', 'Se busca plomero patentado para empresa de plomeria. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE `inscripciones` (
  `idInscripcion` int(11) NOT NULL,
  `idBusqueda` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `apellido` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inscripciones`
--

INSERT INTO `inscripciones` (`idInscripcion`, `idBusqueda`, `fecha`, `apellido`, `nombre`) VALUES
(3, 4, '2018-04-10', 'Capunta', 'Elsa'),
(4, 3, '2018-04-24', 'Nito del Bosque', 'Elena'),
(5, 1, '2018-04-12', 'Tilla', 'Aitor'),
(6, 2, '2018-03-06', 'Menta', 'Aitor'),
(7, 5, '2018-04-20', 'Bailo', 'Aquiles'),
(8, 6, '2018-04-22', 'Mesa', 'Zoila'),
(9, 1, '2018-03-02', 'Bronca', 'Armando'),
(10, 2, '2018-04-17', 'Pere', 'Gil'),
(11, 3, '2018-03-04', 'Ponte Alegre', 'Ramona'),
(12, 4, '2018-03-06', 'Del Campo', 'Flor'),
(13, 5, '2018-03-14', 'Tupido', 'Hess'),
(14, 6, '2018-03-26', 'Lomata Feliz', 'Jose');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rubros`
--

CREATE TABLE `rubros` (
  `idRubro` int(11) NOT NULL,
  `descripcion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rubros`
--

INSERT INTO `rubros` (`idRubro`, `descripcion`) VALUES
(1, 'Informatica'),
(2, 'Medicina'),
(3, 'abogacia'),
(4, 'Peluqueria'),
(5, 'Ingenieria'),
(6, 'Plomeria');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `busquedas`
--
ALTER TABLE `busquedas`
  ADD PRIMARY KEY (`idBusqueda`),
  ADD KEY `idRubro` (`idRubro`);

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`idInscripcion`),
  ADD KEY `idBusqueda` (`idBusqueda`);

--
-- Indices de la tabla `rubros`
--
ALTER TABLE `rubros`
  ADD PRIMARY KEY (`idRubro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `busquedas`
--
ALTER TABLE `busquedas`
  MODIFY `idBusqueda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  MODIFY `idInscripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `rubros`
--
ALTER TABLE `rubros`
  MODIFY `idRubro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `busquedas`
--
ALTER TABLE `busquedas`
  ADD CONSTRAINT `busquedas_ibfk_1` FOREIGN KEY (`idRubro`) REFERENCES `rubros` (`idRubro`);

--
-- Filtros para la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD CONSTRAINT `inscripciones_ibfk_1` FOREIGN KEY (`idBusqueda`) REFERENCES `busquedas` (`idBusqueda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
