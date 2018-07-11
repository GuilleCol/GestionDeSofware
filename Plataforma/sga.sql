-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2018 a las 23:23:24
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sga`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `ID_Horario` int(11) NOT NULL COMMENT 'identificador autonumerable',
  `codigo` int(11) NOT NULL COMMENT 'codigo del usuario',
  `curso` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'numero de curso o nivel de escolaridad',
  `grupo` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'grupo de la materia ',
  `ID_materia` int(11) NOT NULL COMMENT 'Materia asignada al usuario',
  `nivel` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `lunes` time DEFAULT NULL COMMENT 'Horario asignado al usuario',
  `martes` time DEFAULT NULL COMMENT 'Horario asignado al usuario',
  `miercoles` time DEFAULT NULL COMMENT 'Horario asignado al usuario',
  `jueves` time DEFAULT NULL COMMENT 'Horario asignado al usuario',
  `viernes` time DEFAULT NULL COMMENT 'Horario asignado al usuario',
  `ano` year(4) DEFAULT NULL COMMENT 'Horario asignado al usuario '
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`ID_Horario`, `codigo`, `curso`, `grupo`, `ID_materia`, `nivel`, `lunes`, `martes`, `miercoles`, `jueves`, `viernes`, `ano`) VALUES
(1, 5, 'TERCERO', 'A', 7, '', '00:00:00', '08:00:00', '08:00:00', '13:00:00', '13:00:00', 2018);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `ID_materia` int(11) NOT NULL COMMENT 'autonumerable consecutivo',
  `nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'nombre de la materia',
  `nivel` varchar(15) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'nivel de la materia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`ID_materia`, `nombre`, `nivel`) VALUES
(7, 'Matematicas', 'Bachillerato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `ID_notas` int(11) NOT NULL COMMENT 'identificador de notas',
  `ID_materia` int(11) NOT NULL COMMENT 'nombre de la materia',
  `codigo` int(11) NOT NULL COMMENT 'codigo del estudiante',
  `p1` int(11) DEFAULT NULL COMMENT 'porcentaje de nota',
  `nota1` int(11) DEFAULT NULL COMMENT 'nota registrada',
  `p2` int(11) DEFAULT NULL COMMENT 'porcentaje de nota',
  `nota2` int(11) DEFAULT NULL COMMENT 'nota registrada',
  `p3` int(11) DEFAULT NULL COMMENT 'porcentaje de nota',
  `nota3` int(11) DEFAULT NULL COMMENT 'nota registrada',
  `p4` int(11) DEFAULT NULL COMMENT 'porcentaje de nota',
  `nota4` int(11) DEFAULT NULL COMMENT 'nota registrada',
  `final` int(11) DEFAULT NULL COMMENT 'ponderado de notas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codigo` int(11) NOT NULL COMMENT 'Identificador de cada usuario',
  `clave` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Clave del usuario',
  `nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre del Usuario',
  `apellido` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Apellido del Usuario',
  `telefono` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Telefono del Usuario',
  `direccion` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Direccion del Usuario',
  `correo` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL COMMENT 'Direccion de Correo Electronico del Usuario',
  `tipo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo de Usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codigo`, `clave`, `nombre`, `apellido`, `telefono`, `direccion`, `correo`, `tipo`) VALUES
(4, '1', 'Luis Eduardo', 'Gutierrez', '12321', 'Calle 14B #119 A - 17 INTERIOR 2 APARTAMENTO 203', 'dasdsa@asd.com', 'Administrador'),
(5, '1', 'Fanny', 'Andres', '132', '123', '123@adsn.com', 'Estudiante'),
(6, '312', 'asd', 'ads', '123', 'ads', 'dasdsa@asd.com', 'Profesor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`ID_Horario`),
  ADD KEY `IXFK_Horario_Materia` (`ID_materia`),
  ADD KEY `IXFK_Horario_Usuario` (`codigo`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`ID_materia`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`ID_notas`),
  ADD KEY `IXFK_Notas_Materia` (`ID_materia`),
  ADD KEY `IXFK_Notas_Usuario` (`codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `ID_Horario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador autonumerable', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `ID_materia` int(11) NOT NULL AUTO_INCREMENT COMMENT 'autonumerable consecutivo', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `ID_notas` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador de notas';

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador de cada usuario', AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `FK_Horario_Materia` FOREIGN KEY (`ID_materia`) REFERENCES `materia` (`ID_materia`),
  ADD CONSTRAINT `FK_Horario_Usuario` FOREIGN KEY (`codigo`) REFERENCES `usuario` (`codigo`);

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `FK_Notas_Materia` FOREIGN KEY (`ID_materia`) REFERENCES `materia` (`ID_materia`),
  ADD CONSTRAINT `FK_Notas_Usuario` FOREIGN KEY (`codigo`) REFERENCES `usuario` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
