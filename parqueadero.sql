-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2021 a las 00:29:14
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parqueadero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celda`
--

CREATE TABLE `celda` (
  `id_celda` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `celda`
--

INSERT INTO `celda` (`id_celda`, `tipo`, `estado`) VALUES
(1, 'Camioneta', 1),
(2, 'Camión', 1),
(3, 'Automovil', 0),
(4, 'Camión', 1),
(5, 'Moto', 0),
(6, 'Moto', 0),
(7, 'Moto', 0),
(8, 'Camión', 0),
(9, 'Automóvil', 0),
(10, 'Automóvil', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id_pago` int(11) NOT NULL,
  `mes` varchar(20) NOT NULL,
  `id_precios` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id_pago`, `mes`, `id_precios`, `id_usuarios`) VALUES
(1, 'febrero', 1, 1),
(2, 'Diciembre', 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE `precios` (
  `id_precios` int(11) NOT NULL,
  `costo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`id_precios`, `costo`) VALUES
(1, 15000),
(2, 20000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_registro` int(11) NOT NULL,
  `celda` int(11) NOT NULL,
  `placa_veh` varchar(6) NOT NULL,
  `hora_llegara` datetime NOT NULL,
  `hora_salida` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_registro`, `celda`, `placa_veh`, `hora_llegara`, `hora_salida`) VALUES
(1, 1, 'VDF124', '2021-11-03 00:35:12', '2021-11-25 00:35:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(100) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `cedula` varchar(12) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `telefono_se` varchar(15) DEFAULT NULL,
  `direccion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombre`, `apellido`, `cedula`, `telefono`, `telefono_se`, `direccion`) VALUES
(1, 'Andres ', 'Leonardo', '1030598021', '313 545 7857', '312 458 7887', 'Calle 6'),
(2, 'Cristian', 'Hernandez', '1234556', '312554785', '31452541', 'Calle tercera'),
(3, 'Jairo', 'Ramirez', '564258', '312456789', '312458895', 'Calle 6 N 7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `placa` varchar(6) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `marca` varchar(15) NOT NULL,
  `color` varchar(12) NOT NULL,
  `id_celda` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`placa`, `tipo`, `marca`, `color`, `id_celda`, `id_usuarios`) VALUES
('123awe', 'Camión', 'asus', 'verde', 3, 1),
('BMW145', 'Moto', 'hynday', 'Rojo', 2, 2),
('KOL123', 'Camioneta', 'BMW', 'Azul', 4, 3),
('VDF124', 'Camioneta', 'Mazda', 'NEgro', 1, 1),
('VDF125', 'Camioneta', 'Mazda', '', 7, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `celda`
--
ALTER TABLE `celda`
  ADD PRIMARY KEY (`id_celda`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id_pago`),
  ADD KEY `id_precios` (`id_precios`),
  ADD KEY `id_usuarios` (`id_usuarios`);

--
-- Indices de la tabla `precios`
--
ALTER TABLE `precios`
  ADD PRIMARY KEY (`id_precios`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_registro`),
  ADD KEY `celda` (`celda`),
  ADD KEY `placa_veh` (`placa_veh`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`placa`),
  ADD KEY `id_usuarios` (`id_usuarios`),
  ADD KEY `id_celda` (`id_celda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`id_precios`) REFERENCES `precios` (`id_precios`),
  ADD CONSTRAINT `pago_ibfk_2` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id_usuarios`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`celda`) REFERENCES `celda` (`id_celda`),
  ADD CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`placa_veh`) REFERENCES `vehiculo` (`placa`);

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id_usuarios`),
  ADD CONSTRAINT `vehiculo_ibfk_2` FOREIGN KEY (`id_celda`) REFERENCES `celda` (`id_celda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
