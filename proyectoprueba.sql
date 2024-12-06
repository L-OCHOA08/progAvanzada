-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2024 a las 07:33:24
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoprueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Contraseña` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`ID`, `Nombre`, `Correo`, `Contraseña`) VALUES
(1, 'lean', 'leanadmin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `ID_pedido` int(11) NOT NULL,
  `pizzaNombre` varchar(30) NOT NULL,
  `cantidad` varchar(2) NOT NULL,
  `precioTotal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`ID_pedido`, `pizzaNombre`, `cantidad`, `precioTotal`) VALUES
(17, 'Tribeca', '1', '5500'),
(18, 'Tribeca', '1', '5500'),
(19, 'Four Seasons', '1', '4000'),
(20, 'Suprema', '1', '5500'),
(21, 'Suprema', '2', '11000'),
(22, 'Suprema', '2', '11000'),
(23, 'Four Seasons', '1', '4000'),
(24, 'Suprema', '3', '16500'),
(25, 'Suprema', '3', '16500'),
(26, 'Suprema', '3', '16500'),
(27, 'Suprema', '3', '16500'),
(28, 'Four Seasons', '1', '4000'),
(29, 'Suprema', '2', '11000'),
(30, 'Suprema', '2', '11000'),
(31, 'Four Seasons', '1', '4000'),
(32, 'Suprema', '1', '5500'),
(33, 'Suprema', '1', '5500'),
(34, 'Four Seasons', '1', '4000'),
(35, 'Four Cheese', '2', '9000'),
(36, 'Four Cheese', '2', '9000'),
(37, 'Four Seasons', '2', '8000'),
(38, 'Suprema', '1', '5500'),
(39, 'Suprema', '1', '5500'),
(40, 'Four Cheese', '3', '13500'),
(41, 'Suprema', '1', '5500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `Nombre`, `Correo`, `Contraseña`) VALUES
(30, 'usuario1', 'usuario1@gmail.com', '12345@'),
(33, 'Alan', 'alan@gmail.com', 'alan123@'),
(34, 'Pedro', 'pedro@gmail.com', 'pedro123@');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`ID_pedido`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `ID_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
