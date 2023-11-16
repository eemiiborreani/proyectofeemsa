-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2023 a las 02:30:26
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `project`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'fer', 'fee2342@gmail.com', 'admin333'),
(2, 'manuel', 'manuel@manuel.manuel', 'admin333');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camion`
--

CREATE TABLE `camion` (
  `matricula` varchar(100) NOT NULL,
  `partida` date NOT NULL,
  `llegada` date NOT NULL,
  `destino_camion` varchar(100) NOT NULL,
  `entregada` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `idCamionero` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `camion`
--

INSERT INTO `camion` (`matricula`, `partida`, `llegada`, `destino_camion`, `entregada`, `estado`, `idCamionero`) VALUES
('MION123', '1111-11-11', '2222-02-22', 'dwa', 'dwa', '', 0),
('MION1234', '2121-02-22', '0000-00-00', 'montevideo', 'Sin Realizar', '', 0),
('MION12345', '2121-02-22', '0000-00-00', 'rocha', 'Sin Realizar', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camionero`
--

CREATE TABLE `camionero` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `matriculaAsignada` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Camionero333'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `camionero`
--

INSERT INTO `camionero` (`id`, `username`, `matriculaAsignada`, `email`, `password`) VALUES
(13, 'fer', 'MION123', 'fernandovaccaro2006@gmai.com', 'camionero333'),
(15, 'manu', 'NETA123456', 'manu@manu.manu', 'camionero333'),
(17, 'ale', 'NETA123', 'juan', 'camionero333');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camioneta`
--

CREATE TABLE `camioneta` (
  `matricula` varchar(100) NOT NULL,
  `partida` date NOT NULL,
  `llegada` date NOT NULL,
  `destino` varchar(100) NOT NULL,
  `entregada` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `idCamionero` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `camioneta`
--

INSERT INTO `camioneta` (`matricula`, `partida`, `llegada`, `destino`, `entregada`, `estado`, `idCamionero`) VALUES
('NETA123', '1111-11-11', '2222-02-22', 'veracierto', 'pendiente', '', 0),
('NETA1234', '0000-00-00', '0000-00-00', 'rocha', 'Sin Realizada', '', 0),
('NETA12345', '2121-12-31', '0000-00-00', 'florida', 'sin realizar', '', 0),
('NETA123456', '2424-02-24', '0000-00-00', 'montevideo', 'pendiente', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL DEFAULT 'fun333'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `funcionario`
--

INSERT INTO `funcionario` (`id`, `username`, `email`, `password`) VALUES
(1, 'fer', 'juan51@gmail,com', 'fun333'),
(4, 'manu', 'manu', 'fun333');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `loteinicial`
--

CREATE TABLE `loteinicial` (
  `id` int(100) NOT NULL,
  `almacen` varchar(100) NOT NULL,
  `matriculaCamion` varchar(100) NOT NULL,
  `fechaSalida` date NOT NULL,
  `entregada` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `loteinicial`
--

INSERT INTO `loteinicial` (`id`, `almacen`, `matriculaCamion`, `fechaSalida`, `entregada`) VALUES
(14, 'veracierto', 'MION123', '1212-12-12', 'Sin Realizar'),
(15, 'alma3', 'MION123', '2222-02-22', 'Sin Realizar'),
(16, 'veracierto', 'MION123', '1221-12-12', 'Sin Realizar'),
(17, 'veracierto', 'MION1234', '1212-12-12', 'Sin Realizar'),
(18, 'cata', 'MION12345', '1212-12-12', 'Sin Realizar'),
(19, 'veracierto', 'MION123', '2121-02-22', 'Sin Realizar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete`
--

CREATE TABLE `paquete` (
  `id` int(100) NOT NULL,
  `destino` varchar(100) NOT NULL,
  `salida` varchar(100) NOT NULL,
  `entrega` varchar(100) NOT NULL,
  `matriculaCamioneta` varchar(100) NOT NULL,
  `idLote` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paquete`
--

INSERT INTO `paquete` (`id`, `destino`, `salida`, `entrega`, `matriculaCamioneta`, `idLote`) VALUES
(32, 'hsf', 'gesf', 'Sin Realizar', 'sin asignar', '14'),
(34, 'fwa', 'gawd', 'Sin Realizar', 'sin asignar', '14'),
(36, 'dawd', 'dawd', 'Realizado', 'NETA123', 'sin asignar'),
(39, 'wef', 'feaf', 'sin realizar', 'NETA123', '14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(10, 'fernando', 'fernandoezequiel2006@gmail.com', 'fer'),
(11, 'fer', 'fer111@gmail.com', 'fe'),
(12, 'ale', 'hrdgred@gmial.com', '12'),
(16, 'juan', 'navadian2403@gmail.com', 'dwa'),
(17, 'manuel', 'manuel@gmail.com', 'manuel'),
(19, 'manu', 'manu@manu.manu', 'manu');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `camion`
--
ALTER TABLE `camion`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `camionero`
--
ALTER TABLE `camionero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `camioneta`
--
ALTER TABLE `camioneta`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `loteinicial`
--
ALTER TABLE `loteinicial`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paquete`
--
ALTER TABLE `paquete`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `camionero`
--
ALTER TABLE `camionero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `loteinicial`
--
ALTER TABLE `loteinicial`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `paquete`
--
ALTER TABLE `paquete`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
